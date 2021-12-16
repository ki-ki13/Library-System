-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2021 pada 19.23
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maribaca`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(5) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `id_role` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `deleted_at` date DEFAULT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_admin`, `Nama`, `Email`, `Password`, `id_role`, `created_at`, `deleted_at`, `updated_at`) VALUES
(5, 'Rizki Mahjati', 'rizki@mail.com', '37DB976CC66904F9A485B04111E97F17DB70E067', 1, '2021-11-19', NULL, '0000-00-00'),
(7, 'Amanda', 'amandariz@mail.com', '9054b616dd0ad238cb032f8f9f8fb8445d65360b', 2, '2021-12-02', NULL, '2021-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggotaperpus`
--

CREATE TABLE `anggotaperpus` (
  `ID_anggota` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Jurusan` varchar(255) NOT NULL,
  `Fakultas` varchar(255) NOT NULL,
  `Nohp` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `id_role` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggotaperpus`
--

INSERT INTO `anggotaperpus` (`ID_anggota`, `Nama`, `Jurusan`, `Fakultas`, `Nohp`, `Alamat`, `Email`, `Password`, `id_role`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'rendy susilo', 'seni musik', 'FBS', '09818181', 'antah berantah', 'rensul@mail.com', 'C8A8D3647F276FBFF0D3A126D6260910CE3318E1', 3, '2021-12-02', NULL, '2021-12-02'),
(2, 'Rizki', 'Ilmu Komputer', 'FMIPA', '092828737', 'Pemalang', 'natural@mail.com', '41cbadddcab0c2b5afd35942a6738d5eb56d2bf6', 3, '2021-12-02', NULL, '2021-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID_buku` int(11) NOT NULL,
  `Judul_Buku` varchar(255) NOT NULL,
  `Penerbit` varchar(255) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Tersedia` int(11) NOT NULL,
  `Dipinjam` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `deleted_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID_buku`, `Judul_Buku`, `Penerbit`, `Gambar`, `Tersedia`, `Dipinjam`, `Total`, `created_at`, `deleted_at`, `updated_at`) VALUES
(16, 'Buku Laut Dalam', 'Tenggelam', 'Hujan.jpg', 15, 0, 15, '2021-11-19', '0000-00-00', '2021-12-02'),
(18, 'Buku Tersesat di Hutan', 'Orang utan', 'Hujan.jpg', 10, 0, 10, '2021-11-19', '2021-12-02', '2021-12-02'),
(21, 'Hujan', 'Gramedia', 'hujan.jpg', 12, 0, 12, '2021-12-02', '0000-00-00', '2021-12-02'),
(27, 'bukuku', 'aku', 'learn.jpg', 5, 1, 6, '2021-12-02', '0000-00-00', '2021-12-02'),
(28, 'Buku coba', 'Gramedia', 'hujan.jpg', 18, 0, 18, '2021-12-02', '0000-00-00', '2021-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `nm_modul` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nm_modul`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '2021-12-02 00:00:00', NULL),
(2, 'buku', NULL, '2021-12-02 00:00:00', NULL),
(3, 'anggota', NULL, '2021-12-02 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul_role`
--

CREATE TABLE `modul_role` (
  `id_modul` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `is_create` tinyint(4) DEFAULT NULL,
  `is_read` tinyint(4) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT NULL,
  `is_delete` tinyint(4) DEFAULT NULL,
  `is_saved` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `modul_role`
--

INSERT INTO `modul_role` (`id_modul`, `id_role`, `is_create`, `is_read`, `is_update`, `is_delete`, `is_saved`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, NULL, '2021-12-02 00:00:00', NULL),
(1, 2, NULL, 1, NULL, NULL, NULL, NULL, '2021-12-02 00:00:00', NULL),
(2, 1, NULL, 1, NULL, NULL, NULL, NULL, '2021-12-02 00:00:00', NULL),
(2, 2, 1, 1, 1, 1, 1, NULL, '2021-12-02 00:00:00', NULL),
(2, 3, NULL, 1, 1, NULL, NULL, NULL, '2021-12-02 00:00:00', NULL),
(3, 1, NULL, 1, 1, 1, NULL, NULL, '2021-12-02 00:00:00', NULL),
(3, 2, NULL, 1, NULL, NULL, NULL, NULL, '2021-12-02 00:00:00', NULL),
(3, 3, 1, NULL, NULL, NULL, 1, NULL, '2021-12-02 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID_trbuku` int(11) NOT NULL,
  `ID_anggota` int(11) NOT NULL,
  `ID_buku` int(11) NOT NULL,
  `Tanggal_Pinjam` date NOT NULL,
  `Tanggal_Kembali` date NOT NULL,
  `Status` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`ID_trbuku`, `ID_anggota`, `ID_buku`, `Tanggal_Pinjam`, `Tanggal_Kembali`, `Status`, `created_at`, `updated_at`) VALUES
(3, 2, 16, '2021-12-02', '2021-12-09', 'returned', '2021-12-02', '2021-12-02'),
(4, 2, 16, '2021-12-02', '2021-12-09', 'returned', '2021-12-02', '2021-12-02'),
(6, 2, 27, '2021-12-02', '2021-12-09', 'returned', '2021-12-02', '2021-12-02'),
(7, 2, 28, '2021-12-02', '2021-12-09', 'returned', '2021-12-02', '2021-12-02'),
(8, 1, 27, '2021-12-02', '2021-12-09', 'returned', '2021-12-02', '2021-12-02'),
(9, 1, 27, '2021-12-02', '2021-12-09', 'not returned', '2021-12-02', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nm_role` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nm_role`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Operator', NULL, '2021-12-02 00:00:00', '2021-12-02 00:00:00'),
(2, 'Admin', NULL, '2021-12-02 00:00:00', '2021-12-02 00:00:00'),
(3, 'user', NULL, '2021-12-02 00:00:00', '2021-12-02 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indeks untuk tabel `anggotaperpus`
--
ALTER TABLE `anggotaperpus`
  ADD PRIMARY KEY (`ID_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_buku`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indeks untuk tabel `modul_role`
--
ALTER TABLE `modul_role`
  ADD PRIMARY KEY (`id_modul`,`id_role`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_trbuku`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `anggotaperpus`
--
ALTER TABLE `anggotaperpus`
  MODIFY `ID_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `ID_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `ID_trbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
