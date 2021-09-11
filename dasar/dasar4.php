<?php

echo "<b>Program lalu lintas</b> <br>";
$lampu = "merah";
switch ($lampu) {
    case "merah":
        echo "Anda harus berhenti";
        break;
    case "kuning":
        echo "Anda harus siap-siap";
        break;
    case "hijau":
        echo "Anda harus maju";
        break;
    default:
    echo "Lampu lalu lintas error";
}