<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- <link href="quiz.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" href="css_/sublist.css">
<link rel="stylesheet" href="css_/footer.css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysqli_query($con,"select * from mst_subject where sub_id=$subid");
$row1=mysqli_fetch_array($rs1);
echo "<h1 align=center> $row1[1]</font></h1>";
$rs=mysqli_query($con,"select * from mst_test where sub_id=$subid");
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h2 id='quizName'> No Quiz for this Subject </h2>";
	exit;
}
echo "<br><h2 id='quizName'> Choose a topic</h2>";
echo "<table align=center>";
$idx=1;
while($row=mysqli_fetch_row($rs))
{
	echo "<br><br><tr><td align=center><a href=quiz.php?testid=$row[0]&subid=$subid><font id='topic' size=4>$idx . $row[2]</font></a>";
	$idx++;
}
echo "</table>";
include("footer.php");
?>
</body>
</html>