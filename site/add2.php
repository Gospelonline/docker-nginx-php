<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Adicionar Filial</h2>

  <div class="card">

    <h3>Cadastrar Filial</h3>
       	
	<form action="" method="post" name="form1">
    	
      <table width="35%" border="0">
        <tr>
          <td>Filial</td>
          <td><input type="text" name="filial" size="5" maxlength="5"></td>
        </tr>
        <tr>
          <td>Nome</td>
          <td><input type="text" name="nome" size="30" maxlength="50"></td>
        </tr>
        <tr>
          <td>Telefone</td>
          <td><input type="text" name="telefone" size="30" maxlength="50"></td>
        </tr>
        <tr>
          <td>Circuito Telefone</td>
          <td><input type="text" name="circuito_tel" size="30" maxlength="50"></td>
        </tr>
        <tr>
          <td>Circuito Dados</td>
          <td><input type="text" name="circuito_dados" size="30" maxlength="50"></td>
        </tr>
        <tr>
          <td>Circuito Dados 2</td>
          <td><input type="text" name="circuito_dados2" size="30" maxlength="50"></td>
        </tr>
        <tr>
          <td>CNPJ</td>
          <td><input type="text" name="cnpj" size="20" maxlength="20"></td>
        </tr>
        <tr>
          <td>Cidade</td>
          <td><input type="text" name="cidade" size="30" maxlength="30"></td>
        </tr>
        <tr>
          <td>Estado</td>
          <td><input type="text" name="estado" size="2" maxlength="2"></td>
        </tr>
        
        <tr><td colspan="2"><br />			
			<!-- Botão de Salvar com ícone -->
			<button type="submit" name="submit" value="1"
				style="background: #008000; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer;">
			    <i class="fas fa-plus" style="margin-right: 6px;"></i> Salvar
			</button>			
			<!-- Botão com ícone "Voltar" -->
			<button type="button" name="voltar" id="voltar"			
				onclick="location.href='cadastro_filiais.php'"
				style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer;">
			    <i class="fas fa-arrow-left" style="margin-right: 6px;"></i> Voltar
			</button>
	</td></tr>        
      </table>
    </form>
    
    <?php
	//if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include("conexao.php");

    // Recebe os dados com segurança
    $filial = $_POST['filial'] ?? '';
    $nome = $_POST['nome'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $circuito_tel = $_POST['circuito_tel'] ?? '';
    $circuito_dados = $_POST['circuito_dados'] ?? '';
    $circuito_dados2 = $_POST['circuito_dados2'] ?? '';
    $cnpj = $_POST['cnpj'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $estado = $_POST['estado'] ?? '';

    if (!empty($nome)) {
        $nome = mysqli_real_escape_string($con, $nome);

        $verifica = "SELECT * FROM filiais WHERE nome LIKE '$nome%'";
        $resultado = $con->query($verifica);

        if ($resultado && $resultado->num_rows == 0) {
            $sql = "INSERT INTO filiais (filial, nome, telefone, circuito_tel, circuito_dados, circuito_dados2, cnpj, cidade, estado)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("sssssssss", $filial, $nome, $telefone, $circuito_tel, $circuito_dados, $circuito_dados2, $cnpj, $cidade, $estado);

            if ($stmt->execute()) {
                echo "<script>alert('Filial adicionada com sucesso!'); window.location.href='cadastro_filiais.php';</script>";
            } else {
                echo "<script>alert('Erro ao adicionar filial: " . $stmt->error . "');</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Já existe uma filial com esse nome ou nome inválido.');</script>";
        }

        $con->close();
    } else {
        echo "<script>alert('O campo \"Nome\" não pode estar vazio.');</script>";
    }
}
?>
  </div>
</div>
<script src="script.js"></script>

