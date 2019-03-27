<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Boletins</title>
</head>
<body>
<div align="center">
<form name="form_pesquisa" method="post" action="lista3.php">
  <strong>Busca por Nome:</strong>
<input type="text" name="filtrar" />
  <input type="submit" name="enviar_pesquisa" id="enviar_pesquisa" value="Enviar" />
</form><br><br>
<table border="1">
  <tr>
    <td height="28" colspan="13"><font face="calibri" size="+2"><center>Boletins Escolares</center></font></td>
  </tr>
  <tr>
    <td width="130"><a href="lista3.php?ordem=a_ra">RA</a></td>
    <td width="370"><a href="lista3.php?ordem=a_nome">Nome</a></td>
    <td width="100"><a href="lista3.php?ordem=a_port">Português</a></td>
    <td width="20"><a href="lista3.php?ordem=a_mat">Matemática</a></td>
    <td width="65"><a href="lista3.php?ordem=a_hist">História</a></td>
    <td width="30"><a href="lista3.php?ordem=a_geo">Geografia</a></td>
    <td width="30"><a href="lista3.php?ordem=a_cie">Ciências</a></td>
    <td width="37"><a href="lista3.php?ordem=a_ing">Inglês</a></td>
    <td width="50"><a href="lista3.php?ordem=a_jud">Judô</a></td>
    <td width="80"><a href="lista3.php?ordem=a_cap">Capoeira</a></td>
    <td width="20"><a href="lista3.php?ordem=a_info">Informática</a></td>
    <td width="85"><a href="lista3.php?ordem=a_edf">E Física</a></td>
    <td width="85"><a href="lista3.php?ordem=a_eda">E. Artística</a></td>
  </tr>
  
  <?php
  
  echo "Ordenado por: ".@$_REQUEST['ordem'];
  if(@$_REQUEST['ordem'] =='')
  $ordem = "a_ra";
  else
  $ordem = $_REQUEST['ordem'];
  
 if(@$_REQUEST['filtrar']=="")
  $filtrar = "";
  else
  $filtrar = $_REQUEST['filtrar'];
  
  require 'conecta.php';
  @$sql_select = "select * from tb_boletim where a_nome like '".$filtrar."%' order by ".$ordem;
  $resultado = mysql_query($sql_select);
  
  if(!$resultado)
  echo tratar_erros(mysql_errno());
  else
  {
  $numero_registros = mysql_num_rows($resultado);
  while($registro = mysql_fetch_array($resultado))
  {
  ?>
  <tr>
    <td><?php echo $registro['a_ra'];?></td>
    <td><?php echo $registro['a_nome'];?></td>
    <td><?php echo $registro['a_port'];?></td>
    <td><?php echo $registro['a_mat'];?></td>
    <td><?php echo $registro['a_hist'];?></td>
    <td><?php echo $registro['a_geo'];?></td>
    <td><?php echo $registro['a_cie'];?></td>
    <td><?php echo $registro['a_ing'];?></td>
    <td><?php echo $registro['a_jud'];?></td>
    <td><?php echo $registro['a_cap'];?></td>
    <td><?php echo $registro['a_info'];?></td>
    <td><?php echo $registro['a_edf'];?></td>
    <td><?php echo $registro['a_eda'];?></td>
    </tr>

 <?php  } 
  } ?>
  <tr>
    <td colspan="13"><center>
      <b>Número de Registros: <?php echo $numero_registros;?></b>
    </center></td>
  </tr>
</table>
</div>
</body>
</html>