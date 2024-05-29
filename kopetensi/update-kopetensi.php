<?php
//include koneksi database
include('../koneksi.php');
//get data dari form
$kd_kopetensi = $_POST['kd_kopetensi'];
$nama_kopetensi = $_POST['nama_kopetensi'];
$prog_keahlian = $_POST['prog_keahlian'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE kopetensi SET kd_kopetensi = '$kd_kopetensi', nama_kopetensi = '$nama_kopetensi', 
prog_keahlian = '$prog_keahlian'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
 //redirect ke halaman index.php 
 header("location: dashboard-kopetensi.php");
} else {
 //pesan error gagal update data
 echo "Data Gagal Diupate!";
}
?>