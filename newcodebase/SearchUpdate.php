<?
# See deferred.doc

class SearchUpdate {

	/* private */ var $mId, $mNamespace, $mTitle, $mText;
	/* private */ var $mTitleWords;

	function SearchUpdate( $id, $title, $text = false )
	{
		$this->mId = $id;
		$this->mText = $text;

		$nt = Title::newFromText( $title );
		$this->mNamespace = $nt->getNamespace();
		$this->mTitle = $nt->getText(); # Discard namespace

		$this->mTitleWords = $this->mTextWords = array();
	}

	function doUpdate()
	{
		global $wgDBminWordLen, $wgLang;
		$lc = SearchEngine::legalSearchChars() . "&#;";
		
		if( $this->mText == false ) {
			# Just update the title
			$sql = "UPDATE LOW_PRIORITY searchindex SET si_title='" .
			  wfStrencode( Title::indexTitle( $this->mNamespace, $this->mTitle ) ) .
			  "' WHERE si_page={$this->mId}";
			wfQuery( $sql, "SearchUpdate::doUpdate" );
			return;
		}
		
		# Language-specific strip/conversion
		$text = $wgLang->stripForSearch( $this->mText );

		$text = preg_replace( "/<\\/?\\s*[A-Za-z][A-Za-z0-9]*\\s*([^>]*?)>/",
		  " ", strtolower( " " . $text /*$this->mText*/ . " " ) ); # Strip HTML markup
		$text = preg_replace( "/(^|\\n)\\s*==\\s+([^\\n]+)\\s+==\\s/sD",
		  "\\2 \\2 \\2 ", $text ); # Emphasize headings

		# Strip external URLs
		$uc = "A-Za-z0-9_\\/:.,~%\\-+&;#?!=()@\\xA0-\\xFF";
		$protos = "http|https|ftp|mailto|news|gopher";
		$pat = "/(^|[^\\[])({$protos}):[{$uc}]+([^{$uc}]|$)/";
		$text = preg_replace( $pat, "\\1 \\3", $text );

		$p1 = "/([^\\[])\\[({$protos}):[{$uc}]+]/";
		$p2 = "/([^\\[])\\[({$protos}):[{$uc}]+\\s+([^\\]]+)]/";
		$text = preg_replace( $p1, "\\1 ", $text );
		$text = preg_replace( $p2, "\\1 \\3 ", $text );

		# Internal image links
		$pat2 = "/\\[\\[image:([{$uc}]+)\\.(gif|png|jpg|jpeg)([^{$uc}])/i";
		$text = preg_replace( $pat2, " \\1 \\3", $text );

		$text = preg_replace( "/([^{$lc}])([{$lc}]+)]]([a-z]+)/",
		  "\\1\\2 \\2\\3", $text ); # Handle [[game]]s

		# Strip all remaining non-search characters
		$text = preg_replace( "/[^{$lc}]+/", " ", $text );

		# Handle 's, s'
		$text = preg_replace( "/([{$lc}]+)'s /", "\\1 \\1's ", $text );
		$text = preg_replace( "/([{$lc}]+)s' /", "\\1s ", $text );

		# Strip wiki '' and '''
		$text = preg_replace( "/''[']*/", " ", $text );

		$sql = "REPLACE DELAYED INTO searchindex (si_page,si_title,si_text) VALUES ({$this->mId},'" .
		  wfStrencode( Title::indexTitle( $this->mNamespace, $this->mTitle ) ) . "','" .
		  wfStrencode( $text ) . "')";
		wfQuery( $sql, "SearchUpdate::doUpdate" );
	}
}

?>
