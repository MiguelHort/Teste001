<?php
session_start();
include("conexao.php");

$user_email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$user_senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql = "SELECT * FROM professor WHERE email = '$user_email' AND senha = '$user_senha'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if ($count == 1) {
    // As credenciais são válidas, o usuário está autenticado
    $_SESSION['usuario_id'] = $row['id_professor']; // Salvar o ID do usuário na sessão, se necessário
    $_SESSION['usuario_nome'] = $row['nome_professor']; // Salvar o nome do usuário na sessão, se necessário

    header('Location: ../pages/turmas.html'); // Redirecionar para a página do painel do usuário
    exit;
} else {
    $_SESSION['login_invalido'] = true; // Credenciais inválidas
    header('Location: ../pages/login.html'); // Redirecionar de volta para a página de login
    exit;
}
$conexao->close();
?>