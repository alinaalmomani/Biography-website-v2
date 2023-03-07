<?php
include "../action/config.php";
$id = $_GET['id'];
$sql = "update messages set approved='1' WHERE message_id	= '$id'";
$result = mysqli_query($con, $sql);
header('Location: index.php');
exit();