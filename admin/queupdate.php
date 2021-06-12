 <?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include("header.php");
include("../database.php");
extract($_REQUEST);
 $id=$_GET['que_id'];
$q=mysqli_query($con,"select * from mst_question where que_id='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update mst_question SET que_desc='$addque',ans1='$ans1',ans2='$ans2',ans3='$ans3',ans4='$ans4',true_ans='$anstrue' where que_id='$id'";	
mysqli_query($con,$query);
echo "records updated";	
	
	}



?>
<form name="form1" method="post" onSubmit="return check();">
  <table class="table table-striped">

 <tr>
        <td height="26"><div align="left"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
	    <td><textarea class="form-control"name="addque" cols="60" rows="2" id="addque">
		<?php echo $res['que_desc']; ?>
		</textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Answer1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input class="form-control"value="<?php echo $res['ans1']; ?>" name="ans1" type="text" id="ans1" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer2 </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" value="<?php echo $res['ans2']; ?>" name="ans2" type="text" id="ans2" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer3 </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" value="<?php echo $res['ans3']; ?>" name="ans3" type="text" id="ans3" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer4</strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans4"value="<?php echo $res['ans4']; ?>" type="text" id="ans4" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter True Answer </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control"value="<?php echo $res['true_ans']; ?>" name="anstrue" type="text" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="update" value="UPDATE" ></td>
    </tr>
	</table>
</form>
<p>&nbsp; </p>