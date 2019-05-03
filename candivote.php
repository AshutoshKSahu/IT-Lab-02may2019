<html>
<body>
<div style="background-color:lightgreen;border:2px solid black;padding:10px;">
<center>
<h1>Check votes</h1><br><br>
<?php
include('config.php');
session_start();
$uid=$_SESSION['uidd'];
$sql="select vcount as 'vote' from candidate where cid='$uid'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$row2=$row['vote'];
//while($row=mysqli_fetch_row($result))
//{
	//$cid=$row['cid'];
	//$cname=$row['cname'];
	//$vcount=$row['vcount'];
	$sql3="select count(cid) as 'total' from declaree";
	$res=mysqli_query($link,$sql3);
	$row3=mysqli_fetch_assoc($res);
	$r=$row3['total'];
	if($r==1)
	{ 
		echo "Your total vote count is:$row2<br>";
	}
	else
	{
		echo "Result not declared !!";
	}
//}
?>
<br><br>
<input type=button value=Logout onclick="location='login.html'">
</center>
</div>
</body>
</html>
