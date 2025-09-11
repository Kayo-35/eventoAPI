<?php
extract($params);
header('Content-Type: application/json');
$usuario = json_encode($usuario);
echo $usuario;
?>
