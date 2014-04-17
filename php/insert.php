<?php
$link = mysql_connect("localhost","root","root","0");
mysql_select_db("data",$link);
$username = $_POST['username'];
$password= $_POST['password'];
$exec = "insert into user values('$username','$password')";
mysql_query($exec);
mysql_close($link);
header("Location:index.php");
?>