<?php
session_start();
extract($_POST);
extract($_SESSION);
include("header.php");
include("database.php");
if($submit=='Finish')
{
	mysqli_query($con,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	unset($_SESSION['qn']);
	header("Location: index.php");
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Review Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css_/quiz.css" rel="stylesheet" type="text/css">
<!-- Bootsrap Scripts -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="style.css"> -->

</head>

<body>
<?php
//include("header.php");
echo "<h1 align='center' style='font-color:#FFFF; margin-top:40px;'> Review Test Question</h1>";

if(!isset($_SESSION['qn']))
{
		$_SESSION['qn']=0;
}
else if($submit=='Next Question' )
{
	$_SESSION['qn']=$_SESSION['qn']+1;

}

$rs=mysqli_query($con,"select * from mst_useranswer where sess_id='" . session_id() ."'",$cn) or die(mysqli_error());
mysqli_data_seek($rs,$_SESSION['qn']);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=review.php>";
echo "<br>";
echo "<table%> <tr> <td >&nbsp;<td> <table style='margin-top:10px;'class='questions-table' border=0>";
$n=$_SESSION['qn']+1;
$idx=1;
echo "<tR><td><span class='question'>Ques ".  $n .": $row[2]</style>";
echo "<tr><td class=".($row[7]==1?'tans':'style8').">$idx. $row[3]";
$idx++;
echo "<tr><td class=".($row[7]==2?'tans':'style8').">$idx. $row[4]";
$idx++;
echo "<tr><td class=".($row[7]==3?'tans':'style8').">$idx. $row[5]";
$idx++;
echo "<tr><td class=".($row[7]==4?'tans':'style8').">$idx. $row[6]";
if($_SESSION['qn']<mysqli_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit class='btn btn-dark next-question'  value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit class='btn btn-success next-question' value='Finish'></form>";

echo "</table></table>";
?>
