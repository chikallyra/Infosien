<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM tb_pasien WHERE id_pasien = $id";
$go = mysqli_query($konek, $sql);

if ($go) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='../index.php';
    
    </script>";
}else{
    echo "<script> 
            alert('Data gagal dihapus');
            window.location='../index.php';
    
    </script>";
}