<?php

$idadeList1 = array(1, 2, 3, 4, "23");
$idadeList2 = [21, 22, 23, 24, $idadeList1];

for ($i = 0; $i<sizeof($idadeList1); $i++){ //sizeof or count
    echo $idadeList1[$i] . PHP_EOL;
}

$conta1 = [
    'titular' => 'Leonardo',
    'saldo' => 100
];
$conta2 = [
    'titular' => 'Jordana',
    'saldo' => 1000
];
$conta3 = [
    'titular' => 'Sogrinha',
    'saldo' => 10000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < sizeof($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}

/***********************************************************/

$contasCorrentes = [
    '123.456.789-19' => $conta1,
    '987.654.321-11' => $conta2,
    '123.412.341-12' => $conta3];

foreach ($contasCorrentes as $count){
    echo $count['titular'] . PHP_EOL;
}

$contasCorrentes['123.456.123-44'] = [
    'titular' => 'Claudia',
    'saldo' => 3000
];

foreach ($contasCorrentes as $cpf => $count){
    echo "CPF: $cpf and AccountName: ";
    echo $count['titular'] . PHP_EOL;
}

echo sizeof($contasCorrentes);


class avancando
{
}