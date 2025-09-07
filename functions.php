<?php

function resolveResource(string $url): array
{
    $url = explode('/', $url);
    $resource =  match ($url[1]) {
        "/" => 'Home',
        "user" => 'User',
        "register" => 'Register',
        "login" => 'Login',
        "product" => 'Product',
        default => 'Home'
    };
    $action = in_array('create', $url) ? 'create' : null;
    $action = in_array('edit', $url) ? 'edit' : $action;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $action = in_array('create', $url) ? 'store' : 'update';
    }
    if ($action == null) {
        $action = isset($_SERVER["QUERY_STRING"]) ? 'show' : 'index';
    }
    return [
        "action" => $action,
        "resource"  => $resource
    ];
}
function dd(mixed $value): void
{
    var_dump($value);
    die();
}

function pathController(string $path): string {
    return __DIR__."/Controllers/$path.php";
}
