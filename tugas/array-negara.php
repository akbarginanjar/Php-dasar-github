<?php
echo "1. Output array dengan menggunakan PRINT_R()";
$negara = [];
$negara[] = 'Indonesia';
$negara[] = 'Malaysia';
$negara[] = 'Singapura';
$negara[] = 'Brunei Darusalam';
$negara[] = 'Filipina';
echo '<pre>';
print_r($negara);

echo "<br>";

echo "2. Output Array Assosiatif <br>";
 $negara = [
    'Indonesia' => ' Jakarta',
    'Malaysia' => ' Kuala lumpur',
    'Singapura' => ' Singapura',
    'Thailand' => ' Bangkok',
    'Filipina' => ' Manila',
];
echo '<br>';
foreach ($negara as $key => $value){
    echo '<ul>';
          echo '<li>Ibu kota ' . $key . ' adalah  ' . $value . '</li>';
          echo '<br>';
          echo '</ul>';
      }
?>