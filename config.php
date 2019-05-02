<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="votedb";
$link=mysqli_connect($servername,$username,$password,$dbname)
or die("Could not connect to database.");
mysqli_select_db($link,$dbname)
or die("Could not select database.");
?>
