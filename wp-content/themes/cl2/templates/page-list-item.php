<?php
$access       = get_field('iap_access_levels');
$access_level = $access->slug;
$access_first = substr($access->name, 0, 1);
$user         = wp_get_current_user();
$user_level   = $user->roles[0];
// if the user doesn't have the correct access level, get outta there
if (role_to_number($access_level) > role_to_number($user_level)) :
    return;
endif;
// determine if item is one of the user's favorites
$is_favorite = false;
$favorites = get_user_favorites(); // built-in function of favorites plugin requires favorites plugin activation
$post_ID = get_the_ID();
if (in_array($post_ID, $favorites)) :
    $is_favorite = true;
endif;
// determine if item has children
$term_has_children = false;
$current_item_slug = get_post_field('post_name');
$term = get_term_by('slug', $current_item_slug, 'active_page');
if (is_object($term)) :
  if ($term->count > 0) :
        $term_has_children = true;
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
        <?php if (get_field('ii_link_url') != '') :
            $item_url = get_field('ii_link_url');
            $target = '_blank';
        else :
            $item_url = get_the_permalink();
            $target = '_self';
        endif; ?>
        <a href="<?= $item_url; ?>" target="<?= $target; ?>">
            <img class="list-item__img" src="<?= $img_src; ?>" alt="This is a list item image." />
            <div class="list-item__info">
                <?php if ($term_has_children) : ?>
                    <i class="far fa-folder"></i>
                <?php endif; ?>
                <p class="list-item__title"><?= get_the_title(); ?> (<?= $access_first; ?>)</p>
                <?php if ($is_favorite) : ?>
                    <i class="far fa-heart"></i>
                <?php endif; ?>
            </div>
        </a>
    </li>