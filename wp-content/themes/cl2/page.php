<?php while (have_posts()) : the_post();
  if (is_page('dashboard')) :
    get_template_part('templates/content', 'dashboard');
  elseif (is_page('whats-new')) :
    get_template_part('templates/content', 'new');
  elseif (is_page('your-favorites')) :
    get_template_part('templates/content', 'favorites');
  elseif (is_page('program-tracker')) :
    get_template_part('templates/content', 'tracker');
  elseif (is_page('ppc-checklist')) :
    get_template_part('templates/content', 'ppc');
  elseif (is_page('business-card')) :
    get_template_part('pdf-templates/templates/business-card');
  else :
    get_template_part('templates/content', 'page');
  endif;
endwhile; ?>
