-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 02:32 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelsqonita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL,
  `role` varchar(6) NOT NULL,
  `no_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `email`, `image`, `password`, `is_active`, `date_created`, `role`, `no_telp`) VALUES
('ADM07', 'Adit', 'masteringangel@gmail.com', 'default.png', '$2y$10$7R4BgxkXJ.SN4Zwx7mTtOOZOXWFBoOI9kcJyO8zH2pxKRP9OKKjyK', 1, '2019-07-10', 'Admin', ''),
('ADM08', 'nada', 'nada@gmail.com', 'default.png', '$2y$10$jgWMUyoeihMCu/ijk7bLp.hzg04p5paY4znYnLR834K5Oa60IXI.a', 1, '2019-07-14', 'Admin', '0812345678912'),
('ADM09', 'Danang', 'admin@admin.com', 'default.png', '$2y$10$dXTj2bMDtLbF/hhVYxhFDOle7LwUJw.y2w9.Hbc6d3GRpao8vo6Qq', 1, '2019-07-18', 'Admin', '081908311520');

-- --------------------------------------------------------

--
-- Table structure for table `detailpembelian`
--

CREATE TABLE `detailpembelian` (
  `id_detail` varchar(8) NOT NULL,
  `id_pembelian` varchar(8) NOT NULL,
  `id_produk` varchar(5) NOT NULL,
  `namaPaket` varchar(128) NOT NULL,
  `hargaPaket` double NOT NULL,
  `jumbel` int(5) NOT NULL,
  `namaPenumpang` varchar(50) NOT NULL,
  `nikPenumpang` varchar(20) NOT NULL,
  `telfPenumpang` varchar(14) NOT NULL,
  `tglBerangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpembelian`
--

INSERT INTO `detailpembelian` (`id_detail`, `id_pembelian`, `id_produk`, `namaPaket`, `hargaPaket`, `jumbel`, `namaPenumpang`, `nikPenumpang`, `telfPenumpang`, `tglBerangkat`) VALUES
('DP001', 'PEM001', 'PR017', 'Umroh Plus Turkey', 31700000, 1, 'aditya', '123456789', '', '2019-01-17'),
('DP002', 'PEM002', 'PR021', 'Moslem Tour West Europe', 28500000, 2, 'Aditya', '123456789', '', '2019-07-10'),
('DP002', 'PEM002', 'PR021', 'Moslem Tour West Europe', 28500000, 2, 'Nada', '123456789', '', '2019-07-10'),
('DP003', 'PEM003', 'PR019', 'Romantic Winter Korea', 13500000, 1, 'aditya', '123456789', '', '2019-01-09'),
('DP004', 'PEM004', 'PR017', 'Umroh Plus Turkey', 31700000, 1, 'Aditya', '1234567891234567', '', '2019-01-17'),
('DP005', 'PEM005', 'PR021', 'Moslem Tour West Europe', 28500000, 1, 'Aditya', '1234567891234567', '0812345678912', '2019-07-10'),
('DP006', 'PEM006', 'PR018', 'Umroh Reguler', 24900000, 1, 'Nada Zahira', '1234567899876543', '0812345678912', '2019-07-10'),
('DP007', 'PEM007', 'PR019', 'Romantic Winter Korea', 13500000, 1, 'Aditya', '1234567891234567', '0812345678912', '2019-01-09'),
('DP008', 'PEM008', 'PR018', 'Umroh Reguler', 24900000, 1, 'nada', '1234567891234123', '0812345678912', '2019-07-10'),
('DP009', 'PEM009', 'PR017', 'Umroh Plus Turkey', 31700000, 1, 'Aditya', '1234567891234567', '08123456789123', '2019-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `name`) VALUES
('KT005', 'Haji Smart'),
('KT006', 'Umroh Plus'),
('KT007', 'Umroh Reguler'),
('KT008', 'Halal Tour'),
('KT009', 'Tabungan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(8) NOT NULL,
  `id_pembelian` varchar(8) NOT NULL,
  `nama_penyetor` varchar(50) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `jumlah_pembayaran` double NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `kode_pembayaran` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama_penyetor`, `bank`, `jumlah_pembayaran`, `tanggal_pembayaran`, `bukti_pembayaran`, `kode_pembayaran`) VALUES
('BYR001', 'PEM001', 'Aditya', 'BCA', 5000000, '2019-07-10', 'photo_default6.png', 'zA2xH'),
('BYR002', 'PEM002', 'Nada', 'BNI', 5000000, '2019-07-10', 'photo_default7.png', 'HhUGQ'),
('BYR003', 'PEM006', 'Nada Zahira', 'BNI', 5000000, '2019-07-14', 'photo_default8.png', 'htkX2');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` varchar(8) NOT NULL,
  `id_produk` varchar(8) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `total_pembelian` double NOT NULL,
  `status_pembelian` varchar(10) NOT NULL,
  `kode_pembelian` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_produk`, `id_user`, `tgl_pembelian`, `total_pembelian`, `status_pembelian`, `kode_pembelian`) VALUES
('PEM001', 'PR017', 'USR010', '2019-07-10', 31700000, 'Lunas', 'zA2xH'),
('PEM002', 'PR021', 'USR010', '2019-07-10', 57000000, 'Lunas', 'HhUGQ'),
('PEM003', 'PR019', 'USR010', '2019-07-12', 13500000, 'Pending', 'vrfx8'),
('PEM004', 'PR017', 'USR010', '2019-07-13', 31700000, 'Pending', '2yswz'),
('PEM005', 'PR021', 'USR010', '2019-07-13', 28500000, 'Pending', 'V2NHC'),
('PEM006', 'PR018', 'USR011', '2019-07-14', 24900000, 'Lunas', 'htkX2'),
('PEM007', 'PR019', 'USR011', '2019-07-14', 13500000, 'Pending', 'AYbwm'),
('PEM008', 'PR018', 'USR010', '2019-07-17', 24900000, 'Pending', 'WuKXc'),
('PEM009', 'PR017', 'USR010', '2019-07-17', 31700000, 'Pending', 'vh7Y9');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(5) NOT NULL,
  `id_kat` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kat`, `nama`, `stok`, `harga`, `gambar`) VALUES
('PR016', 'KT005', 'Haji Smart', 0, 0, 'WhatsApp_Image_2019-06-28_at_14_07_051.jpeg'),
('PR017', 'KT006', 'Umroh Plus Turkey', 5, 31700000, 'produk_TA_190621_00011.jpg'),
('PR018', 'KT007', 'Umroh Reguler', 8, 24900000, 'umroh2.jpeg'),
('PR019', 'KT008', 'Halal Tour Korea', 7, 13500000, 'tour_korea.jpeg'),
('PR020', 'KT008', 'Halal Tour Turkey', 8, 18700000, 'tour_turkey.jpeg'),
('PR021', 'KT008', 'Halal Tour West Europe', 7, 28500000, 'west_europe.jpeg'),
('PR022', 'KT008', 'Halal Tour Morocco - Spain', 0, 0, 'morocco_spain.jpeg'),
('PR023', 'KT008', 'Halal Tour Aqsho', 0, 0, 'Tour_Aqsho.jpeg'),
('PR024', 'KT006', 'Umroh Plus Jordan - Jerusalem', 0, 0, 'Tour_Aqsho1.jpeg'),
('PR025', 'KT008', 'Halal Tour Japan', 0, 0, 'tour_japan.jpeg'),
('PR026', 'KT009', 'Tabungan Umroh', 0, 0, 'WhatsApp_Image_2019-07-16_at_18_32_20.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `produktanggal`
--

CREATE TABLE `produktanggal` (
  `id_tanggal` varchar(5) NOT NULL,
  `id_produk` varchar(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produktanggal`
--

INSERT INTO `produktanggal` (`id_tanggal`, `id_produk`, `tanggal`) VALUES
('KB001', 'PR016', '2019-07-09'),
('KB002', 'PR017', '2019-01-17'),
('KB003', 'PR018', '2019-07-10'),
('KB004', 'PR019', '2019-01-09'),
('KB005', 'PR020', '2018-04-12'),
('KB006', 'PR021', '2019-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id_token` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `no_telf` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL,
  `role` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `image`, `password`, `no_telf`, `alamat`, `is_active`, `date_created`, `role`) VALUES
('USR010', 'aditya', 'masteringangel@gmail.com', 'default.png', '$2y$10$XdvCILN1xpTw.S5jgJyW..ORBcvcHTbc7K3PwdEZtNVzOB3c90qUO', '2147483647', 'Depok', 1, '2019-07-10', 'Member'),
('USR011', 'Nada', 'ndeeteuk97@gmail.com', 'avatar_cewe.jpg', '$2y$10$/cja8An1.popLfpQYQMrGO6l7/dPbPQb3G3j.ccMkUh8A99nzDCh6', '08123456789123', 'Beji, Depok', 1, '2019-07-14', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_detail` (`id_detail`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kat` (`id_kat`);

--
-- Indexes for table `produktanggal`
--
ALTER TABLE `produktanggal`
  ADD PRIMARY KEY (`id_tanggal`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
