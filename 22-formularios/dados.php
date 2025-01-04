<?php

$nome = $_POST["nome"];
$email = $_POST["email"];

echo "Seu nome é $nome e seu email é $email. <br>";
echo "<hr>";

echo $_GET["idade"] . "<br>" . $_GET["sobrenome"];
echo "<hr>";

var_dump($_GET);