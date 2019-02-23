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

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_code` int(10) NOT NULL,
  `course_name` char(15) NOT NULL,
  `course_major` char(15) NOT NULL,
  `course_type` char(15) NOT NULL,
  `course_completion` char(15) NOT NULL,
  `department_code` int(10) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `course` */

/*Table structure for table `curriculum` */

DROP TABLE IF EXISTS `curriculum`;

CREATE TABLE `curriculum` (
  `curriculum_id` int(10) NOT NULL AUTO_INCREMENT,
  `school_year` year(4) NOT NULL,
  `course_code` int(10) NOT NULL,
  `subject_code` int(10) NOT NULL,
  `semester` int(4) NOT NULL,
  `year` year(4) NOT NULL,
  `prereq_1` char(1) DEFAULT NULL,
  `prereq_2` char(1) DEFAULT NULL,
  `corequisite` char(1) DEFAULT NULL,
  PRIMARY KEY (`curriculum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `curriculum` */

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `department_id` int(10) NOT NULL AUTO_INCREMENT,
  `department_name` char(40) NOT NULL,
  `department_code` int(20) NOT NULL,
  `status` char(1) DEFAULT 'A',
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`department_id`,`department_name`,`department_code`,`status`) values 
(1,'Math',1,'A'),
(2,'Physics',2,'A'),
(3,'Chemistry',3,'A'),
(5,'Electrical Eng',4,'A'),
(6,'Electronics and Communication',5,'A'),
(7,'Mechanical Eng',6,'A'),
(8,'Civil Eng',7,'A'),
(9,'Basic Industrial Technology',8,'A'),
(10,'Civil Engineering Technology',9,'A'),
(11,'ALGEBRA',1732,'A'),
(12,'Calculus',123,'A'),
(13,'Weed',12,'A');

/*Table structure for table `faculty` */

DROP TABLE IF EXISTS `faculty`;

CREATE TABLE `faculty` (
  `prof_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` char(15) NOT NULL,
  `middle_name` char(15) NOT NULL,
  `last_name` char(15) NOT NULL,
  `position_code` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `department_code` char(15) NOT NULL,
  `prefered_time` time NOT NULL,
  `status` char(1) DEFAULT 'A',
  PRIMARY KEY (`prof_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `faculty` */

insert  into `faculty`(`prof_id`,`first_name`,`middle_name`,`last_name`,`position_code`,`contact`,`department_code`,`prefered_time`,`status`) values 
(1,'Mary Rose','Cotingjo','Apoyon','Instructor','(+63)909-121-2121','5','01:00:00','D'),
(2,'Jenny','Kim','Park','Instructor','(+12)311-111-1111','2','00:00:00','A'),
(4,'Joy','Sung','Kim','Dean','(+45)613-980-7776','1','00:00:00','A');

/*Table structure for table `policy` */

DROP TABLE IF EXISTS `policy`;

CREATE TABLE `policy` (
  `policy_id` int(10) NOT NULL AUTO_INCREMENT,
  `policy_name` char(15) NOT NULL,
  `policy_value` char(15) NOT NULL,
  `policy_desc` char(30) NOT NULL,
  PRIMARY KEY (`policy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `policy` */

insert  into `policy`(`policy_id`,`policy_name`,`policy_value`,`policy_desc`) values 
(1,'policy_1','1','availability of days'),
(2,'policy_2','1','subject hours');

/*Table structure for table `position` */

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `position_id` int(10) NOT NULL AUTO_INCREMENT,
  `position_name` char(25) NOT NULL,
  `position_desc` tinytext NOT NULL,
  `position_code` varchar(20) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `position` */

insert  into `position`(`position_id`,`position_name`,`position_desc`,`position_code`) values 
(1,'Dean','Dean ','Dean'),
(2,'Department Head','Head','Head'),
(3,'Research','wewewewweeww','Research'),
(4,'Instructor','Prof\r\n','Instructor');

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `room_id` int(10) NOT NULL AUTO_INCREMENT,
  `room_no` int(10) NOT NULL,
  `room_status` char(15) NOT NULL DEFAULT 'A',
  `room_type` char(10) NOT NULL,
  `department_code` int(10) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `room` */

insert  into `room`(`room_id`,`room_no`,`room_status`,`room_type`,`department_code`) values 
(1,301,'A','Lecture',1),
(2,302,'A','Lecture',1),
(3,303,'A','Lecture',1),
(4,304,'A','Lecture',1),
(5,305,'A','Lecture',1),
(6,306,'A','Lecture',1),
(7,0,'A','Laboratory',1),
(8,0,'A','Laboratory',1),
(9,0,'A','Laboratory',1);

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `sched_id` int(10) NOT NULL AUTO_INCREMENT,
  `sched_name` char(15) NOT NULL,
  `sched_from` time NOT NULL,
  `sched_days` char(10) NOT NULL,
  `sched_prof` char(25) NOT NULL,
  `subject_code` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `deptartment_code` int(10) NOT NULL,
  `overload` char(15) NOT NULL,
  `sched_length` int(5) NOT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`sched_id`,`sched_name`,`sched_from`,`sched_days`,`sched_prof`,`subject_code`,`room_id`,`deptartment_code`,`overload`,`sched_length`) values 
(1,'sched1','07:00:00','monday','1',1,1,1,'Overload',3),
(2,'sched2','08:00:00','tuesday','2',1,1,1,'XXXX',2),
(3,'sched3','10:00:00','monday','2',2,2,1,'hdgfjhgd',3),
(7,'sched6','07:00:00','tuesday','4',4,1,1,'123',1),
(5,'sched5','10:00:00','monday','1',2,1,1,'IHKKKH',3),
(8,'sched7','07:00:00','wednesday','4',1,1,1,'2333',1);

/*Table structure for table `section` */

DROP TABLE IF EXISTS `section`;

CREATE TABLE `section` (
  `section_id` int(10) NOT NULL AUTO_INCREMENT,
  `section_name` int(5) NOT NULL,
  `section_code` char(10) NOT NULL,
  `section_yr` int(5) NOT NULL,
  `section_sem` int(5) NOT NULL,
  `course_code` int(10) NOT NULL,
  `department_code` int(10) NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `section` */

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `subject_id` int(10) NOT NULL AUTO_INCREMENT,
  `subject_code` char(15) NOT NULL,
  `subject_name` char(30) NOT NULL,
  `subject_unit` int(11) NOT NULL,
  `subject_hrs` int(3) NOT NULL,
  `subject_type` char(10) NOT NULL,
  `department_code` int(10) NOT NULL,
  `status` char(1) DEFAULT 'A',
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`subject_id`,`subject_code`,`subject_name`,`subject_unit`,`subject_hrs`,`subject_type`,`department_code`,`status`) values 
(1,'1','Programming 1 Lab',0,3,'Programmin',1,'A'),
(2,'2','Programming 1 Lecture',0,5,'Programmin',1,'D'),
(3,'3','Programming 2 Lab',0,3,'Programmin',1,'D'),
(4,'4','Programming 2 Lecture',0,0,'Programmin',1,'D'),
(5,'5','Programming 3 Lab',0,0,'Programin',1,'A'),
(6,'6','Programming 3 Lecture',0,5,'Programmin',1,'D'),
(7,'7','Programming 4 Lab',0,3,'Programmin',1,'A'),
(8,'8','Programming 4 Lecture',0,5,'Programmin',1,'A'),
(9,'9','Database and Designs',0,4,'Database',1,'A'),
(10,'10','Free Elective 1',0,4,'Math',1,'A'),
(11,'11','Free Elective 2',0,4,'Math',1,'A'),
(12,'12','Free Elective 3',0,3,'Math',1,'A'),
(13,'13','Free Elective 4',0,3,'Math',1,'A'),
(14,'14','Algebra',0,4,'Math',1,'A'),
(15,'15','Trigonometry',0,4,'Math',1,'A'),
(16,'16','Differential Calculus',0,5,'Math',1,'A'),
(17,'17','Integral Calculus',0,5,'Math',1,'A'),
(18,'18','Networking Principles',0,5,'Networking',1,'A'),
(19,'19','Mathhhh',3,3,'sfhjds',0,'A'),
(20,'007','Agent',12,10,'Classified',0,'A'),
(21,'123','sd',12,1,'sd',0,'A');

/*Table structure for table `subject_list` */

DROP TABLE IF EXISTS `subject_list`;

CREATE TABLE `subject_list` (
  `subjectlist_id` int(10) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(10) DEFAULT NULL,
  `subject_code` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`subjectlist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `subject_list` */

insert  into `subject_list`(`subjectlist_id`,`faculty_id`,`subject_code`) values 
(1,1,'1'),
(2,2,'3'),
(3,1,'2'),
(4,1,'5'),
(5,1,'4'),
(6,3,'1'),
(7,3,'5'),
(8,3,'10');

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
