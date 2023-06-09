<?php 
require 'functions.php';

$newsbawah = query("SELECT * FROM news_tubes ORDER BY RAND() LIMIT 0,4");
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

<div class="container-fluid p-4">
    <!--Section: News of the day 1-->
    <section class="border-bottom pb-4 mb-5">
        <div class="row gx-5">
        <div class="col-md-6 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="https://cdn.idntimes.com/content-images/community/2020/09/1600009262892-d7a2929f93e16bef964b9f75db3030e0.jpg" class="img-fluid" class="img-fluid" />
            <a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
        </div>
        </div>
    </section>
    <div class="col-md-8 mb-4">
        <h3> <strong>Begini Reaksi Fandy Christian Usai Dahlia Poland Ancam Sebar Nomor Selingkuhan<span class="text-body-secondary"></span> </strong> </h3>
</div>
        <p> <b>Bandung, Tribun Unpas - </b>  Isu Fandy Christian berselingkuh dengan Andi Annisa kini masih jadi perbincangan hangat. Dahlia blak-blakan menyebut suaminya berusaha main bersih dengan Andi Annisa.
Dahlia Poland dalam unggahannya di media sosial menyatakan bahwa Fandy memiliki cara lain untuk berkomunikasi dengan selingkuhannya.
Tidak hanya itu, Dahlia Poland mengklaim keduanya bertukar pesan lewat SMS, tapi tidak terlalu sering karena sering bertemu di lokasi syuting.
<br>"Saking canggihnya teknologi, dia tau wa nya nyambung ke hp gue. Makanya lewat sms biar gak ketahuan. Jelas loncat-loncat, ketemu di lokasi tiap hari. Ga butuh-butuh banget jadi kontakan tiap hari," beber Dahlia di Instagram.</br>
<br>Kemudian, Dahlia Poland juga mengancam akan membongkar nomor ponsel selingkuhan Fandy Christian tanpa sensor.
Dahlia mengaku siap dan berani menyebarkan nomor tersebut, meskipun Fandy memang sengaja tidak menyimpan nomor selingkuhannya.</br>
<br>"Apa gue sebar aja nih tanpa sensor namanya biar pada cek di get contact bener nomor dia apa bukan. Iyak nomornya ga disave, berusaha main bersih masih ketahuan," ancam Dahlia Poland.
Di sisi lain, Fandy Christian membagikan sebuah lagu di media sosial. Ia diketahui sedang mendengarkan lagu i still talk to jesus yang dinyanyikan oleh LANY.
Melansir dari Berean Test, lagu i still talk to jesus milik LANY Bercerita tentang perilaku, peningkatan diri, dan percakapan terhadap Yesus.</br>
 </p>
      </div>
      
<div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">BACA JUGA</h2>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">


    <!-- berita bawah 1 -->
    <?php 
        foreach($newsbawah as $new):

        
        ?>
        <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"/></svg>
        <a href="detail.php?id=<?= $new['id']?>" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="admin/img/<?= $new['foto']?>"
                    class="img-fluid shadow-1-strong rounded" alt="Secret" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong><?= $new['judul']?></strong></p>
                </div>
                </div>
            </a>
      </div>
        
        <?php 
        endforeach;
        ?>
        </div>
<footer class="bg-light text-lg-start fixed-bottom">


<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2023 
  <a class="text-dark" href="index.php">Tribun Unpas</a>
</div>
</footer>
    <!--Main layout-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
    </html>
</html>