<?php
require_once('connection.php');

if (isset($_POST['register'])){
  $username = ($_POST['username']);
  $email = ($_POST['email']);
  $dob = ($_POST['dob']);
  $phoneNumber =($_POST['phoneNumber']);
  $occupation = ($_POST['occupation']);
  $password = ($_POST['password']);

  $password = md5($password);
  $sql = "INSERT INTO Web_One(Username, Email, DOB, PhoneNumber, Occupation, Password) values('$username', '$email', '$dob', '$phoneNumber', '$occupation', '$password')";

  mysqli_query($conn, $sql);
  echo "<script> alert('Successfully Registered!..'); window.location='register.php' </script>";
}


 ?>
