<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Painel Administrador</title>
</head>

<body>
        <div class="container">
          <div class="jumbotron">
         
                <p>
                    <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'db.php';
                        $u = new Usuario;
                        $u->conectar("cafe","localhost","root","massahiko96");;
                        $sql = 'SELECT * FROM cliente ORDER BY id DESC';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
			                      echo '<th scope="row">'. $row['id'] . '</th>';
                            echo '<td>'. $row['nome'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn btn-primary" href="read.php?id='.$row['id'].'">Info</a>';
                            echo ' ';
                            echo '<a class="btn btn-warning" href="update.php?id='.$row['id'].'">Atualizar</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
</body>

</html>
