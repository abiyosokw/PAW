<!-- <body>
<form action="proses.php" method="get">
<input type="text" name="nama">
<input type="submit" value="Go">
</form>
</body> -->

<!-- <form action="modul05.php" method="post" name="input">
    Nama Anda: <input type="text" name="nama">
    <br>
    <input type="submit" name="input" value="Input">
</form>

<?php
if (isset($_POST['input'])) {
$nama = $_POST['nama'];
echo "Nama Anda: <b>$nama</b>";
}
?> -->

<form enctype="multipart/form-data" action="upload.php" method="post">
    Choose a file to upload:
    <input name="uploadedfile" type="file" /> <br>
    <input type="submit" value="Upload File" />
</form>
