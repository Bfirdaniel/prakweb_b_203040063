<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_2022_b_203040063");

// ambil dari tabel buku query
$result = mysqli_query($conn, "SELECT * FROM buku");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel buku
$bk = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="logo.jpeg" rel="shorcut icon">
  <title>Penjualan buku awal</title>
</head>

<body>

  <center><h1>Just Read It !<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  </head>
  <body>

  </body>
  </html></h1></center>

<center><table border="3" cellpading="10" cellspacing="0"></center>
    <tr bgcolor="#FFCC00" class="text-center">
      <th>No</th>
      <th>Nama buku</th>
      <th>Penulis</th>
      <th>Gambar</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($bk as $rows) : ?>
    <tr>
        <td><?= $rows["id"]; ?></td>
        <td style="vertical-align : middle;text-align:center;"><?= $rows["nama_buku"]; ?></td>
        <td style="vertical-align : middle;text-align:center;"><?= $rows["penulis_buku"]; ?></td>
        <td>
          <figure class="figure">
            <img class="rounded" src="img/<?= $rows["img"]; ?>" width="180px" height="210px">
          </figure>
        </td>
        <td style="vertical-align : middle;text-align:center;"><b><p>Rp.<?= $rows["harga"]; ?><p></td></b>
        
      <?php endforeach; ?> 
    </table>
    <a href="tambah_produk.php"><button type="button" class="btn btn-outline-dark mt-3">Tambahkan Produk</button></a>
</html