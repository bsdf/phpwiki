<?
# ATTENTION:
# To fit your local settings, PLEASE edit wikiSettings.php and wikiLocalSettings.php ONLY!
# Change settings here ONLY if they're to become global in all wikipedias!


# This contains the strings for international/specialized wikis
#---------------------------------------------------------------

# Basic character set and locale settings
$wikiCharset = "iso-8859-1" ;
$wikiUpperChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ??????????????????????????????";
$wikiLowerChars = "abcdefghijklmnopqrstuvwxyz??????????????????????????????";

# Misc stuff
$wikiMainPage = "Main Page" ; # This is actual the title of the article in the database
$wikiErrorPageTitle = "Yikes! An error!" ;
$wikiErrorMessage = "<h2>$1!</h2>Return to the [[:Main Page|Main Page]]!" ;
$wikiAllowedSpecialPages = array("userlogin","userlogout","newpages","recentchanges","upload","statistics","lonelypages","popularpages","wantedpages","allpages","randompage","shortpages","longpages","listusers","watchlist","special_pages","editusersettings","deletepage","movepage","protectpage","contributions","whatlinkshere","recentchangeslinked","sqldump","vote","edituser","maintenance");

$wikiRecentChangesText = "Track the most recent changes to Wikipedia on this page. [[wikipedia:Welcome, newcomers|Welcome, newcomers]]! Please have a look at these pages: [[wikipedia:FAQ|Wikipedia FAQ]], [[wikipedia:Policies and guidelines|Wikipedia policy]] (especially [[wikipedia:Naming conventions|naming conventions]], [[wikipedia:Neutral point of view|neutral point of view]]), and [[wikipedia:Most common Wikipedia faux pas|most common Wikipedia faux pas]].<br>If you want to see the Wikipedia succeed, it's very important that you don't add material restricted by others' [[wikipedia:Copyrights|copyrights]]. The legal liability could really hurt the project, so please don't do it.<br>See also the [http://meta.wikipedia.com/wiki.phtml?title=special:RecentChanges recent meta discussion]." ;
$wikiMetaDescription = "$1... Read more here at wikipedia, the free encyclopedia!" ;
$wikiRecentChangesHeaderPage = "wikipedia:Recent Changes header" ;

# Used in header/footer
$wikiWikipediaHelp = "wikipedia:Help" ;
$wikiMainPageTitle = "Wikipedia : The free encyclopedia" ; # This is the title that is displayed on the main page
$wikiHeaderSubtitle = "The free encyclopedia" ;
$wikiArticleSubtitle = "From Wikipedia, the free encyclopedia." ;
$wikiPrintable = "Printable version" ;
$wikiWatch = "Watch this article for me" ;
$wikiNoWatch = "Stop watching this article for me" ;
$wikiTitleTag = "$1: encyclopedia article from Wikipedia" ;
$wikiLogIn = "Log in" ;
$wikiLogOut = "Log out" ;
$wikiHelp = "Help" ;
$wikiHelpLink = "wikipedia:Help" ;
$wikiBlockedIPsLink = "Wikipedia:Blocked_IPs" ; # Don't forget the underscore if the translation also has a space!
$wikiTalkBlockedIPsLink = "Wikipedia_talk:Blocked_IPs" ; # Don't forget the underscore if the translation also has a space!
$wikiPreferences = "Preferences" ;
$wikiWhatLinksHere = "Pages that link here" ;
$wikiPrintLinksMarkup = "i" ; # will be used as <$wikiPrintLinksMarkup> and </$wikiPrintLinksMarkup>
$wikiTalk = "talk" ;
$wikiUser = "user" ;
$wikiNamespaceTalk = "$1 Talk" ;
$wikiWikipedia = "wikipedia" ;
$wikiAllowedNamespaces = array ( $wikiWikipedia , $wikiTalk , $wikiUser , "" , "wikipedia $wikiTalk" , "$wikiUser $wikiTalk" ) ;
$wikiSkins = array ( "Normal" => "" , "Star Trek" => "Star Trek" , "Nostalgia" => "Nostalgy" , "Cologne Blue" => "Cologne Blue" ) ;
$wikiMyOptions = "My Options" ;
$wikiMySettings = "My settings" ;
$wikiMyself = "My page" ;
$wikiShortPages = "Short pages";
$wikiLongPages = "Long pages" ;
$wikiUserList = "User list" ;
$wikiEditingHistory = "Previous versions" ;
$wikiAddToWatchlist = "Add to watchlist" ;
$wikiEditPage = "Edit this page" ;
$wikiHome = "Home" ;
$wikiAbout = "About" ;
$wikiFAQ = "FAQ" ;
$wikiPageInfo = "Page Info" ;
$wikiLinkedPages = "Linked pages" ;
$wikiShowDiff = "show diff" ;
$wikiRequests = "Page views: $1" ;
$wikiEdit = "Edit" ;
$wikiPageOptions = "Page Options" ;
$wikiBrowse = "Browse" ;
$wikiFind = "Find" ;
$wikiOK = "OK" ;
$wikiFindMore = "Find more";
$wikiWikipediaHome = "Main Page" ;
$wikiAboutWikipedia = "About Wikipedia" ;
$wikiAutoWikify = "Auto-wikification" ;
$wikiTopics = "Topics" ;
$wikiWikipediaFAQ = "wikipedia:FAQ" ;
$wikiVoteForPage = "Vote for this page" ;

# Editing
$wikiEditingHelp = "Editing help" ;
$wikiWikipediaEditingHelp = "wikipedia:How does one edit a page" ;
$wikiEditTitle = "Editing $1" ;
$wikiCannotEditPage = "<h3>You cannot edit this page!</h3>" ;
$wikiEditConflictMessage = "<h1>Edit conflict!</h1>\n<b>Someone saved this page after you started editing. The top textbox contains the saved text. Only the text in the top textbox will be saved.</b><br>\nScroll down to see your edited text and the differences between the two versions.<br>\n" ;
$wikiPreviewAppend = "<hr>\n<h2>Preview :</h2>\n$1<hr><h3>Remember, this is only a preview and not yet saved!</h3>" ;
$wikiSummary = "Summary:" ;
$wikiDescription = "Description:" ;
$wikiMinorEdit = "This is a minor edit." ;
$wikiCopyrightNotice = "Please notice that all contributions to Wikipedia are considered to be released under the GNU Free Documentation License. If you don't want your writing to be edited mercilessly and redistributed at will, then don't hit submit. You are also promising us that you wrote this yourself, or copied it from a public domain resource. <b>DO NOT USE COPYRIGHTED WORK WITHOUT PERMISSION!</b>" ;
$wikiSave = "Save" ;
$wikiPreview = "Preview" ;
$wikiReset = "Reset" ;
$wikiDontSaveChanges = "<i>Cancel</i>" ;
$wikiDescribePage = "Describe the new page here." ;
$wikiDontSaveEmpty = "<h1>New page was empty, not saving!</h1>\nYou may want to take a look at the <a href=\"/wiki/Wikipedia:Help\">help pages</a>." ;

# wikiUser
$wikiNoSuchUser = "<font color=red>Unknown user $1!</font>" ;
$wikiWrongPassword = "<font color=red>Wrong password for user $1!</font>" ;
$wikiYouAreLoggedIn = "$1, you are logged in!" ; 
$wikiUserError = "Error with \"$1\"" ;

# wikiPage
$wikiNoSuchSpecialPage = "<h1>No such special page \"$1\"!</h1>" ;
$wikiOldVersion = "<br><font size=\"-1\">This is the old version #$1; see the <a href=\"$THESCRIPT?title=$2\">current version</a></font>" ;
$wikiRedirectFrom = "(redirected from $1)" ;
$wikiRecentChanges = "Recent Changes" ;
$wikiRecentChangesLink = "RecentChanges" ; # "special:" is added automatically
$wikiRecentLinked = "Watch page links" ;
$wikiRecentLinkedLink = "Recentchangeslinked" ;
$wikiSpecialPagesLink = "Special_pages" ; # "special:" is added automatically
$wikiEditThisPage = "Edit this page" ;
$wikiMoveThisPage = "Move this page" ;
$wikiDeleteThisPage = "Delete this page" ;
$wikiUpload = "Upload files" ;
$wikiHistory = "History" ;
$wikiRandomPage = "Random Page" ;
$wikiSpecialPages = "Special Pages" ;
$wikiEditHelp = "<i>Editing Help</i>" ;
$wikiEditHelpLink = "wikipedia:How_does_one_edit_a_page" ;
$wikiStatistics = "Statistics" ;
$wikiNewPages = "New pages" ;
$wikiOrphans = "Orphans" ;
$wikiMostWanted = "Most wanted" ;
$wikiAllPages = "All pages" ;
$wikiStubs = "Stub articles" ;
$wikiLongPages = "Long articles" ;
$wikiListUsers = "List users" ;
$wikiMyWatchlist = "My watchlist" ;
$wikiBeginDiff = "BEGIN DIFF" ;
$wikiEndDiff = "END DIFF" ;
$wikiDiffLegend = "<font color=#2AAA2A>Green text</font> was added or changed, <font color=#AAAA00>yellow text</font> was changed or deleted." ;
$wikiDiffFirstVersion = "This is the first version of this article. All text is new!<br>\n" ;
$wikiDiffImpossible = "This is the first version of this article. All text is new!<br>\n" ;
$wikiSearch = "Search" ;
$wikiOtherNamespaces = "<b>Other namespaces :</b> " ;
$wikiCategories = "<b>Categories :</b> " ;
$wikiThisCategory = "Articles in this category" ;
$wikiCounter = "This page has been accessed $1 times." ;
$wikiBlockIPTitle = "Block an IP (sysops only)" ;
$wikiBlockIPText = "IP $1 was blocked by $2" ;
$wikiBlockInvalidIPAddress = "\"$1\" is not a valid IP address; cannot block." ;
$wikiBlockExplain = "You are about to block the IP address
[$wikiCurrentServer$THESCRIPT?title=special:contributions&theuser=\$1 \$1]. Once blocked,
visitors to the Wikipedia from that IP address will not be able to edit articles unless
a sysop removes them from the list of blocked IP addresses at [[$wikiBlockedIPsLink]].
If you are sure you want to block this user, please enter a brief note about your reasons
in the box below and click &quot;Block This IP&quot;. You may write a longer explanation
in [[$wikiTalkBlockedIPsLink]]." ;
$wikiIPblocked = "<font color=red size='+1'>Your IP has been blocked! Your edits will not be saved. Please contact a sysop to have the block removed, or try again later.</font>" ;
$wikiBugReports = "Bug reports" ;
$wikiBugReportsLink = "wikipedia:Bug Reports" ;
$wikiPrintFooter = "<hr>This article is from <b>Wikipedia</b> (<a href=\"$1\">$1</a>),
the free online encyclopedia. You can find this article at <a href=\"$2\">$2</a>" ;

# Note: Interwiki link tables moved to wikiSettings.php

# date
$wikiDate = array () ;
$wikiDate["monday"] = "Monday" ;
$wikiDate["tuesday"] = "Tuesday" ;
$wikiDate["wednesday"] = "Wednesday" ;
$wikiDate["thursday"] = "Thursday" ;
$wikiDate["friday"] = "Friday" ;
$wikiDate["saturday"] = "Saturday" ;
$wikiDate["sunday"] = "Sunday" ;
$wikiDate["january"] = "January" ;
$wikiDate["february"] = "February" ;
$wikiDate["march"] = "March" ;
$wikiDate["april"] = "April" ;
$wikiDate["may"] = "May" ;
$wikiDate["june"] = "June" ;
$wikiDate["july"] = "July" ;
$wikiDate["august"] = "August" ;
$wikiDate["september"] = "September" ;
$wikiDate["october"] = "October" ;
$wikiDate["november"] = "November" ;
$wikiDate["december"] = "December" ;

#-----------------------------------------------------------------------
## strings for specialFunctions.php

# Moving
$wikiMoveRedirectMessage = "Moved to $1" ;
$wikiMoveMoved = "$1 was successfully moved to $2" ;
$wikiMoveRedirected = " A redirect was created." ;
$wikiMoveWarning = "<font color=red><b>'$1' already exists! Please choose another name.</b></font><br><br>\n" ;
$wikiMoveForm = "
<h2>You are about to move '$1' and its history to a new title.</h2>\n
<FORM method=post>\n
New name : <INPUT type=text value='$2' name=newname size=40 maxlength=250><br><br>\n
<INPUT type=checkbox$3 name=doredirect>Create a #REDIRECT from '$1' to the new title<br><br>\n
<INPUT type=submit name=doit value='Move'>\n
</FORM>\n" ;

# Log out / log in
$wikiGoodbye = "<h1>Goodbye, $1!</h1>" ;
$wikiWelcomeCreation = "<h1>Welcome, $1!</h1><font color=red>Don't forget to personalize your wikipedia preferences!</font><br>Your account has been created. Please press \"Log in\" once more to log in!" ; ;
$wikiLoginPageTitle = "User login" ;
$wikiYourName = "Your user name&nbsp; : " ;
$wikiYourPassword = "Your password&nbsp;&nbsp; : " ;
$wikiYourPasswordAgain = "Retype password : " ;
$wikiNewUsersOnly = " (new users only)" ;
$wikiRememberMyPassword = "Remember my password (as a cookie)." ;
$wikiLoginProblem = "<b>There has been a problem with your login.</b><br>Try again!" ;
$wikiAlreadyLoggedIn = "<font color=red><b>User $1, you are already logged in!</b></font><br>\n" ;
$wikiPleaseLogIn = "<h1>Please log in:</h1>\n" ;
$wikiAreYouNew = "If you are new to wikipedia and want to get a user account, enter a user name, type and re-type a password.
Your e-mail address is optional; if you lose your password you can request a new one to be sent to the address you give.<br>\n" ;
$wikiLogIn = "Log in" ;
$wikiCreateAccount = "Create new account" ;

# User preferences
$wikiUserSettings = "User Settings" ;
$wikiUserSettingsError = "You are not logged in! [[special:userLogin|Log in]] or go to the [[:Main Page|Main Page]]" ;
$wikiUserSettingsNewPasswordError = "<h1><font color=red>The new passwords didn't match. PASSWORD UNCHANGED!</font></h1>\n" ;
$wikiUserSettingsSaved = "<font color=red size=\"+1\">Your settings have been saved!</font>" ;
$wikiLoggedInAs = "<b>You are logged in as [[user:$1|$1]]. ";
$wikiID_Help = "Your internal ID is $1.</b> You can get help [[wikipedia:Help/User preferences|here]]." ;
$wikiQuickBarSettings = "QuickBar Settings :" ;
$wikiSettingsStandard = "standard" ;
$wikiSettingsNone = "None" ;
$wikiSettingsLeft = "Left" ;
$wikiSettingsRight = "Right" ;
$wikiOldPassword = "Old password&nbsp; &nbsp; : " ;
$wikiNewPassword = "New password&nbsp; &nbsp; : " ;
$wikiSkin = "Skin :" ;
$wikiStarTrek = "Star Trek" ;
$wikiShowHoverBox = "Show hoverbox over wiki links" ;
$wikiUnderlineLinks = "Underline links" ;
$wikiNewTopicsRed = "Show links to non-existent topics in red" ;
$wikiJustifyParagraphs = "Justify paragraphs" ;
$wikiShowRecentChangesTable = "Show <i>Recent changes</i> as a table" ;
$wikiHideMinorEdits = "Hide minor edits in <i>Recent Changes</i>" ;
$wikiDoNumberHeadings = "Automatically number headings" ;
$wikiViewWithFrames = "View pages using frames <i>(experimental, Konqueror ONLY!)</i>" ;
$wikiTurnedOn = "yes" ;
$wikiTurnedOff = "no" ;
$wikiTextboxDimensions = "Textbox dimensions :" ;
$wikiCols = "Cols : " ;
$wikiRows = "Rows : " ;
$wikiYourEmail = "Your email : " ;
$wikiResultsPerPage = "Return up to $1 search results per page" ;
$wikiTimeDiff = "Time diff. : $1 hours" ;
$wikiViewRecentChanges = "See the last $1 changes on ''Recent Changes''" ;
$wikiOutputEncoding = "Output encoding : ";

# User rights management
$allowedRoles = array ( "is_sysop" => "System operator" , "is_developer" => "System developer" , "is_trusted" => "Trusted hand" ) ;
$wikiChangeRights = "Change rights" ;
$wikiCurrentUserRights = "Current rights of <b>$1</b> :<br>\n" ;

# Search Page
$wikiSearchTitle = "Search" ;
$wikiSearchedVoid = "As you were searching for the void, you just found it." ;
$wikiNoSearchResult = "Sorry, we were unable to find an article matching the query \"$1\" in the title or body." ;
$wikiSearchHelp = "Please see [[wikipedia:Searching|help about searching]]." ;
$wikiFoundHeading = "Wikipedia articles" ;
$wikiFoundText = "The query ''$2'' resulted in $1 articles. For each article, you can see its first paragraph and the next paragraph that contains one of the search words in the query." ;
# keywords used for boolean search operators
# note: these must consist of character, no symbols allowed
$and = "and";
$or = "or";
$not = "not";
# syntax errors for parser of boolean search queries
$srchSyntErr = array (
                    "SYNTAX ERROR: missing '$1'; inserted",
                    "SYNTAX ERROR: unexpected '$1'; ignored",
                    "SYNTAX ERROR: illegal symbol '$1'; ignored",
                    "SYNTAX ERROR: the word '$1' is too short, the index requires at least $2 characters",
                    "SYNTAX ERROR: missing search word; inserted"
               ) ;   
$wikiSearchError = "Sorry, your boolean search query contains the following errors: " ;

# Misc
$wikiLonelyPagesTitle = "The Orphans" ;
$wikiLonelyPagesText = "'''These articles exist, but no articles link to them!'''<br>''Talk: pages, empty pages and #REDIRECTs are '''not''' listed here.''\n\n" ;
$wikiAllPagesTitle = "All Pages Index" ;
$wikiAllPagesText = "'''These are all the articles in the database!'''\n\n" ;
$wikiUnsuccessfulSearch = "Unsuccessful search for $1" ;
$wikiUnsuccessfulSearches = "wikipedia:Unsuccessful searches ($1)" ; # $1 becomes "YEAR-MONTH"
$wikiUserlistTitle = "User List" ;
$wikiUserlistText = "'''These are all wikipedia users (that have an account)!'''" ;
$wikiRecentChangesTitle = "Recent Changes" ;
$wikiRecentChangesLastDays = "These are the last <b>$1</b> of the changes made on Wikipedia in the last <b>$2</b> days." ;
$wikiRecentChangesSince = "These are the last <b>$1</b> of the changes made on Wikipedia since <b>$2</b>." ;
$wikiEditTypes = array ( "0"=>"" , "1"=>"<font color=cyan>M</font>" , "2"=>"<font color=green>N</font>" ) ; #Abbreviations for minor edits (1) and new pages (2) to be used on RecentChanges
$wikiViewLastDays = "View the last $1 days" ;
$wikiViewMaxNum = "View the last $1 changes" ;
$wikiListOnlyNewChanges = "List only new changes" ;
$wikiNewPagesTitle = "New pages" ;
$wikiNewPagesText = "These are the last <b>$1</b> new pages on Wikipedia in the last <b>$2</b> days." ;
$wikiRCLegend = " <b>Legend :</b> $1=Minor edit ; $2=New article." ;
$wikiDiff = "(diff)" ;
$wikiChange = "change" ;
$wikiChanges = "changes" ;
$wikiWatchYes = "\"$1\" was added to your [[special:WatchList|watch list]]." ;
$wikiWatchNo = "\"$1\" was removed from your [[special:WatchList|watch list]]." ;
$wikiWatchlistTitle = "Watch list" ;
$wikiWatchlistExistText = "'''Currently, you are watching the following existing articles :'''" ;
$wikiWatchlistNotExistText = "'''Currently, you are watching the following non-existing articles :'''" ;

# Statistics
$wikiStatisticsTitle = "Article statistics" ;
$wikiStatTotalPages = "There are $1 pages in the database. This includes '''Talk''' pages, pages about Wikipedia (defined as pages that have \"ikipedi\" in their title), #REDIRECT pages, subpages of genuine articles, as well as short \"junk\" pages that don't even contain a comma." ;
$wikiStatArticles = "Excluding all of those, we have $1 genuine encyclopedia articles!" ;
$wikiStatNoTalk = "If we include non-'''Talk''' subpages, we have a total of $1 articles." ;
$wikiStatSkin = "<font color=red>$1</font> of them use the \"$2\" skin." ;
$wikiStatOld = "And, there are $1 old page versions in the database, giving an average of $2 old versions for every active page." ;
$wikiUserStatistics = "User statistics" ;
$wikiStatUsers = "There are currently $1 [[special:ListUsers|users]] signed up." ;
$wikiStatSysops = "$1 of them have sysop status." ;

# Upload
$wikiUploadTitle = "Upload page" ;
$wikiUploadDenied = "You are neither an editor nor a sysop. Return to the <a href=\"$THESCRIPT?action=upload\">Upload page</a>" ;
$wikiUploadDeleted = "File <b>$1</b> deleted!" ;
$wikiUploadDelMsg1 = "*On $3, [[user:$1|$1]] deleted file '''$2'''\n" ;
$wikiUploadDelMsg2 = "Deletion of file $1" ;
$wikiUploadAffirm = "<nowiki>You need to affirm that the file you are uploading does not violate copygights. Return to the <a href=\"$THESCRIPT?title=special:upload\">Upload page</a></nowiki>" ;
$wikiUploadRestrictions = "<nowiki>You have to log in to upload a file!</nowiki>" ;
$wikiUploadFull = "Sorry, we are almost out of disk space. We can't let you upload any files right now." ;
$wikiUploadSuccess = "File <b>$1</b> was successfully uploaded!" ;
$wikiUploadSuccess1 = "*On $1, $2 uploaded file '''$3'''$4\n" ;
$wikiUploadSuccess2 = "Upload of file $1" ;
#$wikiUploadText = "<h2>Instructions:</h2><ul>\n" ;
$wikiUploadText = "<li><strong>Use this form to upload various files</strong></li>\n";
$wikiUploadText .= "<li>To replace a previously-uploaded file (e.g., a\n";
$wikiUploadText .= "new version of the article), simply re-upload the\n";
$wikiUploadText .= "same file. But first look below and make sure you\n";
$wikiUploadText .= "haven't changed the name.</li>\n";
$wikiUploadText .= "<li><strong>Here's how to upload your file. </strong>Click\n";
$wikiUploadText .= "&quot;Browse...&quot; to your find the file you\n";
$wikiUploadText .= "want to upload on your hard drive. This will open\n";
$wikiUploadText .= "a &quot;Choose file&quot; dialogue window.</li>\n";
$wikiUploadText .= "<li>When you've found the file, click &quot;Open.&quot;\n";
$wikiUploadText .= "This will select the file and close the &quot;Choose\n";
$wikiUploadText .= "file&quot; dialogue window.</li>\n";
$wikiUploadText .= "<li>Don't forget to check the copyright statement!</li>\n";
$wikiUploadText .= "<li>Then click &quot;Upload.&quot; The file will start uploading. This may take some time, if it's\n";
$wikiUploadText .= "a big file and you have a slow Internet connection.</li>\n";
$wikiUploadText .= "<li>A message will tell you when the file has successfully uploaded.</li>\n";
$wikiUploadText .= "<li>You can upload as many files you like. Please don't try to crash our server, ha ha.</li>\n";
$wikiUploadText .= "<li>All uploads and deletions are logged in the <a href=\"$THESCRIPT?title=Log:Uploads\">uploads log</a>.</li>\n";
$wikiUploadText .= "</ul>\n";
$wikiUploadShowFiles = "<br><center><a href=\"$1\">Click here to display all previously uploaded files</a></center><br>" ;
$wikiUploadAffirmText = "I hereby affirm that this file is not copyrighted, or that the copyright holder agrees to license it under the terms of the <a href=\"http://www.wikipedia.com/wiki/Wikipedia:Copyrights\">Wikipedia copyright</a>." ;
$wikiUploadButton = "Upload" ;
$wikiUploadPrev = "Previously-uploaded files:" ;
$wikiUploadSize = "Size (byte)" ;
$wikiFileRemoval = "File removal" ;
$wikiUploadRemove = "Click here to remove $1." ;

# Misc
$wikiHistoryTitle = "History of $1" ;
$wikiHistoryHeader = "This is the history of <a href=\"$THESCRIPT?title=$1\">$2</a>" ;
$wikiCurrentVersion = "current" ;
$wikiSpecialTitle = "Special Pages" ;
$wikiSpecialText = "<b>This is a list of special pages.</b> Some of them are only available if you are logged in. If you are logged in, you can have this list automatically displayed on the right or left of each page as a QuickBar.<br><br>" ;
$wikiStubTitle = "Short 'stub' articles" ;
$wikiLongPagesTitle = "The longest articles" ;
$wikiStubText = "'''These are all the articles in the database, sorted by length, shortest first.'''<br>''#REDIRECT pages and pages within a namespace (like Talk:) are '''not''' listed here!''\n\n" ;
$wikiLongPagesText = "'''These are all the articles in the database, sorted by length, longest first.'''<br>''#REDIRECT pages and pages within a namespace (like Talk:) are '''not''' listed here!''\n\n" ;
$wikiStubChars = "$1 chars" ;
$wikiAskSQL = "MySQL access" ;
$wikiAskSQLtext = "Developers can submit any <a href=\"" . wikilink("SQL") . "\">SQL</a> query, sysops can only submit SELECT queries. Please refrain from running queries that use a lot of resources. The database scheme is <a href=\"http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/wikipedia/phpwiki/fpw/wikipedia.sql?rev=HEAD&content-type=text/vnd.viewcvs-markup\">here</a>.";
$wikiSQLSafetyMessage = "Sorry, unless you are a developer you can only run SELECT queries." ;
$wikiStubDelete = "<b>Delete this page!</b>" ;
$wikiStubLinkHere = "$1 articles link here." ;
$wikiStubShowLinks = "Toggle \"show links\" option" ;
$wikiShowLinks = "Show pages that link to \"$1\"" ;
$wikiRecentChangesLinkedTitle = "Recent changes on pages linked from $1" ;
$wikiDeleteTitle = "Deleting article '$1'" ;
$wikiDeleteDenied = "<font size=\"+3\">You are not allowed to delete this page!</font>" ;
$wikiDeleteSuccess = "'$1' has been removed." ;
$wikiDeleteMsg1 = "*On $1, [[user:$2|$2]] permanently deleted page '''$3'''\n" ;
$wikiDeleteMsg2 = "Permanent deletion of $1" ;
$wikiDeleteAsk = "You are about to delete the article \"$1\" and its complete history!<br>\nIf you are absolutely sure you want to do this, <a href=\"$2&iamsure=yes\">click here</a>." ;
$wikiProtectTitle = "Protecting article '$1'" ;
$wikiProtectDenied = "<font size=\"+3\">You are not allowed to protect this page!</font>" ;
$wikiProtectNow = "Page '$1' is now protected as $2." ;
$wikiProtectText = "<font size=\"+2\">You can now edit the protection for '$1'</font><br><i>For example, use \"is_sysop\" to prevent anyone but sysops from editing that page. Separate several allowances by \",\"</i>" ;
$wikiProtectCurrent = "Current protection : " ;
$wikiContribTitle = "Contributions of $1" ;
$wikiContribText = "<h1>$1's contributions :</h1>\n(With the exception of minor edits and changes to ''talk'' and ''log'' pages)" ;
$wikiContribDenied = "State a user name!" ;
$wikiLinkhereTitle = "Pages that link to $1" ;
$wikiLinkhereBacklink = "These articles are linked back from [[$1]]:" ;
$wikiLinkhereNoBacklink = "These articles are ''not'' linked back from [[$1]]:" ;
$wikiBacklinkNolink = "There are no articles that link to [[$1]]!" ;
$wikiBacklinkFollowing = "The following articles link to [[$1]]:" ;
$wikiRedirectLinks = "The following articles link via redirects:" ;
$wikiLinkVia = "(via $1)" ;
$wikiWantedTitle = "The Most Wanted Pages" ;
$wikiWantedText = "'''These articles don't exist, but other articles link to them!''' (the top 50)<br>\n" ;
$wikiWantedToggleNumbers = "Click here to toggle the display of page titles starting with numbers (currently $1)" ;
$wikiWantedLine = "$1 is wanted by <b>$2</b> articles <nowiki>(see the <a href=\"$3\">pages that link to \"$4\"</a></nowiki>)" ;
$wikiLastChange = "Last edited: $1" ;
$wikiLastChangeCologne = "Page last modified: $1" ;
$wikiShowLastChange = "Show last change" ;
$wikiProtectThisPage = "Protect this page" ;
$wikiPopularPages = "Most popular" ;
$wikiPopularTitle = "Most Popular Pages" ;
$wikiRefreshThisPage = "Refresh this page" ;
$wikiResourcesWarning = "(Please, do this only when necessary, as this function uses a high amount of system resources)" ;
$wikiNoRefresh = "(The page was last refreshed just $1 minutes ago; please wait another $2 minutes and try again.)" ;
$wikiLastRefreshed = "Last refreshed $1" ;
$wikiValidate = "Validate this page" ;
$wikiBlockIP = "Block this IP" ;
$wikiNostalgy = "Nostalgia" ;
$wikiCologneBlue = "Cologne Blue" ;
$wikiUndiff = "undiff" ;
$wikiReadOnlyText = "Sorry, this is a read-only copy of wikipedia. You can, of course, edit this article at <a href=\"http://www.wikipedia.com/wiki/$1&action=edit\">wikipedia.com</a>!" ;
$wikiEditUserRights = "Edit user rights" ;
$wikiPermissionDenied = "Permission denied!" ;
$wikiEditUserTitle = "Edit user settings" ;
$wikiSkinClassic = "Classic" ;

# Vote
$wikiVoteReason = "Reason to vote : " ;
$wikiVoteBecause = ", because : <i>$1</i>" ;
$wikiVoteMessage = "Vote by $2 for $1" ;
$wikiVoteWarn = "<font size=+2>You did not say what you want to vote for! <a href=\"$1\">Try again</a>.</font>" ;
$wikiVotes = array ( "delete"=>"Votes for deletion", "rewrite"=>"Votes for rewrite" ,  "NPOV"=>"Votes for NPOVing" , "wikify"=>"Votes for wikification" , "aotd"=>"Votes for article-of-the-day" ) ;
$wikiVoteAdded = "<font size=+2>$1 has been added to <a href=\"$2\">$3</a>!</font>" ;
$wikiVoteError = "<font size=+2>Something went really wrong here!</font>" ;
$wikiVoteHeadingPre = "I want to vote for the article ";
$wikiVoteHeadingPost = " to be";
$wikiVoteChoices = "
<input type=radio value=delete name=voted> deleted<br>
<input type=radio value=rewrite name=voted> rewritten for clarity<br>
<input type=radio value=NPOV name=voted> rewritten to remove bias<br>
<input type=radio value=wikify name=voted> wikified (adding links etc.)<br>
<input type=radio value=aotd name=voted> recommended as article of the day<br><br>
Reason for my vote : <input type=text value=\"\" name=CommentBox size=35><br>
<input type=submit value=\"Vote\" name=doVote>
" ;
$wikiVoteExplanation = "Votes are recorded on the following pages:";

# Maintenance
$wikiMaintenance = "Maintenance Page" ;
$wikiNone = "none" ;
$wikiMaintenenceDenied = "Sorry, you have to be sysop to use the maintenance page. This is mainly due to the experimental nature of these functions, and the high system load." ;
$wikiMaintenanceText = "
<h2>Choose your poison :</h2>
* <a href='$1doubleredirects'>Find articles that REDIRECT to a REDIRECT</a>
* <a href='$1selflinks'>Find articles that link to themselves</a>
* <a href='$1talklinks'>Find articles that contain a link to their <i>talk</i> page</a>
* <a href='$1fileusage'>Uploaded files and where they are used</a> (experimental)
<h2>Your last query was : $2</h2>
$3
" ;

# Talk pages array
$wikiArticle = "Article" ;
$wikiNS2Talk = array ( "" => $wikiTalk , $wikiWikipedia => $wikiWikipedia."_".$wikiTalk , $wikiUser => $wikiUser."_".$wikiTalk ) ;
$wikiTalk2NS = array () ;
foreach ( array_keys ( $wikiNS2Talk ) as $x ) $wikiTalk2NS[$wikiNS2Talk[$x]] = $x ;

#---------------------------
#Functions
function wikiGetDateEn ( $x ) { # Used in RecentChangesLayout in special_functions.php
    global $wikiDate ;
    $dayName = $wikiDate [ strtolower ( date ( "l" , $x ) ) ];
    $monthName = $wikiDate [ strtolower ( date ( "F" , $x ) ) ];
    $dayNumber = date ( "j" , $x ) ;
    $year = date ( "Y" , $x ) ;
    return "$dayName, $monthName $dayNumber, $year" ;
    }
function wikiGetBriefDateEn () { #Brief date for link in sidebar
    global $wikiDate ;
    $monthName = $wikiDate [ strtolower ( date ( "F" ) ) ];
    $dayNumber = date ( "j" ) ;
    $year = date ( "Y" ) ;
    return "$monthName $dayNumber, $year" ;
    }
$wikiGetDate = 'wikiGetDateEn';
$wikiGetBriefDate = 'wikiGetBriefDateEn' ;

# In theory, this could be expanded to allow general conversion of the
# character encoding used in the database to another encoding optionally
# used on the browser end.

# Define these arrays if you need to set up conversion.
# $wikiEncodingCharsets = array("iso-8859-1");
# $wikiEncodingNames = array("Latin-1"); # Localised names

function wikiRecodeOutputEn($text) {
  # Stub
  # global $user;  # $user->options["encoding"] is an index into the above arrays
  return $text;
}

function wikiRecodeInputEn($text) {
  # Stub
  return $text;
}

$wikiRecodeOutput = 'wikiRecodeOutputEn';
$wikiRecodeInput = 'wikiRecodeInputEn';
?>
