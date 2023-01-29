<?php
include_once('../newhome.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <section class="content">
      <div class="container-fluid">
        <table class="table">
        <script src="js/bootstrap.bundle.min.js"></script>
    <br><br><button class='btn btn-primary' onclick="location.href='registrar.php?acao=entrar'">Cadastrar</button><br><br>  
    <legend>Usuários</legend>
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php
include('../config/config.php');
$sql = "SELECT * FROM cadastros.usuarios";
$res = mysqli_query($conexao, $sql);

if(mysqli_num_rows($res) > 0) {
    echo"<table class='table table-hover table-striped table-bordered'>";
    echo "<th> ID </th>";
    echo "<th> Nome </th>";
    echo "<th> Usuário </th>";
    echo "<th> E-mail </th>";
    echo "<th> Telefone </th>";
    echo "<th> Genero </th>";
    echo "<th> Estado </th>";
    echo "<th> Cidade </th>";
    echo "<th> Ações </th>";

    
    while($row = $res-> fetch_object()){
        echo "<tr>";
        echo "<td>" . $row->id . "</td>";
        echo "<td>" . $row->nome . "</td>";
        echo "<td>" . $row->usuario . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>" . $row->telefone . "</td>";
        echo "<td>" . $row->genero . "</td>";
        echo "<td>" . $row->estado . "</td>";
        echo "<td>" . $row->cidade . "</td>";
        echo "<td> <button onclick=\"location.href='editar_cadastros.php?acao=editar&id=".$row->id."';\" 
        class='btn btn-success'> Editar </button> <button onclick=\"location.href='excluir_cadastros.php?acao=excluir&id=".$row->id."';\" class='btn btn-danger'> Excluir </button>" . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
}

?>

        </table>
        </div>
        </section>

    </div>

       <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
    
</body>
</html>