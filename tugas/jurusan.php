<?php

echo "Program memilih jurusan <br>";
$jurusan = "rpl";
switch($jurusan) {
    case "rpl":
        echo "Anda telah memilih jurusan <b>RPL</b>";
        break;
        case "tkro":
            echo "Anda telah memilih jurusan <b>TKRO</b>";
            break;
            case "tbsm":
                echo "Anda telah memilih jurusan <b>TBSM</b>";
                break;
                default:
                echo "<b>Jurusan tidak ada</b>";
}