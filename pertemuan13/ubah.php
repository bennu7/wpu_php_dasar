<?php
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

require 'functions.php';

// ambil dat di URL
$id = $_GET["id"];
// var_dump($id);

// query data mahasiswa berdasarkan id
// $mhs = mysqli_query();
// $mhs = query("SELECT * FROM mahasiswa where id=$id"); => berupa array di dalam array/ array numerik yang didalamnya terdapat array asisoativ
$mhs = query("SELECT * FROM mahasiswa where id=$id")[0];
// var_dump($mhs["nim"]);



// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // NOTE:cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        // echo "data berhasil di tambah";
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php'
                </script>";
    } else {
        // echo "data gagal ditambah";
        echo "<script>
                alert('data gagal diubah');
                document.location.href = 'index.php'
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mhs</title>
</head>

<body>

    <h1>Ubah data mahasiswa</h1>

    <a href="index.php">Kembali ke main page</a>

    <form action="" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for=" email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?= $mhs['gambar'] ?>" , width="100px"><br>
                <input type="file" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>


        </ul>
    </form>
</body>

</html>