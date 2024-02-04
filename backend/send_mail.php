<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $recipient_email = "kaik.e.l.couto@gmail.com";

    $subject = "Correio Elegante";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<html><body>";
    $body .= "<h1>Correio Elegante</h1>";
    $body .= "<p>Nome: $name</p>";
    $body .= "<p>Email: $email</p>";
    $body .= "<p>Mensagem: $message</p>";
    $body .= "</body></html>";

    if (mail($recipient_email, $subject, $body, $headers)) {
        echo "<script>console.log('Message was sent successfully!');</script>";
    } else {
        echo "<script>console.log('Failed to send message.');</script>";
    }
}

?>