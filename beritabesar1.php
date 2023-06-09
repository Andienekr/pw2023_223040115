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
            <img src="https://cdn-2.tstatic.net/lampung/foto/bank/images2/Inara-Rusli-akui-ia-juga-sempat-insecure-usai-mengetahui-Virgoun-berselingkuh.jpg" class="img-fluid" class="img-fluid" />
            <a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
        </div>
        </div>
    </section>
    <div class="col-md-8 mb-4">
        <h3> <strong>Resmi Gugat Cerai Virgoun, Inara Rusli Tuntut Hak Asuh Anak
          & Harta Gono-Gini<span class="text-body-secondary"></span> </strong> </h3>
</div>
        <p> <b>Bandung, Tribun Unpas - </b>  Inara Rusli resmi melayangkan gugatan cerai terhadap suaminya, Virgoun ke Pengadilan Agama Jakarta Barat. Kuasa hukum Inara Rusli, Arjana Bagaskara membenarkan kabar tersebut.
"Betul (sudah resmi menggugat cerai Virgoun)," ucap Arjana Bagaskara kepada detikcom, Selasa (23/5).

Gugatan cerai tersebut dilayangkan Inara Rusli pada Senin (22/5). Gugatan tersebut juga telah terdaftar dengan nomor 1662/Pdt.G/2023/PAJB.
<br>
Berikut tuntutan yang diajukan oleh Inara Rusli dalam gugatan cerainya berdasarkan keterangan resmi yang diterima.

Perihal:
<ol>
<li>CERAI GUGAT (Pasal 77 ayat (5) Kompilasi Hukum Islam).</li>
<li>PROVISI:</li>
<ol type= "a">
<li>PISAH TINGGAL DALAM SATU RUMAH, NAFKAH YANG HARUS DITANGGUNG SUAMI SELAMA BERLANGSUNGNYA GUGATAN A QUO).</li>
<li>PEMELIHARAAN DAN PENDIDIKAN 3 (TIGA) ANAK (LALA, ALI, DAN ALONG), DAN.</li>
<li>PEMELIHARAAN RUMAH, dIl (Pasal 136 Kompilasi Hukum Islam jo.</li>
<li>Pasal 24 PERATURAN PEMERINTAH NO. 9 TAHUN 1975 TENTANG PELAKSANAAN UU NO. 1 TAHUN 1974 TENTANG PERKAWINAN).</li>
<li>DLL.</li>
<li>HAKASUH ANAK.</li>
<li>HARTA GONO-GINI/HARTA BERSAMA (Pasal 85 dan 91 Kompilasi Hukum
Islam).</li>
</ol>
<li> NAFKAH HADHANAH DAN NAFKAH ANAK.</li>
<li>NAFKAH IDDAH; DAN</li>
<li>MUT'AH.</li>
</ol>

Inara Rusli dan Virgoun pun akan menjalani sidang cerai perdana mereka pada Rabu (31/5) mendatang pukul 09.00 WIB.

Seperti diketahui, Virgoun sebelumnya telah melayangkan permohonan cerai. Namun, gugatan cerai tersebut dicabutnya lantaran ada hal yang ingin ditambahkan mengenai hak asuh anak.

 </br></p>
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