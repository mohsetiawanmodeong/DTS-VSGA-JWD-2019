<?php

include "koneksi.php";

// cek apakah tombol daftar sudah diklik atau blum?
// ambil data dari makanan
$br_id = $_POST['br_id'];
$br_nm = $_POST['br_nm'];
$br_hrg = $_POST['br_hrg'];
$br_stok = $_POST['br_stok'];
$ket = $_POST['ket'];
$br_sts = $_POST['br_sts'];
$br_gbr = $_POST['br_gbr'];

// buat query update

$submit = mysqli_query($koneksi, "UPDATE pakaian set br_nm='$br_nm', br_hrg='$br_hrg', br_stok='$br_stok', ket='$ket', br_sts='$br_sts'
                            where br_id=$br_id");
if ($submit) {
    ?><script>
        alert('Data berhasil di Update');
        location = "admin.php?page=admin&aksi=lihat_pakaian";
    </script><?php
            } else {
                ?><script>
        alert('Update data gagal');
        location = "admin.php?page=admin&aksi=lihat_pakaian";
    </script><?php
            }
            ?>