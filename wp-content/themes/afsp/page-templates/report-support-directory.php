<?php
/**
 * Template Name: Report - Support Directory
 *
 * @package afsp
 */

				get_header(); 
				get_template_part('template-parts/title'); ?>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
				
<div class="container">
	<h1 class="landing__title"><?php the_title(); ?></h1>
</div>
				
<section class="container__full">
<a href="#" id="xx">Export Table data into Excel</a>
<table class="tablepress" id="support_group_directory" style="width: 100%;">
	<thead>
		<tr>
			<th colspan="7">Survivor Support Group Fields</th>
			<th colspan="3">Support Group Name</th>
			<th colspan="1">Entry Info</th>
		</tr>
		<tr>
			<th>Support Group Name</th>
			<th>Contact Name(s)</th>
			<th>Contact Email(s)</th>
			<th>Support Group Meets</th>
			<th>City</th>
			<th>State</th>
			<th>Country</th>
			<th>Your Name</th>
			<th>Your Email</th>
			<th>AFSP Volunteer?</th>
			<th>Date Updated</th>
		</tr>
	</thead>
	<tbody>

				<?php // WP_Query arguments
				$args = array (
					'post_type'              => 'support_group',
					'post_status'            => 'publish',
					'pagination'             => false,
					'posts_per_page'         => '-1',
					'orderby'                => 'title',
				);

				// The Query
				$report_query = new WP_Query($args);

				// The Loop
				if ($report_query->have_posts()) :	while ($report_query->have_posts()) :	$report_query->the_post(); ?>

		<tr>
			<td><?php the_title(); ?></td>
			<td>

				<?php if(have_rows('contact_persons')) : 
					$count = count(get_field('contact_persons'));
					$i = 1;
					while(have_rows('contact_persons')) : the_row();
						$contact = get_sub_field('contact_name'); 
						if($i < $count) :
							$contact .= '<br />';
						endif;
						echo $contact;
					endwhile;
				endif; ?>
					
			</td>
			<td>

				<?php if(have_rows('contact_persons')) : 
					$count = count(get_field('contact_persons'));
					$i = 1;
					while(have_rows('contact_persons')) : the_row();
						$contact = get_sub_field('contact_email'); 
						if($i < $count) :
							$contact .= '<br />';
						endif;
						echo $contact;
					endwhile;
				endif; ?>
					
			</td>
			<td>

				<?php if(get_field('support_group_meets') == 'Continuously Throughout the Year') : 
					echo 'Continuously';
				else :
					echo get_field('start_date') . ' - ' . get_field('end_date');
				endif; ?>
					
			</td>
			<td><?php the_field('city'); ?></td>
			<td>

				<?php if(get_field('country') == 'United States of America') :
					echo get_field('state');
				elseif(get_field('country') == 'Canada') :
					the_field('province');
				endif; ?>
						
			</td>
			<td><?php the_field('country'); ?></td>
			<td><?php the_field('your_name'); ?></td>
			<td><?php the_field('your_email_address'); ?></td>
			<td><?php the_field('how_volunteer_with_afsp'); ?></td>
			<td><?php the_field('last_updated'); ?></td>
		</tr>

				<?php	endwhile;
				endif;

				// Restore original Post Data
				wp_reset_postdata(); ?>



	</tbody>
</table>
</section>

<script type="text/javascript">
jQuery(document).ready(function ($) {

	$('#support_group_directory').DataTable({
		'paging': false
	});

	function exportTableToCSV($table, filename) {
    
        var $rows = $table.find('tr:has(td),tr:has(th)'),
    
            // Temporary delimiter characters unlikely to be typed by keyboard
            // This is to avoid accidentally splitting the actual contents
            tmpColDelim = String.fromCharCode(11), // vertical tab character
            tmpRowDelim = String.fromCharCode(0), // null character
    
            // actual delimiter characters for CSV format
            colDelim = '","',
            rowDelim = '"\r\n"',
    
            // Grab text from table into CSV formatted string
            csv = '"' + $rows.map(function (i, row) {
                var $row = $(row), $cols = $row.find('td,th');
    
                return $cols.map(function (j, col) {
                    var $col = $(col), text = $col.text();
    
                    return text.replace(/"/g, '""'); // escape double quotes
    
                }).get().join(tmpColDelim);
    
            }).get().join(tmpRowDelim)
                .split(tmpRowDelim).join(rowDelim)
                .split(tmpColDelim).join(colDelim) + '"',
    
            
    
            // Data URI
            csvData = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
            
            console.log(csv);
            
        	if (window.navigator.msSaveBlob) { // IE 10+
        		//alert('IE' + csv);
        		window.navigator.msSaveOrOpenBlob(new Blob([csv], {type: "text/plain;charset=utf-8;"}), "csvname.csv")
        	} 
        	else {
        		$(this).attr({ 'download': filename, 'href': csvData, 'target': '_blank' }); 
        	}
    }
    
    // This must be a hyperlink
    $("#xx").on('click', function (event) {
    	
        exportTableToCSV.apply(this, [$('#support_group_directory'), 'export.csv']);
        
        // IF CSV, don't do event.preventDefault() or return false
        // We actually need this to be a typical hyperlink
    });

});
</script>

				<?php get_footer(); ?>