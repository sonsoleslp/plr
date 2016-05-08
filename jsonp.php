<?php
require_once 'conectar.php';

$sql = "SELECT id, name, email, message, date  FROM mensajes ORDER BY id DESC LIMIT 10 ";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
    $filas[] = array(
        "date" =>  $fila['date'],
        "name" => $fila['name'],
        "email" => $fila['email'],
        "message" => $fila['message']);
}

$json = json_encode($filas);
$callback = $_GET['callback'];
echo $callback.'('. $json . ')';
?>

