<?php
require 'functions.php';
$kategori_id=$_GET['kategori'];
$kategori = query("SELECT * FROM kategori");
$news=query("SELECT * FROM news_tubes WHERE kategori='$kategori_id'");

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tribun Unpas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
            <form class="d-flex" role="Login">
                <a href="login.php" class="btn btn-outline-success me-2" type="button">Login</a>
                <a href="Registrasi.php" class="btn btn-sm btn-outline-secondary" type="button">Register</a>
                </form>
            </div>
        </div>
    </nav>

 <div class="container-fluid">
    <div class="row">
        <?php 
        foreach($news as $new):

        
        ?>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                <img class="img-fluid" src="admin/img/<?= $new['foto']?>" alt="">
        
                <b> <a href="detail.php?id=<?= $new['id']?>"> <p><?= $new['judul']?><p> </a> </b>
               
                </div>
            </div>
        </div>
        <?php 
        endforeach;
        ?>
    
        
        
    </div>
 </div>

  </body>
    </html>
</html>
</body>
</html>
<style>
  
  .article {
    width: 100%;
    height: 50vh;
    background-color: black;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    align-items: center;
}
.article-text {
    display: flex;
}
.article-text h4 {
    color: white;
    padding: 5px;
}
.article-text .material-icons {
    color: white;
}
.container {
    padding: 100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    margin: 5px 15px;
    gap: 20px;
    padding-bottom: 100px;
    position: relative;
}
.card {
    width: 100%;
    height: auto;
    grid-column: span 2;
    margin: 10px 0;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
    background-color: rgba( 255, 255, 255);
    transition: all 0.5s;
}
.head-card {
    padding : 20px;
    padding-bottom: 10px;
}
.head-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
.body-card a{
    padding: 10px 15px;
}
.body-card h1 {
    margin: 0;
    text-align: center;
    font-size: 24px;
    padding-top: 10px;
    font-family: 'Kanit';
}
.body-card p {
    margin: 0;
    text-align: center;
    font-size: 15px;
    color: rgba(0, 0, 0);
}
.body-card .buy {
    background-color: black;
    width: 100%;
    height: 40px;
    border-radius: 10px;
    text-align: center;
    transition: all 0.5s;
}
.body-card h3 {
    color: rgba(0, 0, 0);
    text-align: center;
    font-size: 12px;
}
.rating {
    color: #db6301;
    text-align: center;
    font-size: 22px;
}
.card-hover {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
    cursor: pointer;
}
.card a{
    color: black;
}
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>