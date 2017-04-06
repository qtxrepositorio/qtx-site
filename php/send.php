<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'info@qualitex.com.br';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: info@qualitex.com.br' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Sua solicitação foi enviada!"; // success message
}else{
echo "Email inválido.";
}

?>