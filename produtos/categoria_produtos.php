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
    <title>Document</title>
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
    <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>