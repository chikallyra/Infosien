<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM tb_rimed WHERE id_rimed = $id";
$go = mysqli_query($konek, $sql);

if ($go) {
    echo "<script> 
            alert('Data berhasil dihapus');
            window.location='../rimedis.php';
    
    </script>";
}else{
    echo "<script> 
            alert('Data gagal dihapus');
            window.location='../rimedis.php';
    
    </script>";
}