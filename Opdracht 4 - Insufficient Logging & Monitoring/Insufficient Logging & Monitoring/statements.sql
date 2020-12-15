CREATE DATABASE brokenauth;

USE brokenauth;

CREATE TABLE user(
	id INT NOT NULL AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	PRIMARY KEY(id) 
);

ALTER TABLE user ADD COLUMN(
	IP_adrress VARCHAR(80),
	datum DATETIME DEFAULT CURRENT_TIMESTAMP
);