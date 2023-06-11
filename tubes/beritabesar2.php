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
                <li><a class="dropdown-item" href="kategori.php?kategori=viral">VIRAL</a></li>
                <li> <a class="dropdown-item" href="kategori.php?kategori=korea">KOREA</a></li>
                <li><a class="dropdown-item" href="kategori.php?kategori=film & music">FILM & MUSIC</a></li>
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
            <img src="https://akcdn.detik.net.id/visual/2023/05/21/pernikahan-enzy-storia-2_169.jpeg?w=900&q=90" class="img-fluid" class="img-fluid" />
            <a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
        </div>
        </div>
    </section>
    <div class="col-md-8 mb-4">
        <h3> <strong>Dinikahi Diplomat Muda, Ucapan Lawas Enzy Storia soal Jodoh Disorot<span class="text-body-secondary"></span> </strong> </h3>
</div>
        <p> <b>Bandung, Tribun Unpas - </b>  Pernikahan Enzy Storia dan Molen Kasetra pada Sabtu (20/5) masih menjadi sorotan publik.
Momen pernikahan yang digelar secara intimate dan penuh kehangatan itu membuat publik mengulik kembali soal video lawas Enzy Storia bila disinggung soal jodoh.
Salah satunya, kala Enzy Storia diundang dalam podcast Daniel Mananta.
Enzy Storia kala itu menyebutkan bahwa dirinya tak pernah muluk-muluk dalam meminta jodoh.
<br>
Ia selalu pasrah atas pilihan Tuhan karena menurutnya itu yang terbaik dalam hidupnya.
"Aku cuma bilang 'Ya Allah Tuhanku berikan aku yang terbaik jodoh yang terbaik yang bisa menyayangi aku, Kau yang paling tahu apa yang aku butuhkan'. Jadi aku itu nggak mau minta spesifik yang menurut aku baik, tapi aku percaya Allah akan ngasih aku yang terbaik," kata Enzy Storia.
<br>Enzy Storia menambahkan bahwa dia tidak memberikan kriteria khusus untuk jodohnya kelak.</br>
<br>"Dan siapapun itu, kapanpun itu datangnya aku siap gitu kayak ya udah yang penting aku, karena aku tahu ketika aku cocok sama dia. Misalnya dia memang jodoh aku, yaitu rasa cinta itu akan datang dengan sendirinya tanpa dipaksakan gitu," pungkasnya.</br>
Diketahui, Enzy Storia sempat dikabarkan memiliki hubungan dengan beberapa rekan artis seperti Dikta.
Namun, Enzy Storia selalu mengisyaratkan bahwa hubungannya dengan Dikta tak lebih dari teman.
</br>
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