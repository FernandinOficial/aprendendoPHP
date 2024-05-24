-- create database TutoCrudPhp;
use TutoCrudPhp;

-- create TABLE Cliente (
--     Id INT PRIMARY KEY AUTO_INCREMENT,
--     Nome VARCHAR(60) NOT NULL,
--     Email VARCHAR(150) NOT NULL,
--     Cidade VARCHAR(100),
--     UF VARCHAR(2)
-- )
-- select * from Cliente;

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(100),
    usuario VARCHAR(100),
    senha VARCHAR(100)
);
