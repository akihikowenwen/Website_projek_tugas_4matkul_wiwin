<?php 

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = '';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap4.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
    <div class="nav_  bg-black">
        <div class="container">
            <nav class="nav d-flex justify-content-between">
                <a href="test2.php?page=komputer" class="nav-link <?php if($page==='komputer'){echo 'active';} ?>">Komputer</a>
                <a href="test2.php?page=kesehatan" class="nav-link <?php if($page==='kesehatan'){echo 'active';} ?>">Kesehatan</a>
                <a href="test2.php?page=komik" class="nav-link <?php if($page==='komik'){echo 'active';} ?>">Komik</a>
                <a href="test2.php?page=novels" class="nav-link <?php if($page==='novels'){echo 'active';} ?>">Novels</a>
                <a href="test2.php?page=pelajaran" class="nav-link <?php if($page==='pelajaran'){echo 'active';} ?>">Pelajaran</a>
            </nav>
        </div>
    </div>
</body>
</html>