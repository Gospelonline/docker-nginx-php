<?php include "menu.php"; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<div class="content" id="content">
  <h2>Adicionar Fornecedores</h2>
 
  <div class="card">


	<h3>Cadastrar fornecedores</h3>
	<form action="add.php" method="post" name="form1">
		<table width="50%" border="0">
			<tr>
				<td>Nome</td>
				<td><input type="text" name="nome" size="50" maxlength="100"></td>
			</tr>
			<tr>
				<td>Endereço</td>
				<td><input type="text" name="endereco" size="90" maxlength="120"></td>
			</tr>
			<tr>
				<td>Contato</td>
				<td><input type="text" name="contato" size="70" maxlength="100"></td>
			</tr>
			<tr>
				<td>Telefone</td>
				<td><input type="text" name="telefone" size="50" maxlength="100"></td>		
			</tr>
			<tr><td colspan="2"><br />			
			<!-- Botão de Salvar com ícone -->
			<button type="submit" name="Submit"
				style="background: #008000; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer;">
			    <i class="fas fa-plus" style="margin-right: 6px;"></i> Salvar
			</button>			
			<!-- Botão com ícone "Voltar" -->
			<button type="button" name="voltar" id="voltar"			
				onclick="location.href='cadastro_fornecedores.php'"
				style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer;">
			    <i class="fas fa-arrow-left" style="margin-right: 6px;"></i> Voltar
			</button>
			</td></tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];
		$contato = $_POST['contato'];
		$telefone = $_POST['telefone'];

		// include database connection file
		include("conexao.php");
		
		$resultado = "SELECT * FROM fornecedores WHERE nome LIKE '$nome%'";	
		$resultado2 = $con->query($resultado);

		// Insert user data into table
		if ($resultado2->num_rows == 0 && $nome != '' && $telefone != ''){
		$result = mysqli_query($con, "INSERT INTO fornecedores(nome,endereco,contato,telefone) VALUES('$nome','$endereco','$contato','$telefone')");

		// Show message when user added
			echo "<script type='text/javascript'>								
			alert('Fornecedor adicionado com sucesso!');			
			</script>";			
		}
		else{
			echo "<script type='text/javascript'>								
			alert('Preencha os campos corretamente!');			
			</script>";	
		}
	}
	?>
  </div>
</div>
<script src="script.js"></script>

