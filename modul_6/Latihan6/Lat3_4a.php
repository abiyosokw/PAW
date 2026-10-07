<?php
session_start();
if (!isset($_SESSION['user'])) {
     header("Location: login.php");
    exit();
}

$cd_val = isset($_COOKIE['cd_order']) ? $_COOKIE['cd_order'] : 0;
$dvd_val = isset($_COOKIE['dvd_order']) ? $_COOKIE['dvd_order'] : 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <p>Selamat datang, <b><?php echo $_SESSION['user']; ?></b> | <a href="logout.php">Logout</a></p>
    <hr>
    <form action="Lat3_4b.php" method="post">
        <p> Order CD, amount:
            <input type="text" name="cd_order" value="<?php echo $cd_val; ?>" size="2" maxlength="2">
        </p>
        <p> Order DVD, amount:
            <input type="text" name="dvd_order" value="<?php echo $dvd_val; ?>" size="2" maxlength="2">
        </p>
        <input type="submit" value="Add To Cart" name="submit">
    </form>
</body>
</html>