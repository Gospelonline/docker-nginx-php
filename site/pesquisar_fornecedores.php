<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Resultado da Pesquisa</h2>
  
 		 <!-- Botão fora da tabela -->
		<div style="margin-top: 20px;">
		    <button type="button" name="voltar" id="voltar"
			    onclick="location.href='consulta_fornecedores.php'"
			    style="background: #FF8C00; font-size: 18px; border-radius: 6px; width: 100px; height: 35px; color: #fff;
			    border: none; cursor: pointer; float:right; margin-top: -40px;margin-right: 25px">
			<i class="fas fa-arrow-left" style="margin-right: 6px;"></i> Voltar
		    </button>
		</div>
  <!--
  <a><input type="button" name="voltar" class="BUTTON" id="voltar" onclick="location. href='consulta_fornecedores.php'" value="Voltar" style="background: #FF8C00; font-size:16px; border-radius: 6px; width:100px;height:35px;color:#fff; border: none; float:right; margin-right: 25px"></a>-->  
<html>   	 
	<body>	
			
		<style type="text/css" media="all">			
			tr:hover{background: #F5DEB3;color:#000;}		
		</style>
		
		
		<?php					
		include_once("conexao.php");
	    	
	    	$pesquisar = $_POST['pesquisar'];
	    	$result_for = "SELECT * FROM fornecedores WHERE nome LIKE '%$pesquisar%'";
	   		$resultado_for = mysqli_query($con, $result_for);
			$result = $con->query($result_for);

			if ($result->num_rows > 0 && $pesquisar != '') {			
		  	
			echo "<table border='1' cellpadding='3' cellspacing='0' style='border: 1px solid #D3D3D3; border-collapse: collapse;'><tr style=background-color:#FF8C00; font-size:12px;><th>Nome</th><th>Endereço</th><th>Contato</th><th>Telefone</th><th>Update</th></tr>";				
			
			while($user_data = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td style='font-size:12px;'>".$user_data['nome']."</td>";
				echo "<td style='font-size:12px;'>".$user_data['endereco']."</td>";
				echo "<td style='font-size:12px;'>".$user_data['contato']."</td>";
				echo "<td style='font-size:12px;'>".$user_data['telefone']."</td>";
				echo "<td style='font-size:12px;'><a href='edit.php?id=$user_data[id]'><center>Editar</center></a></td></tr>";  
				//| <a href='delete.php?id=$user_data[id]' onclick=\"return confirm('Deseja excluir este registro?');\">Del</a>		
					
			}
			"</table>"; 		
			}
			else {
				//echo "0 Result";
				echo "<script type='text/javascript'>
	 			alert('Fornecedor não encontrado!'); 
				window.location='consulta_fornecedores.php';
				</script>";	
			}
			$con->close();				
			?>					 
  </div>  
</div>
<script src="script.js"></script>
</body>
</html>
