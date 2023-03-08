<?php
include 'config.php';
session_start();
define('MB', 1048576);
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['Message'];
if (isset($_FILES['file'])) {
  $filename = $_FILES['file']['name'];
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Valid file extensions
  $extensions_arr = array("jpg", "jpeg", "png", "gif");
  // Check extension and size
  if (in_array($imageFileType, $extensions_arr) AND $_FILES['file']['size'] < 2 * MB) {
    // Insert record

    $query = mysqli_query($con, "INSERT INTO messages (full_name,company_email,message,image) VALUES ( '$name', '$email','$message','$filename')");
    $_SESSION['info'] = "your message has been sent";
    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $filename);
  }elseif($_FILES['file']['size'] > 2 * MB){
    $_SESSION['info'] = "the image is too big";
  }elseif(in_array($imageFileType, $extensions_arr)){
   $_SESSION['info'] = "the image extintion should be jpg, jpeg, png or  gif";
  }else{
      $_SESSION['info'] = "something is wrong try again";
  }
} else {
  $query = mysqli_query($con, "INSERT INTO messages (full_name,company_email,message,image) VALUES ( '$name', '$email','$message','uploads/default.png')");
  $_SESSION['info'] = "your message has been sent";
}
header('Location: ' . $_SERVER['HTTP_REFERER']);?>