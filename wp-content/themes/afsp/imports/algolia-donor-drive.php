<?php

	$filename = get_template_directory() . '/imports/donor-drive.xml';

  libxml_use_internal_errors(true);
  $xml = simplexml_load_file($filename);
var_dump($xml);
  $json = json_encode($xml);
  $array = json_decode($json, true);

  if(!$array) : // make sure donor drive isn't being f*cking stupid
    return;
  endif;

  $json_file = get_template_directory() . '/imports/algolia-merged.json';

  if(!file_exists($filename)) {
    echo 'File not found.';
  }

  $fp = fopen($json_file, 'w');

  if(!$fp) {
      echo 'File open failed.';
  }

  fwrite($fp, json_encode($array));
  fclose($fp);
