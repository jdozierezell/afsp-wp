        <?php $image = get_field('b_featured_image');
        if (!empty($image)) : ?>

  <a class="feed__image" href="<?php the_permalink(); ?>">
    
        <?php afsp_imgix('', false, 'b_featured', '(min-width:768px) 40vw, 100vw', 768, 768, 768, 768);
        
        ?>
    
  </a>

        <?php endif; ?>

  <div class="feed__body feed__body--third">
    
    <div class="feed__quote"><?php the_field('b_pull_quote_for_feed') ?></div>
    
    <a class="feed__title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        
        <?php the_field('t_teaser') ?>
        
    <span class="feed_byline">by 
							
				<?php 

				$term = get_field('b_author');
				if( $term ):
					echo $term->name;
				else :
				  echo 'AFSP';
				endif; ?>
							
		</span>