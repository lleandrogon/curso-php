<?php

function exibirNome($nome) {
    echo "Meu nome é $nome";
}

exibirNome("Adriele Santos");
echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7) {
        echo "$nome foi aprovado com a média " . number_format($media, 1, ",", ".") . "<br>";
    } else {
        echo "$nome foi reprovado com a média " . number_format($media, 1, ",", ".") . "<br>";
    }
}

calcularMedia("Bob", 5, 7, 9, 10);
calcularMedia("João", 1, 2, 3, 4);