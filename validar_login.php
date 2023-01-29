<?php
include_once('config/config.php');
$email = ($_POST['email']);
$senha = md5(trim($_POST['senha']));

$sql_code = "SELECT * FROM acessos WHERE email= '$email' AND senha='$senha'";
$sql_query = mysqli_query($conexao, $sql_code);
$quantidade = $sql_query->num_rows;

if($quantidade >= 1){

    $usuario= $sql_query->fetch_assoc();

    if(!isset($_SESSION)){
    session_start();
    }
    $_SESSION['idacessos'] = $usuario['idacessos'];
    $_SESSION['nome'] = $usuario['nome'];
    header('Location:home.php');
}
else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location:index.php?login=erro');
}

?>