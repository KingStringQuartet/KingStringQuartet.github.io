if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $to = "alexneville098@gmail.com";
  $subject = "Contact Form Submission";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Format the email message
  $email_message = "Name: $name\n";
  $email_message .= "Email: $email\n\n";
  $email_message .= "Message:\n$message";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $email_message, $headers)) {
    echo "<p>Thank you, $name! Your message has been sent successfully.</p>";
  } else {
    echo "<p>Oops! Something went wrong. Please try again later.</p>";
  }
}
