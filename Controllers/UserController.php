<?php
require __DIR__ . "/../Models/User.php";
class UserController
{
    //Propriedades
    public User $user;

    //Metodos
    public function __construct() {}
    public function index()
    {
        $usuarios = new User()->all();
        view('User/index', [
            "usuarios" => $usuarios
        ]);
    }
    public function show()
    {
        $usuario = new User()->find(id: 1);
        view('User/index', [
            "usuario" => $usuario
        ]);
    }
    public function create() {
        view('Account/register.create');
    }
    public function store() {

    }
    public function edit() {}
    public function update() {}
    public function destroy() {}
}
