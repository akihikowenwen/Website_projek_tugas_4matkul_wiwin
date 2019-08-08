<?php
include "./../config/conn.php";
?>
<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Data Buku</h1>
  <form method="post" action="index.php?page=simpan" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Kategori</td>
    <td>

      <select id="inputState" class="form-control">
        <?php
          $p = mysqli_query($connect,"SELECT * FROM tb_kategori");
          while($s = mysqli_fetch_array($p)){
        ?>
          <option value="<?php echo $s['nama_kategori']; ?>"><?php echo $s['nama_kategori']; ?></option>
        <?php
        echo $s['nama_kategori'];
          }
        ?>
      </select>

    <!-- <input type="text" name="id_kategori" class="form-control" required></textarea> -->
    </td>
  </tr>
  <tr>
    <td>Judul Buku</td>
    <td><input type="text" class="form-control" name="judul_buku" required></td>
  </tr>
  <tr>
    <td>Penerbit</td>
    <td><input type="text" class="form-control" name="penerbit" required></td>
  </tr>
  <tr>
    <td>Penulis</td>
    <td><input type="text" class="form-control" name="penulis" required></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td><textarea class="form-control" name="deskripsi" required></textarea></td>
  </tr>
  <tr>
    <td>Tahun Terbit</td>
    <td><input type="date" class="form-control" name="tahun-terbit" required></td>
  <tr>
    <td>Harga</td>
    <td><input type="number" class="form-control" name="harga" required></textarea></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td><input type="number" class="form-control" name="jml" required></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" class="form-control" name="foto" required></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php?page=sukses"><input type="button" value="Batal"></a>
  </form>
</body>
</html>