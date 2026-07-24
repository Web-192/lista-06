<?php

//Inicializar
$Quantidadeavaliaçôes = 0;
$media = 0;
$avaliação = 0;

do {
    $notaDada = rand(1,5);
    echo ("Nota Dada: " . $notaDada . "<br>");
    
    $Quantidadeavaliaçôes++;
    $avaliação += $notaDada;
    

    $continuar = rand(0,1);
    echo ("Avaliar Novamente? [ $continuar ] 0-Encerra 1-Continua <br>");
    echo ("<hr>");

} while ($continuar == 1);

echo ("Quantidade de Avaliações: "  . $Quantidadeavaliaçôes . "<br>");

echo ("Soma das Notas: " . $avaliação . "<br>");

echo("Média das Avaliações: " . $avaliação/$Quantidadeavaliaçôes);
?>