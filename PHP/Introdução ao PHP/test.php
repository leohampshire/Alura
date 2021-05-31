<?php

$contasCorrentes = [
    '123.456.789-19' => [
        'titular' => 'Leonardo',
        'saldo' => 100
    ],
    '987.654.321-11' => [
        'titular' => 'Jordana',
        'saldo' => 1000
    ],
    '123.412.341-12' => [
        'titular' => 'Sogrinha',
        'saldo' => 10000
    ]
];

$contasCorrentes['123.456.123-44'] = [
    'titular' => 'Claudia',
    'saldo' => 3000
];

foreach ($contasCorrentes as $cpf => $count){ //fore or forek (with key))
    echo "CPF: $cpf and AccountName: ";
    echo $count['titular'] . PHP_EOL;
}


function getSaque (array $conta, float $valor) // Funçoes o colchete fica em baixo
{
    $saldo = $conta['saldo'];
    if($valor < $saldo){
        $saldo -= $valor;
    }
    echo $saldo;

    return $saldo;
}

$contasCorrentes['123.456.123-44']['saldo'] =
    getSaque($contasCorrentes['123.456.123-44'], 500);

echo $contasCorrentes['123.456.123-44']['saldo'];