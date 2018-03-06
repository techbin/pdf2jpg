<?php
require_once(dirname(__FILE__).'/digiBook.php');//configuration file

$pdf_file=PDF_FILE; //PDF FILE LOCATION
$jpgloc=IMAGE_LOCATION."page.jpg";// LOCATION TO PLACE EXTRACTED JPG FILES
$book=new digiBook(); 
echo "Initializing book...<br>";

$book->convertPDF2JPG($pdf_file,$jpgloc);//CONVERT PDF TO JPG
echo "Converting PDF to JPG files...<br>";

$imgloc=IMAGE_LOCATION;// LOCATION TO PLACE EXTRACTED JPG FILES
$xmlfile=XML_LOCATION."source.xml";//LOCATION OF XML FILE INSIIDE  FLIP BOOK
digiBook::createXMLFile($xmlfile,$imgloc);
echo "Configuring  Flip book...<br>";


$ziploc=ZIP_LOCATION;// LOCATION TO PLACE ZIP FILE
digiBook::createZIP($ziploc);
echo "Creating zip...<br>";

echo "Finish...<br><br><br>";

echo "<a href='book/index.htm'  target='_blank'>Click here </a>to view the flip book ...".$file."<br>";
?>