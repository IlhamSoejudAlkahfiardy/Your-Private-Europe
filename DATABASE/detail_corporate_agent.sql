-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2024 pada 05.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourprivateeurope`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_corporate_agent`
--

CREATE TABLE `detail_corporate_agent` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_id` varchar(64) DEFAULT NULL,
  `title_en` varchar(64) DEFAULT NULL,
  `description_id` text DEFAULT NULL,
  `description_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_corporate_agent`
--

INSERT INTO `detail_corporate_agent` (`id`, `image`, `title_id`, `title_en`, `description_id`, `description_en`) VALUES
(2, '1712287358_40b38d00a61bf34f4df7.webp', '<p>Incentives Group Tour</p>', '<p>Incentives Group Tour</p>', '<p>Ingin merencanakan Incentives Group Tour ke Eropa? Atau Anda butuh solusi custom-made private &amp; group tour untuk klien Anda?</p>\r\n<p>Apakah Anda travel agent atau perusahaan multinasional, kami berpengalaman bekerjasama dengan Anda untuk memberikan solusi yang terbaik.</p>\r\n<p>Sesuai dengan keinginan dan budget Anda, kami akan membuat program khusus yang pasti akan membuat klien Anda puas, makin mendorong ambisi dan memotivasi para pencetak prestasi terbaik Anda.</p>\r\n<p>Kami siap melayani Anda dalam pengadaan:</p>\r\n<ul>\r\n<li>Itinerary &amp; program</li>\r\n<li>Tiket pesawat &amp; visa</li>\r\n<li>Akomodasi</li>\r\n<li>Venue</li>\r\n<li>Transport</li>\r\n<li>Staffing</li>\r\n<li>F&amp;B</li>\r\n<li>Hal-hal logistik lainnya</li>\r\n</ul>', '<p>Do you want to plan an Incentives Group Tour to Europe? Or do you need a custom-made private &amp; group tour solutions for your clients?</p>\r\n<p>Whether you are a travel agent or a multinational company, we are experienced in working with you to provide the best solution.</p>\r\n<p>According to your wishes and budget, we will create a special program that would surely satisfy your clients, further boost your ambition and motivate your top performers.</p>\r\n<p>We are ready to serve you with:</p>\r\n<ul>\r\n<li>Itinerary &amp; program</li>\r\n<li>Airplane tickets &amp; visa</li>\r\n<li>Accommodation</li>\r\n<li>Venue</li>\r\n<li>Transportation</li>\r\n<li>Staffing</li>\r\n<li>F&amp;B</li>\r\n<li>Other logistical items</li>\r\n</ul>'),
(3, '1712287497_d2f1252ad7a5c7cefe5a.webp', '<p>Event Management &amp; Logistics</p>', '<p>Event Management &amp; Logistics</p>', '<p>Percayakan Event Anda di Eropa kepada kami. Kami siap membantu persiapan dan pelaksanaan Event Anda, dari pemikiran konsep, eksekusi, hingga hal-hal logistik lainnya.</p>\r\n<p>Mulai dari&nbsp;<strong>Gala Dinner,</strong>&nbsp;<strong>Brand/Product Launching</strong>,&nbsp;<strong>Company Party</strong>&nbsp;hingga Event bisnis lainnya, kami telah berpengalaman dan selalu menerapkan cara kerja yang holistik, dan melihat Event Anda secara end-to-end.</p>\r\n<p>Kami siap melayani dalam pengadaan:</p>\r\n<ul>\r\n<li>Venue</li>\r\n<li>Akomodasi</li>\r\n<li>Transport &amp; logistik</li>\r\n<li>Event staffing</li>\r\n<li>F&amp;B</li>\r\n<li>Gifts &amp; teasers</li>\r\n</ul>', '<p>Trust us with organizing your event in Europe. We are ready to help with the preparation and implementation of your event, from conceptual thinking, execution, to other logistical items.</p>\r\n<p>Mulai dari&nbsp;<strong>Gala Dinner,</strong>&nbsp;<strong>Brand/Product Launching</strong>,&nbsp;<strong>Company Party</strong>&nbsp;hingga Event bisnis lainnya, kami telah berpengalaman dan selalu menerapkan cara kerja yang holistik, dan melihat Event Anda secara end-to-end.</p>\r\n<p>Kami siap melayani dalam pengadaan:</p>\r\n<ul>\r\n<li>Venue</li>\r\n<li>Accommodation</li>\r\n<li>Transportation &amp; logistics</li>\r\n<li>Event staffing</li>\r\n<li>F&amp;B</li>\r\n<li>Gifts &amp; teasers</li>\r\n</ul>'),
(4, '1712287512_71773bcf970efa73881e.webp', '<p>Fair, Expo &amp; Exhibition</p>', '<p>Pameran, Expo &amp; Exhibition</p>', '<p>Apakah perusahaan Anda ingin menyelenggarakan&nbsp;<strong>pameran</strong>&nbsp;di Eropa? Atau berpartisipasi dalam&nbsp;<strong>Expo</strong>&nbsp;<strong>atau Trade Fair</strong>&nbsp;berskala internasional di Eropa?</p>\r\n<p>Gunakan pengalaman dan&nbsp;<em>know-how</em>&nbsp;dari team kami, yang sudah terbiasa merencanakan, merancang, dan mengelola Pameran &amp; Exhibition dalam berbagai ukuran di seluruh Eropa.</p>\r\n<p>Kami siap membantu dalam pengadaan:</p>\r\n<ul>\r\n<li>Venue &amp; akomodasi</li>\r\n<li>Desain, logistik dan konstruksi stand pameran</li>\r\n<li>Branding dan signage</li>\r\n<li>Lighting, rigging dan special effects lainnya</li>\r\n<li>Jaringan internet dan elektrik</li>\r\n<li>Hal-hal logistik lainnya</li>\r\n</ul>', '<p class=\" translation-block\">Does your organization want to host&nbsp;<strong>exhibitions&nbsp;</strong>in Europe? Or do you want to participate in the&nbsp;<strong>Expo</strong>&nbsp;<strong>or International Trade Fair</strong>&nbsp;in Europe?</p>\r\n<p class=\" translation-block\">Leverage the experience and&nbsp;<em>know-how&nbsp;</em>of our team, who are used to planning, designing, and managing Fairs &amp; Exhibitions of various sizes across Europe.</p>\r\n<p>We are ready to serve you with:</p>\r\n<ul>\r\n<li>Venue &amp; accommodation</li>\r\n<li>Design, logistics and construction of exhibition stand</li>\r\n<li>Branding and signage</li>\r\n<li>Lighting, rigging and other special effects</li>\r\n<li>Internet connection and electricity network</li>\r\n<li>Other logistical items</li>\r\n</ul>'),
(5, '1712287528_49651b11cae1346aa30f.webp', '<p>Conference &amp; Meetings</p>', '<p>Conference &amp; Meetings</p>', '<p>Dengan menggabungkan pengalaman kami dan mendengarkan kebutuhan Anda, kami yakin kami sanggup memberikan solusi untuk Conference &amp; Meetings yang optimal.</p>\r\n<p>Kami menerapkan cara kerja yang kolaboratif, terstruktur dan mencakup proses pelaksanaan yang efisien, terperinci dan terpadu.</p>\r\n<p>Kami akan membantu Anda dengan:</p>\r\n<ul>\r\n<li>Pemilihan venue</li>\r\n<li>Pengaturan Conference Room, Audio Visual &amp; refreshments</li>\r\n<li>Pengaturan agenda &amp; pelaksanaan eksekusi</li>\r\n<li>Transport &amp; logistik</li>\r\n<li>Akomodasi</li>\r\n<li>Hal-hal logistik lainnya</li>\r\n</ul>', '<p>By combining our experience and listening to your needs, we believe we can provide an optimal solution for your Conference &amp; Meetings.</p>\r\n<p>We adopt a collaborative, structured way of working and include an efficient, detailed and integrated implementation process.</p>\r\n<p>We are ready to help you with:</p>\r\n<ul>\r\n<li>Venue selection</li>\r\n<li>Conference Room, Audio Visual &amp; refreshments</li>\r\n<li>Agenda &amp; execution</li>\r\n<li>Transportation &amp; logistics</li>\r\n<li>Accommodation</li>\r\n<li>Other logistical items</li>\r\n</ul>'),
(6, '1712287542_463e6f2a666bcd5ee4c8.webp', '<p>Site Visit &amp; Team Building</p>', '<p>Site Visit &amp; Team Building</p>', '<p>Ingin menyelenggarakan acara&nbsp;<strong>Site Visit, Off-Site Training, atau Team Building</strong>&nbsp;di Eropa bersama karyawan Anda? Rencanakan aktivitas Anda bersama kami.</p>\r\n<p>Dengan pengalaman, keterampilan, dan kreativitas kami yang luas dan unik, Anda bisa yakin bahwa acara Anda terorganisir dengan baik, dan team Anda akan dibekali dengan aktivitas yang tepat.</p>\r\n<p>Beri motivasi dan energi kepada karyawan Anda. Kami akan bekerja sama dengan Anda dan memberikan solusi sesuai dengan budget dan tujuan organisasi Anda.</p>\r\n<p>Kami akan membantu Anda dengan:</p>\r\n<ul>\r\n<li>Pemilihan aktivitas &amp; venue</li>\r\n<li>Pengaturan agenda dan pelaksanaan eksekusi</li>\r\n<li>Transport &amp; logistik</li>\r\n<li>Pemilihan pembicara</li>\r\n<li>Akomodasi</li>\r\n<li>Hal-hal logistik lainnya.</li>\r\n</ul>', '<p class=\" translation-block\">Do you want to host a&nbsp;<strong>Site Visit, Off-Site Training, or Team Building&nbsp;</strong>in Europe with your employees? Plan your activities with us.</p>\r\n<p>With our experience, skills and creativity, you can be sure that your event is well organized, and that your team will be equipped with the right activities.</p>\r\n<p>Give motivation and energy to your team. We will work with you and provide solutions according to your organization\'s budget and goals.</p>\r\n<p>We are ready to help you with:</p>\r\n<ul>\r\n<li>Venue &amp; activity selections</li>\r\n<li>Agenda &amp; execution</li>\r\n<li>Transportation &amp; logistics</li>\r\n<li>Speaker selection</li>\r\n<li>Accommodation</li>\r\n<li>Other logistical items</li>\r\n</ul>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_corporate_agent`
--
ALTER TABLE `detail_corporate_agent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_corporate_agent`
--
ALTER TABLE `detail_corporate_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
