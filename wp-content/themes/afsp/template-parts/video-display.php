<!-- Begin Video Display -->

        <?php if(have_rows('vd_video')) : 
          $rows = get_field('vd_video');
          $counter = 0;
          $row_count = count($rows);
          $row_class = '';
          if($row_count % 4 === 0) :
            $row_class = 4;
          elseif($row_count % 3 == 0) :
            $row_class = 3;
          elseif($row_count % 2 == 0) :
            $row_class = 2;
          else : 
            $row_class = 4;
          endif; ?>
					
<section class="container video-display">

				<?php if(get_field('vd_title') != '') : ?>

	<h2 class="video-display__title"><?php the_field('vd_title'); ?></h2>

				<?php endif;
          while(have_rows('vd_video')) : the_row();
            $video_src = '';
            if(get_row_layout() == 'vd_youtube') :
            $video_src = 'https://www.youtube.com/embed/' . get_sub_field('vd_youtube_id') . '?rel=0&amp;showinfo=0';
            elseif(get_row_layout() ==  'vd_vimeo') :
              $video_src = 'https://player.vimeo.com/video/' . get_sub_field('vd_vimeo_id');
            endif; ?>

	<div class="video-display--wrapper video-display--wrapper-<?php echo $row_class; ?>">
    <div class="videoEmbed">
      <iframe width="560" height="315" src="<?php echo $video_src; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

        <?php endwhile; ?>

</section>

        <?php endif; ?>


<!-- End Video Display -->