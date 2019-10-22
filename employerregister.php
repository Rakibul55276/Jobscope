<?php session_start();
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
					
					<h2 class="title">REGISTER</a></h2>
					<p class="meta">Please fill up the form</p>
					<div class="entry">
						<form action="process_employer_register.php" method="post">
							FULL NAME <br> <input type="text" name="nm" style="width:200px;">
							<br><br> PASSWORD <br> <input type ="password" name="pwd">
							<br><BR> COMPANY NAME <BR> <INPUT TYPE = "TEXT" name="cnm" style="width:200px;">
							<BR><BR> COMPANY ADDRESS <BR> <TEXTAREA name="addr" style="width:200px;"></TEXTAREA>
							<br><br> PHONE NUMBER <br><input type="text" name="ph" style="width:200px;">
							<BR><BR> EMAIL <BR> <INPUT TYPE = "TEXT" name="email" style="width:200px;">
							<BR><BR>COMPANY PROFILE<BR> <TEXTAREA name="profile" style="width:200px;"></TEXTAREA>							
							<center><br><br> <input type="submit" value="submit"></center>			
						</form>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
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
