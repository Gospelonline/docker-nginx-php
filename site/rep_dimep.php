<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Rep Dimep - PrintPoint II</h2>
 
  <div class="card">

	<img src="../image/dimep.png" style="width: 20%; height: auto;"/></center>
		<h3>Procedimentos para cadastro e exportação de registros</h3><hr />					
		</head>		
		<body>		
			<b>1° - Conectar ao sistema.</b>
				<ul><li>Comunicação/Print Point II/IP/Conectar.</li></ul>
			<b>2° - Cadastro de colaborador.</b>
				<ul><li>Arquivo/Cartao/Novo (Campos obrigatorio preencher Matricula/Nome/Dta de Admissao/Pis). Relogio/ selecionar relogio e associa-lo.</li></ul>
			<b>3° - Transmitir o cadastro para o relogio.</b>
				<ul><li>Comunicacao/Print Point II/IP/Inicializacao Geral/Transmissao de Lista.</li></ul>	 
			<b>4° - Cadastrar a digital pelo relogio.</b>
		<p>Codigo de liberacao:</p>
			<ul><li>E + 91 + E + Matricula do colaborador + E</li> 
			<li>A opção do dedo a ser cadastrado (para mudar a opção de dedo a ser cadastrado digite 0)</li> 
			<li>E (para confirmar o dedo a ser cadastrado)</li>
			<li>Colocar o indicador direito 3 vezes (conforme a luz ir apagando) + E</li> 
			<li>Colocar o indicador esquerdo 3 vezes (conforme a luz ir apagando)</li></ul>
		<p>Se der tudo certo aparecerá a mensagem de "cadastro com sucesso", caso de erro na coleta da digital terá que repetir o processo do início.<br />
		Obs: O E é como se fosse um botao de Enter/Confirmação</p>	 		
			<b>5° - Importar as digitais para o sistema.</b>
				<ul><li>Comunicacao/Print Point II/IP/Importacao de Templates.</li></ul>	 
			<b>6° - Processo para coletar as batidas realizadas.</b>
				<ul><li>Comunicacao/Print Point II/ IP/ Coleta/Monitoracao.</li></ul>	 
			<b>7° - Exportar as informacoes de Batidas no arquivo para Joice.</b>
				<ul><li>Exportar/Local de Gravacao do arquivo: de sua preferencia/selecione o relogio e click na seta ( > )/ informe o periodo a ser gerado e exportar.</li></ul>
			
		<h2>Comandos importantes</h2><hr /><br />
			
			<b>Reinicializar o REP</b>
			<ul><li>E + 97 + E + 00 + E (pressionar E até reiniciar)</li></ul>

			<b>Para configurar no REP com endereço IP digite</b>
			<ul><li>E + 97 + E + 0 (pressiona-se o zero para avançar o menu)</li></ul>

			<b>Correção de ponteiro para coleta de registro</b>
			<ul><li>Shift + F2 (na tela de coleta das batidas)</li></ul>

			<b>Impressão de teste após troca da bobina</b>
			<ul><li>E + 90 + E (imprime e picota o papel para alinhar a posição)</li></ul>

			<b>Excluir digital do REP</b>
			<ul><li>E + 92 + E + matricula + E (remove a digital do colaborador no REP)</li></ul>

			<b>Configurar para corte total do ticket</b>
			<ul><li>Conectar ao REP/ Arquivos/ Configurações PrintPointII/ Config. Hr. Verão/ Impressão/ Tipo de Corte/ Total.<br />
			Depois precisa enviar ao REP a configuração: Inicializaçõa Geral/ Enviar Conf. Hr. Verão/ Impressão.</li></ul>

  </div>
</div>
<script src="script.js"></script>
</body>
</html>
