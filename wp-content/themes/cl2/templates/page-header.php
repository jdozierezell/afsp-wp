<?php use Roots\Sage\Titles; ?>

<header class="page-header">
    <h1>
        <?php if (is_search()) :
            global $wp_query;
            printf('Currently Showing Results for <span class="hl-brand-blue">%s</span>', $wp_query->query['s']);
        elseif (is_page('whats-new')) :
            printf("What's New (updated in last 90 days)");
        else :
            echo Titles\title();
          if (get_field('iap_access_level')) :
                $access       = get_field('iap_access_levels');
                $access_level = $access->slug;
                $access_first = substr($access->name, 0, 1);
                echo ' (' . $access_first . ')';
            endif;
        endif; ?>
    </h1>
    <div class="main__button-wrapper">
        <?php if (!is_search() && !is_page('dashboard') && !is_page('whats-new') && !is_page('your-favorites')) :
            echo get_favorites_button();
        endif;
if (get_post_type() === 'item' && !is_search()) :
  if (get_field('ii_item_type') === 'file-image') :
                $file = get_field('ii_file_upload');
                $image = get_field('ii_image_upload');
            endif;
            $file_type = get_field('ii_file_type');
  if (!empty($file) && ($file_type !== 'jpg' && $file_type !== 'png' && $file_type !== 'gif')) : ?>
                <a class="btn btn--rounded bg-brand-blue" href="<?= $file['url']; ?>" target="_blank">Download</a>
            <?php elseif (!empty($image)) : ?>
                <a class="btn btn--rounded bg-brand-blue" href="<?= $image['url']; ?>" download>Download</a>
            <?php endif;
        endif; ?>
    </div>
</header>