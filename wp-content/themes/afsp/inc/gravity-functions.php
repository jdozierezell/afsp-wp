<?php 

add_filter( 'gform_confirmation', 'afsp_gform_confirmation_message', 10, 4 );

function afsp_gform_confirmation_message($confirmation, $form, $entry, $ajax) { ?>

	<div class="modal__overlay" style="display:block;"></div>
	<div class="modal" style="display:block;"><?php echo $confirmation; ?></div>

<?php }

?>