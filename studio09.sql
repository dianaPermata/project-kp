-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2023 pada 15.14
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studio09`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `UserName`, `Password`, `updationDate`, `Image`) VALUES
(1, 'Studio09', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-11-25 17:31:36', 'S09-Removebg.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_take` date NOT NULL,
  `jam_take` time NOT NULL,
  `lokasi_take` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `fotografer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id_cu` int(11) NOT NULL,
  `nama_visit` varchar(100) DEFAULT NULL,
  `email_visit` varchar(120) DEFAULT NULL,
  `telp_visit` char(16) DEFAULT NULL,
  `pesan` longtext DEFAULT NULL,
  `tgl_posting` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactusinfo`
--

CREATE TABLE `contactusinfo` (
  `id_info` int(11) NOT NULL,
  `alamat_kami` tinytext DEFAULT NULL,
  `email_kami` varchar(255) DEFAULT NULL,
  `telp_kami` char(20) DEFAULT NULL,
  `instagram_kami` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `instagram_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `contactusinfo`
--

INSERT INTO `contactusinfo` (`id_info`, `alamat_kami`, `email_kami`, `telp_kami`, `instagram_kami`, `id`, `instagram_url`) VALUES
(1, 'Jl. Mayjend Panjaitan No.Rt.06/01, Nglandung Tiga, Nglandung, Kec. Geger, Kabupaten Madiun, Jawa Timur 63171', 'studio09.madiun@gmail.com', '6283115372269', '@studio09.id', 1, 'https://www.instagram.com/studio09.id/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotografer`
--

CREATE TABLE `fotografer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fotografer`
--

INSERT INTO `fotografer` (`id`, `name`) VALUES
(1, 'John Doe'),
(2, 'Jane Smith'),
(3, 'Robert Johnson'),
(4, 'Michael Williams'),
(5, 'Sarah Davis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(120) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_user`, `nama_user`, `email`, `password`, `telp`, `alamat`, `token`, `is_verified`) VALUES
(9, 'Diana Permata Putri', 'dianapermatap2120@gmail.com', '79def03a931664bf3ff6192bdf450388', '081216060546', 'Ds. Karangrejo, Kawedanan, Magetan, Jawa Timur, Indonesia', 'fdc37688f7ed2468884eb6b0100ed35d', 1),
(12, 'al fikri', 'al@mail.com', 'cf44c9d6abeb6e110eadc6d370d9a798', '0248446000', 'Jalan Kyai Hj. Ahmad Dahlan', '8eebeffc4fa224132ab35ad263432558', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `ket_paket` text NOT NULL,
  `foto_paket` text NOT NULL,
  `foto_paket2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`, `ket_paket`, `foto_paket`, `foto_paket2`) VALUES
(1, 'Foto Personal Outdoor', 450000, 'Unlimited Shoot, Unlimited Pose,  2 Jam kerja, all Foto + editing', '251120231816070.jpg', ''),
(2, 'Foto Produk (pakai model)', 350000, '1 Jam Kerja, Minimal Pemotretan 10pcs,  Free Edit Photo, bisa foto indoor maupun outdoor (foto outdoor tambah biaya transportasi 70.000/hari)', '251120231816281.jpg', ''),
(3, 'Foto Studio', 400000, 'Unlimited Shoot, Unlimited Pose, 2 Jam Kerja, File All, free Edit All Photo', '251120231817221.jpg', ''),
(4, 'Foto Wisuda', 550000, 'Unlimited Shoot, Unlimited Pose, 1 Jam Kerja, File All, free Edit All, Maksimal 3-8 orang, 2 Tema, Frame + Cetak 10R', '251120231818053.jpg', ''),
(5, 'Photoshoot Bayi', 500000, 'Unlimited Shoot, 1 Jam Kerja, 5 Edit Foto+Cetak 5R, 1 cetak 12R + Frame, All File', '251120231818496.jpg', ''),
(6, 'Prewedding Paket 1 (Bronze)', 1500000, 'Unlimited Shoot, Unlimited Pose, 6Jam kerja, Free Edit 50 File, Free Flashdisk, Copy All File, Free Cetak 16RW(1), Free Frame, Free Mua', '251120231819300.jpg', ''),
(7, 'Prewedding Paket 2 (Silver)', 2500000, 'Unlimited Shoot, Unlimited Pose, 8 Jam kerja, Free Edit All File, Free Flashdisk, Copy All File,  Free Cetak 16RW(1), Free Frame, Video Teaser 1 Menit, Free 1 Jam Foto Indoor', '251120231820110.jpg', ''),
(8, 'Prewedding Paket 3 (Gold)', 3350000, 'Unlimited Shoot, Unlimited Pose, 1 hari jam kerja, Free Edit All File, Free Flashdisk, Copy All File, Free Cetak 16RW(2), Free frame Minimalis, Video Teaser 1 Menit, Video Reels Instagram, Free 2 Jam Foto Indoor, Print Story Book 10 Page', '251120231820421.jpg', ''),
(9, 'WEDDING Paket 1 (Bronze)', 900000, '6 Jam kerja, All File, Free Edit All Photo, Free Flashdisk, 16Gb, 1 Fotografer, 1 Asisten Fotografer', '251120231821185.jpg', ''),
(10, 'WEDDING Paket 2 (Silver)', 1500000, '7 Jam kerja, All File, Free Edit All Photo, Free Flashdisk, 2 Fotografer, Weding Book 10 Sheet', '251120231821534.jpg', ''),
(11, 'WEDDING Paket 3 (Gold)', 2500000, '7 Jam Kerja, File All, free Edit All Photo, Free Flashdisk 16GB, Video', '251120231822197.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `nama_portofolio` varchar(100) NOT NULL,
  `foto_portofolio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `nama_portofolio`, `foto_portofolio`) VALUES
(1, 'Foto Wedding', '251120231825341.jpg'),
(2, 'Photoshot Bayi', '251120231826386.jpg'),
(3, 'Foto Personal Outdoor', '251120231823108.jpg'),
(4, 'Foto Produk/Endorse', '251120231824272.jpg'),
(5, 'Foto Wisuda', '251120231826110.jpg'),
(6, 'Foto Studio', '251120231825052.jpg'),
(7, 'Foto Prewedding', '261120230113242.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trx` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tgl_trx` date NOT NULL,
  `stt_trx` varchar(50) NOT NULL,
  `tgl_take` date NOT NULL,
  `jam_take` varchar(20) NOT NULL,
  `catatan` text NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bukti_bayar` text NOT NULL,
  `ubah_tgl` int(1) NOT NULL,
  `fotografer` varchar(255) NOT NULL,
  `lokasi_take` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id_cu`);

--
-- Indeks untuk tabel `contactusinfo`
--
ALTER TABLE `contactusinfo`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `fotografer`
--
ALTER TABLE `fotografer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trx`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id_cu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `contactusinfo`
--
ALTER TABLE `contactusinfo`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fotografer`
--
ALTER TABLE `fotografer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
