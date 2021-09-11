<?php

$jurusan = [
    'Jurusan Teknik Informatika',
    'Jurusan Sistem Informasi',
    'Jurusan Teknik Komputer',
    'Jurusan Manajemen Informatika',
];

//  foreach ($jurusan as $key => $value){
//      echo $value . ' - ada di indeks ' . $key;
//      echo '<br>';
//  } 
echo "1. Contoh program Array Numeric <br>";
 $jumlah_array = count($jurusan);
 for($i = 0; $i < $jumlah_array; $i++){
    
     echo "$jurusan[$i] - ada di indeks $i<br>";
 }
echo "<br>";

echo "2. Contoh program Array Assosiatif <br>";
 $jurusan = [
    'jurusan 1' => ' Teknik Informatika',
    'jurusan 2' => ' Sistem Informasi',
    'jurusan 3' => ' Teknik Komputer',
    'jurusan 4' => ' Manajemen Informatika',
];
foreach ($jurusan as $key => $value){
    
          echo 'Kata kunci index = ' . $key . ', Nilai = ' . $value;
          echo '<br>';
      }

?>