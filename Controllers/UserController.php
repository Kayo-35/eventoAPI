<?php

class UserController
{
    //Propriedades
    public User $user;

    //Metodos
    public function __construct() {}
    public function index() {
        require __DIR__."/../Views/User/index.php";
    }
    public function show() {}
    public function store() {}
    public function edit() {}
    public function update() {}
    public function destroy() {}
}
