<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Adicionar Filial</h2>
 
  <div class="card">
	<html>
	<body>

	<h3>Cadastrar Filial</h3>
	<form action="add2.php" method="post" name="form1">
		<table width="100%" border="0">
			<tr>
				<td>Filial</td>
				<td><input type="text" name="filial" size="5" maxlength="10"></td>
			</tr>			
			<tr>
				<td>Nome</td>
				<td><input type="text" name="nome" size="25" maxlength="30"></td>
			</tr>
			<tr>
				<td>Telefone</td>
				<td><input type="text" name="telefone" size="25" maxlength="30"></td>
			</tr>
			<tr>
				<td>Circuito Telefone</td>
				<td><input type="text" name="circuito_tel" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td>Circuito Dados</td>
				<td><input type="text" name="circuito_dados" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td>CNPJ</td>
				<td><input type="text" name="cnpj" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td>Cidade</td>
				<td><input type="text" name="cidade" size="20" maxlength="20"></td>
			</tr>
			<tr>
				<td>Estado</td>
				<td><input type="text" name="estado" size="2" maxlength="2"></td>		
				
				<td><input type="submit" name="Submit" value="Adicionar" style="background: #069cc2; font-size:16px; border-radius: 6px; width:90px;height:30px;color:#fff; border: none"></td>				
			</tr></table>				
	</form>	
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$filial = $_POST['filial'];
		$nome = $_POST['nome'];		
		$telefone = $_POST['telefone'];
		$circuito_tel = $_POST['circuito_tel'];
		$circuito_dados = $_POST['circuito_dados'];
		$cnpj = $_POST['cnpj'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		
		// include database connection file
		include("conexao.php");
		
		$resultado = "SELECT * FROM filiais WHERE nome LIKE '$nome%'";	
		$resultado2 = $con->query($resultado);

		// Insert user data into table
		if ($resultado2->num_rows == 0 && $nome != ''){
		$result = mysqli_query($con, "INSERT INTO filiais(filial,nome,telefone,circuito_tel,circuito_dados,cnpj,cidade,estado) VALUES('$filial','$nome','$telefone','$circuito_tel','$circuito_dados','$cnpj','$cidade','$estado')");

		// Show message when user added
			echo "<script type='text/javascript'>								
			alert('Filial adicionada com sucesso!');			
			</script>";			
		}
		else{
			echo "<script type='text/javascript'>								
			alert('Campo "Nome" não pode ser vazio!');			
			</script>";	
		}
	}
	?>
	<br />
	
			
	<a><input type="button" name="voltar" class="BUTTON" id="voltar" onclick="location. href='cadastro_filiais.php'" value="Voltar" style="background: #069cc2; font-size:16px; border-radius: 6px; width:90px;height:30px;color:#fff; border: none"></a>

  </div>
</div>
<script src="script.js"></script>
</body>
</html>
