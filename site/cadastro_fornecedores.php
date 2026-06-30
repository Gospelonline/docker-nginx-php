<?php 
require ("lib/validador_cadfornecedores.php");	
include "menu.php"; 
// Create database connection using config file
include("conexao.php");

// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM fornecedores ORDER BY id ASC");
?>

<div class="content" id="content"> 
  <div class="card">

<html>
<body>	
	<style type="text/css" media="all">		
	tr:hover{background: #F5DEB3;color:#000;}		
	</style>	
	
	<div style="display: flex; justify-content: space-between; align-items: center; margin-top: 0px;">

    <!-- Título alinhado à esquerda -->
    <h2 style="margin: 0;">Cadastro Fornecedores</h2>

    <!-- Botões alinhados à direita -->
    <div>
    
    	    <!-- Botão "Novo" com ícone de + -->
	    <button name="add" id="add"
		    onclick="location.href='add.php'"
		    style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; margin-right: 5px; cursor: pointer;">
		<i class="fas fa-plus" style="margin-right: 6px;"></i> Novo
	    </button>

	    <!-- Botão "Voltar" com ícone de seta -->
	    <button name="voltar" id="voltar"
		    onclick="location.href='consulta_fornecedores.php'"
		    style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer;">
		<i class="fas fa-arrow-left" style="margin-right: 6px;"></i> Voltar
	    </button>
    </div>

</div><br/>
  
    <table width='100%' border='1' cellpadding='3' cellspacing='0' style='border: 1px solid #D3D3D3; border-collapse: collapse;'>

    <tr style=background-color:#FF8C00;>    	
        <th>Nome</th>
        <th>Endereço</th>
        <th>Contato</th>
        <th>Telefone</th>
        <th>Update</th>
    </tr>
    <?php	
    while($user_data = mysqli_fetch_array($result)) {   
    
        echo "<tr>";
        echo "<td style='font-size:14px;'>".$user_data['nome']."</td>";
        echo "<td style='font-size:14px;'>".$user_data['endereco']."</td>";
        echo "<td style='font-size:14px;'>".$user_data['contato']."</td>";
	echo "<td style='font-size:14px;'>".$user_data['telefone']."</td>";
        echo "<td style='font-size:12px;'><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]' onclick=\"return confirm('Deseja excluir este registro?');\">Del</a></td></tr>";
	}	
	?>
	
    </table>	

  </div>
</div>
<script src="script.js"></script>
</body>
</html>
