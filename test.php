<?php

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
  ->setUsername('contact@melissa-psychic.com')
  ->setPassword('Dadada123!')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_subject = "Order #".$subject.":  ".$name;
$email_body = "You have received a new message from your soulmate-psychic.com contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nSubject: $subject\n\nMessage:\n$message";

// Create a message
$message = (new Swift_Message($email_subject))
  ->setFrom(['contact@melissa-psychic.com' => 'Ivan'])
  ->setTo(['contact@soulmate-psychic.com'])
  ->setReplyTo(['ivan.simic2903@gmail.com'])
  ->setBody($email_body)
  ;

// Send the message
$result = $mailer->send($message);
echo $result;
?>