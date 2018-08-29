<?php
/*
Template Name: Contacts Page
*/

get_header(); ?>

<div class="container">
<div id="primary" class="content-container">

<?php if(current_user_can('read_walkers')) :
  while ( have_posts() ) : the_post(); // start WP_Query Loop ?>

<?php
  $pageImage = get_field('page_image');
?>

  <div class="prettyFace">
    <img src="<?php echo $pageImage['sizes']['pretty-face']; ?>" alt="<?php echo $pageImage['alt']; ?>">
  </div>
  <article id="post-<?php the_ID(); ?>" <?php post_class( 'pageContent' ); ?>> <!--start pageContent-->
    <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    <div id="TOP" class="entry-content">
		<?php 

      if( have_rows('contact_list') && is_user_logged_in() ) : // same check as below around ln 55. No sense in showing the table of contents to people who can't read the content. ?>
    
    <h2>Table of Contents</h2>
        
        <?php
        
        
        while( have_rows('contact_list') ) : the_row();
        
        if( get_row_layout() == 'general_contact' ) : // If the row contains general contact information ?>
    
    <a href="#general">
      <h3>General Contact Information</h3>
    </a>
    
        <?php

        elseif( get_row_layout() == 'staff_section' ) : // If the row contains staff directories 
          $subField = get_sub_field('staff_type');
          switch($subField) {
            case 'Executive Staff':
              echo '<a href="#executive">';
              break;
            case 'Senior Management':
              echo '<a href="#senior">';
              break;
            case 'New York City Office':
              echo '<a href="#nyc">';
              break;
            case 'Washington DC Office':
              echo '<a href="#dc">';
              break;
            case 'Central Division Staff':
              echo '<a href="#central">';
              break;
            case 'Eastern Division Staff':
              echo '<a href="#eastern">';
              break;
            case 'Southern Division Staff':
              echo '<a href="#southern">';
              break;
            case 'Western Division Staff':
              echo '<a href="#western">';
              break;
          } // what type of staff section is it? ?>
      <h3><?php echo $subField ?></h3>
    </a>
    
      <?php
      
        endif;

        endwhile;

      else :

      endif; // End table of contents display


if( have_rows('contact_list') ) :

  while ( have_rows('contact_list') ) : the_row();
  
  if( get_row_layout() === 'text_box' ) : ?>
  
  <h3><?php echo the_sub_field( 'text' ); ?></h3>
  
  <?php endif;

  if( get_row_layout() === 'general_contact' ) : ?>
  
    <h2 class="contact__heading" id="general">General Contact Information</h2>
    
    <?php
      $offices = get_sub_field('office_info');
      foreach($offices as $office) { ?>
        <p>
        <?php echo '<span class="contactName">' . $office['office'] . '</span>' .
        '<br />' . $office['address'] .
        '<br />';
        $phoneNumbers = $office['phone_numbers'];
        foreach($phoneNumbers as $phone) {
          echo $phone['phone'] . '<br />';
        } 
        $emails = $office['emails'];
        foreach($emails as $email) {
          echo '<b>' . $email['type'] . ':</b> ' . '<a href="mailto:' . $email['email'] . '">' . $email['email'] . '</a><br />';
        }
        ?>
        </p>
      <?php
      }
      
    ?>
    <?php
    endif;  // End displaying general info

  if( get_row_layout() === 'staff_section' ) : 
    $subField = get_sub_field('staff_type');
    switch($subField) {
      case 'Executive Staff':
        echo '<h2 class="contact__heading" id="executive">' . $subField . '</h2>';
        break;
      case 'Senior Management':
        echo '<h2 class="contact__heading" id="senior">' . $subField . '</h2>';
        break;
      case 'New York City Office':
        echo '<h2 class="contact__heading" id="nyc">' . $subField . '</h2>';
        break;
      case 'Washington DC Office':
        echo '<h2 class="contact__heading" id="dc">' . $subField . '</h2>';
        break;
      case 'Central Division Staff':
        echo '<h2 class="contact__heading" id="central">' . $subField . '</h2>';
        break;
      case 'Eastern Division Staff':
        echo '<h2 class="contact__heading" id="eastern">' . $subField . '</h2>';
        break;
      case 'Southern Division Staff':
        echo '<h2 class="contact__heading" id="southern">' . $subField . '</h2>';
        break;
      case 'Western Division Staff':
        echo '<h2 class="contact__heading" id="western">' . $subField . '</h2>';
        break;
    } // Determine what type of section it is and then display the h2 tag. 

  $contacts = get_sub_field('staff_contact');
  foreach ($contacts as $contact) {
      
    $contactName = $contact['first_name'] . ' ' . $contact['last_name'];
    if( $contact['suffix'] ) :
      $suffixes = $contact['suffix'];
        foreach( $suffixes as $suffix ) {
          $contactName = $contactName . ', ' . $suffix;          
        }
    endif;
    $contactName = '<span class="contactName">' . $contactName . '</span>';
    $contactEmail = '<a href="mailto:' . $contact['email'] . '">' . $contact['email'] . '</a>';
    $contactImage = $contact['image'];
      ?>
    
    <div class="contact__group"> 
      <div class="contact__image">
        
        <?php
        $size = 'medium';
        if($contactImage) :
           // echo wp_get_attachment_image($contactImage, $size);
          $image_array = wp_get_attachment_image_src($contactImage);
          $src = $image_array[0];
          // if the page is loaded over ssl, we need to add the secure protocol to the source url
          $src = str_replace('http://', 'https://', $src);
          if($pos = strpos($src, '?') !== false) :
            $src = strstr($src, '?', true);
          endif; ?>
      
        <img src="<?php echo $src; ?>?w=768&h=768&fit=crop&crop=faces" />

        <?php endif; ?>

      </div>
      <div class="contact__info">
          <?php echo $contactName . 
          '<br />' . $contact['title'] . 
          '<br />' . $contact['phone_number'] . 
          '<br />' . $contactEmail; ?> 
      </div>
    </div>
    
<?php
                                   
  }
      
  endif; // End displaying staff contact info.

  endwhile; // End while have contact_list

endif; ?>
    
    </div> <!-- .entry-content -->
  </article> <!-- .pageContent -->

<?php endwhile; // end WP_Query Loop
else : ?>

<p>The content on this page is for internal use only. Please login with the link above to continue. If you require access to ChapterLand, contact your supervisor. If you are looking for AFSP's public site, <a href="http://afsp.dev.cc">click to visit afsp.dev.cc.</a></p>

<?php endif; ?>

</div>

<?php get_footer(); ?>