<?php

namespace Alura;

abstract class Calculadora
{
    public static function getMedia(array $num): ?float
    {
        $size = sizeof($num);

        if ($size < 0){
            return null;
        }else{
            $soma = 0;
            foreach ($num as $value) {
                $soma += $value;
            }

            return $soma/$size;
        }
    }
}
