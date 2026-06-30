<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Configurando Impressora Daruma no Smartclient</h2>
 
  <div class="card">
    
   			<img src="../image/daruma.png" style="width: 10%; height: auto;"/>
			<br /><h3>Procedimento para configurar a impressora Daruma no TOTVs</h3><hr /> 
			
			<p align="justify">
			1.	Se a impressora estiver configurado IP siga o próximo passo, caso contrário clique <b><a href="daruma_eth.php"> aqui</a></b> para configurar.<br />
			2.	Entre na pasta C:\Smartclient e encontre o arquivo "DarumaFrameWork.xml" e edite o arquivo no notepad.<br />
			3. Dentro do arquivo encontre as linhas "Rota1, Rota2, Rota3..." e coloque o IP que esta configurado na impressora Daruma conforme exemplo da figura abaixo:
			<br />			
			<img src="../image/darumaxml.png"/>
			<br />
			4.	Feito esta configuracao feche e salve as alterações no arquivo "DarumaFrameWork.xml"".<br />			
			5.	Acesse o TOTVS e caso não apresente nenhuma mensagem de erro de comunição com a impressora, a configuração foi executada com sucesso.
    
  </div>
</div>
<script src="script.js"></script>
</body>
</html>
