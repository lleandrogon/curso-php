<?php

$senha = "teste";
$novasenha = base64_encode($senha);
echo "base64: " . $novasenha . "<br>";
echo "Sua senha é: " . base64_decode($novasenha);

echo "<hr>";

echo "Md5: " . md5($senha) . "<br>";
echo "Sha1: " . sha1($senha);

echo "<hr>";

$senha2 = "1234568";
$senha_db = '$2y$10$kNIr9XuYgazTUXTFQpHdkO6a.K9t4BAnLRKn0xkOBP8ziiJY2gMfi';

$senhaSegura = password_hash($senha2, PASSWORD_DEFAULT);
echo $senhaSegura . "<br>";

if (password_verify($senha2, $senha_db)) {
    echo "Senha válida";
} else {
    echo "Senha inválida";
}