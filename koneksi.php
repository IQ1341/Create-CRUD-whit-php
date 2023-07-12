<?php
$koneksi = mysqli_connect("localhost","root","","dbmhs");

if (mysqli_connect_error()) {
    echo "koneksi database gagal : " . mysqli_connect_error();

}
?>