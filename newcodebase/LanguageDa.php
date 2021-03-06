<?

# NOTE: To turn off "Current Events" in the sidebar,
# set "currentevents" => "-"

# The names of the namespaces can be set here, but the numbers
# are magical, so don't change or move them!  The Namespace class
# encapsulates some of the magic-ness.
#
/* private */ $wgNamespaceNamesDa = array(
	-1	=> "Speciel",
	0	=> "",
	1	=> "Diskussion",
	2	=> "Bruger",
	3	=> "Bruger_diskussion",
	4	=> "Wikipedia",
	5	=> "Wikipedia_diskussion",
	6	=> "Billede",
	7	=> "Billede_diskussion"
);

/* private */ $wgDefaultUserOptionsDa = array(
	"quickbar" => 1, "underline" => 1, "hover" => 1,
	"cols" => 80, "rows" => 25, "searchlimit" => 20,
	"contextlines" => 5, "contextchars" => 50,
	"skin" => 0, "math" => 1, "rcdays" => 7, "rclimit" => 50,
	"highlightbroken" => 1, "stubthreshold" => 0
);

/* private */ $wgQuickbarSettingsDa = array(
	"Ingen", "Fast venstre", "Fast h?jre", "Flydende venstre"
);

/* private */ $wgSkinNamesDa = array(
	"Standard", "Nostalgi", "Cologne Bl?"
);

/* private */ $wgMathNamesDa = array(
	"Vis altid som PNG",
	"HTML hvis meget simpel ellers PNG",
	"HTML hvis muligt ellers PNG",
	"Lad v?re som TeX (for tekst browsere)",
    "Anbefalet til moderne browsere"
);

/* private */ $wgUserTogglesDa = array(
	"hover"		=> "Vis sv?vende tekst over wiki links",
	"underline" => "Understreg links",
	"highlightbroken" => "R?de links til tomme sider",
	"justify"	=> "Just?r paragraffer",
	"hideminor" => "Gem sm? redigeringer i sidste ?ndringer",
	"usenewrc" => "Udvidet seneste ?ndringer (ikke for alle browsere)",
	"numberheadings" => "Automatisk nummerering af overskrifter",
	"rememberpassword" => "Husk password til n?ste bes?g",
	"editwidth" => "Redigeringsboksen har fuld bredde",
	"editondblclick" => "Rediger sider med dobbeltklik (JavaScript)",
	"watchdefault" => "Overv?g nye og ?ndrede artikler",
	"minordefault" => "Marker som standard alle ?ndringer som mindre",
	"previewontop" => "Vis forh?ndsvisning f?r redigeringsboksen"
	
);

/* private */ $wgBookstoreListDa = array(
	"Bibliotek.dk" => "http://bibliotek.dk/vis.php?base=dfa&origin=kommando&field1=ccl&term1=is=$1&element=L&start=1&step=10",
	"Bogguide.dk" => "http://www.bogguide.dk/find_boeger_bog.asp?ISBN=$1",
	"AddALL" => "http://www.addall.com/New/Partner.cgi?query=$1&type=ISBN",
	"PriceSCAN" => "http://www.pricescan.com/books/bookDetail.asp?isbn=$1",
	"Barnes & Noble" => "http://shop.barnesandnoble.com/bookSearch/isbnInquiry.asp?isbn=$1",
	"Amazon.com" => "http://www.amazon.com/exec/obidos/ISBN=$1"
);

/* Note: native names of languages are preferred where known to maximize
   ease of navigation -- people should be able to recognize their own
   languages! */
/* private */ $wgLanguageNamesDa = array(
    "aa"    => "Afar",
    "ab"    => "Abkhazian",
	"af"	=> "Afrikaans",
	"am"	=> "Amharisk",
	"ar" => "&#8238;&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;&#8236; (Araby)",
	"as"	=> "Assamesisk",
	"ay"	=> "Aymar?",
	"az"	=> "Aserbajdsjansk",
	"ba"	=> "Bajkirsk",
	"be" => "&#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#1089;&#1082;&#1080;",
	"bh"	=> "Bihara",
	"bi"	=> "Bislama",
	"bn"	=> "Bengalsk",
	"bo"	=> "Tibetansk",
	"br" => "Brezhoneg",
	"bs" => "Bosnisk",
	"ca" => "Catal&#224;",
	"ch" => "Chamoru",
	"co"	=> "Korsikansk",
	"cs" => "&#268;esk&#225;",
	"cy" => "Cymraeg",
	"da" => "Dansk", # Note two different subdomains. 
    "dk" => "Dansk", # 'da' is correct for the language.
	"de" => "Deutsch",
	"dz"	=> "Bhutansk",
	"el" => "&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Ellenika)",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Espa&#241;ol",
	"et" => "Eesti",
	"eu" => "Euskara",
	"fa" => "&#8238;&#1601;&#1585;&#1587;&#1609;&#8236;(Farsi)",
	"fi" => "Suomi",
	"fj"	=> "Fijian",
	"fo"	=> "F?r?sk",
	"fr" => "Fran&#231;ais",
	"fy"	=> "Frisisk",
	"ga"	=> "Irsk",
	"gl"	=> "Galicisk",
	"gn"	=> "Guarani",
	"gu" => "&#2711;&#2753;&#2716;&#2736;&#2750;&#2724;&#2752; (Gujarati)",
	"ha"	=> "Hausa",
	"he" => "&#1506;&#1489;&#1512;&#1497;&#1514; (Ivrit)",
	"hi" => "&#2361;&#2367;&#2344;&#2381;&#2342;&#2368; (Hindi)",
	"hr" => "Hrvatski",
	"hu" => "Magyar",
	"hy"	=> "Armensk",
	"ia" => "Interlingua",
	"id" => "Indonesia",
	"ik"	=> "Inupiaq",
	"is" => "&#205;slenska",
	"it" => "Italiano",
	"iu"	=> "Inuktitut",
	"ja" => "&#26085;&#26412;&#35486; (Nihongo)",
	"jv"	=> "Javanesisk",
	"ka" => "&#4325;&#4304;&#4320;&#4311;&#4309;&#4308;&#4314;&#4312; (Kartuli)",
	"kk"	=> "Kasakhisk",
	"kl"	=> "Gr?nlandsk",
	"km"	=> "Cambodjansk",
	"kn"	=> "Kannaresisk",
	"ko" => "&#54620;&#44397;&#50612; (Hangukeo)",
	"ks"	=> "Kashmiri",
	"kw" => "Kernewek",
	"ky"	=> "Kirgisisk",
	"la" => "Latina",
	"ln"	=> "Lingala",
	"lo"	=> "Laotisk",
	"lt" => "Lietuvi&#371;",
	"lv"	=> "Lettisk",
	"mg" => "Malagasy",
	"mi"	=> "Maori",
	"mk"	=> "Makedonisk",
	"ml"	=> "Maltesisk",
	"mn"	=> "Mongolsk",
	"mo"	=> "Moldovisk",
	"mr"	=> "Marathi",
	"ms" => "Bahasa Melayu",
	"my"	=> "Burmesisk",
	"na"	=> "Nauru",
	"ne" => "&#2344;&#2375;&#2346;&#2366;&#2354;&#2368; (Nepali)",
	"nl" => "Nederlands",
	"no" => "Norsk",
	"oc"	=> "Occitansk",
	"om"	=> "Oromo",
	"or"	=> "Orija",
	"pa"	=> "Panjabi",
	"pl" => "Polski",
	"ps"	=> "Pashto",
	"pt" => "Portugu&#234;s",
	"qu"	=> "Kechua",
	"rm"	=> "Rh?toromansk",
	"rn"	=> "Rundi",
	"ro" => "Rom&#226;n&#259;",
	"ru" => "&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (Russkij)",
	"rw"	=> "Kinyarwanda",
	"sa" => "&#2360;&#2306;&#2360;&#2381;&#2325;&#2371;&#2340; (Samskrta)",
	"sd"	=> "Sindhi",
	"sg"	=> "Sango",
	"sh"	=> "Kroatisk",
	"si"	=> "Singalesisk",
	"simple" => "Simple English",
	"sk"	=> "Slovakisk",
	"sl"	=> "Slovensko",
	"sm"	=> "Samoansk",
	"sn"	=> "Shona",
	"so" => "Soomaali",
	"sq" => "Shqiptare",
	"sr" => "Srpski",
	"ss"	=> "Swati",
	"st"	=> "Sotho",
	"su"	=> "Sudanesisk",
	"sv" => "Svenska",
	"sw" => "Kiswahili",
	"ta"	=> "Tamilsk",
	"te"	=> "Telugu",
	"tg"	=> "Tajik",
	"th"	=> "Thai",
	"ti"	=> "Tigrinja",
	"tk"	=> "Turkmensk",
	"tl"	=> "Tagalog",
	"tn"	=> "Tswana",
	"to"	=> "Tonga",
	"tr" => "T&#252;rk&#231;e",
	"ts"	=> "Tsonga",
	"tt"	=> "Tatarisk",
	"tw"	=> "Twi",
	"ug"	=> "Uigurisk",
	"uk" => "&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; (Ukrayins`ka)",
	"ur"	=> "Urdu",
	"uz"	=> "Uzbekisk",
	"vi"	=> "Vietnamesisk",
	"vo" => "Volap&#252;k",
	"wo"	=> "Wolof",
	"xh" => "isiXhosa",
	"yi"	=> "Jiddisch",
	"yo"	=> "Yoruba",
	"za"	=> "Zhuang",
	"zh" => "&#20013;&#25991; (Zhongwen)",
	"zu"	=> "Zulu"
);

/* private */ $wgWeekdayNamesDa = array(
	"S?ndag", "Mandag", "Tirsdag", "Onsdag", "Torsdag",
	"Fredag", "L?rdag"
);

/* private */ $wgMonthNamesDa = array(
	"januar", "februar", "marts", "april", "maj", "juni",
	"juli", "august", "september", "oktober", "november",
	"december"
);

/* private */ $wgMonthAbbreviationsDa = array(
	"Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug",
	"Sep", "Okt", "Nov", "Dec"
);

# All special pages have to be listed here: a description of ""
# will make them not show up on the "Special Pages" page, which
# is the right thing for some of them (such as the "targeted" ones).
#
/* private */ $wgValidSpecialPagesDa = array(
	"Userlogin"	=> "",
	"Userlogout"	=> "",
	"Preferences"	=> "Mine brugerindstillinger",
	"Watchlist"	=> "Min overv?gningsliste",
	"Recentchanges" => "Seneste ?ndringer",
	"Upload"	=> "Upload filer",
	"Imagelist"	=> "Billedliste",
	"Listusers"	=> "Registrerede brugere",
	"Statistics"	=> "Statistik om siden",
	"Randompage"	=> "Tilf?ldig artikel",

	"Lonelypages"	=> "For?ldrel?se artikler",
	"Unusedimages"	=> "For?ldrel?se filer",
	"Popularpages"	=> "Popul?re artikler",
	"Wantedpages"	=> "Mest ?nskede artikler",
	"Shortpages"	=> "Korte artikler",
	"Longpages"	=> "Lange artikler",
	"Newpages"	=> "De nyeste artikler",
	"Intl"		=> "Sproglinks",
	"Allpages"	=> "Alle sider efter titel",

	"Ipblocklist"	=> "Blokerede IP adresser",
	"Maintenance"	=> "Vedligeholdelsesside",
	"Specialpages"  => "",
	"Contributions" => "",
	"Emailuser"		=> "",
	"Whatlinkshere" => "",
	"Recentchangeslinked" => "",
	"Movepage"		=> "",
	"Booksources"	=> "Eksterne bogkilder"
);

/* private */ $wgSysopSpecialPagesDa = array(
	"Blockip"		=> "Bloker en IP adresse",
	"Asksql"		=> "Lav en query i databasen",
	"Undelete"		=> "Se og gendan slettede sider"
);

/* private */ $wgDeveloperSpecialPagesDa = array(
	"Lockdb"		=> "Skrivebeskyt databasen",
	"Unlockdb"		=> "Gendan skriveadgangen til databasen",
	"Debug"			=> "Debug information"
);

/* private */ $wgAllMessagesDa = array(

# Bits of text used by many pages:
#
"linktrail"		=> "/^([a-z|?|?|?]+)(.*)\$/sD",
"mainpage"		=> "Forside",
"about"			=> "Om",
"aboutwikipedia" => "Om Wikipedia",
"aboutpage"		=> "Wikipedia:Om",
"help"			=> "Hj?lp",
"helppage"		=> "Wikipedia:Hj?lp",
"wikititlesuffix" => "Wikipedia",
"bugreports"	=> "Fejlrapporter",
"bugreportspage" => "Wikipedia:Fejlrapporter",
"faq"			=> "OSS",
"faqpage"		=> "Wikipedia:OSS",
"edithelp"		=> "Hj?lp til redigering",
"edithelppage"	=> "Wikipedia:Hvordan_redigerer_jeg_en_side",
"cancel"		=> "Afbryd",
"qbfind"		=> "Find",
"qbbrowse"		=> "Gennemse",
"qbedit"		=> "Rediger",
"qbpageoptions" => "Indstillinger for side",
"qbpageinfo"	=> "Information om side",
"qbmyoptions"	=> "Mine indstillinger",
"mypage"		=> "Min side",
"mytalk"		=> "Min diskussion",
"currentevents" => "Aktuelle begivenheder",
"errorpagetitle" => "Fejl",
"returnto"		=> "Tilbage til $1.",
"fromwikipedia"	=> "Fra Wikipedia, den frie encyklop?di.",
"whatlinkshere"	=> "Sider med et link hertil",
"help"			=> "Hj?lp",
"search"		=> "S?g",
"go"		=> "Udf?r",
"history"		=> "Historie",
"printableversion" => "Printervenlig version",
"editthispage"	=> "Rediger side",
"deletethispage" => "Slet side",
"protectthispage" => "Beskyt side",
"unprotectthispage" => "Fjern beskyttelse af side",
"newpage" => "Ny side",
"talkpage"		=> "Diskussionssiden",
"articlepage"	=> "Se artiklen",
"subjectpage"	=> "Se emnesiden",
"userpage" => "Se brugersiden",
"wikipediapage" => "Se metasiden",
"imagepage" => 	"Se billedsiden",
"viewtalkpage" => "Se diskussion",
"otherlanguages" => "Andre sprog",
"redirectedfrom" => "(Omdirigeret fra $1)",
"lastmodified"	=> "Sidst ?ndret den $1.",
"viewcount"		=> "Siden er vist ialt $1 gange.",
"gnunote" => "Denne side er udgivet under <a class=internal href='/wiki/GNU_FDL'>GNU FDL</a>.",
"printsubtitle" => "(Fra http://da.wikipedia.org)",
"protectedpage" => "Beskyttet side",
"administrators" => "Wikipedia:Administratorer",
"sysoptitle"	=> "Sysop adgang p?kr?vet",
"sysoptext"		=> "Den funktion du har bedt om kan kun
udf?res af brugere med \"sysop\" status. Se $1.",
"developertitle" => "Developer adgang p?kr?vet",
"developertext"	=> "Den funktion du har bedt om kan kun
udf?res af brugere med \"developer\" status. Se $1.",
"nbytes"		=> "$1 bytes",
"go"			=> "Udf?r",
"ok"			=> "OK",
"sitetitle"		=> "Wikipedia",
"sitesubtitle"	=> "Den frie encyklop?di",
"retrievedfrom" => "Hentet fra \"$1\"",
"newmessages" => "Du har $1.",
"newmessageslink" => "nye beskeder",

# Main script and global functions
#
"nosuchaction"	=> "Funktionen findes ikke",
"nosuchactiontext" => "Den funktion der er specificeret i URL'en kan ikke
genkendes af Wikipedia softwaren",
"nosuchspecialpage" => "S?dan en speciel side findes ikke",
"nospecialpagetext" => "Du har bedt om en speciel side der ikke
kan genkendes af Wikipedia softwaren.",

# General errors
#
"error"			=> "Fejl",
"databaseerror" => "Database fejl",
"dberrortext"	=> "Der er sket en database query syntax fejl.
Dette kan v?re p? grund af en illegal s?ge query (se $5),
eller det kan betyde en fejl i softwaren.
Den sidst fors?gte database query var:
<blockquote><tt>$1</tt></blockquote>
fra funktionen \"<tt>$2</tt>\".
MySQL returnerede fejlen \"<tt>$3: $4</tt>\".",
"noconnect"		=> "Kunne ikke forbinde til databasen p? $1",
"nodb"			=> "Kunne ikke v?lge databasen $1",
"readonly"		=> "Databasen er skrivebeskyttet",
"enterlockreason" => "Skriv en begrundelse for skrivebeskyttelsen, inklusive 
et estimat p? hvorn?r skrivebeskyttelsen vil blive oph?vet igen",
"readonlytext"	=> "Wikipedia databasen er for ?jeblikket skrivebeskyttet for 
nye sider og andre modifikationer, sandsynligvis for rutinem?ssig database 
vedligeholdelse, hvorefter den vil returnere til normal.
Den administrator der skrivebeskyttede den har denne forklaring:
<p>$1",
"missingarticle" => "Databasen fandt ikke teksten p? en side
som den skulle have fundet, med navnet \"$1\".
Dette er ikke en database fejl, men sandsynligvis en fejl i softwaren.
Send venligst en rapport om dette til en administrator, 
hvor du ogs? n?vner URL'en.",
"internalerror" => "Intern fejl",
"filecopyerror" => "Kunne ikke kopiere filen \"$1\" til \"$2\".",
"filerenameerror" => "Kunne ikke omd?be filen \"$1\" til \"$2\".",
"filedeleteerror" => "Kunne ikke slette filen \"$1\".",
"filenotfound"	=> "Kunne ikke finde filen \"$1\".",
"unexpected"	=> "Uventet v?rdi: \"$1\"=\"$2\".",
"formerror"		=> "Fejl: kunne ikke afsende form",
"badarticleerror" => "Denne funktion kan ikke udf?res p? denne side.",
"cannotdelete"	=> "Kunne ikke slette siden eller filen der blev 
specificeret.",
"badtitle"		=> "Forkert titel",
"badtitletext"	=> "Den ?nskede sides titel var ulovlig, tom eller siden
er forkert linket fra en Wikipedia p? et andet sprog.",
"perfdisabled" => "Desv?rre! Denne funktion er midlertidigt afbrudt, 
fordi den belaster databasen meget h?rdt, i en s?dan grad at siden 
bliver meget langsom. Funktionen bliver forh?bentlig omskrevet i den 
n?rmeste fremtid (m?ske af dig, vi er jo open source!!).",

# Login and logout pages
#
"logouttitle"	=> "Bruger log af",
"logouttext"	=> "Du er nu logget af.
Du kan forts?tte med at bruge Wikipedia anonymt, eller du kan logge p?
igen som den samme eller en anden bruger.\n",

"welcomecreation" => "<h2>Velkommen, $1!</h2><p>Din konto er blevet 
oprettet. Glem ikke at personligg?re dine Wikipedia indstillinger.",

"loginpagetitle" => "Bruger log p?",
"yourname"		=> "Dit brugernavn",
"yourpassword"	=> "Dit password",
"yourpasswordagain" => "Gentag password",
"newusersonly"	=> " (kun nye brugere)",
"remembermypassword" => "Husk mit password til n?ste gang.",
"loginproblem"	=> "<b>Der har v?ret et problem med at logge dig 
p?.</b><br>Pr?v igen!",
"alreadyloggedin" => "<font color=red><b>Bruger $1, du er allerede logget 
p?!</b></font><br>\n",
"areyounew"		=> "Hvis du er ny p? Wikipedia og gerne vil have en 
bruger konto, s? indtast et brugernavn, derefter indtaster du et 
password og gentager samme password. Din e-mail adresse er valgfri; 
hvis du mister dit password kan du bede om
at f? det sendt til den adresse du har oplyst.<br>\n",

"login"			=> "Log p?",
"userlogin"		=> "Log p?",
"logout"		=> "Log af",
"userlogout"	=> "Log af",
"createaccount"	=> "Opret en ny konto",
"badretype"		=> "De passwords du indtastede er ikke ens.",
"userexists"	=> "Det brugernavn du har valgt er allerede i brug. V?lg 
venligst et andet brugernavn.",
"youremail"		=> "Din e-mail *",
"yournick"		=> "Dit ?genavn (til signaturer)",
"emailforlost"	=> "* Det er valgfrit om du vil oplyse din e-mail adresse. 
Men det g?r andre brugere i stand til at sende dig en e-mail, uden at 
du beh?ves offentligg?re din e-mail adresse, og det g?r at du kan f? et 
nyt password sendt til din e-mail adresse.",
"loginerror"	=> "Fejl med at logge p?",
"noname"		=> "Du har ikke specificeret et gyldigt brugernavn.",
"loginsuccesstitle" => "Logget p? med success",
"loginsuccess"	=> "Du er nu logget p? Wikipedia som \"$1\".",
"nosuchuser"	=> "Der er ingen bruger med navnet \"$1\".
Tjek stavem?den igen, eller brug formen herunder til at lave en ny bruger 
konto.",
"wrongpassword"	=> "Det password du indtastede var forkert. Pr?v igen.",
"mailmypassword" => "Send mig et nyt password med e-mail",
"passwordremindertitle" => "Nyt password fra Wikipedia",
"passwordremindertext" => "Nogen (sandsynligvis dig, fra IP adressen $1)
har bedt om at vi sender dig et nyt password til at logge p? Wikipedia.
Det nye password for bruger \"$2\" er nu \"$3\".
Du b?r logge p? nu og ?ndre dit password.",
"noemail"		=> "Der er ikke oplyst nogen e-mail adresse for bruger \"$1\".",
"passwordsent"	=> "Et nyt password er sendt til e-mail adressen
der er registreret for \"$1\".
Du b?r logge p? og ?ndre dit password straks efter du har modtaget det.",

# Edit pages
#
"summary"		=> "Beskrivelse",
"minoredit"		=> "Dette er en mindre ?ndring.",
"watchthis"		=> "Overv?g denne artikel",
"savearticle"	=> "Gem side",
"preview"		=> "Forh?ndsvisning",
"showpreview"	=> "Forh?ndsvisning",
"blockedtitle"	=> "Brugeren er blokeret",
"blockedtext"	=> "Dit brugernavn eller din IP adresse er blevet blokeret af 
$1. Begrundelsen der er blevet givet er denne:<br>$2<p>Du kan kontakte 
administratoren for at diskutere blokeringen.",
"newarticle"	=> "(Ny)",
"newarticletext" => "Der er p? nuv?rende tidspunkt ingen tekst p? denne side.<br>
Du kan begynde en artikel ved at skrive i boksen herunder. 
(se [[Wikipedia:Hj?lp|hj?lpen]] for yderligere information).<br>
Hvis det ikke var din mening, s? tryk p? '''Tilbage''' eller '''Back''' knappen.",
"anontalkpagetext" => "---- ''Dette er en diskussionsside for anonyme brugere der 
ikke har oprettet en konto endnu eller ikke bruger den. Vi er derfor n?dt til at 
bruge den nummeriske [[IP adresse]] til at identificere ham eller hende.
En IP adresse kan v?re delt mellem flere brugere. Hvis du er en anonym bruger 
og syntes at du har f?et irrelevante kommentarer p? s?dan en side, s? v?r 
venlig og [[Speciel:Userlogin|logge p?]] s? vi undg?r fremtidige 
forvekslinger med andre anonyme brugere.'' ",
"noarticletext" => "(Der er p? nuv?rende tidspunkt ingen tekst p? denne 
side)",
"updated"		=> "(Opdateret)",
"note"			=> "<strong>Note:</strong> ",
"previewnote"	=> "Husk at dette er kun en forh?ndsvisning, og siden er ikke 
gemt endnu!",
"previewconflict" => "Denne forh?ndsvisning er resultatet af den 
redigerbare tekst ovenfor,
s?dan vil det komme til at se ud hvis du v?lger at gemme teksten.",
"editing"		=> "Redigerer $1",
"editconflict"	=> "Redigeringskonflikt: $1",
"explainconflict" => "Nogen har ?ndret denne side efter du
startede p? at redigerer den.
Den ?verste tekst boks indeholder den nuv?rende tekst.
Dine ?ndringer er vist i den nederste tekst boks.
Du er n?dt til at sammenflette dine ?ndringer med den eksisterende tekst.
<b>Kun</b> teksten i den ?verste tekst boks vil blive gemt n?r du
trykker \"Gem side\".\n<p>",
"yourtext"		=> "Din tekst",
"storedversion" => "Den gemte version",
"editingold"	=> "<strong>ADVARSEL: Du redigerer en gammel version
af denne side
Hvis du gemmer den, vil alle ?ndringer lavet siden denne revision v?re 
overskrevet.</strong>\n",
"yourdiff"		=> "Forskelle",
"copyrightwarning" => "L?g m?rke til at alle bidrag til Wikipedia er
at betragte som udgivet under GNU Free Documentation License
(se $1 for detaljer).
Hvis du ikke vil have din tekst redigeret uden n?de og kopieret efter
forgodtbefindene, s? skal du ikke l?gge det her.<br>
Du lover os ogs? at du skrev teksten selv, eller kopierede fra en
public domain eller lignende fri resurce.
<strong>L?G ALDRIG MATERIALE HER SOM ER BESKYTTET AF ANDRES OPHAVSRET UDEN 
DERES TILLADELSE!</strong>",
"longpagewarning" => "ADVARSEL: Denne side er $1 kilobytes lang; nogle
browsere kan have problemer med at redigerer sider der n?rmer sig eller 
er l?ngere end 32kb. Overvej om ikke siden kan splittes op i mindre dele.",

# History pages
#
"revhistory"	=> "Versionshistorie",
"nohistory"		=> "Der er ingen versionshistorie for denne side.",
"revnotfound"	=> "Versionen er ikke fundet",
"revnotfoundtext" => "Den gamle version af den side du spurgte efter kan 
ikke findes. Tjek den URL du brugte til at f? adgang til denne side.\n",
"loadhist"		=> "L?ser sidens historie",
"currentrev"	=> "Nuv?rende version",
"revisionasof"	=> "Versionen fra $1",
"cur"			=> "nuv?rende",
"next"			=> "n?ste",
"last"			=> "forrige",
"orig"			=> "originale",
"histlegend"	=> "Forklaring: (nuv?rende) = forskel til den nuv?rende 
version, (forrige) = forskel til den forrige version, M = mindre ?ndring",

# Diffs
#
"difference"	=> "(Forskelle mellem versioner)",
"loadingrev"	=> "l?ser version til at se forskelle",
"lineno"		=> "Linje $1:",
"editcurrent"	=> "Rediger den nuv?rende version af denne side",

# Search results
#
"searchresults" => "S?ge resultater",
"searchhelppage" => "Wikipedia:S?gning",
"searchingwikipedia" => "S?gning p? Wikipedia",
"searchresulttext" => "For mere information om s?gning p? Wikipedia, se 
$1.",
"searchquery"	=> "For query \"$1\"",
"badquery"		=> "Forkert udformet s?ge foresp?rgsel",
"badquerytext"	=> "Vi kunne ikke udf?re din foresp?rgsel.
Det er sandsynligvis fordi du har fors?gt at s?ge efter et ord med
f?rre end tre bogstaver, hvilket ikke underst?ttes endnu.
Det kan ogs? v?re du har skrevet forkert, for
eksempel \"fisk og og skaldyr\".
Pr?v en anden foresp?rgsel.",
"matchtotals"	=> "Foresp?rgslen \"$1\" matchede $2 artikel titler
og teksten i $3 artikler.",
"nogomatch" => "Ingen sider med pr?cis denne titel eksisterer, pr?ver 
fuldteksts?gning istedet for. ",
"titlematches"	=> "Artikel titler der matchede foresp?rgslen",
"notitlematches" => "Ingen artikel titler matchede foresp?rgslen",
"textmatches"	=> "Artikel tekster der matchede foresp?rgslen",
"notextmatches"	=> "Ingen artikel tekster matchede foresp?rgslen",
"prevn"			=> "forrige $1",
"nextn"			=> "n?ste $1",
"viewprevnext"	=> "Vis ($1) ($2) ($3).",
"showingresults" => "Nedenfor vises <b>$1</b> resultater startende med 
nummer <b>$2</b>.",
"nonefound"		=> "<strong>Note</strong>: s?gning uden success er tit
for?rsaget af at man s?ger efter almindelige ord som \"har\" og \"fra\",
som ikke er indekseret, eller ved at specificere mere end et s?geord (kun 
sider der indeholder alle s?geordene vil blive fundet).",
"powersearch" => "S?g",
"powersearchtext" => "
S?g i navnerum :<br>
$1<br>
$2 List omdirigeringer &nbsp; S?g efter $3 $9",


# Preferences page
#
"preferences"	=> "Indstillinger",
"prefsnologin" => "Ikke logget p?",
"prefsnologintext"	=> "Du skal v?re <a href=\"" .
  wfLocalUrl( "Speciel:Userlogin" ) . "\">logget p?</a>
for at ?ndre bruger indstillinger.",
"prefslogintext" => "Du logget p? som \"$1\".
Dit interne ID nummer er $2.",
"prefsreset"	=> "Indstillingerne er blevet gendannet fra lageret.",
"qbsettings"	=> "Indstillinger for hurtigmenu",
"changepassword" => "Skift password",
"skin"			=> "Udseende",
"math"			=> "Vise matematik",
"math_failure"		=> "Fejl i matematikken",
"math_unknown_error"	=> "ukendt fejl",
"math_unknown_function"	=> "ukendt funktion ",
"math_lexing_error"	=> "lexer fejl",
"math_syntax_error"	=> "syntax fejl",
"saveprefs"		=> "Gem indstillinger",
"resetprefs"	=> "Gendan indstillinger",
"oldpassword"	=> "Gammelt password",
"newpassword"	=> "Nyt password",
"retypenew"		=> "Gentag nyt password",
"textboxsize"	=> "Tekstboks dimensioner",
"rows"			=> "R?kker",
"columns"		=> "Kolonner",
"searchresultshead" => "S?ge resultat indstillinger",
"resultsperpage" => "Resultater pr. side",
"contextlines"	=> "Linjer pr. resultat",
"contextchars"	=> "Karakterer pr. linje i resultatet",
"stubthreshold" => "Gr?nse for visning af stubs",
"recentchangescount" => "Antallet af titler p? \"seneste ?ndringer\" 
siden",
"savedprefs"	=> "Dine indstillinger er blevet gemt.",
"timezonetext"	=> "Indtast antal timer din lokale tid er forskellig
fra server (UTC) tiden. Der bliver automatisk tilpasset til dansk tid, 
ellers skulle man for eksempel for Dansk vintertid, indtaste \"1\" 
(og \"2\" n?r vi er p? sommertid).",
"localtime"	=> "Lokal tid",
"timezoneoffset" => "Forskel",
"emailflag"	=> "Frav?lg muligheden for at f? e-mail fra andre brugere",

# Recent changes
#
"changes" => "?ndringer",
"recentchanges" => "Seneste ?ndringer",
"recentchangestext" => "Se de senest ?ndrede sider i Wikipedia p? denne 
side.

[[Wikipedia:Velkommen nybegynder|Velkommen nybegynder]]!
Kig venligst p? disse sider: [[Wikipedia:Hj?lp|Hj?lp]], 
[[Wikipedia:OSS|Ofte Stillede Sp?rgsm?l]] og 
[[Wikipedia:Mest almindelige begynderfejl p? Wikipedia|mest almindelige begynderfejl p? Wikipedia]].

Det er meget vigtigt for Wikipedias success, at du ikke l?gger materiale p? 
Wikipedia som andre har ophavsret til. De retslige konsekvenser kan blive 
meget kostbare og besv?rlige
for projektet, s? lad venligst v?re med det.

Se ogs? seneste ?ndringer for andre sprog: 
[http://meta.wikipedia.org/wiki/Special:Recentchanges meta], 
[http://de.wikipedia.org/wiki/Spezial:Recentchanges de], 
[http://www.wikipedia.org/wiki/Special:Recentchanges en], 
[http://eo.wikipedia.org/wiki/Speciala:Recentchanges eo], 
[http://es.wikipedia.org/wiki/Especial:Recentchanges es], 
[http://et.wikipedia.com/wiki.cgi?Recent_Changes et], 
[http://fr.wikipedia.org/wiki/Special:Recentchanges fr], 
[http://it.wikipedia.com/wiki.cgi?RecentChanges it], 
[http://la.wikipedia.com/wiki.cgi?Recent_Changes la], 
[http://nl.wikipedia.org/wiki/Speciaal:Recentchanges nl], 
[http://no.wikipedia.com/wiki.cgi?Recent_Changes no], 
[http://pl.wikipedia.org/wiki/Specjalna:Recentchanges pl], 
[http://pt.wikipedia.com/wiki.cgi?RecentChanges pt], 
[http://ru.wikipedia.org/wiki/Special:Recentchanges ru] og 
[http://sv.wikipedia.org/wiki/Special:Recentchanges sv].",
"rcloaderr"		=> "L?ser seneste ?ndrede sider",
"rcnote"		=> "Nedenfor er de seneste <strong>$1</strong> ?ndringer i de 
sidste <strong>$2</strong> dage.",
"rcnotefrom"	=> "Nedenfor er ?ndringerne fra <b>$2</b> indtil <b>$1</b> vist.",
"rclistfrom"	=> "Vis nye ?ndringer startende fra $1",
# "rclinks"		=> "Vis seneste $1 ?ndringer i de sidste $2 timer / sidste $3 dage",
"rclinks"		=> "Vis seneste $1 ?ndringer i de sidste $2 dage.",
"rchide"		=> "i $4 form; $1 mindre ?ndringer; $2 andre navnerum; $3 mere end en redigering.",
"diff"			=> "forskel",
"hist"			=> "historie",
"hide"			=> "gem",
"show"			=> "vis",
"tableform"		=> "tabel",
"listform"		=> "liste",
"nchanges"		=> "$1 ?ndringer",
"minoreditletter" => "M",
"newpageletter" => "N",

# Upload
#
"upload"		=> "Upload",
"uploadbtn"		=> "Upload fil",
"uploadlink"	=> "Upload fil",
"reupload"		=> "Gen-upload",
"reuploaddesc"	=> "Tilbage til upload formen.",
"uploadnologin" => "Ikke logget p?",
"uploadnologintext"	=> "Du skal v?re <a href=\"" .
  wfLocalUrl( "Speciel:Userlogin" ) . "\">logget p?</a>
for at kunne uploade filer.",
"uploadfile"	=> "Upload fil",
"uploaderror"	=> "Upload fejl",
"uploadtext"	=> "<strong>STOP!</strong> F?r du uploader her,
s? v?r sikker p? du har l?st og f?lger Wikipedias <a href=\"" .
wfLocalUrlE( "Wikipedia:Politik om brug af billeder" ) . "\">politik om brug 
af billeder</a>.
<p>For at se eller s?ge i tidligere uploadede billeder,
g? til <a href=\"" . wfLocalUrlE( "Speciel:Imagelist" ) .
"\">listen af uploadede billeder</a>.
Uploads og sletninger er logget i <a href=\"" .
wfLocalUrlE( "Wikipedia:Upload_log" ) . "\">upload log</a>.
<p>Brug formularen herunder til at uploade nye billeder til at bruge
som illustration i dine artikler.
P? de fleste browsere vil du se en \"Browse...\" knap eller en 
\"Gennemse...\" knap, som vil
bringe dig til operativsystemets standard fil ?ben dialog.
N?r du v?lger en fil vil navnet p? filen dukke op i tekst feltet
ved siden af knappen.
Du skal ogs? verificerer at du ikke er ved at bryde nogens ophavsret.
Det g?r du ved at s?tte et m?rke i check boksen.
Tryk p? \"Upload\" knappen for at afslutte din upload.
Dette kan godt tage lidt tid hvis du har en langsom internet forbindelse.
<p>De foretrukne formater er JPEG til fotografiske billeder, PNG
til tegninger og andre sm? billeder, og OGG til lyd.
S?rg for at navngive din fil med et beskrivende navn, for at undg? 
forvirring om indholdet.
For at bruge billedet i en artikel, s? brug et link af denne slags
<b>[[billede:fil.jpg]]</b> eller <b>[[billede:fil.png|alternativ tekst]]</b>
eller <b>[[media:fil.ogg]]</b> for lyd.
<p>L?g m?rke til at pr?cis som med Wikipedia sider, s? kan og m? andre gerne 
redigerer eller
slette dine uploadede filer hvis de mener det hj?lper encyklop?dien, og
du kan blive blokeret fra at uploade hvis du misbruger systemet.",
"uploadlog"		=> "upload log",
"uploadlogpage" => "Upload_log",
"uploadlogpagetext" => "Herunder er der en liste af de seneste 
uploadede filer. Alle de viste tider er server (UTC) tider.
<ul>
</ul>
",
"filename"		=> "Filnavn",
"filedesc"		=> "Beskrivelse",
"affirmation"	=> "Jeg bekr?fter at ophavsretshaveren til denne fil
er enig i at filen udgives under betingelserne for $1.",
"copyrightpage" => "Wikipedia:Ophavsret",
"copyrightpagename" => "Wikipedia ophavsret",
"uploadedfiles"	=> "Uploadede filer",
"noaffirmation" => "Du skal bekr?fte at du ikke bryder nogens ophavsret
ved at uploade denne fil.",
"ignorewarning"	=> "Ignorer advarslen og gem filen alligevel.",
"minlength"		=> "Navnet p? filen skal v?re p? mindst tre bogstaver.",
"badfilename"	=> "Navnet p? filen er blevet ?ndret til \"$1\".",
"badfiletype"	=> "\".$1\" er ikke et af de anbefalede fil formater.",
"largefile"		=> "Det anbefales at filer ikke fylder mere end 100kb.",
"successfulupload" => "Upload gennemf?rt med success",
"fileuploaded"	=> "Filen \"$1\" er uploadeded med success.
F?lg dette link: ($2) til siden med beskrivelse og udfyld
information omkring filen, s?som hvor den kom fra, hvorn?r den er lavet
og af hvem, og andre ting du ved om filen.",
"uploadwarning" => "Upload advarsel",
"savefile"		=> "Gem fil",
"uploadedimage" => "uploadede \"$1\"",

# Image list
#
"imagelist"		=> "Billedliste",
"imagelisttext"	=> "Herunder er en liste med $1 billeder sorteret $2.",
"getimagelist"	=> "henter billedliste",
"ilshowmatch"	=> "Vis alle billeder med navne der matcher",
"ilsubmit"		=> "S?g",
"showlast"		=> "Vis de sidste $1 billeder sorteret $2.",
"all"			=> "alle",
"byname"		=> "efter navn",
"bydate"		=> "efter dato",
"bysize"		=> "efter st?rrelse",
"imgdelete"		=> "slet",
"imgdesc"		=> "beskrivelse",
"imglegend"		=> "Legend: (beskrivelse) = vis/rediger billede beskrivelse.",
"imghistory"	=> "Billedhistorie",
"revertimg"		=> "gendan",
"deleteimg"		=> "slet",
"imghistlegend" => "Legend: (nuv?rende) = dette er det nuv?rende billede, 
(slet) = slet denne gamle version, (gendan) = gendan en gammel version.
<br><i>Klik p? en dato for at se billedet som er uploaded den dag</i>.",
"imagelinks"	=> "Billede links",
"linkstoimage"	=> "De f?lgende sider linker til dette billede:",
"nolinkstoimage" => "Der er ingen sider der linker til dette billede.",

# Statistics
#
"statistics"	=> "Statistik",
"sitestats"		=> "Side statistik",
"userstats"		=> "Bruger statistik",
"sitestatstext" => "Der er ialt <b>$1</b> sider i databasen.
Dette inkluderer \"diskussion\" sider, sider om Wikipedia, minimale \"stub\"
sider, omdirigeringssider, og andre der sikkert ikke kan kvalificeres som 
artikler.
Hvis man ekskludere disse, s? er der <b>$2</b> sider som sandsynligvis er 
rigtige artikler.<p>
Der har ialt v?ret <b>$3</b> viste sider, og <b>$4</b> redigeringer af sider
siden softwaren blev opdateret (25. september 2002).
Det vil sige der har v?ret <b>$5</b> gennemsnitlige redigeringer per side, 
og <b>$6</b> visninger per redigering.",
"userstatstext" => "Der er  <b>$1</b> registrerede brugere.
<b>$2</b> af disse er administratorer (se $3).",

# Maintenance Page
#
"maintenance"		=> "Vedligeholdelsesside",
"maintnancepagetext"	=> "P? denne side er der forskellige smarte 
v?rkt?jer til at vedligeholde Wikipedia. Nogle af disse funktioner er ret 
h?rde for databasen (de tager lang tid), s? lad v?re med at refreshe siden 
hver gang du har rettet en enkelt ting ;-)",
"maintenancebacklink"	=> "Tilbage til vedligeholdelsessiden",
"disambiguations"	=> "Sider med tvetydige titler",
"disambiguationspage"	=> "Wikipedia:Links_til_sider_med_tvetydige_titler",
"disambiguationstext"	=> "De f?lgende artikler linker til 
<i>sider med tvetydige titler</i>. De skulle linke til en ikke-tvetydig 
titel i stedet for.<br>En side bliver behandlet som tvetydig hvis den er
linket fra $1.<br>Links fra andre navnerum er <i>ikke</i> listet her.",
"doubleredirects"	=> "Dobbelte omdirigeringer",
"doubleredirectstext"	=> "<b>Bem?rk:</b> Denne liste kan indeholde forkerte 
resultater. Det er som regel fordi siden indeholder ekstra tekst under den
f?rste #REDIRECT.<br>\nHver linje indeholder links til den f?rste og den 
anden omdirigering, og den f?rste linje fra den anden omdirigeringstekst, 
det giver som regel den \"rigtige\" m?l artikel, som den f?rste omdirigering 
skulle have peget p?.",
"brokenredirects"	=> "D?rlige omdirigeringer",
"brokenredirectstext"	=> "De f?lgende omdirigeringer peger p? en side der 
ikke eksisterer.",
"selflinks"		=> "Sider der linker til sig selv",
"selflinkstext"		=> "De f?lgende sider indeholder links til sig selv, 
men det burde de ikke.",
"mispeelings"           => "Sider med stavefejl",
"mispeelingstext"               => "De f?lgende sider indeholder en af de 
almindelig stavefejl, som er listet p? $1. Den korrekte stavem?de kan 
angives i paranteser efter den fejlagtige stavem?de (s?dan her).",
"mispeelingspage"       => "Liste af almindelige stavefejl",
"missinglanguagelinks"  => "Manglende sprog links",
"missinglanguagelinksbutton"    => "Find manglende sprog links for",
"missinglanguagelinkstext"      => "Disse artikler har <i>ikke</i> noget 
link til den samme artikel i $1. Omdirigeringer og underartikler er 
<i>ikke</i> vist.",


# Miscellaneous special pages
#
"orphans"		=> "For?ldrel?se sider",
"lonelypages"	=> "For?ldrel?se sider",
"unusedimages"	=> "Ubrugte billeder",
"popularpages"	=> "Popul?re sider",
"nviews"		=> "$1 visninger",
"wantedpages"	=> "?nskede sider",
"nlinks"		=> "$1 links",
"allpages"		=> "Alle sider",
"randompage"	=> "Tilf?ldig artikel",
"shortpages"	=> "Korte sider",
"longpages"		=> "Lange sider",
"listusers"		=> "Brugerliste",
"specialpages"	=> "Specielle sider",
"spheading"		=> "Specielle sider",
"sysopspheading" => "Specielle sider til sysop brug",
"developerspheading" => "Specielle sider til developer brug",
"protectpage"	=> "Beskyt side",
"recentchangeslinked" => "Relaterede ?ndringer",
"rclsub"		=> "(til sider linket fra \"$1\")",
"debug"			=> "Debug",
"newpages"		=> "Nye sider",
"intl"		=> "Sproglinks",
"movethispage"	=> "Flyt side",
"unusedimagestext" => "<p>L?g m?rke til at andre web sider
s?som de andre internationale Wikipediaer m?ske linker til et billede med
en direkte URL, s? det kan stadig v?re listet her selvom det er
i aktivt brug.",
"booksources"	=> "Bogkilder",
"booksourcetext" => "Herunder er en liste af links til steder der
udl?ner og/eller s?lger nye og brugte b?ger, og som m?ske ogs? har 
yderligere information om b?ger du leder efter.
Wikipedia er ikke associeret med nogen af disse steder,
og denne liste skal ikke ses som en anbefaling af disse.",
"alphaindexline" => "$1 til $2",

# Email this user
#
"mailnologin"	=> "Ingen sende adresse",
"mailnologintext" => "Du skal v?re <a href=\"" .
  wfLocalUrl( "Speciel:Userlogin" ) . "\">logget p?</a>
og have en gyldig e-mail adresse sat i dine <a href=\"" .
  wfLocalUrl( "Speciel:Preferences" ) . "\">indstillinger</a>
for at sende e-mail til andre brugere.",
"emailuser"		=> "E-mail til denne bruger",
"emailpage"		=> "E-mail bruger",
"emailpagetext"	=> "Hvis denne bruger har sat en gyldig e-mail adresse i
sine bruger indstillinger, s? vil formularen herunder sende en enkelt 
besked.
Den e-mail adresse du har sat i dine bruger indstillinger vil dukke op
i \"Fra\" feltet p? denne mail, s? modtageren er i stand til at svare.",
"noemailtitle"	=> "Ingen e-mail adresse",
"noemailtext"	=> "Denne bruger har ikke sat en gyldig e-mail adresse,
eller har valgt ikke at modtage e-mail fra andre brugere.",
"emailfrom"		=> "Fra",
"emailto"		=> "Til",
"emailsubject"	=> "Emne",
"emailmessage"	=> "Besked",
"emailsend"		=> "Send",
"emailsent"		=> "E-mail sendt",
"emailsenttext" => "Din e-mail besked er blevet sendt.",

# Watchlist
#
"watchlist"		=> "Overv?gningsliste",
"watchlistsub"	=> "(for bruger \"$1\")",
"nowatchlist"	=> "Du har ingenting i din overv?gningsliste.",
"watchnologin"	=> "Ikke logget p?",
"watchnologintext"	=> "Du skal v?re <a href=\"" .
  wfLocalUrl( "Speciel:Userlogin" ) . "\">logget p?</a>
for at kunne ?ndre din overv?gningsliste.",
"addedwatch"	=> "Tilf?jet til din overv?gningsliste",
"addedwatchtext" => "Siden \"$1\" er blevet tilf?jet til din <a href=\"" .
  wfLocalUrl( "Speciel:Watchlist" ) . "\">overv?gningsliste</a>.
Fremtidige ?ndringer til denne side og den tilh?rende diskussion side vil 
blive listet her, og siden vil fremst? <b>fremh?vet</b> i <a href=\"" .
  wfLocalUrl( "Speciel:Recentchanges" ) . "\">listen med de seneste 
?ndringer</a> for at g?re det lettere at finde den.</p>

<p>Hvis du senere vil fjerne siden fra din overv?gningsliste, s? klik 
\"Fjern overv?gning\" ude i siden.",
"removedwatch"	=> "Fjernet fra overv?gningsliste",
"removedwatchtext" => "Siden \"$1\" er blevet fjernet fra din 
overv?gningsliste.",
"watchthispage"	=> "Overv?g side",
"unwatchthispage" => "Fjern overv?gning",
"notanarticle"	=> "Ikke en artikel",

# Delete/protect/revert
#
"deletepage"	=> "Slet side",
"confirm"		=> "Bekr?ft",
"confirmdelete" => "Bekr?ft sletning",
"deletesub"		=> "(Sletter \"$1\")",
"confirmdeletetext" => "Du er ved permanent at slette en side
eller et billede sammen med hele den tilh?rende historie fra databasen.
Bekr?ft venligst at du virkelig vil g?re dette, at du forst?r
konsekvenserne, og at du g?r dette i overensstemmelse med
[[Wikipedia:Politik]].",
"confirmcheck"	=> "Ja, jeg vil virkelig slette den her.",
"actioncomplete" => "Gennemf?rt",
"deletedtext"	=> "\"$1\" er slettet.
Se $2 for en fortegnelse over de nyeste sletninger.",
"deletedarticle" => "slettet \"$1\"",
"dellogpage"	=> "Sletningslog",
"dellogpagetext" => "Herunder er en liste over de nyeste sletninger.
Alle tider er server (UTC) tider.
<ul>
</ul>
",
"deletionlog"	=> "sletningslog",
"reverted"		=> "Gendannet en tidligere version",
"deletecomment"	=> "Begrundelse for sletning",
"imagereverted" => "Gendannelse af en tidligere version gennemf?rt med 
success.",
"rollback"		=> "Fjern redigeringer",
"rollbacklink"	=> "fjern redigering",
"cantrollback"	=> "Kan ikke fjerne redigering; den sidste bruger er den eneste forfatter.",
"revertpage"	=> "Fjernet den seneste redigering lavet af $1",

# Undelete
"undelete" => "Gendan en slettet side",
"undeletepage" => "Se og gendan slettede sider",
"undeletepagetext" => "De f?lgende sider er slettede, men de findes 
stadig i arkivet og kan gendannes. Arkivet blivet periodevis slettet.",
"undeletearticle" => "Gendan slettet artikel",
"undeleterevisions" => "$1 revisioner arkiveret",
"undeletehistory" => "Hvis du gendanner siden, vil alle de historiske 
revisioner ogs? blive gendannet. Hvis en ny side med det samme navn 
er oprettet siden den blev slettet, s? vil de gendannede revisioner 
dukke op i den tidligere historie, og den nyeste revision vil forblive 
p? siden.",
"undeleterevision" => "Slettet version fra $1",
"undeletebtn" => "Gendan!",
"undeletedarticle" => "gendannet \"$1\"",
"undeletedtext"   => "Artiklen [[$1]] er blevet gendannet med success.
Se [[Wikipedia:Sletningslog]] for en fortegnelse over nylige 
sletninger og gendannelser.",

# Contributions
#
"contributions"	=> "Bruger bidrag",
"mycontris" => "Mine bidrag",
"contribsub"	=> "For $1",
"nocontribs"	=> "Ingen ?ndringer er fundet som matcher disse kriterier.",
"ucnote"	=> "Herunder er denne brugers sidste <b>$1</b> ?ndringer i de 
sidste <b>$2</b> dage.",
"uclinks"	=> "Vis de sidste $1 ?ndringer; vis de sidste $2 dage.",
"uctop"		=> " (top)" ,

# What links here
#
"whatlinkshere"	=> "Hvad linker hertil",
"notargettitle" => "Intet m?l",
"notargettext"	=> "Du har ikke specificeret en m?l side eller bruger
at udf?re denne funktion p?.",
"linklistsub"	=> "(Liste af links)",
"linkshere"	=> "De f?lgende sider linker hertil:",
"nolinkshere"	=> "Ingen sider linker hertil.",
"isredirect"	=> "omdirigeringsside",

# Block/unblock IP
#
"blockip"		=> "Bloker IP adresse",
"blockiptext"	=> "Brug formularen herunder til at blokere for skriveadgangen
fra en specifik IP adresse.
Dette m? kun g?res for at forhindre vandalisme, og i
overensstemmelse med [[Wikipedia:Politik|Wikipedia politik]].
Udfyld en speciel begrundelse herunder (for eksempel med et citat fra
sider der har v?ret udsat for vandalisme).",
"ipaddress"		=> "IP Adresse",
"ipbreason"		=> "Begrundelse",
"ipbsubmit"		=> "Bloker denne adresse",
"badipaddress"	=> "IP adressen er udformet forkert.",
"noblockreason" => "Du skal angive en begrundelse for denne blokering.",
"blockipsuccesssub" => "Blokering udf?rt med success",
"blockipsuccesstext" => "IP adressen \"$1\" er blevet blokeret.
<br>Se [[Speciel:Ipblocklist|IP blokeringslisten]] for alle blokeringer.",
"unblockip"		=> "Oph?v blokeringen af IP adresse",
"unblockiptext"	=> "Brug formularen herunder for at gendanne skriveadgangen
for en tidligere blokeret IP adresse.",
"ipusubmit"		=> "Oph?v blokeringen af denne adresse",
"ipusuccess"	=> "IP adressen \"$1\" har f?et oph?vet blokeringen",
"ipblocklist"	=> "Liste af blokerede IP adresser",
"blocklistline"	=> "$1, $2 blokerede $3",
"blocklink"		=> "bloker",
"unblocklink"	=> "oph?v blokering",
"contribslink"	=> "bidrag",

# Developer tools
#
"lockdb"		=> "L?s database",
"unlockdb"		=> "L?s database op",
"lockdbtext"	=> "At l?se databasen vil afbryde alle brugere fra at kunne
redigerer sider, ?ndre deres indstillinger, redigerer deres 
overv?gningsliste, og
andre ting der kr?ver ?ndringer i databasen.
Bekr?ft venligst at du har til hensigt at g?re dette, og at du vil
l?se databasen op n?r din vedligeholdelse er overst?et.",
"unlockdbtext"	=> "At l?se databasen op vil vil g?re at alle brugere igen 
kan
redigerer sider, ?ndre deres indstillinger, redigerer deres 
overv?gningsliste, og
andre ting der kr?ver ?ndringer i databasen.
Bekr?ft venligst at du har til hensigt at g?re dette.",
"lockconfirm"	=> "Ja, jeg vil virkelig l?se databasen.",
"unlockconfirm"	=> "Ja, jeg vil virkelig l?se databasen op.",
"lockbtn"		=> "L?s databasen",
"unlockbtn"		=> "L?s databasen op",
"locknoconfirm" => "Du har ikke bekr?ftet handlingen.",
"lockdbsuccesssub" => "Databasen er nu l?st",
"unlockdbsuccesssub" => "Databasen er nu l?st op",
"lockdbsuccesstext" => "Wikipedia databasen er l?st.
<br>Husk at fjerne l?sen n?r du er f?rdig med din vedligeholdelse.",
"unlockdbsuccesstext" => "Wikipedia databasen er l?st op.",

# SQL query
#
"asksql"		=> "SQL foresp?rgsel",
"asksqltext"	=> "Brug formularen herunder til at lave direkte foresp?rgsler 
i Wikipedia databasen.
Brug enkelte anf?rselstegn ('s?dan her') for at adskille strenge.
Dette kan ofte belaste serveren kraftigt, s? brug venligst denne funktion
med omtanke.",
"sqlquery"		=> "Indtast foresp?rgsel",
"querybtn"		=> "Afsend foresp?rgsel",
"selectonly"	=> "Foresp?rgsler andre end \"SELECT\" er forbeholdt 
Wikipedia udviklere.",
"querysuccessful" => "Foresp?rgsel gennemf?rt med success",

# Move page
#
"movepage"		=> "Flyt side",
"movepagetext"	=> "N?r du bruger formularen herunder vil du f? omd?bt en 
side, flyttet hele sidens historie til det nye navn.
Den gamle titel vil blive en omdirigeringsside til den nye titel.
Links til den gamle titel vil ikke blive ?ndret. S?rg for at 
[[Speciel:Maintenance|tjekke]] for dobbelte eller d?rlige omdirigeringer. 
Du er ansvarlig for, at alle links stadig peger p? der hvor det er 
meningen de skal pege.

Bem?rk at siden '''ikke''' kan flyttes hvis der allerede er en side 
med den nye titel, medmindre den side er tom eller er en omdirigering 
uden nogen historie. Det betyder at du kan flytte en side tilbage hvor 
den kom fra, hvis du kommer til at lave en fejl.

<b>ADVARSEL!</b>
Dette kan v?re en drastisk og uventet ?ndring for en popul?r side;
v?r sikker p? at du forst?r konsekvenserne af dette f?r du
forts?tter.",
"movepagetalktext" => "Den tilh?rende diskussionsside, hvis der er en, 
vil automatisk blive flyttet med siden '''medmindre:'''
*Du flytter siden til et andet navnerum,
*En ikke-tom diskussionsside allerede eksisterer under det nye navn, eller
*Du fjerner markeringen i boksen nedenunder.

I disse tilf?lde er du n?dt til at flytte eller sammenflette siden manuelt.",
"movearticle"	=> "Flyt side",
"movenologin"	=> "Ikke logget p?",
"movenologintext" => "Du skal v?re registreret bruger og v?re <a href=\"" .
  wfLocalUrl( "Speciel:Userlogin" ) . "\">logget p?</a>
for at flytte en side.",
"newtitle"		=> "Til ny titel",
"movepagebtn"	=> "Flyt side",
"pagemovedsub"	=> "Flytning gennemf?rt",
"pagemovedtext" => "Siden \"[[$1]]\" er flyttet til \"[[$2]]\".",
"articleexists" => "En side med det navn eksisterer allerede, eller det
navn du har valgt er ikke gyldigt. V?lg et andet navn.",
"talkexists"	=> "Siden blev flyttet korrekt, men den tilh?rende 
diskussionsside kunne ikke flyttes, fordi der allerede eksisterer en 
med den nye titel. Du er n?dt til at flette dem sammen manuelt.",
"movedto"		=> "flyttet til",
"movetalk"		=> "Flyt ogs? \"diskussion\" siden, hvis den eksistere.",
"talkpagemoved" => "Den tilh?rende diskussion side blev ogs? flyttet.",
"talkpagenotmoved" => "Den tilh?rende diskussion side blev 
<strong>ikke</strong> flyttet.",

);

class LanguageDa extends Language {

	function getDefaultUserOptions () {
		global $wgDefaultUserOptionsDa ;
		return $wgDefaultUserOptionsDa ;
		}

	function getBookstoreList () {
		global $wgBookstoreListDa ;
		return $wgBookstoreListDa ;
	}

	function getNamespaces() {
		global $wgNamespaceNamesDa;
		return $wgNamespaceNamesDa;
	}

	function getNsText( $index ) {
		global $wgNamespaceNamesDa;
		return $wgNamespaceNamesDa[$index];
	}

	function getNsIndex( $text ) {
		global $wgNamespaceNamesDa;

		foreach ( $wgNamespaceNamesDa as $i => $n ) {
			if ( 0 == strcasecmp( $n, $text ) ) { return $i; }
		}
		return false;
	}

	function specialPage( $name ) {
		return $this->getNsText( Namespace::getSpecial() ) . ":" . $name;
	}

	function getQuickbarSettings() {
		global $wgQuickbarSettingsDa;
		return $wgQuickbarSettingsDa;
	}

	function getSkinNames() {
		global $wgSkinNamesDa;
		return $wgSkinNamesDa;
	}

	function getMathNames() {
		global $wgMathNamesDa;
		return $wgMathNamesDa;
	}

	function getUserToggles() {
		global $wgUserTogglesDa;
		return $wgUserTogglesDa;
	}

	function getLanguageNames() {
		global $wgLanguageNamesDa;
		return $wgLanguageNamesDa;
	}

	function getLanguageName( $code ) {
		global $wgLanguageNamesDa;
		if ( ! array_key_exists( $code, $wgLanguageNamesDa ) ) {
			return "";
		}
		return $wgLanguageNamesDa[$code];
	}

	function getMonthName( $key )
	{
		global $wgMonthNamesDa;
		return $wgMonthNamesDa[$key-1];
	}

	function getMonthAbbreviation( $key )
	{
		global $wgMonthAbbreviationsDa;
		return $wgMonthAbbreviationsDa[$key-1];
	}

	function getWeekdayName( $key )
	{
		global $wgWeekdayNamesDa;
		return $wgWeekdayNamesDa[$key-1];
	}

	# Inherit userAdjust()

	function date( $ts, $adj = false )
	{
		if ( $adj ) { $ts = $this->userAdjust( $ts ); }

		$d = (0 + substr( $ts, 6, 2 )) . ". " .
		  $this->getMonthAbbreviation( substr( $ts, 4, 2 ) ) . " " .
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
		return $this->date( $ts, $adj ) . " kl." . $this->time( $ts, $adj );
	}

	function getValidSpecialPages()
	{
		global $wgValidSpecialPagesDa;
		return $wgValidSpecialPagesDa;
	}

	function getSysopSpecialPages()
	{
		global $wgSysopSpecialPagesDa;
		return $wgSysopSpecialPagesDa;
	}

	function getDeveloperSpecialPages()
	{
		global $wgDeveloperSpecialPagesDa;
		return $wgDeveloperSpecialPagesDa;
	}

	function getMessage( $key )
	{
            global $wgAllMessagesDa, $wgAllMessagesEn;
            $m = $wgAllMessagesDa[$key];

            if ( "" == $m ) { return $wgAllMessagesEn[$key]; }
            else return $m;
	}
}

?>
