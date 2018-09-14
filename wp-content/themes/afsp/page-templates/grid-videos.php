<?php
/**
 * Template Name: Videos Grid
 *
 * @package afsp
 */

get_header(); 
get_template_part( 'template-parts/title' );
if ( have_posts() ) : while ( have_posts() ) : the_post();
        $topic = get_field_object( 'field_5b97b49979b7c' );
        if ( $topic ) : 
        ?>
            <div class="filters">
                <div class="container">
                    <div class="facet">
                        <label for="type">Video Topic</label>		    
                        <select class="grid__select" data-filter-group="topic" id="topic" name="<?php echo $topic['key']; ?>">
                            <option value="*">Show All</option>
                            <?php foreach( $topic['choices'] as $key => $value ) { ?>
                                <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <section class="container" style="text-align: center; font-weight: bold;"><?php the_content(); ?></section>
        <section class="grid">
            <?php 
            if ( have_rows( 'vg_videos' ) ) : while ( have_rows( 'vg_videos' ) ) : the_row(); 
                    if ( get_sub_field( 'vg_video_source' ) === 'youtube' ) :
                    elseif ( get_sub_field( 'vg_video_source' ) === 'vimeo' ) :
                    endif;
                    $tags = get_sub_field( 'vg_video_tags' );
                    $class_tags = '';
                    if ( $tags ) :
                        foreach( $tags as $tag ) {
                            $class_tags .= ' ' . $tag;
                        }
                    endif;
                    ?>
                    <div class="grid__item--video<?php echo $class_tags; ?>">
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

        <script>
            var $grid = jQuery('.grid').isotope({
                itemSelector: 'grid__item--video',
                layoutMode: 'fitRows'
            })
            console.log(jQuery('.grid_select'))
            jQuery('.grid_select').on('change', function() {
                var $this = jQuery(this)
                var filterGroup = $this.attr('data-filter-group')
                filters[filterGroup] = $this.val()
                console.log(filters[filterGroup])
                $grid.isotope({filter: filters})
            })
        </script>
    <?php
    endwhile;
endif;
get_footer();
?>