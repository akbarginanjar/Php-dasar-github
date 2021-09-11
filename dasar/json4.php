<?php
$listMahasiswaJSON = '[
    { "nama": "Nurul Huda" },
    { "nama": "Renja Ilhami Rizqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktantao" }
    ]';

    $listMahasiswa = json_decode($listMahasiswaJSON);

    foreach ($listMahasiswa as $key => $mahasiswa) {
        echo "{$key}. Nama: {$mahasiswa->nama} <br>";
    }
    // foreach ($listMahasiswa as $key => $mahasiswa) {
    //     echo "{$key}. Nama: {$mahasiswa->nama} <br>";
    // }
?>