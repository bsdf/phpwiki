<?
# This file contains the functions needed for editing a page


/* Auto-wikification
 */
function wikify ( $s )
{
	global $title , $vpage ;
	$nt = $vpage->getNiceTitle ( $title ) ;

	# Fixing <nowiki> and <pre> tags first
	$s = str_replace ( "<pre>" , "<pre><nowiki>" , $s ) ;
	$s = str_replace ( "</pre>" , "</nowiki></pre>" , $s ) ;
	$a = spliti ( "<nowiki>" , $s ) ;

	# $nowikikey needs to contain a unique string--
	# this can be altered at will, as long it stays unique!
	$nowikikey = "3iyZiyA7iMwg5rhxP0Dcc9oTnj8qD1jm1Sfv" ;
	$nowikistorage = array () ;
	$s = array_shift ( $a ) ;
	foreach ( $a as $x ) {
	$c = spliti ( "</nowiki>" , $x , 2 ) ;
		if ( count ( $c ) == 2 ) {
			array_push ( $nowikistorage , $c[0] ) ;
			$s .= $nowikikey.$c[1] ;
		} else {
			$s .= "<nowiki>".$x ;
		}
	}
	# Replace HTML tags with wiki tags
	$s = eregi_replace ( "<h2>" , "== " , $s ) ;
	$s = eregi_replace ( "</h2>" , " ==" , $s ) ;
	$s = eregi_replace ( "<h3>" , "=== " , $s ) ;
	$s = eregi_replace ( "</h3>" , " ===" , $s ) ;
	$s = eregi_replace ( "<h4>" , "==== " , $s ) ;
	$s = eregi_replace ( "</h4>" , " ====" , $s ) ;
	$s = eregi_replace ( "<b>" , "'''" , $s ) ;
	$s = eregi_replace ( "</b>" , "'''" , $s ) ;
	$s = eregi_replace ( "<i>" , "''" , $s ) ;
	$s = eregi_replace ( "</i>" , "''" , $s ) ;

	# Bold title (only if title appears in first line *and* if there's
	# not already a bold tag in the first line)
	$a = explode ( "\n" , $s , 2 ) ;
	if ( stristr ( $a[0] , $nt ) and strstr ( $a[0] , "'''" ) === false ) {
		$a[0] = eregi_replace ( $nt , "'''$nt'''" , $a[0] ) ;
		$s = implode ( "\n" , $a ) ;
	}

	# Link magic
	global $wikiTalk ;
	$talkPage = $nt ;
	if ( count ( explode ( ":" , $talkPage ) ) > 1 ) $talkPage = str_replace ( ":" , " $wikiTalk:" , $talkPage ) ;
	else $talkPage = "$wikiTalk:$talkPage" ;

	$a = explode ( "[[" , " $s" ) ;
	$l = array () ;
	$s = substr ( array_shift ( $a ) , 1 ) ;
	foreach ( $a as $x ) {
		$b = explode ( "]]" , $x , 2 ) ;
		if ( count ( $b ) == 1 ) # Broken link?
			$b = explode ( "]" , $x , 2 ) ;

		if ( count ( $b ) == 1 ) $s .= "[[$x" ;
		else { # Real link!
			$c = explode ( "|" , $b[0] , 2 ) ;
			if ( count ( $c ) == 1 ) {
				if ( $c[0] == $title ) $s .= $c[0].$b[1] ; # Removing self-link
				else if ( in_array ( ucfirst($c[0]) , $l ) ) $s .= $c[0].$b[1] ; # Removing duplicate link
				else if ( ucfirstIntl ( $vpage->getNiceTitle ( $c[0] ) ) == ucfirstIntl ( $talkPage ) ) # Remove own talk page
					$s .= $b[1] ;
				else $s .= "[[".$c[0]."]]".$b[1] ;
			} else {
				if ( ucfirstIntl ( $c[0] ) == ucfirstIntl ( substr ( $c[1] , 0 , strlen ( $c[0] ) ) ) ) # [[test|tests]] -> [[test]]s
					$s .= "[[".substr ( $c[1] , 0 , strlen ( $c[0] ) )."]]".substr ( $c[1] , strlen ( $c[0] ) ).$b[1] ;
				else if ( in_array ( ucfirst($c[0]) , $l ) ) $s .= $c[1].$b[1] ; # Removing duplicate link
				else if ( ucfirstIntl ( $vpage->getNiceTitle ( $c[0] ) ) == ucfirstIntl ( $talkPage ) ) # Remove own talk page
					$s .= $b[1] ;
				else $s .= "[[".$c[0]."|".$c[1]."]]".$b[1] ;
			}
			if ( !in_array ( ucfirst($c[0]) , $l ) ) array_push ( $l , ucfirst($c[0]) ) ;
		}
	}
	# Replacing $nowikikey with the actual nowiki contents
	$a = spliti ( $nowikikey , $s ) ;
	$s = array_shift ( $a ) ;
	foreach ( $a as $x ) {
		$nw = array_shift ( $nowikistorage ) ;
		$s .= "<nowiki>$nw</nowiki>$x" ;
	}
	$s = str_replace ( "<pre><nowiki>" , "<pre>" , $s ) ;
	$s = str_replace ( "</nowiki></pre>" , "</pre>" , $s ) ;
	
	return $s ;
}

/* The 3-tilde and 4-tilde signature feature gets its own function
 */
function signature ( $s )
{
	global $user , $wikiGetDate , $wikiUser ;

	# Fixing <nowiki> and <pre> tags first
	$s = str_replace ( "<pre>" , "<pre><nowiki>" , $s ) ;
	$s = str_replace ( "</pre>" , "</nowiki></pre>" , $s ) ;
	$a = spliti ( "<nowiki>" , $s ) ;
	# $nowikikey needs to contain a unique string - this can be altered at will, as long it stays unique!
	$nowikikey = "3iyZiyA7iMwg5rhxP0Dcc9oTnj8qD1jm1Sfv" ;
	$nowikistorage = array () ;
	$s = array_shift ( $a ) ;
	foreach ( $a as $x ) {
		$c = spliti ( "</nowiki>" , $x , 2 ) ;
		if ( count ( $c ) == 2 ) {
			array_push ( $nowikistorage , $c[0] ) ;
			$s .= $nowikikey.$c[1] ;
		} else $s .= "<nowiki>".$x ;
	}
	if ( $user->isLoggedIn ) $replText = "[[$wikiUser:$user->name|$user->name]]" ;
	else $replText = $user->getLink() ;
	$dt = $wikiGetDate ( time() ) ;

	$s = str_replace ( "~~~~" , "$replText, $dt" , $s ) ;
	$s = str_replace ( "~~~" , $replText , $s ) ;

	# Replacing $nowikikey with the actual nowiki contents
	$a = spliti ( $nowikikey , $s ) ;
	$s = array_shift ( $a ) ;
	foreach ( $a as $x ) {
		$nw = array_shift ( $nowikistorage ) ;
		$s .= "<nowiki>$nw</nowiki>$x" ;
	}
	$s = str_replace ( "<pre><nowiki>" , "<pre>" , $s ) ;
	$s = str_replace ( "</nowiki></pre>" , "</pre>" , $s ) ;
	return $s ;
}


/* Called when editing/saving a page
 */
function edit ( $title )
{
	global $EditBox , $SaveButton , $PreviewButton , $MinorEdit , $FromEditForm , $wikiIPblocked ;
	global $user , $CommentBox , $vpage , $EditTime , $wikiDescribePage , $wikiUser , $namespaceBackground , $wikiNamespaceBackground ;
	global $wikiCannotEditPage , $wikiEditConflictMessage , $wikiPreviewAppend , $wikiEditHelp , $wikiEditHelpLink , $wikiRecodeInput ;
	global $wikiSummary , $wikiMinorEdit , $wikiCopyrightNotice , $wikiSave , $wikiPreview , $wikiDontSaveChanges , $wikiGetDate ;
	global $wikiBeginDiff, $wikiEndDiff , $WikifyButton , $wikiAutoWikify , $wikiReadOnly , $wikiReadOnlyText , $wikiDontSaveEmpty ;

	if ( $wikiReadOnly ) return str_replace ( "$1" , $title , $wikiReadOnlyText ) ;
	$npage = new WikiPage ;
	$npage->title = $title ;
	$npage->makeAll () ;
	if ( $npage->namespace ) $namespaceBackground = $wikiNamespaceBackground[strtolower($npage->namespace)] ;
	$ret = "" ;
	if ( !$vpage->canEdit() ) return $wikiCannotEditPage ;
	if ( $EditTime == "" ) $EditTime = date ( "YmdHis" ) ; # Stored for edit conflict detection
	$editConflict = false ;

	if ( isset($FromEditForm) && !isset($SaveButton) && !isset($PreviewButton) && !isset($WikifyButton) ) $SaveButton = "yes" ;

	# Language recoding
	$EditBox = $wikiRecodeInput ( $EditBox ) ;
	$CommentBox = $wikiRecodeInput ( $CommentBox ) ;

	if ( $SaveButton ) { # The edit is finished, someone pressed the "Save" button
		$SaveButton = "" ;
		$doSave = true ;
		if ( $vpage->doesTopicExist() ) {
			$isnewpage = false ;
			$lastTime = getMySQL ( "cur" , "cur_timestamp" , "cur_title=\"$vpage->secureTitle\"" ) ;
			if ( tsc($EditTime) < tsc($lastTime) ) {
				$doSave = false ;
				$ret .= $wikiEditConflictMessage ;
				$oldSubmittedText = $EditBox ;
				$oldSubmittedText = stripslashes ( $oldSubmittedText ) ;
				#$oldSubmittedText = str_replace ( "&" , "&amp;" , $oldSubmittedText ) ;
				$EditTime = date ( "YmdHis" ) ; # reset time counter
				$npage->load ( $npage->title ) ;
				$text = $npage->contents ;
				#$text = str_replace ( "&" , "&amp;" , $text ) ;

				$editConflict = true ;
			}
		} else {
			$isnewpage = true ;
		}
		if ( $doSave ) { # Actually saving the article!
			$text = $EditBox ;
			$text = stripslashes ( $text ) ;

			$text = signature ( $text ) ;

			$title = stripslashes ( $title ) ;
			$npage->title = $title ;
			$npage->makeAll () ;

			# Checking for blocked IP
			if ( isBlockedIP() ) return $wikiIPblocked ;
			
			# Checking for empty page
			if ( $isnewpage
			    and ( $text == $wikiDescribePage
			    or !preg_match ( "/[\S]/", $text ) )
			    ) return $wikiDontSaveEmpty ;

			if ( $npage->doesTopicExist() ) $npage->backup() ;
			else { $MinorEdit = 2 ; $npage->ensureExistence () ; }

			if ( !$user->isLoggedIn ) $npage->setEntry ( $text , $CommentBox , 0 , $user->getLink() , $MinorEdit*1 ) ;
			else $npage->setEntry ( $text , $CommentBox , $user->id , $user->name , $MinorEdit*1 ) ;
			global $wasSaved ;
			$wasSaved = true ;
			return "" ;
		}
	} else if ( $WikifyButton ) { # Automatic wikification
		$WikifyButton = "" ;
		$text = $EditBox ;
		$text = stripslashes ( $text ) ;
		$text = signature ( $text ) ;
		$text = wikify ( $text ) ;
		$append = str_replace ( "$1" , $npage->parseContents($text) , $wikiPreviewAppend ) ;
	} else if ( $PreviewButton ) { # Generating a preview to append to the page
		$PreviewButton = "" ;
		$text = $EditBox ;
		$text = stripslashes ( $text ) ;
		$text = signature ( $text ) ;
		$append = str_replace ( "$1" , $npage->parseContents($text) , $wikiPreviewAppend ) ;
	} else if ( $npage->doesTopicExist() ) { # The initial edit request for an existing page
		$npage->load ( $npage->title ) ;
		$text = $npage->contents ;
	} else { # The initial edit request for a new page
		$text = $wikiDescribePage ;
	}

	if ( $MinorEdit ) $checked = "checked" ;
	else $checked = "" ;
	if ( $CommentBox == "" ) $CommentBox = "*" ;
	$CommentBox = stripslashes ( $CommentBox );
	$CommentBox = htmlspecialchars ( $CommentBox );

	# Just trying to set the initial keyboard focus to the edit window; doesn't work, though...
	global $bodyOptions , $headerScript ;
	# JAVASCRIPT DEACTIVATED
	# $headerScript = "<script> <!-- function setfocus() { document.f.EditBox.focus(); } --> </script>" ;
	# $bodyOptions = " onLoad=setfocus()" ;

	$ret .= "<form method=POST action=\"".wikiLink($npage->url)."\" enctype=\"application/x-www-form-urlencoded\">" ;
	$ret .= "<textarea tabindex=1 name=EditBox rows=".$user->options["rows"]." cols=".$user->options["cols"]." STYLE=\"width:100%\" WRAP=virtual>".htmlspecialchars ( $text )."</textarea><br>\n" ;
	$ret .= "$wikiSummary<input tabindex=2 type=text value=\"$CommentBox\" name=CommentBox size=50 maxlength=200> \n" ;
	if ( $user->isLoggedIn == "yes" ) 
		$ret .= "<input tabindex=3 type=checkbox name=MinorEdit $checked value=1>$wikiMinorEdit &nbsp; " ;
	else
		$ret .= "<input type=hidden name=MinorEdit value=0>" ;
	$ret .= "<br>$wikiCopyrightNotice<br>\n" ;

	$ret .= "<input tabindex=4 type=submit value=\"$wikiSave\" name=SaveButton> \n" ;
	$ret .= "<input tabindex=5 type=submit value=\"$wikiPreview\" name=PreviewButton>\n" ;
	if ( $user->isLoggedIn and $user->options["autowikify"]=="yes" ) $ret .= "<input tabindex=6 type=submit value=\"$wikiAutoWikify\" name=WikifyButton>\n" ;
	$ret .= "<input type=hidden value=\"$EditTime\" name=EditTime>\n" ;
	$ret .= "<input type=hidden value=yes name=FromEditForm>\n" ;
	$ret .= " <a href=\"".wikiLink($vpage->url)."\">$wikiDontSaveChanges</a>\n" ; 
	$ret .= " | <a href=\"".wikiLink($wikiEditHelpLink)."\">$wikiEditHelp</a>\n" ;

	if ( $editConflict ) {
		# Add the diffs between the two competing versions:
		$ret .= "<br><hr><nowiki><font color=red><b>$wikiBeginDiff</b></font><br>\n\n" ;
		# cut into lines, don't distinguish between different line-end conventions:
		$old_lines = explode ( "\n" , str_replace( "\r\n", "\n", htmlspecialchars( $oldSubmittedText ) ) ) ;
		$new_lines = explode ( "\n" , str_replace( "\r\n", "\n", htmlspecialchars( $text ) ) ) ;
		include_once( "./difflib.php" );
		$diffs = new Diff($old_lines, $new_lines);
		$formatter = new TableDiffFormatter();
		$ret .= $formatter->format($diffs);
		$ret .= "<font color=red><b>$wikiEndDiff</b></font><hr></nowiki>\n" ;
		$ret .= "<br><b>This is the text you submitted :</b><br>\n" ;
		$ret .= "<textarea name=NotIMPORTANT rows=".$user->options["rows"]." cols=".$user->options["cols"]." STYLE=\"width:100%\" WRAP=virtual>" . htmlspecialchars ( $oldSubmittedText ) . "</textarea><br>\n" ;
	}
	$ret .= " </form>\n" ;
	return $ret.$append ;
}

function doEdit ( $title )
{
	global $headerScript ;
	global $vpage , $action , $wasSaved ;

	$wasSaved = false ;
	$vpage = new WikiPage ;
	$vpage->isSpecialPage = true ;
	$vpage->SetTitle ( $title ) ;
	$action = "" ;
	$ret = $vpage->getHeader() ;
	$action = "edit" ;

	$theMiddle = edit ( $title ) ;
	if ( $wasSaved ) {
		return "" ;
#		$action = "view" ;
#		return view ( $title ) ;
	}
	$ret .= $vpage->getMiddle ( $theMiddle ) ;

	$action = "" ;
	$ret .= $vpage->getFooter() ;
	$action = "edit" ;
	return $ret ;
}


?>
