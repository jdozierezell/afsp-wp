<?php
/**
 * Template Name: Research Videos Grid
 *
 * @package afsp
 */

get_header(); 
get_template_part( 'template-parts/title' );
if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part('template-parts/splash-container-full');
?>  
    <section style="font-size: 1.3rem; width: 89.25%; margin-left: auto; margin-right: auto;"><?php the_content(); ?></section>
    <div class="filters">
        <div class="container">
            <?php
            $featured_speaker = get_field_object( 'field_5ba36247e8f19' );
            if ( $featured_speaker ) :
            ?>
                <div class="facet">
                    <label for="featured_speaker">Featured Speaker</label>		    
                    <select class="grid__select" data-filter-group="featured_speaker" id="featured_speaker" name="<?php echo $featured_speaker['key']; ?>">
                        <option value="*">Show All</option>
                        <?php foreach($featured_speaker['choices'] as $key => $value) { ?>
                            <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>		
            <?php 
            endif; 
            $area = get_field_object('field_5b97b49979b7c');
            if ( $area ) :
            ?>
                <div class="facet">
                    <label for="area">Research Area(s)</label>		    
                    <select class="grid__select" data-filter-group="area" id="area" name="<?php echo $area['key']; ?>[]" multiple>
                        <option value="*">Show All</option>
                        <?php foreach($area['choices'] as $key => $value) { ?>
                            <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
            <?php
            endif; 
            $location = get_field_object('field_5ba3625ce8f1a');
            if ( $location ) :
            ?>
                <div class="facet">
                    <label for="location">Research Location</label>		    
                    <select class="grid__select" data-filter-group="location" id="location" name="<?php echo $location['key']; ?>">
                        <option value="*">Show All</option>
                        <?php foreach($location['choices'] as $key => $value) { ?>
                            <option value=".<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
            <?php endif; ?>
        </div>
    </div>   
    <section class="grid">
        <?php 
        if ( have_rows( 'vg_videos' ) ) : while ( have_rows( 'vg_videos' ) ) : the_row(); 
                if ( get_sub_field( 'vg_video_source' ) === 'youtube' ) :
                    $video_url = 'https://www.youtube.com/embed/' . get_sub_field( 'vg_youtube_id' ) . '?rel=0&amp;showinfo=0';
                elseif ( get_sub_field( 'vg_video_source' ) === 'vimeo' ) :
                    $video_url = 'https://player.vimeo.com/video/' . get_sub_field( 'vg_vimeo_id' );
                endif;
                $class_tags = '';
                $featured_speaker = get_sub_field( 'vg_video_featured_speaker' );
                $location = get_sub_field( 'vg_video_location' );
                $tags = get_sub_field( 'vg_video_tags' );
                if ( $featured_speaker ) :
                    $class_tags .=  ' ' . $featured_speaker;
                endif;
                if ( $location ) :
                    $class_tags .=  ' ' . $location;
                endif;
                if ( $tags ) :
                    foreach( $tags as $tag ) {
                        $class_tags .= ' ' . $tag;
                    }
                endif;
                ?>
                <div class="grid__item--video<?php echo $class_tags; ?>">
                    <div class="videoEmbed">
                        <iframe src="<?php echo $video_url; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </section>   
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('select').prop('selectedIndex', function () {
                var selected = $(this).children('[selected]').index();
                return selected != -1 ? selected : 0;
            });
        });
        var $grid = jQuery('.grid').isotope({
            itemSelector: '.grid__item--video',
            layoutMode: 'fitRows',
            getSortData: {
                location: '[data-location]', // grant location
                featured_speaker: '[data-featured_speaker]'  // grant featured_speaker
            },
            sortBy: ['featured_speaker'],
            sortAscending: false
        });
        var filters = {};
        jQuery('.filters').on('change', '.grid__select', function() {
            var $this = jQuery(this);
            var filterGroup = $this.attr('data-filter-group');
            filters[filterGroup] = $this.val();
            var filterValue = concatValues(filters);
            if(filterValue==='**' || filterValue==='***') {
                filterValue = '*';
            }
            console.log(filterValue)
            $grid.isotope({filter: filterValue});
        });
        function concatValues(filters) {
            var featured_speaker, area, location, value = ' ';
            if(filters['featured_speaker'] && filters['featured_speaker'] !== '*') {
                featured_speaker = filters['featured_speaker'];
                value += featured_speaker;
            }
            if(filters['location'] && filters['location'] !== '*') {
                location = filters['location'];
                value += location;
            }
            if(filters['area'] && filters['area'] !== '*') {
                area = filters['area'];
                var preValue = value;
                for(var i = 0; i < area.length; i++) {
                    value += area[i];
                    if(i + 1 !== area.length) {
                        value += ', ' + preValue;
                    }
                }
            }
            return value;
        }  
    </script>
    <?php
    endwhile;
endif;
get_footer();
?>