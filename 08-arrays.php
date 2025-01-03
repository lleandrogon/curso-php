<?php
// Arrays Numéricos
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

// Count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach
foreach($clientes as $valor) {
    echo $valor . "<br>";
}
echo "<hr>";

// Arrays associativos
$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabuna";

foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";

// Arrays multidimensionais
$times = array(
    "cariocas" => array("campeao" => "vasco", "vice" => "flamengo", "terceiro" => "botafogo"),
    "paulistas" => array("campeao" => "santos", "vice" => "sao paulo", "terceiro" => "palmeiras"),
    "baianos" => array("campeao" => "vitoria", "vice
    " => "bahia", "terceiro" => "itabuna")
);
echo $times["paulistas"]["vice"];
echo "<hr>";

foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";

foreach($times["paulistas"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";

foreach ($times["baianos"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}