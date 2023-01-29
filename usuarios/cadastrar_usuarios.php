<?php
if(!isset($_SESSION)){
  session_start();
}
if(!isset($_SESSION['idacessos'])){
  header('Location:../index.php?login=erro2');
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>System</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="login.php">
        Cadastrar
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Cadastrar
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="nome" type="text" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit" name="submit" id="submit">Cadastrar</button>
              </form>
              
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
<?php
if(isset($_POST['submit']))
{
    include_once('../config/config.php');
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);

    mysqli_query($conexao, "INSERT INTO acessos (email, senha)
     VALUES ('$email','$senha') ");
    echo "<script> alert('Cadastrado com sucesso!') </script>";
    echo "<script> location.href='../index.php';</script>";
}
?>