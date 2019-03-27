<html>
<head>

<title>Documento sem título</title>
</head>
<body>
<?php

$d = 'fernando@hotmail.com';
$a = $assunto;
$m = $mensagem;

$header = "MIME-Version: 1.0\n"; 
$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
$header .= "From: $email\n";

mail($d, $a, $m, $header);

$email1 = mail($d, $a, $m, $header);
if($email1 == 1){
echo "E-mail enviado com sucesso";
}else{
echo "Erro ao enviar e-mail";
}
?>

</body>
</html>
