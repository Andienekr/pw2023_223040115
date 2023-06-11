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
            <img src="https://thumb.viva.id/vivabandung/665x374/2023/05/08/6458b96edbbde-foto-pernikahan-jessica-milla-dan-yakup-hasibuan_bandung.jpg" class="img-fluid" class="img-fluid" />
            <a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
        </div>
        </div>
    </section>
    <div class="col-md-8 mb-4">
        <h3> <strong>Sah Jessica Mila Nikah dengan Yakup Hasibuan, Berjanji Sehidup-semati<span class="text-body-secondary"></span> </strong> </h3>
</div>
        <p> <b>Bandung, Tribun Unpas - </b> Jessica Mila dan Yakup Hasibuan akhirnya resmi menikah, Acara pemberkatan pernikahan Jessica dan Yakup tersebut berlangsung di Gereja HKBP Rawamangun, Jakarta Timur.

Pendeta yang memimpin acara pemberkatan tersebut lantas menanyakan kesiapan Yakup untuk mempersunting Jessica sebagai istri.

<br> 
Yakup pun dengan tegas dan tanpa ragu bersedia untuk menjalin hubungan pernikahan sehidup-semati dengan Jessica.

"Bersediakah saudara mengasihi, memahami dia, dan menanggung segala kekurangan dia, dan berjanji tidak akan menceraikan dia sampai maut memisahkan," kata pendeta di acara pemberkatan pernikahan Yakup dan Jessica dalam tayangan YouTube yang dikutip pada Jumat (5/5).

"Iya, saya bersedia," jawab Yakup Hasibuan.
</br>
<br> 
Pertanyaan serupa kemudian disampaikan pendeta kepada Jessica Mila pada momen tersebut.

Jessica pun juga mengaku siap menjadi istri yang setia terhadap Yakup sampai maut memisahkan.
</br>
<br>
Home Hot Gossip Berita Hot Gossip
Sah Jessica Mila Nikah dengan Yakup Hasibuan, Berjanji Sehidup-semati
Tribun Unpas | Tribun Unpas live
Jumat, 05 May 2023 13:16 WIB
Momen pemberkatan nikah Jessica Mila dan Yakup Hasibuan
Jakarta, Insertlive - Jessica Mila dan Yakup Hasibuan akhirnya resmi menikah pada hari ini, Jumat (5/5).
Acara pemberkatan pernikahan Jessica dan Yakup tersebut berlangsung di Gereja HKBP Rawamangun, Jakarta Timur.

Pendeta yang memimpin acara pemberkatan tersebut lantas menanyakan kesiapan Yakup untuk mempersunting Jessica sebagai istri.


Yakup pun dengan tegas dan tanpa ragu bersedia untuk menjalin hubungan pernikahan sehidup-semati dengan Jessica.

"Bersediakah saudara mengasihi, memahami dia, dan menanggung segala kekurangan dia, dan berjanji tidak akan menceraikan dia sampai maut memisahkan," kata pendeta di acara pemberkatan pernikahan Yakup dan Jessica dalam tayangan YouTube yang dikutip pada Jumat (5/5).

"Iya, saya bersedia," jawab Yakup Hasibuan.

Baca Juga :
Jessica Mila Pernah Ditawari Jadi Simpanan Bos Film, Segini Iming-imingnya
 
Pertanyaan serupa kemudian disampaikan pendeta kepada Jessica Mila pada momen tersebut.

Jessica pun juga mengaku siap menjadi istri yang setia terhadap Yakup sampai maut memisahkan.

"Bersediakah saudara menghendaki Yakup menjadi suami, mengasihi dengan sepenuh hati, bersama-sama dia melakukan kehidupan yang kudus, memahami dia, dan menanggung kekurangan dia, dan tidak akan menceraikan dia sampai sampai maut memisahkan," tanya pendeta.

"Iya, saya bersedia," lanjutnya.

Pendeta akhirnya menyatakan Yakup Hasibuan dan Jessica Mila sudah sah menjadi sepasang suami-istri.
</br>
<br> 
Pendeta berujar bahwa pernikahan Yakup dan Jessica yang dipersatukan oleh Tuhan itu tidak boleh dipisahkan oleh manusia.

"Di dalam nama bapa, saya menyatakan yang dipersatukan oleh Allah, tidak boleh diceraikan oleh manusia, amin," kata pendeta.

Acara pemberkatan pernikahan tersebut kemudian berlanjut ke momen penyerahan Alkitab kepada Yakup dan Jessica yang sudah remi menikah.
</br>
<br> 
Salah seorang perwakilan gereja HKBP lantas menyampaikan ucapan selamat dan berujar bahwa Yakup dan Jessica kini telah resmi menjadi jemaat gereja HKBP sebagai sepasang suami-istri.

"Sebelumnya kami ucapkan selamat dan semoga selalu berbahagia, hari ini telah bertambah lagi satu jemaat gereja HKBP, jadi kami memohon agar Yakup segera mendaftar untuk pendataan jemaat, terutama Jessica Mila," ujar perwakilan tersebut.
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



