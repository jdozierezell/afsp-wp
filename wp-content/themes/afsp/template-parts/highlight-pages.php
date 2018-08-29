<!-- Begin Featured Pages -->

				<?php if(get_field('hp_display') == 'blocks') :
					get_template_part('template-parts/highlight-pages-blocks');
				elseif(get_field('hp_display') == 'summary') :
					get_template_part('template-parts/highlight-pages-summary');
				endif; ?>

<!-- End Featured Pages -->