# phpMyAdmin SQL Dump
# version 2.5.3
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: Sep 21, 2014 at 07:07 PM
# Server version: 5.5.38
# PHP Version: 5.3.28
# 
# Database : `effervescence`
# 

# --------------------------------------------------------

#
# Table structure for table `admin_usr`
#

CREATE TABLE `admin_usr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT '1',
  `isdeleted` int(11) NOT NULL DEFAULT '0',
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_by` varchar(100) NOT NULL,
  `modified_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

#
# Dumping data for table `admin_usr`
#

INSERT INTO `admin_usr` VALUES (1, 'root', '232fc1c9feb5e1e1f453dd3842c884530091e0b6', 1, 0, '2014-09-06 18:58:33', '', '0000-00-00 00:00:00', '');

# --------------------------------------------------------

#
# Table structure for table `colleges`
#

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `isdeleted` tinyint(4) NOT NULL DEFAULT '0',
  `added_on` datetime NOT NULL,
  `added_by` varchar(50) NOT NULL DEFAULT '',
  `modified_on` datetime DEFAULT NULL,
  `modified_by` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=501 DEFAULT CHARSET=latin1 AUTO_INCREMENT=501 ;

#
# Dumping data for table `colleges`
#

INSERT INTO `colleges` VALUES (1, 'Acharya N.G. Ranga Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (2, 'Acharya Nagarjuna University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (3, 'Adikavi Nannaya University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (4, 'Ahmedabad University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (5, 'Alagappa University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (6, 'Aliah University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (7, 'Aligarh Muslim University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (8, 'All India Institute of Medical Sciences	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (9, 'Alliance University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (10, 'Amity University	\r\n', 1, 0, '2013-10-10 03:39:10', '', NULL, '');
INSERT INTO `colleges` VALUES (11, 'Amrita Vishwa Vidyapeetham	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (12, 'Anand Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (13, 'Andhra University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (14, 'Anna University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (15, 'Annamalai University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (16, 'Apeejay Stya University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (17, 'Arni University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (18, 'Aryabhatta Knowledge University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (19, 'Assam Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (20, 'Assam Don Bosco University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (21, 'Assam University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (22, 'Avinashilingam University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (23, 'Awadhesh Pratap Singh University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (24, 'Ayush and Health Sciences University of Chhattisgarh	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (25, 'Azim Premji University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (26, 'B.R. Ambedkar Bihar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (27, 'B.S. Abdur Rahman University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (28, 'Baba Farid University of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (29, 'Baba Ghulam Shah Badhshah University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (30, 'Babasaheb Bhimrao Ambedkar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (31, 'Babu Banarasi Das University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (32, 'Baddi University of Emerging Sciences and Technologies	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (33, 'BAHRA University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (34, 'Banaras Hindu University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (35, 'Banasthali Vidyapith	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (36, 'Bangalore University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (37, 'Barkatullah University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (38, 'Bastar Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (39, 'Bengal Engineering and Science University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (40, 'Berhampur University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (41, 'Bhagat Phool Singh Mahila Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (42, 'Bhagwant University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (43, 'Bharat Ratna Dr. B.R. Ambedkar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (44, 'Bharathiar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (45, 'Bharathidasan University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (46, 'Bharati Vidyapeeth University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (47, 'Bhatkhande Music Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (48, 'Bhupendra Narayan Mandal University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (49, 'Bidhan Chandra Krishi Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (50, 'Biju Patnaik University Of Technology, Orissa	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (51, 'Birla Institute of Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (52, 'Birla Institute of Technology and Science	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (53, 'Birsa Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (54, 'Bundelkhand University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (55, 'Central Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (56, 'Central Institute of Fisheries Education	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (57, 'Central University of Bihar	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (58, 'Central University of Gujarat	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (59, 'Central University of Haryana	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (60, 'Central University of Himachal Pradesh	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (61, 'Central University of Jharkhand	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (62, 'Central University of Karnataka	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (63, 'Central University of Kashmir	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (64, 'Central University of Kerala	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (65, 'Central University of Orissa	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (66, 'Central University of Punjab	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (67, 'Central University of Rajasthan	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (68, 'Central University of Tamil Nadu	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (69, 'Central University of Tibetan Studies	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (70, 'Centurion University of Technology and Management	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (71, 'CEPT University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (72, 'Chanakya National Law University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (73, 'Chandra Shekhar Azad University of Agriculture & Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (74, 'Charotar University of Science & Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (75, 'Chaudhary Charan Singh Haryana Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (76, 'Chaudhary Charan Singh University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (77, 'Chaudhary Devi Lal University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (78, 'Chennai Mathematical Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (79, 'Chhatrapati Shahuji Maharaj Medical University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (80, 'Chhatrapati Shahuji Maharaj University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (81, 'Chhattisgarh Swami Vivekananda Technical University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (82, 'Chitkara University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (83, 'Cochin University of Science and Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (84, 'CSK Himachal Pradesh Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (85, 'Damodaram Sanjivayya National Law University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (86, 'Datta Meghe Institute of Medical Sciences	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (87, 'Davangere University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (88, 'Dayalbagh Educational Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (89, 'Deccan College Post-Graduate and Research Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (90, 'Deen Dayal Upadhyay Gorakhpur University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (91, 'Deenbandhu Chhotu Ram University of Science and Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (92, 'Delhi Technological University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (93, 'Dev Sanskriti Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (94, 'Devi Ahilya Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (95, 'Dharmsinh Desai University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (96, 'Dhirubhai Ambani Institute of Information & Communication Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (97, 'Dibrugarh University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (98, 'Doon University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (99, 'Dr K.N. Modi University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (100, 'Dr. B R Ambedkar National Institute of Technology Jalandhar	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (101, 'Dr. B.R. Ambedkar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (102, 'Dr. B.R. Ambedkar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (103, 'Dr. Babasaheb Ambedkar Marathwada University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (104, 'Dr. Babasaheb Ambedkar Technological University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (105, 'Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (106, 'Dr. C.V. Raman University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (107, 'Dr. Hari Singh Gour University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (108, 'Dr. Panjabrao Deshmukh Krishi Vidyapeeth	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (109, 'Dr. Ram Manohar Lohia Avadh University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (110, 'Dr. Ram Manohar Lohiya National Law University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (111, 'Dr. Shakuntala Misra Rehabilitation University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (112, 'Dr. Y.S. Parmar University of Horticulture and Forestry	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (113, 'Dravidian University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (114, 'EIILM University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (115, 'Eternal University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (116, 'Fakir Mohan University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (117, 'Forest Research Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (118, 'Galgotias University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (119, 'Gandhi Institute of Technology and Management	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (120, 'Gandhigram Rural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (121, 'Ganpat University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (122, 'Gauhati University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (123, 'Gautam Buddha University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (124, 'GLA University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (125, 'Goa University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (126, 'Gokhale Institute of Politics and Economics	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (127, 'Govind Ballabh Pant University of Agriculture & Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (128, 'Gujarat Ayurved University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (129, 'Gujarat Forensic Sciences University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (130, 'Gujarat National Law University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (131, 'Gujarat Technological University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (132, 'Gujarat University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (133, 'Gujarat Vidyapith	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (134, 'Gulbarga University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (135, 'Guru Angad Dev Veterinary and Animal Sciences University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (136, 'Guru Ghasidas Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (137, 'Guru Gobind Singh Indraprastha University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (138, 'Guru Jambheshwar University of Science & Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (139, 'Guru Nanak Dev University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (140, 'Hemchandracharya North Gujarat University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (141, 'Hemwati Nandan Bahuguna Garhwal University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (142, 'Hidayatullah National Law University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (143, 'Himachal Pradesh University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (144, 'Himgiri ZEE University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (145, 'Hindustan University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (146, 'Homi Bhabha National Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (147, 'ICFAI University, Dehradun	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (148, 'ICFAI University, Jharkhand	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (149, 'ICFAI University, Tripura	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (150, 'IFHE Hyderabad	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (151, 'IFTM University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (152, 'Indian Agricultural Research Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (153, 'Indian Institute of Foreign Trade	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (154, 'Indian Institute of Information Technology Allahabad	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (155, 'Indian Institute of Information Technology and Management Gwalior	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (156, 'Indian Institute of Information Technology, Design and Manufacturing	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (157, 'Indian Institute of Science	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (158, 'Indian Institute of Space Science and Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (159, 'Indian Institute of Technology Bhubaneswar	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (160, 'Indian Institute of Technology Bombay	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (161, 'Indian Institute of Technology Delhi	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (162, 'Indian Institute of Technology Gandhinagar	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (163, 'Indian Institute of Technology Guwahati	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (164, 'Indian Institute of Technology Hyderabad	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (165, 'Indian Institute of Technology Kanpur	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (166, 'Indian Institute of Technology Kharagpur	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (167, 'Indian Institute of Technology Madras	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (168, 'Indian Institute of Technology Patna	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (169, 'Indian Institute of Technology Roorkee	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (170, 'Indian Institute of Technology Ropar	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (171, 'Indian Maritime University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (172, 'Indian School of Mines	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (173, 'Indian Statistical Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (174, 'Indian Veterinary Research Institute	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (175, 'Indira Gandhi Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (176, 'Indira Gandhi Institute of Development Research	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (177, 'Indira Gandhi National Tribal University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (178, 'Indira Kala Sangit Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (179, 'Indraprastha Institute of Information Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (180, 'Indus International University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (181, 'Institute of Chemical Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (182, 'Integral University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (183, 'International Institute for Population Sciences	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (184, 'International Institute of Information Technology Bangalore	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (185, 'International Institute of Information Technology, Hyderabad	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (186, 'Invertis University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (187, 'Islamic University of Science and Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (188, 'ITM University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (189, 'Jadavpur University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (190, 'Jagadguru Ramanandacharya Rajasthan Sanskrit University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (191, 'Jagan Nath University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (192, 'Jagdishprasad Jhabarmal Tibrewala University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (193, 'Jai Narain Vyas University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (194, 'Jai Prakash Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (195, 'Jain Vishva Bharati University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (196, 'Jaipur National University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (197, 'Jamia Hamdard	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (198, 'Jamia Millia Islamia	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (199, 'Jawaharlal Institute of Postgraduate Medical Education & Research	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (200, 'Jawaharlal Nehru Architecture and Fine Arts University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (201, 'Jawaharlal Nehru Centre for Advanced Scientific Research	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (202, 'Jawaharlal Nehru Krishi Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (203, 'Jawaharlal Nehru Technological University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (204, 'Jawaharlal Nehru Technological University, Anantapur	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (205, 'Jawaharlal Nehru Technological University, Kakinada	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (206, 'Jawaharlal Nehru University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (207, 'Jaypee University of Engineering & Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (208, 'Jaypee University of Information Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (209, 'Jiwaji University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (210, 'Jodhpur National University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (211, 'JSS University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (212, 'Junagadh Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (213, 'K L University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (214, 'Kadi Sarva VishwaVidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (215, 'Kakatiya University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (216, 'Kameshwar Singh Darbhanga Sanskrit University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (217, 'Kannada University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (218, 'Kannur University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (219, 'Karnatak University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (220, 'Karnataka State Law University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (221, 'Karnataka Veterinary, Animal and Fisheries Sciences University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (222, 'Karunya University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (223, 'Kavikulguru Kalidas Sanskrit University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (224, 'Kerala Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (225, 'Kerala Kalamandalam	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (226, 'Kerala University of Fisheries and Ocean Studies	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (227, 'Kerala University of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (228, 'Kerala Veterinary and Animal Sciences University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (229, 'KIIT University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (230, 'KLE University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (231, 'Kolhan University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (232, 'Krantiguru Shyamji Krishna Verma Kachchh University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (233, 'Krishna University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (234, 'Kumaun University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (235, 'Kurukshetra University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (236, 'Kushabhau Thakre Patrakarita Avam Jansanchar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (237, 'Kuvempu University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (238, 'Lakshmibai National Institute of Physical Education	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (239, 'Lalit Narayan Mithila University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (240, 'Lovely Professional University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (241, 'Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (242, 'Madurai Kamaraj University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (243, 'Magadh University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (244, 'Mahamaya Technical University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (245, 'Maharaja Ganga Singh University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (246, 'Maharaja Krishnakumarsinhji Bhavnagar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (247, 'Maharana Pratap University of Agriculture and Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (248, 'Maharashtra Animal and Fishery Sciences University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (249, 'Maharashtra University of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (250, 'Maharishi Dayanand University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (251, 'Maharishi Mahesh Yogi Vedic Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (252, 'Maharishi Panini Sanskrit Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (253, 'Maharishi University of Management and Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (254, 'Maharshi Dayanand Saraswati University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (255, 'Mahatma Gandhi Antarrashtriya Hindi Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (256, 'Mahatma Gandhi Chitrakoot Gramoday Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (257, 'Mahatma Gandhi Kashi Vidyapeeth	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (258, 'Mahatma Gandhi University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (259, 'Mahatma Gandhi University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (260, 'Mahatma Gandhi University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (261, 'Mahatma Jyoti Rao Phoole University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (262, 'Mahatma Jyotiba Phule Rohilkhand University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (263, 'Mahatma Phule Krishi Vidyapeeth	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (264, 'Makhanlal Chaturvedi Rashtriya Patrakarita Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (265, 'Malaviya National Institute of Technology, Jaipur	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (266, 'Manav Bharti University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (267, 'Mangalayatan University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (268, 'Mangalore University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (269, 'Manipal University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (270, 'Manipur University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (271, 'Manonmaniam Sundaranar University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (272, 'Marathwada Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (273, 'Martin Luther Christian University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (274, 'MATS University	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (275, 'Maulana Azad National Institute of Technology	\r\n', 1, 0, '2013-10-10 03:39:11', '', NULL, '');
INSERT INTO `colleges` VALUES (276, 'Maulana Azad National Urdu University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (277, 'Maulana Mazharul Haque Arabic and Persian University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (278, 'Mewar University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (279, 'MGM Institute of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (280, 'Mizoram University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (281, 'Mohammad Ali Jauhar University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (282, 'Mohanlal Sukhadia University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (283, 'Motilal Nehru National Institute of Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (284, 'Nagaland University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (285, 'NALSAR University of Law	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (286, 'Narendra Dev University of Agriculture and Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (287, 'Narsee Monjee Institute of Management and Higher Studies	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (288, 'National Dairy Research Institute	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (289, 'National Institute of Design	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (290, 'National Institute of Fashion Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (291, 'National Institute of Mental Health and Neuro Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (292, 'National Institute of Pharmaceutical Education and Research	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (293, 'National Institute of Pharmaceutical Education and Research, Guwahati	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (294, 'National Institute of Pharmaceutical Education and Research, Hajipur	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (295, 'National Institute of Pharmaceutical Education and Research, Hyderabad	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (296, 'National Institute of Pharmaceutical Education and Research, Rae Bareli	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (297, 'National Institute of Technology Calicut	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (298, 'National Institute of Technology Karnataka	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (299, 'National Institute of Technology Raipur	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (300, 'National Institute of Technology, Agartala	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (301, 'National Institute of Technology, Durgapur	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (302, 'National Institute of Technology, Hamirpur	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (303, 'National Institute of Technology, Jamshedpur	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (304, 'National Institute of Technology, Kurukshetra	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (305, 'National Institute of Technology, Patna	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (306, 'National Institute of Technology, Rourkela	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (307, 'National Institute of Technology, Silchar	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (308, 'National Institute of Technology, Srinagar	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (309, 'National Institute of Technology, Tiruchirappalli	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (310, 'National Institute of Technology, Warangal	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (311, 'National Law Institute University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (312, 'National Law School of India University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (313, 'National Law University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (314, 'National Law University, Jodhpur	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (315, 'National Law University, Orissa	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (316, 'National University of Educational Planning and Administration	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (317, 'National University of Study and Research in Law	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (318, 'Navsari Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (319, 'Netaji Subhas Institute of Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (320, 'Nilamber-Pitamber University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (321, 'NIMS University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (322, 'Nirma University of Science and Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (323, 'NITTE University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (324, 'Noida International University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (325, 'North Eastern Hill University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (326, 'North Eastern Regional Institute of Science and Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (327, 'North Maharashtra University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (328, 'North Orissa University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (329, 'NTR University of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (330, 'O.P. Jindal Global University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (331, 'Orissa University of Agriculture and Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (332, 'Osmania University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (333, 'Pacific University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (334, 'Padmashree Dr. D.Y. Patil Vidyapith	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (335, 'Palamuru University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (336, 'Pandit Deendayal Petroleum University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (337, 'Pandit Ravishankar Shukla University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (338, 'Panjab University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (339, 'Patna University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (340, 'PDPM Indian Institute of Information Technology, Design & Manufacturing	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (341, 'PEC University of Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (342, 'Periyar Maniammai University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (343, 'Pondicherry University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (344, 'Post Graduate Institute of Medical Education and Research	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (345, 'Potti Sreeramulu Telugu University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (346, 'Pravara Institute of Medical Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (347, 'Presidency University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (348, 'Pt. B. D. Sharma University of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (349, 'Punjab Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (350, 'Punjab Technical University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (351, 'Punjabi University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (352, 'Rabindra Bharati University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (353, 'Raffles University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (354, 'Rajasthan Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (355, 'Rajasthan Ayurved University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (356, 'Rajasthan Technical University Kota	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (357, 'Rajasthan University of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (358, 'Rajendra Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (359, 'Rajiv Gandhi National University of Law	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (360, 'Rajiv Gandhi Proudyogiki Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (361, 'Rajiv Gandhi University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (362, 'Rajiv Gandhi University of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (363, 'Ramakrishna Mission Vivekananda University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (364, 'Ranchi University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (365, 'Rani Channamma University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (366, 'Rani Durgavati Vishwavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (367, 'Rashtrasant Tukadoji Maharaj Nagpur University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (368, 'Rashtriya Sanskrit Sansthan	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (369, 'Rashtriya Sanskrit Vidyapeetha	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (370, 'Ravenshaw University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (371, 'Rayalaseema University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (372, 'Sam Higginbottom Institute of Agriculture, Technology and Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (373, 'Sambalpur University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (374, 'Sampurnanand Sanskrit Vishvavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (375, 'Sanjay Gandhi Post Graduate Institute of Medical Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (376, 'Sant Gadge Baba Amravati University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (377, 'Sant Longowal Institute of Engineering and Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (378, 'Sardar Patel University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (379, 'Sardar Vallabhbhai National Institute of Technology, Surat	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (380, 'Sardar Vallabhbhai Patel University of Agriculture and Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (381, 'Sardarkrushinagar Dantiwada Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (382, 'Sarguja University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (383, 'SASTRA University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (384, 'Satavahana University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (385, 'Sathyabama University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (386, 'Saurashtra University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (387, 'School of Planning and Architecture, Delhi	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (388, 'Sharda University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (389, 'Sher-e-Kashmir University of Agricultural Sciences and Technology of Kashmir	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (390, 'Shiv Nadar University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (391, 'Shivaji University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (392, 'Shoolini University of Biotechnology and Management Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (393, 'Shree Somnath Sanskrit University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (394, 'Shri Guru Ram Rai Education Mission	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (395, 'Shri Jagannath Sanskrit Vishvavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (396, 'Shri Lal Bahadur Shastri Rashtriya Sanskrit Vidyapeetha	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (397, 'Shri Mata Vaishno Devi University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (398, 'Shri Venkateshwara University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (399, 'Shridhar University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (400, 'Sidho Kanho Birsha University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (401, 'Sido Kanhu Murmu University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (402, 'Sikkim Manipal University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (403, 'Sikkim University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (404, 'Singhania University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (405, 'Sir Padampat Singhania University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (406, 'South Asian University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (407, 'Sree Chitra Thirunal Institute of Medical Sciences and Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (408, 'Sree Sankaracharya University of Sanskrit	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (409, 'Sri Chandrasekharendra Saraswathi Viswa Mahavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (410, 'Sri Guru Granth Sahib World University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (411, 'Sri Krishnadevaraya University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (412, 'Sri Padmavati Mahila Visvavidyalayam	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (413, 'Sri Ramachandra University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (414, 'Sri Sai University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (415, 'Sri Venkateswara Institute of Medical Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (416, 'Sri Venkateswara University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (417, 'Sri Venkateswara Vedic University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (418, 'Sri Venkateswara Veterinary University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (419, 'SRM University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (420, 'Subharti University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (421, 'SunRise University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (422, 'Suresh Gyan Vihar University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (423, 'Swami Ramanand Teerth Marathwada University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (424, 'Symbiosis International University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (425, 'Tamil Nadu Agricultural University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (426, 'Tamil Nadu Dr Ambedkar Law University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (427, 'Tamil Nadu Dr. M.G.R.Medical University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (428, 'Tamil Nadu Physical Education and Sports University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (429, 'Tamil Nadu Teacher Education University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (430, 'Tamil Nadu Veterinary and Animal Sciences University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (431, 'Tamil University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (432, 'Tata Institute of Fundamental Research	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (433, 'Tata Institute of Social Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (434, 'Teerthanker Mahaveer University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (435, 'Telangana University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (436, 'TERI University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (437, 'Tezpur University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (438, 'Thapar University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (439, 'The English and Foreign Languages University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (440, 'The Indian Law Institute	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (441, 'The LNM Institute of Information Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (442, 'The Maharaja Sayajirao University of Baroda	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (443, 'The National University of Advanced Legal Studies	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (444, 'The WB National University of Juridical Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (445, 'Thiruvalluvar University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (446, 'Tilka Manjhi Bhagalpur University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (447, 'Tripura University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (448, 'Tumkur University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (449, 'University of Agricultural Sciences, Bangalore	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (450, 'University of Agricultural Sciences, Dharwad	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (451, 'University of Allahabad	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (452, 'University of Burdwan	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (453, 'University of Calcutta	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (454, 'University of Calicut	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (455, 'University of Delhi	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (456, 'University of Gour Banga	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (457, 'University of Hyderabad	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (458, 'University of Jammu	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (459, 'University of Kalyani	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (460, 'University of Kashmir	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (461, 'University of Kerala	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (462, 'University of Kota	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (463, 'University of Lucknow	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (464, 'University of Madras	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (465, 'University of Mumbai	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (466, 'University of Mysore	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (467, 'University of North Bengal	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (468, 'University of Petroleum and Energy Studies	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (469, 'University of Pune	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (470, 'University of Rajasthan	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (471, 'University of Science and Technology, Meghalaya	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (472, 'University of Solapur	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (473, 'University of Technology & Management	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (474, 'Utkal University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (475, 'Utkal University of Culture	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (476, 'Uttar Banga Krishi Viswavidyalaya	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (477, 'Uttar Pradesh Technical University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (478, 'Uttarakhand Technical University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (479, 'Uttaranchal Sanskrit University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (480, 'Veer Bahadur Singh Purvanchal University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (481, 'Veer Kunwar Singh University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (482, 'Veer Narmad South Gujarat University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (483, 'Veer Surendra Sai University of Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (484, 'Vidyasagar University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (485, 'Vijayanagara Sri Krishnadevaraya University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (486, 'Vikram University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (487, 'Vikrama Simhapuri University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (488, 'Vinayaka Missions Sikkim University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (489, 'Vinoba Bhave University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (490, 'Visva Bharati University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (491, 'Visvesvaraya National Institute of Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (492, 'Visvesvaraya Technological University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (493, 'VIT University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (494, 'West Bengal State University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (495, 'West Bengal University of Animal and Fishery Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (496, 'West Bengal University of Health Sciences	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (497, 'West Bengal University of Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (498, 'YMCA University of Science and Technology	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (499, 'Yogi Vemana University	\r\n', 1, 0, '2013-10-10 03:39:12', '', NULL, '');
INSERT INTO `colleges` VALUES (500, 'others', 1, 0, '0000-00-00 00:00:00', '', NULL, '');

# --------------------------------------------------------

#
# Table structure for table `event_categories`
#

CREATE TABLE `event_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `isdeleted` tinyint(4) NOT NULL DEFAULT '0',
  `added_on` datetime NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

#
# Dumping data for table `event_categories`
#

INSERT INTO `event_categories` VALUES (1, 'technical', 0, 1, '2013-10-17 19:38:00', 'admin', '2013-10-17 19:38:00', 'admin');
INSERT INTO `event_categories` VALUES (2, 'cultural', 1, 0, '2013-10-17 19:38:00', 'admin', '2013-10-17 19:39:00', 'admin');
INSERT INTO `event_categories` VALUES (3, 'informal', 1, 0, '2013-10-17 19:39:17', 'admin', '2013-10-17 19:39:56', 'admin');
INSERT INTO `event_categories` VALUES (4, 'online', 1, 0, '2013-10-17 19:39:17', 'admin', '2013-10-17 19:39:56', 'admin');
INSERT INTO `event_categories` VALUES (5, 'management', 1, 0, '2013-10-17 19:41:37', 'admin', '2013-10-17 19:41:37', 'admin');
INSERT INTO `event_categories` VALUES (6, 'gamers', 1, 0, '2013-10-17 19:41:37', 'admin', '2013-10-17 19:41:37', 'admin');
INSERT INTO `event_categories` VALUES (7, 'pro-nights', 1, 0, '2013-10-17 19:41:37', 'admin', '2013-10-17 19:41:37', 'admin');
INSERT INTO `event_categories` VALUES (8, 'literary', 1, 0, '2013-10-17 19:41:37', 'admin', '2013-10-17 19:41:37', 'admin');

# --------------------------------------------------------

#
# Table structure for table `events`
#

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(50) NOT NULL,
  `event_category_id` int(2) NOT NULL,
  `about` text NOT NULL,
  `rules` text NOT NULL,
  `contacts` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `clink` varchar(150) NOT NULL,
  `isactive` int(1) NOT NULL DEFAULT '1',
  `isdeleted` int(1) NOT NULL DEFAULT '0',
  `added_on` datetime NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `event_name` (`event_name`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

#
# Dumping data for table `events`
#

INSERT INTO `events` VALUES (1, 'Karaoke', 2, '', '', 'Music Society', '2014-09-19 16:00:00', '2014-09-19 16:00:00', '', 1, 0, '2014-09-12 20:17:47', 'root', '2014-09-19 04:33:01', 'root');
INSERT INTO `events` VALUES (2, 'Melodiux', 2, '"There"s music in the sighing of a reed; There"s music in the gushing of a rill; There"s music in all things, if men had ears: Their earth is but an echo of the spheres. " Music is love in search of a word .There is nothing in the world so much like prayer as music is. Its the only thing that can make snivel without vindication. Virtuosi presents the musical challenge Melodieux, the rhythmic war of excellence. We are here to unravel the likes of Latas, Sunidhis, Kks, Sonus, Atifs and Kishores. It expresses feelings and thought, without language, it was below and before speech, and it is above and beyond all words.Similar feelings spontaneously flows through populace in IIIT-A at the MELODIEUX. The singers storm troops the audience with their euphonious voice while the Duet asphyxiates the remaining . With a bountiful over enthusiastic participation of many highly proficient vocalists, the event easily becomes an inexplicable call.', '1.	Team Size = Minimum 1 and maximum of 3 participants. One vocalist is a must. \r\n2.	One participant can participate only once within the same event. \r\n3.	There will only be one and final round. \r\n4.	Orchestra will be provided \r\n5.	Time limit: 3 minutes. Marks will be deducted in case time limit exceeds. Maximum of 1 antara is allowed of the song. \r\n6.	The decision of the judges and the coordinators shall be final and binding in all cases. \r\nJudgement Criteria: \r\n1. Vocal abilities & vocal range of the singer. \r\n2. Co-ordination and innovation.', 'Music Society', '2014-10-18 13:00:00', '2014-10-18 16:00:00', '', 1, 0, '2014-09-12 20:29:02', 'root', '2014-09-12 23:35:46', 'root');
INSERT INTO `events` VALUES (3, 'Bollywood Tambola', 2, 'This is Tambola revamped, replete with the music, masti\r\nand melodrama. This is one for the bollywood fans.', 'To be provided on spot', 'Amrita Singh - 7752956106\r\nNikita Agarwal - 8006964671\r\nNavratna Sharma - 8090297505\r\nSanjeev S - 8687896571', '2014-10-19 13:00:00', '2014-10-19 16:00:00', '', 1, 0, '2014-09-12 20:29:31', 'root', '2014-09-19 04:07:51', 'root');
INSERT INTO `events` VALUES (4, 'Unplugged', 2, 'Tone down the distortion, let the unadulterated melody of the strings take control in this Western Acoustic event. No technical snags, no loud sounds . Just pull the plug and find yourself in solace with the melody of the rhythm. We ensure that you will be unplugged from the rest of the world by the magic of sur, raaga and dhun.', '1.	One participant can participate only once in the same event. \r\n2.	There will only be one and final round. \r\n3.	Unplugged instruments like flute, acoustic guitar, harmonica, table etc. should be used. \r\n4.	Time limit: 3 minutes. Marks will be deducted in case time limit exceeds. Maximum of 1 antara is allowed of the song. \r\n5.	The decision of the judges and the coordinators shall be final and binding in all cases. \r\nJudgement Criteria: \r\n1. Vocal abilities & vocal range of the singer. \r\n2. Co-ordination and innovation.', 'Music Society', '2014-10-19 15:00:00', '2014-10-19 17:00:00', '', 1, 0, '2014-09-12 20:30:21', 'root', '2014-09-19 04:27:27', 'root');
INSERT INTO `events` VALUES (5, 'Antakshari', 2, '"Music speaks what cannot be expressed, soothes the mind and gives it rest, heals the heart and make it whole, flows from heaven to the soul!" Virtuosi presents the most enthralling and lively event of IIITA, ANTAKSHARI. For those who never sing, but die with all their music in them, this is the right chance to show their never ending love for music. "Music is your own experience, your thoughts, your wisdom!" Just live it to the fullest! "With no fear, just lose yourself and go into the deep ocean of melodies!"', 'Rules will be provided soon.', 'Music Society', '2014-10-17 11:00:00', '2014-10-17 16:00:00', '', 1, 0, '2014-09-12 20:30:45', 'root', '2014-09-12 23:02:47', 'root');
INSERT INTO `events` VALUES (6, 'Psychedelia', 2, 'Great music is that which penetrates the ear with ease and leaves the memory with difficulty. But magical music is one which never leaves the memory ,for it becomes a part of it. So all those whose think are whip lashed by some distant storm, finally get a chance to unlax them and enjoy the enthralling PSYCHEDELIA. "When we hear music, we fear no danger, we are invulnerable. we see no foe and feel no pain. The beauty around becomes a part of us." All this feels true as the participants create an aura of mystic notes and octaves. Just as a painter paints an entire picture with a few colours , our singers create an entire melody out of just seven notes. They teach us that music is a moral law, which give soul to our universe, wings to the mind and life to Effervescence. It is an event where participants can perform freely as there is no pressure of judgement.', 'Its a non competitive event', 'Music Society', '2014-10-17 21:00:00', '2014-10-17 21:00:00', '', 1, 0, '2014-09-12 20:31:02', 'root', '2014-09-12 23:13:48', 'root');
INSERT INTO `events` VALUES (7, 'Incendiary', 7, 'Rock is musical freedom. It"s saying, doing and playing what you want. In Webster"s terms, "nirvana" means freedom from pain, suffering and the external world, and that"s pretty close to my definition of Rock. For all the rock lovers, Virtuosi organises "Incendiary-the rock night".The bands set the the stage on fire as the crowd witnesses the clash of the gladiators to establish their supremacy in rock music and entertain the crowd as well. The crazy rock lovers bang their heads as the music drives them closer. Calling it only a head-bangers or even a rockers haven would be an understatement', '', 'Music Society', '2014-10-18 22:00:00', '2014-10-18 16:00:00', '', 1, 0, '2014-09-12 20:31:13', 'root', '2014-09-12 23:40:58', 'root');
INSERT INTO `events` VALUES (8, 'Innovation', 2, 'Innovation is the main stage dramatics event held during Effervescence.', '1. Each team should have a minimum of 6 members and cannot exceed 20. \r\n2. The maximum performance time is 25 minutes \'curtain to curtain\' and minimum of 12 minutes. \r\n3. Team is free to choose the theme on its own. \r\n4. The drama can be bilingual. Usage of both English and Hindi is allowed. \r\n5. Negative marks will be awarded for both, exceeding time limit, and not completing the minimum time. \r\n6. Teams can be subjected to negative marking on issues like use of abusive language, vulgarity etc. in the play. \r\n7. Teams must bring all the costumes and props with them as the organizers will not provide anything. Only a few chairs and tables for stage setting may be provided. \r\n8.The background music and lighting is allowed and a system for the same is provided by the organizers. \r\n9. On the spot registrations (at least 4 hours prior to event ) are allowed but online registrations are advisable. \r\n10. Any miscellaneous last minute demands to the organizers should be made 48 Hours prior to the performance, any demands after that will not be entertained. \r\n\r\nJUDGING CRITERIA \r\n1. Performance in acting(dialogue delivery, expressions, body movements)-50% \r\n2. Presentation encompassing costumes, music, props, use of stage etc. - 20% \r\n3. Successfully depicting the plot or theme - 20% \r\n4. Marks for originality - 10%', '', '1969-12-31 16:00:00', '1969-12-31 16:00:00', '', 1, 0, '2014-09-12 20:36:51', 'root', '2014-09-12 21:03:12', 'root');
INSERT INTO `events` VALUES (9, 'Director\'s Cut', 2, 'Ever dreamt of being part of movies like Three Idiots, Rang De Basanti , The Social Network, Inception etc ? Ever dreamt of grabbing an Oscar by making documentary like "Smile Pinky" ???? Ever daydreamt of rocking the world with your style of direction? No doubt, the answer is certainly yes. This time in Effervescence "Rangtarangini" The Dramatics club and "Thunderbolt" Audio, light and camera Club has brought a golden opportunity for you to make your dreams come true. Make a short movie or documentary of any kind viz. comedy, spoof, inspirational, journey, corporate (business) related etc . Bring up your creative skills and spellbind the viewers.', '1.Make a short movie or documentary of any kind viz. comedy, spoof, inspirational, journey, corporate (business) related etc . \r\n2.The top 3 movies will win prizes and will be shown on the silver screen .We do not provide camera and any other technical resources, \r\n3.There should not be any controversial issues involved in the script. The length of the movie should be at least 10-15 minutes . \r\n4.From all the entries we will receive, three best movies will be selected to show on silver screen and will be awarded by certificates and with exciting prizes. All the entries should be reached with us before 22th of October (10:00 PM).\r\n\r\nJudging Criteria \r\nMovie will be judged on the basis of: \r\n1. Title of the movie(5%) \r\n2. Script(20%) \r\n3. Acting(25%) \r\n4. Direction(20%) \r\n5. Editing(15%) \r\n6. Technical effects(15%)', 'Dramatics Society', '2014-10-19 11:00:00', '2014-10-19 11:00:00', '', 1, 0, '2014-09-12 20:37:05', 'root', '2014-09-19 03:52:30', 'root');
INSERT INTO `events` VALUES (10, 'Double Trouble', 2, 'This is an event to discover the most talented duo in the fest. There will be couplet participation. The objective of this event is to find the imagination, creativity, and flexible ways of thinking among the participants. The reason of forming couplet at the time is to find their adaptability among them. The event consists of various rounds which include the activities like spoofing, dramatic activities, questionarre. By short listing, the couplet in different rounds will be selected.', '1. Bring a pen along with you \r\n2. Register in a pair \r\n3. Teams can be subjected to negative marking on issues like use of abusive language, vulgarity etc. in the play.', 'Dramatics Society', '2014-10-19 14:00:00', '2014-10-19 16:00:00', '', 1, 0, '2014-09-12 20:51:24', 'root', '2014-09-19 04:25:54', 'root');
INSERT INTO `events` VALUES (11, 'Bindaas Bol', 2, 'A variation of Nukkad Natak(Street Play), Bindas Bol features outspoken acts. The participants are given complete freedom over the subject of their play in this informal event. The champions of Bindass Bol are awarded with lucrative gifts.', '1. Each team should have a minimum of 6 members and cannot exceed 15. \r\n2. The maximum performance time is 20 minute and minimum of 12 minutes \r\n3. Team is free to choose the theme on its own. \r\n4. Teams must bring all the costumes and props with them as the organizers will not provide anything. Only a few chairs and tables for stage setting may be provided. \r\n5. Teams can be subjected to negative marking on issues like use of abusive language, vulgarity etc. in the play. \r\n6. The drama can be bilingual. Usage of both English and Hindi is allowed. \r\n7. On the spot registrations are allowed but online Registrations are advisable. \r\n\r\nJUDGING CRITERIA \r\n1. Performance in acting(dialogue delivery, expressions, body movements)-40% \r\n2. Presentation encompassing costumes, music, props, use of stage etc. - 10% \r\n3. Successfully depicting the plot or theme - 20% \r\n4. Marks for audience response is 30%', 'Dramatics Society', '2014-10-19 14:30:00', '2014-10-19 16:00:00', '', 1, 0, '2014-09-12 20:55:23', 'root', '2014-09-19 04:26:49', 'root');
INSERT INTO `events` VALUES (12, 'Tongues on Fire', 2, 'It is an informal event organised by club rangtarangini to bring out the real leg pulling ability of people out in front of their opponents. People enjoy pulling anyone off his grip, then this event would feed with plenty of solace along with the gifts as a byproduct. In Tongues on fire leg pulling your friends can fetch attractive prizes. Students participate in a group of 4 persons. Registration will be done on the spot. \r\nJudging Criteria: Team performance and audience response will used to judge the teams.', '1. Each team should have 4 members. \r\n2. The time allotted will be 10 minutes \r\n3. Teams competing will be given a topic. \r\n4. Teams can be subjected to negative marking on issues like use of abusive language, vulgarity etc. in the argument. \r\n5. Usage of both English and Hindi is allowed. \r\n6. One on one chance will be provided to two teams to freely argue on the topic at a time. \r\n7. On the spot registrations are allowed but online Registrations are advisable.', 'Dramatics Society', '2014-10-18 15:00:00', '2014-10-18 20:00:00', '', 1, 0, '2014-09-12 20:56:53', 'root', '2014-09-12 23:38:29', 'root');
INSERT INTO `events` VALUES (13, 'Kahaani', 2, 'It is a script writing event organised by the club to bring into action the writer behind every student. They will have an opportunity to showcase their ability by writing a script that depicts their real talents. Submissions of scripts will me made online. Best 3 scripts will be awarded with prizes.', '1. All the participants have to write a short script for a play as their entry \r\n2. Each scene should be explained properly in the script. \r\n3. Proper characterization should be done. \r\n4. Theme of the script should be made clear. \r\n\r\nJudging Criteria :- \r\nPopularity vote- 50% \r\nExpert panel- 50%', '', '1969-12-31 16:00:00', '1969-12-31 16:00:00', '', 1, 0, '2014-09-12 21:03:25', 'root', '2014-09-12 21:05:42', 'root');
INSERT INTO `events` VALUES (14, 'Street Play', 2, 'Street theatre is a form of theatrical performance and presentation in outdoor public spaces without a specific paying audience. These spaces can be anywhere, including shopping centres, car parks, recreational reserves and street corners. ..', '', '', '1969-12-31 16:00:00', '1969-12-31 16:00:00', '', 1, 0, '2014-09-12 21:05:59', 'root', '2014-09-12 21:06:51', 'root');
INSERT INTO `events` VALUES (15, 'La Frenze', 2, 'The duet dance competition is one of the most electrifying and enthralling event of the dance club.', '1. The entries in this contest will comprise of two partners: Either boy-boy, girl-girl or boy-girl. \r\n2. Time limit is 2.5 - 4 minutes (strictly). \r\n3. This will comprise of a single round so perform your best !! \r\n\r\n\r\nJudging Criteria: Choreography, Chemistry, Expressions, Stage Usage, Audience Response.\r\n\r\n\r\nPoints to be noted: \r\n1) Participants should report to the DANCE ROOM by 11 a.m on the day of the event. They should bring their edited music along with them in a pen drive.\r\n2) Auditions will be taken before the actual event to shortlist the candidates. No space for practice will be provided. So candidates have to be prepared beforehand.', 'Dance Society', '2014-10-17 16:00:00', '2014-10-17 16:00:00', '', 1, 0, '2014-09-12 21:07:57', 'root', '2014-09-12 23:12:10', 'root');
INSERT INTO `events` VALUES (16, 'Street Dance', 2, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 1, 0, '2014-09-12 21:09:24', 'root', '0000-00-00 00:00:00', '');
INSERT INTO `events` VALUES (17, 'Carpe Diem', 2, 'It is the solo dance competition where the participants set the stage on fire.', '1) HEAT ROUND: This is an elimination round in which each participant will be allowed to give a performance for 2-3.5 minutes (strictly).This performance would be the one prepared by the contestant. After this round, the selected participants will perform in the next round ( Impromptu Round ).\r\n2) IMPROMTU ROUND: The qualifying participants will be judged on their performance on the song (and prop) allotted beforehand by us. This round is based totally on innovation. The participants will have to perform for 60 seconds. Judging Criteria - Choreography, Costumes, Expressions, Stage Usage, Audience Response. Points to be noted: 1) Participants should report to the DANCE ROOM by 11 a.m on the day of the event. They should bring their edited music along with them in a pen drive.\r\n2) Auditions will be taken before the actual event to shortlist the candidates. No space for practice will be provided. So candidates have to be prepared beforehand.', '', '1969-12-31 16:00:00', '1969-12-31 16:00:00', '', 1, 0, '2014-09-12 21:13:47', 'root', '2014-09-12 21:14:27', 'root');
INSERT INTO `events` VALUES (18, 'Footloose', 2, 'The spectacular GROUP dance competition of the Dance Club to test your synchronization and dancing skills.', '\r\n1. The time limit is 7-10 minutes. \r\n2. The team shall consist of 8-20 members. \r\n\r\nJudging criteria: Choreography, Props, Formations, Expressions, Synchronization, Stage Usage, and Audience Response. Any indecency in the steps or usage of harmful props will lead to disqualification of the group. \r\n\r\nPoints to be noted:\r\n1) Participants should report to the DANCE ROOM by 11 a.m on the day of the event. They should bring their edited music along with them in a pen drive.', '', '1969-12-31 16:00:00', '1969-12-31 16:00:00', '', 1, 0, '2014-09-12 21:15:35', 'root', '2014-09-12 21:16:14', 'root');
INSERT INTO `events` VALUES (19, 'Cognoscentia', 8, 'One of the most awaited events, the brain wreaking quiz contest witnesses participation from some of the best quizzers of the nation, bringing out the best of brains and most aware minds. The oldest event of the college this one\'s not for the weak of heart, unleash the little devil inside of you, and rid yourself of all your virtues, as you are quizzed about everything you were never supposed to know.', 'Rules and regulations : \r\nParticipation should be in teams of 3.\r\nA written screening round will precede the finals for which 10 teams will qualify.\r\nUse of unfair means is strictly prohibited.\r\nThe decision of the quizmaster shall be final in all regards.', 'Literary Society', '2014-10-19 13:00:00', '2014-10-19 16:00:00', '', 1, 0, '2014-09-12 21:16:50', 'root', '2014-09-19 04:23:14', 'root');
INSERT INTO `events` VALUES (20, 'Feathers', 8, 'They say a pen is mightier than a sword. Well, the truth is, a pen is even mightier than a freaking bazooka. But, what if you can it make sense of anything? What if the entire universe conspires against you and the time runs out? What if you fail? Get your think tanks brimming this September, as you face one of the toughest platforms of creative writing. The innovative writing contest is sure to unlock the hidden Shakespeare and Keats in you.', 'Rules and regulations \r\n1) Plagiarism is strictly prohibited. \r\n2) The given word limit should not be exceeded. \r\n3) Decision of the judges shall be final in all regards. ', 'Literary Club', '2014-10-17 16:00:00', '2014-10-17 16:00:00', '', 1, 0, '2014-09-12 21:18:37', 'root', '2014-09-12 23:04:20', 'root');
INSERT INTO `events` VALUES (22, 'Trash Talk', 8, 'As rightly said by albert einstein LOGIC WILL GET YOU FROM A TO Z BUT IMAGINATION WILL GET YOU EVERYWHERE.... So here is an event to examine the heights of your imagination.well, exploring something obvious is quite easy, but exhibiting illogical fact is not a cup of tea for everyone.so are you ready to sweep in the world which is full of incoherent conceptions..if yes then this event would take you to the arena where you will find unlimited fun and entertainment. this event is full of hyerbole, pun etc. which touches the humourous spirit. here you would not only represent the unreasonable conclusions but would also support your trash against an opponent. so friends dont miss this event to split your sides in laughter.', 'Rules and Regulations: \r\n1. Decision of the Judges will be final in all respects. \r\n2. Profanity will not be accepted. ', 'Literary Society', '2014-10-19 11:00:00', '2014-10-19 14:00:00', '', 1, 0, '2014-09-12 21:21:03', 'root', '2014-09-19 03:51:41', 'root');
INSERT INTO `events` VALUES (23, 'Dumb Charades', 8, 'Everything is petty in front of the feeling which you get when you get your act right. Jazz up your acting skills in what promises to be a unique DumbCharades. This event not only tests one\'s theatre-knowledge and acting skills but also presence of mind and spontaneity.', 'Rules and Regulations: \r\n1)	Decision of Judges will be final in all respects. \r\n2)	Vulgarity will not be accepted. ', '', '1969-12-31 16:00:00', '1969-12-31 16:00:00', '', 1, 0, '2014-09-12 21:22:06', 'root', '2014-09-12 21:22:46', 'root');
INSERT INTO `events` VALUES (24, 'M.U.N', 8, 'Model United Nations is a conference in which students participate as delegates to various UN committees.', '', 'Literary Society', '2014-10-17 09:00:00', '2014-10-18 10:00:00', '', 1, 0, '2014-09-12 21:23:04', 'root', '2014-09-12 22:50:59', 'root');
INSERT INTO `events` VALUES (25, 'A la Mode', 7, 'They say " If you\'re tired of fashion , you\'re tired of life ". Fashion encompasses the total spectrum of human activity. Being prime platform to scour for the best uprising talent , A\'la mode is back with bigger and better stakes. A\'la mode is your chance to set the stage on fire with your elegance , compassion and professionalism. If you are a total fashion freak , come lead the trend with your creativity and moves in front of huge exciting audience. The title of A\'la Mode awaits you !!!!', '1. A\'la mode is open for college students only. \r\n2.Team size not more than 14 memebers. \r\n3.Team memebers must bring Id-Cards of the current year. \r\n4.Teams have to come prepared with their design on a common theme. \r\n5.Teams are suugested to bring the soundtrack to be used in their performances and give it to the organisers before the event. \r\n6.Teams are suggested to show their performances to the organisers prior to the main event. \r\n7.The decision of the organisers will be final in case of any disputes.', 'Abhishek Thakur - 8172823322\r\nPooja Singh - 7275338988', '2014-10-18 20:00:00', '2014-10-18 22:00:00', '', 1, 0, '2014-09-12 21:23:42', 'root', '2014-09-12 23:40:08', 'root');
INSERT INTO `events` VALUES (26, 'Game of Thrones Quiz', 3, '', '', 'Pawan Burnwal - 8115580400\r\nShubham Bhendarkar - 8756030863', '2014-10-18 00:00:00', '2014-10-18 00:00:00', '', 1, 0, '2014-09-12 21:25:47', 'root', '2014-09-12 23:33:35', 'root');
INSERT INTO `events` VALUES (27, 'Friends Quiz', 3, '', '', 'Gurkirat Singh Mohain - 8115606848\r\nArmaan Jain - 9695710826', '2014-10-18 00:00:00', '2014-10-18 00:00:00', '', 1, 0, '2014-09-12 21:26:03', 'root', '2014-09-12 23:32:40', 'root');
INSERT INTO `events` VALUES (28, 'Street Soccer', 3, 'Inspired by the unbelievable trickery of today\'s skillful footballers, this one of its kind event is being staged at IIIT-A for the first time ever.', '1. Every team must have 6 members. \r\n2. 5 players(1 goalkeeper) will play and 1 player as a substitute. \r\n3. Total 2 substitutions are allowed., i.e the same player substituted earlier can go back in again. \r\n4. Goal will be of knee height. \r\n5. Penalty will be awarded to a team if the opponent team has kicked the ball 3 times out of the court. \r\n6. There will be two halves of 13 minutes each with a break in b/w. \r\n7. Referee\'s decision will be considered as final decision. Any argument or any misconduct may lead to disqualification of the team. \r\n8. Any change in the rules will be detailed at the venue.', 'Ankur Rao - 8052943469\r\nSubham Sharma - 9554708767', '2014-10-17 14:00:00', '2014-10-17 17:00:00', '', 1, 0, '2014-09-12 21:26:14', 'root', '2014-09-12 23:10:38', 'root');
INSERT INTO `events` VALUES (29, 'Basketball', 3, '', '', 'Subham Nanda - 8176026012\r\nShubham Prasad - 9807007874\r\nVartul Sharma - 8953822938', '2014-10-18 14:00:00', '2014-10-18 20:00:00', '', 1, 0, '2014-09-12 21:27:13', 'root', '2014-09-12 23:37:19', 'root');
INSERT INTO `events` VALUES (30, 'Treasure Hunt', 3, '"You\'ll see some rhyme, And you will see some reason. Treasure Hunt is the game to play, As fun is the season. So join the search, there is nothing to lose. Hidden inside, you will find the clues." so BOOT UP for the hunt to treasure and win a grand prize at the end.', 'They will be provided to you on the spot.', 'Yash Prakash - 8174069407\r\nBharat Bharadwaj - 9161572100\r\nNidhi Mishra - 8005331106\r\nAvni Chouksey\r\nAgrim Khanna - 7704914088', '2014-10-16 18:00:00', '2014-10-16 22:00:00', '', 1, 0, '2014-09-12 21:27:44', 'root', '2014-09-12 22:49:40', 'root');
INSERT INTO `events` VALUES (31, 'Arm Wrestling', 3, '', '1. A false start is a foul. \r\n2. The competitors shoulder cannot go past the centre of the table. \r\n3. You will forfeit the match with your third foul. \r\n4. You may not, at any time, touch your body to your hand. \r\n5. If a competitor touches his body to his hand there will be a restart and a foul given. \r\n6. If a competitor touches his body to his hand and stops the momentum of his opponent there will be a restart and a foul given. \r\n7. If a competitor intentionally opens his-her hand and a slip occurs the referee will restart the match and a foul will be given. \r\n8. The referee has the option to give a disciplinary foul to the competitor for any un-sports person like conduct. \r\n9. You must start with at least one foot on the ground. After the "go" you may have both feet off the ground. \r\n10. Never stop competing until the referee grabs the hands in the center signifying the end of the match. \r\n11. The equal pressure rule follows the line of least resistance, both competitors must agree on the pressure applied before the start. \r\n12. The competitors will always conduct themselves in a sportsperson like manner while at the tournament. \r\n13. To make a winning pin you must touch your opponent to the touch pad. \r\n14. ALL REFEREE DECISIONS ARE FINAL.', 'Yogesh Charak - 8563900609\r\nShubham Nanda - 8176026012', '2014-10-19 16:00:00', '2014-10-19 16:00:00', '', 1, 0, '2014-09-12 21:30:18', 'root', '2014-09-19 04:28:56', 'root');
INSERT INTO `events` VALUES (32, 'Chinatown', 3, 'Raise the stakes, put on your pokerface and set the scene for an unforgettable casino experience.\r\nSo be ready and gamble to galore.\r\nEveryone is invited. In case if you don\'t know how to play, we will be happy to make u learn that.', 'Basic poker rules will be followed.\r\nParticipants are needed to register themselves at the registration desk, before playing. \r\nAll other details will be provided at the venue, during the event.', 'Disha Srivastav - 9795225079\r\nVivek Agarwal ', '2014-10-18 13:00:00', '2014-10-18 16:00:00', '', 1, 0, '2014-09-12 21:31:27', 'root', '2014-09-12 23:35:03', 'root');
INSERT INTO `events` VALUES (33, 'Anime Quiz', 3, 'Anime Quiz will be rolling soon. All Naruto, One Piece and DBZ fans , get going and be ready to live up your fantasy and prove that you are the biggest Fan.. !! "Dattebayo" !!', '1) Participation should be in team of 2 \r\n2) Participants are required to bring a pen \r\n3) Registrations will be onsite on the registration desk.', 'Anurag Sharma - 7704914402\r\nBaishali Saha - 8176025969\r\nPrashant Kapoor - 8176027475', '2014-10-17 16:00:00', '2014-10-17 16:00:00', '', 1, 0, '2014-09-12 21:32:45', 'root', '2014-09-12 23:19:57', 'root');
INSERT INTO `events` VALUES (34, 'Collage', 3, 'A collage is a work of formal art made from an assemblage of different forms, thus creating a new whole. It is just like putting together the pieces of the jigsaw puzzle to compose a whole new picture. Newspaper clippings, ribbons, bits of colored or hand-made papers or, photographs are glued together to design an incredible piece of art. Give wings to your imagination and let the diverse art-forms coalesce to give expression to the manifold thoughts whirring in your mind.', 'They will be provided to you on the spot.', '', '1969-12-31 16:00:00', '1969-12-31 16:00:00', '', 1, 0, '2014-09-12 21:34:06', 'root', '2014-09-12 21:34:45', 'root');
INSERT INTO `events` VALUES (35, 'Gully Cricket', 3, 'Street cricket or gully cricket is a stripped-down version of the international sport of cricket.', '1.Every team must have 6 members. \r\n2.There will be 5 over matches . \r\n3.3 consecutive beats will be considered as OUT. \r\n4.If the ball hits boundaries without taking a tip on the ground will be considered as OUT. \r\n5.NO BALLS and WIDE balls will be considered as Extras. \r\n6.There will be no run for byes. \r\n7.The height of the ball should be below chest. \r\n8.Postively four of your players should be bowling(atleast one over each). \r\n9.Umpire?s decision will be considered as last decision. \r\n10.Rest other rules for scorings and run will be detailed at the venue.', 'Niketan Rane - 7668984092\r\nEkansh Katiyar - 8303789301', '2014-10-17 10:00:00', '2014-10-17 15:00:00', '', 1, 0, '2014-09-12 21:35:03', 'root', '2014-09-12 22:52:17', 'root');
INSERT INTO `events` VALUES (36, 'Blind Date', 3, 'Ever dared of thinking that you can challenge the much cliched love story of romeo n juliet,adam n eve,Heer n Ranjha and get your name registered in the lineage like beep n beep(no offence it just shows you and your lady love). Bring out the cupid inside and unveil your lurking romance to your date on a date with "Blind Date".', 'Rules will be given on the spot.', 'Adrish Banerjee - 9616946535\r\nSneha Jha - 8957917523\r\nAbhishek Menon - 7752965396', '2014-10-17 13:00:00', '2014-10-17 13:00:00', '', 1, 0, '2014-09-12 21:36:15', 'root', '2014-09-12 23:07:43', 'root');
INSERT INTO `events` VALUES (37, 'Roadies', 3, 'A remake of the popular T.V. show, Roadies is not where you\'ll score brownie points if you just sing or dance. It is not some talent hunt contest where a shimmy-shake or a dance move or two will help you win. We are not looking for some gifted idols here. This is a battle that will test your brawn and wits until there are none left. This is where you have to leave your \'I\'m so cool\' attitude at home. The journey is full of arduous and earlier unimaginable tasks and if you\'ve already accepted defeat and thinking of calling it quits, why don\'t you send your enemies instead? We\'ll get the dirty job done for you!!! So if you think you\'ve got the guts to survive in this game of naked ambition that requires courage and a never-say-die spirit then what are you waiting for??? Come and be a part of IIIT-A Roadies and experience the \'real\' thing!!!', 'They will be provided to you on the spot.', 'Nipun Manocha - 9999452588\r\nShreyas - 9670769663', '2014-10-17 10:00:00', '2014-10-18 10:00:00', '', 1, 0, '2014-09-12 21:37:17', 'root', '2014-09-12 22:54:53', 'root');
INSERT INTO `events` VALUES (38, 'Tattoo Painting', 3, 'Forget the paper and poster board - use your own body as the backdrop for colourful creations. You can make anything - be it a quaint flower or a butterfly on a shoulder or a venomous snake, a formidable dragon on a cheek, arm or leg. With the paint in the palette and your body as the canvas let the brush conjure up magnificent shapes and designs. Blend together various shades and tints to paint magic on yourself.', 'They will be provided to you on the spot.', 'Fine Arts Society', '2014-10-18 12:00:00', '2014-10-18 16:00:00', '', 1, 0, '2014-09-12 21:39:14', 'root', '2014-09-12 23:21:36', 'root');
INSERT INTO `events` VALUES (39, 'Tug of War', 3, 'Tug of war, also known as tug war, rope war, rope pulling, or tugging war, is a sport that directly pits two teams against each other in a test of strength. The event will be separate for both boys and girls. So both can register.', '1.There should be 6 players in a group. \r\n2.The rope must go under the arms; actions such as pulling the rope over the shoulders may be considered a foul. \r\n3.Team member sitting or falling down during pull will be considered as foul. \r\n4.Lowering ones elbow below the knee during a \'pull\' - known as \'Locking\' - is a foul, as is touching the ground for extended periods of time. \r\n5.In case of faul by a player that player shall be eleminated for the game,and the team will have to play without that player. \r\n6.Rest of the information will be provided on the spot.', 'Rajat Gupta - 8273197826\r\nKumar Snyam - 8953322927\r\nArpit Goel - 7379953342', '2014-10-19 13:00:00', '2014-10-19 16:00:00', '', 1, 0, '2014-09-12 21:40:50', 'root', '2014-09-19 04:25:01', 'root');
INSERT INTO `events` VALUES (40, 'Perplexuz', 4, 'Ever got inspired by Robert Langdon unlocking mysteries at each step to reach his ultimate goal of mankind discovery? Ever yearned to be Benjamin Franklin Gates and study the clues of national history leading to the hidden treasure of the ages? Ever thought you stand in the league of those extra-ordinary men who could change the world with their knowledge and wit? Ever thought Google is the most powerful tool and nothing can escape it\'s powerful expanse of solutions to every problem? If you nodded yes for the above questions, you have landed the perfect place. Here\'s your golden chance to prove your adroitness !!', '-	To participate in the event, you need to register first as an individual and like the page of the event(https://www.facebook.com/purplexuz).\r\n-	For each level, analyse the image and figure out the respective answer that will grant you the access to the next level.\r\n-	The levels in the event will be cleared sequentially.\r\n-	Clues for each level would be updated at regular intervals on the facebook page.(https://www.facebook.com/purplexuz)\r\n-	The answers have to be in small case with no spaces in between eg- "thisistheanswer". Numerals and Special Characters would not be present eg- if the answer is "2" then you have to write "two" in the box.\r\n-	The levels can be discussed at the facebook page of perplexuz. Please do not put spoilers or answers in the page. Anybody found doing so will automatically be disqualified.\r\n-	As the difficulty level increase, so does our reluctance to give out obvious clues. We also promise to make a conscious effort to mislead you.\r\n-	Last but not the least, for any queries regarding the hunt or registeration, feel free to contact The Team.', 'Nitin Verma\r\nDevansh Sharma\r\nAgam gupta', '2014-10-17 16:00:00', '2014-10-17 16:00:00', '', 1, 0, '2014-09-12 21:41:51', 'root', '2014-09-12 23:15:11', 'root');
INSERT INTO `events` VALUES (41, 'Konqueror', 4, 'We present before you a mind boggling game of Online Treasure Hunt. Get aboard and join us in a thrilling and crazy trail through the interwoven world of internet to search for the hidden and yet-so-obvious clues across the world wide web that lead to the ultimate treasure.. So common all pirates, put on your thinking cap, get your brain in gear, and set your train of thought in motion down the tracks..!!', '1. The duration is of 18 Hours. \r\n2. Registration is mandatory. \r\n3. Each correct answer carries 5 marks. \r\n4. There is no negative marking so "Keep Guessing" \r\n5. Every clue will lead you to a website or some specific word on that website \r\n6. You will be taken to the next question only on correct answer for your present question. \r\n7. The final discretion lies with the organisers. \r\n8. The answers can be of more than one word (maximum four). If there are more than one words, write the answers without spaces between the words. \r\n9. In case of a site having different forms as per nation, the \r\nIndian version would be considered. ', 'Saptak Sengupta - 8953346034\r\nAniket Mukherjee - 9476224760\r\nAnkit Mund - 8181918083\r\nAnurag Das - 9807732664', '2014-10-17 16:00:00', '2014-10-17 16:00:00', '', 1, 0, '2014-09-12 21:43:16', 'root', '2014-09-12 23:17:14', 'root');
INSERT INTO `events` VALUES (42, 'Platzen', 4, 'This is an event of numbers and ciphers. You will be given an encrypted message and a key and a little bit of our support via hint of the problem. You have to figure out the original message.So get ready to enter into this cryptoworld soon.', '1) All participants need to register prior to the event beginning \r\n2) Any user found indulging in foul play will be disqualified immediately. \r\n3) To be eligible for winning prizes the user must be currently registered in a university. Non students are welcome to participate. \r\n4) Organizers decision shall be treated as final.', 'Chaitanya Agarwal\r\nVipul Jain\r\nShubham Yadav', '2014-10-18 16:00:00', '2014-10-18 16:00:00', '', 1, 0, '2014-09-12 21:44:07', 'root', '2014-09-12 23:42:26', 'root');
INSERT INTO `events` VALUES (43, 'Stegolica', 4, 'Steganography is the art and science of writing hidden messages in such a way that no-one, apart from the sender and intended recipient, suspects the existence of the message, a form of security through obscurity. Its advantage over cryptography is that messages do not attract attention to themselves.In computer terms,steganography has evolved into the practice of hiding a message within a larger one in such a way that others cannot discern the presence or contents of the hidden message. It has evolved into a digital strategy of hiding a file in some form of multimedia, such as an image, an audio file or even a video. So enter this digital fortress and get ready to traverse the labyrinthine world of ciphers and codes.', '1) This is not a team event. Only individual participation is allowed. \r\n2) Even will be of 6 hours duration. \r\n3) There will be total of around 10-15 questions. \r\n4) In case of any dispute decision of the organizers will be binding. ', 'Chaitanya Agarwal\r\nVipul Jain\r\nShubham Yadav', '2014-10-18 16:00:00', '2014-10-18 16:00:00', '', 1, 0, '2014-09-12 21:45:37', 'root', '2014-09-12 23:43:15', 'root');
INSERT INTO `events` VALUES (44, 'Ad-Mania', 5, 'Nothing is more efficient than creative advertising. Creative advertising is more memorable, longer lasting, works with less media spending, and builds a fan community...faster. ', '1.	TEAM MUST CONSIST OF 3 MEMBERS. \r\n2.	PARTICIPANTS MUST HAVE THEIR COLLEGE OR UNIVERSITY "I CARD". \r\n3.	ANY USE OF ELECTRONIC GADGETS IS STRICTLY PROHIBITED. \r\n4.	ANY REQUIRED GADGETS WILL BE PROVIDED.', 'Navratna Sharma - 8090297505\r\nShweta Mishra - 7668660145\r\nDivya Maheswari - 856595589\r\nAishwarya Jhalli - 8181835858', '2014-10-18 16:00:00', '2014-10-18 16:00:00', '', 1, 0, '2014-09-12 21:46:35', 'root', '2014-09-19 03:41:54', 'root');
INSERT INTO `events` VALUES (45, 'B Quiz', 5, 'Business is a game, played for fantastic stakes, and you\'re in competition with experts. If you want to win, you have to learn to be a master of the game. ', '1.	TEAM MUST CONSIST OF 2 MEMBERS. \r\n2.	PARTICIPANTS MUST HAVE THEIR COLLEGE OR UNIVERSITY "I CARD" . \r\n3.	ANY USE OF ELECTRONIC GADGETS ARE STRICTLY PROHIBITED. \r\n4.	ANY REQUIRED GADGETS WILL BE PROVIDED.', 'Jai Prakash Yanamadala - 9000876307\r\nyovan sethi - 8901156244\r\nAshish Mishra - 9935520697\r\nRavi Pandey - 8932070150', '2014-10-18 16:00:00', '2014-10-18 16:00:00', '', 1, 0, '2014-09-12 21:47:39', 'root', '2014-09-19 03:38:19', 'root');
INSERT INTO `events` VALUES (46, 'Intuizone', 5, 'When a management team with a reputation for brilliance tackles a business with a reputation for bad economics, it is the reputation of the business that remains intact. ', '1.	TEAM MUST CONSIST OF 2 MEMBERS. \r\n2.	PARTICIPANTS MUST HAVE THEIR COLLEGE OR UNIVERSITY "I CARD". \r\n3.	ANY USE OF ELECTRONIC GADGETS IS STRICTLY PROHIBITED. \r\n4.	ANY REQUIRED GADGETS WILL BE PROVIDED.', 'Adrish Banerjee - 9616946535\r\nNeha Pandey - 9721691813\r\nSarika Naidu - 9198600532\r\nPriyanaka Sahu - 9794418995', '2014-10-19 16:00:00', '2014-10-19 16:00:00', '', 1, 0, '2014-09-12 21:48:32', 'root', '2014-09-19 04:31:20', 'root');
INSERT INTO `events` VALUES (47, 'Ranneeti', 5, 'Any human can make things bigger, more complex, and more violent. It takes a touch of genius-and a lot of courage-to move in the opposite direction. ', '1.	TEAM MUST CONSIST OF 2 MEMBERS. \r\n2.	PARTICIPANTS MUST HAVE THEIR COLLEGE OR UNIVERSITY "I CARD" . \r\n3.	ANY USE OF ELECTRONIC GADGETS IS STRICTLY PROHIBITED. \r\n4.	ANY REQUIRED GADGETS WILL BE PROVIDED.', 'Tanuj Sharma - 8802647275\r\nAkanksha(MBA) - 8957386304\r\nSneha Pedakam - 8953388692\r\nVishnu KS - 95559386146', '2014-10-17 16:00:00', '2014-10-17 16:00:00', '', 1, 0, '2014-09-12 21:50:06', 'root', '2014-09-12 23:18:50', 'root');
INSERT INTO `events` VALUES (48, 'Fifa 14', 6, 'Play EA Sports - FIFA 14 in an event to prove yourself the best in online football gaming.', '- half time will be 10 minutes. \r\n- In case of tie, classic will be played followed by penalties. \r\n- Match won\'t be stopped once started except for substitutions and team management. \r\n- Substitutions can be made only during half time and 75th minute. \r\n\r\nQualifier round :\r\n\r\n- All players will be in only one elimination match. \r\n- Two randomly selected players will play against each other. \r\n- Qualifier round will continue until 4 players are left. \r\n\r\nSemi finals : \r\n- 4 players will be grouped in two groups. \r\n- Winners of the each group will play against each other in the finals.\r\n\r\nFinals \r\n- Match between the 2 finalists will decide the winner.', 'Amit Khushwaha', '2014-10-17 11:00:00', '2014-10-18 11:00:00', '', 1, 0, '2014-09-12 21:51:06', 'root', '2014-09-12 22:57:35', 'root');
INSERT INTO `events` VALUES (49, 'Counter Strike', 6, 'Counter Strike is a first-person shooter in which players join either the terrorist team, the counter-terrorist team, or become spectators. Each team attempts to complete their mission objective and/or eliminate the opposing team. Each round starts with the two teams spawning simultaneously. This is contest of the pro\'s to prove that they are the best at using the armor\'s to their limit.', '-> General Rules and Regulations:\r\n5 vs. 5 (Team Play, 5 players per team) \r\n-> Victory Condition: The first team to win 11 rounds is declared the winner.(16 rounds from Quater Finals onward ) \r\n-> Official Maps: De_Dust2, De_Inferno, De_Nuke, De_Train \r\n->There will be a toss to decide which map to play.Winner eliminates 2 maps and the opponent eliminates 1, remainder shall be played.There will be a knife round to decide the side(CT\\T).Map for knife round will be De_Dust2. \r\n->In the case of a tie after regulation, 6 extra rounds will be played. (3 rounds as Terrorists and 3 rounds as C ounter-Terrorists per team) In the case of a re-tie after 6 extra rounds as stated above, 6 more extra rounds will be played until the tie is broken.\r\nTie- breaker Start Money : $10000\r\nTie- breaker victory condition: The first team to score 4 rounds. \r\n-> The Server will record the process of the match. \r\n-> We may install third party program and/or join as an observer for tournament operations purposes, such as verifying match results or gathering match data. \r\n-> NO CFGs ARE ALLOWED TO BE EXECUTED.\r\n\r\n\r\n\r\nGeneral Game Setting:- \r\nRounds: 30 Rounds (Max rounds format): Each Team plays 15 rounds as Terrorists and 15 rounds as Counter-Terrorists \r\nRound Time: 1 minute 45 seconds. \r\nApproved Grenade Amounts Per Round: \r\na) Flashbangs: 2 \r\nb) Grenades: 1 \r\nc) Smoke Grenades: 1 \r\n\r\nApproved Launch Option Commands: \r\na) noforcemparms \r\nb) noforcemaccel \r\nc) noforcemspd \r\nd) freq *** \r\n\r\n-> Default skins must be used. \r\n-> Any other use of map or program bugs can result in a warning at the minimum or loss by default for the offending team after deliberation and decision by the board of referees at its sole discretion. \r\n\r\nTournament Server Setting:-> mp_autokick 0	mp_autocrosshair 0 mp_autoteambalance 0	mp_buytime 0.25 mp_consistency 1	mp_c4timer 37 mp_fadetoblack 1	mp_flashlight 1 mp_forcechasecam 2 mp_forcecamera 2 mp_footsteps 1	mp_freezetime 15 mp_friendlyfire 1	mp_hostagepenalty 0 mp_limitteams 10	mp_logecho 1 mp_logdetail 3	mp_logfile 1 mp_logmessages 1	mp_maxrounds 0 mp_playerid 1	mp_roundtime 1.75 mp_timelimit 0	mp_tkpunish 0 sv_aim 0	sv_airaccelerate 10 sv_airmove 1	sv_allowdownload 0 sv_allowupload 0	sv_alltalk 0 sv_cheats 0	sv_clienttrace 1 sv_clipmode 0	sv_friction 4 sv_gravity 800	sv_lan_rate 25000 sv_maxrate 5000	sv_maxspeed 320 sv_maxunlag 0.5 sv_maxupdaterate 101 sv_minupdaterate 101	sv_minrate 25000 sv_proxies 1	sv_send_logos 1 sv_send_resources 1	sv_stepsize 18 sv_stopspeed 75	sv_unlag 1 sv_voiceenable 1	sv_unlagsamples 1 sv_unlagpush 0	sys_ticrate 10000 allow_spectators 1	decalfrequency 60 edgefriction 2	host_framerate 0 log on	pausable 0 \r\n\r\nAllowed Setting Values for Client:- cl_updaterate 101	cl_cmdrate 101 rate 25000	m_filter 1/0 hud_fastswitch 1/0	zoom_sensitivity_ratio fps_max 101	cl_dynamiccrosshair 1/0 gamma 1/3	brightness 1/3 cl_minmodels 1/0	cl_shadows 1/0 \r\nFollowing Client Settings May Not Be Changed (Must use the default values) cl_weather mp_corpse_stay mp_decals max_shells max_smokepuffs fastsprites ex_interp 0.01 \r\n\r\nUnfair Practices Subject to Penalty:- \r\n- A player can only be on one team, meaning that you cannot play for two different clans in the competition. \r\n- Team members may communicate verbally if they are alive in the match or when all team members are dead. \r\n- The player is deemed dead when the screen is completely faded to black. If a bug occurs and the screen doesn\'t fade to black, the player is deemed dead three seconds after he/she has fallen. \r\n- Binding Duck to scroll wheel is offensive. \r\n- C4 must be installed at a viewable location. Installing C4 at a location where a boost is required is allowed.\r\n- Silent C4 installation is considered bug play.Such an offense may result in a warning or disqualification. \r\n- Any use of the flash bang bug will result in a -3 round score for the offending team. If the use of the bug is decided as unintentional, the game continues as normal. \r\n-Gay gun ( Krieg 550 commando and D3/AU-1 ) and Shield are not allowed.Use of these weapons results in -1 round score for the offending team. \r\n-Use of unfair but available scripts (e.g. silentrun, attack+use, centerview script, norecoil script, etc.) will have the offending team diqualified. \r\n- HLTV Proxy will join the game servers for Tournament Broadcast \r\n- To test for HLTV flash bugs, players must follow the directions of the server. \r\n\r\nIf disconnection occurs during a match:- \r\nIf all the players cannot play due to an unintended, unforeseen accident such as server stoppage, \r\n- Before the 3rd round starts: restart the match \r\n- After the 3rd round starts: Disconnected player must re-connect to the server. The round is continued unpausing, and if the disconnected player cannot connect to the server, all players must wait during the freeze time after the round until the disconnected player connects to the server. At this time, the match may continue by unpausing. (Not a restart) \r\n- If up to 3 of all players are unintentionally disconnected: The score for that round is discarded. The game is paused after the round during the freeze time, and all players wait until the disconnected players are connected to the server. When all players are connected, the match may continue by unpausing the game. \r\n- In the case of intentional disconnection, the server may decide to end the match with the offending team losing by forfeit. \r\n\r\nGeneral Information \r\n- Bring all the Gaming Accessories with you.', 'Mohit  Gupta', '2014-10-17 11:00:00', '2014-10-18 11:00:00', '', 1, 0, '2014-09-12 22:38:43', 'root', '2014-09-12 22:56:29', 'root');
INSERT INTO `events` VALUES (50, 'Dota 2', 6, 'Defense of the Ancients (DotA) is a multiplayer online battle arena mod for the video game Warcraft III: Reign of Chaos. The objective of the scenario is for each team to destroy the opponents\' Ancient, heavily guarded structures at opposing corners of the map.', 'General Instructions: Teams can bring their own gear (mouse, mouse pad, headphone, controllers) but they need to be verified by the referee. Referee will spectate the game and will be allowed to ignore or overrule any of the rules in order to make the competition as fair as possible.By attending the competition participants acknowledge without limitation to comply with the rules and regulations and with the decisions made by the referees. Every team accepts the official schedule of the competition and declares its ability to be available during these times . Use of cheat/hack by any team member will result in immediate disqualification of the team.\r\n\r\nRules: \r\n- Teams would consist of 5 members each. \r\n- Captain�s mode only. \r\n- A game is finished, when an Ancient Fortress is destroyed, when one team obviously forfeits, when the majority of a team leaves on purpose, or when the administration decides on it. Qualifier round : \r\n- All teams will be in only one elimination match. \r\n- Every team will play one game against one of the randomly selected team. \r\n- Qualifier round will continue until 4 teams are left. \r\nSemi finals :\r\n\r\n- 4 teams will be grouped in two groups. \r\n- Teams in same group will play 3 games, teams who win best of 3 in their groups will go to finals. Finals :\r\n\r\n- A best of 3 matchup will decide the winner.', 'Aman Verma - 9415130974', '2014-10-17 11:00:00', '2014-10-18 11:00:00', '', 1, 0, '2014-09-12 22:39:49', 'root', '2014-09-12 22:59:29', 'root');
INSERT INTO `events` VALUES (51, 'Split Second', 6, '"Street. Steer. Speed." -- Make this your motto and break all the limits. Be the best street racer and experience the \'Tokyo Drift\'. Take your beast to the finish line the fastest.', 'Common Rules for Competitive rounds, Semi-finals and Finals:\r\n1) Game Type: Race \r\n2) No. of Laps: 2 for competitive , 3 for semi-final & final. \r\n3) Courses: Courses will be given on the spot and will be selected from the list given below. \r\n4) Participants are allowed to bring their own laptops. \r\n\r\nDisconnection :\r\nIf a disconnection is deemed to be unintentional by the referee, the match will be restarted. If any player does not agree to a match restart, that player will lose by default.\r\n\r\nCompetitive Rounds :\r\nCompetition : All qualifying participants will compete in a "Race" mode in groups of 8. The first 2 players to complete 2 laps of the circuit course and cross the finish line will advance to the next round.\r\n\r\nSemi-Finals :\r\nCompetition : All qualifying participants will be divided in 2 groups. They will compete in 3 races. Top 2 participants from each group will advance to the finals.\r\nQualifying : The time clocked by each participant in each of the 3 races will be added and the 2 participants from each group having the least cumulative time will advance to the finals.\r\n\r\nFinals :\r\nCompetition : All qualifying participants will compete in 3 races.\r\nWinning a race : The winner of a race is the first player to complete 3 laps of the course and cross the finish line.\r\nWinning the tournament : Player having the least cumulative time of all the 3 races will be the "winner" of the tournament.', 'Ankush Raghuvanshi - 9936020422', '2014-10-17 11:00:00', '2014-10-18 11:00:00', '', 1, 0, '2014-09-12 22:41:17', 'root', '2014-09-12 23:01:22', 'root');
INSERT INTO `events` VALUES (52, 'Online Chess', 6, 'Chess is a two-player strategy board game played on a chessboard, a checkered gameboard with 64 squares arranged in an eight-by-eight grid. It is one of the world\'s most popular games, played by millions of people worldwide at home, in clubs, online, by correspondence, and in tournaments. Each player begins the game with 16 pieces: one king, one queen, two rooks, two knights, two bishops, and eight pawns. Each of the six piece types moves differently. Pieces are used to attack and capture the opponent\'s pieces, with the objective to \'checkmate\' the opponent\'s king by placing it under an inescapable threat of capture. In addition to checkmate, the game can be won by the voluntary resignation of the opponent, which typically occurs when too much material is lost, or if checkmate appears unavoidable. A game may also result in a draw in several ways, where neither player wins. The course of the game is divided into three phases: opening, middlegame, and endgame. Use your techniques to destroy the enemy, Bring yourself in the EFFERVESCENCE MM13 and Check mate all your competor\'s and wear the crown with Proud.', '\r\n1) It is not a team game. Only individual partition is allowed. \r\n2) The competition will consist of the following rounds: Round Duration 1st 10 minutes each player 2nd 10 minute each player 3rd 10 minutes while semi final and finals are played according to the availabilty of time, but there would be time limit decision will be taken by the organizer at that time. \r\n3) The player who uses his allotted time first will instantaneously lose the game and all the rules used are pre defined in the International games. \r\n4) A toss will decide the player who will start the game. \r\n5) Use of internet/ windows chess game is strictly prohibited. Player found doing so will be instantaneously disqualified. \r\n6) In case of a draw, a rematch will be there. If there is a draw in the second game too then the player who used less time combined in both the matches will win the game. In case of semi-finals and final three rematch will be there. \r\n7)All decisions of the organizers are final and participants are obliged to follow them.', '', '1969-12-31 16:00:00', '1969-12-31 16:00:00', '', 1, 0, '2014-09-12 22:42:13', 'root', '2014-09-12 22:42:58', 'root');

# --------------------------------------------------------

#
# Table structure for table `log_login_sessions`
#

CREATE TABLE `log_login_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `login_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

#
# Dumping data for table `log_login_sessions`
#

INSERT INTO `log_login_sessions` VALUES (1, 'root', '::1', NULL);
INSERT INTO `log_login_sessions` VALUES (2, 'root', '::1', '2014-09-12 22:31:11');
INSERT INTO `log_login_sessions` VALUES (3, 'saptak', '172.31.1.4', NULL);
INSERT INTO `log_login_sessions` VALUES (4, 'saptak', '172.31.1.4', NULL);
INSERT INTO `log_login_sessions` VALUES (5, 'saptak', '172.31.1.4', '2014-09-19 02:45:06');
INSERT INTO `log_login_sessions` VALUES (6, 'saptak', '172.31.1.4', '2014-09-19 03:12:48');
INSERT INTO `log_login_sessions` VALUES (7, 'saptak', '172.31.1.4', '2014-09-19 03:16:15');
INSERT INTO `log_login_sessions` VALUES (8, 'saptak', '172.31.1.4', '2014-09-19 03:29:34');
INSERT INTO `log_login_sessions` VALUES (9, 'iit2012171', '172.31.1.4', NULL);
INSERT INTO `log_login_sessions` VALUES (10, 'iit2012171', '172.31.1.4', '2014-09-19 11:26:48');
INSERT INTO `log_login_sessions` VALUES (11, 'iit2012171', '172.31.1.4', '2014-09-19 11:26:59');
INSERT INTO `log_login_sessions` VALUES (12, 'saptak', '172.31.1.4', '2014-09-20 13:01:56');

# --------------------------------------------------------

#
# Table structure for table `news`
#

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(3) NOT NULL,
  `heading` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `link` text NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `isdeleted` tinyint(4) NOT NULL DEFAULT '0',
  `added_on` datetime NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

#
# Dumping data for table `news`
#


# --------------------------------------------------------

#
# Table structure for table `organisers`
#

CREATE TABLE `organisers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_num` varchar(10) NOT NULL,
  `event_id` int(3) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `isdeleted` tinyint(4) NOT NULL DEFAULT '0',
  `added_on` datetime NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

#
# Dumping data for table `organisers`
#


# --------------------------------------------------------

#
# Table structure for table `registrations`
#

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `event_id` int(3) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  `added_on` datetime NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unique` (`user_id`,`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

#
# Dumping data for table `registrations`
#

INSERT INTO `registrations` VALUES (1, 4, 2, 1, 0, '2014-09-19 03:30:14', 'saptak', '0000-00-00 00:00:00', '');
INSERT INTO `registrations` VALUES (2, 5, 2, 1, 0, '2014-09-19 11:28:27', 'iit2012171', '0000-00-00 00:00:00', '');

# --------------------------------------------------------

#
# Table structure for table `results`
#

CREATE TABLE `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

#
# Dumping data for table `results`
#


# --------------------------------------------------------

#
# Table structure for table `user_details`
#

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `college_id` int(5) NOT NULL DEFAULT '0',
  `contact` varchar(24) NOT NULL DEFAULT '',
  `profession` varchar(50) NOT NULL DEFAULT '',
  `gender` varchar(10) NOT NULL DEFAULT '',
  `accommodation` tinyint(1) NOT NULL DEFAULT '0',
  `address` text NOT NULL,
  `reg_id` varchar(13) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '1',
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  `added_on` datetime NOT NULL,
  `added_by` varchar(50) NOT NULL DEFAULT 'admin',
  `modified_on` datetime DEFAULT NULL,
  `modified_by` varchar(50) NOT NULL DEFAULT '',
  `locked` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

#
# Dumping data for table `user_details`
#

INSERT INTO `user_details` VALUES (1, 1, '', 0, '', '', '', 0, '', '', 1, 0, '2014-09-06 19:05:10', 'admin', NULL, '', 0);
INSERT INTO `user_details` VALUES (2, 2, '', 0, '', '', '', 0, '', '', 1, 0, '2014-09-12 22:30:40', 'admin', NULL, '', 0);
INSERT INTO `user_details` VALUES (3, 3, '', 0, '', '', '', 0, '', '', 1, 0, '2014-09-19 02:25:31', 'admin', NULL, '', 0);
INSERT INTO `user_details` VALUES (4, 4, 'Saptak Sengupta', 154, '8953346034', 'student', 'male', 0, '  ', 'EFFE201310004', 1, 0, '2014-09-19 02:43:26', 'admin', '2014-09-19 02:52:11', '', 1);
INSERT INTO `user_details` VALUES (5, 5, 'Dhruv Kumar', 154, '9532991404', 'Student', 'male', 0, ' Bh-4 1018', 'EFFE201310005', 1, 0, '2014-09-19 11:25:54', 'admin', '2014-09-19 11:27:43', '', 1);

# --------------------------------------------------------

#
# Table structure for table `users`
#

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `code` varchar(100) NOT NULL,
  `issent` tinyint(1) NOT NULL DEFAULT '0',
  `isactive` tinyint(1) NOT NULL DEFAULT '0',
  `isdeleted` tinyint(1) NOT NULL DEFAULT '0',
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` varchar(30) NOT NULL DEFAULT 'admin',
  `modified_on` datetime NOT NULL,
  `modified_by` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

#
# Dumping data for table `users`
#

INSERT INTO `users` VALUES (1, 'shubhi', '232fc1c9feb5e1e1f453dd3842c884530091e0b6	', 'shubhamsharma24@gmail.com', '25f5ecf348abc3cbe4eaddbbf2d42f256577b94d', 0, 1, 0, '2014-09-06 19:05:10', 'admin', '0000-00-00 00:00:00', '');
INSERT INTO `users` VALUES (2, 'root', '3811cea5c620a5eb7799dc56a16764e86cc360a2', 'iit2012134@iiita.ac.in', '2eb7198ad3e8886c4e0ca42fa977b8a7d92c5456', 0, 1, 0, '2014-09-12 22:30:40', 'admin', '0000-00-00 00:00:00', '');
INSERT INTO `users` VALUES (4, 'saptak', '3811cea5c620a5eb7799dc56a16764e86cc360a2', 'saptak013@gmail.com', 'be4921834f10205c9eed31e4750c807bb43f73a8', 0, 1, 0, '2014-09-19 02:43:26', 'admin', '0000-00-00 00:00:00', '');
INSERT INTO `users` VALUES (5, 'iit2012171', '3811cea5c620a5eb7799dc56a16764e86cc360a2', 'iit2012171@iiita.ac.in', 'c0f15587778c19eff5c815ff1f1d6b83f3ecb83a', 0, 1, 0, '2014-09-19 11:25:54', 'admin', '0000-00-00 00:00:00', '');
