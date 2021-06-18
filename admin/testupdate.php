<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- <link href="quiz.css" rel="stylesheet" type="text/css"> -->
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
<link rel="stylesheet" href="admin_css/testupdate.css">
<!-- Bootsrap Scripts -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


</head>
<body>
<?php
include("header.php");
include("../database.php");
extract($_REQUEST);
 $id=$_GET['test_id'];
$q=mysqli_query($con,"select * from mst_test where test_id='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update mst_test SET test_name='$testname',total_que='$totque' where test_id='$id'";
mysqli_query($con,$query);
echo "records updated";

	}



?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="updateForm">
  <form  name="form1" method="post" onSubmit="return check();">
  <h2 class='heading'>Update TEST</h2>
  <div class="testForm">
    <div class="testName">
      <label id="testName"> Enter Test Name </label><br>
      <input class="form" value="<?php echo $res['test_name']; ?>" name="testname" type="text" id="testname">
      <br>
    </div>
    <div  >
      <label id="questions">Enter Total Question </label><br>
      <input class="form" value="<?php echo $res['total_que']; ?>" name="totque" type="text" id="totque">

    </div>

    </div>
      <input class="btn btn-dark" type="submit" name="update" value="Update" >


</div>
</meta>



</form>
<p>&nbsp; </p>
</body>
</html>



<!-- <table class="myTable"> -->

<!-- <tr class="row"> -->
      <!-- <td > -->
      <!-- <div class="form"> -->
        <!-- <div class="block-container"> -->
          <!-- <strong> Enter Test Name </strong> -->
        <!-- </td> -->
        <!-- <td>&nbsp;</td> -->
    <!-- <td> -->
      <!-- <input class="form-control" value="<?php echo $res['test_name']; ?>" name="testname" type="text" id="testname"> -->
    <!-- </td> -->
    <!-- </tr> -->
    <!-- <tr  class="row" > -->
      <!-- <td > -->
        <!-- </div> -->

      <!-- <div class="block-container"> -->
        <!-- <strong>Enter Total Question </strong> -->
      <!-- </td> -->
      <!-- <td>&nbsp;</td> -->
      <!-- <td> -->
        <!-- <input class="form-control" value="<?php echo $res['total_que']; ?>" name="totque" type="text" id="totque"> -->
      <!-- </td> -->
    <!-- </tr> -->
    <!-- <tr  class="row"> -->
      <!-- <td></td> -->
      <!-- <td>&nbsp;</td> -->
      <!-- <td> -->
      <!-- </div> -->
      <!-- </div> -->


      <!-- <input class="btn btn-primary" type="submit" name="update" value="update" > -->
    <!-- </td> -->
  <!-- </tr> -->
<!-- </table> -->
