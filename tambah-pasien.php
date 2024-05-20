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
    <a class="active item">
      Home
    </a>
    <a class="item">
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
            <a class="item" href="index.php">
                Data Pasien
                <i class="heart outline icon"></i>
            </a>
            <a class="active item" href="tambah-pasien.php">
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
            <h3>Tambah Data Pasien</h3>

            <div class="ui form">
            <form action="fun/tambah_pasien.php" method="POST" enctype="multipart/form-data">
                <div class="three fields">
                    <div class="field">
                        <label>Nama</label>
                        <input type="text" name="nama" placeholder="Nama">
                    </div>
                    <div class="field">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal" id="">
                    </div>
                    <div class="field">
                        <label>Jenis Kelamin</label>
                        <select name="jk">
                        <option value="">Jenis Kelamin</option>
                        <option value="laki-laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="three fields">
                    <div class="field">
                        <label>Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="field">
                        <label>Nomor Telepon</label>
                        <input type="number" name="telp" placeholder="08XXXXX">
                    </div>
                    <div class="field">
                      <label>Foto Pasien | [gambar tidak boleh lebih dari 1MB]</label>
                      <input type="file" name="gambar">
                    </div>
                </div>

                <button type="submit" class="ui secondary button">
                    Submit
                </button>
            </form>
          </div>
        </div>
      </div> 
    </div>
      
      <div class="ui center aligned inverted segment">
        <p>Copyright © Chikal Lyra 2024</p>
      </div>
</body>
</html>