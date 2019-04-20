<?php
//if "email" variable is filled out, send email
  if (isset($_POST['send']))  {
  
  //Email information
  $admin_email = "parulagrawal1404@gmail.com";
  $name=$_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  //send email
  mail($admin_email, $name, "$subject", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
 
?>
