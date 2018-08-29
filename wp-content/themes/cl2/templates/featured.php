<?php $post_object = get_sub_field('fi_featured_item');
$post = $post_object;
setup_postdata($post);
include(locate_template('templates/page-list-item.php'));
wp_reset_postdata();
?>