-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 05:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pusdopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id` int(11) NOT NULL,
  `judul_blog` text NOT NULL,
  `content` text NOT NULL,
  `tgl_blog` date NOT NULL,
  `time_blog` time NOT NULL,
  `img_blog` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `judul_blog`, `content`, `tgl_blog`, `time_blog`, `img_blog`) VALUES
(4, 'The three greatest things you learn from traveling', '<h3>Appreciation of diversity</h3><p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p>', '2022-12-02', '00:03:25', '6352a5c81d769.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id`, `nama_dokter`, `spesialis`, `no_hp`, `jenis_kelamin`, `alamat`) VALUES
(2, 'dr. ADRIANI SRI WAHYUNI', 'UMUM', '0822', 'Perempuan', 'Jln Trans Migrasi Desa Keurea Kecamatan Bahodopi '),
(3, 'drg. HIKMAH SURYANI', 'Dokter GIGI', '0823', 'Perempuan', 'jln Trans Migrasi Desa Keurea Kecamatan bahodopi '),
(4, 'dr. RAHMA NILASARI, S.Ked', 'Dokter UMUM', '0812', 'Perempuan', 'Jln Trans Migrasi Desa Keurea Kecamatan Bahodopi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `nama_gejala`) VALUES
(1, 'Batuk'),
(2, 'Pilek'),
(3, 'Demam'),
(4, 'Sakit Kepala'),
(5, 'Nyeri Menelan'),
(6, 'Nyeri Lambung'),
(7, 'Perut Kembung'),
(8, 'Muntah'),
(9, 'Sakit Perut'),
(10, 'Gangguan Saluran Pencernaan'),
(11, 'Feses Cair'),
(12, 'Tidak Nafsu Makan'),
(13, 'Darah Pada Feses'),
(14, 'Kulit Ruam Kemerahan'),
(15, 'Kulit Lepuh Berisi Air'),
(16, 'Kulit Membengkak'),
(17, 'Kulit Gatal'),
(18, 'Kulit Kering Bersisik Pecah'),
(19, 'Sakit Dada'),
(20, 'Gelisa'),
(21, 'Mudah Lelah'),
(22, 'Jantung Berdebar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala_rm`
--

CREATE TABLE `tb_gejala_rm` (
  `id` int(11) NOT NULL,
  `id_rm` varchar(256) NOT NULL,
  `gejala_01` int(11) NOT NULL,
  `gejala_02` int(11) NOT NULL,
  `gejala_03` int(11) NOT NULL,
  `gejala_04` int(11) NOT NULL,
  `gejala_05` int(11) NOT NULL,
  `gejala_06` int(11) NOT NULL,
  `gejala_07` int(11) NOT NULL,
  `gejala_08` int(11) NOT NULL,
  `gejala_09` int(11) NOT NULL,
  `gejala_10` int(11) NOT NULL,
  `gejala_11` int(11) NOT NULL,
  `gejala_12` int(11) NOT NULL,
  `gejala_13` int(11) NOT NULL,
  `gejala_14` int(11) NOT NULL,
  `gejala_15` int(11) NOT NULL,
  `gejala_16` int(11) NOT NULL,
  `gejala_17` int(11) NOT NULL,
  `gejala_18` int(11) NOT NULL,
  `gejala_19` int(11) NOT NULL,
  `gejala_20` int(11) NOT NULL,
  `gejala_21` int(11) NOT NULL,
  `gejala_22` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gejala_rm`
--

INSERT INTO `tb_gejala_rm` (`id`, `id_rm`, `gejala_01`, `gejala_02`, `gejala_03`, `gejala_04`, `gejala_05`, `gejala_06`, `gejala_07`, `gejala_08`, `gejala_09`, `gejala_10`, `gejala_11`, `gejala_12`, `gejala_13`, `gejala_14`, `gejala_15`, `gejala_16`, `gejala_17`, `gejala_18`, `gejala_19`, `gejala_20`, `gejala_21`, `gejala_22`) VALUES
(16, '001', 1, 0, 3, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, '002', 0, 2, 0, 0, 0, 0, 7, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, '003', 1, 0, 0, 0, 5, 6, 0, 0, 0, 0, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, '004', 1, 2, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala_testing`
--

CREATE TABLE `tb_gejala_testing` (
  `id` int(11) NOT NULL,
  `id_rm` varchar(256) NOT NULL,
  `gejala_01` int(11) NOT NULL,
  `gejala_02` int(11) NOT NULL,
  `gejala_03` int(11) NOT NULL,
  `gejala_04` int(11) NOT NULL,
  `gejala_05` int(11) NOT NULL,
  `gejala_06` int(11) NOT NULL,
  `gejala_07` int(11) NOT NULL,
  `gejala_08` int(11) NOT NULL,
  `gejala_09` int(11) NOT NULL,
  `gejala_10` int(11) NOT NULL,
  `gejala_11` int(11) NOT NULL,
  `gejala_12` int(11) NOT NULL,
  `gejala_13` int(11) NOT NULL,
  `gejala_14` int(11) NOT NULL,
  `gejala_15` int(11) NOT NULL,
  `gejala_16` int(11) NOT NULL,
  `gejala_17` int(11) NOT NULL,
  `gejala_18` int(11) NOT NULL,
  `gejala_19` int(11) NOT NULL,
  `gejala_20` int(11) NOT NULL,
  `gejala_21` int(11) NOT NULL,
  `gejala_22` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala_training`
--

CREATE TABLE `tb_gejala_training` (
  `id` int(11) NOT NULL,
  `id_rm` varchar(256) NOT NULL,
  `gejala_01` int(11) NOT NULL,
  `gejala_02` int(11) NOT NULL,
  `gejala_03` int(11) NOT NULL,
  `gejala_04` int(11) NOT NULL,
  `gejala_05` int(11) NOT NULL,
  `gejala_06` int(11) NOT NULL,
  `gejala_07` int(11) NOT NULL,
  `gejala_08` int(11) NOT NULL,
  `gejala_09` int(11) NOT NULL,
  `gejala_10` int(11) NOT NULL,
  `gejala_11` int(11) NOT NULL,
  `gejala_12` int(11) NOT NULL,
  `gejala_13` int(11) NOT NULL,
  `gejala_14` int(11) NOT NULL,
  `gejala_15` int(11) NOT NULL,
  `gejala_16` int(11) NOT NULL,
  `gejala_17` int(11) NOT NULL,
  `gejala_18` int(11) NOT NULL,
  `gejala_19` int(11) NOT NULL,
  `gejala_20` int(11) NOT NULL,
  `gejala_21` int(11) NOT NULL,
  `gejala_22` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gejala_training`
--

INSERT INTO `tb_gejala_training` (`id`, `id_rm`, `gejala_01`, `gejala_02`, `gejala_03`, `gejala_04`, `gejala_05`, `gejala_06`, `gejala_07`, `gejala_08`, `gejala_09`, `gejala_10`, `gejala_11`, `gejala_12`, `gejala_13`, `gejala_14`, `gejala_15`, `gejala_16`, `gejala_17`, `gejala_18`, `gejala_19`, `gejala_20`, `gejala_21`, `gejala_22`) VALUES
(4, '001', 1, 0, 3, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '002', 0, 2, 0, 0, 0, 0, 7, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '003', 1, 0, 0, 0, 5, 6, 0, 0, 0, 0, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, '004', 1, 2, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `menu`, `status`) VALUES
(1, 'Algoritma', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id`, `nama_obat`, `ket_obat`) VALUES
(1, 'fluocinonide', 'mengurangi pembengkakan gatal dan kemerahan'),
(2, 'Triamcinolone', 'meredahkan peradangan'),
(3, 'clobetasol', 'meredahkan gatal kemerahan dan rasa tidah nyaman'),
(4, 'betametason ', 'mengatasi reaksi alergi'),
(5, 'ibuprofen', 'meredahkan demam dan nyeri otot'),
(6, 'diphenhydramine', 'pilek dan hidung tersumbat'),
(7, 'guaifinesin', 'meredahkan batuk'),
(8, 'imodium', 'membantu pencernaan makanan agar feses tidak cair'),
(9, 'neo entrostop strip', 'mengobati diare'),
(10, 'diapet', 'mengurangi rasa mulas mengatasi diare dan mencret'),
(11, 'oralit', 'mencegah dehidrasi saat diare'),
(12, 'mylanta', 'membantu menetralkan asam lambung'),
(13, 'polysilane', 'mengatasi gejala mag'),
(14, 'promag', 'menetralkan kadar asam lambung'),
(15, 'antasida deon', 'meminimalisir nyeri nyut -nyutan karena mag'),
(16, 'amlodipine', 'menurunkan penyakit kardiovaskular yang beresiko gagal jantung'),
(17, 'furosemide', 'obat hipertensi golongan diuretik '),
(18, 'captropil', 'hipertensi dengan koplikasi diabetes melitus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `nama_lengkap`, `jenis_kelamin`, `alamat`) VALUES
(1, 'FARHAN AMBDULAH', 'Laki-laki', 'BAHODOPI'),
(2, 'MUH ARJUNA', 'Laki-laki', 'BAHOMAKMUR'),
(3, 'MARLIN WATI', 'Perempuan', 'LALAMPU'),
(4, 'MUH FAISAL', 'Laki-laki', 'BAHODOPI'),
(5, 'RAHMAWATI', 'Perempuan', 'BAHOMAKMUR'),
(6, 'SITI ASTRI', 'Perempuan', 'BAHODOPI'),
(7, 'LA ENGKU', 'Laki-laki', 'BAHOMAKMUR'),
(8, 'RUSMAN', 'Laki-laki', 'BAHODOPI'),
(9, 'LISRA', 'Laki-laki', 'KEUREA'),
(10, 'SERLI', 'Perempuan', 'BAHOMAKMUR'),
(11, 'ARMAN', 'Laki-laki', 'BAHOMAKMUR'),
(12, 'MUH ARIFIN', 'Laki-laki', ' BAHOMAKMUR'),
(13, 'RUSLAN', 'Laki-laki', 'DAMPALA'),
(14, 'ALDI AHMAD', 'Laki-laki', 'BAHOMAKMUR'),
(15, 'EVAN', 'Laki-laki', 'BAHOMAKMUR'),
(16, 'RIFANUS', 'Laki-laki', 'BAHODOPI'),
(17, 'MAWAR', 'Perempuan', 'BAHODOPI'),
(18, 'RONAL ', 'Laki-laki', 'BAHOMAKMUR'),
(19, 'RISMAWATI', 'Perempuan', 'KEUREA'),
(20, 'RATNA INDAH SARI', 'Perempuan', 'BAHOMAKMUR'),
(21, 'ALVONIUS', 'Laki-laki', 'BAHOMAKMUR'),
(22, 'NIRA YUNIAR', 'Perempuan', 'KEUREA'),
(23, 'SINDI', 'Perempuan', 'BAHOMAKMUR'),
(24, 'WATI', 'Perempuan', 'BAHODOPI'),
(25, 'LUFIANI', 'Perempuan', 'BAHODOPI'),
(26, 'MERI DAYU', 'Perempuan', 'BAHOMAKMUR'),
(27, 'VINSENSIUS', 'Laki-laki', 'BAHOMAKMUR'),
(28, 'HERYATI', 'Perempuan', 'KEUREA'),
(29, 'NURLIANA', 'Perempuan', 'KEUREA'),
(30, 'HERI HARYANTO', 'Laki-laki', 'LABOTA'),
(31, 'AYU PUTU', 'Perempuan', 'MAKARTI JAYA'),
(32, 'ADILA ISMAIL', 'Laki-laki', 'BAHOMAKMUR'),
(33, 'RISAL', 'Laki-laki', 'BAHODOPI'),
(34, 'IRMAYANTI', 'Perempuan', 'LABOTA'),
(35, 'ZAINAL ABIDIN ', 'Laki-laki', 'BAHODOPI'),
(36, 'ALFIAN', 'Laki-laki', 'BAHOMAKMUR'),
(37, 'RISKA', 'Perempuan', 'BAHODOPI'),
(38, 'NENGSI', 'Perempuan', 'KEUREA'),
(39, 'RAMADANI', 'Perempuan', 'LALAMPU'),
(40, 'ANISA FITRIA', 'Perempuan', 'BAHOMAKMUR'),
(41, 'JUMIATI', 'Perempuan', 'LABOTA'),
(42, 'ASRIANI', 'Perempuan', 'LABOTA'),
(43, 'AMIR', 'Laki-laki', 'BAHOMAKMUR'),
(44, 'SAFRIAN', 'Laki-laki', 'BAHOMAKMUR'),
(45, 'SARBANI', 'Laki-laki', 'BAHOMAKMUR'),
(46, 'SARTRIAWAN', 'Laki-laki', 'KEUREA'),
(47, 'MUH RAZAK', 'Laki-laki', 'KEUREA'),
(48, 'AMALUDIN', 'Laki-laki', 'BAHOMAKMUR'),
(49, 'ROSDIANA', 'Perempuan', 'KEUREA'),
(50, 'FAISAL', 'Laki-laki', 'FATUFIA'),
(51, ' MUH HAKIM', 'Laki-laki', 'LALAMPU'),
(52, 'EKA YULIANTO', 'Laki-laki', 'BAHOMAKMUR'),
(53, 'MUH ZEIN A', 'Laki-laki', 'KEUREA'),
(54, 'GANDENSIUS R', 'Perempuan', 'BAHOMAKMUR'),
(55, 'SURIANTO', 'Laki-laki', 'LALAMPU'),
(56, 'NURLINA', 'Perempuan', 'BAHODOPI'),
(57, 'ASDAR', 'Laki-laki', 'KEUREA'),
(58, 'PRESHAWIRA', 'Laki-laki', 'BAHODOPI'),
(59, 'SAIFUL', 'Laki-laki', 'BAHOMAKMUR'),
(60, 'DESMAN', 'Laki-laki', 'BAHODOPI'),
(61, 'MUH ZAFRAN', 'Laki-laki', 'BAHODOPI'),
(62, 'HERLINA', 'Perempuan', 'LABOTA'),
(63, 'ALFARES HAIDAR', 'Laki-laki', 'LABOTA'),
(64, 'APRILIA SINTA', 'Perempuan', 'BAHOMAKMUR'),
(65, 'VERYANTI ', 'Perempuan', 'LALAMPU'),
(66, 'MULFI', 'Perempuan', 'SIUMBATU'),
(67, 'JULSE', 'Perempuan', 'BAHOMAKMUR'),
(68, 'ADELIA', 'Perempuan', 'LALAMPU'),
(69, 'ALMAN', 'Laki-laki', 'SIUMBATU'),
(70, 'UPIK', 'Laki-laki', 'BAHODOPI'),
(71, 'DESI', 'Laki-laki', 'LALAMPU'),
(72, 'MUHAMMAD FAJIR', 'Laki-laki', 'KEUREA'),
(73, 'MUH RAJAB', 'Laki-laki', 'KEUREA'),
(74, 'JZETY', 'Perempuan', 'BAHOMAKMUR'),
(75, 'HASRIANI', 'Perempuan', 'BAHOMAKMUR'),
(76, 'FEDERIKA', 'Perempuan', 'FATUFIA'),
(77, 'M RIZAL', 'Laki-laki', 'BAHODOPI'),
(78, 'KAHIRUL ANWAR', 'Laki-laki', 'FATUFIA'),
(79, 'AMIRA', 'Perempuan', 'BAHODOPI'),
(80, 'SAHARAENI', 'Perempuan', 'FATUFIA'),
(81, 'AYU FITRIANI', 'Perempuan', 'BAHOMAKMUR'),
(82, 'SAPIA SULAIMAN', 'Laki-laki', 'BAHOMAKMUR'),
(83, 'NURUL AINA ARSYAD', 'Laki-laki', 'BAHODOPI'),
(84, 'WAHYUDI', 'Laki-laki', 'KEUREA'),
(85, 'DESI', 'Perempuan', 'LALAMPU'),
(86, 'ANDI AZIZ ', 'Laki-laki', 'BAHODOPI'),
(87, 'YUSRAN', 'Laki-laki', 'KEUREA'),
(88, 'SAFI YURAHMAN ', 'Laki-laki', 'BAHODOPI'),
(89, 'MUHAMMAD ABDULLAH', 'Laki-laki', 'LALAMPU'),
(90, 'MUH HALIM FADLI', 'Laki-laki', 'KEUREA'),
(91, 'ALIMUDIN', 'Laki-laki', 'SIUMBATU'),
(92, 'BRIELO PASURU', 'Laki-laki', 'BAHODOPI'),
(93, 'ADITYA', 'Laki-laki', 'BAHODOPI'),
(94, 'NARYOTU', 'Perempuan', 'BAHOMAKMUR'),
(95, 'VIVI DAMAYANTI', 'Perempuan', 'BAHOMAKMUR'),
(96, 'SUKRIA', 'Perempuan', 'LANBOTA'),
(97, 'SITI MARWAH', 'Perempuan', 'KEUREA'),
(98, 'MUSDIFFAH', 'Perempuan', 'BAHODOPI'),
(99, 'HASRAENI', 'Perempuan', 'BAHODOPI'),
(100, 'KADIR', 'Laki-laki', 'LABOTA'),
(101, 'FREDI', 'Laki-laki', 'LABOTA'),
(102, 'NURAISYAH', 'Perempuan', 'BAHODOPI'),
(103, 'NURAIDA', 'Perempuan', 'LABOTA'),
(104, 'MAGDALONE', 'Perempuan', 'FATUFIA'),
(105, 'ADRIMAN', 'Laki-laki', 'FATUFIA'),
(106, 'ANOFIA', 'Perempuan', 'LABOTA'),
(107, 'MEGAH', 'Perempuan', 'BAHOMAKMUR'),
(108, 'BELIK', 'Laki-laki', 'LALAMPU'),
(109, 'AGUNG', 'Laki-laki', 'LALAMPU'),
(110, 'YULI', 'Perempuan', 'LALAMPU'),
(111, 'FAHMI', 'Laki-laki', 'BAHODOPI'),
(112, 'RISDAWANDI', 'Laki-laki', 'KEUREA'),
(113, 'MUH ALFATIH', 'Laki-laki', 'BAHODOPI'),
(114, 'NINGSIH', 'Perempuan', 'BAHOMAKMUR'),
(115, 'NURHIDAYATULLAH ', 'Laki-laki', 'LALAMPU'),
(116, 'SAILENA ', 'Laki-laki', 'LALAMPU'),
(117, 'RAMDANI', 'Laki-laki', 'LALAMPU'),
(118, 'YUSNITA DUNGGIO', 'Laki-laki', 'MAKARTI JAYA'),
(119, 'DEWI RAHAYU', 'Perempuan', 'BAHODOPI'),
(120, 'HASNI PARONTE', 'Perempuan', 'BAHODOPI'),
(121, 'NIRMA ANISA', 'Perempuan', 'BAHODOPI'),
(122, 'RISKI', 'Laki-laki', 'LABOTA'),
(123, 'SAHARAENI', 'Laki-laki', 'FATUFIA'),
(124, 'INDRI ', 'Perempuan', 'FATUFIA'),
(125, 'JONI PAKIDI', 'Laki-laki', 'KEUREA'),
(126, 'ANDI ALFAIZ', 'Laki-laki', 'KEUREA'),
(127, 'DEVI YUNITA', 'Perempuan', 'BAHODOPI'),
(128, 'PUTRI', 'Perempuan', 'BAHOMAKMUR'),
(129, 'ISMAIL', 'Laki-laki', 'FATUFIA'),
(130, 'INDRIYANI', 'Perempuan', 'KEUREA'),
(131, 'HASRIADI', 'Laki-laki', 'DAMPALA'),
(132, 'MUSTIKA DEWI', 'Perempuan', 'BAHOMAKMUR'),
(133, 'LUSIANA', 'Perempuan', 'BAHOMAKMUR'),
(134, 'MARNO', 'Laki-laki', 'DAMPALA'),
(135, 'YOLINS', 'Perempuan', 'BAHOMAKMUR'),
(136, 'SAMRIATI', 'Perempuan', 'FATUFIA'),
(137, 'ASROR', 'Laki-laki', 'LALAMPU'),
(138, 'MISWAR', 'Laki-laki', 'BAHOMAKMUR'),
(139, 'CITRA', 'Perempuan', 'BAHODOPI'),
(140, 'HENDRIK', 'Laki-laki', 'KEUREA'),
(141, 'SELFI', 'Perempuan', 'LABOTA'),
(142, 'NURWINDAYANTI', 'Perempuan', 'KEUREA'),
(143, 'DONI HERMAWAN', 'Laki-laki', 'KEUREA'),
(144, 'KHAIRUL ANWAR', 'Laki-laki', 'FATUFIA'),
(145, 'SUKRI', 'Laki-laki', 'BAHODOPI'),
(146, 'NURHAIDAH', 'Perempuan', 'BAHODOPI'),
(147, 'INDAH', 'Perempuan', 'KEUREA'),
(148, 'SUSANTI', 'Perempuan', 'LABOTA'),
(149, 'WIYAH', 'Laki-laki', 'BAHOMAKMUR'),
(150, 'CHRISH', 'Laki-laki', 'KEUREA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tmp_lahir` varchar(256) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `riwayat_pendidikan` varchar(255) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `status_pgw` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nik`, `nama_lengkap`, `tmp_lahir`, `tgl_lahir`, `riwayat_pendidikan`, `jabatan`, `status_pgw`) VALUES
(1, 0, 'ABDUL MALIK, SKM', 'PADABAHO', '0000-00-00', 'SI KESMAS', 'KEPALA PUSKESMAS', 'PNS'),
(2, 0, 'SUNARDIN SUAIB, SKM', 'PADABAHO', '0000-00-00', 'SI KESMAS', 'PJ. KESLING', 'PNS'),
(3, 0, 'drg. HIKMAH SURYANI', 'UJUNG PANDANG', '0000-00-00', 'DOKTER GIGI', 'DOKTER GIGI', 'PNS'),
(4, 0, 'dr. ADRIANI SRI WAHYUNI', 'UJUNG PANDANG', '0000-00-00', 'S1 KEDOKTERAN', 'DOKTER UMUM', 'PNS'),
(5, 0, 'RAHMAD EKA KUSUMA, A.Md.Kep', 'SURABAYA', '0000-00-00', 'D3 KEPERAWATAN', 'BENDAHARA BPJS', 'PNS'),
(6, 0, 'EKA HASRI ZULFIANAH, A.Md.Keb', 'MAROS', '0000-00-00', 'D3 KEBIDANAN ', 'KEPALA RM dan BENDAHARA UMUM', 'PNS'),
(7, 0, 'RUSNI SUNDING, S.Kep.Ns', 'KEUREA', '0000-00-00', 'S1 KEPERAWATAN NERS', 'PERAWAT PUSKESMAS ', 'PNS'),
(8, 0, 'dr. RAHMA NILASARI, S.Ked', 'PALU', '0000-00-00', 'S1 KEDOKTERAN', 'DOKTER UMUM', 'PNS'),
(9, 0, 'RISTA DAHLAN, A.Md.Keb', 'BANTAYAN', '0000-00-00', 'D3 KEBIDANAN ', 'BIDAN PUSKESMAS', 'PNS'),
(10, 0, 'HASTIN UDIN, SKM', 'BAHODOPI', '0000-00-00', 'SI KESMAS', 'KA. TU, PENGELOLA OP/ SP2TP', 'PNS'),
(11, 0, 'NURLINA, A.Md.Keb', 'BELOPA', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN KOORDINATOR', 'PNS'),
(12, 0, 'NURDIANA, A.Md.Keb', 'SEPAKAT', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(13, 0, 'ELVIRA, A.Md.Keb', 'UJUNG', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(14, 0, 'IRNAYANTI, A.Md.Keb', 'WAELAWI', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(15, 0, 'MUSLIMAH, A.Md.Keb', 'CILALANG', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(16, 0, 'LIANA RAPANAN, A.Md.Keb', 'PALOPO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(17, 0, 'ANIK PUSPITA SARI, A.Md.Keb', 'LANTULA JAYA', '0000-00-00', 'D3 KEBIDANAN', 'KEPALA PERSALINAN', 'PNS'),
(18, 0, 'ASNIDAR, A.Md.Keb', 'BANTAENG', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(19, 0, 'RATNAWATI, A.Md.Keb', 'SIDOMAKMUR', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PNS'),
(20, 0, 'CHIA EKHISINDI MUHARRAM, A.Md.Keb', 'POMPENGAN', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PNS'),
(21, 0, 'HASNI, A.Md.Keb', 'MAROANGIN', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PNS'),
(22, 0, 'HASMAWATI, A.Md.Keb', 'FAK FAK', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(23, 0, 'SITTI AMINAH, A.Md.Keb', 'ATAPANGE', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(24, 0, 'MILDA ANWAR, A.Md.Keb', 'POSO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(25, 0, 'FITRI WAGIASRI, A.Md.Keb', 'SETIAREJO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA', 'PNS'),
(26, 0, 'YOTAN ABDUL MALIK', 'LABOTA', '0000-00-00', 'SMA', 'BENDAHARA BOK', 'PNS'),
(27, 0, 'NURMI, A.Md.Keb', 'POLEWALI MANDAR', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PNS'),
(28, 0, 'IBRAHIM, Amd.Kep', 'KALEROANG', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS/PJ. TB, KUSTA', 'PNS'),
(29, 0, 'apt. YUNASTRI JELMI BONTONG, S.Farm', 'WASUPONDA', '0000-00-00', 'S1 APOTEKER', 'APOTEKER', 'PNS'),
(30, 0, 'RIRIN FAUZIAH MUH. NAJIB,Amd.Kep', 'KALEROANG', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS/ PJ. DIARE', 'PTT'),
(31, 0, 'HELMIATI KADIR,Amd.Kep', 'LAREWA', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(32, 0, 'MUHAMMAD ZUBAIR, Amd.AK', 'KAMPUNG BARU', '0000-00-00', 'D3 ANALIS KESEHATAN', 'ANALIS KESEHATAN', 'PTT'),
(33, 0, 'IBRAHIM,Amd.Kep', 'KALEROANG', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS/PJ. TB, KUSTA', 'PTT'),
(34, 0, 'MARIA ULFA, SKM', 'TRANS MAYAYAP', '0000-00-00', 'S1 KESMAS', 'PJ. KESLING', 'PTT'),
(35, 0, 'MILDAN KASMUN,Amd.Keb', 'KEUREA', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. HIV AIDS', 'PTT'),
(36, 0, 'NURBAYA,Amd.Keb', 'SIUMBATU', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. MALARIA', 'PTT'),
(37, 0, 'APRILLY, N.A.PATOLENGANENG, A.Md.Gz', 'TIWOHO', '0000-00-00', 'D3 GIZI', 'PJ. GIZI', 'PTT'),
(38, 0, 'DIAN ASMITA MASEMPO,Amd.Keb', 'ULUNAMBO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA BAHODOPI', 'PTT'),
(39, 0, 'FATIMAH, S.Kep', 'BARUTTUNG', '0000-00-00', 'S1 KEPERAWATAN ', 'ADMINISTRASI/ PCARE. BPJS', 'PTT'),
(40, 0, 'ISWANTI A. MAHMUD,Amd.Keb', 'BETEBETE', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. MTBS', 'PTT'),
(41, 0, 'INDRA SAPUTRA', 'KILO', '0000-00-00', 'SMA', 'SOPIR', 'PTT'),
(42, 0, 'KURNIAWATI NINGRUM S.,Amd.Kep', 'KILO', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(43, 0, 'MIRA LESTARI,Amd.Keb', 'BUNGINTIMBE', '0000-00-00', 'D3 KEBIDANAN', 'ADMINISTRASI/ PJ. SDMK', 'PTT'),
(44, 0, 'NURWAHIDAH,Amd.Keb', 'MAROS', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN/ PELAKSANA IMUNISASI', 'PTT'),
(45, 0, 'PUTRI HANDAYANI,Amd.Keb', 'AWO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(46, 0, 'RIKA SRIWARNI,Amd.Keb', 'SOLONSA', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. SP2TP', 'PTT'),
(47, 0, 'SITI NURWAVINA,S.Kep.Ns', 'MASIAK', '0000-00-00', 'S1 KEPERAWATAN NERS', 'PERAWAT PUSKESMAS/ PJ. FILARIASIS', 'PTT'),
(48, 0, 'SITI IKRA,Amd.Keb', 'ULUNAMBO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. JAMPERSAL', 'PTT'),
(49, 0, 'SITI RADHIYAH RAPPE,Amd.Keb', 'UJUNG PANDANG', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN DESA BETEBETE', 'PTT'),
(50, 0, 'WITSA RATI LOLO,Amd.Keb', 'TERPEDO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. RABIES', 'PTT'),
(51, 0, 'WINDAWATI,Amd.Keb', 'PASIR PUTIH', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. LANSIA', 'PTT'),
(52, 0, 'YULIANA, S.Kep,Ns', 'BAHOMOAHI', '0000-00-00', 'S1 KEPERAWATAN NERS', 'PERAWAT PUSKESMAS/ PJ. IMUNISASI', 'PTT'),
(53, 0, 'YUSRAN AFANDI,Amd.Kep', 'SINJAI', '0000-00-00', 'D3 KEPERAWATAN', 'SOPIR', 'PTT'),
(54, 0, 'ASMAWATI, A.Md.Keb', 'BAHODOPI', '0000-00-00', 'D3 KEBIDANAN', 'ADMINISTRASI/ RESEPSIONIS', 'PTT'),
(55, 0, 'ASTUTI, A.Md.Keb', 'SANRANGENG', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(56, 0, 'AGUSTINA SEMBE SALU, A.Md.Keb', 'TOLADA', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(57, 0, 'AMELIA, A.Md.KG', 'BAHODOPI', '0000-00-00', 'D3 PERAWAT GIGI', 'PERAWAT GIGI PUSKESMAS', 'PTT'),
(58, 0, 'AGUSTINA SELNI PASA BUTU, A.Md.Kep', 'UJUNG PANDANG', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(59, 0, 'HARAPIAH, A.Md.Kep', 'MAKASSAR', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS / PJ. PHN', 'PTT'),
(60, 0, 'HARDIANTI, A.Md.Kep', 'BOEPINANG', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(61, 0, 'LUH PINDA RAINI, A.Md.Keb', 'PUNTARI MAKMUR', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PHL'),
(62, 0, 'MARLIN YANTEO, A.Md.Kep', 'BETEBETE', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS/ PJ. SURVEILANS', 'PTT'),
(63, 0, 'MARLIANA, A.Md.Keb', 'LALAONG', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. KESJAOR', 'PTT'),
(64, 0, 'NOVITA, A.Md.Kep', 'SULI', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(65, 0, 'NURMISGIATI, A.Md.Kep', 'SOLO', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(66, 0, 'NURHIKMAH IDRIS, A.Md.Kep', 'PEKKAE', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(67, 0, 'NI WAYAN SUARTINI, A.Md.Keb', 'ANGRINADI', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. ISPA', 'PTT'),
(68, 0, 'NURDIANA, A.Md.Kep', 'LIMBO MAKMUR', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(69, 0, 'NURJAYANTI, S.Tr.Kep.Ns', 'LAHUAFU', '0000-00-00', 'S1 KEPERAWATAN NERS', 'PERAWAT PUSKESMAS/ PJ. BATRA', 'PTT'),
(70, 0, 'NURCAHAYA, A.Md.Keb', 'SUMPATU', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS/ PJ. ASPAK', 'PTT'),
(71, 0, 'RAMA DANIA TAHIR LAHANING, S.Kep.Ns', 'GANDANG BATU', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(72, 0, 'RITA, A.Md.Kep', 'SAPONDA', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS/ PJ. PTM', 'PTT'),
(73, 0, 'RESLIN LIKU LANGI, A.Md.Kep', 'NANGGALA', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS/ PELAKSANA PTM', 'PTT'),
(74, 0, 'RAMAYANI, A.Md.Farm', 'RANTE BARU', '0000-00-00', 'D3 FARMASI', 'ASISTEN APOTEKER', 'PTT'),
(75, 0, 'RISNAWATI, A.Md.Keb', 'SINJAI', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(76, 0, 'SUMARSEH, A.Md.Kep', 'PURWOSARI', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PTT'),
(77, 0, 'SULFIANAH, A.Md.Keb', 'MATTOANGING', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(78, 0, 'SUKMAWATI MANSUR,S.Tr.Keb', 'KALUKU', '0000-00-00', 'D4 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(79, 0, 'WAODE YANI KOLASA, A.Md.Keb', 'MABOLU', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(80, 0, 'Apt. KAMELIA SYAFITRI, S.Farm. Apt', 'SEBATIK', '0000-00-00', 'APOTEKER', 'APOTEKER', 'PTT'),
(81, 0, 'HELSIWATI RURA\'  P. S.Farm', '', '0000-00-00', 'S1 FARMASI', 'PETUGAS APOTIK', 'PTT'),
(82, 0, 'DEFRAN', 'SABBANG', '0000-00-00', 'SMA', 'SOPIR', 'PTT'),
(83, 0, 'NI KADEK SURYANI', 'BALI', '0000-00-00', 'SMA', 'PETUGAS KEBERSIHAN', 'PTT'),
(84, 0, 'PANJI SATRIA SENDUK, S.Sip', 'POLMAS', '0000-00-00', 'S1 ILMU PEMERINTAHAN', 'SOPIR', 'PTT'),
(85, 0, 'ANDI WALIANA, S.ST', 'RANTELIMBONG', '0000-00-00', 'D4 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(86, 0, 'ORPA NARAN,A.Md.Keb', 'PATTENGKO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(87, 0, 'INDRAWATI RIDWAN, S.Gz', 'ULUNAMBO', '0000-00-00', 'GIZI', 'GIZI', 'PTT'),
(88, 0, 'ASNIATIN, S.Gz', 'ANDOWIA', '0000-00-00', 'GIZI', 'GIZI', 'PTT'),
(89, 0, 'FAUZIA SARINI LAGATA, SKM', 'MANADO', '0000-00-00', 'SI KESMAS', 'ADMINISTRASI', 'PTT'),
(90, 0, 'MAHMUDDIN', 'TINUKARI', '0000-00-00', 'SMP', 'KEAMANAN', 'PTT'),
(91, 0, 'RINI ULFA MAWADDA, SE', 'POMPENGAN', '0000-00-00', 'S1 EKONOMI', 'ADMINISTRASI', 'PTT'),
(92, 0, 'INCI WARDANI, A.Md.Keb', '', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(93, 0, 'PITRIANI, SKM', 'BONE', '0000-00-00', 'SI KESMAS', 'PROMKES', 'PTT'),
(94, 0, 'NURIYATI B. YUSUF, A.Md. Keb', 'SALAKAN', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(95, 0, 'SATRIA YUSUF', 'KEUREA', '0000-00-00', 'SMA', 'PETUGAS KEBERSIHAN', 'PTT'),
(96, 0, 'VONNY SANTI', 'UJUNG PANDANG', '0000-00-00', 'SMA', 'PETUGAS KEBERSIHAN', 'PTT'),
(97, 0, 'NANI IRNAYANTI', 'KOLO BAWAH', '0000-00-00', 'SMP', 'PETUGAS KEBERSIHAN', 'PTT'),
(98, 0, 'SRI ARSITA, A.Md.Keb', 'PALU', '0000-00-00', 'D3 KEBIDNAN', 'BIDAN PUSKESMAS', 'PTT'),
(99, 0, 'FITRI, A.Md.Farm', 'MAKURING', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PTT'),
(100, 0, 'NOFRIANTI RARI, A.Md.Keb', 'MALIMBONG', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PHL'),
(101, 0, 'NILUH SRI ASTUTI, A.Md.Keb', 'BONE PUTE', '0000-00-00', 'D3 KEBIDANAN', 'PETUGAS RM', 'PHL'),
(102, 0, 'DARMAWATI, A.Md.Keb', 'WAJO', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PHL'),
(103, 0, 'FRISKA INDRIANI, A.Md.Keb', 'LONCA', '0000-00-00', 'D3 KEBIDANAN', 'PETUGAS APOTIK', 'PHL'),
(104, 0, 'NURHIKMAH, A.Md.Keb', 'JALANG', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PHL'),
(105, 0, 'SRI SAFNA, A.Md.Keb', 'KELLA', '0000-00-00', 'D3 KEBIDANAN', 'PETUGAS RM', 'PHL'),
(106, 0, 'HERNI PABEBANG, A.Md.Kep', '', '0000-00-00', 'D3 KEPERAWATAN', 'PERAWAT PUSKESMAS ', 'PHL'),
(107, 0, 'NOVA OLIVIA SALLUK, A.Md.Keb', '', '0000-00-00', 'D3 KEBIDANAN', 'PETUGAS RM', 'PHL'),
(108, 0, 'RISDAYANTI, A.Md.Keb', 'MARIO', '0000-00-00', 'D3 KEBIDANAN', 'PETUGAS RM', 'PHL'),
(109, 0, 'ASMAWATI, A.Md.KG', 'RAHA', '0000-00-00', 'D3 PERAWAT GIGI', 'PETUGAS POLI GIGI', 'PHL'),
(110, 0, 'BELINDA EVI, S.Kep.Ns', 'UJUNG PANDANG', '0000-00-00', 'NERS', 'PERAWAT PUSKESMAS ', 'PHL'),
(111, 0, 'WARNI, S.Kep.Ns', 'ROUTA', '0000-00-00', 'NERS', 'PERAWAT PUSKESMAS ', 'PHL'),
(112, 0, 'ANDRIANA LAMAGA, A.Md.Keb', '', '0000-00-00', 'D3 KEBIDANAN', 'BIDAN PUSKESMAS', 'PHL'),
(113, 0, 'ASTRIT ANTON, A.Md.Farm', 'KALEMBANG', '0000-00-00', 'D3 FARMASI', 'PETUGAS APOTIK', 'PHL'),
(114, 0, 'MUTIARA, S.Kep.Ns', '', '0000-00-00', 'NERS', 'PERAWAT PUSKESMAS ', 'PHL'),
(115, 0, 'NUR HIJERAH SAMSU, A.Md AK', '', '0000-00-00', 'D3 ANALIS KESEHATAN', 'ANALIS KESEHATAN', 'PHL'),
(116, 0, 'IRA PUSPITA DM. A.Md.AK', 'BONTO MARANNU', '0000-00-00', 'D3 ANALIS KESEHATAN', 'ANALIS KESEHATAN', 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `nama_penyakit`) VALUES
(6, 'ISPA'),
(16, 'GASTRITIS'),
(17, 'DIARE'),
(18, 'DERMATITIS'),
(19, 'HIPERTENSI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perangkingan`
--

CREATE TABLE `tb_perangkingan` (
  `id_rm` varchar(256) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_perangkingan`
--

INSERT INTO `tb_perangkingan` (`id_rm`, `id_pasien`, `id_penyakit`, `id_dokter`, `id_obat`, `id_ruangan`, `distance`) VALUES
('001', 0, 0, 0, 0, 0, 464),
('002', 0, 0, 0, 0, 0, 448),
('003', 0, 0, 0, 0, 0, 408),
('004', 0, 0, 0, 0, 0, 327),
('005', 0, 0, 0, 0, 0, 1213);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(256) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `tgl_masuk`, `tgl_keluar`, `jam_masuk`, `jam_keluar`, `id_pasien`, `id_penyakit`, `id_dokter`, `id_obat`, `id_ruangan`) VALUES
('001', '2022-12-08', '0000-00-00', '09:50:51', '00:00:00', 1, 6, 2, 7, 2),
('002', '2023-03-28', '0000-00-00', '22:01:26', '00:00:00', 2, 16, 2, 5, 2),
('003', '2023-03-28', '0000-00-00', '22:07:43', '00:00:00', 3, 17, 2, 5, 2),
('004', '2023-03-28', '0000-00-00', '23:28:27', '00:00:00', 4, 6, 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id` int(11) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `jumlah_pasien` int(11) NOT NULL,
  `jam_besuk` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id`, `nama_ruangan`, `jumlah_pasien`, `jam_besuk`) VALUES
(1, 'Poli Umum', 6, '14:21:00'),
(2, 'Poli Gigi', 5, '13:23:00'),
(3, 'Poli KIA (Kesehatan Ibu Anak)', 1, '00:00:00'),
(4, 'Poli MTBS (Manajemen Terpadu balita Sakit)', 0, '00:00:00'),
(5, 'Poli Gizi', 0, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testing`
--

CREATE TABLE `tb_testing` (
  `id_rm` varchar(256) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `id_rm` varchar(256) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`id_rm`, `id_pasien`, `id_penyakit`, `id_dokter`, `id_obat`, `id_ruangan`, `distance`) VALUES
('001', 1, 6, 2, 0, 2, 7.2111),
('002', 2, 16, 2, 0, 2, 12.2474),
('003', 3, 17, 2, 0, 2, 14.9666),
('004', 4, 6, 2, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `img_dir` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama_lengkap`, `img_dir`) VALUES
('audyruslan', '$2y$10$YJMlsasuDDlkgqAUS/.XdOeu/6/gPq1Z9dr1xAe.j40T8TtjfnD5S', 'Audy Ruslan', 'image/1638426625.png'),
('ummul', '$2y$10$k9SBhkrRusm24tCeYnPS5eLgJasPQCP30El1QmKzQ1w0DbJosdmQ.', 'Ummul Fajri Rahmat', 'image/1638959631.png'),
('fardi', '$2y$10$oxXtkkU0qAfWEr/Fkistu.run21u4L1Jn4QiwJnDlnLvDkmRHDl.a', 'Fardi', 'image/1668143854.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala_rm`
--
ALTER TABLE `tb_gejala_rm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_rm`);

--
-- Indexes for table `tb_gejala_testing`
--
ALTER TABLE `tb_gejala_testing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_rm`);

--
-- Indexes for table `tb_gejala_training`
--
ALTER TABLE `tb_gejala_training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_rm`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_perangkingan`
--
ALTER TABLE `tb_perangkingan`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_testing`
--
ALTER TABLE `tb_testing`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_gejala_rm`
--
ALTER TABLE `tb_gejala_rm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_gejala_testing`
--
ALTER TABLE `tb_gejala_testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gejala_training`
--
ALTER TABLE `tb_gejala_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_gejala_rm`
--
ALTER TABLE `tb_gejala_rm`
  ADD CONSTRAINT `tb_gejala_rm_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`) ON DELETE CASCADE;

--
-- Constraints for table `tb_gejala_training`
--
ALTER TABLE `tb_gejala_training`
  ADD CONSTRAINT `tb_gejala_training_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_training` (`id_rm`) ON DELETE CASCADE;

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rekammedis_ibfk_4` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rekammedis_ibfk_6` FOREIGN KEY (`id_ruangan`) REFERENCES `tb_ruangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
