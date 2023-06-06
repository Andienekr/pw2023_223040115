<!-- php
$news = query("SELECT * FROM news_tubes");


?> -->

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
                <li><a class="dropdown-item" href="kategoriviral.php">VIRAL</a></li>
                <li> <a class="dropdown-item" href="kategorikorea.php">KOREA</a></li>
                <li><a class="dropdown-item" href="kategoriend.php">FILM & MUSIC</a></li>
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


    <!--Main layout-->
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

        <div class="col-md-6 mb-4">
            <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">HOT VIRAL!</span>
            <h4><strong>Resmi Gugat Cerai Virgoun, Inara Rusli Tuntut Hak Asuh Anak
          & Harta Gono-Gini</strong></h4>
            <a href="beritabesar1.php" class="btn btn-primary">Selengkapnya</a>
        </div>
        </div>
    </section>

    <!--Section: News of the day 2-->
    <section class="border-bottom pb-4 mb-5">
        <div class="row gx-5">

        <div class="col-md-6 mb-4">
            <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">BERITA HARI INI</span>
            <h4><strong>Dinikahi Diplomat Muda, Ucapan Lawas Enzy Storia soal Jodoh Disorot</strong></h4>
            <a href="beritabesar2.php" class="btn btn-primary">Selengkapnya</a>
        </div>

        <div class="col-md-6 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="https://akcdn.detik.net.id/visual/2023/05/21/pernikahan-enzy-storia-2_169.jpeg?w=900&q=90" class="img-fluid" />
            <a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
        </div>

        </div>
    </section>

    <!--Section: News of the day 3-->
    <section class="border-bottom pb-4 mb-5">
        <div class="row gx-5">
        <div class="col-md-6 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
            <img src="https://cdn.idntimes.com/content-images/community/2020/09/1600009262892-d7a2929f93e16bef964b9f75db3030e0.jpg" class="img-fluid" />
            <a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">TERBARU</span>
            <h4><strong>Begini Reaksi Fandy Christian Usai Dahlia Poland Ancam Sebar Nomor Selingkuhan</strong></h4>
            <a href="beritabesar3.php" class="btn btn-primary">Selengkapnya</a>
        </div>
        </div>
    </section>

    <!--Berita dropdown-->
    <section>
        <div class="row gx-lg-5">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div>
            <!-- Featured image -->
            <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
                data-mdb-ripple-color="light">
                <img src="https://akcdn.detik.net.id/visual/2023/03/19/taylor-swift-the-eras-tour_169.jpeg?w=650&q=90" class="img-fluid" />
                <a href="musicfilmbesar.php">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>

            <!-- news film and music-->
            <div class="row mb-3">
                <div class="col-6">
                <a href="" class="text-info">
                    <i class="fas fa-plane"></i>
                    FILM & MUSIC
                </a>
                </div>
            </div>

            <!-- news description 1-->
            <a href="" class="text-dark">
                <h5>
                    <a href="musicfilmbesar.php" class="text-dark">Kabar Taylor Swift Bakal Konser di Jakarta, Ini Faktanya</a>    
                </h5>
            </a>
            <hr />

            <!-- News 1 -->
            <a href="musicfilm1.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                    <div class="col-3">
                        <img src="https://akcdn.detik.net.id/visual/2018/11/15/d49f1592-9a1c-446d-98c5-086e67396799_169.jpeg?w=900&q=90"
                        class="img-fluid shadow-1-strong rounded" alt="Marvel" />
                    </div>

                    <div class="col-9">
                        <p class="mb-2"><strong>Rincian Lengkap Harga Tiket dan Seating Plan Konser Coldplay 15 November 2023</strong></p>
                    </div>
                </div>
            </a>

            <!-- News 2-->
            <a href="musicfilm2.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://akcdn.detik.net.id/visual/2023/04/28/guardians-of-the-galaxy-vol-3_169.webp?w=900&q=90"
                    class="img-fluid shadow-1-strong rounded" alt="Reza Rahardian dan Acha s." />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Review 'Guardians of The Galaxy Vol 3', Akhir Kisah yang Menguras Air Mata</strong></p>
                </div>
                </div>
            </a>

            <!-- News 3-->
            <a href="musicfilm3.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://akcdn.detik.net.id/visual/2022/09/22/1422381182_169.jpeg?w=900&q=90"
                    class="img-fluid shadow-1-strong rounded" alt="Ahmad Dhani" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Jadi Ariel di 'The Little Mermaid', Halle Bailey: Aku Menangis Tak Percaya</strong></p>
                </div>
                </div>
            </a>

            <!-- News 4-->
            <a href="musicfilm4.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://akcdn.detik.net.id/visual/2023/03/14/blackpink-8_169.jpeg?w=900&q=90"
                    class="img-fluid shadow-1-strong rounded" alt="Pildun" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Kelar Konser di Indonesia, BLACKPINK Ngebut Siapkan Penampilan di Coachella</strong></p>
                </div>
                </div>
            </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div>
            <!-- news viral -->
            <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
                data-mdb-ripple-color="light">
                <img src="https://thumb.viva.id/vivabandung/665x374/2023/05/08/6458b96edbbde-foto-pernikahan-jessica-milla-dan-yakup-hasibuan_bandung.jpg" class="img-fluid"
                alt="Bruce lee" />
                <a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>

            <!-- Article data -->
            <div class="row mb-3">
                <div class="col-6">
                <a href="kategoriviral.php" class="text-danger">
                    <i class="fas fa-chart-pie"></i>
                    VIRAL
                </a>
                </div>
            </div>

            <!-- news description -->
            <a href="viralbesar.php" class="text-dark">
                <h5>Sah Jessica Mila Nikah dengan Yakup Hasibuan, Berjanji Sehidup-semati</h5>
            </a>

            <hr />

            <!-- News 1 -->
            <a href="viral1.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://akcdn.detik.net.id/visual/2023/05/09/rizky-febian-5_169.jpeg?w=900&q=90"
                    class="img-fluid shadow-1-strong rounded" alt="United Kingdom" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Respons Ayah Mahalini Soal Perbedaan Agama Usai Anak Dilamar Rizky Febian</strong></p>
                </div>
                </div>
            </a>

            <!-- News 2 -->
            <a href="viral2.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://assets.hops.id/crop/0x0:0x0/750x500/webp/photo/2022/12/20/1179429001.jpg"
                    class="img-fluid shadow-1-strong rounded" alt="Secret" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Heboh Video Syur 47 Detik Mirip Rebecca Klopper</strong></p>
                </div>
                </div>
            </a>

            <!-- News 3-->
            <a href="viral3.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://awsimages.detik.net.id/community/media/visual/2023/05/18/potret-desta-dan-natasha-rizki-6_169.jpeg?w=1200"
                    class="img-fluid shadow-1-strong rounded" alt="mesir" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Bukan karena Orang Ketiga, Ini 4 Fakta Desta Gugat Cerai Istri</strong></p>
                </div>
                </div>
            </a>

            <!-- News 4-->
            <a href="viral4.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://t-2.tstatic.net/solo/foto/bank/images/Raffi-Ahmad-dan-Nagita-Slavina-liburan-ke-Jepang.jpg"
                    class="img-fluid shadow-1-strong rounded" alt="berita indonesia" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Gemas sama Cipung, Klub Bola Ini Undang Raffi Ahmad Sekeluarga ke Jepang</strong></p>
                </div>
                </div>
            </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div>
            <!-- news korea-->
            <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
                data-mdb-ripple-color="light">
                <img src="https://akcdn.detik.net.id/visual/2023/02/28/aespa-2_169.jpeg?w=900&q=90" class="img-fluid"
                alt="oppa" />
                <a href="#">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>

            <!-- article data-->
            <div class="row mb-3">
                <div class="col-6">
                <a href="" class="text-warning">
                    <i class="fas fa-code"></i>
                    KOREA
                </a>
                </div>
            </div>

            <!-- news description -->
            <a href="koreabesar.php" class="text-dark">
                <h5>Harga Tiket dan Seating Plan Konser aespa di Tangerang</h5>

            </a>

            <hr />

            <!-- News 1 -->
            <a href="korea1.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://akcdn.detik.net.id/visual/2021/08/25/lucas-wayv-lucas-nct-1_169.png?w=650"
                    class="img-fluid shadow-1-strong rounded" alt="film kriminal" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Lucas Tulis Surat Usai Umumkan Angkat Kaki dari NCT dan WayV</strong></p>
                </div>
                </div>
            </a>

            <!-- News 2 -->
            <a href="korea2.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://akcdn.detik.net.id/visual/2023/02/19/baby-monster_169.webp?w=900&q=90"
                    class="img-fluid shadow-1-strong rounded" alt="nct" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>YG Entertainment Umumkan 7 Anggota Resmi Baby Monster</strong></p>
                </div>
                </div>
            </a>

            <!-- News 3-->
            <a href="korea3.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://assets.ayobandung.com/crop/0x112:1366x1145/750x500/webp/photo/2023/05/21/twitter-biyaahgh-719416642.jpg"
                    class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>Buat Fans Geram! Jeno NCT Diberi Makanan Anjing oleh Salah Satu Penonton di Kuala Lumpur</strong></p>
                </div>
                </div>
            </a>

            <!-- News 4-->
            <a href="korea4.php" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="https://akcdn.detik.net.id/visual/2023/05/18/drama-korea-dr-romantic-3-1_169.png?w=900&q=90"
                    class="img-fluid shadow-1-strong rounded" alt="Perdana Botanical Garden" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong>5 Drama Korea Rating Tertinggi Minggu Ketiga Mei 2023</strong></p>
                </div>
                </div>
            </a>
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