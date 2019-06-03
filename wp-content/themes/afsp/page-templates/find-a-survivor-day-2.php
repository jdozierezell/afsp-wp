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
            .form-group.footable-filtering-search,
            .footable-filter {
                display: none;
            }
            .form-control {
                color: #262626;
            }
        </style>
		<section class="container">
			<p>New events are being added every day. If you don't find an event near you, please check back.</p>
            <!-- Table Markup -->
            <div id="sdSelect"></div>
            <table id="isosld" class="tablepress">
                <thead>
                <tr>
                    <th>Event Name</th>
                    <th>City</th>
                    <th>State/Province</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Montgomery, Alabama</td>
                    <td>Montgomery</td>
                    <td>Alabama</td>
                    <td>36109</td>
                    <td>United States of America</td>
                </tr>
                <tr>
                    <td>Montgomery, Alabama</td>
                    <td>Montgomery</td>
                    <td>Alabama</td>
                    <td>00001</td>
                    <td>United States of America</td>
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
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
                jQuery('#isosld').DataTable( {
                                            initComplete: function () {
                                                this.api().columns(2).every( function () {
                                                    var column = this
                                                    var select = jQuery('<select><option value=""></option></select>')
                                                        .appendTo( jQuery('#sdSelect') )
                                                        .on( 'change', function () {
                                                            var val = $.fn.dataTable.util.escapeRegex(
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
                    searching: false,
                    order: [ 3, 'asc' ]
                                        } )
            } )
        </script>

	<?php
	endwhile;
endif;
get_footer();
?>
