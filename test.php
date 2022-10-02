
<?php

				   require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
  ->setUsername('contact@melissa-psychic.com')
  ->setPassword('Dadada123!')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

$name = "ivan";
$email_address = "email@isimic.com";
$subject = "11223344";
$cmessage = "this is a test message";

$email_subject = $subject.":  ".$name;
$email_body = "You have received a new message from your soulmate-psychic.com contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nSubject: $subject\n\nMessage:\n$cmessage";

// Create a message
$message = (new Swift_Message($email_subject))
  ->setFrom(['contact@melissa-psychic.com' => 'Ivan'])
  ->setTo(['contact@soulmate-psychic.com'])
  ->setReplyTo($email_address)
  ->setBody($email_body)
  ;

// Send the message
$result = $mailer->send($message);
		echo $result;
?>