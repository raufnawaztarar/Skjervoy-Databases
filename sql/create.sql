# original file created by Iain Murray, edit it to match our database


# Sequel Pro dump
# Version 1630
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.37)
# Database: SQLTutorialMaster
# Generation Time: 2010-01-14 14:44:38 +0000
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP DATABASE IF EXISTS `SQLTutorialMaster`;

CREATE DATABASE `SQLTutorialMaster`;

USE `SQLTutorialMaster`;

# Dump of table CARS
# ------------------------------------------------------------

DROP TABLE IF EXISTS `CARS`;

CREATE TABLE `CARS` (
  `CarNo` int(11) NOT NULL,
  `Make` varchar(15) DEFAULT NULL,
  `Model` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CarNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `CARS` WRITE;
/*!40000 ALTER TABLE `CARS` DISABLE KEYS */;
INSERT INTO `CARS` (`CarNo`,`Make`,`Model`)
VALUES
	(1,'Triumph','Spitfire'),
	(2,'Bentley','Mk V'),
	(3,'Triumph','Stag'),
	(4,'Ford','GT 40'),
	(5,'Shelby','Cobra'),
	(6,'Ford','Mustang'),
	(7,'Aston Martin','DB Mk III'),
	(8,'Jaguar','D Type');

/*!40000 ALTER TABLE `CARS` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table EMPLOYEES
# ------------------------------------------------------------

DROP TABLE IF EXISTS `EMPLOYEES`;

CREATE TABLE `EMPLOYEES` (
  `EmployeeNo` int(11) NOT NULL,
  `FirstName` varchar(10) DEFAULT NULL,
  `LastName` varchar(12) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `DateEmployed` date DEFAULT NULL,
  `CarNo` int(11) DEFAULT NULL,
  PRIMARY KEY (`EmployeeNo`),
  KEY `fk_Employees_Cars1` (`CarNo`),
  CONSTRAINT `fk_Employees_Cars1` FOREIGN KEY (`CarNo`) REFERENCES `CARS` (`CarNo`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `EMPLOYEES` WRITE;
/*!40000 ALTER TABLE `EMPLOYEES` DISABLE KEYS */;
INSERT INTO `EMPLOYEES` (`EmployeeNo`,`FirstName`,`LastName`,`DateOfBirth`,`DateEmployed`,`CarNo`)
VALUES
	(1,'Bilda','Groves','1966-04-01','1999-05-01',2),
	(2,'John','Greeves','1977-03-21','2000-01-01',NULL),
	(3,'Sally','Smith','1977-05-01','2002-04-01',5),
	(4,'Fred','Jones','1996-04-03','2004-05-01',3);

/*!40000 ALTER TABLE `EMPLOYEES` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table SALES
# ------------------------------------------------------------

DROP TABLE IF EXISTS `SALES`;

CREATE TABLE `SALES` (
  `SalesNo` int(11) NOT NULL,
  `EmployeeNo` int(11) DEFAULT NULL,
  `Customer` varchar(12) DEFAULT NULL,
  `Item` varchar(10) DEFAULT NULL,
  `Supplier` varchar(12) DEFAULT NULL,
  `Amount` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`SalesNo`),
  KEY `fk_Sales_Employees1` (`EmployeeNo`),
  CONSTRAINT `fk_Sales_Employees1` FOREIGN KEY (`EmployeeNo`) REFERENCES `EMPLOYEES` (`EmployeeNo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `SALES` WRITE;
/*!40000 ALTER TABLE `SALES` DISABLE KEYS */;
INSERT INTO `SALES` (`SalesNo`,`EmployeeNo`,`Customer`,`Item`,`Supplier`,`Amount`)
VALUES
	(1,1,'Simpson','Sofa','Harrison',235.67),
	(2,1,'Johnson','Chair','Harrison',453.78),
	(3,2,'Smith','Stool','Ford',82.78),
	(4,2,'Jones','Suite','Harrison',3421.00),
	(5,3,'Smith','Sofa','Harrison',235.67),
	(6,1,'Simposn','Sofa','Harrison',235.67),
	(7,1,'Jones','Bed','Ford',453.00);

/*!40000 ALTER TABLE `SALES` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table SALES2
# ------------------------------------------------------------

DROP TABLE IF EXISTS `SALES2`;

CREATE TABLE `SALES2` (
  `SalesNo` int(11) NOT NULL,
  `EmployeeNo` int(11) DEFAULT NULL,
  `Customer` varchar(12) DEFAULT NULL,
  `Item` varchar(10) DEFAULT NULL,
  `Supplier` varchar(12) DEFAULT NULL,
  `Amount` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`SalesNo`),
  KEY `fk_Sales2_Employees1` (`EmployeeNo`),
  CONSTRAINT `fk_Sales2_Employees1` FOREIGN KEY (`EmployeeNo`) REFERENCES `EMPLOYEES` (`EmployeeNo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `SALES2` WRITE;
/*!40000 ALTER TABLE `SALES2` DISABLE KEYS */;
INSERT INTO `SALES2` (`SalesNo`,`EmployeeNo`,`Customer`,`Item`,`Supplier`,`Amount`)
VALUES
	(3,2,'Smith','Stool','Ford',82.78),
	(5,3,'Smith','Sofa','Harrison',235.67),
	(213,3,'Willaims','Suite','Harrison',3421.00),
	(216,2,'McGreggor','Bed','Ford',453.00),
	(217,1,'Williams','Sofa','Harrison',235.67),
	(218,3,'Aitken','Sofa','Harrison',235.67),
	(225,2,'Aitken','Chair','Harrison',453.78);

/*!40000 ALTER TABLE `SALES2` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table SALESPEOPLE
# ------------------------------------------------------------

DROP TABLE IF EXISTS `SALESPEOPLE`;

CREATE TABLE `SALESPEOPLE` (
  `EmployeeNo` int(11) NOT NULL,
  `FirstName` varchar(12) DEFAULT NULL,
  `LastName` varchar(12) DEFAULT NULL,
  `CarNo` int(11) DEFAULT NULL,
  PRIMARY KEY (`EmployeeNo`),
  KEY `fk_SalesPeople_Cars1` (`CarNo`),
  CONSTRAINT `fk_SalesPeople_Cars1` FOREIGN KEY (`CarNo`) REFERENCES `CARS` (`CarNo`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `SALESPEOPLE` WRITE;
/*!40000 ALTER TABLE `SALESPEOPLE` DISABLE KEYS */;
INSERT INTO `SALESPEOPLE` (`EmployeeNo`,`FirstName`,`LastName`,`CarNo`)
VALUES
	(1,'Fred','Williams',1),
	(2,'Sarah','Watson',4),
	(3,'James','Hatlitch',6),
	(4,'Simon','Webaston',NULL),
	(5,'Sally','Harcourt',NULL),
	(6,'Martin','Boxer',NULL),
	(7,'Trevor','Wright',7);

/*!40000 ALTER TABLE `SALESPEOPLE` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

