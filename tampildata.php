

<html>
<head>
<title>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Tampil Data</title>
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
<li><a href="tampildata.php">Lihat Data</a></li>
</ul>
</div>
<br>

<pre>
<center>

	<table border="3" width="500px">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Alamat</td>
			<td>Biografi</td>
		</tr>
<?php

$koneksi = mysql_connect("localhost","root","");

mysql_select_db("guestbook",$koneksi);

$query = mysql_query("select *from guestbook",$koneksi) or die (mysql_error());
$no='1';
$warna='silver';
while($a = mysql_fetch_array($query)){
if ($no%2==1){
		$warna='lavender';
	}
	else{
	$warna='brown';
	}
?>	
	<tr style='background-color: <?=$warna;?>'>
		<td><?php echo $no; ?></td>
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
</pre>
<br>
<br>
<center><a href="http://localhost/tugas/guest_book.php"><font face="Lucida Bright" size="3">Tambah Data</font></a></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</table>
</body>
</html>	