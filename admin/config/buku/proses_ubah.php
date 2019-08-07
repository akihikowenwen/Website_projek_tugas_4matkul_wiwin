
  <?php
  // Load file koneksi.php
  include "./../config/conn.php";
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id_buku = $_GET['id'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM tb_buku WHERE id_buku='".$id_buku."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="proses_ubah.php?id_buku=<?php echo $id_buku; ?>" enctype="multipart/form-data">
  <table cellpadding="8"> `
  <tr>
    <td>Kategori</td>
    <td><input type="text" name="id_kategori" class="form-control" value="<?php echo $data['id_kategori']; ?>"></textarea></td>
  </tr>
  <tr>
    <td>Judul Buku</td>
    <td><input type="text" class="form-control" name="judul_buku" value="<?php echo $data['judul_buku']; ?>"></td>
  </tr>
  <tr>
    <td>Penerbit</td>
    <td><input type="text" class="form-control" name="penerbit" value="<?php echo $data['penerbit']; ?>"></td>
  </tr>
  <tr>
    <td>Penulis</td>
    <td><input type="text" class="form-control" name="penulis" value="<?php echo $data['penulis']; ?>"></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td><textarea class="form-control" name="deskripsi"><?php echo $data['deskripsi']; ?></textarea></td>
  </tr>
  <tr>
    <td>Tahun Terbit</td>
    <td><input type="date" class="form-control" name="tahun-terbit" value="<?php echo $data['tahun_terbit']; ?>"></td>
  <tr>
    <td>Harga</td>
    <td><input type="number" class="form-control" name="harga" value="<?php echo $data['harga']; ?>"></textarea></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td><input type="number" class="form-control" name="jml" value="<?php echo $data['jml']; ?>"></textarea></td>
  </tr>
  
  <tr>
    <td>Foto</td>
    <td>
      <input type="file" class="form-control" name="foto" value="<?php echo $data['foto']; ?>"><br>
    </td>
  </tr>
  </tr>
  </table>
  
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="index.php?page=buku"> </a>
  <input type="button" value="Batal">
  </form>
