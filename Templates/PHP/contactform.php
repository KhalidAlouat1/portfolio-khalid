<?php
if (isset($_POST['submit'])) {

  $name = $_POST['name'];   
  $subject = $_POST['subject'];   
  $mailFrom = $_POST['mail'];   
  $message = $_POST['message'];   

$mailTo = "khalidalouat@hotmail.com";
$headers = "From: ".$mailFrom;
$txt = "Je hebt een mail ontvangen van: ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt);
header("Location: contact.php?mailsent");

}
