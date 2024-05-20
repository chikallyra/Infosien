<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

if ($_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $gambar = $_FILES['gambar']['tmp_name'];
    $gambar_blob = addslashes(file_get_contents($gambar));
    $query_update = "UPDATE tb_pasien SET nama = '$nama', tgl_lahir = '$tanggal', gender = '$jk', alamat = '$alamat', nomor_telp = '$telp', image = '$gambar_blob' WHERE id_pasien = $id";
} else {
    $query_update = "UPDATE tb_pasien SET nama = '$nama', tgl_lahir = '$tanggal', gender = '$jk', alamat = '$alamat', nomor_telp = '$telp' WHERE id_pasien = $id";
}

$result_update = mysqli_query($konek, $query_update);

if ($result_update) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Gagal melakukan update.";
}
?>
