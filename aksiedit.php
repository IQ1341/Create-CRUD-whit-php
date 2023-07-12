<?php

include 'koneksi.php';

$id =   $_REQUEST['id'];
$nama =   $_REQUEST['nama'];
$nim   =   $_REQUEST['nim'];
$jenis_kelamin   =   $_REQUEST['jenis_kelamin'];
$alamat   =   $_REQUEST['alamat'];
$prodi   =   $_REQUEST['prodi'];
$status  =   $_REQUEST['status'];

mysqli_query($koneksi, "UPDATE data_mhs set nama='$nama',nim='$nim', jenis_kelamin='$jenis_kelamin', alamat='$alamat', prodi='$prodi', status='$status' where id='$id'");

header("location:index.php");