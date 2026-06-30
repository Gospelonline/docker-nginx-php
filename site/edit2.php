<?php 
ob_start();
require ("lib/validador_cadfiliais.php");
include "menu.php"; 
// include database connection file
include_once("conexao.php");
// Check if form is submitted for user update, then redirect to homepage after update

if(isset($_POST['update'] ))
{
	$id = $_POST['id'];
	$filial = $_POST['filial'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $circuito_tel = $_POST['circuito_tel'];
        $circuito_dados = $_POST['circuito_dados'];
        $circuito_dados2 = $_POST['circuito_dados2'];
        $cnpj = $_POST['cnpj'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        
        
        $result = mysqli_query($con, "UPDATE filiais SET filial='$filial', nome='$nome', telefone='$telefone', circuito_tel='$circuito_tel',
        circuito_dados='$circuito_dados', circuito_dados2='$circuito_dados2', cnpj='$cnpj', cidade='$cidade', estado='$estado' WHERE id=$id");
	
	//Mensagem após clicar em salvar
	if ($result) {
		    echo "<script>alert('Alterações salvas com sucesso!'); window.location.href='cadastro_filiais.php';</script>";
		    exit;
		} else {
		    echo "<script>alert('Erro ao salvar alterações: " . mysqli_error($con) . "');</script>";
		}	
   }
	
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM filiais WHERE id=$id");
	
while($user_data = mysqli_fetch_array($result))
{
	$filial = $user_data['filial'];
        $nome = $user_data['nome'];
        $telefone = $user_data['telefone'];
        $circuito_tel = $user_data['circuito_tel'];
        $circuito_dados = $user_data['circuito_dados'];
        $circuito_dados2 = $user_data['circuito_dados2'];
        $cnpj = $user_data['cnpj'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];	
}	
ob_end_flush();
?> 	
<html>	
	<!-- Carregar ícones-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<body>	
	
	<div class="content" id="content">
	<h2>Alterar dados da Filial</h2>  
	<div class="card">
	
	<h3>Cadastro de filiais</h3>
	<form name="update_user" method="post" action="edit2.php">
    <table border="0">
        <tr>
            <td>Filial</td>
            <td><input type="text" name="filial" size="5" maxlength="10" value="<?php echo $filial; ?>"></td>
        </tr>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" size="30" maxlength="50" value="<?php echo $nome; ?>"></td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td><input type="text" name="telefone" size="25" maxlength="50" value="<?php echo $telefone; ?>"></td>
        </tr>
        <tr>
            <td>Circuito Telefone</td>
            <td><input type="text" name="circuito_tel" size="30" maxlength="50" value="<?php echo $circuito_tel; ?>"></td>
        </tr>
        <tr>
            <td>Circuito Dados</td>
            <td><input type="text" name="circuito_dados" size="30" maxlength="50" value="<?php echo $circuito_dados; ?>"></td>
        </tr>
        <tr>
            <td>Circuito Dados 2</td>
            <td><input type="text" name="circuito_dados2" size="30" maxlength="50" value="<?php echo $circuito_dados2; ?>"></td>
        </tr>
        <tr>
            <td>CNPJ</td>
            <td><input type="text" name="cnpj" size="20" maxlength="20" value="<?php echo $cnpj; ?>"></td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td><input type="text" name="cidade" size="20" maxlength="20" value="<?php echo $cidade; ?>"></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><input type="text" name="estado" size="2" maxlength="2" value="<?php echo $estado; ?>"></td>
        </tr>

        <!-- Linha final com botões -->
        <tr>
            <td colspan="2" style="text-align: LEFT;"><BR />
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                <button type="submit" name="update" value="Salvar"
                    onclick="return confirm('Deseja alterar este registro?') location.href='cadastro_filiais.php'";
                    style="background: #008000; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer; margin-right: 5px;">
                    <i class="fas fa-save" style="margin-right: 6px;"></i> Salvar
                </button>
                
                <button type="button" 
		    onclick="if (confirm('Deseja excluir este registro?')) { window.location.href='delete2.php?id=<?php echo $_GET['id']; ?>'; }"
		    style="background: #FF0000; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer; margin-right: 5px;">
		    <i class="fas fa-trash-alt" style="margin-right: 6px;"></i> Excluir
		</button>
                
                <button type="button" name="voltar" id="voltar"
                    onclick="location.href='cadastro_filiais.php'"
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

