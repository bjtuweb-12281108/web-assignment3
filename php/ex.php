<?php
error_reporting(E_ALL ^ E_NOTICE);
$conn=mysql_connect("localhost","root","root","0");
 if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("data", $con);
$name = $_POST['name'];
$password = $_POST['password'];
$result = mysql_query("SELECT * FROM db ");
$n = 0;
while($row = mysql_fetch_array($result))
{
	if($row['name'] == $name)
	{
		if($row['password'] == $password)
		{	
			header("location:login.php");
			$n=1;
			break;
		}
	}
}

if($n==0)
{
   echo "用户名不存在或密码错误";
   header("location:enroll.php");
}
mysql_close($con);
?>
