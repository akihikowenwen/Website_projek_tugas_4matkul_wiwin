<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah Data Siswa</h1>
  <form method="post" action="proses_input_buku.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>No</td>
    <td><input type="text" name="id_buku"></td>
  </tr>
  <tr>
    <td>Nama Buku</td>
    <td><input type="text" name="judul_buku"></td>
  </tr>
 
  <tr>
    <td>pengarang</td>
    <td><input type="text" name="pengarang"></td>
  </tr>
  <tr>
    <td>penerbit</td>
    <td><textarea name="penerbit"></textarea></td>
  </tr>
  <tr>
    <td>deskripsi</td>
    <td><textarea name="deskripsi"></textarea></td>
  </tr>
  <tr>
    <td>tahun_terbit</td>
    <td><textarea name="tahun_terbit"></textarea></td>
  </tr>
  <tr>
    <td>harga</td>
    <td><textarea name="harga"></textarea></td>
  </tr>
  <tr>
    <td>jml</td>
    <td><textarea name="jml"></textarea></td>
  </tr>
  <tr>
    <td>pid-kategori</td>
    <td><textarea name="id_kategori"></textarea></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>