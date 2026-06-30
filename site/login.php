<?php
session_start();
// Se já está logado, redireciona
if(isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - Ti Todimo</title>

<link rel="shortcut icon" href="../favicon/ti7.png"/>
<link rel="stylesheet" href="style.css">

<style>
body { display: flex; justify-content: center; align-items: center; height: 100vh; background: var(--bg-color);}
.login-card { background: var(--card-bg); padding: 40px; border-radius: 12px; width: 100%; max-width: 400px; box-shadow: 0 4px 20px rgba(0,0,0,0.5);}
.login-card h1 { text-align:center; margin-bottom:30px; }
.login-card input { width:94%; padding:12px; margin-bottom:20px; border:none; border-radius:8px; background:#2a2a2a; color:var(--text-color);}
.login-card button { width:100%; padding:12px; border:none; border-radius:8px; background:#FF8C00; color:#fff; font-size:16px; cursor:pointer; transition:0.3s;}
.login-card button:hover { background:#FFA500; }
.login-card .error { color:#ff4d4d; text-align:center; margin-bottom:15px;}
</style>
</head>
<body>
<div class="login-card">
    <img src="/image/logo_dark2.png" alt="Logo" class="login-logo">
    <center><h2>Tecnologia da Informação</h2></center>
    <?php if(isset($_SESSION['error'])) { echo "<div class='error'>".$_SESSION['error']."</div>"; unset($_SESSION['error']); } ?>
    
    <form action="valida.php" method="post" id="login">  

    <input name="login" id="usuario" type="text" class="form-login" required />    
    <input name="senha" id="senha" type="password" class="form-login" required />
    <button type="submit">Login</button>
    <!-- Teste de imagem com caminho absoluto (pass MD5)
    <input type="image" src="/images2/login-btn.png" alt="Entrar" id="entrar" name="entrar" />-->
  </form>
    
    <!-- 
    <form action="process_login.php" method="POST">
        <input type="text" name="username" placeholder="Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <button type="submit">Login</button>
    </form>
    -->   
</div>
</body>
</html>

