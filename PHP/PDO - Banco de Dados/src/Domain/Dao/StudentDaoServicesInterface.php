<?php


namespace Alura\Pdo\Domain\Dao;


use Alura\Pdo\core\domain\model\Student;
use http\Encoding\Stream;

interface StudentDaoServicesInterface
{
    public function getAllStudents(): array;
    public function getStudent(int $id): Student;
    public function getStudentsBirthAt (\DateTimeInterface $birthDate): array;
    public function save(Student $student): bool;
    public function remove(int $studentId): bool;
    public function update(Student $student, int $id): bool;
    public function create(Student $student): Student;
    public function getStudentsPhones(): array;
}