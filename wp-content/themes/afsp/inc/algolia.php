<?php

add_filter( 'algolia_post_shared_attributes', 'my_post_attributes', 10, 2 );
add_filter( 'algolia_searchable_post_shared_attributes', 'my_post_attributes', 10, 2 );

/**
 * @param array   $attributes
 * @param WP_Post $post
 *
 * @return array
 */
function my_post_attributes( array $attributes, WP_Post $post ) {

    if ( 'quilt_square' !== $post->post_type ) {
        // We only want to add an attribute for the 'quilt_square' post type.
        // Here the post isn't a 'quilt_square', so we return the attributes unaltered.
        return $attributes;
    }

    // Get the field value with the 'get_field' method and assign it to the attributes array.
    // @see https://www.advancedcustomfields.com/resources/get_field/
    $attributes['state'] = get_field( 'your_state', $post->ID );
    $attributes['image'] = get_field( 'q_square', $post->ID );
    $attributes['description'] = get_field( 'q_description', $post->ID );

    // Always return the value we are filtering.
    return $attributes;
}

add_filter( 'algolia_posts_quilt_square_index_settings', 'quilt_square_index_settings' );
// We could also have used a more general hook 'algolia_posts_index_settings',
// but in that case we would have needed to add a check on the post type
// to ensure we only adjust settings for the 'quilt_square' post_type.

/**
 * @param array $settings
 *
 * @return array
 */
function quilt_square_index_settings( array $settings ) {

    // Make Algolia search into the fields when searching for results.
    // Using ordered instead of unordered would make words matching in the beginning of the attribute
    // make the record score higher.
    // @see https://www.algolia.com/doc/api-client/ruby/parameters#attributestoindex
    $settings['attributesToIndex'][] = 'unordered(state)';
    $settings['attributesToIndex'][] = 'unordered(image)';
    $settings['attributesToIndex'][] = 'unordered(description)';

    // Make Algolia return a pre-computed snippet of 50 chars as part of the result set.
    // @see https://www.algolia.com/doc/api-client/ruby/parameters#attributestohighlight
    $settings['attributesToSnippet'][] = 'description:50';

    // Always return the value we are filtering.
    return $settings;
}
