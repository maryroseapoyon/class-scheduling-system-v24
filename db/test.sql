/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.6.12-log : Database - thesis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`thesis` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `thesis`;

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `CourseID` int(10) NOT NULL AUTO_INCREMENT,
  `CourseCode` varchar(10) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `CourseMajor` tinytext NOT NULL,
  `CourseType` char(15) NOT NULL,
  `CourseCompletion` tinytext NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`CourseID`,`CourseCode`,`CourseName`,`CourseMajor`,`CourseType`,`CourseCompletion`,`DepartmentCode`) values (1,'BSCS','BACHELOR OF SCIENCE OF COMPUTER SCIENCE','1','BACCALAUREATE','1','MATH'),(3,'BSIS','BACHELOR OF SCIENCE INFORMATION TECHNOLOGY','1','BACCALAUREATE','1','MATH'),(2,'BSIT','BACHELOR OF SCIENCE INFORMATION SYSTEMS','1','BACCALAUREATE','1','MATH');

/*Table structure for table `curriculum` */

DROP TABLE IF EXISTS `curriculum`;

CREATE TABLE `curriculum` (
  `CurriculumID` int(10) NOT NULL AUTO_INCREMENT,
  `SchoolYear` varchar(50) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `CourseCode` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Prerequisite1` varchar(50) NOT NULL,
  `Prerequisite2` varchar(50) NOT NULL,
  `Prerequisite3` varchar(50) NOT NULL,
  PRIMARY KEY (`CurriculumID`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Data for the table `curriculum` */

insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (1,'2015-2016','CHEM 11','BSCS','1st Semester','1st Year','','',''),(2,'2015-2016','CHEM 11L','BSCS','1st Semester','1st Year','','',''),(3,'2015-2016','CS 101','BSCS','1st Semester','1st Year','','',''),(4,'2015-2016','CS 111','BSCS','1st Semester','1st Year','','',''),(5,'2015-2016','CS 111L','BSCS','1st Semester','1st Year','','',''),(6,'2015-2016','ENG 1','BSCS','1st Semester','1st Year','','',''),(7,'2015-2016','MATH 1','BSCS','1st Semester','1st Year','','',''),(8,'2015-2016','MATH 2A','BSCS','1st Semester','1st Year','','',''),(9,'2015-2016','NSTP 1','BSCS','1st Semester','1st Year','','',''),(10,'2015-2016','PE 1','BSCS','1st Semester','1st Year','','',''),(11,'2015-2016','CS 122','BSCS','2nd Semester','1st Year','CS 101','CS 111','CS 111L'),(12,'2015-2016','CS 122L','BSCS','2nd Semester','1st Year','CS 101','CS 111','CS 111L'),(13,'2015-2016','CS 123','BSCS','2nd Semester','1st Year','MATH 1','',''),(14,'2015-2016','ENG 2','BSCS','2nd Semester','1st Year','ENG 1','',''),(15,'2015-2016','FIL 1','BSCS','2nd Semester','1st Year','','',''),(16,'2015-2016','MATH 5A','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A',''),(17,'2015-2016','NSTP 2','BSCS','2nd Semester','1st Year','NSTP 1','',''),(18,'2015-2016','PE 2','BSCS','2nd Semester','1st Year','PE 1','',''),(19,'2015-2016','PHYS 1A','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A',''),(20,'2015-2016','PHYS 1AL','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A',''),(21,'2016-2017','CS 211','BSCS','1st Semester','2nd Year','CS 122','CS 122L',''),(22,'2016-2017','CS 211L','BSCS','1st Semester','2nd Year','CS 122','CS 122L',''),(23,'2016-2017','CS 212','BSCS','1st Semester','2nd Year','CS 122','CS 122L',''),(24,'2016-2017','CS 212L','BSCS','1st Semester','2nd Year','CS 122','CS 122L',''),(25,'2016-2017','CS 213','BSCS','1st Semester','2nd Year','CS 123','',''),(26,'2016-2017','ENG 3','BSCS','1st Semester','2nd Year','ENG 1','',''),(27,'2016-2017','MATH 6','BSCS','1st Semester','2nd Year','MATH 5A','',''),(28,'2016-2017','PE 3','BSCS','1st Semester','2nd Year','PE 1','',''),(29,'2016-2017','PHYS 2B','BSCS','1st Semester','2nd Year','PHYS1A','',''),(30,'2016-2017','PHYS 2BL','BSCS','1st Semester','2nd Year','PHYS1A','',''),(31,'2016-2017','SS 1','BSCS','1st Semester','2nd Year','','',''),(32,'2016-2017','CS 221','BSCS','2nd Semester','2nd Year','CS 211','CS 211L',''),(33,'2016-2017','CS 222','BSCS','2nd Semester','2nd Year','CS 123','',''),(34,'2016-2017','CS 222L','BSCS','2nd Semester','2nd Year','CS 123','',''),(35,'2016-2017','CS 223','BSCS','2nd Semester','2nd Year','CS 212','CS 212L',''),(36,'2016-2017','CS 223L','BSCS','2nd Semester','2nd Year','CS 212','CS 212L',''),(37,'2016-2017','FIL 2','BSCS','2nd Semester','2nd Year','FIL 1','',''),(38,'2016-2017','HUM 1','BSCS','2nd Semester','2nd Year','','',''),(39,'2016-2017','MATH 8','BSCS','2nd Semester','2nd Year','MATH 1','',''),(40,'2016-2017','PE 4','BSCS','2nd Semester','2nd Year','PE 1','',''),(41,'2017-2018','CS 311','BSCS','1st Semester','3rd Year','CS 211','CS 212',''),(42,'2017-2018','CS 311L','BSCS','1st Semester','3rd Year','CS 211','CS 212',''),(43,'2017-2018','CS 312','BSCS','1st Semester','3rd Year','CS 222','CS 222L',''),(44,'2017-2018','CS 312L','BSCS','1st Semester','3rd Year','CS 222','CS 222L',''),(45,'2017-2018','CS 313','BSCS','1st Semester','3rd Year','CS 223','CS 223L',''),(46,'2017-2018','CS 314','BSCS','1st Semester','3rd Year','MATH 8','',''),(47,'2017-2018','CSE 1','BSCS','1st Semester','3rd Year','CS 221','',''),(48,'2017-2018','CSF 1','BSCS','1st Semester','3rd Year','MATH 6','',''),(49,'2017-2018','HUM 2','BSCS','1st Semester','3rd Year','','',''),(50,'2017-2018','SS 2','BSCS','1st Semester','3rd Year','','',''),(51,'','','','2nd Semester','3rd Year','','',''),(52,'','','','2nd Semester','3rd Year','','',''),(53,'','','','2nd Semester','3rd Year','','',''),(54,'','','','2nd Semester','3rd Year','','',''),(55,'','','','2nd Semester','3rd Year','','',''),(56,'','','','2nd Semester','3rd Year','','',''),(57,'','','','2nd Semester','3rd Year','','',''),(58,'','','','2nd Semester','3rd Year','','',''),(59,'','','','2nd Semester','3rd Year','','',''),(60,'','','','2nd Semester','3rd Year','','','');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `DepartmentID` int(10) NOT NULL AUTO_INCREMENT,
  `CollegeID` char(10) DEFAULT 'COS',
  `DepartmentName` char(40) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`DepartmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`DepartmentID`,`CollegeID`,`DepartmentName`,`DepartmentCode`,`Status`) values (1,'COS','MATH','MATH','A'),(2,'COS','PHYSICS','PHYS','A'),(3,'COS','CHEMISTRY','CHEM','A'),(4,'COS','TACTICAL','TAC','D'),(15,'COS','NAME','CODE','D');

/*Table structure for table `faculty` */

DROP TABLE IF EXISTS `faculty`;

CREATE TABLE `faculty` (
  `ProfID` int(10) NOT NULL AUTO_INCREMENT,
  `Firstname` char(50) DEFAULT NULL,
  `Middlename` char(50) DEFAULT NULL,
  `Lastname` char(50) DEFAULT NULL,
  `PositionCode` varchar(20) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `DepartmentCode` varchar(10) DEFAULT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`ProfID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `faculty` */

insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (1,'EDGARDO','PIO','DELA CRUZ','3','(+63)921 581 7290','MATH','A'),(2,'JOHN','DOE','CRUZ','4','(+63)999 012 3571','MATH','A'),(3,'ALBERT','GIN','CASTAN','1','(+63)907 277 0813','MATH','A'),(4,'ADRIAN','CILIA','DELOS REYES','5','(+63)927 571 0253','MATH','A'),(5,'RUDY','GINO','FERNANDEZ','7','(+63)991 252 1721','MATH','A'),(6,'EMPI','LIGHTS','DIZON','2','(+63)921 310 1213','CHEM','A'),(7,'MONICA','LAWLIET','ABANICO','12','(+63)990 281 7953','PHYS','A');

/*Table structure for table `policy` */

DROP TABLE IF EXISTS `policy`;

CREATE TABLE `policy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policyName` text NOT NULL,
  `policyValue` text NOT NULL,
  `policyTitle` text NOT NULL,
  `policyDescription` text NOT NULL,
  `policyDefaultValue` text NOT NULL,
  `policyDataType` text NOT NULL,
  `policyGroup` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `policy` */

insert  into `policy`(`id`,`policyName`,`policyValue`,`policyTitle`,`policyDescription`,`policyDefaultValue`,`policyDataType`,`policyGroup`) values (1,'submissionDueDate','2014-03-28','Submission Deadline','When is the scheduling report submission due date?','2014-01-31','Date','General'),(4,'pootPure','25','Pure Teaching / Quasi Teaching','','25','HoursPerWeek','Official Time'),(5,'pootAdmin','40','Administrative','Faculty designated as Deans, Directors, Department head, University secretary and other administrative functions','40','HoursPerWeek','Official Time'),(6,'pootRsrchExt','40','Research and Extension','Faculty with research and extension functions','40','HoursPerWeek','Official Time'),(7,'pootMixed','32.5','Mixed Functions','College Secretary and Faculty with mixed functions (Half teaching and Half admin / research / extension)','32.5','HoursPerWeek','Official Time'),(8,'pootLeave','40','Leave','Faculty on vacation / sick leave','40','HoursPerWeek','Official Time'),(9,'fteLecSci','18','Undergraduate Lecture / Science ','','18','HoursPerWeek','Full-Time Equivalent'),(10,'fteLabShop','24','Undergraduate Tech lab/Shop work','','24','HoursPerWeek','Full-Time Equivalent'),(11,'fteMixed','21','Undergraduate mixed load','','21','HoursPerWeek','Full-Time Equivalent'),(12,'fcltyPos','PART-TIMER,INSTRUCTOR 1,INSTRUCTOR 2,INSTRUCTOR 3,ASSISTANT PROFESSOR 1,ASSISTANT PROFESSOR 2,ASSISTANT PROFESSOR 3,ASSISTANT PROFESSOR 4,ASSOCIATE PROFESSOR 1,ASSOCIATE PROFESSOR 2,ASSOCIATE PROFESSOR 3,ASSOCIATE PROFESSOR 4,ASSOCIATE PROFESSOR 5,PROFESSOR 1,PROFESSOR 2,PROFESSOR 3,PROFESSOR 4,PROFESSOR 5,PROFESSOR 6,PROFESSOR 7','Faculty Positions','','Part-Timer,Instructor 1,Instructor 2,Instructor 3,Assistant Professor 1, Assistant Professor 2,Assistant Professor 3,Assistant Professor 4,Associate Professor 1,Associate Professor 2,Associate Professor 3,Associate Professor 4,Associate Professor 5,Professor 1,Professor 2,Professor 3,Professor 4,Professor 5,Professor 6','RankedList','General'),(14,'rtlDean','3','Dean','','3','HoursPerWeek','FTE for Administratives'),(15,'rtlDir','3','Director','','3','HoursPerWeek','FTE for Administratives'),(16,'rtlHead','6','Department Head','','6','HoursPerWeek','FTE for Administratives'),(17,'rtlSec','6','College Secretary','','6','HoursPerWeek','FTE for Administratives'),(18,'rtlReEx','6','Research and Extension','','6','HoursPerWeek','FTE for Administratives'),(19,'rtlOther','9','Others','Other academic related assignment like Library, Admission, Registrar and Guidance','9','HoursPerWeek','FTE for Administratives'),(20,'semester','1st Semester','Semester','','1st Semester','dropDown','General'),(21,'timeShiftMorning','8','Morning Time Shift','','5','slide','General'),(22,'timeShiftAfternoon','4','Afternoon Time Shift','','6','slide','General');

/*Table structure for table `position` */

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `PositionID` int(10) NOT NULL AUTO_INCREMENT,
  `PositionCode` int(5) DEFAULT NULL,
  `PositionName` varchar(50) DEFAULT NULL,
  `PositionDesc` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`PositionID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `position` */

insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (2,1,'DEPARTMENT HEAD','1st'),(3,2,'PROFESSOR 1','2nd'),(4,3,'PROFESSOR 2','3rd'),(5,4,'PROFESSOR 3','4th'),(6,5,'PROFESSOR 4','5th'),(7,6,'PROFESSOR 5','6th'),(8,7,'PROFESSOR 6','7th'),(9,8,'PROFESSOR 7','8th'),(10,9,'INSTRUCTOR 1','9th'),(11,10,'INSTRUCTOR 2','10th'),(12,11,'INSTRUCTOR 3','11th'),(13,12,'ASSISTANT PROFESSOR 1','12th'),(14,13,'ASSISTANT PROFESSOR 2','13th');

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `RoomID` int(10) NOT NULL AUTO_INCREMENT,
  `RoomNo` int(10) NOT NULL,
  `RoomStatus` char(15) NOT NULL DEFAULT 'Physical',
  `RoomType` char(10) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `room` */

insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values (1,301,'Physical','Lecture','MATH'),(2,302,'Physical','Lecture','MATH'),(3,303,'Physical','Lecture','MATH'),(4,304,'Physical','Lecture','MATH'),(5,311,'Physical','Laboratory','MATH'),(6,313,'Dummy','Laboratory','MATH');

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `SchedID` int(10) NOT NULL AUTO_INCREMENT,
  `SchedName` varchar(50) NOT NULL,
  `SchedTime` time NOT NULL,
  `SchedEnd` time DEFAULT NULL,
  `SchedDays` varchar(50) NOT NULL,
  `SchedRoom` varchar(50) NOT NULL,
  `SchedProf` varchar(50) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `SubjectType` varchar(50) NOT NULL,
  `SubjectHours` int(5) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  PRIMARY KEY (`SchedID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`SchedID`,`SchedName`,`SchedTime`,`SchedEnd`,`SchedDays`,`SchedRoom`,`SchedProf`,`SubjectCode`,`SubjectName`,`SubjectType`,`SubjectHours`,`DepartmentCode`) values (1,'Sched1','08:00:00','10:00:00','tuesday','1','1','CS 101','Computer Fundamentals','Lecture',2,'MATH');

/*Table structure for table `section` */

DROP TABLE IF EXISTS `section`;

CREATE TABLE `section` (
  `SectionID` int(10) NOT NULL AUTO_INCREMENT,
  `SectionYearLvl` varchar(50) DEFAULT NULL,
  `SectionCode` varchar(10) DEFAULT NULL,
  `SectionSchoolYr` varchar(50) DEFAULT NULL,
  `SectionSemester` varchar(50) DEFAULT NULL,
  `CourseCode` varchar(10) DEFAULT NULL,
  `DepartmentCode` varchar(10) DEFAULT NULL,
  `Timeshift` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`SectionID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `section` */

insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (1,'1st Year','A','2015-2016','1st Semester','BSCS','MATH','Morning'),(2,'1st Year','B','2015-2016','1st Semester','BSCS','MATH','Afternoon'),(3,'1st Year','A','2015-2016','1st Semester','BSIT','MATH','Morning'),(4,'1st Year','B','2015-2016','1st Semester','BSIT','MATH','Afternoon'),(5,'1st Year','C','2015-2016','1st Semester','BSIT','MATH','Morning'),(6,'1st Year','D','2015-2016','1st Semester','BSIT','MATH','Afternoon'),(7,'1st Year','A','2015-2016','1st Semester','BSIS','MATH','Morning'),(8,'1st Year','B','2015-2016','1st Semester','BSIS','MATH','Afternoon'),(9,'1st Year','C','2015-2016','1st Semester','BSIS','MATH','Morning'),(10,'1st Year','D','2015-2016','1st Semester','BSIS','MATH','Afternoon'),(11,'1st Year','A','2015-2016','2nd Semester','BSCS','MATH','Morning'),(12,'1st Year','B','2015-2016','2nd Semester','BSCS','MATH','Afternoon'),(13,'1st Year','A','2015-2016','2nd Semester','BSIT','MATH','Morning'),(14,'1st Year','B','2015-2016','2nd Semester','BSIT','MATH','Afternoon'),(15,'1st Year','C','2015-2016','2nd Semester','BSIT','MATH','Morning'),(16,'1st Year','D','2015-2016','2nd Semester','BSIT','MATH','Afternoon'),(17,'1st Year','A','2015-2016','2nd Semester','BSIS','MATH','Morning'),(18,'1st Year','B','2015-2016','2nd Semester','BSIS','MATH','Afternoon'),(19,'1st Year','C','2015-2016','2nd Semester','BSIS','MATH','Morning'),(20,'1st Year','D','2015-2016','2nd Semester','BSIS','MATH','Afternoon'),(21,'2nd Year','A','2016-2017','1st Semester','BSCS','MATH','Morning'),(22,'2nd Year','B','2016-2017','1st Semester','BSCS','MATH','Afternoon'),(23,'2nd Year','A','2016-2017','1st Semester','BSIT','MATH','Morning'),(24,'2nd Year','B','2016-2017','1st Semester','BSIT','MATH','Afternoon'),(25,'2nd Year','C','2016-2017','1st Semester','BSIT','MATH','Morning'),(26,'2nd Year','D','2016-2017','1st Semester','BSIT','MATH','Afternoon'),(27,'2nd Year','A','2016-2017','1st Semester','BSIS','MATH','Morning'),(28,'2nd Year','B','2016-2017','1st Semester','BSIS','MATH','Afternoon'),(29,'2nd Year','C','2016-2017','1st Semester','BSIS','MATH','Morning'),(30,'2nd Year','D','2016-2017','1st Semester','BSIS','MATH','Afternoon'),(31,'2nd Year','A','2016-2017','2nd Semester','BSCS','MATH','Morning'),(32,'2nd Year','B','2016-2017','2nd Semester','BSCS','MATH','Afternoon'),(33,'2nd Year','A','2016-2017','2nd Semester','BSIT','MATH','Morning'),(34,'2nd Year','B','2016-2017','2nd Semester','BSIT','MATH','Afternoon'),(35,'2nd Year','C','2016-2017','2nd Semester','BSIT','MATH','Morning'),(36,'2nd Year','D','2016-2017','2nd Semester','BSIT','MATH','Afternoon'),(37,'2nd Year','A','2016-2017','2nd Semester','BSIS','MATH','Morning'),(38,'2nd Year','B','2016-2017','2nd Semester','BSIS','MATH','Afternoon'),(39,'2nd Year','C','2016-2017','2nd Semester','BSIS','MATH','Morning'),(40,'2nd Year','D','2016-2017','2nd Semester','BSIS','MATH','Afternoon');

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `SubjectID` int(10) NOT NULL AUTO_INCREMENT,
  `SubjectCode` varchar(10) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `LecHours` int(15) DEFAULT '0',
  `LecUnits` int(15) DEFAULT '0',
  `LabHours` int(15) DEFAULT '0',
  `LabUnits` int(15) DEFAULT '0',
  `SubjectDeptCode` varchar(10) NOT NULL,
  `SubjectType` varchar(20) NOT NULL,
  `SubjectDay` varchar(20) NOT NULL DEFAULT 'monday to saturday',
  `Status` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`SubjectID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (1,'CHEM 11','General Chemestry Lecture',3,3,4,3,'CHEM','Lecture','','A'),(2,'CHEM 11L','General Chemestry Laboratory',0,0,3,3,'CHEM','Laboratory','','A'),(3,'CS 101','Computer Fundamentals',3,3,0,0,'MATH','Lecture','','A'),(4,'CS 111','Computer Programming 1 Lecture',2,3,0,0,'MATH','Lecture','','A'),(5,'CS 111L','Computer Programming 1 Laboratory',0,0,3,3,'MATH','Laboratory','','A'),(6,'MATH 1','College Algebra',0,3,0,0,'MATH','Lecture','','A'),(7,'MATH 2A','Plane and Spherical Trigonometry',0,3,0,0,'MATH','Lecture','','A'),(8,'CS 122','Computer Programming 2 Lecture',2,3,0,3,'MATH','Lecture','','A'),(9,'CS 122L','Computer Programming 2 Laboratory',0,0,3,3,'MATH','Lecture','','A'),(10,'CS 123','Discrete Structures',3,3,0,0,'MATH','Lecture','','A'),(11,'MATH 5A','Differential Calculus and Anal Geometry',0,5,0,0,'MATH','Lecture','','A'),(12,'PHYS 1A','Mechanics Lecture',0,3,0,0,'PHYS','Lecture','','A'),(13,'PHYS 1AL','Mechanics Laboratory',0,0,0,1,'PHYS','Laboratory','','A'),(14,'CS 211','Data Structures Lecture',2,3,0,0,'MATH','Lecture','','A'),(15,'CS 211L','Data Structures Laboratory',0,0,3,3,'MATH','Laboratory','','A'),(16,'CS 212','Object Oriented Programming Lecture',2,3,0,0,'MATH','Lecture','','A'),(17,'CS 212L','Object Oriented Programming Laboratory',0,0,3,3,'MATH','Laboratory','','A'),(18,'CS 213','Combinatorics and Graph Theory',3,3,0,0,'MATH','Lecture','','A'),(19,'MATH 6','Integral Calculus',3,4,0,0,'MATH','Lecture','','A'),(20,'PHYS 2B','Electricity and Magnetism Lecture',12,3,0,0,'PHYS','Lecture','','A'),(21,'PHYS 2BL','Electricity and Magnetism Laboratory',0,0,3,1,'PHYS','Laboratory','','A'),(22,'CS 221','Design and Analysis of Algorithm',3,3,0,0,'MATH','Lecture','','A'),(23,'CS 222','Digital Design',0,3,0,0,'MATH','Lecture','','A'),(24,'CS 222L','Digital Design Laboratory',0,0,3,1,'MATH','Laboratory','','A'),(25,'CS 223','Programming Languages Lecture',0,2,0,0,'MATH','Lecture','','A'),(26,'CS 223L','Programming Languages Laboratory',0,0,3,1,'MATH','Laboratory','','A'),(27,'MATH 8','Probability and Statistics',3,3,0,0,'MATH','Lecture','','A'),(28,'CS 311','Database Systems Lecture',0,3,0,0,'MATH','Lecture','','A'),(29,'CS 311L','Database Systems Laboratory',0,0,3,1,'MATH','Laboratory','','A'),(30,'CS 312','Computer Organization Lecture',0,2,0,0,'MATH','Lecture','','A'),(31,'CS 312L','Computer Organization Laboratory',0,0,3,1,'MATH','Laboratory','','A'),(32,'CS 313','Automata and Language Theory',3,3,0,0,'MATH','Lecture','','A'),(33,'CS 314','Research Methods',3,3,0,0,'MATH','Lecture','','A'),(34,'CSE 1','CS Elective 1',3,3,0,0,'MATH','Lecture','','A'),(35,'CSF 1','Free Elective 1',3,3,0,0,'MATH','Lecture','','A');

/*Table structure for table `subject_list` */

DROP TABLE IF EXISTS `subject_list`;

CREATE TABLE `subject_list` (
  `SubjectLID` int(10) NOT NULL AUTO_INCREMENT,
  `ProfID` int(10) DEFAULT NULL,
  `SubjectCode` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`SubjectLID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `subject_list` */

insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (3,2,'MATH 1'),(4,3,'MATH 2A'),(5,4,'CS 122'),(6,5,'CS 122L'),(33,2,'CS 111'),(34,1,'CS 101'),(35,1,'CS 111'),(36,1,'MATH 1');

/*Table structure for table `time_list` */

DROP TABLE IF EXISTS `time_list`;

CREATE TABLE `time_list` (
  `TimeLID` int(10) NOT NULL AUTO_INCREMENT,
  `ProfID` int(10) DEFAULT NULL,
  `Days` char(10) DEFAULT NULL,
  `Shift` char(10) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  PRIMARY KEY (`TimeLID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `time_list` */

insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`Time`) values (20,1,'Monday','Morning','07:00:00'),(21,1,'Monday','Morning','08:00:00'),(22,1,'Monday','Morning','09:00:00'),(23,1,'Tuesday','Afternoon','13:00:00'),(24,1,'Tuesday','Afternoon','14:00:00'),(25,2,'Monday','Morning','10:00:00'),(26,2,'Monday','Morning','11:00:00'),(27,2,'Monday','Morning','12:00:00'),(28,3,'Thursday','Afternoon','13:00:00'),(29,3,'Thursday','Afternoon','14:00:00'),(30,3,'Thursday','Afternoon','15:00:00');

/*Table structure for table `timee` */

DROP TABLE IF EXISTS `timee`;

CREATE TABLE `timee` (
  `TimeID` int(10) NOT NULL AUTO_INCREMENT,
  `Day` char(10) DEFAULT NULL,
  `Shift` char(10) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  PRIMARY KEY (`TimeID`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

/*Data for the table `timee` */

insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (7,'Monday','Morning','07:00:00'),(8,'Monday','Morning','08:00:00'),(9,'Monday','Morning','09:00:00'),(10,'Monday','Morning','10:00:00'),(11,'Monday','Morning','11:00:00'),(12,'Monday','Morning','12:00:00'),(13,'Monday','Afternoon','13:00:00'),(14,'Monday','Afternoon','14:00:00'),(15,'Monday','Afternoon','15:00:00'),(16,'Monday','Afternoon','16:00:00'),(17,'Monday','Afternoon','17:00:00'),(18,'Monday','Afternoon','18:00:00'),(19,'Monday','Afternoon','19:00:00'),(31,'Tuesday','Morning','07:00:00'),(32,'Tuesday','Morning','08:00:00'),(33,'Tuesday','Morning','09:00:00'),(34,'Tuesday','Morning','10:00:00'),(35,'Tuesday','Morning','11:00:00'),(36,'Tuesday','Morning','12:00:00'),(37,'Tuesday','Afternoon','13:00:00'),(38,'Tuesday','Afternoon','14:00:00'),(39,'Tuesday','Afternoon','15:00:00'),(40,'Tuesday','Afternoon','16:00:00'),(41,'Tuesday','Afternoon','17:00:00'),(42,'Tuesday','Afternoon','18:00:00'),(43,'Tuesday','Afternoon','19:00:00'),(55,'Wednesday','Morning','07:00:00'),(56,'Wednesday','Morning','08:00:00'),(57,'Wednesday','Morning','09:00:00'),(58,'Wednesday','Morning','10:00:00'),(59,'Wednesday','Morning','11:00:00'),(60,'Wednesday','Morning','12:00:00'),(61,'Wednesday','Afternoon','13:00:00'),(62,'Wednesday','Afternoon','14:00:00'),(63,'Wednesday','Afternoon','15:00:00'),(64,'Wednesday','Afternoon','16:00:00'),(65,'Wednesday','Afternoon','17:00:00'),(66,'Wednesday','Afternoon','18:00:00'),(67,'Wednesday','Afternoon','19:00:00'),(79,'Thursday','Morning','07:00:00'),(80,'Thursday','Morning','08:00:00'),(81,'Thursday','Morning','09:00:00'),(82,'Thursday','Morning','10:00:00'),(83,'Thursday','Morning','11:00:00'),(84,'Thursday','Morning','12:00:00'),(85,'Thursday','Afternoon','13:00:00'),(86,'Thursday','Afternoon','14:00:00'),(87,'Thursday','Afternoon','15:00:00'),(88,'Thursday','Afternoon','16:00:00'),(89,'Thursday','Afternoon','17:00:00'),(90,'Thursday','Afternoon','18:00:00'),(91,'Thursday','Afternoon','19:00:00'),(103,'Friday','Morning','07:00:00'),(104,'Friday','Morning','08:00:00'),(105,'Friday','Morning','09:00:00'),(106,'Friday','Morning','10:00:00'),(107,'Friday','Morning','11:00:00'),(108,'Friday','Morning','12:00:00'),(109,'Friday','Afternoon','13:00:00'),(110,'Friday','Afternoon','14:00:00'),(111,'Friday','Afternoon','15:00:00'),(112,'Friday','Afternoon','16:00:00'),(113,'Friday','Afternoon','17:00:00'),(114,'Friday','Afternoon','18:00:00'),(115,'Friday','Afternoon','19:00:00'),(127,'Saturday','Morning','07:00:00'),(128,'Saturday','Morning','08:00:00'),(129,'Saturday','Morning','09:00:00'),(130,'Saturday','Morning','10:00:00'),(131,'Saturday','Morning','11:00:00'),(132,'Saturday','Morning','12:00:00'),(133,'Saturday','Afternoon','13:00:00'),(134,'Saturday','Afternoon','14:00:00'),(135,'Saturday','Afternoon','15:00:00'),(136,'Saturday','Afternoon','16:00:00'),(137,'Saturday','Afternoon','17:00:00'),(138,'Saturday','Afternoon','18:00:00'),(139,'Saturday','Afternoon','19:00:00');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL,
  `password` char(15) NOT NULL,
  `usertype` char(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`password`,`usertype`) values (1,'admin','admin101','admin'),(2,'user','user101','faculty');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
