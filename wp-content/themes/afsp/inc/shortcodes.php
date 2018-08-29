<?php

// function accordion_shortcode($atts, $content = null) {
//   echo '<div class="accordion">';
//   echo do_shortcode($content);
//   echo '</div>';
// }

// function accordion_section_shortcode($atts, $content = null) {
//   $section_atts = shortcode_atts(array(
//       'title' => '',
//       'section_number' => '1'
//     ), $atts);
//   $section_output = '';
//   $section_output .= '<div class="accordion-section">';
//   $section_output .= '<a class="accordion-section-title" href="#accordion-' . $section_atts['section_number'] . '">';
//   $section_output .= $section_atts['title'];
//   $section_output .= '</a>';
  
//   return $section_output;
// }

// add_shortcode('accordion', 'accordion_shortcode');
// add_shortcode('accordion_section', 'accordion_section_shortcode');


function bartag_func( $atts ) {
  extract(shortcode_atts(
    array(
      'foo' => '{"no":"foo"}',
    ), $atts, 'bartag' ));

  $foo = json_decode($foo, true);

  echo count($foo);

  $bar = 'bartag: ';

  foreach ($foo as $a => $b) {
    $bar .= $a . ' ' . $b . ' ';
  }

  return $bar;
}
add_shortcode( 'bartag', 'bartag_func' );



function select_url_shortcode($atts) {

  // Attributes
  extract(shortcode_atts(
    array(
      'name_and_url' => '{"name":"url"}',
      'pre_url' => 'http://example.com/',
      'post_url' => '',
      'label' => 'Select'
    ),
    $atts,
    'select_url'
  ));

  $name_url = json_decode($name_and_url, true);

  $output  = '<label for="url-selector">' . $label . ' </label>';
  $output .= '<select id="url-selector" onchange="window.open(this.value);">';
  $output .= '<option value="#"></option>';

  foreach ($name_url as $name => $url) :
    $output .= '<option value="' . $pre_url . $url . $post_url . '">' . $name . '</option>';
  endforeach;

  $output .= '</select>';

  return $output;
}

add_shortcode('select_url', 'select_url_shortcode');

?>