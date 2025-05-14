-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2025 at 05:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artikel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT 'Admin',
  `lanjutan_content` varchar(255) DEFAULT NULL,
  `menengah_content` varchar(255) DEFAULT NULL,
  `pemula_content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `gambar`, `author`, `lanjutan_content`, `menengah_content`, `pemula_content`) VALUES
(1, 'REVOLUSI ANGKUTAN UMUM DI BANDUNG DI UJUNG JARI?', 'img/angkot.png', 'Admin',
'Transformasi digital dalam sistem transportasi publik Bandung memungkinkan warga memesan angkot melalui aplikasi, mengurangi ketergantungan pada metode tradisional.',
'Warga Bandung kini dapat menggunakan aplikasi untuk memesan angkot, yang menjadikan transportasi umum lebih modern dan mudah diakses.',
'Sekarang kita bisa naik angkot cukup lewat aplikasi di HP, jadi lebih gampang dan praktis.'),
 
(2, 'INOVASI TEKNOLOGI RAMAH LINGKUNGAN UNTUK DUNIA LEBIH SEHAT', 'img/teknolingkungan.png', 'Admin',
'Berbagai inovasi seperti panel surya, kendaraan listrik, dan sistem daur ulang canggih mendorong kehidupan yang lebih berkelanjutan di tengah krisis iklim.',
'Contoh teknologi ramah lingkungan adalah mobil listrik dan panel surya, yang membantu mengurangi polusi udara dan gas rumah kaca.',
'Teknologi baru seperti mobil listrik dan tenaga matahari bisa membantu menjaga bumi tetap bersih.'),

(3, 'WAJAH PEREMPUAN DALAM HARI PEREMPUAN INTERNASIONAL', 'img/hariperempuan.png', 'Admin',
'Peringatan Hari Perempuan Internasional menjadi momentum refleksi terhadap peran perempuan dalam pembangunan dan perjuangan kesetaraan hak di berbagai sektor.',
'Hari Perempuan Internasional mengajak masyarakat untuk menghargai perjuangan perempuan dan mendorong kesetaraan gender.',
'Hari perempuan adalah hari penting untuk menghargai peran wanita di rumah, sekolah, dan pekerjaan.'),

(4, 'MEMPERKUAT INDUSTRI BAJA SEBAGAI URAT NADI PERTAHANAN', 'img/baja.png', 'Admin',
'Kemandirian industri baja menjadi fondasi penting dalam pengembangan alat utama sistem persenjataan nasional, memperkuat postur pertahanan Indonesia.',
'Baja digunakan untuk membuat kapal perang, pesawat, dan senjata. Indonesia perlu memperkuat industrinya sendiri agar tidak tergantung negara lain.',
'Baja adalah bahan penting untuk membuat alat militer seperti kapal dan pesawat.'),

(5, 'BISAKAH SAMPAH DI LAUT BERDAMPAK PADA KESEHATAN MANUSIA?', 'img/sampah.png', 'Admin',
'Paparan mikroplastik dari laut dapat memasuki rantai makanan dan berdampak pada kesehatan manusia, termasuk risiko kerusakan organ dan gangguan hormonal.',
'Sampah plastik di laut bisa dimakan ikan, lalu kita makan ikan itu. Ini bisa merusak tubuh kita dalam jangka panjang.',
'Plastik di laut bisa membahayakan ikan dan manusia yang memakannya.'),

(6, 'MENINGKATKAN KESEHATAN MENTAL DENGAN MEDITASO', 'img/meditasi.png', 'Admin',
'Meditasi terbukti secara ilmiah dapat menurunkan hormon stres dan meningkatkan fokus serta kualitas tidur, menjadikannya metode efektif dalam menjaga kesehatan mental.',
'Meditasi bisa membantu kita menjadi lebih tenang dan tidak stres, terutama saat banyak masalah.',
'Dengan meditasi, kita bisa merasa lebih tenang dan tidak gampang marah.'),

(7, 'PENTINGNYA DAUR ULANG SAMPAH UNTUK KESEHATAN LINGKUNGAN', 'img/daurulang.png', 'Admin',
'Daur ulang mengurangi volume sampah dan penggunaan sumber daya alam baru, sehingga mendukung kelestarian lingkungan dan mengurangi jejak karbon.',
'Membuang dan memilah sampah dengan benar sangat penting agar sampah bisa diolah kembali dan tidak mencemari lingkungan.',
'Daur ulang artinya menggunakan kembali barang bekas agar tidak mencemari lingkungan.'),

(8, '11 MEI 2024, JAKARTA - KONTEN VIRAL BERSIHKAN', 'img/bersih2.png', 'Admin',
'Aksi bersih-bersih massal di Jakarta yang dipicu tren media sosial menunjukkan potensi besar kampanye digital dalam menggerakkan partisipasi publik.',
'Banyak orang di Jakarta ikut bersih-bersih karena tren di media sosial, dan ini membuat kota jadi lebih bersih.',
'Orang-orang ramai-ramai bersih-bersih karena lagi viral di media sosial.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
