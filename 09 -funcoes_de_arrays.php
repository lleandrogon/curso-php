<?php 

$nomes = array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Maria" => "Maria", "Pai" => "Jose");

// is_array($array);
if (is_array($nomes)) {
    echo "É um array";
} else {
    echo "Não é um array";
}
echo "<hr>";

// in_array($valor, $array)
if (in_array("Elza", $nomes)) {
    echo "Existe no array";
} else {
    echo "Não existe";
}
echo "<hr>";

// array_keys($array)
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";

// array_values($array)
$values = array_values($nomes);
print_r($values);
echo "<hr>";

// array_merge($array1, $array2)
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

// array_pop($array)
$jogos = array("Fortnite", "Valorant", "Minecraft");
print_r($jogos);
echo "<br>";
echo array_pop($jogos);
echo "<br>";
print_r($jogos);
echo "<hr>";

// array_shift($array)
$instrumentos = array("Guitarra", "Baixo", "Bateria");
print_r($instrumentos);
echo "<br>";
echo array_shift($instrumentos);
echo "<br>";
print_r($instrumentos);
echo "<hr>";

// array_unshift($array, "valor")
$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Manga", "Acerola", "Morango");
print_r($frutas);
echo "<hr>";

// array_push($array, "valor")
$cores = array("Vermelho", "Azul", "Amarelo");
print_r($cores);
echo "<br>";
array_push($cores, "Verde", "Laranja", "Roxo");
print_r($cores);
echo "<hr>";

// array_combine($keys, $values)

$posicoes = array("Campeão", "Vice", "Terceiro");
$times = array("Vasco", "Flamengo", "Botafogo");
$podio = array_combine($posicoes, $times);
print_r($podio);
echo "<hr>";

// array_sum($array)
$soma = array(7.8, 5.5, 10, 7.2);
$total = array_sum($soma);
echo $total;
echo "<hr>";

// explode("divisor", "string")
$data = "30/02/2018";
$novaData = explode("/", $data);
print_r($novaData);
echo "<br>";
$frase = "Meu nome não é johnny";
$fraseDividida = explode(" ", $frase);
print_r($fraseDividida);
echo "<hr>";

// implode("divisor", $array)
$pessoas = array("Rodrigo", "Carlos", "Neusa", "Talita");
$string = implode(", ", $pessoas);
echo $string;