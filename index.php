<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/semantic.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <script src="css/semantic.js"></script>
    <script src="css/semantic.min.js"></script>
    <script src="css/semantic.js"></script>
    <title>Infosien</title>
</head>
<body>

<div class="ui inverted segment">
  <div class="ui inverted secondary menu">
    <a class="header item"><h2>Infosien</h2></a>
    <div class="right menu">
    <a class="item">
      Home
    </a>
    <a class="active item">
      Pasien
    </a>
    <a class="item">
      Riwayat Medis
    </a>
    </div>
  </div>
</div>

    <div class="ui grid">
        <div class="four wide column">
          <div class="ui vertical fluid tabular menu">
            <a class="active item" href="index.php">
                Data Pasien
                <i class="heart outline icon"></i>
            </a>
            <a class="item" href="tambah-pasien.php">
                Tambah Data Pasien
                <i class="plus icon"></i>
            </a>
            <a class="item" href="rimedis.php">
                Riwayat Medis
                <i class="clipboard outline icon"></i>
            </a>
            <a class="item" href="tambah-rimedis.php">
                <i class="first aid icon"></i>
                Tambah Catatan Medis
            </a>
          </div>
        </div>

        <div class="twelve wide stretched column">
          <div class="ui segment">
            <h3>Data Pasien</h3>
          <table class="ui celled table">
                <thead>
                    <tr><th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr></thead>
                <tbody>
                    <?php
                    include "fun/koneksi.php";

                    $sql = "SELECT*FROM tb_pasien";
                    $result = mysqli_query($konek, $sql);
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['tgl_lahir'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "<td>" . $row['nomor_telp'] . "</td>";
                        echo "<td><img class='ui tiny image' src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='image'></td>";
                        echo "<td>
                        <a href='edit-pasien.php?id=$row[id_pasien]'><button class='ui blue button'>Edit</button></a>
                        <a href='fun/hapus_pasien.php?id=$row[id_pasien]'><button class='ui red button'>Hapus</button></a>
                        </td>";
                    }
                    ?>
                </tbody>
            </table>
          </div>
        </div>
      </div> 
      
      <div class="ui center aligned inverted segment">
        <p>Copyright © Chikal Lyra 2024</p>
      </div>
</body>
</html>