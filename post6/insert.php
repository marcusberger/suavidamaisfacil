<?php
 include("../include/conectar.php");

$file_name = "15-mitos-e-verdades-sobre-a-bateria-do-seu-celular.pdf";
$file_url = "ebooks/15-mitos-e-verdades-sobre-a-bateria-do-seu-celular.pdf";

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
header("Location: https://goo.gl/HsDfsB")
?>
