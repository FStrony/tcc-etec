<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Cadastrados - Artesanato</title>
</head>
<body>
<body>
<div align="center">
<form name="form_pesquisa" method="post" action="lista2.php">
  <strong>Busca por Nome:</strong>
<input type="text" name="filtrar" />
  <input type="submit" name="enviar_pesquisa" id="enviar_pesquisa" value="Enviar" />
</form><br><br>
<table border="1">
  <tr>
    <td height="28" colspan="16"><font face="calibri" size="+2" ><center>Lista de Cadastro - Artesanato</center></font></td>
  </tr>
  <tr>
    <td width="27"><a href="lista2.php?ordem=p_cod">ID</a></td>
    <td width="220"><a href="lista2.php?ordem=p_nome">Nome</a></td>
    <td width="220">Endereço</td>
    <td width="20">N°</td>
    <td width="50">Complemento</td>
    <td width="35"><a href="lista2.php?ordem=p_idade">Idade</a></td>
    <td width="90">RG</td>
    <td width="120">CPF</td>
    <td width="20">DDD Residencial</td>
    <td width="80">Tel Residencial</td>
    <td width="20">DDD Comercial</td>
    <td width="80">Tel Comercial</td>
    <td width="20">DDD Celular</td>
    <td width="80">Celular</td>
    <td width="30">Habilidoso(a)</td>
    
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
  @$sql_select = "select * from tb_art where p_nome like '".$filtrar."%' order by ".$ordem;
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
    <td><?php echo $registro['p_cod'];?></td>
    <td><?php echo $registro['p_nome'];?></td>
    <td><?php echo $registro['p_endereco'];?></td>
    <td><?php echo $registro['p_numero'];?></td>
    <td><?php echo $registro['p_complemento'];?></td>
    <td><?php echo $registro['p_idade'];?></td>
    <td><?php echo $registro['p_rg'];?></td>
    <td><?php echo $registro['p_cpf'];?></td>
    <td><?php echo $registro['p_dddtelr'];?></td>
    <td><?php echo $registro['p_telr'];?></td>
    <td><?php echo $registro['p_dddtelc'];?></td>
    <td><?php echo $registro['p_telc'];?></td>
    <td><?php echo $registro['p_dddtelcel'];?></td>
    <td><?php echo $registro['p_telcel'];?></td>
    <td><?php echo $registro['p_habi'];?></td>
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