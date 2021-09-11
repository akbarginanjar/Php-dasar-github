<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <style>
         body {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            background:  #1E90FF;
        }
        table{
            background: white;
            border-radius: 1px;
            border: 0px solid whitesmoke;
        }
        th {
            font-size: 15px;
            background: navy;
            color: white;
            padding: 4px;
        }
        td {
            background: whitesmoke;
            border: 2px solid white;
            font-size: 14px;
        }
        h3 {
            color: white;
            padding-top: 20px;
        }
        button{
            background: green;
            border: 0;
            color: white;
            padding: 5px;
            width: 150px;
            font-weight: bold;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            width: 170px;
            transition: 0.2s;
            background: #228B22;
        }
    </style>
    <center>
    <h3>MENAMPILKAN DATA SISWA</h3>
    <form action="registrasi.php">
        <button>Tambah Siswa</button>
    </form><br>
    <table border=1 width="600">
        <tr>
        <th>No</th> 
        <th>Nama</th> 
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Alamat</th> 
        </tr>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $kelas = $_POST['kelas'];
            $alamat = $_POST['alamat'];
            $no = 1;

            echo "<tr>";
            echo "<td><center>$no</center></td>";
            echo "<td>$nama</td>";
            echo "<td>$jk</td>";
            echo "<td>$kelas</td>";
            echo "<td>$alamat</td>";
            echo "<tr>";

        }
        ?>

    </table></center>
</body>
</html>