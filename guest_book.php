<script language="javascript" type='text/javascript'>

function validasi(){
 
    var nama = document.getElementById('nama');
    var email = document.getElementById('email');
    var alamat = document.getElementById('alamat');
    var biografi = document.getElementById('Biografi');
 
    if(notEmpty(nama, "Nama Tidak Boleh Kosong!")){
        if(notEmpty(email, "email tidak boleh kosong!")){
			if(notEmpty(alamat, "alamat tidak boleh kosong!")){
				if(notEmpty(biografi, "biografi tidak boleh kosong!")){
				return true;
				}
            }
        }
    }
	return false;
function notEmpty(elem, helperMsg){
    if(elem.value.length == 0){
        alert(helperMsg);
        elem.focus();
        return false;
    }
    return true;
}
 
function isNumeric(elem, helperMsg){
    var numericExpression = /^[0-9]+$/;
    if(elem.value.match(numericExpression)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
 
function isAlphabet(elem, helperMsg){
    var alphaExp = /^[a-zA-Z]+$/;
    if(elem.value.match(alphaExp)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
 
function isAlphanumeric(elem, helperMsg){
    var alphaExp = /^[0-9a-zA-Z]+$/;
    if(elem.value.match(alphaExp)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
 
function lengthRestriction(elem, min, max){
    var uInput = elem.value;
    if(uInput.length >= min && uInput.length <= max){
        return true;
    }else{
        alert("Harap isikan di antara " +min+ " dan " +max+ " karakter");
        elem.focus();
        return false;
    }
}
 
function madeSelection(elem, helperMsg){
    if(elem.value == "Pilih Status"){
        alert(helperMsg);
        elem.focus();
        return false;
    }else{
        return true;
    }
}
 
function emailValidator(elem, helperMsg){
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if(elem.value.match(emailExp)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
</script>
 
<html>
<head>
<title> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Guest Book</title>
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
<pre>
<?php
?>
</pre>
<ul>
<li><a href="index.php">Home </a></li>
<li><a href="profil.php">Profil</a></li>
<li><a href="guest_book.php">Guest Book</a></li>
<li><a href="about.php">About</a></li>
<li><a href="tampildata.php">Lihat Data</a></li>
</ul>
</div>

<form name="index" action="http://localhost/tugas/prosesinput.php" method="POST" onSubmit="return validasi()"><br>
<table class="halaman" border="0">
<pre>
<tr>
<td class="kiri">
<br>
<br>
<br>
<br>
<br>
<font size="4" face="Lucida Bright">Nama &nbsp &nbsp: <input type="text" name="nama" id="nama" maxlength="40" size="85"/></font><br><br>
<font size="4" face="Lucida Bright">Email &nbsp &nbsp: <input type="text" name="email" id="email" maxlength="50" size="85"/></font><br><br>
<font size="4" face="Lucida Bright">Alamat &nbsp: <input type="text" name="alamat" id="alamat" maxlength="40" size="85"/></font><br><br>
<font size="4" face="Lucida Bright">Biografi	: <input type="textarea" name="biografi" id="Biografi" maxlength="500" size="85"/></font><br><br>
<font size="5" face="Times New Roman"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" height="50" width="50" value="Input"/> <input type="reset" size="50" value="Clear"/><br>
</pre>
<br>
<br>
<br>
<br>
</td>
<td class="kanan">
<div id="menu_titel">
<div id="set_menu_titel">
Last Posting
</div>
- <a href="https://www.facebook.com/dhani.RPL.3">My Facebook</a><br>
- <a href="https://www.twitter.com/">My Twitter</a><br>
- <a href="https://www.Anonymousramdhani.blogspot.com">My Blogger</a><br>
</td>
</tr>
</table>
<div class="footer">
<center> © 2013 Ramdhani Design Corp. All right reserved.<br>
Ramdhani
</div>

</body>
</html>