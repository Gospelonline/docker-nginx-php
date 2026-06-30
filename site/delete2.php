<?php
// Incluindo a conexão com o banco de dados
include_once("conexao.php");

// Verificando se o ID foi passado na URL
if (isset($_GET['id'])) {
    // Obtendo o ID da URL
    $id = $_GET['id'];

    // Sanitizando o ID para evitar SQL Injection
    $id = mysqli_real_escape_string($con, $id);

    // Query para deletar o registro
    $query = "DELETE FROM filiais WHERE id = $id";

    // Executando a query
    $result = mysqli_query($con, $query);

    // Verificando se a exclusão foi bem-sucedida
    if ($result) {
        // Redireciona com uma mensagem de sucesso
        echo "<script>alert('Registro excluído com sucesso!'); window.location.href='cadastro_filiais.php';</script>";
    } else {
        // Caso ocorra algum erro na exclusão
        echo "<script>alert('Erro ao excluir o registro. Tente novamente.'); window.location.href='cadastro_filiais.php';</script>";
    }
} else {
    // Caso o ID não tenha sido passado
    echo "<script>alert('ID não fornecido.'); window.location.href='cadastro_filiais.php';</script>";
}
?>

