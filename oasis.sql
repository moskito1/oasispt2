CREATE TABLE userInfo
(id int unsigned AUTO_INCREMENT NOT NULL PRIMARY KEY,
username varchar (30) UNIQUE NOT NULL, 
password varchar(255) NOT NULL,
firstname varchar(60) NOT NULL,
lastname varchar(60) NOT NULL,
email varchar(200) UNIQUE NOT NULL,
address varchar(255) NOT NULL,
contactno varchar(100) UNIQUE NOT NULL
);

CREATE TABLE products (
  prodid int unsigned AUTO_INCREMENT NOT NULL PRIMARY KEY,
  prodname varchar(255) NOT NULL,
  price decimal(10, 2) NOT NULL,
  img text NOT NULL,
  category varchar(255) NOT NULL
);

INSERT INTO products 
VALUES (1, 'Iced Americano', 120.00, 'imgs/Menu/16.jpg', 'Espresso/Best Seller'),
(2, 'Iced Latte', 125.00, 'imgs/Menu/15.jpg', 'Espresso'),
(3, 'Cold Brew', 120.00, 'imgs/Menu/14.jpg', 'Espresso'),
(4, 'Iced Mocha', 130.00, 'imgs/Menu/13.jpg', 'Espresso'),
(5, 'Iced Vanilla Latte', 130.00, 'imgs/Menu/12.jpg', 'Espresso'),
(6, 'Iced Caramel Machitto', 130.00, 'imgs/Menu/10.jpg', 'Espresso'),
(7, 'Iced Cappucino', 135.00, 'imgs/Menu/9.jpg', 'Espresso'),
(8, 'Iced Spanish Latte', 120.00, 'imgs/Menu/8.jpg', 'Espresso'),
(9, 'Vietnamese Iced Coffee', 120.00, 'imgs/Menu/7.jpg', 'Espresso'),
(10, 'Matcha Latte', 130.00, 'imgs/Menu/6.jpg', 'Non Espresso'),
(11, 'Strawberry Milk', 120.00, 'imgs/Menu/5.jpg', 'Non Espresso'),
(12, 'Lemonade', 120.00, 'imgs/Menu/4.jpg', 'Non Espresso'),
(13, 'GrapeFruit Ade', 120.00, 'imgs/Menu/3.jpg', 'Non Espresso'),
(14, 'Iced Hibiscus Cooler', 120.00, 'imgs/Menu/2.jpg', 'Non Espresso'),
(15, 'ICed Chai Tea Latte', 120.00, 'imgs/Menu/1.jpg', 'Non Espresso');