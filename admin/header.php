<!-- Bootsrap Scripts -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="style.css"> -->
<link href="admin_css/testupdate.css" rel="stylesheet">
<style type="text/css">
/* <link rel="stylesheet" href="css/bootstrap.min.css"/> */


</style>
<table>
<tr>
    <!-- <td width="10%">
     <img border="0" src="h.jpg" width="100%" height="150" align="right"></td> -->
  </tr>

</table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login'];
  error_reporting(1);
  ?>
  </td>
    <td>

<?php
	if(isset($_SESSION['alogin']))
	{

	 echo "<h4 class='text-success text-center btn btn-success'>
	 <div align=\"left\">
	 <a style='color:#00ff00' href=\"login.php\">Admin Home</a>&emsp;&emsp;
	 <a style='color:#00ff00' href=\"viewsub.php\">  View Subject</a>&emsp;&emsp;
		<a style='color:#00ff00' href=\"testview.php\"> View Test</a>&emsp;&emsp;
	 <a style='color:#00ff00' href=\"questiondelete.php\">View Question</a>&emsp;&emsp;
	 <a style='color:#00ff00' href=\"showuser.php\"> View User</a></strong>
	 &emsp;
	 <strong></strong><a style='color:#00ff00' href=\"signout.php\">Signout</a>&emsp;
	 </div></h4>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
		</td>

  </tr>


</table>

  
</table>

