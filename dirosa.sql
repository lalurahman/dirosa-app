-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2020 at 12:51 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dirosa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_role` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `email`, `password`, `user_role`, `is_active`, `foto`, `date_created`) VALUES
(1, 'Ryan', 'ryanpdw10@gmail.com', '$2y$10$dip1R1xjLIavnh/Yv25fzu26tLHsVOmGn9bNcavTGM8MPlP2xvuVC', 1, 1, 'default.png', '2020-02-16 04:57:59'),
(2, 'Admin', 'admin@gmail.com', '$2y$10$3eVtVSdIxy47kQk/GpvugegbAn4seztjDfhc22O8kWQQuii96InOO', 1, 1, 'default.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `pertemuan` varchar(128) NOT NULL,
  `penjelasan_pertemuan` varchar(256) NOT NULL,
  `link_video` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `pertemuan`, `penjelasan_pertemuan`, `link_video`) VALUES
(1, 'Pertemuan ke - 1', 'Pertemuan Pertama mengenal huruf Alif sampai huruf Kho\'.', 'https://www.youtube.com/embed/oWwDFINaRyY'),
(2, 'Pertemuan ke - 2', 'Pertemuan Kedua mengenal huruf Dal sampai huruf Dhod.', 'https://www.youtube.com/embed/OY8WB3txWgg'),
(3, 'Pertemuan ke - 3', 'Pertemuan Ketiga mengenal huruf Tho\' sampai huruf Kaf.', 'https://www.youtube.com/embed/SwXuDSyCmAs'),
(4, 'Pertemuan ke - 4', 'Pertemuan Keempat mengenal huruf Lam sampai huruf Ya\'.', 'https://www.youtube.com/embed/YIQQfbqHajw'),
(5, 'Pertemuan ke - 5', 'Pertemuan Kelima Mengulang semua huruf hijaiyah dan angka dalam tulisan arab.', 'https://www.youtube.com/embed/Gn8noyE7Vu0'),
(6, 'Pertemuan ke - 6', 'Pertemuan Keenam mengenal tanda baca/harakat Fathah, kasrah, dan, Dhomah. Huruf Alif sampai huruf Sin', 'https://www.youtube.com/embed/uvf0k4J_LRg'),
(7, 'Pertemuan ke - 7', 'Pertemuan Ketujuh mengenal tanda baca/harakat Fathah, Kasrah, dan, Dhomah. Huruf Syin sampai huruf Mim', 'https://www.youtube.com/embed/4dNbrupXSNU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress_belajar`
--

CREATE TABLE `tb_progress_belajar` (
  `id_progress_belajar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_progress_belajar`
--

INSERT INTO `tb_progress_belajar` (`id_progress_belajar`, `id_user`, `id_materi`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `link_tugas` varchar(256) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ustadz` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `penilaian` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `status` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_periksa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id_tugas`, `link_tugas`, `id_user`, `id_ustadz`, `id_materi`, `penilaian`, `komentar`, `status`, `date_created`, `tgl_periksa`) VALUES
(8, 'dirosa06b.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 15:51:44', NULL),
(9, 'dirosa06b.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 15:51:44', NULL),
(10, 'dirosa06b.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 15:51:44', NULL),
(11, 'dirosa06b.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 15:51:44', NULL),
(12, 'dirosa06b.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 15:51:44', NULL),
(13, 'dirosa06b.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 15:51:44', NULL),
(14, 'dirosa06b.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 15:51:44', NULL),
(15, 'dirosa06b.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 15:51:44', NULL),
(16, 'dirosa061.mp3', 1, 0, 2, 0, '', 'Belum Diperiksa', '2020-02-17 16:19:05', NULL),
(17, 'dirosa07.mp3', 1, 0, 1, 0, '', 'Belum Diperiksa', '2020-02-17 16:19:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_role` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pekerjaan`, `email`, `password`, `user_role`, `is_active`, `foto`, `date_created`) VALUES
(1, 'User', 'Laki-laki', 'Makassar', '1996-02-16', 'Perintis', 'Mahasiswa', 'user@gmail.com', '$2y$10$dip1R1xjLIavnh/Yv25fzu26tLHsVOmGn9bNcavTGM8MPlP2xvuVC', 3, 1, 'default.png', '2020-02-17 12:33:17'),
(2, 'User3', 'Perempuan', 'Makassar', '1998-10-03', 'alamat', 'pekerjaan', 'user3@gmail.com', '$2y$10$41wqnQXCNM/mzjMbA87r9eC1aQyDQHMPaCREOARCxSnBNnZACDkba', 3, 1, 'default.jpg', '2020-02-17 16:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `id_user_role` int(11) NOT NULL,
  `nama_role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ustadz`
--

CREATE TABLE `tb_ustadz` (
  `id_ustadz` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_role` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ustadz`
--

INSERT INTO `tb_ustadz` (`id_ustadz`, `nama`, `email`, `password`, `user_role`, `is_active`, `foto`, `date_created`) VALUES
(1, 'Ustadz', 'ustadz@gmail.com', '$2y$10$dip1R1xjLIavnh/Yv25fzu26tLHsVOmGn9bNcavTGM8MPlP2xvuVC', 2, 1, 'default.png', '2020-02-16 04:58:24'),
(2, 'Ustdaz', 'ustadz@gmail.com', '$2y$10$r.VaVjVjoNDAJS2kbt5EP.p1ViDjJZbLLpaGk/cxrDgL3GHSNJR.a', 2, 1, 'default.jpg', '0000-00-00 00:00:00'),
(3, 'Ustad 3', 'ustad3@gmail.com', '$2y$10$tNIWGO9bgBO8PinSYTSn.O9eo.b4O0BcAYNewd1Pfq7r51lxMPTQW', 2, 1, 'default.jpg', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_progress_belajar`
--
ALTER TABLE `tb_progress_belajar`
  ADD PRIMARY KEY (`id_progress_belajar`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`id_user_role`);

--
-- Indexes for table `tb_ustadz`
--
ALTER TABLE `tb_ustadz`
  ADD PRIMARY KEY (`id_ustadz`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_progress_belajar`
--
ALTER TABLE `tb_progress_belajar`
  MODIFY `id_progress_belajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id_user_role` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_ustadz`
--
ALTER TABLE `tb_ustadz`
  MODIFY `id_ustadz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
