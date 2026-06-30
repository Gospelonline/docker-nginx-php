<?php
session_start();
require_once "conexao.php";

$login = $_POST["login"] ?? "";
$senha = md5($_POST["senha"] ?? "");

$sql = "SELECT * FROM usuarios WHERE login=? AND senha=? LIMIT 1";

$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $login, $senha);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 1) {

    $_SESSION["logado"] = true;
    $_SESSION["user"] = $login;

    include "logger.php";
    Logger($login);

    header("Location: index.php");
    exit;
}

$_SESSION["error"] = "Usuário ou senha inválidos.";
header("Location: login.php");
exit;
