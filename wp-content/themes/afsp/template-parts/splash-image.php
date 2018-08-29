<section class="splash splash--full container__full">
    
        <?php if(get_field('si_link_image') == 'internal') :
					$image_link = get_field('si_featured_image_internal');
				elseif(get_field('si_link_image') == 'external') :
					$image_link = get_field('si_featured_image_external');
				endif;

				if(get_field('si_featured_image') != 'no' && $image_link != '') : ?>
			
	<a href="<?php echo $image_link; ?>" target="_blank">
					
				<?php endif;

        afsp_imgix('splash__image', false, 'si', '100vw', 3000, 1500, 768, 700); ?>
	
</section>