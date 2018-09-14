<?php
/**
 * Template Name: Videos Grid
 *
 * @package afsp
 */

get_header(); 
get_template_part( 'template-parts/title' );
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php echo "<pre>";
var_dump(get_field_object('field_5b97b49979b7c'));
echo "</pre>"; ?>


<?php if(have_rows('vg_videos')) : while(have_rows('vg_videos')) : the_row();
echo "<pre>";
var_dump(get_field_object('field_5b97b49979b7c'));
echo "</pre>"; 
endwhile;
endif; ?>


        <div class="filters">
            <div class="container">
                <div class="facet">
                    <label for="type">Grant Type</label>		    
                    <select class="grid__select" data-filter-group="type" id="type" name="<?php echo $type['key']; ?>">
                        <option value="*">Show All</option>
                        <?php foreach($type['choices'] as $key => $value) { ?>
                            <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <section class="container" style="text-align: center; font-weight: bold;"><?php the_content(); ?></section>
        <section class="grid">
            <?php 
            if ( have_rows( 'vg_videos' ) ) : while ( have_rows( 'vg_videos' ) ) : the_row(); 
                    if ( get_sub_field( 'vg_video_source' ) === 'youtube' ) :
                    elseif ( get_sub_field( 'vg_video_source' ) === 'vimeo' ) :
                    endif;
                    ?>
                    <div class="grid__item--video">
                        <div class="videoEmbed">
                            <iframe src="https://www.youtube.com/embed/H44tfaLvp8I?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
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