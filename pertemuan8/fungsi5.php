<?php
//membuat fungsi 
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Selamat Datang")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    //memanggil fungsi lain 
    echo "Saya berusia " . hitungUmur(1992, 2019) . " Tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan 
perkenalan("Komang");
