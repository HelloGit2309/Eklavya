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
echo '<font color="red">Email field is empty.</font><br>';
}else {
$result = mysqli_query($con, "update mst_user set email='$email', username='$name',phone='$phone',address='$add',city='$city' where login='$id'");
echo "<h1><font color='black' >Update Successful</font><h1> <br/>";
echo '<h2><strong><a href="index.php">Return Home</a></strong><h2>';
echo"
<style>
body{
  background: url(registration.jpg);
  margin-left: 0px;
  margin-top: 0px;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>";
}
}

?>
