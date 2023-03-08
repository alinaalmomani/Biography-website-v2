<?php
include 'config.php';
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['Message'];
$query = "INSERT INTO messages (full_name,company_email,message) VALUES ( '$name', '$email','$message')";
if (mysqli_query($con, $query)) {
  $_SESSION['info'] = "Your Message Has Been Sent";
} else {
  $_SESSION['info'] = "Your Message Has Not Been Sent";
}
header('Location: ' . $_SERVER['HTTP_REFERER']);