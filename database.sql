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
      username VARCHAR(100) NOT NULL
  );

CREATE TABLE `bomen` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      rasnaam VARCHAR(100) NOT NULL,
      soort VARCHAR(100) NOT NULL,
      aantal INT(11) NOT NULL,
      tijdvak VARCHAR(100) NOT NULL,
      jaarcheck VARCHAR(100) NOT NULL,
      latitude VARCHAR(100) NOT NULL,
      longitude VARCHAR(100) NOT NULL
  );