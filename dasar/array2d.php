<?php
$perusahaan = [
    'Nama' => 'Akbar Ginanjar',
    'Umur' => '17 tahun',
    'Alamat' => 'Margaluyu 1',
    'Hobi' => ['Sepak bola', 'Ngoding'],
    'Media Sosial' => ['Instagram' => 'akbarginanjar_', 'Facebook' => 'Akbar Ginanjar']
];

echo "<pre>";
print_r ($perusahaan);

echo "<br>";
echo "Pemanggilan Array 2 dimensi" . "<br>";
echo $perusahaan['Hobi'][1] . "<br>";
echo $perusahaan['Media Sosial']['Instagram'];
?>