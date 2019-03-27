<?php

require 'conecta.php';

$sql_insere = "insert into tb_fut (p_cod, p_nome, p_endereco, p_numero, p_complemento, p_idade, p_peso, p_altura, p_rg, p_cpf, p_dddtelr, p_telr, p_dddtelc, p_telc, p_dddtelcel, p_telcel) 
values (".$_POST['codigo'].",'".$_POST['nome']."','".$_POST['endereco']."','".$_POST['numero']."','".$_POST['complemento']."','".$_POST['idade']."',
'".$_POST['peso']."','".$_POST['altura']."','".$_POST['rg']."','".$_POST['cpf']."','".$_POST['dddtelr']."','".$_POST['telr']."',
'".$_POST['dddtelc']."','".$_POST['telc']."','".$_POST['dddtelcel']."','".$_POST['telcel']."')";

$resultado = mysql_query($sql_insere);

if(!$resultado)
{
if(mysql_errno()==1062)
echo "<font face='calibri' size='+3'> Ocorreu um Problema! Erro # ",mysql_errno(),"--> O Código inserido ja foi cadastrado.</font>";
}
else
echo "<font face='calibri' size='+3'> Dado(s) Gravado(s) com Sucesso!! </font>";
?>

