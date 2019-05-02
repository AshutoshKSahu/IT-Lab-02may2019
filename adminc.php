<?php
include('config.php');
$sql="select cid,cname,vcount from candidate";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
	$cid=$row['cid'];
	$cname=$row['cname'];
	$vcount=$row['vcount'];
	echo "Candidate Id:".$cid. "  Candidate Name:".$cname. "  Vote Count:".$vcount."<br>";
}


?>
<center>
<br><br>
<input type=button value=Back onclick="location='admin.html'">
</center>
