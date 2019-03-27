<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boletim Escolar</title>
</head>
<body>

<p><strong><font size="5" color="#CC0000" face="Calibri">Boletim Escolar...</font></strong></p>

<font face="Calibri">
<center>
<table border="1" cellspacing="0" width="1500">
<tr>
    <td width="90"><div align="center">RA</div></td>
    <td width="200"><div align="center">Nome</div></td>
    <td width="79"><div align="center">Português</div></td>
    <td width="85"><div align="center">Matemática</div></td>
    <td width="74"><div align="center">História</div></td>
    <td width="79"><div align="center">Geografia</div></td>
    <td width="75"><div align="center">Ciências</div></td>
    <td width="42"><div align="center">Inglês</div></td>
    <td width="38"><div align="center">Judô</div></td>
    <td width="71"><div align="center">Capoeira</div></td>
    <td width="77"><div align="center">Informática</div></td>
    <td width="62"><div align="center">E. Física</div></td>
    <td width="83"><div align="center">E. Artística</div></td>
    <td width="83"><div align="center">Total de Faltas</div></td>
  </tr>
<?php

  
  if(@$_REQUEST['ordem'] =='')
  $ordem = "a_ra";
  else
  $ordem = $_REQUEST['ordem'];
  
 if(@$_REQUEST['busca']=="")
  $busca = "";
  else
  $busca = $_REQUEST['busca'];
  
  require 'conecta.php';
  
  @$sql_select = "select * from tb_boletim where a_ra like '".$busca."%' order by ".$ordem;
  $resultado = mysql_query($sql_select);
  
  if(!$resultado)
  echo tratar_erros(mysql_errno());
  else
  {
  while($registro = mysql_fetch_array($resultado))
  {
  ?>
  <tr>
    <td><?php echo $registro['a_ra'];?></td>
    <td><center><?php echo $registro['a_nome'];?></center></td>
    <td><center><?php echo $registro['a_port'];?></center></td>
    <td><center><?php echo $registro['a_mat'];?></center></td>
    <td><center><?php echo $registro['a_hist'];?></center></td>
    <td><center><?php echo $registro['a_geo'];?></center></td>
    <td><center><?php echo $registro['a_cie'];?></center></td>
    <td><center><?php echo $registro['a_ing'];?></center></td>
    <td><center><?php echo $registro['a_jud'];?></center></td>
    <td><center><?php echo $registro['a_cap'];?></center></td>
    <td><center><?php echo $registro['a_info'];?></center></td>
    <td><center><?php echo $registro['a_edf'];?></center></td>
    <td><center><?php echo $registro['a_eda'];?></center></td> 
    <td><center><?php echo $registro['a_faltas'];?></center></td>   
</tr>
 <?php  } 
  } ?>
 
 
</table>
</center>
</font>
</div>
</body>
</html>