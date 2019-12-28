<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $to='sonihiten5@gmail.com';
    $headers="From: ".$email;
    $message="Name: ".$name. "\n\n". "Email:".$email." \n\n". "subject:".$subject."\n\n". "message:".$message;
  if(mail($to,$subject,$message,$headers))
  {
      echo .$name."we will contact you soon";
  }
    else
    {
        echo "something went wrong";
    }
 
}
?>
