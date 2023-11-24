<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turmas</title>
    <link rel="stylesheet" href="../style/turmas.css">
</head>
<body>
    

    <header>
        <nav id="info">
        <p>Melrulim</p>
        <button>Sair</button>
        </nav>
    </header>

    <main>

        <section id="cadastrar">
            <div>
                <a href="cadastroTurma.html"><button>Cadastrar turma</button></a>
            </div>
        </section>

        <section id="tabela">
            <div>
                <h1>Turmas</h1>
                <table>
                    <tr>
                      <th>Número</th>
                      <th>Nome</th>
                      <th>Ação</th>
                    </tr>

                    <?php
                        	include("../database/turmas.php");
                        	if(!empty($lista_turmas)){
                            	foreach($lista_turmas as $linha){
                                	echo ' <tr>
                                        	<td> '.$nomet1['idturma'] .' </td>
                                        	<td> '.$nomet1['nomet1'] .' </td>
                                        	<td> <a href="excluir_usuario.php?codigo='.$nomet1['idturma'].'"> Excluir <a> </td>
                                        	<td> <a href="visualizar_usuario.php?codigo='.$nomet1['idturma'].'"> Visualizar <a> </td>
                                    	    </tr>
                                	     ';
                            	}
                        	}
                    	?>

                    
                  </table>
            </div>
        </section>

    </main>

</body>
</html>