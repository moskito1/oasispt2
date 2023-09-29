CREATE TABLE userInfo
(id int unsigned AUTO_INCREMENT NOT NULL PRIMARY KEY,
username varchar (30) UNIQUE NOT NULL, 
password varchar(255) NOT NULL,
firstname varchar(60) NOT NULL,
lastname varchar(60) NOT NULL,
email varchar(200) UNIQUE NOT NULL,
address varchar(255) NOT NULL,
contactno varchar(100) UNIQUE NOT NULL);



