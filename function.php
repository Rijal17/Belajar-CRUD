<?php 
function add(){
    if (isset($_POST)) {
        include 'koneksi.php';
        $nama = htmlspecialchars($_POST['nama']);
        $jenis_tanaman = htmlspecialchars($_POST['jenis_tanaman']); 
        $kelembapan = htmlspecialchars($_POST['kelembapan']); 
        $query = "INSERT INTO mid_test (id, nama, jenis_tanaman, kelembapan, waktu) VALUES('', '$nama', '$jenis_tanaman', '$kelembapan', now())";
        $sql = mysqli_query($conn, $query);
            if ($sql) {
                echo
                "<script>
                        alert('Berhasil menambah data :');
                        document.location.href = 'home.php';
                    </script>";
            } else {
                echo
                "<script>
                    alert('Gagal menambah data :');
                    document.location.href = 'home.php';
                </script>";
            die;
            }
        } else {
        echo
        "<script>
            alert('Gagal menambah data :');
            document.location.href = 'home.php';
        </script>";
        die;
    }
}


function edit(){
    if (isset($_POST)) {
    include "koneksi.php";
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $jenis_tanaman = htmlspecialchars($_POST['jenis_tanaman']); 
    $kelembapan = htmlspecialchars($_POST['kelembapan']); 
        $query = "UPDATE mid_test SET nama='$nama', jenis_tanaman='$jenis_tanaman', kelembapan='$kelembapan', waktu=now() WHERE id='$id'";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            
            echo "
                <script>
                    alert('Berhasil Mengubah Data :');
                    document.location.href = 'home.php';
                </script>";
        }else{
            echo "
                    <script>
                        alert('Gagal Mengubah Data :');
                        document.location.href = 'home.php';
                    </script>";
                    die;
        }
    }
}

function hapus($id){
    include 'koneksi.php';
    $getOldFile = mysqli_query($conn, "SELECT * FROM mid_test WHERE id=$id");
    $query = mysqli_query($conn, "DELETE FROM mid_test WHERE id=$id");
    if ($query) {
        return true;
    }
    return false;
}

?>