<?php
// memeriksa apakah data tiak ada pada $_eGET
// if (!isset($_GET["nama"])) {
//     header("Location: latihan.php");
// }

//var_dump($_GET);

// $x = 10;

// function tampilX()
// {
//     global $x;
//     echo $x;
// }
// tampilX();

// var_dump($_POST);

// echo $_SERVER["SERVER_NAME"];
//
//
?>

<?php
$mhs = [
    [
        "nama" => "Lalu Ibnu",
        "nim" => "19.11.3073",
        "email" => "ibnu@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Baiq Febi",
        "nim" => "19.11.0890",
        "email" => "ben@gmail.com",
        "jurusan" => "Teknik Komputer",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Qodirun deri",
        "nim" => "19.11.3000",
        "email" => "deri@gmail.com",
        "jurusan" => "Teknik Teletubies",
        "gambar" => "3.jpg",
    ],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mhs as $valueMhs) : ?>
            <li>
                <a href="latihan2.php?
                nama=<?= $valueMhs["nama"] ?>
                &nim=<?= $valueMhs["nim"] ?>
                &email=<?= $valueMhs["email"] ?>
                &jurusan=<?= $valueMhs["jurusan"] ?>
                &gambar=<?= $valueMhs["gambar"] ?>
                ">
                    Nama : <?= $valueMhs["nama"] ?></a>
            </li>


            <!-- <li>NIM : <?= $valueMhs["nim"] ?></li>
            <li>Email : <?= $valueMhs["email"] ?></li>
            <li>Jurusan : <?= $valueMhs["jurusan"] ?></li>
            <li><img src="img/<?= $valueMhs["gambar"] ?>" width="100px"></li> -->
            <!-- <br> -->
        <?php endforeach ?>

</body>

</html>