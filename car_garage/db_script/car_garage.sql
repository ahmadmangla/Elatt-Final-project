
CREATE DATABASE car_garage ;

USE car_garage ;


CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `data_posted` timestamp NOT NULL DEFAULT current_timestamp(),
   PRIMARY KEY(`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `contact` (`contact_id`, `name`, `email`, `subject`, `message`, `data_posted`) VALUES
(2, 'Subrata', 'lucy@gmail.com', 'Welcome and schedule for your first lesson', 'zcasfas', '2022-07-11 07:47:57');

