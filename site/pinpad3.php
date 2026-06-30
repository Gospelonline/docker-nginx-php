<?php 
include "menu.php"; 
?>

<div class="content" id="content">
  <h2>PinPad Cielo PPC930</h2>
 
  <div class="card">

<html>
	<body>				
			<style>p { line-height: 150%; }</style>			
			<img src="../image/pinpadcielo.png" style="width: 15%; height: auto;"/>
			<h3>Configurando PinPad Cielo PPC930 para TOTVs</h3><hr /><br />
			
			Conectar Pin Pad Cielo na porta USB do caixa e instalar o arquivo:<br /><br />
			<li>Gertec-Full-Installer_2.1.0.9.exe (Windows 8 em diante)</li>
			ou<br />
			<li>PPC_900-_Instalador_Driver_USB_PPC_900_910_920_e_MobiPin.exe (Windows 10)</li><br />	
			
			Configurar a porta COM do PinPad Cielo no gerenciador de dispositivo para porta 6 conforme a figura abaixo:
			
			<br /><br />
			<img src="../image/portacom.png"/>
			<br /><br />
			
			Dentro da pasta C:\Smartclient encontrar o arquivo clisitef.ini, abrir ele no bloco de notas e colocar no parâmetro PINPADCOMPARTILHADO / Porta=06 conforme a figura abaixo:
			
			<br /><br />
			<img src="../image/clisitef.png"/>
			<br /><br />
			
			Fechar e salvar o arquivo clisitef.ini.<br /><br />
			Reiniciar o computador, entrar no sistema TOTVS e fazer o teste. Ao abrir o sistema do caixa, não poderá exibir nenhuma mensagem como PinPad sem comunicação/ não encontrado, e aparecerá no display do Pin Pad Todimo caso tenha sido configurado corretamente.
			<br /><br />
			Obs: Este PinPad possui a tecnologia NFC (pagamento por aproximação) através de varios dispositivos, como smartphone, pulseira, relógio, cartão, adesivo, etc.

  </div>
</div>
<script src="script.js"></script>
</body>
</html>
