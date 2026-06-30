<?php include "menu.php"; ?>
<div class="content" id="content">
  <h2>Thin Client HP t430</h2>
 
  <div class="card">

			<img src="../image/hp_t430/hp_t430.jpg" style="width: 10%; height: auto;"/>
			
			<h2>Configurando Thin Client HP t430</h2><hr />
			
			<h3>1 - Configuração inicial:</h3> 
			Configurar Idioma, Layout Teclado, Tipo de Conexão de Rede e Fuso Horário.<br />
			<br /><img src="../image/hp_t430/wizard.png"/><br /><br />
			
			<h3>2 - Desktop Layout:</h3>
			Ir para > Control Panel > Appearance > "Style" selecione a opção > "Stretch" e clique no botão > "Apply".<br />
			<br /><img src="../image/hp_t430/desktop.png"/><br /><br />			
			
			<h3>3 - Configurando Rede:</h3>
			Ir para > Control Panel > System > Network > Na aba "Wired" em > "Connection Method" > alterar para "Static" e configure o endereço ip, máscara e gateway e clique no botão "Apply.<br />
			<br /><img src="../image/hp_t430/network.png"/><br /><br />

			Na aba "DNS" > Colocar o nome no campo > "Hostname", depois no campo > "DNS Server" colocar os ips dos servidores DNS separando por vírgula. Depois Clicar no botão "Apply".<br />
			<br /><img src="../image/hp_t430/dns.png"/><br /><br />			
			
			<h3>4 - Finalizando - Configurando Usuário e Senha de Conexão Remota (TS):</h3>
			No Desktop, clique com botão direito do mouse no ícone "Siatd" e selecione > "Edit" em > "Options" marque a opção em vermelho e clique no botão "Apply e OK".</b><br />
			<br /><img src="../image/hp_t430/ts.png"/><br /><br />

			Agora é só configurar a conexão remota, preenchendo com nome do <b>Servidor, Usuário e Senha</b>marcar a caixa <b>"Remember me"</b> e clicar em <b>"Connect".</b><br />
			<br /><img src="../image/hp_t430/ts2.png"/><br /><br />
			
			<ul><li>Senha VNC: vnctodim</li><br />
			<li>Senha admin: thinclient@t0d1m0</li></ul><br /><hr />
			
			<p>Caso o thinclient não ative as configurações do Manager (HPDM), restaurar novamente de fábrica e deixar a rede em modo DHCP para inicializar a configuração automática pelo manager e se for thinclient já cadastrado, apagar do manager antes de configurar novamente.</p>
			<p>Obs: O manager só configura os thinclient com a versão do sistema Thinos 7.2, caso esteja em outra versão, fazer dowgrade/upgrade para 7.2 em Easy Update.</p>
			Acesso ao Manager HPDM: <a href="https://192.168.200.250:8443/hpdm/" target="_blank">https://192.168.200.250:8443/hpdm/</a>
			
  </div>
</div>
<script src="script.js"></script>
</body>
</html>
