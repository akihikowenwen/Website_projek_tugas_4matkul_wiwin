<?php 
    $cat = $_GET['cat'];

    echo $cat;

    $query = mysqli_query($con, "SELECT * FROM book WHERE category_name = '$cat' ");
?>