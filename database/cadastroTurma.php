<?php
session_start();
include("conexao.php");

// Recebe os valores
$nome = $_POST['nomeTurma'];
$id_nome = $_SESSION['usuario_id'];

// Insere os valores no banco
$sql = "INSERT INTO turma (nome_turma, fk_professor) VALUES ('$nome', '$id_nome')";

// Executa se for verdadeiro
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	$conexao->close();

	header('Location: turmas.html');
}


exit;
?>


