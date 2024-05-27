-- CREATE DATABASE secure_login;

USE secure_login;

CREATE TABLE members 
(    
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,    
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password CHAR(128) NOT NULL,
    salt CHAR(128) NOT NULL
);
