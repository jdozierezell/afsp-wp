<?php
/**
 * General utilities
 *
 * Functions include chapter functions, escape functions, etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afsp
 */

/**
 * Output postal abbreivation
 *
 * @param string $longform The longform name of a state.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return string $abbr
 */
function postal_abbreviation( $longform ) {
	switch ( $longform ) {
		case 'Alabama':
			$abbr = 'AL';
			break;
		case 'Alaska':
			$abbr = 'AK';
			break;
		case 'Arizona':
			$abbr = 'AZ';
			break;
		case 'Arkansas':
			$abbr = 'AR';
			break;
		case 'California':
			$abbr = 'CA';
			break;
		case 'Colorado':
			$abbr = 'CO';
			break;
		case 'Connecticut':
			$abbr = 'CT';
			break;
		case 'Delaware':
			$abbr = 'DE';
			break;
		case 'District of Columbia':
			$abbr = 'DC';
			break;
		case 'Florida':
			$abbr = 'FL';
			break;
		case 'Georgia':
			$abbr = 'GA';
			break;
		case 'Hawaii':
			$abbr = 'HI';
			break;
		case 'Idaho':
			$abbr = 'ID';
			break;
		case 'Illinois':
			$abbr = 'IL';
			break;
		case 'Indiana':
			$abbr = 'IN';
			break;
		case 'Iowa':
			$abbr = 'IA';
			break;
		case 'Kansas':
			$abbr = 'KS';
			break;
		case 'Kentucky':
			$abbr = 'KY';
			break;
		case 'Louisiana':
			$abbr = 'LA';
			break;
		case 'Maine':
			$abbr = 'ME';
			break;
		case 'Maryland':
			$abbr = 'MD';
			break;
		case 'Massachusetts':
			$abbr = 'MA';
			break;
		case 'Michigan':
			$abbr = 'MI';
			break;
		case 'Minnesota':
			$abbr = 'MN';
			break;
		case 'Mississippi':
			$abbr = 'MS';
			break;
		case 'Missouri':
			$abbr = 'MO';
			break;
		case 'Montana':
			$abbr = 'MT';
			break;
		case 'Nebraska':
			$abbr = 'NE';
			break;
		case 'Nevada':
			$abbr = 'NV';
			break;
		case 'New Hampshire':
			$abbr = 'NH';
			break;
		case 'New Jersey':
			$abbr = 'NJ';
			break;
		case 'New Mexico':
			$abbr = 'NM';
			break;
		case 'New York':
			$abbr = 'NY';
			break;
		case 'North Carolina':
			$abbr = 'NC';
			break;
		case 'North Dakota':
			$abbr = 'ND';
			break;
		case 'Ohio':
			$abbr = 'OH';
			break;
		case 'Oklahoma':
			$abbr = 'OK';
			break;
		case 'Oregon':
			$abbr = 'OR';
			break;
		case 'Pennsylvania':
			$abbr = 'PA';
			break;
		case 'Rhode Island':
			$abbr = 'RI';
			break;
		case 'South Carolina':
			$abbr = 'SC';
			break;
		case 'South Dakota':
			$abbr = 'SD';
			break;
		case 'Tennessee':
			$abbr = 'TN';
			break;
		case 'Texas':
			$abbr = 'TX';
			break;
		case 'Utah':
			$abbr = 'UT';
			break;
		case 'Vermont':
			$abbr = 'VT';
			break;
		case 'Virginia':
			$abbr = 'VA';
			break;
		case 'Washington':
			$abbr = 'WA';
			break;
		case 'West Virginia':
			$abbr = 'WV';
			break;
		case 'Wisconsin':
			$abbr = 'WI';
			break;
		case 'Wyoming':
			$abbr = 'WY';
			break;
		case 'Alberta':
			$abbr = 'AB';
			break;
		case 'British Columbia':
			$abbr = 'BC';
			break;
		case 'Labrador':
			$abbr = 'NL';
			break;
		case 'Manitoba':
			$abbr = 'MB';
			break;
		case 'New Brunswick':
			$abbr = 'NB';
			break;
		case 'Newfoundland':
			$abbr = 'NL';
			break;
		case 'Nova Scotia':
			$abbr = 'NS';
			break;
		case 'Nunavut':
			$abbr = 'NU';
			break;
		case 'North West Territory':
			$abbr = 'NT';
			break;
		case 'Ontario':
			$abbr = 'ON';
			break;
		case 'Prince Edward Island':
			$abbr = 'PE';
			break;
		case 'Quebec':
			$abbr = 'QC';
			break;
		case 'Saskatchewan':
			$abbr = 'SK';
			break;
		case 'Yukon':
			$abbr = 'YT';
			break;
	}
	return $abbr;
}
/**
 * Output postal abbreivation
 *
 * @param string $chapters The name of the AFSP chapter.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return string $chapter_url_base Output for url
 */
function chapter_to_base_url( $chapters ) {
	$chapter_url_base = '';
	$chapters         = 'AFSP ' . $chapters;
	switch ( $chapters ) {
		case 'AFSP Alabama':
			$chapter_url_base = 'alabama';
			break;
		case 'AFSP Alaska':
			$chapter_url_base = 'alaska';
			break;
		case 'AFSP Arizona':
			$chapter_url_base = 'arizona';
			break;
		case 'AFSP Arkansas':
			$chapter_url_base = 'arkansas';
			break;
		case 'AFSP Capital Region New York':
			$chapter_url_base = 'capital-region-new-york';
			break;
		case 'AFSP Central Florida':
			$chapter_url_base = 'central-florida';
			break;
		case 'AFSP Central New York':
			$chapter_url_base = 'central-new-york';
			break;
		case 'AFSP Central Texas':
			$chapter_url_base = 'central-texas';
			break;
		case 'AFSP Central Valley California':
			$chapter_url_base = 'central-valley-california';
			break;
		case 'AFSP Colorado':
			$chapter_url_base = 'colorado';
			break;
		case 'AFSP Connecticut':
			$chapter_url_base = 'connecticut';
			break;
		case 'AFSP Delaware':
			$chapter_url_base = 'delaware';
			break;
		case 'AFSP Eastern Missouri':
			$chapter_url_base = 'eastern-missouri';
			break; 
    case 'AFSP Eastern Pennsylvania':
      $chapter_url_base = 'eastern-pennsylvania';
      break;
		case 'AFSP Florida Panhandle':
			$chapter_url_base = 'florida-panhandle';
			break;
		case 'AFSP Georgia':
			$chapter_url_base = 'georgia';
			break;
		case 'AFSP Greater Boston':
			$chapter_url_base = 'greater-boston';
			break;
		case 'AFSP Greater Kansas':
			$chapter_url_base = 'greater-kansas';
			break;
		case 'AFSP Greater Los Angeles':
			$chapter_url_base = 'greater-los-angeles';
			break;
		case 'AFSP Greater Mid-Missouri':
			$chapter_url_base = 'greater-mid-missouri';
			break;
		case 'AFSP Greater Minnesota':
			$chapter_url_base = 'greater-minnesota';
			break;
		case 'AFSP Greater Philadelphia':
			$chapter_url_base = 'greater-philadelphia';
			break;
		case 'AFSP Greater Sacramento':
			$chapter_url_base = 'greater-sacramento';
			break;
		case 'AFSP Greater San Francisco':
			$chapter_url_base = 'greater-san-francisco';
			break;
		case 'AFSP Hawaii':
			$chapter_url_base = 'hawaii';
			break;
		case 'AFSP Hudson Valley/Westchester':
			$chapter_url_base = 'hudson-valley-westchester';
			break;
		case 'AFSP Idaho':
			$chapter_url_base = 'idaho';
			break;
		case 'AFSP Illinois':
			$chapter_url_base = 'illinois';
			break;
		case 'AFSP Indiana':
			$chapter_url_base = 'indiana';
			break;
		case 'AFSP Inland Empire and Desert Cities':
			$chapter_url_base = 'inland-empire-and-desert-cities';
			break;
		case 'AFSP Iowa':
			$chapter_url_base = 'iowa';
			break;
		case 'AFSP Kentucky':
			$chapter_url_base = 'kentucky';
			break;
		case 'AFSP Louisiana':
			$chapter_url_base = 'louisiana';
			break;
		case 'AFSP Maine':
			$chapter_url_base = 'maine';
			break;
		case 'AFSP Maryland':
			$chapter_url_base = 'maryland';
			break;
		case 'AFSP Michigan':
			$chapter_url_base = 'michigan';
			break;
		case 'AFSP Mississippi':
			$chapter_url_base = 'mississippi';
			break;
		case 'AFSP Montana':
			$chapter_url_base = 'montana';
			break;
		case 'AFSP National Capital Area':
			$chapter_url_base = 'national-capital-area';
			break;
		case 'AFSP Nebraska':
			$chapter_url_base = 'nebraska';
			break;
		case 'AFSP Nevada':
			$chapter_url_base = 'nevada';
			break;
		case 'AFSP New Hampshire':
			$chapter_url_base = 'new-hampshire';
			break;
		case 'AFSP New Jersey':
			$chapter_url_base = 'new-jersey';
			break;
		case 'AFSP New Mexico':
			$chapter_url_base = 'new-mexico';
			break;
		case 'AFSP New York City':
			$chapter_url_base = 'new-york-city';
			break;
		case 'AFSP New York Long Island':
			$chapter_url_base = 'new-york-long-island';
			break;
		case 'AFSP North Carolina':
			$chapter_url_base = 'north-carolina';
			break;
		case 'AFSP North Dakota':
			$chapter_url_base = 'north-dakota';
			break;
		case 'AFSP North Florida':
			$chapter_url_base = 'north-florida';
			break;
		case 'AFSP North Texas':
			$chapter_url_base = 'north-texas';
			break;
		case 'AFSP Ohio':
			$chapter_url_base = 'ohio';
			break;
		case 'AFSP Oklahoma':
			$chapter_url_base = 'oklahoma';
			break;
		case 'AFSP Orange County':
			$chapter_url_base = 'orange-county';
			break;
		case 'AFSP Oregon':
			$chapter_url_base = 'oregon';
			break;
		case 'AFSP Rhode Island':
			$chapter_url_base = 'rhode-island';
			break;
		case 'AFSP San Diego':
			$chapter_url_base = 'san-diego';
			break;
		case 'AFSP South Carolina':
			$chapter_url_base = 'south-carolina';
			break;
		case 'AFSP South Central New York':
			$chapter_url_base = 'south-central-new-york';
			break;
		case 'AFSP South Dakota':
			$chapter_url_base = 'south-dakota';
			break;
		case 'AFSP South Texas':
			$chapter_url_base = 'south-texas';
			break;
		case 'AFSP Southeast Florida':
			$chapter_url_base = 'southeast-florida';
			break;
		case 'AFSP Southeast Minnesota':
			$chapter_url_base = 'southeast-minnesota';
			break;
		case 'AFSP Southeast Texas':
			$chapter_url_base = 'southeast-texas';
			break;
		case 'AFSP Southwest Florida':
			$chapter_url_base = 'southwest-florida';
			break;
		case 'AFSP Tampa Bay':
			$chapter_url_base = 'tampa-bay';
			break;
		case 'AFSP Tennessee':
			$chapter_url_base = 'tennessee';
			break;
		case 'AFSP Utah':
			$chapter_url_base = 'utah';
			break;
		case 'AFSP Vermont':
			$chapter_url_base = 'vermont';
			break;
		case 'AFSP Virginia':
			$chapter_url_base = 'virginia';
			break;
		case 'AFSP Washington':
			$chapter_url_base = 'washington';
			break;
		case 'AFSP West Virginia':
			$chapter_url_base = 'west-virginia';
			break;
		case 'AFSP Western Massachusetts':
			$chapter_url_base = 'western-massachusetts';
			break;
		case 'AFSP Western New York':
			$chapter_url_base = 'western-new-york';
			break;
		case 'AFSP Western Pennsylvania':
			$chapter_url_base = 'western-pennsylvania';
			break;
		case 'AFSP Wisconsin':
			$chapter_url_base = 'wisconsin';
			break;
		case 'AFSP Wyoming':
			$chapter_url_base = 'wyoming';
			break;
	}
	return $chapter_url_base;
}
/**
 * Output chapter name
 *
 * @param string $term The term for the AFSP chapter.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return string $chapter Chapter name
 */
function chapter_term_to_name( $term ) {
	switch ( $term->slug ) {
		case 'afsp-alabama':
			$chapter = 'AFSP Alabama';
			break;
		case 'afsp-alaska':
			$chapter = 'AFSP Alaska';
			break;
		case 'afsp-arizona':
			$chapter = 'AFSP Arizona';
			break;
		case 'afsp-arkansas':
			$chapter = 'AFSP Arkansas';
			break;
		case 'afsp-capital-region-new-york':
			$chapter = 'AFSP Capital Region New York';
			break;
		case 'afsp-central-florida':
			$chapter = 'AFSP Central Florida';
			break;
		case 'afsp-central-new-york':
			$chapter = 'AFSP Central New York';
			break;
		case 'afsp-central-texas':
			$chapter = 'AFSP Central Texas';
			break;
		case 'afsp-central-valley-california':
				$chapter = 'AFSP Central Valley California';
			break;
		case 'afsp-connecticut':
			$chapter = 'AFSP Connecticut';
			break;
		case 'afsp-colorado':
			$chapter = 'AFSP Colorado';
			break;
		case 'afsp-delaware':
			$chapter = 'AFSP Delaware';
			break;
		case 'afsp-eastern-missouri':
			$chapter = 'AFSP Eastern Missouri';
			break;
    case 'afsp-eastern-pennsylvania':
      $chapter = 'AFSP Eastern Pennsylvania';
      break;
		case 'afsp-florida-panhandle':
			$chapter = 'AFSP Florida Panhandle';
			break;
		case 'afsp-florida-southeast':
			$chapter = 'AFSP Florida Southeast';
			break;
		case 'afsp-florida-southwest':
			$chapter = 'AFSP Florida Southwest';
			break;
		case 'afsp-georgia':
			$chapter = 'AFSP Georgia';
			break;
		case 'afsp-greater-boston':
			$chapter = 'AFSP Greater Boston';
			break;
		case 'afsp-greater-kansas':
			$chapter = 'AFSP Greater Kansas';
			break;
		case 'afsp-greater-los-angeles':
			$chapter = 'AFSP Greater Los Angeles';
			break;
		case 'afsp-greater-mid-missouri':
			$chapter = 'AFSP Greater Mid-Missouri';
			break;
		case 'afsp-greater-minnesota':
			$chapter = 'AFSP Greater Minnesota';
			break;
		case 'afsp-greater-philadelphia':
			$chapter = 'AFSP Greater Philadelphia';
			break;
		case 'afsp-greater-sacramento':
			$chapter = 'AFSP Greater Sacramento';
			break;
		case 'afsp-greater-san-francisco':
			$chapter = 'AFSP Greater San Francisco';
			break;
		case 'afsp-hawaii':
			$chapter = 'AFSP Hawaii';
			break;
		case 'afsp-hudson-valley-westchester':
			$chapter = 'AFSP Hudson Valley/Westchester';
			break;
		case 'afsp-idaho':
			$chapter = 'AFSP Idaho';
			break;
		case 'afsp-illinois':
			$chapter = 'AFSP Illinois';
			break;
		case 'afsp-indiana':
			$chapter = 'AFSP Indiana';
			break;
		case 'afsp-inland-empire-and-desert-cities':
			$chapter = 'AFSP Inland Empire and Desert Cities';
			break;
		case 'afsp-iowa':
			$chapter = 'AFSP Iowa';
			break;
		case 'afsp-kentucky':
			$chapter = 'AFSP Kentucky';
			break;
		case 'afsp-louisiana':
			$chapter = 'AFSP Louisiana';
			break;
		case 'afsp-maine':
			$chapter = 'AFSP Maine';
			break;
		case 'afsp-maryland':
			$chapter = 'AFSP Maryland';
			break;
		case 'afsp-michigan':
			$chapter = 'AFSP Michigan';
			break;
		case 'afsp-mississippi':
			$chapter = 'AFSP Mississippi';
			break;
		case 'afsp-montana':
			$chapter = 'AFSP Montana';
			break;
		case 'afsp-national-capital-area':
			$chapter = 'AFSP National Capital Area';
			break;
		case 'afsp-nebraska':
			$chapter = 'AFSP Nebraska';
			break;
		case 'afsp-nevada':
			$chapter = 'AFSP Nevada';
			break;
		case 'afsp-new-hampshire':
			$chapter = 'AFSP New Hampshire';
			break;
		case 'afsp-new-jersey':
			$chapter = 'AFSP New Jersey';
			break;
		case 'afsp-new-mexico':
			$chapter = 'AFSP New Mexico';
			break;
		case 'afsp-new-york-city':
			$chapter = 'AFSP New York City';
			break;
		case 'afsp-new-york-long-island':
			$chapter = 'AFSP New York Long Island';
			break;
		case 'afsp-north-carolina':
			$chapter = 'AFSP North Carolina';
			break;
		case 'afsp-north-dakota':
			$chapter = 'AFSP North Dakota';
			break;
		case 'afsp-north-florida':
			$chapter = 'AFSP North Florida';
			break;
		case 'afsp-north-texas':
			$chapter = 'AFSP North Texas';
			break;
		case 'afsp-ohio':
			$chapter = 'AFSP Ohio';
			break;
		case 'afsp-oklahoma':
			$chapter = 'AFSP Oklahoma';
			break;
		case 'afsp-orange-county':
			$chapter = 'AFSP Orange County ';
			break;
		case 'afsp-oregon':
			$chapter = 'AFSP Oregon';
			break;
		case 'afsp-rhode-island':
			$chapter = 'AFSP Rhode Island';
			break;
		case 'afsp-san-diego':
			$chapter = 'AFSP San Diego';
			break;
		case 'afsp-south-carolina':
			$chapter = 'AFSP South Carolina';
			break;
		case 'afsp-south-central-new-york':
			$chapter = 'AFSP South Central New York';
			break;
		case 'afsp-south-dakota':
			$chapter = 'AFSP South Dakota';
			break;
		case 'afsp-south-texas':
			$chapter = 'AFSP South Texas';
			break;
		case 'afsp-southeast-minnesota':
			$chapter = 'AFSP Southeast Minnesota';
			break;
		case 'afsp-southeast-texas':
			$chapter = 'AFSP Southeast Texas';
			break;
		case 'afsp-tampa-bay':
			$chapter = 'AFSP Tampa Bay';
			break;
		case 'afsp-tennessee':
			$chapter = 'AFSP Tennessee';
			break;
		case 'afsp-utah':
			$chapter = 'AFSP Utah';
			break;
		case 'afsp-vermont':
			$chapter = 'AFSP Vermont';
			break;
		case 'afsp-virginia':
			$chapter = 'AFSP Virginia';
			break;
		case 'afsp-washington':
			$chapter = 'AFSP Washington';
			break;
		case 'afsp-west-virginia':
			$chapter = 'AFSP West Virginia';
			break;
		case 'afsp-western-massachusetts':
			$chapter = 'AFSP Western Massachusetts';
			break;
		case 'afsp-western-new-york':
			$chapter = 'AFSP Western New York';
			break;
		case 'afsp-western-pennsylvania':
			$chapter = 'AFSP Western Pennsylvania';
			break;
		case 'afsp-wisconsin':
			$chapter = 'AFSP Wisconsin';
			break;
		case 'afsp-wyoming':
			$chapter = 'AFSP Wyoming';
			break;
	}
	return $chapter;
}
/**
 * Output chapter name
 *
 * @param string $chapter The name for the AFSP chapter.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return string $chapter_code Chapter code
 */
function chapter_name_to_code( $chapter ) {
	switch ( $chapter ) {
		case '':
		case 'null':
			$chapter_code = '';
			break;
		case 'AFSP Alabama':
			$chapter_code = 'AL';
			break;
		case 'AFSP Alaska':
			$chapter_code = 'AK';
			break;
		case 'AFSP Arizona':
			$chapter_code = 'AZ';
			break;
		case 'AFSP Arkansas':
			$chapter_code = 'AR';
			break;
		case 'AFSP Capital Region New York':
			$chapter_code = 'NYCR';
			break;
		case 'AFSP Central Florida':
			$chapter_code = 'FLCEN';
			break;
		case 'AFSP Central New York':
			$chapter_code = 'NYCNY';
			break;
		case 'AFSP Central Texas':
			$chapter_code = 'TXCEN';
			break;
		case 'AFSP Central Valley California':
			$chapter_code = 'CACE';
			break;
		case 'AFSP Colorado':
			$chapter_code = 'CO';
			break;
		case 'AFSP Connecticut':
			$chapter_code = 'CT';
			break;
		case 'AFSP Delaware':
			$chapter_code = 'DE';
			break;
		case 'AFSP Eastern Missouri':
			$chapter_code = 'MO';
			break;
    case 'AFSP Eastern Pennsylvania':
      $chapter_code = 'PAET';
      break;
		case 'AFSP Florida Panhandle':
			$chapter_code = 'FLPA';
			break;
		case 'AFSP Georgia':
			$chapter_code = 'GA';
			break;
		case 'AFSP Greater Boston':
			$chapter_code = 'MA';
			break;
		case 'AFSP Greater Kansas':
			$chapter_code = 'KS';
			break;
		case 'AFSP Greater Los Angeles':
			$chapter_code = 'CALA';
			break;
		case 'AFSP Greater Mid-Missouri':
			$chapter_code = 'MOMID';
			break;
		case 'AFSP Greater Minnesota':
			$chapter_code = 'MN';
			break;
		case 'AFSP Greater Philadelphia':
			$chapter_code = 'PAPHI';
			break;
		case 'AFSP Greater Sacramento':
			$chapter_code = 'CASAC';
			break;
		case 'AFSP Greater San Francisco':
			$chapter_code = 'CASF';
			break;
		case 'AFSP Hawaii':
			$chapter_code = 'HI';
			break;
		case 'AFSP Hudson Valley/Westchester':
			$chapter_code = 'NYHW';
			break;
		case 'AFSP Idaho':
			$chapter_code = 'ID';
			break;
		case 'AFSP Illinois':
			$chapter_code = 'IL';
			break;
		case 'AFSP Indiana':
			$chapter_code = 'IN';
			break;
		case 'AFSP Inland Empire and Desert Cities':
			$chapter_code = 'CACV';
			break;
		case 'AFSP Iowa':
			$chapter_code = 'IA';
			break;
		case 'AFSP Kentucky':
			$chapter_code = 'KY';
			break;
		case 'AFSP Louisiana':
			$chapter_code = 'LA';
			break;
		case 'AFSP Maine':
			$chapter_code = 'ME';
			break;
		case 'AFSP Maryland':
			$chapter_code = 'MD';
			break;
		case 'AFSP Michigan':
			$chapter_code = 'MI';
			break;
		case 'AFSP Mississippi':
			$chapter_code = 'MS';
			break;
		case 'AFSP Montana':
			$chapter_code = 'MT';
			break;
		case 'AFSP National Capital Area':
			$chapter_code = 'DC';
			break;
		case 'AFSP Nebraska':
			$chapter_code = 'NE';
			break;
		case 'AFSP Nevada':
			$chapter_code = 'NV';
			break;
		case 'AFSP New Jersey':
			$chapter_code = 'NJ';
			break;
		case 'AFSP New Hampshire':
			$chapter_code = 'NH';
			break;
		case 'AFSP New Mexico':
			$chapter_code = 'NM';
			break;
		case 'AFSP New York City':
			$chapter_code = 'NYNYC';
			break;
		case 'AFSP New York Long Island':
			$chapter_code = 'NYLI';
			break;
		case 'AFSP North Carolina':
			$chapter_code = 'NC';
			break;
		case 'AFSP North Dakota':
			$chapter_code = 'ND';
			break;
		case 'AFSP North Florida':
			$chapter_code = 'FLFC';
			break;
		case 'AFSP North Texas':
			$chapter_code = 'TXDAL';
			break;
		case 'AFSP Ohio':
			$chapter_code = 'OH';
			break;
		case 'AFSP Oklahoma':
			$chapter_code = 'OK';
			break;
		case 'AFSP Orange County':
			$chapter_code = 'CAOC';
			break;
		case 'AFSP Oregon':
			$chapter_code = 'OR';
			break;
		case 'AFSP Rhode Island':
			$chapter_code = 'RI';
			break;
		case 'AFSP San Diego':
			$chapter_code = 'CASD';
			break;
		case 'AFSP South Carolina':
			$chapter_code = 'SC';
			break;
		case 'AFSP South Central New York':
			$chapter_code = 'SCNY';
			break;
		case 'AFSP South Dakota':
			$chapter_code = 'SD';
			break;
		case 'AFSP South Texas':
			$chapter_code = 'TXSC';
			break;
		case 'AFSP Southeast Florida':
			$chapter_code = 'FLSE';
			break;
		case 'AFSP Southeast Minnesota':
			$chapter_code = 'MNSE';
			break;
		case 'AFSP Southeast Texas':
			$chapter_code = 'TXGH';
			break;
		case 'AFSP Southwest Florida':
			$chapter_code = 'FLSA';
			break;
		case 'AFSP Tampa Bay':
			$chapter_code = 'FLTB';
			break;
		case 'AFSP Tennessee':
			$chapter_code = 'TN';
			break;
		case 'AFSP Utah':
			$chapter_code = 'UT';
			break;
		case 'AFSP Vermont':
			$chapter_code = 'VT';
			break;
		case 'AFSP Virginia':
			$chapter_code = 'VA';
			break;
		case 'AFSP Washington':
			$chapter_code = 'WA';
			break;
		case 'AFSP West Virginia':
			$chapter_code = 'WV';
			break;
		case 'AFSP Western Massachusetts':
			$chapter_code = 'MAWES';
			break;
		case 'AFSP Western New York':
			$chapter_code = 'NYWNY';
			break;
		case 'AFSP Western Pennsylvania':
			$chapter_code = 'PAPIT';
			break;
		case 'AFSP Wisconsin':
			$chapter_code = 'WI';
			break;
		case 'AFSP Wyoming':
			$chapter_code = 'WY';
			break;
	}
	return $chapter_code;
}
/**
 * Output chapter breadcrumb
 *
 * @param string $chapter_code The code for the AFSP chapter.
 *
 * @author Jonathan Dozier-Ezell <jdozier-ezell@afsp.org>
 * @return string $chapter Chapter name
 */
function afsp_chapter_breadcrumbs( $chapter_code ) {
	switch ( $chapter_code ) {
		case 'AL':
			$chapter = 'AFSP Alabama';
			break;
		case 'AK':
			$chapter = 'AFSP Alaska';
			break;
		case 'AR':
			$chapter = 'AFSP Arkansas';
			break;
		case 'AZ':
			$chapter = 'AFSP Arizona';
			break;
		case 'NYCR':
			$chapter = 'AFSP Capital Region New York';
			break;
		case 'FLCEN':
			$chapter = 'AFSP Central Florida';
			break;
		case 'NYCNY':
			$chapter = 'AFSP Central New York';
			break;
		case 'TXCEN':
			$chapter = 'AFSP Central Texas';
			break;
		case 'CACEV':
			$chapter = 'AFSP Central Valley California';
			break;
		case 'CO':
			$chapter = 'AFSP Colorado';
			break;
		case 'CT':
			$chapter = 'AFSP Connecticut';
			break;
		case 'DE':
			$chapter = 'AFSP Delaware';
			break;
		case 'MO':
			$chapter = 'AFSP Eastern Missouri';
			break;
    case 'PAET':
      $chapter = 'AFSP Eastern Pennsylvania';
      break;
		case 'FLPA':
			$chapter = 'AFSP Florida Panhandle';
			break;
		case 'GA':
			$chapter = 'AFSP Georgia';
			break;
		case 'MA':
			$chapter = 'AFSP Greater Boston';
			break;
		case 'KS':
			$chapter = 'AFSP Greater Kansas';
			break;
		case 'CALA':
			$chapter = 'AFSP Greater Los Angeles';
			break;
		case 'MOMID':
			$chapter = 'AFSP Greater Mid-Missouri';
			break;
		case 'MN':
			$chapter = 'AFSP Greater Minnesota';
			break;
		case 'PAPHI':
			$chapter = 'AFSP Greater Philadelphia';
			break;
		case 'CASAC':
			$chapter = 'AFSP Greater Sacramento';
			break;
		case 'CASF':
			$chapter = 'AFSP Greater San Francisco';
			break;
		case 'HI':
			$chapter = 'AFSP Hawaii';
			break;
		case 'NYHW':
			$chapter = 'AFSP Hudson Valley/Westchester';
			break;
		case 'ID':
			$chapter = 'AFSP Idaho';
			break;
		case 'IL':
			$chapter = 'AFSP Illinois';
			break;
		case 'IN':
			$chapter = 'AFSP Indiana';
			break;
		case 'CACV':
			$chapter = 'AFSP Inland Empire and Desert Cities';
			break;
		case 'IA':
			$chapter = 'AFSP Iowa';
			break;
		case 'KY':
			$chapter = 'AFSP Kentucky';
			break;
		case 'LA':
			$chapter = 'AFSP Louisiana';
			break;
		case 'ME':
			$chapter = 'AFSP Maine';
			break;
		case 'MD':
			$chapter = 'AFSP Maryland';
			break;
		case 'MI':
			$chapter = 'AFSP Michigan';
			break;
		case 'MS':
			$chapter = 'AFSP Mississippi';
			break;
		case 'MT':
			$chapter = 'AFSP Montana';
			break;
		case 'DC':
			$chapter = 'AFSP National Capital Area';
			break;
		case 'NE':
			$chapter = 'AFSP Nebraska';
			break;
		case 'NV':
			$chapter = 'AFSP Nevada';
			break;
		case 'NC':
			$chapter = 'AFSP North Carolina';
			break;
		case 'ND':
			$chapter = 'AFSP North Dakota';
			break;
		case 'TXDAL':
			$chapter = 'AFSP North Texas';
			break;
		case 'NH':
			$chapter = 'AFSP New Hampshire';
			break;
		case 'NJ':
			$chapter = 'AFSP New Jersey';
			break;
		case 'NM':
			$chapter = 'AFSP New Mexico';
			break;
		case 'NYNYC':
			$chapter = 'AFSP New York City';
			break;
		case 'NYLI':
			$chapter = 'AFSP New York Long Island';
			break;
		case 'FLFC':
			$chapter = 'AFSP North Florida';
			break;
		case 'OH':
			$chapter = 'AFSP Ohio';
			break;
		case 'OK':
			$chapter = 'AFSP Oklahoma';
			break;
		case 'CAOC':
			$chapter = 'AFSP Orange County';
			break;
		case 'OR':
			$chapter = 'AFSP Oregon';
			break;
		case 'RI':
			$chapter = 'AFSP Rhode Island';
			break;
		case 'CASD':
			$chapter = 'AFSP San Diego';
			break;
		case 'SCNY':
			$chapter = 'AFSP South Central New York ';
			break;
		case 'SC':
			$chapter = 'AFSP South Carolina';
			break;
		case 'SD':
			$chapter = 'AFSP South Dakota';
			break;
		case 'TXSC':
			$chapter = 'AFSP South Texas';
			break;
		case 'FLSE':
			$chapter = 'AFSP Southeast Florida';
			break;
		case 'MNSE':
			$chapter = 'AFSP Southeast Minnesota';
			break;
		case 'TXGH':
			$chapter = 'AFSP Southeast Texas';
			break;
		case 'FLSA':
			$chapter = 'AFSP Southwest Florida';
			break;
		case 'FLTB':
			$chapter = 'AFSP Tampa Bay';
			break;
		case 'TN':
			$chapter = 'AFSP Tennessee';
			break;
		case 'UT':
			$chapter = 'AFSP Utah';
			break;
		case 'VT':
			$chapter = 'AFSP Vermont';
			break;
		case 'VA':
			$chapter = 'AFSP Virginia';
			break;
		case 'WA':
			$chapter = 'AFSP Washington';
			break;
		case 'WV':
			$chapter = 'AFSP West Virginia';
			break;
		case 'MAWES':
			$chapter = 'AFSP Western Massachusetts';
			break;
		case 'NYWNY':
			$chapter = 'AFSP Western New York';
			break;
		case 'PAPIT':
			$chapter = 'AFSP Western Pennsylvania';
			break;
		case 'WI':
			$chapter = 'AFSP Wisconsin';
			break;
		case 'WY':
			$chapter = 'AFSP Wyoming';
			break;
	}
	return $chapter;
}
