<?php

namespace Alura\Pdo\core\domain\model;

class Student
{
    private ?int $id;
    private string $name;
    private \DateTimeInterface $birthDate;

    /**
     * @var Phone[]
     */
    private array $phones = [];

    public function __construct(?int $id, string $name, \DateTimeInterface $birthDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthDate = $birthDate;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param \DateTimeInterface $birthDate
     */
    public function setBirthDate(\DateTimeInterface $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBirthDate(): \DateTimeInterface
    {
        return $this->birthDate;
    }

    public function getAge(): int
    {
        return $this->birthDate
            ->diff(new \DateTimeImmutable())
            ->y;
    }

    /**
     * @return Phone[]
     */
    public function getPhones(): array
    {
        return $this->phones;
    }


    /**
     * @param array $phones
     */
    public function setPhones(array $phones): void
    {
        $this->phones = $phones;
    }


}
