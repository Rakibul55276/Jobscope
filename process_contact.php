<?php
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['email'])|| empty($_POST['query']))
	{
		$msg[]="one of your field is empty";
	}

	if(!empty($msg))
	{
		echo "<b> errors:</b><br>";
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
		
		$nm=$_POST['nm'];
		$email=$_POST['email'];
		$query=$_POST['query'];
		
		$q="INSERT INTO contact(cont_fnm,cont_email,cont_query) VALUES ('$nm','$email','$query')";
		   
		mysqli_query($con,$q)or die("wrong query");
		mysqli_close($con);
		header("location:contact.php");
	}
?>