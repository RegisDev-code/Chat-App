-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 05:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(4, 125818940, 1628329741, 'Cc'),
(5, 125818940, 1628329741, 'Moi c\'est Régis'),
(6, 455403748, 1628329741, 'Salut'),
(7, 1628329741, 125818940, 'Ouais bro ça roule ?'),
(8, 1628329741, 125818940, 'Et la famille ?'),
(9, 1628329741, 125818940, 'Je voulais t\'écrire à propos d\'un sujet la dernière fois mais tu n\'étais pas en ligne'),
(10, 125818940, 1628329741, 'Ah j\'étais un peu occupé'),
(11, 1628329741, 125818940, 'Sinon, comment tu te portes ?'),
(12, 125818940, 1628329741, 'Bien et toi ?'),
(13, 1628329741, 125818940, 'Bien aussi'),
(14, 1628329741, 125818940, 'Cette semaine a été un peu rude mais tout va bien maintenant'),
(15, 1251470898, 679912537, 'Bonjour Mr'),
(16, 679912537, 1251470898, 'Salut 😀 ça boom ?'),
(17, 1251470898, 679912537, 'Oui ça peut aller. Et vous ? J\'aimerais avoir plus d\'éclaircissement sur le cours de PHP que vous avez publié récemment et qui parlait de la POO'),
(18, 679912537, 1251470898, 'Ah je vois 🙂 tu peux me poser toutes les questions auxquelles tu souhaiterais avoir des réponses. Je suis là pour ça'),
(19, 1251470898, 679912537, 'D\'acc\'.  Alors au niveau de la création des objets d\'une classe, je n\'arrive pas trop à assimiler comment ça se passe'),
(20, 679912537, 1251470898, 'Je vois. C pourtant très simple. Donne-moi un instant, je te reviens tout de suite. Là, je taffe sur un truc important et je peux pas vraiment répondre à tes questions comme tu le souhaiterais si je ne finis pas ce truc oft 😅'),
(21, 1251470898, 679912537, 'Ok d\'acc\' écrivez-moi quand vous aurez fini svp, pour me faire signe'),
(22, 679912537, 1251470898, 'D\'accord tkt, à tout à l\'heure ✌'),
(23, 1251470898, 679912537, 'ok'),
(24, 679912537, 1421215621, 'Salut comment ça va ?'),
(25, 1421215621, 679912537, 'Oui mon frère, c comment ?'),
(26, 679912537, 1421215621, 'Cv bien et toi ?'),
(27, 455403748, 1421215621, 'Cc Jo ça pull-up ou wa-k ? 😎'),
(28, 125818940, 1421215621, 'cc'),
(29, 1421215621, 125818940, 'Slt comment cv ?'),
(30, 125818940, 1337481259, 'Salut'),
(31, 1337481259, 125818940, 'Comment cv ?'),
(32, 125818940, 1337481259, 'comment cv ?'),
(33, 1321442716, 1337481259, 'Bonjour Monsieur'),
(34, 1337481259, 1321442716, 'Bonjour. Et ce après-midi ?'),
(35, 1321442716, 125818940, 'Coucou'),
(36, 125818940, 1321442716, 'Salut comment ça va ?'),
(37, 1321442716, 125818940, 'Bien et toi ?'),
(38, 125818940, 1321442716, 'hfdiunfiubiohjoriuhjugidbgjbhiuvnjuerigheuhnviuvhnsubjn bdfub idsgfuidnhtbiuherughyjinjngf,bospgk,eospkqosqfjiosbj,isonhjbjtrifohjbitjhudfihjuidfbsfjqu'),
(39, 1321442716, 125818940, 'uhjiughiurghziuoqhgushguhfnriughurgidnhvfiughrujhycbgfdeyhfgedyftgtygftzygfreyfgiuxjvnh jnv cjnfbn fkjbnkfnbkjdfnbkjdfngjfnkjdgndkjhn,khjneiurhvjudjbnkjnb kcv,bn cgk bckxvnbdfkjbngkigjvwlxkvjfkb,l kc,vbj,licjvidfhjurihduxbvhjn n, jfvnnmkwocmqkfriohjtiog'),
(40, 125818940, 1321442716, 'g_utzçgueàçqugçjubçsàhjub_ihus_gshydfijgudrifviushgbvughiubfhgiudfhviufh'),
(41, 125818940, 1421215621, 'Bien et toi ?'),
(42, 1421215621, 125818940, 'Bien aussi'),
(43, 1421215621, 125818940, 'Et ce matin ?'),
(44, 125818940, 1421215621, 'cv pml'),
(45, 125818940, 1337481259, 'ok'),
(46, 1337481259, 125818940, 'pas de problème');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `img_route` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `first_name`, `last_name`, `email`, `password`, `img`, `img_route`, `status`) VALUES
(3, 125818940, 'ODOULAMY', 'Régis', 'regisodoulamy@gmail.com', 'Reg.is200', '1714401045_17125231380b06f155-6727-4a25-8282-a42ac329a026.JPG', 'images/1714401045_17125231380b06f155-6727-4a25-8282-a42ac329a026.JPG', 'Déconnecté'),
(4, 279995433, 'CODJIA', 'Loïc', 'codjialoic@gmail.com', 'largent', '1714401189_17125231380b06f155-6727-4a25-8282-a42ac329a02516.PNG', 'images/1714401189_17125231380b06f155-6727-4a25-8282-a42ac329a02516.PNG', 'Déconnecté'),
(5, 933208080, 'ADJOU', 'Régis', 'regisadjou@gmail.com', 'leRa', '1714401246_17125231380b06f155-6727-4a25-8282-a42ac329a02517.PNG', 'images/1714401246_17125231380b06f155-6727-4a25-8282-a42ac329a02517.PNG', 'Déconnecté'),
(6, 455403748, 'ADJE', 'Dine', 'joseadje@gmail.com', 'bigdozo', '1714401359_IMG_5725.PNG', 'images/1714401359_IMG_5725.PNG', 'Déconnecté'),
(7, 1027785973, 'MIGAN', 'Néomie', 'neomiemigan@gmail.com', 'laboss', '1714401433_IMG_5908.PNG', 'images/1714401433_IMG_5908.PNG', 'Déconnecté'),
(8, 1321442716, 'Patel', 'Azaz', 'azazpatel@gmail.com', 'azaz', '1716682513_12.JPG', 'images/1716682513_12.JPG', 'Actif'),
(9, 679912537, 'ASSANI', 'Mourchid', 'mourchidalao@gmail.com', 'mourchid29', '1716682905_20.PNG', 'images/1716682905_20.PNG', 'Déconnecté'),
(10, 1337481259, 'OLORY', 'Suzon', 'suzonolory@gmail.com', 'suzon', '1716683221_17125231380b06f155-6727-4a25-8282-a42ac329a02521.PNG', 'images/1716683221_17125231380b06f155-6727-4a25-8282-a42ac329a02521.PNG', 'Actif'),
(11, 1251470898, 'Giraud', 'Pierre', 'pierregiraud@gmail.com', 'pierreg', '1716683426_IMG_5908.PNG', 'images/1716683426_IMG_5908.PNG', 'Déconnecté'),
(12, 1481128717, 'Abdias', 'Jérémie', 'abdias@gmail.com', 'adbias', '1716683833_17125231380b06f155-6727-4a25-8282-a42ac329a02515.JPG', 'images/1716683833_17125231380b06f155-6727-4a25-8282-a42ac329a02515.JPG', 'Déconnecté'),
(13, 1421215621, 'Many', 'Mandy', 'many@gmail.com', 'mani', '1716684317_20.PNG', 'images/1716684317_20.PNG', 'Déconnecté'),
(14, 723870539, 'Offshore', 'Daniel', 'danioffshore@gmail.com', 'offshore', '1716684472_17125231380b06f155-6727-4a25-8282-a42ac329a026.JPG', 'images/1716684472_17125231380b06f155-6727-4a25-8282-a42ac329a026.JPG', 'Déconnecté'),
(15, 858167187, 'ADAM', 'Malick', 'adam@gmail.com', 'adammalick', '1716684901_IMG_6985.PNG', 'images/1716684901_IMG_6985.PNG', 'Déconnecté'),
(16, 542781119, 'AGASSOUNON', 'Germain', 'germain@gmail.com', 'germain', '1716687020_IMG_6352.JPG', 'images/1716687020_IMG_6352.JPG', 'Déconnecté'),
(17, 1628329741, 'DJOSSOU', 'Claudy', 'claudy@gmail.com', 'claudy', '1716691007_17125231380b06f155-6727-4a25-8282-a42ac329a02523.PNG', 'images/1716691007_17125231380b06f155-6727-4a25-8282-a42ac329a02523.PNG', 'Déconnecté');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
