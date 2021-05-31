<?php


class Holder extends Account
{

    private function validateName (string $name): void
    {
        if (strlen($name) < 5){
            echo "Nome muito curto";
            exit();
        }
    }
}