-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 01:30 AM
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
-- Database: `db_sape`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id` int(11) NOT NULL,
  `nama_binaan` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id`, `nama_binaan`, `jenis_kelamin`, `alamat`) VALUES
(2, 'Feli Eunika Solang', 'Perempuan', 'Jln. Pulau Halmahera No 29'),
(3, 'Gina', 'Perempuan', 'Jln. Pulau Halmahera No 29'),
(4, 'Budi', 'Laki-laki', 'Jln. Pulau Halmahera No 29'),
(5, 'Eka', 'Laki-laki', 'Jln. Pulau Halmahera No 29'),
(6, 'Hadi', 'Laki-laki', 'Jln. Pulau Halmahera No 29'),
(7, 'Joko', 'Laki-laki', 'Jln Tondo'),
(8, 'alfon', 'Laki-laki', 'Mamboro'),
(9, 'Budi  ', 'Laki-laki', 'Petobo'),
(10, 'cahya', 'Perempuan', 'Touwa'),
(11, 'dini', 'Perempuan', 'Petobo'),
(12, 'eka musfika', 'Perempuan', 'Lasoani'),
(13, 'Faris', 'Laki-laki', 'Tinggede'),
(14, 'indah', 'Perempuan', 'jl. Roviga'),
(15, 'Alex Morgan', 'Laki-laki', 'Petobo'),
(16, 'David', 'Laki-laki', 'jl. Dewi Sartika'),
(17, 'Kristanto', 'Laki-laki', 'jl. garuda'),
(18, 'Abdi ', 'Laki-laki', 'jl. Basuki Rahmat'),
(19, 'jenbris', 'Laki-laki', 'Tinggede'),
(20, 'audy cahyadi', 'Laki-laki', 'kawatuna'),
(21, 'feliks sutarnam', 'Laki-laki', 'palupi'),
(22, 'aldo', 'Laki-laki', 'jl. merpati');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `kriteria_id` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`kriteria_id`, `kriteria`) VALUES
(1, 'Status Binaan'),
(2, 'Nilai Ujian'),
(3, 'Mualaf'),
(4, 'Status Pekerjaan'),
(5, 'Jumlah Tanggungan'),
(6, 'Kelayakan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testing`
--

CREATE TABLE `tb_testing` (
  `testing_id` int(11) NOT NULL,
  `alternatif_id` int(11) NOT NULL,
  `status_binaan` int(11) NOT NULL,
  `nilai_ujian` int(11) NOT NULL,
  `mualaf` int(11) NOT NULL,
  `status_pekerjaan` int(11) NOT NULL,
  `jmlh_tanggungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_testing`
--

INSERT INTO `tb_testing` (`testing_id`, `alternatif_id`, `status_binaan`, `nilai_ujian`, `mualaf`, `status_pekerjaan`, `jmlh_tanggungan`) VALUES
(1, 21, 3, 8, 1, 0, 3),
(2, 22, 2, 6, 0, 1, 1),
(3, 22, 2, 5, 0, 1, 1),
(4, 22, 2, 4, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `training_id` int(11) NOT NULL,
  `alternatif_id` int(11) NOT NULL,
  `status_binaan` int(11) NOT NULL,
  `nilai_ujian` int(11) NOT NULL,
  `mualaf` int(11) NOT NULL,
  `status_pekerjaan` int(11) NOT NULL,
  `jmlh_tanggungan` int(11) NOT NULL,
  `kelayakan` varchar(20) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`training_id`, `alternatif_id`, `status_binaan`, `nilai_ujian`, `mualaf`, `status_pekerjaan`, `jmlh_tanggungan`, `kelayakan`, `distance`) VALUES
(1, 2, 4, 8, 1, 0, 3, 'Ya', 5),
(2, 3, 4, 10, 1, 1, 2, 'Ya', 6.55744),
(3, 4, 3, 9, 1, 1, 1, 'Ya', 5.2915),
(4, 5, 1, 6, 0, 0, 5, 'Tidak', 4.58258),
(5, 6, 2, 6, 1, 1, 1, 'Tidak', 2.44949),
(6, 7, 3, 9, 0, 1, 1, 'Ya', 5.19615),
(7, 8, 4, 8, 1, 0, 3, 'Ya', 5),
(8, 9, 3, 9, 1, 1, 1, 'Ya', 5.2915),
(9, 10, 2, 5, 0, 0, 2, 'Ya', 1.41421),
(10, 12, 1, 6, 0, 0, 5, 'Tidak', 4.58258),
(11, 13, 3, 7, 1, 0, 2, 'Ya', 3.4641),
(12, 14, 1, 7, 1, 1, 4, 'Ya', 4.58258),
(13, 15, 4, 9, 1, 1, 2, 'Ya', 5.65685),
(14, 16, 2, 6, 1, 1, 1, 'Tidak', 2.44949),
(15, 17, 1, 5, 1, 1, 0, 'Ya', 2.23607),
(16, 11, 4, 10, 1, 1, 2, 'Ya', 6.55744),
(17, 18, 2, 4, 1, 1, 0, 'Tidak', 1.73205),
(18, 19, 0, 0, 0, 1, 0, 'Tidak', 4.69042),
(19, 0, 1, 7, 0, 1, 1, 'Tidak', 3.31662),
(20, 0, 1, 7, 0, 1, 1, 'Tidak', 3.31662),
(23, 20, 4, 8, 1, 1, 3, 'Ya', 5.09902);

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
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`kriteria_id`);

--
-- Indexes for table `tb_testing`
--
ALTER TABLE `tb_testing`
  ADD PRIMARY KEY (`testing_id`),
  ADD KEY `alternatif_id` (`alternatif_id`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD PRIMARY KEY (`training_id`),
  ADD KEY `alternatif_id` (`alternatif_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_testing`
--
ALTER TABLE `tb_testing`
  MODIFY `testing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_training`
--
ALTER TABLE `tb_training`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
