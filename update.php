<?php
// including the database connection file
include("database.php");
//getting id from url
$id = $_GET['uid'];
//selecting data associated with this particular id
$result = mysqli_query($con, "select * from mst_user where login='$id'");
$res = mysqli_fetch_array($result);
$name = $res['username'];
$email = $res['email'];
$phone = $res['phone'];
$add = $res['address'];
$city = $res['city'];
?>
<?php
include("header.php");
?>
<html>
<head>
	<title>Update Profile</title>
	<link rel="stylesheet" href="css_/update.css">
	<link rel="stylesheet" href="css_/footer.css">
	<!-- Bootsrap Scripts -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</head>

<body>

	<div >

		<a href="index.php" style="text-decoration:none;" ><h3 class="home-heading">Home </h3></a>

</div>

<h1 style="color:#FFF" align="center"> Update Your Info</h1>
	<br><br>

	<form name="form1" method="post" action="updating.php">
		<table class="update-form" border="0">
			<tr class="form-row" >
				<td><p id="label">Username</p></td>
				<td><input class="form-content" type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
		<tr class="form-row" >
				<td><p id="label" >Email</p></td>
				<td><input class="form-content" type="email" name="email" value="<?php echo $email;?>"></td>
			</tr>
      <tr class="form-row" >
				<td><p id="label" >Phone No</p></td>
				<td><input class="form-content" type="phone" name="phone" value="<?php echo $phone;?>"></td>
			</tr>
      <tr class="form-row" >
				<td><p id="label" align="left" >Address</p></td>
				<td><input class="form-content" col="50" type="text" name="add" value="<?php echo $add;?>"></td>
			</tr>
      <tr class="form-row" >
				<td><p id="label">City</p></td>
				<td><input class="form-content" type="text" name="city" value="<?php echo $city;?>"></td>
			</tr>
			<tr class="form-row" >
				<td><input type="hidden" name="id" value=<?php echo $_GET['uid'];?>></td>
					<td align="center" style="padding-right:30px;"><input class="btn btn-dark " type="submit" name="update" value="Update"></td>
			</tr>
		</table>
<!-- btn btn-dark btn-lg -->
	</form>
</body>
</html>
<?php
include("footer.php");
?>
