<?

function wfSpecialListusers()
{
	global $wgUser, $wgOut, $wgLang, $offset, $limit;

	if ( ! $limit ) {
		$limit = $wgUser->getOption( "rclimit" );
		if ( ! $limit ) { $limit = 50; }
	}
	if ( ! $offset ) { $offset = 0; }

	$top = wfShowingResults( $offset, $limit );
	$wgOut->addHTML( "<p>{$top}\n" );

	$sl = wfViewPrevNext( $offset, $limit,
	  $wgLang->specialPage( "Listusers" ) );
	$wgOut->addHTML( "<br>{$sl}\n<ol start=" . ( $offset + 1 ) . ">" );

	$sql = "SELECT user_name,user_rights FROM user ORDER BY " .
	  "user_name LIMIT {$offset}, {$limit}";
	$res = wfQuery( $sql, "wfSpecialListusers" );

	$sk = $wgUser->getSkin();
	while ( $s = wfFetchObject( $res ) ) {
		$n = $s->user_name;
		$r = $s->user_rights;

		$l = $sk->makeLink( $wgLang->getNsText(
		  Namespace::getUser() ) . ":{$n}", $n );

		if ( "" != $r ) {
			$link = $sk->makeKnownLink( wfMsg( "administrators" ), $r );
			$l .= " ({$link})";
		}
		$wgOut->addHTML( "<li>{$l}</li>\n" );
	}
	wfFreeResult( $res );
	$wgOut->addHTML( "</ol><p>{$sl}\n" );
}

?>
