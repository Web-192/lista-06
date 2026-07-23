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
$depositos = 0;
$dinheiroDepositado = 0;
$Total = 0;

do {
    $valorDeposito =  rand(50,200);
    echo ("Valor do Depósito: " . $valorDeposito ."<br>");

    $depositos++;
    $dinheiroDepositado += $depositos;

    $continuar = rand(0,1);
    echo ("Continuar? [ $continuar ]
    0-)

}
?>