<?php
include('../config/config.php');
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['idacessos'])){
    header('Location:../index.php?login=erro2');
}

$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $conexao->query($sql);
$row = $res->fetch_object();

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    <legend>Editar</legend>            
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <input placeholder="Usuário" type="text" name="usuario" id="usuario" class="form-control" value="<?php print $row->usuario; ?>" >
    </div>
    <div class="mb-3">
        <input placeholder="Senha" type="password" name="senha" id="senha" class="form-control" value="<?php print $row->senha; ?>"  >
    </div>
    <div class="mb-3">
        <input placeholder="Nome completo" type="text" name="nome" id="nome" class="form-control" value="<?php print $row->nome; ?>" >
    </div>
    <div class="mb-3">
        <input placeholder="E-mail" type="email" name="email" id="email" class="form-control" value="<?php print $row->email; ?>">
    </div>
    <div class="mb-3">
        <input type="date" name="nascimento" id="nascimento" class="form-control" value="<?php print $row->nascimento; ?>" >
    </div>
    <div class="mb-3">
        <input placeholder="Telefone" type="text" name="telefone" id="telefone" class="form-control" value="<?php print $row->telefone; ?>" >
    </div>
    </div class="mb-3">
        <select placeholder="genero" name="genero" id="genero" class="form-control" value="<?php print $row->genero; ?>">
            <option value="Gênero" id="Gênero">Gênero</option>
            <option value="Masculino" id="Masculino">Masculino</option>
            <option value="Feminino" id="Feminino">Feminino</option>
            <option value="Outros" id="Outros">Outros</option>
        </select>
        <div><br>
    <div class="mb-3">
    <select  type="text" name="estado" id="estado" class="form-control" value="<?php print $row->estado; ?>">
        <option value="Estado"> Estado </option>            
        <option value="Acre" >Acre</option>
        <option value="Alagoas" >Alagoas</option>
        <option value="Amapa" >Amapá</option>
        <option value="Amazonas" >Amazonas</option>
        <option value="Bahia" >Bahia</option>
        <option value="Ceara" >Ceará</option>
        <option value="Espirito santo" >Espírito Santo</option>
        <option value="Ceara" >Ceará</option>
        <option value="Goias" >Goiás</option>
        <option value="Maranhao" >Maranhão</option>
        <option value="Mato grosso" >Mato Grosso</option>
        <option value="Mato grosso do sul" >Mato Grosso Sul</option>
        <option value="Minas gerais" >Minas Gerais</option>
        <option value="Pará" >Pará</option>
        <option value="Paraíba" >Paraíba</option>
        <option value="Paraná" >Paraná</option>
        <option value="Pernambuco" >Pernambuco</option>
        <option value="Píaui" >Piauí</option>
        <option value="Rio de janeiro" >Rio de Janeiro</option>
        <option value="Rio grande do norte" >Rio Grande do Norte</option>
        <option value="Rio grande do sul" >Rio Grande do Sul</option>
        <option value="Rondônia" >Rondônia</option>
        <option value="Roraima" >Roraima</option>
        <option value="Santa catarina" >Santa Catarina</option>
        <option value="São paulo" >São Paulo</option>
        <option value="Sergipe" >Sergipe</option>
        <option value="Tocantins" >Tocantins</option>
        <option value="Distrito federal">Distrito Federal</option>
        </select>
    </div>
    <div class="mb-3">
        <input placeholder="Cidade" type="text" name="cidade" id="cidade" class="form-control"  value="<?php print $row->cidade; ?>">
    </div>
    <div class="mb-3">
        <input placeholder="Endereço" type="text" name="endereco" id="endereco" class="form-control" value="<?php print $row->endereco; ?>" >
    </div>
        <input type="submit" name="submit" id="submit" value="Enviar" class="form-control" >
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
$usuario = ($_POST['usuario']);
$senha = md5($_POST['senha']);
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];
$nascimento = $_POST['nascimento'];

// echo  " UPDATE usuarios (usuario, senha , nome, email, telefone, genero, cidade, estado, endereco, nascimento)  SET 
// ('$usuario','$senha','$nome', '$email', '$telefone','$genero','$cidade','$estado','$endereco','$nascimento') WHERE id='".$_GET['id']."' ";

include('../config.php');
mysqli_query($conexao,"UPDATE usuarios SET nome = '".$nome."', usuario = '".$usuario."', email = '".$email."', senha = '".$senha."',
telefone = '".$telefone."', genero = '".$genero."', cidade = '".$cidade."', estado = '".$estado."',
endereco = '".$endereco."', nascimento = '".$nascimento."'  WHERE id='".$_GET['id']."' "); 

echo "<script> alert('Editado com sucesso!') </script>";
  echo "<script> location.href='cadastros.php';</script>";



}

    ?>

    