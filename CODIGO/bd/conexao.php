<?php
$host = "localhost";
$user = "seu_usuario";
$pass = "sua_senha";
$database = "pesquisa";

global $conexao;
$conexao = @mysqli_connect($host, $user, $pass, $database);
@mysqli_set_charset($conexao, "utf8");
if (!$conexao) {
	print"Desculpe, Falha na Conexão com Base de Dados";
}
?>
