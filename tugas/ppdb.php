<?php

echo "PROGRAM MENENTUKAN DISKON PPDB <br>";

$bulan = "mei";
$harga = 8000000;
$diskon_mei = $harga - ($harga * (30/100));
$diskon_juni = $harga - ($harga * (20/100));
$diskon_juli = $harga - ($harga * (10/100));

switch($bulan) {
    case "mei":
        echo "Pendaftaran di bulan mei diskon 30% = $diskon_mei";
        break;
        case "juni":
            echo "Pendaftaran di bulan juni diskon 20% = $diskon_juni";
            break;
            case "juli":
                echo "Pendaftaran di bulan juli diskon 10% = $diskon_juli";
                break;
        default:
        echo "<b>TIDAK ADA</b>";
}