<!doctype html>
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
    <section id="contactForm">
      <!-- add the php to specify to happen on this page-->
        <form action="contact.php" method="post">
        <!--Make sure to give each input a name attribute(name="")-->
           <label>YOUR NAME </label><input name="name" type="text" size="21" maxlength="30" />
           <label>COMPANY (OPTIONAL) </label><input name="company" type="text" size="21" maxlength="30" />
           <label>E-MAIL ADDRESS </label><input name="email" type="text" size="21" maxlength="30" />
           <label>PHONE (OPTIONAL) </label><input name="email" type="text" size="21" maxlength="30" />
           <label for="street">LOCATION </label><input class="street" name="street" type="text" size="21" maxlength="30" />
           <label for="message">MESSAGE / INQUIRY </label><textarea name="message"></textarea>
           <input name="submit" type="submit" value="SEND" />
        </form>
    </section>
    <section id="contactInfo">
      <div id="designSide">

      </div>
      <div id="developSide">

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
      <footer>
              <div id="toSides">
          <a href="designer.html">DESIGNER</a>
          <a href="developer.html">DEVELOPER</a>
        </div>
      </footer>
  </div>

</body>
</html>
