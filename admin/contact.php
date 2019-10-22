<?php session_start();
if(!(isset($_SESSION['admin'])))
{
	header("location:../index.php");
}
?>

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
		<div class="post">
			<h1 class="title">Recent Contact</h1>
			<p class="byline"><small></small></p>
			
			<div class="entry">
			<br>
			<table border="1" width="100%">
		
			<tr>
			<td width="25%"><b>NAME</b>
			<td width="65%"><b>QUERY</b>
			<td width="10%"><b>DEL</b>
			</tr>
			
			
			
			<?php
			$con = mysqli_connect('localhost','root','','jobscope');

if(!$con)
{
	echo'Check Server to Reconnect';
}
if(!mysqli_select_db($con,'jobscope'))
{
	echo'Can not Select Refered Database';
}
			
			$q="SELECT * FROM contact";
			$res=mysqli_query($con,$q)or die("can not connect");
			
			while($row=mysqli_fetch_assoc($res))
			{
				echo'
						<tr>
						<td>
						'.$row['cont_fnm'].'<br><small>'.$row['cont_email'].'</small><br><br>
						<td>'.$row['cont_query'].'
						<td><a href="process_delete.php?cat='.$row['cont_fnm'].'"><img src = "delete.png"></a>
						</tr>
			
				';
			}
			?>
			</table>
			
			</div>
			<p class="meta"></p>
		</div>
		
	</div>
	<!-- end content -->
	
<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
