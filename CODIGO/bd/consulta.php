<?php 

include_once("conexao.php");

$consulta_pesquisa= "SELECT * FROM dev WHERE (CONVERT(nome USING utf8)) LIKE '%$pesquisa%' ";
$resultado_pesquisa=mysqli_query($conexao,$consulta_pesquisa);
$resultados_pesquisa=mysqli_fetch_array($resultado_pesquisa);

/*Contagem de Masculinos*/
$ContagemMasc="SELECT * FROM dev where genero = 'Masculino' ";
$Consulta_ContagMasc=mysqli_query($conexao,$ContagemMasc);
$Resul_ContMasc=mysqli_num_rows($Consulta_ContagMasc);

/*Contagem de Feminino*/
$ContagemFm="SELECT * FROM dev where genero = 'Feminino' ";
$Consulta_ContagFm=mysqli_query($conexao,$ContagemFm);
$Resul_ContFm=mysqli_num_rows($Consulta_ContagFm);

?>