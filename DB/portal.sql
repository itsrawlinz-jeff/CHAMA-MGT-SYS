-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 12:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `amosusers`
--

CREATE TABLE `amosusers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amosusers`
--

INSERT INTO `amosusers` (`ID`, `NAME`, `EMAIL`, `PASSWORD`) VALUES
(5, 'BADA', 'BADA@GMAIL.COM', '12345'),
(6, 'GRACE.N', 'GRACE@GMAIL.COM', '1234'),
(11, 'JEFFREY', 'JEFF@GMAIL.COM', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bank_info`
--

CREATE TABLE `bank_info` (
  `id` int(11) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `account_number` varchar(16) NOT NULL,
  `account_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_info`
--

INSERT INTO `bank_info` (`id`, `holder_name`, `bank_name`, `branch_name`, `account_number`, `account_type`) VALUES
(1, 'Group name', 'KCB', 'VOI', '0134454566', 'group saving account'),
(2, '$holder_name', '$bank_name', '$branch_name', '$account_no', '$account_type'),
(3, 'BADA', 'co-operative', 'Kisumu', '3256288155278', 'group saving account');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `complaint_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `complaint_id`, `date`, `comment`, `sender_id`, `sender_name`) VALUES
(1, '1', '2020-12-28 06:13:21', 'good work', '2', 'jemo'),
(2, '1', '2020-12-28 06:14:54', 'ghhh', '2', 'jemo'),
(3, '', '2020-12-28 06:17:20', 'gfgt', '2', 'jemo'),
(4, '1', '2020-12-28 06:17:37', 'fgfth', '2', 'jemo');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `headline`, `message`, `date`, `sender`, `status`) VALUES
(1, 'my app', 'heloo', '2020-12-28 05:01:37', 'kimtech', 'active'),
(2, 'LATE COMING', '<p>NOO LATECOMING</p>', '2021-10-29 09:28:25', 'JEFFREY', 'active'),
(3, '$headline', '$message', '$date', '$sender', '$status '),
(4, 'HALLOOO', 'ERROR', '11.11.11', 'PICASSO', 'ACTIVE '),
(7, 'LATE COMING AGAIN', '<p style=\"text-align: justify; \"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">more money!!!!</span></font></p>', '', '', 'active'),
(8, 'HEADLINE3', '<p>fire bada</p>', '2021-10-13', 'GRACE', 'active'),
(9, 'LATE COMING', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">n unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap', '2021-10-20', 'JEFFREY ', 'completed'),
(10, 'LATE COMING', '<p>helllo.....</p>', '2021-11-08', 'ROWLING', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contribution` varchar(8) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`id`, `name`, `contribution`, `amount`, `balance`, `date`) VALUES
(3, 'Jeffrey Rowlings', 'monthly', '900', '20', '2021-10-30 11:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `desciplinary`
--

CREATE TABLE `desciplinary` (
  `id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desciplinary`
--

INSERT INTO `desciplinary` (`id`, `action`, `tittle`, `description`, `date`) VALUES
(1, 'fine', 'late meeting', 'cdcdcdcdfvc', '2020-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `headline`, `tittle`, `content`, `message`, `venue`, `date`) VALUES
(1, 'harambee', 'mchango', 'usikose', 'ggghhyy', 'danmwazo hall', '2020-12-28 00:00:00'),
(2, 'Meeting', 'MEETING TODAY', '<p>Must attend.</p>', 'important it is.', 'Kisumu Ku', '2021-10-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `description`, `amount`, `date`) VALUES
(1, 'firewood', 'ygygh', '60', '2020-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `identification` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `employment_terms` varchar(255) NOT NULL,
  `loan_type` varchar(255) NOT NULL,
  `security_details` varchar(255) NOT NULL,
  `conditions` varchar(255) NOT NULL,
  `approval` varchar(255) NOT NULL,
  `loan_status` varchar(255) NOT NULL,
  `payment_period` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `applicant_name`, `identification`, `birthday`, `gender`, `address`, `town`, `street`, `house`, `marital_status`, `employment_terms`, `loan_type`, `security_details`, `conditions`, `approval`, `loan_status`, `payment_period`, `date`) VALUES
(4, '$applicant_name', '$identification', '$birthday', '$gender', '$address', '$town', '$street', '$house', '$marital_status', '$employment_terms', '', '$security_details', '$condition', '$approval', '', '$payment_period', '0000-00-00 00:00:00'),
(5, 'BAD', '38015723', '2021-10-30 00:00:00', 'male', 'Ruiru', 'NAIROBI', 'Ruiru', 'own', 'married', 'Bussiness', '', 'Salary ', 'Provide A Minimum Of 4 Guarantors(For A Loan Above Two Milion Provide Minimun 6 Eligible Guarantors ', 'School_Fee', '', 'Bussiness', '2021-10-28 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loanpayment`
--

CREATE TABLE `loanpayment` (
  `id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `intrest_percentage` varchar(255) NOT NULL,
  `total_pay` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `total_due` varchar(255) NOT NULL,
  `installment` varchar(255) NOT NULL,
  `loan_details` varchar(255) NOT NULL,
  `approve_date` varchar(255) NOT NULL,
  `install_period` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loanpayment`
--

INSERT INTO `loanpayment` (`id`, `member_name`, `amount`, `intrest_percentage`, `total_pay`, `total_amount`, `total_due`, `installment`, `loan_details`, `approve_date`, `install_period`, `status`) VALUES
(1, 'KIM', '60', '2', '500', '670', '5600', '3', 'JHJHBNNB', '2020-12-28', '3', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `logistic_asset`
--

CREATE TABLE `logistic_asset` (
  `id` int(11) NOT NULL,
  `asset_name` varchar(255) DEFAULT NULL,
  `qty` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `submitted_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logistic_asset`
--

INSERT INTO `logistic_asset` (`id`, `asset_name`, `qty`, `description`, `price`, `submitted_date`) VALUES
(1, 'ngombe', '1', 'dcvfvfb', '3000', '2020-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `identification` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `maritalstatus` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `datejoin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_start_date` varchar(255) NOT NULL,
  `pro_end_date` varchar(255) NOT NULL,
  `pro_description` varchar(255) NOT NULL,
  `pro_sammary` varchar(255) NOT NULL,
  `pro_status` varchar(255) NOT NULL,
  `progress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `pro_name`, `pro_start_date`, `pro_end_date`, `pro_description`, `pro_sammary`, `pro_status`, `progress`) VALUES
(1, 'kufunga kuku', '2020-12-28 00:00:00', '2020-12-26 12:06:00', 'hghgvv', 'ghghhh', 'good', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `postion` varchar(255) DEFAULT NULL,
  `datejoin` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2021-03-28 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(6, 'ADMIN', 'ADMIN', 'amos@gmail.com', 'ADMIN', '$2y$10$4PbJ/ufZSy58KSwbH5LAs.0G7Vbi3My3VIhWnmO2KtQ75cMDnbRz2', NULL, NULL, '2021-03-28 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amosusers`
--
ALTER TABLE `amosusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bank_info`
--
ALTER TABLE `bank_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desciplinary`
--
ALTER TABLE `desciplinary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanpayment`
--
ALTER TABLE `loanpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logistic_asset`
--
ALTER TABLE `logistic_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `amosusers`
--
ALTER TABLE `amosusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bank_info`
--
ALTER TABLE `bank_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contributions`
--
ALTER TABLE `contributions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `desciplinary`
--
ALTER TABLE `desciplinary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loanpayment`
--
ALTER TABLE `loanpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logistic_asset`
--
ALTER TABLE `logistic_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
