<?php
extract($params);
header('Content-Type: application/json');
$usuarios = json_encode($usuarios);
echo $usuarios;
?>
