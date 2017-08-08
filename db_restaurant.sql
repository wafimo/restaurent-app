-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 01:48 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` varchar(255) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_user_id`, `total_price`, `date`, `quantity`) VALUES
('DC1504171', 6, 770, '2017-04-15', 8),
('DC1504172', 6, 440, '2017-04-15', 2),
('DC1504173', 6, 440, '2017-04-15', 1),
('DC1504174', 6, 1540, '2017-04-15', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
`cart_tbl_id` int(11) NOT NULL,
  `cartId` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `foodNameId` int(11) NOT NULL,
  `foodName` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_tbl_id`, `cartId`, `userId`, `foodNameId`, `foodName`, `price`, `quantity`, `image`, `date`) VALUES
(1, 'DC1504171', 6, 1, 'porota', '50 tk.', 2, 'upload/b3f543b26c.jpg', '0000-00-00'),
(2, 'DC1504171', 6, 10, 'aluvaji', '200', 3, 'upload/8627e7cec3.jpg	', '0000-00-00'),
(3, 'DC1504172', 6, 5, 'mixed  vegetable', '400', 1, 'upload/85e33c55e2.jpg', '0000-00-00'),
(4, 'DC1504173', 6, 5, 'mixed  vegetable', '400', 1, 'upload/85e33c55e2.jpg', '0000-00-00'),
(5, 'DC1504174', 6, 6, 'Chickn Curry', '200', 3, 'upload/8701466b05.jpg', '0000-00-00'),
(6, 'DC1504174', 6, 10, 'aluvaji', '200', 1, 'upload/8627e7cec3.jpg	', '0000-00-00'),
(7, 'DC1504174', 6, 7, 'Chickan Soup', '300', 2, 'upload/fd65340ec6.jpg', '0000-00-00'),
(8, 'DC1504175', 6, 11, 'velpuri', '20', 3, 'upload/8627e7cec3.jpg	', '0000-00-00'),
(9, 'DC1504175', 6, 10, 'aluvaji', '200', 1, 'upload/8627e7cec3.jpg	', '0000-00-00'),
(10, 'DC1504175', 6, 10, 'aluvaji', '200', 1, 'upload/8627e7cec3.jpg	', '0000-00-00'),
(11, 'DC1504175', 6, 5, 'mixed  vegetable', '400', 1, 'upload/85e33c55e2.jpg', '0000-00-00'),
(12, 'DC1504175', 6, 5, 'mixed  vegetable', '400', 1, 'upload/85e33c55e2.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE IF NOT EXISTS `tbl_food` (
`f_name_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_type_id` varchar(100) NOT NULL,
  `f_price` varchar(100) NOT NULL,
  `f_image` text NOT NULL,
  `f_details` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`f_name_id`, `f_name`, `f_type_id`, `f_price`, `f_image`, `f_details`) VALUES
(1, 'porota', '4', '50 tk.', 'upload/b3f543b26c.jpg', 'ffffffffffffffffffffffffffffffffffffffffffffff'),
(2, 'fride rice', '5', '100 tk', 'upload/e716824165.jpg', 'ffffffffffffffffffffffffffffffffffffffffffffff'),
(5, 'mixed  vegetable', '5', '400', 'upload/85e33c55e2.jpg', '<p><span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</span></p>'),
(6, 'Chickn Curry', '7', '200', 'upload/8701466b05.jpg', '<p>cccccccccccccccccccccccccc</p>'),
(7, 'Chickan Soup', '6', '300', 'upload/fd65340ec6.jpg', '<p>nbdjsab vkjdssssssssssssssssssbbbbbbbbbbbbbbbbbbb</p>'),
(8, 'Chicken Ball', '6', '200', 'upload/8627e7cec3.jpg', '<p>chicken<span>f_type_idÂ <span>f_type_id</span><span>f_type_id</span><span>f_type_id</span><span>f_type_id</span><span>f_type_id</span><span>f_type_id</span><span>f_type_id</span><span>f_type_id</span><span>f_type_id</span></span>Â <span>f_type_idÂ </span></p>'),
(9, 'aluporota', '5', '200', 'upload/8627e7cec3.jpg	', 'Relying on the default value of an uninitialized variable is problematic in the case of including one file into another which uses the same variable name. It is also a major security risk with register_globals turned on. E_NOTICE level error is issued in case of working with uninitialized variables, however not in the case of appending elements to the uninitialized array. isset() language construct can be used to detect if a variable has been already initialized. Additionally and more ideal is the solution of empty() since it does not generate a warning or error message if the variable is not initialized. '),
(10, 'aluvaji', '5', '200', 'upload/8627e7cec3.jpg	', 'Relying on the default value of an uninitialized variable is problematic in the case of including one file into another which uses the same variable name. It is also a major security risk with register_globals turned on. E_NOTICE level error is issued in case of working with uninitialized variables, however not in the case of appending elements to the uninitialized array. isset() language construct can be used to detect if a variable has been already initialized. Additionally and more ideal is the solution of empty() since it does not generate a warning or error message if the variable is not initialized. '),
(11, 'velpuri', '5', '20', 'upload/8627e7cec3.jpg	', 'Relying on the default value of an uninitialized variable is problematic in the case of including one file into another which uses the same variable name. It is also a major security risk with register_globals turned on. E_NOTICE level error is issued in case of working with uninitialized variables, however not in the case of appending elements to the uninitialized array. isset() language construct can be used to detect if a variable has been already initialized. Additionally and more ideal is the solution of empty() since it does not generate a warning or error message if the variable is not initialized. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
`food_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`food_id`, `f_name`, `s_time`, `e_time`) VALUES
(4, 'breakfast', '08:00:00', '12:00:00'),
(5, 'lunch', '12:00:00', '16:00:00'),
(6, 'snack', '16:00:00', '20:00:00'),
(7, 'dinner', '20:00:00', '23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
`staff_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_possition` varchar(100) NOT NULL,
  `s_image` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `s_name`, `s_possition`, `s_image`) VALUES
(3, 'JENIFER LORENCE', 'Managing Director', 'upload/e716824165.jpg'),
(4, 'JOHN DOGGETT', 'Head Chef', 'upload/0947ab21d5.jpg'),
(5, 'Dan Riverhold', 'Owner', 'upload/67b85b6c8d.jpg'),
(6, 'Dan Riverhold', 'Owner', 'upload/63750b7c0a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `userName`, `phone`, `email`, `password`, `address`) VALUES
(3, 'marzia', 13743875, 'koli@gmail.com', 12345, 'gazipura'),
(4, 'marzia', 8745, 'koli@gmail.com', 12345, 'gazipura'),
(5, 'marzia', 1976636748, 'koli@gmail.com', 12345, 'gazipura'),
(6, 'ashrika', 91234567, 'ashrika@gmail.com', 12345, 'gazipura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
 ADD PRIMARY KEY (`cart_tbl_id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
 ADD PRIMARY KEY (`f_name_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
 ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
 ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
MODIFY `cart_tbl_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
MODIFY `f_name_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
