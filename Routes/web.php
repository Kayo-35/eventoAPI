<?php
$router = new Router();
$router->index('home', '/'); //Index

$router->show('user', '/user'); //Delete
$router->edit('user', '/user/edit'); //Edit
$router->update('user', '/user/edit'); //Put
$router->delete('user', '/user'); //Delete

//Contas
$router->create('register', '/register/create'); //Create
$router->store('register', '/register/create'); //Store

$router->create('login', '/login/create'); //Create
$router->store('login', '/login/create'); //Store

//Produtos
$router->show('produto', '/produto'); //Delete
$router->edit('produto', '/produto/edit'); //Edit
$router->update('produto', '/produto/edit'); //Put
$router->delete('produto', '/produto'); //Delete

//Contas
$router->create('produto', '/produto/create'); //Create
$router->store('produto', '/produto/create'); //Store
