

<style type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</style>
<table>
<tr>
    <td width="10%">
     <img border="0" src="h.jpg" width="100%" height="150" align="right"></td>
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
	 <div align=\"left\"><strong>
	 <a style='color:#00ff00' href=\"viewsub.php\">  View Subject</a>&emsp;&emsp;
		<a style='color:#00ff00' href=\"testview.php\"> View Test</a>&emsp;&emsp;  
	 <a style='color:#00ff00' href=\"questiondelete.php\">View Question</a>&emsp;&emsp;
	 <a style='color:#00ff00' href=\"showuser.php\"> View User</a></strong>
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 <strong><a style='color:#00ff00' href=\"login.php\">Admin Home</a>&emsp;
	 <a style='color:#00ff00' href=\"signout.php\">Signout</a></strong>&emsp;&emsp;
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
