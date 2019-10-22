<?php session_start();
if(empty($_POST))
{
	exit;
}

if(empty($_POST['unm'])||empty($_POST['pwd'])||empty($_POST['cat']))
{
	echo "You must enter all fields";
}
if($_POST['cat']=='employee')
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
	
	$q = "SELECT * FROM employees WHERE ee_fnm = '".$_POST['unm']."' ";
	
	$res = mysqli_query($con,$q) or die("wrong query");
	
	
	
	$row = mysqli_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['ee_pwd'])
		{
			
			//login
			$_SESSION = array();
			
			
			$_SESSION['E_gender']=$row['ee_gender'];
		    $_SESSION['E_email']= $row['ee_email'];
			$_SESSION['unm']=$row['ee_fnm'];
			$_SESSION['eeid']=$row['ee_id'];
			$_SESSION['cat']='employee';
			$_SESSION['status']=1;
			$_SESSION['employee']=1;
			
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password";
		}
	}
	else
	{
		echo "No Such User";
	}
	
}	
	
if($_POST['cat']=='employer')
{


	$con = mysqli_connect('localhost', 'root', '', 'jobscope');


if(!$con)
{
	echo'Check Server to Reconnect';
}
if(!mysqli_select_db($con,'jobscope'))
{
	echo'Can not Select Refered Database';
}
	
	$q = "SELECT * FROM employers WHERE er_fnm = '".$_POST['unm']."'";
	
	$res = mysqli_query($con,$q) or die("wrong query");
	
	$row = mysqli_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['er_pwd'])
		{
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['er_fnm'];
			$_SESSION['eid']=$row['er_id'];
			$_SESSION['E_company']=$row['er_company'];
		    $_SESSION['E_email']= $row['er_email'];
			$_SESSION['cat']='employer';
			$_SESSION['status']=1;
			$_SESSION['employer']=1;
			header("location:index.php");
		}
		else
		{
			echo "Wrong Password .";
		}
	}
	else
	{
		echo "No Such User";
	}
}

if($_POST['cat']=='admin')
{


	$con = mysqli_connect('localhost', 'root', '', 'system');

if(!$con)
{
	echo'Check Server to Reconnect';
}
if(!mysqli_select_db($con,'jobscope'))
{
	echo'Can not Select Refered Database';
}
	
	$q = "SELECT * FROM admin WHERE username = '".$_POST['unm']."' ";
	
	$res = mysqli_query($con,$q) or die("wrong query");
	
	
	
	$row = mysqli_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['password'])
		{
			
			//login
			$_SESSION = array();
			
			$_SESSION['unm']=$row['username'];
			$_SESSION['cat']='admin';
			$_SESSION['status']=1;
			$_SESSION['admin']=1;
			
			
			
			header("location:admin/index.php");
		}
		else
		{
			echo "Wrong Password";
		}
	}
	else
	{
		echo "No Such User";
	}
	
}
?>