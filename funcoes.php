<?php
function tratar_erros($erro_numero)
{
$mensagem_erro = "";
switch($erro_numero)
{
case 1045:   $mensagem_erro = "O Usuario ou Senha são Inválidos.";break;
case 1146:   $mensagem_erro = "Esta Tabela não existe.";break;
case 1062:   $mensagem_erro = ":  O Código inserido ja foi cadastrado.";break;

default: $mensagem_erro = "Erro nao identificado";break;
}
return $tratar_erros;
}
?>