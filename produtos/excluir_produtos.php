<?php

include('config.php');
if(1>0){
    mysqli_query($conexao,"DELETE FROM produtos WHERE id_produto='".$_GET['id_produto']."' ");
    echo "<script> alert('Excluído com sucesso!') </script>";
    echo "<script> location.href='produtos.php';</script>";
}

?>