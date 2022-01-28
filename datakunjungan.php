<?php
$koneksi=mysqli_connect("localhost","root","","data_kunjungan");
$hasil=mysqli_query($koneksi, "SELECT * FROM tb_kunjungan");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="10" align="center">
  <caption><h1> Daftar Kunjungan</h1></caption>
  <tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jenis kelamin</th>
    <th>Tgl Lahir</th>
    <th>Tgl chack In</th>
    <th>Tgl chack Out</th>
  </tr>
  <?php $i=1; ?>
  <?php while($row=mysqli_fetch_assoc($hasil)) : ?>
    <tr>
        <td><?=$i;?></td>
        <td><?=$row["nama"];?></td>
        <td><?=$row["alamat"];?></td>
        <td><?=$row["jenis kelamin"];?></td>
        <td><?=$row["tanggal lahir"];?></td>
        <td><?=$row["tgl check in"];?></td>
        <td><?=$row["tgl check out"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>


</table>
</body>
</html>