-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2013 at 12:19 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci-212`
--


--

create table IF NOT EXISTS users(
userid int  auto_increment,
fname varchar(20) not null,
lname varchar(20) not null,
username varchar(30)  ,
password varchar (30) not null,
primary key (userid , username)
);
--
-- Dumping data for table `users`
--

create table profile(
userId int primary key,
Country varchar (20) not null,
PostalCode varchar (20) not null,
currentStatus int not null,
DOB varchar(20) not null,
language varchar(20) not null,
YearsOfExperience int not null,
joiningDate varchar(20),
FOREIGN KEY (userID) REFERENCES users(userid)
);




create table connections(
userId1 int,
userId2 int,
FOREIGN KEY (userId1) REFERENCES users(userid),
FOREIGN KEY (userId2) REFERENCES users(userid)

);




create table requests(
userId1 int,
userId2 int,
FOREIGN KEY (userId1) REFERENCES users(userid),
FOREIGN KEY (userId2) REFERENCES users(userid)

);






create table Company(
CompanyId int NOT NULL AUTO_INCREMENT primary key,
companyName varchar(30) not null,
companySize int ,
industry varchar(50) not null
);




create table Job(
userId int,
FOREIGN KEY (userId) REFERENCES users(userid),
jobTitle varchar(30),
startDate varchar(20),
endDate varchar(20),
designation varchar(30),
self_employeed varchar(2),
CompanyId int,
FOREIGN KEY (CompanyId) REFERENCES company(CompanyId),
industry varchar (20)
);



create table Institution(
institutionId int not null auto_increment primary key,
name varchar (20),
description varchar(100)
);




create table education(
userId int primary key,
program varchar(30) not null,
startDate varchar(20) not null,
endDate varchar(20) not null,
institutionId int,
FOREIGN KEY (institutionId) REFERENCES institution(institutionId),
FOREIGN KEY (userId) REFERENCES users(userid)
);




--
-- Table structure for table `users`
--


INSERT INTO `users` (`userid`, `fname`, `lname`, `username`, `password`) VALUES
(2, 'admin', 'admin', 'admin', 'admin'),
(3, 'shani', 'jahania', 'shani', 'shani');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
