<?

function wfSpecialMovepage()
{
	global $wgUser, $wgOut, $action, $target;

	if ( 0 == $wgUser->getID() or $wgUser->isBlocked() ) {
		$wgOut->errorpage( "movenologin", "movenologintext" );
		return;
	}
	if ( wfReadOnly() ) {
		$wgOut->readOnlyPage();
		return;
	}
	$fields = array( "wpNewTitle", "wpOldTitle" );
	wfCleanFormFields( $fields );

	$f = new MovePageForm();

	if ( "success" == $action ) { $f->showSuccess(); }
	else if ( "submit" == $action ) { $f->doSubmit(); }
	else { $f->showForm( "" ); }
}

class MovePageForm {

	var $ot, $nt;		# Old, new Title objects
	var $ons, $nns;		# Namespaces
	var $odt, $ndt;		# Pagenames (dbkey form)
	var $oft, $nft;		# Full page titles (DBkey form)
	var $ofx, $nfx;		# Full page titles (Text form)
	var $oldid, $newid;	# "cur_id" field (yes, both from "cur")
	var $talkmoved = 0;
	
	function showForm( $err )
	{
		global $wgOut, $wgUser, $wgLang;
		global $wpNewTitle, $wpOldTitle, $wpMovetalk, $target;

		$wgOut->setPagetitle( wfMsg( "movepage" ) );

		if ( ! $wpOldTitle ) {
			$target = wfCleanQueryVar( $target );
			if ( "" == $target ) {
				$wgOut->errorpage( "notargettitle", "notargettext" );
				return;
			}
			$wpOldTitle = $target;
		}
		$ot = Title::newFromURL( $wpOldTitle );
		$ott = $ot->getPrefixedText();

		$wgOut->addWikiText( wfMsg( "movepagetext" ) );
		if ( ! Namespace::isTalk( $ot->getNamespace() ) )
			$wgOut->addWikiText( "\n\n" . wfMsg( "movepagetalktext" ) );

		$ma = wfMsg( "movearticle" );
		$newt = wfMsg( "newtitle" );
		$mpb = wfMsg( "movepagebtn" );
		$movetalk = wfMsg( "movetalk" );

		$action = wfLocalUrlE( $wgLang->specialPage( "Movepage" ),
		  "action=submit" );

		if ( "" != $err ) {
			$wgOut->setSubtitle( wfMsg( "formerror" ) );
			$wgOut->addHTML( "<p><font color='red' size='+1'>{$err}</font>\n" );
		}
		$wgOut->addHTML( "<p>
<form id=\"movepage\" method=\"post\" action=\"{$action}\">
<table border=0><tr>
<td align=right>{$ma}:</td>
<td align=left><strong>{$ott}</strong></td>
</tr><tr>
<td align=right>{$newt}:</td>
<td align=left>
<input type=text size=40 name=\"wpNewTitle\" value=\"{$wpNewTitle}\">
<input type=hidden name=\"wpOldTitle\" value=\"{$wpOldTitle}\">
</td>
</tr>" );

		if ( ! Namespace::isTalk( $ot->getNamespace() ) ) {
			$wgOut->addHTML(
"<tr>
<td align=right>
<input type=checkbox name=\"wpMovetalk\" checked value=\"1\">
</td><td>{$movetalk}</td>
</tr>" );
		}
		$wgOut->addHTML(
"<tr>
<td>&nbsp;</td><td align=left>
<input type=submit name=\"wpMove\" value=\"{$mpb}\">
</td></tr></table>
</form>\n" );

	}

	function doSubmit()
	{
		global $wgOut, $wgUser, $wgLang;
		global $wpNewTitle, $wpOldTitle, $wpMovetalk, $target;
		global $wgDeferredUpdateList;
		$fname = "MovePageForm::doSubmit";

		$this->ot = Title::newFromText( $wpOldTitle );
		$this->nt = Title::newFromText( $wpNewTitle );
		$this->ons = $this->ot->getNamespace();
		$this->nns = $this->nt->getNamespace();
		$this->odt = wfStrencode( $this->ot->getDBkey() );
		$this->ndt = wfStrencode( $this->nt->getDBkey() );
		$this->oft = wfStrencode( $this->ot->getPrefixedDBkey() );
		$this->nft = wfStrencode( $this->nt->getPrefixedDBkey() );
		$this->ofx = $this->ot->getPrefixedText();
		$this->nfx = $this->nt->getPrefixedText();

		$this->oldid = $this->ot->getArticleID();
		$this->newid = $this->nt->getArticleID();

		if ( strlen( trim( $this->ndt ) ) < 2 ) {
			$this->showForm( wfMsg( "articleexists" ) );
			return;
		}
		if ( ( ! Namespace::isMovable( $this->ons ) ) ||
			 ( "" == $this->odt ) ||
			 ( "" != $this->ot->getInterwiki() ) ||
		     ( ! Namespace::isMovable( $nns ) ) ||
			 ( "" == $this->ndt ) ||
			 ( "" != $this->nt->getInterwiki() ) ) {
			$this->showForm( wfMsg( "badarticleerror" ) );
			return;
		}
		# The move is allowed only if (1) the target doesn't exist, or
		# (2) the target is a redirect to the source, and has no history
		# (so we can undo bad moves right after they're done).

		if ( 0 != $this->newid ) { # Target exists; check for validity
			if ( ! $this->isValidTarget() ) {
				$this->showForm( wfMsg( "articleexists" ) );
				return;
			}
			$this->moveOverExistingRedirect();
		} else { # Target didn't exist, do normal move.
			$this->moveToNewTitle();
		}

		$this->updateWatchlists();

		$u = new SearchUpdate( $this->oldid, $this->nt->getPrefixedDBkey() );
		$u->doUpdate();
		$u = new SearchUpdate( $this->newid, $this->ot->getPrefixedDBkey(), "" );
		$u->doUpdate();

		# Move talk page if (1) the checkbox says to, (2) the source
		# and target namespaces are identical, (3) the namespaces are not
		# themselves talk namespaces, and of course (4) it exists.

		if ( ( 1 == $wpMovetalk ) &&
			 ( ! Namespace::isTalk( $this->ons ) ) &&
			 ( $this->ons == $this->nns ) ) {

			$this->ons = $this->nns = Namespace::getTalk( $this->ons );

			$this->ot = Title::newFromText( Title::makeName(
			  $this->ons, $wpOldTitle ) );
			$this->nt = Title::newFromText( Title::makeName(
			  $this->nns, $wpNewTitle ) );

			# odt, ndt, ofx, nfx remain the same

			$this->oft = wfStrencode( $this->ot->getPrefixedDBkey() );
			$this->nft = wfStrencode( $this->nt->getPrefixedDBkey() );

			$this->oldid = $this->ot->getArticleID();
			$this->newid = $this->nt->getArticleID();

			if ( 0 != $this->oldid ) {
				if ( 0 != $this->newid ) {
					if ( $this->isValidTarget() ) {
						$this->moveOverExistingRedirect();
						$this->talkmoved = 1;
					} else {
						$this->talkmoved = 'invalid';
					}
				} else {
					$this->moveToNewTitle();
					$this->talkmoved = 1;
				}
				$u = new SearchUpdate( $this->oldid, $this->nt->getPrefixedDBkey() );
				$u->doUpdate();
				$u = new SearchUpdate( $this->newid, $this->ot->getPrefixedDBkey(), "" );
				$u->doUpdate();
			}
		}
		$success = wfLocalUrl( $wgLang->specialPage( "Movepage" ),
		  "action=success&oldtitle=" . wfUrlencode( $this->ofx ) .
		  "&newtitle=" . wfUrlencode( $this->nfx ) .
		  "&talkmoved={$this->talkmoved}" );

		$wgOut->redirect( $success );
	}

	function showSuccess()
	{
		global $wgOut, $wgUser;
		global $newtitle, $oldtitle, $talkmoved;

		$wgOut->setPagetitle( wfMsg( "movepage" ) );
		$wgOut->setSubtitle( wfMsg( "pagemovedsub" ) );

		$fields = array( "oldtitle", "newtitle" );
		wfCleanFormFields( $fields );

		$text = str_replace( "$1", $oldtitle, wfMsg( "pagemovedtext" ) );
		$text = str_replace( "$2", $newtitle, $text );
		$wgOut->addWikiText( $text );

		if ( 1 == $talkmoved ) {
			$wgOut->addHTML( "\n<p>" . wfMsg( "talkpagemoved" ) );
		} elseif( 'invalid' == $talkmoved ) {
			$wgOut->addHTML( "\n<p><strong>" . wfMsg( "talkexists" ) . "</strong>" );
		} else {
			$ot = Title::newFromURL( $oldtitle );
			if ( ! Namespace::isTalk( $ot->getNamespace() ) ) {
				$wgOut->addHTML( "\n<p>" . wfMsg( "talkpagenotmoved" ) );
			}
		}
	}

	# Is the the existing target title valid?

	function isValidTarget()
	{
		$fname = "MovePageForm::isValidTarget";

		$sql = "SELECT cur_is_redirect,cur_text FROM cur " .
		  "WHERE cur_id={$this->newid}";
		$res = wfQuery( $sql, $fname );
		$obj = wfFetchObject( $res );

		if ( 0 == $obj->cur_is_redirect ) { return false; }

		if ( preg_match( "/\\[\\[\\s*([^\\]]*)]]/", $obj->cur_text, $m ) ) {
			$rt = Title::newFromText( $m[1] );
			if ( 0 != strcmp( wfStrencode( $rt->getPrefixedDBkey() ),
			  $this->oft ) ) {
				return false;
			}
		}
		$sql = "SELECT old_id FROM old WHERE old_namespace={$this->nns} " .
		  "AND old_title='{$this->ndt}'";
		$res = wfQuery( $sql, $fname );
		if ( 0 != wfNumRows( $res ) ) { return false; }

		return true;
	}

	# Move page to title which is presently a redirect to the source
	# page.  Handling link tables here is tricky.

	function moveOverExistingRedirect()
	{
		global $wgUser;
		$fname = "MovePageForm::moveOverExistingRedirect";
		$mt = wfMsg( "movedto" );

        $now = wfTimestampNow();
		$sql = "UPDATE cur SET cur_touched='{$now}'," .
		  "cur_namespace={$this->nns},cur_title='{$this->ndt}' " .
		  "WHERE cur_id={$this->oldid}";
		wfQuery( $sql, $fname );

		$sql = "UPDATE cur SET cur_touched='{$now}'," .
		  "cur_namespace={$this->ons},cur_title='{$this->odt}'," .
		  "cur_text='#REDIRECT [[{$this->nft}]]\n',cur_comment='" .
		  "{$mt} \\\"{$this->nft}\\\"',cur_user='" .  $wgUser->getID() .
		  "',cur_minor_edit=0,cur_counter=0,cur_restrictions=''," .
		  "cur_user_text='" . wfStrencode( $wgUser->getName() ) . "'," .
		  "cur_is_redirect=1,cur_is_new=0 WHERE cur_id={$this->newid}";
		wfQuery( $sql, $fname );

		$sql = "UPDATE old SET " .
		  "old_namespace={$this->nns},old_title='{$this->ndt}' WHERE " .
		  "old_namespace={$this->ons} AND old_title='{$this->odt}'";
		wfQuery( $sql, $fname );
		
		$sql = "UPDATE recentchanges SET ".
			"rc_namespace={$this->nns}, rc_title='{$this->ndt}' WHERE ".
			"rc_cur_id={$this->oldid}";
        wfQuery( $sql, $fname );

		$sql = "INSERT INTO recentchanges (rc_namespace,rc_title,
			rc_comment,rc_user,rc_user_text,rc_timestamp,
			rc_cur_time,rc_cur_id,rc_new)
			VALUES ({$this->ons},'{$this->odt}'," .
		  "'{$mt} \\\"{$this->nft}\\\"','" .
		  $wgUser->getID() . "','" . wfStrencode( $wgUser->getName() ) .
          "','{$now}','{$now}',{$this->newid},1)";
        wfQuery( $sql, $fname );

		# The only link from here should be the old redirect

		$sql = "DELETE FROM links WHERE l_from='{$this->nft}'";
		wfQuery( $sql, $fname );

		$sql = "UPDATE links SET l_from='{$this->nft}' WHERE l_from='{$this->oft}'";
		wfQuery( $sql, $fname );

		# Swap links.  Using MAXINT as a temp; if there's ever an article
		# with id 4294967295, this will fail, but I think that's pretty safe

		$sql = "UPDATE links SET l_to=4294967295 WHERE l_to={$this->oldid}";
		wfQuery( $sql, $fname );

		$sql = "UPDATE links SET l_to={$this->oldid} WHERE l_to={$this->newid}";
		wfQuery( $sql, $fname );

		$sql = "UPDATE links SET l_to={$this->newid} WHERE l_to=4294967295";
		wfQuery( $sql, $fname );

		# Note: the insert below must be after the updates above!

		$sql = "INSERT INTO links (l_from,l_to) VALUES ('{$this->oft}',{$this->oldid})";
		wfQuery( $sql, $fname );

		$sql = "UPDATE imagelinks SET il_from='{$this->nft}' WHERE il_from='{$this->oft}'";
		wfQuery( $sql, $fname );
	}

	# Move page to non-existing title.

	function moveToNewTitle()
	{
		global $wgUser;
		$fname = "MovePageForm::moveToNewTitle";
		$mt = wfMsg( "movedto" );

		$sql = "UPDATE cur SET cur_touched='{$now}'," .
		  "cur_namespace={$this->nns},cur_title='{$this->ndt}' " .
		  "WHERE cur_id={$this->oldid}";
		wfQuery( $sql, $fname );

		$now = wfTimestampNow();
		$won = wfInvertTimestamp( $now );
		$common = "{$this->ons},'{$this->odt}'," .
		  "'{$mt} \\\"{$this->nft}\\\"','" .
		  $wgUser->getID() . "','" . wfStrencode( $wgUser->getName() ) .
          "','{$now}'";
		$sql = "INSERT INTO cur (cur_namespace,cur_title," .
		  "cur_comment,cur_user,cur_user_text,cur_timestamp,inverse_timestamp," .
		  "cur_touched,cur_text,cur_is_redirect,cur_is_new) " .
		  "VALUES ({$common},'{$won}','{$now}','#REDIRECT [[{$this->nft}]]\n',1,1)";
		wfQuery( $sql, $fname );
		$this->newid = wfInsertId();

		$sql = "UPDATE old SET " .
		  "old_namespace={$this->nns},old_title='{$this->ndt}' WHERE " .
		  "old_namespace={$this->ons} AND old_title='{$this->odt}'";
		wfQuery( $sql, $fname );

        $sql = "UPDATE recentchanges SET ".
			"rc_namespace={$this->nns}, rc_title='{$this->ndt}' WHERE ".
			"rc_namespace={$this->ons} AND rc_title='{$this->odt}'";
        wfQuery( $sql, $fname );

		$sql = "INSERT INTO recentchanges (rc_namespace,rc_title,
			rc_comment,rc_user,rc_user_text,rc_timestamp,
			rc_cur_time,rc_cur_id,rc_new)
			VALUES ({$common},'{$now}',{$this->newid},1)";
        wfQuery( $sql, $fname );

		$sql = "UPDATE links SET l_from='{$this->nft}' WHERE l_from='{$this->oft}'";
		wfQuery( $sql, $fname );

		$sql = "UPDATE links SET l_to={$this->newid} WHERE l_to={$this->oldid}";
		wfQuery( $sql, $fname );

		$sql = "INSERT INTO links (l_from,l_to) VALUES ('{$this->oft}',{$this->oldid})";
		wfQuery( $sql, $fname );

		# Non-existent target may have had broken links to it; these must
		# now be removed and made into good links.

		$sql = "SELECT bl_from FROM brokenlinks WHERE bl_to='{$this->nft}'";
		$res = wfQuery( $sql, $fname );

		while ( $rec = wfFetchObject( $res ) ) {
			$lid = $rec->bl_from;
			$lt = wfStrencode( Article::nameOf( $lid ) );
			$sql = "INSERT INTO links (l_from,l_to) VALUES ('{$lt}',$this->oldid)";
			wfQuery( $sql, $fname );
		}
		$sql = "DELETE FROM brokenlinks WHERE bl_to='{$this->nft}'";
		wfQuery( $sql, $fname );

		$sql = "UPDATE imagelinks SET il_from='{$this->nft}' WHERE il_from='{$this->oft}'";
		wfQuery( $sql, $fname );
	}

	function updateWatchlists()
	{
		$oldnamespace = $this->ons & ~1;
		$newnamespace = $this->nns & ~1;
		$oldtitle = $this->odt;
		$newtitle = $this->ndt;

		if( $oldnamespace == $newnamespace and $oldtitle == $newtitle )
			return;

		$sql = "SELECT wl_user FROM watchlist
			WHERE wl_namespace={$oldnamespace} AND wl_title='{$oldtitle}'";
		$res = wfQuery( $sql, $fname );
		if( $s = wfFetchObject( $res ) ) {
			$sql = "REPLACE INTO watchlist (wl_user,wl_namespace,wl_title)
				VALUES ({$s->wl_user},{$newnamespace},'{$newtitle}')";
			while( $s = wfFetchObject( $res ) ) {
				$sql .= ",({$s->wl_user},{$newnamespace},'{$newtitle}')";
			}
			wfQuery( $sql, $fname );
		}
	}

}
?>
