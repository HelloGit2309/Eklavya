<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
<!-- Bootsrap Scripts -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="style.css"> -->

</head>
<body>
<?php
include("header.php");
include("../database.php");
{
$sql=mysqli_query($con,"select * from mst_test");

	echo "<table class='table table-striped'>";
	echo"<tr><th><a class='btn btn-danger' href=\"testadd.php\"> ADD Test</a>&emsp;&emsp;</th></tr>";
	echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>name</th>
	<th class='text-primary'>Total question</th>
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";

	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['test_id'];

	echo "<tr>";
	echo "<td>".$result['test_id']. "</td>";
	echo "<td>".$result['test_name']."</td>";
	echo "<td>".$result['total_que']."</td>";
	echo "<td><a href='testupdate.php?test_id=$id'><span style='color:yellow' class='glyphicon glyphicon-edit'>Update</span></a></td>";
	echo "<td><a href='testdelete.php?test_id=$id'><span style='color:yellow' class='glyphicon glyphicon-trash'>Delete</span></a></td>";
	echo "</tr>";
	}
	echo "</table>";


}
?>
</body>
</html>
