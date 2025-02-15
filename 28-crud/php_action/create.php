<?php
// Sessão
session_start();
// Conexão
require_once "db_connect.php";
// Clear
function clear($input) {
    global $connect;
    // sql
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST["btn-cadastrar"])) {
    $nome = clear($_POST["nome"]);
    $sobrenome = clear($_POST["sobrenome"]);
    $email = clear($_POST["email"]);
    $idade = clear($_POST["idade"]);

    if (!is_numeric($idade) || $idade <= 0) {
        $_SESSION["mensagem"] = "Por favor, insira uma idade válida.";
        header("Location: ../");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["mensagem"] = "Por favor, insira um email válido.";
        header("Location: ../");
        exit();
    }

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if (mysqli_query($connect, $sql)) {
        $_SESSION["mensagem"] = "Cadastrado com sucesso";
        header("Location: ../index.php");
    } else {
        $_SESSION["mensagem"] = "Erro ao cadastrar";
        header("Location: ../index.php");
    }
}