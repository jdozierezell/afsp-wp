<?php

//Lets add Open Graph Meta Info

function insert_fb_in_head() {
global $post;
if ( !is_singular( 'quilt_square' )) //if it is not a post or a page
    return;
    echo '<script>console.log("hello")</script>';
    $image = get_field( 'q_square', $post->ID );
    $image_array = wp_get_attachment_image_src($image['id']);
    $src = $image_array[0];
    if($pos = strpos($src, '?') !== false) :
        $src = strstr($src, '?', true);
    endif;
    $description = get_field( 'q_description', $post->ID );

    // could add the commented out tags below, but Yoast is already doing that for us

    // echo '<meta property="og:title" content="' . get_the_title() . '"/>';
    // echo '<meta property="og:type" content="article"/>';
    // echo '<meta property="og:url" content="' . get_permalink() . '"/>';
    // echo '<meta property="og:site_name" content="AFSP"/>';
    
    echo '<meta property="og:image" content="' . $src . '?fit=crop&crop=faces&w=400&h=400"/>';
    echo '<meta property="og:description" content="AFSP\'s Digial Memory Quilt was created in memory of lost loved ones."/>';
echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );
?>