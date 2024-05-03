<?php
  $hostname = "localhost";
  $username = "id20471461_root";
  $password = "Md@7270.com";
  $dbname = "id20471461_aouinachatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  } 
  /*
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  } */
?>
