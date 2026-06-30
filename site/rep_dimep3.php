<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Rep Dimep - PrintPoint III</h2>
 
  <div class="card">

		<img src="../image/dimep3.png" style="width: 20%; height: auto;"/>
			<h3>Cadastrando PrintPoint III no DMP REP (Versão 8.02.0004)</h3><hr />					
		</head>		
		<body>		
			<b>1° - Criar chave RSA/Expoente e exportar para Pendrive</b>
				<ul><li>No Relógio Ponto apertar botão F2 e com a seta buscar opção "Gerar chave RSA" + E.</li>
				<li>Após gerar a chave RSA, inserir pendrive e novamente botão F2 e buscar opção "Exportar RSA" + E.</li></ul>
			
			<b>2° - Cadastrando Relógio no Sistema</b>
				<ul><li>No Computador abrir o sistema DMP REP e no menu "Arquivos -> Relógios" e clicar no botão "NOVO".</li>
				<li>Preencher os campos da janela "Inclusão de Relógios".</li>
					
				<li>No campo "Chave RSA" inserir os caracteres gerado no arquivo .txt dentro do pendrive e os últimos 6 caracteres da linha abaixo inserir no campo "Expoente".</li><br />
				<img src="../image/include.png"/><br /><br />
				<li>Clique no botão "Gravar".</li>
				<li><u><b>Obs:</b> Caso a chave RSA esteja diferente da gerada no Ponto pode apresentar erro <b>"Type mismatch"</b> e problema na conexão com sistema.</u></li>
				<li><u><b>Obs2:</b> Não colocar caracteres especiais no cadastro do relógio, pois pode gerar erro <b>"Type mismatch".</b></u></li></ul>
			
			<b>3° - Conectando ao Relógio</b>
				<ul><li>No sistema DMP REP no menu "Comunicação -> PrintPoint II / III / MiniPoint -> IP -> Conectar.</li>
				<li>Selecionar o relógio criado e clicar em "Conectar".</li>
				<li>Se estiver correto a configuração aparecerá a mensagem "Conectado com Sucesso!".</li>
				<li><u><b>Obs:</b> Caso apresente janela de erro ao conectar, pode ser necessário instalar ou ativar <b>.NET Framework3.5.</b></u></li></ul> 

  </div>
</div>
<script src="script.js"></script>
</body>
</html>
