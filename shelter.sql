-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2017 at 09:09 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shelter`
--
CREATE DATABASE SHELTER;

USE SHELTER;
-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `profile` (
  `Profile_ID` char(10) PRIMARY KEY NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Mobile_Number` char(10) NOT NULL,
  `Join_Date` char(10) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `animal`(
    `Animal_ID` char(10) PRIMARY KEY NOT NULL,
    `Posted_Date` char(10) NOT NULL,
    `Type` varchar(10) NOT NULL,
    `Name` varchar(20) NOT NULL,
    `Age` int,
    `Color` varchar(10),
    `Description` varchar(200),
    `Breed` varchar(20),
    `Size` varchar(10),
    `Availability` int NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `inquiry`(
    `Profile_ID` char(10) NOT NULL,
    `Animal_ID` char(10) NOT NULL,
    `Inquiry_Date` char(10) NOT NULL,
    `Question` varchar(200) NOT NULL,
    `Answer` varchar(200),
    `Admin_ID` char(10)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `inquiry`
    ADD PRIMARY KEY (`Profile_ID`, `Animal_ID`, `Inquiry_Date`);

CREATE TABLE `donates`(
    `Donation_Amount` float NOT NULL,
    `Donation_Date` char(10) NOT NULL,
    `Animal_ID` char(10) NOT NULL,
    `Profile_ID` char(10) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `donates`
    ADD PRIMARY KEY (`Profile_ID`, `Animal_ID`, `Donation_Date`);

CREATE TABLE `adopt`(
    `Adoption_Fee` float NOT NULL,
    `Adoption_Date` char(10) NOT NULL,
    `Animal_ID` char(10) NOT NULL,
    `Profile_ID` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `adopt`
    ADD PRIMARY KEY (`Profile_ID`, `Animal_ID`, `Adoption_Date`);

CREATE TABLE `likes`(
    `Animal_ID` char(10) NOT NULL,
    `Profile_ID` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `likes`
    ADD PRIMARY KEY (`Profile_ID`, `Animal_ID`);


/*Animal Subclasses*/
CREATE TABLE `dog`(
    `Dog_ID` char(10) references animal(Animal_ID),
    `Coat_Length` char(10),
    `Is_House_Trained` int
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cat`(
    `Cat_ID` char(10) references animal(Animal_ID),
    `Is_House_Trained` int,
    `Temperment` varchar(10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `bird`(
    `Bird_ID` char(10) references animal(Animal_ID),
    `Feather_Color` varchar(10),
    `Is_House_Trained` int
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `horse`(
    `Horse_ID` char(10) references animal(Animal_ID),
    `Mane_Color` char(10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `rodent`(
    `Rodent_ID` char(10) references animal(Animal_ID),
    `Is_House_Trained` int
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Profile Subclasses*/
CREATE TABLE `administrator`(
   `Admin_ID` char(10) references profile(Profile_ID)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user`(
   `User_ID` char(10) references profile(Profile_ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
