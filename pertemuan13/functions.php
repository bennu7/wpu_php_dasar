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
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa VALUES
            ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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
    $gambar = htmlspecialchars($data["gambar"]);

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
