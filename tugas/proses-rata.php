<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Rata-rata</title>
</head>
<body>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            background:  #1E90FF;
        }
        .head {
            font-size: 30px;
            font-weight: bold;
            background: navy;
            text-align: center;
            color: white;
            padding: 20px;
            border-bottom: 3px solid white;
        }
        .bil {
            color: white;
            font-size: 23px;
            font-weight: bold;
            margin: 0px 50px;
        }
        b {
            color: black;
            background: white;
            padding: 8px 80px;
            border-radius: 5px;
            font-size: 18px;
            box-shadow: 0px 3px 10px;
        }
    </style>
    <div class="head">
    Rata-rata bilangan
    </div><br><br><br>
    <div class="bil">
<?php
if (isset($_POST['submit'])) {
    $n = $_POST['n'];
    for ($i = 0; $i <= $n - 1; $i++) 
    {
        $bilangan[$i] = $_POST['data' . $i];
    }
    $jumlah = 0;
    for ($i = 0; $i <= $n - 1; $i++) 
    {
        $jumlah += $bilangan[$i];
    }
    $ratarata = $jumlah/$n;
    for ($i = 0; $i <= $n - 1; $i++) {
        echo "Bilngan ke- " . ($i+1) . " = " . $bilangan[$i] . "<br>";
    }
    echo "<br>";
    echo "<br><b>Rata-ratanya adalah : $ratarata </b>";
}
?></div>
</body>
</html>