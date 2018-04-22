<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("calcu", $connection);
mysql_query($db);
session_start();// Starting Session
// Storing Session
$username=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User

$ses_sql=mysql_query("select username from loginpengguna where username='$username'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];

if(!isset($login_session))
{
mysql_close($connection); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}

?>