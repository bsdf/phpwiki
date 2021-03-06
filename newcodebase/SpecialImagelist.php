<?

function wfSpecialImagelist()
{
	global $wgUser, $wgOut, $wgLang, $sort, $limit;
	global $wpIlMatch, $wpIlSubmit;

	$fields = array( 'wpIlMatch' );
	wfCleanFormFields( $fields );

	$sql = "SELECT img_size,img_name,img_user,img_user_text," .
	  "img_description,img_timestamp FROM image";

	$byname = wfMsg( "byname" );
	$bydate = wfMsg( "bydate" );
	$bysize = wfMsg( "bysize" );

	if ( "bysize" == $sort ) {
		$sql .= " ORDER BY img_size DESC";
		$st = $bysize;
	} else if ( "byname" == $sort ) {
		if ( $wpIlMatch ) {
			$nt = Title::newFromUrl( $wpIlMatch );
			$m = wfStrencode( strtolower( $nt->getDBkey() ) );
			$m = str_replace( "%", "\\%", $m );
			$m = str_replace( "_", "\\_", $m );
			$sql .= " WHERE LCASE(img_name) LIKE '%{$m}%'";
		}
		$sql .= " ORDER BY img_name";
		$st = $byname;
	} else {
		$sql .= " ORDER BY img_timestamp DESC";
		$st = $bydate;
	}
	if ( ! isset( $limit ) ) { $limit = 50; }
	if ( 0 == $limit ) {
		$lt = wfMsg( "all" );
	} else {
		$lt = "${limit}";
		$sql .= " LIMIT {$limit}";
	}
	$wgOut->addHTML( "<p>" . wfMsg( "imglegend" ) . "\n" );

	$text = str_replace( "$1", "<strong>{$lt}</strong>",
	  wfMsg( "imagelisttext" ) );
	$text = str_replace( "$2", "<strong>{$st}</strong>", $text );
	$wgOut->addHTML( "<p>{$text}\n<p>" );

	$sk = $wgUser->getSkin();
	$cap = wfMsg( "ilshowmatch" );
	$sub = wfMsg( "ilsubmit" );
	$action = wfLocalUrlE( $wgLang->specialPage( "Imagelist" ),
	  "sort=byname&limit={$limit}" );

	$wgOut->addHTML( "<form id=\"imagesearch\" method=\"post\" action=\"" .
	  "{$action}\">" .
	  "{$cap}: <input type=text size=8 name=\"wpIlMatch\" value=\"\"> " .
	  "<input type=submit name=\"wpIlSubmit\" value=\"{$sub}\"></form>" );

	$nums = array( 50, 100, 250, 500 );
	$here = $wgLang->specialPage( "Imagelist" );

	$fill = "";
	$first = true;
	foreach ( $nums as $num ) {
		if ( ! $first ) { $fill .= " | "; }
		$first = false;

		$fill .= $sk->makeKnownLink( $here, "{$num}",
		  "sort=bysize&limit={$num}" );
	}
	$text = str_replace( "$1", $fill, wfMsg( "showlast" ) );
	$text = str_replace( "$2", $bysize, $text );
	$wgOut->addHTML( "{$text}<br>\n" );

	$fill = "";
	$first = true;
	foreach ( $nums as $num ) {
		if ( ! $first ) { $fill .= " | "; }
		$first = false;

		$fill .= $sk->makeKnownLink( $here, $num,
		  "sort=bydate&limit={$num}" );
	}
	$text = str_replace( "$1", $fill, wfMsg( "showlast" ) );
	$text = str_replace( "$2", $bydate, $text );
	$wgOut->addHTML( "{$text}<br>\n<p>" );

	$res = wfQuery( $sql, "wfSpecialImagelist" );
	while ( $s = wfFetchObject( $res ) ) {
		$name = $s->img_name;
		$ut = $s->img_user_text;
		if ( 0 == $s->img_user ) { $ul = $ut; }
		else { $ul = $sk->makeLink( $wgLang->getNsText(
		  Namespace::getUser() ) . ":{$ut}", $ut ); }

		$ilink = "<a href=\"" . wfImageUrl( $name ) .
		  "\">{$name}</a>";

		$nb = str_replace( "$1", $s->img_size, wfMsg( "nbytes" ) );
		$l = "(" .
		  $sk->makeKnownLink( $wgLang->getNsText(
		  Namespace::getImage() ) . ":{$name}", wfMsg( "imgdesc" ) ) .
		  ") {$ilink} . . {$nb} . . {$ul} . . " .
		  $wgLang->timeanddate( $s->img_timestamp, true );

		if ( "" != $s->img_description ) {
			$l .= " <em>({$s->img_description})</em>";
		}
		$wgOut->addHTML( "{$l}<br>\n" );
	}
	wfFreeResult( $res );
}

?>
