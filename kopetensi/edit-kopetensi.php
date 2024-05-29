<?php 
 
 include('../koneksi.php');
 
 $id = $_GET['id'];
 
 $query = "SELECT * FROM kopetensi WHERE kd_kopetensi = $id LIMIT 1";
 $result = mysqli_query($connection, $query);
 $row = mysqli_fetch_array($result);
 ?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Kopetensi</title>
 </head>
 <body>
    <div class="container" style="margin-top: 80px">
    <div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="card">
    <div class="card-header">
    EDIT KOPETENSI
 </div>
 <div class="card-body">
 <form action="update-kopetensi.php" method="POST">
 
 <div class="form-group">
 <label>KODE KOPETENSI</label>
 <input type="text" name="kd_kopetensi" value="<?php echo $row['kd_kopetensi'] ?>" placeholder="Masukkan Kode Kopetensi Siswa" class="form-control">
 <input type="hidden" name="kd_kopetensi" value="<?php echo $row['kd_kopetensi'] ?>">
 
 <div class="form-group">
 <label>NAMA KOPETENSI</label>
 <input type="text" name="nama_kopetensi" value="<?php echo $row['nama_kopetensi'] ?>" placeholder="Masukkan Nama Kopetensi Siswa" class="form-control">
 </div>

 <div class="form-group">
 <label>PROGRAM KEAHLIAN</label>
 </div><input type="text" name="prog_keahlian" value="<?php echo $row['prog_keahlian'] ?>" placeholder="Masukkan Prog_Keahlian Siswa" class="form-control">
 </div>

 <button type="submit" class="btn btn-success">UPDATE</button>
 <button type="reset" class="btn btn-warning">RESET</button>
 </form>
 </div>
 </div>
 </div>
 </div>
 
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </body>
</html>