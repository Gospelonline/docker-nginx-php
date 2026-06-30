<?php 
include "menu.php"; 
?>
	<!--link para adicionar icones nos botões-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<div class="content" id="content"> 
 	<div class="card">
  
  		<h2>Resultado da Pesquisa:</h2>
  		
  		<!-- Botão fora da tabela -->
		<div style="margin-top: 20px;">
		    <button type="button" name="voltar" id="voltar"
			    onclick="location.href='consulta_filiais.php'"
			    style="background: #FF8C00; font-size: 18px; border-radius: 6px; width: 100px; height: 35px; color: #fff;
			    border: none; cursor: pointer; float:right; margin-top: -40px;margin-right: 25px">
			<i class="fas fa-arrow-left" style="margin-right: 6px;"></i> Voltar
		    </button>
		</div>
	
		<style type="text/css" media="all">
		tr:hover{background: #F5DEB3;color:#000;}		
		</style>
		  
		<?php			
			include_once("conexao.php");    
	
		    	$pesquisar = $_POST['pesquisar'];
		    	$result_for = "SELECT * FROM filiais WHERE nome LIKE '%$pesquisar%'";
	   		$resultado_for = mysqli_query($con, $result_for);
			$result = $con->query($result_for);

			if ($result->num_rows > 0 && $pesquisar != '') {   	
			
			echo "<table border='1' cellpadding='3' cellspacing='0' style='border: 1px solid #D3D3D3; border-collapse: collapse;'><tr style=background-color:#FF8C00; font-size:12px><th>Filial</th><th>Nome</th><th>Telefone</th><th>Circuito Telefone</th><th>Circuito Dados</th><th>CNPJ</th><th>Cidade</th><th>Estado</th><th>Update</th></tr>";
			
		    	while($user_data = mysqli_fetch_array($result)) {
		    
			echo "<tr>";
			echo "<td style='font-size:12px;'>".$user_data['filial']."</td>";
			echo "<td style='font-size:12px;'>".$user_data['nome']."</td>";
			echo "<td style='font-size:12px;'>".$user_data['telefone']."</td>";
			echo "<td style='font-size:12px;'>".$user_data['circuito_tel']."</td>";
			echo "<td style='font-size:12px;'>".$user_data['circuito_dados']."</td>";
			echo "<td style='font-size:12px;'>".$user_data['cnpj']."</td>";
		    	echo "<td style='font-size:12px;'>".$user_data['cidade']."</td>";
			echo "<td style='font-size:12px;'>".$user_data['estado']."</td>";				
			
			echo "<td style='font-size:12px;'><a href='edit2.php?id=$user_data[id]'><CENTER>Editar</CENTER></a>			
			</td></tr>"; 		
			// | <a href='delete2.php?id=$user_data[id]' onclick=\"return confirm('Deseja excluir este registro?');\">Del</a>
		}		
		"</table>"; 		
		}
			else {
			//echo "0 Result";
			echo "<script type='text/javascript'>
 			alert('Filial não encontrado!'); 
			window.location='consulta_filiais.php';
			</script>";	
		}
		$con->close();	
		?>
		<!--
		<a><input type="button" name="voltar" class="BUTTON" id="voltar" onclick="location. href='consulta_filiais.php'" value="Voltar" style="background: #FF8C00; font-size:18px; border-radius: 6px; width:100px;height:35px;color:#fff; border: none; float:left"></a>-->
  </div>
</div>
<script src="script.js"></script>
</body>
</html>
