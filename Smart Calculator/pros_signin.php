<?php
include('config.php');
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<?php
session_start();
$username =$_POST['uname'];
$password =$_POST['psw'];
if($username&&$password)
{
$query=mysql_query("select * from table_login where username='$username'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
	echo "$dbpassword";
	}
if($username==$dbusername && $password==$dbpassword)
{
	$_SESSION['username']=$username;
	echo "<script type='text/javascript'>alert('Login Berjaya');
	window.location='calculate.html';
	</script>";
	
} 
else
{ 
 echo ("Something Wrong With Your ID. \n <a href='signin.php'>Login Again</a>");
}
}// if 2
else{
	die ("Theft Not Allowed. Try Again");
}//if 1
}
else
{
	echo"Please Fill In The Blank<a href='signin.php'>Login Again</a>";
}
?>
</body>
</html>