-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `physioatdoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `booking_id` int(11) NOT NULL,
  `physio_id` int(11) NOT NULL,
  `patient_name` varchar(20) DEFAULT NULL,
  `complaint` varchar(20) DEFAULT NULL,
  `timeslot` varchar(20) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `phone` decimal(10,0) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`booking_id`, `physio_id`, `patient_name`, `complaint`, `timeslot`, `booking_date`, `phone`, `email`, `address`) VALUES
(1, 9, 'Hetvi', 'knee pain', '08:00 PM', '2022-04-09', '6359826511', 'hetvisolanki84@gmail.com', ''),
(2, 8, 'Shravik', 'back pain', '06:00 pm', '2022-04-09', '7046677720', 'sonishravik6@gmail.com', ''),
(3, 14, 'Aksh', 'joint mobilization', '07:00 pm', '2022-04-20', '1234567891', 'akshvaidya2003@gmail.com', 'Kangana Society, Isanpur, Ahmedabad'),
(4, 14, 'Aksh', 'joint mobilization', '07:00 pm', '2022-04-20', '1234567891', 'akshvaidya2003@gmail.com', 'Kangana Society, Isanpur, Ahmedabad'),
(5, 14, 'Alpa', 'muscles', '08:00 PM', '2022-04-09', '7046677720', 'het@gmail.com', 'Kangana Society, Isanpur, Ahmedabad'),
(6, 14, 'Alpa', 'back pain', '08:00 PM', '2022-04-09', '7046677720', 'het@gmail.com', 'Kangana Society, Isanpur, Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `cont_no` varchar(10) NOT NULL,
  `Seq_id` int(11) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `user_type` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `cont_no`, `Seq_id`, `answer`, `user_type`, `doi`, `dou`, `isactive`) VALUES
(7, 'Darshna', 'Rangani', 'admin@gmail.com', '1098', 'Female', '4534565434', 1, 'Blue', 3, '2020-03-18 01:22:17', '2020-03-18 00:00:00', 1),
(8, '', '', 'hetvi@gmail.com', 'het', '', '', 1, '', 3, '2022-04-03 05:44:03', '2022-04-03 05:44:03', 1),
(9, 'Hetvi', 'Solanki', 'hets@gmail.com', '1234', 'female', '6359826511', 1, 'red', 3, '2022-04-04 04:29:58', '2022-04-04 04:29:58', 1),
(10, 'Dhruva ', 'Vaidya', 'dhruva0208v@gma', '020801', 'female', '7046677720', 1, 'blue', 3, '2022-04-07 06:36:24', '2022-04-07 06:36:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_appointment`
--

CREATE TABLE `table_appointment` (
  `booking_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `physio_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `chief_complaint` varchar(100) NOT NULL,
  `timeslot` varchar(30) NOT NULL,
  `booking_date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_appointment`
--

INSERT INTO `table_appointment` (`booking_id`, `u_id`, `physio_id`, `name`, `phone`, `email`, `chief_complaint`, `timeslot`, `booking_date`, `image`, `dou`, `isactive`) VALUES
(1, 0, 0, 'abc', '9945324590', 'abc@gmail.com', '0', '0000-00-00', '2020-03-06', '', '2020-03-06', 2),
(2, 7, 0, 'Rohan', '3546547644', 'rohan@gmail.com', '0', '0000-00-00', '2020-03-06', '', '2020-03-06', 2),
(3, 8, 0, 'abc', '3436554345', 'abc@gmail.com', '0', '0000-00-00', '2020-03-06', '', '2020-03-06', 2),
(4, 8, 8, 'xyz', '4567778444', 'xyz@gmail.com', '', '0000-00-00', '2020-03-06', '6.jpg', '2020-03-17', 2),
(5, 0, 7, 'darshna', '3546547644', 'ranganidarshna09@gmail.com', 'dsff', '0000-00-00', '2020-03-06', '4.jpg', '2020-03-19', 2),
(6, 22, 7, 'Shefali', '9945324590', 'shefali@gmail.com', 'fgvbbbbbb', '0000-00-00', '2020-03-06', '6.jpg', '2020-03-19', 2),
(7, 22, 13, 'Dipti', '9945324590', 'dipti@gmail.com', 'BAck Pain', '0000-00-00', '2020-03-17', '1.jpg', '2020-03-17', 1),
(8, 24, 11, 'Mitali', '3546547644', 'mitali@gmail.com', 'Back Pain', '3:00 to 4:00', '2020-03-19', 'service-four.jpg', '2020-03-19', 2),
(9, 25, 11, 'mitali', '9945324590', 'mitali@gmail.com', 'Neck Pain', '12:00 to 1:00', '2020-03-19', 'service-one.jpg', '2020-03-19', 1),
(10, 24, 9, 'Johar', '3546547644', 'johar@gmail.com', 'Back Pain', '12:00 to 1:00', '2020-03-30', '7.jpg', '2020-03-30', 1),
(11, 25, 11, 'mitali', '4567778444', 'ranganidarshna09@gmail.com', 'Leg pain', '6:00 to 7:00', '2020-03-30', '8.jpg', '2020-03-30', 2),
(12, 23, 9, 'Mitali', '3243253465', 'mitali@gmail.com', 'setrddrg', '3:00 to 4:00', '2020-04-02', '2.jpg', '2020-04-02', 2),
(13, 23, 9, 'Mitali', '2738479483', 'mitali@gmail.com', 'qwertt', '3:00 to 4:00', '2020-04-02', 'gallery-03.jpg', '2020-04-02', 2),
(14, 23, 9, 'Mitali', '9945324590', 'mitali@gmail.com', 'tyvguyhijjj', '5:00 to 6:00', '2020-04-02', 'video-thumb-01.jpg', '2020-04-02', 2),
(15, 0, 0, '', '', '', '', '', '2022-04-06', '', '2022-04-06', 1),
(16, 0, 0, '', '', '', '', '', '2022-04-06', '', '2022-04-06', 1),
(17, 0, 0, '', '', '', '', '', '2022-04-06', '', '2022-04-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_area`
--

CREATE TABLE `table_area` (
  `area_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `area_name` varchar(30) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_area`
--

INSERT INTO `table_area` (`area_id`, `city_id`, `state_id`, `area_name`, `doi`, `dou`, `isactive`) VALUES
(1, 3, 2, 'sanand', '2020-03-03', '2020-03-16', 1),
(2, 5, 1, 'Varachha', '2020-03-03', '2020-03-16', 1),
(3, 1, 1, 'C G road', '2020-03-03', '2020-03-16', 1),
(4, 5, 1, 'Siddhnath', '2020-03-03', '2020-03-16', 1),
(5, 1, 1, 'nikol', '2020-03-16', '2020-03-17', 1),
(6, 4, 2, 'radha krishna hall', '2020-03-16', '2020-03-19', 1),
(7, 17, 1, 'College road', '2020-04-08', '2020-04-08', 1),
(8, 1, 1, 'Navarangpura', '2020-04-08', '2020-04-08', 1),
(9, 1, 1, 'Prahlad nagar', '2020-04-08', '2020-04-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_cities`
--

CREATE TABLE `table_cities` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_name` varchar(30) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_cities`
--

INSERT INTO `table_cities` (`city_id`, `state_id`, `city_name`, `doi`, `dou`, `isactive`) VALUES
(1, 1, 'Ahmedabad', '2020-03-03', '2020-03-16', 1),
(2, 2, 'Chandrapur', '2020-03-03', '2020-03-16', 1),
(3, 2, 'Satara', '2020-03-03', '2020-03-16', 1),
(4, 2, 'Amravti', '2020-03-03', '2020-03-19', 1),
(5, 1, 'Surat', '2020-03-03', '2020-03-19', 1),
(6, 1, 'Vadodra', '2020-03-03', '2020-03-16', 1),
(7, 3, 'udaipur', '2020-03-03', '2020-03-03', 1),
(8, 1, 'Bavla', '2020-04-01', '2020-04-01', 2),
(9, 1, 'Daskroi', '2020-04-01', '2020-04-01', 2),
(10, 1, 'Detroj-Rampura', '2020-04-01', '2020-04-01', 2),
(11, 1, 'Dhandhuka', '2020-04-01', '2020-04-01', 2),
(12, 1, 'Dholera', '2020-04-01', '2020-04-01', 2),
(13, 1, 'Dholka', '2020-04-01', '2020-04-08', 2),
(14, 1, 'Mandal', '2020-04-01', '2020-04-01', 2),
(15, 1, 'Sanand', '2020-04-01', '2020-04-01', 2),
(16, 1, 'Viramgam', '2020-04-01', '2020-04-01', 2),
(17, 1, 'Amreli', '2020-04-01', '2020-04-01', 1),
(18, 1, 'Babra', '2020-04-01', '2020-04-01', 2),
(19, 1, 'Bagasara', '2020-04-01', '2020-04-01', 2),
(20, 1, 'Dhari', '2020-04-01', '2020-04-01', 2),
(21, 1, 'Jafrabad', '2020-04-01', '2020-04-01', 1),
(22, 1, 'Khambha', '2020-04-01', '2020-04-01', 1),
(23, 1, 'Kunkavav vadia', '2020-04-01', '2020-04-01', 2),
(24, 1, 'Lathi', '2020-04-01', '2020-04-01', 2),
(25, 1, 'Lilia', '2020-04-01', '2020-04-01', 2),
(26, 1, 'Rajula', '2020-04-01', '2020-04-01', 2),
(27, 1, 'Savarkundla', '2020-04-01', '2020-04-01', 1),
(28, 1, 'Anand', '2020-04-01', '2020-04-01', 2),
(29, 1, 'Anklav', '2020-04-01', '2020-04-01', 2),
(30, 3, 'Noida', '2020-04-08', '2020-04-08', 1),
(31, 3, 'Noida', '2020-04-08', '2020-04-08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_complaint`
--

CREATE TABLE `table_complaint` (
  `comp_id` int(11) NOT NULL,
  `physio_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_complaint`
--

INSERT INTO `table_complaint` (`comp_id`, `physio_id`, `u_id`, `message`, `doi`, `dou`, `isactive`) VALUES
(1, 13, 0, 'bvcgh', '2020-03-16', '2020-03-16', 2),
(2, 13, 22, 'dgdhfdh', '2020-03-16', '2020-03-16', 2),
(3, 13, 22, 'good', '2020-03-16', '2020-03-17', 2),
(4, 13, 22, 'fdjfk', '2020-03-17', '2020-03-30', 2),
(5, 14, 22, 'She is not come at perfect time....', '2020-04-08', '2020-04-08', 1),
(6, 15, 25, 'He  is not attand the patients......', '2020-04-08', '2020-04-08', 1),
(7, 11, 27, 'The therapist was half hour late', '2022-04-04', '2022-04-04', 1),
(8, 11, 27, 'The therapist was half hour late', '2022-04-04', '2022-04-04', 1),
(9, 11, 27, 'The therapist was half hour late', '2022-04-04', '2022-04-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_contact`
--

CREATE TABLE `table_contact` (
  `cont_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `ph_no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_contact`
--

INSERT INTO `table_contact` (`cont_id`, `u_name`, `ph_no`, `email`, `message`, `doi`, `dou`, `isactive`) VALUES
(1, 'Riya', '7685940586', 'riya@gmail.com', 'Please send your appointment  process.......', '2020-03-12', '2020-03-17', 1),
(2, 'Rahul', '4356879065', 'rahul123@gmail.com', 'I want to know about your best physiotherapist......', '2020-03-17', '2020-03-17', 1),
(3, 'Viraj Shah', '5645347867', 'Viraj@gmail.com', 'I Know about your Online System.....', '2020-04-08', '2020-04-08', 1),
(4, 'hetvi', '635956917', 'abc@gmail.com', 'How can i postpone my appointment?', '2022-04-05', '2022-04-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_degree`
--

CREATE TABLE `table_degree` (
  `degree_id` int(11) NOT NULL,
  `degree_name` varchar(30) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_degree`
--

INSERT INTO `table_degree` (`degree_id`, `degree_name`, `doi`, `dou`, `isactive`) VALUES
(1, 'Master', '2020-02-28', '2020-02-28', 1),
(2, 'Master', '2020-02-28', '2020-02-28', 2),
(3, 'Becholar', '2020-02-28', '2020-03-16', 1),
(4, 'PHD', '2020-02-28', '2020-03-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_feedback`
--

CREATE TABLE `table_feedback` (
  `feed_id` int(11) NOT NULL,
  `physio_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_feedback`
--

INSERT INTO `table_feedback` (`feed_id`, `physio_id`, `u_id`, `description`, `doi`, `dou`, `isactive`) VALUES
(1, 11, 22, 'Good Work', '2020-03-17', '2020-03-17', 1),
(2, 11, 23, '\"Friendly staff always happy to help and assist with any requests.\"', '2020-03-17', '2020-03-17', 1),
(3, 12, 23, '', '2020-03-17', '2020-03-17', 2),
(4, 12, 24, '\"Always get the best of treatment, happy with the service.\"', '2020-03-17', '2020-03-17', 2),
(5, 13, 25, '\"Great team, efficient yet interested in how I am.\"', '2020-03-17', '2020-03-17', 1),
(6, 15, 22, '\"Always get the best of treatment, happy with the service.\"', '2020-04-08', '2020-04-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_patient_reg`
--

CREATE TABLE `table_patient_reg` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(30) NOT NULL,
  `u_lname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cont_no` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `Seq_id` int(11) NOT NULL,
  `answer` varchar(30) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` int(1) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_patient_reg`
--

INSERT INTO `table_patient_reg` (`u_id`, `u_fname`, `u_lname`, `dob`, `age`, `gender`, `photo`, `email`, `cont_no`, `address`, `state_id`, `city_id`, `area_id`, `Seq_id`, `answer`, `password`, `user_type`, `doi`, `dou`, `isactive`) VALUES
(22, 'Dipti', 'Gajjar', '1999-03-13', 25, 'Female', 'dipti.jpeg', 'dipti@gmail.com', '3456435465', 'Ahemdabad', 1, 1, 5, 2, 'panjabi', '1098', 1, '2020-03-05', '2020-04-08', 1),
(23, 'Jiya', 'patel', '1991-03-21', 34, 'Female', 'jiya.jpg', 'jiya@gmail.com', '5298634152', 'rajkot', 2, 2, 4, 3, 'Ramuji city', '12345', 1, '2020-03-17', '2020-03-17', 1),
(24, 'Johar', 'Jani', '1993-03-11', 40, 'Male', '9.jpg', 'johar@gmail.com', '8452321523', 'Ramkrishna ROad', 2, 7, 6, 5, '6523523200', '123123', 1, '2020-03-17', '2020-03-18', 1),
(25, 'Mitali', 'Jani', '1987-04-06', 29, 'Female', 'mitali.jpg', 'mitali@gmail.com', '4343553222', 'Near Sports grond', 3, 6, 1, 1, 'red', '121212', 1, '2020-03-17', '2020-04-01', 1),
(27, 'Hetvi', 'Solanki', '2002-01-29', 21, 'Female', 'Hetvi.jpeg', 'hetvi@gmail.com', '6468416479', '201, Anupam appt', 10, 30, 9, 1, 'red', 'het', 1, '2022-04-04', '2022-04-04', 1),
(28, 'hets', 'thakor', '2022-04-08', 13, 'Female', ' WhatsApp Image 2022-03-11 at 12.37.50 AM.jpeg', 'hetvi@gmail.com', '4646198', 'halar road', 6, 0, 0, 1, 'red', 'het', 1, '2022-04-04', '2022-04-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_physio_reg`
--

CREATE TABLE `table_physio_reg` (
  `physio_id` int(11) NOT NULL,
  `physio_name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `physio_dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `cont_no` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `doc_upload` varchar(100) NOT NULL,
  `total_exp` int(5) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `spec_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `Seq_id` int(11) NOT NULL,
  `answer` varchar(30) NOT NULL,
  `user_type` int(1) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_physio_reg`
--

INSERT INTO `table_physio_reg` (`physio_id`, `physio_name`, `password`, `physio_dob`, `email`, `cont_no`, `address`, `state_id`, `city_id`, `area_id`, `doc_upload`, `total_exp`, `degree_id`, `spec_id`, `photo`, `Seq_id`, `answer`, `user_type`, `doi`, `dou`, `isactive`) VALUES
(8, 'Jiya', '12345', '2020-03-15', 'jiya@gmail.com', '4537283790', '101, sarasvat, Radhika park', 1, 1, 4, 'document', 3, 4, 5, 'doctor-lab-2.jpg', 1, 'Green', 2, '2020-03-06', '2020-03-06', 1),
(9, ' vani Sharma', '121212', '2020-03-20', 'sharma@gmail.com', '9904683999', '36, merumount, nikol, ahmedabad', 1, 1, 3, 'document', 4, 3, 5, 'event-1.jpg', 2, 'maggie', 2, '2020-03-06', '2020-03-06', 1),
(11, 'Rohan Jani', '10981098', '2020-01-20', 'rohan@gmail.com', '4323231232', '43, Ram krishna society', 2, 4, 1, 'document', 1, 3, 3, 'doctor-2.jpg', 1, 'Blue', 2, '2020-03-06', '2020-03-06', 1),
(13, 'Rajvi Sharma', '12345', '2020-03-05', 'rajvi@gmail.com', '4354321345', 'Varachha road', 1, 1, 2, 'service-four.jpg', 4, 4, 5, 'doctor-lab-1.jpg', 3, 'Pers', 2, '2020-03-16', '2020-03-31', 1),
(14, 'Radhika Gupta', '24680135', '1989-06-07', 'radhika@gmail.com', '7684453445', '201, Shree nagar, College road, Amreli.', 1, 17, 7, 'video-thumb-04.jpg', 2, 2, 2, 'doctor-1.jpg', 6, 'radhu', 2, '2020-04-08', '2020-04-08', 1),
(15, 'Shyam Dave', '453234', '1997-07-13', 'shyam@gmail.com', '5465457898', '21, Mahesh Apartment, Prahlad nagar', 1, 1, 9, 'video-thumb-04.jpg', 1, 4, 5, 'doctor-3.jpg', 1, 'Black', 2, '2020-04-08', '2020-04-08', 1),
(16, 'hets', '234', '2008-07-08', 'het@gmail.com', '6359826511', 'anupam appt.', 5, 0, 0, 'Hetvi.jpeg', 5, 4, 1, 'Hetvi.jpeg', 1, 'red', 2, '2022-04-04', '2022-04-04', 1),
(17, 'Swara', 'het', '2022-04-06', 'hetvi@gmail.com', '67615971', 'MK Gandhi road', 7, 0, 0, 'WhatsApp Image 2022-03-11 at 12.37.50 AM.jpeg', 4, 3, 4, ' Hetvi.jpeg', 1, 'red', 2, '2022-04-04', '2022-04-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_post_photo_video`
--

CREATE TABLE `table_post_photo_video` (
  `post_id` int(11) NOT NULL,
  `physio_id` int(11) NOT NULL,
  `photo_video` varchar(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `treat_id` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_post_photo_video`
--

INSERT INTO `table_post_photo_video` (`post_id`, `physio_id`, `photo_video`, `title`, `description`, `treat_id`, `doi`, `dou`, `isactive`) VALUES
(5, 0, 'art1.jpg', 'Abc', 'vfvvvvvvvvvvv', 15, '2020-03-16', '2020-03-16', 2),
(6, 0, '1.jpg', 'How is joint pain treated?', 'It may help to use topical pain relievers or take nonsteroidal anti-inflammatory drugs to reduce pai', 8, '2020-03-16', '2020-03-19', 2),
(7, 0, '1.jpeg', 'Neck pain is a common complain', 'Examples of common conditions causing neck pain are degenerative disc disease, neck strain, osteoart', 15, '2020-03-16', '2020-03-17', 2),
(8, 13, '1.jpg', 'About Neck pain', 'Neck pain is the sensation of discomfort in the neck area.', 11, '2020-03-17', '2020-04-04', 1),
(9, 13, '1.jpeg', 'Sports', 'Treatments for sports injuries can vary depending on injury type, location, and severity. ', 10, '2020-04-01', '2020-04-04', 1),
(10, 13, '3 Exercises to Help Prevent Back Pain.mp4', 'efgdfghfg', 'dsfhjdtggggggggggh', 14, '2020-04-02', '2020-04-02', 2),
(11, 15, 'download.jpg', 'Recovry Rehabilitation ', 'Occupational therapy focuses on restoring abilities associated with daily and work-related tasks.', 14, '2020-04-09', '2020-04-09', 1),
(12, 16, 'Hetvi.jpeg', 'You should try neck excercises', 'Try stretching excercises. ', 13, '2022-04-04', '2022-04-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_recruitment`
--

CREATE TABLE `table_recruitment` (
  `recruit_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_recruitment`
--

INSERT INTO `table_recruitment` (`recruit_id`, `title`, `image`, `description`, `doi`, `dou`, `isactive`) VALUES
(3, 'Urgent Requirement for physiot', '2.png', 'Apply to 581 new Physiotherapy Jobs across India. Also Check for Jobs with similar Skills and Titles', '2020-03-02', '2020-04-03', 1),
(4, 'Orthopedicas', '3.png', 'We are hiring foyguijr a Physiotherapist - OBG @ Sakra World Hospital,Bangalore Requirements: MPT in', '2020-03-02', '2020-04-03', 1),
(5, 'sdf', 'art1.jpg', 'the most common sports injuries are sprains and strains, fractures and dislocations.', '2020-03-02', '2020-03-02', 2),
(6, 'Abc', 'rec1.jpg', 'the most common sports injuries are sprains and strains, fractures and dislocations.', '2020-03-05', '2020-03-05', 2),
(7, 'Physiotherapist At Vadodraa', '4.jpg', 'Physiotherapist Opening Anrsdfd Vacancy. Physiotherapist jobs are some of the most rewarding and sou', '2020-03-05', '2020-04-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_sec_q_details`
--

CREATE TABLE `table_sec_q_details` (
  `Seq_id` int(11) NOT NULL,
  `que_name` varchar(30) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_sec_q_details`
--

INSERT INTO `table_sec_q_details` (`Seq_id`, `que_name`, `doi`, `dou`, `isactive`) VALUES
(1, 'What is your favourite color?', '2020-02-28', '2020-02-28', 1),
(2, 'What is your favourite food?', '2020-02-28', '2020-02-28', 1),
(3, 'What is your favourite place?', '2020-02-28', '2020-02-28', 1),
(4, 'What is your Birth date ?', '2020-03-04', '2020-03-30', 1),
(5, 'What is Your old Phone Number?', '2020-03-04', '2020-03-04', 1),
(6, 'What is your Pet Name?', '2020-03-04', '2020-03-17', 1),
(7, 'what', '2022-04-03', '2022-04-03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_specialization`
--

CREATE TABLE `table_specialization` (
  `spec_id` int(11) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `spec_name` varchar(30) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_specialization`
--

INSERT INTO `table_specialization` (`spec_id`, `degree_id`, `spec_name`, `doi`, `dou`, `isactive`) VALUES
(1, 2, 'Neurology', '2020-03-03', '2020-03-16', 1),
(2, 3, 'Sports', '2020-03-03', '2020-03-16', 1),
(3, 2, 'sports', '2020-03-03', '2020-03-03', 2),
(4, 0, 'sports', '2020-03-03', '2020-03-03', 2),
(5, 4, 'Cardiology', '2020-03-03', '2020-04-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_state`
--

CREATE TABLE `table_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_state`
--

INSERT INTO `table_state` (`state_id`, `state_name`, `doi`, `dou`, `isactive`) VALUES
(1, 'Gujarat', '2020-02-28', '2020-02-28', 1),
(2, 'Maharashtra', '2020-02-28', '2020-04-02', 1),
(3, 'Uttarpradesh', '2020-02-28', '2020-03-17', 1),
(4, 'Kerala', '2020-04-01', '2020-04-01', 1),
(5, 'Tamil  Nadu', '2020-04-01', '2020-04-01', 1),
(6, 'Jammu and Kashmir', '2020-04-01', '2020-04-01', 1),
(7, 'Karnatak', '2020-04-01', '2020-04-01', 1),
(8, 'Bihar', '2020-04-01', '2020-04-01', 1),
(9, 'Rajashthan', '2020-04-01', '2020-04-01', 1),
(10, 'Panjab', '2020-04-01', '2020-04-01', 1),
(11, 'Andhra Pradesh', '2020-04-01', '2020-04-01', 2),
(12, 'Assam', '2020-04-01', '2020-04-01', 2),
(13, 'Telangana', '2020-04-01', '2020-04-01', 2),
(14, 'West Bangal', '2020-04-01', '2020-04-01', 2),
(15, 'Goa', '2020-04-01', '2020-04-01', 2),
(16, 'Odisha', '2020-04-01', '2020-04-01', 2),
(17, 'Madhyapradesh', '2020-04-01', '2020-04-01', 2),
(18, 'Jharkhand', '2020-04-01', '2020-04-01', 2),
(19, 'Haryana', '2020-04-01', '2020-04-01', 2),
(20, 'Manipur', '2020-04-01', '2020-04-01', 2),
(21, 'Chhatisgadh', '2020-04-01', '2020-04-01', 2),
(22, 'Uttrakhand', '2020-04-01', '2020-04-01', 2),
(23, 'Himachal Pradesh', '2020-04-01', '2020-04-01', 2),
(24, 'Nagaland', '2020-04-01', '2020-04-01', 2),
(25, 'Sikkim', '2020-04-01', '2020-04-01', 2),
(26, 'Tripura', '2020-04-01', '2020-04-01', 2),
(27, 'Meghalay', '2020-04-01', '2020-04-01', 2),
(28, 'Arunachal Pradesh', '2020-04-01', '2020-04-01', 2),
(29, 'Mizoram', '2020-04-01', '2020-04-01', 2),
(30, 'hu', '2022-04-03', '2022-04-03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_tips_post`
--

CREATE TABLE `table_tips_post` (
  `tips_id` int(11) NOT NULL,
  `physio_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `treat_id` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_tips_post`
--

INSERT INTO `table_tips_post` (`tips_id`, `physio_id`, `title`, `description`, `treat_id`, `doi`, `dou`, `isactive`) VALUES
(2, 0, 'geklnrfrejkfd', 'ergtyhhhhhhhhhhhhhhh', 12, '2020-03-16', '2020-03-17', 2),
(3, 13, 'Joint pain', 'Your weight can make a big impact on the amount of pain you experience from arthritis.Extra weight puts more pressure on your joints specially your knees, hips, and feet.', 8, '2020-03-17', '2020-03-17', 1),
(4, 13, 'Rehabilitation', 'Choose a progressive program that fits your goals and challenges you to move forward without causing any unnecessary flare-ups.', 12, '2020-03-18', '2022-04-04', 1),
(5, 13, 'bujkkkkkkkkk', 'g786yfrrrrrrrrrrrrrrrrrrrrrrrrrtdfffffffffffffffffffff', 8, '2020-03-30', '2020-03-30', 2),
(6, 15, 'Stay away from secondhand smok', 'While research has clearly linked cigarette smoking and poor respiratory health, secondhand smoke may cause similar side effects.', 17, '2020-04-09', '2020-04-09', 1),
(7, 15, 'To reduce the risk of injury', 'Take time off. Plan to have at least 1 day off per week and at least one month off per year from training for a particular sport to allow the body to recover.', 12, '2020-04-09', '2020-04-09', 1),
(8, 14, 'Joint Mobilization', 'Staying healthy involves a wholesome state of being where the mind and body are in perfect sync. ', 18, '2020-04-09', '2020-04-09', 1),
(9, 14, 'Back pain', ' It affects more than 80% of people at some point. ', 16, '2020-04-09', '2020-04-09', 1),
(10, 16, 'Joint pain can easily Go away', 'Try applying some oil around joints', 8, '2022-04-04', '2022-04-04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_treatment`
--

CREATE TABLE `table_treatment` (
  `treat_id` int(11) NOT NULL,
  `treat_name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `doi` date NOT NULL,
  `dou` date DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_treatment`
--

INSERT INTO `table_treatment` (`treat_id`, `treat_name`, `description`, `image`, `doi`, `dou`, `isactive`) VALUES
(8, 'Joint pain', 'Joint pain can be caused by injury affecting any of the ligaments, bursae, or tendons surrounding the joint.', 'download.jpg', '2020-03-05', '2020-03-05', 2),
(9, 'Orthopedic', 'the most common sports injuries are sprains and strains, fractures and dislocations.', '2.jpg', '2020-03-05', '2020-04-03', 2),
(10, 'Orthopedic', 'Orthopedics is a medical specialty that deals with the treatment of bones and muscles. Orthopedic surgery is the branch of medicine concerned with diseases, injuries.', 'sports.jpg', '2020-03-05', '2020-03-16', 1),
(11, 'sports injuries', 'Joint pain can be caused by injury affecting any of the ligaments, bursae, or tendons surrounding the joint.', '5.jpg', '2020-03-05', '2020-04-03', 2),
(12, 'Sport injury', 'The best way to prevent a sports injury is to warm up properly and stretch. Cold muscles are prone to overstretching and tears. Warm muscles are more flexible. ', '3.jpg', '2020-03-06', '2020-03-16', 1),
(13, 'Back & nack pain', 'Most cases of back or neck pain resolve within 2 to 6 weeks and are considered acute pain. Most episodes of low back pain are caused by damage to the ', '4.jpg', '2020-03-07', '2020-03-07', 2),
(14, 'Rehabilitation', 'Rehabilitation is care that can help you get back, keep, or improve abilities that you need for daily life. These abilities may be physical, mental, and/or cognitive (thinking and learning). ', '4.jpg', '2020-03-07', '2020-03-30', 1),
(15, 'Back & nack pain', 'Most cases of back or neck pain resolve within 2 to 6 weeks and are considered acute pain. Most episodes of low back pain are caused by damage to the ', '4.jpg', '2020-03-07', '2020-03-07', 2),
(16, 'Lower Back pain', 'In our society, lower back pain is a very common problem with more than 80% of us suffering from it at some point in our lives. There are a number of reasons why we experience lower back pain. ', 'lowe back pain.jpg', '2020-04-08', '2020-04-08', 1),
(17, 'Respiratory treatment', 'Respiratory physiotherapy, also known as chest physiotherapy, is an area of physio that focuses on the lungs and movement of the ribs and diaphragm.', 'respitary.jpg', '2020-04-08', '2020-04-08', 1),
(18, 'Joint Mobilization', 'Joint mobilization occurs when your physical therapist passively moves the joints of your body in specific directions. This can help to decrease pain and improve mobility.', 'therapy39807475_M_0.jpg', '2020-04-08', '2020-04-08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_appointment`
--
ALTER TABLE `table_appointment`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `table_area`
--
ALTER TABLE `table_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `table_cities`
--
ALTER TABLE `table_cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `table_complaint`
--
ALTER TABLE `table_complaint`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `table_contact`
--
ALTER TABLE `table_contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `table_degree`
--
ALTER TABLE `table_degree`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `table_feedback`
--
ALTER TABLE `table_feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `table_patient_reg`
--
ALTER TABLE `table_patient_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `table_physio_reg`
--
ALTER TABLE `table_physio_reg`
  ADD PRIMARY KEY (`physio_id`);

--
-- Indexes for table `table_post_photo_video`
--
ALTER TABLE `table_post_photo_video`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `table_recruitment`
--
ALTER TABLE `table_recruitment`
  ADD PRIMARY KEY (`recruit_id`);

--
-- Indexes for table `table_sec_q_details`
--
ALTER TABLE `table_sec_q_details`
  ADD PRIMARY KEY (`Seq_id`);

--
-- Indexes for table `table_specialization`
--
ALTER TABLE `table_specialization`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `table_state`
--
ALTER TABLE `table_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `table_tips_post`
--
ALTER TABLE `table_tips_post`
  ADD PRIMARY KEY (`tips_id`);

--
-- Indexes for table `table_treatment`
--
ALTER TABLE `table_treatment`
  ADD PRIMARY KEY (`treat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_appointment`
--
ALTER TABLE `table_appointment`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `table_area`
--
ALTER TABLE `table_area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_cities`
--
ALTER TABLE `table_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `table_complaint`
--
ALTER TABLE `table_complaint`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_contact`
--
ALTER TABLE `table_contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_degree`
--
ALTER TABLE `table_degree`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_feedback`
--
ALTER TABLE `table_feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_patient_reg`
--
ALTER TABLE `table_patient_reg`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `table_physio_reg`
--
ALTER TABLE `table_physio_reg`
  MODIFY `physio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `table_post_photo_video`
--
ALTER TABLE `table_post_photo_video`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_recruitment`
--
ALTER TABLE `table_recruitment`
  MODIFY `recruit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_sec_q_details`
--
ALTER TABLE `table_sec_q_details`
  MODIFY `Seq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_specialization`
--
ALTER TABLE `table_specialization`
  MODIFY `spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_state`
--
ALTER TABLE `table_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `table_tips_post`
--
ALTER TABLE `table_tips_post`
  MODIFY `tips_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_treatment`
--
ALTER TABLE `table_treatment`
  MODIFY `treat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
