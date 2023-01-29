<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['idacessos'])){
    header('Location:../index.php?login=erro2');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
    <title>Abrir chamado</title>
</head>
<body>
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
    
<div class="container">    
  <div class="row">

    <div class="card-abrir-chamado">
      <div class="card">
        <div class="card-header">
          Abertura de chamado
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              
              <form method="POST">
                <div class="form-group">
                  <label>Título</label>
                  <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título">
                </div>
                
                <div class="form-group">
                  <label>Categoria</label>
                  <select class="form-control" name="categoria" id="categoria">
                    <option>Criação Usuário</option>
                    <option>Impressora</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Rede</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Descrição</label>
                  <textarea class="form-control" rows="3" name="descricao" id="descricao"></textarea>
                </div>

                <div class="row mt-5">
                  <div class="col-6">
                    <a href="chamados.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                  </div>

                  <div class="col-6">
                    <!-- <button class="btn btn-lg btn-info btn-block" type="submit" >Abrir</button> -->
                    <input class="btn btn-lg btn-info btn-block" type="submit" name="submit" id="submit" value="Cadastrar">
                  </div>
                </div>
              <!-- <input type="submit" name="submit" id="submit" value="Cadastrar"> -->
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  echo 'teste';
    include_once('../config/config.php');
    $titulo = ($_POST['titulo']);
    $categoria = ($_POST['categoria']);
    $descricao = ($_POST['descricao']);

    $sql = "INSERT INTO chamados (titulo, categoria , descricao)
VALUES ('$titulo','$categoria','$descricao')";

if
 (mysqli_query($conexao, $sql)) {
  echo "<script> alert('Chamado cadastrado com sucesso!') </script>";
  echo "<script> location.href='chamados.php';</script>";
} else {
  echo "Erro ao cadastrar " . $sql . "<br>" . mysqli_error($conexao);
}

mysqli_close($conexao);
}
?>