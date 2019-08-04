<?php

	$filename = dirname(__FILE__).'/donor-drive.xml';

  libxml_use_internal_errors(true);
  $xml = simplexml_load_file($filename);
  $json = json_encode($xml);
var_dump($json);
  if(!$json) : // make sure donor drive isn't being f*cking stupid
    return;
  endif;

  $json_file = dirname(__FILE__).'/algolia-merged.json';

  if(!file_exists($filename)) {
    echo 'File not found.';
  }

  $fp = fopen($json_file, 'w');

  if(!$fp) {
      echo 'File open failed.';
  }

  fwrite($fp, $json);
  fclose($fp);