<?

include_once( "utf8Case.php" );

# The names of the namespaces can be set here, but the numbers
# are magical, so don't change or move them!  The Namespace class
# encapsulates some of the magic-ness.

/* private */ $wgNamespaceNamesKo = array(
	-1	=> "특수기능",	# Special
	0	=> "",
	1	=> "토론",	# Talk
	2	=> "사용자",	# User
	3	=> "사용자토론",	# User_talk
	4	=> "위키백과",	# Wikipedia
	5	=> "위키백과토론",# Wikipedia_talk
	6	=> "그림",	# Image
	7	=> "그림토론"	# Image_talk
);

# I always compare this file with japanese file, when I'm confused.
# And DefaultUserOption isn't there in japanese one. What's
# this? I don't have to translate this. Am I right?

# The Japanese file is a bit obsolete, so don't trust it too much!
# Don't translate the text strings here, but you can customize any
# option values if you like. These will be the defaults for any user
# who isn't logged in, or a newly created user account.

/* private */ $wgDefaultUserOptionsKo = array(
	"quickbar" => 1, "underline" => 1, "hover" => 1,
	"cols" => 80, "rows" => 25, "searchlimit" => 20,
	"contextlines" => 5, "contextchars" => 50,
	"skin" => 0, "math" => 1, "rcdays" => 14, "rclimit" => 50,
	"highlightbroken" => 1, "stubthreshold" => 0
);

/* private */ $wgQuickbarSettingsKo = array(
#	"None", "Fixed left", "Fixed right", "Floating left"
	"없음", "왼쪽 붙박이", "오른쪽 붙박이", "왼쪽 떠다님"

);

/* private */ $wgSkinNamesKo = array(
#	"Standard", "Nostalgia", "Cologne Blue"
	"보통", "그리움", "쾰른 파랑"
);

/* private */ $wgUserTogglesKo = array(
	"hover"		=> "위키고리 풍선상자로 보이기",
	"underline" => "고리에 밑줄치기",
	"highlightbroken" => "없는 문서로의 고리 돋보이기",
	"justify"	=> "문단 정렬",
	"hideminor" => "사소한 편집 최근 바뀜에서 숨기기",
	"numberheadings" => "머릿글 번호 매기기",
	"rememberpassword" => "세션동안 암호 기억",
	"editwidth" => "편집상자 너비 최대",
	"editondblclick" => "Edit pages on double click (JavaScript)",
	"watchdefault" => "Watch new and modified articles"
);

/* private */ $wgBookstoreListKo = array(
	"AddALL" => "http://www.addall.com/New/Partner.cgi?query=$1&type=ISBN",
	"PriceSCAN" => "http://www.pricescan.com/books/bookDetail.asp?isbn=$1",
	"Barnes & Noble" => "http://shop.barnesandnoble.com/bookSearch/isbnInquiry.asp?isbn=$1",
	"Amazon.com" => "http://www.amazon.com/exec/obidos/ISBN=$1",
	"Aladdin.co.kr" => "http://www.aladdin.co.kr/catalog/book.asp?ISBN=$1"
);

/* These should preferably be the native names of the languages; the
   point is for people who speak them to be able to navigate to them
   from any language section of the Wikipedia. */
/* 아래 언어명은 그 언어 사용자들을 위한 것이므로, 한국어로 고치지 마세요. */
/* private */ $wgLanguageNamesKo = array(
    "af" => "Afrikaans",
	"ar" => "&#8238;&#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577;&#8236; (Araby)",
	"be" => "&#1041;&#1077;&#1083;&#1072;&#1088;&#1091;&#1089;&#1082;&#1080;",
	"br" => "Brezhoneg",
	"ca" => "Catal&#224;",
	"ch" => "Chamoru",
	"cs" => "&#268;esk&#225;",
	"cy" => "Cymraeg",
	"da" => "Dansk", # Note two different subdomains. 
	"dk" => "Dansk", # 'da' is correct for the language.
	"de" => "Deutsch",
	"el" => "&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940; (Ellenika)",
	"en" => "English",
	"simple" => "Simple English",
	"eo" => "Esperanto",
	"es" => "Espa&#241;ol",
	"et" => "Eesti",
	"eu" => "Euskara",
	"fa" => "&#8238;&#1601;&#1585;&#1587;&#1609;&#8236;(Farsi)",
	"fi" => "Suomi",
	"fr" => "Fran&#231;ais",
	"gu" => "&#2711;&#2753;&#2716;&#2736;&#2750;&#2724;&#2752; (Gujarati)",
	"he" => "&#1506;&#1489;&#1512;&#1497;&#1514; (Ivrit)",
	"hi" => "&#2361;&#2367;&#2344;&#2381;&#2342;&#2368; (Hindi)",
	"hr" => "Hrvatski",
	"hu" => "Magyar",
	"ia" => "Interlingua",
	"id" => "Indonesia",
	"is" => "&#205;slenska",
	"it" => "Italiano",
	"ja" => "&#26085;&#26412;&#35486; (Nihongo)",
	"ka" => "&#4325;&#4304;&#4320;&#4311;&#4309;&#4308;&#4314;&#4312; (Kartuli)",
	"ko" => "한국어",
	"kw" => "Kernewek",
	"la" => "Latina",
	"lt" => "Lietuvi&#371;",
	"mg" => "Malagasy",
	"ms" => "Bahasa Melayu",
	"ne" => "&#2344;&#2375;&#2346;&#2366;&#2354;&#2368; (Nepali)",
	"nl" => "Nederlands",
	"no" => "Norsk",
	"pl" => "Polski",
	"pt" => "Portugu&#234;s",
	"ro" => "Rom&#226;n&#259;",
	"ru" => "&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (Russkij)",
	"sa" => "&#2360;&#2306;&#2360;&#2381;&#2325;&#2371;&#2340; (Samskrta)",
	"so" => "Soomaali",
	"sq" => "Shqiptare",
	"sr" => "Srpski",
	"sv" => "Svenska",
	"sw" => "Kiswahili",
	"tr" => "T&#252;rk&#231;e",
	"uk" => "&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; (Ukrayins`ka)",
	"vo" => "Volap&#252;k",
	"xh" => "isiXhosa",
	"zh" => "&#20013;&#25991; (Zhongwen)"
);

/* private */ $wgWeekdayNamesKo = array(
	"일요일", "월요일", "화요일", "수요일", "목요일",
	"금요일", "토요일"
);


# (Okay, I think I got it right now. This can be adjusted
#  in the 'date' function down at the bottom. --Brion)
#
# Thanks. And it's usual that the time comes after dates.
# So I've change the timeanddate function, just exchanged $time and $date 
# But you should check before you install it, 'cause I'm quite stupid about
# the programming. 
#

/* private */ $wgWeekdayAbbreviationsKo = array(
	"日", "月", "火", "水", "木",
	"金", "土"
);

/* private */ $wgMonthNamesKo = array(
	"1월", "2월", "3월", "4월", "5월", "6월",
	"7월", "8월", "9월", "10월", "11월",
	"12월"
);

/* private */ $wgMonthAbbreviationsKo = array(
	"1", "2", "3", "4", "5", "6", "7", "8",
	 "9", "10", "11",	"12"
);

# All special pages have to be listed here: a description of ""
# will make them not show up on the "Special Pages" page, which
# is the right thing for some of them (such as the "targeted" ones).
#


/* private */ $wgValidSpecialPagesKo = array(
	"Userlogin"		=> "들어가기",
	"Userlogout"	=> "나오기",
	"Preferences"	=> "개인 맞춤",
	"Watchlist"		=> "눈여겨보기목록",
	"Recentchanges" => "최근 바뀜",
	"Upload"		=> "파일 올리기",
	"Imagelist"		=> "그림 목록",
	"Listusers"		=> "사용자 목록",
	"Statistics"	=> "누리터 통계",
	"Randompage"	=> "아무거나",

	"Lonelypages"	=> "외톨이 문서",
	"Unusedimages"	=> "외톨이 그림",
	"Popularpages"	=> "인기있는 문서",
	"Wantedpages"	=> "가장 필요한 문서",
	"Shortpages"	=> "짧은 문서",
	"Longpages"		=> "긴 문서",
	"Newpages"		=> "새 문서",
	"Allpages"		=> "모두 나열",

	"Ipblocklist"	=> "막힌 IP",

	"Maintenance" => "관리",
	"Specialpages"  => "",
	"Contributions" => "", # These are supposed to be blank;
	"Emailuser"		=> "", # they don't work without the target
	"Whatlinkshere" => "", # link so can't be used from the
	"Recentchangeslinked" => "", # plain special pages list
	"Movepage"		=> "",
	"Booksources"	=> "외부 책방"
);

# I'll leave this part in english, for it's more likely that
# there will probably no Korean for the maintaining this site
# in near future, and if any shows up, he would possibly speak
# both Korean and English. And he can later koreanize this part.

/* private */ $wgSysopSpecialPagesKo = array(
	"Blockip"		=> "Block an IP address",
	"Asksql"		=> "Query the database",
	"Undelete"		=> "Undelete Page"
);

/* private */ $wgDeveloperSpecialPagesKo = array(
	"Lockdb"		=> "Make database read-only",
	"Unlockdb"		=> "Restore database write access",
	"Debug"			=> "Debugging information"
);

/* private */ $wgAllMessagesKo = array(

# Bits of text used by many pages:
#
"mainpage"		=> "대문",
"about"			=> "소개",
"aboutwikipedia" => "위키백과란",
"aboutpage"		=> "위키백과:소개",
"help"			=> "도움말",
"helppage"		=> "위키백과:도움말",
"wikititlesuffix" => "위키백과",
"bugreports"	=> "벌레 발견",
"bugreportspage" => "위키백과:벌레_발견",
"faq"			=> "잦은질문(FAQ)",
"faqpage"		=> "위키백과:잦은질문(FAQ)",
"edithelp"		=> "편집 도움말",
"edithelppage"	=> "위키백과:문서_편집_방법",
"cancel"		=> "취소",
"qbfind"		=> "찾기",

# where does this "browse" appear? I haven't seen it.
# and therefore no idea what its function is.

# (Select the Cologne Blue skin; it's a section header
#  in the sidebar over 'main page', 'recent changes', etc.)

"qbbrowse"		=> "항해판",
"qbedit"		=> "고치기",
"qbpageoptions" => "문서 기능",
"qbpageinfo"	=> "문서 정보",
"qbmyoptions"	=> "자기 기능",
"mypage"		=> "자기 문서",
"mytalk"		=> "자기 토론",
"currentevents" => "요즘의 화제",
"errorpagetitle" => "오류",
"returnto"		=> "$1(으)로 돌아가기.",
"fromwikipedia"	=> "위키백과, 우리 모두의 백과사전.",
"whatlinkshere"	=> "여길 가리키는 문서",
"help"			=> "도움말",
"search"		=> "찾기",
"history"		=> "문서역사",
"printableversion" => "인쇄용",
"editthispage"	=> "문서 고치기",
"deletethispage" => "문서 지우기",
"protectthispage" => "문서 보호",
"unprotectthispage" => "문서 보호 해제",
"talkpage"		=> "토론",
"subjectpage"	=> "본 문서",
"otherlanguages" => "다른 언어",
"redirectedfrom" => "($1에서 넘어옴.)",
"lastmodified"	=> "이 문서는 최근 $1에 바뀌었습니다.",

"viewcount"		=> "이 문서는 총 $1번 읽혔습니다.",
"printsubtitle" => "(http://www.wikipedia.org에서)",
"protectedpage" => "보호되는 문서",
"administrators" => "위키백과:관리자",
"sysoptitle"	=> "Sysop 권한 필요",
"sysoptext"		=> "해당 action은 \"Sysop\"만 실행할 수 있습니다.
참조 $1.",
"developertitle" => "Developer 권한 필요",
"developertext"	=> "해당 action은 \"developer\"만 실행할 수 있습니다.
참조 $1.",
"nbytes"		=> "$1 바이트",
"go"			=> "가기",
"ok"			=> "확인",
"sitetitle"		=> "위키백과",
"sitesubtitle"	=> "우리 모두의 백과사전",
"retrievedfrom" => "\"$1\"에서",

# Main script and global functions
#
"nosuchaction"	=> "그런 action은 없습니다.",
"nosuchactiontext" => "위키백과 무른모는 URL로 주어진 action을
모릅니다.",
"nosuchspecialpage" => "틀린 특수기능",
"nospecialpagetext" => "위키백과는 요청한 특수기능을
모릅니다.",

# General errors
#
# I'll leave this part in English for admins who don't understand Korean.
"error"			=> "Error",
"databaseerror" => "Database error",
"dberrortext"	=> "A database query syntax error has occurred.
This could be because of an illegal search query (see $5),
or it may indicate a bug in the software.
The last attempted database query was:
<blockquote><tt>$1</tt></blockquote>
from within function \"<tt>$2</tt>\".
MySQL returned error \"<tt>$3: $4</tt>\".",
"noconnect"		=> "Could not connect to DB on $1",
"nodb"			=> "Could not select database $1",
"readonly"		=> "Database locked",
"enterlockreason" => "Enter a reason for the lock, including an estimate
of when the lock will be released",
"readonlytext"	=> "The Wikipedia database is currently locked to new
entries and other modifications, probably for routine database maintenance,
after which it will be back to normal.
The administrator who locked it offered this explanation:
<p>$1",
"missingarticle" => "The database did not find the text of a page
that it should have found, named \"$1\".
This is not a database error, but likely a bug in the software.
Please report this to an administrator, making note of the URL.",
"internalerror" => "Internal error",
"filecopyerror" => "Could not copy file \"$1\" to \"$2\".",
"filerenameerror" => "Could not rename file \"$1\" to \"$2\".",
"filedeleteerror" => "Could not delete file \"$1\".",
"filenotfound"	=> "Could not find file \"$1\".",
"unexpected"	=> "Unexpected value: \"$1\"=\"$2\".",
"formerror"		=> "Error: could not submit form",	
"badarticleerror" => "This action cannot be performed on this page.",
"cannotdelete"	=> "Could not delete the page or image specified.",

# Login and logout pages
#
"logouttitle"	=> "나옴",
"logouttext"	=> "위키백과에서 나왔습니다.
이대로 이름없이 위키백과를 이용하거나, 방금 사용했던 또이름, 혹은 다른 또이름으로 들어가서 이용하세요.\n",

"welcomecreation" => "<h2>$1 님, 환영합니다!</h2><p>또이름이 만들어 졌습니다.
개인 맞춤에서 자잘한 환경들을 바꾸어 보세요.",

"loginpagetitle" => "들어가기",
"yourname"		=> "또이름은",
"yourpassword"	=> "암호는",
"yourpasswordagain" => "암호 또 한번",
"newusersonly"	=> " (새내기 사용자)",
"remembermypassword" => "세쎤동안 암호를 기억합니다.",
"loginproblem"	=> "<b>들어가는 데 문제가 있습니다.</b><br>다시 해 보세요!",
"alreadyloggedin" => "<font color=red><b>$1 님, 벌써 들어와 있습니다!</b></font><br>\n",

"areyounew"		=> "위키백과에 처음 왔나요? 위키백과의 한 사람이 되고 싶다면, 
또이름을 하나 지어 또이름란에 써 넣고, 암호를 두번 써 넣으세요. 
누리편지주소는 넣지 않아도 됩니다. 다만,  
암호를 잊었을 때, 편지로 새 암호를 보내드립니다.<br>\n",

"login"			=> "들어가기",
"userlogin"		=> "들어가기",
"logout"		=> "나가기",
"userlogout"	=> "나오기",
"createaccount"	=> "또이름 새로 만들기",
"badretype"		=> "암호가 서로 다릅니다.",
"userexists"	=> "또이름이 벌써 사용중입니다. 다른 또이름을 지으세요.",
"youremail"		=> "당신의 누리편지",
"yournick"		=> "당신의 별명 (서명용)",
"emailforlost"	=> "암호를 잊었을 때, 새 암호를 누리편지로 받을 수 있습니다.",
"loginerror"	=> "들어가기 오류",
"noname"		=> "또이름이 틀립니다.",
"loginsuccesstitle" => "들어가기 성공",
"loginsuccess"	=> "\"$1\" 위키백과에 들어왔습니다.",
"nosuchuser"	=> "\"$1\"란 또이름은 없습니다.".
"철자가 맞는지 확인하고, 아직 또이름이 없다면, 아래를 채워 또이름을 새로이 만드세요.",
"wrongpassword"	=> "암호가 틀립니다. 다시 시도하세요.",
"mailmypassword" => "새 암호를 누리편지로 보냅니다.",
"passwordremindertitle" => "위키백과에서 보내는 새 암호",
"passwordremindertext" => "누군가가 (IP $1 을 사용했던, 아마도 당신이)
새 위키백과 암호를 보내달라고 부탁했습니다.
또이름 \"$2\"의 암호는 이제 \"$3\"입니다.
새 암호로 위키백과에 들어와서, 암호를 바꾸세요.",
"noemail"		=> "또이름 \"$1\"에 딸린 누리편지주소정보가 없습니다.",
"passwordsent"	=> "\"$1\"의 새 암호를 누리편지로 보냈습니다.
암호를 받고 다시 들어오세요.",

# Edit pages
#
"summary"		=> "바꾼내용 간추리기",
"minoredit"		=> "사소한 편집",
"savearticle"	=> "저장",
"preview"		=> "미리보기",
"showpreview"	=> "미리보기",
"blockedtitle"	=> "사용자 접근금지",
"blockedtext"	=> "$1 가 당신의 또이름이나 IP를 막았습니다.
이유는 다음과 같습니다:<br>$2<p> 접근금지에 대해선 관리자와 상의하십시오.",
"newarticle"	=> "(새문서)",
"newarticletext" => "새문서에 내용을 써 넣으세요.",
"noarticletext" => "(현재 문서는 비어 있습니다.)",
"updated"		=> "(바뀜)",
"note"			=> "<strong>주의:</strong> ",
"previewnote"	=> "지금 미리보기로 보고 있는 내용은 아직 저장되지 않았습니다!",

# when does this message show up? I have encountered it yet, I guess.
# And what does it have to do with conflict? The message sound quite normal.
# (I don't think it _can_ show up. It's only used if you preview and get
# an edit conflict, but edit conflict is tripped only if you're saving.)
"previewconflict" => "This preview reflects the text in the upper
text editing area as it will appear if you choose to save.",

"editing"		=> "$1 고쳐쓰기", 
"editconflict"	=> "고치기 충돌: $1",
"explainconflict" => "문서를 고쳐쓰는 동안, 문서가 바뀌었습니다.
위쪽이 바뀐 현재 문서이고, 아래쪽이 당신이 고쳐쓴 내용입니다.
당신이 고쳐쓴 내용을 현재 문서에 다시 집어 넣어야 할 것입니다.
지금 \"저장\"을 눌러도, 
<b>오직</b> 위쪽에 있는 내용만 저장됩니다.\n<p>",
"yourtext"		=> "당신이 고쳐쓴 것",
"storedversion" => "바뀐 현재 문서",
"editingold"	=> "<strong>경고: 지금 옛날 버젼의 문서를 고치고 있습니다.
만약, 지금 여기서 저장을 하면, 그 때 이후의 모든 버젼을 잃게 됩니다.</strong>\n",
"yourdiff"		=> "차이",
"copyrightwarning" => "위키백과에 당신이 기여한 것은 모두 GNU 자유 문서 사용허가서(GFDL)
($1참조)에 따라 배포됩니다.
당신이 써 넣은 내용이 제한없이 고쳐지고, 재배포되는 것이 싫다면, 저장하지 마십시오.에 반대할 때에는, 여기에 쓰지 마시길 바랍니다.<br>
또한, 여기 써 넣은 내용을 스스로 썼음을, 혹은 모두에게 공개된 자료에서 빌어왔음을
같이 약속해야 합니다.
<strong>저작권의 보호를 받는 내용을 저작권자의 허가없이 보내지 마십시오!</strong>",


# History pages
#
"revhistory"	=> "바뀐역사",
"nohistory"		=> "이 문서는 역사가 없습니다.",
"revnotfound"	=> "버젼 찾지 못함",
"revnotfoundtext" => "요청한 이 문서의 옛 버젼을 찾지 못했습니다.
이 문서에 접근할 때의 URL을 확인해 주십시오.\n",
"loadhist"		=> "문서역사를 받고 있습니다.",
"currentrev"	=> "현재 버젼",
"revisionasof"	=> "$1 버젼",
"cur"			=> "현재",
"next"			=> "다음",
"last"			=> "이전",
"orig"			=> "처음",
"histlegend"	=> "상세설명: (현재) = 현재 버젼과의 차이,
(이전) = 바로 이전 버전과의 차이, 少 = 사소한 편집",

# Diffs
#
"difference"	=> "(버젼사이 차이)",
"loadingrev"	=> "버젼 차이를 받고 있습니다.",
"lineno"		=> "$1째 줄:",
"editcurrent"	=> "현재 버전의 문서를 고칩니다.",

# Search results
#
"searchresults" => "찾아본 결과",
"searchhelppage" => "위키백과:찾기",
"searchingwikipedia" => "위키백과 찾기",
"searchresulttext" => "위키백과 찾기에 대해 자세한 정보는 $1 를 보세요.",
"searchquery"	=> "열쇠말 \"$1\"",
"badquery"		=> "좋지 않은 열쇠말",

# I think we should enable the less-than-3-letter query in Korean.
# One korean letter corresponds to one syllable. And when I do a search
# in google or yahoo. The query I type in is mostly 3, 4 of letters
# and it works. I'll leave this part in English. I'll wait for the
# software to be developed to be compitable three letter search.

# It's really 3 bytes, not 3 letters. Any Korean letter in UTF-8 encoding
# is 3 bytes, so in theory it should work. However, searches for Korean
# text don't work anyway. I'll have to bang it into shape... --Brion

# Then, one and a half, am I right?

"badquerytext"	=> "<b>Sorry, a search with Korean doesn't work yet.</b>
We could not process your query.
This is probably because you have attempted to search for a
word fewer than three letters long, which is not yet supported.
It could also be that you have mistyped the expression, for
example \"fish and and scales\".
Please try another query.",

"matchtotals"	=> "열쇠말 \"$1\"이 제목에 들어있는 문서는 $2개 이고,
내용에 담고있는 문서는 $3개 입니다.",
"titlematches"	=> "문서 제목 일치",
"notitlematches" => "제목과 맞는 문서가 없습니다.",
"textmatches"	=> "문서 내용 일치",
"notextmatches"	=> "내용에 열쇠말을 담고 있은 문서가 없습니다.",
"prevn"			=> "이전 $1",
"nextn"			=> "다음 $1",
"viewprevnext"	=> "($1) ($2) 보기 ($3).",
"showingresults" => "<b>$2</b>번 부터 <b>$1</b>개의 결과 입니다.",
"nonefound"		=> "<strong>Note</strong>: unsuccessful searches are
often caused by searching for common words like \"have\" and \"from\",
which are not indexed, or by specifying more than one search term (only pages
containing all of the search terms will appear in the result).",
"powersearch" => "찾기",
"powersearchtext" => "
Search in namespaces :<br>
$1<br>
$2 List redirects &nbsp; Search for $3 $9",


# Preferences page
#
"preferences"	=> "개인 맞춤",
"prefsnologin" => "나와 있습니다.",
"prefsnologintext"	=> "<a href=\"" .
  wfLocalUrl( "특수기능:Userlogin" ) . "\">들어와</a> 있을 때에만,
# Special:Userlogin => 특수기능:들어가기 개인 환경을 맞출 수 있습니다.",
"prefslogintext" => "당신은 \"$1\", 맞죠?
당신의 내부 ID 번호는 $2입니다.",
"prefsreset"	=> "개인 맞춤을 보통으로 되돌렸습니다.",
"qbsettings"	=> "빨리가기 맞춤", 
"changepassword" => "암호 바꾸기",
"skin"			=> "옷",
"saveprefs"		=> "맞춤 저장",
"resetprefs"	=> "맞춤 보통으로",
"oldpassword"	=> "현재 암호",
"newpassword"	=> "새 암호",
"retypenew"		=> "새 암호 또 한번",
"textboxsize"	=> "문서상자 크기",
"rows"			=> "줄수",
"columns"		=> "너비",
"searchresultshead" => "찾기 결과 맞춤",
"resultsperpage" => "쪽마다 보이는 결과",
"contextlines"	=> "결과마다 보이는 줄수",
"contextchars"	=> "줄수마다 보이는 글잣수",
"stubthreshold" => "씨앗보기 문턱값",
"recentchangescount" => "최근 바뀜에 보이는 항목 수",
"savedprefs"	=> "새 설정을 저장했습니다.",
"timezonetext"	=> "현지 시간과 서버 시간(UTC)과 차이를 써 넣으세요.",
"localtime"	=> "현지 시각",
"timezoneoffset" => "시간차",
"emailflag"		=> "다른 사용자에게서 누리편지 안 받음",

# Recent changes
#
"recentchanges" => "최근 바뀜",
"recentchangestext" => "아래 나열된 문서들이 최근에 바뀌었습니다.

[[위키백과:새내기_환영|새내기, 환영합니다]]!
새내기들은 다음 문서를 읽어 보세요.: [[위키백과:잦은질문(FAQ)|위키백과 잦은질문(FAQ)]],
[[위키백과:정책과 지침|위키백과 정책]]
(특별히 [[위키백과:제목달기 규칙|제목달기 규칙]],
[[위키백과:중립적인 시각|중립적인 시각]]),
그리고 [[위키백과:범하기_쉬운_실수|범하기 쉬운 실수]].

위키백과가 성공하려면, 여러분이 저작권에 저촉되는 내용을 이곳에 써 넣지 않는 것이
매우 중요합니다.' [[위키백과:저작권|저작권]].
법적 문제가 프로젝트를 망칠 수 있습니다. 저작권에 유의해 주세요.
또, [http://meta.wikipedia.org/wiki/Special:Recentchanges 최근 메타 토론]도 
읽어 보세요.",
"rcloaderr"		=> "최근 바뀜을 받고 있습니다.",
"rcnote"		=> "다음이 최근 <strong>$2</strong>일간 바뀐  <strong>$1</strong>개의 문서입니다.",
"rclinks"		=> "최근 $2일 동안에 바뀐 $1개의 문서를 봅니다.",

# <font color="red">where does rchide appear?
# It doesn't, currently. I think it was proposed at one point.</font>
"rchide"		=> "in $4 form; $1 minor edits; $2 secondary namespaces; $3 multiple edits.",

"diff"			=> "차이",
"hist"			=> "역사",
"hide"			=> "숨김",
"show"			=> "보임",
"tableform"		=> "표로",
"listform"		=> "목록으로",
"nchanges"		=> "$1개 바뀜",
"minoreditletter" => "少",
"newpageletter" => "新",

# Upload
#
"upload"		=> "올리기",
"uploadbtn"		=> "파일 올리기",
"uploadlink"	=> "그림 올리기",
"reupload"		=> "다시 올리기",
"reuploaddesc"	=> "올리기 틀로 돌아감",
"uploadnologin" => "나와있습니다.",
"uploadnologintext"	=> "위키백과에 <a href=\"" .
  wfLocalUrl( "특수기능:Userlogin" ) . "\">들어와</a> 있을 때에만
# special:userlogin 특수기능:들어가기
파일을 올릴 수 있습니다.",
"uploadfile"	=> "파일 올리기",
"uploaderror"	=> "올리기 오류",
"uploadtext"	=> "<strong>잠깐!</strong> 여기 그림을 올리기 전에,
위키백과의 <a href=\"" .
wfLocalUrlE( "위키백과:Image_use_policy" ) . "\">그림 사용 정책</a>읽고 따라 주세요.
<p>
이미 올라온 그림을 찾아 보려면, <a href=\"" . wfLocalUrlE( "특수기능:Imagelist" ) .
"\">올라온 그림 목록</a>으로 가세요.
# Special:Image list  특수기능:그림_목록
그림을 올리거나 지우면 <a href=\"" .
wfLocalUrlE( "위키백과:올리기_기록" ) . "\">올리기 기록</a>에 그 사실이 남습니다.
# 위키백과:올리기_기록 위키백과:올리기_기록

<p>
밑에 있는 틀을 이용해서 문서에 담을 파일을 올리세요.
대부분의 누리그물 훑개(browser)는, 아래 \"찾아보기...\" (영문 \"Browse...\") 단추로
 자기 컴퓨터의 파일을 찾게 해 줍니다.
원하는 파일을 고르면, 단추 옆의 공간에 파일이름이 채워질 것입니다.
또한, 저작권에 저촉되지 않는 파일을 올린다는 사실도
확인해야 합니다.
마지막으로, \"올리기\" 단추를 누르면 올라갑니다. 누리그물 연결이 느리면, 
시간이 걸릴 수 있습니다.
<p>
위키백과는 사진은 JPEG형식을, 보통 그림, 아이콘은 PNG형식을, 소리는
OGG형식을 더 좋아합니다.
이름은 햇갈리지 않고, 내용을 잘 나타내는 것으로 지어주세요. 그림을 문서에
담을 때에는 <b>[[image:file.jpg]]</b> 또는 <b>[[image:file.png|alt text]]</b>
처럼, 소리를 담을 때에는<b>[[media:file.ogg]]</b>처럼 써서 고리를 걸어주면
됩니다.
<p>
다른 사람들이 올린 파일을 고치거나 지울 수 있다는 것을 알아두십시오.
또한, 시스템을 남용할 때에는, 파일 올리기가 금지될 수도 있습니다.
",
"uploadlog"		=> "올리기 기록",
"uploadlogpage" => "올리기_기록",
"uploadlogpagetext" => "최근 올라온 그림 목록입니다.
모든 시간은 서버 기준(UTC)입니다.
<ul>
</ul>
",
"filename"		=> "파일이름",
"filedesc"		=> "짧은설명",
"affirmation"	=> "파일의 저작권자가
$1의 조건으로 사용을 허가했음을 확인합니다.",
"copyrightpage" => "위키백과:저작권",
"copyrightpagename" => "위키백과 저작권",
"uploadedfiles"	=> "파일 올리기",
"noaffirmation" => "올리는 파일이 어떤 저작권에도 저촉되지 않음을
확인해야 합니다.",
"ignorewarning"	=> "경고 무시하고, 파일 저장",

# three alphabets and how many for Korean character?
"minlength"		=> "그림이름은 두글자가 넘어야 합니다.",

"badfilename"	=> "그림이름이 \"$1\"로 바뀌었습니다.",
"badfiletype"	=> "\".$1\" 형식은 권장하지 않습니다.",
"largefile"		=> "그림크기는 100k이하를 권장합니다.",
"successfulupload" => "올리기 성공",
"fileuploaded"	=> "\"$1\"가 올라갔습니다.
다음 고리($2)를 따라 가서, 설명문서에 파일에 대한 정보를(어디서 구했는지, 
누가 언제 만들었는지, 또 그 이외 필요한 사항들을) 채우세요.",
"uploadwarning" => "올리기 경고",
"savefile"		=> "파일 저장",
"uploadedimage" => "\"$1\"를 올렸습니다.",

# Image list
#
"imagelist"		=> "그림 목록",
"imagelisttext"	=> "$2순으로 정리된 $1개의 그림입니다.",
"getimagelist"	=> "그림 목록 가져오기",
"ilshowmatch"	=> "이름이 맞는 그림 모두 보이기",
"ilsubmit"		=> "찾기",
"showlast"		=> "$2순으로 이전 $1개의 그림 보이기",
"all"			=> "모두",
"byname"		=> "이름",
"bydate"		=> "날짜",
"bysize"		=> "크기",
"imgdelete"		=> "지움",

"imgdesc"		=> "설명",
"imglegend"		=> "상세설명: (설명) = 그림 설명을 보입니다/고칩니다.",
"imghistory"	=> "그림역사",
"revertimg"		=> "돌림",
"deleteimg"		=> "지우기",
"imghistlegend" => "상세설명: (현재) = 현재의 그림입니다, (지움) = 옛 버젼을 지웁니다, (돌림) = 옛 버젼으로 되돌려 놓습니다.
<br><i>특정 날짜에 올라온 그림을 보려면, 날짜를 찍어 주세요</i>.",
"imagelinks"	=> "그림고리",
"linkstoimage"	=> "다음 문서들이 이 그림을 담고 있습니다:",
"nolinkstoimage" => "이 그림을 담고 있는 문서는 없습니다.",

# Statistics
#
"statistics"	=> "통계",
"sitestats"		=> "누리터 통계",
"userstats"		=> "사용자 통계",
"sitestatstext" => "이곳 정보창고(DB)에는 총 <b>$1</b>개의 문서가 있습니다.
이 숫자는 \"토론\" 문서, 위키백과 자체에 관한 문서, 자라기를 기다리는 \"씨앗\" 문서, 
넘겨주기 문서, 그리고 아직 사전항목으로 부족한 문서들을 모두 포함한 것입니다.
이들을 제외하면, <b>$2</b>개의 문서가 있습니다.<p>
또, 무른모 업그레이드가 있었던 2002년 7월 20일 이래, 여러분은 총 <b>$3</b>번 문서를 
읽었고, <b>$4</b>번 고쳤습니다. 
따라서, 평균적으로 문서 하나가 <b>$5</b>번 바뀌었고, 한번 바뀔 때마다 <b>$6</b>번 읽힌
셈이 됩니다.",
"userstatstext" => "<b>$1</b>명의 사용자가 등록되어 있습니다.
이 중 관리자는 <b>$2</b>명입니다.($3 참조)",

# Maintenance Page
# I leave it in english.

"maintenance"		=> "Maintenance page",
"maintnancepagetext"	=> "This page includes several handy tools for everyday maintenance. Some of these functions tend to stress the database, so please do not hit reload after every item you fixed ;-)",
"maintenancebacklink"	=> "Back to Maintenance Page",
"disambiguations"	=> "Disambiguation pages",
"disambiguationspage"	=> "위키백과:Links_to_disambiguating_pages",
"disambiguationstext"	=> "The following articles link to a <i>disambiguation page</i>. They should link to the appropriate topic instead.<br>A page is treated as dismbiguation if it is linked from $1.<br>Links from other namespaces are <i>not</i> listed here.",
"doubleredirects"	=> "Double Redirects",
"doubleredirectstext"	=> "<b>Attention:</b> This list may contain false positives. That usually means there is additional text with links below the first #REDIRECT.<br>\nEach row contains links to the first and second redirect, as well as the first line of the second redirect text, usually giving the \"real\" taget article, which the first redirect should point to.",
"selflinks"		=> "Pages with Self Links",
"selflinkstext"		=> "The following pages contain a link to themselves, which they should not.",
"missinglanguagelinks"  => "Missing Language Links",
"missinglanguagelinksbutton"    => "Find missing language links for",
"missinglanguagelinkstext"      => "These articles do <i>not</i> link to their counterpart in $1. Redirects and subpages are <i>not</i> shown.",


# Miscellaneous special pages
#
"orphans"		=> "외톨이 문서",
"lonelypages"	=> "외톨이 문서",
"unusedimages"	=> "안 쓰는 그림",
"popularpages"	=> "인기있는 문서",
"nviews"		=> "$1 번 읽음",
"wantedpages"	=> "필요한 문서",
"nlinks"		=> "$1개의 고리",
"allpages"		=> "모든 문서",
"randompage"	=> "아무거나",
"shortpages"	=> "짧은 문서",
"longpages"		=> "긴 문서",
"listusers"		=> "사용자들",
"specialpages"	=> "특수기능문서",
"spheading"		=> "특수기능문서",
"sysopspheading" => "Special pages for sysop use",
"developerspheading" => "Special pages for developer use",
"protectpage"	=> "보호된 문서",
"recentchangeslinked" => "여기서 가리키는 문서",
"rclsub"		=> "(\"$1\"의 고리들이 가리키는)",
"debug"			=> "Debug",
"newpages"		=> "새 문서",
"movethispage"	=> "문서 옮기기",
"unusedimagestext" => "<p>다음 그림중 어떤 것은, 다른 언어의 위키백과등 다른 
누리터에서 URL바로걸기로 사용하고 있을 지도 모릅니다.",
"booksources"	=> "외부 책방",
"booksourcetext" => "새책이나 헌책을 파는 몇몇 누리터입니다. 찾고 있는 책의
정보를 담고 있을 수 있습니다.
위키백과는 다음 중 어떤 기업과도 관련이 없으며,
아래 목록이 상업적 광고로 오해되지 않기를 바랍니다.",

# Email this user
#
"mailnologin"	=> "누리편지주소 없음",
"mailnologintext" => "위키백과에 <a href=\"" .
  wfLocalUrl( "특수기능:Userlogin" ) . "\">들어와</a> 있을 때, 또,
<a href=\"" .
  wfLocalUrl( "특수기능:Preferences" ) . "\">개인 맞춤</a>에 
자기의 누리편지주소를 기억시켰을 때에만,
다른 사용자에게 편지를 보낼 수 있습니다.",
"emailuser"		=> "사용자에게 편지쓰기",
"emailpage"		=> "누리편지 쓰기",
"emailpagetext"	=> "이 사용자가 개인맞춤에 옳바른 주소를 써 넣었다면,
아래 틀을 이용하여 편지를 보낼 수 있습니다.
이 사용자가 바로 답장할 수 있도록, 당신의 개인맞춤에 넣었던 주소가,
\"보낸이\" 주소에 들어갑니다.",
"noemailtitle"	=> "누리편지 없음",
"noemailtext"	=> "이 사용자는 누리편지를 받지않음에 맞추어 놓았거나,
옳바른 주소를 써 넣지 않았습니다.",
"emailfrom"		=> "보낸이",
"emailto"		=> "받는이",
"emailsubject"	=> "제목",
"emailmessage"	=> "편지내용",
"emailsend"		=> "보내기",
"emailsent"		=> "편지 보냄",
"emailsenttext" => "누리편지를 보냈습니다.",

# Watchlist
#
"watchlist"		=> "눈여겨보기 목록",
"watchlistsub"	=> "(\"$1\"의)",
"nowatchlist"	=> "눈여겨보는 문서가 아직 없습니다.",
"watchnologin"	=> "나와있습니다.",
"watchnologintext"	=> "<a href=\"" .
  wfLocalUrl( "특수기능:Userlogin" ) . "\">들어와</a>
있을 때에만 눈여겨보기 목록을 볼 수 있습니다.",
"addedwatch"	=> "눈여겨 봅니다.",
"addedwatchtext" => "앞으로 \"$1\"문서와 딸린 토론를
<a href=\"" .
  wfLocalUrl( "특수기능:Watchlist" ) . "\">눈여겨보기 목록</a>에서
관찰할 수 있으며,<a href=\"" .
  wfLocalUrl( "특수기능:Recentchanges" ) . "\">최근 바뀜</a>에는 금방 눈에 
띄도록 <b>두터운 글씨체</b>로 나타납니다.</p>

<p>더 이상 눈여겨 보지 않아도 될 때에는, 옆의 \"눈여겨 보지 않음\"을 누르면 됩니다.",
"removedwatch"	=> "눈여겨 보지 않음",
"removedwatchtext" => "\"$1\"를 더 이상 눈여겨 보지 않습니다.",
"watchthispage"	=> "눈여겨보기",
"unwatchthispage" => "눈여겨 보지 않음",
"notanarticle"	=> "문서가 아님",

# Delete/protect/revert
# I'll leave it in eng.
"deletepage"	=> "Delete page",
"confirm"		=> "Confirm",
"confirmdelete" => "Confirm delete",
"deletesub"		=> "(Deleting \"$1\")",
"confirmdeletetext" => "You are about to permanently delete a page
or image along with all of its history from the database.
Please confirm that you intend to do this, that you understand the
consequences, and that you are doing this in accordance with
[[위키백과:Policy]].",
"confirmcheck"	=> "Yes, I really want to delete this.",
"actioncomplete" => "Action complete",
"deletedtext"	=> "\"$1\" has been deleted.
See $2 for a record of recent deletions.",
"deletedarticle" => "deleted \"$1\"",
"dellogpage"	=> "Deletion_log",
"dellogpagetext" => "Below is a list of the most recent deletions.
All times shown are server time (UTC).
<ul>
</ul>
",
"deletionlog"	=> "deletion log",
"reverted"		=> "Reverted to earlier revision",
"deletecomment"	=> "Reason for deletion",
"imagereverted" => "Revert to earlier version was successful.",
"undelete" => "Restore deleted page",
"undeletepage" => "View and restore deleted pages",
"undeletepagetext" => "The following pages have been deleted but are still in the archive and
can be restored. The archive may be periodically cleaned out.",
"undeletearticle" => "Restore deleted article",
"undeleterevisions" => "$1 revisions archived",
"undeletehistory" => "If you restore the page, all revisions will be restored to the history.
If a new page with the same name has been created since the deletion, the restored
revisions will appear in the prior history, and the current revision of the live page
will not be automatically replaced.",
"undeleterevision" => "Deleted revision as of $1",
"undeletebtn" => "Restore!",
"undeletedarticle" => "restored \"$1\"",
"undeletedtext"   => "The article [[$1]] has been successfully restored.
See [[위키백과:Deletion_log]] for a record of recent deletions and restorations.",

# Contributions
#
"contributions"	=> "사용자 기여",
"contribsub"	=> "$1의",
"nocontribs"	=> "이 사용는 어디에도 기여하지 않았습니다.",
"ucnote"		=> "<b>$2</b>일 동안 이 사용자가 바꾼 <b>$1</b>개의 문서입니다.",
"uclinks"		=> "최근 $1개 보기; 최근 $2일 보기",

# What links here
#
"whatlinkshere"	=> "여길 가리키는 문서",
"notargettitle" => "문서 없음",
"notargettext"	=> "기능을 수행할 목표 문서나 목표 사용자를
지정하지 않았습니다.",
"linklistsub"	=> "(고리 목록)",
"linkshere"		=> "다음 문서들이 여기를 가리키고 있습니다.",
"nolinkshere"	=> "어떤 문서도 이곳을 가리키지 않습니다.",
"isredirect"	=> "넘겨주기 문서",

# Block/unblock IP
# leave it in eng
"blockip"		=> "Block IP address",
"blockiptext"	=> "Use the form below to block write access
from a specific IP address.
This should be done only only to prevent valndalism, and in
accordance with [[위키백과:Policy|Wikipedia policy]].
Fill in a specific reason below (for example, citing particular
pages that were vandalized).",
"ipaddress"		=> "IP Address",
"ipbreason"		=> "Reason",
"ipbsubmit"		=> "Block this address",
"badipaddress"	=> "The IP address is badly formed.",
"noblockreason" => "You must supply a reason for the block.",
"blockipsuccesssub" => "Block succeeded",
"blockipsuccesstext" => "The IP address \"$1\" has been blocked.
<br>See [[특수기능:Ipblocklist|IP block list]] to review blocks.",
"unblockip"		=> "Unblock IP address",
"unblockiptext"	=> "Use the form below to restore write access
to a previously blocked IP address.",
"ipusubmit"		=> "Unblock this address",
"ipusuccess"	=> "IP address \"$1\" unblocked",
"ipblocklist"	=> "List of blocked IP addresses",
"blocklistline"	=> "$1, $2 blocked $3",
"blocklink"		=> "block",
"unblocklink"	=> "unblock",
"contribslink"	=> "contribs",

# Developer tools
#
"lockdb"		=> "Lock database",
"unlockdb"		=> "Unlock database",
"lockdbtext"	=> "Locking the database will suspend the ability of all
users to edit pages, change their preferences, edit their watchlists, and
other things requiring changes in the database.
Please confirm that this is what you intend to do, and that you will
unlock the database when your maintenance is done.",
"unlockdbtext"	=> "Unlocking the database will restore the ability of all
users to edit pages, change their preferences, edit their watchlists, and
other things requiring changes in the database.
Please confirm that this is what you intend to do.",
"lockconfirm"	=> "Yes, I really want to lock the database.",
"unlockconfirm"	=> "Yes, I really want to unlock the database.",
"lockbtn"		=> "Lock database",
"unlockbtn"		=> "Unlock database",
"locknoconfirm" => "You did not check the confirmation box.",
"lockdbsuccesssub" => "Database lock succeeded",
"unlockdbsuccesssub" => "Database lock removed",
"lockdbsuccesstext" => "The Wikipedia database has been locked.
<br>Remember to remove the lock after your maintenance is complete.",
"unlockdbsuccesstext" => "The Wikipedia database has been unlocked.",

# SQL query
#
"asksql"		=> "SQL query",
"asksqltext"	=> "Use the form below to make a direct query of the
Wikipedia database.
Use single quotes ('like this') to delimit string literals.
This can often add considerable load to the server, so please use
this function sparingly.",
"sqlquery"		=> "Enter query",
"querybtn"		=> "Submit query",
"selectonly"	=> "Queries other than \"SELECT\" are restricted to
Wikipedia developers.",
"querysuccessful" => "Query successful",

# Move page
#
"movepage"		=> "문서 옮기기",
"movepagetext"	=> "아래 틀을 채워 문서이름을 바꾸세요. 
문서역사도 함께 새문서로 갑니다.
기존의 문서는 새이름의 문서로 넘겨주는 역할만 하는 넘겨주기 문서가 됩니다.
기존 문서로의 고리도 바뀌지 않습니다. 딸린토론이 있어도, 옮기지
않습니다.
<b>경고!</b>
인기있는 문서를 옮기면 예상치 못한 엄청난 결과를 가져올 수 있습니다.
옮기는 것이 옳다는 확신이 들 때에만 진행하세요.",
"movearticle"	=> "문서 옮기기",
"movenologin"	=> "나와 있습니다.",
"movenologintext" => "위키백과에 <a href=\"" .
  wfLocalUrl( "특수기능:Userlogin" ) . "\">들어와</a> 있을 때에만
문서를 옮길 수 있습니다.",
"newtitle"		=> "새 이름",
"movepagebtn"	=> "옮기기",
"pagemovedsub"	=> "문서 옮김",
"pagemovedtext" => "\"[[$1]]\"를 \"[[$2]]\"로 옮겼습니다.",
"articleexists" => "그 이름의 문서가 이미 존재하거나, 새 이름이 옳바르지
않습니다. 이름을 다시 지으세요.",
"movedto"		=> "새 이름",
"movetalk"		=> "딸린 \"토론\"도 함께 옮깁니다.",
"talkpagemoved" => "딸린토론도 옮겼습니다.",
"talkpagenotmoved" => "딸린토론은 옮기지 <strong>않았습니다</strong>.",

);

class LanguageKo extends LanguageUtf8 {

	function getDefaultUserOptions () {
		global $wgDefaultUserOptionsKo ;
		return $wgDefaultUserOptionsKo ;
		}

	function getBookstoreList () {
		global $wgBookstoreListKo ;
		return $wgBookstoreListKo ;
	}

	function getNamespaces() {
		global $wgNamespaceNamesKo;
		return $wgNamespaceNamesKo;
	}

	function getNsText( $index ) {
		global $wgNamespaceNamesKo;
		return $wgNamespaceNamesKo[$index];
	}

	function getNsIndex( $text ) {
		global $wgNamespaceNamesKo;

		foreach ( $wgNamespaceNamesKo as $i => $n ) {
			if ( 0 == strcasecmp( $n, $text ) ) { return $i; }
		}
		return false;
	}

	function getQuickbarSettings() {
		global $wgQuickbarSettingsKo;
		return $wgQuickbarSettingsKo;
	}

	function getSkinNames() {
		global $wgSkinNamesKo;
		return $wgSkinNamesKo;
	}

	function getUserToggles() {
		global $wgUserTogglesKo;
		return $wgUserTogglesKo;
	}

	function getLanguageNames() {
		global $wgLanguageNamesKo;
		return $wgLanguageNamesKo;
	}

	function getLanguageName( $code ) {
		global $wgLanguageNamesKo;
		if ( ! array_key_exists( $code, $wgLanguageNamesKo ) ) {
			return "";
		}
		return $wgLanguageNamesKo[$code];
	}

	function getMonthName( $key )
	{
		global $wgMonthNamesKo;
		return $wgMonthNamesKo[$key-1];
	}

	function getMonthAbbreviation( $key )
	{
		global $wgMonthAbbreviationsKo;
		return $wgMonthAbbreviationsKo[$key-1];
	}

	function getWeekdayName( $key )
	{
		global $wgWeekdayNamesKo;
		return $wgWeekdayNamesKo[$key-1];
	}

	# Inherit default userAdjust()
 
	function date( $ts, $adj = false )
	{
		global $wgWeekdayAbbreviationsKo;
		if ( $adj ) { $ts = $this->userAdjust( $ts ); }

        # This is horribly inefficient; I need to rework this
        $x = getdate(mktime(( (int)substr( $ts, 8, 2) ) + $diff,
		  (int)substr( $ts, 10, 2 ), (int)substr( $ts, 12, 2 ),
		  (int)substr( $ts, 4, 2 ), (int)substr( $ts, 6, 2 ),
          (int)substr( $ts, 0, 4 )));
        
        $d = substr( $ts, 0, 4 ) . "년 " .
		  $this->getMonthAbbreviation( substr( $ts, 4, 2 ) ) . "월 " .
		  (0 + substr( $ts, 6, 2 )) . "일 " .
		  "(" . $wgWeekdayAbbreviationsKo[$x["wday"]] . ")";
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
		return $this->date( $ts, $adj ) . " " . $this->time( $ts, $adj );
	}

	function rfc1123( $ts )
	{
		return date( "D, d M Y H:i:s T", $ts );
	}

	function getValidSpecialPages()
	{
		global $wgValidSpecialPagesKo;
		return $wgValidSpecialPagesKo;
	}

	function getSysopSpecialPages()
	{
		global $wgSysopSpecialPagesKo;
		return $wgSysopSpecialPagesKo;
	}

	function getDeveloperSpecialPages()
	{
		global $wgDeveloperSpecialPagesKo;
		return $wgDeveloperSpecialPagesKo;
	}

	function getMessage( $key )
	{
		global $wgAllMessagesKo, $wgAllMessagesEn;
		$m = $wgAllMessagesKo[$key];

		if ( "" == $m ) { return $wgAllMessagesEn[$key]; }
		else return $m;
	}
	
	# Inherit default iconv()
	
	# Inherit ucfirst() and stripForSearch() from LanguageUtf8
	
	# Inherit default checkTitleEncoding()

}

?>