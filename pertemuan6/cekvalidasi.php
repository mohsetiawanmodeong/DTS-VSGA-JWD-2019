<?php
$nama = $_POST['nama'];

if ($nama == "") {
    header("location:formvalidasi.php?nama=kosong");
} else {
    echo "Nama anda adalah " . $nama;
}
