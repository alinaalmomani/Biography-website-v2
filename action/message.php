<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['Message'];
$query = mysqli_query($con, "INSERT INTO messages (full_name,company_email,message	 ) VALUES ( '$name', '$email','$message')");
header('Location: ' . $_SERVER['HTTP_REFERER']);