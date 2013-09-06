<html>
<head>
<title>Koneksi Database</title>
</head>
<body>

<?php
	
	$koneksi = mysql_connect("localhost","root","");
	
		if ($koneksi){
			
			mysql_select_db("guestbook",$koneksi) or die ("Database yang anda minta tidak ada!".mysql_error());
		}
		
		else {
		
			echo "Gagal Menyambung ke database!";
			
		}
?>

</body>
</html>