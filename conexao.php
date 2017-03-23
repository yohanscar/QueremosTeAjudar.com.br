<?php

date_default_timezone_set('America/Sao_Paulo');

//dados do banco de dados
$host= 'localhost';
$bd= 'gametas';
$userbd = 'root';
$senhabd= '';

// Conecta-se ao banco de dados MySQL
$conexao = new mysqli($host, $userbd, $senhabd, $bd);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_error()) trigger_error(mysqli_connect_error());

?>
