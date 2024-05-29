<?php
//include koneksi database
include('../koneksi.php');
//get data dari form
$kd_kopetensi = $_POST['kd_kopetensi'];
$nama_kopetensi = $_POST['nama_kopetensi'];
$prog_keahlian = $_POST['prog_keahlian'];
//query insert data ke dalam database
$query = "INSERT INTO kopetensi (kd_kopetensi, nama_kopetensi, prog_keahlian) VALUES ('$kd_kopetensi', '$nama_kopetensi', '$prog_keahlian')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {
 //redirect ke halaman index.php 
 header("location: dashboard-kopetensi.php");
} else {
 //pesan error gagal insert data
 echo "Data Gagal Disimpan!";
}
?>
