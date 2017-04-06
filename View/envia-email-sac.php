 <?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['name'];
$emailremetente    = trim($_POST['email']);
$emaildestinatario = 'sac@qualitex.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web

$telefone1    	   = $_POST['tel1'];


$consideracao     = $_POST['consideracao'];

 

$date = getdate();

$assunto = "Comunicado via SAC - Site qualitex. Data: " . $date['mday'].'/'.$date['mon'].'/'.$date['year'] . " -- " . $date['seconds'] ;

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>FORMULARIO PREENCHIDO NO SITE WWW.QUALITEX.COM.BR</P>
<p><b>Nome: </b> '.$nomeremetente.'</p>
<p><b>E-Mail: </b> '.$emailremetente.'</p>
<p><b>Telefone Fixo: </b> '.$telefone1.'</p>
<p><b>Assunto: </b> '.$assunto.'</p>
<p><b>Demais considerações: </b>'.$consideracao.'</p>
<hr>';

//echo $mensagemHTML;

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: qualitex@qualitex.com.br\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path

$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 


if($envio){
	//echo "txou 3"; // Página que será redirecionada
	echo("<script>alert('Mensagem enviada com sucesso!')</script>");
	echo("<script>location.href='sac.html'</script>");
}
?>
