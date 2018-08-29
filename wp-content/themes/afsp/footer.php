<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afsp
 */

?>
	</div><!-- .content -->
	<footer id="colophon" class="container__full container__full--footer" role="contentinfo">
		<div class="footer">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer__menu',
					'container'      => false,
				)
			);
			?>
			<p class="lifeline">If you are in crisis, please call the <a href="http://suicidepreventionlifeline.org" target="_blank">National Suicide Prevention Lifeline</a> at <a href="tel:+1-800-273-8255">1-800-273-TALK (8255)</a> or contact the <a href="http://www.crisistextline.org" target="_blank">Crisis Text Line</a> by texting TALK to <a href="sms:741741&body=TALK">741741</a>.</p>
			<!-- <div class="footer__logos">
				<img class="footer__logo" src="<?php // echo get_template_directory_uri(); ?>/assets/images/cn_4star234x60BW-01.svg" alt="Charity Navigator Logo" />
			</div> -->
			<small class="copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> American Foundation for Suicide Prevention. All rights reserved.</small>
		</div>
	</footer>
</section><!-- .site -->

<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function() {
		jQuery('.search-field[name="s"]').focus();
	});
	jQuery('#site-search').on('click', function() {
		jQuery('.search__overlay .search-field[name="s"]').val('');
		jQuery('.search__overlay').toggleClass('search__overlay--active');
		setTimeout(function(){jQuery('.search__overlay .search-field[name="s"]').focus();}, 300);
	});
	jQuery('#close-search').on('click', function() {
		jQuery('.search__overlay').toggleClass('search__overlay--active');
	});
</script>

</body>
</html>
