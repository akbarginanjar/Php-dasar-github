<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="maroon"><br>
<style>
    body {
        font-family: sans-serif;
        margin: 0;
    }
    .wadah {
        background: white;
        font-size: 16px;
        border-radius: 5px;
        box-shadow: 0px 2px 7px;
        padding: 8px;
        width: 93%;
        text-align: left;
    }
</style>
<center>
<div class="wadah">
<?php
// $dosen = '[
//     { "dosen": "DANI INDRA GUNAWAN",
// "nim": "123123, 234234, 234234, 2343242",
// "nama": "Akbar, Rio, Kidam, Priyadi, Wildan",
// "umur": "17, 17, 18, 18, 17",
// "email": "akbar@gmail.com, Rio@gmail.com, Kidam@gmail.com, Priyadi@gmail.com, Wildan@gmail.com" },
//     { "dosen": "MUHAMMAD SABAR",
//         "nim": "756756, 567567, 353455, 456456, 786767",
//         "nama": "Yoga, Redi, Riki, Koko, Devin",
//         "umur": "18, 17, 16, 17, 15",
//         "email": "Yoga@gmail.com, Redi@gmail.com, Riki@gmail.com, Koko@gmail.com, Devin@gmail.com" },
//     { "dosen": "TARSINAH SUMARNI",
//         "nim": "79798, 34534, 67867, 123412",
//         "nama": "Asep, Usep, Dadang, Agus, Atang",
//         "umur": "20, 40, 34, 23, 65",
//         "email": "asep@gmail.com, usep@gmail.com, dadang@gmail.com, agus@gmail.com, atang@gmail.com" },
//     { "dosen": "SAEPUDIN",
//         "nim": "790787, 345345, 578656, 12312, 67967",
//         "nama": "Ajat, Engkus, Tedy, Rendi, Ahmad",
//         "umur": "30, 27, 43, 23, 43",
//         "email": "ajat@gmail.com, engkus@gmail.com, tedy@gmail.com, rendi@gmail.com, ahmad@gmail.com" }
//     ]';

$danny = '[
    { "nim": "12312123",
    "nama": "Akbar Ginanjar",
    "umur": "17",
    "email": "akbar@gmail.com" },
    { "nim": "12312123",
        "nama": "Rio Fadli",
        "umur": "17",
        "email": "rio@gmail.com" },
        { "nim": "12312123",
            "nama": "Kidamz",
            "umur": "17",
            "email": "kidam@gmail.com" },
            { "nim": "12312123",
                "nama": "Priyadi",
                "umur": "17",
                "email": "priyadi@gmail.com" },
                { "nim": "12312123",
                    "nama": "Wildan",
                    "umur": "17",
                    "email": "wildan@gmail.com" }
    ]';
    $sabar = '[
        { "nim": "12312123",
        "nama": "Devin",
        "umur": "17",
        "email": "devin@gmail.com" },
        { "nim": "12312123",
            "nama": "Riki",
            "umur": "17",
            "email": "riki@gmail.com" },
            { "nim": "12312123",
                "nama": "Redi",
                "umur": "17",
                "email": "redi@gmail.com" },
                { "nim": "12312123",
                    "nama": "Koko",
                    "umur": "17",
                    "email": "koko@gmail.com" },
                    { "nim": "12312123",
                        "nama": "Yoga",
                        "umur": "17",
                        "email": "yoga@gmail.com" }
        ]';
        $tarsinah = '[
            { "nim": "12312123",
            "nama": "Sandi",
            "umur": "17",
            "email": "sandi@gmail.com" },
            { "nim": "12312123",
                "nama": "Canda",
                "umur": "17",
                "email": "canda@gmail.com" },
                { "nim": "12312123",
                    "nama": "Rizki",
                    "umur": "17",
                    "email": "rizki@gmail.com" },
                    { "nim": "12312123",
                        "nama": "Surya",
                        "umur": "17",
                        "email": "surya@gmail.com" },
                        { "nim": "12312123",
                            "nama": "Oyok",
                            "umur": "17",
                            "email": "oyok@gmail.com" }
            ]';
            $saepudin = '[
                { "nim": "12312123",
                "nama": "Rahman",
                "umur": "17",
                "email": "rahman@gmail.com" },
                { "nim": "12312123",
                    "nama": "Novy",
                    "umur": "17",
                    "email": "novy@gmail.com" },
                    { "nim": "12312123",
                        "nama": "Rasdita",
                        "umur": "17",
                        "email": "rasdita@gmail.com" },
                        { "nim": "12312123",
                            "nama": "Hendrik",
                            "umur": "17",
                            "email": "hendrik@gmail.com" },
                            { "nim": "12312123",
                                "nama": "Alfian",
                                "umur": "17",
                                "email": "alfian@gmail.com" }
                ]';

    $listMahasiswa = json_decode($danny);
  echo "<b>DANNY INDRA GUNAWAN</b><br><br>";
    foreach ($listMahasiswa as $mahasiswa) {     
        echo "Nim: {$mahasiswa->nim} <br>";
        echo "Nama: {$mahasiswa->nama} <br>";
        echo "Umur: {$mahasiswa->umur} <br>";
        echo "Email: {$mahasiswa->email} <br><br>";
    }
  echo "<hr><b>MUHAMMAD SABAR</b><br><br>";
  $listMahasiswa = json_decode($sabar);
  foreach ($listMahasiswa as $mahasiswa) {     
    echo "Nim: {$mahasiswa->nim} <br>";
    echo "Nama: {$mahasiswa->nama} <br>";
    echo "Umur: {$mahasiswa->umur} <br>";
    echo "Email: {$mahasiswa->email} <br><br>";
}
echo "<hr><b>TARSINAH SUMARNI</b><br><br>";
$listMahasiswa = json_decode($tarsinah);
foreach ($listMahasiswa as $mahasiswa) {     
  echo "Nim: {$mahasiswa->nim} <br>";
  echo "Nama: {$mahasiswa->nama} <br>";
  echo "Umur: {$mahasiswa->umur} <br>";
  echo "Email: {$mahasiswa->email} <br><br>";
}
echo "<hr><b>SAEPUDIN</b><br><br>";
$listMahasiswa = json_decode($saepudin);
foreach ($listMahasiswa as $mahasiswa) {     
  echo "Nim: {$mahasiswa->nim} <br>";
  echo "Nama: {$mahasiswa->nama} <br>";
  echo "Umur: {$mahasiswa->umur} <br>";
  echo "Email: {$mahasiswa->email} <br><br>";
}
?>
</div></center><br>
</body>
</html>