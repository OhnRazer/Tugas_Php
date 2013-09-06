<html>
<head>
<title> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Lihat Data</title>
<link rel="Shortcut icon" href="http://localhost/biodata/icon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="halaman style.css" type="text/css" rel="stylesheet"></link>
<link href="halaman menu.css" type="text/css" rel="stylesheet"></link>
</head>
<body background="http://localhost/tugas/2.jpg">
<div class="frame_halaman">
<div class="header">
</div>
<div id="menu">

<ul>
<li><a href="index.php">Home </a></li>
<li><a href="profil.php">Profil</a></li>
<li><a href="guest_book.php">Guest Book</a></li>
<li><a href="about.php">About</a></li>
<li><a href="lihatdata.php">Lihat Data</a></li>
</ul>
</div>

<form name="index" action="http://localhost/tugas/index.php" method="POST">
<table class="halaman" border="0">
<tr>
<td class="kiri">
<pre>
<center>
		<tr>
			<td>Nama</td>
			<td>Email</td>
			<td>Alamat</td>
			<td>Biografi</td>
		</tr>
</td>

<?php

$koneksi = mysql_connect("localhost","root","");

mysql_select_db("guestbook",$koneksi);

$query = mysql_query("select *from guestbook",$koneksi) or die (mysql_error());
$no='1';
$warna='cream';
while($a = mysql_fetch_array($query)){
?>	
	<tr size="3" style='background-color: <?=$warna;?>'>
		<td><?php echo $a['nama'];?></td>
		<td><?php echo $a['email'];?></td>
		<td><?php echo $a['alamat'];?></td>
		<td><?php echo $a['Biografi'];?></td>
	</tr>
</center>
<?php 
$no++;
}
?>
<div id="menu_titel">
<div id="set_menu_titel">
</td>
</tr>
</table>
<div class="footer">
<center> © 2013 Ramdhani Design Corp. All right reserved.<br>
Ramdhani
</div>
</body>
</html>