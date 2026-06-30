<?php	
// Inicia Session PHP 
	session_start();

	// Se o usuário não estiver logado envia-o para o formulário de login
	if ($_SESSION["logado"] != "TRUE") {
		header("Location: ../../login.php");					  
	}
	
	/*
	if ($_SESSION["logado"] == "TRUE" && $_SESSION["user"] != "luis.kurihara"){
		echo "<script>alert('Acesso negado.')
				window.location='home';
				</script>";	
	}
	*/
		if ($_SESSION["logado"] == "TRUE" && $_SESSION["user"] != "luis.kurihara" AND $_SESSION["user"] != "infra")  {
			echo "<script>alert('Acesso negado.')
				window.location='index.php';
				</script>";	
	}
	
	
	define('TEMPOEX', 14400); /*tempo de expiração da sessão em minutos*/
	//todas as páginas que quiser um lifetime para a sessão	
	ini_set('session.gc_probability', 14400);
	ini_set('session.gc_maxlifetime', TEMPOEX);
	ini_set('session.cookie_lifetime', TEMPOEX);
	ini_set('session.cache_expire', TEMPOEX);		
	// Verifica se $_SESSION['ultimoClick'] esta setada e não esta vazia.
	// Caso esteja, ele verifica o tempo que o usuario levou entre um clique e outro.
	// Caso não, ele seta a sessão e dá o valor do tempo time() atual.
	
	if ( isset($_SESSION['ultimoClick']) AND !empty($_SESSION['ultimoClick']) ) {
	$tempoAtual = time();
	
	// Faz uma condição entre o tempo do ultimo click e o tempo atual.
	// Caso dê maior que 60 segundos, redireciona para a pagina desejada.
	// Caso não de maior, apenas atualiza o valor do ultimo clique para o valor atual.
	
	if ( ($tempoAtual - $_SESSION['ultimoClick']) > '14400' ) {
	session_unregister($_SESSION['ultimoClick']);
	$_SESSION = array();
	session_destroy();
	header("Location:lib/logout.php?motivo=inatividade");
	exit();
	}else{
	$_SESSION['ultimoClick'] = time();
	}
	}else{
	$_SESSION['ultimoClick'] = time();
	}	
?>
