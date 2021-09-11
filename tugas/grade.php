<?php

echo "grade penilaian dengan ketentuan :<br>";

$nilai = 100;
if ($nilai <= 100 && $nilai >= 90){
    echo "<b>Nilai anda adalah : A";
} else if ($nilai >= 80) {
    echo "<b>Nilai anda adalah : B";
} else if ($nilai >= 75) {
    echo "<b>Nilai anda adalah : C";
} else if ($nilai >= 60) {
    echo "<b>Nilai anda adalah : D";
} else if ($nilai <= 60 && $nilai >= 1) {
    echo "<b>Nilai anda adalah : E";
} else {
    echo "<b>TIDAK ADA NILAI</b>";
}