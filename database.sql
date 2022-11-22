DROP DATABASE IF EXISTS `vechtsfruit`;

CREATE DATABASE `vechtsfruit`;

USE `vechtsfruit`;

CREATE TABLE `users` (
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username TINYTEXT NOT NULL,
    password LONGTEXT NOT NULL,
    email TINYTEXT NOT NULL
);

  CREATE TABLE `adminpanel` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(100) NOT NULL,
  );