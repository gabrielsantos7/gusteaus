<?php

namespace Gusteaus\Core;

class Database
{

    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct()
    {
        $string = "mysql:host=" . BD['server'] . ";port=" . BD['port'] . ";dbname=" . BD['database'] . ";";

        $user = BD['user'];
        $password = BD['password'];

        try {
            $this->conexao = new \PDO($string, $user, $password);
        } catch (\PDOException $e) {
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }          

    }

    public function execute(string $sql, array $dados = [] ) :bool
    {
        $this->stmt = $this->conexao->prepare($sql);
        
        return $this->stmt->execute($dados);

    }

    public function getAll(string $classe) :array
    {

        return $this->stmt->fetchAll(\PDO::FETCH_CLASS,$classe);

    }

    public function get(string $classe)
    {

        return $this->stmt->fetchObject($classe);

    }

}