<?php
/**
 * Display feature icons.
 *
 * This is the layout for displaying the feature icons.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afsp
 */

?>
<div class="container">
	<h2 class="actions__header"><?php the_field( 'ib_pretext' ); ?></h2>
</div>
<section class="actions container">
	<?php
	$number_rows = count( get_field( 'ib_icon_block' ) );
	$link_class  = 5 === $number_rows ? 'action action--banner' : 'action';
	if ( have_rows( 'ib_icon_block' ) ) :
		while ( have_rows( 'ib_icon_block' ) ) :
			the_row();
			$icon = get_sub_field( 'ib_icon' );
			if ( 'internal' === get_sub_field( 'ib_link_type' ) ) :
				$link = get_sub_field( 'ib_icon_link' );
			else :
				$link = get_sub_field( 'ib_icon_external_link' );
			endif;
			?>
		<a class="<?php echo esc_attr( $link_class ); ?>" href="<?php echo esc_url( $link ); ?>">
			<table>
				<tbody>
					<tr>
						<td>
							<img class="action__image" src="<?php echo esc_attr( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
						</td>
					</tr>
					<tr>
						<td class="action__cta"><?php the_sub_field( 'ib_icon_text' ); ?></td>
					</tr>
				</tbody>
			</table>
		</a>
		<?php
		endwhile;
	endif;
	?>
</section>
