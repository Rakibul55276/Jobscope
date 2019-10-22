<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}

if(empty($_POST))
{
	exit;
}
$msg=array();

if(empty($_POST['name']))
{
	$msg[]="One of the field is empty";
}

if(!empty($msg))
{
	echo "<b>Errors:</b><br>";
	foreach($msg as $k)
	{
		echo "<li>".$k;
	}
}
else
{
$con = mysqli_connect('localhost','root','','jobscope');

if(!$con)
{
	echo'Check Server to Reconnect';
}
if(!mysqli_select_db($con,'jobscope'))
{
	echo'Can not Select Refered Database';
}
$name=$_POST['name'];
$q="DELETE FROM categories WHERE cat_nm='$name'";
mysqli_query($con,$q) or die ("wrong query");
mysqli_close($con);
header("location:category.php");
}