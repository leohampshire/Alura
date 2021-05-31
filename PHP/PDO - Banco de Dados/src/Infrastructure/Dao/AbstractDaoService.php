<?php


namespace Alura\Pdo\Infrastructure\Dao;


use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use PDO;
use function Sodium\add;

class AbstractDaoService
{

    protected PDO $connection;

    public function __construct(?PDO $externalConnection)
    {
        if ($externalConnection == null){
            $this->connection = ConnectionCreator::createConnection();
        }else{
            $this->connection = $externalConnection;
        }

        $this->connection->beginTransaction();
    }
}