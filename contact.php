<?php
  require_once("admin/scripts/config.php");
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $location = $_POST['location'];
    $direct = "thankyou.php";
    if($location === ""){
      echo "Location is empty";
    }else{
      $sendMail = submitMessage($name,$company, $email, $phone, $message, $direct);
    }
  }
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/about.css">
<title>Contact Me</title>
</head>
<body>
  <div class="wrapper">
    <header>
      <h1>DROP A WORD?</h1>
      <a href="developer.html">DEVELOPER</a>
      <a href="designer.html">DESIGNER</a>

    </header>
    <div class="contactBox">
      <section id="contactForm">
          <form action="contact.php" method="post">
             <label>YOUR NAME </label><input name="name" type="text" size="21" maxlength="30" />
             <label>COMPANY (OPTIONAL) </label><input name="company" type="text" size="21" maxlength="30" />
             <label>E-MAIL ADDRESS </label><input name="email" type="text" size="21" maxlength="30" />
             <label>PHONE (OPTIONAL) </label><input name="phone" type="text" size="21" maxlength="30" />
             <label for="location">LOCATION </label><input class="location" name="location" type="text" size="21" maxlength="30" />
             <label for="message">MESSAGE / INQUIRY </label><textarea name="message"></textarea>
             <input id="submitButton" name="submit" type="submit" value="SEND" />
          </form>
      </section>
      <section id="contactInfo">
        <div id="designSide">
            <img src="images/designlogo.png" alt="">
        </div>
        <div id="developSide">
            <img src="images/developlogo.png" alt="">
        </div>
        <div id="infoBox">
          <p><span>CHI PHUOC QUYNH MAI</span><br><br>1451 OXFORD ST E<br>LONDON, ON N5V 1W3<br>CANADA</p>
          <p><span>Tel:</span> 226-998-4433</p>
          <p><span>Email:</span> mai.chi@chimai.ca</p>
          <div>
            <ul>
              <li> <a href="#"> <img src="images/fb.png" alt="Facebook"> </a> </li>
              <li> <a href="#"> <img src="images/twt.png" alt="Twitter"> </a> </li>
              <li> <a href="#"> <img src="images/ins.png" alt="Instagram"> </a> </li>
              <li> <a href="#"> <img src="images/link.png" alt="linkedIn"> </a> </li>
              <li> <a href="#"> <img src="images/yt.png" alt="Youtube"> </a> </li>
            </ul>
          </div>
        </div>
      </section>
  </div>

      <footer>
              <div id="toSides">
          <a href="designer.html">DESIGNER</a>
          <a href="developer.html">DEVELOPER</a>
        </div>
      </footer>
  </div>

</body>
</html>
