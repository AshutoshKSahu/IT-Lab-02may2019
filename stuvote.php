<?php
include('config.php');
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$sql="select * from login";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
	$profile=$row['profile'];
	$uid2=$row['uid'];
	$pass2=$row['password'];
	$voted=$row['voted'];
	if($uid==$uid2 && $pass==$pass2)
	{
		if($profile==2)
		{
			session_start();
			$_SESSION['uidd']=$uid;
			header("location:vote.php");
			exit;
		}
		else if($profile==1)
		{
			header("location:admin.html");
			exit;
		}
		else
		{
			session_start();
			$_SESSION['uidd']=$uid;
			header("location:candivote.php");
			exit;
		}
	}
	else
	{
		echo "Please enter correct uid and password";
	}
}
?>
