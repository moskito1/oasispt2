CREATE TABLE userInfo
(id int unsigned AUTO_INCREMENT NOT NULL PRIMARY KEY,
firstname varchar(60) NOT NULL,
lastname varchar(60) NOT NULL,
username varchar (30) UNIQUE NOT NULL, 
email varchar(200) UNIQUE NOT NULL,
password varchar(255) NOT NULL,
useraddress varchar(255),
contactno varchar(255),
userimg text
);

CREATE TABLE products (
  prodid int unsigned AUTO_INCREMENT NOT NULL PRIMARY KEY,
  prodname varchar(255) NOT NULL,
  tallprice decimal(10, 2) NOT NULL,
  grandeprice decimal(10, 2) NOT NULL,
  ventiprice decimal(10, 2) NOT NULL,
  img text NOT NULL,
  category varchar(255) NOT NULL
);

INSERT INTO products (prodname, tallprice, grandeprice, ventiprice, img, category)
VALUES ('Iced Americano', 120.00, 130.00, 150.00, 'imgs/Menu/16.jpg', 'Espresso'),
('Iced Latte', 125.00, 145.00, 160.00,  'imgs/Menu/15.jpg', 'Espresso'),
('Cold Brew', 120.00, 140.00, 155.00, 'imgs/Menu/14.jpg', 'Espresso'),
('Iced Chai Tea Latte', 120.00, 140.00, 155.00,'imgs/Menu/1.jpg', 'Non Espresso'),
('Iced Mocha', 130.00, 145.00, 160.00, 'imgs/Menu/13.jpg', 'Espresso'),
('Lemonade', 120.00, 140.00, 155.00, 'imgs/Menu/4.jpg', 'Non Espresso'),
('Iced Vanilla Latte', 130.00, 145.00, 160.00,'imgs/Menu/12.jpg', 'Espresso'),
('GrapeFruit Ade', 120.00, 140.00, 155.00, 'imgs/Menu/3.jpg', 'Non Espresso'),
('Iced Caramel Machitto', 130.00, 145.00, 160.00,'imgs/Menu/10.jpg', 'Espresso'),
('Iced Cappucino', 135.00, 145.00, 165.00,'imgs/Menu/9.jpg', 'Espresso'),
('Iced Hibiscus Cooler', 120.00, 140.00, 155.00,'imgs/Menu/2.jpg', 'Non Espresso'),
('Iced Spanish Latte', 120.00, 140.00, 155.00, 'imgs/Menu/8.jpg', 'Espresso'),
('Vietnamese Iced Coffee', 120.00, 140.00, 155.00, 'imgs/Menu/7.jpg', 'Espresso'),
('Matcha Latte', 130.00, 150.00, 160.00, 'imgs/Menu/6.jpg', 'Non Espresso'),
('Strawberry Milk', 120.00, 140.00, 155.00, 'imgs/Menu/5.jpg', 'Non Espresso');



