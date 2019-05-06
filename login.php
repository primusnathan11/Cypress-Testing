<?php
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
  header("location: form_login.php");
} else {
  $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($connect, $query);
  $num = mysqli_num_rows($result);
}
if ($num == 1) {
  header("location: home.php");
  $_SESSION['user'] = $username;
} else {
  header("location: form_login.php");
}
