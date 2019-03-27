<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro - Artesanato</title>

<script>

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);

  } 
}


 
 function verifica_dados()
 {
	  if(formulario2.id.value=="")
   {
   alert("Favor preencher o campo Código.");
   formulario2.id.focus();
   return false;
   }
   
   if(formulario2.nome.value=="")
   {
   alert("Favor preencher o campo Nome.");
   formulario2.nome.focus();
   return false;
   }
   
 
   if(formulario2.end.value=="")
   {
   alert("Favor preencher o campo Endereço.");
   formulario2.end.focus();
   return false;
   }
   
 
 
   if(formulario2.num.value=="")
   {
   alert("Favor preencher o campo Número.");
   formulario2.num.focus();
   return false;
   }
   
  
   if(formulario2.idade.value=="")
   {
   alert("Favor preencher o campo Idade.");
   formulario2.idade.focus();
   return false;
   }
 
 
   if(formulario2.rg.value=="")
   {
   alert("Favor preencher o campo RG.");
   formulario2.rg.focus();
   return false;
   }
   
   
   
   if(formulario2.dddtelr.value=="")
   {
   alert("Favor preencher o campo DDD (Telefone Residencial).");
   formulario2.dddtelr.focus();
   return false;
   }
   
   
      
   if(formulario2.telr.value=="")
   {
   alert("Favor preencher o campo Telefone Residencial.");
   formulario2.telr.focus();
   return false;
   }
 }

</script>
</head>
<body>

<h1><p><strong><font size="5" color="#CC0000" face="Calibri">Artesanato</font></strong></p></h1>
<font face="Calibri">
<p><em>(*)Campos Obrigatórios.</em></p>
<table>
<form name="formulario2" onSubmit="return verifica_dados(this)" method="POST" action="insert2.php">
  <tr>
    <td>*Código:</td>
    <td><input name="id" type="text" size="2" maxlength="3" /></td>
  </tr>
  <tr>
    <td>*Nome Completo:</td>
    <td><input name="nome" type="text" size="45" maxlength="55" /></td>
    </tr>
  <tr>
    <td>*Endereço:</td>
    <td><input name="end" type="text" size="50" maxlength="60"/>
      *N°
      <input name="num" type="text" size="1" maxlength="4" /></td>
    </tr>
  <tr>
    <td>Complemento:</td>
    <td><input name="comp" type="text" size="9" maxlength="12" /></td>
    </tr>
  <tr>
    <td>*Idade:</td>
    <td><input name="idade" type="text" size="1" maxlength="2" /></td>
    </tr>
  <tr>
    <td>RG:</td>
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
    <td>Celular:</td>
    <td><input name="dddtelcel" type="text" size="1" maxlength="2" />
      <input name="telcel" type="text" size="6" maxlength="9" onkeypress="formatar('####-####', this)" /></td>
  </tr>
  <tr>
    <td colspan="2">Possui experiência em artesanato?</td>
    </tr>
  <tr>
    <td colspan="2">
    <p><input type="radio" name="sn" value="SIM" />Sim
      <input type="radio" name="sn"  value="NAO"/>Não </p>
      </td>
    
    </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Enviar" />
      <input type="reset" value="Limpar"/></td>
    </tr>
  </form>
</table>
</font>
</body>
</html>