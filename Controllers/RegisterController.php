<?php
require_once __DIR__."/../Base/Validator.php";
require_once __DIR__."/../Base/Database.php";
require_once __DIR__."/../Models/User.php";
class RegisterController
{
    //Metodos
    public function __construct() {}
    public function create()
    {
        require __DIR__ . "/../Views/Account/register.create.php";
    }
    public function store()
    {
        //Atribuição
        $user = new User();
        $user->setName(filter_input(INPUT_POST, 'nome'))
            ->setLogin(filter_input(INPUT_POST,'email'))
            ->setPassword(filter_input(INPUT_POST,'password'));

        //Cadastrando usuário
        $user->store();
    }
}
