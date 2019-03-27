<?php

require 'conecta.php';

$sql_insere = "insert into tb_boletim (a_ra, a_nome, a_port, a_mat, a_hist, a_geo, a_cie, a_ing, a_jud, a_cap, a_info, a_edf, a_eda, a_faltas) 
values ('".$_POST['ra']."','".$_POST['nome']."','".$_POST['port']."','".$_POST['mat']."','".$_POST['hist']."','".$_POST['geo']."',
'".$_POST['cie']."','".$_POST['ing']."','".$_POST['jud']."','".$_POST['cap']."','".$_POST['info']."','".$_POST['edf']."',
'".$_POST['eda']."','".$_POST['faltas']."')";

$resultado = mysql_query($sql_insere);

if(!$resultado)
{
if(mysql_errno()==1062)
echo "<font face='calibri' size='+3'> Ocorreu um Problema! Erro # ",mysql_errno(),"--> O Código inserido ja foi cadastrado.</font>";
}
else
echo "<font face='calibri' size='+3'> Dado(s) Gravado(s) com Sucesso!! </font>";
?>