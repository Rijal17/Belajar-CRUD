<?php
include 'koneksi.php';
include 'function.php';
if (isset($_POST["simpan"])) {
    add($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyiraman Tanaman Otomatis</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/styles_custom.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class="card-header-1 mr-2 ml-2">
        <div class="card-header">
            <h5 align="center">FORM PENYIRAMAN TANAMAN OTOMATIS</h5>
            <form method="POST" enctype="multipart/form-data">
            <div class="modal-body"> 
                    
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" require>
                    <br>
                    
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" class="form-control" require>
                    <br>
                    
                    <button type="submit" class="btn btn-primary" name="simpan" onclick="return confirm('Apakah Ingin Menambahkan ?');">Simpan</button>
                    <button type="submit" class="btn btn-danger" name="reset" onclick="return confirm('Apakah Ingin Menambahkan ?');">Reset</button>
                    
                </div>
            </form>
        </div>
    </div>
                    <div class="card mb-4">
                        <div class="btn-primary">
                            <div class="card-header">
                                <b>DATA PENYIRAMAN TANAMAN OTOMATIS</b>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">  
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                    
                                    <tr>
                                        <tr align="center">
                                            <th>NO. </th>
                                            <th>Nama</th>
                                            <th>Nim</th>
                                            <th>Waktu Penyiraman</th>
                                            <th>Aksi</th>
                                        </tr>  
                                    </tr>
                                    
                                    <?php
                                        include "koneksi.php";
                                        $query = "SELECT * FROM mid_test";
                                        $sql = mysqli_query($conn, $query);
                                        $a = 1;
                                        foreach ($sql as $data) {
                                        ?>
                                    <tr>
                                        <td align="center"><?= $a ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td align="center"><?= $data['nim'] ?></td>
                                        <td align="center"><?= $data['waktu'] ?></td>
                                        <td>
                                            <div class="card-header-1" align="center">
                                                <div class="card-header">
                                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-success">Ubah</a>
                                                    <a href="hapus.php?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Ingin Menghapus Data ? ');">Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $a++; ?>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
</body>
</html>