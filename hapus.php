<?php
include "function.php";

$id = $_GET['id'];

if (hapus($id)) 
{
    echo
    "<script>
            alert('Berhasil menghapus data :');
            document.location.href = 'home.php';
        </script>";
}else {
    echo
        "<script>
            alert('Gagal menghapus data :');
            document.location.href = 'home.php';
        </script>";
    die;
}
