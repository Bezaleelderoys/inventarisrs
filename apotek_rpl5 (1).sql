-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2024 at 03:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek_rpl5`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `iddetailtransaksi` int(4) NOT NULL,
  `idtransaksi` int(3) NOT NULL,
  `idobat` int(4) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `hargasatuan` double NOT NULL,
  `totalharga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`iddetailtransaksi`, `idtransaksi`, `idobat`, `jumlah`, `hargasatuan`, `totalharga`) VALUES
(3821, 1, 5, 1, 7000, 7000),
(3822, 2, 3, 1, 5500, 5500),
(3823, 3, 4, 1, 13000, 13000),
(3824, 4, 2, 1, 3200, 3200),
(3825, 5, 4, 1, 13000, 13000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `idkaryawan` int(4) NOT NULL,
  `namakaryawan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`idkaryawan`, `namakaryawan`, `alamat`, `telp`) VALUES
(1, 'Muhammad Iqbal', 'Jalan Pulau Enggano', '08997772882'),
(2, 'Adi Kusuma', 'Jalan Pulau Saelus no 80', '0874910203'),
(3, 'Fernando Simatupang', 'Jalan Nusa Kambangan No 99', '08857491923'),
(4, 'Arya Faisal', 'Jalan Pulau Ayu No 28', '0883918274'),
(5, 'Muhammad Sufyan', 'Jalan Teuku Umar No 100', '08977384912');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(65) NOT NULL,
  `leveluser` varchar(50) NOT NULL,
  `idkaryawan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `leveluser`, `idkaryawan`) VALUES
('arya.faisal', 'admin123', 'Admin', 4),
('fernandos', 'admin123', 'Admin', 3),
('iqbal123', 'iqbal123', 'Admin', 1),
('k.adi', 'adikusuma1', 'Admin', 2),
('msufyan', 'aksdoe929a', 'Admin', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` int(4) NOT NULL,
  `id_supplier` int(4) NOT NULL,
  `namaobat` varchar(100) NOT NULL,
  `kategoriobat` varchar(50) NOT NULL,
  `hargajual` double NOT NULL,
  `hargabeli` double NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `id_supplier`, `namaobat`, `kategoriobat`, `hargajual`, `hargabeli`, `stok_obat`, `keterangan`) VALUES
(1, 1, 'Bodrex Extra 4 Kaplet', 'Kaplet', 2180, 2180, 33, 'Sakit kepala adalah rasa sakit atau nyeri di kepala, yang bisa muncul secara bertahap atau mendadak. Nyeri bisa muncul di salah satu sisi kepala, atau di seluruh bagian kepala. Sakit kepala bisa membuat kepala terasa berdenyut, atau seperti terlilit kencang oleh tali. Sakit kepala bisa terasa ringan hingga berat, dan dapat berlangsung beberapa jam hingga berhari-hari. Umumnya sakit kepala dapat diobati dengan obat-obatan antinyeri yang dijual bebas. Salah satu obat yang dapat Anda konsumsi adalah Bodrex.'),
(2, 2, 'Mixagrip Strip Isi 4 Obat', 'Kaplet', 3200, 3200, 22, 'Indikasi Umum\r\nMenyembuhkan gejala flu seperti bersin-bersin, hidung berair, hidung tersumbat, demam, sakit kepala, dan nyeri otot.\r\n\r\nDeskripsi\r\nMIXAGRIP FLU adalah obat yang digunakan untuk meringankan gejala-gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin.\r\n\r\nKategori\r\nBatuk dan Flu\r\n\r\nKomposisi\r\nParacetamol 500 mg, Phenylephrine HCl 15 mg, Chlorpheniramin maleate 2 mg\r\n\r\nDosis\r\nDewasa : 3 - 4 kali per hari 1 - 2 tablet. Anak : 3 - 4 kali per hari 1/2 - 1 tablet\r\n\r\nAturan Pakai\r\nSesudah makan\r\n\r\nKemasan\r\nDus, 25 Catch Cover @ 1 Strip @ 4 kaplet'),
(3, 3, 'Omeprazole 20 Mg', 'Pil', 5500, 5500, 123, 'Omeprazole obat apa? Omeprazole Novell merupakan obat generik dengan zat aktif Omeprazole yang digunakan untuk mengatasi penyakit-penyakit yang disebabkan oleh kelebihan produksi asam lambung, seperti sakit maag dan tukak lambung.\r\n\r\nMekanisme kerja dari Omeprazole yaitu: • Omeprazole termasuk golongan PPI (Proton Pump Inhibitor) yang efektif bekerja dengan menghambat sekresi asam lambung melalui sistem enzim adenosin trifosfatase hidrogen-kalium (pompa proton) dari sel parietal lambung. \r\n\r\nKomposisi\r\n\r\nOmeprazole\r\n\r\nKemasan\r\n\r\n1 Dos isi 3 Strip x 10 Tablet\r\n\r\nIndikasi / Manfaat / Kegunaan :\r\n\r\nTerapi jangka pendekulkus duodenal dan lambung. Refluks esofagitis, sindroma Zollinger-Ellison\r\n\r\nSub Kategori\r\n\r\nAntasid, Obat Antirefluks & Antiulserasi'),
(4, 4, 'Panadol Paracetamol Obat', 'Kaplet', 13000, 13000, 12, 'aplet penurun panas dan pereda nyeri yang mengandung parasetamol\r\n• Dapat membantu menurunkan demam\r\n• Dapat membantu meringankan rasa sakit seperti sakit kepala dan sakit gigi\r\n• Dapat membantu meringankan sakit pada otot'),
(5, 5, 'Dermacolin 10 Tablet', 'Tablet', 7000, 7000, 22, 'Deskripsi DEMACOLIN 10 TABLET merupakan obat yang mengandung Paracetamol, Pseudoephedrine HCl, dan Chlorpheniramine maleat. Obat ini bekerja sebagai analgesik-antipiretik, antihistamin dan dekongestan hidung, dimana obat ini digunakan untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin. Indikasi Umum Obat ini digunakan untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin. Komposisi Paracetamol 500 mg, Pseudoefedrin HCL 7.5 mg, Klorfeniramin maleat 2 mg. Dosis Dewasa : 1 tablet 3 kali per hari. Anak 6-12 tahun : 0.5 tablet 3 kali sehari. Aturan Pakai Sebelum atau sesudah makan. Produsen Coronet Crown Nomor Izin Edar: BPOM: DTL7204217010A1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `idpelanggan` int(4) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `usia` int(3) NOT NULL,
  `buktifotoresep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`idpelanggan`, `namalengkap`, `alamat`, `telp`, `usia`, `buktifotoresep`) VALUES
(1, 'Bezaleel Elderoy Sulastiyo', 'Jalan Tukad Citarum', '08833919274', 17, '129230.jpeg'),
(2, 'Aurelio Fransiskus Sinarta', 'Jalan Pulau Ayu No 27', '08771298334', 17, '93840.jpeg'),
(3, 'Muhammad Jaffan Hanindito', 'Jalan Patih Jelantik', '08744219335', 18, '759819.jpeg'),
(4, 'M. Hidayatullah', 'Jalan Nangka Selatan No 90', '08774912398', 20, '38520.jpeg'),
(5, 'Henri Saputra', 'Jl Pulau Buton No 100', '089371274945', 18, 'asdjoa.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(4) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `perusahaan`, `telp`, `alamat`, `keterangan`) VALUES
(1, 'PT Semua Obat', '08917738849', 'Jl Tukad Citarum No. 1 Denpasar Selatan', 'Supplier obat obatan'),
(2, 'PT Kimia Farma', '087722388991', 'Jalan Tukad Citarum No 2 Denpasar Selatan', 'supplier obat sirup'),
(3, 'PT Rajawali Obat', '087733992299', 'Jalan Tukad Citarum No 30 Denpasar', 'supplir obat pak rusdi\r\n'),
(4, 'PT Fransiskus Abadi', '083199988774', 'Jalan Pulau Bungin No 24', 'supplier obat'),
(5, 'PT Indobat', '08887722883', 'Jalan Raya Kuta no 151', 'obat obatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `idtransaksi` int(4) NOT NULL,
  `idpelanggan` int(4) NOT NULL,
  `idkaryawan` int(4) NOT NULL,
  `tgltransaksi` date NOT NULL,
  `kategoripelanggan` varchar(20) NOT NULL,
  `totalbayar` double NOT NULL,
  `bayar` double NOT NULL,
  `kembali` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`idtransaksi`, `idpelanggan`, `idkaryawan`, `tgltransaksi`, `kategoripelanggan`, `totalbayar`, `bayar`, `kembali`) VALUES
(1, 1, 1, '2024-08-10', 'Reguler', 7000, 10000, 3000),
(2, 2, 2, '2024-08-09', 'Reguler', 5500, 6000, 500),
(3, 3, 3, '2024-07-16', 'Reguler', 13000, 15000, 2000),
(4, 4, 4, '2024-08-10', 'Reguler', 3200, 5000, 1800),
(5, 5, 5, '2024-08-10', 'Reguler', 20000, 20000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`iddetailtransaksi`),
  ADD KEY `FK_idobat` (`idobat`),
  ADD KEY `FK_idtransaksi` (`idtransaksi`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`idkaryawan`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `idkaryawan` (`idkaryawan`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `FK_supplier` (`id_supplier`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `FK_karyawan` (`idkaryawan`),
  ADD KEY `FK_pelanggan` (`idpelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `iddetailtransaksi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3826;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `idkaryawan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `idpelanggan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `idtransaksi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `FK_idobat` FOREIGN KEY (`idobat`) REFERENCES `tb_obat` (`id_obat`),
  ADD CONSTRAINT `FK_idtransaksi` FOREIGN KEY (`idtransaksi`) REFERENCES `tb_transaksi` (`idtransaksi`);

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `FK_login` FOREIGN KEY (`idkaryawan`) REFERENCES `tb_karyawan` (`idkaryawan`);

--
-- Constraints for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD CONSTRAINT `FK_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `tb_supplier` (`id_supplier`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `FK_karyawan` FOREIGN KEY (`idkaryawan`) REFERENCES `tb_karyawan` (`idkaryawan`),
  ADD CONSTRAINT `FK_pelanggan` FOREIGN KEY (`idpelanggan`) REFERENCES `tb_pelanggan` (`idpelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
