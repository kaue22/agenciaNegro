<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['Agencia Negro'];
$email_address = $_POST['contato@agencianegro.com.br'];
$message = $_POST['teste'];
	
// create email body and send it	
$to = 'contato@agencianegro.com.br'; // ----->>> put your email to receive mails
$email_subject = "Formulário de contato enviado por:  $name";
$email_body = "Você recebeu uma nova mensagem. \ n \ n ".
"Aqui estão os detalhes:  $name ".
"Email: $email_address Mensagem  $message";
$headers = "From: contato@agencianegro.com.br\n";
$headers .= "Responder a: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>