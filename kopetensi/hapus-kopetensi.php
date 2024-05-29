<?php
include('../koneksi.php');
//get id
$id = $_GET['id'];
$query = "DELETE FROM kopetensi WHERE kd_kopetensi = '$id'";
if($connection->query($query)){
 header("location: dashboard-kopetensi.php");
} else {
 echo "DATA GAGAL DIHAPUS!";
}
?>
