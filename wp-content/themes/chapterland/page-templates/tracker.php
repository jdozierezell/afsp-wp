<?php
/*
Template Name: Tracker Page
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
			<p>To view a report, begin by choosing either one of the options below. <strong>If you would like to enter your events into the program tracker, <a href="https://www.surveymonkey.com/r/2017ProgramTracker" target="_blank">click here to complete the survey</a>.</strong></p>

<!-- 2017 Links -->

			<h3 style="background-color: #396dff; color: #fff; padding-left: 1rem">2017</h3>
			<h4>Choose Your Chapter</h4>
			<select name="chapter_select_17" id="chapter_select_17" data-selected="no">   
			  <option id="not-selected"></option>
				<option id="alabama" data-url="https://www.surveymonkey.com/results/SM-87SCZT23/" data-division="Southern">Alabama</option>
				<option id="alaska" data-url="https://www.surveymonkey.com/results/SM-DHPBZT23/" data-division="Western">Alaska</option>
				<option id="arizona" data-url="https://www.surveymonkey.com/results/SM-5Q9Z5T23/" data-division="Western">Arizona</option>
				<option id="arkansas" data-url="https://www.surveymonkey.com/results/SM-JNNLKM23/" data-division="Central">Arkansas</option>
				<option id="capital-region-new-york" data-url="https://www.surveymonkey.com/results/SM-BFXTWRJ3/" data-division="Eastern">Capital Region New York</option>
				<option id="central-florida" data-url="https://www.surveymonkey.com/results/SM-XCC83QJ3/" data-division="Southern">Central Florida</option>
				<option id="central-new-jersey" data-url="https://www.surveymonkey.com/results/SM-PDDT6SJ3/" data-division="Eastern">Central New Jersey</option>
				<option id="central-new-york" data-url="https://www.surveymonkey.com/results/SM-ZRQHSRJ3/" data-division="Eastern">Central New York</option>
				<option id="central-ohio" data-url="https://www.surveymonkey.com/results/SM-XBNKGRJ3/" data-division="Central">Central Ohio</option>
				<option id="central-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-YQ5QRTJ3/" data-division="Eastern">Central Pennsylvania</option>
				<option id="central-texas" data-url="https://www.surveymonkey.com/results/SM-MSLLDMJ3/" data-division="Central">Central Texas</option>
				<option id="central-valley-california" data-url="https://www.surveymonkey.com/results/SM-ZTT3KM23/" data-division="Western">Central Valley California</option>
				<option id="cincinnati" data-url="https://www.surveymonkey.com/results/SM-MZKHGRJ3/" data-division="Central">Cincinnati</option>
				<option id="colorado" data-url="https://www.surveymonkey.com/results/SM-9GFT2M23/" data-division="Western">Colorado</option>
				<option id="delaware" data-url="https://www.surveymonkey.com/results/SM-L6HVRQJ3/" data-division="Eastern">Delaware</option>
				<option id="eastern-missouri" data-url="https://www.surveymonkey.com/results/SM-QTPNHWJ3/" data-division="Central">Eastern Missouri</option>
				<option id="florida-panhandle" data-url="https://www.surveymonkey.com/results/SM-N5Q9KWJ3/" data-division="Southern">Florida Panhandle</option>
				<option id="florida-southeast" data-url="https://www.surveymonkey.com/results/SM-R7N6ZQJ3/" data-division="Southern">Florida Southeast</option>
				<option id="florida-southwest" data-url="https://www.surveymonkey.com/results/SM-LLTT5QJ3/" data-division="Southern">Florida Southwest</option>
				<option id="georgia" data-url="https://www.surveymonkey.com/results/SM-FD2PVWJ3/" data-division="Southern">Georgia</option>
				<option id="greater-boston" data-url="https://www.surveymonkey.com/results/SM-HW2XCWJ3/" data-division="Eastern">Greater Boston</option>
				<option id="greater-kansas" data-url="https://www.surveymonkey.com/results/SM-TB38YWJ3/" data-division="Central">Greater Kansas</option>
				<option id="greater-lehigh-valley-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-M679MTJ3/" data-division="Eastern">Greater Lehigh Valley Pennsylvania</option>
				<option id="greater-los-angeles" data-url="https://www.surveymonkey.com/results/SM-RPNH9M23/" data-division="Western">Greater Los Angeles</option>
				<option id="greater-mid-missouri" data-url="https://www.surveymonkey.com/results/SM-MKGL9SJ3/" data-division="Central">Greater Mid-Missouri</option>
				<option id="greater-minnesota" data-url="https://www.surveymonkey.com/results/SM-FB9GGWJ3/" data-division="Central">Greater Minnesota</option>
				<option id="greater-northeast-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-CRS2XTJ3/" data-division="Eastern">Greater Northeast Pennsylvania</option>
				<option id="greater-philadelphia" data-url="https://www.surveymonkey.com/results/SM-6QJZXTJ3/" data-division="Eastern">Greater Philadelphia</option>
				<option id="greater-sacramento" data-url="https://www.surveymonkey.com/results/SM-VY598M23/" data-division="Western">Greater Sacramento</option>
				<option id="greater-san-francisco" data-url="https://www.surveymonkey.com/results/SM-8TFBLM23/" data-division="Western">Greater San Francisco</option>
				<option id="hawaii" data-url="https://www.surveymonkey.com/results/SM-Y79R7WJ3/" data-division="Western">Hawaii</option>
				<option id="hudson-valley" data-url="https://www.surveymonkey.com/results/SM-RW2SRRJ3/" data-division="Eastern">Hudson Valley</option>
				<option id="idaho" data-url="https://www.surveymonkey.com/results/SM-XRKS9WJ3/" data-division="Western">Idaho</option>
				<option id="illinois" data-url="https://www.surveymonkey.com/results/SM-8XVH7WJ3/" data-division="Central">Illinois</option>
				<option id="indiana" data-url="https://www.surveymonkey.com/results/SM-WHM57WJ3/" data-division="Central">Indiana</option>
				<option id="inland-empire-and-desert-cities" data-url="https://www.surveymonkey.com/results/SM-ZZG99M23/" data-division="Western">Inland Empire and Desert Cities</option>
				<option id="iowa" data-url="https://www.surveymonkey.com/results/SM-Q5ZG9WJ3/" data-division="Central">Iowa</option>
				<option id="kentucky" data-url="https://www.surveymonkey.com/results/SM-RZLPYWJ3/" data-division="Eastern">Kentucky</option>
				<option id="louisiana" data-url="https://www.surveymonkey.com/results/SM-2Q892WJ3/" data-division="Southern">Louisiana</option>
				<option id="maine" data-url="https://www.surveymonkey.com/results/SM-LP5S2WJ3/" data-division="Eastern">Maine</option>
				<option id="maryland" data-url="https://www.surveymonkey.com/results/SM-P2ZB2WJ3/" data-division="Eastern">Maryland</option>
				<option id="memphis-mid-south" data-url="https://www.surveymonkey.com/results/SM-DVYV9MJ3/" data-division="Southern">Memphis/Mid-South</option>
				<option id="metro-detroit-ann-arbor" data-url="https://www.surveymonkey.com/results/SM-3YXSMWJ3/" data-division="Central">Metro Detroit/Ann Arbor</option>
				<option id="middle-tennessee" data-url="https://www.surveymonkey.com/results/SM-XC3Y9MJ3/" data-division="Southern">Middle Tennessee</option>
				<option id="mississippi" data-url="https://www.surveymonkey.com/results/SM-WQRPBWJ3/" data-division="Southern">Mississippi</option>
				<option id="montana" data-url="https://www.surveymonkey.com/results/SM-CX8DDSJ3/" data-division="Western">Montana</option>
				<option id="national-capital-area" data-url="https://www.surveymonkey.com/results/SM-88DZRQJ3/" data-division="Eastern">National Capital Area</option>
				<option id="nebraska" data-url="https://www.surveymonkey.com/results/SM-5BV7HSJ3/" data-division="Central">Nebraska</option>
				<option id="nevada" data-url="https://www.surveymonkey.com/results/SM-7RTXHSJ3/" data-division="Western">Nevada</option>
				<option id="new-hampshire" data-url="https://www.surveymonkey.com/results/SM-RPJMPSJ3/" data-division="Eastern">New Hampshire</option>
				<option id="new-mexico" data-url="https://www.surveymonkey.com/results/SM-XKDLWRJ3/" data-division="Western">New Mexico</option>
				<option id="new-york-city" data-url="https://www.surveymonkey.com/results/SM-KN6FMRJ3/" data-division="Eastern">New York City</option>
				<option id="new-york-long-island" data-url="https://www.surveymonkey.com/results/SM-8RT6TRJ3/" data-division="Eastern">New York Long Island</option>
				<option id="north-carolina" data-url="https://www.surveymonkey.com/results/SM-F7MM3SJ3/" data-division="Southern">North Carolina</option>
				<option id="north-dakota" data-url="https://www.surveymonkey.com/results/SM-NN2D3RJ3/" data-division="Central">North Dakota</option>
				<option id="north-florida" data-url="https://www.surveymonkey.com/results/SM-MSFh4QJ3/" data-division="Southern">North Florida</option>
				<option id="north-texas" data-url="https://www.surveymonkey.com/results/SM-CLQ9YMJ3/" data-division="Central">North Texas</option>
				<option id="northern-connecticut" data-url="https://www.surveymonkey.com/results/SM-J79DWQJ3/" data-division="Eastern">Northern Connecticut</option>
				<option id="northern-new-jersey" data-url="https://www.surveymonkey.com/results/SM-DX8RZSJ3/" data-division="Eastern">Northern New Jersey</option>
				<option id="northern-ohio" data-url="https://www.surveymonkey.com/results/SM-MRZFQTJ3/" data-division="Central">Northern Ohio</option>
				<option id="oklahoma" data-url="https://www.surveymonkey.com/results/SM-J5PKWTJ3/" data-division="Central">Oklahoma</option>
				<option id="orange-county" data-url="https://www.surveymonkey.com/results/SM-YS5ZDM23/" data-division="Western">Orange County</option>
				<option id="oregon" data-url="https://www.surveymonkey.com/results/SM-VM97STJ3/" data-division="Western">Oregon</option>
				<option id="rhode-island" data-url="https://www.surveymonkey.com/results/SM-6M8JVMJ3/" data-division="Eastern">Rhode Island</option>
				<option id="san-diego" data-url="https://www.surveymonkey.com/results/SM-HJPMYM23/" data-division="Western">San Diego</option>
				<option id="south-carolina" data-url="https://www.surveymonkey.com/results/SM-P3Q77MJ3/" data-division="Southern">South Carolina</option>
				<option id="south-central-new-york" data-url="https://www.surveymonkey.com/results/SM-7SF5XRJ3/" data-division="Eastern">South Central New York</option>
				<option id="south-central-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-LVBQNTJ3/" data-division="Eastern">South Central Pennsylvania</option>
				<option id="south-dakota" data-url="https://www.surveymonkey.com/results/SM-8WHX7MJ3/" data-division="Central">South Dakota</option>
				<option id="south-texas" data-url="https://www.surveymonkey.com/results/SM-RGBNYMJ3/" data-division="Central">South Texas</option>
				<option id="southeast-minnesota" data-url="https://www.surveymonkey.com/results/SM-SY7LBWJ3/" data-division="Central">Southeast Minnesota</option>
				<option id="southeast-texas" data-url="https://www.surveymonkey.com/results/SM-7Q5FDMJ3/" data-division="Central">Southeast Texas</option>
				<option id="southern-connecticut" data-url="https://www.surveymonkey.com/results/SM-R5ZSSQJ3/" data-division="Eastern">Southern Connecticut</option>
				<option id="tampa-bay" data-url="https://www.surveymonkey.com/results/SM-6GCTVWJ3/" data-division="Southern">Tampa Bay</option>
				<option id="utah" data-url="https://www.surveymonkey.com/results/SM-NMMZ2MJ3/" data-division="Western">Utah</option>
				<option id="vermont" data-url="https://www.surveymonkey.com/results/SM-8H8VCMJ3/" data-division="Eastern">Vermont</option>
				<option id="virginia" data-url="https://www.surveymonkey.com/results/SM-DRSMCMJ3/" data-division="Eastern">Virginia</option>
				<option id="washington" data-url="https://www.surveymonkey.com/results/SM-BQJDJMJ3/" data-division="Western">Washington</option>
				<option id="west-virginia" data-url="https://www.surveymonkey.com/results/SM-JCYPJMJ3/" data-division="Eastern">West Virginia</option>
				<option id="westchester" data-url="https://www.surveymonkey.com/results/SM-RHRZNRJ3/" data-division="Eastern">Westchester</option>
				<option id="western-massachusetts" data-url="https://www.surveymonkey.com/results/SM-QJ9YJWJ3/" data-division="Eastern">Western Massachusetts</option>
				<option id="western-new-york" data-url="https://www.surveymonkey.com/results/SM-S5P3FRJ3/" data-division="Eastern">Western New York</option>
				<option id="western-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-8P63RTJ3/" data-division="Eastern">Western Pennsylvania</option>
				<option id="wisconsin" data-url="https://www.surveymonkey.com/results/SM-TKFCQMJ3/" data-division="Central">Wisconsin</option>
				<option id="wyoming" data-url="https://www.surveymonkey.com/results/SM-3FLHQMJ3/" data-division="Western">Wyoming</option>
			</select> 
			<div id="chapter_program_17" style="display:none">
			  <h4>Chapter Program Tracking Links</h4>
			  <p></p>
			  <p></p>
			  <p></p>
			  <p></p>
			</div>
			<h4>Choose Your Program</h4>
			<select name="program_select_17" id="program_select_17">
			  <option id="not-selected"></option>
			  <option id="abft" data-central="https://www.surveymonkey.com/results/SM-JGJ3KQBS/" data-eastern="https://www.surveymonkey.com/results/SM-V5LKLWGS/" data-southern="https://www.surveymonkey.com/results/SM-RM7KLQBS/" data-western="https://www.surveymonkey.com/results/SM-PZ5ZLQBS/" data-all="https://www.surveymonkey.com/results/SM-8QLL2JMS/">ABFT</option>
				<option id="asist" data-central="https://www.surveymonkey.com/results/SM-SVGYYQBS/" data-eastern="https://www.surveymonkey.com/results/SM-NXV5ZQGS/" data-southern="https://www.surveymonkey.com/results/SM-R5JSDQBS/" data-western="https://www.surveymonkey.com/results/SM-MFNP7QBS/" data-all="https://www.surveymonkey.com/results/SM-WKBFWJMS/">ASIST</option>
				<option id="asist-facilitator" data-central="https://www.surveymonkey.com/results/SM-WNCTWQBS/" data-eastern="https://www.surveymonkey.com/results/SM-FP5XLWGS/" data-southern="https://www.surveymonkey.com/results/SM-7QKSRQBS/" data-western="https://www.surveymonkey.com/results/SM-BK9RSQBS/" data-all="https://www.surveymonkey.com/results/SM-9XLHSJMS/">ASIST Facilitator</option>
				<option id="depression-&-bipolar-awareness" data-central="https://www.surveymonkey.com/results/SM-D63BGQBS/" data-eastern="https://www.surveymonkey.com/results/SM-29M3RSGS/" data-southern="https://www.surveymonkey.com/results/SM-YHSRXRBS/" data-western="https://www.surveymonkey.com/results/SM-GZ5DHQBS/" data-all="https://www.surveymonkey.com/results/SM-89TKXJMS/">Depression & Bipolar Awareness</option>
				<option id="its-real-college-film" data-central="https://www.surveymonkey.com/results/SM-D63BGQBS/" data-eastern="https://www.surveymonkey.com/results/SM-29M3RSGS/" data-southern="https://www.surveymonkey.com/results/SM-YHSRXRBS/" data-western="https://www.surveymonkey.com/results/SM-GZ5DHQBS/" data-all="https://www.surveymonkey.com/results/SM-89TKXJMS/">It's Real: College Film</option>
				<option id="living-w−bipolar" data-central="https://www.surveymonkey.com/results/SM-YD35GRBS/" data-eastern="https://www.surveymonkey.com/results/SM-KZDNMSGS/" data-southern="https://www.surveymonkey.com/results/SM-M363HRBS/" data-western="https://www.surveymonkey.com/results/SM-DJLBBRBS/" data-all="https://www.surveymonkey.com/results/SM-GYMGXQMS/">Living w/Bipolar</option>
				<option id="mhfa-facilitator" data-central="https://www.surveymonkey.com/results/SM-S7K7ZRBS/" data-eastern="https://www.surveymonkey.com/results/SM-MHV2XSGS/" data-southern="https://www.surveymonkey.com/results/SM-TPYTPRBS/" data-western="https://www.surveymonkey.com/results/SM-2SMN6RBS/" data-all="https://www.surveymonkey.com/results/SM-QLWDLWMS/">MHFA Facilitator</option>
				<option id="mhfa-adult" data-central="https://www.surveymonkey.com/results/SM-L26BPTBS/" data-eastern="https://www.surveymonkey.com/results/SM-QXNT7WGS/" data-southern="https://www.surveymonkey.com/results/SM-7QQF5TBS/" data-western="https://www.surveymonkey.com/results/SM-XC7YZTBS/" data-all="https://www.surveymonkey.com/results/SM-ZS8RLSMS/">MHFA Adult</option>
				<option id="mhfa-youth" data-central="https://www.surveymonkey.com/results/SM-HYWQLMBS/" data-eastern="https://www.surveymonkey.com/results/SM-V6J3NSGS/" data-southern="https://www.surveymonkey.com/results/SM-VTGSKMBS/" data-western="https://www.surveymonkey.com/results/SM-PVLX8MBS/" data-all="https://www.surveymonkey.com/results/SM-2PPWVSMS/">MHFA Youth</option>
				<option id="mts-facilitator" data-central="https://www.surveymonkey.com/results/SM-MP3RVMBS/" data-eastern="https://www.surveymonkey.com/results/SM-25KFHSGS/" data-southern="https://www.surveymonkey.com/results/SM-FHPM9MBS/" data-western="https://www.surveymonkey.com/results/SM-3FRB7MBS/" data-all="https://www.surveymonkey.com/results/SM-WFN37SMS/">MTS Facilitator</option>
				<option id="mts-educator" data-central="https://www.surveymonkey.com/results/SM-6G7GCMBS/" data-eastern="https://www.surveymonkey.com/results/SM-ZGYJGNGS/" data-southern="https://www.surveymonkey.com/results/SM-D6V8YMBS/" data-western="https://www.surveymonkey.com/results/SM-J3622MBS/" data-all="https://www.surveymonkey.com/results/SM-6KNGYSMS/">MTS Educator</option>
				<option id="mts-parent" data-central="https://www.surveymonkey.com/results/SM-H86CQMBS/" data-eastern="https://www.surveymonkey.com/results/SM-P8K5BNGS/" data-southern="https://www.surveymonkey.com/results/SM-MN9SWMBS/" data-western="https://www.surveymonkey.com/results/SM-KG2HQMBS/" data-all="https://www.surveymonkey.com/results/SM-8PQ8CSMS/">MTS Parent</option>
				<option id="mts-parent-spanish" data-central="https://www.surveymonkey.com/results/SM-7MLVSMBS/" data-eastern="https://www.surveymonkey.com/results/SM-WRVTF9BS/" data-southern="https://www.surveymonkey.com/results/SM-NGFCTMBS/" data-western="https://www.surveymonkey.com/results/SM-RZ68RMBS/" data-all="https://www.surveymonkey.com/results/SM-M6NSJSMS/">MTS Parent Spanish</option>
				<option id="mts-teen" data-central="https://www.surveymonkey.com/results/SM-B5FLGMBS/" data-eastern="https://www.surveymonkey.com/results/SM-9VWN39BS/" data-southern="https://www.surveymonkey.com/results/SM-5Y6LXMBS/" data-western="https://www.surveymonkey.com/results/SM-CN38NMBS/" data-all="https://www.surveymonkey.com/results/SM-CR5MQSMS/">MTS Teen</option>
				<option id="out-of-the-silence-physicians-suicide" data-central="https://www.surveymonkey.com/results/SM-C85RBMBS/" data-eastern="https://www.surveymonkey.com/results/SM-9CJZPCBS/" data-southern="https://www.surveymonkey.com/results/SM-KZ5D6MBS/" data-western="https://www.surveymonkey.com/results/SM-FQBSHMBS/" data-all="https://www.surveymonkey.com/results/SM-FPBTWSMS/">Out of the Silence: Physicians & Suicide</option>
				<option id="regional-lgbtq-conference" data-central="https://www.surveymonkey.com/results/SM-PSWWKXBS/" data-eastern="https://www.surveymonkey.com/results/SM-FR575CBS/" data-southern="https://www.surveymonkey.com/results/SM-GR2JZMBS/" data-western="https://www.surveymonkey.com/results/SM-V6VC5MBS/" data-all="https://www.surveymonkey.com/results/SM-DZ8KRSMS/">Regional LGBTQ Conference</option>
				<option id="research-connection-program" data-central="https://www.surveymonkey.com/results/SM-XLGT8XBS/" data-eastern="https://www.surveymonkey.com/results/SM-DMDXKJBS/" data-southern="https://www.surveymonkey.com/results/SM-SN9G7XBS/" data-western="https://www.surveymonkey.com/results/SM-ZMZ2VXBS/" data-all="https://www.surveymonkey.com/results/SM-6BL3MSMS/">Research Connection Program</option>
				<option id="safetalk" data-central="https://www.surveymonkey.com/results/SM-LRHL83BS/" data-eastern="https://www.surveymonkey.com/results/SM-CTJFLJBS/" data-southern="https://www.surveymonkey.com/results/SM-JG795FBS/" data-western="https://www.surveymonkey.com/results/SM-RMZWK3BS/" data-all="https://www.surveymonkey.com/results/SM-S35CXSMS/">safeTALK</option>
				<option id="safetalk-facilitator" data-central="https://www.surveymonkey.com/results/SM-8N9683BS/" data-eastern="https://www.surveymonkey.com/results/SM-L7FBVJBS/" data-southern="https://www.surveymonkey.com/results/SM-566SV3BS/" data-western="https://www.surveymonkey.com/results/SM-XTLTL3BS/" data-all="https://www.surveymonkey.com/results/SM-Z85J3SMS/">safeTALK Facilitator</option>
				<option id="struggling-in-silence-physicians-suicide" data-central="https://www.surveymonkey.com/results/SM-SVT393BS/" data-eastern="https://www.surveymonkey.com/results/SM-WRRG7JBS/" data-southern="https://www.surveymonkey.com/results/SM-7XC5V3BS/" data-western="https://www.surveymonkey.com/results/SM-VGFG73BS/" data-all="https://www.surveymonkey.com/results/SM-2WBCGSMS/">Struggling in Silence: Physicians & Suicide</option>
				<option id="suicide-bereavement-clinician-training" data-central="https://www.surveymonkey.com/results/SM-XZ2KY3BS/" data-eastern="https://www.surveymonkey.com/results/SM-BPC39JBS/" data-southern="https://www.surveymonkey.com/results/SM-P3DJJ3BS/" data-western="https://www.surveymonkey.com/results/SM-7KMW23BS/" data-all="https://www.surveymonkey.com/results/SM-WYMXBSMS/">Suicide Bereavement Clinician Training</option>
				<option id="suicide-loss-support-group-facilitator-adult" data-central="https://www.surveymonkey.com/results/SM-DR2BT3BS/" data-eastern="https://www.surveymonkey.com/results/SM-5CD7TJBS/" data-southern="https://www.surveymonkey.com/results/SM-5FJWW3BS/" data-western="https://www.surveymonkey.com/results/SM-2DM9R3BS/" data-all="https://www.surveymonkey.com/results/SM-9PP3HSMS/">Suicide Loss Support Group Facilitator - Adult</option>
				<option id="suicide-loss-support-group-facilitator-youth" data-central="https://www.surveymonkey.com/results/SM-JRGSLGBS/" data-eastern="https://www.surveymonkey.com/results/SM-H6NCNJBS/" data-southern="https://www.surveymonkey.com/results/SM-SS6T7GBS/" data-western="https://www.surveymonkey.com/results/SM-3PMWVGBS/" data-all="https://www.surveymonkey.com/results/SM-CBBHJ8XS/">Suicide Loss Support Group Facilitator - Youth</option>
				<option id="tsl-all-versions" data-central="https://www.surveymonkey.com/results/SM-TMQWYGBS/" data-eastern="https://www.surveymonkey.com/results/SM-J56GFJBS/" data-southern="https://www.surveymonkey.com/results/SM-WXYJ9GBS/" data-western="https://www.surveymonkey.com/results/SM-B5LCDGBS/" data-all="https://www.surveymonkey.com/results/SM-G52WTSMS/">TSL - All Versions</option>
				<option id="tsl-firearms" data-central="https://www.surveymonkey.com/results/SM-HX9SRGBS/" data-eastern="https://www.surveymonkey.com/results/SM-2YNJGJBS/" data-southern="https://www.surveymonkey.com/results/SM-ZCCSQW5S/" data-western="https://www.surveymonkey.com/results/SM-KCXZRGBS/" data-all="https://www.surveymonkey.com/results/SM-HJNTX8XS/">TSL Firearms</option>
				<option id="tsl-lgbt" data-central="https://www.surveymonkey.com/results/SM-HX9SRGBS/" data-eastern="https://www.surveymonkey.com/results/SM-2YNJGJBS/" data-southern="https://www.surveymonkey.com/results/SM-ZCCSQW5S/" data-western="https://www.surveymonkey.com/results/SM-KCXZRGBS/" data-all="https://www.surveymonkey.com/results/SM-HJNTX8XS/">TSL LGBT</option>
				<option id="tsl-seniors" data-central="https://www.surveymonkey.com/results/SM-ZVBQ3W5S/" data-eastern="https://www.surveymonkey.com/results/SM-8PZSBJBS/" data-southern="https://www.surveymonkey.com/results/SM-QLT5NW5S/" data-western="https://www.surveymonkey.com/results/SM-2RXJGW5S/" data-all="https://www.surveymonkey.com/results/SM-TVCSF8XS/">TSL Seniors</option>
				<option id="tsl-spanish" data-central="https://www.surveymonkey.com/results/SM-7PRR9S5S/" data-eastern="https://www.surveymonkey.com/results/SM-QDBWHJBS/" data-southern="https://www.surveymonkey.com/results/SM-CTZ59S5S/" data-western="https://www.surveymonkey.com/results/SM-9ZFGHW5S/" data-all="https://www.surveymonkey.com/results/SM-B6DHB8XS/">TSL Spanish</option>
				<option id="tsl-standard" data-central="https://www.surveymonkey.com/results/SM-H6DNGS5S/" data-eastern="https://www.surveymonkey.com/results/SM-T8M3PJBS/" data-southern="https://www.surveymonkey.com/results/SM-N87GYS5S/" data-western="https://www.surveymonkey.com/results/SM-JBBNCS5S/" data-all="https://www.surveymonkey.com/results/SM-TRTZH8XS/">TSL Standard</option>
				<option id="truth-about-suicide-college-film" data-central="https://www.surveymonkey.com/results/SM-9NPVNQBS/" data-eastern="https://www.surveymonkey.com/results/SM-HFG6VWGS/" data-southern="https://www.surveymonkey.com/results/SM-FWY6TQBS/" data-western="https://www.surveymonkey.com/results/SM-W8MKXQBS/" data-all="https://www.surveymonkey.com/results/SM-CWPLTJMS/">Truth About Suicide: College Film</option>
				<option id="other-information-booth-table-at-event" data-central="https://www.surveymonkey.com/results/SM-9NPVNQBS/" data-eastern="https://www.surveymonkey.com/results/SM-HFG6VWGS/" data-southern="https://www.surveymonkey.com/results/SM-FWY6TQBS/" data-western="https://www.surveymonkey.com/results/SM-W8MKXQBS/" data-all="https://www.surveymonkey.com/results/SM-CWPLTJMS/">Other: Information Booth/Table at Event</option>
				<option id="other-community-presenation" data-central="https://www.surveymonkey.com/results/SM-9NPVNQBS/" data-eastern="https://www.surveymonkey.com/results/SM-HFG6VWGS/" data-southern="https://www.surveymonkey.com/results/SM-FWY6TQBS/" data-western="https://www.surveymonkey.com/results/SM-W8MKXQBS/" data-all="https://www.surveymonkey.com/results/SM-CWPLTJMS/">Other: Community Presentation</option>
				<option id="other-suicide-prevention-gatekeeper-training" data-central="https://www.surveymonkey.com/results/SM-9NPVNQBS/" data-eastern="https://www.surveymonkey.com/results/SM-HFG6VWGS/" data-southern="https://www.surveymonkey.com/results/SM-FWY6TQBS/" data-western="https://www.surveymonkey.com/results/SM-W8MKXQBS/" data-all="https://www.surveymonkey.com/results/SM-CWPLTJMS/">Other: Suicide Prevention/Gatekeeper Training</option>
				<option id="other" data-central="https://www.surveymonkey.com/results/SM-9NPVNQBS/" data-eastern="https://www.surveymonkey.com/results/SM-HFG6VWGS/" data-southern="https://www.surveymonkey.com/results/SM-FWY6TQBS/" data-western="https://www.surveymonkey.com/results/SM-W8MKXQBS/" data-all="https://www.surveymonkey.com/results/SM-CWPLTJMS/">Other</option>
			</select>
			<div id="program_division_17" style="display:none">
			  <h4>Program Tracking Links by Division</h4>
			  <p></p>
			  <p></p>
			  <p></p>
			  <p></p>
			</div>

<!-- 2016 Links -->

<h3 style="background-color: #396dff; color: #fff; padding-left: 1rem">2016</h3>
<h4>Choose Your Chapter</h4>
<select name="chapter_select_16" id="chapter_select_16" data-selected="no">   
  <option id="not-selected"></option>
	<option id="alabama" data-url="https://www.surveymonkey.com/results/SM-DLKG2HVN/" data-division="Southern">Alabama</option>
	<option id="alaska" data-url="https://www.surveymonkey.com/results/SM-9XMKRHVN/" data-division="Western">Alaska</option>
	<option id="arizona" data-url="https://www.surveymonkey.com/results/SM-HX5RXHVN/" data-division="Western">Arizona</option>
	<option id="arkansas" data-url="https://www.surveymonkey.com/results/SM-CJNK76VN/" data-division="Central">Arkansas</option>
	<option id="capital-region-new-york" data-url="https://www.surveymonkey.com/results/SM-3D7MNK7N/" data-division="Eastern">Capital Region New York</option>
	<option id="central-florida" data-url="https://www.surveymonkey.com/results/SM-R96YWZVN/" data-division="Southern">Central Florida</option>
	<option id="central-new-jersey" data-url="https://www.surveymonkey.com/results/SM-8JVPTK7N/" data-division="Eastern">Central New Jersey</option>
	<option id="central-new-york" data-url="https://www.surveymonkey.com/results/SM-W5BS3K7N/" data-division="Eastern">Central New York</option>
	<option id="central-ohio" data-url="https://www.surveymonkey.com/results/SM-XSLXRW9N/" data-division="Central">Central Ohio</option>
	<option id="central-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-6RPXGW9N/" data-division="Eastern">Central Pennsylvania</option>
	<option id="central-texas" data-url="https://www.surveymonkey.com/results/SM-Z3PNFS9N/" data-division="Central">Central Texas</option>
	<option id="central-valley-california" data-url="https://www.surveymonkey.com/results/SM-396F5PVN/" data-division="Western">Central Valley California</option>
	<option id="cincinnati" data-url="https://www.surveymonkey.com/results/SM-G2PPTW9N/" data-division="Central">Cincinnati</option>
	<option id="colorado" data-url="https://www.surveymonkey.com/results/SM-53QJDZVN/" data-division="Western">Colorado</option>
	<option id="delaware" data-url="https://www.surveymonkey.com/results/SM-h3PTCZVN/" data-division="Eastern">Delaware</option>
	<option id="eastern-missouri" data-url="https://www.surveymonkey.com/results/SM-77MR7K7N/" data-division="Central">Eastern Missouri</option>
	<option id="florida-panhandle" data-url="https://www.surveymonkey.com/results/SM-SCYLSZVN/" data-division="Southern">Florida Panhandle</option>
	<option id="florida-southeast" data-url="https://www.surveymonkey.com/results/SM-9LZ5RZVN/" data-division="Southern">Florida Southeast</option>
	<option id="florida-southwest" data-url="https://www.surveymonkey.com/results/SM-LRKQXZVN/" data-division="Southern">Florida Southwest</option>
	<option id="georgia" data-url="https://www.surveymonkey.com/results/SM-R5CDGZVN/" data-division="Southern">Georgia</option>
	<option id="greater-boston" data-url="https://www.surveymonkey.com/results/SM-LNH765VN/" data-division="Eastern">Greater Boston</option>
	<option id="greater-kansas" data-url="https://www.surveymonkey.com/results/SM-3LCBJ5VN/" data-division="Central">Greater Kansas</option>
	<option id="greater-lehigh-valley-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-XYTTHW9N/" data-division="Eastern">Greater Lehigh Valley Pennsylvania</option>
	<option id="greater-los-angeles" data-url="https://www.surveymonkey.com/results/SM-KN69Q6VN/" data-division="Western">Greater Los Angeles</option>
	<option id="greater-mid-missouri" data-url="https://www.surveymonkey.com/results/SM-RRQS9K7N/" data-division="Central">Greater Mid-Missouri</option>
	<option id="greater-minnesota" data-url="https://www.surveymonkey.com/results/SM-Y3SVLK7N/" data-division="Central">Greater Minnesota</option>
	<option id="greater-northeast-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-7CB5PW9N/" data-division="Eastern">Greater Northeast Pennsylvania</option>
	<option id="greater-philadelphia" data-url="https://www.surveymonkey.com/results/SM-GPGG9S9N/" data-division="Eastern">Greater Philadelphia</option>
	<option id="greater-sacramento" data-url="https://www.surveymonkey.com/results/SM-TF7NW6VN/" data-division="Western">Greater Sacramento</option>
	<option id="greater-san-francisco" data-url="https://www.surveymonkey.com/results/SM-68KXS6VN/" data-division="Western">Greater San Francisco</option>
	<option id="hawaii" data-url="https://www.surveymonkey.com/results/SM-RGB7L5VN/" data-division="Western">Hawaii</option>
	<option id="hudson-valley" data-url="https://www.surveymonkey.com/results/SM-9MVXGK7N/" data-division="Eastern">Hudson Valley</option>
	<option id="idaho" data-url="https://www.surveymonkey.com/results/SM-6JRBD5VN/" data-division="Western">Idaho</option>
	<option id="illinois" data-url="https://www.surveymonkey.com/results/SM-8D2L25VN/" data-division="Central">Illinois</option>
	<option id="indiana" data-url="https://www.surveymonkey.com/results/SM-KJNP25VN/" data-division="Central">Indiana</option>
	<option id="inland-empire-and-desert-cities" data-url="https://www.surveymonkey.com/results/SM-YXR556VN/" data-division="Western">Inland Empire and Desert Cities</option>
	<option id="iowa" data-url="https://www.surveymonkey.com/results/SM-J3SHC5VN/" data-division="Central">Iowa</option>
	<option id="kentucky" data-url="https://www.surveymonkey.com/results/SM-NJ8QW5VN/" data-division="Eastern">Kentucky</option>
	<option id="louisiana" data-url="https://www.surveymonkey.com/results/SM-KGPCS5VN/" data-division="Southern">Louisiana</option>
	<option id="maine" data-url="https://www.surveymonkey.com/results/SM-MNG5S5VN/" data-division="Eastern">Maine</option>
	<option id="maryland" data-url="https://www.surveymonkey.com/results/SM-8KGKX5VN/" data-division="Eastern">Maryland</option>
	<option id="memphis-mid-south" data-url="https://www.surveymonkey.com/results/SM-PXJBMS9N/" data-division="Southern">Memphis/Mid-South</option>
	<option id="metro-detroit-ann-arbor" data-url="https://www.surveymonkey.com/results/SM-J2Q355VN/" data-division="Central">Metro Detroit/Ann Arbor</option>
	<option id="middle-tennessee" data-url="https://www.surveymonkey.com/results/SM-B6LQNS9N/" data-division="Southern">Middle Tennessee</option>
	<option id="mississippi" data-url="https://www.surveymonkey.com/results/SM-MDFPVK7N/" data-division="Southern">Mississippi</option>
	<option id="montana" data-url="https://www.surveymonkey.com/results/SM-XSTTYK7N/" data-division="Western">Montana</option>
	<option id="national-capital-area" data-url="https://www.surveymonkey.com/results/SM-YQ562ZVN/" data-division="Eastern">National Capital Area</option>
	<option id="nebraska" data-url="https://www.surveymonkey.com/results/SM-MK7HWK7N/" data-division="Central">Nebraska</option>
	<option id="nevada" data-url="https://www.surveymonkey.com/results/SM-2GB3RK7N/" data-division="Western">Nevada</option>
	<option id="new-hampshire" data-url="https://www.surveymonkey.com/results/SM-MXZ8RN2G/" data-division="Eastern">New Hampshire</option>
	<option id="new-mexico" data-url="https://www.surveymonkey.com/results/SM-GLBGXK7N/" data-division="Western">New Mexico</option>
	<option id="new-york-city" data-url="https://www.surveymonkey.com/results/SM-3XJ8HK7N/" data-division="Eastern">New York City</option>
	<option id="new-york-long-island" data-url="https://www.surveymonkey.com/results/SM-62BRHK7N/" data-division="Eastern">New York Long Island</option>
	<option id="north-carolina" data-url="https://www.surveymonkey.com/results/SM-W9JTQK7N/" data-division="Southern">North Carolina</option>
	<option id="north-dakota" data-url="https://www.surveymonkey.com/results/SM-CBVJ5K7N/" data-division="Central">North Dakota</option>
	<option id="north-florida" data-url="https://www.surveymonkey.com/results/SM-DCBNNZVN/" data-division="Southern">North Florida</option>
	<option id="north-texas" data-url="https://www.surveymonkey.com/results/SM-CZS9RR9N/" data-division="Central">North Texas</option>
	<option id="northern-connecticut" data-url="https://www.surveymonkey.com/results/SM-3C3SYZVN/" data-division="Eastern">Northern Connecticut</option>
	<option id="northern-new-jersey" data-url="https://www.surveymonkey.com/results/SM-KRSNMK7N/" data-division="Eastern">Northern New Jersey</option>
	<option id="northern-ohio" data-url="https://www.surveymonkey.com/results/SM-VFFHMW9N/" data-division="Central">Northern Ohio</option>
	<option id="oklahoma" data-url="https://www.surveymonkey.com/results/SM-S8TBXW9N/" data-division="Central">Oklahoma</option>
	<option id="orange-county" data-url="https://www.surveymonkey.com/results/SM-DGPGKZVN/" data-division="Western">Orange County</option>
	<option id="oregon" data-url="https://www.surveymonkey.com/results/SM-9B93FW9N/" data-division="Western">Oregon</option>
	<option id="rhode-island" data-url="https://www.surveymonkey.com/results/SM-RP2JQS9N/" data-division="Eastern">Rhode Island</option>
	<option id="san-diego" data-url="https://www.surveymonkey.com/results/SM-QW2Y8ZVN/" data-division="Western">San Diego</option>
	<option id="south-carolina" data-url="https://www.surveymonkey.com/results/SM-XHWWSS9N/" data-division="Southern">South Carolina</option>
	<option id="south-central-new-york" data-url="https://www.surveymonkey.com/results/SM-SDF7PK7N/" data-division="Eastern">South Central New York</option>
	<option id="south-central-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-CBNQDS9N/" data-division="Eastern">South Central Pennsylvania</option>
	<option id="south-dakota" data-url="https://www.surveymonkey.com/results/SM-ZCN9TS9N/" data-division="Central">South Dakota</option>
	<option id="south-texas" data-url="https://www.surveymonkey.com/results/SM-X5YDGR9N/" data-division="Central">South Texas</option>
	<option id="southeast-minnesota" data-url="https://www.surveymonkey.com/results/SM-QTYQVK7N/" data-division="Central">Southeast Minnesota</option>
	<option id="southeast-texas" data-url="https://www.surveymonkey.com/results/SM-LTB2TR9N/" data-division="Central">Southeast Texas</option>
	<option id="southern-connecticut" data-url="https://www.surveymonkey.com/results/SM-FSL22ZVN/" data-division="Eastern">Southern Connecticut</option>
	<option id="tampa-bay" data-url="https://www.surveymonkey.com/results/SM-MFXXFZVN/" data-division="Southern">Tampa Bay</option>
	<option id="utah" data-url="https://www.surveymonkey.com/results/SM-ZSS5BR9N/" data-division="Western">Utah</option>
	<option id="vermont" data-url="https://www.surveymonkey.com/results/SM-FLBLPR9N/" data-division="Eastern">Vermont</option>
	<option id="virginia" data-url="https://www.surveymonkey.com/results/SM-ZYZ6VT9N/" data-division="Eastern">Virginia</option>
	<option id="washington" data-url="https://www.surveymonkey.com/results/SM-6Q237T9N/" data-division="Western">Washington</option>
	<option id="west-virginia" data-url="https://www.surveymonkey.com/results/SM-PTNR9T9N/" data-division="Eastern">West Virginia</option>
	<option id="westchester" data-url="https://www.surveymonkey.com/results/SM-95CLZK7N/" data-division="Eastern">Westchester</option>
	<option id="western-massachusetts" data-url="https://www.surveymonkey.com/results/SM-KZTGZ5VN/" data-division="Eastern">Western Massachusetts</option>
	<option id="western-new-york" data-url="https://www.surveymonkey.com/results/SM-87MBPK7N/" data-division="Eastern">Western New York</option>
	<option id="western-pennsylvania" data-url="https://www.surveymonkey.com/results/SM-H5YN2S9N/" data-division="Eastern">Western Pennsylvania</option>
	<option id="wisconsin" data-url="https://www.surveymonkey.com/results/SM-X75XDT9N/" data-division="Central">Wisconsin</option>
	<option id="wyoming" data-url="https://www.surveymonkey.com/results/SM-BHJVYT9N/" data-division="Western">Wyoming</option>
</select> 
<div id="chapter_program_16" style="display:none">
  <h4>Chapter Program Tracking Links</h4>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
</div>
<h4>Choose Your Program</h4>
<select name="program_select_16" id="program_select_16">
  <option id="not-selected"></option>
  <option id="abft" data-central="https://www.surveymonkey.com/results/SM-JGJ3KQBS/" data-eastern="https://www.surveymonkey.com/results/SM-V5LKLWGS/" data-southern="https://www.surveymonkey.com/results/SM-RM7KLQBS/" data-western="https://www.surveymonkey.com/results/SM-PZ5ZLQBS/" data-all="https://www.surveymonkey.com/results/SM-8QLL2JMS/">ABFT</option>
  <option id="asist" data-central="https://www.surveymonkey.com/results/SM-SVGYYQBS/" data-eastern="https://www.surveymonkey.com/results/SM-NXV5ZQGS/" data-southern="https://www.surveymonkey.com/results/SM-R5JSDQBS/" data-western="https://www.surveymonkey.com/results/SM-MFNP7QBS/" data-all="https://www.surveymonkey.com/results/SM-WKBFWJMS/">ASIST</option>
  <option id="asist-facilitator" data-central="https://www.surveymonkey.com/results/SM-WNCTWQBS/" data-eastern="https://www.surveymonkey.com/results/SM-FP5XLWGS/" data-southern="https://www.surveymonkey.com/results/SM-7QKSRQBS/" data-western="https://www.surveymonkey.com/results/SM-BK9RSQBS/" data-all="https://www.surveymonkey.com/results/SM-9XLHSJMS/">ASIST Facilitator</option>
  <option id="college-film:-truth-about-suicide" data-central="https://www.surveymonkey.com/results/SM-9NPVNQBS/" data-eastern="https://www.surveymonkey.com/results/SM-HFG6VWGS/" data-southern="https://www.surveymonkey.com/results/SM-FWY6TQBS/" data-western="https://www.surveymonkey.com/results/SM-W8MKXQBS/" data-all="https://www.surveymonkey.com/results/SM-CWPLTJMS/">College Film: Truth About Suicide</option>
  <option id="depression-&-bipolar-awareness" data-central="https://www.surveymonkey.com/results/SM-D63BGQBS/" data-eastern="https://www.surveymonkey.com/results/SM-29M3RSGS/" data-southern="https://www.surveymonkey.com/results/SM-YHSRXRBS/" data-western="https://www.surveymonkey.com/results/SM-GZ5DHQBS/" data-all="https://www.surveymonkey.com/results/SM-89TKXJMS/">Depression & Bipolar Awareness</option>
  <option id="isosl-day" data-central="https://www.surveymonkey.com/results/SM-VQZF3RBS/" data-eastern="https://www.surveymonkey.com/results/SM-YCZRTSGS/" data-southern="https://www.surveymonkey.com/results/SM-KWBXNRBS/" data-western="https://www.surveymonkey.com/results/SM-JBXMFRBS/" data-all="https://www.surveymonkey.com/results/SM-JF3GNJMS/">ISOSL Day</option>
  <option id="living-w−bipolar" data-central="https://www.surveymonkey.com/results/SM-YD35GRBS/" data-eastern="https://www.surveymonkey.com/results/SM-KZDNMSGS/" data-southern="https://www.surveymonkey.com/results/SM-M363HRBS/" data-western="https://www.surveymonkey.com/results/SM-DJLBBRBS/" data-all="https://www.surveymonkey.com/results/SM-GYMGXQMS/">Living w/Bipolar</option>
  <option id="mhfa-facilitator" data-central="https://www.surveymonkey.com/results/SM-S7K7ZRBS/" data-eastern="https://www.surveymonkey.com/results/SM-MHV2XSGS/" data-southern="https://www.surveymonkey.com/results/SM-TPYTPRBS/" data-western="https://www.surveymonkey.com/results/SM-2SMN6RBS/" data-all="https://www.surveymonkey.com/results/SM-QLWDLWMS/">MHFA Facilitator</option>
  <option id="mhfa-adult" data-central="https://www.surveymonkey.com/results/SM-L26BPTBS/" data-eastern="https://www.surveymonkey.com/results/SM-QXNT7WGS/" data-southern="https://www.surveymonkey.com/results/SM-7QQF5TBS/" data-western="https://www.surveymonkey.com/results/SM-XC7YZTBS/" data-all="https://www.surveymonkey.com/results/SM-ZS8RLSMS/">MHFA Adult</option>
  <option id="mhfa-youth" data-central="https://www.surveymonkey.com/results/SM-HYWQLMBS/" data-eastern="https://www.surveymonkey.com/results/SM-V6J3NSGS/" data-southern="https://www.surveymonkey.com/results/SM-VTGSKMBS/" data-western="https://www.surveymonkey.com/results/SM-PVLX8MBS/" data-all="https://www.surveymonkey.com/results/SM-2PPWVSMS/">MHFA Youth</option>
  <option id="mts-facilitator" data-central="https://www.surveymonkey.com/results/SM-MP3RVMBS/" data-eastern="https://www.surveymonkey.com/results/SM-25KFHSGS/" data-southern="https://www.surveymonkey.com/results/SM-FHPM9MBS/" data-western="https://www.surveymonkey.com/results/SM-3FRB7MBS/" data-all="https://www.surveymonkey.com/results/SM-WFN37SMS/">MTS Facilitator</option>
  <option id="mts-educator" data-central="https://www.surveymonkey.com/results/SM-6G7GCMBS/" data-eastern="https://www.surveymonkey.com/results/SM-ZGYJGNGS/" data-southern="https://www.surveymonkey.com/results/SM-D6V8YMBS/" data-western="https://www.surveymonkey.com/results/SM-J3622MBS/" data-all="https://www.surveymonkey.com/results/SM-6KNGYSMS/">MTS Educator</option>
  <option id="mts-parent" data-central="https://www.surveymonkey.com/results/SM-H86CQMBS/" data-eastern="https://www.surveymonkey.com/results/SM-P8K5BNGS/" data-southern="https://www.surveymonkey.com/results/SM-MN9SWMBS/" data-western="https://www.surveymonkey.com/results/SM-KG2HQMBS/" data-all="https://www.surveymonkey.com/results/SM-8PQ8CSMS/">MTS Parent</option>
  <option id="mts-parent-spanish" data-central="https://www.surveymonkey.com/results/SM-7MLVSMBS/" data-eastern="https://www.surveymonkey.com/results/SM-WRVTF9BS/" data-southern="https://www.surveymonkey.com/results/SM-NGFCTMBS/" data-western="https://www.surveymonkey.com/results/SM-RZ68RMBS/" data-all="https://www.surveymonkey.com/results/SM-M6NSJSMS/">MTS Parent Spanish</option>
  <option id="mts-teen" data-central="https://www.surveymonkey.com/results/SM-B5FLGMBS/" data-eastern="https://www.surveymonkey.com/results/SM-9VWN39BS/" data-southern="https://www.surveymonkey.com/results/SM-5Y6LXMBS/" data-western="https://www.surveymonkey.com/results/SM-CN38NMBS/" data-all="https://www.surveymonkey.com/results/SM-CR5MQSMS/">MTS Teen</option>
  <option id="out-of-the-silence:-physicians-&-suicide" data-central="https://www.surveymonkey.com/results/SM-C85RBMBS/" data-eastern="https://www.surveymonkey.com/results/SM-9CJZPCBS/" data-southern="https://www.surveymonkey.com/results/SM-KZ5D6MBS/" data-western="https://www.surveymonkey.com/results/SM-FQBSHMBS/" data-all="https://www.surveymonkey.com/results/SM-FPBTWSMS/">Out of the Silence: Physicians & Suicide</option>
  <option id="regional-lgbtq-conference" data-central="https://www.surveymonkey.com/results/SM-PSWWKXBS/" data-eastern="https://www.surveymonkey.com/results/SM-FR575CBS/" data-southern="https://www.surveymonkey.com/results/SM-GR2JZMBS/" data-western="https://www.surveymonkey.com/results/SM-V6VC5MBS/" data-all="https://www.surveymonkey.com/results/SM-DZ8KRSMS/">Regional LGBTQ Conference</option>
  <option id="research-connection-program" data-central="https://www.surveymonkey.com/results/SM-XLGT8XBS/" data-eastern="https://www.surveymonkey.com/results/SM-DMDXKJBS/" data-southern="https://www.surveymonkey.com/results/SM-SN9G7XBS/" data-western="https://www.surveymonkey.com/results/SM-ZMZ2VXBS/" data-all="https://www.surveymonkey.com/results/SM-6BL3MSMS/">Research Connection Program</option>
  <option id="safetalk" data-central="https://www.surveymonkey.com/results/SM-LRHL83BS/" data-eastern="https://www.surveymonkey.com/results/SM-CTJFLJBS/" data-southern="https://www.surveymonkey.com/results/SM-JG795FBS/" data-western="https://www.surveymonkey.com/results/SM-RMZWK3BS/" data-all="https://www.surveymonkey.com/results/SM-S35CXSMS/">safeTALK</option>
  <option id="safetalk-facilitator" data-central="https://www.surveymonkey.com/results/SM-8N9683BS/" data-eastern="https://www.surveymonkey.com/results/SM-L7FBVJBS/" data-southern="https://www.surveymonkey.com/results/SM-566SV3BS/" data-western="https://www.surveymonkey.com/results/SM-XTLTL3BS/" data-all="https://www.surveymonkey.com/results/SM-Z85J3SMS/">safeTALK Facilitator</option>
  <option id="struggling-in-silence:-physicians-&-suicide" data-central="https://www.surveymonkey.com/results/SM-SVT393BS/" data-eastern="https://www.surveymonkey.com/results/SM-WRRG7JBS/" data-southern="https://www.surveymonkey.com/results/SM-7XC5V3BS/" data-western="https://www.surveymonkey.com/results/SM-VGFG73BS/" data-all="https://www.surveymonkey.com/results/SM-2WBCGSMS/">Struggling in Silence: Physicians & Suicide</option>
  <option id="suicide-bereavement-clinician-training" data-central="https://www.surveymonkey.com/results/SM-XZ2KY3BS/" data-eastern="https://www.surveymonkey.com/results/SM-BPC39JBS/" data-southern="https://www.surveymonkey.com/results/SM-P3DJJ3BS/" data-western="https://www.surveymonkey.com/results/SM-7KMW23BS/" data-all="https://www.surveymonkey.com/results/SM-WYMXBSMS/">Suicide Bereavement Clinician Training</option>
  <option id="suicide-loss-support-group-facilitator---adult" data-central="https://www.surveymonkey.com/results/SM-DR2BT3BS/" data-eastern="https://www.surveymonkey.com/results/SM-5CD7TJBS/" data-southern="https://www.surveymonkey.com/results/SM-5FJWW3BS/" data-western="https://www.surveymonkey.com/results/SM-2DM9R3BS/" data-all="https://www.surveymonkey.com/results/SM-9PP3HSMS/">Suicide Loss Support Group Facilitator - Adult</option>
  <option id="suicide-loss-support-group-facilitator---youth" data-central="https://www.surveymonkey.com/results/SM-JRGSLGBS/" data-eastern="https://www.surveymonkey.com/results/SM-H6NCNJBS/" data-southern="https://www.surveymonkey.com/results/SM-SS6T7GBS/" data-western="https://www.surveymonkey.com/results/SM-3PMWVGBS/" data-all="https://www.surveymonkey.com/results/SM-CBBHJ8XS/">Suicide Loss Support Group Facilitator - Youth</option>
  <option id="tsl---all-versions" data-central="https://www.surveymonkey.com/results/SM-TMQWYGBS/" data-eastern="https://www.surveymonkey.com/results/SM-J56GFJBS/" data-southern="https://www.surveymonkey.com/results/SM-WXYJ9GBS/" data-western="https://www.surveymonkey.com/results/SM-B5LCDGBS/" data-all="https://www.surveymonkey.com/results/SM-G52WTSMS/">TSL - All Versions</option>
  <option id="tsl-lgbt" data-central="https://www.surveymonkey.com/results/SM-HX9SRGBS/" data-eastern="https://www.surveymonkey.com/results/SM-2YNJGJBS/" data-southern="https://www.surveymonkey.com/results/SM-ZCCSQW5S/" data-western="https://www.surveymonkey.com/results/SM-KCXZRGBS/" data-all="https://www.surveymonkey.com/results/SM-HJNTX8XS/">TSL LGBT</option>
  <option id="tsl-seniors" data-central="https://www.surveymonkey.com/results/SM-ZVBQ3W5S/" data-eastern="https://www.surveymonkey.com/results/SM-8PZSBJBS/" data-southern="https://www.surveymonkey.com/results/SM-QLT5NW5S/" data-western="https://www.surveymonkey.com/results/SM-2RXJGW5S/" data-all="https://www.surveymonkey.com/results/SM-TVCSF8XS/">TSL Seniors</option>
  <option id="tsl-spanish" data-central="https://www.surveymonkey.com/results/SM-7PRR9S5S/" data-eastern="https://www.surveymonkey.com/results/SM-QDBWHJBS/" data-southern="https://www.surveymonkey.com/results/SM-CTZ59S5S/" data-western="https://www.surveymonkey.com/results/SM-9ZFGHW5S/" data-all="https://www.surveymonkey.com/results/SM-B6DHB8XS/">TSL Spanish</option>
  <option id="tsl-standard" data-central="https://www.surveymonkey.com/results/SM-H6DNGS5S/" data-eastern="https://www.surveymonkey.com/results/SM-T8M3PJBS/" data-southern="https://www.surveymonkey.com/results/SM-N87GYS5S/" data-western="https://www.surveymonkey.com/results/SM-JBBNCS5S/" data-all="https://www.surveymonkey.com/results/SM-TRTZH8XS/">TSL Standard</option>
</select>
<div id="program_division_16" style="display:none">
  <h4>Program Tracking Links by Division</h4>
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
		$('#chapter_select_17, #chapter_select_16').on('change', function(e){
			var $chapter = $(this);
			var $id = $(this).attr('id');
			if($(this).attr('id') !== 'not-selected') {
  			$chapter.data('selected','yes');
  			var url = $chapter.find('option:selected').data('url');
  			var division = $chapter.find('option:selected').data('division');
  			var division_url = '';
  			if($id === 'chapter_select_17') {
  				var chapter_program = 'chapter_program_17';
  				var all_url = 'https://www.surveymonkey.com/results/SM-VG9L7CW3/';
	  			switch(division) {
	  		    case 'Central':
	  		      division_url = 'https://www.surveymonkey.com/results/SM-S2QZWMJ3/';
	  		      break;
	  			  case 'Eastern':
	  			    division_url = 'https://www.surveymonkey.com/results/SM-8D2MSMJ3/';
	  			    break;
	  		    case 'Southern':
	  		      division_url = 'https://www.surveymonkey.com/results/SM-HND6SMJ3/';
	  		      break;
	  	      case 'Western':
	  	        division_url = 'https://www.surveymonkey.com/results/SM-QMVTRMJ3/';
	  		      break;
	  			}
  			} else if($id === 'chapter_select_16') {
  				var chapter_program = 'chapter_program_16';
	  			var all_url = 'https://www.surveymonkey.com/results/SM-3KWWZHSS/';
	  			var uni_url = 'https://www.surveymonkey.com/results/SM-S25CGJFS/';
	  			switch(division) {
	  		    case 'Central':
	  		      division_url = 'https://www.surveymonkey.com/results/SM-65J6MCMS/';
	  		      break;
	  			  case 'Eastern':
	  			    division_url = 'https://www.surveymonkey.com/results/SM-27PVNHSS/';
	  			    break;
	  		    case 'Southern':
	  		      division_url = 'https://www.surveymonkey.com/results/SM-9K2WK9XS/';
	  		      break;
	  	      case 'Western':
	  	        division_url = 'https://www.surveymonkey.com/results/SM-5FN2TCMS/';
	  		      break;
	  			}
	  		}
  			$('#' + chapter_program).attr('style','display:block');
  			$('#' + chapter_program + ' > p:nth-of-type(1)').html($chapter.find('option:selected').text() + ' &mdash; <a href="' + url + '" target="_blank">' + url + '</a>');
  			$('#' + chapter_program + ' > p:nth-of-type(2)').html(division + ' &mdash; <a href="' + division_url + '" target="_blank">' + division_url + '</a>');
  			$('#' + chapter_program + ' > p:nth-of-type(3)').html('All Chapters &mdash; <a href="' + all_url + '" target="_blank">' + all_url + '</a>');
  			if($id === 'chapter_select_16') {
  				$('#' + chapter_program + ' > p:nth-of-type(4)').html('Universal Report &mdash; <a href="' + uni_url + '" target="_blank">' + uni_url + '</a>');
  			}
			} else {
  			$('#chapter_program_17, #chapter_program_16').attr('style','display:none');
			}
		});
		$('#program_select_17, #program_select_16').on('change', function(e){
			var $program = $(this);
			var $id = $(this).attr('id');
			if($(this).attr('id') !== 'not-selected') {
			  var central   = $program.find('option:selected').data('central');
			  var eastern   = $program.find('option:selected').data('eastern');
			  var southern  = $program.find('option:selected').data('southern');
			  var western   = $program.find('option:selected').data('western');
			  var all       = $program.find('option:selected').data('all');
			  if($id === 'program_select_17') {
			  	var program_division = 'program_division_17';
			  } else if($id === 'program_select_16') {
			  	var program_division = 'program_division_16';
			  }
  			$('#' + program_division).attr('style','display:block');
		    $('#' + program_division + ' > p:nth-of-type(1)').html('Central Division &mdash; <a href="' + central + '" target="_blank">' + central + '</a>');
  			$('#' + program_division + ' > p:nth-of-type(2)').html('Eastern Division &mdash; <a href="' + eastern + '" target="_blank">' + eastern + '</a>');
  			$('#' + program_division + ' > p:nth-of-type(3)').html('Southern Division &mdash; <a href="' + southern + '" target="_blank">' + southern + '</a>');
  			$('#' + program_division + ' > p:nth-of-type(4)').html('Western Division &mdash; <a href="' + western + '" target="_blank">' + western + '</a>');
  			$('#' + program_division + ' > p:nth-of-type(4)').html('All Chapters &mdash; <a href="' + all + '" target="_blank">' + all + '</a>');
		  } else {
		    $('#program_division17, #program_division_16').attr('style','display:none');
		  }
		});
	});
</script>

<?php endif; ?>

<?php get_footer(); ?>