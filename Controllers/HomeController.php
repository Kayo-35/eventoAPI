<?php

class HomeController
{
    //Propriedades
    //Metodos
    public function __construct() {}
    public function index()
    {
        require __DIR__ . "/../Views/home.php";
    }
}
