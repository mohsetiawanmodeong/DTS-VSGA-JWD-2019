<?php
$nama = $_POST['jk'];

if ($nama == "") {
    header("location:formbiodata.php?jk=kosong");
} else {
    echo "Nama anda adalah " . $nama;
}
