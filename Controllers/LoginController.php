<?php
class LoginController
{
    //Metodos
    public function __construct() {}
    public function create()
    {
        require __DIR__ . "/../Views/Account/login.create.php";
    }
    public function store(): bool {
        $login = filter_input(INPUT_POST,'email');
        $senha = md5(filter_input(INPUT_POST,'password'));
        $usuario = new User()->find(login: $login);
        if(md5($usuario['senha'] == md5($senha))) {
            $_SESSION["usuario"] = $usuario;
            return true;
        }
        return false;
    }
}
