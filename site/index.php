<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
include "menu.php";
?>
<div class="content" id="content">

    <h2>Bem-vindo,
    	<span style="color: #FF8C00; font-size: 24P; text-transform: uppercase;">
   		 <?php echo $_SESSION['user']; ?>!
	</span>
    </h2>
    <!--<?php echo $_SESSION['user']; ?>!-->
    <div class="card">
	<img src="../favicon/ti7.png" style="width: 64px; height: 64px; border-radius: 12px;" />   

        <h3>Página de Suporte para o Departamento de Ti</h3>

        <p>Você acessou a base de dados da Ti para o acesso a informações e auxilio na soluções de problemas de infraestrutura e suporte.</p>
        <!--<a href="logout.php" style="color:#4a90e2;">Sair</a>-->
    </div>
</div>
<script src="script.js"></script>
</body>
</html>

