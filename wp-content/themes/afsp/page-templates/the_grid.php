<?php
/**
 * Template Name: The Grid
 *
 * @package afsp
 */

get_header(); 
get_template_part('template-parts/title'); ?>
				
<div class="container--full">
	<h1 class="grid__title"><?php the_title(); ?></h1>
</div>
				
<?php	if(have_posts()) : while(have_posts()) : the_post(); 
    if (have_rows('tg_layout')) : while (have_rows('tg_layout')) : the_row();
        if (get_row_layout() === 'tg_columns') :
          $column_count = count(get_sub_field('tg_column_content'));
          if (have_rows('tg_column_content')) : ?>
            <div class="grid--columns">
              <?php while (have_rows('tg_column_content')) : the_row(); ?>
                <?php $int_ext = get_sub_field('tg_column_page_internal_or_external');
                if ($int_ext = 'internal') :
                  $post_object = get_sub_field('tg_column_post');
                  if ($post_object) :
                    $post = $post_object;
                    setup_postdata($post);
                    $image = get_field('si_image');
                    $image_array = wp_get_attachment_image_src($image['id']);
                    $src = $image_array[0]; 
                    // if the page is loaded over ssl, we need to add the secure protocol to the source url
                    $src = str_replace('http://', 'https://', $src);
                    if($pos = strpos($src, '?') !== false) :
                      $src = strstr($src, '?', true);
                    endif;
                    $image_width = 1920 / $column_count;
                    $src = $src . '?w=' . $image_width . '&h=1080&fit=crop&crop=faces'; ?>
                    <a class="grid__link--column" href="<?= get_the_permalink(); ?>" style="background-image: url(<?= $src; ?>)">
                      <div class="grid__link__title">
                        <h4><?= get_the_title(); ?></h4>
                      </div>
                      <div class="grid__link__teaser">
                        <?= get_field('c_page_teaser'); ?>
                      </div>
                    </a>
                    <?php wp_reset_postdata();
                  endif;
                elseif ($int_ext = 'external') :
                  // do things
                endif;
              endwhile; ?>
            </div>
          <?php endif;
        endif;
      endwhile;
    endif;
  endwhile;
endif; ?>

<?php get_footer(); ?>