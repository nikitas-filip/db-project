-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 09:58 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hi3`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `IRS_Num` int(11) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `SSN` int(11) NOT NULL,
  `Driver_License` int(11) NOT NULL,
  `FirstRegistrationCity` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `StreetNum` int(11) NOT NULL,
  `PostalCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `IRS_Num`, `LastName`, `FirstName`, `SSN`, `Driver_License`, `FirstRegistrationCity`, `City`, `Street`, `StreetNum`, `PostalCode`) VALUES
(1, 167897531, 'GERAKARIS', 'APOSTOLIS', 1123456781, 13124201, 'ATHENS', 'ATHENS', 'KITHIRWN', 35, 11140),
(2, 167897532, 'MENIS', 'ORFEAS', 1123456782, 13124202, 'ATHENS', 'CHIOS', 'PANIONIOU', 26, 16121),
(3, 167897533, 'TZORTZIS', 'PANAGIWTHS', 1123456783, 13124203, 'ATHENS', 'KALAMATA', 'KOUSIDI', 420, 13123),
(4, 167897534, 'CHONDRORRIZOS', 'VASILIS', 1123456784, 13124204, 'ATHENS', 'LAMIA', 'DAFNIS', 33, 13124),
(5, 167897535, 'NTANOS', 'ARGURHS', 1123456785, 13124205, 'ATHENS', 'KIATO', 'IFIKRATOUS', 69, 13125),
(6, 167897536, 'TERZIS', 'KWSTAS', 1123456786, 13124206, 'HERAKLION', 'HERAKLION', 'KOZYRI', 10, 13126),
(7, 167897537, 'MIKEDI', 'NIKI', 1123456787, 13124207, 'THESSALONIKI', 'CHIOS', 'AGATHOUPOLEOS', 32, 13127),
(8, 167897538, 'MPAXALOU', 'EIRINI', 1123456788, 13124208, 'PATRA', 'LAMIA', 'AGIOU NIKOLAOU', 67, 13128),
(9, 167897539, 'RIGOU', 'ANTWNIA', 1123456789, 13124209, 'RHODES', 'RHODES', 'KITHAROU', 13, 13129),
(10, 167897510, 'KANETIDIS', 'ANTONIS', 1123456710, 13124210, 'THESSALONIKI', 'DRAMA', 'SMYRNIS', 7, 13110),
(11, 167897511, 'SYGGELAKIS', 'GIANNHS', 1123456711, 13124211, 'HERAKLION', 'LILIPOUPOLI', 'SLOTH', 8, 13111),
(12, 167897511, 'KARAKOULIAS', 'AGGELOS', 1123456712, 13124212, 'THESSALONIKI', 'LAMALAND', 'LAIMOU', 13, 13112),
(13, 167897513, 'MERTZANI', 'SEMINA', 1123456713, 13124213, 'ATHENS', 'ATHENS', 'PARADEISOU', 69, 13113),
(14, 167897514, 'PAPAEFTHIMIOU', 'DAPHNE', 1123456714, 13124214, 'RHODES', 'ORESTIADA', 'AFIRIMENOU', 9, 13114),
(15, 167897515, 'MENIS', 'GIWRGOS', 1123456715, 13124215, 'HERAKLION', 'CHIOS', 'PANIONIOU', 28, 16121);

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer_public`
-- (See below for the actual view)
--
CREATE TABLE `customer_public` (
`CustomerID` int(11)
,`FirstName` varchar(45)
,`LastName` varchar(45)
,`FirstRegistrationCity` varchar(45)
,`City` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `emailaddress`
--

CREATE TABLE `emailaddress` (
  `StoreID` int(11) NOT NULL,
  `EmailAddress` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailaddress`
--

INSERT INTO `emailaddress` (`StoreID`, `EmailAddress`) VALUES
(1, 'ATHENS@GMAIL.COM'),
(2, 'PATRA@GMAIL.COM'),
(3, 'RHODES@GMAIL.COM'),
(4, 'HERAKLION@GMAIL.COM'),
(5, 'THESSALONIKI@GMAIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `IRS_Num` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `DriverLicense` int(11) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `StreetNum` int(11) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `City` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`IRS_Num`, `SSN`, `DriverLicense`, `FirstName`, `LastName`, `Street`, `StreetNum`, `PostalCode`, `City`) VALUES
(1103450, 311111996, 11312412, 'NIET', 'KOUNAVIS', 'PANKIOU', 7, 92347, 'ATHENS'),
(1103451, 511111996, 11312414, 'STAMATIA', 'MASTROSTAMATI', 'MANAS', 6, 72345, 'ATHENS'),
(1103452, 411111996, 11312420, 'MAKIS', 'KOTSAMPASIS', 'MPYRAS', 32, 12345, 'ATHENS'),
(1103453, 211111996, 11312421, 'PROKOPIS', 'PAVLOPOULOS', 'PTD', 28, 12765, 'ATHENS'),
(2203450, 611111996, 11312410, 'IOANNIS', 'ANTONIOU', 'ARXITEKTONON', 12, 12100, 'PATRA'),
(2203451, 217483647, 11312423, 'MORTY', 'SMITH', 'HFAISTOU', 10, 12800, 'PATRA'),
(2203452, 214748647, 11312428, 'SPYROS', 'MPIMPILAS', 'ITHOPIOU', 62, 12300, 'PATRA'),
(3303450, 411159960, 11312413, 'STEFANOS', 'MENIS', 'PATERA', 78, 82345, 'RHODES'),
(3303451, 214983647, 11312424, 'RICK', 'SANCHEZ', 'VIVLOU', 15, 12700, 'RHODES'),
(3303452, 747483647, 11312426, 'MARIA', 'MAGDALINI', 'VIVLOU', 78, 12500, 'RHODES'),
(4403450, 218411996, 11312411, 'MICHAIL', 'POTAMIANOS', 'PROKOPIOU', 11, 12000, 'HERAKLION'),
(4403451, 214748307, 11312425, 'IASONAS', 'ARHAIDIS', 'MYTHOLOGIAS', 69, 12600, 'HERAKLION'),
(5503450, 104211996, 11312429, 'MYRTO', 'OIKOGENIADOU', 'AKINITOU', 13, 12200, 'THESSALONIKI'),
(5503451, 614111996, 11312415, 'MARIA', 'MASTROMICHALAKI', 'PAPAZI', 1, 62345, 'THESSALONIKI'),
(5503452, 214703647, 11312422, 'JERRY', 'SMITH', 'ALAMANAS', 190, 12900, 'THESSALONIKI');

-- --------------------------------------------------------

--
-- Table structure for table `fueltype`
--

CREATE TABLE `fueltype` (
  `LicensePlate` varchar(45) NOT NULL,
  `FuelType` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fueltype`
--

INSERT INTO `fueltype` (`LicensePlate`, `FuelType`) VALUES
('EAK 1312', 'GASOLINE'),
('EEK 9087', 'DIESEL'),
('EOK 123', 'GASOLINE'),
('KBO 0980', 'GASOLINE'),
('KKE 4201', 'GAS'),
('KMM 3029', 'GAS'),
('KOM 345', 'DIESEL'),
('MAM 877', 'GASOLINE'),
('OKE 5859', 'DIESEL'),
('OTA 398', 'DIESEL'),
('TIT 9090', 'GAS'),
('WAT 3435', 'GASOLINE'),
('YZT 5678', 'DIESEL'),
('ZHE 3720', 'GASOLINE'),
('ZXT 5052', 'ELECTRICITY');

-- --------------------------------------------------------

--
-- Stand-in structure for view `payment`
-- (See below for the actual view)
--
CREATE TABLE `payment` (
`LicensePlate` varchar(45)
,`PaymentAmount` int(11)
,`PaymentMethod` varchar(45)
,`StartDate` varchar(45)
);

-- --------------------------------------------------------

--
-- Table structure for table `paymenttransaction`
--

CREATE TABLE `paymenttransaction` (
  `StartDate` varchar(45) NOT NULL,
  `LicensePlate` varchar(45) NOT NULL,
  `PaymentAmount` int(11) NOT NULL,
  `PaymentMethod` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phonenum`
--

CREATE TABLE `phonenum` (
  `StoreID` int(11) NOT NULL,
  `PhoneNumber` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonenum`
--

INSERT INTO `phonenum` (`StoreID`, `PhoneNumber`) VALUES
(1, '2110023456'),
(2, '2610111111'),
(3, '2241011111'),
(4, '2810111111'),
(5, '2134563299');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `LicensePlate` varchar(45) NOT NULL,
  `StartDate` varchar(45) NOT NULL,
  `StartLocation` varchar(45) NOT NULL,
  `FinishLocation` varchar(45) NOT NULL,
  `FinishDate` varchar(45) NOT NULL,
  `ReturnState` varchar(45) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `IRS_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `LicensePlate` varchar(45) NOT NULL,
  `StartDate` varchar(45) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `FinishDate` varchar(45) NOT NULL,
  `StartLocation` varchar(45) NOT NULL,
  `FinishLocation` varchar(45) NOT NULL,
  `Paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`LicensePlate`, `StartDate`, `CustomerID`, `FinishDate`, `StartLocation`, `FinishLocation`, `Paid`) VALUES
('EAK 1312', '2018-04-17', 7, '2018-04-20', 'THESSALONIKI', 'THESSALONIKI', 0),
('EEK 9087', '2018-05-15', 9, '2018-05-18', 'THESSALONIKI', 'THESSALONIKI', 200),
('KBO 0980', '2018-02-14', 8, '2018-02-15', 'ATHENS', 'ATHENS', 100),
('KKE 4201', '2018-01-01', 2, '2018-01-03', 'ATHENS', 'PATRA', 150),
('KKE 4201', '2018-03-07', 1, '2018-03-14', 'ATHENS', 'ATHENS', 300),
('KMM 3029', '2017-08-15', 11, '2017-09-01', 'RHODES', 'RHODES', 600),
('KOM 345', '2017-10-03', 4, '2017-10-12', 'THESSALONIKI', 'THESSALONIKI', 300),
('MAM 877', '2018-04-17', 3, '2018-04-18', 'RHODES', 'RHODES', 50),
('OKE 5859', '2018-01-16', 15, '2018-01-19', 'ATHENS', 'PATRA', 150),
('OTA 398', '2018-07-10', 6, '2018-07-19', 'HERAKLION', 'HERAKLION', 400),
('TIT 9090', '2018-01-10', 10, '2018-01-20', 'ATHENS', 'PATRA', 400),
('WAT 3435', '2018-01-10', 6, '2018-01-11', 'ATHENS', 'HERAKLION', 50),
('YZT 5678', '2017-09-06', 4, '2017-10-06', 'ATHENS', 'ATHENS', 1350),
('ZHE 3720', '2018-03-19', 8, '2018-03-21', 'ATHENS', 'HERAKLION', 250),
('ZXT 5052', '2017-11-07', 10, '2017-11-16', 'ATHENS', 'ATHENS', 400);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `StoreID` int(11) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `StreetNum` int(11) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `City` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`StoreID`, `Street`, `StreetNum`, `PostalCode`, `City`) VALUES
(1, 'ERMOU', 27, 12345, 'ATHENS'),
(2, 'MAGEIOU', 25, 10672, 'PATRA'),
(3, 'ORMOU', 30, 10345, 'RHODES'),
(4, 'PYRGOU', 44, 10456, 'HERAKLION'),
(5, 'DEKELIAS', 100, 11267, 'THESSALONIKI');

--
-- Triggers `store`
--
DELIMITER $$
CREATE TRIGGER `trigger2` AFTER INSERT ON `store` FOR EACH ROW INSERT INTO phonenum VALUES 
(new.StoreID,'')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `LicensePlate` varchar(45) NOT NULL,
  `Model` varchar(45) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Make` varchar(45) NOT NULL,
  `Year` varchar(45) NOT NULL,
  `Kilometers` int(11) NOT NULL,
  `CC` int(11) NOT NULL,
  `HorsePower` int(11) NOT NULL,
  `Damages` varchar(45) NOT NULL,
  `Malfunctions` varchar(45) NOT NULL,
  `NextService` varchar(45) NOT NULL,
  `InsuranceExpDate` varchar(45) NOT NULL,
  `LastService` varchar(45) NOT NULL,
  `StoreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`LicensePlate`, `Model`, `Type`, `Make`, `Year`, `Kilometers`, `CC`, `HorsePower`, `Damages`, `Malfunctions`, `NextService`, `InsuranceExpDate`, `LastService`, `StoreID`) VALUES
('EAK 1312', 'ARAN2', 'MINI VAN', 'VOLKS WAGEN', '1996', 10, 1500, 120, 'NO', 'NO', '1/6/2020', '31/12/2019', '1/3/2017', 2),
('EEK 9087', 'PR3000', 'TRUCK', 'MAN', '2012', 197640000, 3000, 300, 'NO', 'NO', '24/10/2019', '31/12/2021', '24/10/2015', 2),
('EOK 123', 'Z35', 'MOTORCYCLE', 'SUZUKI', '2009', 103045000, 300, 50, 'NO', 'NO', '5/8/2019', '22/7/2020', '13/11/2016', 4),
('KBO 0980', 'COOPER', 'CAR', 'MINI', '2003', 345947630, 1400, 120, 'NO', 'NO', '9/2/2020', '7/11/2021', '24/6/2017', 5),
('KKE 4201', 'STALIN', 'TRUCK', 'LADA', '1917', 10000000, 3300, 350, 'NO', 'NO', '24/10/3017', '31/12/2020', '24/10/2017', 5),
('KMM 3029', 'CUBE', 'MINI VAN', 'RENAULT', '2013', 5678372, 1700, 200, 'NO', 'NO', '13/8/2019', '31/12/2020', '24/10/2017', 5),
('KOM 345', 'Z', 'MOTORCYCLE', 'YAMAHA', '2009', 9874530, 125, 40, 'NO', 'NO', '4/1/2019', '3/2/2020', '4/1/2017', 2),
('MAM 877', 'VESPA', 'MOTORCYCLE', 'PIAGGIO', '1990', 2147483647, 150, 40, 'NO', 'NO', '8/5/2018', '28/2/2020', '29/9/2015', 3),
('OKE 5859', 'GOLF', 'CAR', 'WOLKS WAGEN', '2013', 320000, 1400, 140, 'NO', 'NO', '7/6/2018', '7/8/2019', '10/10/2017', 3),
('OTA 398', 'GT40', 'MOTORCYCLE', 'KAWASAKI', '2014', 100000, 900, 200, 'NO', 'NO', '13/11/2020', '8/11/2019', '1/1/2017', 5),
('TIT 9090', 'POLO', 'CAR', 'VOLKS WAGEN', '2014', 79837946, 1300, 100, 'NO', 'NO', '1/6/2020', '31/12/2020', '24/10/2017', 4),
('WAT 3435', 'ASTRA', 'CAR', 'OPEL', '2006', 151000, 1400, 90, 'NO', 'NO', '2018-06-12', '2017-06-06', '2018-09-03', 1),
('YZT 5678', 'IBIZA', 'CAR', 'SEAT', '2008', 35000000, 1300, 120, 'NO', 'NO', '2/1/2019', '8/9/2020', '24/4/2017', 4),
('ZHE 3720', 'VECTRA', 'CAR', 'OPEL', '2008', 78900, 1800, 110, 'NO', 'NO', '2018-12-24', '2018-01-03', '2018-09-10', 3),
('ZXT 5052', 'SP330', 'MINI VAN', 'SUZUKI', '2005', 83200, 1600, 95, 'NO', 'NO', '2018-06-05', '2018-10-16', '2017-03-14', 4);

--
-- Triggers `vehicle`
--
DELIMITER $$
CREATE TRIGGER `trigger1` AFTER INSERT ON `vehicle` FOR EACH ROW INSERT INTO fueltype VALUES 
(new.LicensePlate,'')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `IRS_Num` int(11) NOT NULL,
  `StoreID` int(11) NOT NULL,
  `StartDate` varchar(45) NOT NULL,
  `FinishDate` varchar(45) NOT NULL,
  `Position` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`IRS_Num`, `StoreID`, `StartDate`, `FinishDate`, `Position`) VALUES
(1103450, 1, '2016-01-04', '2021-12-23', 'MANAGER'),
(1103451, 1, '2018-01-01', '2019-01-01', 'TAMEIO'),
(1103452, 1, '2017-05-08', '2018-04-30', 'PWLHTHS'),
(1103453, 1, '2016-04-18', '2019-02-11', 'GRAMMATEIA'),
(2203450, 2, '2017-07-10', '2018-11-06', 'MANAGER'),
(2203451, 2, '2017-11-20', '2018-06-18', 'TAMEIO'),
(2203452, 2, '2017-08-08', '2018-09-11', 'TAMEIO'),
(3303450, 3, '2017-11-15', '2018-09-02', 'GRAMMATEIA'),
(3303451, 3, '2017-09-04', '2018-12-20', 'MANAGER'),
(3303452, 3, '2018-01-02', '2018-07-10', 'TAMEIO'),
(4403450, 4, '2017-12-10', '2018-09-10', 'MANAGER'),
(4403451, 4, '2017-12-05', '2018-08-31', 'TAMEIO'),
(5503450, 5, '2018-01-05', '2018-12-01', 'MANAGER'),
(5503451, 5, '2018-01-04', '2018-12-05', 'TAMEIO'),
(5503452, 5, '2018-01-04', '2018-01-04', 'GRAMMATEIA');

-- --------------------------------------------------------

--
-- Structure for view `customer_public`
--
DROP TABLE IF EXISTS `customer_public`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `customer_public`  AS  select `customer`.`CustomerID` AS `CustomerID`,`customer`.`FirstName` AS `FirstName`,`customer`.`LastName` AS `LastName`,`customer`.`FirstRegistrationCity` AS `FirstRegistrationCity`,`customer`.`City` AS `City` from `customer` ;

-- --------------------------------------------------------

--
-- Structure for view `payment`
--
DROP TABLE IF EXISTS `payment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `payment`  AS  select `paymenttransaction`.`LicensePlate` AS `LicensePlate`,`paymenttransaction`.`PaymentAmount` AS `PaymentAmount`,`paymenttransaction`.`PaymentMethod` AS `PaymentMethod`,`paymenttransaction`.`StartDate` AS `StartDate` from `paymenttransaction` where (`paymenttransaction`.`PaymentAmount` > 100) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `emailaddress`
--
ALTER TABLE `emailaddress`
  ADD PRIMARY KEY (`StoreID`),
  ADD KEY `fk_email_store_StoreID_idx` (`StoreID`) USING BTREE;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`IRS_Num`);

--
-- Indexes for table `fueltype`
--
ALTER TABLE `fueltype`
  ADD PRIMARY KEY (`LicensePlate`),
  ADD KEY `fk_fueltype_vehicle_LicensePlate_idx` (`LicensePlate`) USING BTREE;

--
-- Indexes for table `paymenttransaction`
--
ALTER TABLE `paymenttransaction`
  ADD PRIMARY KEY (`StartDate`,`LicensePlate`),
  ADD KEY `fk_Rents_LicensePlate_StartDate_idx` (`LicensePlate`,`StartDate`) USING BTREE;

--
-- Indexes for table `phonenum`
--
ALTER TABLE `phonenum`
  ADD PRIMARY KEY (`StoreID`),
  ADD KEY `fk_phone_store_StoreID_idx` (`StoreID`) USING BTREE;

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`LicensePlate`,`StartDate`),
  ADD KEY `fk_rents_employee_IRS_idx` (`IRS_Num`) USING BTREE,
  ADD KEY `fk_rents_customer_CustomerID_idx` (`CustomerID`) USING BTREE,
  ADD KEY `fk_rents_vehicle_LicensePlate_idx` (`LicensePlate`) USING BTREE;

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`LicensePlate`,`StartDate`),
  ADD KEY `fk_reserves_customer_CustomerID_idx` (`CustomerID`) USING BTREE,
  ADD KEY `fk_reserves_vehicle_LicensePlate_idx` (`LicensePlate`) USING BTREE;

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`StoreID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`LicensePlate`),
  ADD KEY `fk_vehicle_store_StoreID_idx` (`StoreID`) USING BTREE;

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`IRS_Num`,`StoreID`,`StartDate`),
  ADD KEY `fk_works_store_StoreID_idx` (`StoreID`) USING BTREE,
  ADD KEY `fk_works_employee_IRS_Num_idx` (`IRS_Num`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `StoreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emailaddress`
--
ALTER TABLE `emailaddress`
  ADD CONSTRAINT `fk_email_store_StoreID_idx` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fueltype`
--
ALTER TABLE `fueltype`
  ADD CONSTRAINT `fk_fueltype_vehicle_LicensePlate_idx` FOREIGN KEY (`LicensePlate`) REFERENCES `vehicle` (`LicensePlate`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymenttransaction`
--
ALTER TABLE `paymenttransaction`
  ADD CONSTRAINT `fk_Rents_LicensePlate_StartDate_idx` FOREIGN KEY (`LicensePlate`,`StartDate`) REFERENCES `rents` (`LicensePlate`, `StartDate`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phonenum`
--
ALTER TABLE `phonenum`
  ADD CONSTRAINT `fk_phone_store_StoreID_idx` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `fk_rents_customer_CustomerID_idx` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rents_employee_IRS_idx` FOREIGN KEY (`IRS_Num`) REFERENCES `employee` (`IRS_Num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rents_vehicle_LicensePlate_idx` FOREIGN KEY (`LicensePlate`) REFERENCES `vehicle` (`LicensePlate`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_reserves_customer_CustomerID_idx` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reserves_vehicle_LicensePlate_idx` FOREIGN KEY (`LicensePlate`) REFERENCES `vehicle` (`LicensePlate`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicle_store_StoreID_idx` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `fk_works_employee_IRS_Num_idx` FOREIGN KEY (`IRS_Num`) REFERENCES `employee` (`IRS_Num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_works_store_StoreID_idx` FOREIGN KEY (`StoreID`) REFERENCES `store` (`StoreID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
