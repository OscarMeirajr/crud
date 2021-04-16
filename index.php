<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Agenda de Contatos</title>
</head>

<body>




        <div class="container">
          <div class="jumbotron">
            <div class="row">
                <h2>   AGENDA   <span class="badge badge-secondary">v 1.0.0</span></h2>
            </div>
          </div>
            </br>
            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-outline-success">Adicionar</a>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM tb_alunos ORDER BY id DESC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                echo '<th scope="row">'. $row['id'] . '</th>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['endereco'] . '</td>';
                            echo '<td>'. $row['fone'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['sexo'] . '</td>';
                            echo '<td width=350>';
                            echo '<a class="btn btn-primary" href="read.php?id='.$row['id'].'">Info</a>';
                            echo ' ';
                            echo '<a class="btn btn-warning" href="update.php?id='.$row['id'].'">Atualizar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
   
	
					<div class="alert alert-primary" role="alert">
					Professor Oscar Jr!
					</div>
</body>

</html>
