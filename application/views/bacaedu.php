<html>
	<head>
	<title> Artikel Detail</title>
	<link		rel="stylesheet"		type="text/css"
	href="style/style1.css"/>
	

	</head>
	<body>
	
	<div id="menu-content">
	<div id="menu">
	<div align="center">
	<Image src="1.jpg" height="30%" width"50%"> 
	</div>
	<br>
		
		<html>
		<head>
		<title>Artikel Detail</title>
		</head>
		<body>
		<table width="600" border="0" align="center">
		<?php
		$perintah = "SELECT * FROM edukasi"; 
		$hasil = mysql_query($perintah); 
		while ($row = mysql_fetch_array($hasil)) { 
 
		echo $row['judul']."<br>"; 
 
 }
 ?>
		<form action="simpan1.php" method="post" name="form1" target="_self">
		<table width="411" border="0">
		<tr>
		<label><h3>Berikan Komentar Anda :</h3><br>
		
		<table>
        <tr>
        <td width="133">Nama</td>
		<td width="253"><label>
		<input name="txtnama" type="text" size="30" maxlength="35">
		</label></td>
		</tr>
		
		<tr>
             <td width="133">Email</td>
		<td width="253"><label>
		<input name="txtemail" type="text" size="30" maxlength="35">
		</label></td>
		</tr>
		
		<td height="20">Komentar</td>
		<td><label>
		<input name="txtkomentar" cols="30" rows="4" id="txtkomentar">
		</label></td>

		</tr>
		<tr>
		<td><label>
		<input name="button1" type="submit" id="button1" value="Kirim">
		<input name="button2" type="reset" id="button2" value="Batal">
		</label></td>
		</table>
		</form>
 
		</table>
	</body>
</html>