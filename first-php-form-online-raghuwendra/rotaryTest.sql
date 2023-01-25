
--
-- Database: `db_contact`
--

-- CREATE DATABASE IF NOT EXISTS `form-data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
-- USE `form-data`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `RegistrationNo` varchar(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Dob` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Address` text NOT NULL,
  `SchoolName` text NOT NULL,
  `Age` text NOT NULL,
  `AgeGroup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
