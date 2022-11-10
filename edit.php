<?php
include 'koneksi.php';
include 'function.php';
if (isset($_POST["simpan"])) {
    edit($_POST);
}else if(isset($_POST["kembali"])){
    header("location: home.php");
    exit;
}


$id = $_GET['id'];
$query = "SELECT * FROM mid_test WHERE id = $id";
$sql = mysqli_query($conn, $query);
if (mysqli_num_rows($sql) == 0) {
    header("location:home.php");
} else {
    $data = mysqli_fetch_array($sql);
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        + Edit Data
                    </button>
                    <button type="submit" class="btn btn-primary" name="kembali" >Kembali</button>
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
                                            <th>Jenis Tanaman</th>
                                            <th>Kelembapan</th>
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
                                        <td align="center"><?= $data['nama'] ?></td>
                                        <td align="center"><?= $data['jenis_tanaman'] ?></td>
                                        <td align="center"><?= $data['kelembapan'] ?></td>
                                        <td align="center"><?= $data['waktu'] ?></td>
                                        <td>
                                            <div class="card-header-1" align="center">
                                                <div class="card-header">
                                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-primary">Ubah</a>
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
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>
<div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Form Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input class="form-control" name="id" value="<?= $id ?>" hidden>

                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?= $data['nama'] ?>">
                        <br>
                        <input type="text" name="jenis_tanaman" class="form-control" placeholder="Masukan Jenis Tanaman" value="<?= $data['jenis_tanaman'] ?>">
                        <br>
                        <input type="text" name="kelembapan" class="form-control" placeholder="Masukan Kelembapan" value="<?= $data['kelembapan'] ?>">
                        <br>
                        <button type="submit" class="btn btn-primary" name="simpan" onclick="return confirm('Apakah Ingin Menambahkan ?');">Simpan</button>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                    
</html>