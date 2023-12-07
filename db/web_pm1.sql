-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2023 pada 03.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pm1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `countdown`
--

CREATE TABLE `countdown` (
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `countdown`
--

INSERT INTO `countdown` (`tanggal`) VALUES
('2023-08-24 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(10) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `berkas` longtext NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama_peserta`, `tlp`, `email`, `universitas`, `berkas`, `status`) VALUES
(1, 'Farhan Muhammad', '089876543901', 'farhan.muh@gmail.com', 'SMK NEGRI 04', '202308230312381371.pdf', 0),
(2, 'Ifan Priyadi Nurfauzi', '0898765439023', 'ifan@gmail.com', 'SMK NEGRI 04', '202308230313324623.pdf', 0),
(3, 'Muhamad Firdaus', '089876543212', 'firdaus.muh@gmail.com', 'STEKOM', '202308230314089715.pdf', 0),
(5, 'Sulthan Aldi Budiono', '089876543923', 'aldibudi@gmail.com', 'UNIVERSITAS SEMARANG', '202308230315161825.pdf', 0),
(7, 'Ajimin Aditya Pangestu', '087876543678', 'ajimin_aditya_pangestu@gmail.com', 'UIN Raden Mas Said Surakarta', '202308230317352543.pdf', 0),
(8, 'Anita Mardhiyah', '089576543577', 'anita_mardhiyah@yahoo.com', 'USM', 'SUTAR PERMOHONAN MAGANG.pdf', 0),
(9, 'Artawan Pranowo', '08218346785', 'artawan_pranowo@yahoo.com', 'SMK NEGRI 02', '202308230319468927.pdf', 0),
(10, 'Ayu Yuliarti', '0898765437782', 'ayu_yuliarti@gmail.com', 'SMK NEGRI 07', '202308230320394652.pdf', 0),
(11, 'Azela Riyanti', '089876543901', 'azela_riya@gmail.com', 'UIN Raden Mas Said Surakarta', '202308230321258764.pdf', 0),
(13, 'Darijan Kadir Waluyo', '0898765439023', 'darijan_kadi@gmail.com', 'SMK NEGRI 02', '202308230322414299.pdf', 0),
(14, 'Calista Fujiati', '087876543923', 'calista_fuji@gmail.com', 'SMK NEGRI 07', '202308230323335272.pdf', 0),
(15, 'Estiawan Suryono', '082176543902', 'estiawan_suryono@gmail.co.id', 'UIN Raden Mas Said Surakarta', '202308230325401196.pdf', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_aspek`
--

CREATE TABLE `pm_aspek` (
  `id_aspek` tinyint(10) NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `prosentase` float NOT NULL,
  `bobot_core` float NOT NULL,
  `bobot_secondary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_aspek`
--

INSERT INTO `pm_aspek` (`id_aspek`, `aspek`, `prosentase`, `bobot_core`, `bobot_secondary`) VALUES
(1, 'Kecerdasan', 40, 60, 40),
(2, 'Jurusan', 30, 60, 40),
(3, 'Domisili', 30, 60, 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_bobot`
--

CREATE TABLE `pm_bobot` (
  `selisih` tinyint(10) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_bobot`
--

INSERT INTO `pm_bobot` (`selisih`, `bobot`, `keterangan`) VALUES
(-4, 1, 'Tidak ada selisih (kompetensi sesuai dgn yg dibutuhkan)'),
(-3, 2, 'Kompetensi individu kelebihan 1 tingkat'),
(-2, 3, 'Kompetensi individu kekurangan 1 tingkat'),
(-1, 4, 'Kompetensi individu kelebihan 2 tingkat'),
(0, 5, 'Kompetensi individu kekurangan 2 tingkat'),
(1, 4.5, 'Kompetensi individu kelebihan 3 tingkat'),
(2, 3.5, 'Kompetensi individu kekurangan 3 tingkat'),
(3, 2.5, 'Kompetensi individu kelebihan 4 tingkat'),
(4, 1.5, 'Kompetensi individu kekurangan 4 tingkat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_faktor`
--

CREATE TABLE `pm_faktor` (
  `id_faktor` tinyint(10) NOT NULL,
  `id_aspek` tinyint(10) NOT NULL,
  `faktor` varchar(30) NOT NULL,
  `target` tinyint(10) NOT NULL,
  `type` set('core','secondary') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_faktor`
--

INSERT INTO `pm_faktor` (`id_faktor`, `id_aspek`, `faktor`, `target`, `type`) VALUES
(1, 1, 'Coding', 4, 'core'),
(2, 1, 'Kreatif', 4, 'secondary'),
(3, 1, 'Logika', 4, 'core'),
(4, 1, 'Inovativ', 3, 'secondary'),
(5, 2, 'Teknik Informatika', 4, 'core'),
(6, 2, 'Sistem Informasi', 4, 'secondary'),
(7, 2, 'DKV', 3, 'core'),
(8, 2, 'Ilmu Komunikasi', 3, 'secondary'),
(9, 3, 'Kota', 4, 'core'),
(10, 3, 'Kabupaten', 3, 'core'),
(11, 3, 'Kecamatan', 3, 'secondary'),
(12, 3, 'Jarak tempuh', 3, 'secondary');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_ranking`
--

CREATE TABLE `pm_ranking` (
  `id_peserta` int(10) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `nilai_akhir` decimal(10,2) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_ranking`
--

INSERT INTO `pm_ranking` (`id_peserta`, `nama_peserta`, `universitas`, `nilai_akhir`, `status`) VALUES
(4, 'Randi Agus Revaldi', 'SMK NEGRI 04', '4.31', 1),
(6, 'Aisyah Farida', 'UNIVERSITAS SEMARANG', '3.93', 1),
(12, 'Banawi Hidayat', 'STEKOM', '4.84', 2),
(1, 'Farhan Muhammad', 'SMK NEGRI 04', '4.05', 0),
(2, 'Ifan Priyadi Nurfauzi', 'SMK NEGRI 04', '4.45', 0),
(3, 'Muhamad Firdaus', 'STEKOM', '4.47', 0),
(5, 'Sulthan Aldi Budiono', 'UNIVERSITAS SEMARANG', '4.42', 0),
(7, 'Ajimin Aditya Pangestu', 'UIN Raden Mas Said Surakarta', '4.59', 0),
(8, 'Anita Mardhiyah', 'USM', '4.39', 0),
(9, 'Artawan Pranowo', 'SMK NEGRI 02', '4.25', 0),
(10, 'Ayu Yuliarti', 'SMK NEGRI 07', '4.65', 0),
(11, 'Azela Riyanti', 'UIN Raden Mas Said Surakarta', '4.11', 0),
(13, 'Darijan Kadir Waluyo', 'SMK NEGRI 02', '4.58', 0),
(14, 'Calista Fujiati', 'SMK NEGRI 07', '4.40', 0),
(15, 'Estiawan Suryono', 'UIN Raden Mas Said Surakarta', '4.57', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_sample`
--

CREATE TABLE `pm_sample` (
  `id_sample` int(10) NOT NULL,
  `id_peserta` int(10) NOT NULL,
  `id_faktor` tinyint(10) NOT NULL,
  `value` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_sample`
--

INSERT INTO `pm_sample` (`id_sample`, `id_peserta`, `id_faktor`, `value`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 3),
(3, 1, 3, 2),
(4, 1, 4, 3),
(5, 2, 1, 2),
(6, 2, 2, 4),
(7, 2, 3, 3),
(8, 2, 4, 4),
(9, 3, 1, 4),
(10, 3, 2, 4),
(11, 3, 3, 2),
(12, 3, 4, 4),
(13, 4, 1, 4),
(14, 4, 2, 2),
(15, 4, 3, 2),
(16, 4, 4, 4),
(17, 5, 1, 4),
(18, 5, 2, 4),
(19, 5, 3, 3),
(20, 5, 4, 4),
(21, 6, 1, 2),
(22, 6, 2, 4),
(23, 6, 3, 3),
(24, 6, 4, 2),
(25, 7, 1, 4),
(26, 7, 2, 4),
(27, 7, 3, 4),
(28, 7, 4, 4),
(29, 8, 1, 3),
(30, 8, 2, 3),
(31, 8, 3, 3),
(32, 8, 4, 4),
(33, 9, 1, 3),
(34, 9, 2, 4),
(35, 9, 3, 3),
(36, 9, 4, 2),
(37, 10, 1, 4),
(38, 10, 2, 3),
(39, 10, 3, 4),
(40, 10, 4, 2),
(41, 11, 1, 3),
(42, 11, 2, 3),
(43, 11, 3, 2),
(44, 11, 4, 3),
(45, 12, 1, 4),
(46, 12, 2, 4),
(47, 12, 3, 4),
(48, 12, 4, 4),
(49, 13, 1, 2),
(50, 13, 2, 4),
(51, 13, 3, 4),
(52, 13, 4, 3),
(53, 14, 1, 4),
(54, 14, 2, 4),
(55, 14, 3, 2),
(56, 14, 4, 3),
(57, 15, 1, 4),
(58, 15, 2, 4),
(59, 15, 3, 2),
(60, 15, 4, 4),
(181, 1, 5, 2),
(182, 1, 6, 3),
(183, 1, 7, 3),
(184, 1, 8, 3),
(185, 2, 5, 4),
(186, 2, 6, 4),
(187, 2, 7, 4),
(188, 2, 8, 4),
(189, 3, 5, 4),
(190, 3, 6, 2),
(191, 3, 7, 4),
(192, 3, 8, 3),
(193, 4, 5, 2),
(194, 4, 6, 4),
(195, 4, 7, 4),
(196, 4, 8, 3),
(197, 5, 5, 2),
(198, 5, 6, 4),
(199, 5, 7, 4),
(200, 5, 8, 4),
(201, 6, 5, 2),
(202, 6, 6, 2),
(203, 6, 7, 2),
(204, 6, 8, 2),
(205, 7, 5, 2),
(206, 7, 6, 3),
(207, 7, 7, 4),
(208, 7, 8, 4),
(209, 8, 5, 4),
(210, 8, 6, 2),
(211, 8, 7, 3),
(212, 8, 8, 3),
(213, 9, 5, 4),
(214, 9, 6, 2),
(215, 9, 7, 4),
(216, 9, 8, 4),
(217, 10, 5, 4),
(218, 10, 6, 3),
(219, 10, 7, 4),
(220, 10, 8, 4),
(221, 11, 5, 3),
(222, 11, 6, 4),
(223, 11, 7, 2),
(224, 11, 8, 2),
(225, 12, 5, 4),
(226, 12, 6, 4),
(227, 12, 7, 3),
(228, 12, 8, 4),
(229, 13, 5, 4),
(230, 13, 6, 3),
(231, 13, 7, 2),
(232, 13, 8, 3),
(233, 14, 5, 4),
(234, 14, 6, 4),
(235, 14, 7, 2),
(236, 14, 8, 3),
(237, 15, 5, 4),
(238, 15, 6, 3),
(239, 15, 7, 3),
(240, 15, 8, 4),
(241, 1, 9, 4),
(242, 1, 10, 2),
(243, 1, 11, 3),
(244, 1, 12, 2),
(245, 2, 9, 4),
(246, 2, 10, 4),
(247, 2, 11, 3),
(248, 2, 12, 4),
(249, 3, 9, 3),
(250, 3, 10, 3),
(251, 3, 11, 3),
(252, 3, 12, 3),
(253, 4, 9, 4),
(254, 4, 10, 3),
(255, 4, 11, 3),
(256, 4, 12, 4),
(257, 5, 9, 3),
(258, 5, 10, 4),
(259, 5, 11, 3),
(260, 5, 12, 4),
(261, 6, 9, 3),
(262, 6, 10, 2),
(263, 6, 11, 3),
(264, 6, 12, 3),
(265, 7, 9, 4),
(266, 7, 10, 3),
(267, 7, 11, 4),
(268, 7, 12, 4),
(269, 8, 9, 4),
(270, 8, 10, 4),
(271, 8, 11, 2),
(272, 8, 12, 4),
(273, 9, 9, 2),
(274, 9, 10, 3),
(275, 9, 11, 4),
(276, 9, 12, 4),
(277, 10, 9, 4),
(278, 10, 10, 3),
(279, 10, 11, 4),
(280, 10, 12, 4),
(281, 11, 9, 3),
(282, 11, 10, 3),
(283, 11, 11, 2),
(284, 11, 12, 2),
(285, 12, 9, 4),
(286, 12, 10, 3),
(287, 12, 11, 2),
(288, 12, 12, 4),
(289, 13, 9, 4),
(290, 13, 10, 3),
(291, 13, 11, 4),
(292, 13, 12, 3),
(293, 14, 9, 2),
(294, 14, 10, 3),
(295, 14, 11, 2),
(296, 14, 12, 4),
(297, 15, 9, 4),
(298, 15, 10, 3),
(299, 15, 11, 4),
(300, 15, 12, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(10) NOT NULL DEFAULT 0,
  `img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `password`, `level`, `img`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, ''),
(2, 'akbar', 'Akbar Kharisma', 'akbar@gmail.com', '4f033a0a2bf2fe0b68800a3079545cd1', 0, ''),
(3, 'aisyah', 'Aisyah Farida', 'aisyah_farida@gmail.co.id', '26bb533df5747c7a3f2a9cc48a8cf3ee', 0, ''),
(4, 'ajim', 'aji', 'ajimin_aditya_pangestu@gmail.com', 'd8d723e9a52a9dead0c5c633e2ac712f', 0, ''),
(5, 'anita', 'Anita Mardhiyah', 'anita_mardhiyah@yahoo.com', '83349cbdac695f3943635a4fd1aaa7d0', 0, ''),
(6, 'argo', 'Argono Daru Tarihoran', 'argono_daru_tarihoran@gmail.co.id', 'd4b55025c53dd662f7f31cda6103ad32', 0, ''),
(7, 'artawan', 'Artawan Pranowo', 'artawan_pranowo@yahoo.com', '775d10465d5c6b851505f882c06f77ed', 0, ''),
(8, 'Aurora ', 'Aurora Titin Safitri', 'aurora_titin_safitri@yahoo.co.id', '99c8ef576f385bc322564d5694df6fc2', 0, ''),
(9, 'ayu_yulianti', 'Ayu Yuliarti', 'ayu_yuliarti@gmail.com', 'a7497d67c3634a738f10557d6053a3a7', 0, ''),
(10, 'azela', 'Azela Riyanti', 'azela_riya@gmail.com', 'bcce3f9bfcdce9616178237cabea2cbb', 0, ''),
(11, 'Bana', 'Banawi Hidayat', 'banawi_hidayat@yahoo.co.id', '8fdf68671b9339667a19194ab017c2db', 0, ''),
(12, 'teguhCager', 'Cager Teguh Wijaya', 'cager_teguh_wijaya_s_pt@gmail.co.id', '63d6ea1237acf83f3d57c367d958c767', 0, ''),
(13, 'Calista', 'Calista Fujiati', 'calista_fuji@yahoo.com', '93fc1e28bc17af6420552b746af10f4f', 0, ''),
(14, 'Cayadi', 'Cayadi Umay Hardiansyah', 'cayadi_umay_hardiansyah_s_pd@gmail.co.id', 'cbdc1f25da085c0b4ef71bb4be57256e', 0, ''),
(15, 'darijan778', 'Darijan Kadir Waluyo', 'darijan_kadir_waluyo@yahoo.com', 'c44efa95253cd86c1e8741e22ce5697a', 0, ''),
(16, 'Dinamulyet', 'Dina Mulyani', 'dina_mulyani@yahoo.co.id', '7b148b665633aaf1749309480a4397e3', 0, ''),
(17, 'torihoran_edi', 'Edi Tarihoran', 'edi_tarihoran@yahoo.com', '28bcc2fcb70439cd49408126871e9ec6', 0, ''),
(18, 'elayusada', 'Ellis Ella Usada', 'ellis_ella_usada_s_h_@gmail.com', 'fa2868d8eedefc4923d4f691d9d166a8', 0, ''),
(19, 'Suryono', 'Estiawan Suryono', 'estiawan_sury@yahoo.com', 'cb0b4b2e53c2c0ea2944e9a51214c2c1', 0, ''),
(20, 'Faizahwidi08', 'Faizah Widiastuti', 'faizah_widiastuti@yahoo.com', '7aedeb3c0483c19498be5786acfb79df', 0, ''),
(21, 'Galur Hidayat', 'Galur Hidayat', 'galur_hidayat99@gmail.co.id', 'f1587a91382ffadd1d051b79c9f35482', 0, ''),
(22, 'Lazuardi', 'Harjasa Lazuardi', 'harjasa_lazuardi@gmail.com', 'd25ec55e73df9f4fbc978785cec3b0c0', 0, ''),
(23, 'husna', 'Hasna Riyanti', 'hasna_riyanti_s_e_i@yahoo.co.id', 'b83ba8dc98c5fee2a3e5906752d48e31', 0, ''),
(24, 'ihsan prabowo', 'Ihsan Hajarsa Prawobo', 'ihsan_harjuasa@gmail.com', 'b36ac9f04d5ab2c2d0f3bc3e0f311cb7', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `pm_aspek`
--
ALTER TABLE `pm_aspek`
  ADD PRIMARY KEY (`id_aspek`);

--
-- Indeks untuk tabel `pm_bobot`
--
ALTER TABLE `pm_bobot`
  ADD PRIMARY KEY (`selisih`);

--
-- Indeks untuk tabel `pm_faktor`
--
ALTER TABLE `pm_faktor`
  ADD PRIMARY KEY (`id_faktor`),
  ADD KEY `id_aspek` (`id_aspek`);

--
-- Indeks untuk tabel `pm_ranking`
--
ALTER TABLE `pm_ranking`
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indeks untuk tabel `pm_sample`
--
ALTER TABLE `pm_sample`
  ADD PRIMARY KEY (`id_sample`),
  ADD KEY `id_faktor` (`id_faktor`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pm_aspek`
--
ALTER TABLE `pm_aspek`
  MODIFY `id_aspek` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pm_faktor`
--
ALTER TABLE `pm_faktor`
  MODIFY `id_faktor` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pm_sample`
--
ALTER TABLE `pm_sample`
  MODIFY `id_sample` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pm_faktor`
--
ALTER TABLE `pm_faktor`
  ADD CONSTRAINT `pm_faktor_ibfk_1` FOREIGN KEY (`id_aspek`) REFERENCES `pm_aspek` (`id_aspek`);

--
-- Ketidakleluasaan untuk tabel `pm_sample`
--
ALTER TABLE `pm_sample`
  ADD CONSTRAINT `pm_sample_ibfk_1` FOREIGN KEY (`id_faktor`) REFERENCES `pm_faktor` (`id_faktor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
