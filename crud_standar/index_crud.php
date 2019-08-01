<div class="container-fluid pt-4" style="background-color:white">
    <div class="row">
        <div class="col text-center">
            <h2>
                Table Data Buku
            </h2>
        </div>
        <div class="w-100"></div>
        <div class="col text-center">
            
            <?php
                if($_GET['action']=="show"){
                    echo '<a href="index.php?page=crud&&action=input" class="btn btn-outline-success w-25">Tambah Data</a>';
                }
                if($_GET['action']=="input"){
                    echo '
                    <a href="index.php?page=crud&&action=show" class="btn btn-outline-success w-25">Close</a>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-6">
                                    <form action="index.php?page=crud&&action=proses" method="POST">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter judul" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskrispi">Deskripsi</label>
                                            <input type="text" class="form-control" name="deskrispi" id="deskrispi" placeholder="deskripsi" required>
                                        </div>
                                        <button type="submit" name="input" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                }
                if($_GET['action']=="proses"){
                    $title = $_POST['title'];
                    $deskripsi = $_POST['deskrispi'];
                    $q = mysql_query("insert into tb_iseng Values(NULL,'$title','$deskripsi')");
                    if($q){
                        redir("index.php?page=crud&&action=show");
                    }
                }
            ?>
        </div>
        <div class="w-100 my-3"></div>
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $q = mysql_query("SELECT * FROM tb_iseng");
                        while($x = mysql_fetch_array($q)){
                    ?>
                    <tr class="text-center">
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $x['title']; ?></td>
                        <td><?php echo $x['description']; ?></td>
                        <td> 
                            <a href="" class="btn btn-outline-primary">
                                Edit Data
                            </a>
                            <a href="" class="btn btn-outline-danger">
                                Delete Data
                            </a>
                        </td>
                    </tr>
                    <?php
                        $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>