<?php 
$string = "contato@gmail.org.x";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

if (preg_match($padrao, $string)) {
    echo "Válido";
    echo "<hr>";
    echo $string;
} else {
    echo "Inválido";
    echo "<hr>";
}

$string2 = "13/09/2018";
$padrao2 = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if (preg_match($padrao2, $string2)) {
    echo "Válido";
    echo "<hr>";
    echo $string2;
} else {
    echo "Inválido";
    echo "<hr>";
}