<?php


namespace Alura\Pdo\Infrastructure\Dao;


use Alura\Pdo\Domain\Dao\StudentDaoServicesInterface;
use Alura\Pdo\core\domain\model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use http\Env\Request;
use http\Exception\BadQueryStringException;
use PDO;
use function Sodium\add;

class StudentDaoService extends AbstractDaoService implements StudentDaoServicesInterface
{
    public function getStudent(int $id): Student
    {
        $statment = $this->connection->prepare('SELECT FROM students WHERE id = :id');
        $statment->bindValue(':id', $id, PDO::PARAM_INT);

        return $this->toStudent($statment);
    }

    public function getAllStudents(): array
    {
        $statement = $this->connection->query('SELECT * FROM students');

        return $this->toStudentList($statement);
    }

    private function toStudent(\PDOStatement $statement) : Student
    {
        $studentData = $statement->fetchObject();

        $student = new Student(
            $studentData['id'],
            $studentData['name'],
            new \DateTimeImmutable($studentData['birth_date'])
        );

        return $student;
    }

    private function toStudentList(\PDOStatement $statement) : array
    {
        $studentDataList = $statement->fetchAll();
        $studentList = [];

        foreach ($studentDataList as $studentData){
            $student = new Student(
                $studentData['id'],
                $studentData['name'],
                new \DateTimeImmutable($studentData['birth_date']),
            );

            $studentList[] = $student;
        }

        return $studentList;
    }

    public function getStudentsBirthAt(\DateTimeInterface $birthDate): array
    {
        // TODO: Implement getStudentsBirthAt() method.
    }
    public function save(Student $student): bool
    {
        // TODO: Implement save() method.
    }

    public function remove(int $studentId): bool
    {
        $statment = $this->connection->prepare('DELETE FROM students WHERE id = :id');
        $statment->bindValue(':id', $studentId, PDO::PARAM_INT);

        return $statment->execute();
    }

    public function update(Student $student, int $id): bool
    {
        $updateQuery = 'UPDATE students SET name = :name, birth_date = :birth_date WHERE id = :id';
        $statment = $this->connection->prepare($updateQuery);
        $statment->bindValue(':name', $student->getName());
        $statment->bindValue(':birth_date', $student->getBirthDate()->format('Y-m-d'));
        $statment->bindValue(':id', $student->getId(), PDO::PARAM_INT);

        return $statment->execute();
    }

    public function create(Student $student): Student
    {
        $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
        $statment = $this->connection->prepare($sqlInsert);

        $success = $statment->execute(
            [
                ':name' => $student->getName(),
                ':birth_date' => $student->getBirthDate()->format('Y-m-d'),
                //':birth_date' => $student->getBirthDate()->format('Y-m-d'),
            ]
        );

        if ($success){
            $student->setId($this->connection->lastInsertId());
        }

        return $student;
    }

    public function getStudentsPhones(): array
    {
        $sqlQuery =
            'SELECT students.id, 
                    students.name, 
                    students.birth_date, 
                    phones.id AS phone_id, 
                    phones.area_code, 
                    phones.number
             FROM students
             JOIN phones ON students.id = phones.student_id;';
        $statment = $this->connection->query($sqlQuery);
        $result = $statment->fetchAll();
    }
}