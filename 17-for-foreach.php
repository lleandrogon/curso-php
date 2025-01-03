<?php

for ($contador = 0; $contador <= 10; $contador++) {
    echo "5 x $contador = " . (5 * $contador) . "<br>";
}

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul", "Preto");

foreach ($cores as $indice => $valor) {
    echo $indice . " - " . $valor . "<br>";
}