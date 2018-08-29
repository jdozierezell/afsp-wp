<?php
/**
 * Posts Locator "horizontal-gray" search form template file.
 *
 * The information on this file will be displayed as the search forms.
 *
 * The function pass 1 args for you to use:
 * $gmw  - the form being used ( array )
 *
 * You could but It is not recomemnded to edit this file directly as your changes will be overridden on the next update of the plugin.
 * Instead you can copy-paste this template ( the "horizontal-gray" folder contains this file and the "css" folder )
 * into the theme's or child theme's folder of your site and apply your changes from there.
 *
 * The template folder will need to be placed under:
 * your-theme's-or-child-theme's-folder/geo-my-wp/posts/search-forms/
 *
 * Once the template folder is in the theme's folder you will be able to choose it when editing the Posts locator form.
 * It will show in the "Search results" dropdown menu as "Custom: horizontal-gray".
 *
 * @package afsp
 */

do_action( 'gmw_before_search_form_template', $gmw );
$wrapper_class = "gmw-form-wrapper gmw-form-wrapper-$gmw[ID]";
$form_class    = "gmw-form gmw-form-$gmw[ID]";
?>

<div class="<?php echo esc_attr( $wrapper_class ); ?> gmw-pt-form-wrapper find-chapter__form-wrapper">
	<?php do_action( 'gmw_before_search_form', $gmw ); ?>
	<form class="<?php echo esc_attr( $form_class ); ?>" name="gmw_form" action="<?php echo esc_attr( get_the_permalink( $gmw['search_results']['results_page'] ) ); ?>" method="get">
		<div class="find-chapter__form">
			<?php
			do_action( 'gmw_search_form_start', $gmw );
			do_action( 'gmw_search_form_before_address', $gmw );
			?>
			<div class="find-chapter__locator">
				<?php
				// Address Field.
				$class = 'find-chapter__input';
				$id    = '';
				gmw_search_form_address_field( $gmw, $id, $class );
				// locator icon.
				gmw_search_form_locator_button( $gmw );
				?>
			</div>
			<?php
			do_action( 'gmw_search_form_before_post_types', $gmw );
			// post types dropdown.
			gmw_search_form_post_types( $gmw, false, false, false );
			do_action( 'gmw_search_form_before_taxonomies', $gmw );
			// Display taxonomies/categories.
			gmw_search_form_taxonomies( $gmw, 'div', false );
			do_action( 'gmw_search_form_before_distance', $gmw );
			gmw_search_form_submit_button( $gmw, false );
			// distance values.
			$class = '';
			gmw_search_form_radius( $gmw, $class );
			// distance units.
			gmw_search_form_units( $gmw, $class );
			// state dropdown.
			gmw_states_dropdown( $gmw );
			?>
		</div>
		<?php do_action( 'gmw_search_form_end', $gmw ); ?>	
	</form>
	<?php do_action( 'gmw_after_search_form', $gmw ); ?>
</div><!--form wrapper -->	
<?php do_action( 'gmw_after_search_form_template', $gmw ); ?>
