-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 10:08 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koganime_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anime_list`
--

CREATE TABLE `anime_list` (
  `id_anime` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `episode` int(3) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anime_list`
--

INSERT INTO `anime_list` (`id_anime`, `judul`, `genre`, `episode`, `gambar`, `isi`) VALUES
(3, 'Human Rexorenizer', 'comedy, phycological, romance', 50, 'aaxPmER1_700w_0.jpg', '<p>this&#39;s great</p>\r\n'),
(5, 'no boner kun', 'Romance, Action, Scy-fi', 100, 'ajG9PYKZ_700w_0.jpg', '<p>gdfgdfg</p>\r\n'),
(6, 'Re-Zero Kara Hajimeru Isekai Seikatsu', 'comedy, phycological, romance', 25, '609.jpg', '<p>good anime</p>\r\n'),
(7, 'Call of Duty', 'war', 1, 'gf.jpg', '<p>asd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `id` int(30) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komen`, `nama`, `isi`, `id`, `tgl`) VALUES
(197, 'rem', '<p>Kira&quot; versi internasional nya kapan nongol yak <img alt=\"emoticon-Big Grin\" src=\"https://s.kaskus.id/images/smilies/sumbangan/14.gif\" title=\"Big Grin\" /><br />\r\n<br />\r\n#NiGameBaruKeluarNgarepBgtLu :v</p>\r\n', 45, '2017-11-10 16:50:30'),
(198, 'alvi', '<p>Ane baru level 15 pake si mei, masih pake kostum default. Itu caranya utk biar bisa dapet semacam puzzle utk unlock charnya cuma bisa lewat shop aja ya?<br />\r\n<br />\r\nAda yg levelnya di bwh ane tapi udh punya char grade S, kan rada ngeselin</p>\r\n', 45, '2017-11-10 16:50:51'),
(199, 'arvidh', '<p>Waduh difficulty yg normal aja rada klabakan, apalagi yg S, chapter 1 jg blm kelar jd blom bisa unlock difficulty.<br />\r\n<br />\r\nAne smp skrg maen baru gacha sekali, pertama maen aja ga ada semacam beginners support items kayak game2 yg lain.<br />\r\nBuat beli tiket aja 280 gem. Udah capek2 ngumpulin taunya cuma dapet semacam soul bintang 3.</p>\r\n', 45, '2017-11-10 16:51:15'),
(200, 'alvi', '<p>Soul bintang 3? Mksud nya stigma? Klo ga satu set percuma gan ga berasa,mending pake satu set stigma bintang 2 ada bonus stat nyaðŸ˜‚</p>\r\n', 45, '2017-11-10 16:51:44'),
(201, 'Mahasiswa Kere', '<p>HP gak support gan.. :&quot;V</p>\r\n', 45, '2017-11-10 16:55:06'),
(202, 'emilia', '<p>Hmmmm...</p>\r\n', 46, '2017-11-10 16:58:33'),
(203, 'arvidh', '<p>LOL</p>\r\n', 46, '2017-11-10 16:59:02'),
(204, 'arvidh', '<p>UP</p>\r\n', 47, '2017-11-10 17:02:21'),
(205, 'alvi', '<p>jejak</p>\r\n', 47, '2017-11-10 17:02:35'),
(206, 'rem', '<p>jejak</p>\r\n', 47, '2017-11-10 17:13:02'),
(207, 'rem', '<p>Kenapa emilia?</p>\r\n', 46, '2017-11-12 09:44:41'),
(208, 'rem', '<p>wkwkwkk</p>\r\n', 48, '2017-11-17 02:33:05'),
(209, 'emilia', '<p>hmmm</p>\r\n', 48, '2017-11-17 02:34:24'),
(210, '13051996alvi', '<p>wew</p>\r\n', 48, '2017-11-17 02:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `email`, `telp`, `password`) VALUES
(6, 'alvi', 'fadillahalvi@rocketmail.com', '085773389861', '6926d00cd5aa03cd25435414691ab4fc'),
(11, 'rem', 'evelinavirda@gmail.com', '045454', '0dc62c02f5ea9467243814140cd549af'),
(17, 'arvidh', 'alvi.lah13@gmail.com', '123123123', '6926d00cd5aa03cd25435414691ab4fc'),
(20, 'Mahasiswa Kere', 'alvi.lah13@gmail.com', '08577338986', '0dc62c02f5ea9467243814140cd549af'),
(22, 'emilia', 'emilia@gmail.com', '1261', 'aafcc615b67a5a2e360fdd7b390060ee'),
(23, '13051996alvi', 'alvi.lah13@gmail.com', '12123', '6deee2814fa5c96bb046067a5148e3da');

-- --------------------------------------------------------

--
-- Table structure for table `myanimelist`
--

CREATE TABLE `myanimelist` (
  `id_list` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `score` int(2) NOT NULL,
  `proses` int(3) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myanimelist`
--

INSERT INTO `myanimelist` (`id_list`, `judul`, `status`, `score`, `proses`, `gambar`, `username`) VALUES
(14, 'Human Rexorenizer', 'complete', 8, 13, 'aaxPmER1_700w_0.jpg', 'alvi'),
(15, 'no boner kun', 'watching', 2, 3, 'ajG9PYKZ_700w_0.jpg', 'rem'),
(16, 'Re-Zero Kara Hajimeru Isekai Seikatsu', 'complete', 10, 25, '609.jpg', 'alvi'),
(17, 'no boner kun', 'plan_to_watch', 0, 1, 'ajG9PYKZ_700w_0.jpg', 'alvi'),
(18, 'Human Rexorenizer', 'watching', 0, 1, 'aaxPmER1_700w_0.jpg', 'rem'),
(19, 'Re-Zero Kara Hajimeru Isekai Seikatsu', 'watching', 0, 9, '609.jpg', 'emilia'),
(20, 'Call of Duty', 'watching', 10, 1, 'gf.jpg', 'emilia');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(15) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `penulis`, `kategori`, `judul`, `gambar`, `isi`, `tgl`) VALUES
(45, 'alvi', 'game', 'Honkai Impact Problem', 'sd.jpg', '<p>Ini kenapa ya? padahal dah login..</p>\r\n', '2017-11-10 16:49:36'),
(46, 'rem', 'Anime', 'Rem, Re-Zero Kara Hajimeru Isekai Seikatsu', 'Rem_Anime.png', '<h1>Appearance</h1>\r\n\r\n<p>Rem has medium length sky blue hair that covers her right eye, large light blue eyes, and young features. She also has hair clips towards left side of her hair, flower-shaped ribbon on the same side of her hair, and a maid hairband. She looks nearly identical to her <a href=\"http://rezero.wikia.com/wiki/Ram\" title=\"Ram\">sister</a> apart from her hair, eyes, and ribbon coloring. She usually wears a maid uniform, and since her chest is slightly larger than her sister&#39;s, she secretly changes the measurements to hide it.</p>\r\n\r\n<h2>Personality</h2>\r\n\r\n<p>Rem tends to speak in a superficially polite manner and sometimes acts without thinking. She holds both respect to the point of worship and guilt toward her sister for an incident in the past.</p>\r\n\r\n<p>Because of her respect and guilt toward her sister, she used to think of herself as inferior. After Subaru saves her, she falls deeply in love with him, becoming one of his most loyal followers. Rem will stick with him no matter what happens, even if Subaru rejects himself.</p>\r\n\r\n<p>Currently Rem has had her name and memories eaten by <a href=\"http://rezero.wikia.com/wiki/Ley_Batenkaitos\" title=\"Ley Batenkaitos\">Ley Batenkaitos</a>, erasing her existence from the world and putting her in suspended animation.</p>\r\n\r\n<h2>Abilities</h2>\r\n\r\n<p><strong>Water Magic</strong>: Rem is skilled at Water Magic and Roswaal estimates her skill as being in the lower high. She is able to attack and heal using her magic.</p>\r\n\r\n<p><strong>Equipment</strong>: Rem wields a Morningstar in combat.</p>\r\n\r\n<p><strong>Oni Bloodline</strong> (é¬¼ã®è¡€æ— <em>Oni no Ketsuzoku</em>): As she is an Oni, Rem can enter her Oni Form, manifesting a single white horn on her forehead. The horn increases her physical abilities and acts as a gate which gathers mana from the atmosphere.</p>\r\n', '2017-11-10 16:57:08'),
(47, 'arvidh', 'Komputer', 'Spesifikasi Asus X555QG BX121D, Bertenaga AMD A12-9700P', 'aa.png', '<h3>Kelebihan Asus X555QG BX121D</h3>\r\n\r\n<ul>\r\n	<li>Kinerja bersaing</li>\r\n	<li>Harga masuk akal</li>\r\n	<li>RAM default 8GB</li>\r\n</ul>\r\n\r\n<h3>Kekurangan Asus X555QG BX121D</h3>\r\n\r\n<ul>\r\n	<li>Tidak dilengkapi OS Windows pre-installed</li>\r\n</ul>\r\n\r\n<h3>Harga Asus X555QG BX121D</h3>\r\n\r\n<p>Harga laptop Asus X555QG BX121D yang ditenagai prosesor AMD A12-9700P terbaru di Indonesia saat artikel ini ditulis adalah Rp 7.699.000 atau tepatnya Rp 7,7 juta. Seperti biasa, harga ini relatif tidak mengikat dan dapat berubah sewaktu-waktu sesuai kebijakan seller atau penjual. Berdasarkan spesifikasi yang diusungnya, seri X555QG BX121D andalan Asus ini cukup kompetitif di kelasnya.<br />\r\n<br />\r\nDukungan desain elegan khas Asus, kinerja kompetitif berkat duet prosesor AMD A12-9700P dengan RAM 8GB, layar berukuran besar, grafis yang bertenaga, dan hard disk berkapasitas 1TB menjadi daya tarik utama Asus X555QG BX121D menurut Laptophia Blog.<br />\r\n<br />\r\nSayangnya, laptop ini tak didukung oleh OS Windows pre-installed di dalamnya. Secara umum, Laptophia Blog menilai Asus X555QG BX121D ini cocok untuk menangani grafis dan komputasi kelas menengah.</p>\r\n\r\n<h3>Spesifikasi Asus X555QG BX121D</h3>\r\n\r\n<ul>\r\n	<li>Layar TFT LCD dengan LED backlight 15,6 inci resolusi 1366 x 768 piksel</li>\r\n	<li>Prosesor AMD A12-9700P quad-core dengan kecepatan 2,5GHz Turbo maksimal 3,4GHz</li>\r\n	<li>Chipset AMD</li>\r\n	<li>Grafis AMD Radeon R7 + AMD Radeon R8 M435DX VRAM 2GB</li>\r\n	<li>Memori RAM 8GB DDR4-2133MHz onboard, upgradeable</li>\r\n	<li>Storage hard disk 1TB 5400rpm</li>\r\n	<li>Konektivitas WiFi, Port USB 3.0, port USB 2.0, VGA port, Port HDMI, DVD-RW, card reader</li>\r\n	<li>Asus SonicMaster audio&nbsp;</li>\r\n	<li>Kamera depan tersedia</li>\r\n	<li>Baterai 2 Cell 37Whrs</li>\r\n	<li>Sistem Operasi DOS</li>\r\n	<li>Dimensi 38.2 x 25.6 x 2.58 cm dengan berat 2,2 kg</li>\r\n	<li>Warna hitam</li>\r\n</ul>\r\n', '2017-11-10 17:01:34'),
(48, 'rem', 'game', 'Call of Duty', 'gf.jpg', '<h2>Development</h2>\r\n\r\n<h3>Background</h3>\r\n\r\n<p>&quot;<em>You know I&#39;ve been making games for over 26 years, and I&#39;ll tell you it&#39;s the best game <a href=\"http://callofduty.wikia.com/wiki/Sledgehammer_Games\" title=\"Sledgehammer Games\">we</a> ever made.</em>&quot;</p>\r\n\r\n<p>&mdash; <a href=\"http://callofduty.wikia.com/wiki/Glen_Schofield\" title=\"Glen Schofield\">Glen Schofield</a>, co-founder and studio head of <a href=\"http://callofduty.wikia.com/wiki/Sledgehammer_Games\" title=\"Sledgehammer Games\">Sledgehammer Games</a></p>\r\n\r\n<p>A modern <a href=\"http://callofduty.wikia.com/wiki/World_War_II\" title=\"World War II\">World War II</a> <em>Call of Duty </em>was alluded to in a 2014 <em><a href=\"http://callofduty.wikia.com/wiki/Call_of_Duty:_Advanced_Warfare\" title=\"Call of Duty: Advanced Warfare\">Call of Duty: Advanced Warfare</a></em> launch interview with <a href=\"http://callofduty.wikia.com/wiki/Michael_Condrey\" title=\"Michael Condrey\">Michael Condrey</a>, head of Sledgehammer Games. In the interview by Metro, the interviewer asked him what the possibilities of where the next <em>Call of Duty </em>could go in terms of setting. Condrey responded, &quot;Well, no. It&rsquo;s curious. I can only answer from my own personal tastes, this is my own personal opinion. But some of my favourite pieces of entertainment are set in World War II. Band of Brothers, I&rsquo;m a massive fan of Band of Brothers? Did you see that?&quot; Condrey then dived further into the subject, &quot;And that&rsquo;s a great hero&rsquo;s war, kind of the last that was recognised as a noble cause in a war. So yeah, I think a next generation game with the latest production values and robustness in a World War II setting like Band of Brothers would be amazing. Now, how would it play and how would the multiplayer work after the new movement set in Advanced Warfare? That&rsquo;s a tougher question than I&rsquo;ve had to tackle yet&hellip;&quot;.<sup><a href=\"http://callofduty.wikia.com/wiki/Call_of_Duty:_WWII#cite_note-6\">[7]</a></sup></p>\r\n\r\n<p>During an interview on February 7th, 2015, Michael Condrey talked briefly about the many ideas that Sledgehammer was toying around with for their next <em>Call of Duty</em> installment, saying that the team had &quot;talked about new ways to play&quot; and that these things could range from features such as &quot;branching story-lines or third person mode or crazy changes to the multiplayer&quot;.</p>\r\n\r\n<p>In June 2015, a post E3 interview with <a href=\"http://callofduty.wikia.com/wiki/Activision\" title=\"Activision\">Activision</a> CEO Eric Hirshberg and IGN occurred. At one point in the interview, IGN specifically asked Hirshberg if a return to the era was possible in the near future, to which Hirshberg replied &ldquo;There are these moments where certain ideas seem to be floating in the collective consciousness, and there are two &lsquo;meteor hitting the earth&rsquo; movies in one summer and were both in production for years.&rdquo; &ldquo;Those kinds of things happen,&rdquo; Hirshberg said, &ldquo;so there&rsquo;s definitely a chasing of innovation and new ideas within a well-worn genre that lead people to similar conclusions like changing time periods. And of course I think that opens up the opportunity for what is old is new again.&rdquo;<sup><a href=\"http://callofduty.wikia.com/wiki/Call_of_Duty:_WWII#cite_note-7\">[8]</a></sup></p>\r\n\r\n<p>During Activision Blizzard&rsquo;s Q4 Earnings Call, Activision confirmed that Sledgehammer Games would be developing the next <em>Call of Duty</em> in 2017. Activision also said that the <em>Call of Duty</em> 2017 title would&nbsp;&quot;take<em> Call of Duty </em>back to its roots<em>.&rdquo; </em>Activision Blizzard&#39;s COO emphasized that the game would have&nbsp;<em>&ldquo;</em>traditional combat will once again take center stage<em>,&rdquo;</em>&nbsp;confirming that the traditional gameplay would be returning.<sup><a href=\"http://callofduty.wikia.com/wiki/Call_of_Duty:_WWII#cite_note-8\">[9]</a></sup></p>\r\n\r\n<p>In developing the game, Sledgehammer recruited World War II historian <a href=\"http://callofduty.wikia.com/wiki/Martin_Morgan\" title=\"Martin Morgan\">Martin Morgan</a>, to help make the game as historically accurate as possible.<sup><a href=\"http://callofduty.wikia.com/wiki/Call_of_Duty:_WWII#cite_note-:1-9\">[10]</a></sup> Sledgehammer Games also traveled to various places across Europe to take pictures and drawings to be used as concepts for in-game.<sup><a href=\"http://callofduty.wikia.com/wiki/Call_of_Duty:_WWII#cite_note-:1-9\">[10]</a></sup> The theme of the game was to be connected with your men, to experience the brotherhood of American soldiers during World War II. Sledgehammer was inspired by the motto of the original <em><a href=\"http://callofduty.wikia.com/wiki/Call_of_Duty\" title=\"Call of Duty\">Call of Duty</a></em> &quot;In war, no one fights alone.&quot; so they echoed that idea to their narrative.</p>\r\n', '2017-11-11 11:52:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `anime_list`
--
ALTER TABLE `anime_list`
  ADD PRIMARY KEY (`id_anime`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `fk_komentar` (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `myanimelist`
--
ALTER TABLE `myanimelist`
  ADD PRIMARY KEY (`id_list`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime_list`
--
ALTER TABLE `anime_list`
  MODIFY `id_anime` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `myanimelist`
--
ALTER TABLE `myanimelist`
  MODIFY `id_list` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar` FOREIGN KEY (`id`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
