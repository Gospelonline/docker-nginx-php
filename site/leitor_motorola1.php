<?php 
include "menu.php"; 
?>

<div class="content" id="content">
  <h2>Motorola/ Zebra MK500 - Básico</h2>
 
  <div class="card">

<html>
	<body>				
			<style>p { line-height: 150%; }</style>
			<img src="../image/mk500.png" style="width: 20%; height: auto;"/>	
		
			<br /><h3>Configurando Aplicação no Leitor MK590</h3><hr /> <br />
			
			1. Dê STOP e depois EXIT no Datawedge antigo:<br /><br />
			<img src="../image/mk500/img1.png"/><br />
			
			<ul><li>Apague a pasta Datawedge já existente no diretório \Application, assim como todos os arquivos DataWedge que existirem na raiz do diretório Application!</li>
			<li>Exclua todos os arquivo APPLAUCHER.* que estão dentro do diretório \Application;</li>

			<li>Mova o arquivo do diretório \Application\AppCenter.lnk para o diretório \Platform;</li></ul>


			2. Copie o arquivo NETCFv2.wce5.armv4i.cab para dentro do diretório \Application.<br /><br />

			3. Copie o arquivo "DataWedge3.4.CAB" para o diretório \Application e executar o mesmo:<br /><br />
			<img src="../image/mk500/img2.png"/><br /><br />
			
			Altere para o diretório \Application e clique em Ok:<br /><br />
			<img src="../image/mk500/img3.png"/><br /><br />
			
			Copiar a pasta "Config" atualizada para dentro do diretório \Application\Datawedge<br /><br />			
			
			

			4. Copiar todos os arquivos e pastas da pasta \Application (configurado) para a raiz do diretório \Application :<br /><br />
			<img src="../image/mk500/arquivos.png"/><br /><br />
			
			
			
			6. Copiar todos os arquivos da pasta "Consulta Preço" para a raiz do diretório \Application (<b>não esquecer de alterar filial no arquivo ConsultaPreco.exe.config</b>);<br /><br />		

			7. Reiniciar o leitor de preço e pronto.

  </div>
</div>
<script src="script.js"></script>
</body>
</html>
