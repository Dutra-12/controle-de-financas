<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controle de finanças - Home</title>
  <link rel="shortcut icon" href="../assets/img/financa.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/inicio/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/financa-white.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Controle de finanças
      </a>
    </div>
  </nav>

  <!-- <div>Ícones feitos por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div> -->
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <h2>Mini agenda</h2>
      </div>
    </div>
    </br>
    <div class="row">
      <p>
        <a href="create.php" class="btn btn-success">Adicionar</a>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Data de vencimento</th>
            <th scope="col">Valor</th>
            <th scope="col">Situação</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'banco.php';
          $pdo = Banco::conectar();
          $sql = 'SELECT * FROM pessoa ORDER BY id DESC';

          foreach ($pdo->query($sql) as $row) {
            echo '<tr>';
            echo '<th scope="row">' . $row['nome'] . '</th>';
            echo '<td>' . $row['endereco'] . '</td>';
            echo '<td>' . $row['telefone'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['sexo'] . '</td>';
            echo '<td width=250>';
            echo '<a class="btn btn-primary" href="read.php?id=' . $row['id'] . '">Info</a>';
            echo ' ';
            echo '<a class="btn btn-warning" href="update.php?id=' . $row['id'] . '">Atualizar</a>';
            echo ' ';
            echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '">Excluir</a>';
            echo '</td>';
            echo '</tr>';
          }
          Banco::desconectar();
          ?>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>