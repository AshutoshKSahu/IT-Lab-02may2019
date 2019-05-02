<?php
include('config.php');
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$sql="insert into candidate (cid,cname,vcount) values ('$cid','$cname',0)";
if(mysqli_query($link,$sql))
{
	echo "Candidate Added";
	header("location:admin.html");
	exit;
}
?>
