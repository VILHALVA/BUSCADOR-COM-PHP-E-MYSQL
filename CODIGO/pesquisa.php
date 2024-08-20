<?php
@$pesquisa=$_GET['pesquisar'];
include_once("bd/consulta.php");
?>
<!DOCTYPE html>
<html>
<head lang="pt">
  <title>Pesquisa</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<section class="tudo">
  <div class="contagem">
    <p>Total Masculinos: <?php echo $Resul_ContMasc; ?></p>
    <p>Total Femininos: <?php echo $Resul_ContFm ?></p>
    <p>O total de Desenvolvedores/as cadastrados é <?php echo $Resul_ContFm + $Resul_ContMasc ?></p>
  </div>
  <br>
  <hr>
  <br>
  <?php include_once("bd/consulta.php"); ?>
  <span>Pesquisou por :<?php echo $pesquisa; ?></span>
  <?php include_once("resultado_pesquisa.php"); ?>
</section>
</body>
</html>