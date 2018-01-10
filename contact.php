<?php
  require_once("admin/scripts/config.php");
  if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $street = $_POST['street'];
    $direct = "thankyou.php";
    if($street === ""){
      $sendMail = submitMessage($name, $email, $message, $direct);
      //echo "Street is empty";
    }
  }
 ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
</head>
<body>
  <!-- add the php to specify to happen on this page-->
    <form action="contact.php" method="post">
    <!--Make sure to give each input a name attribute(name="")-->
       <label>Name: </label><input name="name" type="text" size="21" maxlength="30" />
       <label>Email: </label><input name="email" type="text" size="21" maxlength="30" />
       <label for="street">Street: </label><input class="street" name="street" type="text" size="21" maxlength="30" />
       <label for="message">Message: </label><textarea name="message"></textarea>
       <input name="submit" type="submit" value="Send" />
    </form>
</body>
</html>
