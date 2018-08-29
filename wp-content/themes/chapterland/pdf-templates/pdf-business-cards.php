<?php 

// require 'pdfcrowd.php';

require 'docraptor-php-0.3.0/autoload.php';

$businessCard = $_POST['html'];
echo '<pre>';
var_dump($businessCard);
echo '</pre>';

$configuration = DocRaptor\Configuration::getDefaultConfiguration();
$configuration->setUsername("nnuiFL08ehM6NeY2NhU");
// $configuration->setDebug(true);
$docraptor = new DocRaptor\DocApi();

$doc = new DocRaptor\Doc();
$doc->setTest(false);
$prince_options = new DocRaptor\PrinceOptions(); 
$prince_options->setMedia('print');
$doc->setDocumentContent($businessCard);
$doc->setName("My_AFSP_Business_Card.pdf");
$doc->setDocumentType("pdf");
$create_response = $docraptor->createDoc($doc);
header('Content-Description: Business Card');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename=My_AFSP_Business_Card.pdf');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . strlen($create_response));
ob_clean();
flush();
echo($create_response);

// try {
//   $client = new Pdfcrowd('jdozierezell', 'cebdb3e86c86fcd50579038f96813482');
//   if($businessCrops == true) :
//     $client->setPageWidth('4in');
//     $client->setPageHeight('2.5in');
//     $client->setWatermark($businessWatermark);
//   else :
//     $client->setPageWidth('3.5in');
//     $client->setPageHeight('2in');
//   endif;
//   $client->setPageMargins(0,0,0,0);
//   $client->usePrintMedia(true);
//   $client->enableBackgrounds(true);
  
  
//   $pdf = $client->convertHtml('<!DOCTYPE html>
//                   <html>
//                     <head>
//                       <title>Business Card Template</title>
//                       <link rel="stylesheet" href="http://chapterland.org/wp-content/themes/chapterland/style.css" type="text/css" />
//                     </head>
//                     <body>' .
//                     $businessCard .
//                     '</body>
//                   </html>'
//   );

  
//   header("Content-Type: application/pdf");
//   header("Cache-Control: max-age=0");
//   header("Accept-Ranges: none");
//   header("Content-Disposition: attachment; filename'\"business-card.pdf\"");
  
//   echo $pdf;
// }

// catch(PdfcrowdException $why) {
//   echo 'Pdfcrowd Error: ' . $why;
// }

?>    