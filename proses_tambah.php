<?php 
include '+koneksi.php';

$nama = $_POST['nama'];
$lokasi= $_POST['lokasi'];
$keadaan= $_POST['keadaan'];
$keterangan= $_POST['keterangan'];

$query = mysql_query("INSERT INTO laut (nama, lokasi, kordinat, keadaan , ketetangan) VALUES ('$nama', '$lokasi', '$kordinat', '$keadaan', '$keterangan')") or die(mysql_error());

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>
