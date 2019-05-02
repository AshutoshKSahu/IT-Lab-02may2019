<?php
include('config.php');
session_start();
$uid=$_SESSION['uidd'];
$sql4="select voted as 'vote' from login where uid='$uid'";
$res=mysqli_query($link,$sql4);
$row=mysqli_fetch_assoc($res);
$row2=$row['vote'];

if($row2==1)
{
echo "You have already voted<br>";
echo "<input type=button onclick=location='login.html' value=Logout>";
}
else
{
$val=$_POST['candi'];
$sql2="update candidate set vcount=vcount+1 where cname='$val'";
$result1=mysqli_query($link,$sql2);
echo "You've voted successfully!";

$sql3="update login set voted=1 where uid='$uid'";
mysqli_query($link,$sql3);
echo "<input type=button onclick=location='login.html' value=Logout>";
}
?>
