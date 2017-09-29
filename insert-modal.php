<?php
 include("include/conectar-modal.php");

$file_name = "25-apps-que-vao-mudar-a-sua-vida.pdf";
$file_url = "ebooks/25-apps-que-vao-mudar-a-sua-vida.pdf";

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$file_name.'"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($file_url)); //Absolute URL
ob_clean();
flush();
readfile($file_url); //Absolute URL

 //header("location: index-download.php");
?>
