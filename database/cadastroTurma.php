<?php
session_start();
include("conexao.php");

// Recebe os valores
$nome = $_POST['nome'];

// Insere os valores no banco
$sql = "INSERT INTO turma (nome_turma) VALUES ('$nome')";

// Executa se for verdadeiro
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	$conexao->close();

	header('Location: turmas.html');
}


exit;
?>