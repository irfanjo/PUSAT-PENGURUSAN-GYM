<html>
<?php 
include('can.php');
isset($_SESSION['login_user']); 
?>
<head>
<meta charset="UTF-8">

<center><body bgcolor="">
<center><a href="index.php" target="_top"><h3>Halaman Utama</h3></a></center>
<br>
<form id="form" name="form" method="post" action="pros_login.php">

<h1><center> Log In Pengguna </center></h1>
<h4><center> Sila Masukkan Nama Pengguna dan Kata Laluan. </center></h4>
<center>
<table width="400" border="0">
<tr>
<th scope="col">Username:</th>
<th scope="col"><div align="left">
<input type="text" name="username" placeholder="username" size="20"/>
</div>
</th>
</tr>
<tr>
<th scope="col">Password:</th>
<th scope="col"><div align="left">
<input type="password" name="password" placeholder="password"  size="10"/>
</div>
</th>
</tr>
</table>
<br>
<input type="submit" name="submit" value="submit">
<input type="submit" name="submit" value="reset">
<br>

</form>
</body>
</center>
</html>