<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to Online Exam</title>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootsrap Scripts -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="style.css"> -->

<!-- Font icons -->
<script src="https://kit.fontawesome.com/bb34f698aa.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">

<!-- Google Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

<!-- CSS styless -->

<link rel="stylesheet" href="styles.css">
</head>

<body>


	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3c8dad;">

	  <div class="container-fluid">
	    <a style="text-decoration:none" class="navbar-brand" href="Location: index.php">Eklavya</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav justify-content-end">

					<li class="nav-item">
						<a style="text-decoration:none" class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a style="text-decoration:none" class="nav-link" href="#footer">Contact</a>
					</li>
</div>

			 		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a class="btn btn-outline-info btn-lg " href="signup.php" class="button">Register</a>
		  		   <!--<button class="btn btn-secondary float-end" type="button" href="signup.php">Register</button> -->
				</div>
				<!-- <div class="alert alert-info clearfix"> -->
    <!-- <a href="#" class="alert-link">
      Summary:Its some description.......testtesttest
    </a>
    <button type="button" class="btn btn-primary btn-lg float-end">
      Large button
    </button> -->
<!-- </div> -->
	      </ul>
	    </div>
	  </div>
	</nav>

	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Aspirants-Dialogue-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/TVFs-Aspirants-SK-Dialogues-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Kota-Factory-Dialogues-12.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php


include("database.php");
include('header.php');
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{		
		$_SESSION['login']=$loginid;
	}
}
if (isset($_SESSION['login']))
{
	//echo '<th align=\"right\"> </div><a class="btn btn-info" href=\"signout.php\">Sign Out</a></th>';

	echo "<div align=\"right\"><strong><a href=\"index.php\"> Home </a> | <td>
	<a href='update.php?uid=$_SESSION[login]'>Update Profile</a>
	</td> | <a href=\"signout.php\">Sign Out</a> | <a
	href='delete.php?uid=$_SESSION[login]'>Delete Account</a></strong></div>";

	echo "<h1 class='text-center bg-danger'>Welcome to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  	<tr>
		<td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
		<td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
	</tr>
	<tr>
		<td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
		<td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
	</tr>
	</table>';
		exit;
}


?>
<table width="100%" border="0">

  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Welcome to Online Quiz</h1>
      <span class="style5"><img src="image/paathshala.jpg" width="129" height="100"><span class="style7"><img src="image/HLPBUTT2.JPG" width="50" height="50"><img src="image/BOOKPG.JPG" width="43" height="43"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="left" class="style5"><span class="style7">WelCome to Online
            exam. This Site will provide the quiz for various subject of interest.
            You need to login for the take the online exam.</span></p>
      </blockquote>
    </div></td>
    		<table align="center" border="0" WIDTH="50%" height="250">
			<h1 class="text-center bg-warning">LOGIN PAGE</h1>
		<form method="post" action="">
		<center>
		<img class="img-circle" src="1.jpg"  title="this is my profile pic" width="240px" height="190px" border="1" />
		</center>	<br>

				<tr>
					<th class="text-primary">LOGIN ID</th>
					<th>
					<input class="form-control"type="TEXT" title="enter your registered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
				</th>
				<tr>
					<th class="text-primary">ENTER PASSWORD</th>
					<th><input class="form-control" type="password" name="pass" id="pass2"/></th>
					</tr>
					       <?php
		  if(isset($found))
		  {
		  		//echo "Invalid Username or Password";				
				echo '<script>alert("Invalid Username or Password")</script>';
			  	session_destroy();
				header("Location: index.php");
		  }
		  ?>
          </span></td>
         <th></th>
				<th class="errors">
					<input class="btn btn-danger "type="submit" name="submit" id="submit" Value="Login"/>

        <a class="btn btn-success " href="signup.php">New user ? click here</a></th>
      </table>
      <div align="center">
        <p class="style5"><img src="images/topleft.jpg" width="134" height="128">          </p>
        </div>
    </form></td>
  </tr>
</table>


	<footer class ="footer" id="footer">
		<div class="container-fluid">
			<i class="social fab fa-linkedin"></i>
			<i class="social fab fa-facebook"></i>
		<i class="social fab fa-instagram"></i>
		 <i class="social fab fa-twitter"></i>
		 <p>© Copyright 2021 EKLAVYA</p>
	 </div>
	</footer>



</body>

</html>
