<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "karina.serrano@davinci.edu.ar";
  $headers = "Pregunta De:" .$mailFrom;
  $txt = "recibiste un mail de:" .$name ".\n\n" .$message;

  mail($mailTo, $txt, $headers);
  header("location: mailSent.php")
}
?>