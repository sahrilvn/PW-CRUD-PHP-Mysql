<?php 
include '+koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$lokasi= $_POST['lokasi'];
$kordinat= $_POST['kordinat'];
$keadaan= $_POST['keadaan'];
$keterangan = $_POST['keterangan'];

$query = mysql_query("UPDATE laut SET nama='$nama', lokasi='$lokasi', kordinat='$kordinat', keadaan='$keadaan', keterangan='$keterangan' WHERE id='$id'") or die(mysql_error());

if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
?>
