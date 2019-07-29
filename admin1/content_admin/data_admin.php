<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap4.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
<h3>Daftar User</h3>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">email</th>
      <th scope="col">username</th>
      <th scope="col">No Hp</th>
      <th scope="col">Alamat</th>
      <th>action</th>
      </tr>
    <tr>
      <th scope="row">1</th>
      <th>agus</th>
      <td>Agus@gmail.com</td>
      <td>agus_ganteng</td>
      <th>089725868</th>
      <td>bekasitengah jl rt 003 rw004</td>
      <td>
        <a class="btn btn-sm btn-success" href="user.php?act=edit&&id=<?php echo $data->id ?>">Edit</a>
	    <a class="btn btn-sm btn-danger" href="user.php?act=delete&&id=<?php echo $data->id ?>">Delete</a>
            
      </td>
      <tr>
      <th scope="row">1</th>
      <th>agus</th>
      <td>Agus@gmail.com</td>
      <td>agus_ganteng</td>
      <th>089725868</th>
      <td>bekasitengah jl rt 003 rw004</td>
      <td>
        <a class="btn btn-sm btn-success" href="user.php?act=edit&&id=<?php echo $data->id ?>">Edit</a>
	    <a class="btn btn-sm btn-danger" href="user.php?act=delete&&id=<?php echo $data->id ?>">Delete</a>
            
      </td>
      <tr>
      <th scope="row">1</th>
      <th>agus</th>
      <td>Agus@gmail.com</td>
      <td>agus_ganteng</td>
      <th>089725868</th>
      <td>bekasitengah jl rt 003 rw004</td>
      <td>
        <a class="btn btn-sm btn-success" href="user.php?act=edit&&id=<?php echo $data->id ?>">Edit</a>
	    <a class="btn btn-sm btn-danger" href="user.php?act=delete&&id=<?php echo $data->id ?>">Delete</a>
            
      </td>
    </tr>
    
  </tbody>
</table>
</body>
</html>