<?php

/*
Atividade 01 – Compras
Um cliente faz compras. Não se sabe quantas e ele compra pelo menos um produto.
● Gere o valor do produto com rand(10,50).
● Gere $continuar = rand(0,1).
● Conte quantos produtos foram comprados.
● Some o valor total da compra.
● Mostre:
○ valor de cada produto;
○ quantidade de produtos;
○ total da compra.
*/

//Inicializar
$qtdPedidos = 0; //contador
$somaTotalCompra = 0; //acumulador (somador?)


do {
    $valorProduto = rand(10, 50);
    echo ("Valor gerado para o produto: " . $valorProduto . "<br>");


    $qtdPedidos++; // aumentar de 1 em 1
    $somaTotalCompra += $valorProduto; // some ao que já está dentro da variável o novo valor


    $continuar = rand(0, 1);
    echo ("Continuar? 0-Sair e 1-Continuar : " . $continuar . "<br>");
    echo("<hr>");
  
} while ($continuar == 1);

echo("Quantidade de pedidos" . $qtdPedidos . "<br>");
echo("Soma total da compra" . $somaTotalCompra . "<br>");




?>