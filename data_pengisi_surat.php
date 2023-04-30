<?php
require 'function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM input_data_surat
WHERE
 nama LIKE '%$keyword%' OR
 no_rumah LIKE '%$keyword%' OR
 jk LIKE '%$keyword%' OR
 nik LIKE '%$keyword%' OR
no_surat LIKE '%$keyword%' OR
jenis_surat LIKE '%$keyword%'

 ";
$input_data_surat = query($query);

?>

<table border="1">
        <thead>
            <tr>
            <td>No.</td> 
            <td>Mengubah Data</td> 
              <td> Menghapus Data</td> 
                <td>NIK</td>
                <td>Nama</td> 
                <td>Jenis Kelamin</td> 
                <td>Nomor Rumah</td> 
                <td>Jenis Surat</td> 
                <td>Nomor Surat</td> 
    </tr>
    <?php $no = 1; ?>
    <?php
foreach ( $input_data_surat as $row) : 
?>
<tr>
    <td> <?= $no; ?> </td>
    <td><a class="text-ubahdata" href="ubah.php"> ubah </a>
    <td><a class="text-hapusdata" href="hapus.php"> hapus </a>
    <td> <?= $row ["nik"]; ?> </td>
    <td> <?= $row ["nama"]; ?> </td>
    <td> <?= $row ["jk"]; ?> </td>
    <td> <?= $row ["no_rumah"]; ?> </td>
    <td> <?= $row ["jenis_surat"]; ?> </td>
    <td> <?= $row ["no_surat"]; ?> </td>

</tr>
<?php $no++; ?>
<?php endforeach ?>
<?php
?>
</table>

