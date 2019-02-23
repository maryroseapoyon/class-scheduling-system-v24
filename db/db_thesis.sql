/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 5.7.23 : Database - thesis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`thesis` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `thesis`;

/*Table structure for table `colleges` */

DROP TABLE IF EXISTS `colleges`;

CREATE TABLE `colleges` (
  `CollegeID` int(10) NOT NULL AUTO_INCREMENT,
  `CollegeName` char(50) DEFAULT NULL,
  `CollegeCode` char(50) DEFAULT NULL,
  `CollegeDean` char(50) DEFAULT NULL,
  PRIMARY KEY (`CollegeID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `colleges` */

insert  into `colleges`(`CollegeID`,`CollegeName`,`CollegeCode`,`CollegeDean`) values 
(1,'College of Science','COS',NULL);

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

insert  into `course`(`CourseID`,`CourseCode`,`CourseName`,`CourseMajor`,`CourseType`,`CourseCompletion`,`DepartmentCode`) values 
(1,'BSCS','BACHELOR OF SCIENCE OF COMPUTER SCIENCE','1','BACCALAUREATE','1','MATH'),
(3,'BSIS','BACHELOR OF SCIENCE INFORMATION TECHNOLOGY','1','BACCALAUREATE','1','MATH'),
(2,'BSIT','BACHELOR OF SCIENCE INFORMATION SYSTEMS','1','BACCALAUREATE','1','MATH');

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

insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values 
(1,'2015-2016','CHEM 11','BSCS','1st Semester','1st Year','','',''),
(2,'2015-2016','CHEM 11L','BSCS','1st Semester','1st Year','','',''),
(3,'2015-2016','CS 101','BSCS','1st Semester','1st Year','','',''),
(4,'2015-2016','CS 111','BSCS','1st Semester','1st Year','','',''),
(5,'2015-2016','CS 111L','BSCS','1st Semester','1st Year','','',''),
(6,'2015-2016','ENG 1','BSCS','1st Semester','1st Year','','',''),
(7,'2015-2016','MATH 1','BSCS','1st Semester','1st Year','','',''),
(8,'2015-2016','MATH 2A','BSCS','1st Semester','1st Year','','',''),
(9,'2015-2016','NSTP 1','BSCS','1st Semester','1st Year','','',''),
(10,'2015-2016','PE 1','BSCS','1st Semester','1st Year','','',''),
(11,'2015-2016','CS 122','BSCS','2nd Semester','1st Year','CS 101','CS 111','CS 111L'),
(12,'2015-2016','CS 122L','BSCS','2nd Semester','1st Year','CS 101','CS 111','CS 111L'),
(13,'2015-2016','CS 123','BSCS','2nd Semester','1st Year','MATH 1','',''),
(14,'2015-2016','ENG 2','BSCS','2nd Semester','1st Year','ENG 1','',''),
(15,'2015-2016','FIL 1','BSCS','2nd Semester','1st Year','','',''),
(16,'2015-2016','MATH 5A','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A',''),
(17,'2015-2016','NSTP 2','BSCS','2nd Semester','1st Year','NSTP 1','',''),
(18,'2015-2016','PE 2','BSCS','2nd Semester','1st Year','PE 1','',''),
(19,'2015-2016','PHYS 1A','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A',''),
(20,'2015-2016','PHYS 1AL','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A',''),
(21,'2016-2017','CS 211','BSCS','1st Semester','2nd Year','CS 122','CS 122L',''),
(22,'2016-2017','CS 211L','BSCS','1st Semester','2nd Year','CS 122','CS 122L',''),
(23,'2016-2017','CS 212','BSCS','1st Semester','2nd Year','CS 122','CS 122L',''),
(24,'2016-2017','CS 212L','BSCS','1st Semester','2nd Year','CS 122','CS 122L',''),
(25,'2016-2017','CS 213','BSCS','1st Semester','2nd Year','CS 123','',''),
(26,'2016-2017','ENG 3','BSCS','1st Semester','2nd Year','ENG 1','',''),
(27,'2016-2017','MATH 6','BSCS','1st Semester','2nd Year','MATH 5A','',''),
(28,'2016-2017','PE 3','BSCS','1st Semester','2nd Year','PE 1','',''),
(29,'2016-2017','PHYS 2B','BSCS','1st Semester','2nd Year','PHYS1A','',''),
(30,'2016-2017','PHYS 2BL','BSCS','1st Semester','2nd Year','PHYS1A','',''),
(31,'2016-2017','SS 1','BSCS','1st Semester','2nd Year','','',''),
(32,'2016-2017','CS 221','BSCS','2nd Semester','2nd Year','CS 211','CS 211L',''),
(33,'2016-2017','CS 222','BSCS','2nd Semester','2nd Year','CS 123','',''),
(34,'2016-2017','CS 222L','BSCS','2nd Semester','2nd Year','CS 123','',''),
(35,'2016-2017','CS 223','BSCS','2nd Semester','2nd Year','CS 212','CS 212L',''),
(36,'2016-2017','CS 223L','BSCS','2nd Semester','2nd Year','CS 212','CS 212L',''),
(37,'2016-2017','FIL 2','BSCS','2nd Semester','2nd Year','FIL 1','',''),
(38,'2016-2017','HUM 1','BSCS','2nd Semester','2nd Year','','',''),
(39,'2016-2017','MATH 8','BSCS','2nd Semester','2nd Year','MATH 1','',''),
(40,'2016-2017','PE 4','BSCS','2nd Semester','2nd Year','PE 1','',''),
(41,'2017-2018','CS 311','BSCS','1st Semester','3rd Year','CS 211','CS 212',''),
(42,'2017-2018','CS 311L','BSCS','1st Semester','3rd Year','CS 211','CS 212',''),
(43,'2017-2018','CS 312','BSCS','1st Semester','3rd Year','CS 222','CS 222L',''),
(44,'2017-2018','CS 312L','BSCS','1st Semester','3rd Year','CS 222','CS 222L',''),
(45,'2017-2018','CS 313','BSCS','1st Semester','3rd Year','CS 223','CS 223L',''),
(46,'2017-2018','CS 314','BSCS','1st Semester','3rd Year','MATH 8','',''),
(47,'2017-2018','CSE 1','BSCS','1st Semester','3rd Year','CS 221','',''),
(48,'2017-2018','CSF 1','BSCS','1st Semester','3rd Year','MATH 6','',''),
(49,'2017-2018','HUM 2','BSCS','1st Semester','3rd Year','','',''),
(50,'2017-2018','SS 2','BSCS','1st Semester','3rd Year','','',''),
(51,'','','','2nd Semester','3rd Year','','',''),
(52,'','','','2nd Semester','3rd Year','','',''),
(53,'','','','2nd Semester','3rd Year','','',''),
(54,'','','','2nd Semester','3rd Year','','',''),
(55,'','','','2nd Semester','3rd Year','','',''),
(56,'','','','2nd Semester','3rd Year','','',''),
(57,'','','','2nd Semester','3rd Year','','',''),
(58,'','','','2nd Semester','3rd Year','','',''),
(59,'','','','2nd Semester','3rd Year','','',''),
(60,'','','','2nd Semester','3rd Year','','','');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `DepartmentID` int(10) NOT NULL AUTO_INCREMENT,
  `CollegeID` char(10) DEFAULT 'COS',
  `DepartmentName` char(40) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`DepartmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`DepartmentID`,`CollegeID`,`DepartmentName`,`DepartmentCode`,`Status`) values 
(1,'COS','Math','MATH','A'),
(2,'COS','Physics','PHYS','A'),
(3,'COS','Chemistry','CHEM','A');

/*Table structure for table `faculty` */

DROP TABLE IF EXISTS `faculty`;

CREATE TABLE `faculty` (
  `ProfID` int(10) NOT NULL AUTO_INCREMENT,
  `Firstname` char(15) NOT NULL,
  `Middlename` char(15) NOT NULL,
  `Lastname` char(15) NOT NULL,
  `PositionCode` int(5) DEFAULT NULL,
  `Contact` varchar(20) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `PreferredTime` text NOT NULL,
  `PreferredSubject` text NOT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`ProfID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `faculty` */

insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`PreferredTime`,`PreferredSubject`,`Status`) values 
(1,'Mary Roses','CotingjoX','Apoyonz',1,'(+63)909-121-2121','MATH','01:00:00','1','D'),
(2,'Marose','Contingoz','Flameon',1,'(+12)311-111-1111','MATH','00:00:00','','A'),
(3,'Mary Rose','Cotingjoy','Apoyonx',2,'(+12)311-111-1111','MATH','00:00:00','','A'),
(4,'Mareese','Contingo','Apoyony',3,'(+45)613-980-7776','MATH','00:00:00','','A'),
(5,'Mary Rose','Contingjo','Apoyon',4,'(+12)311-111-1111','MATH','00:00:00','','A'),
(6,'Maureese','Contingoc','Apoyonc',4,'(+78)945-658-3464','MATH','00:00:00','','A'),
(7,'Rosemary','Contingov','Apoyonv',3,'(+12)311-111-1111','MATH','00:00:00','','A'),
(8,'Fname','Mname','Lname',4,'(+23)451-212-1212','MATH','00:00:00','','A'),
(9,'Chae','Yeon','Lee',4,'(+78)945-658-3464','MATH','00:00:00','','A'),
(10,'Jesus','Mary','Joseph',3,'(+78)945-658-3464','MATH','00:00:00','','A'),
(11,'Won','Young','Jang',4,'(+78)945-658-3464','MATH','00:00:00','','A'),
(12,'Monkey','Dude','Luffy',3,'(+63)921-310-3341','MATH','00:00:00','','A'),
(13,'One','Two','Three',4,'(+63)123-312-3231','MATH','00:00:00','','A'),
(14,'Ones','Twos','Threes',2,'(+63)123-311-1111','MATH','00:00:00','','A'),
(15,'wew','wew','ewe',4,'(+63)131-231-3231','MATH','00:00:00','','A'),
(16,'\'','\'','\'',1,'(+63)123-412-3412','MATH','','','A'),
(17,';','qw','qw',1,'(+63)121-212-1212','MATH','','','A'),
(18,'>','<','>',2,'(+63)121-121-2121','MATH','','','A'),
(19,'?','\"','/',1,'(+63)111-111-1111','MATH','','','A'),
(20,'B','U','D',1,'(+63)121-221-2121','MATH','','','A');

/*Table structure for table `policy` */

DROP TABLE IF EXISTS `policy`;

CREATE TABLE `policy` (
  `PolicyID` int(10) NOT NULL AUTO_INCREMENT,
  `PolicyName` varchar(50) NOT NULL,
  `PolicyValue` varchar(50) NOT NULL,
  `PolicyTitle` varchar(50) NOT NULL,
  `PolicyDescription` varchar(50) DEFAULT NULL,
  `PolicyDefaultVal` varchar(50) DEFAULT NULL,
  `PolicyDataType` varchar(50) DEFAULT NULL,
  `PolicyGroup` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PolicyID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `policy` */

/*Table structure for table `position` */

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `PositionID` int(10) NOT NULL,
  `PositionCode` int(5) DEFAULT NULL,
  `PositionName` char(15) DEFAULT NULL,
  `PositionDesc` text,
  PRIMARY KEY (`PositionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `position` */

insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values 
(1,1,'Dean',NULL),
(2,2,'Department Head',NULL),
(3,3,'Instructor',NULL),
(4,4,'Research',NULL);

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `RoomID` int(10) NOT NULL AUTO_INCREMENT,
  `RoomNo` int(10) NOT NULL,
  `RoomStatus` char(15) NOT NULL DEFAULT 'Physical',
  `RoomType` char(10) NOT NULL,
  `DepartmentCode` int(10) NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `room` */

insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values 
(1,301,'Physical','Lecture',1),
(2,302,'Physical','Lecture',1),
(3,303,'Physical','Lecture',1),
(4,304,'Physical','Lecture',1),
(5,311,'Physical','Laboratory',1),
(6,313,'Dummy','Laboratory',1),
(7,326,'Physical','Lecture',1);

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `SchedID` int(10) NOT NULL AUTO_INCREMENT,
  `SchedName` varchar(50) NOT NULL,
  `SchedTime` time NOT NULL,
  `SchedEnd` time NOT NULL,
  `SchedDays` varchar(50) NOT NULL,
  `SchedRoom` varchar(50) NOT NULL,
  `SchedProf` varchar(50) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `SubjectType` varchar(50) NOT NULL,
  `SubjectHours` int(5) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `Overload` tinyint(1) NOT NULL,
  PRIMARY KEY (`SchedID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`SchedID`,`SchedName`,`SchedTime`,`SchedEnd`,`SchedDays`,`SchedRoom`,`SchedProf`,`SubjectCode`,`SubjectName`,`SubjectType`,`SubjectHours`,`DepartmentCode`,`Overload`) values 
(1,'Sched1','09:00:00','11:00:00','wednesday','1','1','6','1','1',2,'1',1);

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

insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values 
(1,'1st Year','A','2015-2016','1st Semester','BSCS','MATH','Morning'),
(2,'1st Year','B','2015-2016','1st Semester','BSCS','MATH','Afternoon'),
(3,'1st Year','A','2015-2016','1st Semester','BSIT','MATH','Morning'),
(4,'1st Year','B','2015-2016','1st Semester','BSIT','MATH','Afternoon'),
(5,'1st Year','C','2015-2016','1st Semester','BSIT','MATH','Morning'),
(6,'1st Year','D','2015-2016','1st Semester','BSIT','MATH','Afternoon'),
(7,'1st Year','A','2015-2016','1st Semester','BSIS','MATH','Morning'),
(8,'1st Year','B','2015-2016','1st Semester','BSIS','MATH','Afternoon'),
(9,'1st Year','C','2015-2016','1st Semester','BSIS','MATH','Morning'),
(10,'1st Year','D','2015-2016','1st Semester','BSIS','MATH','Afternoon'),
(11,'1st Year','A','2015-2016','2nd Semester','BSCS','MATH','Morning'),
(12,'1st Year','B','2015-2016','2nd Semester','BSCS','MATH','Afternoon'),
(13,'1st Year','A','2015-2016','2nd Semester','BSIT','MATH','Morning'),
(14,'1st Year','B','2015-2016','2nd Semester','BSIT','MATH','Afternoon'),
(15,'1st Year','C','2015-2016','2nd Semester','BSIT','MATH','Morning'),
(16,'1st Year','D','2015-2016','2nd Semester','BSIT','MATH','Afternoon'),
(17,'1st Year','A','2015-2016','2nd Semester','BSIS','MATH','Morning'),
(18,'1st Year','B','2015-2016','2nd Semester','BSIS','MATH','Afternoon'),
(19,'1st Year','C','2015-2016','2nd Semester','BSIS','MATH','Morning'),
(20,'1st Year','D','2015-2016','2nd Semester','BSIS','MATH','Afternoon'),
(21,'2nd Year','A','2016-2017','1st Semester','BSCS','MATH','Morning'),
(22,'2nd Year','B','2016-2017','1st Semester','BSCS','MATH','Afternoon'),
(23,'2nd Year','A','2016-2017','1st Semester','BSIT','MATH','Morning'),
(24,'2nd Year','B','2016-2017','1st Semester','BSIT','MATH','Afternoon'),
(25,'2nd Year','C','2016-2017','1st Semester','BSIT','MATH','Morning'),
(26,'2nd Year','D','2016-2017','1st Semester','BSIT','MATH','Afternoon'),
(27,'2nd Year','A','2016-2017','1st Semester','BSIS','MATH','Morning'),
(28,'2nd Year','B','2016-2017','1st Semester','BSIS','MATH','Afternoon'),
(29,'2nd Year','C','2016-2017','1st Semester','BSIS','MATH','Morning'),
(30,'2nd Year','D','2016-2017','1st Semester','BSIS','MATH','Afternoon'),
(31,'2nd Year','A','2016-2017','2nd Semester','BSCS','MATH','Morning'),
(32,'2nd Year','B','2016-2017','2nd Semester','BSCS','MATH','Afternoon'),
(33,'2nd Year','A','2016-2017','2nd Semester','BSIT','MATH','Morning'),
(34,'2nd Year','B','2016-2017','2nd Semester','BSIT','MATH','Afternoon'),
(35,'2nd Year','C','2016-2017','2nd Semester','BSIT','MATH','Morning'),
(36,'2nd Year','D','2016-2017','2nd Semester','BSIT','MATH','Afternoon'),
(37,'2nd Year','A','2016-2017','2nd Semester','BSIS','MATH','Morning'),
(38,'2nd Year','B','2016-2017','2nd Semester','BSIS','MATH','Afternoon'),
(39,'2nd Year','C','2016-2017','2nd Semester','BSIS','MATH','Morning'),
(40,'2nd Year','D','2016-2017','2nd Semester','BSIS','MATH','Afternoon');

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
  `SubjectDay` varchar(20) NOT NULL,
  `Status` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`SubjectID`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values 
(1,'CHEM 11','General Chemestry Lecture',3,3,0,0,'CHEM','Lecture','','A'),
(2,'CHEM 11L','General Chemestry Laboratory',0,0,3,1,'CHEM','Laboratory','','A'),
(3,'CS 101','Computer Fundamentals',0,3,0,0,'MATH','Lecture','','A'),
(4,'CS 111','Computer Programming 1 Lecture',0,3,0,0,'MATH','Lecture','','A'),
(5,'CS 111L','Computer Programming 1 Laboratory',0,0,3,1,'MATH','Laboratory','','A'),
(6,'MATH 1','College Algebra',0,4,0,0,'MATH','Lecture','','A'),
(7,'MATH 2A','Plane and Spherical Trigonometry',0,3,0,0,'MATH','Lecture','','A'),
(8,'CS 122','Computer Programming 2 Lecture',0,2,0,0,'MATH','Lecture','','A'),
(9,'CS 122L','Computer Programming 2 Laboratory',0,0,3,1,'MATH','Lecture','','A'),
(10,'CS 123','Discrete Structures',0,3,0,0,'MATH','Lecture','','A'),
(11,'MATH 5A','Differential Calculus and Anal Geometry',0,5,0,0,'MATH','Lecture','','A'),
(12,'PHYS 1A','Mechanics Lecture',0,3,0,0,'PHYS','Lecture','','A'),
(13,'PHYS 1AL','Mechanics Laboratory',0,0,0,1,'PHYS','Laboratory','','A'),
(14,'CS 211','Data Structures Lecture',0,2,0,0,'MATH','Lecture','','A'),
(15,'CS 211L','Data Structures Laboratory',0,0,3,1,'MATH','Laboratory','','A'),
(16,'CS 212','Object Oriented Programming Lecture',0,2,0,0,'MATH','Lecture','','A'),
(17,'CS 212L','Object Oriented Programming Laboratory',0,0,3,1,'MATH','Laboratory','','A'),
(18,'CS 213','Combinatorics and Graph Theory',0,3,0,0,'MATH','Lecture','','A'),
(19,'MATH 6','Integral Calculus',3,4,0,0,'MATH','Lecture','','A'),
(20,'PHYS 2B','Electricity and Magnetism Lecture',12,3,0,0,'PHYS','Lecture','','A'),
(21,'PHYS 2BL','Electricity and Magnetism Laboratory',0,0,3,1,'PHYS','Laboratory','','A'),
(22,'CS 221','Design and Analysis of Algorithm',0,3,0,0,'MATH','Lecture','','A'),
(23,'CS 222','Digital Design',0,3,0,0,'MATH','Lecture','','A'),
(24,'CS 222L','Digital Design Laboratory',0,0,3,1,'MATH','Laboratory','','A'),
(25,'CS 223','Programming Languages Lecture',0,2,0,0,'MATH','Lecture','','A'),
(26,'CS 223L','Programming Languages Laboratory',0,0,3,1,'MATH','Laboratory','','A'),
(27,'MATH 8','Probability and Statistics',0,3,0,0,'MATH','Lecture','','A'),
(28,'CS 311','Database Systems Lecture',0,3,0,0,'MATH','Lecture','','A'),
(29,'CS 311L','Database Systems Laboratory',0,0,3,1,'MATH','Laboratory','','A'),
(30,'CS 312','Computer Organization Lecture',0,2,0,0,'MATH','Lecture','','A'),
(31,'CS 312L','Computer Organization Laboratory',0,0,3,1,'MATH','Laboratory','','A'),
(32,'CS 313','Automata and Language Theory',3,3,0,0,'MATH','Lecture','','A'),
(33,'CS 314','Research Methods',3,3,0,0,'MATH','Lecture','','A'),
(34,'CSE 1','CS Elective 1',3,3,0,0,'MATH','Lecture','','A'),
(35,'CSF 1','Free Elective 1',3,3,0,0,'MATH','Lecture','','A'),
(39,'CSGO L','Counter-Strike GO L',0,0,5,5,'PHYS','Laboratory','','A'),
(38,'CSGO','Counter-Strike GO',5,3,0,0,'PHYS','Lecture','','A');

/*Table structure for table `subject_list` */

DROP TABLE IF EXISTS `subject_list`;

CREATE TABLE `subject_list` (
  `SubjectLID` int(10) NOT NULL AUTO_INCREMENT,
  `ProfID` int(10) DEFAULT NULL,
  `SubjectCode` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`SubjectLID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `subject_list` */

insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values 
(1,1,'9'),
(2,1,'2'),
(3,1,'1'),
(4,1,'3'),
(5,1,'10'),
(6,1,'11'),
(7,1,'12'),
(8,2,'MATH 1');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL,
  `password` char(15) NOT NULL,
  `usertype` char(10) NOT NULL,
  `profId` int(10) NOT NULL,
  `adminId` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`password`,`usertype`,`profId`,`adminId`) values 
(1,'admin','admin101','admin',1,1),
(2,'user','user101','faculty',2,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
