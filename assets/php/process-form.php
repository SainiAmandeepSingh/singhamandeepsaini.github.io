<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  // The form hasn't been submitted yet, so do nothing.
  exit();
}

// Replace with your email address
$to = "Singhamandeepsaini@hotmail.com";

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

// Validate the input
if (empty($name) || empty($email) || empty($message)) {
  header("Location: contact.php?status=error");
  exit();
}

// Compose the email message
$subject = "New message from $name";
$body = "From: $name\nEmail: $email\n\n$message";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
  header("Location: contact.php?status=success");
} else {
  header("Location: contact.php?status=error");
}
