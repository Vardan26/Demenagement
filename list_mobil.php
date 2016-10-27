<?php
echo '<pre>';
var_dump($_POST["input"][1]);
echo '</pre>';

$mailBody = $_POST["input"][0]




//$captcha = $_POST['g-recaptcha-response'];

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: <".">\n";
$headers .= "X-Priority: 1\n";

$from = $headers;
$to = 'gagik.sargsyan@gmail.com';

$body = "From: ".$_POST["input"][1]."\n E-Mail: ".$_POST["input"][1]."\n Message:\n ".$_POST["input"][1]." tel:\n  ".$_POST["input"][1];

if ($captcha  !== '') {
    if (mail($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
} else if ($_POST['submit'] && $captcha  !== '') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
}