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
$sql=mysqli_query($con,"select * from mst_question");

	echo "<table class='table table-striped'>";
	echo "<tr ><th ><a style='color:orange' class='btn btn-danger'href=\"questionadd.php\">Add Question </a>&emsp;&emsp;</th></tr>";
	echo "<tr><th style='color:#6699ff' class='text-primary'>ID</th><th style='color:#6699ff' class='text-primary'>Question</th>
	<th style='color:#6699ff' class='text-primary'>Update</th>
	<th style='color:#6699ff' class='text-primary'>Delete</th></tR>";

	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['que_id'];

	echo "<tr>";
	echo "<td style='color:white'>".$result['que_id']. "</td>";
	echo "<td style='color:white'>".$result['que_desc']."</td>";
	echo "<td ><a style='color:yellow' href='queupdate.php?que_id=$id'><span class='glyphicon glyphicon-edit'>Update</span></a></td>";
	echo "<td><a style='color:red' href='quedelete.php?que_id=$id'><span class='glyphicon glyphicon-trash'>Delete</span></a></td>";
	echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>
