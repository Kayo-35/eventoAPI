<?php
$router = new Router();
$router->index('home', '/'); //Index

$router->index('user', '/user'); //Index
$router->show('user', '/user'); //Delete
$router->edit('user', '/user/edit'); //Edit
$router->update('user', '/user/edit'); //Put
$router->delete('user', '/user'); //Delete

//Contas
$router->create('register', '/register/create'); //Create
$router->store('register', '/register/create'); //Store

$router->create('login', '/login/create'); //Create
$router->store('login', '/login/create'); //Store
