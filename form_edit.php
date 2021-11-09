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
	
	<h3>Edit Data Laut</h3>
	<form action="proses_edit.php" method="post">
		<?php 
		include "+koneksi.php";
		$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM laut WHERE id = '$id'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		?>		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Lokasi</td>
				<td><input type="text" name="lokasi" value="<?php echo $data['lokasi'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Kordinat</td>
				<td><input type="text" name="kordinat" value="<?php echo $data['kordinat'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Keadaan</td>
				<td><input type="number" name="keadaan" value="<?php echo $data['keadaan'] ?>" required></td>					
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>" required></td>					
			</tr>	
			<tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>
