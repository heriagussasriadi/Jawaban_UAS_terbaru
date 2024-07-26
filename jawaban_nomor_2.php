<?php
// Input waktu
$waktu = (int) readline("Masukkan jam (0-23): ");
// Percabangan untuk menentukan ucapan

if ($waktu < 12) {
    echo "Selamat Pagi!";
} elseif ($waktu >= 12 && $waktu <= 15) {
    echo "Selamat Siang!";
} elseif ($waktu > 15 && $waktu <= 19) {
    echo "Selamat Sore!";
} elseif ($waktu > 19 && $waktu <= 23){
    echo "Selamat Malam!";

}
?>