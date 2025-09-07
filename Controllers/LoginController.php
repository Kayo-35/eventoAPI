<?php

class LoginController
{
    //Metodos
    public function __construct() {}
    public function create()
    {
        require __DIR__ . "/../Views/Account/login.create.php";
    }
    public function store() {
        $login = filter_input(INPUT_POST,'email');
        $senha = filter_input(INPUT_POST,'password');

        echo "Login: $login, Senha = $senha";
    }
}
