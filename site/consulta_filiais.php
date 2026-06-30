<?php 
include "menu.php"; 
?>

<div class="content" id="content">
<div class="card">
	
<?php
include_once ("conexao.php");

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT * FROM filiais ORDER BY estado DESC, nome ASC";
$result = $con->query($sql);
?>
		<html>	
		<!-- Inclua isso no <head> do seu HTML para colocar icones -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

		<body>	
		
		<style type="text/css" media="all">			
		tr:hover{background: #F5DEB3;color:#000;}		
		</style>
			
		<h2>Filiais Grupo Todimo</h2>			
		
		<div style="display: flex; align-items: center; gap: 0px;">
		
		<form method="POST" action="pesquisa_filial.php">
		    	
		    <label for="pesquisar" style="font-size: 18px; font-weight: bold;">Nome da Filial:</label>
		    <input type="text" name="pesquisar" placeholder="" style="width: 300px; height: 25px; font-size: 16px; border-radius: 6px;">
		    
		    <!-- Botão com ícone de lupa -->
		    <button type="submit"
			    style="background: #FF8C00; font-size: 16px; border-radius: 6px; width: 90px; height: 30px; color: #fff; border: none; cursor: pointer;">
			<i class="fas fa-search" style="margin-right: 6px;"></i>
		    </button>			 
		</form>    
		    <!-- Botão funcional com ícone de engrenagem -->		    
		    <button onclick="location.href='cadastro_filiais.php'" style="background: transparent;" border: none;"><i class="fas fa-cog" style="font-size: 20px"></i> 
		    </button></div><br/>
		 <?php		
			
			if ($result->num_rows > 0) {
			
				echo "<table border='1' cellpadding='5' cellspacing='0' style='border: 1px solid #D3D3D3; border-collapse: collapse;'>";			
		 		echo "<tr style='background-color:#FF8C00; color: white;'><th>Filial</th><th>Nome</th>
		 		<th style='width:80pX'>Telefone</th><th>Circuito Telefone</th><th>Circuito Dados Embratel</th><th>Circuito Dados 2</th><th style='width:110pX'>CNPJ</th><th>Estado</th></tr>";
  				// output data of each row
  				while($row = $result->fetch_assoc()) {
    			echo "<tr><td style='font-size:12px;'>".$row["filial"]."</td><td style='font-size:12px;'>".$row["nome"]."</td><td style='font-size:12px;'>".$row["telefone"]."</td><td style='font-size:12px;'>".$row["circuito_tel"]."</td><td style='font-size:12px;'>".$row["circuito_dados"]."</td><td style='font-size:12px;'>".$row["circuito_dados2"]."</td><td style='font-size:12px;'>".$row["cnpj"]."</td><td style='font-size:12px;'>".$row["estado"]."</td></tr>";
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
