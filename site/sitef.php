<?php 
include "menu.php"; 
?>

<div class="content" id="content">
  <h2>Cod. Sitef</h2>
 
  <div class="card">
	
	<html>			
	<body>	
			<style type="text/css" media="all">				
				tr:hover{background: #F5DEB3;color:#000;}		
				p { line-height: 150%;}
			</style>
			
			<h3>Mensagens de erro que a Instituição Autorizadora retorna</h3><hr />
			<p align="justify">A mensagem de erro que a Instituição Autorizadora retorna ao PDV, vem precedida com código.  O SiTef repassa o código recebida da Instituição. 
			Abaixo segue tabela com os erros mais comuns, sendo que o lojista deverá solicitar à Instituição uma tabela mais atualizada, ou se desejar mais 
			informações sobre o erro deverá entrar em contato diretamente com a Instituição.</p>

			Tabela de códigos  de Retorno Sitef
			<center><table border="1" width="100%">
			<tr bgcolor="#F4A460"><td><b>Código</b></td><td><b>Mensagem apresentada no PDV</b></td><td><b>Descrição</b></td></tr>
			  <tr><td>00</td><td>	Transação OK</td><td>Aprovada, Transação executada</td></tr>
			  <tr><td>01</td><td>	01 </td><td>Ligar para o emissor do cartão</td></tr>
			  <tr><td>03</td><td>	03 Estab. Inval</td><td>Estabelecimento Comercial inválido</td></tr>
			  <tr><td>05</td><td>	05 </td><td>Transação negada pelo emissor (do not honor)</td></tr>
			  <tr><td>06</td><td>	06 Refaça Trans.</td><td>Erro</td></tr>
			  <tr><td>12</td><td>	12 Trans. Inval.</td><td>Transação Inválida</td></tr>
			  <tr><td>13</td><td>	13 Valor Inval.</td><td>Valor da Transação Inválido</td></tr>
			  <tr><td>14</td><td>	14 Probl.cartão</td><td>Cartão Inválido</td></tr>
			  <tr><td>15</td><td> 	15 Probl.cartão</td><td>Instituição Não Cadastrada</td></tr>
			  <tr><td>19</td><td>   19 Refaça Trans.</td><td>Refaça a Transação</td></tr>
			  <tr><td>20</td><td>	20 Refaça Trans.</td><td>Resposta Inválida</td></tr>
			  <tr><td>25</td><td>	25 Refaça Trans.</td><td>Registro não Encontrado</td></tr>
			  <tr><td>30</td><td>	30 Refaça Trans.</td><td>Erro de Formato</td></tr>
			  <tr><td>31</td><td>	31 Probl.cartão</td><td>Instituição Não Pertence à Rede</td></tr>
			  <tr><td>38</td><td>	38 Probl.cartão</td><td>Excedido  Número de Tentativas do PIN</td></tr>
			  <tr><td>39</td><td>   39 Conta Inval.</td><td>Número da Conta Inválido</td></tr>
			  <tr><td>41</td><td>	41 Probl.cartão</td><td>Cartão Extraviado</td></tr>
			  <tr><td>43</td><td>	43 Probl.cartão</td><td>Cartão Roubado</td></tr>
			  <tr><td>49</td><td>	49 Não passa cartão com chip</td><td>Está na versão L0201 e não L0205</td></tr>
			  <tr><td>51</td><td>	51 Excede Limite</td><td>Saldo Insuficiente</td></tr>
			  <tr><td>52</td><td>	52 Probl.cartão</td><td>Conta Corrente Não Cadastrada</td></tr>
			  <tr><td>54</td><td>	54 Probl.cartão</td><td>Não Autorizado - Cartão Vencido</td></tr>
			  <tr><td>55</td><td> 	55 Senha Inval.</td><td>Senha Incorreta</td></tr>
			  <tr><td>56</td><td>	56 Probl.cartão</td><td>Cartão Sem Registro</td></tr>
			  <tr><td>57</td><td>	57 Probl.cartão</td><td>Transação não permitida a este cartão. Banco que está negando. Ligar pra lá.</td></tr>
			  <tr><td>58</td><td>	58 Excede Limite.</td><td>Igual ao erro 51.	Saldo Insuficiente</td></tr>
			  <tr><td>59</td><td>	59 Conta Inval.</td><td>Conta Irregular</td></tr>
			  <tr><td>60</td><td>	60 Ligue cartão</td><td>Entrar em Contato com a Instituição</td></tr>
			  <tr><td>61</td><td>	61 Excede Limite</td><td>Excedido Limite de Saque</td></tr>
			  <tr><td>65</td><td>	65 Excede Limite</td><td>Excedido Freqüência de Saque</td></tr>
			  <tr><td>75</td><td>	75 </td><td>Transação negada pelo Banco Emissor</td></tr>
			  <tr><td>76</td><td>	76 Probl.cartão</td><td>Cartão Bloqueado</td></tr>
			  <tr><td>79</td><td>	79 Probl. Banco</td><td>Transação Não Permitida Neste Ciclo</td></tr>
			  <tr><td>83</td><td>	83 Refaça Trans.</td><td>Time-out</td></tr>
			  <tr><td>84</td><td>	84 Refaça Trans.</td><td>Log-On (Terminal não aberto)</td></tr>
			  <tr><td>85</td><td>	85 Refaça Trans.</td><td>Problema Rede Local</td></tr>
			  <tr><td>87</td><td>	87 Falta Cartão</td><td>Cartão Obrigatório na Transação</td></tr>
			  <tr><td>91</td><td>	91 Refaça Trans.</td><td>Instituição Temporariamente Fora de Operação</td></tr>
			  <tr><td>M7</td><td>	M7 IPTE Inválido</td><td>Código IPTE Inválido</td></tr>
			  <tr><td>M9</td><td>	M9 Refaça Trans.</td><td>Data Inválida</td></tr>
			  <tr><td>N0</td><td>	N0 Refaça Trans.</td><td>MAC Inválido</td></tr>
			  <tr><td>N1</td><td>	N1 Refaça Trans.</td><td>Dados Inválidos</td></tr>
			  <tr><td>N2</td><td>	N2 Refaça Trans.</td><td>Código de Processamento Inválido</td></tr>
			  <tr><td>N3</td><td>	N3 Trans. Canc.</td><td>Transação já Cancelado</td></tr>
			  <tr><td>N4</td><td>	N4 Pag. Inval.</td><td>Empresa Credora Inválida</td></tr>
			  <tr><td>N5</td><td>	N5 C.B. Inval.</td><td>Código de Barras Inválido</td></tr>
			  <tr><td>N9</td><td>	N9 Refaça Trans.</td><td>NSU Repetido</td></tr>
			  <tr><td>P1</td><td>	Cheque OK.</td><td>Cheque OK.</td></tr>
			  <tr><td>P2</td><td>	P2 Cheque Sustado</td><td>Cheque Sustado</td></tr>
			  <tr><td>P3</td><td>	P3 Solicitar desbloqueio</td><td>Solicitar desbloqueio do Cheque</td></tr>
			  <tr><td>P4</td><td>	P4 Conta encerrada</td><td>Conta encerrada</td></tr>
			  <tr><td>P5</td><td>	P5 Conta inválida</td><td>Conta inválida</td></tr>
			  <tr><td>P6</td><td>	P6 Agência Inválida</td><td>Agência Inválida</td></tr>
			  <tr><td>P7</td><td>	P7 Número de Cheque Inválido</td><td>Número de Cheque Inválido</td></tr>
			  <tr><td>P8</td><td>	P8 Não consta CCF / TecBan</td><td>Não consta CCF / TecBan</td></tr>
			  <tr><td>R1</td><td>	R1 Cheque Ok</td><td>Consta CCF/TecBan</td></tr>
			  <tr><td>R2</td><td>	R2 Cheque Sustado</td><td>Consta CCF / TecBan</td></tr>
			  <tr><td>R3</td><td>	R3 Cheque Bloqueado</td><td>Consta CCF/TecBan</td></tr>
			  <tr><td>R4</td><td>	R4 Consta Encerrada</td><td>Consta CCF / TecBan</td></tr>
			  <tr><td>R5</td><td>	R5 Consta CPF / TecBan</td><td>Consta CPF / TecBan</td></tr>
			  <tr><td>R6</td><td>	R6 CGC / CPF inválido</td><td>CGC / CPF inválido</td></tr>
			  </table></center>		
			  			  
			  <h2>Mensagens de erros que o SiTef retorna</h2>

			  <p align="Justify">Os erros detectados pelo SiTef são retornados com o código de erro ff(hexa). Para que a aplicação possa identificar o 
			  tipo de erro, será retornado no serviço H com o código de resposta diferenciado e com os demais campos com zeros ou brancos.
			  No código de resposta do campo H pode retornar:</p>
			  
				<table border="1" width="35%">
				<tr><td>(S0)</td><td>Serviço Indisponível</td></tr>
				<tr><td>(S1)</td><td>Cartão Inválido</td></tr>
				<tr><td>(S2)</td><td>Transação Indefinido</td></tr>
				<tr><td>(S3)</td><td>Doc. não existe</td></tr>
				<tr><td>(S4)</td><td>Dados invalidos</td></tr>
				<tr><td>(S5)</td><td>Não existe conf.</td></tr>
				<tr><td>(S6)</td><td>Tamanho invalido</td></tr>
				<tr><td>(S7)</td><td>Dados Inconsist.</td></tr>
				<tr><td>(S8)</td><td>Senha Inválida</td></tr>
				<tr><td>(S9)</td><td>Abrir terminal</td></tr>
				<tr><td>(V0)</td><td>Versão Incorreta</td></tr>
				<tr><td>(V1)</td><td>Campo Indefinido</td></tr>
				<tr><td>(V2)</td><td>Estabel. Indefinido</td></tr>
				<tr><td>(V3)</td><td>CPF/CGC Invalido</td></tr>
				<tr><td>(V6)</td><td>Cartão Vencido</td></tr>
				<tr><td>(V9)</td><td>Transação já efetuada</td></tr></table>

				<h3>Inclusão para versão Visa 4.1:</h3>
				
				<table border="1" width="35%">
				<tr><td>(V4)</td><td>Operação não permitida</td></tr>
				<tr><td>(V5)</td><td>Transação já efetuada</td></tr>
				<tr><td>(V8)</td><td>Documento não encontrado<br /></td></tr>
				<tr><td>(V9)</td><td>Saldo PIN</td></tr>
				<tr><td>(CV)</td><td>Data inválida de digitação</td></tr>
				<tr><td>(TM)</td><td>Cancel timeout host</td></tr>
				<tr><td>(VI)</td><td>Valor inválido</td></tr>
				<tr><td>(E1)</td><td>Excede parcelas</td></tr>
				<tr><td>(E2)</td><td>Valor mínimo de parcelas inválido</td></tr>
				<tr><td>(E3)</td><td>Valor de parcelas inválido</td></tr>
				<tr><td>(E4)</td><td>Excede prazo</td></tr></table>


  </div>
</div>
<script src="script.js"></script>
</body>
</html>
