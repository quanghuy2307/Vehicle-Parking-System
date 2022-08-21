
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

--
-- Database: `avps-db`
--

/**********************************************************************************/

-- Table structure for table `admin_info_tbl`

CREATE TABLE `admin_info_tbl` (
  `ID`            VARCHAR(10) NOT NULL UNIQUE,
  `FullName`      VARCHAR(50) NULL DEFAULT 'Administrator',
  `Birthday`      DATE NULL DEFAULT '2000-01-01',
  `PhoneNumber`   VARCHAR(10) NULL DEFAULT '',
  `Email`         VARCHAR(50) NOT NULL UNIQUE,
  `Password`      VARCHAR(120) NOT NULL,
  `Address`       VARCHAR(120) NULL DEFAULT '',
  `RegisterDate`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `LastUpdate`    TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1;

-- Dumping data for table `admin_info_tbl`

INSERT INTO
  `admin_info_tbl` (`ID`, `FullName`, `PhoneNumber`, `Email`, `Password`, `RegisterDate`)
VALUES
  ('23072000', 'Administrator1', '0337560589', 'admin1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-23 00:00:00'),
  ('20002000', 'Administrator2', '0338860566', 'admin2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-08-26 00:00:00');

/**********************************************************************************/

-- Table structure for table `user_info_tbl`

CREATE TABLE `user_info_tbl` (
  `ID`            INT(10) UNSIGNED AUTO_INCREMENT,
  `FullName`      VARCHAR(50) NOT NULL DEFAULT '',
  `Gender`        VARCHAR(6) NOT NULL DEFAULT 'Male', /* Male/Female/Others */
  `Birthday`      DATE NOT NULL DEFAULT '2000-01-01',
  `PhoneNumber`   VARCHAR(10) NOT NULL DEFAULT '',
  `Address`       VARCHAR(120) NOT NULL DEFAULT '',
  `Email`         VARCHAR(50) NOT NULL UNIQUE,
  `Password`      VARCHAR(120) NOT NULL,
  `CardID`        VARCHAR(10) NULL DEFAULT '',
  `Type`          VARCHAR(7) NULL DEFAULT 'Nomal',    /* Nomal/Premium */
  `Status`        VARCHAR(8) NULL DEFAULT 'Inactive', /* Active/Inactive */
  `RegisterDate`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `LastUpdate`    TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1;

-- Dumping data for table `user_info_tbl`

INSERT INTO
  `user_info_tbl` (`FullName`, `Gender`, `Birthday`, `PhoneNumber`, `Address`, `Email`, `Password`, `Type`, `Status`)
VALUES
	('Vladimir Putin' , 'Male'  , '1999-01-01', '1234567891', 'Ha Noi', 'pt@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Premium', 'Active'),
	('Donal Trumb'    , 'Male'  , '1998-02-03', '1234567892', 'Ha Noi', 'dt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Premium', 'Inactive'),
	('Kieu Phuong'    , 'Male'  , '1999-01-01', '1234567891', 'Ha Noi', 'kp@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Premium', 'Active'),
	('Yasuo'          , 'Male'  , '1998-02-03', '1234567892', 'Ha Noi', 'yasuo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nomal', 'Inactive'),
	('Odin Son'       , 'Male'  , '1999-01-01', '1234567891', 'Ha Noi', 'os@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Nomal', 'Active'),
	('Kieu Trinh'     , 'Female', '1999-01-01', '1234567891', 'Ha Noi', 'kt@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Premium', 'Active'),
	('Kieu Nam'       , 'Female', '1998-02-03', '1234567892', 'Ha Noi', 'kn@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Premium', 'Inactive'),
  ('Anuj Kumar'     , 'Male'  , '2000-07-23', '1234567890', 'Ha Noi', 'ak@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Nomal', 'Active'),
  ('Kieu Ngoc'      , 'Female', '1998-02-03', '1234567892', 'Ha Noi', 'kieungoc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Premium', 'Inactive'),
  ('Anuj Kumar'     , 'Male'  , '2000-07-23', '1234567890', 'Ha Noi', 'ak2@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Nomal', 'Active'),
  ('Fiddlesticks'   , 'Others', '1998-02-03', '1234567892', 'Ha Noi', 'kn2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nomal', 'Inactive'),
  ('Barack Obama'   , 'Male'  , '1960-07-23', '1234567899', 'Paris', 'obama@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Nomal', 'Active'),
  ('Diana'          , 'Female', '1999-01-01', '1234567891', 'Ha Noi', 'diana@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Premium', 'Active'),
  ('Kieu Ngoc'      , 'Female', '1998-02-03', '1234567892', 'Ha Noi', 'kn3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Premium', 'Active'),
  ('Anuj Kumar'     , 'Male'  , '2000-07-23', '1234567890', 'Ha Noi', 'ak4@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Nomal', 'Inactive'),
  ('Masteryi'       , 'Male'  , '1899-07-07', '0974716138', 'Ha Noi', 'masteryi@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Nomal', 'Inactive'),
  ('Jhin'           , 'Male'  , '1999-01-01', '1234567891', 'Ha Noi', 'jhin@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Nomal', 'Active'),
  ('Kieu Ngoc'      , 'Female', '1998-02-03', '1234567892', 'Ha Noi', 'kn4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nomal', 'Active'),
  ('Anuj Kumar'     , 'Male'  , '2000-07-23', '1234567890', 'Ha Noi', 'ak5@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Premium', 'Inactive'),
  ('Garen'          , 'Male'  , '1999-01-01', '1234567891', 'Ha Noi', 'garen@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Nomal', 'Active'),
  ('Kieu Ngoc'      , 'Female', '1998-02-03', '1234567892', 'Ha Noi', 'kn5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Premium', 'Active'),
  ('Anuj Kumar'     , 'Male'  , '2000-07-23', '1234567890', 'Ha Noi', 'ak6@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Nomal', 'Active'),
  ('Kieu Phuong'    , 'Male'  , '1999-01-01', '1234567891', 'Ha Noi', 'kp6@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Premium', 'Active'),
  ('Kieu Ngoc'      , 'Female', '1998-02-03', '1234567892', 'Ha Noi', 'kn6@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Premium', 'Inactive');

/**********************************************************************************/

-- Table structure for table `company_info_tbl`

CREATE TABLE `company_info_tbl` (
  `ID`              INT(10) UNSIGNED AUTO_INCREMENT,
  `Name`            VARCHAR(50) NOT NULL DEFAULT 'Automatic Vehicle Parking System',
  `Slogan`          VARCHAR(120) NOT NULL DEFAULT 'Safe, Fast !',
  `Email`           VARCHAR(50) NOT NULL DEFAULT 'avps@gmail.com',
  `Website`         VARCHAR(120) NOT NULL DEFAULT 'avps.com',
  `PhoneNumber`     VARCHAR(10) NOT NULL DEFAULT '0337560589',
  `Address`         VARCHAR(120) NOT NULL DEFAULT '1 Dai Co Viet Road, Ha Noi, Viet Nam',
  `FacebookLink`    VARCHAR(120) NULL DEFAULT '',
  `TelegramLink`    VARCHAR(120) NULL DEFAULT '',
  `InstagramLink`   VARCHAR(120) NULL DEFAULT '',
  `TwitterLink`     VARCHAR(120) NULL DEFAULT '',
  `LastUpdate`      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1;

-- Dumping data for table `company_info_tbl`

INSERT INTO
  `company_info_tbl` (`FacebookLink`, `TelegramLink`, `InstagramLink`)
VALUES
  ('https://www.facebook.com/huylq2307', 'https://t.me/+NyV6RZK1KiphOWQ9', 'https://www.instagram.com/huylq2307');

/**********************************************************************************/

-- Table structure for table `card_info_tbl`

CREATE TABLE `card_info_tbl` (
  `ID`              INT(10) UNSIGNED AUTO_INCREMENT,
  `CardID`          VARCHAR(10) NOT NULL UNIQUE,
  `Type`            VARCHAR(6) NOT NULL DEFAULT 'Guest',     /* Member/Guest */
  `CreationDate`    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `Status`          VARCHAR(8) NOT NULL DEFAULT 'Inactive',   /* Active/Inactive */
  PRIMARY KEY (`ID`)
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1;

-- Dumping data for table `card_info_tbl`

INSERT INTO
  `card_info_tbl` (`CardID`, `Type`, `Status`)
VALUES
  ('00AA425B6F', 'Member', 'Active'),
  ('10AA425B6F', 'Member', 'Active'),
  ('20AA425B6F', 'Member', 'Active'),
  ('30AA425B6F', 'Member', 'Active'),
  ('40AA425B6F', 'Member', 'Active'),
  ('50AA425B6F', 'Member', 'Active'),
  ('60AA425B6F', 'Member', 'Active'),
  ('70AA425B6F', 'Member', 'Active'),
  ('80AA425B6F', 'Member', 'Active'),
  ('90AA425B6F', 'Member', 'Active'),
  ('01AA425B6F', 'Guest',  'Active'),
  ('02AA425B6F', 'Guest', 'Active'),
  ('03AA425B6F', 'Guest', 'Active'),
  ('04AA425B6F', 'Guest', 'Active'),
  ('05AA425B6F', 'Guest', 'Active'),
  ('06AA425B6F', 'Guest', 'Active'),
  ('07AA425B6F', 'Guest', 'Active'),
  ('08AA425B6F', 'Guest', 'Active'),
  ('09AA425B6F', 'Guest', 'Active'),
  ('11AA425B6F', 'Guest', 'Active');

/**********************************************************************************/

-- Table structure for table `vehicle_info_tbl`

CREATE TABLE `vehicle_info_tbl` (
  `ID`                  INT(10) UNSIGNED AUTO_INCREMENT,
  `CardID`              VARCHAR(10) NOT NULL DEFAULT '',
  `Category`            VARCHAR(9) NOT NULL DEFAULT 'Car',    /* Car/Motorbike */
  `RegistrationNumber`  VARCHAR(50) NOT NULL DEFAULT '',
  `OwnerName`           VARCHAR(50) NULL DEFAULT 'Guess',
  `OwnerContactNumber`  VARCHAR(10) NULL DEFAULT 'XXXXXXXXXX',
  `ColPosition`         INT(10) UNSIGNED NOT NULL,
  `RowPosition`         INT(10) UNSIGNED NOT NULL,
  `InTime`              TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `OutTime`             TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Charge`              INT(10) UNSIGNED NOT NULL DEFAULT 0,
  `Remark`              VARCHAR(50) NOT NULL DEFAULT '',
  `Status`              VARCHAR(3) NOT NULL DEFAULT 'In',   /* In/Out */
  PRIMARY KEY (`ID`)
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1;

-- Dumping data for table `vehicle_info_tbl`

INSERT INTO
  `vehicle_info_tbl` (`CardID`, `Category`, `RegistrationNumber`, `OwnerName`, `OwnerContactNumber`, `ColPosition`, `RowPosition`, `InTime`)
VALUES
  ('00AA425B6F', 'Car'      , 'GGZ-1155', 'Jamie Macon'       , '8956232528', 1, 1  , '2022-05-09 05:58:38'),
  ('10AA425B6F', 'Car'      , 'GTM-1069', 'Dan Wilson'        , '8989898989', 1, 2  , '2022-03-09 08:58:38'),
  ('20AA425B6F', 'Motorbike', 'JFF-7888', 'Lynn Roberts'      , '7845123697', 1, 3  , '2022-03-09 08:58:38'),
  ('30AA425B6F', 'Car'      , 'PLO-8507', 'Charles Mathew'    , '2132654447', 1, 4  , '2022-03-09 08:58:38'),
  ('40AA425B6F', 'Motorbike', 'DLE-7701', 'Theresa Hay'       , '4654654654', 1, 5  , '2022-03-09 08:58:38'),
  ('50AA425B6F', 'Car'      , 'GZG-7896', 'Susie Eller'       , '7978999879', 1, 6  , '2022-03-09 08:58:38'),
  ('60AA425B6F', 'Motorbike', 'LDC-7019', 'Shannon Pinson'    , '1234567890', 1, 7  , '2022-08-09 11:03:05'),
  ('70AA425B6F', 'Motorbike', 'FYS-6969', 'Mark Paull'        , '1234567890', 1, 8  , '2022-03-09 11:32:02'),
  ('80AA425B6F', 'Car'      , 'CAS-7850', 'Bernice Willilams' , '7411112000', 1, 9  , '2022-03-07 10:42:52'),
  ('90AA425B6F', 'Car'      , 'CST-6907', 'Myra Warnke'       , '8541112500', 1, 10 , '2022-08-07 14:54:03'),
  ('01AA425B6F', 'Car'      , 'STT-7002', 'Colin Greenwood'   , '2574442560', 2, 1  , '2022-03-08 13:50:15'),
  ('02AA425B6F', 'Motorbike', 'ILS-2580', 'Bruno Denn'        , '1254447850', 2, 2  , '2022-03-08 09:34:55'),
  ('03AA425B6F', 'Car'      , 'SSO-8800', 'Tanya Chilton'     , '2570005640', 2, 3  , '2022-03-09 13:09:16'),
  ('04AA425B6F', 'Car'      , 'GEP-7805', 'Matthew  Foust'    , '6667869500', 2, 4  , '2022-07-16 15:28:32'),
  ('05AA425B6F', 'Car'      , 'QWE-9602', 'Paul Nicholls'     , '7412589658', 2, 5  , '2022-07-17 16:18:01'),
  ('06AA425B6F', 'Car'      , 'ABE-3470', 'Alyse Conn'        , '7896547850', 2, 6  , '2022-07-17 16:59:26'),
  ('07AA425B6F', 'Car'      , 'TRS-8027', 'Bonnie Jackson'    , '7014741470', 2, 7  , '2022-07-17 17:40:22'),
  ('08AA425B6F', 'Car'      , 'VNT-9135', 'Larry Clark'       , '7890240001', 2, 8  , '2022-07-17 17:43:16'),
  ('09AA425B6F', 'Car'      , 'PIJ-8802', 'Jessica Garner'    , '7012560025', 2, 9  , '2022-07-17 17:44:07'),
  ('11AA425B6F', 'Motorbike', 'LLL-8987', 'James Foster'      , '7014569980', 2, 10 , '2022-07-17 17:46:37');

/**********************************************************************************/

DELIMITER $$
CREATE PROCEDURE updateVehicleCharge (
	vehicleID         INT(10)
)
BEGIN
  DECLARE totalCharge INT(10) DEFAULT 0;
  DECLARE timeOut DATETIME DEFAULT (SELECT NOW());
  DECLARE timeIn DATETIME DEFAULT (SELECT `InTime` FROM `vehicle_info_tbl` WHERE `ID` = vehicleID);
  DECLARE deltaTime INT(10) DEFAULT (SELECT CEILING((SELECT TIME_TO_SEC((SELECT TIMEDIFF(timeOut, timeIn)))) / 3600));
  DECLARE cate VARCHAR(9) DEFAULT (SELECT `Category` FROM `vehicle_info_tbl` WHERE `ID` = vehicleID);

  IF (cate = 'Car') THEN
    SET totalCharge = 50000 * deltaTime;
	ELSEIF (cate = 'Motorbike') THEN
		SET totalCharge = 20000 * deltaTime;
	END IF;

  UPDATE `vehicle_info_tbl` SET `Charge` = totalCharge WHERE `ID` = vehicleID;
END;
$$

DELIMITER $$
CREATE PROCEDURE updateVehicleStatus (
  vehicleID         INT(10),
	vehicleStatus     VARCHAR(3)
)
BEGIN
	UPDATE `vehicle_info_tbl` SET `Status`= vehicleStatus WHERE `ID` = vehicleID;
END;
$$