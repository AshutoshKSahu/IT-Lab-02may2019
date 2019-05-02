<html>
<body>
<center><h1>List of Candidates</h1><br><br></center>
<?php
include('config.php');

$sql="select cname from candidate";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
$cname=$row['cname'];
echo "<form action=voted.php method=post><input type=radio name=candi value=$cname> $cname <br><br>";
 }
 session_start();
 $uid=$_SESSION['uidd'];
 
?>
<center>

<input type=submit value=Vote>
</form>
</center>
</body>
</html>
