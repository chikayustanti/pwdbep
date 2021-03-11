<?php
    session_start();
    include 'pwdpb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

    <title>Login</title>
</head>
<body class="bg-dark">
    <div class="m-5 bg-white rounded">
        <h1 class="d-flex justify-content-center pt-5">Login</h1>
        <br><br><br><br><br>
        <form action="" method="POST">
            <label for="" class="d-flex justify-content-center"><b>Username</b></label>
            <div class="form-group d-flex justify-content-center">
                <input class="form-control ml-5 mr-5 border-bottom" type="text" name="user" placeholder="Masukkan Username anda">
            </div>
            <label for="" class="d-flex justify-content-center"><b>Password</b></label>
            <div class="form-group d-flex justify-content-center">
                <input class="form-control ml-5 mr-5 border-bottom" type="password" name="pass" placeholder="Masukkan Password anda disini">
            </div>
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn-dark form-control m-5" type="submit" name="login" value="Login">Login</button>
            </div>
            <br><br>
          </form>
          <?php
          if(isset($_POST['login'])){
              $user = $_POST['user'];
              $pass = $_POST['pass'];
              $data_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
              $r = mysqli_fetch_array($data_user);
              $username = $r['username'];
              $password = $r['password'];
              $level = $r['level'];
              if($user == $username && $pass == $password){
                  $_SESSION['level'] = $level;
                  header('location:beranda.php');
              }else{
                  echo 'Username atau Password anda salah!';
              }
          }
          ?>
    </div>
</body>
</html>