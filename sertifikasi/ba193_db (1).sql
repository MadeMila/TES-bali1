-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2021 pada 01.05
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ba193_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(4) NOT NULL,
  `id_pegawai` int(4) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_pegawai`, `jam_masuk`, `jam_keluar`, `tanggal`) VALUES
(1001, 1100, '07:30:00', '15:34:00', '2021-05-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(4) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_cuti` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `bulan`, `tahun`, `jml_cuti`) VALUES
(1111, 'April', 2022, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dapertemen`
--

CREATE TABLE `dapertemen` (
  `id_dpr` int(4) NOT NULL,
  `nama_dpr` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dapertemen`
--

INSERT INTO `dapertemen` (`id_dpr`, `nama_dpr`, `keterangan`, `qty`) VALUES
(1001, 'Sales & Marketing', ' Tenaga penjual & pemasaran', 5),
(1002, 'HRD (Human Resource Departemen)', 'Memonitor', 1),
(1003, 'Production', 'Mengelola Barang', 20),
(1004, 'Departemen Accounting', 'Bagian yang mengatur keuangan perusahaan', 2),
(1005, 'Warehouse', 'Mengatur mengenai ketersediaan', 5),
(1006, 'IT (Information Technology)', 'Bidang jaringan dan komputerisasi', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `notlp` int(15) NOT NULL,
  `nip` int(50) NOT NULL,
  `gajipokok` int(50) NOT NULL,
  `tunjangan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `tanggal`, `notlp`, `nip`, `gajipokok`, `tunjangan`) VALUES
(1, '2021-04-29', 865432, 1111, 2000000, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `notlp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `alamat`, `notlp`) VALUES
(1001, 'Mrs.D', 'Jl.Duta,No.50', 865432);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(4) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `no_tlp` int(250) NOT NULL,
  `pesanan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `no_tlp`, `pesanan`) VALUES
('P001', 'Dora', 987654, 'Burger');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(4) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `total` int(250) NOT NULL,
  `metode_bayar` varchar(250) NOT NULL,
  `id_pelanggan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `tanggal_bayar`, `total`, `metode_bayar`, `id_pelanggan`) VALUES
(2001, '2021-10-08', 365, 'Cash', 'P001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(4) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `harga` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `deskripsi`, `foto`, `tgl`, `harga`) VALUES
(1001, 'Meat Lover merupakan kuliner pizza dari Pizza Hut yang berisi topping irisan sosis sapi, daging sapi cincang, burger sapi, sosis ayam.', 'pizza.jpeg', '2021-10-15', 150),
(1002, 'Spaghetti Bolognese', 'pasta.jpg', '2021-10-12', 158);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(4) NOT NULL,
  `nama_proyek` varchar(255) NOT NULL,
  `lokasi_proyek` varchar(255) NOT NULL,
  `id_dpr` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `nama_proyek`, `lokasi_proyek`, `id_dpr`) VALUES
(1, 'Proyek ', 'Rumah', 1002),
(2, 'Proyek Senjata', 'sgasdg', 2334),
(3, 'Gedung', 'sdgga', 2339);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(4) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `pass_word`, `nama_user`, `kota`, `foto`) VALUES
(2, 'Mila', 'mila', 'Made Mila', 'Denpasar', 'admin2.png'),
(5, 'Josep', 'admin', 'Josep', 'Jakarta', 'mousse.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `dapertemen`
--
ALTER TABLE `dapertemen`
  ADD PRIMARY KEY (`id_dpr`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1224;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5556;

--
-- AUTO_INCREMENT untuk tabel `dapertemen`
--
ALTER TABLE `dapertemen`
  MODIFY `id_dpr` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT untuk tabel `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1214;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3435;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1236;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
