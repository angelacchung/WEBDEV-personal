-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2018 at 09:25 PM
-- Server version: 5.5.61-cll
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chunmini_personal`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(20) NOT NULL,
  `p` varchar(90) NOT NULL,
  `s` varchar(90) NOT NULL,
  `reviewsid` int(90) NOT NULL,
  `department` varchar(90) NOT NULL,
  `link` text NOT NULL,
  `average` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `p`, `s`, `reviewsid`, `department`, `link`, `average`) VALUES
(1, 'Computer Science', 'University of Waterloo', 0, 'Science', 'https://uwaterloo.ca/future-students/programs/computer-science', 0),
(2, 'Computer Science', 'University of Toronto', 0, 'Science', 'https://fas.calendar.utoronto.ca/section/Computer-Science\r\n', 0),
(3, 'Computer Science', 'Wilfred Laurier University', 0, 'Science', 'https://www.wlu.ca/programs/science/undergraduate/computer-science-bsc-milton/index.html\r\n', 0),
(4, 'Computer Science', 'Queen\'s University', 22, 'Science', 'https://www.wlu.ca/programs/science/undergraduate/chemistry-bsc/program-details.html\r\n', 0),
(5, 'Computer Science', 'McMaster University', 3, 'Science', 'https://www.eng.mcmaster.ca/computer-science-basc\r\n', 0),
(6, 'Computer Science', 'Ryerson University', 0, 'Science', 'https://www.ryerson.ca/programs/undergraduate/computer-science/', 0),
(7, 'Computer Science', 'York University', 0, 'Science', 'http://eecs.lassonde.yorku.ca/course/computer-science/', 0),
(32, 'Economics', 'Ryerson University', 0, 'Business', 'https://www.ryerson.ca/economics/undergraduate/', 0),
(9, 'Chemistry', 'Wilfred Laurier University', 0, 'Science', 'https://www.wlu.ca/programs/science/undergraduate/chemistry-bsc/program-details.html\r\n', 0),
(10, 'Chemistry', 'Queen\'s University', 0, 'Science', 'https://www.queensu.ca/artsci/programs-and-degrees/natural-physical-sciences/chemistry\r\n', 0),
(11, 'Economics', 'Wilfred Laurier University', 0, 'Business', 'https://www.wlu.ca/programs/business-and-economics/undergraduate/economics-ba/index.html', 0),
(12, 'Economics', 'Queen\'s University', 21, 'Business', 'http://www.econ.queensu.ca/', 0),
(13, 'Economics', 'McMaster University', 0, 'Business', 'https://www.economics.mcmaster.ca/undergraduate', 0),
(14, 'Economics', 'University of Waterloo', 0, 'Business', 'https://uwaterloo.ca/future-students/programs/economics', 0),
(16, 'Economics', 'York University', 0, 'Business', 'https://futurestudents.yorku.ca/program/economics/laps', 0),
(17, 'Economics', 'University of Toronto', 0, 'Business', 'https://www.future.utoronto.ca/content/economics', 0),
(18, 'Biochemistry', 'Wilfred Laurier University', 0, 'Science', 'https://www.wlu.ca/programs/science/undergraduate/biochemistry-biotechnology-bsc/index.html?gclid=Cj0KCQiA6JjgBRDbARIsANfu58F8VvaWXQJXJ0w41u_pqmvzfl099WphQk1oCKx9W6OASEAJiydxUsAaAuF_EALw_wcB\r\n', 0),
(19, 'Biochemistry', 'Queen\'s University', 0, 'Science', 'https://dbms.queensu.ca/undergraduate/biochemistry', 0),
(20, 'Biochemistry', 'McMaster University', 0, 'Science', 'https://fhs.mcmaster.ca/biochem/undergraduate/programs.html ', 0),
(21, 'Biochemistry', 'University of Waterloo', 0, 'science', 'https://uwaterloo.ca/future-students/programs/biochemistry', 0),
(22, 'Biochemistry', 'Ryerson University', 0, 'Science', 'n/a', 0),
(23, 'Biochemistry', 'York University', 0, 'Science', 'https://futurestudents.yorku.ca/program/biochemistry', 0),
(24, 'Biochemistry ', 'University of Toronto', 0, 'Science', 'http://biochemistry.utoronto.ca/undergraduate-program/', 0),
(25, 'Chemistry', 'McMaster University', 0, 'Science', 'https://www.chemistry.mcmaster.ca/undergraduate/programmes-in-chemistry.html', 0),
(26, 'Chemistry', 'University of Waterloo', 0, 'Science', 'https://uwaterloo.ca/future-students/programs/chemistry', 0),
(27, 'Chemistry', 'Ryerson University', 0, 'Science', 'https://www.ryerson.ca/programs/undergraduate/chemistry/', 0),
(28, 'Chemistry', 'York University', 0, 'Science', 'https://futurestudents.yorku.ca/program/chemistry', 0),
(29, 'Chemistry', 'University of Toronto', 0, 'Science', 'https://www.chem.utoronto.ca/undergrad/index.php\r\n', 0),
(47, 'Biology', 'York University', 0, 'Science', 'https://futurestudents.yorku.ca/program/biology/science', 0),
(43, 'Biology', 'Wilfred Laurier University', 0, 'Science', 'https://www.wlu.ca/programs/science/undergraduate/biology-bsc/index.html', 0),
(44, 'Biology', 'University of Waterloo', 0, 'Science', 'https://uwaterloo.ca/biology/', 0),
(45, 'Biology', 'University of Toronto', 0, 'Science', 'http://www.artsci.utoronto.ca/newstudents/courses/programs/biology', 0),
(46, 'Biology', 'Ryerson University', 0, 'Science', 'https://www.ryerson.ca/programs/undergraduate/biology/', 0),
(35, 'Accounting', 'Wilfred Laurier University', 0, 'Business', 'https://www.wlu.ca/programs/business-and-economics/undergraduate/business-administration-bba/program-details/index.html\r\n', 0),
(36, 'Accounting', 'Queens University', 0, 'Business', 'https://smith.queensu.ca/bcom/academics/fields_study/index.php', 0),
(37, 'Accounting', 'McMaster University', 20, 'Business', 'https://future.mcmaster.ca/programs/business/#Profiles', 0),
(38, 'Accounting', 'University of Waterloo', 0, 'Business', 'https://uwaterloo.ca/future-students/programs/accounting-and-financial-management\r\n', 0),
(39, 'Accounting', 'Ryerson University', 0, 'Business', 'https://www.ryerson.ca/programs/undergraduate/accounting-finance/', 0),
(40, 'Accounting', 'York University', 0, 'Business', 'http://sas.laps.yorku.ca/bas/specialized-honours-adms/', 0),
(41, 'Accounting', 'University of Toronto', 0, 'Business', 'https://fas.calendar.utoronto.ca/section/Rotman-Commerce', 0),
(48, 'Biology', 'Queen\'s University', 0, '', 'https://biology.queensu.ca/', 0),
(49, 'Biology', 'McMaster University', 0, 'Science', 'http://www.biology.mcmaster.ca/undergraduate/', 0),
(50, 'English', 'University of Toronto', 0, 'Liberal Arts', 'http://www.english.utoronto.ca/undergrad.htm\r\n', 0),
(51, 'English', 'York University', 0, 'Liberal Arts', 'https://futurestudents.yorku.ca/program/english', 0),
(52, 'English', 'Ryerson University', 0, 'Liberal Arts', 'https://www.ryerson.ca/programs/undergraduate/english/', 0),
(53, 'English', 'University of Waterloo', 0, 'Liberal Arts', 'https://uwaterloo.ca/future-students/programs/english', 0),
(54, 'English', 'McMaster University', 0, 'Liberal Arts', 'https://english.humanities.mcmaster.ca/undergraduate-programs/undergraduate-studies-in-english/\r\n', 0),
(55, 'English', 'Queen\'s University', 0, 'Liberal Arts', 'https://www.queensu.ca/english/undergraduate-program/english-undergraduate-courses\r\n', 0),
(56, 'English', 'Wilfred Laurier University', 0, 'Liberal Arts', 'https://www.wlu.ca/programs/arts/undergraduate/english-ba/index.html', 0),
(63, '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(80) NOT NULL,
  `title` varchar(100) NOT NULL,
  `rating` int(60) NOT NULL,
  `content` text NOT NULL,
  `program` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `rating`, `content`, `program`, `school`) VALUES
(41, 'no', 1, 'absolutely not  ', 'Accounting', 'York university'),
(40, 'Eh', 3, 'it was okay I guess. I have a job now.   ', 'Accounting', 'York university'),
(39, 'I wish I could go back', 4, 'and do it over again!', 'Accounting', 'York university'),
(38, 'I loved it', 5, 'worth every cent and fiber of my being  ', 'Accounting', 'York university'),
(37, 'I hated it', 1, 'It was a waste of time  ', 'Accounting', 'York university'),
(36, 'Number master', 5, '  Ask me anything about numbers. Ask me anything about money, accounting... This program made me a master. ', 'Accounting', 'McMaster University'),
(35, 'indifferent', 3, 'It was ok. I like their cafeteria.\r\nStill do not really understand anything.   ', 'Accounting', 'McMaster University'),
(33, 'boring', 1, 'I did not learn anything   ', 'Accounting', 'McMaster University'),
(34, 'Amazing', 5, 'I learned everything about accounting. I feel like I am the master of accounting now  ', 'Accounting', 'McMaster University'),
(42, 'Amazing', 5, 'I would go there in my next life  ', 'English', 'Wilfred Laurier University'),
(43, 'i cried', 1, '  I cried every night holding a photo of my mom ', 'Computer Science', 'University of Toronto'),
(44, 'Please don\'t take this', 1, 'Please please please don\'t take this program!! I hated it so much. All you learn about is Hamlet and the workload is so heavy, you have to read two books per week!!', 'English', 'York University'),
(45, 'Amazing', 5, 'So inspiring. I had no regrets. I graduated this month. ', 'English', 'York University'),
(46, 'Prepare yourself', 4, 'Definitely not an easy program. Very heavy workload but just work hard. ', 'English', 'York University'),
(47, 'Too much', 1, 'Its just too much. I thought I wanted to be a developer but I guess not. The workload is so heavy its just not worth it.', 'Computer Science', 'York University'),
(48, 'Did not enjoy', 1, 'I dropped out after one year because I didn\'t feel like it was good. I feel so behind when I talk to my friends who went to waterloo for computer science....', 'Computer Science', 'York University'),
(49, 'great', 4, 'You gotta work hard. Heavy workload but what do you expect? Its computer science. ', 'Computer Science', 'York University'),
(50, 'mmmh', 3, 'In my third year now. Im indifferent with the stuff we learn but the profs are not helpful at all. Don\'t expect anything from them.', 'Computer Science', 'York University'),
(51, 'okay', 3, 'Its okay I guess. But I often find myself asking, \'why am i here?\"', 'English', 'York University'),
(52, 'easy', 4, 'Just do the work and you will be fine. The classrooms are nice and the profs are ok. Just wish that there were more opportunities presented to us. ', 'Accounting', 'York University'),
(53, 'dont like it', 1, 'Dropping out this semester. The assignments that I got were complicated and the profs are no help. The way the courses are structured wasnt my cup of tea ', 'Accounting', 'York University'),
(54, 'Great', 4, 'Hard and lots of work but I feel like I\'m learning a lot ', 'Accounting', 'Queens University'),
(55, 'terrible', 1, 'I wish I could give this a 0. I thought I would like accounting because I like math. Guess not. The faculty isnt very good either', 'Accounting', 'Queens University'),
(56, 'not good', 2, 'I thought it would be great since its queens university. But i was wrong. I didnt enjoy it at all. ', 'Accounting', 'Queens University'),
(57, 'im content', 3, 'Just finished 1st year. They say that 1st year is the hardest because they try and weed people out. oh boy, did they. Good thing im still in. Be prepared to handle the workload. ', 'Accounting', 'Queens University'),
(58, 'good but...', 3, 'Its okay I guess. A lot of work for first year which is expected. But I\'m not staying. I dont think I could do this until I graduated and then get a job for it. ', 'Accounting', 'Queens University'),
(59, 'no thanks', 2, 'I thought it was supposed to get easier after first year.... its still so workload heavy', 'Accounting', 'Queens University'),
(60, '', 3, 'Its okay I guess. A lot of work for first year which is expected. But I\'m not staying. I dont think I could do this until I graduated and then get a job for it. ', 'Computer Science', 'Queens University'),
(61, 'I hate it', 2, 'i hate coding and computers now', 'Computer Science', 'Queens University'),
(62, 'bad', 1, 'Way too much work. Dropping out this year. ', 'Computer Science', 'Queens University'),
(63, 'hard work', 4, 'Super hard work. Took me a while to understand but profs were helpful. They really try and push you in 3rd year', 'Computer Science', 'Queens University'),
(64, 'tired', 5, 'exhausting and hard work but I feel like I\'m really learning.', 'Computer Science', 'Queens University'),
(65, 'Lots of work', 3, 'so sosososososs so much work!!! ', 'Computer Science', 'Queens University'),
(66, ':(', 1, 'way too hard', 'Computer Science', 'Queens University'),
(67, 'tears', 1, 'I cried some nights', 'Computer Science', 'Queens University'),
(68, '', 3, 'Its okay I guess. A lot of work for first year which is expected. But I\'m not staying. I dont think I could do this until I graduated and then get a job for it. ', 'Computer Science', 'Queens University'),
(69, 'really bad', 1, 'I\'ve never heard anyone say that they enjoyed being at UT for a bachelors. Now I know why. ', 'Computer Science', 'University of Toronto'),
(70, 'sad', 1, 'This just made me sad', 'Computer Science', 'University of Toronto'),
(71, 'tears', 2, 'nothing but tears. ', 'Computer Science', 'University of Toronto'),
(72, 'alright', 3, 'Just finished my first year and whoa, it was quite the ride. Lots of work. Make sure to get help if you need any', 'Computer Science', 'McMaster University'),
(73, 'great', 4, 'I\'m in my 2nd year and I\'ve been enjoying it so far. Not sad yet. ', 'Computer Science', 'McMaster University'),
(74, 'cool', 4, 'I like this program. I can handle the workload and the classes im taking arent too dry because of the profs', 'Computer Science', 'McMaster University'),
(75, 'Okay', 3, 'Hard subject to grasp at first but you will understand eventually', 'Computer Science', 'McMaster University'),
(76, 'some nights i cried', 2, 'just way too much man....', 'Computer Science', 'University of Toronto'),
(77, 'bad bad bad', 2, 'No one ever says anything good about being in UT for any program. This is no exception', 'Computer Science', 'University of Toronto'),
(78, 'Did not enjoy', 1, 'Nobody enjoyed being in this program', 'Computer Science', 'University of Toronto'),
(79, 'sadness', 1, 'Just made me sad', 'Computer Science', 'McMaster University'),
(80, 'Hate this!!!!', 1, 'Ive been in this program for 2 years. Dropping out!! cant believe i wasted my time and OSAP money. ', 'English', 'McMaster University'),
(81, 'Not good', 2, 'The profs here are terrible. They\'ve been here for a long time so maybe they just dont care anymore? ', 'English', 'McMaster University'),
(82, 'dropping out', 1, 'I cant stand this program. Dropping out after the 1st semester', 'English', 'McMaster University'),
(83, 'bye', 1, 'I\'m dropping out this semester. Was not what I expected. ', 'English', 'Queens University'),
(84, 'Alright so far', 3, 'Its okay so far. The profs are passionate', 'English', 'Queens University'),
(85, 'awesome program', 4, 'I really recommend this program to anyone interested in English! ', 'English', 'Queens University'),
(86, 'terrible', 2, 'Did not enjoy. Dropping out this semester', 'English', 'University of Toronto'),
(87, 'great', 4, 'In my third year and so far its good. first year was really hard though. ', 'English', 'University of Toronto'),
(88, 'hmmm', 3, 'This program is pretty confusing... Make sure to really read in what the program offers and what paths you can take', 'English', 'University of Toronto');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `email`) VALUES
(112, 'undefined', 'undefined'),
(111, 'undefined', 'undefined'),
(110, 'undefined', 'undefined'),
(109, 'undefined', 'undefined'),
(108, 'mkol', 'mc13md@student.ocadu.ca'),
(107, 'jkrolling', 'mini.cchung@gmail.com'),
(106, 'dodododo', 'babyshark@gmail.com'),
(113, 'undefined', 'undefined'),
(114, 'undefined', 'undefined'),
(115, 'undefined', 'undefined'),
(116, 'undefined', 'undefined'),
(117, 'undefined', 'undefined'),
(118, 'undefined', 'undefined'),
(119, 'undefined', 'undefined'),
(120, 'undefined', 'undefined'),
(121, 'undefined', 'undefined'),
(122, 'undefined', 'undefined'),
(123, 'chung', 'mc13md@student.ocadu.ca'),
(124, 'password', 'mc13md@student.ocadu.ca'),
(125, 'fff', 'ff@fff'),
(126, 'fff', 'ff@fff'),
(127, 'fff', 'ff@fff'),
(128, 'jkjkjk', 'ukgkg.lo.'),
(129, 'fqwfrqfrrqfq', 'mini.cchung@gmail.com'),
(130, 'me', 'me@me'),
(131, '', ''),
(132, '', ''),
(133, '', ''),
(134, '584554545', 'a@a'),
(135, '', ''),
(136, '', ''),
(137, '', ''),
(138, '', ''),
(139, '', ''),
(140, '', ''),
(141, '', ''),
(142, '', ''),
(143, '', ''),
(144, '', ''),
(145, '', ''),
(146, '', ''),
(147, '', ''),
(148, '', ''),
(149, '', ''),
(150, '', ''),
(151, '', ''),
(152, '', ''),
(153, '', ''),
(154, '', ''),
(155, '', ''),
(156, '', ''),
(157, '', ''),
(158, '', ''),
(159, '', ''),
(160, '', ''),
(161, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
