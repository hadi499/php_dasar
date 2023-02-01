<?php

//* koneksi ke database
$conn = mysqli_connect('localhost', 'root', 'admin123', 'belajar_php');

function query($query)
{
    // * mengambil global variable
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama = $data["nama"];
    $nrp = $data["nrp"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar)
                VALUES
                ('$nama', '$nrp', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
