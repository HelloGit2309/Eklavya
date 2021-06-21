<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- <link href="../quiz.css" rel="stylesheet" type="text/css"> -->
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
<link rel="stylesheet" href="admin_css/testupdate.css">

</head>

<body background="registration.jpg">
<?php
include("header.php");
?>
<div >

  <a href="../index.php" style="text-decoration:none;" ><h3 class="home-heading">Home </h3></a>

</div>
<h1 >Adminstrative Login</h1>
<form name="form1" method="post" action="login.php">
<table class="">
  <tr>
    <td width="106"><span class="style2"></span></td>
    <!-- <td width="132"><span class="style2"><span class="head1"><img src="login.jpg" width="131" height="155"></span></span></td> -->
    <td width="238"><table width="219" border="0" align="center">
  <tr>
    <td width="163" class="style2">Login ID </td>
    <td width="400" ><input class="" name="loginid" type="text" id="loginid" size="30"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input class="" name="pass" type="password" id="pass" size="30"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>
    <input class="btn btn-dark" name="submit" type="submit" id="submit" value="Login">
    </td>
  </tr>
</table></td>
  </tr>
</table>

</form>

</body>
</html>