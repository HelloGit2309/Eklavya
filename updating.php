<?php
include("database.php");
if(isset($_POST['update']))
{	
$id = mysqli_real_escape_string($con, $_POST['id']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$add = mysqli_real_escape_string($con, $_POST['add']);
$city = mysqli_real_escape_string($con, $_POST['city']);
if(empty($email)) {	
if(empty($email)) {
echo '<font color="red">Email field is empty.</font><br>';	
} 
}else {	
$result = mysqli_query($con, "update mst_user set email='$email', username='$name',phone='$phone',address='$add',city='$city' where login=$id");
header("Location: index.php");
}
}
?>