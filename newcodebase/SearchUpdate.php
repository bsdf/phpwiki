<?
# See deferred.doc

class SearchUpdate {

	/* private */ var $mId, $mTitle, $mText;
	/* private */ var $mTitleWords;

	function SearchUpdate( $id, $title, $text )
	{
		$this->mId = $id;
		$this->mText = $text;

		$nt = Title::newFromText( $title );
		$this->mTitle = $nt->getText(); # Discard namespace

		$this->mTitleWords = $this->mTextWords = array();
	}

	function doUpdate()
	{
		$lc = SearchEngine::legalSearchChars() . "&#;";
		$t = preg_replace( "/[^{$lc}]+/", " ", $this->mTitle );
		$t = preg_replace( "/\\b[{$lc}][{$lc}]\\b/", " ", $t );
		$t = preg_replace( "/\\b[{$lc}]\\b/", " ", $t );
		$t = preg_replace( "/\\s+/", " ", $t );

		$words = explode( " ", strtolower( trim( $t ) ) );
		foreach ( $words as $w ) { $this->mTitleWords[$w] = 1; }

		$text = preg_replace( "/<\\/?\\s*[A-Za-z][A-Za-z0-9]*\\s*([^>]*?)>/",
		  " ", strtolower( $this->mText ) ); # Strip HTML markup
		$text = preg_replace( "/(^|\\n)\\s*==\\s+([^\\n]+)\\s+==\\s/sD",
		  "\\2 \\2 \\2 ", $text ); # Emphasize headings

		# Strip external URLs
		$uc = "A-Za-z0-9_\\/:.,~%\\-+&;#?!=()@\\xA0-\\xFF";
		$protos = "http|https|ftp|mailto|news|gopher";
		$pat = "/(^|[^\\[])({$protos}):[{$uc}]+([^{$uc}]|$)/";
		$text = preg_replace( $pat, "\\1 \\3", $text );

		$p1 = "/(^|[^\\[])\\[({$protos}):[{$uc}]+]/";
		$p2 = "/(^|[^\\[])\\[({$protos}):[{$uc}]+\\s+([^\\]]+)]/";
		$text = preg_replace( $p1, "\\1 ", $text );
		$text = preg_replace( $p2, "\\1 \\3 ", $text );

		# Internal image links
		$pat2 = "/\\[\\[image:([{$uc}]+)\\.(png|jpg|jpeg)([^{$uc}])/i";
		$text = preg_replace( $pat2, " \\1 \\3", $text );

		$text = preg_replace( "/([^{$lc}])([{$lc}]+)]]([a-z]+)/",
		  "\\1\\2 \\2\\3", $text ); # Handle [[game]]s

		# Strip all remaining non-search characters
		$text = preg_replace( "/[^{$lc}]+/", " ", $text );

		# Handle 's, s'
		$text = preg_replace( "/([{$lc}]+)'s /", "\\1 \\1's ", $text );
		$text = preg_replace( "/([{$lc}]+)s' /", "\\1s ", $text );

		# Strip 1- and 2-letter words
		$text = preg_replace( "/(^|[^{$lc}])[{$lc}][{$lc}]([^{$lc}]|$)/",
		  "\\1 \\2", $text );
		$text = preg_replace( "/(^|[^{$lc}])[{$lc}]([^{$lc}]|$)/",
		  "\\1 \\2", $text );

		# Strip wiki '' and '''
		$text = preg_replace( "/''[']*/", " ", $text );

		# Remove title words: those have already been found
		foreach ( $this->mTitleWords as $w => $val ) {
			$text = str_replace( $w, " ", $text );
		}
		$text = preg_replace( "/\\s+/", " ", $text );

		$sql = "UPDATE cur SET cur_timestamp=cur_timestamp,cur_ind_text='" .
		  wfStrencode( $text ) . "' WHERE cur_id={$this->mId}";
		wfQuery( $sql, "SearchUpdate::doUpdate" );
	}
}

?>