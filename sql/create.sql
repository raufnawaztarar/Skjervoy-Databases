
# Host: silva.computing.dundee.ac.uk (MySQL 5.1.37)
# Database: 19ac3d05

# following conditional comments copied from SQLTutorialCreateDatabase.sql
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP DATABASE IF EXISTS `19ac3d05`;

CREATE DATABASE `19ac3d05`;

USE `19ac3d05`;

# Employees

DROP TABLE IF EXISTS `Employees`;
# ------------------------------------------------------------

CREATE TABLE `Employees` (
  `Employee ID`  char(8) NOT NULL, 
  Name           varchar(255) NOT NULL, 
  Email          char(64) NOT NULL, 
  Password       char(64) NOT NULL, 
  Phone          char(14) NOT NULL, 
  Salary         real NOT NULL, 
  Role           varchar(255) NOT NULL, 
  `Bank Details` int(255) NOT NULL, 
  Picture        varchar(255), 
  Building       char(8) NOT NULL, 
  PRIMARY KEY (`Employee ID`));
)

LOCK TABLES `Employees` WRITE;
/*!40000 ALTER TABLE `Employees` DISABLE KEYS */;
INSERT INTO `Employees` (`Employee ID`, Name, Email, Phone, Salary, Role, `Bank Details`, Picture, Building)
VALUES
	(123456,'Erick Nolan','Erick Nolan@skjervoy.com','07774696960','26000','Manager','00-22-11 10061011','link','Shop'),
	(123457,'Peter Mayer','Peter Mayer@skjervoy.com','07774696961','27000','Manager','00-22-01 10061010','link','Shop'),
	(123458,'Jamal Scott','Jamal Scott@skjervoy.com','07774696962','28000','Manager','00-22-12 10061012','link','Shop'),
	(123459,'Keith Bates','Keith Bates@skjervoy.com','07774696963','26000','Manager','00-22-13 10061014','link','Shop'),
	(123460,'Gregg Rivas','Gregg Rivas@skjervoy.com','07774696964','25500','Manager','00-22-14 10061013','link','Shop'),
	(123461,'Ruby Wright','Ruby Wright@skjervoy.com','07774696965','25050','Manager','00-22-15 10061015','link','Shop'),
	(123462,'Micah Ewing','Micah Ewing@skjervoy.com','07774696966','45000','Manager','00-22-16 10061016','link','Shop'),
	(123463,'Maura Stone','Maura Stone@skjervoy.com','07774696967','75000','Manager','00-22-17 10061017','link','Shop'),
  (123456,'Mitzi House','Mitzi House@skjervoy.com','07774696968','26000','Manager','00-22-18 10061018','link','Shop'),
	(123457,'Steve Beard','Steve Beard@skjervoy.com','07774696969','20000','Manager','00-22-19 10061019','link','Shop'),
	(123458,'Lloyd Riley','Lloyd Riley@skjervoy.com','07774696970','20000','Manager','00-22-21 10061020','link','Shop'),
	(123459,'Isiah Rojas','Isiah Rojas@skjervoy.com','07774696971','29000','Manager','00-22-30 10061021','link','Shop'),
	(123460,'Galen Cline','Galen Cline@skjervoy.com','07774696972','21000','Manager','00-22-31 10061023','link','Shop'),
	(123461,'Davis Tyler','Davis Tyler@skjervoy.com','07774696973','29000','Manager','00-22-32 10061024','link','Shop'),
	(123462,'Candy Mills','Candy Mills@skjervoy.com','07774696974','26000','Manager','00-22-33 10061025','link','Shop'),
	(123463,'Vicky Johns','Vicky Johns@skjervoy.com','07774696975','26000','Manager','00-22-34 10061026','link','Shop'),
  (123464,'Dixie Pitts','Dixie Pitts@skjervoy.com','07774696976','27000','Manager','00-22-35 10061027','link','Shop'),
	(123465,'Deann Moran','Deann Moran@skjervoy.com','07774696977','29000','Manager','00-22-36 10061028','link','Shop'),
	(123466,'Essie Oneal','Essie Oneal@skjervoy.com','07774696978','29000','Manager','00-22-37 10061029','link','Shop'),
	(123467,'Alice Doyle','Alice Doyle@skjervoy.com','07774696979','24000','Manager','00-22-16 10061030','link','Shop'),
	(123468,'Ricky Eaton','Ricky Eaton@skjervoy.com','07774696980','23000','Manager','00-22-99 10061031','link','Shop'),
	(123469,'Ilene Bruce','Ilene Bruce@skjervoy.com','07774696981','21000','Manager','00-22-44 10061032','link','Shop'),
	(123470,'David Avery','David Avery@skjervoy.com','07774696982','22000','Manager','00-22-66 10061033','link','Shop'),
	(123471,'Allan Ellis','Allan Ellis@skjervoy.com','07774696983','29000','Manager','00-22-77 10061034','link','Shop'),
/*!40000 ALTER TABLE `Employees` ENABLE KEYS */;
UNLOCK TABLES;


# Buildings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Buildings`;

CREATE TABLE `Buildings` (
  `Building ID`  char(8) NOT NULL, 
  Type           varchar(16) NOT NULL, 
  `Phone Number` char(14), 
  Manager        char(8) NOT NULL, 
  Address        char(16) NOT NULL, 
  Revenue        real, 
  PRIMARY KEY (`Building ID`));
) 

LOCK TABLES `Buildings` WRITE;
/*!40000 ALTER TABLE `Buildings` DISABLE KEYS */;
INSERT INTO `Buildings` (`Building ID`,Type,`Phone Number`,Manager,Address,Revenue)
VALUES
	(1,'Bilda','Groves','1966-04-01','1999-05-01',2);

/*!40000 ALTER TABLE `Buildings` ENABLE KEYS */;
UNLOCK TABLES;


# Inventory
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Inventory`;

CREATE TABLE `Inventory` (
`Inventory Entry ID`        char(16) NOT NULL, 
`Product ID`                char(16) NOT NULL, 
 Quantity                    int(1) NOT NULL, 
 Building                    char(8) NOT NULL, 
 `Minimum Required Quantity` int(1) NOT NULL, 
 PRIMARY KEY (`Inventory Entry ID`));
) 

LOCK TABLES `Inventory` WRITE;
/*!40000 ALTER TABLE `SALES` DISABLE KEYS */;
INSERT INTO `Inventory` (`Inventory Entry ID`,`Product ID` ,Quantity, Building,`Minimum Required Quantity`)
VALUES
	(1,1,'Simpson','Sofa','Harrison',235.67);

/*!40000 ALTER TABLE `Inventory` ENABLE KEYS */;
UNLOCK TABLES;


# Products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `Product ID`    char(16) NOT NULL, 
  Name            varchar(255) NOT NULL, 
  Type            char(64) NOT NULL, 
  `Buying Price`  real NOT NULL, 
  `Selling Price` real NOT NULL, 
  Weight          real NOT NULL, 
  Picture         varchar(255), 
  Supplier        varchar(255) NOT NULL, 
  PRIMARY KEY (`Product ID`));
) 

LOCK TABLES `Products` WRITE;
/*!40000 ALTER TABLE `Products` DISABLE KEYS */;
INSERT INTO `Products` (`Product ID`,Name,Type,`Buying Price`,`Selling Price`,Weight, Picture, Supplier)
VALUES
	(3,2,'Smith','Stool','Ford',82.78);

/*!40000 ALTER TABLE `Products` ENABLE KEYS */;
UNLOCK TABLES;


# Couriers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Couriers`;

CREATE TABLE `Couriers` (
 Name               varchar(255) NOT NULL, 
 Address            char(16) NOT NULL, 
 `Cost per Kg`      real NOT NULL, 
 `Collection point` char(16) NOT NULL, 
 `Warehouse ID`     char(8) NOT NULL, 
  PRIMARY KEY (Name));

LOCK TABLES `Couriers` WRITE;
/*!40000 ALTER TABLE `Couriers` DISABLE KEYS */;
INSERT INTO `Couriers` (Name, Address, `Cost per Kg`, `Collection point`, `Warehouse ID`)
VALUES
	(1,'Fred','Williams',1);

/*!40000 ALTER TABLE `Couriers` ENABLE KEYS */;
UNLOCK TABLES;


# Suppliers
# ------------------------------------------------------------
DROP TABLE IF EXISTS Suppliers;

CREATE TABLE Suppliers (
  Name    varchar(255) NOT NULL, 
  Address char(16) NOT NULL, 
  Phone   char(14) NOT NULL, 
  Email   varchar(255) NOT NULL, 
  PRIMARY KEY (Name)
  );

LOCK TABLES Suppliers WRITE;
/*!40000 ALTER TABLE Suppliers DISABLE KEYS */;
INSERT INTO Suppliers (Name, Address, Phone, Email)
VALUES
	('Lamy','0000000000000001','+41 7777023456','orders@lamy.de');
	('Pilot','0000000000000002','+44 7777023457','sales@pilot.co.uk');

/*!40000 ALTER TABLE Suppliers ENABLE KEYS */;
UNLOCK TABLES;


# Orders
# ------------------------------------------------------------
DROP TABLE IF EXISTS Orders;

CREATE TABLE Orders (
  `Order ID`        char(16) NOT NULL, 
  Date              date NOT NULL, 
  Product           char(16) NOT NULL, 
  Quantity          int(1) NOT NULL, 
  Address           char(16) NOT NULL, 
  Weight            real NOT NULL, 
  `Payment Details` varchar(255) NOT NULL, 
  `Customer ID`     char(16) NOT NULL, 
  `Courier Name`    varchar(255) NOT NULL, 
  PRIMARY KEY (`Order ID`)
  );

LOCK TABLES Orders WRITE;
/*!40000 ALTER TABLE Orders DISABLE KEYS */;
INSERT INTO Orders 
	(`Order ID`, Date, Product, Quantity, Address, Weight, `Payment Details`, `Customer ID`, `Courier Name`)
VALUES
	('2000111122223333', '2019-11-02', '3000111122223333', 1, '0000111122223333', 2100.0, 'Card ending in 4567', '1111222233334444', 'Royal Mail');
	('2000111122223334', '2019-11-10', '3000111122223334', 2, '0000111122223334', 246.5,  'Card ending in 4848', '1111222233334445', 'DHL');

/*!40000 ALTER TABLE Orders ENABLE KEYS */;
UNLOCK TABLES;



# Customers
# ------------------------------------------------------------
DROP TABLE IF EXISTS Customers;

CREATE TABLE Customers (
  `Customer ID` char(16) NOT NULL, 
  Name          varchar(255) NOT NULL, 
  Address       char(16) NOT NULL, 
  Phone         char(14), 
  Email         varchar(255) NOT NULL, 
  Password      char(64) NOT NULL, 
  PRIMARY KEY (`Customer ID`)
  );

LOCK TABLES Customers WRITE;
/*!40000 ALTER TABLE Customers DISABLE KEYS */;
INSERT INTO Customers (`Customer ID`, Name, Address, Phone, Email, Password)
VALUES
	('1111222233334444','Fred the Fish', '5000111122223333', '+44 7777123456','fredf@bbmail.com', 'faf3c42a3408b253d75a3b8828aca9231e55e6af1cdcb6e37c50986f2ce1d4da'); # My leg!
	('1111222233334445','Sandy Cheeks', '5000111122223334', '+44 7777123457','sandyc@texasmail.com', '0eefdf991b49be88b622dd960c56f4bc4cd2eee7c1c74578452c923c4cc274b9'); # Howdy

/*!40000 ALTER TABLE Customers ENABLE KEYS */;
UNLOCK TABLES;


# Addresses
# ------------------------------------------------------------
DROP TABLE IF EXISTS Addresses;

CREATE TABLE Addresses (
  `Address ID`             char(16) NOT NULL, 
  `First Line of Address`  char(255) NOT NULL, 
  `Second Line of Address` char(255), 
  Postcode                 char(9) NOT NULL, 
  City                     varchar(255) NOT NULL, 
  Country                  varchar(255) NOT NULL, 
  PRIMARY KEY (`Address ID`)
  );

LOCK TABLES Addresses WRITE;
/*!40000 ALTER TABLE Addresses DISABLE KEYS */;
INSERT INTO Addresses 
(`Address ID`,`First Line of Address`,`Second Line of Address`,Postcode, City, Country)
VALUES
	('5000111122223333','21 Gravel St', '', 'BB1 2FF','Bikini Bottom', 'International Waters');
	('5000111122223334','1 Glass Dome Close', 'South Field', 'BB4 001','Bikini Bottom', 'International Waters');

/*!40000 ALTER TABLE Addresses ENABLE KEYS */;
UNLOCK TABLES;






# following conditional comments also copied from SQLTutorialCreateDatabase.sql
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

