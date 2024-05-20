<?php
include "koneksi.php";

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$gender = $_POST['jk'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

// Cek apakah ada file gambar yang diunggah
if(isset($_FILES['gambar'])) {
    $gambar = $_FILES['gambar']['tmp_name'];
    $gambar_blob = addslashes(file_get_contents($gambar));
    
    // Cek apakah terjadi error saat mengunggah gambar
    if ($_FILES['gambar']['error'] !== UPLOAD_ERR_OK) {
        $uploadErrors = [
            UPLOAD_ERR_INI_SIZE => 'Ukuran file terlalu besar.',
            UPLOAD_ERR_FORM_SIZE => 'Ukuran file terlalu besar.',
            UPLOAD_ERR_PARTIAL => 'File hanya diunggah sebagian.',
            UPLOAD_ERR_NO_FILE => 'Tidak ada file yang diunggah.',
            UPLOAD_ERR_NO_TMP_DIR => 'Direktori penyimpanan sementara tidak ditemukan.',
            UPLOAD_ERR_CANT_WRITE => 'Gagal menyimpan file ke disk.',
            UPLOAD_ERR_EXTENSION => 'File dihentikan oleh ekstensi PHP.'
        ];

        $errorCode = $_FILES['gambar']['error'];

        $errorMessage = isset($uploadErrors[$errorCode]) ? $uploadErrors[$errorCode] : 'Error tidak diketahui saat mengunggah gambar.';
        
        echo "<script> 
               alert('Error saat mengunggah gambar: " . addslashes($errorMessage) . "');
               window.location='tambah-pasien.php';
               </script>";
        exit; // Keluar dari skrip jika terdapat masalah pada unggahan gambar
    }
} else {
    // Jika tidak ada file gambar yang dipilih
    echo "<script> 
           alert('Mohon pilih gambar terlebih dahulu.');
           window.location='../tambah-pasien.php';
           </script>";
    exit; // Keluar dari skrip jika tidak ada file gambar yang dipilih
}

$query = "INSERT INTO tb_pasien (nama, tgl_lahir, alamat, gender, nomor_telp, image) 
VALUES ('$nama', '$tanggal', '$alamat', '$gender', '$telp', '$gambar_blob')";
$sql = mysqli_query($konek, $query);

if ($sql) {
    echo "<script> 
           alert('Anda Berhasil ditambahkan!');
           window.location='../index.php';
           </script>";
} else {
    echo "<script> 
           alert('Data Gagal ditambahkan!');
           window.location='../tambah-pasien.php';
           </script>";
}
?>
