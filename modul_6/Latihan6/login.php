<?php
session_start();
    if (isset($_SESSION['user'])) {
        header("Location: Lat3_4a.php");
        exit();
    }

    $error = "";
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['user'] = $username;
            header("Location: Lat3_4a.php");
            exit();
        } else {
            $error = "Username atau Password salah!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login User</title>
</head>
<body>
    <h2>Halaman Login</h2>
    <?php if ($error != "") echo "<p style='color:red;'>$error</p>"; ?>
    <form action="login.php" method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>