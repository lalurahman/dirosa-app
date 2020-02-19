-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 10:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dirosa`
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
(1, 'Admin', 'admin@gmail.com', '$2y$10$ykufCUpO6rgqvc0fl6qs6.J1IEZBHg6l4HUmkI.JCNGwSWwcLnvOW', 1, 1, 'default.png', '2020-02-19 09:23:48');

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
(7, 'Pertemuan ke - 7', 'Pertemuan Ketujuh mengenal tanda baca/harakat Fathah, Kasrah, dan, Dhomah. Huruf Syin sampai huruf Mim', 'https://www.youtube.com/embed/4dNbrupXSNU'),
(8, 'Pertemuan ke - 8', 'Pertemuan Kedelapan mengenal tanda baca/harakat Fathah, Kasrah, dan, Dhomah. Huruf Nun sampai huruf Ya\'', 'https://www.youtube.com/embed/GOMT1aECaEM'),
(9, 'Pertemuan ke - 9', 'Pertemuan Kesembilan mengenal tanda baca/harakat Fathahan, kasrahan, dan Dhomatan', 'https://www.youtube.com/embed/O0ZBBwDKcl4'),
(10, 'Pertemuan ke - 10', 'Pertemuan Kesepuluh mengenal bacaan Mad/bacaan panjang.', 'https://www.youtube.com/embed/yvDH-S7TW94'),
(11, 'Pertemuan ke - 11', 'Pertemuan Kesebelas mengenal tanda bacaan panjang lainnya.', 'https://www.youtube.com/embed/GPgWmr7ohSM'),
(12, 'Pertemuan ke - 12', 'Pertemuan Keduabelas mengenal tanda Tasydid/Syaddah', 'https://www.youtube.com/embed/eAL3iean-8c'),
(13, 'Pertemuan ke - 13', 'Pertemuan Ketigabelas mengenal tanda sukun', 'https://www.youtube.com/embed/QbrdsYsowr8'),
(14, 'Pertemuan ke - 14', 'Pertemuan Keempatbelas mengenal tanda Baina dan Bauna serta tanda Qolqolah', 'https://www.youtube.com/embed/yH4w_RAi_lE'),
(15, 'Pertemuan ke - 15', 'Pertemuan Kelimabelas membedakan penyebutan Hamzah Ain Kaf dan Qaf', 'https://www.youtube.com/embed/9R1iybK4Nqk'),
(16, 'Pertemuan ke - 16', 'Pertemuan Keenambelas mengenal Lam Qamariyah, Lam Syamsiyah dan huruf Ghunnah', 'https://www.youtube.com/embed/zY0Q_8zdmQI'),
(17, 'Pertemuan ke - 17', 'Pertemuan Ketujuhbelas mengenal tanda Wakaf dan Idgam', 'https://www.youtube.com/embed/UyrCMKmFsys'),
(18, 'Pertemuan ke - 18', 'Pertemuan Kedelapanbelas mengenal bacaan Iqlab dan Idgam Mimi', 'https://www.youtube.com/embed/hvow5J4qJ1A'),
(19, 'Pertemuan ke - 19', 'Pertemuan Kesembilanbelas mengenal Ikhfah dan Idzhar', 'https://www.youtube.com/embed/urV6EY99NNo'),
(20, 'Pertemuan ke - 20', 'Pertemuan Keduapuluh mengenal huruf-huruf Muqathaah', 'https://www.youtube.com/embed/3tYyzD46qeg'),
(21, 'Pertemuan Terkakhir - Ujian', 'Ujian DIROSA Halaman ini adalah halaman Munaqosyah/Ujian kemampuan membaca Al-Qur\'an', 'https://www.youtube.com/embed/hoIUnrUKaqA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progress_belajar`
--

CREATE TABLE `tb_progress_belajar` (
  `id_progress_belajar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `id_user_role` int(11) NOT NULL,
  `nama_role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_role`
--

INSERT INTO `tb_user_role` (`id_user_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'Ustadz'),
(3, 'Pengguna');

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
(1, 'Muhdan Fyan Syah Sofian', 'dadan@gmail.com', '$2y$10$i24AyEpbPEV/5m3jERoUxO3OzaHXqs/YUrLXgjxgC8AnIUvX.2HFi', 2, 1, 'default.png', '2020-02-19 09:27:41');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_progress_belajar`
--
ALTER TABLE `tb_progress_belajar`
  MODIFY `id_progress_belajar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id_user_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ustadz`
--
ALTER TABLE `tb_ustadz`
  MODIFY `id_ustadz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
