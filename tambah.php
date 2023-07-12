<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tambah-Data-mhs</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body>

    <!-- content -->
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <form action="aksitambah.php" method="post">
                            <div class="card-header card-danger bg-danger">
                                <strong>Tambah Data Mahasiswa</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-3 col-form-label">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" name="nama" id="nama" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nim" class="col-md-3 col-form-label">Nim</label>
                                            <div class="col-md-9">
                                                <input type="text" name="nim" id="nim" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Jenis-Kelamin</label>
                                            <div class="col-md-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="radio-laki" value="laki-laki" required>
                                                    <label class="form-check-label" for="radio-laki">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="radio-perempuan" value="perempuan" required>
                                                    <label class="form-check-label" for="radio-perempuan">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                            <div class="col-md-9">
                                                <input type="text" name="alamat" id="alamat" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="prodi" class="col-md-3 col-form-label">Prodi</label>
                                            <div class="col-md-9">
                                                <select name="prodi" id="prodi" class="form-control" required>
                                                    <option value="">--pilih prodi--</option>
                                                    <option value="Teknik Komputer">Teknik Komputer</option>
                                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="status" class="col-md-3 col-form-label">Status</label>
                                            <div class="col-md-9">
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="">--pilih status--</option>
                                                    <option value="aktif">Aktif</option>
                                                    <option value="non-aktif">Non-Aktif</option>
                                                    <option value="cuti">Cuti</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-9 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
