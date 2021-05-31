<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();


$statement = $pdo->query('SELECT * FROM students');
$studantList = $statement->fetchAll(PDO::FETCH_ASSOC);
//$studantList = $statement->fetchAll(PDO::FETCH_CLASS, Student::class);
var_dump($studantList);

//$statement = $pdo->query('SELECT * FROM students where id = 2');
//$studantData = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($studantData);
//var_dump($statement->fetchColumn(1));

//$statement = $pdo->query('SELECT * FROM students');


/*while ($studantData = $statement->fetch(PDO::FETCH_ASSOC)){
    $student = new Student(
        $studantData['id'],
        $studantData['name'],
        new \DateTimeImmutable($studantData['birth_date'])
    );

    echo $student->age(). PHP_EOL;
}*/