<?php
include('config.php');
?>
<html>
    <head>
    </head>
	<body style="background-color:powderblue;">
    <body>
	<center>
	 <img src="kalkulatorr.png" alt="Calculator" class="calculator">
<p><font face="aharoni" color="white">SMART CALCULATOR</font></p>
<form id="form" name="form" method="post" action="pros_insert.php"
<br><br>
<center>
<h1>STATUS PELANGGAN</h1>
<table>
<tr>
<th>Bil</th>
<th>Nama</th>
<th>Hasil</th>
<th>Catatan</th>

<?php
$no=1;
$query=mysql_query("select * from data");
while($result=mysql_fetch_array($query)){?>

<tr>
<td><?php echo $no++;?></td>
<td><?php echo $result['nama'];?></td>
<td><?php echo $result['hasil'];?></td>
<td><?php echo $result['catatan'];?></td>
</tr>

</table>
</center>
</html>