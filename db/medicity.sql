-- phpMyAdmin SQL Dump
-- version 4.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2016 at 02:01 PM
-- Server version: 5.7.9-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicity`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `chatdate` varchar(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sender`, `receiver`, `chatdate`, `msg`, `id`) VALUES
('alijafar21.ja@gmai.com', 'baneeishaque', '12/12/2004', 'test', 197),
('baneeishaque', 'alijafar21.ja@gmai.com', '12/12/2004', 'test2', 198),
('baneeishaque', 'alijafar21.ja@gmai.com', '2016-05-03 10:01:54', 'hello', 199),
('baneeishaque', 'alijafar21.ja@gmai.com', '2016-05-03 10:02:21', 'hello man', 200),
('baneeishaque', 'b', '2016-05-03 10:34:35', 'fghj', 201),
('baneeishaque', 'b', '2016-05-03 10:34:39', 'dsghhf', 202),
('b', 'baneeishaque', '2016-05-03 10:47:02', 'tell me', 203);

-- --------------------------------------------------------

--
-- Table structure for table `chat_receiver`
--

CREATE TABLE `chat_receiver` (
  `idchat_receiver` int(11) NOT NULL,
  `partner1` varchar(45) DEFAULT NULL,
  `partner2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat_receiver`
--

INSERT INTO `chat_receiver` (`idchat_receiver`, `partner1`, `partner2`) VALUES
(1, 'baneeishaque', 'alijafar21.ja@gmai.com'),
(2, 'b', 'baneeishaque');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `person` varchar(50) NOT NULL,
  `no` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `mail`, `person`, `no`, `message`) VALUES
(2, 'bnbmbmm', 'nbnnmmmm', 'cbnvnmmb', 'uttuiyiyiiyi                                    '),
(3, 'jjklj', 'dhfh', '678788', '    gjhkkhk                                            '),
(4, 'jjklj', 'dhfh', '678788', 'jjgjghkgjhkkhk                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `doctorregistration`
--

CREATE TABLE `doctorregistration` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `db` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `scrtq` varchar(250) NOT NULL,
  `scrtanswer` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `cntry` varchar(100) NOT NULL,
  `kadha` varchar(500) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `regcntry` varchar(250) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `spclintra` varchar(100) NOT NULL,
  `caraward` varchar(100) NOT NULL,
  `carachive` varchar(200) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorregistration`
--

INSERT INTO `doctorregistration` (`name`, `gender`, `db`, `email`, `contactno`, `add`, `password`, `scrtq`, `scrtanswer`, `pin`, `city`, `state`, `cntry`, `kadha`, `hospital`, `regcntry`, `regno`, `spclintra`, `caraward`, `carachive`, `pic`) VALUES
('Dr.jafar ali', 'Male', '23/3/1995', 'alijafar21.ja@gmai.com', '2147483647', 'sdfsdf', '', 'Name of your Favourite Book', 'm', '44', 'g', 'sfds', 'AZ', 'sdf', 'sdf', 'BB', '567567', 'ty', 'hgg', 'hffg', 'm10.jpg'),
('Dr.a', 'Male', 'a', 'a', '919898989898', 'a', '', 'Name of your Favourite Book', 'a', 'a', 'a', 'a', 'AF', 'a', 'a', 'BH', 'a', 'a', 'a', 'a', 'Koala.jpg'),
('Dr.b', 'Male', 'a', 'b', '919898989898', 'a', 'b', 'Name of your Favourite Book', 'a', 'a', 'a', 'a', 'AF', 'a', 'a', 'BH', 'b', 'a', 'a', 'a', 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `db` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `add` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `scrtq` varchar(250) NOT NULL,
  `scrtanswer` varchar(50) NOT NULL,
  `pin` int(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `cntry` varchar(100) NOT NULL,
  `kadha` varchar(500) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `patient_registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`name`, `gender`, `db`, `email`, `contactno`, `add`, `username`, `password`, `scrtq`, `scrtanswer`, `pin`, `city`, `state`, `cntry`, `kadha`, `pic`, `patient_registration_id`) VALUES
('Mr.Banee Ishaque K', 'Male', '28/09/1993', 'baneeishaque@gmail.com', '919446827218', 'Kuttiyathil House\r\nTanalur Post', 'baneeishaque', '9895204814', 'Name of your Favourite Book', 'PNB', 676307, 'Malappuram', 'Kerala', 'IN', 'Nothing for introduction...', 'Lighthouse.jpg', 2),
('Mr.fgh', 'Male', '23/12/1234', 'ggfhh@gmail.com', '9178787878', 'dgdhhfjjhjg                   ', 'banee', '9895204814', 'Name of your Favourite Book', 'gfhg', 68779799, 'sdfdgg', 'ghffhh', 'IN', 'ghhjgj', 'Hydrangeas.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_receiver`
--
ALTER TABLE `chat_receiver`
  ADD PRIMARY KEY (`idchat_receiver`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorregistration`
--
ALTER TABLE `doctorregistration`
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`patient_registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
--
-- AUTO_INCREMENT for table `chat_receiver`
--
ALTER TABLE `chat_receiver`
  MODIFY `idchat_receiver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `patient_registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
