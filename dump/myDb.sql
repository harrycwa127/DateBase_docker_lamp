SET time_zone = "+08:00";

CREATE TABLE `Person` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Person` (`id`, `name`,`age`) VALUES
(1, 'William',30),
(2, 'Marc',17),
(3, 'John',55);

CREATE TABLE IF NOT EXISTS `users` (
    `user_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_name` VARCHAR(100) NOT NULL UNIQUE,
    `user_password` VARCHAR(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET=latin1;

-- Sample user and data

INSERT INTO `users` (`user_id`, `user_name`,`user_password`) VALUES
(1,'test','$2y$10$9phx9WxnXL2yDJ.Z5Ygaze5a9AiVSu1blMy/kBbh2og.1Z/rNCYx.'),
(2,'User1','$2y$10$PARfzpp1B5HFPvC2gsr8cuIwTfZi6xuAEXTiJPHv7I2mqe0D1QhOe');



-- Sample table and data

-- Create bookorder table
	
CREATE TABLE bookorder(
    Order_Number INT NOT NULL,
    Cus_ID INT,
    Mailing_Address VARCHAR(500),
    Credit_Card_Number VARCHAR(16),
    Shipment_Method VARCHAR(50),
    Shipping_Date DATE,
    Date_and_Time_of_Order DATETIME,
    ISBN VARCHAR(17),
    Price DECIMAL(7, 2),
    Purchase_Price DECIMAL(7, 2),
    Quantity_Purchased INT,
    Shipping_Cost DECIMAL(7, 2),
    Tax DECIMAL(7, 2),
    PRIMARY KEY(Order_Number)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO `bookorder` (`Order_Number`, `Cus_ID`, `Mailing_Address`, `Credit_Card_Number`, `Shipment_Method`, `Shipping_Date`, `Date_and_Time_of_Order`, `ISBN`, `Price`, `Purchase_Price`, `Quantity_Purchased`, `Shipping_Cost`, `Tax`) 
VALUES (1,001, 'John@gmail.com', '1111222233334444', 'ground', '2022-01-01', '2022-01-01 11:22:33', '1234567891234', 100, 120, 1, 30,5),
(2,003, 'Marc@gmail.com', '2222333344445555', 'ground', '2022-05-02', '2022-05-02 16:01:50', '5378295647392', 90, 110, 1, 30,5),
(3,003, 'William@gmail.com', '3333444455556666', 'ground', '2022-04-26', '2022-04-26 21:42:05', '7264820174832', 80, 100, 1, 30,4);


-- Create customer table
CREATE TABLE customer(
    Fname VARCHAR(50),
    MI VARCHAR(50),
    Lname VARCHAR(50),
    Cus_ID INT NOT NULL,
    Address VARCHAR(500),
    Credit_Card_Number VARCHAR(16),
    Expiration_Date DATE,
    PhoneNumber VARCHAR(20),
    E_mail VARCHAR(50),
    PRIMARY KEY(Cus_ID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- Create book table
CREATE TABLE book(
    Title VARCHAR(200),
    ISBN VARCHAR(17) NOT NULL,
    PRIMARY KEY(ISBN),
    Pub_ID INT,
    Edition INT,
    Date_of_Publication DATE,
    Price DECIMAL(7, 2),
    Book_Description VARCHAR(1000),
    Quantity INT,
    Category_Code INT
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- Create publisher table
CREATE TABLE publisher(
    NAME VARCHAR(100),
    Pub_ID INT NOT NULL,
    Address VARCHAR(500),
    PRIMARY KEY(Pub_ID)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- Create category table
CREATE TABLE category(
    Category_Code INT NOT NULL,
    Category_Description VARCHAR(1000),
    Sub_Category_Code INT,
    PRIMARY KEY(Category_Code)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

-- Create author table
CREATE TABLE author(
    Fname VARCHAR(50) NOT NULL,
    MI VARCHAR(50) NOT NULL,
    Lname VARCHAR(50) NOT NULL,
    ISBN VARCHAR(17) NOT NULL,
    Title VARCHAR(200)
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


-- user privilege

