<?php
/**
 * Template Name: Find International Survivors of Suicide Loss Day
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
?>
<section class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</section>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
        <style>
            .footable-filter-container {
                display: none;
            }
        </style>
		<section class="container">
			<p>New events are being added every day. If you don't find an event near you, please check back.</p>
			<table class="tablepress" data-filtering="false">
                <thead>
                    <tr>
                        <th>Lorem</th>
                        <th>Ipsum</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Lorem</td>
                    <td>Ipsum</td>
                </tr>
                <tr>
                    <td>Lorem</td>
                    <td>Ipsum</td>
                </tr>
                </tbody>
            </table>
		</section>
		<section class="container">
			<div class="support-group__content">
				<?php the_content(); ?>
			</div>
		</section>
        <script type="text/javascript" src="https://afsp.org/wp-content/plugins/footable/js/footable.min.js?ver=0.3.1"></script>
        <script>
            jQuery('.tablepress').footable()
        </script>
	<?php
	endwhile;
endif;
get_footer();
?>
