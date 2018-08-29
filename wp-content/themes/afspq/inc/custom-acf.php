<?php

add_action('acf/input/admin_head', 'my_acf_admin_head'); // http://www.advancedcustomfields.com/resources/acfinputadmin_head/
function my_acf_admin_head() {
	?>

	<script type="text/javascript">
	var $catInput;
	jQuery(document).ready(function($){
	  
	  $catInput = $('input[name="acf[field_56f27b85178ce]"]');

    function hide_or_show_fields() {
      if($catInput.val() !== '58') {  
        $('.acf-field-56f27d75178d0').addClass('hidden-by-conditional-logic');
      }
      if($catInput.val() !== '55') {  
        $('.acf-field-56f27da7178d1').addClass('hidden-by-conditional-logic');
      }
      if($catInput.val() !== '56') {  
        $('.acf-field-56f27bcb178cf').addClass('hidden-by-conditional-logic');
      }
    }
		
		hide_or_show_fields();
		$catInput.on('change', function(e) {
		  hide_or_show_fields();
		});

	});
	</script>
	<?php
}


?>