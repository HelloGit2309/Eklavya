<style type="text/css">


</style>
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
	 echo "<div align=\"right\"><strong><a href=\"login.php\">Admin Home</a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
		</td>
	
  </tr>
  
</table>
