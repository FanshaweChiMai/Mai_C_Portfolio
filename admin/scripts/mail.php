<?php

function redirect_to(){
  if($location != NULL){
    header("Location: {$location}");
    exit;
  }
}

//order matters, it doesn't care what's named
  function submitMessage($name, $email, $message,$direct){
    //send info to your email, gmail not recommended
    $to = "youraddress@yoururl.com";
    $subj = "Message from customer submitted via site.com";
    $extra = "Reply-to:".$email;
    $msg = "Name: ".$name."\n\nEmail: ".$email."\n\nComments: ".$message;
    //mail($to,$subj,$msg,$extra);
    $direct = $direct."?name={$name}";
    redirect_to($direct);
  }

 ?>
