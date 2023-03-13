<?php
include "../action/config.php";
if(isset($_GET['yes'])){
$id = $_GET['yes'];
$sql = "update messages set approved='1' WHERE message_id	= '$id'";
$result = mysqli_query($con, $sql);
header('Location: index.php');}
elseif(isset($_GET['no'])){
  $id = $_GET['no'];
$sql = "update messages set approved='0' WHERE message_id	= '$id'";
$result = mysqli_query($con, $sql);
header('Location: index.php');}

exit();