<?php
//membuat fungsi
function perkenalan($nama, $salam="Assalaamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "senang berkenalan dengan anda<br>";
}

//memanggil fungsi yg di buat
perkenalan("Akbar Ginanjar", "Hi");

echo "<hr>";

$saya = "Indry";
$ucapansalam = "Selamat pagi";
// memanggil lagi 
perkenalan($saya);
?>