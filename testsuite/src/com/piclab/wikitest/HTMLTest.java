
/*
 * View pages with various skins and make sure they're basically
 * valid HTML structured the way we expect.  For now we're just
 * using regexes, which should be fine for the sample pages.  They
 * would probably fail on pages about HTML markup and such, though.
 * Eventualy, we should be scanning the DOM for these tests.
 */

package com.piclab.wikitest;

import com.meterware.httpunit.*;
import java.util.regex.*;
import org.w3c.dom.*;

public class HTMLTest extends WikiTest {

private String[] m_goodpats = {
	"\\A\\s*<!doctype html", "<meta\\s+[^>]*name\\s*=\\s*.robots",
	"<link\\s+[^>]*rel\\s*=\\s*.stylesheet", "<h1\\s+[^>]*class\\s*=.pagetitle",
	"<form\\s+[^>]*name\\s*=\\s*.search", 
	"<div\\s+[^>]*id\\s*=.content.*<div\\s+[^>]*id\\s*=.article",
};
private Pattern[] m_cgoodpats;

private String[] m_badpats = {
	"<[^>]*onclick\\s*=",
};
private Pattern[] m_cbadpats;

public HTMLTest( WikiSuite ws ) { super(ws); }

public String testName() { return "HTML"; }

protected boolean runTest() throws Exception {
	m_suite.clearCookies();

	/*
	 * Pre-compile the regexes.
	 */
	m_cgoodpats = new Pattern[m_goodpats.length];
	for (int i = 0; i < m_goodpats.length; ++i) {
		m_cgoodpats[i] = Pattern.compile( m_goodpats[i],
		  Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
	}
	m_cbadpats = new Pattern[m_badpats.length];
	for (int i = 0; i < m_badpats.length; ++i) {
		m_cbadpats[i] = Pattern.compile( m_badpats[i],
		  Pattern.CASE_INSENSITIVE | Pattern.DOTALL );
	}
	/*
	 * Then run the tests.
	 */
	/* java.util.logging.Level l = WikiSuite.setLoggingLevel(
	  java.util.logging.Level.ALL ); */

	if ( ! part1() ) { throw new WikiSuiteFailureException( "Part 1" ); }
	if ( ! part2() ) { throw new WikiSuiteFailureException( "Part 2" ); }

	/* WikiSuite.setLoggingLevel( l ); */
	return true;
}


private boolean part1() throws Exception {
	boolean result = true;

	WebResponse wr = m_suite.viewPage( "" );
	/*
	 * Will throw exception if not parseable:
	 */
	Document doc = wr.getDOM();
	result = matchesAll( wr.getText() );

	wr = m_suite.viewPage( "Opera" );
	doc = wr.getDOM();
	result = matchesAll( wr.getText() );

	wr = m_suite.viewPage( "User:Fred" );
	doc = wr.getDOM();
	result = matchesAll( wr.getText() );

	wr = m_suite.viewPage( "Special:Recentchanges" );
	doc = wr.getDOM();
	result = matchesAll( wr.getText() );

	wr = m_suite.viewPage( "Talk:Poker" );
	doc = wr.getDOM();
	result = matchesAll( wr.getText() );

	wr = m_suite.viewPage( "Wikipedia:Upload_log" );
	doc = wr.getDOM();
	result = matchesAll( wr.getText() );

	return result;
}

private boolean part2() throws Exception {
	boolean result = true;

	WebResponse wr = m_suite.loginAs( "Barney", "Barney" );
	Document doc = wr.getDOM();
	result = matchesAll( wr.getText() );

	for (int q = 0; q < 4; ++q) {
		wr = setPref( "wpQuickbar", String.valueOf( q ) );
		doc = wr.getDOM();
		result = matchesAll( wr.getText() );
		WikiSuite.fine( "Set quickbar to " + q );

		for (int s = 0; s < 3; ++s) {
			wr = setPref( "wpSkin", String.valueOf( s ) );
			doc = wr.getDOM();
			result = matchesAll( wr.getText() );
			WikiSuite.fine( "Set skin to " + s );

			double r = Math.random();
			if ( r < .5 ) {
				wr = m_suite.viewPage( WikiSuite.preloadedPages[
				  (int)(r * 100.0)] );
			} else if ( r < .6 ) {
				wr = m_suite.viewPage( "User:Fred" );
			} else if ( r < .7 ) {
				wr = m_suite.viewPage( "Special:Recentchanges" );
			} else if ( r < .8 ) {
				wr = m_suite.editPage( "Talk:Sport" );
			} else if ( r < .9 ) {
				wr = m_suite.editPage( "Wikipedia:Upload_log" );
			} else {
				wr = m_suite.viewPage( "" );
			}
			doc = wr.getDOM();
			result = matchesAll( wr.getText() );
		}
	}
	return result;
}

private boolean matchesAll( String text ) {
	if ( m_cgoodpats[0] == null ) {
		WikiSuite.error( "Patterns not compiled." );
		return false;
	}
	for (int i = 0; i < m_goodpats.length; ++i) {
		Matcher m = m_cgoodpats[i].matcher( text );
		if ( ! m.find() ) {
			WikiSuite.error( "Failed to match pattern \"" + m_goodpats[i] + "\"" );
			return false;
		}
	}
	for (int i = 0; i < m_badpats.length; ++i) {
		Matcher m = m_cbadpats[i].matcher( text );
		if ( m.find() ) {
			WikiSuite.error( "Matched pattern \"" + m_badpats[i] + "\"" );
			return false;
		}
	}
	return true;
}

private WebResponse setPref( String name, String value )
throws Exception {
	WebResponse wr = m_suite.viewPage( "Special:Preferences" );
    WebForm pform = WikiSuite.getFormByName( wr, "preferences" );
	WebRequest req = pform.getRequest( "wpSaveprefs" );

	req.setParameter( name, value );
	return m_suite.getResponse( req );
}

public static void main( String[] params ) {
	WikiSuite ws = new WikiSuite();
	HTMLTest wt = new HTMLTest( ws );
	wt.run();
}

}