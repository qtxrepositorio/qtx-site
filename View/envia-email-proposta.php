<?php

require 'PHPMailer/PHPMailerAutoload.php';

$arquivo = $_FILES["arquivo"];
$idTipo = $_POST['select'];
$id = $_POST['id'];
$nomeremetente     = $_POST['name'];
$nome_responsavel = $_POST['nome_responsavel'];
$emailremetente    = trim($_POST['email']);
$telefone2     	   = $_POST['tel2'];
$telefone1    	   = $_POST['tel1'];
$Logradouro    	   = $_POST['Logradouro'];
$Numero     	   = $_POST['Numero'];
$Bairro     	   = $_POST['Bairro'];
$Cidade     	   = $_POST['Cidade'];
$Estado    	       = $_POST['Estado'];
$cep      	       = $_POST['cep'];
$Pontoreferencia   = $_POST['Pontoreferencia'];
$fazer  = $_POST['fazer'];
$local  = $_POST['local'];
$quando  = $_POST['quando'];
$quantidade  = $_POST['quantidade'];
$objetivo  = $_POST['objetivo'];
$objetivolegal  = $_POST['objetivolegal'];

$mensagem = '<table border="1">'
				.'<tr>'
					.'<th>O que fazer?</th>'
					.'<td>'.$fazer.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Qual o local?</th>'
					.'<td>'.$local.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Quando?</th>'
					.'<td>'.$quando.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Quantidade?</th>'
					.'<td>'.$quantidade.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Algum objetivo legal?</th>'
					.'<td>'.$objetivo.'</td>'
				.'</tr>'
				
		  .'</table>';

$date = getdate();

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>FORMULARIO PREENCHIDO NO SITE WWW.QUALITEX.COM.BR</P>
<p><b>Nome: </b> '.$nomeremetente.'</p>
<p><b>Nome Responsavel: </b> '.$nome_responsavel.'</p>
<p><b>Pessoa '.$idTipo.':</b> '.$id.'</p>
<p><b>E-Mail: </b> '.$emailremetente.'</p>
<p><b>Telefone Fixo: </b> '.$telefone1.'</p>
<p><b>Telefone Celular: </b> '.$telefone2.'</p>
<p><b>Logradouro: </b> '.$Logradouro.'</p>
<p><b>Número: </b> '.$Numero.'</p>
<p><b>Bairro: </b> '.$Bairro.'</p>
<p><b>Cidade: </b> '.$Cidade.'</p>
<p><b>Estado: </b> '.$Estado.'</p>
<p><b>CEP: </b> '.$cep.'</p>
<p><b>Ponto de Referência: </b> '.$Pontoreferencia.'</p>
<p><b>Assunto: </b> '.$assunto.'</p>
<p><b>Sobre o serviço: </b>'.$mensagem.'</p>
<p><b>Demais considerações: </b>'.$consideracao.'</p>
<hr>';

echo $_FILES['arquivo']['error'];

$Mailer = new PHPMailer();

$Mailer->Charset = "UTF-8";

$Mailer->IsSMTP();

$Mailer->IsHTML(true);

//$Mailer->Charset = "UTF-8";
//$Mailer->Encoding = "16bit";

$Mailer->SMTPAuth = true;
$Mailer->SMTPSecure = 'ssl';

$Mailer->Host = 'smtp.gmail.com';
$Mailer->Port = 465;

$Mailer->Username = 'workflow@qualitex.com.br';
$Mailer->Password = 'Faraca@2015_QTX#';

$Mailer->From = 'setorcomercial@qualitex.com.br';

$Mailer->FromName = 'workflow';

$Mailer->Subject = 'Wokflow - pedido on-line '. rand(0, 10000) . ' Cliente: ' . $nomeremetente;

$Mailer->Body = utf8_decode($mensagemHTML);

$Mailer->AltBody = 'ALT Conteudo';

$Mailer->AddAddress('setorcomercial@qualitex.com.br');

$Mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']);

if ($Mailer->Send()) {
	//echo("<script Language=JavaScript>alert('Mensagem enviada com sucesso. Em breve nossa equipe entrará em contato com você!')</script>");
	echo("<script>location.href='resposta-proposta.html'</script>");
}else{
	echo 'Erro! ' . $Mailer->ErrorInfo;
}

?>
