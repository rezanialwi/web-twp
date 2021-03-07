-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql209.epizy.com
-- Generation Time: Mar 07, 2021 at 05:56 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26399471_db_twp`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_calang`
--

CREATE TABLE `absensi_calang` (
  `id_absensi` int(11) NOT NULL,
  `nama_calang` varchar(50) NOT NULL,
  `id_proker` int(11) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_calang`
--

INSERT INTO `absensi_calang` (`id_absensi`, `nama_calang`, `id_proker`, `jam`, `keterangan`) VALUES
(9, 'muhammad rasyid', 2, '2020-12-05 06:38:20', 'Hadir'),
(10, 'Muhammad Zihan', 2, '2020-12-05 06:39:44', 'Hadir'),
(11, 'Maulidah', 2, '2020-12-05 06:40:09', 'Hadir'),
(12, 'sri wahyuni', 2, '2020-12-05 06:51:34', 'Hadir'),
(13, 'Risandi', 2, '2020-12-05 07:54:38', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `absensi_pengurus`
--

CREATE TABLE `absensi_pengurus` (
  `id_absensi` int(12) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL,
  `id_proker` int(10) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_pengurus`
--

INSERT INTO `absensi_pengurus` (`id_absensi`, `nama_pengurus`, `id_proker`, `jam`, `keterangan`) VALUES
(22, 'Helmia N', 2, '2020-12-05 01:39:50', 'Hadir'),
(21, 'Nor Jariah 20', 2, '2020-12-05 01:37:09', 'Hadir'),
(20, 'Noval Fatimah 20', 2, '2020-12-05 01:33:46', 'Hadir'),
(19, 'Muhammad Robith (19)', 2, '2020-12-05 01:32:35', 'Hadir'),
(23, 'Nuur Maulidiani (19)', 2, '2020-12-05 01:39:57', 'Hadir'),
(24, 'M.Fitriandi 20', 2, '2020-12-05 01:43:08', 'Hadir'),
(25, 'Ulya Nada Afa 19', 2, '2020-12-05 01:44:23', 'Hadir'),
(26, 'Muhamad fadilah 20', 2, '2020-12-05 01:45:07', 'Hadir'),
(27, 'Eka Nor Marsela (20)', 2, '2020-12-05 01:48:56', 'Hadir'),
(28, 'Herlina Fitri 20', 2, '2020-12-05 02:00:24', 'Hadir'),
(29, 'Rahayu Fitri 20', 2, '2020-12-05 02:38:29', 'Hadir'),
(30, 'Apriliana (19)', 2, '2020-12-05 02:29:04', 'Hadir'),
(31, 'Lewina Hutabarat - 20', 2, '2020-12-05 02:40:57', 'Hadir'),
(32, 'Helyatul hasanah 20', 2, '2020-12-05 03:31:14', 'Hadir'),
(33, 'Agus Ariadi 19', 2, '2020-12-05 04:11:01', 'Hadir'),
(34, 'Mohammad Aditya Renaldy 20', 2, '2020-12-05 05:05:53', 'Hadir'),
(35, 'Helda Hayati (19)', 2, '2020-12-05 05:51:00', 'Hadir'),
(36, 'Nava juan 20', 2, '2020-12-05 06:00:55', 'Hadir'),
(37, 'Fajar 20', 2, '2020-12-05 06:02:02', 'Hadir'),
(39, 'Yuriardi Zain', 2, '2020-12-05 06:49:03', 'Hadir'),
(40, 'Hasanur Rizqy', 2, '2020-12-05 06:49:39', 'Hadir'),
(41, 'ihya ulumiddina', 2, '2020-12-05 06:50:37', 'Hadir'),
(42, 'YUSTIKA MAULIA', 2, '2020-12-05 06:52:15', 'Hadir'),
(43, 'bayu sandi', 2, '2020-12-05 08:03:35', 'Hadir'),
(44, 'Aldo Christian', 2, '2020-12-05 08:36:57', 'Hadir'),
(45, 'M. Rezani Alwi', 2, '2020-12-05 08:46:58', 'Hadir'),
(46, 'Muhammad Fadliyadi 20', 2, '2020-12-05 09:25:39', 'Hadir'),
(47, 'Taufiqurrahman', 2, '2020-12-05 09:57:15', 'Hadir'),
(48, 'Fauzannor Yasha', 2, '2020-12-05 10:56:47', 'Hadir'),
(49, 'Arsyad Zaini ', 2, '2020-12-05 10:57:14', 'Hadir'),
(50, 'Jaelani Ariyan Noor', 2, '2020-12-05 10:58:40', 'Hadir'),
(51, 'Dhani 11', 2, '2020-12-06 04:05:10', 'Hadir'),
(52, 'Septiya 18', 2, '2020-12-06 04:05:32', 'Hadir'),
(53, 'Nailiya Nikmah Pembina', 2, '2020-12-06 04:06:03', 'Hadir'),
(54, 'Irwan 16', 2, '2020-12-06 04:06:25', 'Hadir'),
(55, 'M. Rifani 17', 2, '2020-12-06 04:06:50', 'Hadir'),
(56, 'Mil 18', 2, '2020-12-06 04:07:13', 'Hadir'),
(57, 'Yumna 18', 2, '2020-12-06 04:07:35', 'Hadir'),
(58, 'Anis 18', 2, '2020-12-06 04:08:01', 'Hadir'),
(59, 'Riza', 2, '2020-12-06 04:08:17', 'Hadir'),
(60, 'Denny 18', 2, '2020-12-06 04:08:38', 'Hadir'),
(61, 'Hendrie Purnomo Aji 18', 2, '2020-12-06 04:09:12', 'Hadir'),
(62, 'Ani 11', 2, '2020-12-06 04:09:32', 'Hadir'),
(63, 'Semok 13', 2, '2020-12-06 04:09:55', 'Hadir'),
(64, 'Sidi 15', 2, '2020-12-06 04:10:14', 'Hadir'),
(65, 'Cholis 16', 2, '2020-12-06 04:10:35', 'Hadir'),
(66, 'Adit 16', 2, '2020-12-06 04:10:54', 'Hadir'),
(67, 'Yudha 13', 2, '2020-12-06 04:11:10', 'Hadir'),
(68, 'Oliv 13', 2, '2020-12-06 04:11:37', 'Hadir'),
(69, 'Heni 13', 2, '2020-12-06 04:11:55', 'Hadir'),
(70, 'Iqbal ', 2, '2020-12-06 04:12:26', 'Hadir'),
(71, 'Amin 13', 2, '2020-12-06 04:12:45', 'Hadir'),
(72, 'Syarwani 14', 2, '2020-12-06 04:13:11', 'Hadir'),
(73, 'Uqon ', 2, '2020-12-06 04:13:30', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admintwp', 'dfbb8dc4c597b2364c3c602c3e15dd38'),
(6, 'dts', 'da358a1216cf11bd724c0aa17441a5d2');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_tanggal` datetime NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_slug` varchar(255) NOT NULL,
  `artikel_konten` longtext NOT NULL,
  `artikel_sampul` varchar(255) NOT NULL,
  `artikel_kategori` int(11) NOT NULL,
  `artikel_status` enum('publish','draft') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_tanggal`, `artikel_judul`, `artikel_slug`, `artikel_konten`, `artikel_sampul`, `artikel_kategori`, `artikel_status`) VALUES
(18, '2020-12-22 19:05:25', 'ANNIVERSARY TEATER WASI PUTIH KE-XXI', 'anniversary-teater-wasi-putih-ke-xxi', '<h1>ANNIVERSARY TEATER WASI PUTIH KE-XXI</h1>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">Sabtu, 5 Desember 2020 bertempat di Ruang Multimedia Politeknik Negeri Banjarmasin, Teater Wasi Putih menggelar acara syukuran bertepatan dengan 21 tahun usianya.</span></span></h3>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:16px\">Acara ini bermaksud untuk memupuk kembali rasa kekeluargaan dalam semangat kebersamaan. Acara ini dihadiri oleh Pembina, Pengurus, Calon Anggota dan Dewan Penasehat Organisasi Teater. Acara ini berjalan dengan hikmat dan meriah dengan rangkaian penampilan - Penampilan dari pengurus dan calon anggota. Meski dengan waktu latihan yang terbilang singkat, penampilan ini menjadi bukti bahwa pandemi bukanlah suatu penghalang untuk tetap berkarya dan berproses.<br />\r\n&quot; Setiap angkatan, setiap periode memiliki kisahnya masing-masing dan angkatan ini suatu hari akan dengan bangganya bisa berkata, &quot;Kami dulu menghadapi masa pandemi yang menghantam hampir seluruh hal di seluruh dunia, dan kami bisa bertahan.&quot; Sambutan Ibu Nailiya Nikmah selaku Pembina Teater Wasi Putih sekaligus membuka rangkaian acara.&nbsp;<br />\r\nAcara&nbsp; ini menyongsong konsep reuni Keluarga Besar Teater Wasi Putih. Konsep ini tercipta karena adanya rasa bertemu dan berkumpul tetapi tidak terhalang karena adanya pandemi covid-19. Oleh karena itu pengurus menciptakan ruang temu sekaligus merayakan hari jadi Teater Wasi Putih dengan protokol kesehatan yang ketat.<br />\r\nKami sangat berterimakasih kepada Direktur Poliban, Wakil Direktur III, dan Satgas Covid yang sudah mengijinkan sehingga terlaksananya acara ini. &quot; Saya bangga dan bahagia masih bisa berada dan berdiri di TWP.<br />\r\nSelamat ulang tahun TWP, tahun ini kita semua membuktikan bahwa kita bisa survive dalam kondisi apapun.</span></span></h3>\r\n', 'AnyConv_com__IMG_4050-min_(1).jpg', 5, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_slug` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_slug`) VALUES
(4, 'Pentas', 'pentas'),
(5, 'Proker', 'proker');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `komen` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `komen`) VALUES
(4, 'anjim', 'annjimm@gmail.com', 'anjim banget');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(12) NOT NULL,
  `no_anggota` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `no_anggota`, `nama`, `nim`, `prodi`, `no_wa`, `alamat`, `jabatan`, `foto`) VALUES
(4, 'TWP.109/XIX/2019', 'Taufiqurrahman', 'B020318051', 'Teknik otomotif', '089674454', 'Sungai Andai', 'Ketua Umum', 'WhatsApp_Image_2020-09-10_at_15_28_23-removebg-preview_(1).png');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(11) NOT NULL,
  `nama_proker` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id_proker`, `nama_proker`, `tanggal`) VALUES
(4, 'cekcek', '2132-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `nim` varchar(11) NOT NULL,
  `nm_pendaftar` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jenkel` enum('laki-laki','perempuan') NOT NULL,
  `organisasi` varchar(500) NOT NULL,
  `berkesenian` varchar(500) NOT NULL,
  `minat` varchar(255) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`nim`, `nm_pendaftar`, `jurusan`, `prodi`, `tmp_lahir`, `tgl_lahir`, `alamat`, `no_wa`, `agama`, `jenkel`, `organisasi`, `berkesenian`, `minat`, `foto`) VALUES
('B020320022', 'Muhammad Najib Aditya', 'Mesin', 'Teknik Mesin Otomotif', 'Banjarmasin', '1999-08-16', 'Jl.Kelayan A II Rt.20 No.17 Murung Raya', '085248705026', 'Islam', 'laki-laki', ' Pramuka ', 'Teater Kabaret', '', '26082020215402IMG_20200827_094640.jpg'),
('D010320079', 'Maulidah', 'Akutansi', 'D3 akuntansi', 'banjarmasin', '2000-06-29', 'Jalan belitung darat gg karya 5 no 47', '083140366664', 'Islam', 'perempuan', ' Pernah mengikuti eskul paskibra waktu di SMA', 'pernah menjadi tokoh utama dalam sebuah teater pendek di sekolah SMA', 'Aktor ( alasannya saya ingin mendalami penjiwaan dalam sebuah drama dan ingin mengembangkan bakat yang suka menghibur orang sekitar)', '27082020023139PicsArt_05-30-02.20.26.jpg'),
('E010320080', 'Rika', 'Bisnis', 'D3 Administrasi Bisnis', 'Malangkayan', '1998-08-01', 'Hapiring', '081351559436', 'Protestan', 'perempuan', ' Pernah ikut organisasi Pecinta Alam di SMK', 'Tidak ada', '', '27082020042705IMG20200826082602.jpg'),
('D020320009 ', 'MELA NATALIA', 'Akutansi', 'D3 Komputerisasi Akuntansi', 'Tewah Pupuh', '2001-12-26', 'Km2 rt19 gg sarunai kab barito timur kec dusun timur tamiang layang kalimantan tengah', '085348050508', 'Protestan', 'perempuan', 'Dari sd sampai smk mengikuti pramuka. Smp Paduan suara smk osis dan kegiatan kegamaan baik di sekolah maupun di luar sekolah', 'Menggambar/letter bernyanyi puisi ', 'Aktris alasan saya memilih hal tersebut pertama karna saya suka dengan drama dan teatet. Kedua saya juga ingin mengasah bakat saya dan mendalami apa itu peran dalam sebuah drama. Dan ketiga saya juga ingin terlibat langsung dalam sebuah pementasan teater.', '0509202021050520200903_111847-removebg-preview.jpg'),
('B010320047', 'Muhammad Rasyid', 'Mesin', 'D3 teknik mesin produksi', 'Barito Kuala', '2002-04-28', 'Desa Berangas Timur RT 02 RW 01 ,kabupaten Barito Kuala ,kecamatanalalak', '083132042688', 'Islam', 'laki-laki', ' Ulun umpat eskul di sklhan ja smlm', 'Main panting', '', '2708202008492720200827_203300.jpg'),
('E010320057', 'RISANDI', 'Bisnis', 'Administrasi bisnis', 'TINGGIRAN BARU', '2001-09-22', 'JLN KARANG ANYAR RT 01,TINGGIRAN BARU,MEKARSARI,BARITO KUALA,KALIMANTAN SELATAN', '085754837207', 'Islam', 'laki-laki', ' Pernah menjadi anggota OSIS SMP', 'Pernah praktek nari dan drama saat sekolah SMA', '', '27082020095916RISANDI.jpg'),
('E010320129', 'Jahriah', 'Bisnis', 'D3 Administrasi Bisnis', 'Terantang', '2001-04-21', 'Desa Terantang RT 06 RW 02', '085651399010', 'Islam', 'perempuan', ' Belum ada pengalaman diseni teater ini', 'Pernah ikut ekskul tari', 'Aktor\r\nAlasannya karena saya ingin merasa berakting menjadi karakter orang lain', '28082020062055IMG_20200524_225025.jpg'),
('C020320037 ', 'Muhammad Ridhoni ', 'Electro', 'Elektronika ', 'Banjarmasin ', '2002-01-03', 'Jalan keramat basirih kubah RT. 09 RW. 01 ', '083150165926', 'Islam', 'laki-laki', ' - ', '-', 'penulis naskah, alasannya karena saya suka menulis', '28082020071749MUHAMMAD RIDHONI.JPG'),
('B020320061', 'Zaky Abdillah', 'Mesin', 'Otomotif', 'Kabupaten pemalang jawa tengah', '2002-08-14', 'Ds.kejambon kec.taman kab.pemalang Jalan.kamboja RT.05 RW.02 GG.Masjid', '083861265556', 'Islam', 'laki-laki', 'Belum pernah', 'Menjadi aktor di konten youtube tentang drama pendek\r\nPernah membuat cerita film pendek di youtube tentang Mainan tradisional', 'Aktor , karena semua berawal dari bawah dulu kita harus bisa berpengalaman lebih dan juga harus belajar dulu sampai paham apa yg kita lakukan setelah semua paham pasti akan siap untuk menjadi sutradara apa produsen film tersebut', '28082020075825inbound99259537210685600.jpg'),
('E010320028', 'Riska Wulandari', 'Bisnis', 'D3 Administrasi Bisnis', 'Handil Bakti', '2001-11-01', 'Komp griya permata jl.cinta mulia Rt.19 No.46', '085845820954', 'Islam', 'perempuan', 'Pernah mengikuti organisasi PMR', 'Belum pernah', 'Properti', '280820200810266E1DD446-8C6A-4318-8656-19808DE87855.jpeg'),
('C030320050', 'Nursyifa', 'Electro', 'Teknik Informatika', 'Banjarmasin', '2002-06-28', 'Jalan Putri Junjung Buih', '083140325627', 'Islam', 'perempuan', 'ANGGOTA SEKBID 1 OSIS\r\nSEKRETARIS KARYA ILMIAH REMAJA\r\nKOORDINATOR DIVISI EKONOMI BISNIS KSI Ashabul Kahfi Sman 7 Bjm\r\n', 'Pernah ikut beberapa kali pertemuan latihan teater perak sman 7 Bjm\r\nPaduan Suara\r\nPada saat Ujian praktik seni saya dicabang teater berperan sebagai cucu', 'Aktris karena saya ingin jadi pemain film/ftv/sinetron', '10092020071907IMG-20191225-WA0009.jpg'),
('D030420052', 'Siti Arafatillah', 'Akutansi', 'Akutansi Lembaga Keuangan Syariah', 'Banjarmasin', '2003-01-22', 'Jl.Keramat Raya RT.13 NO.06 RW.01', '089665145507', 'Islam', 'perempuan', 'Pernah menjadi bagian humas dan sering dipercaya menjadi seksi perlengkapan dan kunsumsi dalam beberapa acara pada ekskul PMR sewaktu diMAN', 'Pernah mengikuti pentas seni disekokah pada bidang teater', 'Aktor(untuk melatih kepercayaan diri dan kepandaian dalam berbicara)', '29082020120432Siti Arafatillah.jpg'),
('D020320013', 'Muhammad Zaki Ramadani', 'Akutansi', 'D3 Komputerisasi Akuntansi', 'Bukat', '2001-11-22', 'Jl.Brigjen H.Hasan Baseri, Bukat RW.01 RT.03', '085751504877', 'Islam', 'laki-laki', ' -', 'Tari', 'Aktor(Karena saya suka ketika melihat orang sedang berakting,maka saya juga ingin memiliki pengalaman dan skill dalam berakting,saya juga ingin bisa tampil didepan orang banyak dan mengekspresikan diri saya serta ingin menghibur mereka lewat akting saya.)', '30082020010900DSC_0207 m.zaki ramadani.JPG.jpg'),
('C030320072', 'Muhammad Rizaldy Fauzan', 'Electro', 'Teknik Informatika', 'Mahang Putat', '2002-05-24', 'Desa Mahang Putat, Gang Telaga Banta No.14, RT. 003 RW. 002, Kec. Pandawan Kab. Hulu Sungai Tengah, ', '087871992159', 'Islam', 'laki-laki', ' OSIS dan Purna Paskibraka Indonesia', 'Tari', 'Aktor (Alasan saya ingin menjadi aktor karena ingin mengubah sifat kurang berani tampil didepan umum, dengan menjadi aktor saya dapat mengekspresikan diri saya didepan orang lain)', '30082020012201a0271a2e-36f7-44f4-a01b-6bf99779be8b.jpg'),
('A020320014', 'jesica capriati', 'Sipil', 'pertambangan ', 'tabalong ', '2002-09-11', 'JL MTQ 105 Desa pangelak,kecamatan upau kabupaten tabalong ', '082223490836', 'Protestan', 'perempuan', ' pernah mengikuti organisasi OSIS selama 3 tahun dengan jabatan dibidang kesenian,terpilih sebagai anggota organisasi AMBALA dengan jabatan sebagai juru Adat dan mengikuti eskul tari.', 'mengikuti sanggar seni tari dan terakhir mendapatkan juara 2 di acara tabalong  Ethnic festival,mengikuti eskul dance dan terpilih menjadi perwakilan dari sekolah untuk mengikuti lomba FLS2N tari dengan meraih juara 3 se-kabupaten.', 'Aktris ( Karena saya ingin melatih kepercayaan diri saya, mencoba lebih mendalami atau menjiwai teater dan saya ingin mencoba hal yang baru.)', '31082020050808JESIKA.jpg'),
('A020320004', 'CINDY LESTARI SILABAN', 'Sipil', 'D3 Teknik Pertambangan', 'Nagurguran', '2002-07-30', 'Nagurguran', '082294032687', 'Protestan', 'perempuan', 'Belum ada', 'Pernah ikut bernyanyi dalam acara natal,perpisahan, kebaktian di Gereja,dan kebaktian di Sekolah.', 'Penyanyi,karena menyanyi merupakan hobby saya dan saya juga ingin meningkatkan kemampuan menyanyi saya agar lebih baik lagi kedepannya.', '310820200806502019-12-29-05-33-21-562961516.jpg'),
('E020320105', 'Muhammad As\'Ari', 'Bisnis', 'Manajemen Informatika', 'Banjarmasin', '2000-12-04', 'Jl.Antasan Kecil Timur Dalam Rt.18', '089621241001', 'Islam', 'laki-laki', 'Pramuka, dan masih aktif di klub lari', 'belum pernah mengikuti organisasi kesenian', 'Aktor(menurut saya peran antagonis lebih sulit dimainkan, jadi lebih tertantang)', 'asri.jpeg'),
('E010320083', 'Sri Wahyuni', 'Bisnis', 'Administrasi bisnis', 'Banjarmasin', '2000-06-23', 'Jl. Bagio RT.06 RW.02 desa alur kec.jorong kab.tanah laut', '6285787751936', 'Islam', 'perempuan', ' ', 'Tidak ada', 'Ingin mempunyai pengalaman berakting', '05092020203608IMG_-a0ncvk.jpg'),
('E010320024', 'Nurul Khafifah', 'Bisnis', 'D3 Administrasi Bisnis', 'Handil Suruk', '2001-08-24', 'Desa Salat Makmur,kec.Beruntung baru kab. Banjar', '085349698546', 'Islam', 'perempuan', 'Saya mengikuti organisasi disekolah seperti Pramuka,tari, dan paskhus.', 'Saya pernah ikut lomba pensi disekolah saya saat acara perjusami,dan saya juga sering tampil di acara pernikahan menampilkan sebuah tarian Dayak', 'Aktris,karena saya suka tampil dan berperan dalam teater dan saya juga ingin mengasah kepercayaan diri saya saat menampilkan sebuah Teater.', '10092020042848LRM_20200102171434_save.jpg'),
('D030420004', 'Aina salsabella puteri', 'Akutansi', 'Akutansi lembaga keuangan syariah', 'Kandangan', '2002-07-30', 'Jl. Sparman ', '089692192687', 'Islam', 'perempuan', ' ', 'Musik tradisional', '', '02092020022042570C6E31-16D4-436F-B335-B9B4B6836D43.jpeg'),
('A010320079', 'Nofia Putri Sal Sabila', 'Sipil', 'D3 Teknik Sipil', 'Banjarmasin', '2001-11-26', 'Jln.sepakat RT 30 pemurus dalam no 51', '081649178449', 'Islam', 'perempuan', ' Pernah mengikuti pengalaman organisasi teater diSMA', 'Pernah ikut lomba seni teater ', 'Karena saya ingin mengetahui lebih dalam lagi ttg seni teater dan juga untuk mengapresiasi diri kita , melatih rasa percaya diri dan menambah pengalaman kebetulan juga saya sangat menyukai seni tentang teater oleh karena itu saya berminat mengikuti ekskul', '02092020120732IMG-20200902-WA0135.jpg'),
('D030420055', 'Vina aulia', 'Akutansi', 'D4 Akuntansi Lembaga Keuangan Syariah', 'Banjarmasin', '2002-09-30', 'Komp.persada raya 3 (persada permai) jlur 19 no 12 rt 25', '083159179968', 'Islam', 'perempuan', ' Tidak ada', 'Ujian praktek tari', 'Aktor (karena saya sangat suka berakting)', '04092020002306inbound6642158527786015427.jpg'),
('D030420029', 'Tasya Oktavia Putri', 'Akutansi', 'D4 Akuntansi Lembaga Keuangan Syariah', 'Banjarmasin', '2001-10-30', 'Jl. KS Tubun Komplek Gagah Lurus No. 35 RT. 10 RW. 01', '082353382786', 'Islam', 'perempuan', 'Tidak ada', 'Ujian Praktek Sekolah Tari Japin Sigam ', 'Aktor, karena ingin belajar dan mendalami akting', '06092020061537PicsArt_09-04-12.22.10.jpg'),
('A010320026', 'Rangga Tresna Setya', 'Sipil', 'D3 Teknik Sipil', 'Kuala Pembuang', '2002-10-05', 'Jl. MT Haryono no.27', '082251863676', 'Islam', 'laki-laki', ' -', 'Pernah menjadi juara 2 dalam lomba FLS2N SMA 2019 tingkat provinsi. Bidang desain poster putra', 'Aktor (Mengenakan topeng dan berekspresi demi media menghibur orang banyak nampaknya menyenangkan), Penulis Naskah (Ingin membekasi sejarah dengan cerita buatan sendiri)', '04092020041612DSC_0399.jpg'),
('D010320057', 'Nurul Ilma', 'Akutansi', 'D3 Akuntansi', 'Kuala Kapuas', '2002-05-29', 'Handil Bakti Komplek Grand Purnama 2', '085348052227', 'Islam', 'perempuan', ' Tidak ada', 'Tidak ada', 'Ingin mengetahui dunia seni, khususnya teater', '04092020205536PicsArt_09-03-01.50.15.png'),
('D030420022', 'Nourma', 'Akutansi', 'D4 ALKS', 'Desa Handil Gayam', '2003-09-06', 'Desa kampung Baru kec. Beruntung Baru kab. Banjar', '083142349211', 'Islam', 'perempuan', 'Tari -Paskus -Habsy -osim', 'pernah mengikuti perlombaan Tari pada GELORA IX & X yg di selenggarakan UIN Antasari dan sering tampil membawakan tarian pada acara pernikahan', 'Saya berminat menjadi sutradara dalam teater alasannya yang paling utama adalah untuk menambah wawasan,pengalaman dan tanggung jawab karena tugas seorang sutradara itu sangatlah besar diantaranya\r\n-menyeleksi naskah\r\n-memilih pemeran\r\n-melatih pemain dll\r', '05092020072820nourma.jpeg'),
('C020320045', 'Tiara andini', 'Electro', 'Elektronika', 'Samarinda', '2002-06-17', 'Batu piring, Kab balangan', '082230065566', 'Islam', 'perempuan', ' Belum ada di bagian teater', 'Belum ada', 'Aktor ingin belajar tentang hal baru di bagian teater', '15092020211451inbound6060477740502363365.jpg'),
('E0230320056', 'Sari Yuliani', 'Bisnis', 'Manajemen Informatika', 'Puntik Luar', '2002-07-20', 'Mandastana Kabupaten Barito Kuala', '083153236361', 'Islam', 'perempuan', ' -', '-', 'peran pembantu karena ingin menambah pengalaman', '16092020093135sari yuliani.jpg'),
('C030320019', 'Muhammad zihan', 'Electro', 'D3 teknik infomatika', 'bangkuang', '2002-12-12', 'Muhammadzihanzihan@gmail.com', '082251136106', 'Islam', 'laki-laki', 'Menjadi pengurus osis waktu SMA', 'membuat bahan kerajinan saat masih SMP ', 'Aktor : ingin mengembangkan diri di bidang akting .dan menambah wawasan serta memperbanyak komunikasi sosial', '18092020041937inbound2920506632130908243.jpg'),
('E020320140', 'Mukhairah Marda', 'Bisnis', 'Manajemen Informatika', 'Kampung Baru', '2002-10-17', 'Jl.Gawe sabumi II', '082149461817', 'Islam', 'perempuan', '1. PMR WIRA SMANSA\r\n2. SSK (Sekolah Siaga Kependudukan)\r\n3. Mading jurnal\r\n\r\n', '1.praktik drama\r\n2.praktik tari\r\n3.praktik cerpen', 'Aktor (Karena saya ingin mempelajari serta memperdalam pengetahuan dn bakat dalam seni peran)', '18092020054237inbound4644708873709552003.jpg'),
('E020320109', 'MUHAMMAD RIZAL', 'Bisnis', 'MANAJEMIN INFORMATIKA ', 'RUTAS', '1999-08-08', 'DESA KAYU BAWANG ', '087814883840', 'Islam', 'laki-laki', ' Belum pernah', 'Belum pernah', 'Ingin mengenal ilmu seni peran', '190920201002246A9D855B-E3AB-484F-9D54-54A632D43841.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_calang`
--
ALTER TABLE `absensi_calang`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `absensi_pengurus`
--
ALTER TABLE `absensi_pengurus`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_calang`
--
ALTER TABLE `absensi_calang`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `absensi_pengurus`
--
ALTER TABLE `absensi_pengurus`
  MODIFY `id_absensi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
