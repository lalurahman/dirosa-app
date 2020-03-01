-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2020 at 07:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12726957_dirosapp`
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
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `email`, `password`, `user_role`, `is_active`, `foto`, `date_created`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$ykufCUpO6rgqvc0fl6qs6.J1IEZBHg6l4HUmkI.JCNGwSWwcLnvOW', 1, 1, 'default.png', '2020-02-22 02:40:56'),
(2, 'Admin 2', 'admin2@gmail.com', '$2y$10$ysjTImhuyiU6VIxHNli/WOJPGMVzCmMV2yEIeA5WAQ3z9tka./Zua', 1, 1, 'default.png', '2020-02-23 17:35:24');

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
(10, 'Pertemuan ke - 10', 'Pertemuan Kesepuluh mengenal bacaan Ma Thobi\'i dan mad wajib', 'https://www.youtube.com/embed/yvDH-S7TW94'),
(11, 'Pertemuan ke - 11', 'Pertemuan Kesebelas mengenal tanda bacaan Mad badal', 'https://www.youtube.com/embed/GPgWmr7ohSM'),
(12, 'Pertemuan ke - 12', 'Pertemuan Keduabelas mengenal tanda Tasydid/Syaddah', 'https://www.youtube.com/embed/eAL3iean-8c'),
(13, 'Pertemuan ke - 13', 'Pertemuan Ketigabelas mengenal tanda sukun', 'https://www.youtube.com/embed/QbrdsYsowr8'),
(14, 'Pertemuan ke - 14', 'Pertemuan Keempatbelas mengenal tanda Baina dan Bauna serta tanda Qolqolah', 'https://www.youtube.com/embed/yH4w_RAi_lE'),
(15, 'Pertemuan ke - 15', 'Pertemuan Kelimabelas membedakan penyebutan Hamzah Ain Kaf dan Qaf', 'https://www.youtube.com/embed/9R1iybK4Nqk'),
(16, 'Pertemuan ke - 16', 'Pertemuan Keenambelas mengenal Lam Qamariyah, Lam Syamsiyah dan huruf Ghunnah', 'https://www.youtube.com/embed/zY0Q_8zdmQI'),
(17, 'Pertemuan ke - 17', 'Pertemuan Ketujuhbelas mengenal tanda Wakaf dan Idgam', 'https://www.youtube.com/embed/UyrCMKmFsys'),
(18, 'Pertemuan ke - 18', 'Pertemuan Kedelapanbelas mengenal bacaan Iqlab dan Idgam Mimi/syafawi', 'https://www.youtube.com/embed/hvow5J4qJ1A'),
(19, 'Pertemuan ke - 19', 'Pertemuan Kesembilanbelas mengenal Ikhfa\' dan Idzhar', 'https://www.youtube.com/embed/urV6EY99NNo'),
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

--
-- Dumping data for table `tb_progress_belajar`
--

INSERT INTO `tb_progress_belajar` (`id_progress_belajar`, `id_user`, `id_materi`) VALUES
(1, 1, 2),
(2, 2, 2),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 2),
(34, 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `link_tugas` varchar(256) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_ustadz` int(11) NOT NULL DEFAULT 0,
  `id_materi` int(11) NOT NULL,
  `penilaian` int(11) NOT NULL DEFAULT 0,
  `komentar` text NOT NULL DEFAULT '',
  `status` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_periksa` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id_tugas`, `link_tugas`, `id_user`, `id_ustadz`, `id_materi`, `penilaian`, `komentar`, `status`, `date_created`, `tgl_periksa`) VALUES
(44, 'hal_36.mp3', 1, 5, 1, 75, 'Bagus', 'Lulus', '2020-02-28 15:57:23', '2020-02-28'),
(45, 'dirosa_kak_dadang.mp3', 23, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 15:58:09', NULL),
(46, 'dirosa_ust_sadli.mp3', 18, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 16:02:24', NULL),
(47, 'REC20200226121856.mp3', 19, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 16:04:17', NULL),
(48, 'REC20200226130006.mp3', 20, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 16:05:24', NULL),
(49, 'REC20200226131949.mp3', 21, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 16:06:24', NULL),
(50, 'REC20200226133242.mp3', 22, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 16:07:59', NULL),
(51, 'REC202002261319492.mp3', 2, 5, 1, 80, 'lanjutkan', 'Lulus', '2020-02-28 16:20:50', '2020-02-28'),
(52, 'REC202002261319491.mp3', 2, 0, 2, 0, '-', 'Belum Diperiksa', '2020-02-28 16:21:40', NULL),
(53, 'REC20200229005754.mp3', 26, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 16:59:07', NULL),
(54, 'REC20200229072749.mp3', 28, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 23:29:05', NULL),
(58, 'REC20200229073014.mp3', 29, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 23:31:21', NULL),
(61, 'REC20200229073241.mp3', 25, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 23:33:44', NULL),
(62, 'REC20200229073623.mp3', 30, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 23:37:32', NULL),
(63, 'REC20200229073828.mp3', 27, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 23:39:43', NULL),
(64, 'REC202002290738281.mp3', 27, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 23:39:44', NULL),
(65, 'REC20200229074256.mp3', 31, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 23:43:58', NULL),
(66, 'REC20200229075115.mp3', 32, 0, 1, 0, '-', 'Belum Diperiksa', '2020-02-28 23:52:22', NULL),
(67, 'REC20200229094547.mp3', 1, 0, 2, 0, '-', 'Belum Diperiksa', '2020-02-29 01:46:00', NULL),
(68, 'REC20200229103145.mp3', 33, 5, 1, 75, 'bagus', 'Lulus', '2020-02-29 02:36:09', '2020-02-29');

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
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pekerjaan`, `email`, `password`, `user_role`, `is_active`, `foto`, `date_created`) VALUES
(1, 'Iriansyah Ahmad M', 'Laki-laki', 'Ujung Pandang', '1997-10-03', 'Perintis Kemerdekaan VII', 'Mahasiswa', 'ryanpdw10@gmail.com', '$2y$10$2Sj5IKXrqm7rbZY4JLXpL.9CXmWjnFzSU6kRj8FyyDKjWQloWsTji', 3, 1, 'IMG_20200203_164346_404.jpg', '2020-02-28 16:20:15'),
(2, 'Lalu Abdurrahman', 'Laki-laki', 'Lombok', '1996-08-27', 'Perintis Kemerdekaan VII', 'Mahasiswa', 'lalurahmanms@gmail.com', '$2y$10$QDQADznI75jSY7oMglm12eJNRcPFgQU8QnZvax2tro7sK0Eq/ftMi', 3, 1, 'lalu.jpg', '2020-02-27 16:27:26'),
(17, 'Ikram', 'Laki-laki', 'karossa', '2020-02-04', 'Mora 1', 'Mahasiswa', 'ikramanas281197@gmail.com', '$2y$10$2Sj5IKXrqm7rbZY4JLXpL.9CXmWjnFzSU6kRj8FyyDKjWQloWsTji', 3, 1, 'default.png', '2020-02-28 15:55:06'),
(18, 'Rahmat Sadli', 'Laki-laki', 'Tolitoli', '1997-03-03', 'Masjid Ali Hizaam', 'Pelajar', 'rahmatsadli96@gmail.com', '$2y$10$2Sj5IKXrqm7rbZY4JLXpL.9CXmWjnFzSU6kRj8FyyDKjWQloWsTji', 3, 1, 'default.png', '2020-02-28 15:55:06'),
(19, 'Mursidin', 'Laki-laki', 'Bau-bau', '2000-04-14', 'Perintis Kemerdekaan 7', 'Mahasiswa', 'mursidinrm14@gmail.com', '$2y$10$2Sj5IKXrqm7rbZY4JLXpL.9CXmWjnFzSU6kRj8FyyDKjWQloWsTji', 3, 1, 'default.png', '2020-02-28 15:55:06'),
(20, 'Hasan marzuki', 'Laki-laki', 'Sidrap', '2001-03-11', 'Perintis Kemerdekaan 7', 'Tidak ada', 'hmarzuki72@gmail.com', '$2y$10$2Sj5IKXrqm7rbZY4JLXpL.9CXmWjnFzSU6kRj8FyyDKjWQloWsTji', 3, 1, 'default.png', '2020-02-28 15:55:06'),
(21, 'Muhammad Zyaki Firmansyah', 'Laki-laki', 'Luwu Timur', '2002-08-25', 'Makassar', 'Freelance Designer', 'avzya26@gmail.com', '$2y$10$2Sj5IKXrqm7rbZY4JLXpL.9CXmWjnFzSU6kRj8FyyDKjWQloWsTji', 3, 1, 'default.png', '2020-02-28 15:55:06'),
(22, 'Satriadi', 'Laki-laki', 'Tobeu', '1998-07-17', 'Komp. Hartaco', 'Freelance', 'satriadi@gmail.com', '$2y$10$2Sj5IKXrqm7rbZY4JLXpL.9CXmWjnFzSU6kRj8FyyDKjWQloWsTji', 3, 1, 'default.png', '2020-02-28 15:55:06'),
(23, 'Muhdan Fyan', 'Laki-laki', 'Bau-bau', '1988-02-02', 'Perintis Kemerdekaan 7', 'Freelance', 'dadan@gmail.com', '$2y$10$2Sj5IKXrqm7rbZY4JLXpL.9CXmWjnFzSU6kRj8FyyDKjWQloWsTji', 3, 1, 'default.png', '2020-02-28 15:55:06'),
(24, 'Suryo Agung Nugroho', 'Laki-laki', 'Makassar', '1997-02-21', 'Jln. Abdul Daeng Sirua', 'Pengangguran', 'suryo@gmail.com', '$2y$10$T4uv3NeHr/2b13LU6RH3b.u4Ve4BuqyajyAg2lDVoVZ3xPz.eE.mK', 3, 1, 'default.png', '2020-02-28 16:27:29'),
(25, 'Harry Helvizar', 'Laki-laki', 'Mamuju', '1997-06-02', 'Karossa', 'Staf it uim', 'harry@gmail.com', '$2y$10$F.Mwz.QozYYvVsvaBDdl2O/TZzk137sfQjd8SUQ1VHDD7Y7L1bYVe', 3, 1, 'default.png', '2020-02-28 16:39:15'),
(26, 'Abdul Rahman', 'Laki-laki', 'Maros', '1999-11-08', 'Perintis Kemerdekaan 7', 'Mahasiswa', 'abdulrahmanabra009@gmail.com', '$2y$10$z42fzsaEXZGr2OsYnJ2u4.o/q5M4/X05Hzb29ucPZJjky2fi/WP2S', 3, 1, 'default.png', '2020-02-28 16:53:49'),
(27, 'Muhammad bin muhsir', 'Laki-laki', 'Makassar', '2002-06-24', 'Btn samata permain', 'Pelajar', 'mhmmdmuhsir@gmail.com', '$2y$10$ZfiCztIIpCLjuRmSWUHbwu/rikvtLLia4zX2GIOs0QR9M9Yn30EKm', 3, 1, 'default.png', '2020-02-28 23:10:48'),
(28, 'Fandi iksan', 'Laki-laki', 'Waemala', '2016-03-07', 'antang', 'mahasiswa', '2fandiiksan@gmail.com', '$2y$10$2QArRxodzQyUmUM9wgoaDuDZoFz0Sa.CG62P9m0.xOhdbGMHvdnUi', 3, 1, 'default.png', '2020-02-28 23:17:40'),
(29, 'Adriawa Amrullah', 'Laki-laki', 'Ujung pandang', '1998-10-24', 'Jl. Sukamaju 3 No.', 'Mahasiswa', 'adriawan010@gmail.com', '$2y$10$HfGUnyqFD9Jw7opxwsrn4u/k.nz3L3vVUMnHCxE75ix9AuHCDHEhW', 3, 1, 'default.png', '2020-02-28 23:19:20'),
(30, 'MUHAMMAD NURSAID', 'Laki-laki', 'LATAWE', '2003-06-26', 'MAKASSAR', 'PELAJAR', 'zhaidmaulana@gmail.com', '$2y$10$Wbp9cOhp.cEaTxmkLkT/RuH6VmcVZVjWnSrMl.6lyVyZyV2hu2pT6', 3, 1, 'default.png', '2020-02-28 23:22:54'),
(31, 'Rangga Danalta', 'Laki-laki', 'Pamandati', '2003-12-06', 'Makassar', 'Santri', 'briigassr@gmail.com', '$2y$10$F6.U17JbCU6MoICyDdjnSeW4cqlA5jGNu.LapA3.Xm0Zz6tCBC0Z6', 3, 1, 'default.png', '2020-02-28 23:41:49'),
(32, 'Fauzan la bas', 'Laki-laki', 'Makassar', '1997-02-11', 'Makassar', 'Freelance', 'fauzanalbash@gmail.com', '$2y$10$0TuFE.aKTG8bH4qibfVV5eNi1eTD9hcUqjD.076d5Df3p0MwvuLHi', 3, 1, 'default.png', '2020-02-28 23:48:22'),
(33, 'Ryan', 'Laki-laki', 'Makassar', '1997-10-03', 'Perintis', 'Mahasiswa', 'ryan@gmail.com', '$2y$10$OdgNS9k2p9LfdrBQoO1bh.3ChGuyy1ZPq2vL1WK7Yb2ao8QtuPaYu', 3, 1, 'default.png', '2020-02-29 02:24:42'),
(34, 'Baco', 'Laki-laki', 'makassar', '2020-02-27', 'Makassar', 'Freelance Designer', 'rahman@gmail.com', '$2y$10$nAV/L8haedwsdPaTc3KhRObz9sMJq3nu9yweO3.Fo0UtOKICTud6m', 3, 1, 'default.png', '2020-02-29 03:01:31');

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
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ustadz`
--

INSERT INTO `tb_ustadz` (`id_ustadz`, `nama`, `email`, `password`, `user_role`, `is_active`, `foto`, `date_created`) VALUES
(4, 'Muh. Ilham Idrus Tahir', 'ilham.daddy@yahoo.co.id', '$2y$10$D1g/9TL.P5NmtWLt4JICSOtwSk15/HzgIuVR/jWJeH/kOIFTQFxTy', 2, 1, 'default.png', '2020-02-27 16:11:26'),
(5, 'Komari', 'komarialkadiri@gmail.com', '$2y$10$MRrq4sNaMV9ND1/YGuPcI.HX0hj85Ntw/9NI6jNcXlc9e2/ww/K92', 2, 1, 'default.png', '2020-02-27 16:13:46'),
(6, 'Muh. hamzah', 'hamzahabuahmade@gmail.com', '$2y$10$R5FFwRTkic.He2pd3DAneObeOmhjQ3q/Xs6rIARx8x7tsN5gCu4BW', 2, 1, 'default.png', '2020-02-27 16:14:28'),
(7, 'Kamaruddin Ramli', 'kamaruddinabuubay@gmail.com', '$2y$10$VIQWE0WQ2wGTcd8GKpA.n.KlztuKFcmuA5OJWrzhbZcP2A79hcRTq', 2, 1, 'default.png', '2020-02-27 16:15:08'),
(8, 'Dzaky Mubarak', 'dzakymoebarak@gmail.com', '$2y$10$F56omvWsAea8bN2F0VAIIeMLAaYNffVdUqShpg3Bu8d1tKB4yVN1K', 2, 1, 'default.png', '2020-02-27 16:15:44'),
(9, 'Asrul Sani', 'asrul.sanipgsd@gmail.com', '$2y$10$HwE.HIBcG1Omd9vdyPlbSesznDO9oEapqmoTOKu5fQfIxAe0ongdm', 2, 1, 'default.png', '2020-02-27 16:18:00');

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
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_progress_belajar`
--
ALTER TABLE `tb_progress_belajar`
  MODIFY `id_progress_belajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id_user_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ustadz`
--
ALTER TABLE `tb_ustadz`
  MODIFY `id_ustadz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
