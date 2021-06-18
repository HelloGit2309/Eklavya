<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Eklavya-Welcome to Online Exam</title>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- <link href="quiz.css" rel="stylesheet" type="text/css"> -->
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

<!-- CSS styles -->

<link rel="stylesheet" href="css_/styles.css">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3c8dad;">

	  <div class="container-fluid">
	    <a style="text-decoration:none" class="navbar-brand"  href="index.php"><h2>Eklavya</h2></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
			<div class="collapse navbar-collapse" id="navbarNav">
	    	<div class="collapse navbar-collapse" id="navbarNav">
	      		<ul class="navbar-nav justify-content-end">

					<li class="nav-item">
						<a style="text-decoration:none" class="nav-link" href="#initials"><b class="tab-items">About</b></a>
					</li>
					<li class="nav-item">
						<a style="text-decoration:none" class="nav-link " href="#footer"><b class="tab-items">Contact</b></a>
					</li>

			 	</ul>
	  		</div>

		<div class="float-right">
			<ul class ="navbar-nav justify-content-end">
				<li>
				<a style="text-decoration:none;color:white" class="btn pd-2 mt-2 btn-dark me-2 mb-2 " href="admin/index.php"  >Admin Login</a>
			</li>
			<li>
				<a style="text-decoration:none" class = "btn btn-light mt-2  justify-content-md-end" href="signup.php">Register</a>
			</li>
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

	// <a class='btn btn-success' href=\"index.php\"> Home </a>&nbsp<td>
// <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
// <td width="7%" height="65" valign="bottom"><img src="images/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>

	echo "<h1 class='text-center '>Welcome to Online Exam</h1>";
		echo '<table width="0%"  border="0" align="center">
  	<tr  >
		<td class="options" width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
	</tr>
	<tr>

		<td class="options" valign="bottom" > <a href="result.php" class="style4">Result </a></td>

	</tr>
	</table>
	<br><br>';

	echo "<div class='login'><strong>
	<a class='btn btn-outline-primary' href='update.php?uid=$_SESSION[login]'>Update Profile</a>
	</td>&nbsp<a class='btn btn-outline-warning' href=\"signout.php\" onClick=\"javascript: return confirm('Do you want to signout ?');\"  >Sign Out</a>
	<br><br>
	</a>&nbsp&nbsp<a class='btn btn-outline-danger' href='delete.php?uid=$_SESSION[login]'
	onClick=\"javascript: return confirm('Do you want to delete account ?');\" >Delete Account</a></strong>
	</div>";

	echo "<style>

 	h1{
 		color:#FFFFFF;
 	}
 	body{
 		background:url(background.jpg);
 		// margin-left: 0px;
 		// margin-top: 0px;
 		background-repeat: no-repeat;
 	  background-size: cover;
 	}

	btn{
		margin-top: 10px;
	}

	a{
		color:#d0d0d0;
		size:100px;
		text-decoration:none;
		font-size: 30px;
		align: center;
	}

 	</style>";
		exit;
}

?>
<table width="100%" border="0">

  <tr>
    <td height="296" valign="top">
			<div id="initials" align="center">
        <h1 class="tagline">Your ultimate destination for online assessment</h1>
        <!-- <param name="movie" value="english theams two brothers.dat"> -->
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
				<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <h4 class="description">Welcome to Online
            Exam. This site will provide the quiz for various subject of interest.
            You need to login to take the online exam.</h4>
      </blockquote>
    </div>
	</td>

			<table class="Loginpage" width="50%" height="250" >
		<h1 id="Logintext"align="center">Login</h1>
		<br>
	<form method="post" action="">
			<tr >
				<th class="text">Login Id</th>
				<th>
				<input class="form-control"type="TEXT" title="enter your registered LOGIN ID"  placeholder="Login Id"  maxlength="10" size="25" style="margin:30px;" name="loginid"/></tD>
			</th>
			<tr >
				<th class="text">Enter Password</th>
				<th><input class="form-control" type="password" placeholder="Password" style="margin:30px;" name="pass" /></th>
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
			 <div class="button">
				 <th class="errors">
					<input class="btn btn-info md-2"type="submit" name="submit" id="submit" Value="Login"/>

				<a class="btn btn-dark " href="signup.php">Register / Sign Up</a>
			</th>
			 </div>

		</table>
    </form></td>
  </tr>
</table>

	<footer class ="footer" id="footer">
		<div class="container-fluid">
			<h3 class="social fab fa-linkedin"></h3>
			<h3 class="social fab fa-facebook"></h3>
			<h3 class="social fab fa-instagram"></h3>
		 	<h3 class="social fab fa-twitter"></h3>
		 	<p>© Copyright 2021 EKLAVYA</p>
	 	</div>
	</footer>



</body>

</html>
