<?
# DO NOT EDIT THIS FILE!
# To customize your installation, edit "LocalSettings.php".

$wgServer           = "http://" . getenv( "SERVER_NAME" );
$wgScriptPath	    = "/wiki";
$wgScript           = "{$wgScriptPath}/wiki.phtml";
$wgStyleSheetPath   = "{$wgServer}/style";
$wgArticlePath      = "{$wgServer}{$wgScript}?title=$1";
$wgUploadPath       = "{$wgServer}/upload";
$wgMathPath         = "{$wgServer}/math";
$wgLogo				= "{$wgUploadPath}/wiki.png";
$wgUploadDirectory	= "/usr/local/apache/htdocs/upload";
$wgMathDirectory    = "/usr/local/apache/htdocs/math";
$wgTmpDirectory     = "/usr/local/apache/htdocs/tmp";

# which namespaces should support subpages? See Language.php
# for a list of namespaces
# default: only discussion ("talk") namespaces and user pages
# allow subpages
# 0=no subpages, 1=subpages
$wgNamespacesWithSubpages = array(
	-1	=> 0,
	0	=> 0,
	1	=> 1,
	2	=> 1,
	3	=> 1,
	4	=> 0,
	5	=> 1,
	6	=> 0,
	7	=> 1
);

# MySQL settings
#
$wgDBserver         = "127.0.0.1";
$wgDBname           = "wikidb";
$wgDBuser           = "wikiuser";
$wgDBpassword       = "userpwd";
$wgDBconnection     = "";
$wgDBsqluser		= "wikisql";
$wgDBsqlpassword	= "sqlpass";
$wgDBtransactions	= false; # Set to true if using InnoDB tables

$wgReadOnlyFile		= "/usr/local/apache/htdocs/upload/dblockflag838942";
$wgDebugComments	= false;
$wgCachePages		= false;

$wgLanguageCode     = "en";
$wgInterwikiMagic	= true; # Treat language links as magic connectors, not inline links
$wgInputEncoding	= "ISO-8859-1";
$wgOutputEncoding	= "ISO-8859-1";
$wgEditEncoding		= "";

$wgDocType          = "-//W3C//DTD HTML 4.01 Transitional//EN";
$wgCookieExpiration = 2592000;

$wgAllowExternalImages = true;
$wgMiserMode = false; # Disable database-intensive features
$wgUseTeX = true;
$wgProfiling = false; # Enable for more detailed by-function times in debug log

?>