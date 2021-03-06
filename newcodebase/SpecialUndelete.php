<?

function wfSpecialUndelete( )
{
    global $wgLang, $wgUser, $wgOut, $action, $target, $timestamp, $restore;
    
    if( isset($target ) ) {
    	$t = Title::newFromURL( $target );
    	$title = $t->mDbkeyform;
    	$namespace = $t->mNamespace;
    	if( isset( $timestamp ) ) {
    		return doUndeleteShowRevision( $namespace, $title, $timestamp );
    	}
    	if( isset( $action ) and isset( $restore) and $action == "submit" ) {
    		return doUndeleteArticle( $namespace, $title );
    	}
    	return doUndeleteShowHistory( $namespace, $title );
    }
    
    # List undeletable articles    
    $sql = "SELECT ar_namespace,ar_title, COUNT(*) AS count FROM archive GROUP BY ar_namespace,ar_title ORDER BY ar_title";
    $res = wfQuery( $sql );
    
	$wgOut->setPagetitle( wfMsg( "undeletepage" ) );
	$wgOut->addWikiText( wfMsg( "undeletepagetext" ) );

    $special = $wgLang->getNsText( Namespace::getSpecial() );
    $sk = $wgUser->getSkin();
    $wgOut->addHTML( "<ul>\n" );
    while ($row = wfFetchObject( $res )) {
    	$n = ($row->ar_namespace ? 
    		($wgLang->getNsText( $row->ar_namespace ) . ":") : "").
    		$row->ar_title;

    	$wgOut->addHTML( "<li>" .
    	  $sk->makeKnownLink( $wgLang->specialPage( "Undelete" ),
          $n, "target=" . urlencode($n) ) . " " .
    	  str_replace( '$1', $row->count, wfMsg( "undeleterevisions" )) );
    }
    $wgOut->addHTML( "</ul>\n" );
    
    return $ret;    
}

/* private */ function doUndeleteShowRevision( $namespace, $title, $timestamp ) {
    global $wgLang, $wgUser, $wgOut, $action, $target, $timestamp, $restore;
    
    if(!preg_match("/[0-9]{14}/",$timestamp)) return 0;
    
    $sql = "SELECT ar_text FROM archive WHERE ar_namespace={$namespace} AND ar_title=\"{$title}\" AND ar_timestamp={$timestamp}";
    $ret = wfQuery( $sql );
    $row = wfFetchObject( $ret );
    
    $wgOut->setPagetitle( wfMsg( "undeletepage" ) );
    $wgOut->addWikiText( "(" . str_replace("$1",
      $wgLang->date($timestamp, true), wfMsg( "undeleterevision" ))
      . ")\n<hr>\n" . $row->ar_text );
    
	return 0;
}

/* private */ function doUndeleteShowHistory( $namespace, $title ) {
    global $wgLang, $wgUser, $wgOut, $action, $target, $timestamp, $restore;
    
    $sk = $wgUser->getSkin();
    $wgOut->setPagetitle( wfMsg( "undeletepage" ) );
    $wgOut->addWikiText( wfMsg( "undeletehistory" ) . "\n<hr>\n" . $row->ar_text );

	$action = wfLocalUrlE( $wgLang->specialPage( "Undelete" ), "action=submit" );
	$wgOut->addHTML("<p>
<form id=\"undelete\" method=\"post\" action=\"{$action}\">
<input type=hidden name=\"target\" value=\"{$target}\">
<input type=submit name=\"restore\" value=\"".wfMsg("undeletebtn")."\">
</form>");

    $log = wfGetSQL("cur", "cur_text", "cur_namespace=4 AND cur_title=\"".wfMsg("dellogpage")."\"" );
    if(preg_match("/^(.*".
    	preg_quote( ($namespace ? ($wgLang->getNsText($namespace) . ":") : "")
    	. str_replace("_", " ", $title), "/" ).".*)$/m", $log, $m)) {
    	$wgOut->addWikiText( $m[1] );
    }
    
    $sql = "SELECT ar_minor_edit,ar_timestamp,ar_user,ar_user_text,ar_comment
      FROM archive WHERE ar_namespace={$namespace} AND ar_title=\"{$title}\"
      ORDER BY ar_timestamp DESC";
    $ret = wfQuery( $sql );
    
    $special = $wgLang->getNsText( Namespace::getSpecial() );
    $wgOut->addHTML("<ul>");
    while( $row = wfFetchObject( $ret ) ) {
        $wgOut->addHTML( "<li>" .
    	  $sk->makeKnownLink( $wgLang->specialPage( "Undelete" ),
          $wgLang->timeanddate( $row->ar_timestamp, true ),
          "target=" . urlencode($target) . "&timestamp={$row->ar_timestamp}" ) . " " .
    	  ". . {$row->ar_user_text}" .
          " <i>(" . htmlspecialchars($row->ar_comment) . "</i>)\n");

    }
    $wgOut->addHTML("</ul>");
    
	return 0;
}
	
/* private */ function doUndeleteArticle( $namespace, $title )
	{
		global $wgUser, $wgOut, $wgLang, $target;

		$fname = "doUndeleteArticle";

		if ( "" == $title ) {
			$wgOut->fatalError( wfMsg( "cannotundelete" ) );
			return;
		}
		$t = addslashes($title);

		# Move article and history from the "archive" table
		$sql = "SELECT COUNT(*) AS count FROM cur WHERE cur_namespace={$namespace} AND cur_title='{$t}'";
		$res = wfQuery( $sql );
		$row = wfFetchObject( $res );
		if( $row->count == 0) {
			# Have to create new article...
			$max = wfGetSQL( "archive", "MAX(ar_timestamp)", "ar_namespace={$namespace} AND ar_title='{$t}'" );
        	$sql = "INSERT INTO cur (cur_namespace,cur_title,cur_text," .
			  "cur_comment,cur_user,cur_user_text,cur_timestamp,inverse_timestamp,cur_minor_edit,cur_random)" .
			  "SELECT ar_namespace,ar_title,ar_text,ar_comment," .
			  "ar_user,ar_user_text,ar_timestamp,99999999999999-ar_timestamp,ar_minor_edit,RAND() FROM archive " .
			  "WHERE ar_namespace={$namespace} AND ar_title='{$t}' AND ar_timestamp={$max}";
			wfQuery( $sql, $fname );
        	$newid = wfInsertId();
			$oldones = "AND ar_timestamp<{$max}";
		} else {
			# If already exists, put history entirely into old table
			$oldones = "";
			$newid = 0;
		}
		
		$sql = "INSERT INTO old (old_namespace,old_title,old_text," .
		  "old_comment,old_user,old_user_text,old_timestamp,inverse_timestamp,old_minor_edit," .
		  "old_flags) SELECT ar_namespace,ar_title,ar_text,ar_comment," .
		  "ar_user,ar_user_text,ar_timestamp,99999999999999-ar_timestamp,ar_minor_edit,ar_flags " .
		  "FROM archive WHERE ar_namespace={$namespace} AND ar_title='{$t}' {$oldones}";
		wfQuery( $sql, $fname );

        # Finally, clean up the link tables
        if( $newid ) {
        	$to = Title::newFromDBKey( $target );
			$to->resetArticleID( $newid );
		}

		# Now that it's safely stored, take it out of the archive
		$sql = "DELETE FROM archive WHERE ar_namespace={$namespace} AND " .
		  "ar_title='{$t}'";
		wfQuery( $sql, $fname );

		
        # Touch the log?
        
        $wgOut->addWikiText(str_replace("$1", $target, wfMsg("undeletedtext")));
		return 0;
	}
?>
