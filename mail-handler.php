<?php
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];
    $to='sonihiten5@gmail.com';
    $headers="From: ".$email;
   $message1="Name: ".$name. "\n\n". "Email:".$email." \n\n". "subject:".$subject."\n\n". "message:".$message;
  mail($to,$subject,$message1);
      echo "we will contact you soon";
      //echo $name,$email,$subject,$message;
}
?>
