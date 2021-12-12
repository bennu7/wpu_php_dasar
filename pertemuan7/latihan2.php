<?php
// memeriksa apakah data tiak ada pada $_eGET
if (
    !isset($_GET["nama"])
    || !isset($_GET["nim"])
    || !isset($_GET["email"])
    || !isset($_GET["jurusan"])
    || !isset($_GET["gambar"])

) {
    header("Location: latihan.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mhs</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"] ?>" , width="100px"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"] ?></li>
        <li><?= $_GET["email"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
    </ul>

    <a href="latihan.php">Kembali</a>
</body>

</html>