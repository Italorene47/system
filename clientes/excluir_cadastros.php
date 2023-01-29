<?php

include('../config/config.php');
if(1>0){
    mysqli_query($conexao,"DELETE FROM usuarios WHERE id='".$_GET['id']."' ");
    echo "<script> alert('Excluído com sucesso!') </script>";
    echo "<script> location.href='cadastros.php';</script>";
}

?>