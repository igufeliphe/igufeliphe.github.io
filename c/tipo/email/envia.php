<?php  

date_default_timezone_set('America/Sao_Paulo');

require_once('PHPMailer/class.phpmailer.php');

$mail             = new PHPMailer();

$body = "					 <br /><br />
							 <strong>Nome:</strong> $nome<br /><br />
							 <strong>E-mail:</strong> $email<br /><br />
							 <strong>Assunto:</strong> $assunto<br /><br />
							 <strong>Mensagem:</strong><br /> $mensagem";

$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "mail.yourdomain.com"; // SMTP server
//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "igufeliphe@gmail.com";  // GMAIL username
$mail->Password   = "1g0rf3l1ph3";            // GMAIL password

$mail->SetFrom('igufeliphe@gmail.com', 'Contato pelo site');

$mail->AddReplyTo($email ,$nome);

$mail->Subject    = 'Contato pelo site - '. $assunto;

$mail->AltBody    = 'To view the message, please use an HTML compatible email viewer!'; // optional, comment out and test

$mail->MsgHTML($body);

$address = 'igufeliphe@gmail.com';
$mail->AddAddress($address, 'Contato pelo site');

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment



?>