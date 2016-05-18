
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2016 at 01:21 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u430353755_mlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_report`
--

CREATE TABLE IF NOT EXISTS `blood_report` (
  `p_id` varchar(11) NOT NULL,
  `L_id` varchar(20) NOT NULL,
  `dater` date NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `age` varchar(3) NOT NULL,
  `FBS` varchar(7) NOT NULL,
  `SC` varchar(7) NOT NULL,
  `BU` varchar(7) NOT NULL,
  `SGOT` varchar(7) NOT NULL,
  `SGPT` varchar(7) NOT NULL,
  `SA` varchar(7) NOT NULL,
  `SP` varchar(7) NOT NULL,
  `SeA` varchar(7) NOT NULL,
  `globulin` varchar(7) NOT NULL,
  PRIMARY KEY (`p_id`,`L_id`,`dater`),
  KEY `d_id` (`L_id`),
  KEY `L_id` (`L_id`),
  KEY `L_id_2` (`L_id`),
  KEY `date` (`dater`),
  KEY `L_id_3` (`L_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_report`
--

INSERT INTO `blood_report` (`p_id`, `L_id`, `dater`, `p_name`, `age`, `FBS`, `SC`, `BU`, `SGOT`, `SGPT`, `SA`, `SP`, `SeA`, `globulin`) VALUES
('923273514V0', 'NAWA/S/450', '2016-01-11', 'Anjana Eranga Aberathne ', '23', '154', '256', '36', '35', '45', '98', '3.6', '7.2', '2.2'),
('940222982V0', 'DBHF/S/481', '2015-07-20', 'Asen Sanjula', '17', '85', '145', '45', '45', '52', '80', '7', '3.8', '3'),
('940222982V0', 'DBHF/S/481', '2015-04-16', 'Asen Sanjula', '21', '78', '200', '50', '45', '49', '12', '7', '3.4', '3'),
('922440794V0', 'NAWA/S/450', '2016-01-11', 'Mohomed Fasly', '23', '88', '154', '36', '44', '42', '98', '5.6', '9.7', '2.8'),
('940222982V0', 'NAWA/S/450', '2016-01-11', 'Asen Sanjula', '21', '100', '200', '40', '15', '50', '95', '7.2', '4', '3'),
('940222982V0', 'DBHF/S/481', '2016-01-11', 'Asen Sanjula', '21', '78', '170', '42', '45', '40', '95', '7', '3.4', '2.6'),
('940222982V0', 'DBHF/S/481', '2015-03-11', 'Asen Sanjula', '21', '78', '177', '45', '45', '49', '100', '7', '3.4', '3'),
('922440794V0', 'DBHF/S/481', '2016-01-11', 'Mohomed Fasly', '23', '79', '165', '25', '40', '40', '100', '7', '4', '2.8');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `staddress` varchar(50) NOT NULL,
  `l2address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `tel1` varchar(10) NOT NULL,
  `tel2` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`username`, `password`, `fname`, `lname`, `staddress`, `l2address`, `city`, `hospital`, `tel1`, `tel2`, `email`) VALUES
('SLMC2264', '$2y$12$xpCD5rlqnsBFS4gWW6XiHe1Y7j6.RoUqSZ0AzmVU6vZfKzFZSK9aq', 'Chameera', 'Maduranga', '202A,Sewana', 'dehigaspa', 'Pitabeddara', 'Genearal hospital Trincomale', '0713457779', '0413427768', 'oshan.ufo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `expire`
--

CREATE TABLE IF NOT EXISTS `expire` (
  `username` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `latest_date` date NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `expire`
--

INSERT INTO `expire` (`username`, `latest_date`) VALUES
('921891318V0', '2016-01-10'),
('922440794V0', '2016-01-11'),
('', '0000-00-00'),
('940222982V0', '2016-01-11'),
('923273514V0', '2016-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE IF NOT EXISTS `laboratory` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `staddress` varchar(50) NOT NULL,
  `l2address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `telphone1` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`username`, `password`, `fname`, `staddress`, `l2address`, `city`, `telphone1`, `email`) VALUES
('NAWA/S/450', '$2y$12$/ZSnESpI2RqQJzA940rtvulr94POXFiySqEcO.IemzpED51/hXklW', 'Nawaloka', '123B', 'cinnaman road', 'Colombo', '0114526589', 'nawaloka@gmail.com'),
('HEMA/S/487', '$2y$12$9U5jnYP6tet.2A57Mk3kguQ8iiuMa0dtsfC.KpopiPjIxHspi6PR6', 'Hemas', 'No 6', 'galle Rd', 'Bambalapitiya', '0112345689', 'hemas@gmail.com'),
('DBHF/S/481', '$2y$12$TR9/u2sDKe77RKMIxyv4TufoNgcE4fGxitNhtxPiQMg74O8bMYkWm', 'Gunarathne Lab', 'No .516', 'Kegalle Road', 'Karanwanella', '0771169559', 'mffasly@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sufix` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `staddress` varchar(100) NOT NULL,
  `l2address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `password`, `fname`, `lname`, `sufix`, `sex`, `dob`, `email`, `tel`, `staddress`, `l2address`, `city`) VALUES
('923273514V0', '$2y$12$xImQXpgMPt9i5jMDXO9ih.Gu6dmj5xnHbllSslS/xWYBuuDssPyXa', 'Anjana Eranga', 'Aberathne ', '', 'male', '1992-11-22', 'anjanaeranga123@gmail.com', '0758063737', '3/3', 'Kaluwadumulla', 'Ambalangoda'),
('940222982V0', '$2y$12$CgJZMzwsm2O5bm5jOBXP3eseSzpukNwyFS12dLCbOuIONdwgZxps6', 'Asen', 'Sanjula', '', 'male', '1994-01-22', 'asensanjula@gmail.com', '0777245503', 'No 6', 'Galle Rd', 'Ambalangoda'),
('922440794V0', '$2y$12$iTwpdJ.iE3BIwPtRUcXRi.fY4j9llIcjADnemHVVQAvA7gcccw9F.', 'Mohomed', 'Fasly', '', 'male', '1992-08-31', 'mffasly@gmail.com', '0771169559', 'No 47', 'Araliya Mawatha', 'Awissawella'),
('921891318V0', '$2y$12$I0YEEBnkmzJ.MLqDG./yFeH2aXK8eDQ50Hx2SxXf0ZldrSpriUPZC', 'Isuru', 'Sandamal', '', 'male', '1992-07-07', 'isurusandamalis@gmail.com', '0770242919', '67/B,Rathnamalie', 'Ambagahahandiya', 'Uragasmanhandiya'),
('924578458V0', '$2y$12$jAMGmwDmdFoYWO0kgMzp1Odm49GznsZoppoyaCT0nIh9RHRRdbzbe', 'Afsar', 'fasly', '', 'male', '1992-08-31', 'abc@gmail.com', '0112545236', '123b', 'galle Rd', 'Kalutara');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `p_id` varchar(11) NOT NULL,
  `d_id` varchar(20) NOT NULL,
  `pr_date` date NOT NULL,
  `description` text,
  PRIMARY KEY (`p_id`,`d_id`,`pr_date`),
  KEY `d_id` (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`p_id`, `d_id`, `pr_date`, `description`) VALUES
('940222982V0', 'SLMC2264', '2015-08-04', 'Pendol\r\nAsprin\r\nAmokslin\r\nCBS\r\nDDD'),
('940222982V0', 'SLMC2264', '2015-08-27', 'Amoksilin,\r\nAAB\r\nCresm'),
('940222982V0', 'SLMC2264', '2015-09-11', 'penadol'),
('940222982v0', 'SLMC2264', '2016-01-11', 'pENDOL\r\naMOKSILIN'),
('922440794V0', 'SLMC2264', '2016-01-11', 'AAAA');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `received_time` date NOT NULL,
  `alert` varchar(100) NOT NULL,
  PRIMARY KEY (`received_time`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `urine_report`
--

CREATE TABLE IF NOT EXISTS `urine_report` (
  `p_id` varchar(11) NOT NULL,
  `l_id` varchar(20) NOT NULL,
  `dater` date NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_age` varchar(3) NOT NULL,
  `color` varchar(20) NOT NULL,
  `transparency` varchar(20) NOT NULL,
  `ph` varchar(5) NOT NULL,
  `albumin` varchar(20) NOT NULL,
  `sugsr` varchar(20) NOT NULL,
  `bill` varchar(20) NOT NULL,
  `urobilin` varchar(20) NOT NULL,
  `pus_cells` varchar(20) NOT NULL,
  `red_cells` varchar(20) NOT NULL,
  `epithelial_cells` varchar(20) NOT NULL,
  `casts` varchar(20) NOT NULL,
  `crystals` varchar(20) NOT NULL,
  `oraganisms` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`,`l_id`,`dater`),
  KEY `l_id` (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urine_report`
--

INSERT INTO `urine_report` (`p_id`, `l_id`, `dater`, `p_name`, `p_age`, `color`, `transparency`, `ph`, `albumin`, `sugsr`, `bill`, `urobilin`, `pus_cells`, `red_cells`, `epithelial_cells`, `casts`, `crystals`, `oraganisms`) VALUES
('940222982V0', 'NAWA/S/450', '2015-07-11', 'Asen Sanjula', '21', 'yellow', 'clear', '6', 'nill', 'nill', 'nill', 'nill', 'seen', 'nill', 'nill', 'nill', 'nill', 'nill'),
('922440794V0', 'NAWA/S/450', '2016-01-11', 'Mohomed Fasly', '23', 'YELLOW', 'CLEAR', '6', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL'),
('940222982V0', 'NAWA/S/450', '2016-01-11', 'Asen Sanjula', '21', 'yellow', 'clear', '6', 'nill', 'nill', 'nill', 'nill', 'seen', 'nill', 'nill', 'nill', 'nill', 'nill');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(32) NOT NULL,
  `privilege` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `fname`, `password`, `email`, `privilege`) VALUES
(92, '940222982V0', 'Asen', '$2y$12$CgJZMzwsm2O5bm5jOBXP3eseSzpukNwyFS12dLCbOuIONdwgZxps6', 'asensanjula@gmail.com', 'patient'),
(123, '924578458V0', 'Afsar', '$2y$12$jAMGmwDmdFoYWO0kgMzp1Odm49GznsZoppoyaCT0nIh9RHRRdbzbe', 'abc@gmail.com', 'patient'),
(122, '921891318V0', 'Isuru', '$2y$12$8dTdKAEhZhV.VT41el10/.EZQxPY9YtxWjZO0G8sHvRmy..6O8/YO', 'isurusandamalis@gmail.com', 'patient'),
(119, 'DBHF/S/481', 'Gunarathne Lab', '$2y$12$TR9/u2sDKe77RKMIxyv4TufoNgcE4fGxitNhtxPiQMg74O8bMYkWm', 'mffasly@gmail.com', 'lab'),
(120, 'SLMC2264', 'Chameera', '$2y$12$PTbln3Shgoda0owfzqEk4uLqDKsZWLEG4FgS1/T9lTszTKZcsQWfe', 'oshan.ufo@gmail.com', 'doctor'),
(121, '922440794V0', 'Mohomed', '$2y$12$fBjD6F90CuIVYdS5V01oRe0pVpkwR9f/RCIW3SX2WwvoQ.Ksw5XVe', 'mffasly@gmail.com', 'patient'),
(125, 'admin', 'Administrator', '123456', 'medilab381@gmail.com', 'admin'),
(126, 'NAWA/S/450', 'Nawaloka', '$2y$12$/ZSnESpI2RqQJzA940rtvulr94POXFiySqEcO.IemzpED51/hXklW', 'nawaloka@gmail.com', 'lab'),
(127, 'HEMA/S/487', 'Hemas', '$2y$12$9U5jnYP6tet.2A57Mk3kguQ8iiuMa0dtsfC.KpopiPjIxHspi6PR6', 'hemas@gmail.com', 'lab'),
(129, '923273514V0', 'Anjana Eranga', '$2y$12$Uxsyj4FnU385pYlNaqah1.5NbsF0CnJKWN2V9z60rr0z2uZUC8wO.', 'anjanaeranga123@gmail.com', 'patient');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
