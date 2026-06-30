<?php 
ob_start();
require ("lib/validador_cadfornecedores.php");	
include "menu.php"; 
// include database connection file
include_once("conexao.php");
// Check if form is submitted for user update, then redirect to homepage after update

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$nome=$_POST['nome'];
	$endereco=$_POST['endereco'];
	$contato=$_POST['contato'];
	$telefone=$_POST['telefone'];

	// update user data
	$result = mysqli_query($con, "UPDATE fornecedores SET nome='$nome',endereco='$endereco',contato='$contato',telefone='$telefone' WHERE id=$id");
	
	if ($result) {
		    echo "<script>alert('Alterações salvas com sucesso!'); window.location.href='cadastro_fornecedores.php';</script>";
		    exit;
		} else {
		    echo "<script>alert('Erro ao salvar alterações: " . mysqli_error($con) . "');</script>";
		}	
	
	// Redirect to homepage to display updated user in list
	//header("Location: cadastro_fornecedores.php");	
	//exit;
   }

// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM fornecedores WHERE id=$id");
	
while($user_data = mysqli_fetch_array($result))
{
	$nome = $user_data['nome'];
	$endereco = $user_data['endereco'];
	$contato = $user_data['contato'];
	$telefone = $user_data['telefone'];		
}	
ob_end_flush();
?> 	
<html>	
	<body>	
	
	<div class="content" id="content">
	<h2>Alterar dados do fornecedor</h2>  
	<div class="card">
	
	<h3>Cadastro de fornecedores</h3>
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Nome</td>
				<td><input type="text" name="nome" size="60" maxlength="100" value="<?php echo $nome;?>" ></td>
			</tr>
			<tr>
				<td>Endereço</td>
				<td><input type="text" name="endereco" size="60" maxlength="120" value="<?php echo $endereco;?>" ></td>
			</tr>
			<tr>
				<td>Contato</td>
				<td><input type="text" name="contato" size="60" maxlength="100" value="<?php echo $contato;?>" ></td>
			</tr>
			<tr>
				<td>Telefone</td>
				<td><input type="text" name="telefone" size="60" maxlength="100" value="<?php echo $telefone;?>" ></td>
			</tr>			
				 <!-- Linha final com botões -->
				<tr>
				    <td colspan="2" style="text-align: LEFT;"><BR />
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

					<button type="submit" name="update" value="Salvar"
					    onclick="return confirm('Deseja alterar este registro?')"
					    style="background: #008000; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer; margin-right: 5px;">
					    <i class="fas fa-save" style="margin-right: 6px;"></i> Salvar
					</button>
					
					<button type="button" 
					    onclick="if (confirm('Deseja excluir este registro?')) { window.location.href='delete.php?id=<?php echo $_GET['id']; ?>'; }"
					    style="background: #FF0000; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer; margin-right: 5px;">
					    <i class="fas fa-trash-alt" style="margin-right: 6px;"></i> Excluir
					</button>

					<button type="button" name="voltar" id="voltar"
					    onclick="location.href='cadastro_fornecedores.php'"
					    style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer;">
					    <i class="fas fa-arrow-left" style="margin-right: 6px;"></i> Voltar
					</button>
				    </td>
				</tr>					
		</table>
	</form>	
	<script src="script.js"></script>
	</div>
	</div>
</body>
</html>

