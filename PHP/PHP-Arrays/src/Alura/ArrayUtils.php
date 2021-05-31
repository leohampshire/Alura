<?php

namespace Alura;

abstract class ArrayUtils
{
    public static function remove($indice, array &$array)
    {
        unset($array[$indice]);
    }
}