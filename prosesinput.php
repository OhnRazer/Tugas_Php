<?php

include("koneksi.php");
 
		$nama			= $_POST['nama'];
		$email			= $_POST['email'];
		$alamat			= $_POST['alamat'];
		$biografi 		= $_POST['biografi'];
		
		$query			= "insert into guestbook values ('$nama','$email','$alamat','$biografi')";
		$proses			= mysql_query($query);
		
if ($proses) {
	echo "Data Berhasil Di Simpan";	
}
else
{
	echo "Data gagal Di Simpan";
	echo mysql_error();
}
?>
<a href="http://localhost/tugas/guest_book.php"><br><br>Kembali</a>	