<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <p><u>Order Summary</u></p>
    <?php
    $num_cd_order = isset($_COOKIE['cd_order']) ? $_COOKIE['cd_order'] : 0;
    $num_dvd_order = isset($_COOKIE['dvd_order']) ? $_COOKIE['dvd_order'] : 0;

    echo "Ordered CD: " . $num_cd_order . " pieces <br>";
    echo "Ordered DVD: " . $num_dvd_order . " pieces <br>";
    ?>
</body>
</html>