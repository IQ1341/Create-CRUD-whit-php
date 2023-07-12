<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Mahasiswa</title>

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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title bg-danger">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">Data Mahasiswa</h2>
                                <div class="ml-auto">
                                    <a class="btn btn-primary" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                                    <a href="tambah.php" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nim</th>
                                        <th scope="col">Jenis-Kelamin</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Prodi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'koneksi.php';

                                // Ambil jumlah data
                                $query_count = "SELECT COUNT(*) AS total FROM data_mhs";
                                $result_count = mysqli_query($koneksi, $query_count);
                                $row_count = mysqli_fetch_assoc($result_count);
                                $total_data = $row_count['total'];

                                // Tentukan jumlah data per halaman
                                $limit = 5;

                                // Tentukan jumlah halaman
                                $total_pages = ceil($total_data / $limit);

                                // Ambil halaman saat ini
                                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                                // Tentukan offset data
                                $offset = ($current_page - 1) * $limit;

                                // Ambil data mahasiswa sesuai halaman
                                $query_data = "SELECT * FROM data_mhs LIMIT $limit OFFSET $offset";
                                $result_data = mysqli_query($koneksi, $query_data);
                                $no = $offset + 1;

                                while($d = mysqli_fetch_array($result_data)) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['nim']; ?></td>
                                        <td><?php echo $d['jenis_kelamin']; ?></td>
                                        <td><?php echo $d['alamat']; ?></td>
                                        <td><?php echo $d['prodi']; ?></td>
                                        <td><?php echo $d['status']; ?></td>
                                        
                                        <td width="150">
                                            <a href="show.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                            <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Apakah anda ingin menghapus data ini?')"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>

                            <nav aria-label="Pagination">
                                <ul class="pagination justify-content-center">
                                    <?php if ($current_page > 1) { ?>
                                        <li class="page-item">
                                            <a class="page-link" href="index.php?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    
                                    <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                        <li class="page-item <?php echo ($current_page == $i) ? 'active' : ''; ?>">
                                            <a class="page-link" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
                                    <?php } ?>

                                    <?php if ($current_page < $total_pages) { ?>
                                        <li class="page-item">
                                            <a class="page-link" href="index.php?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
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
