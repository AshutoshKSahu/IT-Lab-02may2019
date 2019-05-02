<?php
include('config.php');
session_start();
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$sql="select vcount from candidate where cid='$cid'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_row($result);
$vcount=$row['0'];

$sql3="select count(cid) as 'total' from declaree";
$res=mysqli_query($link,$sql3);
$row=mysqli_fetch_assoc($res);
$r=$row['total'];
if($r>=1)
{
$sql4="select * from declaree";
$result=mysqli_query($link,$sql4);
$row2=mysqli_fetch_array($result);
$ci=$row2['cid'];
$cn=$row2['cname'];
$vc=$row2['vcount'];
	echo "<center>Winner Already declared!!<center><br><br>";
	echo "<center><h1>Result</h1></center><br><br>";
echo "<center><h2>Winner is:$cn</h2></center>";
echo "<center>Candidate Id:".$ci."<br><br>";
echo "Candidate Name:".$cn."<br><br>";
echo "No. of Votes:";
echo "$vc</center>";

}
else
{
$sql2="insert into declaree (cid,cname,vcount) values ('$cid','$cname',$vcount)";
$result2=mysqli_query($link,$sql2);
echo "<center><h1>Result</h1></center><br><br>";
echo "<center><h2>Winner is:$cname</h2></center>";
echo "<center>Candidate Id:".$cid."<br><br>";
echo "Candidate Name:".$cname."<br><br>";
echo "No. of Votes:";
echo "$vcount</center>";
	
}

?>
<center>
<br><br>
<input type=button value=Back onclick="location='admin.html'">
</center>
