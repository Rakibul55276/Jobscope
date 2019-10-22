<?php

	if(!(strtoupper(substr($_FILES['resume']['name'],-5))=='.DOCX'))
	{
		echo "wrong file type";
	}
	
	
	
	
	if(empty($_POST))
	{
		exit;
	}
	$msg=array();
	if(empty($_POST['nm'])|| empty($_POST['gender'])|| empty($_POST['email'])|| empty($_POST['addr'])||
	empty($_POST['ph'])|| empty($_POST['mobile'])|| empty($_POST['cl'])|| empty($_POST['cas'])||
	empty($_POST['cindustry'])||empty($_POST['quali'])|| empty($_POST['profile']) || empty($_POST['pwd'] ))
	{
		$msg[]="one of your field is empty";
	}
	if(strlen($_POST['pwd'])<6)
	{
		$msg[]="please enter atlist 6 digit password";
	}

	if(strlen($_POST['ph'])!=10)
	{
	
		$msg[]="please enter 10 digit number";

	}
	if(strlen($_POST['mobile'])!=10)
	{
		$msg[]="please enter 10 digit number";
	}
	if(!is_numeric($_POST['cas']))
	{
		$msg[]="only numeric valueis valid";
	}
	if(empty($_FILES['resume']['name']))
	{
		$msg[] = "Plz select a file";
	}
	
	if($_FILES['resume']['error']>0)
	{
		$msg[] = "error uploading file";
	}
	
	if(file_exists("uploads/".$_FILES['resume']['name']))
	{
		$msg[] = "this file is already uploaded.";
	}
	

	if(!(substr($_FILES['resume']['name'],-5))=='.docx')
	{
		$msg[] = "wrong file type";
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
		
		//$_SESSION['eeid']=$id;
		
		
		$id=$_POST['id'];
		$nm=$_POST['nm'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$mobile=$_POST['mobile'];
		$cl=$_POST['cl'];
		$cas=$_POST['cas'];
		$cindustry=$_POST['cindustry'];
		$quali=$_POST['quali'];
		$profile=$_POST['profile'];
		$pwd=$_POST['pwd'];
		move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
		$path = "uploads/".$_FILES['resume']['name'];
		
		
$q="UPDATE employees SET ee_resume='$path',ee_pwd='$pwd',ee_fnm='$nm',ee_email='$email',ee_add='$addr',ee_phno='$ph',ee_mobileno='$mobile',ee_current_location='$cl',ee_annualsalary='$cas',ee_current_industry='$cindustry',ee_qualification='$quali',ee_profile='$profile' WHERE ee_id= '$id'";
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