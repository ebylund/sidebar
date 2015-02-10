<?php
$to = "ebylundini52@gmail.com";
$subject = "whats up player?";
$message = "my favorite color: <strong>${_POST['favorite_color']}</strong><br>";
$message .= "my favorite candy: <strong>${_POST['favorite_candy']}</strong><br>";
$message .= "my favorite food: <strong>${_POST['favorite_food']}</strong>";

//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From: Eeedster <erik@gmail.com>' . "\r\n";

//mail($to, $subject, $message/*, $headers*/);

?>
