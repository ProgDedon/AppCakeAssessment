-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 10:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin12@1');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(10000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `body`, `image`, `author`, `date`) VALUES
(1, 'YES I CAN', 'YES I CAN\r\nYES	= Stands for agreement\r\nI	= personal pronounce, I , here, identifies oneself, either by name, value, qualities, and characteristics exhibited by ME, myself, in me or you, yourself in you.\r\nCAN	= Indicating ability [ OX, AD, LD, 2017 ] giving hope ; to possess or develop that you in you – be it a dream, vision, ambition, aspiration or potentials. Is it possible? That is the question. Now remember progress is impossible without a deducted knowledge of what in fact has to make that progress. Making a choice is one of the most important things than making a decision become a reality.\r\nACHIEVING REALITY => YES I CAN” No one climbs the iroko tree by the power of his arms alone [Igbo saying] God says depart from me you can do nothing and proverb – 16:1, we may make plan but God has the last word verse [vs] 3 Ask the LORD TO BLESS YOUR PLANS and you will be successful in carrying them out”. Good one, God first, but one must play his own role, that is facing the realities of the world with courage. Courage is rightly considered the for most of the virtues, for upon it all others depend [EMMANUEL KANT] So, face life realities/ challenges as if they were to become your daily activities because later or sooner they are gone, you then become a winner, BE COURAGEOUS, FEAR NOT {NOLITE TIMERE} And never try to become a victim of your circumstance, rather double trouble your trouble” this give someone an age, a stepping stone, gear toward greatness. Skipping the processing of life’s reality or psychological existence is as dangerous as muttering roll of bride half way thereby keeping holes / gaps making it substandard which may later make it to collapse; considering time, money, energy wasted anal balanced experience, integrity or trust, lost. Challenges must be embarrassed courageously as no smoke without fire – nothing good comes easy. Knowing that 15minutes under fire [hot water] turned fragile egg strong.\r\nPrior to this, to re affirm you, something superior must empower that realities, call it DECISION OR RESOLUTION [Ceteris paribus] all things being equal. Is the prime factor of YES I CAN?\r\nYES I CAN= MATTER OF DECISION= > BARRACK OBAMA campaign slogan 2012; matter of DECISION]. Have you decided to make a DECISION TODAY? Decide today who you want to be and live by it. Some decide to be instrument of great change while some decide to be great: decide today to be great and the true power lies on YES I CAN.\r\nCONCLUSION:\r\nHaving survived and x-rayed the above topics YES I CAN a positive DECISION and WINNING ATTITUDE, we can deduce that success in life is not dependent on the state of circumstance, economy, [ Rich, poor or physical challenged state ], what career you are currently in, the demand or what job is like. Secondly you need not to be hindered by what people say you are capable of or not. The problems can be many. What matters most is your level of disposition towards life. You become successful when you drink, think and do things that shape your life.\r\n	Decision is the key to unity, determination, magnet of commitment and motivational stimulus for personal and cooperate discipline and success. Remember the only true measure of success is the ratio between what we might have on ground, and the thing we have made of ourselves on the other (cf, H.G WELLS).\r\n	I urge everyone therefore “if you inspire to acquire the desire you admire, you fire and it back fire don’t retire, rather, refine to acquire the desire you admire. In that your goal, just hold on your decision “YES I CAN ”. With all these, I have the full confidence to say” YES I CAN. \r\n', 'zintenz-magnet-yes-you-can.jpg', '', '2021/03/25'),
(2, 'THE SECRET TO SUCCESS IS HARD WORK', 'Before i proceed, i will like to define HARD WORK;\r\nHard work can be define as the great deal of effort or endurance for one to succeed in life.\r\nWithout hard work, success cannot be achieve and success is not a matter of chance rather it is a matter of choice. Its only if you are willing to succeed in life.\r\nThere are no other secret to success. It is only the result of preparation, hard work and learning from your failures. Hard work does not mean working yourself to the extend of no reserve. It does not also mean stressing yourself rather HARD WORK simply mean working with diligence and wisdom.\r\n\r\nFor instance guys of nowadays don\'t want to hustle or work hard, all they want is to stay idle and expect others to work for them while they enjoy. Real hard work has to do with your brain, thought and your mindset. For instance you can just draft out some article that could   be of a great impact to the world or to any organization which can actually build out a lot of money for you. Those who go on to succeed do so because the know that they can do something that others don\'t do.\r\n\r\nThe only way to truly find out if someone will succeed is through hard work. As a student, you can not just fold your hands and expect manner to fall from above or hoping on examination malpractice to pass your examination rather you have to work hard on your studies so that you will be proud to be defend it whenever you are ask to do so. To experience the joy of success, it is important to keep on trying, working hard and never give up until you succeed. Doing the best at this moment puts you in the best place for the next moment and hard work beats if talent does not work hard.\r\n\r\nIn conclusion, if you inspire to acquire the desire you admire, you fire and it back fire, don\'t retire to acquire the desire you admire.\r\n\r\nBENEFITS OF HARD WORK\r\nHelps you build confidence\r\nYour hard work will benefit others\r\nIt leads to self development\r\nWith hard work you gain reputation as a reliable person.', 'hard-work-motivational-quotes.jpg', 'Afoaku Miracle', '2021/03/25'),
(3, 'DETERMINATION IS THE KEY TO SUCCESS', 'Yes determination is the key to success. Lets look at the life story of Thamus Edison, the person that produce the electric bulb. Do you know that Thamus Edsion tried 99times while trying to produce th electric bulb but yet he failed. But the amazing part is that he never give up,he keeps trying till the hundredth(100) times, then he succeeded. Note that Thamus Edison was determine that is why he succeeded. The same with Ben Carson and other people.\r\n\r\nDetermination is really the key to success. If you determine to succeed, i assure you, you will succeed and for you to succeed, you must determine it. Failure is just an event not a person. Never give up even if you fail because ‘F.A.I.L’ means First Attempt In Learning. END is not the End, E.N.D means Effort Never Dies and if you get the answer NO, N.O means Next Opportunity. So lets think positive. If you look around, you will see that many people who succeed is seemingly impossible conditions are those who simply don\'t know how to quit.\r\n\r\nMy dear if you can dream it, then you can achieve it. It is said, expect the best prepare for the worst, capitalize on what comes, always be hard working even in your academic works and activities. Don\'t engage yourself in examination malpractice or sorting of exams because that won’t help you all rather will disgrace you, when you will be ask to define yourself. I want you to bear it in mind that success is only successful successor. And stay away from people who try to belittle your ambition, small people always do that but those who are really great will make you fill that one day you too can become great. For you to know those that try to belittle your ambitions i.e the average people is that they are talk oriented while one of the mark of successful people i.e the great ones is that they are action oriented.\r\n\r\nConclusively, according to the great philosopher Zig Ziglar, he says and i quote “if you” inspire to acquire the desire you admire, you fire and it back fire, don\'t retire to acquire the desire you admires.\r\n', '8b24209f1a69181a3c4b2fee1af3dfa36f6c9281f3678c13f64b23b681988cdf.jpeg', 'Ejiobi Vivian', '2021/03/25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(1, 'Ihemriorochi', 'dedonhacker@gmail.com', 'Thanks for the inform');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(100) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fullname`, `email`, `state`, `lga`, `phone`, `image`) VALUES
(1, 'Onyejekwe Ihemriorochi', 'dedonhacker@gmail.com', 'Abia', 'Isuikwuato', '08101379193', '79276735_167601980975970_2883716668318547968_o.jpg'),
(2, 'Ihemriorochi Onyejekwe', 'dcryptomarket@gmail.com', 'Enugu', 'Nsukka', '08113377760', 'IMG_20210222_122337_555.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`, `username`, `password`) VALUES
(1, 'moderator', 'moderator12@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
