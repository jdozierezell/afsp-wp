<!--Begin CTCT Sign-Up Form-->
<!-- EFD 1.0.0 [Wed Nov 25 08:36:26 EST 2015] -->

        <?php $chapterState = get_field('caf_fact_sheet_state');
        
        switch ($chapterState) {
          case 'Colorado':
          case 'Illinois':
          case 'Iowa':
          case 'Kansas':
          case 'Minnesota':
          case 'Missouri':
          case 'Nebraska':
          case 'North Dakota':
          case 'Oklahoma':
          case 'South Dakota':
          case 'Texas':
            $ccFormId = '1f9e144a05364ceb36bbfaa73a1414bd'; // Constant Contact Form ID for the afsp_centralVOL account
            break;
          case 'District of Columbia':
          case 'Indiana':
          case 'Kentucky':
          case 'Michigan':
          case 'Ohio':
          case 'Pennsylvania':
          case 'Virginia':
          case 'West Virginia':
          case 'Wisconsin':
            $ccFormId = '5842c3db1a9f78ebd746aa49182180de'; // Constant Contact Form ID for the afsp_eastcentralVOL account
            break;
          case 'Connecticut':
          case 'Delaware':
          case 'Maine':
          case 'Maryland':
          case 'Massachusetts':
          case 'New Hampshire':
          case 'New Jersey':
          case 'New York':
          case 'Rhode Island':
          case 'Vermont':
            $ccFormId = '75279e9220c7a46d77a359bd5930e906'; // Constant Contact Form ID for the afsp_northeasternVOL account
            break;
          case 'Alabama':
          case 'Arkansas':
          case 'Florida':
          case 'Georgia':
          case 'Louisiana':
          case 'Mississippi':
          case 'North Carolina':
          case 'South Carolina':
          case 'Tennessee':
            $ccFormId = '574c25b46e938efeec2c05261c984e70'; // Constant Contact Form ID for the afsp_southernVOL account
            break;
          case 'Alaska':
          case 'Arizona':
          case 'California':
          case 'Hawaii':
          case 'Idaho':
          case 'Montana':
          case 'Nevada':
          case 'New Mexico':
          case 'Oregon':
          case 'Utah':
          case 'Washington':
          case 'Wyoming':
            $ccFormId = '4d850682d2242fbdffdcf885567438ef'; // Constant Contact Form ID for the afsp_westernVOL account
            break;
        }
        
        ?>
<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "<?php echo $ccFormId; ?>"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->

<!-- Begin Constant Contact Inline Form Code -->
<div class="ctct-inline-form" data-form-id="<?php echo get_field('cc_email_list_id'); ?>"></div>
<!-- End Constant Contact Inline Form Code -->

<script>
  jQuery(document).ajaxStop(function() {
    jQuery('input[data-qe-id="form-input-email"]').attr('placeholder', 'Please enter your email address.')
  })
</script>