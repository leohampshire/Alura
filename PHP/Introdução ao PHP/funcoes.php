<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo "<li> $mensagem </li>";
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function toMaiusculas (string $text){
    return strtoupper($text);
}

function toMaiusculasPointer (array &$conta)
{
    $conta['titular'] = toMaiusculas($conta['titular']);
}

function exibeConta (array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo "<li> Titular: $titular. Saldo: $saldo";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>Contas Correntes</header>

    <dl>
        <dt></dt>
        <dd> </dd>

    </dl>
</body>
</html>
