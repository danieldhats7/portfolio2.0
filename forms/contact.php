<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $emailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

$emailTo = 'danieldhatsct@gmail.com'

$headers = "From: My website" . $emailFrom;
$txt = "You have received an e-mail from".$name.".\n\n".$message;

mail($emailTo, $subject, $txt. $headers);

header("Location: index.php?mainsend");

}
?>
