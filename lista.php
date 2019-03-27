<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Cadastrados - Futebol</title>
</head>

<body>
<div align="center">
<form name="form_pesquisa" method="post" action="lista.php">
  <strong>Busca por Nome:</strong>
<input type="text" name="filtrar" />
  <input type="submit" name="enviar_pesquisa" id="enviar_pesquisa" value="Enviar" />
</form><br><br>
<table border="1">
  <tr>
    <td height="28" colspan="16"><center><font face="calibri" size="+2">Lista de Cadastro - Futebol</font></center></td>
  </tr>
  <tr>
    <td width="27"><a href="lista.php?ordem=p_id">ID</a></td>
    <td width="200"><a href="lista.php?ordem=p_nome">Nome</a></td>
    <td width="200">Endereço</td>
    <td width="20">N°</td>
    <td width="65">Complemento</td>
    <td width="30"><a href="lista.php?ordem=p_idade">Idade</a></td>
    <td width="30"><a href="lista.php?ordem=p_peso">Peso</a></td>
    <td width="37"><a href="lista.php?ordem=p_altura">Altura</a></td>
    <td width="90">RG</td>
    <td width="110">CPF</td>
    <td width="20">DDD Residencial</td>
    <td width="85">Tel Residencial</td>
    <td width="20">DDD Comercial</td>
    <td width="85">Tel Comercial</td>
    <td width="20">DDD Celular</td>
    <td width="85">Celular</td>
  </tr>
  
  <?php
  
  echo "Ordenado por: ".@$_REQUEST['ordem'];
  if(@$_REQUEST['ordem'] =='')
  $ordem = "p_nome";
  else
  $ordem = $_REQUEST['ordem'];
  
 if(@$_REQUEST['filtrar']=="")
  $filtrar = "";
  else
  $filtrar = $_REQUEST['filtrar'];
  
  require 'conecta.php';
  @$sql_select = "select * from tb_fut where p_nome like '".$filtrar."%' order by ".$ordem;
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
    <td><?php echo $registro['p_id'];?></td>
    <td><?php echo $registro['p_nome'];?></td>
    <td><?php echo $registro['p_end'];?></td>
    <td><?php echo $registro['p_num'];?></td>
    <td><?php echo $registro['p_comp'];?></td>
    <td><?php echo $registro['p_idade'];?></td>
    <td><?php echo $registro['p_peso'];?></td>
    <td><?php echo $registro['p_altura'];?></td>
    <td><?php echo $registro['p_rg'];?></td>
    <td><?php echo $registro['p_cpf'];?></td>
    <td><?php echo $registro['p_dddtelr'];?></td>
    <td><?php echo $registro['p_telr'];?></td>
    <td><?php echo $registro['p_dddtelc'];?></td>
    <td><?php echo $registro['p_telc'];?></td>
    <td><?php echo $registro['p_dddtelcel'];?></td>
    <td><?php echo $registro['p_telcel'];?></td>
    </tr>

 <?php  } 
  } ?>
  <tr>
    <td colspan="16"><center>
      <b>Número de Registros: <?php echo $numero_registros;?></b>
    </center></td>
  </tr>
</table>
</div>
</body>
</html>