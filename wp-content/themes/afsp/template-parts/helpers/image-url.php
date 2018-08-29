<?php function image_url ($field, $sub) {
  if ($sub == 1) {
    $image = get_sub_field($field);
  } else {
    $image = get_field($field);
  }
  $image_array = wp_get_attachment_image_src($image['id']);
  $image_url = $image_array[0];
  // if the page is loaded over ssl, we need to add the secure protocol to the source url
  $image_url = str_replace('http://', 'https://', $image_url);
  // $image_url = str_replace('afsp.imgix.net', 'afsp.org', $image_url);
  if($pos = strpos($image_url, '?') !== false) :
    $image_url = strstr($image_url, '?', true);
  endif;
  return $image_url;
}	?>