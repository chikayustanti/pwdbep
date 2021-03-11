<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Beranda Berita</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a href="#" class="navbar-brand text-white"><b>BERITA</b></a>
        <ul class="navbar-nav">
            <?php
            $level = $_SESSION['level'] == 'user';
            if($level){
            ?>
            <li class="nav-item ">
                <a href="#" class="text-white nav-link">Tentang</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="text-white nav-link">Logout</a>
            </li>
            <?php } else{ ?>
            <li class="nav-item ">
                <a href="#" class="text-white nav-link">Hapus</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="text-white nav-link">Upload</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="text-white nav-link">Tentang</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="text-white nav-link">Logout</a>
            </li>
            <?php } ?>
        </ul>
    </nav>  

    <div class="bg-warning"> <br><br><br><br>
        <h1 class="text-center">PORTAL BERITA INDONESIA</h1>
        <br><br><br><br>
    </div>

    <div class="container pt-5">
        <div class="row text-center">
                <div class="col">
                    <div class="card" style="width: 300px;">
                        <img src="berita.jpg" alt="Tas" class="card-img-top" style="width: 100%; height: 300px">
                        <div class="card-body">
                                <h4 class="card-title">Berita 1</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, eveniet?</p>
                            <?php
                            $level = $_SESSION['level'] == 'user';
                            if($level){
                            ?>
                                <a href="" class="btn btn-success m-1">Baca berita</a>
                                <?php }else{ ?>
                                <a href="" class="btn btn-primary m-1">Edit Berita</a>
                                <a href="" class="btn btn-warning m-1">Hapus Berita</a>
                                <a href="" class="btn btn-success m-1">Baca Berita</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 300px;">
                        <img src="berita2.jpeg" alt="Tas" class="card-img-top" style="width: 100%; height: 300px">
                        <div class="card-body">
                            <h4 class="card-title">Berita 2</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, eveniet?</p>
                            <?php
                            $level = $_SESSION['level'] == 'user';
                            if($level){
                            ?>
                            <a href="" class="btn btn-success m-1">Baca Berita</a>
                            <?php }else{ ?>
                            <a href="" class="btn btn-primary m-1">Edit Berita</a>
                            <a href="" class="btn btn-warning m-1">Hapus Berita</a>
                            <a href="" class="btn btn-success m-1">Baca Berita</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 300px;">
                        <img src="berita3.jpg" alt="Tas" class="card-img-top" style="width: 100%; height: 300px">
                        <div class="card-body">
                            <h4 class="card-title">Berita 3</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, eveniet?</p>
                            <?php
                            $level = $_SESSION['level'] == 'user';
                            if($level){
                            ?>
                            <a href="" class="btn btn-success m-1">Baca Berita</a>
                            <?php }else{ ?>
                            <a href="" class="btn btn-primary m-1">Edit Berita</a>
                            <a href="" class="btn btn-warning m-1">Hapus Berita</a>
                            <a href="" class="btn btn-success m-1">Baca Berita</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
                    <div class="row text-center pt-5 mb-5">
                        <div class="col">
                            <div class="card" style="width: 300px;">
                                <img src="berita4.jpg" alt="Tas" class="card-img-top" style="width: 100%; height: 300px">
                                <div class="card-body">
                                    <h4 class="card-title">Berita 4</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, eveniet?</p>
                                    <?php
                                    $level = $_SESSION['level'] == 'user';
                                    if($level){
                                    ?>
                                    <a href="" class="btn btn-success m-1">Baca Berita</a>
                                    <?php }else{ ?>
                                    <a href="" class="btn btn-primary m-1">Edit Berita</a>
                                    <a href="" class="btn btn-warning m-1">Hapus Berita</a>
                                    <a href="" class="btn btn-success m-1">Baca Berita</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 300px;">
                                <img src="berita5.jpg" alt="Tas" class="card-img-top" style="width: 100%; height: 300px">
                                <div class="card-body">
                                    <h4 class="card-title">Berita 5</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, eveniet?</p>
                                    <?php
                                    $level = $_SESSION['level'] == 'user';
                                    if($level){
                                    ?>
                                    <a href="" class="btn btn-success m-1">Baca Berita</a>
                                    <?php }else { ?>
                                    <a href="" class="btn btn-primary m-1">Edit Berita</a>
                                    <a href="" class="btn btn-warning m-1">Hapus Berita</a>
                                    <a href="" class="btn btn-success m-1">Baca Berita</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</body>
</html>