<?php

require_once "funcoes.php"; //pode ser usado "include", que devolve um warning ao invés de um erro
include "contas-correntes.php";

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

toMaiusculasPointer($contasCorrentes['123.456.689-11']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf: $titular $saldo");
}


$idadeList = [21, 22, 23, 24, 25];
list($idade1, $idade2, $idade3) = $idadeList;

unset($contasCorrentes['123.256.789-12']);

'<ul>';
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
'</ul>';
