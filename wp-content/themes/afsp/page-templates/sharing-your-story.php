<?php
/**
 * Template Name: Sharing Your Story
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/splash-container' );
		?>
		<div class="container">		
			<?php if ( get_field( 'sys_intro' ) ) : ?>
				<section class="story-intro">
					<?php echo wp_kses( get_field( 'sys_intro' ), $GLOBALS['allowed_html'] ); ?>
				</section>
			<?php
			endif;
if ( get_field( 'sys_story_tips' ) ) :
			?>
				<section class="story-tips">
					<h2 class="story-tips-header">Examples of Stories</h2>
					<?php echo wp_kses( get_field( 'sys_story_tips' ), $GLOBALS['allowed_html'] ); ?>
				</section>
			<?php endif; ?>
			<section class="story-actions">
				<a class="story-action-submit" href="https://afsp.org/forms/lifesavers-blog-submission-guidelines/">Submit a Story!</a>
				<a class="story-action-blog" href="https://afsp.org/news">Read Our Blog!</a>
			</section>
			<section class="story-prompts">
				<h2 class="story-prompts-header">Creative Corner</h2>
				<?php
				if ( get_field( 'sys_video_tip' ) ) :
					$src = 'https://player.vimeo.com/video/' . get_field( 'sys_video_tip' );
					?>
					<div class="story-tip">
						<div class="videoEmbed"> <!-- overriding padding to get the button to position itself correctly -->
							<iframe src="<?php echo esc_url( $src ); ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
				<?php
				endif;
				if ( have_rows( 'sys_story_prompts' ) ) :
					?>
					<h3 class="story-prompts-subheader">Creative Prompts</h3>
					<?php
					while ( have_rows( 'sys_story_prompts' ) ) :
						the_row();
						?>
						<div class="story-prompt">
							<?php
							if ( get_sub_field( 'sys_prompt_image' ) ) :
								$image       = get_sub_field( 'sys_prompt_image' );
								$image_array = wp_get_attachment_image_src( $image['id'] );
								$src         = $image_array[0];
								// if the page is loaded over ssl, we need to add the secure protocol to the source url.
								$src = str_replace( 'http://', 'https://', $src );
								$pos = strpos( $src, '?' );
								if ( false !== $pos ) :
									$src = strstr( $src, '?', true );
								endif;
								$src = $src . '?w=960&h=545&fit=crop&crop=faces';
								?>
								<img class="story-prompt-image" src="<?php echo esc_url( $src ); ?>" />
							<?php
							endif;
							if ( get_sub_field( 'sys_prompt' ) ) :
								echo wp_kses( get_sub_field( 'sys_prompt' ), $GLOBALS['allowed_html'] );
							endif;
							?>
						</div>
					<?php
					endwhile;
				endif;
				?>
				<h4><a href="previous-creative-prompts">Click here to see previously shared Creative Prompts.</a></h4>
				<br>
				<br>
			</section>
			<?php if ( have_rows( 'sys_topics_on_the_horizon' ) ) : ?>
				<section class="story-topics">
					<h2 class="story-topics-header">Topics on the Horizon <i class="fas fa-calendar-alt"></i> <i class="fas fa-sun"></i> <i class="fas fa-calendar-alt"></i></h2>
					<p>We're always looking for whatever types of stories you're inspired to tell, but here are some specific topics we're on the lookout for in the coming months.</p>
					<div class="story-topic-wrapper">
						<?php
						while ( have_rows( 'sys_topics_on_the_horizon' ) ) :
							the_row();
							?>
							<div class="story-topic">
								<h3 class="story-topic-header"><?php echo esc_html( get_sub_field( 'sys_topic_month' ) ); ?></h3>
								<div class="story-topic-content">
									<?php echo wp_kses( get_sub_field( 'sys_topic_detail' ), $GLOBALS['allowed_html'] ); ?>
								</div>
							</div>
					<?php endwhile; ?>
				</div>
			</section>
			<?php endif; ?>
		</div>		
<?php
	endwhile;
endif;
get_footer();
?>
