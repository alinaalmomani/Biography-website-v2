<?php
include "../action/config.php";
$id=$_GET['id'];
$sql = "DELETE FROM messages WHERE message_id	= '$id'";
$result = mysqli_query($con, $sql);
exit();