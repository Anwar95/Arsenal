<?php
$name = $_POST ['name'];
$email = $_POST ['email'];
$message = $_POST ['message'];

$to = "anwarmohammed1995@hotmail.com";
$subject = "New Message";

mail ($to, $subject, $message, "From: " . $name);
echo "Your Message has been sent";



?>