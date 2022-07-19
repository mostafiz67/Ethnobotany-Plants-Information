<?php
include 'functions.php';
	if(loogedin())
	{
		header("Location: admin_dashboard_view.php" );
		exit();
	}

  $username=$_POST['username'];
  $password=$_POST['password'];
  $remember = isset($_POST['remember']);	 
  
  
if($username && $password)
{
  
  $login=mysql_query("select * from admin  where username='$username'");
  while($row=mysql_fetch_assoc($login))
  {
	$db_password = $row['password'];
	if($password==$db_password)
		$loginok=TRUE;
	else
		$loginok=FALSE;
		
	if($loginok==TRUE)
	{
		if($remember=="on")
			setcookie("username",$username,time()+7200);
		else if($remember=="")
			$_SEESION['username']=$username;
		header('location: admin_dashboard_view.php');
		exit();
			
	}
	else
	{
		include 'index.php';
		echo'<font color="red">Try again,User Name and Password not matched !</font>';
		//die("not work");
	}
  }
               
}
else
	{		
		  include 'index.php';
		  echo'<font color="green">Try again,User Name and Password not matched !</font>';
		  //die("not work");
	}

?> 

