<?php		
require ("lib/validador.php");	
?>
<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../favicon/ti7.png" />
  <title>Suporte Todimo Ti</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>    
  
    <div class="header-left">  	
    <img id="logo" src="/image/logo_dark2.png" alt="Logo" class="logo">    
    </div>
   
    <div class="header-buttons">
      <button style="font-size: 18px" id="menuBtn">☰</button>
      <button style="font-size: 18px" id="themeBtn">🌙</button>       
      
      <!-- Certifique-se de ter Font Awesome no <head> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	<!-- Botão com ícone de logout -->
	<button name="logout" id="logout" onclick="location.href='logout.php'"
		style="margin-top: 5px; background: #FF8C00; font-size: 16px; border-radius: 6px; width: 100px; height: 35px; color: #fff; border: none; cursor: pointer;">
	    <i class="fas fa-sign-out-alt" style="margin-right: 6px;"></i> Sair
	</button>

      <!--<a><input type="button" name="logout" class="BUTTON" id="logout" onclick="location. href='logout.php'" value="🔒Sair" style="margin-top: 5px; background: #FF8C00; font-size:16px; border-radius: 6px; width:90px;height:30px;color:#fff; border: none"></a>-->	
       
    </div>
  </header>
  <div class="main">
   
    <nav class="sidebar" id="sidebar">
      <ul class="menu">
        <li><a href="index.php">🏠 <span class="texto">Início</span></a></li>
       
        <!--          
        <li><a href="sobre.php">ℹ️ <span class="texto">Sobre</span></a></li>
        <li><a href="servicos.php">📂 <span class="texto">Serviços Disponíveis</span></a></li>              
                
        <li><a href="logout.php">🔒 <span class="texto">Sair</span></a></li> 
        
        <li><a href="#">📂 <span class="texto">Portfólio</span></a></li>
        <li><a href="#">📰 <span class="texto">Blog</span></a></li>
        <li><a href="#">📞 <span class="texto">Contato</span></a></li>
        <li><a href="#">👥 <span class="texto">Equipe</span></a></li>
        <li><a href="#">🛒 <span class="texto">Produtos</span></a></li>
        <li><a href="#">🖼️ <span class="texto">Galeria</span></a></li>
        <li><a href="#">🤝 <span class="texto">Clientes</span></a></li>
        <li><a href="#">🆘 <span class="texto">Suporte</span></a></li>
        <li><a href="#">⚙️ <span class="texto">Configurações</span></a></li>      
        💰
        -->
        
         <!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">🛒 <span class="texto">Caixas - PinPad</span> ▼</a>	<ul class="submenu">			
					<li><a href="pinpad4.php"> 🔹 <span class="texto">Central Atendimento Cielo (PinPad)</a></li>					
					<li><a href="pinpad3.php"> 🔹 <span class="texto">Configurando PinPad Cielo</a></li>												
					<li><a href="sitef.php"> 🔹 <span class="texto">Código de Retorno Sitef</a></li>							
					</ul>
				</li>
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">🎥 <span class="texto">CFTV - Sistema de Câmeras</span> ▼</a>
	<ul class="submenu">							
					<li><a href="nvr.php"> 🔹 <span class="texto">NVR Paraná</a></li> 
					</ul>
				</li>
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">📲 <span class="texto">Coletor Zebra TC21</span> ▼</a>
	<ul class="submenu">				
					<li><a href="coletor2.php"> 🔹 <span class="texto">Atualização e Configuração</a></li> 
					</ul>
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">🔍 <span class="texto">Consulta Preço (Motorola/Zebra)</span> ▼</a>
	<ul class="submenu">			
					<li><a href="leitor_motorola.php"> 🔹 <span class="texto">Config. Rede</a></li>
					<li><a href="leitor_motorola1.php"> 🔹 <span class="texto">Config. Aplicação</a></li>
					<li><a href="leitor_motorola2.php"> 🔹 <span class="texto">Sair da Aplicação</a></li>
					<li><a href="leitor_motorola3.php"> 🔹 <span class="texto">Reset conf. Fábrica</a></li>						
					</ul>
				</li>
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">🖨️ <span class="texto">Impressoras</span> ▼</a>
	<ul class="submenu">								
					<li><a href="mp4200.php"> 🔹 <span class="texto">Bematech MP4200 TH</a></li>
					<li><a href="brother.php"> 🔹 <span class="texto">Brother HL-L2360D</a></li>
					<li><a href="p2055dn.php"> 🔹 <span class="texto">Laser HP P2055dn</a></li>
					<li><a href="daruma_eth.php"> 🔹 <span class="texto">Daruma DR700 ETH (Configuração)</a></li>
					<li><a href="darumapdv.php"> 🔹 <span class="texto">Daruma ETH (Caixas)</a></li>					
					<li><a href="zebra.php"> 🔹 <span class="texto">Etiqueta Zebra S4M</a></li>   
					<li><a href="zebrazt230.php"> 🔹 <span class="texto">Etiqueta Zebra ZT230</a></li>
					<li><a href="fx890.php"> 🔹 <span class="texto">Matricial Epson FX-890</a></li> 				
					</ul> 
				</li>
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">🌐 <span class="texto">Links Dados/ Internet / WiFire</span> ▼</a>
	<ul class="submenu">				
					<li><a href="link_dados.php"> 🔹 <span class="texto">Abertura de Chamados/Tickets</a></li>		
					<li><a href="https://atendimento.wifire.me/kb" target="blank"> 🔹 <span class="texto">Suporte WiFire</a></li>				
					</ul>
				</li>	
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">☎️ <span class="texto">Telefonia / Cadastro</span> ▼</a>
	<ul class="submenu">					
					<li><a href="chamados_tel.php"> 🔹 <span class="texto">Abertura de Chamados Telefonia</a></li>
					<li><a href="centrais.php"> 🔹 <span class="texto">Centrais Telefônicas Todimo Paraná</a></li>						
					<li><a href="central_so.php"> 🔹 <span class="texto">TGCO - "Sem Operação"</a></li>
					<li><a href="central_so2.php"> 🔹 <span class="texto">TGCO - "Ligações Caindo"</a></li>
					<li><a href="central_so3.php"> 🔹 <span class="texto">TGCO - "Teste de Audio de Espera"</a></li>
					<li><a href="central_so4.php"> 🔹 <span class="texto">TGCO - "Comandos Ramal"</a></li>
					</ul>
				</li>
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">📞 <span class="texto">Ramais & Contatos</span> ▼</a>
	<ul class="submenu">				
					<li><a href="ramais_pr.php"> 🔹 <span class="texto">Ramais Filiais (PR)</a></li>           
          				<li><a href="consulta_fornecedores.php"> 🔹 <span class="texto">Contato Fornecedores(PR)</a></li> 
          				<li><a href="consulta_filiais.php"> 🔹 <span class="texto">Cadastro de Filiais Grupo Todimo</a></li> 
          				<!--<li><a href="lista_ramais_lojas.php"> 🔹 <span class="texto">Telefones Filiais Grupo Todimo</a></li>-->					
					</ul>		
				</li>	
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">⚡ <span class="texto">Mapa Rede Paraná</span> ▼</a>
	<ul class="submenu">				
					<li><a href="rede_apc.php"> 🔹 <span class="texto">Rede Apucarana</a></li> 	
					<li><a href="rede_arp.php"> 🔹 <span class="texto">Rede Arapongas</a></li>	
					<li><a href="rede_cmb.php"> 🔹 <span class="texto">Rede Cambé</a></li> 
					<li><a href="rede_cdpr.php"> 🔹 <span class="texto">Rede CDPR</a></li> 	
					<li><a href="rede_cc.php"> 🔹 <span class="texto">Rede Cinco Conjuntos</a></li> 										
					<li><a href="rede_lnd.php"> 🔹 <span class="texto">Rede Tiradentes</a></li> 					
					</ul>
				</li>
			  
			  	<li><a href="glpi.php">📈 <span class="texto">Métricas GLPI</a></li>
			  	
			  	<li><a href="nobreak.php">🔋 <span class="texto">Nobreaks Paraná</a></li>
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">🕕 <span class="texto">Relogio Ponto Dimep</span> ▼</a>
	<ul class="submenu">								
					<li><a href="rep_dimep.php"> 🔹 <span class="texto">REP Dimep PrintPoint II</a></li> 
					<li><a href="rep_dimep3.php"> 🔹 <span class="texto">REP Dimep PrintPoint III</a></li>
          				<li><a href="rep_dimep2.php"> 🔹 <span class="texto">Soluções de Problemas</a></li>
					<li><a href="rep_dimep_filiais.php"> 🔹 <span class="texto">Lista de Pontos Filiais PR</a></li>
					</ul>
				</li>	
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">🎨 <span class="texto">SelfColor | Sherwin Williams</span> ▼</a>
	<ul class="submenu">									
					<li><a href="selfcolor.php"> 🔹 <span class="texto">Selfcolor (Instalação e Manutenção)</a></li> 
					<li><a href="sw.php"> 🔹 <span class="texto">Sherwin Williams (Logins / Configuração)</a></li> 	
					</ul>
				</li>	
				
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">📱 <span class="texto">Siatd Mobile</span> ▼</a>
	<ul class="submenu">				
					<li><a href="siatdmobile.php"> 🔹 <span class="texto">Configuração do Servidor</a></li> 
					</ul>		
				
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">🖥️ <span class="texto">Thin Client</span> ▼</a>
	<ul class="submenu">				
					<li><a href="hp_t430.php"> 🔹 <span class="texto">HP - T430 (Configuração)</a></li>				
					<li><a href="dell.php"> 🔹 <span class="texto">Dell - Wyse 3040 (Configuração)</a></li>
					<li><a href="dell2.php"> 🔹 <span class="texto">Dell - Wyse 3040 (Novo)</a></li>		
					</ul></li>
	<!-- Menu com submenu -->
    	<li class="has-submenu">	
	<a href="#">💻 <span class="texto">MS-DOS / POWERSHELL</span> ▼</a>
	<ul class="submenu">				  					
					<li><a href="msdos.php"> 🔹 <span class="texto">Comandos</a></li> 
					<li><a href="msdos-rede.php"> 🔹 <span class="texto">Comandos Redes</a></li>
					<li><a href="msdos_reparo.php"> 🔹 <span class="texto">Reparo Windows</a></li>
					<li><a href="powershell.php"> 🔹 <span class="texto">Comandos Powershell</a></li>
	</ul></li>        
      </ul>
    </nav>
