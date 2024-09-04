-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 31 Agu 2024 pada 05.46
-- Versi server: 5.7.39
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_kontak`
--

CREATE TABLE `form_kontak` (
  `nama` varchar(20) NOT NULL,
  `nim` int(111) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kelas` varchar(120) NOT NULL,
  `pesan` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `form_kontak`
--

INSERT INTO `form_kontak` (`nama`, `nim`, `email`, `jenis_kelamin`, `kelas`, `pesan`) VALUES
('sadsa', 1321313, 'rizalfachmii@gmail.com', 'perempuan', 'T3A', 'sdsad'),
('saxsx', 121212, 'rizalfachmii@gmail.com', 'perempuan', 'T3A', 'sxxs'),
('Rizal Fahmiii', 121212, 'rizalfachmii@gmail.com', 'perempuan', 'T3A', 'zxzX'),
('Rizal Fahmiii', 121212, 'rizalfachmii@gmail.com', 'perempuan', 'T3A', 'zxzX'),
('Rizal Fahmiii', 121212, 'rizalfachmii@gmail.com', 'perempuan', 'T3A', 'zxzX'),
('Rizal Fahmiii', 121213, 'rizalfachmii@gmail.com', 'perempuan', 'T3A', 'awewd    \r\n            Contact Us!'),
('Rizal Fahmiiias', 121212, 'kortescarlos27@gmail.com', 'perempuan', 'T3A', 'KU DAlddnasndsaklc. lkcancpowcnponepcnopaeocpoce\r\ncascs');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
