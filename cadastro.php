<?php
//inclui a conexão com o banco de DADOS
include_once("conexao.php");

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel
$email	= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
$ip = $_SERVER["REMOTE_ADDR"]; //pegar o ip
$tipo_lead = 'B2C';
$provedores = array('@gmail.com', '@outlook.com','@yahoo.com.br', '@icloud.com.br', '@hotmail.com', '@live.com', '@msn.com', '@uol.com.br', '@terra.com.br', '@ig.com.br', '@bol.com.br', '@globo.com');
if (in_array(stristr($email, '@'), $provedores)) {
	$tipo_lead = 	'B2C';
} else {
	$tipo_lead = 	'B2B';
}
$hora_inclusao = date('Y-m-d H:i:s'); //pegar a data e hora
//Gravando no banco de dados

if (empty($nome) || empty($email)) {
  echo "<script> alert('Por favor preencha corretamente os campos')";
}

$query = "INSERT INTO tabela_leads_capturados (nome, email, ipv4_lead, tipo_lead, hora_inclusao)
VALUES ('$nome', '$email', '$ip', '$tipo_lead', '$hora_inclusao')";

if (mysqli_query($conexao, $query)) {
    header("Location: http://localhost/vamosteajudar/aprenda-a-vender.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conexao);
?>
