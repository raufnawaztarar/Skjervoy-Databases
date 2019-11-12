CREATE TABLE Employees (
  `Employee ID`  char(8) NOT NULL, 
  Name           varchar(255) NOT NULL, 
  Email          char(64) NOT NULL, 
  Password       char(64) NOT NULL, 
  Phone          char(14) NOT NULL, 
  Salary         real NOT NULL, 
  Role           varchar(255) NOT NULL, 
  `Bank Details` 255 NOT NULL, 
  Picture        varchar(255), 
  Building       char(8) NOT NULL, 
  PRIMARY KEY (`Employee ID`));
CREATE TABLE Buildings (
  `Building ID`  char(8) NOT NULL, 
  Type           varchar(16) NOT NULL, 
  `Phone Number` char(14), 
  Manager        char(8) NOT NULL, 
  Address        char(16) NOT NULL, 
  Revenue        real, 
  PRIMARY KEY (`Building ID`));
CREATE TABLE Inventory (
  `Inventory Entry ID`        char(16) NOT NULL, 
  `Product ID`                char(16) NOT NULL, 
  Quantity                    int(1) NOT NULL, 
  Building                    char(8) NOT NULL, 
  `Minimum Required Quantity` int(1) NOT NULL, 
  PRIMARY KEY (`Inventory Entry ID`));
CREATE TABLE Products (
  `Product ID`    char(16) NOT NULL, 
  Name            varchar(255) NOT NULL, 
  Type            char(64) NOT NULL, 
  `Buying Price`  real NOT NULL, 
  `Selling Price` real NOT NULL, 
  Weight          real NOT NULL, 
  Picture         varchar(255), 
  Supplier        varchar(255) NOT NULL, 
  PRIMARY KEY (`Product ID`));
CREATE TABLE Couriers (
  Name               varchar(255) NOT NULL, 
  Address            char(16) NOT NULL, 
  `Cost per Kg`      real NOT NULL, 
  `Collection point` char(16) NOT NULL, 
  `Warehouse ID`     char(8) NOT NULL, 
  PRIMARY KEY (Name));
CREATE TABLE Suppliers (
  Name    varchar(255) NOT NULL, 
  Address char(16) NOT NULL, 
  Phone   char(14) NOT NULL, 
  Email   varchar(255) NOT NULL, 
  PRIMARY KEY (Name));
CREATE TABLE Orders (
  `Order ID`        char(16) NOT NULL, 
  Time              time NOT NULL, 
  Product           char(16) NOT NULL, 
  Quantity          int(1) NOT NULL, 
  Address           char(16) NOT NULL, 
  Weight            real NOT NULL, 
  `Payment Details` varchar(255) NOT NULL, 
  `Customer ID`     char(16) NOT NULL, 
  `Courier Name`    varchar(255) NOT NULL, 
  PRIMARY KEY (`Order ID`));
CREATE TABLE Customers (
  `Customer ID` char(16) NOT NULL, 
  Name          varchar(255) NOT NULL, 
  Address       char(16) NOT NULL, 
  Phone         char(14), 
  Email         varchar(255) NOT NULL, 
  Password      char(64) NOT NULL, 
  PRIMARY KEY (`Customer ID`));
CREATE TABLE Addresses (
  `Address ID`             char(16) NOT NULL, 
  `First Line of Address`  char(255) NOT NULL, 
  `Second Line of Address` char(255), 
  Postcode                 char(9) NOT NULL, 
  City                     varchar(255) NOT NULL, 
  Country                  varchar(255) NOT NULL, 
  PRIMARY KEY (`Address ID`));
ALTER TABLE Employees ADD CONSTRAINT FKEmployees916325 FOREIGN KEY (Building) REFERENCES Buildings (`Building ID`);
ALTER TABLE Couriers ADD CONSTRAINT FKCouriers118064 FOREIGN KEY (`Warehouse ID`) REFERENCES Buildings (`Building ID`);
ALTER TABLE Products ADD CONSTRAINT FKProducts246152 FOREIGN KEY (Supplier) REFERENCES Suppliers (Name);
ALTER TABLE Orders ADD CONSTRAINT FKOrders899367 FOREIGN KEY (`Courier Name`) REFERENCES Couriers (Name);
ALTER TABLE Orders ADD CONSTRAINT FKOrders119678 FOREIGN KEY (`Customer ID`) REFERENCES Customers (`Customer ID`);
ALTER TABLE Buildings ADD CONSTRAINT FKBuildings391820 FOREIGN KEY (Address) REFERENCES Addresses (`Address ID`);
ALTER TABLE Customers ADD CONSTRAINT FKCustomers529037 FOREIGN KEY (Address) REFERENCES Addresses (`Address ID`);
ALTER TABLE Orders ADD CONSTRAINT FKOrders61888 FOREIGN KEY (Address) REFERENCES Addresses (`Address ID`);
ALTER TABLE Suppliers ADD CONSTRAINT FKSuppliers109693 FOREIGN KEY (Address) REFERENCES Addresses (`Address ID`);
ALTER TABLE Inventory ADD CONSTRAINT FKInventory861228 FOREIGN KEY (`Product ID`) REFERENCES Products (`Product ID`);
ALTER TABLE Orders ADD CONSTRAINT FKOrders398437 FOREIGN KEY (Product) REFERENCES Products (`Product ID`);
ALTER TABLE Couriers ADD CONSTRAINT FKCouriers956437 FOREIGN KEY (Address) REFERENCES Addresses (`Address ID`);
ALTER TABLE Couriers ADD CONSTRAINT FKCouriers520587 FOREIGN KEY (`Collection point`) REFERENCES Addresses (`Address ID`);
ALTER TABLE Buildings ADD CONSTRAINT FKBuildings276807 FOREIGN KEY (Manager) REFERENCES Employees (`Employee ID`);
ALTER TABLE Inventory ADD CONSTRAINT FKInventory368634 FOREIGN KEY (Building) REFERENCES Buildings (`Building ID`);
