-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 10:35 AM
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
('DC2204171', 3, 440, '2017-04-22', 2),
('DC22041710', 3, 1980, '2017-04-22', 9),
('DC2204172', 3, 770, '2017-04-22', 3),
('DC2204173', 6, 220, '2017-04-22', 1),
('DC2204174', 3, 440, '2017-04-22', 1),
('DC2204175', 3, 220, '2017-04-22', 1),
('DC2204176', 6, 440, '2017-04-22', 1),
('DC2204177', 3, 660, '2017-04-22', 3),
('DC2204178', 3, 660, '2017-04-22', 3),
('DC2204179', 3, 220, '2017-04-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
`cart_tbl_id` int(11) NOT NULL,
  `sId` varchar(100) NOT NULL,
  `cartId` varchar(100) NOT NULL,
  `userId` int(11) NOT NULL,
  `foodNameId` int(11) NOT NULL,
  `foodName` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_temp`
--

CREATE TABLE IF NOT EXISTS `tbl_cart_temp` (
`cart_tbl_id` int(11) NOT NULL,
  `cartId` varchar(50) NOT NULL,
  `userId` int(50) NOT NULL,
  `foodNameId` int(50) NOT NULL,
  `foodName` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_cart_temp`
--

INSERT INTO `tbl_cart_temp` (`cart_tbl_id`, `cartId`, `userId`, `foodNameId`, `foodName`, `price`, `quantity`, `image`, `date`) VALUES
(1, 'DC2204171', 3, 6, 'Chickn Curry', '200', 1, 'upload/8701466b05.jpg', '2017-04-22'),
(2, 'DC2204171', 3, 8, 'Chicken Ball', '200', 1, 'upload/8627e7cec3.jpg', '2017-04-22'),
(3, 'DC2204172', 3, 10, 'aluvaji', '200', 1, 'upload/8627e7cec3.jpg	', '2017-04-22'),
(4, 'DC2204172', 3, 9, 'aluporota', '200', 1, 'upload/8627e7cec3.jpg	', '2017-04-22'),
(5, 'DC2204172', 3, 7, 'Chickan Soup', '300', 1, 'upload/fd65340ec6.jpg', '2017-04-22'),
(6, 'DC2204173', 6, 6, 'Chickn Curry', '200', 1, 'upload/8701466b05.jpg', '2017-04-22'),
(7, 'DC2204174', 3, 5, 'mixed  vegetable', '400', 1, 'upload/85e33c55e2.jpg', '2017-04-22'),
(8, 'DC2204175', 3, 9, 'aluporota', '200', 1, 'upload/8627e7cec3.jpg	', '2017-04-22'),
(9, 'DC2204176', 6, 5, 'mixed  vegetable', '400', 1, 'upload/85e33c55e2.jpg', '2017-04-22'),
(10, 'DC2204177', 3, 6, 'Chickn Curry', '200', 1, 'upload/8701466b05.jpg', '2017-04-22'),
(11, 'DC2204177', 3, 10, 'aluvaji', '200', 1, 'upload/8627e7cec3.jpg	', '2017-04-22'),
(12, 'DC2204177', 3, 6, 'Chickn Curry', '200', 1, 'upload/8701466b05.jpg', '2017-04-22');

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
(11, 'velpuri', 'Select Category', '20', 'upload/8627e7cec3.jpg	', 'Relying on the default value of an uninitialized variable is problematic in the case of including one file into another which uses the same variable name. It is also a major security risk with register_globals turned on. E_NOTICE level error is issued in case of working with uninitialized variables, however not in the case of appending elements to the uninitialized array. isset() language construct can be used to detect if a variable has been already initialized. Additionally and more ideal is the solution of empty() since it does not generate a warning or error message if the variable is not initialized. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
`food_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`food_id`, `f_name`) VALUES
(4, 'breakfast'),
(5, 'lunch'),
(6, 'snack'),
(7, 'dinner');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
`order_id` int(11) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `food_id` int(100) NOT NULL,
  `food_name` text NOT NULL,
  `food_image` varchar(100) NOT NULL,
  `food_price` int(100) NOT NULL,
  `food_quantity` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `invoice_id`, `user_id`, `food_id`, `food_name`, `food_image`, `food_price`, `food_quantity`, `date`) VALUES
(1, 'DC2204171', 6, 6, 'Chickn Curry', 'upload/8701466b05.jpg', 200, 1, '2017-04-22'),
(2, 'DC2204172', 6, 6, 'Chickn Curry', 'upload/8701466b05.jpg', 200, 1, '2017-04-22'),
(3, 'DC2204172', 6, 10, 'aluvaji', 'upload/8627e7cec3.jpg	', 200, 1, '2017-04-22'),
(4, 'DC2204173', 6, 6, 'Chickn Curry', 'upload/8701466b05.jpg', 200, 1, '2017-04-22'),
(5, 'DC2204174', 6, 6, 'Chickn Curry', 'upload/8701466b05.jpg', 200, 3, '2017-04-22'),
(6, 'DC2204174', 6, 10, 'aluvaji', 'upload/8627e7cec3.jpg	', 200, 1, '2017-04-22'),
(7, 'DC2204175', 6, 10, 'aluvaji', 'upload/8627e7cec3.jpg	', 200, 1, '2017-04-22'),
(8, 'DC2204175', 6, 10, 'aluvaji', 'upload/8627e7cec3.jpg	', 200, 1, '2017-04-22'),
(9, 'DC2204176', 6, 7, 'Chickan Soup', 'upload/fd65340ec6.jpg', 300, 1, '2017-04-22');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `userName`, `phone`, `email`, `password`, `address`) VALUES
(3, 'marzia', 13743875, 'koli@gmail.com', 12345, 'gazipura'),
(4, 'marzia', 8745, 'koli@gmail.com', 12345, 'gazipura'),
(5, 'marzia', 1976636748, 'koli@gmail.com', 12345, 'gazipura'),
(6, 'ashrika', 91234567, 'ashrika@gmail.com', 12345, 'gazipura'),
(7, 'mewni', 926656576, 'mewni@gmail.com', 123, 'gp'),
(8, 'ashu', 912534, 'ashu@gmail.com', 123, 'gp'),
(9, 'mewni', 12345, 'mewni@gmail.com', 123345, 'gp');

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
-- Indexes for table `tbl_cart_temp`
--
ALTER TABLE `tbl_cart_temp`
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
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
 ADD PRIMARY KEY (`order_id`);

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
MODIFY `cart_tbl_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cart_temp`
--
ALTER TABLE `tbl_cart_temp`
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
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
