<?php 
include "menu.php"; 
?>

<div class="content" id="content">
  <h2>Motorola MK500 - Reset</h2>
 
  <div class="card">

<html>
	<body>	
			
			<style>p { line-height: 150%; }</style>
			<img src="../image/mk500.png" style="width: 20%; height: auto;"/>			
			
			<br /><h1>Restaurando o Leitor para o padrão de fábrica</h1><hr /><br />
			
			1. Copiar a pasta "OSUpdate" que está dentro de \Firmware, para dentro da pasta "Temp" que fica na memoria do leitor<br /><br />
			
			Obs : Caso apresente algum erro na copia do arquivo, vá para:<br /><br />
			Painel de Controle > System > Na aba "Memory" deslizar a barra da memória para a direita > Clicar em OK > Após o término da cópia do arquivo voltar novamente a barra da memória para posição esquerda > Clicar em OK<br /><br />
			<img src="../image/mk500/img6.png"/><br /><br />
			
			2. Depois de copiado a pasta "OSUpdate" execute "MK500c50BenColor_TEMP" que se encontra dentro da pasta. Após executar , caso o processo não continue , aparecerá uma tela com um botão "ABORT".<br /><br />			
			
			3. Clique em ABORT e execute "WARMBOOT".<br /><br />			
			<img src="../image/mk500/img7.png"/><br /><br />
			
			4. Após o leitor reiniciar, executar novamente "MK500c50BenColor_TEMP". Assim que o processo terminar o leitor estará com o padrão de fábrica.

  </div>
</div>
<script src="script.js"></script>
</body>
</html>
