<?php
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // NOTE:cek apakah data berhasil ditambah atau tidak
    if (tambah($_POST) > 0) {
        // echo "data berhasil di tambah";
        echo "<script>
                alert('data berhasil di tambah');
                document.location.href = 'index.php'
                </script>";
    } else {
        // echo "data gagal ditambah";
        echo "<script>
                alert('data gagal di tambah');
                </script>";
    }

    // // ambil data dari tiap elemen dalam form
    // $nim = $_POST["nim"];
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // // query insert data
    // $query = "INSERT INTO mahasiswa VALUES
    //         ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
    //                 ";
    // mysqli_query($conn, $query);

    // cek apakah data berhasil atau tidak
    // var_dump(mysqli_affected_rows($conn));
    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mhs</title>
</head>

<body>

    <h1>tambah data mahasiswa</h1>

    <a href="index.php">Kembali ke main page</a>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>


        </ul>
    </form>
</body>

</html>