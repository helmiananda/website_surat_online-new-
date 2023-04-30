<?php

session_start();

if (!isset($_SESSION["surat"])) {
    header("Location : index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Surat | Surat Online RT. 07</title>
    <link rel="stylesheet" href="stylea.css">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <nav class="background">
        <div class="wrapper">
            <div class="logo">
                Surat Online RT. 07
            </div>
            <div class="menu">
                <ul>
                    <li class="hover"><a href="home.php">Home</a></li>
                    <li class="hover"><a href="aboutus.php">About Us</a></li>
                    <li class="hover"><a href="tatacara.php">Panduan</a></li>
                    <li class="hover"><a href="downloadsurat.php">Download Surat</a></li>
                    <li class="hover"><a href="inputdata_surat.php"> Input Data</a></li>
                    <li><a href="logout.php" class="btn-pink">Log out </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="marginlrdownloadsurat">
        <div class="margin">
            <div class="kolom">
                <div class="header"> Silahkan Download Surat Yang Anda Inginkan</div>
                <p>Surat Pengantar
                    <br>
                    <button class="button-download" id="margin-btnsuratpengantar" onclick="JavaScript:window.location.href='directdownload.php?file=Surat Pengantar RT.docx';"> Download Surat Pengantar RT</button>
                    <br>
                <p>Surat Keterangan
                    <br>
                    <button class="button-download" id="margin-btnsuratketerangan" onclick="JavaScript:window.location.href='directdownload.php?file=Surat Keterangan.docx';"> Download Surat Keterangan RT</button>
                    <br>
                <p>Surat Keterangan Berdomisili<br>
                    <button class="button-download" id="margin-btnketeranganberdomisili" onclick="JavaScript:window.location.href='directdownload.php?file=Surat Keterangan Berdomisili.docx';"> Download Surat Keterangan Domisili</button>
                    <br>
                <p> Hubungi Ketua RT atau Sekretaris RT untuk Mengetahui Nomor Surat</p>
                <a href="https://api.whatsapp.com/send?phone=6285877929432&text=Halo%20Saya%20(Masukkan Nama Anda)%20Ingin%20Meminta%20Nomor%20Surat%20Untuk%20(Nama Surat Yang DIbutuhkan)"> <button class="button-wa-rt" a href="https://api.whatsapp.com/send?phone=6285877929432&text=Halo%20Saya%20(Masukkan Nama Anda)%20Ingin%20Meminta%20Nomor%20Surat%20Untuk%20(Nama Surat Yang DIbutuhkan)"> Hubungi Ketua RT </button> </a>
                <a class="hubungi-sekretaris" href="https://api.whatsapp.com/send?phone=6285877929432&text=Halo%20Saya%20(Masukkan Nama Anda)%20Ingin%20Meminta%20Nomor%20Surat%20Untuk%20(Nama Surat Yang DIbutuhkan)"> <button class="button-wa-rt"> Hubungi Sekretaris RT </button> </a>

            </div>
            <img class="suratdownloadgambarpage" src="download/Illustrasi Surat 5.avif" />

            </section>

</body>

</html>