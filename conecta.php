<?php

//para importar usamos: include, require,include_once, require_onde

require 'configuracao.php';
require 'funcoes.php';

$conexao = @mysql_connect($servidor,$usuario,$senha);

if (!$conexao)
echo "Conexao nao foi realizada, erro:  ".tratar_erros(mysql_errno());
else
{
$conecta_banco = mysql_select_db($banco,$conexao);
}
         



?>