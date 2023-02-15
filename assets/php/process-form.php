<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  // Check that required fields are not empty
  if (empty($name) || empty($email) || empty($message)) {
    $status = "error";
  } else {
    // Send email
    $to = "Singhamandeepsaini@hotmail.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
      $status = "success";
    } else {
      $status = "error";
    }
  }

  // Redirect back to contact form with status message
  header("Location: contact.php?status=$status");
  exit;
}

?>