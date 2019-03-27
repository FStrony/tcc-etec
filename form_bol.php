<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Notas</title>
</head>

<script>

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);

  } 
}


 
 function ver_dados()
 {
	  if(formulario3.ra.value=="")
   {
   alert("Favor preencher o campo RA.");
   formulario3.ra.focus();
   return false;
   }
   
   if(formulario3.nome.value=="")
   {
   alert("Favor preencher o campo Nome.");
   formulario3.nome.focus();
   return false;
   }
   
 
   if(formulario3.port.value=="")
   {
   alert("Favor preencher a matéria Português.");
   formulario3.port.focus();
   return false;
   }
   
 
 
   if(formulario3.mat.value=="")
   {
   alert("Favor preencher a matéria Matemática.");
   formulario3.mat.focus();
   return false;
   }
   
   
  
   if(formulario3.hist.value=="")
   {
   alert("Favor preencher a matéria História.");
   formulario1.idade.focus();
   return false;
   }
   
   
   if(formulario3.geo.value=="")
   {
   alert("Favor preencher a matéria Geografia.");
   formulario3.geo.focus();
   return false;
   }
   
   
   
   if(formulario3.cie.value=="")
   {
   alert("Favor preencher a matéria Ciências.");
   formulario3.cie.focus();
   return false;
   }
   
     
   if(formulario3.ing.value=="")
   {
   alert("Favor preencher a matéria Inglês.");
   formulario3.ing.focus();
   return false;
   }
   
   
   
   if(formulario3.jud.value=="")
   {
   alert("Favor preencher a matéria Judô.");
   formulario3.jud.focus();
   return false;
   }
   
   
      
   if(formulario3.cap.value=="")
   {
   alert("Favor preencher a matéria Capoeira.");
   formulario3.cap.focus();
   return false;
   }
   
   
   
   if(formulario3.info.value=="")
   {
   alert("Favor preencher a matéria Informática.");
   formulario3.info.focus();
   return false;
   }
   
   if(formulario3.edf.value=="")
   {
   alert("Favor preencher a matéria Educação Física.");
   formulario3.edf.focus();
   return false;
   }
   
   
   
   if(formulario3.eda.value=="")
   {
   alert("Favor preencher a matéria Educação Artística.");
   formulario3.eda.focus();
   return false;
   }
   
   if(formulario3.faltas.value=="")
   {
   alert("Favor preencher o campo faltas.");
   formulario3.faltas.focus();
   return false;
   }
 }

</script>


<body>
<font face="Calibri" color="#CC0000">
 <h1>Boletim Escolar...</h1>
 </font>
 <font face="Calibri">
 <p><em>Preencha Todos os Campos.</em></p>
 <table>
 <form name="formulario3" method="post" onSubmit="return ver_dados(this)" action="insert3.php">
    <tr>
    <td>RA:</td>
    <td><input type="text" name="ra" size="15" maxlength="17" onkeypress="formatar('####.##.###.###-#', this)"/></td>
  </tr>
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome" size="40" maxlength="55" /></td>
  </tr>
  <tr>
    <td>Português:</td>
    <td><input type="text" name="port" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Matemática:</td>
    <td><input type="text" name="mat" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>História:</td>
    <td><input type="text" name="hist" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Geografia:</td>
    <td><input type="text" name="geo" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Ciências:</td>
    <td><input type="text" name="cie" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Inglês:</td>
    <td><input type="text" name="ing" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td><p>Judô:</p></td>
    <td><input type="text" name="jud" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Capoeira:</td>
    <td><input type="text" name="cap" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Informática:</td>
    <td><input type="text" name="info" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>E. Física:</td>
    <td><input type="text" name="edf" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>E. Artística:</td>
    <td><input type="text" name="eda" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>Faltas:</td>
    <td><input type="text" name="faltas" size="1" maxlength="2" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Enviar" /><input type="reset" value="Limpar" /></td>
  </tr>
  </form>
</table>
</font>
</body>
</html>