<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (empty($_SESSION["logado"])) {
    header("Location: login.php");
    exit;
}

define('TEMPOEX', 14400);

if (isset($_SESSION['ultimoClick'])) {

    $tempoAtual = time();

    if (($tempoAtual - $_SESSION['ultimoClick']) > TEMPOEX) {

        $_SESSION = [];
        session_destroy();

        header("Location: logout.php?motivo=inatividade");
        exit;
    }
}

$_SESSION['ultimoClick'] = time();
