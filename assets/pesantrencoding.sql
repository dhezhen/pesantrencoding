-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 05:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantrencoding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `foto`) VALUES
(8, 'Dede', 'dede', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_send` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `name`, `email`, `message`, `date_send`) VALUES
(45, 'Dede Husen', 'adehusen@gmail.com', 'dsfdsafsadf', '0000-00-00 00:00:00'),
(46, 'Dede Husen', 'adehusen@gmail.com', 'dsfdsfsfdsfdaf', '2020-11-29 16:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `name`, `image`, `city`) VALUES
(15, 'Yahoo', 'yahoo.png', 'Kuningan '),
(17, 'Google', 'Google.png', 'Kuningan ');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `jenis_pertanyaan` varchar(1000) NOT NULL,
  `jawaban` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `jenis_pertanyaan`, `jawaban`) VALUES
(7, 'Apasih Movement id itu ?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit neque vero cupiditate saepe eum tempora excepturi, ab doloribus hic facilis ad, voluptas fugit impedit consequatur error amet! Unde, necessitatibus molestias?'),
(8, 'Layanan apasaja yang ada ?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit neque vero cupiditate saepe eum tempora excepturi, ab doloribus hic facilis ad, voluptas fugit impedit consequatur error amet! Unde, necessitatibus molestias?'),
(9, 'Bagaimana cara memesan dana projek itu ?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit neque vero cupiditate saepe eum tempora excepturi, ab doloribus hic facilis ad, voluptas fugit impedit consequatur error amet! Unde, necessitatibus molestias?');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `kategori`, `foto`) VALUES
(40, 'Branding-Optimization', 'Branding-Optimization.jpg'),
(41, 'Wedding-Optimization', 'Wedding-Optimization.JPG'),
(42, 'Wedding-Optimization', 'Wedding-Optimization1.JPG'),
(43, 'Wedding-Optimization', 'Wedding-Optimization2.JPG'),
(44, 'Event-Optimization', 'Event-Optimization.jpeg'),
(46, 'Branding-Optimization', 'Branding-Optimization1.jpg'),
(48, 'Event-Optimization', 'Event-Optimization.jpg'),
(49, 'Event-Optimization', 'Event-Optimization.png'),
(50, 'Event-Optimization', 'Event-Optimization1.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `is_active` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `detail`, `image`, `is_active`) VALUES
(11, 'Landingpages', 'Once the market analysis process is completed our staff will search for opportunities that are in reach', '<p><span style=\"color: #858796; font-family: Nunito, -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: rgba(0, 0, 0, 0.075);\">Once the market analysis process is completed our staff will search for opportunities that are in reach</span></p>', 'Landingpages.png', 1),
(12, 'fotography', 'Once the market analysis process is completed our staff will search for opportunities that are in reach', '<p><span style=\"color: #858796; font-family: Nunito, -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: rgba(0, 0, 0, 0.075);\">Once the market analysis process is completed our staff will search for opportunities that are in reach</span></p>', 'fotography.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `name`, `url`, `icon`, `is_active`) VALUES
(0, 'facebook', 'facebook.com/dhe_zhen', '<i class=\"fab fa-facebook\"></i>', 1),
(3, 'twitter', 'twitter.com', '<i class=\"fab fa-twitter\"></i>', 1),
(7, 'youtube', 'youtube.com', '<i class=\"fab fa-youtube fa-stack-1x\"></i>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `posisi` varchar(30) NOT NULL,
  `fb` varchar(30) NOT NULL,
  `ig` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `posisi`, `fb`, `ig`, `no_hp`, `twitter`, `foto`) VALUES
(14, 'Egy Yulianti', 'Content Manager', '-', '-', '-', '-', 'Egy.png'),
(15, 'Yusril ', 'Advisor', '-', '-', '-', '-', 'Yusril.png'),
(16, 'Ilyan', 'Project Manager', '', '', '', '', 'Ilyan1.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `isi_testimoni` varchar(200) NOT NULL,
  `bintang` varchar(1000) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `pekerjaan`, `isi_testimoni`, `bintang`, `foto`) VALUES
(47, 'Dede Husen ', 'Web Developer', ' Luar biasa, saya sangat puas denga apa yang telah anda buat,,,', '<i class=\"lni lni-star-filled\"></i><i class=\"lni lni-star-filled\"></i><i class=\"lni lni-star-filled\"></i><i class=\"lni lni-star-filled\"></i><i class=\"lni lni-star-filled\"></i>', 'WhatsApp_Image_2020-07-14_at_11_22_49.jpeg'),
(48, '', '', ' Luar biasa, keren pokonyalah...', '<i class=\"lni lni-star-filled\"></i><i class=\"lni lni-star-filled\"></i><i class=\"lni lni-star-filled\"></i><i class=\"lni lni-star-filled\"></i><i class=\"lni lni-star-filled\"></i>', 'Pengurus_Yayasan_Karantina_Tahfizh_Al-Quran_Nasional1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(22, 'Husen', 'admin@admin.com', 'tts.jpg', '$2y$10$uIudiDDbSdhkQvZRao4wneBmSgdqBTzC27.FEgGaw2nVGdenjHKHa', 1, 1, 1604504025),
(38, 'Dede Husen', 'adehusen@gmail.com', '_MG_2186_-_Copy.JPG', '$2y$10$NT1NjQaep.lVijvvDgM0aOnWmKcxeUWYwSFNU0hQv7hg0Vc6eeplG', 2, 1, 1605275035);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(49, 1, 2),
(50, 1, 3),
(51, 1, 6),
(53, 2, 2),
(55, 1, 9),
(56, 1, 10),
(57, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'administrator'),
(2, 'user'),
(3, 'Menu Management'),
(6, 'User Management'),
(9, 'Social Media'),
(10, 'Mitra'),
(11, 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', '<i class=\"fas fa-fw fa-tachometer-alt\"></i>', 1),
(2, 2, 'My Profile', 'user', '<i class=\"fas fa-user\"></i>', 1),
(3, 2, 'Edit Profile', 'user/edit', '<i class=\"fas fa-user-edit\"></i>', 1),
(4, 3, 'Menu Management', 'menu', '<i class=\"fas fa-folder\"></i>', 1),
(5, 3, 'Submenu Management', 'menu/submenu', '<i class=\"fas fa-folder-minus\"></i>', 1),
(9, 1, 'Role', 'admin/role', '<i class=\"fas fa-user-cog\"></i>', 1),
(10, 2, 'Change Password', 'user/changepassword', '<i class=\"fas fa-key\"></i>', 1),
(11, 6, 'Manage User', 'admin/manage', '<i class=\"fas fa-users-cog\"></i>', 1),
(17, 9, 'Manage Sosmed', 'sosmed/', '<i class=\"fas fa-thumbs-up\"></i>', 1),
(18, 10, 'Manage Mitra', 'mitra', '<i class=\"fas fa-building\"></i>', 1),
(19, 11, 'Manage Service', 'service/index', '<i class=\"fas fa-users-cog\"></i>', 1),
(20, 11, 'Add Service', 'service/addService', '<i class=\"fas fa-plus-square\"></i>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `ip` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`ip`, `date`, `hits`, `online`, `time`, `id`) VALUES
('::1', '2020-07-09', 3, '1594312845', '2020-07-09 18:39:19', 2),
('::1', '2020-07-10', 9, '1594395434', '2020-07-10 17:31:48', 3),
('::1', '2020-07-12', 43, '1594575970', '2020-07-12 16:02:41', 4),
('::1', '2020-07-17', 17, '1595012048', '2020-07-17 19:08:41', 5),
('::1', '2020-07-30', 1, '1596129711', '2020-07-30 19:21:51', 6),
('::1', '2020-08-08', 14, '1596903571', '2020-08-08 15:13:28', 7),
('::1', '2020-08-30', 1, '1598802443', '2020-08-30 17:47:23', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
