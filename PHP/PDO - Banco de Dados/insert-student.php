<?php

require 'vendor/autoload.php';

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Dao\StudentDaoService;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();



$student = new Student(
    null,
    'Leonardo Hampshire 2',
    new \DateTimeImmutable('1997-02-06')
);

$createStudent = new StudentDaoService(null);
echo $createStudent->create($student);
$studentList [] = Student::class;
$studentList = $createStudent->getAllStudents();

foreach ($studentList as $item) {
    echo $item->getName() . PHP_EOL;
}

/*
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->getName()}', '{$student->getBirthDate()->format('Y-m-d')}');";
var_dump($pdo->exec($sqlInsert));

$student2 = new Student(
    null,
    'Jordana Ayrizono Hampshire',
    new \DateTimeImmutable('1999-08-04')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student2->getName()}', '{$student2->getBirthDate()->format('Y-m-d')}');";
var_dump($pdo->exec($sqlInsert));


$student3 = new Student(
    null,
    'Leonardo Hampshire',
    new \DateTimeImmutable('1997-02-06')
);

 * Prepare
 *
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statment = $pdo->prepare($sqlInsert);
$statment->bindValue(':name', $student3->getName()); //BindParam -> Passar valores por referencia (dinamico))
$statment->bindValue(':birth_date', $student3->getBirthDate()->format('Y-m-d'));
$statment->execute();*/

