<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['no'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

// menginput data ke database
mysqli_query($koneksi, "insert into printer values('$no','$nama_merek','$warna','$jumlah')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
