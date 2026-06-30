<?php 
include "menu.php"; 
// Create database connection using config file
include("conexao.php");	

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM filiais ORDER BY nome";
$result = $con->query($sql);
//$result = mysqli_query($con, "SELECT * FROM filiais ORDER BY id ASC");
?>


<div class="content" id="content">
  <h2>Cadastro Filiais</h2>
 
  <div class="card">

<html>

<body>	
	
	<style type="text/css" media="all">		
	tr:hover{background: #F5DEB3;color:#000;}		
	</style><br />	
	
	<div style="margin-top:-20px" align="right">	
	<a><input type="button" name="add" class="BUTTON" id="add" onclick="location. href='add2.php'" value="Adicionar" style="background: #069ff2; font-size:16px; border-radius: 6px; width:90px;height:30px;color:#fff; border: none"></a>
	</div><br/>
	<!--
	<a><input type="button" name="voltar" class="BUTTON" id="voltar" onclick="location. href='consulta_filiais.php'" value="Voltar" 
	style="background: #069cc2; font-size:16px; border-radius: 6px; width:90px;height:30px;color:#fff; border: none"></a>
	-->
		
    <table width='100%' border=1>

    <tr style=background-color:#069ff2;>    	
        <th>Filial</th><th>Nome</th><th>Telefone</th><th>Circuito Telefone</th> <th>Circuito Dados</th> <th>CNPJ</th> <th>Cidade</th><th>Estado</th>
    </tr>
    <?php	
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['filial']."</td>";
        echo "<td>".$user_data['nome']."</td>";
        echo "<td>".$user_data['telefone']."</td>";
        echo "<td>".$user_data['circuito_tel']."</td>";
        echo "<td>".$user_data['circuito_dados']."</td>";
        echo "<td>".$user_data['cnpj']."</td>";
    	echo "<td>".$user_data['cidade']."</td>";
        echo "<td>".$user_data['estado']."</td>";
		
        echo "<td><a href='edit2.php?id=$user_data[id]'>Edit</a> | <a href='delete2.php?id=$user_data[id]' onclick=\"return confirm('Deseja excluir este registro?');\">Del</a></td></tr>";
	}	
	?>
	
    </table>
  </div>
</div>
<script src="script.js"></script>
</body>
</html>
