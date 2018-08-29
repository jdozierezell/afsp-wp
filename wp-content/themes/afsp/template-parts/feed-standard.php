<div class="feed__item feed__item--standard">
  
        <?php
        $image = get_field('b_featured_image');
        if (!empty($image)) : ?>

  <a class="feed__image" href="<?php the_permalink(); ?>">
    
        <?php afsp_imgix('feed__image', false, 'b_featured', '(min-width:768px) 40vw, 100vw', 768, 512, 768, 768); ?>
    
  </a>

        <?php endif; ?>

  <div class="feed__body">
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
        
    
  </div>
  <hr class="feed__rule">
</div>