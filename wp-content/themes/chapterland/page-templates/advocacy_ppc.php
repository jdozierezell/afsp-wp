<?php
/*
Template Name: Advocacy PPC Page
*/

get_header(); ?>

<?php if(!is_user_logged_in()) :
  echo 'Please Login to Continue';
else : ?>

<div class="container">
<div id="primary" class="content-container">

<?php while ( have_posts() ) : the_post(); // start WP_Query Loop ?>

<?php
  $pageImage = get_field('page_image');
?>

  <div class="prettyFace">
    <img src="<?php echo $pageImage['sizes']['pretty-face']; ?>" alt="<?php echo $pageImage['alt']; ?>">
  </div>
  <article id="post-<?php the_ID(); ?>" <?php post_class( 'pageContent' ); ?>> <!--start pageContent-->
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
			<?php the_content(); ?>
<!-- 2017 Links -->

			<h3 style="background-color: #396dff; color: #fff; padding-left: 1rem">PPC Checklist Submissions</h3>
			<h4>Choose Your Chapter</h4>
			<select name="chapter_select_17" id="chapter_select_17" data-selected="no">   
			  <option id="not-selected"></option>
				<option id="alabama" data-url="https://www.surveymonkey.com/results/SM-G2DNCX8ML/" data-division="Southern">Alabama</option>
				<option id="alaska" data-url="https://www.surveymonkey.com/results/SM-T7QWRX8ML/" data-division="Western">Alaska</option>
				<option id="arizona" data-url="https://www.surveymonkey.com/results/SM-JNNJ5X8ML/" data-division="Western">Arizona</option>
				<option id="arkansas" data-url="https://www.surveymonkey.com/results/SM-8TFLLN8ML/" data-division="Southern">Arkansas</option>
				<option id="capital-region-new-york" data-url="https://www.surveymonkey.com/results/SM-2L6XCQ7ML/" data-division="Eastern">Capital Region New York</option>
				<option id="central-florida" data-url="https://www.surveymonkey.com/results/SM-YTLGLG8ML/" data-division="Southern">Central Florida</option>
				<option id="central-new-york" data-url="https://www.surveymonkey.com/results/SM-JQZTVQ7ML/" data-division="Eastern">Central New York</option>
				<option id="central-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-MS8RTW7ML/" data-division="East Central">Central Pennsylvania</option>
				<option id="central-texas" data-url="https://www.surveymonkey.com/results/SM-C8R5JS7ML/" data-division="Central">Central Texas</option>
				<option id="central-valley-california" data-url="https://www.surveymonkey.com/results/SM-3Q3B7N8ML/" data-division="Western">Central Valley California</option>
				<option id="colorado" data-url="https://www.surveymonkey.com/results/SM-TYJMMF8ML/" data-division="Central">Colorado</option>
				<option id="connecticut" data-url="https://www.surveymonkey.com/results/SM-ZXNRP38ML/" data-division="Eastern">Connecticut</option>
				<option id="delaware" data-url="https://www.surveymonkey.com/results/SM-WHYGZ38ML/" data-division="Eastern">Delaware</option>
				<option id="eastern-missouri" data-url="https://www.surveymonkey.com/results/SM-NXKBJY7ML/" data-division="Central">Eastern Missouri</option>
				<option id="florida-panhandle" data-url="https://www.surveymonkey.com/results/SM-R3DMJG8ML/" data-division="Southern">Florida Panhandle</option>
				<option id="georgia" data-url="https://www.surveymonkey.com/results/SM-QVSCYB8ML/" data-division="Southern">Georgia</option>
				<option id="greater-boston" data-url="https://www.surveymonkey.com/results/SM-KH7CZD7ML/" data-division="Eastern">Greater Boston</option>
				<option id="greater-kansas" data-url="https://www.surveymonkey.com/results/SM-KLFM3B8ML/" data-division="Central">Greater Kansas</option>
				<option id="greater-lehigh-valley-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-MPY5FW7ML/" data-division="East Central">Greater Lehigh Valley Pennsylvania</option>
				<option id="greater-los-angeles" data-url="https://www.surveymonkey.com/results/SM-VKMBVF8ML/" data-division="Western">Greater Los Angeles</option>
				<option id="greater-mid-missouri" data-url="https://www.surveymonkey.com/results/SM-ZPCP2Y7ML/" data-division="Central">Greater Mid-Missouri</option>
				<option id="greater-minnesota" data-url="https://www.surveymonkey.com/results/SM-TYND7Y7ML/" data-division="Central">Greater Minnesota</option>
				<option id="greater-northeast-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-ZXCQ6W7ML/" data-division="East Central">Greater Northeast Pennsylvania</option>
				<option id="greater-philadelphia" data-url="https://www.surveymonkey.com/results/SM-FDNRZW7ML/" data-division="East Central">Greater Philadelphia</option>
				<option id="greater-sacramento" data-url="https://www.surveymonkey.com/results/SM-59N72N8ML/" data-division="Western">Greater Sacramento</option>
				<option id="greater-san-francisco" data-url="https://www.surveymonkey.com/results/SM-682N5N8ML/" data-division="Western">Greater San Francisco</option>
				<option id="hawaii" data-url="https://www.surveymonkey.com/results/SM-RLXQCB8ML/" data-division="Western">Hawaii</option>
				<option id="hudson-valley-westchester" data-url="https://www.surveymonkey.com/results/SM-N8RVDQ7ML/" data-division="Eastern">Hudson Valley/Westchester</option>
				<option id="idaho" data-url="https://www.surveymonkey.com/results/SM-M9V2WB8ML/" data-division="Western">Idaho</option>
				<option id="illinois" data-url="https://www.surveymonkey.com/results/SM-PHNHRB8ML/" data-division="Central">Illinois</option>
				<option id="indiana" data-url="https://www.surveymonkey.com/results/SM-5BB6MB8ML/" data-division="East Central">Indiana</option>
				<option id="inland-empire-and-desert-cities" data-url="https://www.surveymonkey.com/results/SM-NW83CF8ML/" data-division="Western">Inland Empire and Desert Cities</option>
				<option id="iowa" data-url="https://www.surveymonkey.com/results/SM-RP8JNB8ML/" data-division="Central">Iowa</option>
				<option id="kentucky" data-url="https://www.surveymonkey.com/results/SM-SQNXHB8ML/" data-division="East Central">Kentucky</option>
				<option id="louisiana" data-url="https://www.surveymonkey.com/results/SM-2FYZFD7ML/" data-division="Southern">Louisiana</option>
				<option id="maine" data-url="https://www.surveymonkey.com/results/SM-7Y3VHD7ML/" data-division="Eastern">Maine</option>
				<option id="maryland" data-url="https://www.surveymonkey.com/results/SM-YDP96D7ML/" data-division="Eastern">Maryland</option>
				<option id="michigan" data-url="https://www.surveymonkey.com/results/SM-DGWSLY7ML/" data-division="East Central">Michigan</option>
				<option id="mississippi" data-url="https://www.surveymonkey.com/results/SM-QHLWYY7ML/" data-division="Southern">Mississippi</option>
				<option id="montana" data-url="https://www.surveymonkey.com/results/SM-WZRTMJ7ML/" data-division="Western">Montana</option>
				<option id="national-capital-area" data-url="https://www.surveymonkey.com/results/SM-ZK65KG8ML/" data-division="East Central">National Capital Area</option>
				<option id="nebraska" data-url="https://www.surveymonkey.com/results/SM-7F9SNJ7ML/" data-division="Central">Nebraska</option>
				<option id="nevada" data-url="https://www.surveymonkey.com/results/SM-YNCT3J7ML/" data-division="Western">Nevada</option>
				<option id="new-hampshire" data-url="https://www.surveymonkey.com/results/SM-GHZGBJ7ML/" data-division="Eastern">New Hampshire</option>
				<option id="new-jersey" data-url="https://www.surveymonkey.com/results/SM-W35S6J7ML/" data-division="Eastern">New Jersey</option>
				<option id="new-mexico" data-url="https://www.surveymonkey.com/results/SM-VXKDKQ7ML/" data-division="Western">New Mexico</option>
				<option id="new-york-city" data-url="https://www.surveymonkey.com/results/SM-TSMR2Q7ML/" data-division="Eastern">New York City</option>
				<option id="new-york-long-island" data-url="https://www.surveymonkey.com/results/SM-5Z6CWQ7ML/" data-division="Eastern">New York Long Island</option>
				<option id="north-carolina" data-url="https://www.surveymonkey.com/results/SM-LVGH5Q7ML/" data-division="Southern">North Carolina</option>
				<option id="north-dakota" data-url="https://www.surveymonkey.com/results/SM-KQSW8W7ML/" data-division="Central">North Dakota</option>
				<option id="north-florida" data-url="https://www.surveymonkey.com/results/SM-PFH8YG8ML/" data-division="Southern">North Florida</option>
				<option id="north-texas" data-url="https://www.surveymonkey.com/results/SM-RV7ZTS7ML/" data-division="Central">North Texas</option>
				<option id="ohio" data-url="https://www.surveymonkey.com/results/SM-DCGM9W7ML/" data-division="East Central">Ohio</option>
				<option id="oklahoma" data-url="https://www.surveymonkey.com/results/SM-3RJHYW7ML/" data-division="Central">Oklahoma</option>
				<option id="orange-county" data-url="https://www.surveymonkey.com/results/SM-RKR6WF8ML/" data-division="Western">Orange County</option>
				<option id="oregon" data-url="https://www.surveymonkey.com/results/SM-MLHKQW7ML/" data-division="Western">Oregon</option>
				<option id="rhode-island" data-url="https://www.surveymonkey.com/results/SM-P22SVS7ML/" data-division="Eastern">Rhode Island</option>
				<option id="san-diego" data-url="https://www.surveymonkey.com/results/SM-9VLFDF8ML/" data-division="Western">San Diego</option>
				<option id="south-carolina" data-url="https://www.surveymonkey.com/results/SM-M85J9S7ML/" data-division="Southern">South Carolina</option>
				<option id="south-central-new-york" data-url="https://www.surveymonkey.com/results/SM-W26JTQ7ML/" data-division="Eastern">South Central New York</option>
				<option id="south-central-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-5P9L8S7ML/" data-division="East Central">South Central Pennsylvania</option>
				<option id="south-dakota" data-url="https://www.surveymonkey.com/results/SM-2BX2YS7ML/" data-division="Central">South Dakota</option>
				<option id="south-texas" data-url="https://www.surveymonkey.com/results/SM-HXCFXS7ML/" data-division="Central">South Texas</option>
				<option id="southeast-florida" data-url="https://www.surveymonkey.com/results/SM-9XY2SG8ML/" data-division="Southern">Southeast Florida</option>
				<option id="southeast-minnesota" data-url="https://www.surveymonkey.com/results/SM-YKC7DY7ML/" data-division="Central">Southeast Minnesota</option>
				<option id="southeast-texas" data-url="https://www.surveymonkey.com/results/SM-HDVDSS7ML/" data-division="Central">Southeast Texas</option>
				<option id="southwest-florida" data-url="https://www.surveymonkey.com/results/SM-NVZ38B8ML/" data-division="Southern">Southwest Florida</option>
				<option id="tampa-bay" data-url="https://www.surveymonkey.com/results/SM-5XVRVB8ML/" data-division="Southern">Tampa Bay</option>
				<option id="tennessee" data-url="https://www.surveymonkey.com/results/SM-9D3FCS7ML/" data-division="Southern">Tennessee</option>
				<option id="utah" data-url="https://www.surveymonkey.com/results/SM-87T3QR7ML/" data-division="Western">Utah</option>
				<option id="vermont" data-url="https://www.surveymonkey.com/results/SM-QRJFWR7ML/" data-division="Eastern">Vermont</option>
				<option id="virginia" data-url="https://www.surveymonkey.com/results/SM-TC75SR7ML/" data-division="Eastern">Virginia</option>
				<option id="washington" data-url="https://www.surveymonkey.com/results/SM-2ZWLTR7ML/" data-division="Western">Washington</option>
				<option id="west-virginia" data-url="https://www.surveymonkey.com/results/SM-PHC3TR7ML/" data-division="East Central">West Virginia</option>
				<option id="western-massachusetts" data-url="https://www.surveymonkey.com/results/SM-TPQG5D7ML/" data-division="Eastern">Western Massachusetts</option>
				<option id="western-new-york" data-url="https://www.surveymonkey.com/results/SM-3ZWZXQ7ML/" data-division="Eastern">Western New York</option>
				<option id="western-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-F85LSW7ML/" data-division="East Central">Western Pennsylvania</option>
				<option id="wisconsin" data-url="https://www.surveymonkey.com/results/SM-ZZHMNR7ML/" data-division="East Central">Wisconsin</option>
				<option id="wyoming" data-url="https://www.surveymonkey.com/results/SM-YS8J3R7ML/" data-division="Western">Wyoming</option>
			</select> 
			<div id="chapter_program_17" style="display:none">
			  <h4>Advocacy PPC Checklist Link</h4>
			  <p></p>
			  <p></p>
			  <p></p>
			  <p></p>
			</div>
    </div> <!-- .entry-content -->
  </article> <!-- .pageContent -->
</div>

<?php endwhile; // end WP_Query Loop ?>

<script>
	jQuery(document).ready(function($){
		$('#chapter_select_17').on('change', function(e){
			var $chapter = $(this);
			var $id = $(this).attr('id');
			if($(this).attr('id') !== 'not-selected') {
  			$chapter.data('selected','yes');
  			var url = $chapter.find('option:selected').data('url');
  			var chapter_program = 'chapter_program_17';
  			$('#' + chapter_program).attr('style','display:block');
  			$('#' + chapter_program + ' > p:nth-of-type(1)').html($chapter.find('option:selected').text() + ' &mdash; <a href="' + url + '" target="_blank">' + url + '</a>');
			} else {
  			$('#chapter_program_17').attr('style','display:none');
			}
		});
	});
</script>

<?php endif; ?>

<?php get_footer(); ?>