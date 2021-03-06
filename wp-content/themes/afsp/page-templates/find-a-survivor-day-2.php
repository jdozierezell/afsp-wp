<?php
/**
 * Template Name: Find International Survivors of Suicide Loss Day
 *
 * @package afsp
 */

get_header();
get_template_part( 'template-parts/title' );
?>
<section class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</section>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
        <style>
            #isosld_filter {
                display: none;
            }
            #selectInstructions {
                display: inline-block;
                width: 45%;
                float: left;
                line-height: 1.5rem;
            }
            #sdSelect-2,
            #sdSelect-4 {
                min-height: 2rem;
            }
            #selector-2,
            #selector-4 {
                display: inline-block;
                width: 54%;
                float: right;
            }
            @media (max-width: 920px) {
                .spanHide {
                    display: none;
                }
            }
            @media (max-width: 600px) {
                .tableHide {
                    display: none;
                }
            }
        </style>
		<section class="container">
			<p>New events are being added every day. If you don't find an event near you, please check back.</p>
            <?php global $wpdb;

            $query = "
                SELECT *
                    FROM wp_posts posts
                    WHERE posts.post_type = 'survivor_day'
                    AND (posts.post_status = 'publish')
                ";

            $sd_events = $wpdb->get_results($query, OBJECT);

            // The Loop
            if ( $sd_events ) :	?>
            <!-- Table Markup -->
                <div id="sdSelect-2"><span id="selectInstructions">In the U.S. or Canada?<span class="spanHide">
                            Select your state to narrow results</span></span></div>
                <div id="sdSelect-4"><span id="selectInstructions">Outside the U.S. or Canada?<span class="spanHide">
                            Select your country instead</span></span></div>
            <table id="isosld" class="tablepress">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>City</th>
                        <th class="tableHide">State/Province</th>
                        <th>Postal Code</th>
                        <th class="tableHide">Country</th>
                    </tr>
                </thead>
                <tbody>
                    <?php global $post;
                        foreach($sd_events as $post) :
                            setup_postdata($post);
                            $link = get_permalink();
                            $title = get_the_title();
                            $country = get_field( 'sd_event_country' );
                            $city = get_field( 'sd_event_city' );
                            $state = get_field( 'sd_event_state' ) != '' ? get_field( 'sd_event_state' ) : get_field( 'sd_event_province');
                            $zip = get_field( 'sd_event_zip_code' );
                        ?>
                    <tr>
                        <td><a href="<?php echo $link; ?>"><?php echo $title; ?></a></td>
                        <td><?php echo $city; ?></td>
                        <td class="tableHide"><?php echo $state; ?></td>
                        <td><?php echo $zip; ?></td>
                        <td class="tableHide"><?php echo $country; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            <?php endif; ?>
        </section>
		<section class="container">
			<div class="support-group__content">
				<?php the_content(); ?>
			</div>
		</section>



        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
        <script>
            jQuery(document).ready(function() {
                // fnFilterClear plugin for datatables
                jQuery.fn.dataTableExt.oApi.fnFilterClear  = function ( oSettings )
                {
                    var i, iLen;

                    /* Remove global filter */
                    oSettings.oPreviousSearch.sSearch = "";

                    /* Remove the text of the global filter in the input boxes */
                    if ( typeof oSettings.aanFeatures.f != 'undefined' )
                    {
                        var n = oSettings.aanFeatures.f;
                        for ( i=0, iLen=n.length ; i<iLen ; i++ )
                        {
                            jQuery('input', n[i]).val( '' );
                        }
                    }

                    /* Remove the search text for the column filters - NOTE - if you have input boxes for these
                     * filters, these will need to be reset
                     */
                    for ( i=0, iLen=oSettings.aoPreSearchCols.length ; i<iLen ; i++ )
                    {
                        oSettings.aoPreSearchCols[i].sSearch = "";
                    }

                    /* Redraw */
                    oSettings.oApi._fnReDraw( oSettings );
                }
                // end fnFilterClear
                jQuery('#isosld').DataTable( {
                                            initComplete: function () {
                                                var table = this
                                                table.api().columns([ 2, 4 ]).every( function () {
                                                    var column = this
                                                    var select = jQuery('<select><option value=""></option></select>')
                                                        .attr( 'id', `selector-${column[0][0]}` )
                                                        .appendTo( jQuery(`#sdSelect-${column[0][0]}`) )
                                                        .on( 'change', function () {
                                                            if (column[0][0] == 2) {
                                                                jQuery("#selector-4").prop('selectedIndex',0)
                                                                table.fnFilterClear()
                                                            } else if (column[0][0] == 4) {
                                                                jQuery("#selector-2").prop('selectedIndex',0)
                                                                table.fnFilterClear()
                                                            }
                                                            var val = jQuery.fn.dataTable.util.escapeRegex(
                                                                jQuery(this).val()
                                                            )

                                                            column
                                                                .search( val ? '^'+val+'$' : '', true, false )
                                                                .draw();
                                                        } )

                                                    column.data().unique().sort().each( function ( d, j ) {
                                                        select.append( '<option value="'+d+'">'+d+'</option>' )
                                                    } )
                                                } )
                                            },
                    paging: false,
                    // searching: false,
                    order: [ 3, 'asc' ]
                                        } )
                // Hide USA and Canada from country selector
                jQuery("#selector-4 option:contains('United States of America')").remove()
                jQuery("#selector-4 option:contains('Canada')").remove()
            } )
        </script>

	<?php
	endwhile;
endif;
get_footer();
?>
