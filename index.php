<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Data Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria current="page" href="create.php">Tambah Mahasiswa</a>
                    <a href="#" class="nav-link">Features</a>
                    <a href="#" class="nav-link">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container data-mahasiswa mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama.</th>
                    <th scope="col">Nim.</th>
                    <th scope="col">Alamat.</th>
                    <th scope="col">Aksi.</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Memanggil config.php
                include 'config.php';
                //Membuat variabel untuk nomor mahasiswa yang diincrementkan
                $no = 1;
                //Melakukan query
                $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
                //Looping data mahasiswa
                while ($data = mysqli_fetch_array($mahasiswa)) {
                ?>
                    <!--Menampilkan data mahasiswa ke tabel-->
                    <tr>
                        <!--increment nomor baris $no++-->
                        <td><?php echo $no++; ?></td>

                        <!--- Menampilkan data -->
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>

                        <td>
                        
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>

                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confrim('Anda Yakin ingin menghapus data mahasiswa ini')">HAPUS</a>

                        </td>

                    </tr>
                <?php
                }
                ?>                
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>