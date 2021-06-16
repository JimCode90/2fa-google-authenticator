<?php
require_once  'PHPGangsta/GoogleAuthenticator.php' ;

$autenticador = new  PHPGangsta_GoogleAuthenticator ();
$codigo_secreto = $autenticador->createSecret ();
//echo  "El secreto es:" .$codigo_secreto."\n\n";

$website = "http://localhost/googleauthenticator/";
$titulo = "DIRIN-PI3";

$url_qr_code = $autenticador->getQRCodeGoogleUrl($titulo, $codigo_secreto, $website);

echo "<img src='".$url_qr_code."'  /> \n";