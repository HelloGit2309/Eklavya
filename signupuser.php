<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<<<<<<< HEAD
<!-- <link href="quiz.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" href="css_/signup.css">
=======
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href="_css/footer.css" rel="stylesheet" type="text/css">
>>>>>>> 8c0685e9a553f18fb0e2ea5eafe4224b25c33fb7
</head>

<body>
<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysqli_query($con,"select * from mst_user where login='$lid'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class='loginSucess'>Login Id Already Exists</div>";
	exit;
}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class='loginSucess'>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";
include("footer.php");

?>
</body>
</html>
