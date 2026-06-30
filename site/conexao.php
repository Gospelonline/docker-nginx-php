<?php    

    $servername = "mariadb";
    $database = "todimoti";
    $username = "todimo";
    $password = "Todimo5562";
    
	 // Criar conexão
	$con = new mysqli($servername, $username, $password, $database);

	// Verificar se deu erro
	if ($con->connect_error) {
	    die("Erro na conexão: " . $mysqli->connect_error);
	}

	// Definir charset como UTF-8
	if (!$con->set_charset("utf8")) {
	    die("Erro ao definir charset: " . $con->error);
	}

	// Pronto para usar a conexão
