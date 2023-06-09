-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 02:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'viral'),
(2, 'film & music'),
(3, 'korea');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(3, 'epon', '$2y$10$48gDPDkmkfMqSS8pszqsKuHY8QUyzH7areepVodlswIJil1bQ2IRi', 'admin'),
(4, 'epon', '$2y$10$4e2PV7orDq61yPg24PO0JeH4D.Qc0PEcAZFUvioxC4Mhwa2VfVOQa', 'admin'),
(5, 'epon', '$2y$10$Iwy7KzMN82m9ToGQwNGdMOFg3O6x8Q1Mf6ZpxKxLHI9djXYdn1o.O', 'admin'),
(6, 'epon', '$2y$10$2ySnM/HH1.HkrSCOtInUjOCLmsHJPddVMk2ZVY/9MWYFhFT8Tz1k6', 'admin'),
(9, 'epon', '$2y$10$kbW8nsugZJXAEQZ1Y7u4NO0vk1AvFcPVNYtluaIXv0ArdgTe8xUqe', 'admin'),
(11, 'itutu', '$2y$10$qcTXoMv3tGdmzRsQxTrZt.2Lce3NSco/jp9vWYf3QGTVBh5LG1GGq', 'user'),
(12, 'nita', '$2y$10$A9pMW2fI2Qev9YRxo2JJYO33vDJh2J8y2SGT7WkAx8jRMPoUjhU8u', 'user'),
(13, 'ekaa', '$2y$10$oqWqPlSWuQL91Yi5prlZ.eeAPsji5oQRTeWdt0PORlpWlip230YBm', 'user'),
(14, 'febi', '$2y$10$HCED6HanXEkqkcn3co.BRu1p01/iBykt8bd1asJLgyRiIDYXZ5x.y', 'user'),
(15, 'nopal', '$2y$10$4Sz0jqwE9AXfveBlQAsds.KF7BzC6Hm29rDqJgz4K1OoFvgvqq0ri', 'user'),
(16, 'nopal', '$2y$10$D61yQbVlbw93UdxO.CGv2uFvxVmEui1Ns2lQKD6Y1992DlYC0i6AK', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `news_tubes`
--

CREATE TABLE `news_tubes` (
  `id` int NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` int NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news_tubes`
--

INSERT INTO `news_tubes` (`id`, `foto`, `judul`, `kategori`, `deskripsi`) VALUES
(27, '648068073c76c.jpeg', 'Respons Ayah Mahalini Soal Perbedaan Agama Usai Anak Dilamar Rizky Febian', 1, '        &lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt; Perbedaan agama antara Mahalini dan Rizky Febian masih menjadi sorotan publik. Terlebih lagi, keduanya telah melangsungkan lamaran di The Langham, Senayan, Minggu (7/5).\r\nMeskipun begitu, hubungan asmara keduanya tetap berjalan mulus karena telah sama-sama mengantongi restu dari pihak keluarga masing-masing meski mengetahui perbedaan agama di antara keduanya.\r\n&lt;br&gt; \r\nPasalnya Mahalini di masa lalu sempat mengungkapkan bahwa ayahnya adalah sosok yang berpikiran terbuka dalam urusan agama.\r\n\r\n&lt;/br&gt;\r\n&lt;br&gt; \r\n&quot;Papa tuh lebih open minded sih orangnya. Walaupun di awal aku ngeliaht Mama yang open minded. Papa terlihatnya orangnya ketus... Suatu hal yang menurut aku tinggi di Indonesia, deh, agama. Aku ngomongin agama sama Papa, dia se-open minded itu. Aku gak percaya, \r\n&#039;Ini Bapakku?&#039; kata Mahalini dalam YouTube NGOBROL ASIX tahun 2021 silam.\r\n&lt;/br&gt;\r\n&lt;br&gt;\r\nBahkan, Mahalini menyebut ayahnya bereaksi santai saat dirinya memperkenalkan mantan pacarnya yang beda agama.\r\n\r\nDi sisi lain, Sule sempat memberi wejangan untuk Rizky Febian soal hubungan asmara putranya dengan Mahalini. Nasihat itu berkaitan dengan keyakinan antara Rizky Febian dan Sule.\r\n&lt;/br&gt;\r\n&lt;br&gt; \r\n&quot;Sama Iky sudah (bicara pernikahan),&quot; kata Sule di Brownis Trans TV.\r\n\r\n&quot;Cuma, ya, mungkin tergantung dari anaknya saja. Maksud aku gini, kalau mereka pacaran lama, dua-duanya, ya, mendingan kalau cocok, benar-benar, ya, sudah nikah saja,&quot; lanjutnya.\r\n&lt;/br&gt;\r\n&lt;br&gt; \r\nSule juga telah mengingatkan Rizky Febian tentang risiko yang harus ia hadapi saat menikahi Mahalini.\r\n\r\n&quot;Saya bilang sama Iky, Iky juga sudah tahu risikonya seperti apa kalau nikah sama Mahalini. Publik juga tahu,&quot; pungkasnya.\r\n\r\n&lt;/br&gt;\r\n    &lt;/p&gt;'),
(28, '648069642590d.jpg', 'Heboh Video Syur 47 Detik Mirip Rebecca Klopper', 1, '&lt;b&gt;Bandung, Tribun Unpas&lt;/b&gt; - Media sosial tengah digegerkan dengan video syur yang menyeret nama Rebecca Klopper.\r\nKekasih Fadly Faisal itu disebut mirip dengan wanita yang berada dalam video syur berdurasi 47 detik tersebut.\r\nWarganet menyoroti piercing di pusar wanita tersebut serupa dengan milik Rebecca Klopper.\r\n\r\nTak hanya itu, Rebecca Klopper juga memilik tahi lalat di perutnya, sama seperti wanita dalam video syur yang beredar.\r\nRebecca Klopper sontak menjadi perbincangan di media sosial. Banyak juga warganet yang mencari tautan video syur tersebut.\r\n\r\nBahkan, nama &#039;Becca&#039; masuk dalam trending topic di Twitter setelah video syur tersebut viral.\r\n&quot;Ada yang punya video Rebecca Klopper nggak?,&quot; tulis @swa*** di Twitter.\r\n&quot;Mau link Rebecca Klopper dong,&quot; tulis @0re***.\r\n\r\n&quot;Kaget banget gue ke sini gara-gara TikTok, ini beneran Rebecca Klopper?,&quot; tulis @ded***.\r\nHingga saat ini, Rebecca Klopper belum memberikan klarifikasi terkait pemberitaan yang menimpa dirinya.'),
(34, '64807f90727da.jpeg', 'Bukan karena Orang Ketiga, Ini 4 Fakta Desta Gugat Cerai Istri', 1, ' &lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt;  Aktor dan presenter kondang Desta menjadi trending topic usai dirinya menggugat cerai sang istri, Natasha Rizki. Gugatan cerai didaftarkan Desta di Pengadilan Agama Jakarta Selatan. \r\n&lt;br&gt; \r\nTaslimah selaku Humas Pengadilan Agama Jakarta Selatan membenarkan gugatan cerai itu. &quot;Untuk nama tersebut, benar adanya telah terdaftar di Kepaniteraan Pengadilan Agama Jakarta Selatan dengan melawan Natasha,&quot; kata Taslimah, Rabu, 17 Maret 2023.\r\n\r\n&lt;/br&gt;\r\n&lt;br&gt; \r\n&quot;Jenis perkaranya permohonan talak yang diajukan oleh pemohon kepada Pengadilan Agama Jakarta Selatan dengan jenis perkara cerai talak bahwa pemohon memohon untuk diberi izin bercerai,&quot; lanjutnya.\r\nKabar gugatan perceraian merangsang rasa penasaran publik soal penyebab Desta mengajukan cerai terhadap Natasha Rizki.\r\nBerikut ini fakta-fakta Desta gugat cerai istri:\r\n&lt;/br&gt;\r\n&lt;br&gt;\r\n&lt;ol&gt; \r\n\r\n&lt;li&gt;Sudah tidak sejalan&lt;/li&gt;\r\nMelalui kuasa hukumnya, Hendra Siregar mengatakan, baik Desta dan Natasha sudah sepakat bercerai karena sering cek-cok.\r\n \r\n&quot;Ya seperti itu (percekcokan), ada sebatas itu saja. Cuma sudah enggak sejalan lagi visi misi dan mereka juga sudah sepakat sebenarnya,&quot; kata Hendra.\r\n&lt;li&gt; Tidak ada orang ketiga&lt;/li&gt;\r\nHendra memastikan tidak masalah kehadiran orang ketiga atau ekonomi dalam permasalahan rumah tangga Desta dan Natasha. Pasangan yang menikah selama 10 tahun itu sudah sepakat cerai sjak tiga bulan lalu.\r\n&quot;Tidak ada (orang ketiga), dipastikan tidak ada. (Masalah ekonomi) juga tidak ada dan masih jalan baik-baik saja,&quot; ujarnya.\r\n&lt;li&gt; Desta dan Natasha sudah pisah rumah&lt;/li&gt;\r\nDesta dan Natasha bahkan sekarang sudah tidak tinggal satu rumah lagi.\r\n \r\n&quot;Sementara ini sudah tidak serumah. Tapi sama-sama masih di Jakarta. Anak-anak kadang sama bapaknya, kadang sama mamanya,&quot; terang Hendra Siregar.\r\n&lt;li&gt; Sidang perdana tanggal 29 Mei 2023&lt;/li&gt;\r\nDesta mengajukan gugatan cerai pada 11 Mei 2023. Mereka dijadwalkan menjalani sidang cerai perdana pada 29 Mei 2023. Majelis Hakim juga akan melakukan mediasi jika kedua pihak hadir dalam persidangan perdana.\r\n \r\nDesta dan Natasha Rizki menikah pada tahun 2013. Selama menikah, mereka dikaruniai tiga orang anak.\r\n&lt;/ol&gt;\r\n&lt;/br&gt;\r\n    &lt;/p&gt;'),
(35, '6480808285c8b.jpg', 'Gemas sama Cipung, Klub Bola Ini Undang Raffi Ahmad Sekeluarga ke Jepang', 1, '&lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt; Raffi Ahmad baru-baru ini membagikan kisah keberuntungannya yang didapat dari anak bungsunya, Rayyanza Malik Ahmad alias Cipung.\r\n\r\nBerkat foto Cipung memegang jersey klub bola Jepang Tokushima Vortis, Raffi langsung diundang untuk pergi ke Jepang.\r\n\r\nDiketahui, foto tersebut diunggah di akun Instagram @raffinagita1717 pada Sabtu (13/5/2023).\r\n&lt;br&gt; \r\n“Gemesnya Cipung pake jersey klub bola Jepang @tokushima_vortis !!!! Cipung udah siap nih jadi pemain bola. Ayooo…. Siapa berani lawan aku?!” tulis akun tersebut.\r\n\r\n&lt;/br&gt;\r\n&lt;br&gt; \r\nSehari kemudian, Raffi Ahmad kemudian mengatakan bahwa mereka sekeluarga langsung diundang oleh Tokushima Vortis.\r\n\r\nHasilnya, ia dan sekeluarga pun langsung terbang ke Jepang untuk datang ke pusat pelatihan Tokushima Vortis.\r\n&lt;/br&gt;\r\n&lt;br&gt;\r\n“Ga nyangka banget guys!!! Foto Cipung kemarin dilirik klub bola Jepang @tokushima_vortis dan kita sekeluarga diundang langsung buat ke Jepang! Gue ga lagi mimpi kan??” tulis Raffi pada Minggu.\r\n\r\nIa pun mengatakan bahwa klub Jepang itu juga mengundang pemain RANS Nusantara untuk datang latihan di lapangannya.\r\n&lt;/br&gt;\r\n&lt;br&gt;\r\nUnggahan itu pun langsung dibanjiri komentar dari warganet yang mengatakan Cipung adalah pembawa rezeki.\r\n\r\n“Cipung si pembawa rezeki,”\r\n\r\n“Cipung bayi yang suka bekerja dan berkarya akhirnya tambah bersinar dan go internasional ke Jepang. Selamat ya adek rayanza,”\r\n&lt;/br&gt;\r\n    &lt;/p&gt;'),
(37, '6480897899c2c.jpeg', 'Rincian Lengkap Harga Tiket dan Seating Plan Konser Coldplay 15 November 2023', 2, '&lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt; PK Entertainment promotor konser Coldplay di Jakarta yang bertajuk Coldplay Music of The Spheres World Tour Jakarta akhirnya mengungkapkan daftar harga tiket. Melalui unggahan terbarunya, terdapat 11 kategori pada konser tersebut. Harga tiket konser dibanderol mulai dari Rp800 ribu hingga Rp11 juta. Berikut daftar harga tiket konser Coldplay bertajuk Coldplay Music of The Spheres World Tour Jakarta: &lt;br&gt; &lt;ol&gt;     &lt;li&gt;Ultimate Experience (CAT 1): Rp11.000.000&lt;/li&gt;     &lt;li&gt;My Universe (Festival): Rp5.700.000&lt;/li&gt;     &lt;li&gt;CAT 1 (Numbered Seating): Rp5.000.000&lt;/li&gt;     &lt;li&gt;Festival (Free Standing): Rp3.500.000&lt;/li&gt;     &lt;li&gt;CAT 2 (Numbered Seating): Rp4.000.000&lt;/li&gt;     &lt;li&gt;CAT 3 (Numbered Seating): Rp3.250.000&lt;/li&gt;     &lt;li&gt;CAT 4 (Numbered Seating): Rp2.500.000&lt;/li&gt;     &lt;li&gt;CAT 5 (Numbered Seating): Rp1.750.000&lt;/li&gt;     &lt;li&gt;CAT 5 (Numbered Seating): Rp1.750.000&lt;/li&gt;     &lt;li&gt;CAT 6 (Numbered Seating): Rp1.250.000&lt;/li&gt;     &lt;li&gt;CAT 7 (Numbered Seating): Rp1.250.000 (Restricted View)&lt;/li&gt;     &lt;li&gt;CAT 8 (Numbered Seating): Rp800.000 (Restricted View)&lt;/li&gt; &lt;/ol&gt;  &lt;/br&gt; &lt;br&gt; Untuk kategori Ultimate Experience akan mendapatkan beberapa keuntungan mulai dari masuk ke venue, berkesempatan berfoto saat Coldplay tampil hingga kemudahan akses ke konter merchandise.  Sementara untuk kategori My Universe mendapatkan keuntungan seperti early entry hingga kemudahan akses ke konter merchandise.  Penjualan tiket terbagi untuk dua kategori tiket, yakni BCA Presale dan Public On-Sale:  &lt;/br&gt; &lt;li&gt;BCA Presale dibuka pada 17-18 Mei pukul 10.00 WIB &lt;/li&gt; &lt;li&gt;Public On-Sale dibuka pada 19 Mei 2023 pukul 10.00 WIB&lt;/li&gt; &lt;br&gt;  Konser Coldplay yang bertajuk Coldplay Music of The Spheres World Tour Jakarta akan digelar pada 15 November mendatang di Stadion Utama Gelora Bung Karno Jakarta. &lt;/br&gt;  &lt;/p&gt;'),
(38, '64808ce49b1aa.jpeg', 'Review &#039;Guardians of The Galaxy Vol 3&#039;, Akhir Kisah yang Menguras Air Mata', 2, ' &lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt; Sekuel ketiga film Guardians of The Galaxy mulai tayang di bioskop seluruh dunia mulai hari ini, Rabu (3/5).\r\nFilm yang disutradarai oleh James Gunn ini masih bercerita seputar grup penjaga galaksi yang dipimpin oleh Peter Quill.\r\n\r\nSama seperti kedua film sebelumnya, Guardians of The Galaxy Vol 3 ini masih menghadirkan suasana humor receh di sela pertarungan yang menegangkan\r\n&lt;br&gt; \r\nKali ini, Peter Quill dan kawan-kawan memiliki misi untuk menyelamatkan Rocket yang tengah sakit.\r\nStar Lord yang masih gagal move on karena Gamora menjadi tumbal Thanos pun berusaha tangguh bekerja sama dengan Gamora dari tahun 2014 yang tidak memiliki ingatan tentang Peter Quill maupun tim penjaga galaksi.\r\n\r\n&lt;/br&gt;\r\n&lt;br&gt; \r\nDi tengah mencari cara untuk menyembuhkan Roket masa lalu yang menyedihkan pun diungkap. Masa lalu Rocket yang menyedihkan pun sukses menyentuh hati para penonton.\r\n\r\nFilm peperangan ini pun lebih terasa emosional karena rasa persaudaraan di antar tim yang sudah terjalin.\r\n\r\nPara pecinta grup penjaga galaksi ini pun dijamin banjir air mata saat momen Peter Quill undur diri.\r\n&lt;/br&gt;\r\n&lt;br&gt;\r\nSelain cerita, kualitas gambar dan efek CGI dari film Guardians of The Galaxy Vol 3 ini tidak perlu diragukan lagi.\r\n\r\nFilm ini sukses memanjakan mata para penonton yang menyukai luar angkasa dan makhluk-makhluk asing. \r\n&lt;/br&gt;\r\n&lt;br&gt; \r\nSelain itu, Guardians of The Galaxy juga tidak pernah gagal membuat para penonton ikut berjoget dan bernyanyi lewat alunan-alunan musik yang nostalgia.\r\n\r\nHal-hal mendetail dalam film berdurasi 2 jam 30 menit itu pun sayang untuk dilewatkan.\r\n&lt;/br&gt;\r\n    &lt;/p&gt;'),
(39, '64808dad2926e.jpeg', 'Jadi Ariel di &#039;The Little Mermaid&#039;, Halle Bailey: Aku Menangis Tak Percaya', 2, ' &lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt; Penyanyi sekaligus aktris Halle Bailey masih tak menyangka bahwa dirinya bisa terpilih menjadi Ariel dalam animasi live-action The Little Mermaid. &quot;Sejujurnya, aku tak pernah menyangka bisa menjadi Ariel,&quot; kata Halle Bailey saat konferensi pers pada Kamis (10/5).  Halle lantas bercerita bagaimana ia pertama kali mendapat peran sebagai Ariel. &lt;br&gt;  &quot;Awalnya aku mendapat panggilan dari nomor tak dikenal. Karena melihat ada panggilan tersebut aku sengaja tidak mengangkatnya,&quot; bebernya. &lt;/br&gt; &lt;br&gt;  &quot;Tapi semua keluargaku bilang kalau aku harus menjawab panggilan itu. Pas aku angkat aku langsung menangis karena langsung dibilang, &#039;Hai Halle, aku mencari Ariel&#039;. Aku benar-benar menangis tak percaya,&quot; lanjutnya. &lt;/br&gt; &lt;br&gt; Halle juga mengaku dirinya merasa terhormat bisa memainkan karakter Ariel dalam film live-action The Little Mermaid.  &quot;Aku juga merasa terhormat berada di film ini. Aku sangat bersyukur bahwa semua orang akan menonton penampilanku dan tak sabar menunggunya,&quot; imbuhnya.  &lt;/br&gt; &lt;br&gt;  Film live action The Little Mermaid kabarnya bakal dirilis pada 26 Mei mendatang di seluruh bioskop.  Sebelum penayangannya, film live action The Little Mermaid sempat mendapat reaksi rasis karena Ariel diperankan Halle Bailey perempuan kulit berwarna.  Di sisi lain, banyak pula unggahan video yang menunjukkan kebahagiaan anak-anak kulit hitam yang senang melihat Ariel diperankan oleh Halle Bailey. &lt;/br&gt;     &lt;/p&gt;'),
(40, '64808dd7d35d3.jpeg', 'Kelar Konser di Indonesia, BLACKPINK Ngebut Siapkan Penampilan di Coachella', 2, '  &lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt; Girl group BLACKPINK baru saja menggelar konser Born Pink di Jakarta sebagai salah satu bagian dari rangkaian tur dunia mereka. Setelah Indonesia, BLACKPINK akan melanjutkan konser di Taiwan dan Filipina.  Di sela konser tur dunia, BLACKPINK rupanya menyempatkan untuk meyiapkan penampilan mereka di panggung Coachella 2023. &lt;br&gt;  &quot;Hal ini terungkap dari unggahan keempat anggota BLACKPINK di Instagram. &lt;/br&gt; &lt;br&gt;  Dalam unggahan itu, keempat anggota BLACKPINK kompak mengunggah foto saat mereka berpose di hadapan cermin ruang latihan bersama dengan para penari latar.  Jennie, Jisoo, Lisa, dan Rose pun menyematkan kata Coachella dan menandai akun BLACKPINK Official. &lt;/br&gt; &lt;br&gt; Penggemar mereka atau disebut BLINK pun mengaku sudah tidak sabar untuk melihat penampilan BLACKPINK di panggung Coachella.  Coachella rencananya akan digelar pada 14 hingga 16 April dan 21 hingga 23 April 2023. &lt;/br&gt; &lt;br&gt;  BLACKPINK pun sudah diumumkan sedari awal tahun akan menjadi salah satu bintang yang tampil di tas panggung.  Ini merupakan kali kedua grup besutan YG Entertainment itu tampil di panggung Coachella. &lt;/br&gt; &lt;br&gt;  BLACKPINK pun sudah diumumkan sedari awal tahun akan menjadi salah satu bintang yang tampil di tas panggung.  Ini merupakan kali kedua grup besutan YG Entertainment itu tampil di panggung Coachella. &lt;/br&gt;     &lt;/p&gt;'),
(41, '648090b4beb91.png', '5 Drama Korea Rating Tertinggi Minggu Ketiga Mei 2023', 3, ' &lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt;  Minggu ketiga Mei 2023 masih dihiasi drama Korea terbaru yang tayang dan menghibur para penonton. &lt;br&gt;  Jalan cerita dan kualitas akting para aktor serta aktris sukses mendongkrak reputasi sejumlah drama Korea ini sehingga berhasil mendapatkan rating tinggi. &lt;/br&gt; &lt;br&gt;  Nah, buat Insertizen yang penasaran drama apa saja yang mendapat rating tinggi pada minggu ketiga Mei 2023, simak hasil rangkuman Tribun Unpas berikut ini: &lt;/br&gt;     &lt;li&gt; Dokter Cha &lt;/li&gt;     &lt;li&gt;Doctor Romantic 3 &lt;/li&gt;     &lt;li&gt; Good Bad Mother &lt;/li&gt;     &lt;li&gt;Tale of the Nine 1938 &lt;/li&gt;     &lt;li&gt;Black Knight &lt;/li&gt;     &lt;/p&gt;'),
(42, '648090da8940c.jpg', 'Buat Fans Geram! Jeno NCT Diberi Makanan Anjing oleh Salah Satu Penonton di Kuala Lumpur', 3, '  &lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt;  NCTzen (fans NCT) sedang merasa geram, pasalnya Jeno NCT diberi makanan anjing. Pada hari Sabtu 20 Mei 2023, NCT Dream tengah menggelar konser tur dunia mereka di Malaysia. Bertempat di AXIATA ARENA BUKIT JALIL - Kuala Lumpur, NCT Dream resmi mengakhiri konser &#039;The Dream Show 2 : In A Dream &lt;br&gt;  Konser ini menjadi konser terakhir dengan tajuk &#039;In A Dream&#039;,  karena konser selanjutnya akan dilanjutkan dengan tajuk &#039;In Your Dream&#039;.Setiap member grup idola pasti memiliki emoticonnya masing-masing sebagai ciri khas mereka. Seperti yang kita tahu, Jeno NCT memang dikenal dengan emoticon anjing sebagai lambangnya. &lt;/br&gt; &lt;br&gt;  memang digadang-gadang mirip dengan Samoyed, karena bentuk tubuhnya yang besar tapi tetap memiliki kesan lucu pada wajahnya.Selama ini Jeno NCT tidak pernah merasa keberatan sama sekali karena telah disamakan dengan Samoyed. Bahkan para member NCT khususnya NCT Dream pun menganggap itu sebuah hal yang lucu dan candaan semata. &lt;/br&gt; &lt;br&gt; Namun ada yang berbeda kali ini, salah satu fans memberikan makanan anjing pada konser di Kuala Lumpur kemarin.Makanan anjing dengan berat 2.5 kg dengan varian beef flavor telah ditujukan kepada Jeno NCT. &lt;/br&gt; &lt;br&gt; Para penggemar mulai geram, karena hal tersebut sudah tidak bisa lagi dianggap sebagai candaan semata.Jeno NCT mengunggah swafoto dirinya sendiri selepas konser, pada akun bubble miliknya.  Disertai keterangan:  &quot;Sekarang aku kehilangan namaku.. Haha&quot;  &quot;Siapa aku?&quot; &quot;Aku ini apa?&quot;  &lt;/br&gt;  &lt;br&gt;   Unggahan Jeno NCT ini bagaikan garam yang ditabur di atas luka.Para penggemar yang merasa tak enak bukan hanya marah tapi juga menangis karena sedih melihat idolanya diperlakukan sedemikian rupa.Dalam live Instagram yang biasa dilakukan NCT Dream setelah konser malam tadi, Mark menyinggung tentang makanan anjing yang Jeno NCT dapat pada konser mereka hari itu.  Jeno NCT berkomentar terhadap singgungan Mark, bahwa yang dia dapat bukanlah benar-benar makanan anjing, tapi sebuah boneka anjing.  Jeno NCT juga menambahkan bahwa bau dari boneka itu memang seperti makanan anjing.  Penggemar merasa sangat sedih, mereka menegaskan dan saling mengingatkan satu sama lain bahwa Jeno NCT tetaplah seorang manusia.  &lt;/br&gt; &lt;br&gt;  Tidak sepantasnya memberikan hadiah dengan cara seperti itu, lebih baik berikan secara langsung tanpa membuat kehebohan dengan makanan hewan.  Mark juga menyampaikan keresahannya pada Jeno NCT apabila Jeno merasa keberatan untuk dipanggil &#039;samoyed&#039; lagi, ada baiknya langsung dia katakan.  Kepekaan Mark terhadap berbagai masalah yang tengah melanda member grupnya, kali ini khususnya Jeno NCT.  Mendapat acungan jempol dan tepukan tangan yang meriah dari para penggemar yang menonton tayangan live Instagram mereka.*** &lt;/br&gt;     &lt;/p&gt;'),
(43, '6480910276daf.png', 'Lucas Tulis Surat Usai Umumkan Angkat Kaki dari NCT dan WayV', 3, '&lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt; Lucas muncul perdana setelah SM mengumumkan bahwa dirinya keluar dari NCT dan WayV. &lt;br&gt;  Dalam unggahan surat ke Instagram, Lucas mengaku mengambil keputusan untuk keluar dari grup yang membesarkan namanya itu setelah melakukan banyak pertimbangan dan refleksi diri.  &quot;Halo, saya Lucas. Hari ini saya memiliki pengumuman penting untuk semuanya. Setelah pertimbangan panjang, saya memutuskan keluar dari NCT dan WayV,&quot; tulis Lucas. &lt;/br&gt; &lt;br&gt;  &quot;Saya benar-benar merasa bersalah kepada para member dan dengan berat hati saya meninggalkan pertemanan yang sudah terjalin selama ini.  Sudah delapan tahun sejak pertama kali bergabung dan sangat bersyukur atas dukungan selama ini.&quot; tambahnya. &lt;/br&gt; &lt;br&gt; Selain itu, Lucas juga mengaku membutuhkan waktu lama sebelum akhirnya memutuskan keluar dari NCT dan WayV. Ia merasa keputusan itu diambil untuk kebaikan semua pihak.  Lewat surat itu pula, Lucas mengatakan bahwa dirinya akan mengumpulkan keberanian untuk bertemu penggemar yang terus mendukung dan menantikannya kembali. &lt;/br&gt; &lt;br&gt; &quot;Butuh banyak waktu bagi saya untuk mengambil keputusan ini dan saya percaya ini adalah keputusan tepat untuk kebaikan semua.  Saya percaya cara terbaik untuk membalas para penggemar yang mendukung saya adalah dengan terus memberikan penampilan yang luar biasa,&quot; jelasnya lagi.  &lt;/br&gt;  &lt;br&gt;   Terakhir, Lucas mengatakan akan terus berupaya menjadi sosok yang lebih baik lagi sehingga dikenal sebagai nama aslinya, Huang Xuxi.  &quot;Terakhir, saya ingin mengucapkan terima kasih yang tulus kepada semua penggemar dan semua orang yang terus mendukung saya.&quot; pungkasnya. &lt;/br&gt;     &lt;/p&gt;'),
(44, '6480912b901eb.png', 'YG Entertainment Umumkan 7 Anggota Resmi Baby Monster', 3, '&lt;p&gt; &lt;b&gt;Bandung, Tribun Unpas - &lt;/b&gt;  Agensi ternama Korea Selatan resmi mengumumkan nama-nama yang resmi menjadi anggota Baby Monster. Hal itu diungkapkan lewat video yang berjudul &#039;Debut Member Announcement&#039; yang dibagikan pada 12 Mei waktu Korea Selatan. &lt;br&gt;  Yang Hyun Suk CEO YG Entertainment mengumumkan lima anggota resmi Baby Monster adalah Ahyeon, Ruka, Chiquita, Haram dan Pharita yang dipilih oleh produser YG Entertainment. Namun, karena permintaan yang banyak dari penggemar agensi juga menyertakan anggota Rora dan Asa. &lt;/br&gt; &lt;br&gt;  Yang Hyun Suk menyebut dua anggota itu akan bergabung dalam lineup debut sebagai anggota yang dipilih oleh penggemar. &lt;/br&gt; &lt;br&gt; Nantinya, Baby Monster akan aktif melakukan promosi grup penuh dengan tujuh anggota dan uni yang menampilkan pilihan anggotanya. Mengutip Allkpop, grup ini dijadwalkan akan melakukan debut pada musim gugur mendatang. &lt;/br&gt;     &lt;/p&gt;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tubes`
--
ALTER TABLE `news_tubes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news_tubes`
--
ALTER TABLE `news_tubes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news_tubes`
--
ALTER TABLE `news_tubes`
  ADD CONSTRAINT `news_tubes_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
