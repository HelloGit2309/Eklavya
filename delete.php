<?php
include('database.php');
error_reporting(0);
$id = $_GET['uid'];
$query = "delete from mst_user where login='$id'";
$result = mysqli_query($con, $query);
echo "<font color = 'green'>Account Deleted Successfully</font>";
echo "<br/>";
session_start();
session_destroy();
echo '<strong><a href="index.php">Home</a></strong>';
?>