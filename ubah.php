<?php
require 'function.php';


//ambil data di url

$id = $_GET["id"];

// query data siswa berdasarkan id
$input_data_surat = query("SELECT * FROM input_data_surat WHERE id = $id")[0];


// mengecek tombol submit apakah sudah di pencet apa belom
if (isset($_POST["submit"])) {


    // mengecek apakah data berhasil ditambahkan atau tidak

    if (ubah($_POST) > 0) {

        echo "<script> alert ('Data berhasil diubah!');
    document.location.href = 'inputdata_surat.php'; </script>";
    } else {

        echo "<script> alert ('Data gagal diubah!');
        document.location.href = 'inputdata_surat.php'; </script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data | Surat Online RT. 07</title>
    <link rel="stylesheet" href="stylea.css">
    <link rel="shortcut icon" href="favicon.ico">
    <title>
        Input Data Surat
    </title>
</head>

<body>
    <nav class="background">
        <div class="wrapper">
            <div class="logo">
                Surat Online RT. 07</div>
            <div class="menu">
                <ul>
                    <li class="hover"><a href="home.php">Home</a></li>
                    <li class="hover"><a href="aboutus.html">About Us</a></li>
                    <li class="hover"><a href="tatacara.html">Panduan</a></li>
                    <li class="hover"><a href="downloadsurat.php">Download Surat</a></li>
                    <li class="hover"><a href="inputdata_surat.php"> Input Data</a></li>
                    <li><a href="logout.php" class="btn-pink">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="margin">
            <div class="kolom">

                <h1> Ubah Data </h1>
                <br>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $input_data_surat["id"]; ?> ">
                    <ul>
                        <li>
                            <label for="nik">NIK</label>
                            <input type="text" class="input" name="nik" id="nik" required value="<?= $input_data_surat["nik"]; ?> ">
                        </li> <br>
                        <li>
                            <label for="nama">Nama</label>
                            <input type="text" class="input" name="nama" id="nama" required value="<?= $input_data_surat["nama"]; ?>">
                        </li> <br>

                        <li>
                            <label for="jk">Jenis Kelamin</label>
                            <input type="radio" class="radio" name="jk" id="jk" value="Laki-laki" id="jk" required value="<?= $input_data_surat["jk"]; ?>"> Laki-laki
                            <input type="radio" class="radio" name="jk" id="jk" value="Perempuan" id="jk" required value="<?= $input_data_surat["jk"]; ?>"> Perempuan
                        </li> <br>
                        <li>
                            <label for="no_rumah">Nomor Rumah</label>
                            <input type="text" class="input" name="no_rumah" id="no_rumah" required value="<?= $input_data_surat["no_rumah"]; ?>">
                        </li> <br>
                        <li>
                            <label for="jenis_surat">Jenis Surat</label>
                            <input name="jenis_surat" list="surat" id="jenis_surat" class="input" autocomplete="off" required>
                            <datalist id='surat'>
                                <option value="Surat Pengantar">
                                <option value="Surat Keterangan">
                                <option value="Surat Keterangan Berdomisili">
                            </datalist>
                        </li> <br>
                        <li>
                            <label for="no_surat">No Surat</label>
                            <input type="text" class="input" name="no_surat" id="no_surat" required value="<?= $input_data_surat["no_surat"]; ?>">
                        </li> <br>

                        <button type="submit" name="submit" class="button-submit"> Ubah data anda !</button>

                    </ul>


                </form>
</body>

</html>