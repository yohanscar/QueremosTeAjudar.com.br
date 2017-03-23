<?php
include_once('conexao.php')

$query = "SELECT * FROM tabela_leads_capturados";

$resultado = mysql_query($query,$conexao) OR die("Error:".mysql_error());

$num_rows = mysql_num_rows($resultado);

echo "$num_rows leads cadastrados";
echo "<br><strong>#go gametas!</strong>";


mysqli_close($conexao);
