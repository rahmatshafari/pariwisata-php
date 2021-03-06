-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jul 2017 pada 19.53
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `tgl_post`, `judul`, `isi`, `penulis`, `category`) VALUES
(9, '2017-07-07 17:00:00', 'inazuma', 'buku ini bagus', 'matsukaze', 'Produk'),
(11, '2017-07-08 17:00:00', 'yuuuuu', 'dhjoljhfytcdcfvbuiml[mnjgvfctyunionionhgfchjknjphgvgjihgfxucvbnlno bvuc ytuhugftrsdxcvg f', 'wew', 'Organisasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `tgl_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_post` int(10) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `tgl_komentar`, `id_post`, `komentar`) VALUES
(1, '2017-07-07 19:00:41', 1, 'wew'),
(2, '2017-07-07 19:01:03', 0, 'weweweww'),
(3, '2017-07-07 19:06:08', 0, 'wewew'),
(4, '2017-07-08 02:41:26', 0, 'wewewewwwwww'),
(5, '2017-07-08 02:42:34', 0, 'greet'),
(6, '2017-07-08 07:32:40', 0, 'wewendjknvsjhvla,lvnbusnl'),
(7, '2017-07-09 14:13:01', 0, 'asas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `counter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `waktu`, `ip_address`, `tanggal`, `counter`) VALUES
(1, '2017-07-07 13:28:31', '::1', '0000-00-00', ''),
(2, '2017-07-07 13:28:35', '::1', '0000-00-00', ''),
(3, '2017-07-07 13:46:47', '::1', '0000-00-00', ''),
(4, '2017-07-07 13:49:28', '::1', '0000-00-00', ''),
(5, '2017-07-07 13:49:51', '::1', '0000-00-00', ''),
(6, '2017-07-07 13:50:39', '::1', '0000-00-00', ''),
(7, '2017-07-07 13:51:01', '::1', '0000-00-00', ''),
(8, '2017-07-07 13:51:52', '::1', '0000-00-00', ''),
(9, '2017-07-07 14:00:48', '::1', '0000-00-00', ''),
(10, '2017-07-07 14:01:04', '::1', '0000-00-00', ''),
(11, '2017-07-07 14:02:30', '::1', '0000-00-00', ''),
(12, '2017-07-07 14:04:57', '::1', '0000-00-00', ''),
(13, '2017-07-07 14:06:10', '::1', '0000-00-00', ''),
(14, '2017-07-07 14:12:11', '::1', '0000-00-00', ''),
(15, '2017-07-07 14:13:54', '::1', '0000-00-00', ''),
(16, '2017-07-07 14:14:09', '::1', '0000-00-00', ''),
(17, '2017-07-07 14:14:57', '::1', '0000-00-00', ''),
(18, '2017-07-07 14:18:38', '::1', '0000-00-00', ''),
(19, '2017-07-07 14:35:58', '::1', '0000-00-00', ''),
(20, '2017-07-07 14:36:44', '::1', '0000-00-00', ''),
(21, '2017-07-07 14:45:42', '::1', '0000-00-00', ''),
(22, '2017-07-07 21:36:32', '::1', '0000-00-00', ''),
(23, '2017-07-07 21:38:37', '::1', '0000-00-00', ''),
(24, '2017-07-07 21:39:49', '::1', '0000-00-00', ''),
(25, '2017-07-07 21:41:01', '::1', '0000-00-00', ''),
(26, '2017-07-07 21:41:27', '::1', '0000-00-00', ''),
(27, '2017-07-07 21:42:21', '::1', '0000-00-00', ''),
(28, '2017-07-07 21:42:35', '::1', '0000-00-00', ''),
(29, '2017-07-07 22:15:36', '::1', '0000-00-00', ''),
(30, '2017-07-08 02:31:15', '::1', '0000-00-00', ''),
(31, '2017-07-08 02:32:22', '::1', '0000-00-00', ''),
(32, '2017-07-08 02:32:30', '::1', '0000-00-00', ''),
(33, '2017-07-08 02:32:41', '::1', '0000-00-00', ''),
(34, '2017-07-08 03:25:50', '::1', '0000-00-00', ''),
(35, '2017-07-08 06:44:54', '::1', '0000-00-00', ''),
(36, '2017-07-09 08:54:01', '::1', '0000-00-00', ''),
(37, '2017-07-09 09:12:22', '::1', '0000-00-00', ''),
(38, '2017-07-09 09:12:32', '::1', '0000-00-00', ''),
(39, '2017-07-09 09:12:35', '::1', '0000-00-00', ''),
(40, '2017-07-09 09:12:38', '::1', '0000-00-00', ''),
(41, '2017-07-09 09:12:39', '::1', '0000-00-00', ''),
(42, '2017-07-09 09:13:01', '::1', '0000-00-00', ''),
(43, '2017-07-12 09:32:18', '::1', '0000-00-00', ''),
(44, '2017-07-12 10:16:34', '::1', '0000-00-00', ''),
(45, '2017-07-12 10:16:36', '::1', '0000-00-00', ''),
(46, '2017-07-12 10:48:43', '::1', '0000-00-00', ''),
(47, '2017-07-14 04:34:35', '::1', '2017-07-14', '1'),
(48, '2017-07-14 04:34:37', '::1', '2017-07-14', '1'),
(49, '2017-07-14 04:34:38', '::1', '2017-07-14', '1'),
(50, '2017-07-14 04:34:39', '::1', '2017-07-14', '1'),
(51, '2017-07-14 04:34:39', '::1', '2017-07-14', '1'),
(52, '2017-07-14 04:34:40', '::1', '2017-07-14', '1'),
(53, '2017-07-14 04:34:41', '::1', '2017-07-14', '1'),
(54, '2017-07-14 04:34:41', '::1', '2017-07-14', '1'),
(55, '2017-07-14 04:47:18', '::1', '2017-07-14', '1'),
(56, '2017-07-14 04:50:40', '::1', '2017-07-14', '1'),
(57, '2017-07-14 04:50:42', '::1', '2017-07-14', '1'),
(58, '2017-07-14 04:50:44', '::1', '2017-07-14', '1'),
(59, '2017-07-14 04:51:00', '::1', '2017-07-14', '1'),
(60, '2017-07-14 04:51:30', '::1', '2017-07-14', '1'),
(61, '2017-07-14 04:51:51', '::1', '2017-07-14', '1'),
(62, '2017-07-14 04:52:07', '::1', '2017-07-14', '1'),
(63, '2017-07-14 04:52:12', '::1', '2017-07-14', '1'),
(64, '2017-07-14 04:52:16', '::1', '2017-07-14', '1'),
(65, '2017-07-14 04:52:21', '::1', '2017-07-14', '1'),
(66, '2017-07-14 04:52:28', '::1', '2017-07-14', '1'),
(67, '2017-07-14 04:52:36', '::1', '2017-07-14', '1'),
(68, '2017-07-14 04:53:16', '::1', '2017-07-14', '1'),
(69, '2017-07-14 04:54:11', '::1', '2017-07-14', '1'),
(70, '2017-07-14 04:54:20', '::1', '2017-07-14', '1'),
(71, '2017-07-14 04:54:49', '::1', '2017-07-14', '1'),
(72, '2017-07-14 04:54:51', '::1', '2017-07-14', '1'),
(73, '2017-07-14 04:55:13', '::1', '2017-07-14', '1'),
(74, '2017-07-14 04:55:19', '::1', '2017-07-14', '1'),
(75, '2017-07-14 04:58:56', '::1', '2017-07-14', '1'),
(76, '2017-07-14 05:14:55', '::1', '2017-07-14', '1'),
(77, '2017-07-14 23:50:52', '::1', '2017-07-15', '1'),
(78, '2017-07-14 23:50:55', '::1', '2017-07-15', '1'),
(79, '2017-07-14 23:50:56', '::1', '2017-07-15', '1'),
(80, '2017-07-14 23:50:59', '::1', '2017-07-15', '1'),
(81, '2017-07-14 23:51:02', '::1', '2017-07-15', '1'),
(82, '2017-07-14 23:51:05', '::1', '2017-07-15', '1'),
(83, '2017-07-14 23:51:07', '::1', '2017-07-15', '1'),
(84, '2017-07-14 23:51:08', '::1', '2017-07-15', '1'),
(85, '2017-07-14 23:51:16', '::1', '2017-07-15', '1'),
(86, '2017-07-14 23:51:29', '::1', '2017-07-15', '1'),
(87, '2017-07-14 23:51:35', '::1', '2017-07-15', '1'),
(88, '2017-07-14 23:51:37', '::1', '2017-07-15', '1'),
(89, '2017-07-14 23:51:48', '::1', '2017-07-15', '1'),
(90, '2017-07-14 23:52:19', '::1', '2017-07-15', '1'),
(91, '2017-07-15 00:21:44', '::1', '2017-07-15', '1'),
(92, '2017-07-15 00:21:48', '::1', '2017-07-15', '1'),
(93, '2017-07-15 00:21:49', '::1', '2017-07-15', '1'),
(94, '2017-07-15 00:26:11', '::1', '2017-07-15', '1'),
(95, '2017-07-15 01:06:33', '::1', '2017-07-15', '1'),
(96, '2017-07-15 01:07:20', '::1', '2017-07-15', '1'),
(97, '2017-07-15 01:07:53', '::1', '2017-07-15', '1'),
(98, '2017-07-15 01:20:39', '::1', '2017-07-15', '1'),
(99, '2017-07-15 01:21:48', '::1', '2017-07-15', '1'),
(100, '2017-07-15 06:43:25', '::1', '2017-07-15', '1'),
(101, '2017-07-15 06:43:28', '::1', '2017-07-15', '1'),
(102, '2017-07-15 06:43:30', '::1', '2017-07-15', '1'),
(103, '2017-07-15 06:56:51', '::1', '2017-07-15', '1'),
(104, '2017-07-15 06:56:55', '::1', '2017-07-15', '1'),
(105, '2017-07-15 06:56:56', '::1', '2017-07-15', '1'),
(106, '2017-07-15 06:56:58', '::1', '2017-07-15', '1'),
(107, '2017-07-15 06:57:06', '::1', '2017-07-15', '1'),
(108, '2017-07-15 06:57:06', '::1', '2017-07-15', '1'),
(109, '2017-07-15 06:57:08', '::1', '2017-07-15', '1'),
(110, '2017-07-15 07:07:02', '::1', '2017-07-15', '1'),
(111, '2017-07-15 07:08:23', '::1', '2017-07-15', '1'),
(112, '2017-07-15 07:08:26', '::1', '2017-07-15', '1'),
(113, '2017-07-15 07:08:53', '::1', '2017-07-15', '1'),
(114, '2017-07-15 07:09:53', '::1', '2017-07-15', '1'),
(115, '2017-07-15 07:12:02', '::1', '2017-07-15', '1'),
(116, '2017-07-15 07:12:09', '::1', '2017-07-15', '1'),
(117, '2017-07-15 07:13:33', '::1', '2017-07-15', '1'),
(118, '2017-07-15 07:13:37', '::1', '2017-07-15', '1'),
(119, '2017-07-15 07:13:45', '::1', '2017-07-15', '1'),
(120, '2017-07-15 07:13:51', '::1', '2017-07-15', '1'),
(121, '2017-07-15 07:13:54', '::1', '2017-07-15', '1'),
(122, '2017-07-15 07:14:00', '::1', '2017-07-15', '1'),
(123, '2017-07-15 07:16:05', '::1', '2017-07-15', '1'),
(124, '2017-07-15 07:16:09', '::1', '2017-07-15', '1'),
(125, '2017-07-15 07:16:50', '::1', '2017-07-15', '1'),
(126, '2017-07-15 07:16:53', '::1', '2017-07-15', '1'),
(127, '2017-07-15 07:20:43', '::1', '2017-07-15', '1'),
(128, '2017-07-15 07:20:56', '::1', '2017-07-15', '1'),
(129, '2017-07-15 07:21:16', '::1', '2017-07-15', '1'),
(130, '2017-07-15 07:21:20', '::1', '2017-07-15', '1'),
(131, '2017-07-15 07:21:37', '::1', '2017-07-15', '1'),
(132, '2017-07-15 07:21:40', '::1', '2017-07-15', '1'),
(133, '2017-07-15 07:21:48', '::1', '2017-07-15', '1'),
(134, '2017-07-15 07:22:19', '::1', '2017-07-15', '1'),
(135, '2017-07-15 07:22:35', '::1', '2017-07-15', '1'),
(136, '2017-07-15 07:23:17', '::1', '2017-07-15', '1'),
(137, '2017-07-15 07:25:15', '::1', '2017-07-15', '1'),
(138, '2017-07-15 07:25:50', '::1', '2017-07-15', '1'),
(139, '2017-07-15 07:31:25', '::1', '2017-07-15', '1'),
(140, '2017-07-15 07:31:50', '::1', '2017-07-15', '1'),
(141, '2017-07-15 07:32:15', '::1', '2017-07-15', '1'),
(142, '2017-07-15 07:32:42', '::1', '2017-07-15', '1'),
(143, '2017-07-15 07:33:33', '::1', '2017-07-15', '1'),
(144, '2017-07-15 07:34:00', '::1', '2017-07-15', '1'),
(145, '2017-07-15 07:34:19', '::1', '2017-07-15', '1'),
(146, '2017-07-15 07:34:35', '::1', '2017-07-15', '1'),
(147, '2017-07-15 07:39:30', '::1', '2017-07-15', '1'),
(148, '2017-07-15 07:40:40', '::1', '2017-07-15', '1'),
(149, '2017-07-15 07:44:03', '::1', '2017-07-15', '1'),
(150, '2017-07-15 07:47:26', '::1', '2017-07-15', '1'),
(151, '2017-07-15 07:58:48', '::1', '2017-07-15', '1'),
(152, '2017-07-15 07:59:09', '::1', '2017-07-15', '1'),
(153, '2017-07-15 07:59:29', '::1', '2017-07-15', '1'),
(154, '2017-07-15 08:00:36', '::1', '2017-07-15', '1'),
(155, '2017-07-15 08:02:04', '::1', '2017-07-15', '1'),
(156, '2017-07-15 08:02:08', '::1', '2017-07-15', '1'),
(157, '2017-07-15 08:02:11', '::1', '2017-07-15', '1'),
(158, '2017-07-15 08:02:24', '::1', '2017-07-15', '1'),
(159, '2017-07-15 10:01:33', '::1', '2017-07-15', '1'),
(160, '2017-07-15 10:02:06', '::1', '2017-07-15', '1'),
(161, '2017-07-15 10:04:36', '::1', '2017-07-15', '1'),
(162, '2017-07-15 10:04:39', '::1', '2017-07-15', '1'),
(163, '2017-07-15 10:04:41', '::1', '2017-07-15', '1'),
(164, '2017-07-15 10:04:43', '::1', '2017-07-15', '1'),
(165, '2017-07-15 10:04:45', '::1', '2017-07-15', '1'),
(166, '2017-07-15 10:04:46', '::1', '2017-07-15', '1'),
(167, '2017-07-15 10:05:32', '::1', '2017-07-15', '1'),
(168, '2017-07-15 10:07:41', '::1', '2017-07-15', '1'),
(169, '2017-07-15 10:07:43', '::1', '2017-07-15', '1'),
(170, '2017-07-15 10:07:44', '::1', '2017-07-15', '1'),
(171, '2017-07-15 10:07:44', '::1', '2017-07-15', '1'),
(172, '2017-07-15 10:07:44', '::1', '2017-07-15', '1'),
(173, '2017-07-15 10:07:45', '::1', '2017-07-15', '1'),
(174, '2017-07-15 10:07:46', '::1', '2017-07-15', '1'),
(175, '2017-07-15 10:07:47', '::1', '2017-07-15', '1'),
(176, '2017-07-15 10:07:48', '::1', '2017-07-15', '1'),
(177, '2017-07-15 10:07:50', '::1', '2017-07-15', '1'),
(178, '2017-07-15 10:10:17', '::1', '2017-07-15', '1'),
(179, '2017-07-15 10:16:26', '::1', '2017-07-15', '1'),
(180, '2017-07-15 10:18:37', '::1', '2017-07-15', '1'),
(181, '2017-07-15 10:18:39', '::1', '2017-07-15', '1'),
(182, '2017-07-15 10:18:48', '::1', '2017-07-15', '1'),
(183, '2017-07-15 10:18:52', '::1', '2017-07-15', '1'),
(184, '2017-07-15 10:18:54', '::1', '2017-07-15', '1'),
(185, '2017-07-15 10:18:56', '::1', '2017-07-15', '1'),
(186, '2017-07-15 10:18:58', '::1', '2017-07-15', '1'),
(187, '2017-07-15 10:18:59', '::1', '2017-07-15', '1'),
(188, '2017-07-15 10:19:01', '::1', '2017-07-15', '1'),
(189, '2017-07-15 10:19:02', '::1', '2017-07-15', '1'),
(190, '2017-07-15 10:19:06', '::1', '2017-07-15', '1'),
(191, '2017-07-15 10:19:42', '::1', '2017-07-15', '1'),
(192, '2017-07-15 10:19:51', '::1', '2017-07-15', '1'),
(193, '2017-07-15 10:19:53', '::1', '2017-07-15', '1'),
(194, '2017-07-15 10:19:54', '::1', '2017-07-15', '1'),
(195, '2017-07-15 10:19:57', '::1', '2017-07-15', '1'),
(196, '2017-07-15 10:21:34', '::1', '2017-07-15', '1'),
(197, '2017-07-15 10:32:54', '::1', '2017-07-15', '1'),
(198, '2017-07-15 10:35:17', '::1', '2017-07-15', '1'),
(199, '2017-07-15 10:35:33', '::1', '2017-07-15', '1'),
(200, '2017-07-15 10:36:02', '::1', '2017-07-15', '1'),
(201, '2017-07-15 10:36:37', '::1', '2017-07-15', '1'),
(202, '2017-07-15 10:37:24', '::1', '2017-07-15', '1'),
(203, '2017-07-15 10:38:23', '::1', '2017-07-15', '1'),
(204, '2017-07-15 10:45:45', '::1', '2017-07-15', '1'),
(205, '2017-07-15 10:46:03', '::1', '2017-07-15', '1'),
(206, '2017-07-15 10:49:39', '::1', '2017-07-15', '1'),
(207, '2017-07-15 10:49:42', '::1', '2017-07-15', '1'),
(208, '2017-07-15 10:50:11', '::1', '2017-07-15', '1'),
(209, '2017-07-15 10:50:16', '::1', '2017-07-15', '1'),
(210, '2017-07-15 10:50:17', '::1', '2017-07-15', '1'),
(211, '2017-07-15 10:51:21', '::1', '2017-07-15', '1'),
(212, '2017-07-15 10:51:26', '::1', '2017-07-15', '1'),
(213, '2017-07-15 10:52:56', '::1', '2017-07-15', '1'),
(214, '2017-07-15 10:53:11', '::1', '2017-07-15', '1'),
(215, '2017-07-15 10:54:20', '::1', '2017-07-15', '1'),
(216, '2017-07-15 10:54:41', '::1', '2017-07-15', '1'),
(217, '2017-07-15 10:54:42', '::1', '2017-07-15', '1'),
(218, '2017-07-15 10:54:44', '::1', '2017-07-15', '1'),
(219, '2017-07-15 10:56:44', '::1', '2017-07-15', '1'),
(220, '2017-07-15 10:56:49', '::1', '2017-07-15', '1'),
(221, '2017-07-15 10:57:05', '::1', '2017-07-15', '1'),
(222, '2017-07-15 10:57:26', '::1', '2017-07-15', '1'),
(223, '2017-07-15 10:58:56', '::1', '2017-07-15', '1'),
(224, '2017-07-15 10:59:35', '::1', '2017-07-15', '1'),
(225, '2017-07-15 11:00:34', '::1', '2017-07-15', '1'),
(226, '2017-07-15 11:04:01', '::1', '2017-07-15', '1'),
(227, '2017-07-15 11:06:11', '::1', '2017-07-15', '1'),
(228, '2017-07-15 11:06:14', '::1', '2017-07-15', '1'),
(229, '2017-07-15 12:15:02', '::1', '2017-07-15', '1'),
(230, '2017-07-15 12:15:08', '::1', '2017-07-15', '1'),
(231, '2017-07-15 13:40:47', '::1', '2017-07-15', '1'),
(232, '2017-07-15 13:41:08', '::1', '2017-07-15', '1'),
(233, '2017-07-15 13:41:12', '::1', '2017-07-15', '1'),
(234, '2017-07-15 13:41:17', '::1', '2017-07-15', '1'),
(235, '2017-07-15 13:49:02', '::1', '2017-07-15', '1'),
(236, '2017-07-15 13:49:08', '::1', '2017-07-15', '1'),
(237, '2017-07-15 13:49:15', '::1', '2017-07-15', '1'),
(238, '2017-07-15 13:51:44', '::1', '2017-07-15', '1'),
(239, '2017-07-15 13:51:47', '::1', '2017-07-15', '1'),
(240, '2017-07-15 13:51:53', '::1', '2017-07-15', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'rahmat', 'af2a4c9d4c4956ec9d6ba62213eed568', 'admin'),
(2, 'deni', '43f41d127a81c54d4c8f5f93daeb7118', 'user'),
(3, 'aji', '8d045450ae16dc81213a75b725ee2760', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
