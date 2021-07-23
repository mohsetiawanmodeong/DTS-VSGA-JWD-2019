<?php

include "koneksi.php";

// cek apakah tombol daftar sudah diklik atau blum?
// ambil data dari makanan
$br_id = $_POST['br_id'];
$br_nm = $_POST['br_nm'];
$br_hrg = $_POST['br_hrg'];
$ket = $_POST['ket'];
$br_sts = $_POST['br_sts'];
$br_gbr = $_POST['br_gbr'];

// buat query update

$submit = mysqli_query($koneksi, "UPDATE makanan SET br_nm='$br_nm', br_hrg='$br_hrg', ket='$ket', br_sts='$br_sts'
                            where br_id=$br_id");
if ($submit) {
    ?><script>
        alert('Data berhasil di Update');
        location = "admin.php?page=admin&aksi=lihat_makanan";
    </script><?php
            } else {
                ?><script>
        alert('Update data gagal');
        location = "admin.php?page=admin&aksi=lihat_makanan";
    </script><?php
            }
            ?>