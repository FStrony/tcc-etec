<?php
function tratar_erros($erro_numero)
{
$mensagem_erro = "";
switch($erro_numero)
{
case 1045:   $mensagem_erro = "O Usuario ou Senha s�o Inv�lidos.";break;
case 1146:   $mensagem_erro = "Esta Tabela n�o existe.";break;
case 1062:   $mensagem_erro = ":  O C�digo inserido ja foi cadastrado.";break;

default: $mensagem_erro = "Erro nao identificado";break;
}
return $tratar_erros;
}
?>