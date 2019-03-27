<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boletim Escolar</title>
<script>

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);

  } 
}

function v_dados()
 {
  if(form_pesquisa.busca.value==""){
   alert("Preencha o campo RA.");
   form_pesquisa.busca.focus();
   return false;
   }
}

</script>
</head>
<body><br />
<center><strong><font size="5" color="#CC0000" face="Calibri">
Digite o RA do aluno...
</font></strong></center>
<font face="Calibri"><br>
<div align="center">
<form name="form_pesquisa" method="post" action="http://localhost/bd_site/busca_boletim.php" onSubmit="return v_dados(this)">
  <strong>RA: </strong>
<input type="text" name="busca" onkeypress="formatar('####.##.###.###-#', this)"/>
  <input type="submit" name="enviar_pesquisa" value="Buscar" />
</form>
</div>
</font>
</body>
</html>



