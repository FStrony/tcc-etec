<?php

require 'conecta.php';

$sql_insere = "insert into tb_art(p_cod, p_nome, p_endereco, p_numero, p_complemento, p_idade, p_rg, p_cpf, p_dddtelr, p_telr, p_dddtelc, p_telc, p_dddtelcel, p_telcel, p_habi) values 
(".$_POST['id'].",'".$_POST['nome']."','".$_POST['end']."','".$_POST['num']."','".$_POST['comp']."','".$_POST['idade']."',
'".$_POST['rg']."','".$_POST['cpf']."','".$_POST['dddtelr']."','".$_POST['telr']."','".$_POST['dddtelc']."','".$_POST['telc']."',
'".$_POST['dddtelcel']."','".$_POST['telcel']."','".$_POST['sn']."')";

$resultado = mysql_query($sql_insere);

if(!$resultado)
{
if(mysql_errno()==1062)
echo "<font face='calibri' size='+3'> Ocorreu um Problema! Erro # ",mysql_errno(),"--> O Código inserido ja foi cadastrado.</font>";
}
else
echo "<font face='calibri' size='+3'> Dado(s) Gravado(s) com Sucesso!! </font>";
?>
