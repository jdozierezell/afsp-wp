<?php
/**
* Customize the Favorites Button CSS Classes
*/
add_filter('favorites/button/css_classes', 'custom_favorites_button_css_classes', 10, 3);
function custom_favorites_button_css_classes($classes, $post_id, $site_id)
{
    $classes = 'btn btn--rounded bg-poppy simplefavorite-button'; // simplefavorite-button is js selector
    return $classes;
}

/**
* Customize the Favorites Listing HTML
*/
add_filter('favorites/list/listing/html', 'custom_favorites_listing_html', 10, 4);
function custom_favorites_listing_html($html, $markup_template, $post_id, $list_options)
{
    global $post;
    $post = get_post($post_id);
    // determine if item is one of the user's favorites
    $is_favorite  = false;
    $favorites    = get_user_favorites(); // built-in function of favorites plugin requires favorites plugin activation
    $post_ID      = get_the_ID();
    $access       = get_field('iap_access_levels');
    $access_first = substr($access->name, 0, 1);
  if (in_array($post_ID, $favorites)) :
        $is_favorite = true;
    endif;
    // determine if item has children
    $has_children = false;
    $current_item_slug = get_post_field('post_name');
    $term = get_term_by('slug', $current_item_slug, 'active_page');
  if (is_object($term)) :
    if ($term->count > 0) :
            $has_children = true;
    endif;
  endif;
    // build image source
    $img_src = '';
  if (get_post_type() === 'item') :
        $img = get_field('ii_image_upload');
        $img_src = $img['url'];
  elseif (get_post_type() === 'page') :
        $img = get_field('di_image');
        $img_src = $img['url'];
  endif; ?>
        <li class="list-item">
            <a href="<?= get_the_permalink(); ?>">
                <img class="list-item__img" src="<?= $img_src; ?>" alt="This is a list item image." />
                <div class="list-item__info">
                    <?php if ($has_children) : ?>
                        <i class="fa fa-folder"></i>
                    <?php endif; ?>
                    <p class="list-item__title"><?= get_the_title(); ?> (<?= $access_first; ?>)</p>
                    <?php if ($is_favorite) : ?>
                        <i class="fa fa-heart"></i>
                    <?php endif; ?>
                </div>
            </a>
        </li>
    <?php wp_reset_postdata();
}