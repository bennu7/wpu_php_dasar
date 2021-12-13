<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    // mengambil tiap query/value dari array asosiativ
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = []; //sebagai wadah kosong
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; //disimpah ke wadah kosong baru
    }

    return $rows; //kembalikan wadahnya
}

function tambah($data)
{
    global $conn;

    // agar lebih aman tambahkanhtmlspecialchars()
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // $gambar = htmlspecialchars($data["gambar"]);
    // khusus upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES
            ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    //$_FILES[][]=>array multi dimensi
    $namaFile = $_FILES["gambar"]['name'];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    // cek apakah tidak ada gambar yg diupload
    if ($error === 4) {
        echo "<script>
            alert('Pilih gambar telebih dahulu!')
        </script>";
        return false; //setelah berhenti hentikan function nya
    }

    // cek apakah yang di upload itu adalah gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];

    // exploe => fungsi untuk memecah sebuah string menjadi array
    $ekstensiGambar = explode('.', $namaFile);

    //menghindari nama misal lalu.ibnu.jpg yg dibaca format gambar nya ibnu bukan jpg
    // menghindai case sensitive misal JGP dan jpg => gunakan fungsi strtolower()
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // memeriksa ekstensi yg diupload terdapat pada $ekstensiGambarValid
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Gambar ekstensi tidak valid!/File yang diupload bukan gambar')
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    $mega = 1000000; //dalam satuan byte
    if ($ukuranFile >   1 * $mega) {
        echo "<script>
                alert('Ukuran gambar terlalu besar melebihi 1mb')
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru => menghindari gambar duplikat dengan nama file sama & ekstensi sama
    // dengan memanfaatkan function uniqid()
    // .= digabung
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // var_dump($namaFileBaru);
    // die;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    // jika sudah berhasil
    return $namaFileBaru;
}


function hapus($id)
{
    global $conn;

    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function ubah($data)
{

    global $conn;

    // agar lebih aman tambahkanhtmlspecialchars()
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET 
                    nim='$nim',
                    nama='$nama',
                    email='$email',
                    jurusan='$jurusan',
                    gambar='$gambar'
                    WHERE id = $id
                    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{

    $query =  "SELECT * FROM mahasiswa
                        WHERE
                         nama LIKE '%$keyword%' OR
                         nim LIKE '%$keyword%' OR 
                         email LIKE '%$keyword%' OR 
                         jurusan LIKE '%$keyword%' 
                        ";

    return query($query);
}

function registrasi($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sama');
                </script>";
        return false;
    }
    // return 1;

    // enkripsi password terlebih dahulu jika ingin ditambahkan
    $password = password_hash($password, PASSWORD_DEFAULT);
    // $password = md5($password);=> sangat gak aman

    // tambahkan userbaru ke dalam database

    $query = "INSERT INTO user VALUES
            ('', '$username', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
