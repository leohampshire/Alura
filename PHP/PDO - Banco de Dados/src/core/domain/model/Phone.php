<?php


namespace Alura\Pdo\core\domain\model;


class Phone
{
    private ?int $id;
    private string $areaCode;
    private string $number;
    private Student $student;

    public function __construct(?int $id, string $areaCode, string $phoneNumber)
    {
        $this->id = $id;
        $this->areaCode = $areaCode;
        $this->number = $phoneNumber;
    }

    public function formattedPhone(): string
    {
        return "($this->areaCode) $this->number";
    }

}