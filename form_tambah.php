<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Laut Indonesia</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Web Pendataan Laut Indonesia</h2>
	</div>

	<br />
	<a href="index.php">< Lihat Semua Data</a>

	<h3>Input Data Laut Baru</h3>
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>Nama Laut</td>
				<td><input type="text" name="nama" required></td>					
			</tr>	
			<tr>
				<td>Lokasi</td>
				<td><input type="text" name="lokasi" required></td>					
			</tr>	
			<tr>
				<td>Kordinat</td>
				<td><input type="text" name="kordinat" required></td>					
			</tr>	
			<tr>
				<td>Keadaan</td>
				<td><input type="text" name="keadaan" required></td>					
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" required></td>					
			</tr>	
			<tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>
