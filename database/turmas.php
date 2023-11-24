<?php
include("database/conexao.php");

// Aqui ele puxa pelo menor numero da coluna id_ngc
$sql = "SELECT nome_turmas FROM turma ORDER BY id_turmas ASC LIMIT 1";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
  // Saída do primeiro item
  $row = $result->fetch_assoc();
  $nomengc1 = $row["nomet1"];
} else {
  $nomengc1 = "Sem resultados";
}

$conexao->close();

return ['nomet1' => $nomet1];

?>