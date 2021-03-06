<?

# quelques modifications / Utilisateur:MarcQuinton
# - j'ai laiss? en commentaire les strings originales, et plac? ma signature (MQ)

# The names of the namespaces can be set here, but the numbers
# are magical, so don't change or move them!  The Namespace class
# encapsulates some of the magic-ness.
#
/* private */ $wgNamespaceNamesFr = array(
	-1 => "Special",
	0 => "",
	1 => "Discuter",
	2 => "Utilisateur",
	3 => "Discussion_Utilisateur",
	4 => "Wikip?dia",
	5 => "Discussion_Wikip?dia",
	6 => "Image",
	7 => "Discussion_Image"
);

/* Some default options can be changed - see Language.php */

/* private */ $wgQuickbarSettingsFr = array(
	"Aucune", "Gauche", "Droite", "Flottante ? gauche"
);

/* private */ $wgSkinNamesFr = array(
	"Normal", "Nostalgie", "Cologne Blue"
);

/* private */ $wgUserTogglesFr = array(
	"hover"  => "Afficher des info-bulles sur les liens wiki",
	"underline" => "Liens soulign?s",
	"highlightbroken" => "Liens vers les sujets non existants en rouge",
	"justify" => "Paragraphes justifi?s",
	"hideminor" => "Cacher les <i>Modifications r?centes</i> mineures",
	"numberheadings" => "Num?rotation automatique des titres",
	"rememberpassword" => "Se souvenir de mon mot de passe (cookie)",
	"editwidth" => "La fenetre d'?dition est en pleine largeur",
	"editondblclick" => "Double cliquer pour ?diter une page (JavaScript)",
	"watchdefault" => "Suivre les articles que je cr?e ou modifie",
	"minordefault" => "Mes modifications sont mineures par d?faut",
	"previewontop" => "Prevue se montre avant boite de redacter" # FIXME
);

/* Replace these with some French bookshops/lookup places */
/* private */ $wgBookstoreListEn = array(
	"AddALL" => "http://www.addall.com/New/Partner.cgi?query=$1&type=ISBN",
	"PriceSCAN" => "http://www.pricescan.com/books/bookDetail.asp?isbn=$1",
	"Barnes & Noble" => "http://shop.barnesandnoble.com/bookSearch/isbnInquiry.asp?isbn=$1",
	"Amazon.com" => "http://www.amazon.com/exec/obidos/ISBN=$1"
);

/* private */ $wgLanguageNamesFr = array(
    "aa" => "Afar",
    "ab" => "Abkhazien",
	"af" => "Afrikaans",
	"am" => "Amharique",
	"ar" => "&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1617;&#1577; (Araby)",
	"as" => "Assamais",
	"ay" => "Aymara",
	"az" => "Azerba?janais",
	"ba" => "Bashkir",
	"be" => "Bi?lorusse",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali",
	"bo" => "Tib?tain",
	"ca" => "Catal?",
	"co" => "Corse",
	"cs" => "&#268;esky (Tch?que)",
	"cy" => "Cymraeg",
	"da" => "Dansk", # Note two different subdomains.
	"dk" => "Dansk", # 'da' is correct for the language.
	"de" => "Deutsch",
	"dz" => "Bhoutani",
	"el" => "&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Ellenika)",
	"en" => "English",
    "simple" => "Anglais simplifi?",
	"eo" => "Esperanto",
	"es" => "Espa?ol",
	"et" => "Eesti",
	"eu" => "Euskara",
	"fa" => "Persan",
	"fi" => "Suomi",
	"fj" => "Fidjien",
	"fo" => "F?ro?en",
	"fy" => "Frison",
	"ga" => "Gaeilge",
	"gl" => "Galicien",
	"gn" => "Guarani",
	"gu" => "Goujarati",
	"ha" => "Haoussa",
	"he" => "&#1506;&#1489;&#1512;&#1497;&#1514; (Ivrit)",
	"hi" => "Hindi",
	"hr" => "Hrvatski",
	"hu" => "Magyar",
	"hy" => "Arm?nien",
	"ia" => "Interlingua",
	"id" => "Indonesia",
	"ik" => "Inupiak",
	"is" => "?slenska",
	"it" => "Italiano",
	"iu" => "Inuktitut",
	"ja" => "&#26085;&#26412;&#35486; (Nihongo)",
	"jv" => "Javanais",
	"ka" => "G?orgien",
	"kk" => "Kazakh",
	"kl" => "Groenlandais",
	"km" => "Cambodgien",
	"kn" => "Kannada",
	"ko" => "&#54620;&#44397;&#50612; (Hangukeo)",
	"ks" => "Kashmiri",
	"ky" => "Kirghize",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laotien",
	"lt" => "Lietuvi&#371;",
	"lv" => "Letton",
	"mg" => "Malgache",
	"mi" => "Maori",
	"mk" => "Mac?donien",
	"ml" => "Malayalam",
	"mn" => "Mongol",
	"mo" => "Moldave",
	"mr" => "Marathe",
	"ms" => "Malais",
	"my" => "Birman",
	"na" => "Nauri",
	"ne" => "N?palais",
	"nl" => "Nederlands",
	"no" => "Norsk",
	"oc" => "Occitan",
	"om" => "Oromo",
	"or" => "Oriya",
	"pa" => "Pendjabi",
	"pl" => "Polski",
	"ps" => "Pashto",
	"pt" => "Portugu?s",
	"qu" => "Quechua",
	"rm" => "Rh?to-Roman",
	"rn" => "Kirundi",
	"ro" => "Rom?n&#259;",
	"ru" => "&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (Russkij)",
	"rw" => "Kinyarwanda",
	"sa" => "Sanscrit",
	"sd" => "Sindhi",
	"sg" => "Sango",
	"sh" => "Serbo-croate",
	"si" => "Singhalais",
	"sk" => "Slovaque",
	"sl" => "Slovensko",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanais",
	"sr" => "Serbe",
	"ss" => "Siswati",
	"st" => "S?sotho",
	"su" => "Soudanais",
	"sv" => "Svenska",
	"sw" => "Kiswahili",
	"ta" => "Tamoul",
	"te" => "T?lougou",
	"tg" => "Tadjik",
	"th" => "Tha?",
	"ti" => "Tigrinya",
	"tk" => "Turkm?ne",
	"tl" => "Tagalog",
	"tn" => "Setchwana",
	"to" => "Tonga",
	"tr" => "T?rk?e",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Tchi",
	"ug" => "Ou?gour",
	"uk" => "&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; (Ukrayins`ka)",
	"ur" => "Ourdou",
	"uz" => "Ouzbek",
	"vi" => "Vietnamien",
	"vo" => "Volap?k",
	"wo" => "Ouolof",
	"xh" => "isiXhosa",
	"yi" => "Yiddish",
	"yo" => "Yorouba",
	"za" => "Zhuang",
	"zh" => "&#20013;&#25991; (Zhongwen)",
	"zu" => "Zoulou"
);

/* private */ $wgWeekdayNamesFr = array(
	"dimanche", "lundi", "mardi", "mercredi", "jeudi",
	"vendredi", "samedi"
);

/* private */ $wgMonthNamesFr = array(
	"janvier", "f?vrier", "mars", "avril", "mai", "juin",
	"juillet", "ao?t", "septembre", "octobre", "novembre",
	"d?cembre"
);

/* private */ $wgMonthAbbreviationsFr = array(
	"jan", "f?v", "mar", "avr", "mai", "jun", "jul", "ao?",
	"sep", "oct", "nov", "d?c"
);

# All special pages have to be listed here: a description of ""
# will make them not show up on the "Special Pages" page, which
# is the right thing for some of them (such as the "targeted" ones).
#
/* private */ $wgValidSpecialPagesFr = array(
	"Userlogin"  => "",
	"Userlogout" => "",
	"Preferences" => "Pr?f?rences",
	"Watchlist"  => "Liste de suivi",
	"Recentchanges" => "Modifications r?centes",
	"Upload"  => "Copier un fichier",
	"Imagelist"  => "Liste des images",
	"Listusers"  => "Liste des participants",
	"Statistics" => "Statistiques",
	"Randompage" => "Une page au hasard",

	"Lonelypages" => "Pages orphelines",
	"Unusedimages" => "Images orphelines",
	"Popularpages" => "Les plus populaires",
	"Wantedpages" => "Les plus demand?es",
	"Shortpages" => "Articles courts",
	"Longpages"  => "Articles longs",
	"Newpages"  => "Nouvelles pages",
	"Allpages"  => "Toutes les pages",

	"Ipblocklist" => "Adresses IP bloqu?es",
	"Maintenance" => "Page de Maintenance",
	"Specialpages"  => "",	# "Pages Sp?ciales", # Cettes pages doient ?tre vides
	"Contributions" => "",	# "Contributions",   # car elles n'ont pas que l'interface
	"Emailuser"  => "",		# "Email utilisateur", # diret.
	"Whatlinkshere" => "",	#"Liens pointant ici",
	"Recentchangeslinked" => "", #"Dernieres modifications",
	"Movepage"  => "",		#"Page d?plac?e",
	"Booksources" => "Librairies en ligne"
);

/* private */ $wgSysopSpecialPagesFr = array(
	"Blockip"  => "Bloquer une adresse IP",
	"Asksql"  => "Acc?s SQL",
	"Undelete"      => "G?rer les pages effac?es" // MQ "View and restore deleted pages"
);

/* private */ $wgDeveloperSpecialPagesFr = array(
	"Lockdb"  => "Bloquer la base de donn?es",
	"Unlockdb"  => "D?bloquer la base de donn?es",
	"Debug"   => "Informations de d?bogage"
);

/* private */ $wgAllMessagesFr = array(

# Bits of text used by many pages:
#
"linktrail"     => "/^([a-z?????????]+)(.*)\$/sD",
"mainpage"  => "Accueil",
"about"   => "? propos",
"aboutwikipedia" => "? propos de Wikipedia",
"aboutpage"  => "Wikip?dia:?_propos",
"help"   => "Aide",
"helppage"  => "Wikip?dia:Aide",
"wikititlesuffix" => "Wikipedia",
"bugreports" => "Rapport d'erreurs",
"bugreportspage" => "Wikip?dia:Rapport_d'erreurs",
"faq"   => "FAQ",
"faqpage"  => "Wikip?dia:FAQ",
"edithelp"  => "Aide",
"edithelppage" => "Wikip?dia:Comment_?diter_une_page",
"cancel"  => "Annuler",
"qbfind"  => "Rechercher",
"qbbrowse"  => "D?filer",
"qbedit"  => "?diter",
"qbpageoptions" => "Option page",
"qbpageinfo" => "Info page",
"qbmyoptions" => "Mes options",
"mypage"  => "Ma page",
"mytalk"  => "Ma page de discussion",
"currentevents" => "Actualit?s",
"errorpagetitle" => "Erreur",
"returnto"  => "Revenir ? la page $1.",
"fromwikipedia" => "Un article de Wikip?dia, l'encyclop?die libre.",
"whatlinkshere" => "R?f?rences ? cette page",
"help"   => "Aide",
"search"  => "Rechercher",
"history"  => "Historique",
"printableversion" => "Version imprimable",
"editthispage" => "Modifier cette page",
"deletethispage" => "Supprimer cette page",
"protectthispage" => "Prot?ger cette page",
"unprotectthispage" => "D?-prot?ger cette page",
"talkpage"  => "Page de discussion",
"subjectpage" => "Page sujet",
"articlepage"	=> "Page article",
"userpage" => "Page utilisateur",
"wikipediapage" => "Page m?ta",
"imagepage" => "Page image",
"otherlanguages" => "Autres langues",
"redirectedfrom" => "(Redirig? depuis $1)",
"lastmodified" => "Derni?re modification de cette page : $1.",
"viewcount"  => "Cette page a ?t? consult?e $1 fois.",
"printsubtitle" => "(de http://www.wikipedia.org)",
"protectedpage" => "Page prot?g?e",
"administrators" => "Wikip?dia:Administrateurs",
"sysoptitle" => "Acc?s administrateur requis",

"sysoptext"  => "L'action que vous avez tent?e ne peut ?tre effectu?e que par un utilisateur ayant le statut d'\"Administrateur\".
Voir $1.",
"developertitle" => "Acc?s d?veloppeur requis",
"developertext" => "L'action que vous avez tent?e ne peut ?tre effectu?e que par un utilisateur ayant le statut de \"d?veloppeur\".
Voir $1.",
"nbytes"  => "$1 octets",
"go"   => "OK",
"ok"   => "OK",
"sitetitle"  => "Wikip?dia",
"sitesubtitle" => "L'encyclop?die libre",
"retrievedfrom" => "R?cup?r?e de \"$1\"",
"newmessages" => "Vous avez des $1.",
"newmessageslink" => "nouveaux messages",

# Main script and global functions
#
"nosuchaction" => "Action inconnue",
"nosuchactiontext" => "L'action sp?cifi?e dans l'URL n'est pas reconnue par le logiciel Wikip?dia.",
"nosuchspecialpage" => "Page sp?ciale inexistante",
"nospecialpagetext" => "Vous avez demand? une page sp?ciale qui n'est pas reconnue par le logiciel Wikip?dia.",

# General errors
#
"error"   => "Erreur",
"databaseerror" => "Erreur base de donn?es",
"dberrortext" => "Erreur de syntaxe dans la base de donn?es. Cette erreur peut ?tre caus?e par une requ?te de recherche incorrecte (voir $5), ou une erreur dans le logiciel. La derni?re requ?te trait?e par la base de donn?es ?tait :
<blockquote><tt>$1</tt></blockquote>
depuis la fonction \"<tt>$2</tt>\".
MySQL a renvoy? l'erreur \"<tt>$3: $4</tt>\".",
"noconnect"  => "Connexion impossible ? la base de donn?es sur $1",
"nodb"   => "S?lection impossible de la base de donn?es $1",
"readonly"  => "Mises ? jour bloqu?es sur la base de donn?es",
"enterlockreason" => "Indiquez la raison du blocage, ainsi qu'une estimation de la dur?e de blocage ",
"readonlytext" => "Les ajouts et mises ? jour sur la base de donn?es Wikip?dia sont actuellement bloqu?s, probablement pour permettre la maintenance de la base, apr?s quoi, tout rentrera dans l'ordre. Voici la raison pour laquelle l'administrateur a bloqu? la base :
<p>$1",
"missingarticle" => "La base de donn?es n'a pas pu trouver le texte d'une page existante, dont le titre est \"$1\".
Ce n'est pas une erreur de la base de donn?es, mais plus probablement un bogue du logiciel Wikip?dia.
Veuillez rapporter cette erreur ? un administrateur, en lui indiquant l'adresse de la page fautive.",
"internalerror" => "Erreur interne",
"filecopyerror" => "Impossible de copier \"$1\" vers \"$2\".",
"filerenameerror" => "Impossible de renommer \"$1\" en \"$2\".",
"filedeleteerror" => "Impossible de supprimer \"$1\".",
"filenotfound" => "Fichier \"$1\" introuvable.",
"unexpected" => "Valeur inattendue : \"$1\"=\"$2\".",
"formerror"  => "Erreur: Impossible de soumettre le formulaire",
"badarticleerror" => "Cette action ne peut pas ?tre effectu?e sur cette page.",
"cannotdelete" => "Impossible de supprimer la page ou l'image indiqu?e.",

# Login and logout pages
#
"logouttitle" => "D?connexion",
"logouttext" => "Vous ?tes ? pr?sent d?connect?(e).
Vous pouvez continuer ? utiliser Wikip?dia de fa?on anonyme, ou vous reconnecter, ?ventuellement sous un autre nom.\n",

"welcomecreation" => "<h2>Bienvenue, $1!</h2><p>Votre compte d'utilisateur a ?t? cr??.
N'oubliez pas de personnaliser votre Wikip?dia en consultant la page Pr?f?rences.",

"loginpagetitle" => "Votre identifiant",
"yourname"  => "Votre nom d'utilisateur",
"yourpassword" => "Votre mot de passe",
"yourpasswordagain" => "Entrez ? nouveau votre mot de passe",
"newusersonly" => " (nouveaux utilisateurs uniquement)",
"remembermypassword" => "Se souvenir de mon mot de passe (cookie)",
"loginproblem" => "<b>Probl?me d'identification.</b><br>Essayez ? nouveau !",
"alreadyloggedin" => "<font color=red><b>Utilisateur $1, vous ?tes d?j? identifi?!</b></font><br>\n",

"areyounew"  => "Si vous ?tes nouveau sur Wikip?dia et souhaitez cr?er un compte utilisateur, entrez un nom d'utilisateur et tapez deux fois votre mot de passe. L'adresse ?lectronique est optionnelle, mais si vous perdez votre mot de passe, vous pourrez en demander un nouveau que nous vous ferons parvenir par ce moyen.<br>\n",

"login"   => "Identification",
"userlogin"  => "Identification",
"logout"  => "D?connexion",
"userlogout" => "D?connexion",
"createaccount" => "Cr?er un nouveau compte",
"badretype"  => "Les deux mots de passe que vous avez saisis ne sont pas identiques.",
"userexists" => "Le nom d'utilisateur que vous avez saisi est d?j? utilis?. Veuillez en choisir un autre.",
"youremail"  => "Mon adresse ?lectronique",
"yournick"  => "Mon surnom (pour les signatures)",
"emailforlost" => "Si vous ?garez votre mot de passe, vous pouvez demander ? ce qu'un nouveau vous soit envoy? ? votre adresse ?lectronique.",
"loginerror" => "Probl?me d'identification",
"noname"  => "Vous n'avez pas saisi de nom d'utilisateur.",
"loginsuccesstitle" => "Identification r?ussie.",
"loginsuccess" => "Vous ?tes actuellement connect?(e) sur Wikip?dia en tant que \"$1\".",
"prefslogintext" => "Je suis connect?(e) en tant que $1 avec le num?ro d'utilisateur $2.",
"nosuchuser" => "L'utilisateur \"$1\" n'existe pas.
V?rifiez que vous avez bien orthographi? le nom, ou utilisez le formulaire ci-dessous pour cr?er un nouveau compte utilisateur.",
"wrongpassword" => "Le mot de passe est incorrect. Essayez ? nouveau.",
"mailmypassword" => "Envoyez-moi un nouveau mot de passe",
"passwordremindertitle" => "Votre nouveau mot de passe sur Wikip?dia",
"passwordremindertext" => "Quelqu'un (probablement vous) ayant l'adresse IP $1 a demand? ? ce qu'un nouveau mot de passe vous soit envoy? pour votre acc?s ? Wikip?dia.
Le mot de passe de l'utilisateur \"$2\" est ? pr?sent \"$3\".
Nous vous conseillons de vous connecter et de modifier ce mot de passe d?s que possible.",
"noemail"  => "Aucune adresse ?lectronique n'a ?t? enregistr?e pour l'utilisateur \"$1\".",
"passwordsent" => "Un nouveau mot de passe a ?t? envoy? ? l'adresse ?lectronique de l'utilisateur \"$1\".
Veuillez vous identifier d?s que vous l'aurez re?u.",

# Edit pages
#
"summary"  => "R?sum?",
"minoredit"  => "Modification mineure.",
"watchthis"		=> "Suivre cet article",
"savearticle" => "Sauvegarder",
"preview"  => "Pr?visualiser",

"showpreview" => "Pr?visualisation",
"blockedtitle" => "Utilisateur bloqu?",
"blockedtext" => "Votre compte utilisateur ou votre adresse IP ont ?t? bloqu?s par $1 pour la raison suivante :<br>$2<p> Vous pouvez contacter l'administrateur pour en discuter.",
"newarticle" => "(Nouveau)",
"newarticletext" => "Saisissez ici le texte de votre article.",
"noarticletext" => "(Il n'y a pour l'instant aucun texte sur cette page)",
"updated"  => "(Mis ? jour)",
"note"   => "<strong>Note:</strong> ",
"previewnote" => "Attention, ce texte n'est qu'une pr?visualisation et n'a pas encore ?t? sauvegard?!",
"previewconflict" => "La pr?visualisation montre le texte de cette page tel qu'il appara?tra une fois sauvegard?.",
"editing"  => "modification de $1",
"editconflict" => "Conflit de modification : $1",
"explainconflict" => "<b>Cette page a ?t? sauvegard?e apr?s que vous ayez commenc? ? la modifier.
La zone d'?dition sup?rieure contient le texte tel qu'il est enregistr? actuellement dans la base de donn?es. Vos modifications apparaissent dans la zone d'?dition inf?rieure. Vous allez devoir apporter vos modifications au texte existant. Seul le texte de la zone sup?rieure sera sauvegard?.\n<p>",
"yourtext"  => "Votre texte",
"storedversion" => "Version enregistr?e",
"editingold" => "<strong>Attention : Vous ?tes en train de modifier une version obsol?te de cette page. Si vous sauvegardez, toutes les modifications effectu?es depuis cette version seront perdues.</strong>\n",
"yourdiff"  => "Diff?rences",
"copyrightwarning" => "Toutes les contributions ? Wikip?dia sont consid?r?es comme publi?es sous les termes de la GNU Free Documentation License, une licence de documentation libre (Voir $1 pour plus de d?tails). Si vous ne d?sirez pas que vos ?crits soient ?dit?s et distribu?s ? volont?, ne les envoyez pas. De m?me, merci de ne contribuer qu'en apportant vos propres ?crits ou des ?crits issus d'une source libre de droits. <b>N'UTILISEZ PAS DE TRAVAUX SOUS COPYRIGHT SANS AUTORISATION EXPRESSE!</b>",
"longpagewarning" => "AVERTISSEMENT : Ceci page a longeur de $1 ko;
quelques navigateurs mal trait des pages approchant ou plus de 32 ko ?
redaction. Peut-etre serait-il mieux si vous separer la page en sections
plus petites.",

# History pages
#
"revhistory" => "Versions pr?c?dentes",
"nohistory"  => "Il n'existe pas d'historique pour cette page.",
"revnotfound" => "Version introuvable",
"revnotfoundtext" => "La version pr?c?dente de cette page n'a pas pu ?tre retrouv?e. V?rifiez l'URL que vous avez utilis?e pour acc?der ? cette page.\n",
"loadhist"  => "Chargement de l'historique de la page",
"currentrev" => "Version actuelle",
"revisionasof" => "Version du $1",
"cur"   => "actu",
"next"   => "suiv",
"last"   => "dern",
"orig"   => "orig",
"histlegend" => "L?gende: (actu) = diff?rence avec la version actuelle ,
(dern) = diff?rence avec la version pr?c?dente, M = modification mineure",

# Diffs
#
"difference" => "(Diff?rences entre les versions)",
"loadingrev" => "loading revision for diff",
"lineno"  => "Ligne $1:",
"editcurrent" => "Modifier la version actuelle de cette page",


# Search results
#
"searchresults" => "R?sultat de la recherche",
"searchhelppage" => "Wikip?dia:Recherche",
"searchingwikipedia" => "Chercher dans Wikip?dia",
"searchresulttext" => "Pour plus d'informations sur la recherche dans Wikip?dia, voir $1.",
"searchquery" => "Pour la requ?te \"$1\"",
"badquery"  => "Requ?te mal form?e",
"badquerytext" => "Nous n'avons pas pu traiter votre requ?te.
Vous avez probablement recherch? un mot d'une longueur inf?rieure
? trois lettres, ce qui n'est pas encore possible. Vous avez
aussi pu faire une erreur de syntaxe, telle que \"poisson et
et ?cailles\".
Veuillez essayer une autre requ?te.",
"matchtotals" => "La requ?te \"$1\" correspond ? $2 titres
d'article et au texte de $3 articles.",
"titlematches" => "Correspondances dans les titres",
"notitlematches" => "Aucun titre d'article ne contient le(s) mot(s) demand?(s)",
"textmatches" => "Correspondances dans les textes",
"notextmatches" => "Aucun texte d'article ne contient le(s) mot(s) demand?(s)",
"prevn"   => "$1 pr?c?dents",
"nextn"   => "$1 suivants",
"viewprevnext" => "Voir ($1) ($2) ($3).",
"showingresults" => "Affichage de <b>$1</b> r?sultats ? partir du #<b>$2</b>.",
"nonefound"  => "<strong>Note</strong>: l'absence de r?sultat est souvent due ? l'emploi de termes de recherche trop courants, comme \"a\" ou \"de\",
qui ne sont pas index?s, ou ? l'emploi de plusieurs termes de recherche (seules les pages
contenant tous les termes apparaissent dans les r?sultats).",
"powersearch" => "Search",
"powersearchtext" => "
Search in namespaces :<br>
$1<br>
$2 List redirects &nbsp; Search for $3 $9",


# Preferences page
#
"preferences" => "Pr?f?rences",
"prefsnologin" => "Non connect?",
"prefsnologintext" => "Vous devez ?tre <a href=\"" .
		wfLocalUrl( "Special:Userlogin" ) . "\">connect?</a>
pour modifier vos pr?f?rences d'utilisateur.",
"prefsreset" => "Les pr?f?rences ont ?t? r?tablies ? partir de la version enregistr?e.",
"qbsettings" => "Personnalisation de la barre outils",
"changepassword" => "Modification du mot de passe",
"skin"   => "Apparence",
"saveprefs"  => "Enregistrer les pr?f?rences",
"resetprefs" => "R?tablir les pr?f?rences",
"oldpassword" => "Ancien mot de passe",
"newpassword" => "Nouveau mot de passe",
"retypenew"  => "Confirmation du nouveau mot de passe",
"textboxsize" => "Taille de la fen?tre d'?dition",
"rows"   => "Rang?es",
"columns"  => "Colonnes",
"searchresultshead" => "Affichage des r?sultats de recherche",
"resultsperpage" => "Nombre de r?ponses sur chaque page",
"contextlines" => "Nombre de lignes pour chaque r?ponse",
"contextchars" => "Nombre de caract?res du contexte sur chaque ligne",
"stubthreshold" => "Threshold for stub display",
"recentchangescount" => "Nombre de titres dans les modifications r?centes",
"savedprefs" => "Les pr?f?rences ont ?t? sauvegard?es.",
"timezonetext" => "Si vous ne pr?ciser pas de d?calage horaire, c'est l'heure de l'Europe de l'ouest qui sera utilis?e.",
"localtime" => "Heure locale",
"timezoneoffset" => "D?calage horaire",

"emailflag"  => "Ne pas recevoir de courrier ?lectronique des autres utilisateurs",

# Recent changes
#
"changes" => "changes", # FIXME?
"recentchanges" => "Modifications r?centes",
"recentchangestext" => "Suivez sur cette page les derni?res modifications de Wikip?dia.
[[Wikip?dia:Bienvenue|Bienvenue]] aux nouveaux participants!
Jetez un coup d'&oelig;il sur ces pages: [[wikip?dia:FAQ|Foire aux questions]],
[[Wikip?dia:Recommandations Et R?gles ? Suivre|Recommandations et r?gles ? suivre]]
(notamment [[Wikip?dia:R?gles De Nommage|Conventions de nommage]],
[[Wikip?dia:La Neutralit? De Point De Vue|La neutralit? de point de vue]]),
et [[Wikip?dia:Les Faux-Pas Les Plus Courants|Les faux-pas les plus courants]].

Si vous voulez que Wikip?dia connaisse le succ?s, n'y ajoutez pas de mat?riaux prot?g?s par des [[wikip?dia:Copyright|copyrights]].
La responsabilit? juridique pourrait compromettre le projet, alors s'il vous pla?t ne le faites pas.
Voyez aussi [http://meta.wikipedia.org/wiki/Special:Recentchanges les derni?res discussions sur le site meta-wiki].",
"rcloaderr"  => "Chargement des derni?res modifications",
"rcnote"  => "Voici les <strong>$1</strong> derni?res modifications effectu?es au cours des <strong>$2</strong> derniers jours.",
"rcnotefrom"	=> "Voici les modifications effectu?es depuis <strong>$2</strong> (jusqu'? <b>$1</b>).",
"rclistfrom"	=> "Afficher les nouvelles modifications depuis $1",
# "rclinks"  => "Afficher les $1 derni?res modifications effectu?es au cours des $2 derni?res heures / $3 derniers jours",
"rclinks"  => "Afficher les $1 derni?res modifications effectu?es au cours des $2 derniers jours.",
"rchide"  => "in $4 form; $1 minor edits; $2 secondary namespaces; $3 multiple edits.",
"diff"   => "diff",
"hist"   => "hist",
"hide"   => "cacher",
"show"   => "montrer",
"tableform"  => "table",
"listform"  => "liste",
"nchanges"  => "$1 modification(s)",
"minoreditletter" => "M",
"newpageletter" => "N",

# Upload
#
"upload"  => "Copier sur le serveur",
"uploadbtn"  => "Copier un fichier",
"uploadlink" => "Copier des images",
"reupload"  => "Copier ? nouveau",
"reuploaddesc" => "Retour au formulaire.",

"uploadnologin" => "Non connect?(e)",
"uploadnologintext" => "Vous devez ?tre <a href=\"" .
		wfLocalUrl( "Special:Userlogin" ) . "\">connect?</a>
pour copier des fichiers sur le serveur.",
"uploadfile" => "Copier un fichier",
"uploaderror" => "Erreur",
"uploadtext" => "<strong>STOP!</strong> Avant de copier votre fichier sur le serveur,
prenez connaissance des <a href=\"" .
wfLocalUrlE( "Wikip?dia:r?gles d'utilisation des images" ) . "\">r?gles d'utilisation des images</a> de Wikip?dia et assurez-vous que vous les respectez.
<p>Pour voir les images d?j? plac?es sur le serveur ou faire une recherche parmi celles-ci,
allez ? la <a href=\"" . wfLocalUrlE( "Special:Imagelist" ) .
"\">liste des images</a>.
Les uploads et les suppressions sont list?s dans le <a href=\"" .
wfLocalUrlE( "Wikip?dia:Journal_des_uploads" ) . "\">journal des uploads</a>.
<p>Utilisez le formulaire ci-dessous pour copier sur le serveur de nouvelles images destin?es ? illustrer vos articles.
Sur la plupart des navigateurs, vous verrez un bouton \"Browse...\" qui ouvre la fen?tre de dialogue standard de votre syst?me d'exploitation pour l'ouverture des fichiers.
S?lectionnez un fichier, son nom appara?tra dans le champ situ? ? c?t? du bouton.
Vous devez ?galement confirmer, en cochant la case pr?vue ? cet effet, que la copie de ce fichier ne viole aucun copyright.
Cliquez sur le bouton \"Envoyer\" pour terminer.
Si votre connection est lente, l'op?ration peut prendre un certain temps.
<p>Les formats recommand?s sont JPEG pour les photos, PNG
pour les dessins et les autres images, et OGG pour les fichiers sonores.
Donnez ? vos fichiers des noms descriptifs clairs, afin d'?viter toute confusion.
Pour incorporer l'image dans un article, placez dans celui-ci un lien r?dig? comme suit:
<b>[[image:nom_du_fichier.jpg]]</b> ou <b>[[image:nom_du_fichier.png|autre texte]]</b>
ou <b>[[media:nom_du_fichier.ogg]]</b> pour les sons.
<p>N'oubliez pas que, comme toutes les pages de Wikip?dia, les fichiers que vous copiez peuvent ?tre modifi?s ou supprim?s par les autres utilisateurs s'ils estiment que cela est dans l'int?r?t de l'encyclop?die. Sachez aussi que votre acc?s au serveur peut ?tre bloqu? si vous faites un mauvais usage du syst?me.",
"uploadlog"  => "log d'upload",
"uploadlogpage" => "Log_d'upload",
"uploadlogpagetext" => "Voici la liste des derniers fichiers copi?s sur le serveur.
L'heure indiqu?e est celle du serveur (UTC).
<ul>
</ul>
",
"filename"  => "Nom",
"filedesc"  => "Description",
"affirmation" => "Je d?clare que le d?tenteur du copyright de ce fichier accepte de le diffuser selon les termes de la $1.",
"copyrightpage" => "Wikip?dia:Copyright",
"copyrightpagename" => "licence Wikip?dia",
"uploadedfiles" => "Fichiers copi?s",
"noaffirmation" => "Vous devez confirmer que la copie de ce fichier ne viole aucun copyright.",
"ignorewarning" => "Ignorer l'avertissement et copier le fichier quand m?me.",
"minlength"  => "Les noms des images doivent comporter au moins trois lettres.",
"badfilename" => "L'image a ?t? renomm?e \"$1\".",
"badfiletype" => "\".$1\" n'est pas un format recommand? pour les fichiers images.",
"largefile"  => "La taille maximale conseill?e pour les images est de 100Ko.",
"successfulupload" => "Copie r?ussie",
"fileuploaded" => "Le fichier \"$1\" a ?t? copi? sur le serveur.
Suivez ce lien: ($2) pour acc?der ? la page de description, et donnez des informations sur le fichier, par exemple son origine, sa date de cr?ation, son auteur, ou tout autre renseignement en votre possession.",
"uploadwarning" => "Attention!",
"savefile"  => "Sauvegarder le fichier",
"uploadedimage" => " \"$1\" copi? sur le serveur",

# Image list
#
"imagelist"  => "Liste des images",
"imagelisttext" => "Voici une liste de $1 images class?es $2.",
"getimagelist" => "R?cup?ration de la liste des images",
"ilshowmatch" => "Afficher toutes les images dont le nom contient ",
"ilsubmit"  => "Chercher",
"showlast"  => "Afficher les $1 derni?res images class?es $2.",
"all"   => "toutes",
"byname"  => "par nom",
"bydate"  => "par date",
"bysize"  => "par taille",
"imgdelete"  => "suppr",
"imgdesc"  => "descr",
"imglegend"  => "L?gende: (descr) = afficher/modifier la description de l'image.",
"imghistory" => "Historique de l'image",
"revertimg"  => "r?tab",
"deleteimg"  => "suppr",
"imghistlegend" => "L?gende: (actu) = ceci est l'image actuelle, (suppr) = supprimer
cette ancienne version, (r?tab) = r?tablir cette ancienne version.
<br><i>Cliquez sur la date pour voir l'image copi?e ? cette date</i>.",
"imagelinks" => "Liens vers l'image",
"linkstoimage" => "Les pages ci-dessous comportent un lien vers cette image:",
"nolinkstoimage" => "Aucune page ne comporte de lien vers cette image.",

# Statistics
#
"statistics" => "Statistiques",
"sitestats"  => "Statistiques du site",
"userstats"  => "Statistiques utilisateur",
"sitestatstext" => "La base de donn?es contient actuellement <b>$1</b> pages.

Ce chiffre inclut les pages \"discussion\", les pages relatives ? Wikip?dia, les pages minimales (\"bouchons\"),  les pages de redirection, ainsi que d'autres pages qui ne peuvent sans doute pas ?tre consid?r?es comme des articles.
Si l'on exclut ces pages, il reste <b>$2</b> pages qui sont probablement de v?ritables articles.<p>
<b>$3</b> pages ont ?t? consult?es et <b>$4</b> pages modifi?es

depuis la mise ? jour du logiciel (?? ???? 2002).
Cela repr?sente une moyenne de <b>$5</b> modifications par page et de <b>$6</b> consultations pour une modification.",
"userstatstext" => "Il y a <b>$1</b> utilisateurs enregistr?s.
Parmi ceux-ci, <b>$2</b> ont le statut d'administrateur (voir $3).",


# Maintenance Page
#
"maintenance"		=> "Page de maintenance",
"maintnancepagetext"	=> "Cette page inclut plusieurs utilitaires pour la maintenance quotidienne. Certain de ces outils ont tendance ? charger la base de donn?es; ne rechargez pas la page a chaque modification.",
//MQ "This page includes several handy tools for everyday maintenance. Some of these functions tend to stress the database, so please do not hit reload after every item you fixed ;-)",
"maintenancebacklink"	=> "Retour ? la page de maintenance", // "Back to Maintenance Page",
"disambiguations"	=> "Pages d'homonymie", // Disambiguation pages",
"disambiguationspage"	=> "Wikip?dia:Liens_aux_pages_d'homonymie", // "Wikip?dia:Links_to_disambiguating_pages",
"disambiguationstext"	=> "Les articles suivants sont li?s vers une <i>page d'homonymie</i>. Or, il devraient etre li?s vers le sujet.<br>Une page est consider?e comme page d'homonymie si elle est li?e a partir de $1.<br>Les liens a partir de <i>namespace</i> ne sont pas consid?r?s.", // "The following articles link to a <i>disambiguation page</i>. They should link to the appropriate topic instead.<br>A page is treated as dismbiguation if it is linked from $1.<br>Links from other namespaces are <i>not</i> listed here.",
"doubleredirects"	=> "Double redirection", // MQ
"doubleredirectstext"	=> "<b>Attention:</b> cette liste peut contenir des faux positives. Dans ce cas, c'est probablement la page du premier #REDIRECT qui a du texte en plus.<br>Chaque rang?e contient des liens a la 1ere et 2e page de redirection, ainsi que la premi?re ligne de cette derniere, qui donne normalement la \"vraie\" destination. Le premier #REDIRECT devrait lier vers cetter destination.", //"<b>Attention:</b> This list may contain false positives. That usually means there is additional text with links below the first #REDIRECT.<br>\nEach row contains links to the first and second redirect, as well as the first line of the second redirect text, usually giving the \"real\" taget article, which the first redirect should point to.",
"selflinks"		=> "Page avec un lien circulaire", // MQ "Pages with Self Links",
"selflinkstext"		=> "Les pages suivantes contiennent un lien sur elles-memes, ce qui n'est pas permis.",
// MQ "The following pages contain a link to themselves, which they should not.",
"missinglanguagelinks"  => "Liens interlangues manquants", //"Missing Language Links",
"missinglanguagelinksbutton"    => "Je n'ai pas trouv? de lien/langage pour cette page", // MQ "Find missing language links for",
"missinglanguagelinkstext"      => "Ces articles ne lient pas ? leur 'contre-parties' in $1. Les redirections et les liens ne sont pas affich?s.",
// MQ "These articles do <i>not</i> link to their counterpart in $1. Redirects and subpages are <i>not</i> shown.",


# Miscellaneous special pages
#
"orphans"  => "Pages orphelines",
"lonelypages" => "Pages orphelines",
"unusedimages" => "Images orphelines",
"popularpages" => "Pages les plus consult?es",
"nviews"  => "$1 consultations",
"wantedpages" => "Pages les plus demand?es",
"nlinks"  => "$1 r?f?rences",
"allpages"  => "Toutes les pages",
"randompage" => "Une page au hasard",
"shortpages" => "Articles courts",
"longpages"  => "Articles longs",
"listusers"  => "Liste des participants",
"specialpages" => "Pages sp?ciales",
"spheading"  => "Pages sp?ciales",
"sysopspheading" => "Pages sp?ciales ? l'usage des administrateurs",
"developerspheading" => "Pages sp?ciales ? l'usage des d?veloppeurs",
"protectpage" => "Prot?ger la page",
"recentchangeslinked" => "Suivi des liens",
"rclsub"  => "(des pages li?es ? \"$1\")",
"debug"   => "D?boguer",
"newpages"  => "Nouvelles pages",
"movethispage" => "D?placer la page",
"unusedimagestext" => "<p>N'oubliez pas que d'autres sites, comme certaines Wikip?dias non francophones, peuvent contenir un lien direct vers cette image, et que celle-ci peut ?tre plac?e dans cette liste alors qu'elle est en r?alit? utilis?e.",
"booksources" => "Ouvrages de r?f?rence",
"booksourcetext" => "Voici une liste de liens vers d'autres sites qui vendent des livres neufs et d'occasion et sur lesquels vous trouverez peut-?tre des informations sur les livres que vous cherchez. Wikip?dia n'est li?e ? aucune de ces soci?t?s, et il n'y a aucune intention ? en faire les objets d'une pr?f?rence particuli?re.",

# Email this user
#
"mailnologin" => "Pas d'adresse",
"mailnologintext" => "Vous devez ?tre <a href=\"" .
		wfLocalUrl( "Special:Userlogin" ) . "\">connect?</a>
et avoir indiqu? une adresse ?lectronique valide dans vos <a href=\"" .
		wfLocalUrl( "Special:Preferences" ) . "\">pr?f?rences</a>
pour pouvoir envoyer un message ? un autre utilisateur.",
"emailuser"  => "Envoyer un message ? cet utilisateur",
"emailpage"  => "E-mail user",
"emailpagetext" => "Si cet utilisateur a indiqu? une adresse ?lectronique valide dans ses pr?f?rences, le formulaire ci-dessous lui enverra un message.
L'adresse ?lectronique que vous avez indiqu?e dans vos pr?f?rences appara?tra dans le champ \"Exp?diteur\" de votre message, afin que le destinataire puisse vous r?pondre.",
"noemailtitle" => "Pas d'adresse ?lectronique",
"noemailtext" => "Cet utilisateur n'a pas sp?cifi? d'adresse ?lectronique valide ou a choisi de ne pas recevoir de courrier ?lectronique des autres utilisateurs.",

"emailfrom"  => "Exp?diteur",
"emailto"  => "Destinataire",
"emailsubject" => "Objet",
"emailmessage" => "Message",
"emailsend"  => "Envoyer",
"emailsent"  => "Message envoy?",
"emailsenttext" => "Votre message a ?t? envoy?.",

# Watchlist
#
"watchlist"  => "Liste de suivi",
"watchlistsub" => "(pour l'utilisateur \"$1\")",
"nowatchlist" => "Votre liste de suivi ne contient aucun article.",
"watchnologin" => "Non connect?",
"watchnologintext" => "Vous devez ?tre <a href=\"" .
		wfLocalUrl( "Special:Userlogin" ) . "\">connect?</a>
pour modifier votre liste.",
"addedwatch" => "Ajout? ? la liste",
"addedwatchtext" => "La page \"$1\" a ?t? ajout?e ? votre <a href=\"" .
		wfLocalUrl( "Special:Watchlist" ) . "\">liste de suivi</a>.
Les prochaines modifications de cette page et de la page discussion associ?e seront r?pertori?es ici, et la page appara?tra <b>en gras</b> dans la <a href=\"" .
		wfLocalUrl( "Special:Recentchanges" ) . "\">liste des modifications r?centes</a> pour ?tre rep?r?e plus facilement.</p>

<p>Pour supprimer cette page de votre liste de suivi, cliquez sur \"Ne plus suivre\" dans le cadre de navigation.",
"removedwatch" => "Supprim? de la liste de suivi",
"removedwatchtext" => "La page \"$1\" a ?t? supprim?e de votre liste de suivi.",
"watchthispage" => "Suivre cette page",
"unwatchthispage" => "Ne plus suivre",
"notanarticle" => "Aucun article",

# Delete/protect/revert
#
"deletepage" => "Supprimer une page",
"confirm"  => "Confirmer",
"confirmdelete" => "Confirmer la suppression",
"deletesub"  => "(Suppression de \"$1\")",
"confirmdeletetext" => "Vous ?tes sur le point de supprimer d?finitivement de la base de donn?es une page
ou une image, ainsi que toutes ses versions ant?rieures.
Veuillez confirmer que c'est bien l? ce que vous voulez faire, que vous en comprenez les cons?quences et que vous faites cela en accord avec les [[Wikip?dia:Recommandations Et R?gles ?  Suivre|recommandations et r?gles ? suivre]].",
"confirmcheck" => "Oui, je confirme la suppression.",
"actioncomplete" => "Suppression effectu?e",
"deletedtext" => "\"$1\" a ?t? supprim?.
Voir $2 pour une liste des suppressions r?centes.",
"deletedarticle" => "effacement de \"$1\"",
"dellogpage" => "Deletion_log",
"dellogpagetext" => "Voici la liste des suppressions r?centes.
L'heure indiqu?e est celle du serveur (UTC).
<ul>
</ul>
",
"deletionlog" => "trace des effacements", // MQ "deletion log",
"reverted"  => "R?tablissement de la version pr?c?dente",
"deletecomment" => "Motif de la suppression",
"imagereverted" => "La version pr?c?dente a ?t? r?tablie.",
"rollback"	=> "r?voquer modifications",
"rollbacklink"	=> "r?voquer",
"cantrollback"	=> "Impossible de r?voquer: dernier auteur est le seul ? avoir modifi? cet article",
"revertpage"	=> "restitution de la derni?re modification de $1",

# Undelete
"undelete" => "Restaurer la page effac?e", // MQ "Restore deleted page",
"undeletepage" => "Voir et restaurer la page effac?e", // MQ "View and restore deleted pages",
"undeletepagetext" => "Cette page viens d'etre effac?e et mise dans la corbeille,  elle est toujours en base de donn?e et peut etre restaur?e.
La corbeille peut etre effac?e periodiquement.", // MQ
"The following pages have been deleted but are still in the archive and can be restored. The archive may be periodically cleaned out.",
"undeletearticle" => "Restaurer les articles effac?s", // MQ "Restore deleted article",
"undeleterevisions" => "$1 revisions archived",
"undeletehistory" => "If you restore the page, all revisions will be restored to the history.
If a new page with the same name has been created since the deletion, the restored
revisions will appear in the prior history, and the current revision of the live page
will not be automatically replaced.",
"undeleterevision" => "Deleted revision as of $1",
"undeletebtn" => "Restore!",
"undeletedarticle" => "restored \"$1\"",
"undeletedtext"   => "The article [[$1]] has been successfully restored.
See [[Wikipedia:Deletion_log]] for a record of recent deletions and restorations.",

# Contributions
#
"contributions" => "Contributions",
"mycontris" => "Mes contributions",
"contribsub" => "Pour $1",
"nocontribs" => "Aucune modification correspondant ? ces crit?res n'a ?t? trouv?e.",
"ucnote"  => "Voici les <b>$1</b> derni?res modifications effectu?es par cet utilisateur au cours des <b>$2</b> derniers jours.",
"uclinks"  => "Afficher les $1 derni?res modifications; afficher les $2 derniers jours.",

# What links here
#
"whatlinkshere" => "Pages li?es",
"notargettitle" => "Pas de cible",
"notargettext" => "Indiquez une page cible ou un utilisateur cible.",
"linklistsub" => "(Liste de liens)",
"linkshere"  => "Les pages ci-dessous contiennent un lien vers celle-ci:",
"nolinkshere" => "Aucune page ne contient de lien vers celle-ci.",
"isredirect" => "page de redirection",

# Block/unblock IP
#

"blockip"  => "Bloquer une adresse IP",
"blockiptext" => "Utilisez le formulaire ci-dessous pour bloquer l'acc?s en ?criture ? partir d'une adresse IP donn?e.
Une telle mesure ne doit ?tre prise que pour emp?cher le vandalisme et en accord avec [[Wikip?dia:Recommandations Et R?gles ? Suivre|recommandations et r?gles ? suivre]].
Donnez ci-dessous une raison pr?cise (par exemple en indiquant les pages qui ont ?t? vandalis?es).",
"ipaddress"  => "Adresse IP",
"ipbreason"  => "Motif",
"ipbsubmit"  => "Bloquer cette adresse",
"badipaddress" => "L'adresse IP n'est pas correcte.",
"noblockreason" => "Vous devez indiquer le motif du blocage.",
"blockipsuccesssub" => "Blocage r?ussi",
"blockipsuccesstext" => "L'adresse IP \"$1\" a ?t? bloqu?e.
<br>Vous pouvez consulter sur cette [[Special:Ipblocklist|page]] la liste des adresses IP bloqu?es.",
"unblockip"  => "D?bloquer une adresse IP",
"unblockiptext" => "Utilisez le formulaire ci-dessous pour r?tablir l'acc?s en ?criture
? partir d'une adresse IP pr?c?demment bloqu?e.",
"ipusubmit"  => "D?bloquer cette adresse",
"ipusuccess" => "Adresse IP \"$1\" d?bloqu?e",
"ipblocklist" => "Liste des adresses IP bloqu?es",
"blocklistline" => "$1, $2 a bloqu? $3",
"blocklink"  => "bloquer",
"unblocklink" => "d?bloquer",
"contribslink" => "contribs",


# Developer tools
#
"lockdb"  => "Verrouiller la base",
"unlockdb"  => "D?verrouiller la base",
"lockdbtext" => "Le verrouillage de la base de donn?es emp?chera tous les utilisateurs de modifier des pages, de sauvegarder leurs pr?f?rences, de modifier leur liste de suivi et d'effectuer toutes les autres op?rations n?cessitant des modifications dans la base de donn?es.
Veuillez confirmer que c'est bien l? ce que vous voulez faire et que vous d?bloquerez la base d?s que votre op?ration de maintenance sera termin?e.",
"unlockdbtext" => "Le d?verrouillage de la base de donn?es permettra ? nouveau ? tous les utilisateurs de modifier des pages, de mettre ? jour leurs pr?f?rences et leur liste de suivi, ainsi que d'effectuer les autres op?rations n?cessitant des modifications dans la base de donn?es.
Veuillez confirmer que c'est bien l? ce que vous voulez faire.",
"lockconfirm" => "Oui, je confirme que je souhaite verrouiller la base de donn?es.",
"unlockconfirm" => "Oui, je confirme que je souhaite d?verrouiller la base de donn?es.",

"lockbtn"  => "Verrouiller la base",
"unlockbtn"  => "D?verrouiller la base",
"locknoconfirm" => "Vous n'avez pas coch? la case de confirmation.",
"lockdbsuccesssub" => "Verrouillage de la base r?ussi.",
"unlockdbsuccesssub" => "Base d?verrouill?e.",
"lockdbsuccesstext" => "La base de donn?es de Wikip?dia est verrouill?e.

<br>N'oubliez pas de la d?verrouiller lorsque vous aurez termin? votre op?ration de maintenance.",
"unlockdbsuccesstext" => "La base de donn?es de Wikip?dia est d?verrouill?e.",

# SQL query
#
"asksql"  => "Requ?te SQL",
"asksqltext" => "Utilisez le formulaire ci-dessous pour faire une requ?te directe sur la base de donn?es de Wikip?dia.
Utilisez des guillemets simples ('comme ceci') pour d?limiter les cha?nes de caract?res.
Cette op?ration peut surcharger consid?rablement le serveur, faites en usage
avec mod?ration.",
"sqlquery"  => "Saisir la requ?te",

"querybtn"  => "Envoyer la requ?te",
"selectonly" => "Les requ?tes autres que \"SELECT\" sont r?serv?es aux d?veloppeurs de
Wikip?dia.",
"querysuccessful" => "Requ?te r?ussie",

# Move page
#
"movepage"  => "D?placer un article",
"movepagetext" => "Utilisez le formulaire ci-dessous pour renommer un article, en d?pla?ant toutes ses versions ant?rieures vers le nouveau nom.
Le titre pr?c?dent deviendra une page de redirection vers le nouveau titre.
Les liens vers l'ancien titre ne seront pas modifi?s et la page discussion, si elle existe, ne sera pas d?plac?e.<br>
<b>ATTENTION!</b>
Il peut s'agir d'un changement radical et inattendu pour un article souvent consult?;
assurez-vous que vous en comprenez bien les cons?quences avant de proc?der.",
"movearticle" => "D?placer l'article",
"movenologin" => "Non connect?",
"movenologintext" => "Pour pouvoir d?placer un article, vous devez ?tre <a href=\"" .
		wfLocalUrl( "Special:Userlogin" ) . "\">connect?</a>
en tant qu'utilisateur enregistr?.",
"newtitle"  => "Nouveau titre",
"movepagebtn" => "D?placer l'article",
"pagemovedsub" => "D?placement r?ussi",
"pagemovedtext" => "L'article \"[[$1]]\" a ?t? d?plac? vers \"[[$2]]\".",
"articleexists" => "Il existe d?j? un article portant ce titre, ou le titre que vous avez choisi n'est pas valide.
Veuillez en choisir un autre.",
"movedto"  => "d?plac? vers",
"movetalk"  => "D?placer aussi la page \"discussion\", s'il y a lieu.",
"talkpagemoved" => "La page discussion correspondante a ?galement ?t? d?plac?e.",
"talkpagenotmoved" => "La page discussion correspondante n'a <strong>pas</strong> ?t? d?plac?e.",

);

class LanguageFr extends Language {

	function getNamespaces() {
		global $wgNamespaceNamesFr;
		return $wgNamespaceNamesFr;
	}


	function getNsText( $index ) {
		global $wgNamespaceNamesFr;
		return $wgNamespaceNamesFr[$index];
	}

	function getNsIndex( $text ) {
		global $wgNamespaceNamesFr;

		foreach ( $wgNamespaceNamesFr as $i => $n ) {
		 if ( 0 == strcasecmp( $n, $text ) ) { return $i; }
		}
		if( 0 == strcasecmp( "Wikipedia", $text ) ) return 4;
		if( 0 == strcasecmp( "Discussion_Wikipedia", $text ) ) return 5;
		return false;
	}

	function specialPage( $name ) {
		return $this->getNsText( Namespace::getSpecial() ) . ":" . $name;
	}

	function getQuickbarSettings() {
		global $wgQuickbarSettingsFr;
		return $wgQuickbarSettingsFr;
	}

	function getSkinNames() {
		global $wgSkinNamesFr;
		return $wgSkinNamesFr;
	}

	function getUserToggles() {
		global $wgUserTogglesFr;
		return $wgUserTogglesFr;
	}

	function getLanguageName( $code ) {
		global $wgLanguageNamesFr;
		if ( ! array_key_exists( $code, $wgLanguageNamesFr ) ) {
		 return "";
		}
		return $wgLanguageNamesFr[$code];
	}

	function getMonthName( $key )
	{
		global $wgMonthNamesFr;
		return $wgMonthNamesFr[$key-1];
	}

	function getMonthAbbreviation( $key )
	{
		global $wgMonthAbbreviationsFr;
		return $wgMonthAbbreviationsFr[$key-1];
	}

	function getWeekdayName( $key )
	{
		global $wgWeekdayNamesFr;
		return $wgWeekdayNamesFr[$key-1];
	}

	# Inherit userAdjust()

	function date( $ts, $adj = false )
	{
		if ( $adj ) { $ts = $this->userAdjust( $ts ); }

		$d = (0 + substr( $ts, 6, 2 )) . " " .
		  $this->getMonthAbbreviation( substr( $ts, 4, 2 ) ) .
		  " " . substr( $ts, 0, 4 );
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
		return $this->date( $ts, $adj ) . " ? " . $this->time( $ts, $adj );
	}

	function getValidSpecialPages()
	{
		global $wgValidSpecialPagesFr;
		return $wgValidSpecialPagesFr;
	}

	function getSysopSpecialPages()
	{
		global $wgSysopSpecialPagesFr;
		return $wgSysopSpecialPagesFr;
	}

	function getDeveloperSpecialPages()
	{
		global $wgDeveloperSpecialPagesFr;
		return $wgDeveloperSpecialPagesFr;
	}

	function getMessage( $key )
	{
		global $wgAllMessagesFr, $wgAllMessagesEn;
		$m = $wgAllMessagesFr[$key];

		if ( "" == $m ) { return $wgAllMessagesEn[$key]; }
		else return $m;

	}
}

?>
