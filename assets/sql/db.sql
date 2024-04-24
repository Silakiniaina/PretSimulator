CREATE DATABASE pret_simulator;

USE pret_simulator; 

CREATE TABLE user(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(200) NOT NULL, 
    email VARCHAR(200) NOT NULL,
    password VARCHAR(256) NOT NULL, 
    UNIQUE(email,password)
)Engine=InnoDb;