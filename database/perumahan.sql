-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2020 pada 03.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perumahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_warga`
--

CREATE TABLE `data_warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `penyewa` varchar(100) NOT NULL,
  `blok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_warga`
--

INSERT INTO `data_warga` (`id`, `nama`, `penyewa`, `blok`) VALUES
(1, 'MAKBUL ARSYAD', '-', 'A/4'),
(2, 'ANDRY SOFYAN', '-', 'A/5'),
(3, 'H. LUKMAN HAKIM', '-', 'A/6'),
(4, 'RICHARD', 'PUPUK KALTIM', 'A/7'),
(6, 'H. MUHAMMAD', '-', 'A/8'),
(7, 'ANDRIANTO', '-', 'A/9'),
(8, 'JONI', '-', 'A/10'),
(9, 'JUSUF', '-', 'A/11'),
(10, 'RUSLI', '-', 'A/12'),
(11, 'DONNY WIJADI', '-', 'A/15'),
(12, 'CITRA', '-', 'A/16'),
(13, 'INDRA IRAWAN', '-', 'A/18'),
(14, 'MUH, JUFRI EDI', '-', 'A/19'),
(15, 'ELLY ROSANA IJOPUTERA', '-', 'A/20'),
(16, 'ITO EFENDY', '-', 'A/20A'),
(17, 'HORIS TAUFID ', '-', 'A/20B'),
(18, 'DR, MUHSIN ZUBEIDI', '-', 'A/21-22'),
(19, 'JEMMI OCI', '-', 'A/25'),
(20, 'PENDETA TITUS', '-', 'A/26'),
(21, 'SATAR ARAFAH', '-', 'A/27'),
(22, 'ROBERT', '-', 'A/28'),
(23, 'HENDRIK JONES', '-', 'A/29'),
(24, 'H. MISBAH', '-', 'B/1'),
(25, 'JOICE', '-', 'B/2'),
(26, 'SELVI', '-', 'B/3'),
(27, 'KULES YANUAR, SE', '-', 'B/4'),
(28, 'AKBA RIDWAN', '-', 'B/5'),
(29, 'HENDRA', '-', 'B/6'),
(30, 'DR. RIDWAN', '-', 'B/8'),
(31, 'H.M. NATSIR, SE', '-', 'B/11'),
(32, 'JR. MARCUS NERI', '-', 'B/12'),
(33, 'FERY TITO', '-', 'B/9-10'),
(34, 'MUH. IDRIS HARIS', '-', 'B/14'),
(35, 'JUFRI', '-', 'B/15A'),
(36, 'ANDI IRWAN', '-', 'B/15B'),
(37, 'DR. CITRA KESUMASARI', 'TAUFIK/MIRNA', 'B/16'),
(38, 'JEMI', '-', 'C/2'),
(39, 'H. ANWAR YUSUF, SE', '-', 'C/3'),
(40, 'WIDIAWATI', '-', 'C/5'),
(41, 'BENNI CHANDRA', '-', 'C/6'),
(42, 'IR. JAMAL UTAMA', '-', 'C/8'),
(43, 'ANDI ARISTYA', '-', 'C/9'),
(44, 'DRS. H. MUH FARID SUAIB, MSI', '-', 'C/10'),
(45, 'JOSEPH WIJAYA', '-', 'C/12'),
(46, 'HJ. SUKMA MUKHTAR', '-', 'C/14'),
(47, 'EBO', '-', 'C/15'),
(48, 'YOSEP WIJAYA', 'MUH. NUFRIANDI NUR AMIR', 'C/16'),
(49, 'JERI', 'NANDA', 'C/17'),
(50, 'ROBBY PIETER', '-', 'C/18'),
(51, 'PROF. DR. ENG HERMAN PARUNG', '-', 'C/19'),
(52, 'RUSDI, MSI', '-', 'C/20'),
(53, 'DR IKA', '-', 'C/21'),
(54, 'ERWANSYAH', '-', 'C/22'),
(55, 'MARKUS', '-', 'C/23'),
(56, 'LIEM MOEK IM', '-', 'C/25'),
(57, 'H. MUH SAID', '-', 'C/26'),
(58, 'AGUS', '-', 'D/3'),
(59, 'TAUFIQ', '-', 'D/4'),
(60, 'HENDRIK PURNAMA', '-', 'D/5'),
(61, 'VICTOR', '-', 'D/6'),
(62, 'SIMON', '-', 'D/7'),
(63, 'ANDHIKA', '-', 'D/8'),
(64, 'ANDI RUDIANI ADAM', '-', 'D/9'),
(65, 'RUBBY ISHAK', '-', 'D/10'),
(66, 'ANDI ERNI', '-', 'D/11'),
(67, 'HJ. KARTINI', '-', 'D/12'),
(68, 'RISWANDI', '-', 'D/14'),
(69, 'YOSEP WIJAYA', '-', 'D/15'),
(70, 'JOSEPH WIJAYA', '-', 'D/16'),
(71, 'H. VILMA EMI HERMAN', '-', 'D/17'),
(72, 'BARLIANTA SHALEH', '-', 'D/17A'),
(73, 'ANDI SURI SANTIANG', '-', 'D/17D'),
(74, 'NANDAR', '-', 'D/17B'),
(75, 'MARJON DEE', '-', 'D/17E'),
(76, 'TJANG GIN DWI', '-', 'D/17E'),
(77, 'SUSANTI', '-', 'D/18'),
(78, 'YULIUS PADANG', '-', 'D/19'),
(79, 'BENNY', '-', 'D/20'),
(80, '-', 'IR. LENGKANG', 'D/21'),
(81, 'EFENDY', '-', 'D/22'),
(82, 'DRS. H. MUH FARID SUAIB, MSI', '-', 'D/23'),
(83, 'H. AMIR', '-', 'D/24'),
(84, 'ANDI RUSTAM, SE, MSI', '-', 'D/25'),
(85, '-', 'IKSAN', 'D/26'),
(86, 'CHANDRA', '-', 'E/1'),
(87, 'JEMI. J', '-', 'E/2'),
(88, 'H. FAIZAL', '-', 'E/3'),
(89, 'SONY', '-', 'E/4'),
(90, 'ELISABETH DASSUGI', '-', 'E/5'),
(91, 'RUDDIN', '-', 'E/6'),
(92, 'ASINDO', '-', 'E/7'),
(93, 'SAUHUDDIN', '-', 'E/8'),
(94, '-', '-', 'E/9'),
(95, 'EDWARD EGGAR', '-', 'E/10'),
(96, '-', 'GELORA', 'E.11'),
(97, 'H. MISBAHUDDIN', '-', '3/12'),
(98, 'IR. SYAHRUL KUBE DAUDA', 'NENI', 'F/1'),
(99, 'HELEN', '-', 'F/2'),
(100, 'ASNURIANTI', 'IRAWAN SULAIMAN', 'F/3'),
(101, 'H.SALIM UPE', '-', 'F/4'),
(102, 'AGUS', '-', 'F/5'),
(103, 'HJ. FITRIANI', 'SRI SUGIARTO', 'F/6'),
(104, 'DESI', '-', 'F/7'),
(105, 'FAIZAL', '-', 'F/8'),
(106, 'H. MUH ARKIL', '-', 'F/9'),
(107, 'PROF. DR. HAZAIRIN SUBAIR, MSI', '-', 'F/10'),
(108, 'AIDA ANDRIANI', 'MUSTAFA DADI', 'F/11'),
(109, '-', '-', 'F/12'),
(110, 'H. VILMA EMI HERMAN', '-', 'F/14'),
(111, 'LILY HO', '-', 'F/15'),
(112, 'IR. HERIANTO', '-', 'F/15A'),
(113, 'DRS. BASARDIN', '-', 'F/15B'),
(114, 'H. ARFA', '-', 'F/15C'),
(115, 'LAURENTIA LALU', '-', 'F/16'),
(116, 'HELENA', '-', 'F/17'),
(117, 'YOHANNES', '-', 'F/18'),
(118, '-', 'MILA', 'F/19'),
(119, 'LILYANTI SAHLI', '-', 'F/20'),
(120, '-', '-', 'F/21'),
(121, 'JEDY HORAX', '-', 'F/22'),
(122, 'DIAN MANDALA PUTRA', '-', 'F/23'),
(123, 'DR. SRI HARNI', '-', 'F/24'),
(124, '-', '-', 'F/25'),
(125, 'H. AMIN ZAINUDDIN', '-', 'F/26'),
(126, 'SIANE WUISANG', '-', 'F/27'),
(127, 'NURAINI DANU', '-', 'F/28'),
(128, 'BENNY GOSAL', 'ANDI IHSAN MUSLIM', 'L/1'),
(129, 'HAEBA ALKATIRI', '-', 'L/2'),
(130, 'HIDAYAT RACHMAT', '-', 'L/3'),
(131, '-', '-', 'L/4'),
(132, 'INDRA SETIAWAN', '-', 'L/5'),
(133, 'FRANK SAIFUL', '-', 'L/6'),
(134, '-', 'DIAN NOVERA NINGSIH', 'L/7'),
(135, '-', '-', 'L/8'),
(136, 'ASINDO', '-', 'L/9'),
(137, 'ASINDO', '-', 'L/10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `des_perumahan`
--

CREATE TABLE `des_perumahan` (
  `id` int(11) NOT NULL,
  `deskripsi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `des_perumahan`
--

INSERT INTO `des_perumahan` (`id`, `deskripsi`) VALUES
(3, 'Perumahan Lili merupakan salah satu perumahan elit yang berada di kota makassar yang letaknya di Jl. Boulevard, Masale, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90231 yang dimana perumahan ini di huni oleh kurang lebih 255 kepala keluarga. yang terdiri dari 3 RT dan RW dimana di RT 08/RW 04 memegang 12 blok A-L, untuk RT 09/RW 05 memegang 3 blok M-O, sedangkan RT 10/RW 06 memegang 3 blok P-R. Untuk kondisi lingkungan di perumahan lili sangatlah damai dan dari segi keamanan sendiri sangatlah bagus di sebabkan ada beberapa pos satpam yang terletak di dalam perumahan. Selain itu posisi perumahan lili berada di tengah-tengah dan berdekatan dengan mall panakkukang (MP) sehingga untuk kesana tak perlu jauh-jauh lagi ketika ingin berbelanja maupun hanya sekedar jalan-jalan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id`, `nama`) VALUES
(2, 'format penilaian pembimbing kklp.docx'),
(3, 'TANDA TERIMA PENYERAHAN LAPORAN KULIAH KERJA LAPANGAN PLUS.docx'),
(4, '105-203-1-SM.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `saran_kritik` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritik_saran`
--

INSERT INTO `kritik_saran` (`id`, `nama`, `saran_kritik`, `tanggal`) VALUES
(1, 'bagas', 'asas', '2020-02-06'),
(2, 'kurni', 'hahahhaa', '2020-02-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(4, 'bagas', '$2y$10$4HWmuUUwRZAHjxAZkwOe.O7pG2fvwimkm8li8AM4235O4N7xOQwta'),
(5, 'kurni', '$2y$10$TZ3XsDIaZmuViaBNWgwQUeWNpyIcXa2/3fZXORDlaUdJRFqHdIg4a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loginadmin`
--

INSERT INTO `loginadmin` (`id`, `username`, `password`) VALUES
(1, 'bagas', '$2y$10$78KObqPK90xIBs8Txatfmu.fx54c4DS6iCzMDka/tIILIc.mkHZ8.'),
(2, 'admin', '$2y$10$ThBLrpM6ftfUzMiwdzaRF.53ALXe1716h6xUxY3BKdu2XJl1zo/2.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_fasilitas`
--

CREATE TABLE `tabel_fasilitas` (
  `id` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_fasilitas`
--

INSERT INTO `tabel_fasilitas` (`id`, `foto`, `judul`) VALUES
(1, '5e3d1da72ffd8.jpeg', 'Masjid'),
(2, '5e3d20f1f3b81.jpg', 'pos satpam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_hasil_rapat`
--

CREATE TABLE `tabel_hasil_rapat` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(500) NOT NULL,
  `hasil_rapat` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_hasil_rapat`
--

INSERT INTO `tabel_hasil_rapat` (`id`, `tanggal`, `foto`, `hasil_rapat`) VALUES
(1, '2020-02-07', '5e3d2beb41caa.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_keamanan`
--

CREATE TABLE `tabel_keamanan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `tipe_besar` varchar(50) NOT NULL,
  `tipe_kecil` varchar(50) NOT NULL,
  `kantor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_keamanan`
--

INSERT INTO `tabel_keamanan` (`id`, `keterangan`, `tipe_besar`, `tipe_kecil`, `kantor`) VALUES
(5, 'Informasi mengenai pembayaran iuran keamanan pada perumahan lili harap membayar mulai setiap tanggal 25 hingga akhir bulan, dan untuk jenis biaya yang di keluarkan berbeda tergantung dari jenis baik kantor maupun rumah.', '300000', '200000', '250000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_keterangan`
--

CREATE TABLE `tabel_keterangan` (
  `id` int(11) NOT NULL,
  `sejarah_perumahan` varchar(2000) NOT NULL,
  `tentang_rt` varchar(2000) NOT NULL,
  `fasilitas_perumahan` varchar(2000) NOT NULL,
  `informasi_penting` varchar(2000) NOT NULL,
  `iuran_keamanan` varchar(2000) NOT NULL,
  `hasil_rapat` varchar(2000) NOT NULL,
  `iuran_sampah` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_keterangan`
--

INSERT INTO `tabel_keterangan` (`id`, `sejarah_perumahan`, `tentang_rt`, `fasilitas_perumahan`, `informasi_penting`, `iuran_keamanan`, `hasil_rapat`, `iuran_sampah`) VALUES
(1, 'Untuk mengetahui awal mula perumahan lili silahkan klik icon diatas untuk melihat data lebih detail.!', 'Untuk mengetahui data lengkap ketua RT yang ada di perumahan lili silahkan klik icon di atas untuk melihat data lebih detail.!', 'Untuk mengetahui fasilitas apa saja yang ada di perumahan lili, silahakan klik icon diatas untuk melihat data lebih deatil.!', 'Pada bagian ini berisi tentang informasi yang penting dimana berisikan mengenai iuran keamanan, hasil rapat warga, dan iuran sampah yang ada pada perumahan lili, untuk lebih detailnya di bawah ini:', 'Bagian ini akan di jelaskan mengenai iuran keamanan yang ada di perumhanan lili, untuk lebih jelasnya silahkan klik lihat detail.!', 'Bagian ini akan menampilkan hasil rapat yang dilakukan oleh warga di perumahan lili, untuk lebih jelasnya silahkan klik lihat detail.!', 'Bagian ini akan di jelaskan mengenai iuran sampah yang ada di perumhanan lili, untuk lebih jelasnya silahkan klik lihat detail.!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_sampah`
--

CREATE TABLE `tabel_sampah` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_sampah`
--

INSERT INTO `tabel_sampah` (`id`, `keterangan`) VALUES
(2, 'Informasi mengenai iuran sampah di lakukan setiap bulan sekali yang dimana untuk biaya sampah di kenakan biaya sebesar Rp. 250,000 untuk setiap rumah dan kantor yang ada di perumahan lili, dan untuk pengambilan sampah dilakukan pada sore dan malam setiap harinya, jadi untuk warga perumahan lili harap untuk mengetahui jadwal mobil sampah, khusus untuk kebersihan perumahan ada petugas kebersihan setiap pagi yang bertugas untuk membersihkan lingkungan sekitar perumahan.\r\n                  Demikian informasi di sampaikan untuk seluruh warga agar senantiasa menjaga lingkungan tetap bersih.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_sejarah`
--

CREATE TABLE `tabel_sejarah` (
  `id` int(11) NOT NULL,
  `sejarah` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_sejarah`
--

INSERT INTO `tabel_sejarah` (`id`, `sejarah`) VALUES
(3, 'Keberadaan pemukiman elit makassar memang berdampak bagi kawasan di sekitarnya. Apalagi, pembangunan pemukiman itu juga dilengkapi dengan fasilitas penunjang seperti pusat perbelanjaan dan berdekatan dengan pusat perkantoran. maka di bangunlah perumahan lili.\r\nPerumahan ini didirikan pada tahun 1998 di tahun ini awal mula  perumahan ini di dirikan karena melihat lokasinya yang berada di tengah-tengah kota, dan memiliki posisi yang sangat strategis sehingga di bangunlah perumahan lili, untuk pertama kali di huni itu sejak tahun 2002.\r\nPada awal dihuni hanya ada beberapa rumah saja yang sudah terisi namun seiring waktu berjalan hingga sekarang sudah banyak rumah yang terisi sehingga ketika kita masuk kesana maka akan merasakan suasana yang nyaman dan kondisi lingkungannya juga bersih.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tentangrt`
--

CREATE TABLE `tabel_tentangrt` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jumlah_blok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_tentangrt`
--

INSERT INTO `tabel_tentangrt` (`id`, `nama`, `no_hp`, `alamat`, `jumlah_blok`) VALUES
(2, 'Agustinus', '082313793888', 'Blok F no.5 ', '12 blok, A-L');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indeks untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `des_perumahan`
--
ALTER TABLE `des_perumahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indeks untuk tabel `tabel_fasilitas`
--
ALTER TABLE `tabel_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_hasil_rapat`
--
ALTER TABLE `tabel_hasil_rapat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_keamanan`
--
ALTER TABLE `tabel_keamanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_keterangan`
--
ALTER TABLE `tabel_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_sampah`
--
ALTER TABLE `tabel_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_sejarah`
--
ALTER TABLE `tabel_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_tentangrt`
--
ALTER TABLE `tabel_tentangrt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT untuk tabel `des_perumahan`
--
ALTER TABLE `des_perumahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_fasilitas`
--
ALTER TABLE `tabel_fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_hasil_rapat`
--
ALTER TABLE `tabel_hasil_rapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_keamanan`
--
ALTER TABLE `tabel_keamanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_keterangan`
--
ALTER TABLE `tabel_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_sampah`
--
ALTER TABLE `tabel_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_sejarah`
--
ALTER TABLE `tabel_sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_tentangrt`
--
ALTER TABLE `tabel_tentangrt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
