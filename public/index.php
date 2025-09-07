<?php
require_once __DIR__ . "/../Base/Router.php";
require_once __DIR__ . "/../Routes/web.php";
require_once __DIR__ . "/../Base/Database.php";
require_once __DIR__ . "/../Controllers/UserController.php";
require_once __DIR__."/../functions.php";

$url = $_SERVER["REQUEST_URI"];
$method = $_POST['method'] ?? $_SERVER["REQUEST_METHOD"];
$values = resolveResource($url);
$router->route($values['resource'],$url,$method,$values['action']);
