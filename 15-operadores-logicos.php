<?php 

$idade = 25;
$nome = "Rodrigo";

// && - and (e)
if ($idade == 26 && $nome == "Rodrigo") {
    echo "é verdadeiro";
} else {
    echo "é falso";
}

echo "<hr>";

// || - or (ou)
$ano = 2022;
$carro = "Fox";

if ($ano == 2024 || $carro == "Fox") {
    echo "é verdadeiro";
} else {
    echo "é falso";
}

echo "<hr>";

// xor (ou exclusivo)
$animal = "cachorro";
$cor = "branco";

if ($animal == "cachorro" xor $cor == "branco") {
    echo "é verdadeiro";
} else {
    echo "é falso";
}

echo "<hr>";

// ! (negação)
$time = "barcelona";
$pais = "equador";

if (($time == "barcelona") and !($pais == "equador")) {
    echo "é verdadeiro";
} else {
    echo "é falso";
}