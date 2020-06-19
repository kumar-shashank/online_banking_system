-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 06:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `gender`, `dob`, `relationship`, `department`, `address`, `mobile`, `login_id`, `pwd`, `lastlogin`) VALUES
(1, 'admin', 'M', '1994-01-01', 'unmarried', 'developer', 'pune', '1234567890', 'admin', 'admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `id` int(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `account_no` int(10) NOT NULL,
  `atm_status` varchar(50) NOT NULL,
  `card_no` varchar(20) NOT NULL,
  `cvv` varchar(5) NOT NULL,
  `expiry` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary1`
--

CREATE TABLE `beneficiary1` (
  `id` int(10) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `reciever_id` int(10) NOT NULL,
  `reciever_name` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary1`
--

INSERT INTO `beneficiary1` (`id`, `sender_id`, `sender_name`, `reciever_id`, `reciever_name`, `status`) VALUES
(2, 55, 'Aanjney ARj', 53, 'Shashank Kumar', 'ACTIVE'),
(3, 53, 'Shashank Kumar', 55, 'Aanjney ARj', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `cheque_book`
--

CREATE TABLE `cheque_book` (
  `id` int(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `account_no` int(10) NOT NULL,
  `cheque_book_status` varchar(25) NOT NULL,
  `cheque_book_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cheque_book`
--

INSERT INTO `cheque_book` (`id`, `cust_name`, `account_no`, `cheque_book_status`, `cheque_book_no`) VALUES
(3, 'Shashank Kumar', 53, 'ISSUED', '531461');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `nominee` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `accstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `dob`, `nominee`, `account`, `address`, `mobile`, `email`, `password`, `branch`, `ifsc`, `lastlogin`, `accstatus`) VALUES
(53, 'Shashank Kumar', 'M', '1998-03-28', 'Anmol', 'savings', 'Raxaul', '7756908814', 'shashankkumar269@gmail.com', '74b6c1c5f6b0eeb21859f60e8aa18d4eea726213', 'PUNE', 'P421A', '2020-06-19 06:39:41', 'ACTIVE'),
(56, 'Anmol Gupta', 'M', '1999-05-10', 'Shashank', 'savings', 'Banglore', '9868728530', 'anmol@gmail.com', '74b6c1c5f6b0eeb21859f60e8aa18d4eea726213', 'BANGALORE', 'B6A9E', '2020-04-07 05:27:44', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `passbook53`
--

CREATE TABLE `passbook53` (
  `transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passbook53`
--

INSERT INTO `passbook53` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2020-04-01', 'Shashank Kumar', 'PUNE', 'P421A', 176766, 0, 176765.88, 'Account Open'),
(2, '2020-04-02', 'Shashank Kumar', 'PUNE', 'P421A', 0, 200, 176565.88, 'TO jaanvika palsetty'),
(3, '2020-04-02', 'Shashank Kumar', 'PUNE', 'P421A', 0, 10000, 166565.88, 'TO Anmol Gupta'),
(4, '2020-04-08', 'Shashank Kumar', 'PUNE', 'P421A', 1000, 0, 167565.88, 'BY Varunika Palsetty'),
(5, '2020-04-24', 'Shashank Kumar', 'PUNE', 'P421A', 0, 100, 167465.88, 'TO Anmol Gupta'),
(6, '2020-06-19', 'Shashank Kumar', 'PUNE', 'P421A', 0, 500, 166965.88, 'TO Varunika Palsetty');

-- --------------------------------------------------------

--
-- Table structure for table `passbook56`
--

CREATE TABLE `passbook56` (
  `transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `narration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passbook56`
--

INSERT INTO `passbook56` (`transactionid`, `transactiondate`, `name`, `branch`, `ifsc`, `credit`, `debit`, `amount`, `narration`) VALUES
(1, '2020-03-21', 'Anmol Gupta', 'BANGALORE', 'B6A9E', 13457, 0, 13456.66, 'Account Open'),
(2, '2020-04-02', 'Anmol Gupta', 'BANGALORE', 'B6A9E', 10000, 0, 23456.66, 'BY Shashank Kumar'),
(3, '2020-04-24', 'Anmol Gupta', 'BANGALORE', 'B6A9E', 100, 0, 23556.66, 'BY Shashank Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `doj` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `gender` char(1) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `dob`, `relationship`, `department`, `doj`, `address`, `mobile`, `email`, `pwd`, `gender`, `lastlogin`) VALUES
(1, 'Shashank', '1998-03-28', 'unmarried', 'developer', '1999-11-11', 'pune', '8809974211', 'sk@gmail.com', 'shashank', 'M', '2020-03-14 07:49:00'),
(5, 'staff', '1998-02-16', 'unmarried', 'revenue', '2012-12-12', 'london', '1234567890', 'staff@gmail.com', 'staff', 'M', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`login_id`);

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cheque_book`
--
ALTER TABLE `cheque_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `passbook53`
--
ALTER TABLE `passbook53`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `passbook56`
--
ALTER TABLE `passbook56`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atm`
--
ALTER TABLE `atm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cheque_book`
--
ALTER TABLE `cheque_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `passbook53`
--
ALTER TABLE `passbook53`
  MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `passbook56`
--
ALTER TABLE `passbook56`
  MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
