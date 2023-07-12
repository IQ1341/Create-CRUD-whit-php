<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>details-data-mhs</title>

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
              <div class="card-header card-title bg-danger">
                <strong> Details Data Mahasiswa</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                  <?php
                    include "koneksi.php";
                    $id = $_GET['id'];
                    $data_mhs = mysqli_query($koneksi,"select * from data_mhs where id='$id'");
                    while($d = mysqli_fetch_array($data_mhs)){
                        ?>
                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Nama</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><?php echo $d['nama']; ?></p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="nim" class="col-md-3 col-form-label">Nim</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><?php echo $d['nim']; ?></p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="jk" class="col-md-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><?php echo $d['jenis_kelamin']; ?></p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Alamat</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><?php echo $d['alamat']; ?></p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Prodi</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><?php echo $d['prodi']; ?></p>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="company_id" class="col-md-3 col-form-label">Status</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><?php echo $d['status']; ?></p>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
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