<?php

include 'koneksi.php';

$nama =   $_REQUEST['nama'];
$nim   =   $_REQUEST['nim'];
$jenis_kelamin   =   $_REQUEST['jenis_kelamin'];
$alamat   =   $_REQUEST['alamat'];
$prodi   =   $_REQUEST['prodi'];
$status  =   $_REQUEST['status'];

mysqli_query($koneksi, "INSERT INTO data_mhs (nama, nim, jenis_kelamin, alamat, prodi, status) VALUES ('$nama', '$nim', '$jenis_kelamin', '$alamat', '$prodi', '$status')");

header("location:index.php");