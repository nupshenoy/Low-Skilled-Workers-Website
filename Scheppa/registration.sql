-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 10:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `schepparegistration1`
--

CREATE TABLE `schepparegistration1` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` enum('ch1','ch2') NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confpass` varchar(20) NOT NULL,
  `prof` varchar(20) NOT NULL,
  `loc` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `phno` bigint(10) NOT NULL,
  `descp` varchar(1000) NOT NULL,
  `services` varchar(1000) NOT NULL,
  `years` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schepparegistration1`
--

INSERT INTO `schepparegistration1` (`id`, `fname`, `lname`, `gender`, `email`, `password`, `confpass`, `prof`, `loc`, `dob`, `phno`, `descp`, `services`, `years`, `photo`) VALUES
(6, 'Gayathri', 'Pai', 'ch2', 'gayathripai@gmail.com', 'asd', 'asd', 'Beautician', 'Udupi', '2001-02-04', 1234567890, 'My name is Gayathri and I\'m a stylist for weddings, proms or special events – also giving advice on colour to suit all occasions. I have built up a reputation as a busy, fun and unpretentious salon – where the personal touch always comes first.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque, massa vel laoreet tincidunt, ex magna pulvinar enim, non semper sem lorem eu nisi. Ut blandit felis in accumsan scelerisque. Donec ut faucibus nunc.', 5, '12.jpg'),
(7, 'Malavika', 'Raj', 'ch2', 'malavikaraj@gmail.com', 'asd', 'asd', 'Beautician', 'Hassan', '2001-09-07', 1234567890, 'A makeup artist who has a passion for teaching people how to feel good, and look better. My true passion is makeup but over the years I have added numerous beauty treatments to my skill set which I feel further enhances my offering to all my clients.\r\n', 'Makeup, hair, weddings, ceremonies', 9, '7.jpg'),
(12, 'Adarsh', 'Shetty', 'ch2', 'adarshshetty@gmail.com', 'asd', 'asd', 'Designer', 'Hassan', '2001-09-07', 1234567890, 'I\'m an Experiential Graphic Designer (XGD).I orchestrate typography, colour, imagery, form, technology, and content to create environments that communicate. I also work in way-finding systems, architectural graphics, retail design, and themed or branded spaces.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, '4.jpg'),
(13, 'Aradhana', 'Sharma', 'ch2', 'aradhanasharma@gmail.com', 'asd', 'asd', 'Art Commissioner', 'Chikmagalur', '2001-09-07', 9067172084, 'I mainly specialize in producing a community projects. Provide me with the materials that will be needed to produce the piece you want. Providing reference images is a great way to communicate with me about what you are looking for.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, '22.jpg'),
(14, 'Aashwi', 'Khatri', 'ch2', 'aashwikhatri@gmail.com', 'asd', 'asd', 'Designer', 'Bangalore', '2001-12-12', 1234567890, 'I\'m a designer specialized in creating beautiful, yet functional websites and digital interfaces. I\'m a UX Designer working in this field from past 5 years and worked with many exceptional companies and clients during those years. I love helping clients with their needs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 3, '2.jpg'),
(15, 'Riaan', 'Acharya', 'ch2', 'riaanacharya@gmail.com', 'asd', 'asd', 'Designer', 'Bangalore', '2001-02-06', 13243546578, 'I\'m a dynamic and innovative web and graphic designer. Ny designs are high-quality and they are also affordable. I can design websites, flyers, brochures, business cards and much more. I\'ve been acquanted as the best learner and a vigorous freelancer.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 4, '1.jpg'),
(16, 'Jayanth', 'Adiga', 'ch1', 'jayanthadiga@gmail.com', 'asd', 'asd', 'Low Skill Worker', 'Hassan', '2001-12-08', 14235647587, 'I\'m a Painter and Decorator. I expertise in applying paint, varnish, wallpaper and other finishes and special coatings to the walls, ceilings and other surfaces of residential, commercial and industrial buildings and structures.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 2, '16.jpg'),
(17, 'Yogesh', 'Nayak', 'ch1', 'yogeshnayak@gmail.com', 'asd', 'asd', 'Low Skill Worker', 'Udupi', '2001-09-08', 1234567889, 'I\'m the right person you are looking for when it comes to electrical works. I can install electrical apparatus, equipment for alarm and other systems. I expertise in executing plans of electrical wiring for well functioning lighting.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 5, '17.jpg'),
(26, 'Vedika', 'Sood', 'ch2', 'vedikasood@gmail.com', 'asd', 'asd', 'Beautician', 'Bangalore', '2002-09-08', 12345432112, 'A makeup artist who has a passion for teaching people how to feel good, and look better. My true passion is makeup but over the years I have added numerous beauty treatments to my skill set which I feel further enhances my offering to all my clients.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 5, '11.jpg'),
(27, 'Raghav', 'Nedchil', 'ch1', 'raghavnedchil@gmail.com', 'asd', 'asd', 'Computer Specialist', 'Bangalore', '1998-07-09', 9876054322, 'I\'m a Technical Support Specialist. I typically answer inquiries from computer users. I also run diagnostic programs to determine the causes of and answer questions, while enhancing the use of hardware and operating systems.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 5, '10.jpg'),
(28, 'Rajendra', 'Rao', 'ch1', 'rajendrarao@gmail.com', 'asd', 'asd', 'Low Skill Worker', 'Chikmagalur', '2001-06-07', 1234567890, 'I’ve been working for the past 8 years as a carpenter. I can install structures and fixtures, such as windows and molding. I specialise in construct building frameworks, including walls, floors, and doorframes.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 8, '20.jpg'),
(29, 'Dolcy', 'Lobo', 'ch2', 'dolcylobo@gmail.com', 'dolcy', 'dolcy', 'Computer Specialist', 'Nitte', '1999-07-12', 9632372459, 'I\'m a Computer Specialist and I help desk technicians respond to inquiries by telephone, email, live chat or other means. I also assist with installing software, maintaining  systems, repairing computer hardware, perform systems analysis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 4, '8.jpg'),
(30, 'Parvati', 'Gowda', 'ch2', 'parvatigowda@gmail.com', 'parvati', 'parvati', 'Computer Specialist', 'Bangalore', '1997-09-14', 9900105687, 'I coordinate multiple simultaneous PC projects. I can also perform systems analysis to determine effective computer hardware and software applications for various users and departments. I answer inquiries from computer users. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 5, '6.jpg'),
(31, 'Amulya', 'Kamath', 'ch2', 'amulyakamath@gmail.com', 'amulya', 'amulya', 'Art Commissioner', 'Chikmagalur', '1999-05-12', 9900105687, 'Hey there!  Looking for a person to organize your event or activity you plan to conduct? Then I\'m your person. I can organize fun events like baby showers and bingo nights. I have been conducting events creatively for 5 years now. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 5, '34.jpg'),
(32, 'Kshthij', 'Kumar', 'ch1', 'kshithijkumar@gmail.com', 'kshthij', 'kshthij', 'Art Commissioner', 'Udupi', '1995-12-09', 9900105687, 'I mainly specialize in producing a community projects. Provide me with the materials that will be needed to produce the piece you want. Providing reference images is a great way to communicate with me about what you are looking for.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 6, '9.jpg'),
(33, 'Rony', 'James', 'ch2', 'ronyjames@gmail.com', 'rony', 'rony', 'Beautician', 'Nitte', '1997-09-12', 9731088355, 'I\'m here to service all your beauty needs. If you\'re looking for special occasion makeup for that engagement session, wedding, birthday, headshot, or a date night, book me as your makeup artist. With my experience and professional knowledge, I\'m positive I can benefit my clients.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 0, 'ronyjames7.jpg'),
(35, 'Anamika', 'Raj', 'ch2', 'anamikaraj@gmail.com', 'anamika', 'anamika', 'Computer Specialist', 'Nitte', '1997-08-17', 3308845612, 'I\'m mainly a Technical Support Specialist. I typically answer inquiries from computer users. I also run diagnostic programs to determine the causes of and help resolve problems and answer questions to prevent downtime, while enhancing the use of hardware and operating systems.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 0, 'Anamikaraj3.jpg'),
(36, 'Aju ', 'Jose', 'ch1', 'ajujose@gmail.com', 'aju', 'aju', 'Designer', 'Nitte', '2001-09-12', 9900105687, 'If you need flyers that make people read without crumbling the piece of paper, then I\'m your man. I have a bachelor\'s degree in Design and my main expertise include designing logos, flyers, banners. I can even provide graphic design for designing brochures that are best for travelogues.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 5, 'ramkumar.jpg.jpg'),
(37, 'Mark', 'Shelby', 'ch1', 'markshelby@gmail.com', 'mark', 'mark', 'Beautician', 'Hassan', '2000-09-14', 9591766131, 'I\'m Mark and I love people and people love to feel beautiful, which is the reason I’ve spent last 6 years engulfed in doing makeup. I believe if you feel comfortable in your skin, then you can spend your energy loving others and enjoying life instead of worrying and being self-conscious.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 6, '13.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schepparegistration1`
--
ALTER TABLE `schepparegistration1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schepparegistration1`
--
ALTER TABLE `schepparegistration1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
