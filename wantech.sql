-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 06:23 PM
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
-- Database: `wantech`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `post_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `user_id`, `title`, `content`, `post_time`) VALUES
(1, 1, 'Main Game PC Lebih Nikmat dengan Fitur HDR', '<p><img alt=\"\" src=\"http://www.jagatreview.com/wp-content/uploads/2019/05/002.jpg\" style=\"height:528px; width:748px\" /></p>\r\n\r\n<p>Kebanyakan gamer saat ini mungkin masih akrab dengan monitor beresolusi Full HD 1080p (1920&times;1080). Monitor tersebut mungkin dianggap sudah cukup mampu menawarkan kualitas warna yang baik. Akan tetapi, monitor beresolusi 4K (3840&times;2160) yang kita kenal sebagai UHD (Ultra High Definition) tentunya mampu menawarkan kualitas warna dengan komposisi yang jauh lebih baik dibanding resolusi Full HD. Di sisi lain, perkembangan teknologi monitor yang dihadirkan para produsen kini makin inovatif yang tidak hanya menawarkan monitor beresolusi UHD 4K namun juga dilengkapi dengan fitur pendukung lain seperti HDR (High Dynamic Range). Teknologi HDR yang disuguhkan pada beberapa monitor diklaim dapat memberikan pengalaman lebih bagi pengguna saat menggunakannya, termasuk saat bermain game. Lalu, seperti apa keunggulan yang bisa didapat gamer dari fitur HDR? Berikut kami uraikan secara singkat mengenai fitur HDR pada game.</p>\r\n\r\n<p><strong>Apa itu HDR?</strong></p>\r\n\r\n<p><img alt=\"\" src=\"http://www.jagatreview.com/wp-content/uploads/2019/05/001.jpg\" style=\"height:601px; width:800px\" /></p>\r\n\r\n<p>Sebelum kita memasuki ke tahap pembahasan fitur HDR pada game, kami jelaskan terlebih dahulu secara singkat mengenai fitur ini.&nbsp;<strong>High Dynamic Range</strong>&nbsp;merupakan teknologi yang memiliki standar rentang warna DCI-P3. Cara kerja dari fitur HDR pada sebuah monitor terletak pada proses bit pada panel untuk meningkatkan rasio kontras dan warna secara signifikan. Sehingga fitur HDR ini menjanjikan dapat menampilkan tampilan gambar dengan tingkat akurasi warna yang tepat dan lebih natural. Warna yang dihasilkan oleh monitor 4K dengan fitur HDR juga biasanya akan terasa lebih cerah dan dalam, jika dibandingkan dengan monitor non HDR secara berdampingan. Perkembangan HDR sendiri saat ini sudah sampai ke HDR12. Akan tetapi, peningkatan HDR12 dengan HDR10 tidak terlalu signifikan, sehingga HDR10 saat ini masih menjadi standar untuk sebuah perangkat yang mendukung teknologi tersebut.&nbsp;Lantas, kapan saatnya Anda membutuhkan monitor 4K dengan dukungan fitur HDR? Berikut kami mencoba merangkum 5 alasan mengapa saatnya Anda harus melirik monitor 4K dengan fitur HDR di era perkembangan teknologi saat ini!</p>\r\n', '2019-05-16 07:29:01'),
(2, 1, 'Fitur PCIe 4.0 Muncul Pada Menu BIOS Motherboard Gigabyte X470', '<p>Berbagai vendor motherboard telah mulai mengembangkan produk mereka dengan chipset X570 terbaru dari AMD. Update BIOS untuk motherboard dengan chipset lawas juga telah mulai diberikan kepada para pengguna. Pada motherboard GIGABYTE, terdapat hal yang menarik pada BIOS update mereka. Menu konfigurasi BIOS pada motherboard GIGABYTE dengan chipset X470 menunjukkan dukungan terhadap PCIe 4.0.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.jagatreview.com/wp-content/uploads/2019/05/untitled-1.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p>PCIe 4.0 merupakan penerus PCIe versi sebelumnya, yakni PCIe 3.0 yang memiliki transfer rate hingga 8 GT/s dan bandwidth x1 hingga 984,6 MB/s. Pada PCIe 4.0, transfer rate yang diberikan dua kali lebih besar daripada PCIe versi sebelumnya, yakni hingga 16 GT/s, dengan bandwidth x1 hingga 1,969 GB/s. Artinya, pada PCIe 4.0 x16, bandwidth yang diberikan untuk slot ini dapat melampaui 30 GB/s. Bandwidth yang besar ini memberikan kesempatan bagi pengembang kartu grafis untuk meningkatkan performa produk mereka.</p>\r\n\r\n<p>AMD sendiri telah memberikan pernyataan terkait dukungan PCIe 4.0 pada chipset X470 di website mereka. AMD menyatakan bahwa seluruh motherboard AM4 seri 300 dan 400 mendukung PCIe 4.0. Memastikan fitur ini mampu bekerja pada motherboard merupakan tugas vendor dari motherboard tersebut.</p>\r\n\r\n<p>Berbagai vendor motherboard belum mengumumkan mengenai dukungan terhadap fitur ini pada beberapa motherboard lama mereka. Kita tunggu saja informasi resmi dari mereka.</p>\r\n\r\n<p>Sumber:&nbsp;<a href=\"https://www.guru3d.com/news-story/pcie-4-feature-pops-up-in-x470-motherboard-bios.html\">guru3d</a></p>\r\n', '2019-05-16 07:29:44'),
(5, 1, 'Zotac Luncurkan Mini-PC Bertenaga dengan Intel Xeon dan NVIDIA Quadro', '<p>Zotac sebagai salah satu produsen berbagai hardware PC baru-baru ini meluncurkan dua produk Mini-PC terbaru mereka. Kedua produk ini hadir dari lini ZBOX Q Series, yakni ZBOX QX3P5000 dan ZBOX QX3P3000. ZBOX Q Series sendiri merupakan Mini-PC yang cukup unik, karena menggunakan kartu grafis NVIDIA Quadro. Produk ini ditujukan untuk para konten kreator yang menginginkan PC dengan performa tinggi dalam<em>&nbsp;form factor</em>&nbsp;yang cukup mungil.</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.jagatreview.com/wp-content/uploads/2019/05/qx3p5000-qx3p3000_overview.jpg\" style=\"height:375px; width:500px\" /></p>\r\n\r\n<p>Kedua Mini-PC ini menggunakan prosesor Intel Xeon E-2136 dengan enam core 3.3 GHz hingga 4.5 GHz. Terdapat dua slot memori RAM yang mendukung SO-DIMM DDR4-2666/2400 hingga 64 GB. Selain itu, ZBOX QX3P5000 dan ZBOX QX3P3000 ini juga dilengkapi dengan slot SSD M.2 NVMe PCIe x4 yang juga mendukung koneksi SATA III. Terdapat ruang untuk pemasangan 2.5&Prime; HDD/SSD SATA III dengan kecepatan hingga 6.0 Gbps. Selain itu, terdapat slot Intel Optane Memory di dalam perangkat ini. Yang membedakan dari kedua produk ini adalah kartu grafis yang digunakan. ZBOX QX3P5000 dilengkapi dengan NVIDIA Quadro P5000, sedangkan ZBOX QX3P3000 menggunakan NVIDIA Quadro P3000.</p>\r\n', '2019-05-16 09:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` enum('Laki-laki','Perempuan') COLLATE utf8_bin NOT NULL,
  `level` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `username`, `password`, `gender`, `level`, `status`) VALUES
(1, 'Super Admin', 'admin@wantech.id', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Laki-laki', 'Administrator', 1),
(2, 'Gummy Bear', 'bear@gmail.com', 'bear', '893b56e3cfe153fb770a120b83bac20c', 'Laki-laki', 'Author', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `author_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
