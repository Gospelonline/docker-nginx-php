<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Rep Dimep - PrintPoint II/III</h2>
 
  <div class="card">

	<img src="../image/dimep2.jpg" style="width: 20%; height: auto;"/>
		<h3>Soluções de Problemas no Sistema DMPREP Dimep</h3><hr />					
		</head>		
		<body>		
			<b>*Quando tentar abrir o sistema DMPREP e apresentar o erro "Type mismatch":</b>
				<ul><li>Verificar no cadastro do Empregador ou Relógio se há caractere especial não permitido pelo sistema.</li></ul>
			<b>*Quando configurar outro usuário para acessar o sistema DMPREP e não aparece o cadastro dos funcionários nem o relógio ponto:</b>
				<ul><li>Procurar os aquivos DIMEP.Mdb e Dimep.Cfg dentro da pasta virtual do usuário que estava funcionando o sistema:</li><br />
				<u>C:\Users\Nome_Usuário\Configurações Locais\Dados de Aplicativos\VirtuaStore\Program Files (x86)\Dimep\DMPREP\</u><br /><br />
				<li>Caso não encotre, pesquisar na pasta do usuários original do sistema DMPREP os arquivos <u>DIMEP.Mdb</u> e <u>DIMEP.Cfg</u></li></ul>
			<b>*Caso não apareça registro de batidas de alguma dia ao fazer a "Coleta / Monitoração", pode-se reposicionar a data da coleta de registro fazendo o seguinte:</b><br /><br />
			Abra o sistema DMPREP, conecte no relógio ponto e tecle <b>"SHIFT + F2"</b> dentro da tela aberta do sistema e aparecerá uma janela de <b>"Reposicionamento de Ponteiro"</b> e selecione uma das opções:	 
				<ul><li><b>Tudo</b> (Volta o apontamento para a primeira batida existente no relógio ponto)</li>
					<li><b>Por Data</b> (O mais utilizado - Pode se escolher a partir de qual data quer que o sistema carregue as batidas)</li>
					<li><b>NSR</b> (Carrega as batidas a partir do número do NSR inserido)</li></ul>


  </div>
</div>
<script src="script.js"></script>
</body>
</html>
