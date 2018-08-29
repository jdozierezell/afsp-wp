<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package chapterLand
 */
?>

<?php
  $pageImage = get_field('page_image');
?>

<div class="prettyFace">
  <img src="<?php echo $pageImage['sizes']['pretty-face']; ?>" alt="<?php echo $pageImage['alt']; ?>">
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'pageContent' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div id="TOP" class="entry-content">
	  <p><?php echo the_field('content_description') ?></p>
		<?php 

    $showTable = get_field('include_table_of_contents_links');

    if($showTable == 'Yes') { // If the option has been chosen to show the table, let's show it.
      if( have_rows('page_content') && is_user_logged_in() ) : // same check as below around ln 55. No sense in showing the table of contents to people who can't read the content. ?>
    
    <h2>Table of Contents</h2>
        
        <?php
        
        while( have_rows('page_content') ) : the_row();

          if( get_row_layout() == 'text' ) : // If the text layout option was chosen, show it. ?>
    
    <a href="#<?php the_sub_field('header_text_anchor'); ?>">
      <h3><?php the_sub_field('section_header_text'); ?></h3>
    </a>
    
          <?php

          elseif( get_row_layout() == 'files' ) : // If the files layout option was chosen, show it. ?>
    
    <a href="#<?php the_sub_field('header_files_anchor'); ?>">
      <h3><?php the_sub_field('section_header_files'); ?></h3>
    </a>
    
          <?php

          elseif( get_row_layout() == 'images' ) : // If the images layout option was chosen, show it. ?>
    
    <a href="#<?php the_sub_field('header_images_anchor'); ?>">
      <h3><?php the_sub_field('section_header_images'); ?></h3>
    </a>
    
          <?php

          elseif( get_row_layout() == 'videos' ) : // If the videos layout option was chosen, show it. ?>
    
    <a href="#<?php the_sub_field('header_videos_anchor'); ?>">
      <h3><?php the_sub_field('section_header_videos'); ?></h3>
    </a>

          <?php        
    
           the_sub_field('file');

          endif;

        endwhile;

      else :

      endif; // End table of contents display
    
    }
    
    if( have_rows('page_content') && is_user_logged_in() ) : // check to see if the content exists and if the user is logged in to see it.

      while( have_rows('page_content') ) : the_row();
      // attach variables to security settings
       
      $whoText = get_sub_field('who_text');
      $whoFiles = get_sub_field('who_files');
      $whoImages = get_sub_field('who_images');
      $whoVideos = get_sub_field('who_videos');

        if( get_row_layout() == 'text' && current_user_can($whoText) ) : // If the text layout option was chosen, show it. ?>
        
        <?php
        $level = '';
        
        switch ($whoText) {
          case 'read_walkers':
            $level = 'TV';
            break;
          case 'read_chapters':
            $level = 'CB';
            break;
          case 'read_fields':
            $level = 'FS';
            break;
          case 'read_division_nationals':
            $level = 'DN';
            break;
        } ?>
  
    <h2 class="flexText" id="<?php the_sub_field('header_text_anchor'); ?>"><?php the_sub_field('section_header_text'); ?> <i><small>(<?php echo $level; ?>)</small></i></h2>
    <p class="textDisplay"><?php the_sub_field('text'); ?></p>
        
        <div class="backToTop"><a href="#TOP">Back to Top</a></div>

          <?php 

        elseif( get_row_layout() == 'files' && current_user_can($whoFiles) ) :  // End text layout option display and begin displaying the files layout ?>
        
        <?php
        $level = '';
        
        switch ($whoFiles) {
          case 'read_walkers':
            $level = 'TV';
            break;
          case 'read_chapters':
            $level = 'CB';
            break;
          case 'read_fields':
            $level = 'FS';
            break;
          case 'read_division_nationals':
            $level = 'DN';
            break;
        } ?>

    <h2 class="flexFile" id="<?php the_sub_field('header_files_anchor'); ?>"><?php the_sub_field('section_header_files'); ?> <i><small>(<?php echo $level; ?>)</small></i></h2>

        <?php
    
          $files = get_sub_field('files');

          foreach($files as $file) { // For each file to be displayed.
            $fileIcon = '';
            $fileUrl = $file['file_upload']['url'];
            if (strpos($fileUrl, '.pdf') !== FALSE) {
              $fileIcon = '<i class="fa fa-file-pdf-o"></i>';
            } else if (strpos($fileUrl, '.indd') !== FALSE) {
              $fileIcon = '<i class="fa fa-file-image-o"></i>';
            } else if (strpos($fileUrl, '.doc') !== FALSE) {
              $fileIcon = '<i class="fa fa-file-word-o"></i>';
            } else if (strpos($fileUrl, '.htm') !== FALSE) {
              $fileIcon = '<i class="fa fa-file-code-o"></i>';
            } else if (strpos($fileUrl, '.mov') || strpos($fileUrl, '.mp4') !== FALSE) {
              $fileIcon = '<i class="fa fa-file-video-o"></i>';
            } else if (strpos($fileUrl, '.ppt') !== FALSE) {
              $fileIcon = '<i class="fa fa-file-powerpoint-o"></i>';
            } else if (strpos($fileUrl, '.rtf') || strpos($fileUrl, '.txt') !== FALSE) {
              $fileIcon = '<i class="fa fa-file-text-o"></i>';
            } else if (strpos($fileUrl, '.xls') !== FALSE) {
              $fileIcon = '<i class="fa fa-file-excel-o"></i>';
            } else {
              $fileIcon = '<i class="fa fa-file-o"></i>';
            }
            ?>
    
          <div class="fileDisplay">
            
            <?php if ($file['file_upload']['url']) : 
              echo '<a href="' . $file['file_upload']['url'] . '">';
             endif; ?>
             
              <span class="file-image">
                
              <?php $noimage_class = '';
              if($file['file_image']) : ?>
              
                <img src="<?php echo $file['file_image']['sizes']['medium']; ?>" />
              
              <?php else :
                $noimage_class = 'file-description--full';
              endif; ?>
              
              </span>
              
            <?php if ($file['file_upload']['url']) : 
              echo '</a>';
             endif; ?>
              
              
              <div class="file-description <?php echo $noimage_class; ?>">
            
            <?php if($file['file_upload']['url'] && $file['is_template'] !== 'yes') :
              $url = $file['file_upload']['url'];
            elseif($file['is_template'] === 'yes') :
              $url = $file['template_page'];
            endif;
            
            
            if ($url) : 
              echo '<a href="' . $url . '">';
             endif; ?>
             
                <h3 class="button"><?php echo $file['file_name_to_display'] . '&nbsp;&nbsp;&nbsp;' . $fileIcon; ?></h3>
              
            <?php if ($url) : 
              echo '</a>';
             endif; ?>
             
                <p><?php echo $file['file_description']; ?></p>
                  <?php
                    if($file['last_updated']) { ?>
                      <p>Last updated on <b><?php echo $file['last_updated']; ?></b></p>
                  <?php
                    }
                  ?>
              </div>
              
                <?php
                  if($file['frontline']) { ?>
                    <h4><a href="http://askfrontline.com/">Available on AFSP's Internal Store</a></h4>
                <?php
                  }
                ?>
          </div>
            
          <?php
    
          } // end foreach file ?>
        
        <div class="backToTop"><a href="#TOP">Back to Top</a></div>
        
        <?php
        
        elseif( get_row_layout() == 'images' && current_user_can($whoImages) ) : // End files layout option display and begin displaying images layout ?>
        
        <?php
        $level = '';
        
        switch ($whoImages) {
          case 'read_walkers':
            $level = 'TV';
            break;
          case 'read_chapters':
            $level = 'CB';
            break;
          case 'read_fields':
            $level = 'FS';
            break;
          case 'read_division_nationals':
            $level = 'DN';
            break;
        } ?>

    <h2 class="flexImage" id="<?php the_sub_field('header_images_anchor'); ?>"><?php the_sub_field('section_header_images'); ?> <i><small>(<?php echo $level; ?>)</small></i></h2>

        <?php
    
          $images = get_sub_field('images');

          foreach($images as $image) { // For each image to be displayed. ?>
    <div class=imageDisplay>
      <a href="<?php echo $image['image_upload']['url'] ?>" download>
          <span class="image"><img src="<?php echo $image['image_upload']['sizes']['medium']; ?>" /></span>
          <div class="image-description">
            <h3 class="button"><?php echo $image['image_name_display']; ?></h3>
            <p><?php echo $image['image_description']; ?></p>
          </div>
      </a>
    </div>
    
        <?php
            
         } // end foreach image ?>
        
        <div class="backToTop"><a href="#TOP">Back to Top</a></div>
        
        <?php
        
        elseif( get_row_layout() == 'videos' && current_user_can($whoVideos) ) : // End files layout option display and begin displaying images layout ?>
        
        <?php
        $level = '';
        
        switch ($whoVideos) {
          case 'read_walkers':
            $level = 'TV';
            break;
          case 'read_chapters':
            $level = 'CB';
            break;
          case 'read_fields':
            $level = 'FS';
            break;
          case 'read_division_nationals':
            $level = 'DN';
            break;
        } ?>

    <h2 class="flexVideo" id="<?php the_sub_field('header_videos_anchor'); ?>"><?php the_sub_field('section_header_videos'); ?> <i><small>(<?php echo $level; ?>)</small></i></h2>

        <?php
    
          $videos = get_sub_field('videos');

          foreach($videos as $video) { // For each video to be displayed. ?>
    <div class=videoDisplay>
      <?php if ($video['video_source'] === 'Vimeo') : ?>
        <iframe src="https://player.vimeo.com/video/<?php echo $video['video_id'] ?>" width="700" height="394" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <?php elseif ($video['video_source'] === 'You Tube') : ?>
        <iframe width="700" height="394" src="https://www.youtube.com/embed/<?php echo $video['video_id'] ?>" frameborder="0" allowfullscreen></iframe>
      <?php endif ?>
      <p><?php echo $video['video_description']; ?></p>
    </div>
    
        <?php  //<iframe src="https://player.vimeo.com/video/131451827" width="500" height="282" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

            
         } // end foreach video ?>
        
        <div class="backToTop"><a href="#TOP">Back to Top</a></div>

        <?php 

        endif; // We've covered all our bases. 

      endwhile;  // We can stop showing our layouts now.

    elseif( !have_rows('page_content') && is_user_logged_in() ) : // Hide it all! ?>
    
    <p>This section doesn't have content yet. But don't worry, it will soon. In the meantime, check out all the other great content on the site.</p>

        <?php
    
    else : // Nothing to see here. ?>
    
    <p>The content on this page is for internal use only. Please login with the link above to continue. If you require access to ChapterLand, contact your supervisor. If you are looking for AFSP's public site, <a href="http://afsp.dev.cc">click to visit afsp.dev.cc.</a></p>
    
        <?php

    endif;  // All the content. Nothing else to see here.
    
    ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'chapterland' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
