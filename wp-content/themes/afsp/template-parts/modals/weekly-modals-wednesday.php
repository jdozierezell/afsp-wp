<div class="modal__overlay"></div>

				<?php $overnightDrop = new DateTime('2019-06-19');
				
				if($today <= $overnightDrop && $this_week % 2 == 0) :
					$wednesdayModal = 'overnightWalk';
					$link = 'http://www.theovernight.org/index.cfm?fuseaction=cms.page&id=1022&referrer=WalkWednesday';
					$buttonText = 'Register Today';
					$buttonClass = 'regular-button';
				elseif($today <= $campusDrop && $this_week % 2 == 1) :
					$wednesdayModal = 'campusWalks';
					$link = 'http://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.eventList&eventGroupID=9AA19459-C880-0E26-61312B15147B2E0A&state=';
					$buttonText = 'Find Your Walk';
					$buttonClass = 'regular-button';
				else :
					$wednesdayModal = 'communityWalks';
					$link = 'http://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.eventList&eventType=P,T&eventGroupID=9AA117B3-F522-BB6D-359D1AA2D75A7958'; 
					$buttonText = 'Find Your Walk';
					$buttonClass = 'regular-button';
				endif; ?>

<div class="modal modal--<?php echo $wednesdayModal; ?>">
	<svg class="modal__close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 99.082 100" enable-background="new 0 0 99.082 100" xml:space="preserve"><g><g><path d="M49.54,0C22.198-0.019,0.027,22.375,0,49.973C0.027,77.618,22.198,100.01,49.54,100    c27.352,0.01,49.521-22.382,49.542-50.027C99.062,22.375,76.892-0.019,49.54,0z M49.54,88.477    c-21.037,0-38.095-17.225-38.077-38.504C11.442,28.741,28.503,11.51,49.54,11.521c21.047-0.01,38.107,17.221,38.131,38.452    C87.647,71.252,70.587,88.477,49.54,88.477z"></path></g><polygon points="71.57,37.466 62.073,27.97 49.54,40.504 37.006,27.97 27.509,37.466 40.047,50.007 27.509,62.534 37.006,72.03    49.54,59.496 62.073,72.03 71.57,62.534 59.036,50.007  "></polygon></g></svg>
	<button id="<?php echo $buttonClass; ?>" class="button">Find Your Walk</button>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		var regButton = $('#regular-button');
		var dropButton = $('#dropdown-button');
		var drop = $('#state_dropdown');
		var select = $('#state_dropdown li');
		var link = '<?php echo $link; ?>';
		$('.modal__overlay, .modal__close, .modal').attr('style', 'display: block');
		$('body').attr('style', 'overflow: hidden');
		drop.attr('style', 'display: none');
		regButton.on('click', function(){
			window.open(link);
		});
		dropButton.on('click', function(){
			drop.slideToggle(200);
		});
		select.on('click', function(){
			window.open(link + $(this).data('state'), '_blank');
		});
		$('.modal__overlay, .modal__close').on('click', function(){
			$('.modal__overlay, .modal__close, .modal').attr('style', 'display: none');
			$('body').attr('style', 'overflow: scroll');
		});
	});
</script>