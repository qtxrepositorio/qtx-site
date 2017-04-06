<?php

require 'PHPMailer/PHPMailerAutoload.php';

$Mailer = new PHPMailer();

$arquivo = $_FILES["arquivo"];

$area 			= $_POST['select1'];
$vaga 			= $_POST['select2'];

$nomeremetente     = $_POST['name'];
$telefone    	   = $_POST['tel'];
$cidade    	   = $_POST['cidade'];
$estado    	   = $_POST['estado'];
$email    	   = $_POST['email'];
$pcd    	   = $_POST['pcd'];



$mensagem = '<table border="1">'
				.'<tr>'
					.'<th>Nome:</th>'
					.'<td>'.$nomeremetente.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Cidade:</th>'
					.'<td>'.$cidade.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Estado:</th>'
					.'<td>'.$estado.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Telefone:</th>'
					.'<td>'.$telefone.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Email:</th>'
					.'<td>'.$email.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Area de atuação:</th>'
					.'<td>'.$area.'</td>'
				.'</tr>'
				.'<tr>'
					.'<th>Vaga:</th>'
					.'<td>'.$vaga.'</td>'
				.'</tr>'
				
		  .'</table>';

$date = getdate();

echo $_FILES['arquivo']['error'];

$Mailer->IsSMTP();

$Mailer->isHTML(true);

$Mailer->Charset = "UTF-8";

$Mailer->SMTPAuth = true;
$Mailer->SMTPSecure = 'ssl';

$Mailer->Host = 'smtp.gmail.com';
$Mailer->Port = 465;

$Mailer->Username = 'workflow@qualitex.com.br';
$Mailer->Password = 'Faraca@2015_QTX#';

$Mailer->From = 'setorrh@qualitex.com.br';

$Mailer->FromName = 'workflow';

$date = getdate();

$assunto = "Trabalhe conosco - Candidato: " . $nomeremetente . " Vaga: " . $vaga .' Estado: '. $estado . " PDC: " . $pcd;

$Mailer->Subject = utf8_decode($assunto);

$Mailer->Body = utf8_decode($mensagem);

$Mailer->AltBody = 'ALT Conteudo';

$Mailer->AddAddress('setorrh@qualitex.com.br');

$Mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']);

if ($Mailer->Send()) {
	//echo("<script Language=JavaScript>alert('Mensagem enviada com sucesso. Em breve nossa equipe entrará em contato com você!')</script>");
	echo("<script>location.href='resposta-curriculo.html'</script>");
}else{
	echo 'Erro! ' . $Mailer->ErrorInfo;
}

?>
