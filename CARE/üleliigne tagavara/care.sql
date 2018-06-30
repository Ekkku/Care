-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 08:43 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `choice` varchar(255) DEFAULT NULL,
  `TrueOrFalse` enum('T','F') DEFAULT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `answers_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`answers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`choice`, `TrueOrFalse`, `question_id`, `answers_id`) VALUES
('Õnnetuna', 'T', 1, 1),
('Vihasena', 'T', 1, 2),
('Ükskõikselt', 'F', 1, 3),
('Lõbusalt', 'F', 1, 4),
('Õnnelikult', 'F', 2, 5),
('Vallatult', 'F', 2, 6),
('Kurvana', 'T', 2, 7),
('Segaduses olevana', 'T', 2, 8),
('Tänulikult', 'T', 3, 9),
('Põlglikult', 'F', 3, 10),
('Kadedalt', 'F', 3, 11),
('Rõõmsana', 'T', 3, 12),
('Raevukalt', 'T', 4, 13),
('Tänulikult', 'F', 4, 14),
('Õnnetuna', 'T', 4, 15),
('Uhkena', 'F', 4, 16),
('Masendunult', 'F', 5, 17),
('Kahetsevalt', 'F', 5, 18),
('Rõõmsana', 'T', 5, 19),
('Vaimustunult', 'T', 5, 20),
('Ükskõikselt', 'F', 6, 21),
('Halvasti', 'T', 6, 22),
('Lõbusalt', 'F', 6, 23),
('Kurvana', 'T', 6, 24),
('Hirmunult', 'T', 7, 25),
('Rahulikult', 'T', 7, 26),
('Kadedalt', 'F', 7, 27),
('Armunult', 'F', 7, 28),
('Rõõmsalt', 'F', 8, 29),
('Piinlikult', 'T', 8, 30),
('Häbelikult', 'T', 8, 31),
('Uudishimulikult', 'F', 8, 32),
('Häbelikult', 'F', 9, 33),
('Ükskõikselt', 'F', 9, 34),
('Kurvana', 'T', 9, 35),
('Üksildasena', 'T', 9, 36),
('Uudishimulikuna', 'T', 10, 37),
('Igatsevalt', 'F', 10, 38),
('Üksildasena', 'F', 10, 39),
('Rõõmsalt', 'T', 10, 40);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `first_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `player_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


CREATE TABLE `accounts`.`users` 
(

    `first_name` VARCHAR(50) NOT NULL,
     `last_name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` BOOL NOT NULL DEFAULT 0,
PRIMARY KEY (`id`) 
);

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`first_name`, `code`, `points`, `player_id`) VALUES
('Egle',  'armas', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `TheQuestion` varchar(255) NOT NULL,
  `questions_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`questions_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`TheQuestion`, `questions_id`) VALUES
('Sinu peale karjuti terve klassi ees. Kuidas sa ennast tundsid?', 1),
('Sa õppisid kontrolltööks, aga said ikkagi halva hinde. Kuidas sa ennast tundsid?', 2),
('Sa käisid  klassiga lemmik jäätise poes ekskursioonil. Kuidas sa ennast tundsid?', 3),
('Üks õpilane naeris su üle ja andis sulle ebameeldiva hüüdnime. Kuidas sa ennast tundsid?', 4),
('Sinu parim sõber ostis sulle sünnipäeva kingituse. Kuidas sa ennast tundsid?', 5),
('Sa ei olnud eile sõbra vastu kena . Kuidas sa ennast tundsid?', 6),
('Sa pead süsti saamiseks minema arsti juurde. Kuidas sa ennast tunned?', 7),
('Komistasid ja kukkusid koridoris, kõik õpilased naersid sinu üle. Kuidas sa ennast tundsid?', 8),
('Sinu sõber kolis ära. Kuidas sa ennast tundsid?', 9),
('Sa said koolis uue sõbra. Kuidas sa ennast tundsid?', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
