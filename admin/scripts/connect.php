<?php
  //This file will connect us to the database
  $user = "root";
  $pass = "";
  //$pass = "root"; //Mac Platform
  $url = "localhost";
  $db = "db_movies";

  $link = mysqli_connect($url, $user, $pass, $db);
  //$link = mysqli_connect($url, $user, $pass, $db, "8888" or "8889"); // Mac Platform

  // Check connection ErrorException
  if(mysqli_connect_errno()){
    printf("Connect failed: %\n", mysqli_connect_error());
    exit();
  }
?>
