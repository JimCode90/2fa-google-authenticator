
<?php

require_once('generador.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2fa</title>
</head>
<body>
    <form action="verificador.php" method="post" autocomplete="off">
    <input type="text" name="codigo" placeholder="codigo de verificacion"><br>
    <!--<input type="text" value="<?php //echo $codigo_secreto ?>" -->
    <input type="hidden" value="M76EHZPKV3UK3MXO" name="codigosecreto">
    <button>Verificar</button> 
    </form>
</body>
</html>