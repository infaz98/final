CREATE DATABASE PettRuff;
use PettRuff;

CREATE TABLE Customer (
	CustomerID int(10) NOT NULL UNIQUE, 
	CustomerName varchar(255) NOT NULL,
    CustomerContactNumber int(10) NOT NULL,
    CustomerAddress varchar(255) NOT NULL,
	CustomerEmail varchar(255) NOT NULL,
    CustomerPassword varchar(255) NOT NULL,
    CustomerUserName varchar(255) NOT NULL,
   PRIMARY KEY (CustomerID) 
);


CREATE TABLE Product (
	ProductID int(10) NOT NULL UNIQUE, 
	ProductName varchar(255) NOT NULL,
    ProductPrice int(10) NOT NULL,
    ProductQuantity int(10) NOT NULL,
    PRIMARY KEY (ProductID) 
);

CREATE TABLE Orders (
	OrderID int(10) NOT NULL UNIQUE, 
	CustomerID int(10) NOT NULL UNIQUE, 
	ProductID int(10) NOT NULL UNIQUE, 
	OrderPrice int(10) NOT NULL, 
    PRIMARY KEY (ProductID),
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID),
    FOREIGN KEY (ProductID) REFERENCES Product(ProductID)
);

CREATE TABLE Orders (
	OrderID int(10) NOT NULL UNIQUE, 
	CustomerID int(10) NOT NULL UNIQUE, 
	ProductID int(10) NOT NULL UNIQUE, 
	OrderPrice int(10) NOT NULL, 
    PRIMARY KEY (ProductID),
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID),
    FOREIGN KEY (ProductID) REFERENCES Product(ProductID)
);

CREATE TABLE Items (
	ProductID int(10) NOT NULL,
    OrderID int(10) NOT NULL, 
	OrderPrice int(10) NOT NULL, 
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Product(ProductID)
);


