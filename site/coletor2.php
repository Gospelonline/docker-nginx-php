<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Coletor Zebra TC21</h2> 
  <div class="card">
    
    		<img src="../image/tc21.png" style="width: 10%; height: auto;"/>
		<body>			  
			<h2>Atualizando e Configurando o Coletor Zebra TC21</h2><hr />
		  
			<h3>Atualizando:</h3>
			
			<p align="Justify">Para atualizar é necessário acessar o menu de inicialização segurando o botão power e botão esquerdo inferior ao ligar o coletor, dentro do menu selecionar a opção de upgrade por SD card (o sd card tem que estar em FAT32 e baixado o arquivo zip (por exemplo: HE_FULL_UPDATE_14-26-08.00-UG-U02-STD-HEL-04.zip) da atualização.</p>
			
			<h3>Configurando no MDM:</h3>
			
			<p align="Justify">Após a atualização, na tela bem-vindo tocar na tela 6 vezes para abrir a leitura do QR Code gerado no <b>MDM</b> em: <b>"Enrollment -> QR Code Template"</b>, para que a configuração seja efetiva, configure no wifi de um celular roteando internet 4G/5G, pois no wifi da loja bloqueia o play store.</p>

			<p align="Justify">Após a configuração, é necessário cadastrar um usuário no novo coletor no <b>MDM</b> em <b>"Ernollment -> Staged"</b>, colocando o e-mail, grupo e nome do coletor e salvar as informações.</p>
			<a href="https://mdm.todimo.com.br:9383/client#/login" target="blank"><button style="background: #FF8C00; border-radius: 6px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Link para o MDM</button></a>

			<h3>Configurando Meu Coletor:</h3>

			<p align="Justify">Selecionar/preencher as opções abaixo:

			<ul><li>The Connection: <b>http</b></li>
			<li>Address: <b>http://findtotvs.dt.td</b></li>
			<li>The Door: <b>50 + Filial</b></li>
			<li>A Row: <b>rest</b></li></ul>

			<P>Após configurar tocar no botão <b>"The Test"</b> para verificar a configuração, se o teste der certo tocar no botão <b>"Save"</b> para finalizar.</P>
			Obs: Pin Bluetooth: 12345.
			</p>
  </div>
</div>
<script src="script.js"></script>
</body>
</html>
