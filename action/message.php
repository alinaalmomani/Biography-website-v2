<?php
include 'config.php';
define('MB', 1048576);
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['Message'];
$filename = $_FILES['file']['name'];
echo $filename;
if (isset($_FILES['file'])) {
  $query = mysqli_query($con, "INSERT INTO messages (full_name,company_email,message) VALUES ( '$name', '$email','$message')");
  $filename = $_FILES['file']['name'];
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Valid file extensions
  $extensions_arr = array("jpg", "jpeg", "png", "gif");
  // Check extension and size
  if (in_array($imageFileType, $extensions_arr) AND $_FILES['file']['size'] < 2 * MB) {
    // Insert record\
    echo"hii";
    $query = mysqli_query($con, "INSERT INTO messages (image) VALUE ('$filename')");
    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $filename);
  }
} else {
  $query = mysqli_query($con, "INSERT INTO messages (full_name,company_email,message,image) VALUES ( '$name', '$email','$message','uploads/default.png')");
}
header('Location: ' . $_SERVER['HTTP_REFERER']);?>