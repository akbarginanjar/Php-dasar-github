<?php

echo "Program memilih bulan <br>";
$bulan = "februari";
switch ($bulan) {
    case "januari":
        echo "<b>januari</b>";
        break;
    case "februari":
        echo "<b>februari</b>";
        break;
    case "maret":
        echo "<b>maret</b>";
        break;
    case "april":
        echo "<b>april</b>";
        break;
    case "mei":
        echo "<b>mei</b>";
        break;
    case "juni":
        echo "<b>juni</b>";
        break;
    case "juli":
        echo "<b>juli</b>";
        break;
    case "agustus":
        echo "<b>agustus</b>";
        break;
    case "september":
        echo "<b>september</b>";
        break;
    case "oktober":
        echo "<b>oktober</b>";
        break;
    case "november":
        echo "<b>november</b>";
        break;
    case "desember":
        echo "<b>desember</b>";
        break;
    default:
        echo "<b>Bulan tidak ada</b>";
}