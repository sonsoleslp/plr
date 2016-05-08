<!doctype html>
<html>
<head>
    <title>Bienvenida</title>
    <meta charset="utf-8">
</head>
<body>
<?php
$nombre = $_REQUEST['nombre'];
$nombreRelleno= !empty($nombre);
if($nombreRelleno){?>
<p>¡Hola, <?php  echo $_REQUEST['nombre']?>!</p>
<p>Bienvenido a la curso de PHP,</p>
<?php } else { ?>
 Por favor, especifica tu nombre
<?php } ?>
</body>
</html>