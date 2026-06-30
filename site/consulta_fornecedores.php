<?php  
 include "menu.php"; 
 include_once ("conexao.php");

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM fornecedores ORDER BY nome";
$result = $con->query($sql);
?>
		<div class="content" id="content">
		<div class="card">
		
		<html>	
		<!-- Inclua isso no <head> do seu HTML para colocar icones -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

		<body>	
		<style type="text/css" media="all">			
			tr:hover{background: #F5DEB3;color:#000;}		
		</style>
		
		<h2>Cadastro de Fornecedores</h2>
		
		<div style="display: flex; align-items: center; gap: 0px;">				

  		<form method="POST" action="pesquisar_fornecedores.php">
  			<label for="pesquisar" style="font-size: 18px; font-weight: bold;">Nome do Fornecedor:</label>
  			<input type="text" name="pesquisar" placeholder="" style="font-size:14px; border-radius: 6px; width:300px;height:25px">
  		  	
  		    <!-- Botão com ícone de lupa -->
		    <button type="submit"
			    style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 90px; height: 30px; color: #fff; border: none; cursor: pointer;">
			<i class="fas fa-search" style="margin-right: 6px;"></i>
		    </button>  		  		 
		</form>
		
		<!-- Botão funcional com ícone de engrenagem -->		    
		    <button onclick="location.href='cadastro_fornecedores.php'" style="background: transparent;" border: none;"><i class="fas fa-cog" style="font-size: 20px"></i> 
		    </button></div><br/>				
		<?php					
			if ($result->num_rows > 0) {
				echo "<table border='1' cellpadding='3' cellspacing='0' style='border: 1px solid #D3D3D3; border-collapse: collapse;'>";
				echo "<tr style='background-color: #FF8C00; color: white;'>
					<th>Nome</th>
					<th>Endereço</th>
					<th>Contato</th>
					<th>Telefone</th>
				      </tr>";
  				while($row = $result->fetch_assoc()) {
    			echo "<tr><td style='font-size:12px;' width=300>".$row["nome"]."</td><td  style='font-size:14px;' width=320>".$row["endereco"]."</td><td style='font-size:14px;'>".$row["contato"]."</td><td style='font-size:14px;'>".$row["telefone"]."</td></tr>";
  		}
 				echo "</table>";
		} 
			else {
 				echo "0 results";
		}
		$con->close();
		?>
  </div>
</div>
<script src="script.js"></script>
</body>
</html>
