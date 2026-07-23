<?php
//Login e Senha.

$loginRealizado = 0;
$tentativas = 0;

while ($loginRealizado == 00 && $tentativas <=2);

    $loginRealizado = rand (0,1); // 0- Dados incorretos e 1- Corretos
    echo("<br> loginRealizado: $loginRealizado<br>");
    echo("<br> tentativas: $tentativas<br>");

    if($loginRealizado == 1){
        echo ("Bem-vind@!");
    } else {
        echo ("Tente novamente");
    }

    $tentativas++;

if ($loginRealizado == 0){
    echo ("<br> Número máximo de tentativas atingido.");
    }
    ?>