<?php
    include_once('config.php');
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

    <title>Cadastro produtos</title>
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
    <div class="container">
        <div class="rows">
            <div class="col mt-2">
                <form method="POST">
                    <legend>Cadastrar</legend>
                    <div>
                    <input type="text" name="nome_produto" id="nome_produto" placeholder="Nome" class="form-control" ><br>
                    </div>
                    <div>
                    <input type="text" name="custo_produto" id="custo_produto" placeholder="Custo" class="form-control" value="0,00"><br> 
                    </div>
                    <div>
                    <input type="text" name="preco_produto" id="preco_produto" placeholder="Preço" class="form-control" value="0,00"><br>
                    </div>
                    <div>
                    <input type="text" name="gtin_produto" id="gtin_produto" placeholder="Código de Barras" class="form-control"><br>                    
                    </div>
                    <div>
                    <input type="submit" name="submit" id="submit" value="Enviar" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    include_once('../config/config.php');
    $nome_produto = ($_POST['nome_produto']);
    $custo_produto = $_POST['custo_produto'];
    $preco_produto = $_POST['preco_produto'];
    $gtin_produto = $_POST['gtin_produto'];

    mysqli_query($conexao, "INSERT INTO produtos (nome_produto, custo_produto, preco_produto, gtin_produto, qtd_produto)
     VALUES ('$nome_produto','$custo_produto','$preco_produto','$gtin_produto','0') ");

echo "<script> alert('Cadastrado com sucesso!') </script>";
echo "<script> location.href='produtos.php';</script>";
}

?>