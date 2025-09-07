<?php
require __DIR__."/../functions.php";
require __DIR__ . "/../Base/Database.php";
require pathController('UserController');
require pathController('HomeController');
require pathController('LoginController');
require pathController('RegisterController');

class Router
{
    //Propriedades
    public array $routes = [];
    public array $resources = [];
    public array $request = [];
    public array $urls = [];

    public array $methods = ['GET', 'POST', 'PUT', 'DELETE'];
    //Metodos
    public function route(string $resource, string $url, string $method = 'GET', string $action = 'index'): bool
    {
        $this->setResources();
        $this->setUrls();
        $this->setRequest($resource, $url, $method, $action);
        foreach ($this->routes as $route) {
            if ($this->request == $route) {
                $controllerclass = $this->request['resource'] . 'controller';
                $controller = new $controllerclass();
                call_user_func([$controller,$this->request['action']]);
            }
        }
        return false;
    }
    public function add(string $resource, string $url, string $method,string $action): bool
    {
        if (!in_array(strtoupper($method), $this->methods)) return false;
        $this->routes[] = [
            "resource" => ucfirst($resource),
            "url" => $url,
            "method" => strtoupper($method),
            "action" => $action
        ];
        return true;
    }
    public function setRequest(string $resource, string $url, string $method, string $action): void
    {
        $this->request = [
            "resource" => ucfirst($resource),
            "url" => $url,
            "method" => strtoupper($method),
            "action" => $action
        ];
    }
    public function index(string $resource, string $url): void
    {
        $this->add($resource, $url, 'GET', 'index');
    }
    public function edit(string $resource, string $url): void
    {
        $this->add($resource, $url, 'GET', 'edit');
    }
    public function create(string $resource, string $url): void
    {
        $this->add($resource, $url, 'GET', 'create');
    }
    public function show(string $resource, string $url): void
    {
        $this->add($resource, $url, 'GET', 'show');
    }

    public function store(string $resource, string $url)
    {
        $this->add($resource, $url, 'POST', 'store');
    }
    public function update(string $resource, string $url)
    {
        $this->add($resource, $url, 'PUT', 'update');
    }
    public function delete(string $resource, string $url)
    {
        $this->add($resource, $url, 'DELETE', 'destroy');
    }

    public function setResources(): void
    {
        $this->resources = array_unique(array_column($this->routes, 'resource'));
    }
    public function setUrls(): void
    {
        $this->urls = array_unique(array_column($this->routes, 'url'));
    }
}
