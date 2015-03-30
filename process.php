<?php
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];

echo $name;
echo $email;
echo $telephone;
echo $message;

$email_message = "
Name: ".$name."
Email: ".$email."
Telephone: ".$telephone."
Message: ".$message."
";

mail("frankwan27@gmail.com", "New inquiry", $email_message);
header("Location: /en/index.html");
?>