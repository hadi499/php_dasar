<?php
require 'function.php';
if (isset($_POST["submit"])) {
    var_dump($_POST);
    //  *  cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';        
        </script>
        
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <h3 class="text-center my-3">Tambah Data Mahasiswa</h3>
                <form action="" method="post">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" class="form-control" id="gambar" name="gambar" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>