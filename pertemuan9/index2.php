<?php
//1.) koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//2.) ambil value/data dari table mahasiswa => query
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);
// var_dump($result);
// if (!$result) {
//     echo mysqli_error($conn);
// }

//3.) ambil data (fetch) mahasiswa dari object result  => fetch()
// ada 4 cara :
// mysqli_fetch_row()  => mengembalikan array numerik
// mysqli_fetch_assoc() => array assosiativ
// mysqli_fetch_array() => array assosiativ & numerik
// mysqli_fetch_object()
// $mhsResult = mysqli_fetch_assoc($result);
// $mhsResult = mysqli_fetch_assoc($result);
// while ($mhsResult = mysqli_fetch_assoc($result)) {
//     var_dump($mhsResult);
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <!-- <td><?= $row["id"] ?></td> -->
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>" , width="100px"></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile ?>
    </table>
</body>

</html>