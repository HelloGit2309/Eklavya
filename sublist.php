<?php
session_start();
include("header.php");
?>
<!DOCTYPE html>

<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css_/sublist.css">

<!-- <link href="quiz.css" rel="stylesheet" type="text/css"> -->
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
<!-- <link rel="stylesheet" href="css_/styles.css"> -->
<!-- <<<<<<< HEAD -->

<!-- ======= -->
<link rel="stylesheet" href="css_/footer.css">
<!-- >>>>>>> 493ccb73b2826a7dc745988a4f648e594a79d3b5 -->
</head>
<body>
	<div >

		<a href="index.php" style="text-decoration:none;" ><h3 class="home-heading">Home </h3></a>

	</div>
<?php

include("database.php");


echo "<h1>Select Your Subject</h1>";
$rs=mysqli_query($con,"select * from mst_subject");
echo "
<div id='Table'>
<table id='contents'>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr  ><td style='text-decoration:none' ><a href=showtest.php?subid=$row[0]><font id='subject' size=5>$row[1]</font></a>";
}
echo "</table>
</div>";
include("footer.php");
?>

</body>
</html>
