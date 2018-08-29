<?php
/**
 * Template Name: The Queue
 *
 * @package afsp
 */

				get_header(); 
				
				// WP_Query arguments
				$args = array(
							'post_type' => 'queues',
							'cat' => -51,
							'posts_per_page' => -1
				);

				// The Query
				$queues = new WP_Query($args); ?>

<h1 class="current-count">
	
				<?php echo '<span class="active">Active Projects: <span class="active__number">' . $queues->post_count . '</span></span><span class="current"> // Current Selection: <span class="selected__number"></span></span>'; ?>
	
</h1>				
<table id="thequeue" class="footable" data-page-size="100">
	<thead>
		<tr>
			<th width="13%">Date Due</th>
			<th width="19%">Project Name</th>
			<th width="14%">Dept. &amp; Contact(s)</th>
			<th width="9%">Format</th>
			<th width="10%">Assgn. To</th>
			<th width="11%">Status</th>   
			<th width="22%">Progress Notes</th>   
			<th>Requester's Notes</th>   
			<th>Attachment(s)</th> 
			<th>Date Requested</th>      
			<th>Edit</th> 
		</tr>
	</thead>
	<tbody>
		
				<?php // The Loop
				if ($queues->have_posts()) : while ($queues->have_posts()) : $queues->the_post();
						if(get_field('q_status') === 'On Hold') :
							$queue_class = 'on-time';
						else :
							
							$today = new DateTime();
							
							if(get_field('q_distributed') === 'online' || get_field('q_distributed') === 'small') :
								$queue_date = get_field('digital_delivery_date');
								$queue_date = new DateTime($queue_date);
							elseif (get_field('q_distributed') === 'large' || get_field('q_distributed') === 'dk') :
								$queue_date = get_field('physical_delivery_date');
								$queue_date = new DateTime($queue_date);
								$queue_date->modify('-14 days');
							endif;
							
							if($today > $queue_date) :
								$queue_class = 'past-due';
							else :
								$getting_started = new DateTime('+14 days');
								$meeting_requested = new DateTime('+12 days');
								$copyrighting = new DateTime('+10 days');
								$design = new DateTime('+7 days');
								if((get_field('q_status') === 'Just Getting Started' && $getting_started >= $queue_date) || (get_field('q_status') === 'Meeting Requested' && $meeting_requested >= $queue_date) || (get_field('q_status') === 'Copyrighting' && $copyrighting >= $queue_date) || (get_field('q_status') === 'Design' && $design >= $queue_date)) :
									$queue_class = 'falling-behind ';
								else :
									$queue_class = 'on-time';
								endif;
							endif;
							
						endif;
						 ?>
				
		<tr class="<?php echo $queue_class; ?>">
			<td>
			
				<?php if(get_field('q_status') === 'On Hold') :
					echo 'On Hold Until ' . get_field('q_hold_date');
				else :
					if(get_field('q_distributed') === 'online' || get_field('q_distributed') === 'small') :
						the_field('digital_delivery_date');
					elseif (get_field('q_distributed') === 'large' || get_field('q_distributed') === 'dk') :
						the_field('physical_delivery_date');
					endif; 
				endif; ?>
			
			</td>
			<td><strong><?php the_title(); ?></strong></td>
			<td>
				<p>
				
				<?php $field = get_field_object('department');
				$value = get_field('department');
				echo $field['choices'][$value]; ?>
				
			</p>
				
				<?php if(have_rows('q_contacts')) : while(have_rows('q_contacts')) : the_row(); ?>
				
				<p><?php the_sub_field('q_contact_name'); ?><br />
				<a href="mailto:<?php the_sub_field('q_contact_email'); ?>"><?php the_sub_field('q_contact_email'); ?></a></p>
				
				<?php endwhile;
				endif; ?>
				
			</td>
			<td>
				
				<?php $field = get_field_object('q_distributed');
				$value = get_field('q_distributed');
				echo $field['choices'][$value]; ?>
				
			</td>
			<td><?php the_field('assigned_to'); ?></td>
			<td>
				
				<?php echo get_field('q_status');
				if(get_field('q_status') === 'On Hold') :
					echo ' Until<br /><strong>' . get_field('q_hold_date') . '</strong>'; 
				endif; ?>
				
			</td>
			<td>
				
				<?php $notes = get_field('q_notes');
				
				if($notes) : 
					$notes = array_reverse($notes);
					$notes_number = count($notes);
					$counter = 0;
					foreach($notes as $note) : 
						if($counter >= 5) break; ?>
					
				<div class="notes"><span class="note__number"><?php echo $notes_number - $counter; ?>.</span><span class="note__detail"><?php echo $note['q_note']; ?></span></div>
				
				<?php $counter++;
					endforeach;
				endif; ?>
				
			</td>
			<td><?php the_field('q_requesters_notes'); ?></td>
			<td>
				
				<?php if(have_rows('file_attachments')) : 
					$num_attach = count(get_field('file_attachments'));
					$counter = 0;
					while(have_rows('file_attachments')) : the_row();
						$file = get_sub_field('attachment');
						if($file) : ?>
				
				<a class="link link--attachment" href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
				
				<?php $counter++;
							if($num_attach > $counter) echo '<br />';
						endif;
					endwhile;
				endif; ?>
				
			</td>
			<td><?php the_time('m/d/Y'); ?></td>
			<td><?php edit_post_link(); ?></td>
		</tr>
				
				<?php	endwhile;
				endif; ?>
		
	</tbody>
	
</table>
<h3 class="current-count">
	
				<?php echo '<span class="active">Active Projects: <span class="active__number">' . $queues->post_count . '</span></span><span class="current"> // Current Selection: <span class="selected__number"></span></span>'; ?>
	
</h3>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.footable-filter').bind('keyup', function() {
			setTimeout(function() {
				var current = $('#thequeue tbody tr:not([style="display: none;"])');
				var current_display = $('.selected__number');
				current_display.each(function() {
					$(this).text(current.length);
				});
			},300); // weird timeout duration set because we have to let footable do its hiding thing.
		});
	});
</script>

				<?php
				// Restore original Post Data
				wp_reset_postdata(); ?>
				
				<?php get_footer(); ?>