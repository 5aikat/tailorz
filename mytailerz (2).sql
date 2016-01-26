-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2016 at 06:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mytailerz`
--

-- --------------------------------------------------------

--
-- Table structure for table `addr`
--

CREATE TABLE IF NOT EXISTS `addr` (
  `Id` varchar(7) DEFAULT NULL,
  `AddrCateg` varchar(10) DEFAULT NULL,
  `AddrLine1` varchar(300) DEFAULT NULL,
  `AddrLine2` varchar(300) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `cntry` varchar(50) DEFAULT NULL,
  `LocId` varchar(50) DEFAULT NULL,
  `LandMark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addr`
--

INSERT INTO `addr` (`Id`, `AddrCateg`, `AddrLine1`, `AddrLine2`, `City`, `zip`, `State`, `cntry`, `LocId`, `LandMark`) VALUES
('V000001', 'SHOP', '140/2, Lakshi Niwas,8th Cross', 'Lane Next to Titan Showroom', 'Bangalore', '560003', 'Karnataka', 'India', 'L0001', ''),
('V000001', 'PermHome', 'abc', 'pqr', 'Bangalore', '560013', 'Karnataka', 'India', 'L0002', ''),
('V000002', 'Shop', 'xyz', 'poi', 'Bangalore', '560045', 'Karnataka', 'India', 'L0003', ''),
('V000003', 'Shop', '140/2, Lakshi Niwas,8th Cross', 'Lane Next to Titan Showroom', 'Bangalore', '560003', 'Karnataka', 'India', 'L0002', ''),
('V000004', 'Shop', 'tyu', 'njk', 'Bangalore', '560003', 'Karnataka', 'India', 'L0001', ''),
('V000004', 'PermHome', 'lkj', 'asd', 'Bangalore', '560003', 'Karnataka', 'India', 'L0005', ''),
('V000005', 'Shop', 'zxc', 'mnb', 'Bangalore', '560003', 'Karnataka', 'India', 'L0002', ''),
('V000006', 'Shop', 'tdf', 'vdf', 'Bangalore', '560003', 'Karnataka', 'India', 'L0002', ''),
('V000007', 'Shop', 'fgh', 'jhy', 'Bangalore', '560003', 'Karnataka', 'India', 'L0001', ''),
('V00008', 'Shop', 'Keshav Kunj,Chandani Chaulk', 'Kothrud depot', 'Bangalore', '0340030', 'Karnataka', 'India', 'L0001', ''),
('V00009', 'Shop', 'Kothrud Depot', 'sssksks', 'Bangalore', '83993', 'Karnataka', 'India', 'L0003', ''),
('V00010', 'Shop', 'sdjndsgj', 'sngsgn', 'Bangalore', '346436', 'Karnataka', 'India', 'L0004', ''),
('V00012', 'Shop', 'jfenejk', 'FNKF', 'Bangalore', '35235', 'Karnataka', 'India', 'OTHER', ''),
('V00013', 'Shop', 'Mit college', 'kothrud ', 'Bangalore', '314134', 'Karnataka', 'India', 'L0001', ''),
('V00015', 'Shop', 'DSFS', 'CNFH', 'Bangalore', '798', 'Karnataka', 'India', 'L0003', ''),
('V00016', 'Shop', 'asfafafa', 'adfadfag', 'Bangalore', '411038', 'Karnataka', 'India', 'L0003', ''),
('V00032', 'Shop', 'FGNDJGFDJF', NULL, 'Wordpress', '413801', 'Wordpress', 'India', 'L0001', ''),
('V00033', 'Shop', 'Kothrud Depot', NULL, 'Wordpress', '4533463', 'Wordpress', 'India', 'OTHER', ''),
('V00034', 'Shop', 'jdnjn', NULL, 'Wordpress', '560023', 'Wordpress', 'India', 'L0003', '');

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

CREATE TABLE IF NOT EXISTS `categ` (
  `CategId` varchar(6) NOT NULL,
  `CategNm` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CategId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`CategId`, `CategNm`) VALUES
('C001', 'BLOUSES'),
('C002', 'SAREE WORKS'),
('C003', 'ETHINIC'),
('C004', 'SALWAR KAMEEZ'),
('C005', 'WESTERN');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `Id` varchar(7) DEFAULT NULL,
  `name` varchar(40) NOT NULL,
  `EmailCateg` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`Id`, `name`, `EmailCateg`, `Email`, `password`) VALUES
('V000001', '', 'PERSONAL', 's@d.com', ''),
('V000002', '', 'SHOP', 'q@w.com', ''),
('V000003', '', 'PERSONAL', 'j@e.com', ''),
('V000004', '', 'PERSONAL', 'o@r.com', ''),
('V000005', '', 'SHOP', 'r@m.com', ''),
('V000007', '', 'SHOP', 'x@b.com', ''),
('V00008', '', 'PERSONAL', 'purisharad2@gmail.com', ''),
('V00009', '', 'PERSONAL', 'dhee@gmail.com', ''),
('V00010', '', 'PERSONAL', 'purisharad2@gmail.com', ''),
('V00010', '', 'PERSONAL', 'purisharad2@gmail.com', ''),
('V00012', '', 'PERSONAL', 'JNEW@JF.COM', ''),
('V00013', '', 'PERSONAL', 'pdkfm@hns.com', ''),
('V00009', '', 'PERSONAL', 'pdkfm@hns.com', ''),
('V00015', '', 'PERSONAL', 'pdkfm@hns.com', ''),
('V00016', '', 'PERSONAL', 'purisharad2@gmail.com', ''),
('V00017', 'Sharad', NULL, 'purisharad2@gmail.com', 'password'),
('V00018', 'Neel', NULL, 'neel@gmail.com', '123456'),
('V00019', 'Lucky', NULL, 'lucky@gmail.com', '123456'),
('V00020', 'Yogesh', NULL, 'yogedh@gamil.com', '13411'),
('V00021', 'Yogesh1', NULL, 'yogedh@gamil.1com', 'dgsgs'),
('V00022', 'safka', NULL, 'aksfa@acma.com', '1441'),
('V00023', 'safka', NULL, 'aksfa@acsaf.com', '3234'),
('V00024', 'kalsfla', NULL, 'dndal@akf.com', 'sbaja'),
('V00025', 'efwf', NULL, '2832@san.com', 'asfsddf'),
('V00026', 'adff', NULL, 'asf@casc.com', 'aaafa'),
('U00027', 'eff', NULL, 'kfm@kam.com', 'hcjah'),
('V00028', 'wff', NULL, 'dsfsf@ddfasf.com', '7687'),
('V00029', 'efweff', NULL, 'dfsf', 'wegfw'),
('V00030', 'Dheeraj', NULL, 'd@gmail.com', '56556'),
('V00031', 'DheerajASFAF', NULL, 'd@gmail12.com', 'SVSDFASFASF'),
('V00032', 'ZDSDG', NULL, 'SDGSGW@RGERHEH', 'SSGGRGHJLL;I;'),
('V00033', 'Vishal', NULL, 'vishal.332ews@gmail.com', 'mxmcklb'),
('V00034', 'Neeldeep Das', NULL, 'das.neeldeep@gmail.com', 'neel@123');

-- --------------------------------------------------------

--
-- Table structure for table `loc`
--

CREATE TABLE IF NOT EXISTS `loc` (
  `LocId` varchar(5) DEFAULT NULL,
  `LocNm` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `cntry` varchar(50) DEFAULT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loc`
--

INSERT INTO `loc` (`LocId`, `LocNm`, `State`, `cntry`, `City`) VALUES
('L0001', 'Adarsh Nagar', 'Karnataka', 'India', 'Bangalore'),
('L0002', 'Bidadi', 'Karnataka', 'India', 'Bangalore'),
('L0003', 'Domlur', 'Karnataka', 'India', 'Bangalore'),
('L0004', 'Kengri', 'Karnataka', 'India', 'Bangalore'),
('L9999', 'OTHER', 'Karnataka', 'India', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `Id` varchar(20) NOT NULL,
  `PhoneCateg` varchar(10) NOT NULL,
  `Phone` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Phone`),
  UNIQUE KEY `VndrId` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`Id`, `PhoneCateg`, `Phone`) VALUES
('V000001', 'mob1', '12345671'),
('V00032', 'MOB1', '233525252445'),
('V00013', 'MOB1', '23525235'),
('V00010', 'MOB1', '2390582059'),
('V00012', 'MOB1', '245205'),
('V00033', 'MOB1', '28957598008'),
('', 'MOB1', '344'),
('V00016', 'MOB1', '45664'),
('V00015', 'MOB1', '658658'),
('V00030', 'MOB1', '66969869'),
('V000003', 'mob1', '724842742487'),
('V000007', 'mob1', '76976'),
('V00009', 'MOB1', '8383383883'),
('V000006', 'mob1', '8698698898'),
('V000005', 'mob1', '8797089809'),
('V000004', 'mob1', '9087070987'),
('V000002', 'mob1', '928274829'),
('V00008', 'MOB1', '9527445640'),
('V00034', 'MOB1', '9738864697');

-- --------------------------------------------------------

--
-- Table structure for table `ratechart`
--

CREATE TABLE IF NOT EXISTS `ratechart` (
  `VndrId` varchar(7) DEFAULT NULL,
  `SubCategId` varchar(6) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratechart`
--

INSERT INTO `ratechart` (`VndrId`, `SubCategId`, `Price`) VALUES
('V000001', 'SC0001', 100),
('V000002', 'SC0001', 100),
('V000003', 'SC0002', 100),
('V000004', 'SC0003', 100),
('V000005', 'SC0002', 100),
('V000006', 'SC0005', 100),
('V000007', 'SC0004', 100),
('V000001', 'SC0006', 100),
('V000002', 'SC0005', 100),
('V000003', 'SC0004', 100),
('V000004', 'SC0003', 100),
('V000005', 'SC0002', 100),
('V000006', 'SC0001', 100),
('V000007', 'SC0006', 100),
('V000008', 'SC0001', 939),
('V000008', 'SC0002', 239),
('V000008', 'SC0003', 8989),
('V00012', 'SC0002', 768),
('V00012', 'SC0002', 768),
('V00013', 'SC0001', 7667),
('V00013', 'SC0042', 878),
('V00015', 'SC0002', 8969),
('V00015', 'SC0046', 65),
('V00016', 'SC0009', 12),
('V00033', 'SC0002', 325),
('V00033', 'SC0002', 325),
('V00033', 'SC0022', 788),
('V00033', 'SC0022', 788),
('V00033', '', 455),
('V00033', 'SC0023', 325),
('V00034', 'SC0002', 700),
('V00034', 'SC0027', 400);

-- --------------------------------------------------------

--
-- Table structure for table `subcateg`
--

CREATE TABLE IF NOT EXISTS `subcateg` (
  `SubCategId` varchar(6) NOT NULL,
  `subcategDesc` varchar(50) DEFAULT NULL,
  `categid` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`SubCategId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcateg`
--

INSERT INTO `subcateg` (`SubCategId`, `subcategDesc`, `categid`) VALUES
('SC0001', 'Plain Blouse', 'C001'),
('SC0002', 'Lining Blouse', 'C001'),
('SC0003', 'Kuchu', 'C002'),
('SC0004', 'Peticoat Plain', 'C002'),
('SC0005', 'Lacha', 'C003'),
('SC0006', 'Basic Dress', 'C003'),
('SC0007', 'Ghagra Choli', 'C003'),
('SC0008', 'Princess Cut', 'C001'),
('SC0009', 'Katori', 'C001'),
('SC0010', 'Paded', 'C001'),
('SC0011', 'Halter Neck', 'C001'),
('SC0012', 'High Neck', 'C001'),
('SC0013', 'Net Blouses', 'C001'),
('SC0014', 'Machine Work', 'C001'),
('SC0015', 'Hand Work', 'C001'),
('SC0016', 'Piping Dori', 'C001'),
('SC0017', 'Cut Work With Lining', 'C001'),
('SC0018', 'Pattern Blouse', 'C001'),
('SC0019', 'Designer Blouse', 'C001'),
('SC0020', 'Speggty Blouse', 'C001'),
('SC0021', 'Plain Dress', 'C004'),
('SC0022', 'Dress With Lining', 'C004'),
('SC0023', 'Dress With Patterns', 'C004'),
('SC0024', 'Anarkali', 'C004'),
('SC0025', 'Umbrella Dress', 'C004'),
('SC0026', 'Chudidhar', 'C004'),
('SC0027', 'Suits Plain Top', 'C004'),
('SC0028', 'Suits Plain Top', 'C004'),
('SC0029', '6 Pc Cut', 'C004'),
('SC0030', 'Chudi Pant', 'C004'),
('SC0031', 'Pushback Pant', 'C004'),
('SC0032', 'Patiyala pant', 'C004'),
('SC0033', 'Salwar Pant', 'C004'),
('SC0034', 'Straight Paints', 'C004'),
('SC0035', 'Cigarette Cut Pants', 'C004'),
('SC0036', 'Saree Fall & Zig Zag', 'C002'),
('SC0037', 'Krosha Work to Sarees', 'C002'),
('SC0038', 'Hand Stone Kuchu', 'C002'),
('SC0039', 'Saree Cut Works', 'C002'),
('SC0040', 'half Saree Stitching', 'C002'),
('SC0041', 'Petticoat Fish Tail Cut', 'C002'),
('SC0042', 'Lehanga', 'C003'),
('SC0043', 'Frok', 'C005'),
('SC0044', 'Gowns', 'C005'),
('SC0045', 'Skirts', 'C005'),
('SC0046', 'Formal Pant', 'C005'),
('SC0047', 'Formal Shirt', 'C005');

-- --------------------------------------------------------

--
-- Table structure for table `trt`
--

CREATE TABLE IF NOT EXISTS `trt` (
  `TrtNbr` int(11) NOT NULL,
  `TrtDesc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TrtNbr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trt`
--

INSERT INTO `trt` (`TrtNbr`, `TrtDesc`) VALUES
(1, 'Coverage in Km'),
(2, 'Average Delivery Time in Days'),
(3, 'Same Day Delivery Possibility');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` varchar(6) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `mob` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `uname`, `mob`, `email`, `pass`, `address`) VALUES
('U00001', 'Sharad Puri', 0, '0', '0', ''),
('U00002', 'Sharad', 0, 'purisharad2@gmail.com', 'sharad2125', ''),
('U00003', 'Neel', 2147483647, 'neel@gmail.com', '12345', ''),
('U00004', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `VndrId` varchar(7) NOT NULL,
  `VndrTyp` varchar(30) NOT NULL,
  `ShpNm` varchar(100) NOT NULL,
  `PrpNm` varchar(100) NOT NULL,
  `LcsnNo` varchar(30) NOT NULL,
  `LcsnAuth` varchar(50) NOT NULL,
  `LcsnDt` date NOT NULL,
  `Status` varchar(3) NOT NULL,
  PRIMARY KEY (`VndrId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`VndrId`, `VndrTyp`, `ShpNm`, `PrpNm`, `LcsnNo`, `LcsnAuth`, `LcsnDt`, `Status`) VALUES
('V000001', 'DSGN', 'Sif Stich Point', 'Nadeem Ahmed', '123789', 'GOK', '2016-01-18', 'ACT'),
('V000002', 'DSGN', 'My Shop2', 'User2', '123789', 'GOK', '0000-00-00', 'ACT'),
('V000003', 'TLR', 'My Shop3', 'User3', '123789', 'GOK', '0000-00-00', 'INA'),
('V000004', 'TLR', 'My Shop4', 'User4', '123789', 'GOK', '0000-00-00', 'ACT'),
('V000005', 'DSGN', 'My Shop2', 'User5', '123789', 'GOK', '0000-00-00', 'ACT'),
('V000006', 'TLR', 'My Shop2', 'User6', '123789', 'GOK', '0000-00-00', 'ACT'),
('V000007', 'DSGN', 'My Shop2', 'User7', '123789', 'GOK', '0000-00-00', 'ACT'),
('V00008', 'desgn', 'Dressing Sense', 'Sharad Puri', '39-MH-090-NS-90', 'GOV', '2018-01-12', 'ACT'),
('V00009', 'desgn', 'Dheeraj Design', 'Dheeraj Aradwad', '78-83-MH-83-JJ-99', 'GOV', '2020-12-01', 'ACT'),
('V00010', 'desgn', 'asnalf', 'mdnv,sdmv', '83-md-XM-4546', 'GOV', '2020-01-13', 'ACT'),
('V00011', 'desgn', 'asnalf', 'mdnv,sdmv', '83-md-XM-4546', 'GOV', '2020-01-13', 'ACT'),
('V00012', 'desgn', '835258', 'fnfn', '2353252', 'I25U', '2015-11-01', 'ACT'),
('V00013', 'desgn', 'Asim Tailers', 'Asim Bhai', '234225', 'GOV', '2015-12-12', 'ACT'),
('V00014', 'desgn', 'Luky', 'LUCKY', '78-83-MH-83-JJ-99', 'GOV', '2020-01-13', 'ACT'),
('V00015', 'desgn', 'GFH', 'HGJ', 'JKK-LJL-900-8798-98', 'GOV', '2020-01-13', 'ACT'),
('V00016', 'desgn', 'fdgfdh', 'fhgh', 'afaffaf2312414', 'GOV', '2015-11-01', 'ACT'),
('V00032', 'desgn', 'GMGM@FN.NOM', 'GMGM@FN.NOM', 'FGGFK-8798J-ILJLK', 'GOV', '2020-01-13', 'ACT'),
('V00033', 'desgn', 'Desisj@gmai.com', 'Vishal.pvt@ltd', 'ks-sfg-dfh--dfh', 'GOV', '1970-01-01', 'ACT'),
('V00034', 'desgn', 'hello', 'neel', '878892891', 'hdbhsbdh', '1997-01-01', 'ACT');

-- --------------------------------------------------------

--
-- Table structure for table `vendortrt`
--

CREATE TABLE IF NOT EXISTS `vendortrt` (
  `VndrId` varchar(7) DEFAULT NULL,
  `TrtNbr` int(11) DEFAULT NULL,
  `TrtVal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendortrt`
--

INSERT INTO `vendortrt` (`VndrId`, `TrtNbr`, `TrtVal`) VALUES
('V000001', 1, '10'),
('V000001', 2, '3'),
('V000001', 3, 'Y'),
('V000002', 1, '3'),
('V000002', 2, '1'),
('V000002', 3, 'Y'),
('V000003', 1, '4'),
('V000003', 2, '2'),
('V000003', 3, 'N'),
('V000004', 1, '5'),
('V000004', 2, '3'),
('V000004', 3, 'Y'),
('V000005', 1, '10'),
('V000005', 2, '5'),
('V000005', 3, 'Y'),
('V000006', 1, '15'),
('V000006', 2, '6'),
('V000006', 3, 'Y'),
('V000007', 1, '10'),
('V000007', 2, '7'),
('V000007', 3, 'N'),
('V00008', 1, '3'),
('V00008', 2, '1'),
('V00008', 3, 'Yes'),
('V00009', 1, '5'),
('V00009', 2, '2'),
('V00009', 3, 'Yes'),
('V00010', 1, '4'),
('V00010', 2, '3'),
('V00010', 3, 'Yes'),
('V00012', 1, ' '),
('V00012', 2, ' '),
('V00012', 3, ' '),
('V00013', 1, '3'),
('V00013', 2, '3'),
('V00013', 3, 'Yes'),
('V00015', 1, '4'),
('V00015', 2, '1'),
('V00015', 3, 'No'),
('V00016', 1, '3'),
('V00016', 2, '2'),
('V00016', 3, 'Yes'),
('V00032', 1, 'three'),
('V00032', 2, 'two'),
('V00032', 3, 'yes'),
('V00033', 1, 'three'),
('V00033', 2, 'one'),
('V00033', 3, 'yes'),
('V00034', 1, 'five'),
('V00034', 2, 'five'),
('V00034', 3, 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
