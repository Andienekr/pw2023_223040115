<?php
$conn = mysqli_connect('localhost', 'root', '', 'tubes_database');

function query($data) {
    global $conn;

    $result = mysqli_query($conn, $data);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
$kategori = query("SELECT * FROM kategori");

$newsviral = query("SELECT * FROM news_tubes WHERE kategori = '1' LIMIT 0,4");
$newsmusic = query("SELECT * FROM news_tubes WHERE kategori = '2' LIMIT 0,4");
$newskorea = query("SELECT * FROM news_tubes WHERE kategori = '3' LIMIT 0,4");


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
                <p class="text-info">
                    <i class="fas fa-plane"></i>
                    FILM & MUSIC
                </p>
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
            <?php foreach($newsmusic as $new) : ?>
            <a href="detail.php?id=<?= $new['id'] ?>" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="admin/img/<?= $new["foto"] ?>"
                    class="img-fluid shadow-1-strong rounded" alt="United Kingdom" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong><?= $new["judul"] ?></strong></p>
                </div>
                </div>
            </a>
            <?php endforeach ; ?>
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
                <p class="text-danger">
                    <i class="fas fa-chart-pie"></i>
                    VIRAL
            </p>
                </div>
            </div>

            <!-- news description -->
            <a href="viralbesar.php" class="text-dark">
                <h5>Sah Jessica Mila Nikah dengan Yakup Hasibuan, Berjanji Sehidup-semati</h5>
            </a>

            <hr />

            <!-- News 1 -->
            <?php foreach($newsviral as $new) : ?>
            <a href="detail.php?id=<?= $new['id'] ?>" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="admin/img/<?= $new["foto"] ?>"
                    class="img-fluid shadow-1-strong rounded" alt="United Kingdom" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong><?= $new["judul"] ?></strong></p>
                </div>
                </div>
            </a>
            <?php endforeach ; ?>

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
                <p class="text-warning">
                    <i class="fas fa-code"></i>
                    KOREA
            </p>
                </div>
            </div>

            <!-- news description -->
            <a href="koreabesar.php" class="text-dark">
                <h5>Harga Tiket dan Seating Plan Konser aespa di Tangerang</h5>

            </a>

            <hr />

            <!-- News 1 -->
            <?php foreach($newskorea as $new) : ?>
            <a href="detail.php?id=<?= $new['id'] ?>" class="text-dark">
                <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                    <img src="admin/img/<?= $new["foto"] ?>"
                    class="img-fluid shadow-1-strong rounded" alt="United Kingdom" />
                </div>

                <div class="col-9">
                    <p class="mb-2"><strong><?= $new["judul"] ?></strong></p>
                </div>
                </div>
            </a>
            <?php endforeach ; ?>
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