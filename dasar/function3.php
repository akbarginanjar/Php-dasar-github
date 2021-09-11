<?php
//membuat fungsi
function hitungumur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalaamualaikum") {
    echo $salam . ", <br>";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    //memanggil fungsi lain
    echo "Umur saya adalah " . hitungumur(2004, 2021) . " tahun<br>";
    echo "Senang berkenalan dengan anda<br>";
}

//memanggil fungsi perkenalan
perkenalan("Akbar Ginanjar");
?>