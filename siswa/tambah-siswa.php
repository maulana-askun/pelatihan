<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH SISWA
                    </div>
                    <div class="card-body">
                        <form action="simpan-siswa.php" method="POST">

                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa"
                                    rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Siswa"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tgl Lahir</label>
                                <input type="date" name="tgl_lahir" placeholder="Masukkan Tgl Lahir Siswa"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="text" name="no_telepon" placeholder="Masukkan No Telepon Siswa"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Kode Kopetensi</label>
                                <select name="kd_kopetensi" id="kd_kopetensi" class="form-control">
                                    <option value="11111">Programmer</option>
                                    <option value="22222">Designer</option>
                                    <option value="33333">Begal</option>
                                    <option value="44444">Maling</option>
                                </select>
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