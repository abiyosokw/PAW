<?php
session_start();
echo "<h2>Tampilan Data dari Session</h2>";
    if (isset($_SESSION['data_user'])) {
        $data = $_SESSION['data_user'];

        echo "NIM: " . $data['nim'] . "<br>";
        echo "Nama: " . $data['nama'] . "<br>";
        echo "Angka Input: " . $data['angka'] . "<br>";
        echo "Hasil Faktorial: " . $data['faktorial'] . "<br><br>";
        
        session_destroy();
        echo "<i>Session telah berhasil dihapus/dibersihkan.</i><br><br>";
        echo "<a href='Lat3_3a.php'>Kembali ke Form Awal</a>";
    } else {
        echo "Data session tidak ditemukan atau sudah dihapus!";
    }
?>