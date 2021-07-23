<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['no'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

// update data ke database
mysqli_query($koneksi, "update printer set no='$no', nama_merek='$nama_merek', warna='$warna' where no='$no'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
