<?php
require_once  'PHPGangsta/GoogleAuthenticator.php' ;

$autenticador = new  PHPGangsta_GoogleAuthenticator ();

$codigo_secreto = $_POST["codigosecreto"];
$codigo_verificador = $_POST["codigo"];

$resultado = $autenticador->verifyCode($codigo_secreto, $codigo_verificador);
if($resultado){
    echo "Codigo Valido";
}else{
    echo "Codigo invalido";
}