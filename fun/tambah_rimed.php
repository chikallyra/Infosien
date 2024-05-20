<?php
include "koneksi.php";

$pasien = $_POST['nama_pasien'];
$tanggal = $_POST['tanggal'];
$diagnosis = $_POST['diagnosis'];
$pengobatan = $_POST['pengobatan'];
$catatan = $_POST['catatan'];

$sql = "INSERT INTO tb_rimed (id_pasien, tgl_kunjungan, diagnosis, pengobatan, catatan) 
        VALUES ('$pasien', '$tanggal', '$diagnosis', '$pengobatan', '$catatan')";
$go = mysqli_query($konek, $sql);

if ($go) {
    echo "<script> 
     alert('Data berhasil ditambahkan!');
     window.location='../rimedis.php';

    </script>";
}else{
    echo "<script> 
     alert('Data gagal ditambahkan! Silahkan coba lagi');
     window.location='../tambah-rimedis.php';

    </script>";
}