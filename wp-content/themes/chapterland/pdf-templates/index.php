<?php 

require 'pdfcrowd.php';

try {
  $client = new Pdfcrowd('jdozierezell', 'cebdb3e86c86fcd50579038f96813482');
  $client->setPageWidth('6in');
  $client->setPageHeight('9in');
  $client->setPageMargins(0,0,0,0);
  $client->usePrintMedia(true);
  
  
  $pdf = $client->convertURI('http://afsp.dev.cc/wp-content/themes/pdfcrowd/pdf.html');

  
  header("Content-Type: application/pdf");
  header("Cache-Control: max-age=0");
  header("Accept-Ranges: none");
  header("Content-Disposition: attachment; filename'\"google_com.pdf\"");
  
  echo $pdf;
}

catch(PdfcrowdException $why) {
  echo 'Pdfcrowd Error: ' . $why;
}

?>