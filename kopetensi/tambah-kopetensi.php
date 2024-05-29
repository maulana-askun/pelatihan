<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Kopetensi</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH KOPETENSI SISWA
                    </div>
                    <div class="card-body">
                        <form action="simpan-kopetensi.php" method="POST">

                            <div class="form-group">
                                <label>KODE KOPETENSI</label>
                                <input type="text" name="kd_kopetensi" placeholder="Masukkan Kode Kopetensi"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>NAMA KOPETENSI</label>
                                <input type="text" name="nama_kopetensi" placeholder="Masukkan Nama Kopetensi"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>PROGRAM KOPETENSI</label>
                                <input type="text" name="prog_keahlian" placeholder="Masukkan Program Kopetensi Siswa"
                                    class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></scri
        pt >
 </body >
</html >