<!--Begin CTCT Sign-Up Form-->
<!-- EFD 1.0.0 [Wed Nov 25 08:36:26 EST 2015] -->

        <?php $chapterState = get_field('caf_fact_sheet_state');
        
        switch ($chapterState) {
          case 'Connecticut':
          case 'Delaware':
          case 'District of Columbia':
          case 'Kentucky':
          case 'Maine':
          case 'Maryland':
          case 'Massachusetts':
          case 'New Hampshire':
          case 'New Jersey':
          case 'New York':
          case 'Pennsylvania':
          case 'Rhode Island':
          case 'Vermont':
          case 'Virginia':
          case 'West Virginia':
            $ccFormId = '96396473-17e6-406a-9ffd-3c9bfedb529e'; // Constant Contact Form ID for the afspeastern account
            break;
          case 'Alabama':
          case 'Florida':
          case 'Georgia':
          case 'Louisiana':
          case 'Mississippi':
          case 'North Carolina':
          case 'South Carolina':
          case 'Tennessee':
            $ccFormId = '8dc39aef-03ee-4bf3-b134-fd9ce8ecd79d'; // Constant Contact Form ID for the afspsouthern account
            break;
          case 'Arkansas':
          case 'Illinois':
          case 'Indiana':
          case 'Iowa':
          case 'Kansas':
          case 'Michigan':
          case 'Minnesota':
          case 'Missouri':
          case 'Nebraska':
          case 'North Dakota':
          case 'Ohio':
          case 'Oklahoma':
          case 'South Dakota':
          case 'Texas':
          case 'Wisconsin':
            $ccFormId = 'a01dc7f9-7445-44ea-9617-3d6514411448'; // Constant Contact Form ID for the afspcentral account
            break;
          case 'Alaska':
          case 'California':
          case 'Hawaii':
          case 'Idaho':
          case 'Nevada':
          case 'Oregon':
          case 'Washington':
            $ccFormId = '495b0acf-4809-4d81-86f3-7da3dd75ef97'; // Constant Contact Form ID for the afspwestern account
            break;
          case 'Arizona':
          case 'Colorado':
          case 'Montana':
          case 'New Mexico':
          case 'Utah':
          case 'Wyoming':
            $ccFormId = '0493747d-2617-464d-81e3-48ae9a3adddf'; // Constant Contact Form ID for the westernchapters account
            break;
        }
        
        ?>


<div class="container">
       <span id="success_message" style="display:none;">
           <div>Thanks for signing up!</div>
       </span>
       <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
       	<div class="email">
       		<h2 class="email__cta">Get Updates</h2>
           <!-- The following code must be included to ensure your sign-up form works properly. -->
           <input data-id="ca:input" type="hidden" name="ca" value="<?php echo $ccFormId; ?>">
           <input data-id="list:input" type="hidden" name="list" value="<?php echo get_field('cc_email_list_id'); ?>">
           <input data-id="source:input" type="hidden" name="source" value="EFD">
           <input data-id="required:input" type="hidden" name="required" value="list,email">
           <input data-id="url:input" type="hidden" name="url" value="">
           <input data-id="Email Address:input" type="text" class="email__form" name="email" value="" maxlength="80" placeholder="email address">
           <div class="email__button">
           	<input type="submit" data-enabled="enabled" value="Subscribe">
           </div>
       	</div>
       </form>
</div>
<script type='text/javascript'>
   var localizedErrMap = {};
   localizedErrMap['required'] = 		'This field is required.';
   localizedErrMap['email'] = 			'Please enter your email address in name@email.com format.';
   localizedErrMap['generic'] = 		'This field is invalid.';
   localizedErrMap['shared'] = 		'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
   var postURL = 'https://visitor2.constantcontact.com/api/signup';
</script>
<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
<!--End CTCT Sign-Up Form-->