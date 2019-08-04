<?php

	$filename = 'https://afsp.org/wp-content/themes/afsp/imports/donor-drive.xml';

  libxml_use_internal_errors(true);
  $xml = simplexml_load_file($filename);
  $json = json_encode($xml);

  if(!$json) : // make sure donor drive isn't being f*cking stupid
    return;
  endif;

  $json_file = 'https://afsp.org/wp-content/themes/afsp/imports/algolia-merged.json';

  if(!file_exists($filename)) {
    echo 'File not found.';
  }

  $fp = fopen($json_file, 'w');

  if(!$fp) {
      echo 'File open failed.';
  }

  fwrite($fp, $json);
  fclose($fp);

echo var_dump($array);