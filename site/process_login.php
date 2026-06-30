<?php
session_start();
$users = ["luis.kurihara"=>"lmk2110", "suporte"=>"todimoti25"];
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($users[$username]) && $users[$username]===$password){
    $_SESSION['user']=$username;
    header("Location: index.php"); exit;
} else {
    $_SESSION['error']="Usuário ou senha incorretos";
    header("Location: login.php"); exit;
}
