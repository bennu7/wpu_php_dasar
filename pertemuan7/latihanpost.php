<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan POST</title>
</head>

<body>

    <?php if (isset($_POST["submit"])) : ?>
        <h2>Hello, Selamat datang "<?= $_POST["namaKey"] ?>"</h2>
    <?php endif; ?>

    <form method="POST">
        masukkan value nya GET : <input type="text" name="namaKey">
        <br>
        <button type="submit" , name="submit">Kirim</button>
    </form>
    <!-- <br><br><br>
    <form action="" method="POST">
        masukkan value nya POST : <input type="text" name="value">
        <br>
        <button type="submit" , name="submit">Kirim</button>
    </form> -->


</body>

</html>