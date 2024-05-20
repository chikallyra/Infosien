<?php

include "koneksi.php";

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$diagnosis = $_POST['diagnosis'];
$pengobatan = $_POST['pengobatan'];
$catatan = $_POST['catatan'];

$sql = "UPDATE tb_rimed SET tgl_kunjungan = '$tanggal', 
diagnosis = '$diagnosis', pengobatan = '$pengobatan', catatan = '$catatan' WHERE id_rimed = '$id'";
$go = mysqli_query($konek, $sql);

if ($go) {
    echo "<script> 
    alert('Data Berhasil diubah!');
    window.location='../rimedis.php';

    </script>";
}
else{
    echo "<script> 
    alert('Data Gagal diubah!');
    window.location='../tambah-rimedis.php';

    </script>";
}