<?php
$name = $_POST['name'];
$email = $_POST['email'];
$lName = $_POST['tel'];
$massage = $_POST['message'];
$subject = $_POST['subject'];
$captcha = $_POST['g-recaptcha-response'];

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: <".$email.">\n";
$headers .= "X-Priority: 1\n";

$from = $headers;
$to = 'info@aviaglob.com';

$body = "From: $name\n E-Mail: $email\n Message:\n $massage tel:\n  $lName";

if ($captcha  !== '') {
    if (mail($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
} else if ($_POST['submit'] && $captcha  !== '') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
}
?>