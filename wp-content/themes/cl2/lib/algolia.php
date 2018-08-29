<?php

add_filter( 'algolia_post_shared_attributes', 'my_item_attributes', 10, 2 );
add_filter( 'algolia_searchable_post_shared_attributes', 'my_item_attributes', 10, 2 );

/**
 * @param array   $attributes
 * @param WP_Post $post
 *
 * @return array
 */
function my_item_attributes( array $attributes, WP_Post $post ) {

    if ( 'item' !== $post->post_type ) {
        // We only want to add an attribute for the 'item' post type.
        // Here the post isn't a 'item', so we return the attributes unaltered.
        return $attributes;
    }

    // Get the field value with the 'get_field' method and assign it to the attributes array.
    // @see https://www.advancedcustomfields.com/resources/get_field/   
    $image = get_field('ii_image_upload', $post->ID);
    $attributes['display_image_url'] = $image['url'];
    $attributes['display_image_alt'] = $image['alt'];
    $attributes['type'] = get_field('ii_item_type', $post->ID);
    $attributes['description'] = get_field('ii_item_description', $post->ID);
    $attributes['access'] = get_field('iap_access_levels', $post->ID);
    $attributes['keywords'] = get_field('ii_keywords', $post->ID);
    for ($i = 0; $i < 2; $i++) {
        $attributes['section' . $i] = get_field('ii_content_sections_' . $i . '_ii_section_text', $post->ID);
    }
    
    // Always return the value we are filtering.
    return $attributes;
}

add_filter( 'algolia_posts_index_settings', 'my_items_index_settings' );
add_filter( 'algolia_searchable_posts_index_settings', 'my_items_index_settings' );

/**
 * @param array $settings
 * @param WP_Post $post
 *
 * @return array
 */
function my_items_index_settings( array $settings, WP_Post $post ) {

    if ( 'item' !== $post->post_type ) {
        // We only want to add an attribute for the 'item' post type.
        // Here the post isn't a 'item', so we return the attributes unaltered.
        return $settings;
    }

    // Make Algolia search into the fields when searching for results.
    // Using ordered instead of unordered would make words matching in the beginning of the attribute
    // make the record score higher.
    // @see https://www.algolia.com/doc/api-client/ruby/parameters#attributestoindex
    $settings['attributesToIndex'][] = 'unordered(description)';
    $settings['attributesToIndex'][] = 'unordered(keywords)';
    for ($i = 0; $i < 2; $i++) {
        $settings['attributesToIndex'][] = 'unordered(section' . $i . ')';
    }

    // Make Algolia return a pre-computed snippet of 50 chars as part of the result set.
    // @see https://www.algolia.com/doc/api-client/ruby/parameters#attributestohighlight
    $settings['attributesToSnippet'][] = 'description:50';
    
    // Always return the value we are filtering.
    return $settings;
}