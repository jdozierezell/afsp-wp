<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package afsp
 */

get_header(); 
get_template_part('template-parts/title'); ?>

	<div id="primary" class="">
		<section class="container">	
			<h1 class="landing__title"><?php single_post_title(); ?></h1>
            <h3>Interested in writing a blog post for AFSP? <a href="https://afsp.org/stories2connect">Click here to find out how.</a></h3>
		</section>
		<main id="main" class="feed container container--large" role="main">

				<?php // query
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$news_query = new WP_Query(array(
					'post_type'			=> 'post',
					'paged' => $paged,
					'meta_key'			=> 'b_date',
					'orderby'			=> 'meta_value_num',
					'order'				=> 'DESC'
				));
				
				if ( $news_query->have_posts() ) :
					$counter = 0;
					while ( $news_query->have_posts() ) : $news_query->the_post(); $counter++; ?>

				<?php if($counter == 1) :
					get_template_part('template-parts/feed-third');
				elseif($counter % 3 - 1 == 0) : 
					$ad = get_field('na_news_ad', get_option('page_for_posts'));
					$adCounter = ($counter - 1) / 3;
					$currentAd = $ad[$adCounter - 1];
					$image = $currentAd['na_ad_image'];
					$image_mobile = $currentAd['na_ad_image_mobile'];
					$link = $currentAd['na_ad_link']; 
					if($currentAd) : ?>
					
			<div class="feed__item feed__item--ad">
				<a class="feed__link" href="<?php echo $link ?>">
					
				<?php $image_array = wp_get_attachment_image_src($image['id']);
				$image_array_mobile = wp_get_attachment_image_src($image_mobile['id']);
					$src = $image_array[0];
					// if the page is loaded over ssl, we need to add the secure protocol to the source url
					$src = str_replace('http://', 'https://', $src);
					if($pos = strpos($src, '?') !== false) :
						$src = strstr($src, '?', true);
					endif;
					$mobile_src = $image_array_mobile[0];
					// if the page is loaded over ssl, we need to add the secure protocol to the source url
					$mobile_src = str_replace('http://', 'https://', $mobile_src);
					if($mobile_pos = strpos($mobile_src, '?') !== false) :
						$mobile_src = strstr($mobile_src, '?', true);
					endif;
					if(strpos($src, '?') !== false || strpos($mobile_src, '?') !== false) :
						$src = strstr($src, '?', true);
						$mobile_src = strstr($mobile_src, '?', true);
					endif;
					$src1 = $src . '?w=1200&h=400';
					$src2 = $src . '?w=600&h=200';
					$mobile_src = $mobile_src . '?w=768&h=768';
				
					echo '<picture class="feed__image">';
					echo '<source class="imgix-fluid"  media="(min-width: 768px)" srcset="' . $src1 . ' 1200w, ' . $src2 . ' 600w">';
					echo '<source class="imgix-fluid"  srcset="' . $mobile_src . ' 768w">';
					echo '<img src="' . $src1 . '" class="imgix-fluid feed__image" alt="' . $image['alt'] . '" sizes="100vh" />';
					echo '</picture>'; ?>
				
				
					
				</a>
			</div>
				
				<?php endif;
					get_template_part('template-parts/feed-third');
				elseif($counter % 3 - 1 == 1) : ?>
				
			<div class="feed__wrap">
				
				<?php get_template_part( 'template-parts/feed-standard'); 
				else : get_template_part( 'template-parts/feed-standard'); ?>
			
			</div>
			
				<?php	endif;	
					endwhile;
					if ($news_query->max_num_pages > 1) : // check if the max number of pages is greater than 1  ?>

		  <nav class="news__navigation">
		    <div>
		      <?php echo get_next_posts_link( 'Previous News', $the_query->max_num_pages ); // display older posts link ?>
		    </div>
		    <div>
		      <?php echo get_previous_posts_link( 'Newer News' ); // display newer posts link ?>
		    </div>
		  </nav>

				<?php endif;
				else : 
					get_template_part( 'template-parts/content', 'none' ); 
				endif; 
				wp_reset_query(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

				<?php get_footer(); ?>
