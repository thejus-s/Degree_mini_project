/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.21-MariaDB : Database - php_turf_booking
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`php_turf_booking` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `php_turf_booking`;

/*Table structure for table `bookings` */

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `slot_id` int(11) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `bookings` */

insert  into `bookings`(`book_id`,`user_id`,`slot_id`,`date_time`,`status`) values (32,13,21,'2023-10-12 08:54:28','cancel'),(31,14,20,'2023-10-10 21:44:39','cancel'),(30,13,19,'2023-10-10 21:27:53','cancel'),(29,1,8,'2023-10-09 11:52:07','cancel'),(28,13,7,'2023-10-05 18:26:19','cancel'),(33,1,22,'2023-10-13 23:22:53','paid');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`category_id`,`category_name`) values (5,' POOLS'),(7,'BADMINTON COURTS'),(6,'TURF');

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `sender_type` varchar(50) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `receiver_type` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `chat` */

insert  into `chat`(`chat_id`,`sender_id`,`sender_type`,`receiver_id`,`receiver_type`,`message`,`date_time`) values (1,1,'turf',2,'user','Hai','322'),(2,1,'user',1,'turf','Hello','32'),(3,1,'turf',2,'user','hello','2021-02-10 01:22:47'),(4,1,'turf',1,'user','yes','2021-02-10 01:23:02'),(5,9,'coach',4,'user','hi','2022-03-28 19:44:25'),(6,9,'coach',4,'user','haiiiiiiiiii','2022-03-28 19:44:29'),(7,4,'user',9,'coach','hello','2022-03-28 19:44:29'),(8,4,'user',3,'truf','hii','2022-03-29 14:03:29'),(9,4,'user',3,'truf','hlooo','2022-03-29 14:03:43'),(10,4,'user',3,'truf','hlooo','2022-03-29 14:03:47'),(11,4,'user',1,'truf','hii','2022-03-29 14:05:39'),(12,4,'user',1,'truf','hloo','2022-03-29 14:05:44'),(13,11,'user',9,'coach','hoiii','2022-03-29 14:10:29'),(14,10,'coach',11,'user','hii','2022-03-29 14:12:06');

/*Table structure for table `coaches` */

DROP TABLE IF EXISTS `coaches`;

CREATE TABLE `coaches` (
  `coach_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `turf_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `sports_type` varchar(100) DEFAULT NULL,
  `fee_amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`coach_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `coaches` */

insert  into `coaches`(`coach_id`,`login_id`,`turf_id`,`fname`,`lname`,`place`,`phone`,`email`,`age`,`gender`,`description`,`sports_type`,`fee_amount`) values (1,9,2,'Rio','joy','kochi','9999999999','rio@gmail.com','23','Male','fdghfhtyu','asd','1000'),(2,10,2,'biya','rose','ernakulam','0987654321','biya@gmail.com','20','Female','ewrertet','saasds','1000');

/*Table structure for table `commision` */

DROP TABLE IF EXISTS `commision`;

CREATE TABLE `commision` (
  `commision_id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage` varchar(50) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`commision_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `commision` */

insert  into `commision`(`commision_id`,`percentage`,`date_time`) values (8,'90','2021-02-09 11:38:16');

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `complaint` varchar(50) DEFAULT NULL,
  `reply` varchar(50) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `complaints` */

insert  into `complaints`(`complaint_id`,`user_id`,`complaint`,`reply`,`date_time`) values (1,1,'No food ','asza',NULL),(2,2,'Low Quality','assws','2022-03-28 15:03:45'),(3,1,'nnnnn','sw',NULL),(4,1,'logib error','zzzzz','2021-04-15'),(5,1,'login error','pending','2021-04-15'),(6,1,'login error','pending','2021-04-15'),(7,1,'stghgb','pending','2021-04-15'),(8,6,'hhh','pending','2022-03-29'),(9,9,'kjscxdshcbdh','pending','2023-09-11'),(10,9,'kjscxdshcbdh','pending','2023-09-11');

/*Table structure for table `facilities` */

DROP TABLE IF EXISTS `facilities`;

CREATE TABLE `facilities` (
  `facility_id` int(11) NOT NULL AUTO_INCREMENT,
  `turf_id` int(11) DEFAULT NULL,
  `facility` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(2000) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`facility_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `facilities` */

insert  into `facilities`(`facility_id`,`turf_id`,`facility`,`description`,`image`,`date`) values (2,1,'Play Ground','Work Place','static/facility_images/ac8ef78a-c910-4130-93c9-3c9a961d3bffPicture1.jpg','2021-02-09'),(3,1,'Canteen','Food','static/facility_images/316ce1ed-4788-4597-9658-c758aa2fae07brocoli.jpg','2021-02-09'),(4,1,'Accomodation','Home','static/facility_images/e2f8572e-c6ea-4fd4-abed-45a83eb9a2c25.png','2021-02-09'),(6,2,'asas','sdsadsad','static/facility_images/11dc78a2-5c58-4237-a31e-c4fafb9132c7trainer-4.jpg','2022-03-28'),(7,3,'   fecility testings','   fecility testing descriptions','facility_images/image_64fc49f97177f.png','2023-09-09'),(9,3,'sxsax','asaswswqs','facility_images/image_64fc4872590f6.png','2023-09-09');

/*Table structure for table `feedbacks` */

DROP TABLE IF EXISTS `feedbacks`;

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `turf_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `feedbacks` */

insert  into `feedbacks`(`feedback_id`,`user_id`,`turf_id`,`title`,`description`,`date_time`) values (1,1,1,'bhhbhbhbh','hhghghghh','67/90/90'),(2,1,1,'tuii','tuii','2021-04-13 14:06:32'),(3,1,1,'dghj','dghj','2021-04-13 14:06:54'),(4,1,1,'ryuu','tuii','2021-04-13 14:15:29'),(5,1,1,'dhj','fjkk','2021-04-13 14:15:40'),(6,1,1,'ooo','fhh','2021-04-15 11:17:29'),(7,1,1,'','hhh','2022-03-29 11:39:12'),(8,9,1,'s,mndncb','dc','2023-09-11 15:22:26'),(9,9,2,'dmnhb','mdchbdh','2023-09-11 15:23:01'),(10,9,2,'dmnhb','mdchbdh','2023-09-11 15:23:13'),(11,11,6,'kollam','nalleya','2023-09-27 13:54:22');

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `turf_id` int(11) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `image_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `images` */

insert  into `images`(`image_id`,`turf_id`,`image`,`date_time`,`image_type`) values (1,1,'static/ec1dce87-f7af-473e-988b-6086cd70a84e5.png','2021-02-10 00:08:05','game'),(2,2,'static/9decc5cf-8bf4-4a26-8702-00cb0a25a7305.png','2021-03-05 10:17:04','game'),(3,2,'static/1765a7e5-9dab-4a7a-b145-e835e8853be4brocoli.jpg','2021-03-15 09:22:22','game'),(4,2,'static/44f70984-d1f1-4bc4-8096-6e7a7f703f33home-image.jpg','2022-03-28 16:32:16','game'),(5,2,'static/ee25af1b-d0d6-4705-a2f1-87687a97bc2dhome-image-3.jpg','2022-03-28 16:34:15','infrastructure'),(6,2,'static/1808f235-aeae-428e-87d9-8de49b04f8b8trainer-4.jpg','2022-03-28 16:34:27','facility'),(7,3,'facility_images/image_64fc5eff76ea6.png','2023-09-09 17:33:11','game'),(8,3,'facility_images/image_64fc5f0d8ca09.','2023-09-09 17:33:25','infrastructure'),(9,3,'facility_images/image_64fc5f19bedad.','2023-09-09 17:33:37','facility'),(10,3,'facility_images/image_64fc61ee01075.png','2023-09-09 17:45:42','game'),(11,3,'facility_images/image_64fc62edd8a17.','2023-09-09 17:49:57','infrastructure'),(12,3,'facility_images/image_64fc631fc5713.png','2023-09-09 17:50:47','infrastructure'),(13,3,'facility_images/image_64fc633b61a25.jpg','2023-09-09 17:51:15','facility');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`usertype`) values (1,'ann','ann','turf'),(2,'admin','admin','admin'),(3,'turf','turf','turf'),(4,'a','a','user'),(5,'hsha','hahah','user'),(6,'hsha','hahah','user'),(7,'abijith','abijith','user'),(9,'rio','rio','coach'),(10,'biya','biya','coach'),(11,'tiya','tiya','user'),(12,'sh','sh','turf'),(19,'ana','ana','user'),(20,'thej','954569','turf'),(21,'thej','2456','turf'),(22,'sudhi','1234','turf'),(23,'aa','aaa','turf'),(24,'the','123','turf'),(25,'amruth','99953','user'),(26,'hai','12345','user'),(27,'njn','thejuS123','turf'),(28,'me','Me123456','user'),(29,'cmnc','sh42553553','pending'),(30,'sudhi','Sudhi1234','user'),(31,'he','Heman1234','turf');

/*Table structure for table `matches` */

DROP TABLE IF EXISTS `matches`;

CREATE TABLE `matches` (
  `match_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `opp_user_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`match_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `matches` */

insert  into `matches`(`match_id`,`book_id`,`opp_user_id`,`status`,`date`) values (12,22,1,'accept','2023-09-12'),(13,22,2,'pending','2023-09-12'),(14,23,9,'pending','2023-09-12'),(15,23,6,'pending','2023-09-12'),(16,22,4,'pending','2023-09-12');

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `paymment_for_id` int(11) DEFAULT NULL,
  `payment_type` varchar(500) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `payments` */

insert  into `payments`(`payment_id`,`paymment_for_id`,`payment_type`,`payment_mode`,`date_time`,`amount`) values (13,3,'turf','online','2023-09-12 13:08:45','100'),(12,2,'turf','online','2023-09-12 12:45:15','100'),(11,4,'turf','online','2023-09-12 09:25:31','501'),(14,5,'turf','online','2023-09-27 13:51:34','100'),(15,6,'turf','online','2023-09-29 13:29:23','150'),(16,6,'turf','online','2023-10-05 12:48:51','150'),(17,7,'turf','online','2023-10-05 18:26:19','100'),(18,8,'turf','online','2023-10-09 11:52:07','100'),(19,19,'turf','online','2023-10-10 21:27:53','100'),(20,20,'turf','online','2023-10-10 21:44:39','100'),(21,21,'turf','online','2023-10-12 08:54:28','100'),(22,22,'turf','online','2023-10-13 23:22:53','1222');

/*Table structure for table `ratings` */

DROP TABLE IF EXISTS `ratings`;

CREATE TABLE `ratings` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `turf_id` int(11) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `review` varchar(500) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `ratings` */

insert  into `ratings`(`rate_id`,`user_id`,`turf_id`,`rate`,`review`,`date_time`) values (7,1,1,'5.0','sfghsd','2021-04-18 11:35:15'),(8,6,1,'4.0','ggg','2022-03-29 11:37:36'),(9,3,9,'4','mdncbdscbmdgsh','2023-09-11 15:40:35');

/*Table structure for table `slots` */

DROP TABLE IF EXISTS `slots`;

CREATE TABLE `slots` (
  `slot_id` int(11) NOT NULL AUTO_INCREMENT,
  `turf_id` int(11) DEFAULT NULL,
  `day` varchar(50) DEFAULT NULL,
  `from_time` varchar(50) DEFAULT NULL,
  `to_time` varchar(50) DEFAULT NULL,
  `amount` decimal(50,0) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`slot_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `slots` */

insert  into `slots`(`slot_id`,`turf_id`,`day`,`from_time`,`to_time`,`amount`,`date_time`,`date`) values (7,9,'Sunday','13:15','14:15',100,'2023-10-05 18:16:15',NULL),(4,3,'Monday','17:23','19:21',501,'2023-09-09 17:21:52',NULL),(14,0,'6','Monday','12:00',20,'1000',NULL),(15,0,'6','Tuesday','10:00',20,'100',NULL),(22,6,'Saturday','23:21','01:22',1222,'2023-10-14','2023-10-13 23:22:23'),(21,6,'Friday','01:01','02:20',100,'2023-10-13','2023-10-11 20:19:24'),(23,11,'Sunday','23:35','00:36',100,'2023-10-14','2023-10-13 23:35:29'),(24,6,'Saturday','23:21','01:22',1000,'2023-10-14','2023-10-16 14:26:48');

/*Table structure for table `turfs` */

DROP TABLE IF EXISTS `turfs`;

CREATE TABLE `turfs` (
  `turf_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `owner_first_name` varchar(50) DEFAULT NULL,
  `owner_last_name` varchar(50) DEFAULT NULL,
  `turf_place` varchar(50) DEFAULT NULL,
  `landmark` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `turf_type` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`turf_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `turfs` */

insert  into `turfs`(`turf_id`,`login_id`,`owner_first_name`,`owner_last_name`,`turf_place`,`landmark`,`pincode`,`latitude`,`longitude`,`phone`,`email`,`turf_type`,`category_id`) values (1,1,'Ann Treata','Regina T M','Kochi','Kochi','688765','9.9882748','76.2950656','7012758728','treatspetscorner@gmail.com','indoor',1),(2,3,'ammu','turf','Kozhikode','hjhhhj','787878','9.9882748','76.2950656','7878878799','treatspetscorner@gmail.com','indoor',NULL),(3,12,'shemem','shemi','kollam','kollam loook','9874561230','691333','9.981582154658184','76.29850912810316','9874561230','sh@gmail.com',NULL),(4,20,'THEJUS','S','Ernakulam','church','683105','9.975930322641883','76.2852430343628','9545698752','thejuss@gmail.com','indoor',NULL),(5,21,'jyothika','shaji','Ernakulam','church','683105','9.980431672786372','76.27472877502441','9545698752','thejuss@gmail.com','Outdoor',1),(6,22,'sudhi','pools','Ernakulam','church','683105','9.980431672786372','76.27472877502441','9545698752','thejuss@gmail.com','Indoor',5),(7,23,'maa','aaa','Ernakulam','church','683105','9.980431672786372','76.27472877502441','9545698752','thejuss@gmail.com','Indoor',5),(8,24,'th','aa','Ernakulam','church','683105','9.975930322641883','76.27472877502441','9545698752','thejuss@gmail.com','Indoor',5),(9,27,' hai pools','njn','ernakulam','church','682021','9.997337596182424','76.30064964294434','2456212876','sthejus47@gmail.com','Indoor',5),(10,29,'jyothika','shaji','dguygd','ckdhigydgs','426554','9.980431672786372','76.27472877502441','5589668595','sthejus47@gmail.com','Indoor',5),(11,31,'turf','njn','ernakulam','church','682021','9.980431672786372','76.27472877502441','2456212876','sthejus47@gmail.com','Indoor',7);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `house_name` varchar(50) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`login_id`,`first_name`,`last_name`,`house_name`,`place`,`pincode`,`phone`,`email`) values (1,4,'Ammu','Kutty','Paliyethara','kkd','43434343','989898989','shemi96ven@gmail.com'),(2,10,'hh','hh','hhnn','vgvtgvg','878778','787878','shemi96ven@gmail.com'),(3,5,'bhbh','hhg','hghgh','87','87bh78v','87878','shemi96ven@gmail.com'),(4,6,'wtwywg','shshsh','shshshs','bshsjs','123456','9876543210','shemi96ven@gmail.com'),(5,7,'abijith','nm','abcd','kaloor','653008','9876543210','shemi96ven@gmail.com'),(6,11,'Tiya','t','asdf','erkm','688504','9074125836','shemi96ven@gmail.com'),(9,19,'anas','s','kotayam house','kottayam','789456','9874561230','shemi96ven@gmail.com'),(10,25,'amruth','krishna','kottayil','ekm','854253','9995395077','shemi96ven@gmail.com'),(11,26,'abc','efg','church','Ernakulam','683105','3466666996','sthejus47@gmail.com'),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,28,'thejus','s','church','ernakulam','682021','2456212876','sthejus47@gmail.com'),(14,30,'sudhi','H','church','ernakulam','682021','2456212876','sudheesh2d.21@gmail.com');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `training_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `file_path` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `videos` */

insert  into `videos`(`video_id`,`training_id`,`title`,`file_path`) values (1,1,'aasss','static/9c31d462-621d-475b-9fbc-c5895c157f04videoviewdemo.mp4'),(2,1,'aaa','static/9227a9ac-f34d-446c-8fe7-e54e4873a884videoviewdemo.mp4');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
