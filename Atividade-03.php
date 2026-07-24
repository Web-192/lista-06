<?php

/*
Atividade 03 – Depósitos
Uma pessoa faz depósitos. E, ele faz pelo menos 1 depósito.
Valor: rand(50,200).
Continue enquanto rand(0,1) retornar 1.
Conte os depósitos.
Some o dinheiro depositado.
Exiba o total.
*/

//Inicializar
$quantidadeDepositos = 0;
$valoresDepositados = 0;
$totalDepositado = 0;

do {
    $valorDeposito =  rand(50,200);
    echo ("Valor do Depósito: " . $valorDeposito ."<br>");

    $quantidadeDepositos++;
    $totalDepositado += $valorDeposito;

    $continuar = rand(0,1);
    echo ("Continuar? [ $continuar ]
    0-Saiu e 1-Novo Déposito <br>");
    echo ("<hr>");

} while ($continuar == 1);

echo("Quantidade de Depósitos: " . $quantidadeDepositos . "<br>");
echo("Total Depositado: " . $totalDepositado . "<br>");
?>