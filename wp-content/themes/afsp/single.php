<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main blog__article" role="main">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="blog__header">
					<div class="blog__masthead">
						<?php the_title( '<h1 class="blog__title">', '</h1>' ); ?>
						<h3 class="blog__meta">
							<span class="posted-on">
								<?php
								if ( null !== get_field( 'b_date' ) ) :
									$date = DateTime::createFromFormat( 'Y-m-d', get_field( 'b_date' ) );
									echo esc_html( $date->format( 'F j, Y' ) );
								endif;
								?>
							</span> | 
							<span class="byline">
								<?php
								$term = get_field( 'b_author' );
								if ( $term ) :
									echo esc_html( $term->name );
								else :
									echo 'AFSP';
								endif;
								?>
							</span>
						</h3><!-- .entry-meta -->
					</div>
					<div class="sw-wrapper">
						<?php
						$url   = get_permalink( $post->ID );
						$title = get_the_title( $post->ID );
						echo do_shortcode( '[social_warfare]' );
						?>
					</div>
					<?php
					if ( true === get_field( 'b_video' ) ) :
						$video = get_field( 'b_youtube' ) . '?rel=0&amp;showinfo=0';
						?>
						<div class="videoEmbed">
							<iframe width="853" height="480" src="<?php echo esc_attr( $video ); ?>" frameborder="0" allowfullscreen></iframe>
						</div>
					<?php
					else :
						$image = get_field( 'b_featured_image' );
						if ( 'no' !== get_field( 'b_link_image' ) ) :
							if ( 'internal' === get_field( 'b_link_image' ) ) :
								$image_link = get_field( 'b_featured_image_internal' );
							elseif ( 'external' === get_field( 'b_link_image' ) ) :
								$image_link = get_field( 'b_featured_image_external' );
							endif;
							?>
							<a href="<?php echo esc_url( $image_link ); ?>" target="_blank">
						<?php
						endif;
						if ( ! empty( $image ) && false === get_field( 'b_hide_image' ) ) :
							afsp_imgix( 'feed__image', false, 'b_featured', '100vw', 1532, 768, 768, 768 );
						endif;
						if ( 'no' !== get_field( 'b_featured_image' ) ) :
						?>
							</a>
						<?php
						endif;
					endif;
					?>
				</header><!-- .entry-header -->
				<div class="blog__content">
					<?php the_field( 'b_body' ); ?>
					<p>------</p>
					<p>Like what you're reading? Go to our <a href="https://afsp.org/stories2connect">Sharing Your Story</a> page, where you'll find resources for sharing your own story, including story ideas, blog submission guidelines, tips for sharing your story safely and creative exercises to help you get started, and assignments for upcoming topics.</p>
					<p>Write a blog post for AFSP! <a href="https://afsp.org/forms/lifesavers-blog-submission-guidelines/">Click here</a> for our Submission Guidelines.</p>
					<div class="modal__overlay" id="modal-overlay"></div>
					<div class="modal" id="modal">
						<!-- Begin MailChimp Signup Form -->
						<style type="text/css">
							#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
							#mc_embed_signup .button{height: auto; line-height: normal; padding: 1rem 3rem 1rem 1rem;}
						</style>
						<div id="mc_embed_signup">
							<form action="https://afsp.us1.list-manage.com/subscribe/post?u=db11a6f2940a2b3d1fa0b2fe7&amp;id=3fbf9113af" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">
									<h2>Subscribe to get the best of the blog!</h2>
									<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
									</label>
										<input type="email" value="" name="EMAIL" class="required" id="mce-EMAIL">
									</div>
									<input type="checkbox" value="9007199254740992" checked="checked" name="group[85][9007199254740992]" id="mce-group[85]-85-1" style="display: none">
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_db11a6f2940a2b3d1fa0b2fe7_3fbf9113af" tabindex="-1" value=""></div>
									<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button features__button"></div>
								</div>
							</form>
						</div>
						<!--End mc_embed_signup-->
					</div><!-- end modal-->
					<script>
						const roundup = document.getElementById('roundup')
						const modalOverlay = document.getElementById('modal-overlay')
						const modal = document.getElementById('modal')
						const mCSubmit = document.getElementById('mc-embedded-subscribe')
						roundup.addEventListener('click', function(e) {
							e.preventDefault()
							modalOverlay.style.display = 'block'
							modal.style.display = 'block'
						})
						modalOverlay.addEventListener('click', function(e) {
							modalOverlay.style.display = 'none'
							modal.style.display = 'none'
						})
						mCSubmit.addEventListener('click', function(e) {
							console.log('clicked')
							modalOverlay.style.display = 'none'
							modal.style.display = 'none'
						})
					</script>
					<?php echo do_shortcode( '[social_warfare]' ); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'afsp' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
				<footer class="entry-footer">
					<?php afsp_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->
			<hr class="blog__rule">
			<nav class="post-navigation" role="navigation">
				<h2 class="screen-reader-text">Post navigation</h2>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_post_link( '%link' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link' ); ?></div>
				</div>
			</nav>
		<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
