<?php

class Database
{
    //Propriedades
    private string $service = 'mysql';
    private string $host = 'localhost';
    private string $dbname = 'evento';
    private string $user = 'root';
    private string $password = '123456';
    public PDO $connection;

    //Metodos
    public function __construct()
    {
        $dsn = "$this->service:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
        $this->connection = new PDO($dsn, $this->user, $this->password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //Retorna arrays associativos em consultas
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Indica ocorrência de exceções em erros de conexão
        ]);
        return $this->connection;
    }
}
