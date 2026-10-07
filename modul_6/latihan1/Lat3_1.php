<?php
setcookie("user", "Alex Porter", time() + 3600);
echo "Cookie berhasil dibuat."
?>
<br>
<?php
echo $_COOKIE["user"];
?>