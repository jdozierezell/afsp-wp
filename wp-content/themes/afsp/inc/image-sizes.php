<?php



add_action('after_setup_theme', 'afsp_setup_images');

function afsp_setup_images() {
  
// Horizontal Golden Ratio

  // add_image_size('2585x1600', 2585, 1600, true);
  // add_image_size('2424x1500', 2424, 1500, true);
  // add_image_size('2262x1400', 2262, 1400, true);
  // add_image_size('1939x1200', 1939, 1200, true);
  // add_image_size('1616x1000', 1616, 1000, true);
  // add_image_size('1292x800', 1292, 800, true);
  // add_image_size('808x500', 808, 500, true);
  // add_image_size('404x250', 404, 250, true);

// Horizontal Octave Ratio

  // add_image_size('3200x1600', 3200, 1600, true);
  

  
}

// Make the sizes selectable from the admin

add_filter('image_sizes_names_choose', 'afsp_custom_sizes');

function afsp_custom_sizes($sizes) {
  return array_merge($sizes, array(
      '2585x1600' => __('2585x1600'), // For each, the number on the left is the size name above; on the right is the human readable. Here they just happen to be the same thing.
      '2424x1500' => __('2424x1500'),
      '2262x1400' => __('2262x1400'),
      '1939x1200' => __('1939x1200'),
      '1616x1000' => __('1616x1000'),
      '1292x800' => __('1292x800'),
      '808x500' => __('808x500'),
      '404x250' => __('404x250')
    ));
}

function afsp_ricg($var_name, $columns, $columnsOf) {
  $args = array(
    'sizes' => array(
      array(
        'size_value' => ($columns / $columnsOf * 100) . vw,
        'mq_value' => '768px',
        'mq_name' => 'min-width'
      ),
      array(
        'size_value' => '100vw'
      )
    )
  ); 

  $res_img = tevkori_get_srcset_string( $var_name['id'], '2585x1600'); 
  $res_size = tevkori_get_sizes_string( $var_name['id'], '2585x1600', $args);
  return $res_img . $res_size;
  
}



?>