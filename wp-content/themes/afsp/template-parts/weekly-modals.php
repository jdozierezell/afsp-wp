<div class="modal__overlay"></div>
<div class="modal modal--communityWalks">
	<svg class="modal__close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 99.082 100" enable-background="new 0 0 99.082 100" xml:space="preserve"><g><g><path d="M49.54,0C22.198-0.019,0.027,22.375,0,49.973C0.027,77.618,22.198,100.01,49.54,100    c27.352,0.01,49.521-22.382,49.542-50.027C99.062,22.375,76.892-0.019,49.54,0z M49.54,88.477    c-21.037,0-38.095-17.225-38.077-38.504C11.442,28.741,28.503,11.51,49.54,11.521c21.047-0.01,38.107,17.221,38.131,38.452    C87.647,71.252,70.587,88.477,49.54,88.477z"></path></g><polygon points="71.57,37.466 62.073,27.97 49.54,40.504 37.006,27.97 27.509,37.466 40.047,50.007 27.509,62.534 37.006,72.03    49.54,59.496 62.073,72.03 71.57,62.534 59.036,50.007  "></polygon></g></svg>
	<div>
		<h2>Find a Walk in Your State Today</h2>
		<button id="dropdown-button" class="button">Select Your State</button>
		<ul id="state_dropdown">
			<li data-state="AL">Alabama</li>
			<li data-state="AK">Alaska</li>
			<li data-state="AZ">Arizona</li>
			<li data-state="AR">Arkansas</li>
			<li data-state="CA">California</li>
			<li data-state="CO">Colorado</li>
			<li data-state="CT">Connecticut</li>
			<li data-state="DE">Delaware</li>
			<li data-state="DC">District Of Columbia</li>
			<li data-state="FL">Florida</li>
			<li data-state="GA">Georgia</li>
			<li data-state="HI">Hawaii</li>
			<li data-state="ID">Idaho</li>
			<li data-state="IL">Illinois</li>
			<li data-state="IN">Indiana</li>
			<li data-state="IA">Iowa</li>
			<li data-state="KS">Kansas</li>
			<li data-state="KY">Kentucky</li>
			<li data-state="LA">Louisiana</li>
			<li data-state="ME">Maine</li>
			<li data-state="MD">Maryland</li>
			<li data-state="MA">Massachusetts</li>
			<li data-state="MI">Michigan</li>
			<li data-state="MN">Minnesota</li>
			<li data-state="MS">Mississippi</li>
			<li data-state="MO">Missouri</li>
			<li data-state="MT">Montana</li>
			<li data-state="NE">Nebraska</li>
			<li data-state="NV">Nevada</li>
			<li data-state="NH">New Hampshire</li>
			<li data-state="NJ">New Jersey</li>
			<li data-state="NM">New Mexico</li>
			<li data-state="NY">New York</li>
			<li data-state="NC">North Carolina</li>
			<li data-state="ND">North Dakota</li>
			<li data-state="OH">Ohio</li>
			<li data-state="OK">Oklahoma</li>
			<li data-state="OR">Oregon</li>
			<li data-state="PA">Pennsylvania</li>
			<li data-state="RI">Rhode Island</li>
			<li data-state="SC">South Carolina</li>
			<li data-state="SD">South Dakota</li>
			<li data-state="TN">Tennessee</li>
			<li data-state="TX">Texas</li>
			<li data-state="UT">Utah</li>
			<li data-state="VT">Vermont</li>
			<li data-state="VA">Virginia</li>
			<li data-state="WA">Washington</li>
			<li data-state="WV">West Virginia</li>
			<li data-state="WI">Wisconsin</li>
			<li data-state="WY">Wyoming</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		var button = $('#dropdown-button');
		var drop = $('#state_dropdown');
		var select = $('#state_dropdown li');
		var link = 'http://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.eventList&eventType=P,T&eventGroupID=9AA117B3-F522-BB6D-359D1AA2D75A7958&state=';
		drop.attr('style', 'display: none');
		button.on('click', function(){
			drop.slideToggle(200);
		});
		select.on('click', function(){
			window.open(link + $(this).data('state'), '_blank');
		});
		$('.modal__overlay, .modal__close').on('click', function(){
			$('.modal__overlay, .modal__close, .modal').attr('style', 'display: none');
		})
	});
</script>