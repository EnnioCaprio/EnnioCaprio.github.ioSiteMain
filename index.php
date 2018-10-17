<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$mailF = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "";

$header = "From: ".$mailF;
$sms = "You've received mail from: ".$name.".\n\n".$message;

mail($mailTo, $text, $header);
header("Location: index.php?mailsend");


}

?>
