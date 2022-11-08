<?php 
function add(){
    if (isset($_POST)) {
        include 'koneksi.php';
        $nama = htmlspecialchars($_POST['nama']);
        $nim = htmlspecialchars($_POST['nim']);
        $waktu = date('now'); 
        $query = "INSERT INTO mid_test (id, nama, nim, waktu) VALUES('','$nama', '$nim', now())";
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
    $nim = htmlspecialchars($_POST['nim']);
    $waktu = htmlspecialchars($_POST['waktu']);
        $query = "UPDATE mid_test SET nama='$nama', nim='$nim', waktu='$waktu' WHERE id='$id'";
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
    $oldFile = mysqli_fetch_assoc($getOldFile);
    $query = mysqli_query($conn, "DELETE FROM mid_test WHERE id=$id");
    if ($query) {
        return true;
    }
    return false;
}

?>