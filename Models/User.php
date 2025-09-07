<?php
require_once __DIR__ . "/../Base/Database.php";
require_once __DIR__ . "/../Base/Validator.php";
class User
{
    //Propriedades
    protected int $id;
    protected string $nome;
    protected string $login;
    protected string $password;
    protected PDO $connection;

    //Metodos
    public function __construct()
    {
        $this->connection = new Database()->connection;
    }
    public function setName(string $nome): User
    {
        if (Validator::string($nome, 4, 45) == false) throw new Exception();
        $this->nome = $nome;
        return $this;
    }
    public function setLogin(string $login): User
    {
        if (Validator::email($login) == false) throw new Exception();

        $this->login = $login;
        return $this;
    }
    public function setPassword(string $password): User
    {
        if (Validator::senha($password) == false) throw new Exception();
        $this->password = $password;
        return $this;
    }
    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->nome;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getLogin(): string
    {
        return $this->login;
    }
    public function getPassword(): string
    {
        return $this->password;
    }

    //Query methods
    public function find(int $id): array
    {
        $stmt = $this->connection->prepare('SELECT * FROM usuario WHERE id=:id');
        $stmt->execute(['id' => $id]);
        $usuario = $stmt->fetch();
        return $usuario;
    }
    public function store(): bool {
        $stmt = $this
            ->connection
            ->prepare('INSERT INTO usuario(nome,login,senha) VALUES (:nome,:login,:senha)');
        return $stmt->execute([
            "nome" => $this->getName(),
            "login" => $this->getLogin(),
            "senha" => $this->getPassword(),
        ]);
    }
}
