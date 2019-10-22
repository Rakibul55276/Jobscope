<?php session_start();
if(!(isset($_SESSION['admin'])))
{
	header("location:../index.php");
}

	$con = mysqli_connect('localhost','root','','jobscope');

if(!$con)
{
	echo'Check Server to Reconnect';
}
if(!mysqli_select_db($con,'jobscope'))
{
	echo'Can not Select Refered Database';
}
	
	$q="SELECT * FROM jobs WHERE j_active=0";
	$res=mysqli_query($con,$q);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Flowerily 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20090906

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php
		
		include("includes/search.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					<h2 class="title"><center><font color ="red" >Verify</center></font></a></h2>
					<p class="meta"></p>
					<div class="entry">
					<table border="0" width="100%">
					<tr>
						<td>No</td>
							<td>Job Title</td>
							<td>Category</td>
							<td>Accept</td>
							<td>DELETE</td>
					</tr>
						<?php
						$count=1;
						while($row=mysqli_fetch_array($res))
							{
								echo '<tr>
										<td>'.$count.'</td>
										<td> '.$row['j_title'].'</td>
										<td>'.$row['j_category'].'</td>
										<td><a href="process_verify.php?id='.$row['j_id'].'">Accept</a></td>
										<td><a href="process_verify_delete.php?id='.$row['j_id'].'">DELETE</a></td>
									</tr>';
									$count++;
							}
						
						?>
						</table>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->

</body>
</html>
