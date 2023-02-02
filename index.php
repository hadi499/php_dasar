<?php
require 'function.php';

// * ambil data dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php dasar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-center">Daftar Mahasiswa</h3>
                <a href="tambah.php" class="btn btn-primary my-3">Tambah</a>
                <div class="row d-flex justify-content-end">
                    <div class="col-md-5">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="cari..." name="keyword" autofocus autocomplete="off">
                                <button class="btn btn-outline-secondary" type="submit" name="cari">Button</button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>
                                    <a href="ubah.php?id=<?= $mhs["id"]; ?>">edit</a> |
                                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('anda yakin?')">hapus</a>
                                </td>
                                <td>
                                    <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="40px">
                                </td>
                                <td><?= $mhs["nrp"]; ?></td>
                                <td><?= $mhs["nama"]; ?></td>
                                <td><?= $mhs["email"]; ?></td>
                                <td><?= $mhs["jurusan"]; ?></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>