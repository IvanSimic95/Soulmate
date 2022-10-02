<?php

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
  ->setUsername('contact@melissa-psychic.com')
  ->setPassword('Dadada123!')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Test 123'))
  ->setFrom(['contact@melissa-psychic.com' => 'Ivan'])
  ->setTo(['contact@soulmate-psychic.com'])
  ->setReplyTo(['ivan.simic2903@gmail.com'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);
echo $result;
?>