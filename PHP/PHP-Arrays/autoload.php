<?php

spl_autoload_register(
    function (string $nameSpaceClasse): void
    {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\",  DIRECTORY_SEPARATOR, $nameSpaceClasse);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);

