<?php

require 'vendor/autoload.php';

use Alura\Pdo\core\domain\model\Student;
use Alura\Pdo\core\logic\AccountLogicImpl;
use Alura\Pdo\Infrastructure\Dao\StudentDaoService;

$student = new Student(
    null,
    'Pipica',
    new DateTimeImmutable('1998-06-10')
);

$accountLogic = new AccountLogicImpl();
$accountLogic->create($student);
$accountLogic->getAccounts();

/*try {
    //PDO::ERRMODE_EXCEPTION;
}catch (\PDOException $e){
    $e->getCode();
}*/