<?php

$conexao = mysql_connect($servidor,$usuario,$senha);

if ($conexao)
echo "Conexao realizada com sucesso";
else
echo "Conexao nao foi realizada";

?>