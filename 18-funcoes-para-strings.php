<?php 

$rodrigo = "rodrigo oliveira";
$novoRodrigo = strtoupper($rodrigo);
echo $novoRodrigo;
echo "<hr>";

$leandro = "LEANDRO GONCALVES";
$novoLeandro = strtolower($leandro);
echo $novoLeandro;
echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6);
echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH);
echo $novoObjeto;
echo "<hr>";

$string = str_repeat("Sucesso! <br>", 5);
echo $string;
echo "<hr>";

$mensagem = "Olá Mundo";
echo strlen($mensagem);
echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;
echo "<hr>";

$saudacao = "Olá pessoal, boa tarde!";
echo strpos($saudacao, "pessoal");