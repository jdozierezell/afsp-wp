<!-- Begin Featured Pages -->

        <?php if(get_field('vd_video_highlights_hp_display') == 'blocks') :
					get_template_part('template-parts/video-highlight-pages-blocks');
				elseif(get_field('vd_video_highlights_hp_display') == 'summary') :
					get_template_part('template-parts/video-highlight-pages-summary');
				endif; ?>

<!-- End Featured Pages -->