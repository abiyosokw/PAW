<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
</head>
<body>
    <p>Selamat datang, <b><?php echo $_SESSION['user']; ?></b> | <a href="logout.php">Logout</a></p>
    <hr>
    <p><u>Order Summary</u></p>
    <?php
    $num_cd_order = isset($_COOKIE['cd_order']) ? $_COOKIE['cd_order'] : 0;
    $num_dvd_order = isset($_COOKIE['dvd_order']) ? $_COOKIE['dvd_order'] : 0;

    echo "Ordered CD: " . $num_cd_order . " pieces <br>";
    echo "Ordered DVD: " . $num_dvd_order . " pieces <br>";
    ?>
    <br>
    <a href="Lat3_4a.php">Edit Pesanan</a>
</body>
</html>