<?php
include('../config/config.php');
$sql = "SELECT * FROM cadastros.chamados";
$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Consultar chamados</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.php">Menu</a> -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="../home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../clientes/cadastros.php">Usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../produtos/produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../estoque/estoque.php">Estoque</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../helpdesk/abrir_chamados.php">Suporte</a>
            </li>
            </ul>
            <form class="d-flex" role="search">
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
            </form>
            <button class="btn btn-outline-danger" onclick="location.href='../logout.php'">Sair</button>  
        </div>
        </div>
    </nav>
    <html>
  <head>
    <meta charset="utf-8" />
    <title>Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php if(mysqli_num_rows($resultado) > 0) {
                while($row = $resultado-> fetch_object()){
                 ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row->titulo; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $row->categoria; ?></h6>
                  <p class="card-text"><?php echo $row->descricao; ?></p>
                </div>
              </div>
              <?php } } ?>
              <div class="row mt-5">
                <div class="col-6">
                  <a href="chamados.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
    
</body>
</html>