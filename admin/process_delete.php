<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
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
$q="SELECT FROM contact WHERE cont_fnm='".$_GET['cat']."'";
mysqli_query($con,$q) or die ("wrong query");
mysqli_close($con);
header("location:contact.php");
?>