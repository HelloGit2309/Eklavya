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
<link rel="stylesheet" href="css/bootstrap.min.css"/>
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
	echo "<td><a href='testupdate.php?test_id=$id'><span class='glyphicon glyphicon-edit'></span></a></td>";
	echo "<td><a href='testdelete.php?test_id=$id'><span class='glyphicon glyphicon-trash'></span></a></td>";
	echo "</tr>";
	}
	echo "</table>";


}
?>
</body>
</html>
