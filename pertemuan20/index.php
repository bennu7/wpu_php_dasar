<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';


$mahasiswa =  query("SELECT * FROM mahasiswa");

// mengurutkan berdasarkan data terbaru
// $mahasiswa =  query("SELECT * FROM mahasiswa ORDER BY id DESC");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    // ditimpa
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 145px;
            left: auto;
            display: none;
        }
    </style>
    <script src="js/jquery-3.6.0.min.js"></script>

</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <a href="index.php">Refresh</a>
    <br>
    <a href="logout.php">Logout</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari orang hilang</button>
        <img src="img/loader.gif" width="100" class="loader">
    </form>

    <br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <!-- <td><?= $row["id"] ?></td> -->
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin menghapus?')">hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"] ?>" , width="100px"></td>
                    <td><?= $row["nim"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["jurusan"] ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>


    <script src="js/script.js"></script>
</body>

</html>