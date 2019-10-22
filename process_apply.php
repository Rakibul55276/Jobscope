<?php session_start();
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
	$q="INSERT INTO applicants (a_uid,a_jid) VALUES (".$_SESSION['eeid'].",".$_GET['jid'].")";

	mysqli_query($con,$q) or die("wrong query");
	header("location:index.php");
	
?>