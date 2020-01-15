-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 02:38 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(500) NOT NULL,
  `alamat_wisata` varchar(900) NOT NULL,
  `lokasi_wisata` varchar(900) NOT NULL,
  `biaya_wisata` int(255) NOT NULL,
  `gambar_wisata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `alamat_wisata`, `lokasi_wisata`, `biaya_wisata`, `gambar_wisata`) VALUES
(1, 'Malioboro', 'Jl. Malioboro Sosromenduran, Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta\r\n', 'YogyaKarta', 1000000, 'malioboro.jpg'),
(3, 'Candi Borobudur', 'Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Magelang, Jawa Tengah.', 'YogyaKarta', 2500000, 'borobudur.jpg'),
(4, 'Bukit Doa', 'Kakaskasen Tiga, Kec. Tomohon Utara, Kota Tomohon, Sulawesi Utara', 'Sulawesi', 500000, 'rumahdoa.jpg'),
(5, 'Tugu Khatulistiwa', 'Jl. Khatulistiwa No.kel, Batu Layang, Pontianak Utara, Kota Pontianak, Kalimantan Barat.', 'Kalimantan', 400000, 'tugukhatulistiwa.jpg'),
(6, 'Taman Mini Indonesia Indah', 'Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta', 'Jakarta', 450000, 'tmii.jpg'),
(7, 'Monas', 'Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta', 'Jakarta', 500000, 'monas.jpg'),
(8, 'Pulau Bunaken', 'Teluk Manado, Sulawesi Utara, Indonesia.', 'Sulawesi', 2500000, 'bunaken.jpg'),
(9, 'Pulau Beras Basah', 'Bontang Lestari, Kalimantan Timur', 'Kalimantan', 2500000, 'pulauberasbasah.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
