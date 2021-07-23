<?php
//membuat fungsi
function perkenalan($nama, $salam)
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Komang", "Hi");

echo "<hr>";

$saya = "Medi";
$ucapanSalam = "Selamat Pagi";
//memanggilnya lagi
perkenalan($saya, $ucapanSalam);
