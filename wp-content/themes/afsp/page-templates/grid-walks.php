<?php
/**
 * Template Name: Walks Grid
 *
 * @package afsp
 */

				get_header();
				$chapter_code = $_GET['chapter_code'];
				//afsp_chapter_breadcrumbs($chapter_code);
				switch($chapter_code) {
          case "AL": $chapter = "AFSP Alabama"; break;
          case "AK": $chapter = "AFSP Alaska"; break;
          case "AR": $chapter = "AFSP Arkansas"; break;
          case "AZ": $chapter = "AFSP Arizona"; break;
          case "CA CEV": $chapter = "AFSP Central Valley"; break;
          case "CA SAC": $chapter = "AFSP Greater Sacramento"; break;
          case "CA SF": $chapter = "AFSP Greater San Francisco"; break;
          case "CA LA": $chapter = "AFSP Greater Los Angeles"; break;
          case "CA SD": $chapter = "AFSP San Diego"; break;
          case "CA CV": $chapter = "AFSP Inland Empire and Desert Cities"; break;
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
          case "MI": $chapter = "AFSP Metro Detroit/Ann Arbor"; break;
          case "MN": $chapter = "AFSP Greater Minnesota"; break;
          case "MN SE": $chapter = "AFSP Southeast Minnesota"; break;
          case "MS": $chapter = "AFSP Mississippi"; break;
          case "MO MID": $chapter = "AFSP Greater Mid-Missouri"; break;
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
          case "OH CEN": $chapter = "AFSP Central Ohio"; break;
          case "OH": $chapter = "AFSP Cincinnati"; break;
          case "OH NOR": $chapter = "AFSP Northern Ohio"; break;
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
          case "TN": $chapter = "AFSP Memphis/Mid-South"; break;
          case "MID TN": $chapter = "AFSP Middle Tennessee"; break;
          case "UT": $chapter = "AFSP Utah"; break;
          case "VT": $chapter = "AFSP Vermont"; break;
          case "VA": $chapter = "AFSP Virginia"; break;
          case "WA": $chapter = "AFSP Washington"; break;
          case "WV": $chapter = "AFSP West Virginia"; break;
          case "WI": $chapter = "AFSP Wisconsin"; break;
          case "WY": $chapter = "AFSP Wyoming"; break;
				}
				?>
				
<header class="breadcrumbs__container">
  <div class="breadcrumbs">
  
        <p id="breadcrumbs">
          <span>
            <a href="<?php echo get_site_url() . '/chapter/' . str_replace(' ','-', $chapter); ?>"><?php echo $chapter; ?></a> › 
          </span>
          <span class="breadcrumb_last">Events</span>
        </p>

  </div>
</header>
				
				<?php $id = get_the_ID();
				$current_year = date("Y");
				$previous_limit = mktime(0,0,0,1,1,$current_year);
				$filename = get_template_directory() . '/imports/merged.json';
        
        $json = file_get_contents($filename);
        $upcoming_array = json_decode($json, true);
        $previous_array = $upcoming_array;
        
        function sort_upcoming_events($a, $b) { // this function sorts the upcoming array from early to late
        	if($a['enddate'] == $b['enddate']) :
        		return 0;
      		endif;
      		return ($a['enddate'] < $b['enddate']) ? -1 : 1;
        }        
        function sort_previous_events($a, $b) { // this function sorts the previous array from late to early
        	if($a['enddate'] == $b['enddate']) :
        		return 0;
      		endif;
      		return ($a['enddate'] < $b['enddate']) ? 1 : -1;
        }
        
        usort($upcoming_array['result']['row'], 'sort_upcoming_events');
        usort($previous_array['result']['row'], 'sort_previous_events'); ?>
 
	<div class="events-grid">Upcoming <?php echo $chapter; ?> Community and Campus Walks</div>
<section class="events__grid container--large">
 
        <?php $empty_upcoming  = true;
        $empty_previous = true;
        foreach($upcoming_array['result']['row'] as $data) {
          $trim_date = $data['startdate'];
          $trim_date = strpos($trim_date, 'T') ? substr($trim_date, 0, strpos($trim_date, 'T')) : $trim_date;
          $start_date = strtotime($trim_date);
          $trim_date = $data['enddate'];
          $trim_date = strpos($trim_date, 'T') ? substr($trim_date, 0, strpos($trim_date, 'T')) : $trim_date;
          $end_date = strtotime($trim_date);
          $name = $data['name'];
          $city = $data['city'];
          $state = $data['state'];
          $recordid = $data['recordid'];
          $programcode = $data['programcode'];
          $chapter_codes = $data['customfieldcode1']; // variable for the chapter codes
          if($chapter_codes === $chapter_code && time() <= $end_date && ($programcode === 'CW' || $programcode === 'CAMPUS')) : ?>

 <a class="event__item <?php echo $recordid; ?>" href="<?php echo $data['sitelink']; ?>">
		<table class="event__info">
	  	<tbody>
		  	<tr>
		  		<td class="event__title"><b><?php echo $name; ?></b> <br /> <br /> <?php echo date('F jS', $start_date); ?></td>
		  	</tr>
	  	</tbody>
	  </table>	
	</a>  
        
        <?php $empty_upcoming = false; 
        	endif; 
        } ?>
      	
</section>         

      	<?php	if ($empty_upcoming) : ?>
        		
	<p class="no-events">There are no upcoming walks scheduled at this time.</p>
	
      	<?php	endif; ?>
      	
	<div class="events-grid">Previous <?php echo $current_year . ' ' . $chapter ?> Community and Campus Walks</div>
<section class="events__grid container--large">       
        
        <?php foreach($previous_array['result']['row'] as $data) {
          $trim_date = $data['enddate'];
          $trim_date = strpos($trim_date, 'T') ? substr($trim_date, 0, strpos($trim_date, 'T')) : $trim_date;
          $end_date = strtotime($trim_date);
          $name = $data['name'];
          $city = $data['city'];
          $state = $data['state'];
          $recordid = $data['recordid'];
          $programcode = $data['programcode'];
          $chapter_codes = $data['customfieldcode1']; // variable for the chapter codes
          
          if($chapter_codes === $chapter_code && (time() >= $end_date && $end_date >= $previous_limit) && ($programcode === 'CW' || $programcode === 'CAMPUS')) : ?>

 <a class="event__item <?php echo $recordid; ?>" href="<?php echo $data['sitelink'] ?>">
		<table class="event__info">
	  	<tbody>
		  	<tr>
		  		<td class="event__title"><?php echo $name; ?></td>
		  	</tr>
	  	</tbody>
	  </table>	
	</a>   
        
        <?php $empty_previous = false;
        	endif; 
        } ?>

</section>  

      	<?php if ($empty_previous) : ?>
        		
	<p class="no-events">There are no previous walks to display at this time.</p>
	
      	<?php	endif; ?>
      	
				<?php get_footer(); ?>