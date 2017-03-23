<?php
//DADOS DA CONEXÃO E TIMEZONE:
date_default_timezone_set('America/Sao_Paulo');
$host= '';
$bd= '';
$senhabd= '';
$userbd = '';
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$chave_acesso	= $_POST ["chave_acesso"];	//atribuição do campo "chave_acesso" vindo do formulário para variavel
$imagem_post	= $_POST ["pic"];	//atribuição do campo "pic" vindo 
$texto_titulo	= $_POST ["texto_titulo"];	//atribuição do campo "texto_titulo" vindo 
$texto_h2	= $_POST ["texto_h2"];	//atribuição do campo "texto_h2" vindo 
$texto_principal	= $_POST ["texto_principal"];	//atribuição do campo "texto_principal" vindo 
$descricao_imagem = $_POST ["descricao_imagem"];	//atribuição do campo "descricao_imagem" vindo 
$conexao = mysql_connect($host,$userbd, $senhabd);


if($chave_acesso == 'fD12bQdoyH')




if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
$query = "INSERT INTO tabela_leads_capturados (texto_titulo, texto_h2, texto_post)
VALUES ('$texto_titulo', '$texto_h2', '$texto_post')";

mysql_query($query,$conexao) OR die("Error:".mysql_error());

// recuperar id do post para incluir a imagem
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
$query = "SELECT MAX(id_post) AS id_do_post FROM tabela_posts )";

$result = mysql_fetch_array($query,$conexao) OR die("Error:".mysql_error());
$row = mysql_fetch_array($result); 
$idMaxPost = $row['id_do_post'];

// inserir imagem da postagem.
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
$query = "INSERT INTO tabela_leads_capturados (id_post, descricao_imagem, nome_imagem, tamanho_imagem, tipo_imagem, imagem )
VALUES ('$idMaxPost', '$descricao_imagem', '$imagemDoPost','$tamanho_imagem','postagem','$imagem' )";

mysql_query($query,$conexao) OR die("Error:".mysql_error());

header("Location: http://www.vamosteajudar.com.br/aprenda-a-vender.html");
//redireciona para a página aprenda a vender
?>