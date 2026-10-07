<?php
    session_start();
    function hitungfaktor($n) {
        if ($n <= 1) {
            return 1;
        }
        $hasil = 1;
        for ($i = 1; $i <= $n; $i++) {
            $hasil *= $i;
        }
        return $hasil;
    }

    if (isset($_POST['angka'])) {
    $angka = (int)$_POST['angka'];
    $faktorial = hitungfaktor($angka);
    $_SESSION['data_user'] = [
        'angka' => $angka, 'faktorial' => $faktorial, 'nim' => '2555150707111011', 'nama' => 'Abiyoso Kayana Wibowo'
    ];

    echo "<h3>Hasil Perhitungan Faktor</h3>";
    echo "Angka yang dimasukkan : <b>$angka</b><br>";
    echo "Nilai Faktorial ($angka!) : <b>$faktorial</b><br><br>";
    echo "<a href='Lat3_3c.php'>Lanjut ke tab 3c (Lihat Session)</a>";
    } else {
        echo "Silakan masukkan angka terlebih dahulu di halaman Lat3_3a.php";
    }
?>