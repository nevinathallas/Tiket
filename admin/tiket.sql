-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2021 pada 08.52
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `address`, `phone`, `gender`, `username`) VALUES
(1, 'Ferdi', 'Gianyar', '85877203168', 'Laki-laki', 'ferdifer'),
(2, 'a', 'sruwen', '9891280139', 'Laki-laki', 'a'),
(3, 'A B C d', 'Salatiga', '85801874452', 'Laki-laki', 'abcd'),
(5, 'Nikolas', 'Jl. pandeglang', '8191184902', 'Laki-laki', 'nicoco');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reserv`
--

CREATE TABLE `reserv` (
  `id_reserv` int(11) NOT NULL,
  `reserv_code` decimal(10,0) NOT NULL,
  `reserv_at` text NOT NULL,
  `reserv_date` date NOT NULL,
  `seat` decimal(10,0) NOT NULL,
  `depart` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reserv`
--

INSERT INTO `reserv` (`id_reserv`, `reserv_code`, `reserv_at`, `reserv_date`, `seat`, `depart`, `price`, `id_user`, `id_rute`, `status`, `description`) VALUES
(18, '486125379', '', '2020-10-21', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', ''),
(19, '582917463', '2020-10-15', '2020-10-21', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', ''),
(47, '658437912', '', '2020-10-21', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', ''),
(48, '658437912', '', '2020-10-21', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', ''),
(49, '658437912', '', '2020-10-21', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', ''),
(50, '658437912', '', '2020-10-21', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', ''),
(51, '691835247', '', '2020-10-22', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', 'Proses'),
(52, '691835247', '', '2020-10-22', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', 'Proses'),
(53, '421379568', '', '2020-10-22', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', 'Proses'),
(54, '875239416', '', '2020-10-22', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', 'Proses'),
(55, '312796485', '', '2020-10-22', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', 'Proses'),
(56, '314628975', '', '2020-10-22', '70', '2020-10-09', '6500000', 6, 36, 'Selesai', '9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(11) NOT NULL,
  `depart` date NOT NULL,
  `rute_from` text NOT NULL,
  `rute_to` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `id_trans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id_rute`, `depart`, `rute_from`, `rute_to`, `price`, `id_trans`) VALUES
(36, '2020-10-09', 'Jakarta', 'Bali', '6500000', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans`
--

CREATE TABLE `trans` (
  `id_trans` int(11) NOT NULL,
  `code` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `seat` text NOT NULL,
  `id_trans_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `trans`
--

INSERT INTO `trans` (`id_trans`, `code`, `description`, `seat`, `id_trans_type`) VALUES
(10, '241358679', 'Batik Air', '12', 9),
(12, '749361258', 'Lion air', '70', 9),
(13, '937214685', 'Citilink', '90', 10),
(14, '584217963', 'Sriwijaya Air', '90', 9),
(15, '983472165', 'Garuda Indonesia 2', '70', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_trans`
--

CREATE TABLE `type_trans` (
  `id_trans_type` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type_trans`
--

INSERT INTO `type_trans` (`id_trans_type`, `description`) VALUES
(9, 'Ekonomi Class'),
(10, 'Bussines Class'),
(11, 'First Class');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `fullname`) VALUES
(3, 'a', 'a', 'a'),
(4, 'abcd', 'abcd', 'A B C d'),
(5, 'qwerty', 'qwerty', 'QWERTY'),
(6, 'najwa', 'najwa2212', 'Shanata Najwa'),
(8, 'khusyasy', '12345', 'Luthfi Khusyasy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `reserv`
--
ALTER TABLE `reserv`
  ADD PRIMARY KEY (`id_reserv`),
  ADD KEY `id_reserv` (`id_reserv`),
  ADD KEY `id_user` (`id_user`,`id_rute`),
  ADD KEY `id_rute` (`id_rute`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_trans` (`id_trans`);

--
-- Indeks untuk tabel `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_trans` (`id_trans`),
  ADD KEY `id_trans_type` (`id_trans_type`);

--
-- Indeks untuk tabel `type_trans`
--
ALTER TABLE `type_trans`
  ADD PRIMARY KEY (`id_trans_type`),
  ADD KEY `id_trans_type` (`id_trans_type`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `reserv`
--
ALTER TABLE `reserv`
  MODIFY `id_reserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `trans`
--
ALTER TABLE `trans`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `type_trans`
--
ALTER TABLE `type_trans`
  MODIFY `id_trans_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `reserv`
--
ALTER TABLE `reserv`
  ADD CONSTRAINT `reserv_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `reserv_ibfk_3` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`);

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_ibfk_1` FOREIGN KEY (`id_trans`) REFERENCES `trans` (`id_trans`);

--
-- Ketidakleluasaan untuk tabel `trans`
--
ALTER TABLE `trans`
  ADD CONSTRAINT `trans_ibfk_1` FOREIGN KEY (`id_trans_type`) REFERENCES `type_trans` (`id_trans_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
