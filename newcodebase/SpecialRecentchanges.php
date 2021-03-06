<?

function wfSpecialRecentchanges()
{
	global $wgUser, $wgOut, $wgLang, $wgTitle;
	global $days, $limit, $hideminor, $from, $hidebots; # From query string
	$fname = "wfSpecialRecentchanges";

	$sql = "SELECT MAX(rc_timestamp) AS lastmod FROM recentchanges";
	$res = wfQuery( $sql, $fname );
	$s = wfFetchObject( $res );
	$wgOut->checkLastModified( $s->lastmod );

	$rctext = wfMsg( "recentchangestext" );
	$sql = "SELECT cur_text FROM cur WHERE cur_namespace=4 AND cur_title='Recentchanges'";
	$res = wfQuery( $sql, $fname );
	if( ( $s = wfFetchObject( $res ) ) and ( $s->cur_text != "" ) ) {
		$rctext = $s->cur_text;
	}
	$wgOut->addWikiText( $rctext );

	if ( ! $days ) {
		$days = $wgUser->getOption( "rcdays" );
		if ( ! $days ) { $days = 3; }
	}
	if ( ! $limit ) {
		$limit = $wgUser->getOption( "rclimit" );
		if ( ! $limit ) { $limit = 100; }
	}
	$cutoff = date( "YmdHis", time() - ( $days * 86400 ) );
	if(preg_match('/^[0-9]{14}$/', $from) and $from > $cutoff) {
		$cutoff = $from;
	} else {
		unset($from);
	}

	$sk = $wgUser->getSkin();

	if ( ! isset( $hideminor ) ) {
		$hideminor = $wgUser->getOption( "hideminor" );
	}
	if ( $hideminor ) {
		$hidem = "AND rc_minor=0";
		$mlink = $sk->makeKnownLink( $wgLang->specialPage( "Recentchanges" ),
	  	  WfMsg( "show" ), "days={$days}&limit={$limit}&hideminor=0" );
	} else {
		$hidem = "";
		$mlink = $sk->makeKnownLink( $wgLang->specialPage( "Recentchanges" ),
	  	  WfMsg( "hide" ), "days={$days}&limit={$limit}&hideminor=1" );
	}
	
	if ( !isset( $hidebots ) ) {
		$hidebots = 1;
	}
	if( $hidebots ) {
		$hidem .= " AND rc_bot=0";
	}

	$uid = $wgUser->getID();
	$sql2 = "SELECT rc_cur_id,rc_namespace,rc_title,rc_user,rc_new," .
	  "rc_comment,rc_user_text,rc_timestamp,rc_minor,rc_this_oldid,rc_last_oldid,rc_bot" . ($uid ? ",wl_user" : "") . " FROM recentchanges " .
	  ($uid ? "LEFT OUTER JOIN watchlist ON wl_user={$uid} AND wl_title=rc_title AND wl_namespace=rc_namespace & 65534 " : "") .
	  "WHERE rc_timestamp > '{$cutoff}' {$hidem} " .
	  "ORDER BY rc_timestamp DESC LIMIT {$limit}";
	$res = wfQuery( $sql2, $fname );

	if(isset($from)) {
		$note = str_replace( "$1", $limit, wfMsg( "rcnotefrom" ) );
		$note = str_replace( "$2", $wgLang->timeanddate( $from, true ), $note );
	} else {
		$note = str_replace( "$1", $limit, wfMsg( "rcnote" ) );
		$note = str_replace( "$2", $days, $note );
	}
	$wgOut->addHTML( "\n<hr>\n{$note}\n<br>" );

	$note = rcDayLimitLinks( $days, $limit );

	$now = date( "YmdHis" );
	$note .= "<br>\n" . str_replace( "$1",
	  $sk->makeKnownLink( $wgLang->specialPage( "Recentchanges" ),
	  $wgLang->timeanddate( $now, true ), "from=$now" ),
	  wfMsg( "rclistfrom" ) );

	$wgOut->addHTML( "{$note}\n" );

	$count1 = wfNumRows( $res );
	$obj1 = wfFetchObject( $res );

	$s = $sk->beginRecentChangesList();
	while ( $limit ) {
		if ( ( 0 == $count1 ) ) { break; }

			$ts = $obj1->rc_timestamp;
			$u = $obj1->rc_user;
			$ut = $obj1->rc_user_text;
			$ns = $obj1->rc_namespace;
			$ttl = $obj1->rc_title;
			$com = $obj1->rc_comment;
			$me = ( $obj1->rc_minor > 0 );
			$new = ( $obj1->rc_new > 0 );
			$watched = ($obj1->wl_user > 0);
			$oldid = $obj1->rc_this_oldid ;
			$diffid = $obj1->rc_last_oldid ;

			$obj1 = wfFetchObject( $res );
			--$count1;
		if ( ! ( $hideminor && $me ) ) {
			$s .= $sk->recentChangesLine( $ts, $u, $ut, $ns, $ttl,
			  $com, $me, $new, $watched, $oldid , $diffid );
			--$limit;
		}
	}
	$s .= $sk->endRecentChangesList();

	wfFreeResult( $res );
	$wgOut->addHTML( $s );
}

function rcCountLink( $lim, $d, $page="Recentchanges", $more="" )
{
	global $wgUser, $wgLang;
	$sk = $wgUser->getSkin();
	$s = $sk->makeKnownLink( $wgLang->specialPage( $page ),
	  ($lim ? "{$lim}" : wfMsg( "all" ) ), "{$more}" .
	  ($d ? "days={$d}&" : "") . "limit={$lim}" );
	return $s;
}

function rcDaysLink( $lim, $d, $page="Recentchanges", $more="" )
{
	global $wgUser, $wgLang;
	$sk = $wgUser->getSkin();
	$s = $sk->makeKnownLink( $wgLang->specialPage( $page ),
	  ($d ? "{$d}" : wfMsg( "all" ) ), "{$more}days={$d}" .
	  ($lim ? "&limit={$lim}" : "") );
	return $s;
}

function rcDayLimitLinks( $days, $limit, $page="Recentchanges", $more="", $doall = false )
{
	if ($more != "") $more .= "&";
	$cl = rcCountLink( 50, $days, $page, $more ) . " | " .
	  rcCountLink( 100, $days, $page, $more  ) . " | " .
	  rcCountLink( 250, $days, $page, $more  ) . " | " .
	  rcCountLink( 500, $days, $page, $more  ) .
	  ( $doall ? ( " | " . rcCountLink( 0, $days, $page, $more ) ) : "" );
	$dl = rcDaysLink( $limit, 1, $page, $more  ) . " | " .
	  rcDaysLink( $limit, 3, $page, $more  ) . " | " .
	  rcDaysLink( $limit, 7, $page, $more  ) . " | " .
	  rcDaysLink( $limit, 14, $page, $more  ) . " | " .
	  rcDaysLink( $limit, 30, $page, $more  ) .
	  ( $doall ? ( " | " . rcDaysLink( $limit, 0, $page, $more ) ) : "" );
	$note = str_replace( "$1", $cl, wfMsg( "rclinks" ) );
	$note = str_replace( "$2", $dl, $note );
	$note = str_replace( "$3", $mlink, $note );
	return $note;
}

function rcLimitLinks( $page="Recentchanges", $more="", $doall = false )
{
	if ($more != "") $more .= "&";
	$cl = rcCountLink( 50, 0, $page, $more ) . " | " .
	  rcCountLink( 100, 0, $page, $more  ) . " | " .
	  rcCountLink( 250, 0, $page, $more  ) . " | " .
	  rcCountLink( 500, 0, $page, $more  ) .
	  ( $doall ? ( " | " . rcCountLink( 0, $days, $page, $more ) ) : "" );
	$note = str_replace( "$1", $cl, wfMsg( "rclinks" ) );
	$note = str_replace( "$3", $mlink, $note );
	return $note;
}

?>
