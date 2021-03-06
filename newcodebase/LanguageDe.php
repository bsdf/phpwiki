<?
# See Language.php for notes.

/* private */ $wgNamespaceNamesDe = array(
	-1	=> "Spezial",
	0	=> "",
	1	=> "Diskussion",
	2	=> "Benutzer",
	3	=> "Benutzer_Diskussion",
	4	=> "Wikipedia",
	5	=> "Wikipedia_Diskussion",
	6	=> "Bild",
	7	=> "Bild_Diskussion"
);

/* private */ $wgDefaultUserOptionsDe = array(
	"quickbar" => 1, "underline" => 1, "hover" => 1,
	"cols" => 80, "rows" => 25, "searchlimit" => 20,
	"contextlines" => 5, "contextchars" => 50,
	"skin" => 0, "math" => 1, "rcdays" => 3, "rclimit" => 50,
	"highlightbroken" => 1, "stubthreshold" => 0
);

/* private */ $wgQuickbarSettingsDe = array(
	"Keine", "Links, fest", "Rechts, fest", "Links, schwebend"
);

/* private */ $wgSkinNamesDe = array(
	"Standard", "Nostalgia", "Cologne Blue"
);

/* private */ $wgMathNamesDe = array(
	"Immer als PNG",
	"Einfaches TeX als HTML, sonst PNG",
	"HTML wenn m?glich, sonst PNG",
	"Als TeX belassen (f?r Textbrowser)"
);


/* private */ $wgUserTogglesDe = array(
	"hover"	=> "Hinweis ?ber interne Verweise",
	"underline" => "Verweise unterstreichen",
	"highlightbroken" => "Verweise auf leere Themen hervorheben",
	"justify"	=> "Text als Blocksatz",
	"hideminor" => "Keine kleinen ?nderungen in Letzte ?nderungen anzeigen",
	"usenewrc" => "Erweiterte letzte ?nderungen (nicht f?r alle Browser geeignet)",
	"numberheadings" => "?berschriften automatisch numerieren",
	"rememberpassword" => "Passwort merken",
	"editwidth" => "Text-Eingabefeld mit voller Breite",
	"editondblclick" => "Seiten mit Doppelklick bearbeiten (JavaScript)",
	"watchdefault" => "Neue und ge?nderte Seiten beobachten",
	"minordefault" => "Alle ?nderungen als geringf?gig markieren",
	"previewontop" => "Vorschau vor dem Editierfenster anzeigen"
);

/* private */ $wgLanguageNamesDe = array(
	"af" => "Afrikaans",
	"ar" => "&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1617;&#1577; (Araby)",
	"ca" => "Catal?",
	"cs" => "&#268;esky",
	"cy" => "Cymraeg",
	"da" => "Dansk",
	"dk" => "Dansk",
	"el" => "&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Ellinika)",
	"en" => "English",
	"simple" => "Einfaches Englisch",
	"eo" => "Esperanto",
	"es" => "Espa?ol",
	"et" => "Esti",
	"eu" => "Euskara",
	"fi" => "Suomi",
	"fr" => "Fran?ais",
	"fy" => "Frysk",
	"ga" => "Gaeilge",
	"he" => "&#1506;&#1489;&#1512;&#1497;&#1514; (Ivrit)",
	"hr" => "Hrvatski",
	"hu" => "Magyar",
	"ia" => "Interlingua",
	"id" => "Indonesia",
	"is" => "?slenska",
	"it" => "Italiano",
	"ja" => "&#26085;&#26412;&#35486; (Nihongo)",
	"ko" => "&#54620;&#44397;&#50612; (Hangul)",
	"la" => "Latina",
	"lt" => "Lietuvi&#371;",
	"nl" => "Nederlands",
	"no" => "Norsk",
	"pl" => "Polski",
	"pt" => "Portugu?s",
	"ro" => "Rom?n&#259;",
	"ru" => "&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (Russkij)",
	"sh" => "Serbocroatisch",
	"sl" => "Slovensko",
	"sv" => "Svenska",
	"sw" => "Kiswahili",
	"tr" => "T?rk?e",
	"uk" => "&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; (Ukrayins`ka)",
	"zh" => "&#20013;&#25991; (Zhongwen)",
);

/* private */ $wgBookstoreListDe = array(
	"Verzeichnis lieferbarer B&uuml;cher" => "http://www.buchhandel.de/sixcms/list.php?page=buchhandel_profisuche_frameset&suchfeld=isbn&suchwert=$1&x=0&y=0",
	"abebooks.de" => "http://www.abebooks.de/servlet/BookSearchPL?ph=2&isbn=$1",
	"Amazon.de" => "http://www.amazon.de/exec/obidos/ISBN=$1",
	"Lehmanns Fachbuchhandlung" => "http://www.lob.de/cgi-bin/work/suche?flag=new&stich1=$1",
);

/* private */ $wgWeekdayNamesDe = array(
	"Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag",
	"Freitag", "Samstag"
);

/* private */ $wgMonthNamesDe = array(
	"Januar", "Februar", "M?rz", "April", "Mai", "Juni",
	"Juli", "August", "September", "Oktober", "November",
	"Dezember"
);

/* private */ $wgMonthAbbreviationsDe = array(
	"Jan", "Feb", "M?r", "Apr", "Mai", "Jun", "Jul", "Aug",
	"Sep", "Okt", "Nov", "Dez"
);

/* private */ $wgValidSpecialPagesDe = array(
	"Userlogin"		=> "",
	"Userlogout"	=> "",
	"Preferences"	=> "Meine Benutzereinstellungen",
	"Watchlist"		=> "Meine Beobachtungsliste",
	"Recentchanges" => "Zeige Letzte ?nderungen",
	"Upload"		=> "Dateien hochladen",
	"Imagelist"		=> "Zeige hochgeladene Dateien",
	"Listusers"		=> "Zeige registrierte Benutzer",
	"Statistics"	=> "Zeige Seitenstatistik",
	"Randompage"	=> "Zuf?lliger Artikel",

	"Lonelypages"	=> "Zeige verwaiste Artikel",
	"Unusedimages"	=> "Zeige verwaiste Dateien",
	"Popularpages"	=> "Zeige beliebte Artikel",
	"Wantedpages"	=> "Zeige gew?nschte Artikel",
	"Shortpages"	=> "Zeige kurze Artikel",
	"Longpages"		=> "Zeige lange Artikel",
	"Newpages"		=> "Zeige neue Artikel",
	"Allpages"		=> "Zeige alle Artikel (alphabetisch)",

	"Ipblocklist"	=> "Zeige blockierte IP-Addressen",
	"Maintenance" => "Wartungsseite",
	"Specialpages"  => "",
	"Contributions" => "",
	"Movepage"		=> "",
	"Emailuser"	=> "",
	"Whatlinkshere" => "",
	"Recentchangeslinked" => "",
	"Booksources"	=> "Externe Buchhandlungen"
);

/* private */ $wgSysopSpecialPagesDe = array(
	"Blockip"		=> "Blockiere eine IP-Addresse",
	"Asksql"		=> "Datenbank-Abfrage",
	"Undelete"              => "Gel?schte Seiten anzeigen und wiederherstellen"
);

/* private */ $wgDeveloperSpecialPagesDe = array(
	"Lockdb"		=> "Datenbank auf 'nur lesen' stellen",
	"Unlockdb"		=> "Datenbank Schreibzugriff wieder herstellen",
	"Debug"			=> "Zeige debugging information"
);

/* private */ $wgAllMessagesDe = array(

# Bits of text used by many pages:
#
"linktrail"		=> "/^([?|?|?|?|a-z]+)(.*)\$/sD",
"mainpage"		=> "Hauptseite",
"about"			=> "?ber",
"aboutwikipedia" => "?ber Wikipedia",
"aboutpage"		=> "Wikipedia:?ber_Wikipedia",
"help"			=> "Hilfe",
"helppage"		=> "Wikipedia:Hilfe",
"bugreports"	=> "Fehlerliste",
"bugreportspage" => "Wikipedia:Beobachtete_Fehler",
"faq"			=> "FAQ",
"faqpage"		=> "Wikipedia:H?ufig_gestellte_Fragen",
"edithelp"		=> "Editierhilfe",
"edithelppage"	=> "Wikipedia:Wie_man_eine_Seite_bearbeitet",
"cancel"		=> "Abbruch",
"qbfind"		=> "Finden",
"qbbrowse"		=> "Bl?ttern",
"qbedit"		=> "?ndern",
"qbpageoptions" => "Seitenoptionen",
"qbpageinfo"	=> "Seitendaten",
"qbmyoptions"	=> "Einstellungen",
"mypage"		=> "Meine Seite",
"mytalk"		=> "Meine Diskussion",
"currentevents" => "-",
"errorpagetitle" => "Fehler",
"returnto"		=> "Zur?ck zu $1.",
"fromwikipedia"	=> "aus Wikipedia, der freien Enzyklop?die",
"whatlinkshere"	=> "Was zeigt hierhin",
"help"			=> "Hilfe",
"search"		=> "Suche",
"history"		=> "Versionen",
"printableversion" => "Druckversion",
"editthispage"	=> "Seite bearbeiten",
"deletethispage" => "Artikel l?schen",
"protectthispage" => "Artikel sch?tzen",
"unprotectthispage" => "Schutz aufheben",
"newpage" => "Neue Seite",
"talkpage"		=> "Diskussion",
"articlepage"	=> "Artikel",
"wikipediapage" => "Wikipedia-Text",
"userpage" => "Benutzerseite",
"imagepage" => "Bildseite",
"viewtalkpage" => "Diskussion",
"otherlanguages" => "Andere Sprachen",
"redirectedfrom" => "(Weitergeleitet von $1)",
"lastmodified"	=> "Diese Seite wurde zuletzt ge?ndert um $1.",
"viewcount"		=> "Diese Seite wurde bisher $1 mal abgerufen.",
"gnunote" => "Diese Seite ist unter der <a class=internal href='/wiki/GNU_FDL'>GNU FDL</a> verf?gbar.",
"printsubtitle" => "(Von http://de.wikipedia.com)",
"protectedpage" => "Gesch?tzte Seite",
"administrators" => "Wikipedia:Administratoren",
"sysoptitle"	=> "Sysop-Zugang notwendig",
"sysoptext"		=> "Dieser Vorgang kann aus Sicherheitsgr?nden nur von Benutzern mit \"Sysop\"-Status durchgef?hrt werden. Siehe auch $1.",
"developertitle" => "Entwickler-Zugang notwendig",
"developertext"	=> "Dieser Vorgang kann aus Sicherheitsgr?nden nur von Benutzern mit \"Entwickler\"-Status durchgef?hrt werden. Siehe auch $1.",
"nbytes"		=> "$1 Byte",
"go"			=> "Los",
"ok"			=> "OK",
"sitetitle"		=> "Wikipedia",
"sitesubtitle"	=> "Die freie Enzyklop?die",
"retrievedfrom" => "Von \"$1\"",

# Main script and global functions
#
"nosuchaction"	=> "Diese Aktion gibt es nicht",
"nosuchactiontext" => "Diese Aktion wird von der Wikipedia-Software nicht unterst?tzt",
"nosuchspecialpage" => "Diese Spezialseite gibt es nicht",
"nospecialpagetext" => "Diese Spezialseite wird von der Wikipedia-Software nicht unterst?tzt",

# General errors
#
"databaseerror" => "Fehler in der Datenbank",
"dberrortext"	=> "Es gab einen Syntaxfehler in der Datenbankabfrage.
Das k?nnte eine illegale Suchanfrage sein (siehe $5),
oder ein Softwarefehler.
Die letzte Datenbankabfrage lautete:
<blockquote><tt>$1</tt></blockquote>
aus der Funktion \"<tt>$2</tt>\".
MySQL meldete den Fehler \"<tt>$3: $4</tt>\".",
"noconnect"		=> "Konnte keine Verbindung zur Datenbank auf $1 herstellen",
"nodb"			=> "Konnte Datenbank $1 nicht ausw?hlen",
"readonly"		=> "Datenbank ist geperrt",
"readonlytext"	=> "Die Datenbank der Wikipedia ist vorr?bergehend gesperrt, z.B. f?r Wartungsarbeiten. Bitte versuchen Sie es sp?ter noch einmal\n",
"missingarticle" => "Der Text f?r den Artikel \"$1\" wurde nicht in der Datenbank gefunden. Das ist wahrscheinlich ein Fehler in der Software. Bitte melden Sie dies einem Administrator, und geben sie den Artikelnamen an.",
"internalerror" => "Interner Fehler",
"filecopyerror" => "Konnte Datei \"$1\" nicht nach \"$2\" kopieren.",
"filerenameerror" => "Konnte Datei \"$1\" nicht nach \"$2\" umbenennen.",
"filedeleteerror" => "Konnte Datei \"$1\" nicht l?schen.",
"filenotfound"	=> "Konnte Datei \"$1\" nicht finden.",
"unexpected"	=> "Unerwarteter Wert: \"$1\"=\"$2\".",
"formerror"		=> "Fehler: Konnte Formular nicht verarbeiten",	
"badarticleerror" => "Diese Aktion kann auf diesen Artikel nicht angewendet werden.",
"cannotdelete"	=> "Kann spezifizierte Seite oder Artikel nicht l?schen. (Wurde m?glicherweise schon von jemand anderem gel?scht.)",
"badtitle"		=> "Ung?ltiger Titel",
"badtitletext"	=> "Der Titel der angeforderten Seite war ung?ltig, leer, oder ein ung?ltiger Sprachlink von einer anderen Wikipedia.",
"perfdisabled" => "Diese Funktion wurde wegen ?berlastung des Servers vorr?bergehend deaktiviert. Versuchen Sie es bitte zwischen 02:00 und 14:00 UTC noch einmal<br>(Aktuelle Serverzeit : ".date("H:i:s")." UTC).",


# Login and logout pages
#
"logouttitle"	=> "Benutzer-Abmeldung",
"logouttext"	=> "Sie sind nun abgemeldet.
Sie k?nnen Wikipedia jetzt anonym weiterbenutzen, oder sich unter dem selben oder einem anderen Benutzernamen wieder anmelden.\n",

"welcomecreation" => "<h2>Willkommen, $1!</h2><p>Ihr Benutzerkonto wurde eingerichtet.
Vergessen Sie nicht, Ihre Wikipedia-Einstellungen anzupassen.",

"loginpagetitle" => "Benutzer-Anmeldung",
"yourname"		=> "Ihr Benutzername",
"yourpassword"	=> "Ihr Passwort",
"yourpasswordagain" => "Passwort wiederholen",
"newusersonly"	=> " (nur f?r neue Mitglieder)",
"remembermypassword" => "Mein Passwort merken.",
"loginproblem"	=> "<b>Es gab ein Problem mit Ihrer Anmeldung.</b><br>Bitte versuchen Sie es nochmal!",
"alreadyloggedin" => "<font color=red><b>Benutzer $1, Sie sind bereits angemeldet!</b></font><br>\n",

"areyounew"		=> "Wenn Sie neu bei Wikipedia sind und ein Benutzerkonto m?chten,
geben Sie bitte ihren Benutzernamen und ihr Passwort ein und wiederholen sie das Passwort.
Ihre E-Mail-Addresse brauchen Sie nicht anzugeben, aber falls Sie Ihr Passwort vergessen sollten, k?nnen Sie sich ein neues zuschicken lassen.<br>\n",

"login"			=> "Anmelden",
"userlogin"		=> "Anmelden",
"logout"		=> "Abmelden",
"userlogout"	=> "Abmelden",
"createaccount"	=> "Neues Benutzerkonto anlegen",
"badretype"		=> "Die beiden Passw?rter stimmen nicht ?berein.",
"userexists"	=> "Dieser Benutzername ist schon vergeben. Bitte w?hlen Sie einen anderen.",
"youremail"		=> "Ihre E-Mail",
"yournick"		=> "Ihr \"Spitzname\" (zum \"Unterschreiben\")",
"emailforlost"	=> "Falls Sie Ihr Passwort vergessen, kann Ihnen ein neues an Ihre E-Mail-Addresse gesendet werden.",
"loginerror"	=> "Fehler bei der Anmeldung",
"noname"		=> "Sie m?ssen einen Benutzernamen angeben.",
"loginsuccesstitle" => "Anmeldung erfolgreich",
"loginsuccess"	=> "Sie sind jetzt als \"$1\" bei Wikipedia angemeldet.",
"nosuchuser"	=> "Der Benutzername \"$1\" existiert nicht.
?berpr?fen Sie die Schreibweise, oder melden Sie sich als neuer Benutzer an.",
"wrongpassword"	=> "Das Passwort ist falsch. Bitte versuchen Sie es erneut.",
"mailmypassword" => "Ein neues Passwort schicken",
"passwordremindertitle" => "Wikipedia Passwort",
"passwordremindertext" => "Jemand (IP-Addresse $1)
hat um ein neues Passwort f?r die Anmeldung bei Wikipedia gebeten.
Das Passwort f?r Benutzer \"$2\" lautet nun \"$3\".
Sie sollten sich jetzt anmelden und Ihr Passwort ?ndern.",
"noemail"		=> "Benutzer \"$1\" hat keine E-Mail-Addresse angegeben.",
"passwordsent"	=> "Ein neues Passwort wurde an die E-Mail-Addresse von Benutzer \"$1\" gesendet.
Bitte melden Si sich an, sobald Sie es erhalten.",

# Edit pages
#
"summary"		=> "Zusammenfassung",
"minoredit"		=> "Nur Kleinigkeiten wurden ver?ndert.",
"watchthis" => "Diesen Artikel beobachten",
"savearticle"	=> "Artikel speichern",
"preview"		=> "Vorschau",
"showpreview"	=> "Vorschau zeigen",
"blockedtitle"	=> "Benutzer ist blockiert",
"blockedtext"	=> "Ihr Benutzername oder Ihre IP-Addresse wurde von $1 blockiert.
Als Grund wurde angegeben:<br>$2<p>Bitte kontaktieren Sie den Administrator, um ?ber die Blockierung zu sprechen.",
"newarticle"	=> "(Neu)",
"newarticletext" => "Hier den Text des neuen Artikels eintragen.\nBitte nur in ganzen S?tzen schreiben und keine urheberrechtsgesch?tzten Texte anderer kopieren.",
"anontalkpagetext" => "---- ''Dies ist Die Diskussions-Seite eines nicht angemeldeten Benutzers. Wir m?ssen hier die numerische [[IP-Adresse]] zur Identifizierung verwenden. Eine solche Adresse kann nacheinander von mehreren Benutzer verwendet werden. Wenn Sie ein anonymer Benutzer sind und denken, dass irrelevante Kommentare an Sie gerichtet wurden, [[Spezial:Userlogin|melden Sie sich bitte an]], um zuk?nftige Verwirrung zu vermeiden. ''",
"noarticletext" => "(Dieser Artikel enth?lt momentan keinen Text)",
"updated"		=> "(Ge?ndert)",
"note"			=> "<strong>Hinweis:</strong> ",
"previewnote"	=> "Dies ist nur eine Vorschau, der Artikel wurde noch nicht gespeichert!",
"previewconflict" => "Diese Vorschau gibt den Inhalt des oberen Textfeldes wieder; so wird der Artikel aussehen, wenn Sie jetzt speichern.",
"editing"		=> "Bearbeiten von $1",
"editconflict"	=> "Bearbeitungs-Konflikt: $1",
"explainconflict" => "Jemand anders hat diesen Artikel ge?ndert, nachdem Sie angefangen haben, ihn zu bearbeiten.
Das obere Textfeld enth?lt den aktuellen Artikel.
Das untere Textfeld enth?lt Ihre ?nderungen.
Bitte f?gen Sie Ihre ?nderungen in das obere Textfeld ein.
<b>Nur</b> der Inhalt des oberen Textfeldes wird gespeichert, wenn Sie auf \"Speichern\" klicken!\n<p>",
"yourtext"		=> "Ihr Text",
"storedversion" => "Gespeicherte Version",
"editingold"	=> "<strong>ACHTUNG: Sie bearbeiten eine alte Version dieses Artikels.
Wenn Sie speichern, werden alle neueren Versionen ?berschrieben.</strong>\n",
"yourdiff"		=> "Unterschiede",
"copyrightwarning" => "
<b>Bitte <font size='+1'>kopieren Sie keine Webseiten</font>, die nicht Ihre eigenen sind, benutzen Sie <fonz size='+1'>keine urheberrechtlich gesch?tzten Werke</font> ohne Erlaubnis des Copyright-Inhabers!</b>
<p>Sie geben uns hiermit ihre Zusage, da? Sie den Text <strong>selbst verfasst</strong> haben, da? der Text Allgemeingut (<strong>public domain</strong>) ist, oder da? de <strong>Copyright-Inhaber</strong> seine <strong>Zustimmung</strong> gegeben hat. Falls dieser Text bereits woanders ver?ffentlicht wurde, weisen Sie bitte auf der 'Diskussion:'-Seite darauf hin.
<p><i>Bitte beachten Sie, dass alle Beitr?ge zur Wikipedia automatisch unter der \"GNU Freie Dokumentationslizenz\" stehen. Falls Sie nicht m?chten, dass Ihre Arbeit hier von anderen ver?ndert und verbreitet wird, dann dr?cken Sie nicht auf \"Speichern\".</i>",

# History pages
#
"revhistory"	=> "Fr?here Versionen",
"nohistory"		=> "Es gibt keine fr?heren Versionen von diesem Artikel.",
"revnotfound"	=> "Keine fr?heren Versionen gefunden",
"revnotfoundtext" => "Die Version dieses Artikels, nach der Sie suchen, konnte nicht gefunden werden. Bitte ?berpr?fen Sie die URL dieser Seite.\n",
"loadhist"		=> "Lade Liste mit fr?heren Versionen",
"currentrev"	=> "Aktuelle Version",
"revisionasof"	=> "Version vom $1",
"cur"			=> "Aktuell",
"next"			=> "N?chste",
"last"			=> "Letzte",
"orig"			=> "Original",
"histlegend"	=> "Legende:
(Aktuell) = Unterschied zur aktuellen Version,
(Letzte) = Unterschied zur vorherigen Version,
M = Kleine ?nderung",

# Diffs
#
"difference"	=> "(Unterschied zwischen Versionen)",
"loadingrev"	=> "lage Versionen zur Unterscheidung",
"lineno"		=> "Zeile $1:",
"editcurrent"	=> "Die aktuelle Version dieses Artikels bearbeiten",

# Search results
#
"searchresults" => "Suchergebnisse",
"searchhelppage" => "Wikipedia:Suche",
"searchingwikipedia" => "Wikipedia durchsuchen",
"searchresulttext" => "F?r mehr Information ?ber Wikipedia, siehe $1.",
"searchquery"	=> "F?r die Suchanfrage \"$1\"",
"badquery"		=> "Falsche Suchanfrage",
"badquerytext"	=> "Wir konnten Ihre Suchanfrage nicht verarbeiten.
Vermutlich haben Sie versucht, ein Wort zu suchen, das k?rzer als zwei Buchstaben ist.
Dies funktioniert im Moment noch nicht.
M?glicherweise haben Sie auch die Anfrage falsch formuliert, z.B.
\"Lohn und und Steuern\".
Bitte versuchen Sie eine anders formulierte Anfrage.",
"matchtotals"	=> "Die Anfrage \"$1\" stimmt mit $2 Artikel?berschriften
und dem Text von $3 Artikeln ?berein.",
"nogomatch" => "Es existiert kein Artikel mit diesem Namen. Bitte versuchen Sie die Volltextsuche. ",
"titlematches"	=> "?bereinstimmungen mit ?berschriften",
"notitlematches" => "Keine ?bereinstimmungen",
"textmatches"	=> "?bereinstimmungen mit Texten",
"notextmatches"	=> "Keine ?bereinstimmungen",
"prevn"			=> "letzte $1",
"nextn"			=> "n?chste $1",
"viewprevnext"	=> "Zeige ($1) ($2) ($3).",
"showingresults" => "Hier sind <b>$1</b> Ergebnisse, beginnend mit #<b>$2</b>.",
"nonefound"		=> "<strong>Hinweis</strong>:
Erfolglose Suchanfragen werden h?ufig verursacht durch den Versuch, nach 'gew?hnlichen' Worten zu suchen; diese sind nicht indiziert.",
"powersearch" => "Suche",
"powersearchtext" => "
Suche in Namensr?umen :<br>
$1<br>
$2 Zeige auch REDIRECTs &nbsp; Suche nach $3 $9",



# Preferences page
#
"preferences"	=> "Einstellungen",
"prefsnologin" => "Nicht angemeldet",
"prefsnologintext"	=> "Sie m?ssen <a href=\"" .
  wfLocalUrl( "Spezial:Userlogin" ) . "\">angemeldet</a>
sein, um Ihre Einstellungen zu ?ndern.",
"prefslogintext" => "Sie sind angemeldet als \"$1\".
Ihre interne ID-Nummer ist $2.",
"prefsreset"	=> "Einstellungen wuden auf Standard zur?ckgesetzt.",
"qbsettings"	=> "Seitenleiste", 
"changepassword" => "Passwort ?ndern",
"skin"			=> "Skin",
"math"			=> "TeX darstellen",
"math_failure"		=> "Parser-Fehler",
"math_unknown_error"	=> "Unbekannter Fehler",
"math_unknown_function"	=> "Unbekannte Funktion ",
"math_lexing_error"	=> "'Lexing'-Fehler",
"math_syntax_error"	=> "Syntaxfehler",
"saveprefs"		=> "Einstellungen speichern",
"resetprefs"	=> "Einstellungen zur?cksetzen",
"oldpassword"	=> "Altes Passwort",
"newpassword"	=> "Neues Passwort",
"retypenew"		=> "Neues Passwort (nochmal)",
"textboxsize"	=> "Textfeld-Gr?sse",
"rows"			=> "Zeilen",
"columns"		=> "Spalten",
"searchresultshead" => "Suchergebnisse",
"resultsperpage" => "Treffer pro Seite",
"contextlines"	=> "Zeilen pro Treffer",
"contextchars"	=> "Zeichen pro Zeile",
"stubthreshold" => "Kurze Artikel markieren bis",
"recentchangescount" => "Anzahl \"Letzte ?nderungen\"",
"savedprefs"	=> "Ihre Einstellungen wurden gespeichert.",
"timezonetext"	=> "Geben Sie die Anzahl der Stunden ein, die zwischen Ihrer Zeitzone und UTC liegen.",
"localtime"	=> "Ortszeit",
"timezoneoffset" => "Unterschied",
"emailflag"		=> "Keine E-Mail von anderen Benutzern erhalten",

# Recent changes
#
"changes" => "?nderungen",
"recentchanges" => "Letzte ?nderungen",
"recentchangestext" => "
Diese Seite wird beim Laden automatisch aktualisiert. Angezeigt werden Seiten, die zuletzt bearbeitet wurden, sowie die Zeit und der Name des Autors.<br>
Falls Sie neu bei Wikipedia sind, lesen Sie bitte die [[Wikipedia:Willkommen|Willkommensseite der Wikipedia]] und [[Wikipedia:Erste Schritte|Erste Schritte]].<br>
Wenn Sie m?chten, dass Wikipedia zu einem Erfolg wird, dann f?gen Sie bitte keine Texte hinzu, die dem [[Wikipedia:Urheberrechte beachten|Urheberrecht]] anderer unterliegen. Dies k?nnte dem Projekt sonst schweren Schaden zuf?gen.
Beachten Sie auch die letzten ?nderungen auf [[m:Special:Recentchanges|Metawikipedia]]",
"rcloaderr"		=> "Lade Letzte ?nderungen",
"rcnote"		=> "Hier sind die letzten <b>$1</b> ?nderungen der letzten <b>$2</b> Tage. (<b>N</b> - Neuer Artikel; <b>M</b> - kleine ?nderung)",
"rcnotefrom"	=> "Dies sind die ?nderungen seit <b>$2</b> (bis zu <b>$1</b> gezeigt).",
"rclistfrom"	=> "Zeige neue ?nderungen seit $1",
"rclinks"		=> "Zeige die letzten $1 ?nderungen; zeige die letzten $2 Tage.",
"diff"			=> "Unterschied",
"hist"			=> "Versionen",
"hide"			=> "Verbergen",
"show"			=> "Anzeigen",
"tableform"		=> "Tabelle",
"listform"		=> "Liste",
"nchanges"		=> "$1 ?nderungen",
"minoreditletter" => "M",
"newpageletter" => "N",


# Upload
#
"upload"		=> "Hochladen",
"uploadbtn"		=> "Dateien hochladen",
"uploadlink"		=> "Bilder hochladen",
"reupload"		=> "Erneut hochladen",
"reuploaddesc"	=> "Zur?ck zur Hochladen-Seite.",
"uploadnologin" => "Nicht angemeldet",
"uploadnologintext"	=> "Sie m?ssen <a href=\"" .
  wfLocalUrl( "Spezial:Userlogin" ) . "\">angemeldet sein</a>
um Dateien hochladen zu k?nnen.",
"uploadfile"	=> "Datei hochladen",
"uploaderror"	=> "Fehler beim Hochladen",
"uploadtext"	=> "
Um hochgeladene Bilder zu suchen und anzusehen,
gehen Sie zu der <a href=\"" . wfLocalUrl( "Spezial:Imagelist" ) .
"\">Liste hochgeladener Bilder</a>.
<p>Benutzen Sie das Formular, um neue Bilder hochzuladen und
sie in Artikeln zu verwenden.
In den meisten Browsern werden Sie ein \"Durchsuchen\"-Feld sehen,
das einen Standard-Dateidialog ?ffnet.
Suchen Sie sich eine Datei aus. Die Datei wird dann im Textfeld angezeigt.
Best?tigen Sie dann die Copyright-Vereinbarung.
Schlie?lich dr?cken Sie den \"Hochladen\"-Knopf.
Dies kann eine Weile dauern, besonders bei einer langsamen Internet-Verbindung.
<p>F?r Photos wird das JPEG-Format, f?r Zeichnungen und Symbole das PNG-Format bevorzugt.
Um ein Bild in einem Artikel zu verwenden, schreiben Sie an Stelle des Bildes
<b>[[bild:datei.jpg]]</b> oder <b>[[bild:datei.jpg|Beschreibung]]</b>.
<p>Bitte beachten Sie, dass, genau wie bei den Artikeln, andere Benutzer Ihre Dateien l?schen oder ver?ndern k?nnen.",
"uploadlog"		=> "Datei-Logbuch",
"uploadlogpage" => "Datei-Logbuch",
"uploadlogpagetext" => "Hier ist die Liste der letzten hochgeladenen Dateien.
Alle Zeiten sind UTC.
<ul>
</ul>
",
"uploadlogtext" => "Hochgeladene und gel?schte Dateien werden im $1 verzeichnet.",
"filename"		=> "Dateiname",
"filedesc"		=> "Beschreibung",
"affirmation"	=> "Hiermit best?tige ich, dass ich das Copyright dieser Datei habe, und diese hiermit unter $1 ver?ffentliche, bzw. dass die Datei 'Public Domain' ist.",
"copyrightpage" => "Wikipedia:Copyright",
"copyrightpagename" => "Wikipedia copyright",
"uploadedfiles"	=> "Hochgeladene Dateien",
"noaffirmation" => "Sie m?ssen best?tigen, dass das Hochladen der Datei keine Copyright-Verletzung darstellt.",
"ignorewarning"	=> "Warnung ignorieren und Datei trotzdem speichern.",
"minlength"		=> "Bilddateien m?ssen mindestens drei Buchstaben haben.",
"badfilename"	=> "Der Bildname wurde in \"$1\" ge?ndert.",
"badfiletype"	=> "\".$1\" ist kein empfohlenes Dateiformat.",
"largefile"		=> "Bitte keine Bilder ?ber 100 KByte hochladen.",
"successfulupload" => "Erfolgreich hochgeladen",
"fileuploaded"	=> "Die Datei \"$1\" wurde erfolgreich hochgeladen.",
"uploadwarning" => "Warnung",
"savefile"		=> "Datei speichern",
"uploadedimage" => "\"$1\" hochgeladen",

# Image list
#
"imagelist"		=> "Bilderliste",
"imagelisttext"	=> "Hier ist eine Liste von $1 Bildern, sortiert $2.",
"getimagelist"	=> "Lade Bilderliste",
"ilshowmatch"	=> "Zeige alle Bilder mit Namen",
"ilsubmit"		=> "Suche",
"showlast"		=> "Zeige die letzten $1 Bilder, sortiert nach $2.",
"all"			=> "alle",
"byname"		=> "nach Name",
"bydate"		=> "nach Datum",
"bysize"		=> "nach Gr?sse",
"imgdelete"		=> "L?schen",
"imgdesc"		=> "Beschreibung",
"imglegend"		=> "Legende: (Beschreibung) = Zeige/Bearbeite Bildbeschreibung.",
"imghistory"	=> "Bild-Versionen",
"revertimg"		=> "Zur?cksetzen",
"deleteimg"		=> "L?schen",
"imghistlegend" => "Legende: (cur) = Dies ist das aktuelle Bild, (L?schen) = l?sche
diese alte Version, (Zur?cksetzen) = verwende wieder diese alte Version.",
"imagelinks"	=> "Bildverweise",
"linkstoimage"	=> "Die folgenden Artikel benutzen dieses Bild:",
"nolinkstoimage" => "Kein Artikel benutzt dieses Bild.",

# Statistics
#
"statistics"	=> "Statistik",
"sitestats"		=> "Seitenstatistik",
"userstats"		=> "Benutzerstatistik",
"sitestatstext" => "Es gibt insgesamt <b>$1</b> Seiten in der Datenbank.
Das schliesst \"Diskussion\"-Seiten, Seiten ?ber Wikipedia, extrem kurze Artikel, Weiterleitungen und andere Seiten ein, die nicht als Artikel gelten k?nnen.
Diese ausgenommen, gibt es <b>$2</b> Seiten, die als Artikel gelten k?nnen.<p>
Es wurden insgesamt <b>$3</b>&times; Seiten aufgerufen, und <b>$4</b>&times; Seiten bearbeitet.
Daraus ergeben sich <b>$5</b> Bearbeitungen pro Seite, und <b>$6</b> Betrachtungen pro Bearbeitung.",
"userstatstext" => "Es gibt <b>$1</b> registrierte Benutzer.
Davon haben <b>$2</b> Administrator-Rechte (siehe $3).",

# Maintenance Page
#
"maintenance"		=> "Wartungsseite",
"maintnancepagetext"	=> "Diese Seite enth?lt mehrere praktische Funktionen zur t?glichen Wartung von Wikipedia. Einige dieser Funktionen k?nnen die Datenbank stark beanspruchen, also bitte nicht nach jeder ?nderung neu laden ;-)",
"maintenancebacklink"	=> "Zur?ck zur Wartungsseite",
"disambiguations"	=> "Begriffskl?rungsseiten",
"disambiguationspage"	=> "Wikipedia:Begriffskl?rung",
"disambiguationstext"	=> "Die folgenden Artikel verweisen auf eine <i>Seite zur Begriffskl?rung</i>. Sie sollten statt dessen auf die eigentlich gemeinte Seite verweisen.<br>Eine Seite wird als Begriffskl?rungsseite behandelt, wenn $1 auf sie verweist.<br>Verweise aus Namensr?umen werden hier <i>nicht</i> aufgelistet.",
"doubleredirects"	=> "Doppelte Redirects",
"doubleredirectstext"	=> "<b>Achtung:</b> Diese Liste kann \"falsche Positive\" enthalten. Das ist dann der Fall, wenn ein Redirect au?er dem Redirect-Verweis noch weiteren Text mit anderen Verweisen enth?lt. Letztere sollten dann entfernt werden.",
"brokenredirects"	=> "Kaputte Redirects",
"brokenredirectstext"	=> "Die folgenden Redirects leiten zu einem nicht existierenden Artikel weiter",
"selflinks"		=> "Seiten, die auf sich selbst verweisen",
"selflinkstext"		=> "Die folgenden Artikel verweisen auf sich selbst, was sie nicht sollten.",
"mispeelings"           => "Seiten mit falsch geschriebenen Worten",
"mispeelingstext"       => "Die folgenden Seiten enthalten falsch geschriebene Worte, wie sie auf $1 definiert sind. In Klammern angegebene Worte geben die korrekte Schreibweise wieder.",
"mispeelingspage"       => "Liste von Tippfehlern",
"missinglanguagelinks"  => "Fehlende Sprachverweise",
"missinglanguagelinksbutton"    => "Zeige fehlende Sprachverweise nach",
"missinglanguagelinkstext"      => "Diese Artikel haben <i>keinen</i> Verweis zu ihrem Gegenst?ck in $1. Redirects und Unterseiten werden <i>nicht</i> angezeigt.",


# Miscellaneous special pages
#
"orphans"		=> "Verwaiste Seiten",
"lonelypages"	=> "Verwaiste Seiten",
"unusedimages"	=> "Verwaiste Bilder",
"popularpages"	=> "Beliebte Seiten",
"nviews"		=> "$1 Abfragen",
"wantedpages"	=> "Gew?nschte Seiten",
"nlinks"		=> "$1 Verweise",
"allpages"		=> "Alle Artikel",
"randompage"	=> "Zuf?lliger Artikel",
"shortpages"	=> "Kurze Artikel",
"longpages"		=> "Lange Artikel",
"listusers"		=> "Benutzerverzeichnis",
"specialpages"	=> "Spezialseiten",
"spheading"		=> "Spezialseiten",
"sysopspheading" => "Spezialseiten f?r Sysops",
"developerspheading" => "Spezialseiten f?r Entwickler",
"protectpage"	=> "Artikel sch?tzen",
"recentchangeslinked" => "Verlinkte Seiten",
"rclsub"		=> "(auf Artikel von \"$1\")",
"debug"			=> "Debug",
"newpages"		=> "Neue Artikel",
"movethispage"	=> "Artikel verschieben",
"unusedimagestext" => "<p>Bitte beachten Sie, dass andere Wikipedias, die noch die alte Software verwenden, m?glicherweise einige dieser Bilder benutzen.",
"booksources"	=> "Buchhandlungen",
"booksourcetext" => "Dies ist eine Liste mit Links zu Internetseiten, die neue und gebrauchte B?cher verkaufen. Dort kann es auch weitere Informationen ?ber die B?cher geben, die Sie interessieren. Wikipedia ist mit keinem dieser Anbieter gesch?ftlich verbunden.",

# Email this user
#
"mailnologin"	=> "Sie sind nicht angemeldet.",
"mailnologintext" => "Sie m?ssen <a href=\"" .
  wfLocalUrl( "Spezial:Userlogin" ) . "\">angemeldet sein</a>
und eine g?ltige E-Mail-Addresse haben, um anderen Benutzern E-Mail zu schicken.",
"emailuser"		=> "E-Mail an diesen Benutzer",
"emailpage"		=> "E-Mail an Benutzer",
"emailpagetext"	=> "Wenn dieser Benutzer eine g?ltige E-Mail-Addresse angegeben hat, k?nnen Sie ihm mit dem untenstehenden Formular eine E-Mail senden. Als Absender wird die E-Mail-Addresse aus Ihren Einstellungen eingetragen, damit der Benutzer Ihnen antworten kann.",
"noemailtitle"	=> "Keine E-Mail-Addresse",
"noemailtext"	=> "Dieser Benutzer hat keine g?ltige E-Mail-Addresse angegeben, oder m?chte keine E-Mail von anderen Benutzern empfangen.",
"emailfrom"		=> "Von",
"emailto"		=> "An",
"emailsubject"	=> "Betreff",
"emailmessage"	=> "Nachricht",
"emailsend"		=> "Senden",
"emailsent"		=> "E-Mail verschickt",
"emailsenttext" => "Ihre E-Mail wurde verschickt.",


# Beobachtungsliste
#
"watchlist"		=> "Beobachtungsliste",
"watchlistsub"	=> "(f?r Benutzer \"$1\")",
"nowatchlist"	=> "Sie haben keine Eintr?ge auf Ihrer Beobachtungsliste.",
"watchnologin"	=> "Sie sind nicht angemeldet",
"watchnologintext"	=> "Sie m?ssen <a href=\"" .
  wfLocalUrl( "Spezial:Userlogin" ) . "\">angemeldet</a>
sein, um Ihre Beobachtungsliste zu bearbeiten.",
"addedwatch"	=> "Zur Beobachtungsliste hinzugef?gt",
"addedwatchtext" => "Der Artikel \"$1\" wurde zu Ihrer Beobachtungsliste hinzugef?gt.",
"removedwatch"	=> "Von der Beobachtungsliste entfernt",
"removedwatchtext" => "Der Artikel \"$1\" wurde von Ihrer Beobachtungsliste entfernt.",
"watchthispage"	=> "Seite beobachten",
"unwatchthispage" => "Nicht mehr beobachten",
"notanarticle"	=> "Kein Artikel",

# Delete/protect/revert
#
"deletepage"	=> "Seite l?schen",
"confirm"		=> "Best?tigen",
"confirmdelete" => "L?schung best?tigen",
"deletesub"		=> "(L?sche \"$1\")",
"confirmdeletetext" => "Sie sind dabei, einen Artikel oder ein Bild und alle ?lteren Versionen permanent aus der Datenbank zu l?schen.
Bitte best?tigen Sie Ihre Absicht, dies zu tun, dass Sie sich der Konsequenzen bewusst sind, und dass Sie in ?bereinstimmung mit [[Wikipedia:Leitlinien|den Wikipedia Leitlinien]] handeln.",
"confirmcheck"	=> "Ja, ich m?chte den L?schvorgang fortsetzen.",
"actioncomplete" => "Aktion beendet",
"deletedtext"	=> "\"$1\" wurde gel?scht.
Im $2 finden Sie eine Liste der letzten L?schungen.",
"deletedarticle" => "\"$1\" gel?scht",
"dellogpage"	=> "L?sch-Logbuch",
"dellogpagetext" => "Hier ist eine Liste der letzten L?schungen (UTC).
<ul>
</ul>
",
"deletionlog"	=> "L?sch-Logbuch",
"reverted"		=> "Auf eine alte Version zur?ckgesetzt",
"deletecomment"	=> "Grund der L?schung",
"imagereverted" => "Auf eine alte version zur?ckgesetzt.",

# Undelete
"undelete" => "Gel?schte Seite wiederherstellen",
"undeletepage" => "Gel?schte Seiten anzeigen und wiederherstellen",
"undeletepagetext" => "Die folgenden Seiten wurden gel?scht, sind aber immer noch
gespeichert und k?nnen wiederhergestellt werden.",
"undeletearticle" => "Gel?schten Artikel wiederherstellen",
"undeleterevisions" => "$1 Versionen archiviert",
"undeletehistory" => "Wenn Sie diese Seite wiederherstellen, werden auch alle alten
Versionen wiederhergestellt. Wenn seit der L?schung ein neuer Artikel gleichen
Namens erstellt wurde, werden die wiederhergestellten Versionen als alte Versionen
dieses Artikels erscheinen.",
"undeleterevision" => "Gel?schte Version vom $1",
"undeletebtn" => "Wiederherstellen!",
"undeletedarticle" => "\"$1\" wiederhergestellt",
"undeletedtext"   => "Der Artikel [[$1]] wurde erfolgreich wiederhergestellt.",

# Contributions
#
"contributions"	=> "Benutzerbeitr?ge",
"mycontris" => "Meine Beitr?ge",
"contribsub"	=> "F?r $1",
"nocontribs"	=> "Es wurden keine ?nderungen f?r diese Kriterien gefunden.",
"ucnote"		=> "Dies sind die letzten <b>$1</b> Beitr?ge des Benutzers in den letzten <b>$2</b> Tagen.",
"uclinks"		=> "Zeige die letzten $1 Beitr?ge; zeige die letzten $2 Tage.",
"uctop"		=> " (top)" ,

# What links here
#
"whatlinkshere"	=> "Was zeigt hierhin",
"notargettitle" => "Kein Artikel angegeben",
"notargettext"	=> "Sie haben nicht angegeben, auf welche Seite Sie diese Funktion anwenden wollen.",
"linklistsub"	=> "(Liste der Verweise)",
"linkshere"		=> "Die folgenden Artikel verweisen hierhin:",
"nolinkshere"	=> "Kein Artikel verweist hierhin.",
"isredirect"	=> "Weiterleitungs-Seite",

# Block/unblock IP
#
"blockip"		=> "IP-Addresse blockieren",
"blockiptext"	=> "Benutzen Sie das Formular, um eine IP-Addresse zu blockieren.
Dies sollte nur erfolgen, um Vandalismus zu verhindern, in ?bereinstimmung mit den [[Wikipedia:Leitlinien|Wikipedia-Leitlinien]].
Bitte tragen Sie den Grund f?r die Blockade ein.",
"ipaddress"		=> "IP-Addresse",
"ipbreason"		=> "Grund",
"ipbsubmit"		=> "Addresse blockieren",
"badipaddress"	=> "Die IP-Addresse hat ein falsches Format.",
"noblockreason" => "Sie m?ssen einen Grung f?r die Blockade angeben.",
"blockipsuccesssub" => "Blockade erfolgreich",
"blockipsuccesstext" => "Die IP-Addresse \"$1\" wurde blockiert.
<br>Auf [[Spezial:Ipblocklist|IP block list]] ist eine Liste der Blockaden.",
"unblockip"		=> "IP-Addresse freigeben",
"unblockiptext"	=> "Benutzen Sie das Formular, um eine blockierte IP-Addresse freizugeben.",
"ipusubmit"		=> "Diese Addresse freigeben",
"ipusuccess"	=> "IP-Addresse \"$1\" wurde freigegeben",
"ipblocklist"	=> "Liste blockierter IP-Addressen",
"blocklistline"	=> "$1, $2 blockierte $3",
"blocklink"		=> "blockieren",
"unblocklink"	=> "freigeben",
"contribslink"	=> "Beitr?ge",

# Developer tools
#
"lockdb"		=> "Datenbank sperren",
"unlockdb"		=> "Datenbank freigeben",
"lockdbtext"	=> "Mit dem Sperren der Datenbank werden alle ?nderungen an Benutzereinstellungen, watchlisten, Artikeln usw. verhindert. Bitte best?tigen Sie Ihre Absicht, die Datenbank zu sperren.",
"unlockdbtext"	=> "Das Aufheben der Datenbank-Sperre wird alle ?nderungen wieder zulassen. Bitte best?tigen Sie Ihre Absicht, die Sperrung aufzuheben.",
"lockconfirm"	=> "Ja, ich m?chte die Datenbank sperren.",
"unlockconfirm"	=> "Ja, ich m?chte die Datenbank freigeben.",
"lockbtn"		=> "Datenbank sperren",
"unlockbtn"		=> "Datenbank freigeben",
"locknoconfirm" => "Sie haben das Best?tigungsfeld nicht markiert.",
"lockdbsuccesssub" => "Datenbank wurde erfolgreich gesperrt",
"unlockdbsuccesssub" => "Datenbank wurde erfolgreich freigegeben",
"lockdbsuccesstext" => "Die Wikipedia-Datenbank wurde gesperrt.
<br>Bitte geben Sie die Datenbank wieder frei, sobald die Wartung abgeschlossen ist.",
"unlockdbsuccesstext" => "Die Wikipedia-Datenbank wurde freigegeben.",

# SQL query
#
"asksql"		=> "SQL-Abfrage",
"asksqltext"	=> "Benutzen Sie das Formular f?r eine direkte Datenbank-Abfrage.
Benutze einzelne Hochkommata ('so'), um Text zu begrenzen.
Bitte diese Funktion vorsichtig benutzen!",
"sqlquery"		=> "Abfrage eingeben",
"querybtn"		=> "Abfrage starten",
"selectonly"	=> "Andere Abfragen als \"SELECT\" k?nnen nur von Entwicklern benutzt werden.",
"querysuccessful" => "Abfrage erfolgreich",

# Move page
#
"movepage"		=> "Artikel verschieben",
"movepagetext"	=> "Mit diesem Formular k?nnen Sie einen Artikel umbenennen, mitsamt allen Versionen. Der alte Titel wird zum neuen weiterleiten. Verweise auf den alten Titel werden nicht ge?ndert, und die Diskussionsseite wird auch nicht mitverschoben.",
"movepagetalktext" => "Die dazugeh?rige Diskussionsseite wird, sofern vorhanden, mitverschoben, '''es sei denn:'''
*Sie verschieben die Seite in einen anderen Namensraum, oder
*Es existiert bereits eine Diskussionsseite mit diesem Namen, oder
*Sie w?hlen die untenstehende Option ab

In diesen F?llen m?ssen Sie die Seite, falls gew?nscht, von Hand verschieben.",
"movearticle"	=> "Artikel verschieben",
"newtitle"		=> "Zu neuem Titel",
"movepagebtn"	=> "Artikel verschieben",
"pagemovedsub"	=> "Verschiebung erfolgreich",
"pagemovedtext" => "Artikel \"$1\" wurde nach \"$2\" verschoben.",
"articleexists" => "Unter diesem Namen existiert bereits ein Artikel.
Bitte w?hlen Sie einen anderen Namen.",
"movedto"		=> "verschoben nach",
"movetalk"		=> "Die \"Diskussions\"-Seite mitverschieben, wenn m?glich.",
"talkpagemoved" => "Die \"Diskussions\"-Seite wurde ebenfalls verschoben.",
"talkpagenotmoved" => "Die \"Diskussions\"-Seite wurde <strong>nicht</strong> verschoben.",

);

class LanguageDe extends Language {

	function getDefaultUserOptions () {
		global $wgDefaultUserOptionsDe ;
		return $wgDefaultUserOptionsDe ;
		}

	function getBookstoreList () {
		global $wgBookstoreListDe ;
		return $wgBookstoreListDe ;
	}

	function getNamespaces() {
		global $wgNamespaceNamesDe;
		return $wgNamespaceNamesDe;
	}

	function getNsText( $index ) {
		global $wgNamespaceNamesDe;
		return $wgNamespaceNamesDe[$index];
	}

	function getNsIndex( $text ) {
		global $wgNamespaceNamesDe;

		foreach ( $wgNamespaceNamesDe as $i => $n ) {
			if ( 0 == strcasecmp( $n, $text ) ) { return $i; }
		}
		return false;
	}

	function specialPage( $name ) {
		return $this->getNsText( Namespace::getSpecial() ) . ":" . $name;
	}

	function getQuickbarSettings() {
		global $wgQuickbarSettingsDe;
		return $wgQuickbarSettingsDe;
	}

	function getSkinNames() {
		global $wgSkinNamesDe;
		return $wgSkinNamesDe;
	}

	function getMathNames() {
		global $wgMathNamesDe;
		return $wgMathNamesDe;
	}

	function getUserToggles() {
		global $wgUserTogglesDe;
		return $wgUserTogglesDe;
	}

	function getLanguageNames() {
		global $wgLanguageNamesDe;
		return $wgLanguageNamesDe;
	}

	function getLanguageName( $code ) {
		global $wgLanguageNamesDe;
		if ( ! array_key_exists( $code, $wgLanguageNamesDe ) ) {
			return "";
		}
		return $wgLanguageNamesDe[$code];
	}

	function getMonthName( $key )
	{
		global $wgMonthNamesDe;
		return $wgMonthNamesDe[$key-1];
	}

	function getMonthAbbreviation( $key )
	{
		global $wgMonthAbbreviationsDe;
		return $wgMonthAbbreviationsDe[$key-1];
	}

	function getWeekdayName( $key )
	{
		global $wgWeekdayNamesDe;
		return $wgWeekdayNamesDe[$key-1];
	}

	# Inherit userAdjust()
 
	function date( $ts, $adj = false )
	{
		if ( $adj ) { $ts = $this->userAdjust( $ts ); }

		$d = (0 + substr( $ts, 6, 2 )) . ". " .
		$this->getMonthAbbreviation( substr( $ts, 4, 2 ) ) .
		  " " . 
		  substr( $ts, 0, 4 );
		return $d;
	}

	function time( $ts, $adj = false )
	{
		if ( $adj ) { $ts = $this->userAdjust( $ts ); }

		$t = substr( $ts, 8, 2 ) . ":" . substr( $ts, 10, 2 );
		return $t;
	}

	function timeanddate( $ts, $adj = false )
	{
		return $this->time( $ts, $adj ) . ", " . $this->date( $ts, $adj );
	}

	function getValidSpecialPages()
	{
		global $wgValidSpecialPagesDe;
		return $wgValidSpecialPagesDe;
	}

	function getSysopSpecialPages()
	{
		global $wgSysopSpecialPagesDe;
		return $wgSysopSpecialPagesDe;
	}

	function getDeveloperSpecialPages()
	{
		global $wgDeveloperSpecialPagesDe;
		return $wgDeveloperSpecialPagesDe;
	}

	function getMessage( $key )
	{
                global $wgAllMessagesDe, $wgAllMessagesEn;
                $m = $wgAllMessagesDe[$key];

                if ( "" == $m ) { return $wgAllMessagesEn[$key]; }
                else return $m;
	}
}

?>
