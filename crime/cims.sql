



("CREATE TABLE `customerreg` (
  `customerreg_id` int(12) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `distance` int(12) NOT NULL,
  PRIMARY KEY (`customerreg_id`)
)




$conn->query("INSERT INTO `customerreg` (`customerreg_id`, `fname`, `lname`, `user`, `pass`, `address`, `distance`) VALUES
(4, 'a', 'b', 'a', 'a', 'a', 19),
(5, 'Ram', 'shrestha', 'Ram', '12345', 'bashundhara', 12);");



("CREATE TABLE `daysperweek` (
  `perdays_id` int(12) NOT NULL AUTO_INCREMENT,
  `weeks` varchar(250) NOT NULL,
  PRIMARY KEY (`perdays_id`)
)


("INSERT INTO `daysperweek` (`perdays_id`, `weeks`) VALUES
(5, 'Sunday'),
(6, 'Monday'),
(7, 'Tuesday'),
(8, 'Wednesday'),
(9, 'Thursday'),
(10, 'Friday'),
(11, 'Saturday')



("CREATE TABLE `holidaypackage` (
  `holidaypackage_id` int(12) NOT NULL AUTO_INCREMENT,
  `customerreg_id` int(12) NOT NULL,
  `start_date` varchar(250) NOT NULL,
  `end_date` varchar(250) NOT NULL,
  `number` int(12) NOT NULL,
  PRIMARY KEY (`holidaypackage_id`)
)



("INSERT INTO `holidaypackage` (`holidaypackage_id`, `customerreg_id`, `start_date`, `end_date`, `number`) VALUES
(5, 1, '2017-02-07', '2017-02-26', 19);");



("CREATE TABLE `nopetsservices` (
  `petnumber_id` int(12) NOT NULL AUTO_INCREMENT,
  `totalpets_id` int(12) NOT NULL,
  `perdays_id` int(12) NOT NULL,
  `noofservices_id` int(12) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `perlengths` int(12) NOT NULL,
  `perprices` int(12) NOT NULL,
  PRIMARY KEY (`petnumber_id`)
)



("INSERT INTO `nopetsservices` (`petnumber_id`, `totalpets_id`, `perdays_id`, `noofservices_id`, `start_time`, `perlengths`, `perprices`) VALUES
(21, 1, 9, 1, '11:00 AM', 2, 7),
(22, 1, 9, 2, '02:00 PM', 2, 7),
(23, 2, 6, 3, '11:00 AM', 1, 13),
(24, 2, 7, 3, '11:00 AM', 1, 13),
(25, 2, 8, 3, '11:00 AM', 1, 13),
(26, 2, 5, 2, '10:00 AM', 3, 14),
(27, 2, 5, 2, '01:00 PM', 3, 14),
(28, 2, 5, 2, '04:00 PM', 3, 14),
(29, 2, 9, 2, '10:00 AM', 3, 14),
(30, 2, 9, 2, '01:00 PM', 3, 14),
(31, 2, 9, 2, '04:00 PM', 3, 14),
(37, 9, 5, 2, '12:00 AM', 3, 12),
(38, 9, 5, 2, '04:00 PM', 3, 12),
(39, 9, 6, 2, '10:00 AM', 3, 12),
(40, 9, 6, 2, '12:00 AM', 3, 12),
(41, 9, 6, 2, '04:00 PM', 3, 12),
(42, 9, 7, 2, '10:00 AM', 3, 12),
(43, 9, 7, 2, '12:00 AM', 3, 12),
(49, 9, 9, 2, '12:00 AM', 3, 12),
(50, 9, 9, 2, '04:00 PM', 3, 12),
(52, 9, 10, 2, '12:00 AM', 3, 12),
(53, 9, 10, 2, '04:00 PM', 3, 12),
(54, 8, 6, 3, '10:00 AM', 1, 11),
(55, 8, 8, 3, '10:00 AM', 1, 11),
(56, 2, 6, 1, '10:00 AM', 2, 7),
(57, 2, 6, 1, '03:00 PM', 2, 7),
(58, 2, 10, 1, '10:00 AM', 2, 7),
(59, 2, 10, 1, '03:00 PM', 2, 7),
(60, 13, 5, 1, '10:00 AM', 1, 0),
(61, 13, 8, 3, '11:00 AM', 1, 0),
(62, 14, 5, 1, '11:00 AM', 1, 0),
(63, 14, 6, 4, '04:00 PM', 1, 0),
(64, 14, 6, 4, '04:00 PM', 1, 0),
(66, 21, 6, 2, '10:00 AM', 1, 8),
(67, 21, 6, 2, '10:00 AM', 1, 8),
(68, 21, 6, 3, '11:00 AM', 1, 13),
(73, 23, 5, 0, '10:00 AM', 1, 8);");


("CREATE TABLE `perpetscost` (
  `percost_id` int(12) NOT NULL AUTO_INCREMENT,
  `customerreg_id` int(12) NOT NULL,
  `totalpets_id` int(12) NOT NULL,
  PRIMARY KEY (`percost_id`)
)



$conn->query("INSERT INTO `perpetscost` (`percost_id`, `customerreg_id`, `totalpets_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(7, 3, 9),
(19, 4, 19),
(20, 4, 20),
(22, 4, 22),
(23, 4, 23),
(24, 4, 23),
(25, 4, 24),
(26, 4, 25);



$conn->query("CREATE TABLE `petstotal` (
  `totalpets_id` int(12) NOT NULL AUTO_INCREMENT,
  `nameofpet` varchar(250) NOT NULL,
  PRIMARY KEY (`totalpets_id`)
)



("INSERT INTO `petstotal` (`totalpets_id`, `nameofpet`) VALUES
(9, 'bull'),
(20, 'japanesedog'),
(25, 'r');")

("CREATE TABLE `servicesdifferent` (
  `noofservices_id` int(12) NOT NULL,
  `differentservice` varchar(250) NOT NULL,
  `totalcost` int(12) NOT NULL,
  PRIMARY KEY (`noofservices_id`)
)

("INSERT INTO `servicesdifferent` (`noofservices_id`, `differentservice`, `totalcost`) VALUES
(1, 'Walking', 1),
(2, 'Feeding', 3),
(3, 'Socialisation', 8),
(4, 'Playing Session', 3);");


("CREATE TABLE `totaldates` (
  `perdate_id` int(12) NOT NULL AUTO_INCREMENT,
  `totalpets_id` int(12) NOT NULL,
  `perdays_id` int(12) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  PRIMARY KEY (`perdate_id`)




("INSERT INTO `totaldates` (`perdate_id`, `totalpets_id`, `perdays_id`, `start_time`) VALUES
(1, 1, 6, '11:00 AM'),
(2, 1, 6, '02:00 PM'),
(3, 1, 9, '11:00 AM'),
(4, 1, 9, '02:00 PM'),
(5, 2, 6, '11:00 AM'),
(6, 2, 7, '11:00 AM'),
(7, 2, 8, '11:00 AM'),
(8, 2, 5, '10:00 AM'),
(9, 2, 5, '01:00 PM'),
(10, 2, 5, '04:00 PM'),
(11, 2, 9, '10:00 AM'),
(12, 2, 9, '01:00 PM'),
(13, 2, 9, '04:00 PM'),
(14, 9, 6, '01:00 PM'),
(15, 9, 6, '03:00 PM'),
(16, 9, 11, '01:00 PM'),
(17, 9, 11, '03:00 PM'),
(19, 9, 5, '12:00 AM'),
(20, 9, 5, '04:00 PM'),
(21, 9, 6, '10:00 AM'),
(22, 9, 6, '12:00 AM'),
(23, 9, 6, '04:00 PM'),
(24, 9, 7, '10:00 AM'),
(25, 9, 7, '12:00 AM'),
(26, 9, 7, '04:00 PM'),
(27, 9, 8, '10:00 AM'),
(28, 9, 8, '12:00 AM'),
(29, 9, 8, '04:00 PM'),
(30, 9, 9, '10:00 AM'),
(31, 9, 9, '12:00 AM'),
(32, 9, 9, '04:00 PM'),
(33, 9, 10, '10:00 AM'),
(34, 9, 10, '12:00 AM'),
(35, 9, 10, '04:00 PM'),
(36, 8, 6, '10:00 AM'),
(37, 8, 8, '10:00 AM'),
(38, 2, 6, '10:00 AM'),
(39, 2, 6, '03:00 PM'),
(40, 2, 10, '10:00 AM'),
(41, 2, 10, '03:00 PM'),
(42, 13, 5, '10:00 AM'),
(43, 13, 8, '11:00 AM'),
(44, 14, 5, '11:00 AM'),
(45, 14, 6, '04:00 PM'),
(46, 14, 6, '04:00 PM'),
(47, 19, 6, '11:00 AM'),
(48, 21, 6, '10:00 AM'),
(49, 21, 6, '10:00 AM'),
(50, 21, 6, '11:00 AM'),
(51, 19, 11, '04:00 PM'),
(52, 19, 11, '04:00 PM'),
(53, 19, 5, '01:00 PM'),
(54, 19, 6, '11:00 AM'),
(55, 23, 5, '10:00 AM'),
(56, 24, 5, '04:00 PM'),
(57, 25, 6, '02:00 PM');
