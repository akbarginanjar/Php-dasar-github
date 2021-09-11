<?php
$uang_ucup = 100000;
$air_minum = 15000;
$musafir = 6000;
$uang_nemu = 27000;
$hasil1 = $uang_ucup - $air_minum;
$sosis_bakar = 25000;
$hasil2 = $hasil1 - $sosis_bakar;
$sisa_sedekah = $hasil2 - $musafir; 
$total = $uang_nemu + $sisa_sedekah;

echo "Uang Ucup = <b>$uang_ucup</b>";
echo "<hr>";
echo "Jajang minum <b>$air_minum</b> <br>";
echo "Sisa uang Ucup jajan minum = <b>$hasil1</b>";
echo "<hr>";
echo "Jajan sosis bakar <b>$sosis_bakar</b><br>";
echo "Sisa uang Usup jajan sosis bakar + minum = <b>$hasil2</b><br>";
echo "<hr>";
echo "Sededekah ke mufasir 10% dari <b>$hasil2</b> yaitu sebesar <b>$musafir</b><br>";
echo "Sisa uang Ucup = <b>$sisa_sedekah</b><br>";
echo "<hr>";
echo "Nemu uang di jalan sebesar 50% dari sisa uang ucup <b>$sisa_sedekah</b> yaitu sebesar <b>$uang_nemu</b><br> ";
echo "Sisa uang Ucup sekarang = <b>$uang_nemu + $sisa_sedekah</b><br>";
echo "<hr>";
echo "total uang Ucup adalah <b>Rp. $total</b>";

?>