<?php


namespace Alura\Pdo\core\logic;

use Alura\Pdo\core\domain\model\Student;
use Alura\Pdo\Infrastructure\Dao\StudentDaoService;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use mysql_xdevapi\Exception;

class AccountLogicImpl
{
    private $connection;
    private $studentDaoService;

    public function __construct()
    {
        $this->connection = ConnectionCreator::createConnection();
        $this->studentDaoService = new StudentDaoService($this->connection);
    }

    public function create(Student $student): bool
    {
        //TODO buscar por CPF
        try {
            $this->studentDaoService->create($student);
        }catch (\DomainException $exception) {
            //$this->connection->rollBack();
            echo "deu ruim";
            $this->connection->rollBack();
            return false;
        }

        $this->connection->commit();
        return true;
    }

    public function getAccounts() : array
    {
        $studentList = $this->studentDaoService->getAllStudents();

        foreach ($studentList as $item) {
            echo $item->getName() . PHP_EOL;
        }

        return $studentList;
    }

    public function rollBackOperation(): void
    {
        $this->connection->rollBack();
    }
}