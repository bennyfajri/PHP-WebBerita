-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 06:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkasus`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `id_user`, `judul`, `isi_berita`, `gambar`, `tgl_posting`) VALUES
(16, 1, 3, 'Jenis-jenis Perangkat Komputer', '1.	Prosesor\r\n2.	RAM (Random Access Memory)\r\n3.	VGA Card\r\n4.	Power Supply\r\n5.	Harddisk\r\n6.	Optical Disk Drive (ODD)\r\n7.	Floppy Disk Drive\r\n8.	LAN Card (Local Area Netword Card)\r\n10.	Modem Card\r\n11.	Sound Card\r\n12.	Kabel IDE (Integrated Drive Electronics)\r\n13.	Kabel SATA (Serial ATA)\r\n14.  SSD\r\n', '881733mb530p_1.jpg', '2020-06-15 17:04:43'),
(19, 8, 3, 'Wisata ke TN Komodo Saat New Normal? Ini Syarat Surat yang Perlu Dibawa', 'Wisatawan yang ingin berkunjung ke kawasan wisata Taman Nasional Komodo, Manggarai Barat, Provinsi Nusa Tenggara Timur, perlu membawa berbagai dokumen persyaratan saat masa new normal. Baca juga: Turis Mulai Bisa Kunjungi NTT pada 15 Juni \"Dokumen tersebut wajib ditunjukkan kepada petugas Balai Taman Nasional Komodo saat screening check di entry point di Pelabuhan Labuan Bajo,\" jelas Kepala Balai Taman Nasional Komodo, Lukita Awang Nistyantara saat dihubungi Kompas.com, Senin, (15/6/2020). Wisatawan harus mematuhi persyaratan protokol kesehatan Covid-19, yaitu membawa dokumen: Surat bebas Covid-19 yang masih berlaku dengan tenggang waktu tiga hari sebelum habis masa berlaku berdasarkan hasil Tes Polymerase Chain Reaction (PCR) Surat keterangan hasil Rapid Test (non-reaktif) yang masih berlaku bagi wisatawan nusantara asal wilayah Nusa Tenggara Timur Awang menjelaskan, wisatawan yang tidak memiliki dokumen tersebut di atas dan/atau memiliki suhu tubuh di atas 37,3 derajat celsius, tidak boleh masuk ke situs-situs di dalam kawasan Taman Nasional Komodo. Lihat Foto Keindahan Komodo di Pulau Komodo.(SHUTTERSTOCK/SERGEY URYADNIKOV) Persyaratan lainnya adalah mengenakan masker wajah, mempraktikkan higienitas tangan dengan mencuci tangan dengan sabun/cairan disinfektan sesering mungkin sebelum dan setelah menggunakan fasilitas umum atau kendaraan transportasi atau beraktivitas. Selain itu, wajib membawa hand sanitizer pribadi (yang ramah lingkungan), membawa botol minum atau tumbler pribadi, menerapkan etika ketika batuk dan bersin, mematuhi time entry yang berlaku di Taman Nasional Komodo. Wisatawan juga harus memiliki asuransi jiwa khususnya asuransi perjalanan, membuat surat pernyataan tanggung jawab, bermaterai Rp 6.000 terkait keselamatan dan keamanan pengunjung. Baca juga: Walau Wisata NTT Buka Kembali, Kunjungan Wisatawan Diprediksi Masih Kecil Selain itu, memastikan jarak antar individu ketika berinteraksi setidaknya satu meter, tidak menggunakan dan/atau meminjamkan peralatan pribadi dengan pengunjung lainnya. \"Selain itu para wisatawan mancanegara dan nusantara agar mematuhi segala aturan Protokol Kesehatan dari Kementerian Kesehatan, Pemerintah Daerah, dan Asosiasi Selam Profesional. Kami juga masih menunggu edaran pusat dari Kementerian Lingkungan Hidup dan Kehutanan dan Kementerian Pariwisata, untuk memastikan protokol-protokol wisata dalam kawasan konservasi,\" jelas Awang. Pemerintah provinsi Nusa Tenggara Timur berencana membuka kembali pariwisata pada Senin (15/6/2020).\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Wisata ke TN Komodo Saat New Normal? Ini Syarat Surat yang Perlu Dibawa\", https://travel.kompas.com/read/2020/06/15/120010227/wisata-ke-tn-komodo-saat-new-normal-ini-syarat-surat-yang-perlu-dibawa.', '4732015d90c0bddd8ba.jpeg', '2020-06-16 00:52:29'),
(22, 6, 3, 'Corona Bikin Casillas Mundur dari Pencalonan Federasi Sepak Bola Spanyol', 'Mantan kiper timnas Spanyol, Iker Casillas resmi mengundurkan diri dari pencalonan presiden Federasi Sepak Bola Spanyol (RFEF) dengan alasan krisis yang melanda akibat pandemi virus Corona.\r\n\r\nâ€œSaya ingin menyampaikan bahwa saya sudah memutuskan untuk mengundurkan diri dari pencalonan presiden RFEF yang akan datang,â€ kata Casillas dikutip dari AFP, Senin.\r\nMantan kiper Real Madrid ini mengaku mantap mundur dari pencalonan menyusul krisis yang melanda Spanyol.\r\n\r\nMenurutnya, wabah virus Corona yang terjadi saat ini merupakan masalah yang lebih penting daripada pemilihan presiden RFEF.\r\n\r\n\r\nBaca Juga:\r\nCasillas Sebenarnya Ingin Pisah Baik-Baik dengan Madrid\r\nIker Casillas Diprediksi Bisa Jadi Bos Sepak Bola Spanyol Kalahkan Petahana\r\nCasillas Ingin Kembali ke Real Madrid Suatu Saat Nanti\r\nPada Februari lalu, Casillas mengumumkan maju dalam pencalonan presiden RFEF untuk melawan sang petahana,  Luis Rubiales.\r\n\r\nBahkan ebuah survei yang dikutip oleh Cadena Ser  mengatakan, para pecinta sepak bola rata-rata mendukung Casillas hingga di angka 90 persen.\r\n\r\nNamun dengan mundurnya Casillas, tentu semakin memuluskan jalan Luis Rubiales untuk memegang jabatan itu selama dua periode.', '543192t_5ee7ab968d467.jpg', '2020-06-16 01:00:01'),
(23, 7, 3, 'Soal Tuntutan Kasus Novel, Mahfud: Itu Urusan Kejaksaan, Saya Tak Boleh Ikut Campur', 'Membahas terkait tuntutan ringan terhadap dua terdakwa penyerang penyidik KPK, Novel Baswedan, Menteri Koordinator Politik, Hukum, dan Keamanan (Menkopolhukam) Mahfud MD menilai bahwa Jaksa Penuntut Umum (JPU) memiliki alasan hukum sendiri.\r\n\r\n\"Jadi itu biar kejaksaan dan itu ada alasan-alasan hukum yang tentu bisa mereka (JPU) pertanggungjawabkan sendiri,\" kata Mahfud di Yogyakarta, Senin (15/6/2020).\r\nMahfud juga enggan memberikan komentar lebih terkait tuntutan hukum tersebut. Selaku Menkopolhukam, ia menegaskan bahwa tidak bisa ikut campur dalam persoalan yang ditangani oleh pengadilan.\r\n\r\n\"Ya itu urusan kejaksaan ya. Saya tidak boleh ikut urusan pengadilan. Saya ini koordinator, menteri koordinator bukan menteri eksekutor,\" kata Mahfud MD.\r\nSeperti yang diketahui, JPU menuntut kedua terdakwa penyerang penyidik senior Novel Baswesan dengan hukuman satu tahun penjara dalam persidangan yang digelar Kamis (11/6/2020).', '75902t_5ee79a2540dd8.jpg', '2020-06-16 01:03:01'),
(24, 2, 3, 'Ini Saran Dokter Reisa untuk Tingkatkan Daya Tahan Tubuh di Era New Normal', 'Memiliki daya tahan tubuh yang kuat tentu sangat penting saat memasuki new normal, hal ini dilakukan agar terhindar dari virus corona. Hal ini juga sempat disarankan oleh dr Reisa Broto Asmoro dalam siaran update penanganan virus Corona COVID-19 di BNPB.\r\n\r\nReisa menyarankan agar masyarakat mengonsumsi makanan bergizi dan melakukan olahraga dengan teratur. Berikut ini tips yang disarankannya:\r\n\r\n1. Konsumsi sayur dan buah\r\n\r\n\r\nBaca Juga:\r\nPerhatikan Cara Olah Makanan untuk Bantu Jaga Imunitas\r\nMinum Vitamin C 1000 mg Setiap Hari, Dokter: Enggak Perlu!\r\nKetahui Berbagai Manfaat Buah Acai Berry untuk Tubuh\r\nReisa menyarankan penting untuk mengonsumsi sayur dan buah untuk mengatur metabolisme tubuh supaya berjalan dengan baik.\r\n\r\n2. Rutin berolahraga\r\n\r\nSupaya daya tahan tubuh kuat juga disarankan untuk rutin berolahraga. Lakukanlah olahraga yang sesuai dengan kemampuan masing-masing.\r\n\r\n3. Konsumsi karbohidrat\r\n\r\nKarbohidrat menjadi salah satu asupan yang penting untuk menjaga daya tahan tubuh seseorang. Hal ini karena karbohidrat merupakan sumber energi yang sangat dibutuhkan tubuh.\r\n\r\n4. Minum air yang cukup\r\n\r\nKetika tubuh kekurangan air maka bisa menimbulkan berbagai masalah. Itulah kenapa sangat disarankan minum air yang cukup agar daya tahan tubuh tetap terjaga.\r\n\r\n5. Konsumsi protein\r\n\r\nProtein juga bagian terpenting untuk meningkatkan daya tahan tubuh seseorang. Karena protein penting untuk mengatur metabolisme agar berjalan dengan baik.', '774634t_5ee6fb1915ba4.jpg', '2020-06-16 01:03:53'),
(25, 1, 3, 'NASA Tunda Lagi Peluncuran Rover Mars 2020 Akibat Virus Corona, Waduh!', 'Setelah sebelumnya Badan Penerbangan dan Antariksa Amerika Serikat (NASA) menunda misi peluncuran Rover Mars 2020 ke tanggal 17 Juli, kini pihaknya mengumumkan bahwa mereka menunda kembali jadwal peluncuran tersebut.\r\n\r\nDiketahui bahwa kini jadwal peluncuran Rover Mars 2020 ke planet Mars telah ditunda ke tanggal 20 Juli 2020 dengan alasan wabah virus corona (COVID-19) yang mengganggu proses peluncuran tersebut.\r\n\r\nIlustrasi robot penjelajah planet Mars\r\nIlustrasi robot penjelajah planet Mars (photo/Dok. NASA)\r\n\"NASA dan ULA kini menargetkan 20 Juli 2020 untuk meluncurkan misi Mars 2020 Perseverance Rover dengan roket Atlas V dari Space Launch Complex-41 di Cape Canaveral Air Force Station di Florida,\" ucap pihak NASA seperti dikutip dari BGR.\r\nSelain karena wabah virus corona, pemilihan waktu yang tepat juga menjadi hal yang penting ketika ingin meluncurkan roket ke planet Mars. Pasalnya proses peluncuran roket ke Bulan jauh berbeda dengan ke planet Mars dan juga planet lainnya.', '255001t_5ee71caed73f5.jpg', '2020-06-16 01:04:57'),
(26, 2, 3, 'Mandi Air Hangat di Pagi Hari, Ini 3 Manfaatnya untuk Kesehatan', 'Di pagi hari beberapa orang lebih suka mandi air hangat karena saat pagi hari cenderung lebih dingin. Tapi tahukah kamu bahwa mandi air panas di pagi hari memiliki manfaat kesehatan.\r\n\r\nSeperti yang dilansir dari Medical News berikut ini 3 manfaat dari mandi air hangat. Apa saja ya?\r\n\r\n1. Meningkatkan kesehatan otak\r\n\r\n\r\nBaca Juga:\r\nMandi Air Hangat Bisa Turunkan Risiko Sakit Jantung dan Stroke? Ini Faktanya\r\nSering Mandi Air Hangat Bisa Perpanjang Umur, Kok Bisa?\r\nTernyata Mandi Air Hangat Saat Hamil Berbahaya, Ini Alasannya\r\nSebuah studi menyebutkan bahwa mandi air panas dapat menstimulasi otak untuk menimbulkan brain derived neurotrophic factor (BDNF) yang merupakan protein yang memiliki banyak fungsi untuk otak.\r\n\r\n2. Meningkatkan kesehatan jantung\r\n\r\nMandi air hangat juga bermanfaat meningkatkan kesehatan jantung, hal ini karena air hangat akan meningkatkan aliran darah pada tubuh yang baik untuk menjaga kesehatan jantung.\r\n\r\n3. Meningkatkan kesehatan otot dan sendi\r\n\r\nMandi air hangat akan meningkatkan aliran darah, sehingga membantu melemaskan sendi dan otot yang kaku. Selain itu mandi air hangat juga dapat mengurangi rasa sakit pada orang yang mengalami osteoartritis.', '59279t_5ee8737d3651a.jpg', '2020-06-16 07:49:16'),
(27, 6, 3, 'Batal di Turki, Final Liga Champions Dipindahkan ke Portugal', 'UEFA baru saja mengumumkan bahwa Liga Champions musim ini akan restart mulai 7 Agustus mendatang.\r\n\r\nPenyelanggaraan final yang awalnya akan dihelat di Istanbul kini terpaksa dipindahkan ke Lisbon karena terkait pandemi virus corona.\r\n\r\nMengutip Sky Sports Italia, babak perdelapan-final akan diawali dengan pertandingan lanjutan leg kedua antara Juventus melawan Olympique Lyon dan Barcelona melawan Napoli. Kedua pertandingan itu tetap akan digelar di Turin dan Catalonia.\r\n\r\n\r\nBaca Juga:\r\nTimo Werner Keluar dari Skuad Liga Champions RB Leipzig, Kenapa?\r\nBernd Leno Yakin Arsenal Bisa Rebut Tiket Liga Champions\r\nBatal di Istanbul, Madrid Ajukan Diri Jadi Tuan Rumah Final Liga Champions\r\nNamun untuk babak perempat-final hingga final, semua pertandingan laga tunggal akan digelar di Lisbon.\r\n\r\nSesuai rancangan, kompetisi sepakbola paling bergengsi di Eropa ini akan menggelar perempat-final pada 12-15 Agutus, semi-final dijadwalkan pada 18-19 Agustus, dan final pada 23 Agustus.\r\n\r\nHingga kini, belum diketahui stadion mana yang digunakan untuk laga final. Sebab, Lisbon memiliki dua stadion besar, yakni Estadio Jose Alvalade yang merupakan kandang dari Sporting Lisbon dan Estadio Da Luz milik Benfica.\r\n\r\nUEFA memutuskan untuk memilih Portugal sebagai tuan rumah menggantikan Turki karena pertimbangan bagaimana negara tersebut menangani kasus virus corona.\r\n\r\nSemulanya, laga final Liga Champions 2019/20 dijadwalkan akan dihelat di Stadion Turk Telekom Arena, Istanbul. Namun, karena Turki menjadi salah satu negara Eropa yang masih berada dalam zona merah virus corona, laga final pun pada akhirnya dipindah.\r\n\r\nPortugal dinilai sebagai negara Eropa yang sangat bagus dalam menangani kasus virus corona. Dari 37.036 kasus positif yang tercatat, kini negara itu hanya menyisakan kasus aktif sebanyak 12,664 kasus.\r\n\r\nSementara itu, kasus virus corona di Turki tercatat mencapai 179.831 kasus dan 22,642 kasus di antaranya masih aktif.', '417846t_5ee841fa95cc3.jpg', '2020-06-16 07:51:31'),
(28, 8, 3, '8 Sungai Terunik di Dunia, dari Terpanjang sampai Paling Keramat', 'Bagi para pelancong alam, salah satu tempat favorit adalah sungai. Dengan melihat aliran sungai akan menambah hikmat dalam perjalanan, ditemani dengan udara sejuk yang membuat pikiran rehat sejenak.\r\n\r\nDi berbagai belahan dunia, sungai-sungai membentang luas. Beberapa di antaranya dikenal sebagai sungai terunik di dunia karena kondisi geografis dan keistimewaannya.\r\n\r\nSementara di sisi lain, sebagian sungai terunik lainnya diingat karena menjadi sumber penghidupan bagi ekosistem alam dan masyarakat setempat.\r\n\r\n\r\nBaca Juga:\r\nMengenal Sungai Yangtze, Sungai Terpanjang di Asia\r\nSungai Terunik di Dunia, dari Terpanjang sampai Paling Keramat\r\nBerikut ini 8 sungai terunik di dunia yang menarik dan memiliki ciri khas tersendiri yang sudah dirangkum oleh Indozone dari berbagai sumber:\r\n\r\n1. Sungai Gangga\r\nsungai terunik di dunia sungai gangga\r\nSungai Gangga (Pixabay)\r\nBagi masyarakat umat Hindu, sungai Gangga dipercaya sebagai sungai terkeramat di dunia yang dapat menghilangkan dosa.\r\n\r\nTitik awal sungai ini berada di selatan pegunungan Himalaya menyusuri 2.510 km dari China, India, Nepal, Bangladesh sebelum berakhir di Samudera Hindia.\r\n\r\n2. Sungai Nil\r\nsungai terpanjang di dunia sungai nil\r\nSungai Nil (Pixabay)\r\nSungai terunik di dunia selanjutnya adalah sungai nil. Selain unik, sungai ini juga dinobatkan sebagai sungai terpanjang di dunia, mengalir sejauh 6.650 km.\r\n\r\nLintasan sungai Nil membelah daratan sembilan negara dari Ethiopia, Zaire, Kenya, Uganda, Tanzania, Rwanda, Burundi, Sudan, hingga Mesir.\r\n\r\n3. Sungai Amazon\r\nsungai berbahaya di dunia sungai Amazon\r\nSungai Amazon (Unsplash/@campoilucas)\r\nSungai Amazon membentang sejauh lebih dari 6.400 kilometer menyisir pedalaman Peru, Ekuador, Bolivia, dan Venezuela, hingga bermuara ke Samudera Atlantik.\r\n\r\nDisebut sebagai \"Ocean River\", sungai Amazon merupakan sungai terpanjang kedua di dunia sekaligus yang paling berbahaya.\r\n\r\n4. Sungai Cano Cristales\r\nsungai terunik di dunia sungai cano cristales Kolombia\r\nSungai Cano Cristales (Wikimedia Commons McLeods08)\r\nSungai lima warna atau disebut Sungai Pelangi ini merupakan salah satu keajaiban alam paling menakjubkan berada di kawasan pegunungan Serrania de la Macarena, Kolombia.\r\n\r\nWarnanya kuning, hijau, biru, hitam, dan merah berasal dari vegetasi akuatik endemik vernama Clavigera Macarenia.\r\n\r\nPara pengunjung sungai ini diperkenakan berenang di sungai dengan catatan hanya 200 orang per hari.\r\n\r\n5. Sungai Boiling\r\nsungai terunik di dunia sungai boiling\r\nSungai Boiling (boilingrivers.org)\r\nUap panasnya begitu tebal, mendidih dan bersembunyi di balik lebatnya hutan Amazon, Peru. Suhunya bisa mencapai 200 derajat Fahrenheit. Di sekitar sungai dikelilingi bebatuan berwarna gading.\r\n\r\nTapi, jangan sampai menginjak lumpur di pinggir Boiling River. Sebab, kaki dapat langsung melepuh dan memperoleh luka bakar tingkat tiga hanya dalam hitungan detik.\r\n\r\n6. Sungai Danube\r\nSungai terunik di dunia sungai danube\r\nSungai Danube (Wikimedia Commons)\r\nPanjangnya 2.848 kilometer dan sebagai sungai terpanjang di Eropa setelah Volga. Sungai ini melintasi 9 negara yakni Austri, Kroasia, Hungaria, Jerman, Serbia, Romania, Moldova, Bulgaria, dan Ukrania sebelum bermuara di lautan hitam.\r\n\r\n7. Sungai Neretva\r\nSungai terunik di dunia sungai Neretva\r\nSungai Neretva (Wikimedia Commons)\r\nSungai karst ini dikenal karena banyaknya karst atau kapur di sekelilingnya. Sungai ini dinobatkan sebagai sungai tercantik di dunia yang melintasi wilayah Eropa termasuk Bosnia Hersegovina dan Kroasia.\r\n\r\n8. Sungai Rio Negro\r\nsungai terunik di dunia sungai Rio Negro\r\nSungai Rio Negro (Wikimedia Commons)\r\nSungai di Amerika Selatan ini melintasi Venezuela dan Kolombia dan menjadi salah satu sungai terunik di dunia. Airnya berwarna hitam pekat yang dihasilkan oleh zat senyawa vegetasi sekitarnya.', '765326t_5ee77b9336446.jpg', '2020-06-16 07:57:49'),
(29, 7, 3, 'Besar Pasak Daripada Tiang, APBN Mei 2020 Defisit Rp179,6 Triliun', 'Bulan Mei adalah kondisi perekonomian Indonesia yang terberat, khususnya di masa pandemi virus corona (Covid-19) seperti saat ini. Bahkan dari sisi Anggaran Pendapatan dan Belanja Negara (APBN), Indonesia dilaporkan mengalami defisit Rp179,6 triliun atau setara 1,1% dari Produk Domestik Bruto (PDB).\r\n\r\nHal itu diungkapkan Menteri Keuangan (Menkeu) Sri Mulyani Indrawati dalam video conference APBN KITA, yang dilaksanakan hari ini, Selasa (16/6/2020). Dilaporkan olehnya bahwa penerimaan negara hingga akhir Mei 2020 adalah Rp664,3 triliun. Jumlah itu hanya setara dengan 37,7% dari target APBN 2020 dan turun 9% jika dibandingkan perolehan pada periode yang sama tahun sebelumnya.\r\n\r\nPenerimaan Perpajakan tercatat Rp526,2 triliun atau hanya 36% dari target APBN dan 7,9% lebih rendah secara year-on-year (YoY). Setoran dari Direktorat Jenderal Pajak (DJP) adalah Rp44,6 triliun atau hanya 35,4% dari target APBN dan turun 10,8% secara YoY. Sementara setoran dari Direktorat Jenderal Bea dan Cukai adalah Rp81,7 triliun atau 39,2% dari target, tetapi masih naik 12,4% secara YoY.\r\n\r\n\r\nBaca Juga:\r\nPerlu Banyak Dana untuk Atasi Corona, Kemenkeu Pangkas Lagi Belanja K/L Rp50 Triliun\r\nPerubahan Postur APBN 2020, Jokowi: Ada Konsekuensi Defisit\r\nDefisit APBN Rp1.400 Triliun, Ini Cara Pemerintah Mengatasinya\r\nDiakui Sri Mulyani, pengelolaan APBN 2020 menjalani periode terberat pada Mei. Bahkan seluruh sektor ekonomi sudah mengalami pelemahan.\r\n\r\n\"Pelemahan ekonomi sudah across the board. Seluruh sektor ekonomi sudah mengalami pelemahan, langsung mengalami kontraksi dalam pada Mei. (Pendapatan) dari cukai harus waspada. Growth ini tidak akan tumbuh sampai akhir tahun,\" tuturnya. \r\nSementara itu, dari sisi penerimaan Negara Bukan Pajak (PBNP), posisi per akhir Mei adalah sebesar Rp136,9 triliun. Angka ini setara 46% dari target dan turun 13,6% secara YoY.\r\n\r\n\"Memang ada kontraksi penerimaan dibandingkan tahun lalu karena Covid-19. Perusahaan tertekan dan terlihat di Mei ini,\" jelasnya. \r\nKemudian dari sisi belanja negara, tercatat hingga akhir Mei 2020, total APBN yang dibelanjakan adalah Rp843,9 triliun. Angka ini setara dengan 32,3% dari target dan turun 1,4% YoY.\r\n\r\nBelanja pemerintah pusat hingga akhir Mei adalah Rp537,3 triliun atau 29% dari target, masih tumbuh 1,2% YoY. Lalu belanja transfer ke daerah dan dana desa tercatat Rp306,6 triliun atau 40,2 dari target, turun 6,7% YoY.\r\n\r\nRealisasi penerimaan dan belanja inilah yang kemudian menghasilkan defisit anggaran Rp179,6 triliun atau 1,1% dari PDB. Jumlah tersebut masih 21,1% dari target, namun melonjak 42,8% secara YoY.', '616806t_5ee8759a30f4e.jpg', '2020-06-16 08:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `keterangan`) VALUES
(1, 'Teknologi', 'berita tentang teknologi'),
(2, 'kesehatan', 'berita tentang kesehatan'),
(6, 'Sport', 'berita tentang sport'),
(7, 'Politik', 'berita tentang politik'),
(8, 'Travel', 'berita tentang traveling');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isi_komentar` tinytext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `email`, `isi_komentar`, `date_created`) VALUES
(3, 23, 'walid', 'walid@gmail.com', 'mantap, wawasanku bertambah', '2020-06-16 05:29:41'),
(4, 25, 'Alexander', 'alex@gmail.com', 'beritanya terlalu pendek', '2020-06-16 05:30:02'),
(5, 22, 'ari', 'arie@gmail.com', 'saya sebagai pendukung barcelona bahagia melihat ini', '2020-06-16 05:31:01'),
(6, 19, 'zukra', 'zukra@gmail.com', 'wah untung udah punya semua persyaratannya, awto gasskeun lurr', '2020-06-16 05:31:56'),
(7, 24, ' azmi', 'azmi@gmail.com', 'wah ibu dokternya cantiikk :*', '2020-06-16 05:32:45'),
(8, 22, 'beni fajri', 'iniemail@gmail.com', 'wow', '2020-06-16 07:20:04'),
(9, 29, 'Alexander', 'alex@gmail.com', 'bagaimana nasib negara kira kedepannnya\r\n', '2020-06-16 08:07:42'),
(10, 29, 'Beni', 'beni@gmail.com', 'mau dicari kemana duid sebanyak gitu hah', '2020-06-17 00:51:09'),
(13, 29, 'coeg', 'coeg@gmail.com', 'antah lah lai', '2020-06-17 00:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(3, 'coeg', 'b26986ceee60f744534aaab928cc12df', 'administrator'),
(4, 'drsync', 'b26986ceee60f744534aaab928cc12df', 'Operator'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(6, 'fajri', 'b26986ceee60f744534aaab928cc12df', 'Operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
