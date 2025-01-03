<?php

// if / else if/ else
$numero = 50;

if ($numero == 10) {
    echo "é igual a 10";
} else if ($numero <= 9) {
    echo "É menor ou igual a 9";
} else {
    echo "É diferente de 10";
}

echo "<hr>";

$media = 6;

echo ($media >= 7) ? "Aprovado!" : "Reprovado";

echo "<hr>";

// switch case
$cor = "amarelo";

switch ($cor) {
    case "vermelho":
        echo "Sua cor preferida é o vermelho";
        break;
    case "verde":
        echo "Sua cor preferida é o verde";
        break;
    case "azul":
        echo "Sua cor preferida é o azul";
        break;
    default:
        echo "Sua cor preferida não vermelho, verde ou azul.";
}