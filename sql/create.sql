
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
  `Bank Details` varchar(255) NOT NULL, 
  Picture        varchar(255), 
  Building       char(8) NOT NULL, 
  PRIMARY KEY (`Employee ID`)
  );

LOCK TABLES `Employees` WRITE;
/*!40000 ALTER TABLE `Employees` DISABLE KEYS */;
INSERT INTO `Employees` (`Employee ID`, Name, Email, Phone, Salary, Role, `Bank Details`, Picture, Building, Password) # pw is just 'password'
VALUES
	('00123448','Erick Nolan','ErickNolan@skjervoy.com','07774696960',26000,'Product Manager','00-22-11 10061011','img/emp/erick_nolan.jpg','00222222', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123449','Peter Mayer','PeterMayer@skjervoy.com','07774696961',27000,'HR Manager','00-22-01 10061010','img/emp/peter_mayer.jpg','00222222', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123450','Jamal Scott','JamalScott@skjervoy.com','07774696962',28000,'Manager','00-22-12 10061012','img/emp/jamal_scott.jpg','00222222', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123451','Keith Bates','KeithBates@skjervoy.com','07774696963',26000,'Manager','00-22-13 10061014','img/emp/keith_bates.jpg','00333333', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'), # shop mgr
	('00123452','Gregg Rivas','GreggRivas@skjervoy.com','07774696964',25500,'Manager','00-22-14 10061013',null,'00222222', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123455','Maura Stone','MauraStone@skjervoy.com','07774696967',75000,'Sales Assistant','00-22-17 10061017','img/emp/maura_stone.jpg','00333333', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
  ('00123456','Mitzi House','MitziHouse@skjervoy.com','07774696968',26000,'Sales Assistant','00-22-18 10061018',null,'00333333', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123457','Steve Beard','SteveBeard@skjervoy.com','07774696969',20000,'Sales Assistant','00-22-19 10061019','img/emp/steve_beard.jpg','00333333', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123458','Lloyd Riley','LloydRiley@skjervoy.com','07774696970',20000,'Sales Assistant','00-22-21 10061020','img/emp/lloyd_riley.jpg','00333333', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123466','Essie Oneal','EssieOneal@skjervoy.com','07774696978',29000,'Manager','00-22-37 10061029','img/emp/essie_oneal.jpg','00111111', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'), # wh mgr
	('00123467','Alice Doyle','AliceDoyle@skjervoy.com','07774696979',24000,'Warehouse Assistant','00-22-16 10061030','img/emp/alice_doyle.jpg','00111111', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123468','Ricky Eaton','RickyEaton@skjervoy.com','07774696980',23000,'Warehouse Assistant','00-22-99 10061031','img/emp/ricky_eaton.jpg','00111111', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
	('00123470','David Avery','DavidAvery@skjervoy.com','07774696982',22000,'Manager','00-22-66 10061033','img/emp/david_avery.jpg','00222222', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'), #office mgr
	('00123471','Allan Ellis','AllanEllis@skjervoy.com','07774696983',29000,'Manager','00-22-77 10061034','img/emp/allan_ellis.jpg','00222222', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');
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

LOCK TABLES `Buildings` WRITE;
/*!40000 ALTER TABLE `Buildings` DISABLE KEYS */;
INSERT INTO `Buildings` (`Building ID`,Type,`Phone Number`,Manager,Address,Revenue)
VALUES 
	('00111111','Warehouse','0123456789789','00123466','5600111122223333',2565656565), # Essie Oneal
  ('00222222','Office','0123456789779','00123470','5600111122223334',2565656565), # David Avery
  ('00333333','Shop','01234588889779','00123451','5600111122223335',2999656565) # Keith Bates
  ;
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

LOCK TABLES `Inventory` WRITE;
/*!40000 ALTER TABLE `Inventory` DISABLE KEYS */;
INSERT INTO `Inventory` (`Inventory Entry ID`,`Product ID` ,Quantity, Building,`Minimum Required Quantity`)
VALUES 
	('0000111100999999','3000111122223333',10,'00111111','10'),
  ('0000111100888888','3000111122223334',8,'00111111','10'),
  ('0000111100777777','3000111122223335',9,'00222222','10')
  ;
/*!40000 ALTER TABLE `Inventory` ENABLE KEYS */;
UNLOCK TABLES;


# Products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Products`;

CREATE TABLE `Products` (
  `Product ID`    char(16) NOT NULL, 
  Name            varchar(255) NOT NULL, 
  Type            varchar(64) NOT NULL, 
  `Buying Price`  real NOT NULL, 
  `Selling Price` real NOT NULL, 
  Weight          real NOT NULL, 
  Picture         varchar(255), 
  Supplier        char(16) NOT NULL, 
  Series          varchar(255) NOT NULL,
  PRIMARY KEY (`Product ID`));

LOCK TABLES `Products` WRITE;
/*!40000 ALTER TABLE `Products` DISABLE KEYS */;
INSERT INTO `Products` (`Product ID`,Name,Type,`Buying Price`,`Selling Price`,Weight, Picture, Supplier, Series)
VALUES 
  ('3000111122223333','Fargerik', 'Pen','10.99','99.99','1','img/pen/fargerik.jpg','0000000000000003', 'Excellence'),
  ('3000111122223334','Glatt', 'Pen','10.99','199.99','1','img/pen/glatt.jpg','0000000000000003', 'Elite'),
  ('3000111122223335','Tre', 'Pen','10.99','9.99','1','img/pen/tre.jpg','0000000000000003', 'Fire'),
  ('3000111122223336','Levende', 'Pen','10.99','59.99','1','img/pen/levende.jpg','0000000000000003', 'Elite'),
  ('3000111122223337','Titan', 'Pen','10.99','49.99','1','img/pen/titan.jpg','0000000000000003', 'Excellence'),
  ('3000111122223338','Sukker', 'Pen','10.99','999.99','1','img/pen/sukker.jpg','0000000000000003', 'Fire'),
  ('3000111122223339','Energi', 'Pen','10.99','69.69','1','img/pen/energi.jpg','0000000000000003', 'Elite'),
  ('3000111122223340','Syndiket', 'Pen','10.99','420','1','img/pen/syndikat.jpg','0000000000000003', 'Excellence'),
  ('3000111122223341','Halogen', 'Pen','10.99','99.99','1','img/pen/halogen.jpg','0000000000000003', 'Elite'),
  ('3000111122223342','Vestlig', 'Pen','10.99','99.99','1','img/pen/vestlig.jpg','0000000000000003', 'Excellence'),
  ('3000111122223343','Brann', 'Pen','10.99','129.99','1','img/pen/brann.jpg','0000000000000003', 'Fire'),
  ('3000111122223344','Sunn', 'Pen','10.99','89.99','1','img/pen/sunn.jpg','0000000000000003', 'Elite'),
  ('3000111122223345','Metallutstyr', 'Pen','5.99','18.99','1','img/pen/metallutstyr.jpg','0000000000000003', 'Excellence'),
  ('3000111122223346','Marken', 'Pen','10.99','82.99','1','img/pen/marken.jpg','0000000000000003', 'Elite'),
  ('3000111122223347','Luksus', 'Pen','10.99','99.99','1','img/pen/luksus.jpg','0000000000000003', 'Fire'),

  ('3000111122223348','Vitaminer', 'Notebook','1.99','9.99','1','img/nb/vitaminer.jpg','0000000000000003', 'Fjord'),
  ('3000111122223349','Utholdenhet', 'Notebook','1.99','19.99','1','img/nb/utholdenhet.jpg','0000000000000003', 'Excellence'),
  ('3000111122223350','Gulrot', 'Notebook','1.99','19.99','1','img/nb/gulrot.jpg','0000000000000003', 'Elite'),
  ('3000111122223351','Rockestjerne', 'Notebook','1.99','9.99','1','img/nb/rockestjerne.jpg','0000000000000003', 'Excellence'),
  ('3000111122223352','Eleganse', 'Notebook','1.99','8.99','1','img/nb/eleganse.jpg','0000000000000003', 'Elite'),
  ('3000111122223353','Forløsning', 'Notebook','1.99','7.99','1','img/nb/forlosning.jpg','0000000000000003', 'Fjord'),
  ('3000111122223354','Nødvendig', 'Notebook','1.99','6.99','1','img/nb/nodvendig.jpg','0000000000000003', 'Elite'),
  ('3000111122223355','Løve', 'Notebook','1.99','9.99','1','img/nb/love.jpg','0000000000000003', 'Fjord'),
  ('3000111122223356','Kurer', 'Notebook','1.99','11.99','1','img/nb/kurer.jpg','0000000000000003', 'Elite'),
  ('3000111122223357','Skapning', 'Notebook','1.99','12.99','1','img/nb/skapning.jpg','0000000000000003', 'Excellence'),
  ('3000111122223358','Korn', 'Notebook','1.99','8.99','1','img/nb/korn.jpg','0000000000000003', 'Elite'),
  ('3000111122223359','Moro', 'Notebook','1.99','7.99','1','img/nb/moro.jpg','0000000000000003', 'Fjord'),
  ('3000111122223360','Kalibrering', 'Notebook','1.99','9.99','1','img/nb/kalibrering.jpg','0000000000000003', 'Elite'),
  ('3000111122223361','Snikmorder', 'Notebook','0.99','8.99','1','img/nb/snikmorder.jpg','0000000000000003', 'Excellence'),
  ('3000111122223362','Vann', 'Notebook','1.99','4.99','1','img/nb/vann.jpg','0000000000000003', 'Elite'),

  ('3000111122223363','Safari', 'Pen','16.99','28.99','1','img/pen/safari.jpg','0000000000000001', 'Other'),
  ('3500111122223333','Metropolitan', 'Pen','12.99','21.99','1','img/pen/metropolitan.jpg','0000000000000002', 'Other')
  ;

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
	('Fedx','5500111122223333','2','5500111122223334', '999999');

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
	('Lamy','0000000000000001','+41 7777023456','orders@lamy.de'),
	('Pilot','0000000000000002','+44 7777023457','sales@pilot.co.uk'),
    ('Skjervoy', '0000000000000003', '+44 7777000000', 'order@skjervoy.com');

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
	('2000111122223333', '2019-11-02', '3000111122223333', 1, '0000111122223333', 2100.0, 'Card ending in 4567', '1111222233334444', 'Royal Mail'),
	('2000111122223334', '2019-11-10', '3000111122223334', 2, '0000111122223334', 246.5,  'Card ending in 4848', '1111222233334445', 'DHL')
    ;

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
	('1111222233334444','Fred the Fish', '5000111122223333', '+44 7777123456','fredf@bbmail.com', 'faf3c42a3408b253d75a3b8828aca9231e55e6af1cdcb6e37c50986f2ce1d4da'), # My leg!
	('1111222233334445','Sandy Cheeks', '5000111122223334', '+44 7777123457','sandyc@texasmail.com', '0eefdf991b49be88b622dd960c56f4bc4cd2eee7c1c74578452c923c4cc274b9') # Howdy
	;
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
	('5000111122223333','21 Gravel St', '', 'BB1 2FF','Bikini Bottom', 'International Waters'),
	('5000111122223334','1 Glass Dome Close', 'South Field', 'BB4 001','Bikini Bottom', 'International Waters'),
	('5500111122223333','88 Perth road', '', 'DD1 1AA','Dundee', 'Scotland'),
	('5500111122223334','88 Perth Road', '', 'G41 2ZX','Glasgow', 'Scotland'),
	('5600111122223333','55 Rosefied street', '', 'G41 2TT','Glasgow', 'Scotland'),
	('5600111122223334','237 Marmorvegen', '', '2611','Lillehammer', 'Norway'),
	('5600111122223335','99 Stepps Road', 'Stepps', 'G55 1LL','Glasgow', 'Scotland');

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

