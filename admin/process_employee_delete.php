<?php
	if(empty($_GET))
	{
		header("location:index.php");
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
		
		$q=" DELETE FROM employees WHERE ee_id=".$_GET['id'];
		
		mysqli_query($con,$q);
		
		header("location:verify.php");	
?>