<?php
include('config.php');
?>
<head>
<title> Senarai Pelanggan </title><body>
<form id="form" name="form" method="post" action="pros_insert.php">
<style>
  
body {
  
  font-family:"calibri";
}
 #header{
  height: 355px;
  font-size: 20px;
  
  width: 100%;
  
 }
  #menu{
  border: 1px solid grey;
  
 }
  #kandungan{
  
  height: 100%;
  
 }
  #footer{
 
  height: 55px;
  text-align: center;
 
 }
 #wrapper {
  width: 100%;
  margin: 2px;
 }
#menu ul{
  list-style: none;
    margin: 0;
    padding: 0;
}

#menu ul li{
  display: inline-table;
}

#menu ul li a{
  text-decoration:none;
  display: block;
  line-height: 40px;
  padding: 0 10px;
}

#menu ul li:hover
{
  background-color: #4CAF50;
}

.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.hover, .dropdown:hover .dropbtn {
    background-color: #4CAF50;
}

li.dropdown {
    display: inline-block;
    float: right;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:#4CAF50}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<body>
  <div id="wrapper">

<div id="header">
  <center>
<div id="kandungan">
<style>
table,tr,th,td
{
  border: 1px solid grey;
  padding: 8px;
}
table
{
  border-collapse:collapse;
}

td {
  text-align: center;
}

tr:hover {
  background-color: #ddd;
}

th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

.btn {
    background-color: grey;
    color: grey;
    border: 2px solid grey;
    padding: 7px;
    border-radius: 10px;
}

.btn a {
  text-decoration: none;
  color: black;
}

.btne {
  background-color: #FFFF00;
    color: #FFFF00;
    border: 2px;
    padding: 5px;
    border-radius: 5px;
}

.btnd {
  background-color: red;
    color: red;
    border: 2px;
    padding: 5px;
    border-radius: 5px;
}

table td button a{
  text-decoration: none;
  color: black;
}
.btn{
  padding: 10px;
  font-size: 15px;
  color:white;
  background: #5F9EA0;
  border-radius: 5px;
}

</style>
<br>
<center>
<h1>STATUS PELANGGAN</h1>
<table>
  <tr>
    <th>Bil</th>
    <th> Nama </th>
        <th> Hasil</th>
         <th> Catatan </th>
      <th>Tindakan</th>
  </tr>

<?php
$no=1;
$query=mysql_query("SELECT * FROM data ");
while($result=mysql_fetch_array($query)){?>

  <tr>
    <td><?php echo $no++;?></td>
     <td><?php echo $result['nama'];?></td>
    <td><?php echo $result['hasil'];?></td>
    <td><?php echo $result['catatan'];?></td>
</tr>
        <?php
      }
        ?>


</table><p>
</center>
<br>
</div>
<div id="footer"> 
</div>
</center></form>
</div>
</body>
</html>