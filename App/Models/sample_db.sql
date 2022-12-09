-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mydb
-- Generation Time: Dec 09, 2022 at 01:06 PM
-- Server version: 10.2.5-MariaDB-10.2.5+maria~jessie
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `five`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `surname` varchar(8) DEFAULT NULL,
  `name` varchar(7) DEFAULT NULL,
  `registration_date` varchar(10) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `brand` varchar(6) DEFAULT NULL,
  `user_type` varchar(8) DEFAULT NULL,
  `account_status` varchar(8) DEFAULT NULL,
  `balance` decimal(7,2) DEFAULT NULL,
  `bonus_balance` int(3) DEFAULT NULL,
  `currency` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `registration_date`, `username`, `brand`, `user_type`, `account_status`, `balance`, `bonus_balance`, `currency`) VALUES
(1, 'bane', 'cad', '11/1/2022', 'clone', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(2, 'Bonteri', 'Lux', '11/1/2022', 'senator', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(3, 'Amedda', 'Mas', '8/1/2022', 'chagrian', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(4, 'Antilles', 'Colton', '9/1/2022', 'raymus', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(5, 'Baba', 'Panda', '11/2/2022', 'aqualish', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(6, 'Beckett', 'Val', '11/16/2022', 'coaxium', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(7, 'Bibble', 'Sio', '11/16/2022', 'naboo', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(8, 'Beckett', 'Tobias', '11/11/2022', 'woody', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(9, 'Bendu', 'The', '5/6/1972', 'baker', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(10, 'Billaba', 'Depa', '', 'oneill', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(11, 'Jar', 'Jar', '', 'binks', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(12, 'Bliss', 'Zorii', '', 'spice', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(13, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(14, 'Narkina', 'Ulaf', '8/1/2022', 'tablefive', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(15, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(16, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(17, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(18, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(19, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(20, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(21, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(22, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(23, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(24, 'Guerrera', 'Saw', '8/1/2022', 'warrior', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(25, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(26, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(27, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(28, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(29, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(30, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(31, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(32, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(33, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(34, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(35, 'Nemik', 'Karis', '8/1/2022', 'datapad', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(36, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(37, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(38, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(39, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(40, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(41, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(42, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(43, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(44, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(45, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(46, 'Barcona', 'Taramyn', '8/1/2022', 'aldhani', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(47, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(48, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(49, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(50, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(51, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(52, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(53, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(54, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(55, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(56, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(57, 'Kaz', 'Cinta', '8/1/2022', 'stature', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(58, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(59, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(60, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(61, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(62, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(63, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(64, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(65, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(66, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(67, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(68, 'Pamular', 'Freedi', '8/1/2022', 'limbs', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(69, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(70, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(71, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(72, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(73, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(74, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(75, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(76, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(77, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(78, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(79, 'Loy', 'Kino', '8/1/2022', 'inside', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(80, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(81, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(82, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(83, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(84, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(85, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(86, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(87, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(88, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(89, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(90, 'Marki', 'Kleya', '8/1/2022', 'antique', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(91, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(92, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(93, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(94, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(95, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(96, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(97, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(98, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(99, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(100, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(101, 'Sculdunk', 'Stekan', '8/1/2022', 'davoson', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(102, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(103, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(104, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(105, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(106, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(107, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(108, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(109, 'Doe', 'John', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(110, 'Disney', 'Walt', '', 'gcarvalho', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(111, 'wayne', 'bruce', '11/1/2022', 'batman', 'dc', 'admin', 'active', '40000.00', 1, 'USD'),
(112, 'potter', 'harry', '8/1/2022', 'mage', 'wb', 'user', 'active', '123.75', 1, 'EUR'),
(113, 'stark', 'tony', '9/1/2022', 'ironman', 'marvel', 'user', 'active', '10000.50', 1, 'USD'),
(114, 'Odinson', 'Thor', '11/2/2022', 'Thor', 'Marvel', 'Admin', 'Active', '10000.50', 1, 'USD'),
(115, 'Kent', 'clark', '11/16/2022', 'Superman', 'DC', 'Employee', '', '653.00', 833, 'USD'),
(116, 'Sponge', 'Bod', '11/16/2022', 'Bob', 'DC', 'Manager', 'Active', '300.00', 144, 'USD'),
(117, 'Duck', 'Donald', '11/11/2022', 'Don', 'Marvel', 'Manager', 'Inactive', '686.00', 25, 'USD'),
(118, 'Doe', 'John', '5/6/1972', 'user', 'Marvel', 'Manager', 'Active', '412.00', 275, 'USD'),
(119, 'Disney', 'Walt', '', 'walt', '', 'Manager', 'Inactive', '995.00', 367, 'EUR'),
(120, 'Caleen', 'Bix', '', 'John', '', 'Manager', 'Active', '306.00', 312, 'USD'),
(121, 'Bridger', 'Ezra', '', 'gray', '', 'Employee', 'Active', '959.00', 698, 'USD'),
(777, 'Allie', 'Stass', '11/1/2022', 'tholothian', 'dc', 'admin', 'active', '40000.00', 1, 'USD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
