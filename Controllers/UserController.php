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
        $usuario = new User()->find(filter_input(INPUT_GET,'id'));
        view('User/show', [
            "usuario" => $usuario
        ]);
    }
    public function create()
    {
        view('Account/register.create');
    }

    public function update()
    {
        //Requisições JSON
        $request = json_decode(file_get_contents("php://input"), true);
        if ($request !== null) {
            //Atribuição
            $user = new User();
            $user->setName($request['nome'])
                ->setLogin($request['email'])
                ->setPassword($request['password'])
                ->setId($request['id']);

            $user->update();
            echo json_encode('Usuário atualizado');
            die();
        }
    }
    public function destroy()
    {
        //Json request
        $request = json_decode(file_get_contents("php://input"), true);
        if ($request !== null) {
            //Atribuição
            $user = new User();
            $user->setId($request['id']);

            $user->delete();
            echo json_encode('Usuário removido');
            die();
        }
    }
}
