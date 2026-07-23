<?php
//Inicialização
$i = 0; //Contador/iterador
$nota = 0;
$contAprovados = 0;
$contReprovados = 0;

while ($i <= 2) {
    //echo("i: " . $i ."<br>");
    $nota = rand(0, 10);
    if ($nota > 6) {
        echo ("<br> $nota - Aprovado");
        $contAprovados++;
    } else {
        echo ("<br> $nota - Reprovado");
        $contReprovados++;
    }
    $i++;
}
echo ("<br> Fim do laço de Repetição.");
echo ("<br> Quantidade de Aprovados: $contAprovados");
echo ("<br> Quantidade de Reprovados: $contReprovados");
?>