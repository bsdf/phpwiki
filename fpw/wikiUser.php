<?
# The wikiUser class handles all user information

class WikiUser {
    var $id , $name , $password , $retypePassword ;
    var $options , $email ;
    var $rights ;
    var $isLoggedIn ; # Is this user currently logged in?

#### Management functions

    # This checks the cookies for prior log-ins
    function scanCookies () {
        global $WikiUserID , $WikiUserPassword , $WikiLoggedIn ;
        $this->id = 0 ;
        $this->name = "" ;
        $this->isLoggedIn = false ;
	$sqldata = "empty" ;
        if ( $WikiUserID > 0 and $WikiLoggedIn == "yes" ) {
            $connection = getDBconnection () ;
            $sql = "SELECT * FROM user WHERE user_id=$WikiUserID" ;
            $result = mysql_query ( $sql , $connection ) ;
            if ( $result ) {
                $s = mysql_fetch_object ( $result ) ;
                $this->name = $s->user_name ;
                if ( $WikiUserPassword == $s->user_password ) {
                    $this->password = $s->user_password ;
                    $this->id = $s->user_id ;
                    $this->isLoggedIn = true ;
		    $sqldata = $s ;
                    }
                mysql_free_result ( $result ) ;
             }
            }
        $this->loadSettings ( $sqldata ) ;
        $this->ensureDefaultOptions () ;
        }

    # This sets the default options for new and no-log-in users
    function ensureDefaultOptions () {
        if ( $this->options["quickBar"] == "" ) $this->options["quickBar"] = "right" ; # For demonstration
        if ( $this->options["markupNewTopics"] == "" ) $this->options["markupNewTopics"] = "normal" ;
        if ( $this->options["underlineLinks"] == "" ) $this->options["underlineLinks"] = "yes" ;
        if ( $this->options["showHover"] == "" ) $this->options["showHover"] = "yes" ;
        if ( $this->options["cols"] == "" ) $this->options["cols"] = "60" ;
        if ( $this->options["rows"] == "" ) $this->options["rows"] = "20" ;
        if ( $this->options["changesLayout"] == "" ) $this->options["changesLayout"] = "classic" ;
        if ( $this->options["hideMinor"] == "" ) $this->options["hideMinor"] = "no" ;
        if ( $this->options["justify"] == "" ) $this->options["justify"] = "no" ;
        if ( $this->options["resultsPerPage"] == "" ) $this->options["resultsPerPage"] = "20" ;
        if ( $this->options["skin"] == "" ) $this->options["skin"] = "None" ;
        if ( $this->options["hourDiff"] == "" ) $this->options["hourDiff"] = "0" ;
        if ( $this->options["encoding"] == "") {
		# ***FIXME*** this is hacky, brutish, and short
		# Use secondary encoding by default for browsers & search engine bots that don't report UTF-8 capability
		global $wikiCharset , $wikiEncodingCharsets , $HTTP_SERVER_VARS ;
		if ( ( count ( $wikiEncodingCharsets ) >= 2 ) and ( $wikiEncodingCharsets[0] == "utf-8" )
		and ( !stristr ( $HTTP_SERVER_VARS[HTTP_ACCEPT_CHARSET] , "utf-8" ) ) )
			$this->options["encoding"] = 1 ;
		else
			$this->options["encoding"] = 0 ;
		}
        if ( $this->options["numberHeadings"] == "" ) $this->options["numberHeadings"] = "no" ;
        if ( $this->options["viewFrames"] == "" ) $this->options["viewFrames"] = "no" ;
        if ( $this->options["viewRecentChanges"] == "" ) $this->options["viewRecentChanges"] = "50" ;
#       if ( $this->options["showStructure"] == "" ) # NO SUBPAGES ANYMORE
        $this->options["showStructure"] = "no" ;
        }

    # Loads the user settings from the database
    function loadSettings ( $sqldata = "empty" ) {
        $this->rights = array () ;
        
        # if the user is not logged in, there are no settings        
        if ( !$this->isLoggedIn ) return ;

	if ( $sqldata != "empty" ) $t = $sqldata ;
	else { # get the settings from the database
	        $connection = getDBconnection() ;
        	$sql = "SELECT user_options, user_rights, user_password, user_email
	                FROM user
        	        WHERE user_id = $this->id" ;
	        $result = mysql_query ( $sql , $connection ) ;
        	$t = mysql_fetch_object ( $result ) ;
	        mysql_free_result ( $result ) ;
		}
        
        # filling the settings variables
        $this->options = array () ;        
        $a = explode ( "\n" , urldecode ( $t->user_options ) ) ;
        foreach ( $a as $x ) {
            $b = explode ( "=" , $x ) ;
            $this->options[$b[0]] = $b[1] ;
        }
        $this->rights = explode ( "," , strtolower ( $t->user_rights ) ) ;
        $this->password = $t->user_password ; 
        $this->email = $t->user_email ;
    }

    # Saves/updates the user settings in the database
    function saveSettings () {
        global $expiration ;
        if ( !$this->isLoggedIn ) return ;
        $t = "" ;
        $a = array_keys ( $this->options ) ;
        foreach ( $a as $x ) {
            if ( $x != "" ) {
                if ( $t != "" ) $t .= "\n" ;
                $t .= $x."=".$this->options[$x] ;
                }
            }
        setMySQL ( "user" , "user_options" , nurlencode ( $t ) , "user_id=".$this->id ) ;
        setMySQL ( "user" , "user_password" , $this->password , "user_id=".$this->id ) ;
        setMySQL ( "user" , "user_email" , $this->email , "user_id=".$this->id ) ;
        if ( $this->options["rememberPassword"] == "on" ) setcookie ( "WikiUserPassword" , $this->password , $expiration ) ;
        }

    # Creates a link to the user home page, or returns the IP
    function getLink () {
        global $wikiUser ;
        if ( $this->isLoggedIn ) {
            $s = new WikiPage ;
            $s = $s->parseContents ( "[[$wikiUser:$this->name|$this->name]]" ) ;
            $s = substr ( strstr ( $s , ">" ) , 1 ) ;
            $s = str_replace ( "</p>" , "" , $s ) ;
            return $s ;
            }

        # These headers can be exploited to falsify an IP. Probably not worth bothering with them,
        # let proxies be proxies.
        #if ( getenv ( HTTP_X_FORWARDED_FOR ) ) $s = getenv ( HTTP_X_FORWARDED_FOR ) ;
        #elseif ( getenv ( HTTP_CLIENT_IP ) ) $s = getenv ( HTTP_CLIENT_IP ) ;
        #else $s = getenv ( REMOTE_ADDR ) ;
        $s = getenv ( 'REMOTE_ADDR' ) ;


#       THIS USED TO CHANGE THE URL OF NON LOGGED-IN USERS TO ".xxx" ;
#       $s = explode ( "." , $s ) ;
#       $s = $s[0].".".$s[1].".".$s[2].".xxx" ;
        return $s ;
        }

    # Checks if a user with that name exists
    function doesUserExist () {
        $s = trim ( $this->name ) ;
        if ( $s == "" ) return false ;
        if ( getMySQL ( "user" , "user_id" , "user_name=\"$s\"" ) == "" ) return false ;
        return true ;
        }

    # Adds a new user to the database
    function addToDatabase () {
        $connection = getDBconnection () ;
        $sql = "INSERT INTO user (user_name,user_password) VALUES (\"$this->name\",\"$this->password\")" ;
        $result = mysql_query ( $sql , $connection ) ;
        }

    # Checks the login
    function verify () {
        global $wikiNoSuchUser , $wikiWrongPassword , $wikiYouAreLoggedIn , $wikiUserError ;
        $this->isLoggedIn = false ;
        if ( !$this->doesUserExist() ) return str_replace ( "$1" , $this->name , $wikiNoSuchUser ) ;
        $connection = getDBconnection () ;
        $sql = "SELECT * FROM user WHERE user_name=\"$this->name\"" ;
        $result = mysql_query ( $sql , $connection ) ;
        if ( $result == "" ) return str_replace ( "$1" , $this->name , $wikiNoSuchUser ) ;
        if ( $s = mysql_fetch_object ( $result ) ) {
            mysql_free_result ( $result ) ;
            if ( $s->user_password == $this->password ) {
                $ret = str_replace ( "$1" , $this->name , $wikiYouAreLoggedIn ) ;
                $this->id = $s->user_id ;
                $this->isLoggedIn = true ;
                $this->loadSettings ( $s ) ;
            } else {
                $ret = str_replace ( "$1" , $this->name , $wikiWrongPassword ) ;
                }
            }
        else {
            mysql_free_result ( $result ) ;
            $this->contents = str_replace ( "$1" , $this->name , $wikiUserError ) ;
            }
        
        return $ret ;
        }

    # Toggles the watch on an article for this user
    function doWatch ( $t ) {
        $a = getMySQL ( "user" , "user_watch" , "user_id=$this->id" ) ;
        $b = explode ( "\n" , $a ) ;
        return in_array ( $t , $b ) ;
        }
    }
?>
