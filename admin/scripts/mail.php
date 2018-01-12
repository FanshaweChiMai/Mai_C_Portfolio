<?php

function redirect_to(){
  if($location != NULL){
    header("Location: {$location}");
    exit;
  }
}


  function submitMessage($name, $company, $email, $phone, $message, $direct){

    $to = "mai.chi@chimai.ca";
    $subj = "Message from customer submitted via site.com";
    $extra = "Reply-to:".$email;
    $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nComments: ".$message;
    mail($to,$subj,$msg,$extra);
    $direct = $direct."?name={$name}";
    redirect_to($direct);
  }

 ?>
