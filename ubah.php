<?php
require 'function.php';
//* ambil data dari url
$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//* ketika tombol submit ditekan
if (isset($_POST["submit"])) {

    //  *  cek apakah data berhasil ditambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';        
        </script>
        
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'tambah.php';        
        </script>
        
        ";
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <h3 class="text-center my-3">Edit Data Mahasiswa</h3>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?= $mhs["nama"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" required value="<?= $mhs["nrp"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required value="<?= $mhs["email"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required value="<?= $mhs["jurusan"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" class="form-control" id="gambar" name="gambar" required value="<?= $mhs["gambar"] ?>">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>