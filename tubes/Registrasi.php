<?php
require('functions.php');

if(isset($_POST["registrasi"])) {

    if(registrasi($_POST) > 0) {
        echo "
            <script>
                alert('Register Succes');
                document.location.href = 'login.php';
            </script>
        ";
    } else {
        return mysqli_error($conn);
    }
}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tribun Unpas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    
<style>
    body{
        height: 100vh;
        background-image: url (Masukkan link);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .container{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        padding: 20px 25px;
        width: 300px;

        background-color: rgba(0,0,0,.7);
        box-shadow: 0 0 10px rgba(255,255,255,.3);}

    .container h1{
        text-align: left;
        color: #fafafa;
        margin-bottom: 30px;
        text-transform: uppercase;
        border-bottom: 4px solid #2979ff;
    }
    .container label{
        text-align: left;
        color: #90caf9;
    }
    .container form input{
        width: calc(100% - 20px);
        padding: 8px 10px;
        margin-bottom: 15px;
        border: none;
        background-color: transparent;
        border-bottom: 2px solid #2979ff;
        color: #fff;
        font-size: 20px;
    }
    .container form button{
        width: 100%;
        padding: 5px 0;
        border: none;
        background-color:#2979ff;
        font-size: 18px;
        color: #fafafa;
    }

    button a{
        color: white;
    }
    </style>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Tribun Unpas
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">HOME
            </a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                NEWS
            </a>
            <ul class="dropdown-menu">
                <?php foreach($kategori as $kategori) :?>
                <li><a class="dropdown-item" href="kategori.php?kategori=<?= $kategori['id_kategori'] ?>"><?= strtoupper($kategori['nama_kategori']) ?></a></li>
                <?php endforeach ?>
            </ul>   
            </li>
            <li class="nav-item">
            </li>
        </ul>
        </div>
    </div>
</nav>

<!DOCTYPE HTML>
<head>
        <title>Halaman Registrasi</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Registrasi</h1>
            <form action="" method="post">
                <label>Username</label><br>
                <input type="text" name="username" id="username"><br>
                <label>Password</label><br>
                <input type="password" name="password" id="password"><br>
                <button type="submit" name="registrasi" id="registrasi">Daftar</button>
            </form>
        </div>     
    </body>
</html>

<footer class="bg-light text-lg-start fixed-bottom">


<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2023 
  <a class="text-dark" href="index.php">Tribun Unpas</a>
</div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>