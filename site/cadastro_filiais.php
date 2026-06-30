<?php 
require ("lib/validador_cadfiliais.php");	
include "menu.php"; 
// Create database connection using config file
include("conexao.php");

// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM filiais ORDER BY estado DESC, nome ASC");
?>

<div class="content" id="content">
  <div class="card">
<html>
	<!--link para adicionar icones nos botões-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<body>		
	<style type="text/css" media="all">		
	tr:hover{background: #F5DEB3;color:#000;}		
	</style>
	
	   <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 0px;">
	   <!-- Título alinhado à esquerda -->
	    <h2 style="margin: 0;">Cadastro Filiais</h2>	    
	    <!-- Botões alinhados à direita -->	    
	    <div>
	    <!-- Botão "Novo" com ícone de + -->
	    <button name="add2" id="add2"
		    onclick="location.href='add2.php'"
		    style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; margin-right: 5px; cursor: pointer;">
		<i class="fas fa-plus" style="margin-right: 6px;"></i> Novo
	    </button>

	    <!-- Botão "Voltar" com ícone de seta -->
	    <button name="voltar" id="voltar"
		    onclick="location.href='consulta_filiais.php'"
		    style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer;">
		<i class="fas fa-arrow-left" style="margin-right: 6px;"></i> Voltar
	    </button>
	</div></div><br />		
    
     <table width='100%' border='1' cellpadding='3' cellspacing='0' style='border: 1px solid #D3D3D3; border-collapse: collapse;'>
    <tr style=background-color:#FF8C00;>    	
        <th style='font-size:14px;'>Filial</th><th style='font-size:14px;'>Nome</th><th style='font-size:14px;'>Telefone</th><th style='font-size:14px;'>Circuito Telefone</th><th style='font-size:14px;'>Circuito Dados Embratel</th><th style='font-size:14px;'>Circuito Dados 2</th><th style='font-size:14px;'>CNPJ</th><th style='font-size:14px;'>Cidade</th><th style='font-size:14px;'>Estado</th><th style='font-size:14px;'>Update</th>
    </tr>
    <?php	
    
    while($user_data = mysqli_fetch_array($result)) {    
   
        echo "<tr>";         
        echo "<td style='font-size:12px;'>".$user_data['filial']."</td>";
        echo "<td style='font-size:12px;'>".$user_data['nome']."</td>";
        echo "<td style='font-size:12px; width: 78px;'>".$user_data['telefone']."</td>";
        echo "<td style='font-size:12px;'>".$user_data['circuito_tel']."</td>";
        echo "<td style='font-size:12px;'>".$user_data['circuito_dados']."</td>";
        echo "<td style='font-size:12px;'>".$user_data['circuito_dados2']."</td>";
        echo "<td style='font-size:12px; width: 110px;'>".$user_data['cnpj']."</td>";
    	echo "<td style='font-size:12px;'>".$user_data['cidade']."</td>";
        echo "<td style='font-size:12px;'>".$user_data['estado']."</td>";
		
        echo "<td style='font-size:12px;width:50px;'><a href='edit2.php?id=$user_data[id]'>Edit</a> | <a href='delete2.php?id=$user_data[id]' onclick=\"return confirm('Deseja excluir este registro?');\">Del</a></td></tr>";
	}	
	?>
	
    </table>
  </div>
</div>
<script src="script.js"></script>
</body>
</html>
