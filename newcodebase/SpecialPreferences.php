<?
function wfSpecialPreferences()
{
	global $wgUser, $wgOut, $action;
	global $wpSaveprefs, $wpReset;

	$fields = array( "wpOldpass", "wpNewpass", "wpRetype",
	  "wpEmail", "wpNick" );
	wfCleanFormFields( $fields );

	if ( 0 == $wgUser->getID() ) {
		$wgOut->errorpage( "prefsnologin", "prefsnologintext" );
		return;
	}
	if ( wfReadOnly() ) {
		$wgOut->readOnlyPage();
		return;
	}
	if ( isset( $wpReset ) ) {
		resetPrefs();
		mainPrefsForm( WfMsg( "prefsreset" ) );
	} else if ( "submit" == $action || isset( $wpSaveprefs ) ) {
		savePreferences();
	} else {
		resetPrefs();
		mainPrefsForm( "" );
	}
}

/* private */ function savePreferences()
{
	global $wgUser, $wgLang, $wgDeferredUpdateList;
	global $wpQuickbar, $wpOldpass, $wpNewpass, $wpRetype;
	global $wpSkin, $wpMath, $wpEmail, $wpEmailFlag, $wpNick, $wpSearch, $wpRecent;
	global $wpSearchLines, $wpSearchChars, $wpStubs;
	global $wpRows, $wpCols, $wpHourDiff, $HTTP_POST_VARS;

	if ( "" != $wpNewpass ) {
		if ( $wpNewpass != $wpRetype ) {
			mainPrefsForm( wfMsg( "badretype" ) );			
			return;
		}
		$ep = User::encryptPassword( $wpOldpass );
		if ( $ep != $wgUser->getPassword() ) {
			if ( $ep != $wgUser->getNewpassword() ) {
				mainPrefsForm( wfMsg( "wrongpassword" ) );
				return;
			}
		}
		$wgUser->setPassword( $wpNewpass );
	}
	$wgUser->setEmail( $wpEmail );
	$wgUser->setOption( "nickname", $wpNick );
	$wgUser->setOption( "quickbar", $wpQuickbar );
	$wgUser->setOption( "skin", $wpSkin );
	$wgUser->setOption( "math", $wpMath );
	$wgUser->setOption( "searchlimit", $wpSearch );
	$wgUser->setOption( "contextlines", $wpSearchLines );
	$wgUser->setOption( "contextchars", $wpSearchChars );
	$wgUser->setOption( "rclimit", $wpRecent );
	$wgUser->setOption( "rows", $wpRows );
	$wgUser->setOption( "cols", $wpCols );
	$wgUser->setOption( "stubthreshold", $wpStubs );
	$wgUser->setOption( "timecorrection", $wpHourDiff );

	if ( $wpEmailFlag ) { $wgUser->setOption( "disablemail", 1 ); }
	else { $wgUser->setOption( "disablemail", 0 ); }

	$togs = $wgLang->getUserToggles();
	foreach ( $togs as $tname => $ttext ) {
		if ( array_key_exists( "wpOp$tname", $HTTP_POST_VARS ) ) {
			$wgUser->setOption( $tname, 1 );
		} else {
			$wgUser->setOption( $tname, 0 );
		}
	}
	$wgUser->setCookies();
	$up = new UserUpdate();
	array_push( $wgDeferredUpdateList, $up );
	mainPrefsForm( wfMsg( "savedprefs" ) );
}

/* private */ function resetPrefs()
{
	global $wgUser, $wgLang;
	global $wpQuickbar, $wpOldpass, $wpNewpass, $wpRetype, $wpStubs;
	global $wpRows, $wpCols, $wpSkin, $wpMath, $wpEmail, $wpEmailFlag, $wpNick;
	global $wpSearch, $wpRecent, $HTTP_POST_VARS;
	global $wpHourDiff, $wpSearchLines, $wpSearchChars;

	$wpOldpass = $wpNewpass = $wpRetype = "";
	$wpEmail = $wgUser->getEmail();
	if ( 1 == $wgUser->getOption( "disablemail" ) ) { $wpEmailFlag = 1; }
	else { $wpEmailFlag = 0; }
	$wpNick = $wgUser->getOption( "nickname" );

	$wpQuickbar = $wgUser->getOption( "quickbar" );
	$wpSkin = $wgUser->getOption( "skin" );
	$wpMath = $wgUser->getOption( "math" );
	$wpRows = $wgUser->getOption( "rows" );
	$wpCols = $wgUser->getOption( "cols" );
	$wpStubs = $wgUser->getOption( "stubthreshold" );
	$wpHourDiff = $wgUser->getOption( "timecorrection" );
	$wpSearch = $wgUser->getOption( "searchlimit" );
	$wpSearchLines = $wgUser->getOption( "contextlines" );
	$wpSearchChars = $wgUser->getOption( "contextchars" );
	$wpRecent = $wgUser->getOption( "rclimit" );

	$togs = $wgLang->getUserToggles();
	foreach ( $togs as $tname => $ttext ) {
		$HTTP_POST_VARS["wpOp$tname"] = $wgUser->getOption( $tname );
	}
}

/* private */ function mainPrefsForm( $err )
{
	global $wgUser, $wgOut, $wgLang;
	global $wpQuickbar, $wpOldpass, $wpNewpass, $wpRetype;
	global $wpSkin, $wpMath, $wpEmail, $wpEmailFlag, $wpNick, $wpSearch, $wpRecent;
	global $wpRows, $wpCols, $wpSaveprefs, $wpReset, $wpHourDiff;
	global $wpSearchLines, $wpSearchChars, $wpStubs;

	$wgOut->setPageTitle( wfMsg( "preferences" ) );
	$wgOut->setArticleFlag( false );
	$wgOut->setRobotpolicy( "noindex,nofollow" );

	if ( "" != $err ) {
		$wgOut->addHTML( "<font size='+1' color='red'>$err</font>\n<p>" );
	}
	$uname = $wgUser->getName();
	$uid = $wgUser->getID();

	$wgOut->addHTML( "<p>" . str_replace( array("$1","$2"), array($uname,$uid),
		wfMsg( "prefslogintext" ) ) . "\n" );

	$qbs = $wgLang->getQuickbarSettings();
	$skins = $wgLang->getSkinNames();
	$mathopts = $wgLang->getMathNames();
	$togs = $wgLang->getUserToggles();

	$action = wfLocalUrlE( $wgLang->specialPage( "Preferences" ),
	  "action=submit" );
	$qb = wfMsg( "qbsettings" );
	$cp = wfMsg( "changepassword" );
	$sk = wfMsg( "skin" );
	$math = wfMsg( "math" );
	$opw = wfMsg( "oldpassword" );
	$npw = wfMsg( "newpassword" );
	$rpw = wfMsg( "retypenew" );
	$svp = wfMsg( "saveprefs" );
	$rsp = wfMsg( "resetprefs" );
	$tbs = wfMsg( "textboxsize" );
	$tbr = wfMsg( "rows" );
	$tbc = wfMsg( "columns" );
	$ltz = wfMsg( "localtime" );
	$tzt = wfMsg( "timezonetext" );
	$tzo = wfMsg( "timezoneoffset" );
	$yem = wfMsg( "youremail" );
	$emf = wfMsg( "emailflag" );
	$ynn = wfMsg( "yournick" );
        $stt = wfMsg ( "stubthreshold" ) ;
	$srh = wfMsg( "searchresultshead" );
	$rpp = wfMsg( "resultsperpage" );
	$scl = wfMsg( "contextlines" );
	$scc = wfMsg( "contextchars" );
	$rcc = wfMsg( "recentchangescount" );

	$wgOut->addHTML( "<form id=\"preferences\" action=\"$action\"
method=\"post\"><table border=\"1\"><tr><td valign=top nowrap><b>$qb:</b><br>\n" );

	# Quickbar setting
	#
	for ( $i = 0; $i < count( $qbs ); ++$i ) {
		if ( $i == $wpQuickbar ) { $checked = " checked"; }
		else { $checked = ""; }
		$wgOut->addHTML( "<input type=radio name=\"wpQuickbar\"
value=\"$i\"$checked> {$qbs[$i]}<br>\n" );
	}

	# Fields for changing password
	#
	$wpOldpass = wfEscapeHTML( $wpOldpass );
	$wpNewpass = wfEscapeHTML( $wpNewpass );
	$wpRetype = wfEscapeHTML( $wpRetype );

	$wgOut->addHTML( "</td><td vaign=top nowrap><b>$cp:</b><br>
$opw: <input type=password name=\"wpOldpass\" value=\"$wpOldpass\" size=20><br>
$npw: <input type=password name=\"wpNewpass\" value=\"$wpNewpass\" size=20><br>
$rpw: <input type=password name=\"wpRetype\" value=\"$wpRetype\" size=20><br>
</td></tr>\n" );

	# Skin setting
	#
	$wgOut->addHTML( "<tr><td valign=top nowrap><b>$sk:</b><br>\n" );
	for ( $i = 0; $i < count( $skins ); ++$i ) {
		if ( $i == $wpSkin ) { $checked = " checked"; }
		else { $checked = ""; }
		$wgOut->addHTML( "<input type=radio name=\"wpSkin\"
value=\"$i\"$checked> {$skins[$i]}<br>\n" );
	}

	# Various checkbox options
	#
	$wgOut->addHTML( "</td><td rowspan=2 valign=top nowrap>\n" );
	foreach ( $togs as $tname => $ttext ) {
		if ( 1 == $wgUser->getOption( $tname ) ) {
			$checked = " checked";
		} else {
			$checked = "";
		}
		$wgOut->addHTML( "<input type=checkbox value=\"1\" "
		  . "name=\"wpOp$tname\"$checked>$ttext<br>\n" );
	}
	$wgOut->addHTML( "</td>" );

	# Math setting
	#
	$wgOut->addHTML( "<tr><td valign=top nowrap><b>$math:</b><br>\n" );
	for ( $i = 0; $i < count( $mathopts ); ++$i ) {
		if ( $i == $wpMath ) { $checked = " checked"; }
		else { $checked = ""; }
		$wgOut->addHTML( "<input type=radio name=\"wpMath\"
value=\"$i\"$checked> {$mathopts[$i]}<br>\n" );
	}

	$wgOut->addHTML( "</td></tr><tr>" );

	# Textbox rows, cols
	#
	$wgOut->addHTML( "<td valign=top nowrap><b>$tbs:</b><br>
$tbr: <input type=text name=\"wpRows\" value=\"{$wpRows}\" size=6><br>
$tbc: <input type=text name=\"wpCols\" value=\"{$wpCols}\" size=6><br><br>
<b>$ltz</b><br>
$tzo*: <input type=text name=\"wpHourDiff\" value=\"{$wpHourDiff}\" size=6>
</td>" );

	# Email, etc.
	#
	$wpEmail = wfEscapeHTML( $wpEmail );
	$wpNick = wfEscapeHTML( $wpNick );
	if ( $wpEmailFlag ) { $emfc = "checked"; }
	else { $emfc = ""; }

	$wgOut->addHTML( "<td valign=top nowrap>
$yem: <input type=text name=\"wpEmail\" value=\"{$wpEmail}\" size=20><br>
<input type=checkbox $emfc value=\"1\" name=\"wpEmailFlag\"> $emf<br>
$ynn: <input type=text name=\"wpNick\" value=\"{$wpNick}\" size=12><br>
$rcc: <input type=text name=\"wpRecent\" value=\"$wpRecent\" size=6><br>
$stt: <input type=text name=\"wpStubs\" value=\"$wpStubs\" size=6><br>
<strong>{$srh}:</strong><br>
$rpp: <input type=text name=\"wpSearch\" value=\"$wpSearch\" size=6><br>
$scl: <input type=text name=\"wpSearchLines\" value=\"$wpSearchLines\" size=6><br>
$scc: <input type=text name=\"wpSearchChars\" value=\"$wpSearchChars\" size=6></td>
</tr><tr>
<td align=center><input type=submit name=\"wpSaveprefs\" value=\"$svp\"></td>
<td align=center><input type=submit name=\"wpReset\" value=\"$rsp\"></td>
</tr></table>* {$tzt} </form>\n" );
}

?>
