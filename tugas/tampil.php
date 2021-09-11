<!DOCTYPE html>
<html>
<head>
    <title>KONSER AMAL ASSALAAM BAHAGIA</title>
</head>

<body background="konser.jpg"><br><br>
        <style>
                body {
            padding:0;
            margin:0;
            font-family:sans-serif; 
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bungkus {
                background: white;
                width: 40%;
                height: 320px;
                border-radius: 5px;
                box-shadow: 0px 3px 15px;
        }
        h2 {
                color: 	white;
                padding-top: 20px;
                background: rgb(18, 86, 149);
                height: 40px;
                border-radius: 2px;
        }
        table {
                padding-left: 12px;
        }
        td {
                        font-family:sans-serif;
                        padding: 4px;
                        font-weight: bold;
                }
                a{
                        text-decoration: none;
                        color: white;
                        background: green;
                        font-family: sans-serif;
                        padding: 6px 70px;
                        border-radius: 3px;
                }
                a:hover {
                        background: #228B22;
                        transition: 0.3s;
                }
        </style>

<center>
        <div class="bungkus">
    <table width=300>
    <h2>DATA PEMESAN</h2>


        <?php

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    
        $kode = $_POST['kode'];
        if($kode == "studio1"){
                $bintang = "Opik";
        } else {
                $bintang = "Raihan";
        }

        $kelas = $_POST['kelas'];
        if ($kelas == 'VIP') {
                $harga = 50000;
        } else {
                $harga = 25000;
        }

        $total = $harga * $jumlah_tiket;
    

    echo "<tr>";
            echo "<td>Nama</td><td>:</td><td>$nama</td>";
    echo "<tr>";
    echo "<tr>";
            echo "<td>Kode Studio</td><td>:</td><td>$kode</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Bintang Tamu</td><td>:</td><td>$bintang</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Kelas Studio</td><td>:</td><td>$kelas</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Harga Tiket</td><td>:</td><td>$harga</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Jumlah Tiket</td><td>:</td><td>$jumlah_tiket</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Total</td><td>:</td><td>$total</td>";
    echo "</tr>";
    
        }
        ?>
  </table></div><br><br>

    <a href="konser.php">INPUT KEMBALI</a>
    </center>
    </body>
</html>