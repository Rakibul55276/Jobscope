<?php
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['cnm'])|| empty($_POST['addr'])||
	empty($_POST['ph'])|| empty($_POST['email'])|| empty($_POST['profile']) ||empty($_POST['pwd']))
	{
		$msg[]="one of your field is empty";
	}

	if(strlen($_POST['pwd']<6))
	{
		$msg[]="please enter atlist 6 digit password";
	}
	if(strlen($_POST['ph'])!=10)
	{
	
		$msg[]="please enter 10 digit number";

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
		$id=$_POST['id'];
		$nm=$_POST['nm'];
		$cnm=$_POST['cnm'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$email=$_POST['email'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];
		
		
		$q="UPDATE employers SET er_fnm='$nm',er_pwd='$pwd',er_company='$cnm',er_add='$addr',er_ph='$ph',er_email='$email',er_company_profile='$profile' WHERE er_id = '$id'";
if(!mysqli_query($con,$q))
{
	echo'Update UnSuccessfull';
}
else{
	echo'<h1>Successfully Updated...Re-login please...</h1>';
	session_start();
    $_SESSION=array();
	
	header("Refresh:2;url=index.php");	  		
}
	   
		
	}
?>