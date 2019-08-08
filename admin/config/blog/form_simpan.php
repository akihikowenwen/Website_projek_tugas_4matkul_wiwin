<?php
include "./../config/conn.php";
?>
<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Tambah USer</h1>
  <form method="post" action="index.php?page=simpan" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Kota</td>
    <td>
      <label for="inputState">Kota</label>
      <select id="inputState" class="form-control">
        <?php
          $p = mysqli_query($connect,"SELECT * FROM tb_kota");
          while($s = mysqli_fetch_array($p)){
        ?>
          <option value="<?php echo $s['nama_kota']; ?>"><?php echo $s['nama_kota']; ?></option>
        <?php
        echo $s['nama_kota'];
          }
        ?>
      </select>

    </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><input type="text" class="form-control" name="nama_user" required></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" class="form-control" name="email_user  " required></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" class="form-control" name="password" required></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea class="form-control" name="Alamat" required></textarea></td>
  </tr>
    <td>No Telp/td>
    <td><input type="number" class="form-control" name="no_tlp" required></textarea></td>
  </tr>
  <tr>
    </form>
        <select name="Status">
          <option value="Unspecified">specifikasi</option>
          <option value="admin">Male</option>
          <option value="User">Female</option
        </select>
    </form>
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