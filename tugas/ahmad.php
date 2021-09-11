<?php

$gaji = 2000000;
$pajak = 0.10;
$nominal = $gaji * $pajak;
$hasil = $gaji - $nominal;

echo "<br>";
echo "Gaji Ahmad adalah = $gaji<br>";
echo "setiap karyawan harus membayar pajaknya masing-masing sebesar 10%<br>";
echo "Jadi nominal yang di dapat ahamad adalah = <b>$hasil</b>";

?>