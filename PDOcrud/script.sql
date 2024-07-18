CREATE DATABASE crudsimples DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;</span></pre>

USE crudsimples;

CREATE TABLE contatos(
    id INT NOT NULL AUTO_INCREMENT, -- id com AUTO_INCREMENT
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45),
    celular VARCHAR(15) DEFAULT NULL,
    PRIMARY KEY(id)   -- busca pelo id
)