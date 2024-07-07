<?php

  $file=fopen("data.txt","a+");


  $firstname            =$_POST['firstname'];
  $lastname             =$_POST['lastname'];
  $email                =$_POST['email'];
  $phone                =$_POST['phone'];
  $subject              =$_POST['subject'];
  $message              =$_POST['message'];

  $content="
  Ad:$firstname
  Soyad:$lastname
  Mail:$email
  Telefon:$phone
  Subject:$subject
  Mesaj:$message
  
  ";

  echo $content;
fwrite($file,$content);

fclose($file);
?>