<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'kazavenkatasaimadhav@gmail.com';
  $subject = 'Form Submission';
  $form = 'Portfolio Form:';
  $body = "From: $name\n E-Mail: $email\n Message:\n $message";
  mail ($to, $subject, $body, $form);
  echo "Mail Sent.";
?>
