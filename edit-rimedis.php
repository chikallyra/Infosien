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
            <a class="item" href="tambah-pasien.php">
                Tambah Data Pasien
                <i class="plus icon"></i>
            </a>
            <a class="item" href="rimedis.php">
                Riwayat Medis
                <i class="clipboard outline icon"></i>
            </a>
            <a class="active item" href="tambah-rimedis.php">
                <i class="first aid icon"></i>
                Tambah Catatan Medis
            </a>
          </div>
        </div>

        <div class="twelve wide stretched column">
          <div class="ui segment">
            <h3>Tambah Catatan Pasien</h3>

            <div class="ui form">
            <form action="fun/edit_rimed.php" method="POST">
                <?php
                include "fun/koneksi.php";

                $id = $_GET['id'];
                $sql = "SELECT tb_rimed.id_rimed, tb_rimed.tgl_kunjungan, tb_rimed.diagnosis, tb_rimed.pengobatan, tb_rimed.catatan, tb_pasien.nama
                        FROM tb_rimed
                        INNER JOIN tb_pasien ON tb_rimed.id_pasien = tb_pasien.id_pasien
                        WHERE tb_rimed.id_rimed = $id";
                $result = mysqli_query($konek, $sql);
                $go = mysqli_fetch_array($result);

                $id = $go[0];
                $tgl = $go[1];
                $diagnosis = $go[2];
                $pengobatan = $go[3];
                $catatan = $go[4];
                $pasien = $go[5];
                
                ?>
                <input type="hidden" name="id" value="<?= $id; ?>">
                <div class="three fields">
                    <div class="field">
                    <label>Nama Pasien</label>
                    <input type="text" name="pasien" value="<?= $pasien; ?>" disabled>
                    </div>
                    <div class="field">
                        <label>Tanggal Kunjungan</label>
                        <input type="date" name="tanggal" value="<?= $tgl; ?>">
                    </div>
                    <div class="field">
                        <label>Diagnosis</label>
                        <input type="text" name="diagnosis" value="<?= $diagnosis; ?>" placeholder="Cont: Hipotermia">
                    </div>
                </div>

                <div class="two fields">
                    <div class="field">
                        <label>Pengobatan</label>
                        <input type="text" name="pengobatan" value="<?= $pengobatan; ?>" placeholder="Cont: Paracetamol, Ibuprofen" >
                    </div>
                    <div class="field">
                        <label>Catatan</label>
                        <input type="text" name="catatan" value="<?= $catatan; ?>" placeholder="Catatan">
                    </div>
                </div>
                <button class="ui secondary button">
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