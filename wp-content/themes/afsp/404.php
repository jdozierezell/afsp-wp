<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="container broken">
					<h1 class="landing__title landing__title--404">Oh, no. You broke it!</h1>
					<img class="image__404" src="<?php echo get_template_directory_uri(); ?>/src/img/404.svg" />
					<div class="broken__body">
						<p class="broken__text">Just kidding &mdash; these things happen. Lucky for you there's a high-powered search bar below. It's sure to help you find what you're looking for.</p>
						<div class="broken__search">
							
							<?php get_search_form(); ?>
							
						</div>
						<p class="broken__link">If you found this page by clicking on a link on our site (or another site) and you'd like to be so kind as to report this broken link, you can do so by <a id="email" href="">clicking here</a>. We appreciate the help.</p>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<script>
		jQuery(document).ready(function($){
			var emailHref = 'mailto:jdozier-ezell@afsp.org?subject=I broke it&body=\
			Hi Jonathan,%0D%0A%0D%0A\
			I came across a broken link on your site. That link is ' + window.location.href + '.%0D%0A%0D%0A\
			Just so you know, I got to this page by clicking a link on the page at ' + document.referrer + '.%0D%0A%0D%0A\
			Now that I\'ve told you about your broken link, I can go about my day knowing that I\'ve done my super awesome fantastic good deed for the day. Really Jonathan, I\'m an awesome human being.%0D%0A%0D%0A\
			BTW, you\'re welcome. :)'
			$('#email').attr('href', emailHref);
		});
	</script>

<?php get_footer(); ?>
