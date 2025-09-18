<?php

function resolveResource(string $url): array
{
    $url = parse_url($url);
    $resource =  match ($url['path']) {
        "/" => 'Home',
        "/user" => 'User',
        "/register" => 'Register',
        "/register/create" => 'Register',
        "/login" => 'Login',
        "/login/create" => 'Login',
        "/product" => 'Product',
        default => 'Home'
    };
    $action = null;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = 'store';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        $action = 'destroy';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        $action = 'update';
    }

    if ($action === null) {
        $action = (str_contains($url['path'], 'create')) ? 'create' : 'index';
        if (isset($_SERVER["QUERY_STRING"])) {
            $action = 'show';
        }
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

function pathController(string $path): string
{
    return __DIR__ . "/Controllers/$path.php";
}

function view(string $path, array $params = []): void
{
    require __DIR__ . "/Views/$path.php";
    die();
}
