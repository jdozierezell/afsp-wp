<?php
/**
 * Template Name: Videos Grid
 *
 * @package afsp
 */

get_header(); 
get_template_part( 'template-parts/title' );
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
        <section class="container" style="text-align: center; font-weight: bold;"><?php the_content(); ?></section>
        <section class="grid">
            <?php if ( have_rows( 'vg_videos' ) ) : while ( have_rows( 'vg_videos' ) ) : the_row(); ?>
                <div class="videoEmbed">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/H44tfaLvp8I?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            <?php
                endwhile;
            endif;
            ?>
        </section>   
	
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>

<?php
    endwhile;
endif;
get_footer();
?>