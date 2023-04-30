<?php
session_start();
if (!isset($_SESSION["surat"])) {
    header("Location: index.php");
    exit;
}
require 'function.php';
// mengecek tombol submit apakah sudah di pencet apa belom
if (isset($_POST["submit"])) {





    // mengecek apakah data berhasil ditambahkan atau tidak

    if (tambah($_POST) > 0) {

        echo "<script> alert ('Data berhasil ditambahkan!');
    document.location.href = 'inputdata_surat.php'; </script>";
    } else {

        echo "<script> alert ('Data gagal ditambahkan!');
        document.location.href = 'inputdata_surat.php'; </script>";
    }
}
?>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | Surat Online RT. 07</title>
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
            <div class="kolom-tambahdata">

                </head>

                <body>
                    <h1> Tambah data Pengisi Surat</h1>
                    <br>
                    <form action="" method="post">
                        <ul>
                            <li>
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" id="nik" class="input" autocomplete="off" required>
                            </li> <br>
                            <li>
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="input" autocomplete="off" required>
                            </li> <br>
                            <li>
                                <label for="jk">Jenis Kelamin</label>
                                <input type="radio" name="jk" value="Laki-laki" id="jk" class="radio" autocomplete="off" required> Laki-laki
                                <input type="radio" name="jk" value="Perempuan" id="jk" class="radio" autocomplete="off" required> Perempuan

                            </li> <br>
                            <li>
                                <label for="no_rumah">Nomor Rumah</label>
                                <input type="text" name="no_rumah" id="no_rumah" class="input" autocomplete="off" required>
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
                                <label for="no_surat">Nomor Surat</label>
                                <input type="text" name="no_surat" id="no_surat" class="input" autocomplete="off" required>
                            </li> <br>

                            <button type="submit" name="submit" class="button-submit"> Tambahkan data anda !</button>
                            <br>
                        </ul>


                    </form>
                </body>

</html>