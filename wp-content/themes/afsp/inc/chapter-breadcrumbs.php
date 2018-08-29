<?php

function afsp_chapter_breadcrumbs($chapter_code, $dashes = 0) {
	switch($chapter_code) {
    case "AL": $chapter = "AFSP Alabama";
               $chapter_url = str_replace(" ", "-", "AFSP Alabama"); 
               break;
    case "AK": $chapter = "AFSP Alaska"; break;
    case "AR": $chapter = "AFSP Arizona"; break;
    case "AZ": $chapter = "AFSP Arkansas"; break;
    case "CA CE": $chapter = "AFSP Central Valley"; break;
    case "CA SAC": $chapter = "AFSP Greater Sacramento"; break;
    case "CA SF": $chapter = "AFSP Greater San Francisco"; break;
    case "CA LA": $chapter = "AFSP Greater Los Angeles"; break;
    case "CA SD": $chapter = "AFSP San Diego"; break;
    case "CA RIV": $chapter = "AFSP Inland Empire and Desert Cities"; break;
    case "CA OC": $chapter = "AFSP Orange County "; break;
    case "CO": $chapter = "AFSP Colorado"; break;
    case "CT": $chapter = "AFSP Northern Connecticut"; break;
    case "NOR CT": $chapter = "AFSP Southern Connecticut"; break;
    case "DE": $chapter = "AFSP Delaware"; break;
    case "DC": $chapter = "AFSP National Capital Area"; break;
    case "FL CEN": $chapter = "AFSP Central Florida"; break;
    case "FL FC": $chapter = "AFSP North Florida"; break;
    case "FL SE": $chapter = "AFSP Florida Southeast"; break;
    case "FL SW": $chapter = "AFSP Florida Southwest"; break;
    case "FL TB": $chapter = "AFSP Tampa Bay"; break;
    case "GA": $chapter = "AFSP Georgia"; break;
    case "HI": $chapter = "AFSP Hawaii"; break;
    case "ID": $chapter = "AFSP Idaho"; break;
    case "IA": $chapter = "AFSP Iowa"; break;
    case "IL": $chapter = "AFSP Illinois"; break;
    case "IN": $chapter = "AFSP Indiana"; break;
    case "KS": $chapter = "AFSP Greater Kansas"; break;
    case "KY": $chapter = "AFSP Kentucky"; break;
    case "LA": $chapter = "AFSP Louisiana"; break;
    case "ME": $chapter = "AFSP Maine"; break;
    case "MD": $chapter = "AFSP Maryland"; break;
    case "MA": $chapter = "AFSP Greater Boston"; break;
    case "MA WES": $chapter = "AFSP Western Massachusetts"; break;
    case "MI": $chapter = "AFSP Metro Detroit Ann Arbor"; break;
    case "MN": $chapter = "AFSP Greater Minnesota"; break;
    case "MN SE": $chapter = "AFSP Southeast Minnesota"; break;
    case "MS": $chapter = "AFSP Mississippi"; break;
    case "MO MID": $chapter = "AFSP Greater Mid Missouri"; break;
    case "MO": $chapter = "AFSP Eastern Missouri"; break;
    case "MT": $chapter = "AFSP Montana"; break;
    case "NE": $chapter = "AFSP Nebraska"; break;
    case "NH": $chapter = "AFSP New Hampshire"; break;
    case "NJ CEN": $chapter = "AFSP Central New Jersey"; break;
    case "NJ NOR": $chapter = "AFSP Northern New Jersey"; break;
    case "NM": $chapter = "AFSP New Mexico"; break;
    case "NY CNY": $chapter = "AFSP Central New York"; break;
    case "NY HV": $chapter = "AFSP Hudson Valley"; break;
    case "NY NYC": $chapter = "AFSP New York City"; break;
    case "NY CR": $chapter = "AFSP Capital Region New York"; break;
    case "NY LI": $chapter = "AFSP New York Long Island"; break;
    case "SC NY": $chapter = "AFSP South Central New York "; break;
    case "NY WES": $chapter = "AFSP Westchester"; break;
    case "NY WNY": $chapter = "AFSP Western New York"; break;
    case "NV": $chapter = "AFSP Nevada"; break;
    case "NC": $chapter = "AFSP North Carolina"; break;
    case "ND": $chapter = "AFSP North Dakota"; break;
    case "OH": $chapter = "AFSP Ohio"; break;
    case "OK": $chapter = "AFSP Oklahoma"; break;
    case "OR": $chapter = "AFSP Oregon"; break;
    case "RI": $chapter = "AFSP Rhode Island"; break;
    case "PA PIT": $chapter = "AFSP Western Pennsylvania"; break;
    case "PA PENN": $chapter = "AFSP Central Pennsylvania"; break;
    case "PA LV": $chapter = "AFSP Greater Lehigh Valley Pennsylvania"; break;
    case "PA NE": $chapter = "AFSP Greater Northeast Pennsylvania"; break;
    case "PA PHI": $chapter = "AFSP Greater Philadelphia"; break;
    case "SC PA": $chapter = "AFSP South Central Pennsylvania"; break;
    case "SC": $chapter = "AFSP South Carolina"; break;
    case "SD": $chapter = "AFSP South Dakota"; break;
    case "TX CEN": $chapter = "AFSP Central Texas"; break;
    case "TX GH": $chapter = "AFSP Southeast Texas"; break;
    case "TX DAL": $chapter = "AFSP North Texas"; break;
    case "TXSC": $chapter = "AFSP South Texas"; break;
    case "TN": $chapter = "AFSP Memphis Mid South"; break;
    case "MID TN": $chapter = "AFSP Middle Tennessee"; break;
    case "UT": $chapter = "AFSP Utah"; break;
    case "VT": $chapter = "AFSP Vermont"; break;
    case "VA": $chapter = "AFSP Virginia"; break;
    case "WA": $chapter = "AFSP Washington"; break;
    case "WV": $chapter = "AFSP West Virginia"; break;
    case "WI": $chapter = "AFSP Wisconsin"; break;
    case "WY": $chapter = "AFSP Wyoming"; break;
	}

  $breadcrumbs  = '<header class="breadcrumbs__container">';
  $breadcrumbs .= '<div class="breadcrumbs">';
  $breadcrumbs .= '<p id="breadcrumbs">';
  $breadcrumbs .= '<span>';
  $breadcrumbs .= '<a href=' . site_url() . '/chapter/' . $chapter_url . '">' . $chapter . '</a> › ';
  $breadcrumbs .= '</span>';
  $breadcrumbs .= '<span class="breadcrumb_last">Events</span>';
  $breadcrumbs .= '</p>';
  $breadcrumbs .= '</div>';
  $breadcrumbs .= '</header>';
    
  return $breadcrumbs;
}

?>