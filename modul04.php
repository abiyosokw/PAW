<?php
$hello = "Hello World!";
$a_number = 4;
$anotherNumber = 8.9;
$bool = true;
?>

<?php
echo "<h1>Variabel</h1></br>";
$angka = 99;
echo "Ini adalah angka = $angka </br>";
$angka_2 = $angka + 1;
echo "Ini hasilnya = $angka_2 </br>";
?>

<?php
$addition = 2 + 4;
$subtraction = 6 - 2;
$multiplication = 5 * 3;
$division = 15 / 3;
$modulus = 5 % 2;

echo "</br> Penambahan: 2 + 4 = $addition <br>";
echo "Pengurangan: 6 - 2 = $subtraction <br>";
echo "Perkalian: 5 * 3 = $multiplication <br>";
echo "Pembagian: 15 / 3 = $division <br>";
echo "Pembagian sisa: 5 % 2 = $modulus <br>";
?>

<?php
$x = 4;
$x += 3;
echo "<br> Hasil += : $x <br>";
$x = 4;
$x -= 3;
echo "Hasil -= : $x <br>";
$x = 4;
$x *= 3;
echo "Hasil *= : $x <br>";
$x = 4;
$x /= 3;
echo "Hasil /= : $x <br>";
$x = 4;
$x %= 3;
echo "Hasil %= : $x <br>";
$x = 4;
$x .= 3;
echo "Hasil .= : $x <br><br>";
?>

<?php
$my_name = "someguy";

if ($my_name == "someguy") {
echo "Your name is someguy!<br>";
}

echo "Welcome to my homepage! <br> <br>";
?>

<?php
    $destination = "Amsterdam";
    echo "Traveling to $destination<br>";

    switch ($destination) {
        case "Las Vegas":
        echo 'Bring an extra $500';
        break;
    case "Amsterdam":
        echo "Bring an open mind";
        break;
    case "Egypt":
        echo "Bring 15 bottles of SPF 50 Sunscreen";
        break;
    case "Tokyo":
        echo "Bring lots of money";
        break;
    case "Caribbean Islands":
        echo "Bring a swimsuit";
        break;
    }
?>

<?php
$brush_price = 5;
    echo "<table border=\"1\" align=\"center\">";
    echo "<tr><th>Quantity</th>";
    echo "<th>Price</th></tr>";

    for ( $counter = 10; $counter <= 100; $counter += 5) {
        echo "<tr><td>";
        echo $counter;
        echo "</td><td>";
        echo $brush_price * $counter;
        echo "</td></tr>";
}
    echo "</table>";
?>