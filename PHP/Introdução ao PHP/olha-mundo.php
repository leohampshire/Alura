<?php

$idade = 17;
$anos = 10;

echo gettype($idade);

echo "Olá mundo $idade" . PHP_EOL; //PHP_EOL - Quebra de linha independente deo sistema operacional
// o ponto (.) define concatenação

echo "Você só pode entrar se tiver mais do que 18 anos" . PHP_EOL;

if ($idade >= 18){
    echo "Você pode entrar";
}else{
    echo "Você não pode entrar";
}

while (){
    $idade+=1;
}

$variavel = $idade > 2 ? $valorSeVerdadeiro : $valorSeFalso;

$idade = 15;
$mensagem = $idade < 18 ? "Você é menor de idade" : "Você é maior de idade";
echo $mensagem;

//é impar?
$valor = 20;

$impar = $valor % 2 == 1 ? 'impar' : 'par';