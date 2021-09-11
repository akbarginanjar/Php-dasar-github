<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hotel</title>
</head>
<body background="kamar.jpg">
        <style>
                body {
                        background-repeat: no-repeat;
                        background-size: 1095px;
                        padding: 0;
                        margin: 0;
                }
                .head {
                        background: black;
                        overflow: hidden;
                        color: black;
                        text-align: center;
                        font-family: sans-serif;
                        border-bottom: 3px solid gray;
                        box-shadow: 0px 3px 10px;
                }
                .head h1 {
                        color: white;
                }
                table {
                        margin: 30px;
                }
                td {
                        font-family:sans-serif;
                        padding: 5px;
                        font-weight: bold;
                }
                a{
                        text-decoration: none;
                        color: white;
                        background: green;
                        font-family: sans-serif;
                        padding: 6px 70px;
                        border-radius: 3px;
                        margin: 40px;
                        position: absolute;
                }
                a:hover {
                        background: gray;
                        transition: 0.3s;
                }
                .wadah {
                        background: rgba(255, 255, 255, 0.342);
                        width: 40%;
                        box-shadow: 0px 3px 10px;
                        height: 260px;
                        border-radius: 5px;
                }
                .wadah2 {
                        padding-left: 40px;
                }
        </style>
        <div class="head">
                <h1>Data Tamu Hotel</h1>
        </div>

        <div class="wadah2">        
                <div class="wadah">
<table width="400">
<?php

if (isset($_POST['simpan'])) {
    $tanggal = $_POST['tanggal'];
    $nama = $_POST['nama'];
    $identitas = $_POST['identitas'];
    $tipe = $_POST['tipe'];
    $durasi = $_POST['durasi'];
    $deluxe = 850000;
    $superior = 500000;
    $js = 1400000;

    $tipe_harga = $_POST['tipe'];
        if ($tipe_harga == 'Superior') {
                $harga = 850000;
                $hasil = $harga * $durasi;
                if ($hasil > 1700000) {
                        $diskon = (15/100) * $hasil;
                        $total = $hasil - $diskon;
                        echo "<tr>";
    echo "<td>Karna diskon </td><td>:</td><td>$total</td>";
echo "</tr>";
                } else if ($hasil > 2500000) {
                        $diskon = (25/100) * $hasil;
                        $total = $hasil - $diskon;
                        echo "<tr>";
    echo "<td>Karna diskon </td><td>:</td><td>$total</td>";
echo "</tr>";
                }
        } else if($tipe == 'Deluxe') {
                $harga = 950000;
                $hasil = $harga * $durasi;
                if ($hasil > 1700000) {
                        $diskon = (15/100) * $hasil;
                        $total = $hasil - $diskon;
                        echo "<tr>";
    echo "<td>Karna diskon </td><td>:</td><td>$total</td>";
echo "</tr>";
                } else if ($hasil > 2500000) {
                        $diskon = (25/100) * $hasil;
                        $total = $hasil - $diskon;
                        echo "<tr>";
    echo "<td>Karna diskon </td><td>:</td><td>$total</td>";
echo "</tr>";
                }
        } else {
            $harga = 1400000;
            $hasil = $harga * $durasi;
            if ($hasil > 1700000) {
                $diskon = (15/100) * $hasil;
                $total = $hasil - $diskon;
                echo "<tr>";
    echo "<td>Karna diskon 15% </td><td>:</td><td>$total</td>";
echo "</tr>";
        } else if ($hasil > 2500000) {
                $diskon = (25/100) * $hasil;
                $total = $hasil - $diskon;
                echo "<tr>";
    echo "<td>Karna diskon 25%</td><td>:</td><td>$total</td>";
echo "</tr>";
        }
        }

        $hasil = $harga * $durasi;

        // if ($hasil > 1700000) {
        //         $diskon = (20/100)*$hasil;
        //         $total = $hasil - $diskon;
        //         } elseif($hasil > 1500000){
        //         $diskon = (10/100)*$hasil;
        //         $total = $hasil - $diskon;
        //         }



    
    echo "<tr>";
            echo "<td>Nama Tamu</td><td>:</td><td>$nama</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Tanggal menginap</td><td>:</td><td>$tanggal</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>No Identitas</td><td>:</td><td>$identitas</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Tipe kamar</td><td>:</td><td>$tipe</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Harga kamar</td><td>:</td><td>$harga</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Durasi menginap </td><td>:</td><td>$durasi Malam</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Total </td><td>:</td><td>$hasil</td>";
echo "</tr>";


   
}

?>
</table>
</div>
</div>
<a href="hotel.php">INPUT KEMBALI</a>
    
</body>
</html>