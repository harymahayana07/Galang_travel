-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 02:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galang_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `username`, `password`) VALUES
(1, 'galangpurnama01@gmail.com', '  galang_travel', 'pass_galang');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(7, 'Trip'),
(8, 'Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `lokasi_maps` text NOT NULL,
  `foto_wisata` varchar(255) NOT NULL,
  `deskripsi_wisata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_kategori`, `nama_paket`, `harga_paket`, `lokasi_maps`, `foto_wisata`, `deskripsi_wisata`) VALUES
(2, 7, 'Trip Gili Trawangan', 350000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15790.084364871693!2d116.02745136811558!3d-8.350287923575669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcde0ab4ff1579f%3A0xfcea7c174732d4b2!2sGili%20Trawangan!5e0!3m2!1sid!2sid!4v1657612930824!5m2!1sid!2sid', 'gili_trawangann.jpeg', 'Gili Trawangan adalah yang terbesar dari ketiga pulau kecil atau gili yang terdapat di sebelah barat laut Lombok. Trawangan juga satu-satunya gili yang ketinggiannya di atas permukaan laut cukup signifikan. \r\nPaket Galang travel menyediakan paket trip yang sudah termasuk :\r\nPenjemputan tamu di hotel - Wisata Villa Hantu - Bukit Malimbu - Pelabuhan - Gili air -Gili meno- Gili trawangan - Kembali ke hotel.\r\nSudah include dengan mobil,supir,bbm,guide,boat,alat snorkling,tiker masuk,air mineral,snack,dan dokumentasi.'),
(3, 7, 'Trip Sembalun', 200000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126318.42379737482!2d116.44883158047573!3d-8.357241346936274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc2e1355a72c6b%3A0x242b7cf93a678c4f!2sKebun%20Strawberry%20Bukit%20Sembalun!5e0!3m2!1sid!2sid!4v1657613100580!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.15.35 (1).jpeg', 'Sembalun merupakan tempat wisata yang berada di kabupaten Lombok Timur, Nusa Tenggara Barat.\r\nDesa yang terletak di kaki gunung Rinjani ini menyimpan sejuta pesona yang tidak terelakkan oleh wisatawan yang berkunjung. Kamu tidak akan bisa menolak pesona yang ditawarkan desa Sembalun Lombok, hingga sebutan surga kecil sering disematkan pada desa ini.\r\nGalang travel menyediakan paket yang sudah termasuk :\r\nPenjemputan tamu di hotel-pusuk sembalun-kebun stroberi-kedai sawah-Bukit selong-Sajang glamping-Kembali ke hotel.\r\nDan include :\r\nMobil,supir,bbm,guide,tiket masuk,air mineral,snack,dokumentasi.'),
(4, 7, 'Trip Tiu Kelep', 200000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.972715187748!2d116.40814999999999!3d-8.305509999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdd5e7dc164b5b%3A0x8bcfd632c76d21a7!2sTiu%20Kelep%20Waterfall!5e0!3m2!1sid!2sid!4v1657613200848!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.19.23 (1).jpeg', 'Air Terjun Tiu Kelep merupakan air terjun yang berada di kaki Gunung Rinjani.Lokasi air terjun ini berada di Bayan, Lombok Timur, Nusa Tenggara Barat, lebih tepatnya di kawasan Gunung Rinjani. Air terjun tersebut terkenal karena keindahannya dan memiliki tinggi mencapai 42 meter. Dalam bahasa Sasak, air terjun tersebut memiliki arti Kolam Renang \"Tiu\" dan \"Kelep\" berarti Terbang. Jika digabungkan, bisa berarti Kolam Renang Terbang.\r\nGalang travel menyediakan paket yang sudah termasuk :\r\nPenjemputan tamu di hotel-Air terjun Sendang gile-Air terjun Tiu Kelep-Bukit Malimbu-Pantai Nipah-Villa Hantu -Kembali ke hotel.\r\nDan include :\r\nMobil,supir,bbm,guide,tiket masuk,air mineral,snack,dokumentasi.'),
(5, 7, 'Trip Gili Nanggu', 275000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63099.59180136116!2d115.97331353789188!3d-8.717691205500735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcd97b24ee05beb%3A0xaacf06d6e793aadb!2sGili%20Nanggu!5e0!3m2!1sid!2sid!4v1657613281899!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.26.29 (1).jpeg', 'Gili Nanggu adalah salah 1 dari 11 gili yang tidak berpenghuni terletak di Desa Batu Kijuk (Sekotong Barat), Kec Sekotong Barat, Kab. Lombok Barat, Nusa Tenggara Barat.\r\nPengunjung dapat melakukan aktivitas snorkeling, dengan pemandangan karang yang lumayan bagus, serta dapat melihat puluhan hingga ratusan jenis ikan laut. Salah satu ikan yang paling banyak dicari adalah ikan Badut, atau ikan nemo.\r\nGalang travel menyediakan paket yang sudah termasuk :\r\nPenjemputan tamu di hotel-Pelabuhan-Gili nanggu-Gili Sudak-Gili Kedis-Gili Tangkong -Kembali ke hotel.\r\nDan include :\r\nMobil,supir,bbm,guide,tiket masuk,air mineral,snack,dokumentasi.'),
(6, 7, 'Trip Benang Kelambu', 150000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.659206648229!2d116.3370066!3d-8.532427799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb59300000001%3A0x8d83d178d0ea850d!2sAir%20Terjun%20Benang%20Kelambu!5e0!3m2!1sid!2sid!4v1657613337967!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.28.55 (1).jpeg', 'Air Terjun Benang Kelambu berada di kaki Gunung Rinjani pada ketinggian 552 meter diatas permukaan laut. Tinggi air terjun ini sendiri terbagi menjadi beberapa tingkatan yakni 30 meter, 10 meter, dan 5 meter.\r\n\r\nDi tingkatan paling tinggi, aliran air yang keluar dari sela-sela tanaman yang tumbuh di sekitarnya nampak seperti sebuah kelambu. Itulah alasan mengapa tempat ini dinamakan Air Terjun Benang Kelambu.\r\nGalang travel menyediakan paket yang sudah termasuk :\r\nPenjemputan tamu di hotel-Air terjun Benang Stukel-Air terjun Benang Kelambu-Kembali ke hotel.\r\nDan include :\r\nMobil,supir,bbm,guide,tiket masuk,air mineral,snack,dokumentasi.'),
(7, 8, 'Royal Avila Boutique', 2200000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31573.20610837507!2d116.02414697928509!3d-8.435914160208203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcddd53e8bcb0c3%3A0x4033376b261399f0!2sRoyal%20Avila%20Boutique%20Resort%20%26%20Spa!5e0!3m2!1sid!2sid!4v1657613416773!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.32.39 (1).jpeg', 'Royal Avila Boutique Resort adalah pilihan sempurna untuk menginap di pantai di Senggigi Bintang 4 .Semua orang dapat menikmati keseruan di kolam renang outdoor, atau memanjakan diri dengan pijat di spa. Restoran sempurna untuk menikmati camilan, selain itu Anda juga bisa menikmati minuman dingin di bar/lounge.\r\nGalang travel memberikan harga terbaik yang sudah termasuk Tax & Breakfast'),
(8, 8, 'The Kayana', 1300000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.9526660940683!2d116.06211480000005!3d-8.406309900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdddfe9234992b%3A0xdf49f2c3e927477f!2sThe%20Kayana%20Beach%20Lombok!5e0!3m2!1sid!2sid!4v1657613520145!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.40.21 (1).jpeg', 'The Kayana merupakan penginapan Bintang 5 yang berlokasi di Jl. Raya Senggigi, Kecinan - Pemenang Lombok Utara, Nusa Tenggara Barat 83352 - Indonesia.\r\nThe Kayana Beach Lombok menawarkan akomodasi dengan kolam renang, restoran, taman, dan pemandangan kolam renang di Senggigi. Akomodasi ini memiliki bathtub spa. Unit-unitnya memiliki teras, AC, TV layar datar, serta kamar mandi pribadi dengan shower dan jubah mandi. Beberapa unit memiliki ruang makan dan/atau balkon. \r\nVila ini menawarkan sarapan Ã  la carte atau sarapan lengkap ala Inggris/Irlandia. Tempat-tempat menarik yang populer di dekat The Kayana Beach Lombok meliputi Pantai Kecinan, Pantai Mentigi, dan Pantai Padanan.\r\nGalang Travel menawarkan harga terbaik yang sudah termasuk tax & breakfast'),
(9, 8, 'Aston Inn', 550000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126242.48998807972!2d116.04772045820313!3d-8.588517399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf5ed4354bcb%3A0x5fe5239bc046779e!2sASTON%20Inn%20Mataram!5e0!3m2!1sid!2sid!4v1657613601857!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.43.23 (1).jpeg', 'Aston inn merupakan penginapan Bintang 3 yang berada di dalam Kota Mataram.\r\nASTON Inn Mataram menawarkan akomodasi dengan restoran, parkir pribadi gratis, kolam renang luar ruangan, dan pusat kebugaran di Mataram, 1,2 km dari Mataram Mall. Berbagai fasilitas yang ditawarkan meliputi bar, lounge bersama, dan taman. Akomodasi ini memiliki resepsionis 24 jam, layanan kamar, dan penukaran mata uang untuk Anda. Hotel ini menyediakan kamar-kamar ber-AC yang menawarkan meja, ketel, minibar, brankas, TV layar datar, dan kamar mandi pribadi dengan shower. Di ASTON Inn Mataram, setiap kamar memiliki seprai dan handuk. Tempat-tempat menarik yang populer di dekat ASTON Inn Mataram termasuk Pura Meru, Pasar Cakranegara, dan Lombok Epicentrum Mall.\r\nGalang Travel menawarkan harga terbaik yang sudah termasuk tax & breakfast'),
(10, 8, 'Prime Park', 585000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15780.81226869776!2d116.09391501726891!3d-8.576464283514289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc090656cb3b3%3A0x97c7983c1f1bf06c!2sPrime%20Park%20Hotel%20%26%20Convention%20Lombok!5e0!3m2!1sid!2sid!4v1657613650520!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.46.28 (1).jpeg', 'Prime Park merupakan penginapan Bintang 4 yang berada di dalam Kota Mataram.\r\nPrime Park Hotel & Convention Lombok menawarkan akomodasi dengan Wi-Fi gratis dan parkir pribadi gratis di Mataram, 2,4 km dari Mataram Mall. Akomodasi ini menyediakan resepsionis 24 jam, restoran, dan kolam renang luar ruangan. Objek wisata di daerah ini termasuk Pasar Cakranegara, 1,4 km jauhnya, atau Lombok Epicentrum Mall, terletak 2,1 km dari akomodasi. Setiap kamar di hotel ini memiliki lemari pakaian, TV layar datar, dan kamar mandi pribadi. Sarapan prasmanan tersedia setiap hari di Prime Park Hotel & Convention Lombok. \r\nGalang Travel menawarkan harga terbaik yang sudah termasuk tax & breakfast'),
(11, 8, 'Living Asia', 520000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15785.693965240975!2d116.02967441724579!3d-8.458132378271415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcde8268c7fabfb%3A0xfc4e706bf9ba9bb4!2sLiving%20Asia%20Resort%20%26%20Spa!5e0!3m2!1sid!2sid!4v1657613721226!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.49.55 (1).jpeg', 'Living Asia Resort and Spa merupakan penginapan Bintang 4 yang berada di Senggigi,yang menyediakan akses langsung ke Pantai Stangi yang asri, dan menawarkan bungalow-bungalow modern dengan pemandangan laut. Resor ini juga memiliki restoran, bar pantai, dan kolam renang tanpa batas. Wisata menyelam dapat diatur di toko perlengkapan menyelam di akomodasi. Tersedia Wi-Fi gratis dan tempat parkir gratis. Masing-masing bungalow di Living Asia Resort and Spa memiliki balkon pribadi. TV satelit layar datar, minibar, dan lemari es tersedia di bungalow. Kamar mandi dalamnya menawarkan shower outdoor. \r\nGalang Travel menawarkan harga terbaik yang sudah termasuk tax & breakfast'),
(12, 8, 'Svarga Resort', 550000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15784.39391697644!2d116.03333531725197!3d-8.489805379665698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcde9e009102cc9%3A0xdeec4c2cec1d5841!2sSvarga%20Resort%20Lombok!5e0!3m2!1sid!2sid!4v1657613771750!5m2!1sid!2sid', 'WhatsApp Image 2022-07-12 at 15.52.56 (1).jpeg', 'Svarga Resort adalah penginapan Bintang 4 yang berada di Senggigi,yang menawarkan akomodasi luas dengan akses Wi-Fi gratis, juga memiliki restoran dan spa di areanya. Wisata hiking dapat diatur berdasarkan permintaan.Kamar-kamar elegan resor ini memiliki area tempat duduk dan jendela besar yang menghadap ke taman. Masing-masing dilengkapi dengan TV layar datar, ketel listrik, dan kulkas. Kamar mandi pribadinya yang bergaya semi terbuka menyediakan pengering rambut dan perlengkapan mandi gratis.\r\nGalang Travel menawarkan harga terbaik yang sudah termasuk tax & breakfast');

-- --------------------------------------------------------

--
-- Table structure for table `paket_foto`
--

CREATE TABLE `paket_foto` (
  `id_paket_foto` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_paket_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_foto`
--

INSERT INTO `paket_foto` (`id_paket_foto`, `id_paket`, `nama_paket_foto`) VALUES
(1, 1, 'Gili Trawangan 1.jpg'),
(2, 1, 'Gili Trawangan 2.jpg'),
(3, 2, 'WhatsApp Image 2022-07-12 at 15.08.40 (2).jpeg'),
(4, 2, 'Gili Trawangan 1.jpg'),
(5, 2, 'Gili Trawangan 2.jpg'),
(6, 3, 'WhatsApp Image 2022-07-12 at 15.15.35 (1).jpeg'),
(7, 3, 'Sembalun 1.jpg'),
(8, 3, 'Sembalun 2.jpg'),
(9, 3, 'Sembalun 3.jpg'),
(10, 4, 'WhatsApp Image 2022-07-12 at 15.19.23 (1).jpeg'),
(11, 4, 'Tiu Kelep 1.jpg'),
(12, 4, 'Tiu Kelep 2.jpg'),
(13, 5, 'WhatsApp Image 2022-07-12 at 15.26.29 (1).jpeg'),
(14, 5, 'Gili Nanggu 2.jpg'),
(15, 5, 'Gili Nanggu 1.jpg'),
(16, 6, 'WhatsApp Image 2022-07-12 at 15.28.55 (1).jpeg'),
(17, 6, 'Benang Kelambu 1.jpg'),
(18, 6, 'Benang Kelambu 2.jpg'),
(19, 7, 'WhatsApp Image 2022-07-12 at 15.32.39 (1).jpeg'),
(20, 7, 'Royal Avila 1.jpg'),
(21, 7, 'Royal Avila 2.jpg'),
(22, 8, 'WhatsApp Image 2022-07-12 at 15.40.21 (1).jpeg'),
(23, 8, 'The Kayana 1.jpg'),
(24, 8, 'The Kayana 2.jpg'),
(25, 9, 'WhatsApp Image 2022-07-12 at 15.43.23 (1).jpeg'),
(26, 9, 'Aston Inn 1.jpg'),
(27, 9, 'Aston inn 2.jpg'),
(28, 10, 'WhatsApp Image 2022-07-12 at 15.46.28 (1).jpeg'),
(29, 10, 'Prime Park 1.jpg'),
(30, 10, 'Prime Park 2.jpg'),
(31, 11, 'WhatsApp Image 2022-07-12 at 15.49.55 (1).jpeg'),
(32, 11, 'Living Asia 2.jpg'),
(33, 11, 'Living asia 3.jpg'),
(34, 12, 'WhatsApp Image 2022-07-12 at 15.52.56 (1).jpeg'),
(35, 12, 'Svarga 1.jpg'),
(36, 12, 'Svarga 2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `paket_foto`
--
ALTER TABLE `paket_foto`
  ADD PRIMARY KEY (`id_paket_foto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paket_foto`
--
ALTER TABLE `paket_foto`
  MODIFY `id_paket_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
