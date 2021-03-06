<?
include_once( "SpecialRecentchanges.php" );

function wfSpecialRecentchangeslinked()
{
	global $wgUser, $wgOut, $wgLang, $wgTitle;
	global $days, $limit, $target, $hideminor; # From query string
	$fname = "wfSpecialRecentchangeslinked";

	$wgOut->setPagetitle( wfMsg( "recentchanges" ) );
	$sk = $wgUser->getSkin();

	if ( "" == $target ) {
		$wgOut->errorpage( "notargettitle", "notargettext" );
		return;
	}
	$nt = Title::newFromURL( $target );
	$sub = str_replace( "$1", $nt->getPrefixedText(), wfMsg( "rclsub" ) );
	$wgOut->setSubtitle( $sub );

	if ( ! $days ) {
		$days = $wgUser->getOption( "rcdays" );
		if ( ! $days ) { $days = 7; }
	}
	if ( ! $limit ) {
		$limit = $wgUser->getOption( "rclimit" );
		if ( ! $limit ) { $limit = 100; }
	}
	$cutoff = date( "YmdHis", time() - ( $days * 86400 ) );

	if ( ! isset( $hideminor ) ) {
		$hideminor = $wgUser->getOption( "hideminor" );
	}
	if ( $hideminor ) {
		$mlink = $sk->makeKnownLink( $wgLang->specialPage( "Recentchangeslinked" ),
	  	  WfMsg( "show" ), "target=" . wfEscapeHTML( $nt->getPrefixedURL() ) .
		  "&days={$days}&limit={$limit}&hideminor=0" );
	} else {
		$mlink = $sk->makeKnownLink( $wgLang->specialPage( "Recentchangeslinked" ),
	  	  WfMsg( "hide" ), "target=" . wfEscapeHTML( $nt->getPrefixedURL() ) .
		  "&days={$days}&limit={$limit}&hideminor=1" );
	}
	if ( $hideminor ) {
		$cmq = "AND cur_minor_edit=0";
	} else { $cmq = ""; }

	$sql = "SELECT cur_id,cur_namespace,cur_title,cur_user,cur_comment," .
	  "cur_user_text,cur_timestamp,cur_minor_edit,cur_is_new FROM links, cur " .
	  "WHERE cur_timestamp > '{$cutoff}' {$cmq} AND l_to=cur_id AND l_from='" .
      wfStrencode( $nt->getPrefixedDBkey() ) . "' GROUP BY cur_id " .
	  "ORDER BY inverse_timestamp LIMIT {$limit}";
	$res = wfQuery( $sql, $fname );

	$note = str_replace( "$1", $limit, wfMsg( "rcnote" ) );
	$note = str_replace( "$2", $days, $note );
	$wgOut->addHTML( "<hr>\n{$note}\n<br>" );

	$tu = "target=" . $nt->getPrefixedURL();
	$note = rcDayLimitlinks( $days, $limit, "Recentchangeslinked", $tu );
	$wgOut->addHTML( "{$note}\n" );

	$s = $sk->beginRecentChangesList();
	$count = wfNumRows( $res );

	while ( $limit ) {
		if ( 0 == $count ) { break; }
		$obj = wfFetchObject( $res );
		--$count;

		$ts = $obj->cur_timestamp;
		$u = $obj->cur_user;
		$ut = $obj->cur_user_text;
		$ns = $obj->cur_namespace;
		$ttl = $obj->cur_title;
		$com = $obj->cur_comment;
		$me = ( $obj->cur_minor_edit > 0 );
		$new = ( $obj->cur_is_new > 0 );

		$s .= $sk->recentChangesLine( $ts, $u, $ut, $ns, $ttl, $com, $me, $new );
		--$limit;
	}
	$s .= $sk->endRecentChangesList();

	wfFreeResult( $res );
	$wgOut->addHTML( $s );
}

?>
