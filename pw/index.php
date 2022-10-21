<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Just Read It !</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <style type="text/css">
      * {
        background-image: url(gambar/bg1.jpg);
        font-family: "Trebuchet MS";
      }
    table {
      border: solid 4px;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 2px;
        padding: 10px;
        text-align: center;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 3px;
        color: black;
        text-align: center;
        padding: 10px;
    }

    </style>
  </head>
  <body>
    <center><h1><b><u>Just Read It !</u></b></h1><center>

    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Author</th>
          <th>Jumlah Halaman</th>
          <th>Harga</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM buku ORDER BY no ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
           <td><?php echo $row['author']; ?></td>
           <td><?php echo $row['jumlah_halaman']; ?></td>
           <td>Rp.<?php echo $row['harga']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td>
              <a class='btn btn-primary btn-sm' href="edit_produk.php?id=<?php echo $row['no']; ?>">Update Data</a>
              <a class='btn btn-danger btn-sm' href="proses_hapus.php?id=<?php echo $row['no']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus Data</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    <a class="btn btn-primary" href="tambah_produk.php" role="button">Tambahkan Produk</a>

  </body>
</html>