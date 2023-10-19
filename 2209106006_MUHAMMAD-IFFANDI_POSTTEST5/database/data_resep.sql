-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 03:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_resep`
--

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `nama_resep` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `bahan` text NOT NULL,
  `instruksi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `nama_resep`, `kategori`, `bahan`, `instruksi`, `gambar`) VALUES
(24, 'Nasi Goreng', 'Makanan Berat', 'Nasi putih, 2 piring.\r\nDaging ayam atau udang (atau keduanya), 200 gram, potong kecil.\r\nTelur ayam, 2 butir, kocok.\r\nBawang putih, 3 siung, cincang halus.\r\nBawang merah, 5 butir, cincang halus.\r\nCabai merah, 2 buah, iris serong (sesuaikan tingkat kepedasan yang diinginkan).\r\nWortel, 1 buah, potong dadu kecil.\r\nKacang polong, 50 gram.\r\nKecap manis, 2-3 sendok makan (sesuai selera).\r\nGaram secukupnya.\r\nMerica secukupnya.\r\nMinyak goreng secukupnya.', 'Panaskan sedikit minyak goreng dalam wajan atau wok di atas api sedang.\r\nTumis bawang putih dan bawang merah hingga harum.\r\nTambahkan potongan daging ayam (atau udang) dan masak hingga berubah warna dan matang.\r\nDorong daging ayam (atau udang) ke sisi wajan dan tuangkan telur kocok ke tengah wajan. Aduk rata dan biarkan telur setengah matang.\r\nTambahkan potongan wortel, kacang polong, dan cabai merah iris. Aduk semua bahan dengan telur yang setengah matang.\r\nMasukkan nasi putih ke dalam wajan dan aduk rata dengan bahan-bahan lain.\r\nTambahkan kecap manis, garam, dan merica. Aduk lagi hingga semua bahan tercampur dengan baik.\r\nLanjutkan memasak dan aduk-aduk nasi hingga semuanya panas dan bumbu meresap.\r\nSaat nasi goreng sudah matang, hidangkan dalam piring atau mangkuk. Anda bisa menambahkan irisan mentimun atau tomat sebagai hiasan jika diinginkan.\r\nSelamat menikmati nasi goreng yang lezat!', '20200819-Nasi-Goreng-The-Tastiest-Fried-Rice_00FeatImg.jpg'),
(25, 'Rendang', 'Makanan Berat', 'Daging sapi (daging has dalam) - 500 gram\r\nKelapa parut - 1 butir\r\nDaun jeruk - 3 lembar\r\nDaun kunyit - 2 lembar\r\nSerai - 2 batang, memarkan\r\nAsam kandis - 2 buah\r\nAir - 1000 ml\r\nMinyak kelapa - 3 sendok makan\r\nGaram - 2 sendok teh\r\nBawang merah - 10 buah\r\nBawang putih - 5 siung\r\nKemiri - 5 butir\r\nLengkuas - 2 cm\r\nJahe - 2 cm\r\nKetumbar - 1 sendok teh\r\nMerica - 1/2 sendok teh', 'Campur bumbu halus dengan minyak kelapa dan tumis hingga harum.\r\nMasukkan daging sapi, aduk hingga berubah warna.\r\nTambahkan daun jeruk, daun kunyit, serai, asam kandis, dan garam. Aduk rata.\r\nTuang air dan biarkan mendidih. Setelah mendidih, kecilkan api.\r\nTambahkan kelapa parut dan masak hingga daging empuk dan bumbu meresap.\r\nRendang siap disajikan.', 'rendang_1.jpg'),
(26, 'Ramen', 'Makanan Berat', 'Mi Ramen - 2 bungkus\r\nAir - 4 cangkir\r\nDaging ayam (dada atau paha) - 200 gram, potong-potong\r\nTelur - 2 butir, rebus setengah matang dan potong dua\r\nRumput laut (nori) - 2 lembar\r\nJamur shiitake - 4-6 buah, iris tipis\r\nBawang daun - 2 batang, iris tipis\r\nKeju parmesan - secukupnya (opsional)\r\nBawang merah goreng (bawang goreng) - secukupnya (opsional)\r\nMinyak wijen - 1 sendok makan (opsional)\r\nKeju cheddar parut - secukupnya (opsional)\r\nBumbu Ramen instan (tersedia dalam bungkus saat membeli mi Ramen instan)', 'Rebus mi Ramen dalam air mendidih selama 2-3 menit atau sesuai petunjuk kemasan. Setelah matang, tiriskan mi dan sisihkan.\r\nSambil merebus mi, Anda dapat memasak daging ayam di wajan dengan sedikit minyak hingga matang dan berwarna kecokelatan. Setelah dimasak, potong daging ayam menjadi potongan-potongan kecil.\r\nIris tipis rumput laut (nori), jamur shiitake, dan bawang daun untuk dijadikan topping.\r\nSiapkan mangkuk besar. Letakkan mi yang sudah direbus di dasar mangkuk.\r\nTuang air mendidih ke dalam mangkuk, kemudian tambahkan bumbu Ramen instan sesuai selera.\r\nLetakkan potongan daging ayam di atas mi.\r\nMasukkan telur rebus yang sudah dipotong dua.\r\nTambahkan rumput laut (nori), jamur shiitake, dan bawang daun.\r\nUntuk variasi rasa tambahan, Anda bisa menambahkan minyak wijen, keju parmesan, keju cheddar parut, atau bawang merah goreng sebagai topping.\r\nAduk-aduk mi Ramen dengan semua bahan di dalam mangkuk.\r\nRamen siap disajikan panas. Selamat menikmati!', 'mie.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
