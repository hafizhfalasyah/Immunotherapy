-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2023 pada 05.13
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
-- Database: `data_immunotherapy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_immuno`
--

CREATE TABLE `tabel_immuno` (
  `no` int(5) NOT NULL,
  `age` varchar(255) NOT NULL,
  `warts` varchar(255) NOT NULL,
  `induration` varchar(255) NOT NULL,
  `treatment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_immuno`
--

INSERT INTO `tabel_immuno` (`no`, `age`, `warts`, `induration`, `treatment`) VALUES
(1, '22', '14', '50', '1'),
(2, '15', '2', '70', '1'),
(3, '16', '2', '25', '1'),
(4, '22', '14', '50', '1'),
(5, '20', '6', '8', '1'),
(6, '15', '3', '7', '1'),
(7, '35', '2', '6', '1'),
(8, '28', '4', '2', '1'),
(9, '19', '2', '8', '1'),
(10, '32', '6', '5', '0'),
(11, '33', '2', '3', '1'),
(12, '17', '12', '7', '1'),
(13, '15', '1', '7', '0'),
(14, '15', '12', '7', '1'),
(15, '16', '7', '6', '1'),
(16, '33', '2', '8', '1'),
(17, '26', '6', '5', '1'),
(18, '23', '10', '3', '1'),
(19, '15', '19', '7', '1'),
(20, '26', '2', '6', '1'),
(21, '22', '3', '3', '1'),
(22, '19', '2', '7', '1'),
(23, '26', '6', '9', '0'),
(24, '25', '2', '7', '1'),
(25, '17', '4', '7', '1'),
(26, '27', '2', '5', '1'),
(27, '24', '10', '45', '1'),
(28, '15', '6', '25', '0'),
(29, '34', '12', '50', '0'),
(30, '20', '18', '2', '1'),
(31, '38', '1', '50', '1'),
(32, '23', '2', '70', '1'),
(33, '48', '7', '25', '1'),
(34, '24', '1', '30', '1'),
(35, '33', '3', '8', '1'),
(36, '34', '7', '7', '0'),
(37, '41', '11', '6', '0'),
(38, '29', '3', '2', '1'),
(39, '22', '5', '8', '1'),
(40, '45', '4', '5', '0'),
(41, '22', '9', '3', '1'),
(42, '35', '10', '7', '1'),
(43, '34', '1', '7', '0'),
(44, '49', '2', '7', '0'),
(45, '19', '5', '6', '1'),
(46, '21', '3', '8', '1'),
(47, '26', '13', '5', '1'),
(48, '51', '2', '3', '1'),
(49, '19', '6', '7', '1'),
(50, '38', '14', '6', '0'),
(51, '36', '10', '3', '1'),
(52, '52', '5', '7', '1'),
(53, '49', '4', '9', '1'),
(54, '23', '2', '7', '1'),
(55, '45', '8', '7', '1'),
(56, '54', '13', '5', '1'),
(57, '47', '3', '45', '1'),
(58, '53', '1', '25', '1'),
(59, '56', '7', '50', '0'),
(60, '27', '3', '2', '1'),
(61, '47', '14', '50', '1'),
(62, '19', '8', '70', '1'),
(63, '33', '5', '25', '1'),
(64, '15', '12', '30', '1'),
(65, '17', '2', '8', '1'),
(66, '29', '12', '7', '1'),
(67, '27', '8', '6', '0'),
(68, '51', '6', '2', '1'),
(69, '35', '4', '8', '1'),
(70, '47', '8', '5', '0'),
(71, '43', '1', '3', '1'),
(72, '15', '4', '7', '1'),
(73, '33', '7', '7', '0'),
(74, '51', '1', '7', '1'),
(75, '45', '9', '6', '1'),
(76, '47', '13', '8', '1'),
(77, '18', '5', '5', '1'),
(78, '46', '8', '3', '1'),
(79, '43', '7', '7', '1'),
(80, '28', '3', '6', '0'),
(81, '30', '2', '3', '1'),
(82, '16', '11', '7', '1'),
(83, '42', '8', '9', '0'),
(84, '15', '1', '7', '1'),
(85, '53', '6', '7', '1'),
(86, '40', '8', '5', '1'),
(87, '38', '8', '45', '1'),
(88, '46', '4', '25', '0'),
(89, '32', '9', '50', '0'),
(90, '23', '6', '2', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_immuno`
--
ALTER TABLE `tabel_immuno`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_immuno`
--
ALTER TABLE `tabel_immuno`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
