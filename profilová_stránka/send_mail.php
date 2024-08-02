<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = patrikmaslak22@gmail.com; // Změňte na svůj e-mail
    $subject = Nová zpráva z kontaktního formuláře;
    $body = "Jméno: $name\nEmail: $email\nZpráva:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Zpráva byla úspěšně odeslána.";
    } else {
        echo "Zpráva nebyla odeslána. Zkuste to prosím znovu.";
    }
} else {
    echo "Formulář nebyl správně odeslán.";
}
?>
