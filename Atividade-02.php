<?php

/*
Atividade 02 – Partidas
Um jogador joga videogame. E ele joga pelo menos uma vez.
● Gere a pontuação com rand(0,100).
● Gere $continuar = rand(0,1).
● Conte as partidas.
● Some a pontuação.
● Mostre a média ao final.
*/

//Inicializar
$partidas = 0;
$pontuacaoFinal = 0;
$totalMedia = 0;

do {
    $pontuacao = rand(0,100);
    echo ("Pontuação Da Partida: " . $pontuacao . "<br>");

    $partidas++;
    $pontuacaoFinal += $pontuacao;

    $continuar = rand(0,1);
    echo ("Continuar? [ $continuar ] 0-Jogo Terminado e 1-Joga Novamente <br>");
    echo("<hr>");

} while ($continuar == 1);

echo("Total de Partidas: " . $partidas . "<br>");

echo("Pontuação Final: " . $pontuacaoFinal . "<br>");

echo("Média: " . ($pontuacaoFinal/$partidas) . "<br>");
?>