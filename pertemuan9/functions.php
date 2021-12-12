<?php
// NOTE: membuat function lebih modular/terstruktur

// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = []; //sebagai wadah kosong
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; //disimpah ke wadah kosong baru
    }

    return $rows; //kembalikan wadahnya
}

//2.) ambil value/data dari table mahasiswa => query
// $sql = "SELECT * FROM mahasiswa";
// $result = mysqli_query($conn, $sql);
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
