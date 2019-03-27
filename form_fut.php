<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro - Futebol</title>

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
	  if(formulario1.codigo.value=="")
   {
   alert("Favor preencher o campo Código.");
   formulario1.codigo.focus();
   return false;
   }
   
   if(formulario1.nome.value=="")
   {
   alert("Favor preencher o campo Nome.");
   formulario1.nome.focus();
   return false;
   }
   
 
   if(formulario1.endereco.value=="")
   {
   alert("Favor preencher o campo Endereço.");
   formulario1.endereco.focus();
   return false;
   }
   
 
 
   if(formulario1.numero.value=="")
   {
   alert("Favor preencher o campo Número.");
   formulario1.numero.focus();
   return false;
   }
   
   
  
   if(formulario1.idade.value=="")
   {
   alert("Favor preencher o campo Idade.");
   formulario1.idade.focus();
   return false;
   }
   
   
   if(formulario1.peso.value=="")
   {
   alert("Favor preencher o campo Peso.");
   formulario1.peso.focus();
   return false;
   }
   
   
   
   if(formulario1.altura.value=="")
   {
   alert("Favor preencher o campo Altura.");
   formulario1.altura.focus();
   return false;
   }
   
     
   if(formulario1.rg.value=="")
   {
   alert("Favor preencher o campo RG.");
   formulario1.rg.focus();
   return false;
   }
   
   
   
   if(formulario1.dddtelr.value=="")
   {
   alert("Favor preencher o campo DDD (Telefone Residencial).");
   formulario1.dddtelr.focus();
   return false;
   }
   
   
      
   if(formulario1.telr.value=="")
   {
   alert("Favor preencher o campo Telefone Residencial.");
   formulario1.telr.focus();
   return false;
   }
 }

</script>
</head>

<body>
<h1><p><strong><font size="5" color="#CC0000" face="Calibri">Futebol...</font></strong></p></h1>
<font face="Calibri">
<p><em>(*)Campos Obrigatórios.</em></p>
<table>
<form name="formulario1" method="post" onSubmit="return v_dados(this)" action="http://localhost/bd_site/insert.php" >
  <tr>
    <td>*Código:</td>
    <td><input name="codigo" type="text" size="2" maxlength="3" /></td>
  </tr>
  <tr>
    <td>*Nome Completo:</td>
    <td><input name="nome" type="text" size="45" maxlength="55" /></td>
  </tr>
  <tr>
    <td>*Endereço:</td>
    <td><input name="endereco" type="text" size="50" maxlength="60"/>
      *N°
      <input name="numero" type="text" size="1" maxlength="4" /></td>
  </tr>
  <tr>
    <td>Complemento:</td>
    <td><input name="complemento" type="text" size="9" maxlength="12" /></td>
  </tr>
  <tr>
    <td>*Idade:</td>
    <td><input name="idade" type="text" size="1" maxlength="2" /></td>
  </tr>
  <tr>
    <td height="21">*Peso:</td>
    <td><input name="peso" type="text" size="1" maxlength="3" /></td>
  </tr>
  <tr>
    <td>*Altura:</td>
    <td><input name="altura" type="text" size="1" maxlength="4" onkeypress="formatar('#,##', this)" /></td>
  </tr>
  <tr>
    <td>*RG:</td>
    <td><input name="rg" type="text" size="10" maxlength="12" onkeypress="formatar('##.###.###-#', this)" /></td>
  </tr>
  <tr>
    <td>CPF:</td>
    <td><input name="cpf" type="text" size="11" maxlength="14"onkeypress="formatar('###.###.###-##', this)"  /></td>
  </tr>
  <tr>
    <td>*Telefone residencial:</td>
    <td><input name="dddtelr" type="text" size="1" maxlength="2"/>
      <input name="telr" type="text" size="7" maxlength="9" onkeypress="formatar('####-####', this)" /></td>
  </tr>
  <tr>
    <td>Telefone comercial:</td>
    <td><input name="dddtelc" type="text" size="1" maxlength="2" />
      <input name="telc" type="text" size="6" maxlength="9" onkeypress="formatar('####-####', this)"/></td>
  </tr>
  <tr>
    <td>Celular
      
      :</td>
    <td><input name="dddtelcel" type="text" size="1" maxlength="2" />
      <input name="telcel" type="text" size="6" maxlength="9" onkeypress="formatar('####-####', this)" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Enviar" />
      <input type="reset" value="Limpar"/>
    </td>
  </tr>
  </form>
</table>
<p><em>Obs: Na data da matrícula, favor comparecer com o atestado médico refente a possibilidade de prática esportiva.</em></p>
</font>
</body>
</html>