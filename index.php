<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Laut Di Indonesia</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Pendataan Laut Di Indonesia </h2>
	</div>

	<br />
	<a href="form_tambah.php">+ Tambah Data Baru</a>

	<h3>Data Laut Indonesia</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>No.</th>
				<th>Nama Laut</th>
				<th>Lokasi</th>
				<th>Kordinat</th>
				<th>Keadaan</th>
				<th>Keterangan</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			include "+koneksi.php";
			$query = mysql_query("SELECT * FROM laut") or die(mysql_error());
			$nomor = 1;
			while($data = mysql_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['lokasi']; ?></td>
					<td><?php echo $data['kordinat']; ?></td>
					<td><?php echo $data['keadaan']; ?></td>
					<td><?php echo $data['keterangan']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>
