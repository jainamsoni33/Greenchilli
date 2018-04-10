-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2017 at 06:35 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greenchili2415`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincheck`
--

CREATE TABLE IF NOT EXISTS `admincheck` (
  `neworder_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `astatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Username`, `Password`, `astatus`) VALUES
('admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `pnumber` bigint(10) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `dtime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fname`, `emailid`, `pnumber`, `msg`, `dtime`) VALUES
('Prem', 'pratikshasingh97@gmail.com', 9999999999, 'xxxxxxxxxx', '2017-08-31 05:54:35'),
('Prem', 'vpstechub@gmail.com', 9999999999, 'zzzzzzzzz hi', '2017-08-31 05:58:08'),
('Premnath', 'pratikshasingh97@gmail.com', 9999999999, 'z', '2017-08-31 05:59:22'),
('Premnath', 'vpstechub@gmail.com', 9999999999, 'xxxxxx', '2017-08-31 06:06:34'),
('Premnath', 'vpstechub@gmail.com', 9999999999, 's', '2017-08-31 06:07:51'),
('jainam', 'jainamsoni33@gmail.com', 9789078721, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2017-09-01 09:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `menu_category`
--

CREATE TABLE IF NOT EXISTS `menu_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `menu_category`
--

INSERT INTO `menu_category` (`category_id`, `category_name`) VALUES
(1, 'Soups'),
(2, 'Vegetarian starters'),
(4, 'Non-veg starters'),
(5, 'Vegetarian Main Course'),
(6, 'Non-veg Main Course'),
(7, 'Rice'),
(8, 'Noodles'),
(9, 'Thai'),
(10, 'Make Your Own Wok');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(255) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `Veg` int(11) NOT NULL,
  `chicken` int(11) NOT NULL,
  `seafood` int(11) NOT NULL,
  `fish` int(11) NOT NULL,
  `prawns` int(11) NOT NULL,
  `kingprawns` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=158 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `itemname`, `categoryid`, `Veg`, `chicken`, `seafood`, `fish`, `prawns`, `kingprawns`, `Description`) VALUES
(1, 'Clear Soup', 1, 130, 140, 170, 0, 0, 0, 'A simple soup of vegetables cooked in vegetables'),
(2, 'Manchow', 1, 130, 140, 170, 0, 0, 0, 'Soya chilli flavoured thick soup'),
(3, 'Lung Fung', 1, 130, 140, 170, 0, 0, 0, 'A thick soup made with lemon, chili peppers & Chinese vegetables'),
(4, 'Sweet Corn ', 1, 130, 140, 170, 0, 0, 0, 'Thick cream style corn soup'),
(5, 'Hot & Sour', 1, 130, 140, 170, 0, 0, 0, 'Thick soup with crushed black pepper & vinegar, in soya base'),
(6, 'Talu Mein', 1, 130, 140, 170, 0, 0, 0, 'Cooked with noodles & lots of vegetables.'),
(7, 'Wontons ', 1, 130, 140, 170, 0, 0, 0, 'Enjoy the Wonton Soup hot and fresh.'),
(8, 'Spring Onion Mint ', 1, 130, 140, 170, 0, 0, 0, 'Spring Onion Soup Flavoured with Mint'),
(9, 'Lemon Chilly Corainder', 1, 130, 140, 170, 0, 0, 0, 'Guess that is what the chef makes for his mum when he missed home'),
(10, 'Sea Wars', 1, 0, 0, 170, 0, 0, 0, 'Mixed sea food with freshminced green chili & flavoured with sesame oil'),
(11, 'Tom Yum ', 1, 130, 140, 170, 0, 0, 0, 'A chefs Speciality'),
(12, 'Green Chili Chefs', 1, 150, 170, 180, 0, 0, 0, 'This is what most of our guests love to try so let the chef cook his art for you'),
(13, 'Spring Rolls', 2, 190, 0, 0, 0, 0, 0, 'Everyone''s Choice'),
(14, 'Manchurian', 2, 190, 0, 0, 0, 0, 0, 'Mixed vegetable balls deep fried and tossed in a delicious Chinese sauces- a perfect starter.'),
(15, 'Wontons Steamed', 2, 190, 0, 0, 0, 0, 0, 'Flour Strips filled with sumptuous preparation and served hot'),
(16, 'Chow Chu Potato', 2, 190, 0, 0, 0, 0, 0, 'Crunchy Potato tossed with special sauce'),
(17, 'Stir Fried Chinese Greens', 2, 200, 0, 0, 0, 0, 0, 'Stir fried exotic chinese vegetable tossed with pepper & chilli'),
(18, 'Mushroom Chilly Dry', 2, 200, 0, 0, 0, 0, 0, 'Deep fried mushroom tossed in spring onions & chilly in soya sauce'),
(19, 'Veg. Crispy', 2, 200, 0, 0, 0, 0, 0, 'Mixed assorted crispy vegetable in Red Chilli Sauce'),
(20, 'Crispy Vegetable Shanghai', 2, 200, 0, 0, 0, 0, 0, 'Mixed assorted crispy vegetable in Shanghai Sauce'),
(21, 'Crispy Vegetable Shanghai (Exotic)', 2, 220, 0, 0, 0, 0, 0, 'Assorted Exotic crispy vegetable in Shanghai Sauce'),
(22, 'Chilly Paneer Dry', 2, 210, 0, 0, 0, 0, 0, 'Stir fried deep fried cottage cheese cooked with delicious Chinese sauces'),
(23, 'Hot Garlic Paneer Dry', 2, 210, 0, 0, 0, 0, 0, 'Cubes of cottage cheese cooked in garlic and sauce in chinese style.'),
(24, 'Schezuan Paneer Dry', 2, 210, 0, 0, 0, 0, 0, 'Cubes of cottage cheese cooked in schezuan sauce.'),
(25, 'Hunan Paneer Dry', 2, 210, 0, 0, 0, 0, 0, 'Cubes of cottage cheese cooked in hunan sauce'),
(26, 'Hakka Paneer Dry', 2, 210, 0, 0, 0, 0, 0, 'Cubes of cottage cheese cooked in Chinese style'),
(27, 'Crispy Thread Paneer', 2, 220, 0, 0, 0, 0, 0, 'Finger cut cottage cheese wrapped in a flour stripe'),
(28, 'Crispy Spinach Paneer', 2, 220, 0, 0, 0, 0, 0, 'Cubes of cottage Cheese tossed in red sauce and served with crispy spinach'),
(29, 'Paneer Shanghai Dry', 2, 220, 0, 0, 0, 0, 0, 'Cottage cheese in a special shanghai preparation'),
(30, 'Paneer & Mushroom In Sambal Sauce Dry', 2, 240, 0, 0, 0, 0, 0, 'Deep fried Cottage Cheese with Mushroom tossed in sambal sauce'),
(31, 'Kung Pao Paneer', 2, 240, 0, 0, 0, 0, 0, 'Cottage Cheese cooked with cashew nut & flavoured with celery shoot'),
(32, 'Kimchee Salad', 2, 150, 0, 0, 0, 0, 0, 'Cabbage salad in vinegar & sweet chili sauce'),
(33, ' Steamed Wontons', 4, 0, 200, 0, 0, 250, 0, 'Flour Strips with sumptuous preparation & served hot'),
(34, 'Fried Wontons', 4, 0, 200, 0, 0, 250, 0, 'Fried flour strips filled with sumptuous preparation & served hot'),
(35, 'Spring Rolls', 4, 0, 210, 0, 250, 270, 0, 'Everyones Choice'),
(36, 'Chicken Lollipop', 4, 0, 210, 0, 0, 0, 0, 'Everyones Choice'),
(37, 'Drums of Heaven', 4, 0, 220, 0, 0, 0, 0, 'Chicken Lollipop sauteed in special red sauce'),
(38, 'Chili Dry ', 4, 0, 210, 0, 250, 270, 350, ' Stir fried meat cooked with delicious Chinese sauces'),
(39, 'Manchurian Dry ', 4, 0, 210, 0, 250, 270, 350, 'Diced meat balls deep fried and tossed in a delicious Chinese sauces'),
(40, ' Hunan Dry ', 4, 0, 210, 0, 250, 270, 350, 'Diced meat cooked in hunan sauce'),
(41, ' Schezuan Dry ', 4, 0, 210, 0, 250, 270, 350, 'Diced meat cooked in schezuan sauce.'),
(42, 'Salt & Pepper Special', 4, 0, 220, 0, 250, 280, 360, 'Meat sauteed with ginger & garlic & tossed in salt & pepper'),
(43, 'Crispy Chicken', 4, 0, 220, 0, 0, 0, 0, 'Crunchy shredded chicken tossed with fresh garden chilly & spicy red sauce'),
(44, 'Grilled Thai (Chicken/Fish)', 4, 0, 230, 0, 270, 0, 0, 'Grilled chicken/Fish tossed with chilly & basil in Thai style'),
(45, 'Black Pepper', 4, 0, 230, 0, 270, 290, 360, 'Diced pieces of meat tossed with black pepper sauce'),
(46, 'Barbeque', 4, 0, 230, 0, 270, 290, 360, 'Diced pieces of meat tossed with barbeque sauce'),
(47, 'Hakka', 4, 0, 230, 0, 270, 290, 360, 'Choice of meat assorted with soya & flavored with chinese sauce.'),
(48, 'Teriyaki', 4, 0, 230, 0, 270, 290, 360, 'Choice of meat assorted with soya & flavored with teriyaki sauce.'),
(49, 'Hoisin', 4, 0, 230, 0, 270, 290, 360, 'Choice of meat assorted with soya & flavored with hoisin sauce.'),
(50, 'Crispy Spinach', 4, 0, 230, 0, 270, 290, 360, 'Shredded crispy spinach assorted with choice of meat prepared with honey'),
(51, 'Honey Smoked', 4, 0, 220, 0, 260, 280, 360, 'Cubes of meat marinated with honey & cooked in Chinese style.Try this Greenchili Speciality'),
(52, 'Butter Garlic', 4, 0, 230, 0, 270, 290, 360, 'Chicken/Fish/Prawns Deep fried with chilly and green onion in butter garlic sauce'),
(53, 'Chicken Dynamite', 4, 0, 230, 0, 0, 0, 0, 'Sliced chicken prepared in chef’s special recipe'),
(54, 'Hot Garlic', 4, 0, 230, 0, 270, 290, 360, 'Diced meat sauteed in hot garlic sauce garnished with spring onion'),
(55, 'Shanghai', 4, 0, 230, 0, 270, 290, 360, 'Diced meat sauteed in shanghai sauce garnished with spring onion'),
(56, 'Kung Pao', 4, 0, 240, 0, 270, 300, 370, 'Choice of meat sauteed with chef special sauce & garnished with cashew nuts'),
(57, 'Poppers', 4, 0, 220, 0, 270, 290, 370, 'Deep fried meat, prepared with special red chilli batter'),
(58, 'Wasabi Prawns', 4, 0, 0, 0, 0, 0, 370, 'Deep fried king prawns in special chef recipe'),
(59, 'Green Chilli Special', 4, 0, 240, 0, 270, 300, 370, 'Ooops!!.. Its our chefs special recipe'),
(60, 'Garlic Pepper Dry', 4, 0, 230, 0, 270, 290, 360, 'Diced meat tossed with a special garlic pepper recipe'),
(61, 'Grilled Chicken Black Bean', 4, 0, 230, 0, 270, 290, 360, 'Grilled sliced chicken sauteed with crushed black bean'),
(62, 'Manchurian Sauce Vegetable', 5, 200, 0, 0, 0, 0, 0, 'Regular choice of vegetables in a basic Chinese sauces '),
(63, ' Sweet and sour sauce vegetables', 5, 200, 0, 0, 0, 0, 0, 'Regular choice of vegetables cooked in sweet & sour sauce.'),
(64, ' Hot Garlic sauce vegetables', 5, 200, 0, 0, 0, 0, 0, 'Regular choice of vegetables cooked in hot garlic sauce.'),
(65, ' Hunan sauce vegetables', 5, 200, 0, 0, 0, 0, 0, 'Regular choice of vegetables cooked in Hunan sauce.'),
(66, ' Burnt Garlic sauce vegetables', 5, 200, 0, 0, 0, 0, 0, 'Regular choice of vegetables cooked in burnt garlic sauce.'),
(67, ' Schezuan sauce vegetables', 5, 200, 0, 0, 0, 0, 0, 'Regular choice of vegetables cooked in schezuan sauce.'),
(69, ' Sweet & Sour Paneer', 5, 230, 0, 0, 0, 0, 0, 'Regular choice of paneer cooked in sweet & sour sauce.'),
(70, ' Chili Paneer', 5, 230, 0, 0, 0, 0, 0, 'Regular choice of paneer cooked in chili sauce'),
(71, ' Hot Garlic Paneer', 5, 230, 0, 0, 0, 0, 0, 'Regular choice of paneer cooked in hot garlic sauce.'),
(72, ' Schezuan Paneer', 5, 230, 0, 0, 0, 0, 0, 'Regular choice of paneer cooked in Schezuan sauce.'),
(73, ' Hunan Sauce Paneer', 5, 230, 0, 0, 0, 0, 0, 'Regular sauce of paneer cooked in hunan sauce'),
(74, ' Hakka Paneer', 5, 230, 0, 0, 0, 0, 0, 'Regular choice of paneer cooked in chinese sauces.'),
(75, 'Exotic Veg(Brocolli, Zuccini, Mushroom, Bokchoy)', 5, 230, 0, 0, 0, 0, 0, 'Exotic vegetables cooked in delicious chinese sauces.'),
(76, 'Zuccini Exotic Veg', 5, 230, 0, 0, 0, 0, 0, ''),
(77, 'Mushroom Exotic Veg', 5, 230, 0, 0, 0, 0, 0, ''),
(78, 'Bokchoy Exotic Veg', 5, 230, 0, 0, 0, 0, 0, ''),
(79, 'Paneer American Corn', 5, 230, 0, 0, 0, 0, 0, 'Cottage cheese assorted with whole American corn cooked with fresh red peppers in hot red spicy sauce'),
(80, 'Paneer Chilly Garlic Sauce', 5, 230, 0, 0, 0, 0, 0, 'Diced pieces of cottage cheese, cheese garlic peels, red chilies in brown chili sauce'),
(81, 'Green Chili Delight Sauce', 5, 260, 0, 0, 0, 0, 0, 'Stir fry oriental vegetables cooked with exotic vegetables'),
(82, 'Chilly Sauce', 6, 0, 230, 0, 260, 290, 360, 'Diced meat cooked in basic chinese sauces.'),
(83, ' Hunan Sauce', 6, 0, 230, 0, 260, 290, 360, 'Diced meat cooked in hunan sauce'),
(84, ' Korean Chicken', 6, 0, 230, 0, 0, 0, 0, 'Diced chicken cooked in korean style.'),
(85, ' Coriander Chicken', 6, 0, 230, 0, 0, 0, 0, 'Diced cooked in chinese style'),
(86, ' Schezuan Sauce', 6, 0, 230, 0, 260, 290, 360, 'Diced meat tossed in schezuan sauce.'),
(87, ' Burnt Chili Sauce', 6, 0, 230, 0, 260, 290, 360, 'Diced meat cooked in soya sauce & flavored with burnt chili sauce '),
(88, 'Manchurian Sauce', 6, 0, 230, 0, 260, 290, 360, 'Diced pieces of meat tossed in a delicious Chinese sauces'),
(89, 'Chicken Basil Chili sauce', 6, 0, 230, 0, 0, 0, 0, 'Diced chicken cooked in soya chili & flavoured with basil leaves'),
(90, 'Chicken Oyster Sauce', 6, 0, 240, 0, 0, 0, 0, 'Diced Chicken cooked in oyster sauce.'),
(91, 'Hot Garlic Sauce', 6, 0, 240, 0, 0, 0, 0, 'Diced Chicken cooked in hot garlic sauce.'),
(92, 'Chicken Mandarin', 6, 0, 250, 0, 0, 0, 0, 'Diced Chicken cooked in Mandarin style'),
(93, 'Double Cook Chicken ', 6, 0, 280, 0, 0, 0, 0, 'Chicken cooked two ways in a chef special sauce'),
(94, 'Green Chili Special Sauce ', 6, 0, 280, 0, 0, 0, 0, 'Diced Chicken cubes marinated in garlic,ginger paste,mushrooms,baby corn,bokchoy in  special sauce'),
(95, 'Hakka Sauce', 6, 0, 240, 0, 280, 300, 380, 'Diced meat cooked in Hakka Sauce.'),
(96, 'Teriyaki Sauce', 6, 0, 240, 0, 280, 300, 380, 'Diced meat cooked in teriyaki sauce.'),
(97, 'Hoisin Sauce', 6, 0, 240, 0, 280, 300, 380, 'Diced meat cooked in Hoisin Sauce.'),
(98, ' Hunan Egg', 6, 0, 210, 0, 0, 0, 0, 'Diced egg cooked in Hunan sauce'),
(99, ' Korean Egg', 6, 0, 210, 0, 0, 0, 0, 'Diced egg cooked in korean style'),
(100, ' Schezuan Egg', 6, 0, 210, 0, 0, 0, 0, 'Diced egg cooked in schezuan sauce.'),
(101, ' Burnt Chili Egg', 6, 0, 210, 0, 0, 0, 0, 'Diced egg cooked in burnt chili sauce.'),
(102, ' Manchurian Egg', 6, 0, 210, 0, 0, 0, 0, 'Diced egg cooked in manchurian sauce'),
(103, 'Black Bean Sauce', 6, 0, 240, 0, 280, 300, 380, 'Diced meat cooked in Black bean Sauce'),
(104, 'Black Pepper', 6, 0, 240, 0, 280, 300, 380, 'Diced meat cooked in Black pepper Sauce'),
(105, 'Chilly Egg ', 6, 0, 210, 0, 0, 0, 0, 'Diced egg cooked in chili sauce.'),
(106, 'Chicken in Sapo Sauce', 6, 0, 240, 0, 0, 0, 0, 'Diced chicken tossed in spicy sapo sauce'),
(116, 'Hot garlic Fish/Prawns', 6, 0, 0, 0, 260, 290, 360, 'Diced meat cooked in hot garlic sauce.'),
(122, 'Burnt Garlic Sauce Fish/Prawns', 6, 0, 0, 0, 260, 290, 360, 'Diced meat cooked in burnt garlic sauce.'),
(124, 'Fish/Prawns Chilly Wine ', 6, 0, 0, 0, 270, 290, 370, 'Fish/Prawns cooked with soya sauce & flavoured with wine'),
(125, 'Three Flavour Fish/Prawns', 6, 0, 0, 0, 270, 290, 380, 'Fish/Prawns cooked with Chefs own created flavoured sauce '),
(126, 'Sea-Wars', 6, 0, 0, 0, 300, 0, 0, 'Combination of mixed sea food cooked with special flavoured'),
(127, 'Green Chili Fish/Prawns', 6, 0, 0, 0, 300, 330, 400, 'Fish/ Prawns cooked with oriental vegetables in special sauce'),
(128, 'Regular Fried Rice', 7, 190, 200, 0, 0, 250, 0, 'Chinese rice with aroma'),
(129, 'Burnt Garlic Fried Rice', 7, 200, 210, 0, 0, 260, 0, 'Dry red chilli, ginger, garlic, spring onions & burnt garlic sauce'),
(130, 'Steamed Rice ', 7, 140, 0, 0, 0, 0, 0, 'Steamed chinese rice with aroma'),
(131, 'Schezuan Fried Rice', 7, 200, 210, 0, 0, 260, 0, 'Dry red chilli, ginger, garlic, spring onions & schezuan sauce'),
(132, 'American Corn Coriander Rice', 7, 200, 210, 0, 0, 260, 0, 'Rice cooked with American corn, coriander & garlic'),
(133, 'Mexican Fried Rice', 7, 200, 230, 0, 0, 280, 0, 'Rice cooked in Mexican style'),
(134, 'Manchurian Rice', 7, 230, 240, 0, 0, 290, 0, 'Rice cooked and served with Manchurian sauce'),
(135, 'Stewed Rice', 7, 230, 240, 0, 0, 290, 0, 'Steamed rice topped with vegetables in white sauce'),
(136, 'Pot Rice', 7, 230, 240, 0, 0, 290, 0, 'clay pot steamed rice with aroma of five spices & imported sauce'),
(137, 'Fortune Pot Rice', 7, 240, 250, 0, 0, 300, 0, 'clay pot steamed rice with aroma of five spices & hot garlic sauce'),
(138, 'Triple Schezuan Fried Rice', 7, 230, 240, 0, 0, 290, 0, 'Rice & Noodles cooked & served with schezuan sauce'),
(139, 'Korean Rice', 7, 230, 250, 0, 0, 290, 0, 'Chef''s Special Recipe'),
(140, 'Green Chili Special Rice', 7, 230, 250, 0, 0, 290, 0, 'Have a “Rice Long Life”'),
(141, 'Egg Fried Rice', 7, 200, 0, 0, 0, 0, 0, ''),
(142, 'Egg Schezuan Fried Rice', 7, 210, 0, 0, 0, 0, 0, ''),
(144, 'Hakka Noodles', 8, 180, 190, 0, 0, 250, 0, 'Everyone''s choice'),
(145, 'Chili Garlic  Noodles', 8, 180, 190, 0, 0, 250, 0, 'Noodles cooked in chili garlic noodles'),
(146, 'Schezaun Noodles', 8, 190, 200, 0, 0, 260, 0, 'Soft noodles, dry red chilli sauce, shredded vegetables & spring onion'),
(147, 'Singapore Noodles', 8, 190, 200, 0, 0, 260, 0, 'Soft noodles cooked in Singapore style'),
(148, 'Malaysian Noodles', 8, 200, 210, 0, 0, 270, 0, 'Flat noodles cooked with vegetables, spinach'),
(149, 'Pan Fried Noodles', 8, 200, 210, 0, 0, 270, 0, 'Choice of sauce/ schezuan/ hot garlic/ brown sauce'),
(150, 'Chop Suey (American)', 8, 200, 210, 0, 0, 270, 0, 'Crispy fried noodles cooked with pineapple,tomatoes,onions,capsicum & cabbage in sweet & sour.Well this is american'),
(151, 'Green Chili Special Noodles', 8, 210, 220, 0, 0, 280, 0, 'Noodles for the Health conscious!'),
(152, 'Chop Suey (Chinese)', 8, 200, 210, 0, 0, 270, 0, 'Crispy fried noodles cooked with diced vegetables in chili white sauce'),
(153, 'Thai Chilly Basil Noodles', 8, 210, 220, 0, 0, 280, 0, 'Soft noodles cooked in Thai style'),
(154, 'Green Thai Curry', 9, 290, 300, 0, 0, 310, 0, ' (without rice)'),
(155, 'Green Thai Curry', 9, 300, 310, 0, 0, 320, 0, ' (with rice)'),
(156, 'Red Thai Curry', 9, 290, 300, 0, 0, 310, 0, ' (without rice)'),
(157, 'Red Thai Curry', 9, 300, 310, 0, 0, 320, 0, ' (with rice)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `setpassword` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `temp_address` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `emailId` (`emailId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `firstname`, `lastname`, `emailId`, `contact`, `setpassword`, `address`, `temp_address`) VALUES
(1, 'Premnath', 'Borkar', 'premnath.borkar@gmail.com', 8655745440, 'premnath', 'dfads,Bandra-West', ''),
(2, 'Anmol', 'Gehani', 'anmol.gehani@gmail.com', 9819896610, 'anmol1919', 'Meena Apartments, Hill Road, ,Bandra-West', ''),
(4, 'jainam', 'soni', 'jainamsoni33@gmail.com', 9619100569, 'jainam', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', ''),
(5, 'yash', 'sawant', 'sawantyash11@gmail.com', 9619617337, 'sawyash1211', 'a-203, shree kunj vihar amboli andheri west', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE IF NOT EXISTS `user_orders` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `ordered_items` varchar(255) NOT NULL,
  `sortedorders` varchar(255) NOT NULL,
  `sub-total` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `confirm_flag` int(11) NOT NULL DEFAULT '0',
  `accept_flag` varchar(11) NOT NULL DEFAULT 'abc',
  `user_address` text NOT NULL,
  `orderdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=537 ;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`u_id`, `user_id`, `ordered_items`, `sortedorders`, `sub-total`, `total`, `confirm_flag`, `accept_flag`, `user_address`, `orderdate`, `status`) VALUES
(17, 6, 'Green Thai Curry, ', '', 0, 300, 1, '0', '', '2017-08-15 17:02:51', ''),
(18, 6, 'Lemon Chilly Corainder, ', '', 0, 130, 1, '0', '', '2017-08-15 17:02:51', ''),
(29, 0, '', '', 0, 1037, 1, '0', '', '2017-08-15 17:02:51', 'paid'),
(30, 0, '', '', 0, 480, 0, '0', '', '2017-08-15 17:02:51', ''),
(165, 2, 'American Corn Coriander Rice, ', '', 0, 200, 1, '0', 'guyhuihio,Khar-West', '2017-08-15 17:02:51', ''),
(167, 10, 'Chop Suey, Pan Fried Noodles, Pan Fried Noodles, ', '', 0, 519, 1, '0', '', '2017-08-15 17:02:51', ''),
(214, 11, 'Clear soups, ', '', 0, 140, 1, '0', '', '2017-08-15 17:02:51', ''),
(215, 11, 'Manchow soup, Manchow soup, ', '', 0, 310, 1, '0', '', '2017-08-15 17:02:51', ''),
(216, 11, 'Manchow soup, ', '', 0, 140, 1, '0', '7654,Bandra-West', '2017-08-15 17:02:51', ''),
(217, 11, 'Clear soups, ', '', 0, 170, 1, '0', 'y5gvfdc,Bandra-West', '2017-08-15 17:02:51', ''),
(218, 11, 'Clear soups, ', '', 0, 170, 1, '0', 'gvfdcx,Bandra-West', '2017-08-15 17:02:51', ''),
(219, 11, 'lung fung, ', '', 0, 140, 1, '0', 'sdfgg,Bandra-West', '2017-08-15 17:02:51', ''),
(220, 11, 'Talu Mein Soup, ', '', 0, 130, 1, '0', 'ertyu,Bandra-West', '2017-08-15 17:02:51', ''),
(250, 5, 'Manchow, Manchow, Manchow, Manchow, Manchow, Manchow, ', '', 510, 434, 1, '0', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,,Khar-West', '2017-08-15 17:02:51', ''),
(257, 7, 'Clear Soup, Clear Soup, ', '', 170, 170, 1, '0', 'I gcfhjcdfj,Bandra-West', '2017-08-15 17:02:51', ''),
(258, 7, 'Hot & Sour, Hot & Sour, ', '', 170, 170, 1, '0', '', '2017-08-15 17:02:51', ''),
(259, 7, 'Lung Fung, Lung Fung, ', '', 170, 170, 1, '0', 'Hgsihakowob Vg hwiwn,Bandra-West', '2017-08-15 17:02:51', ''),
(271, 5, 'Clear Soup, WokItems are 1.Chicken, 2.Fried Rice, 3.Hunan, 4.Extra Paneer,Spring Rolls, ', '', 680, 578, 1, '0', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-08-15 17:02:51', ''),
(272, 5, 'Clear Soup, WokItems are 1.Veg, 2.Fried Rice, 3.Hunan, 4.Extra Paneer,Chilly Chicken , ', '', 670, 570, 1, '0', 'aa,Bandra-West', '2017-08-15 17:02:51', ''),
(273, 5, 'Clear Soup, Clear Soup, WokItems are 1.Veg, 2.Fried Rice, 3.Hunan, 4.Extra Paneer,Choice of Regular Noodles, Choice of Regular Noodles, ', '', 590, 502, 1, '0', '', '2017-08-15 17:02:51', ''),
(274, 5, 'Clear Soup, Wontons (Steamed/Fried), WokItems are 1.Fish, 2.Fried Rice, 3.Hunan, 4.Extra Paneer,', '', 730, 621, 1, '0', '', '2017-08-15 17:02:51', ''),
(275, 5, ' Lung Fung, ', '', 170, 170, 1, '0', '', '2017-08-15 17:02:51', ''),
(277, 12, 'Clear Soup, Chili Garlic  Noodles, ', '', 350, 350, 1, '0', '', '2017-08-15 17:02:51', ''),
(278, 12, 'Clear Soup, Clear Soup, Green Thai Curry, ', '', 600, 510, 1, '0', '', '2017-08-15 17:02:51', ''),
(280, 12, 'Lung Fung,  Schezuan Chicken, ', '', 360, 360, 1, '0', '', '2017-08-15 17:02:51', ''),
(281, 12, ' Crispy Vegetable Shanghai, Kung Pao, ', '', 500, 425, 1, '0', '', '2017-08-15 17:02:51', ''),
(282, 12, 'Veg Clear Soup, Prawns Clear Soup, Veg Spring Rolls, Veg  Sweet and sour sauce vegetables, Chicken  Hunan Chicken, KingPrawns Chili Dry , Fish Spring Rolls, NonVeg Burnt Garlic Fried Rice, Veg Choice of Regular Noodles, Prawns Singapore Noodles, Veg Red T', '', 2770, 2355, 1, '0', '', '2017-08-15 17:02:51', ''),
(287, 7, 'Prawns Clear Soup, Prawns Clear Soup, ', '', 340, 360, 1, 'Accepted', 'zdg,Bandra-West', '2017-08-16 09:07:05', 'unpaid'),
(289, 7, 'Veg Clear Soup, NonVeg Clear Soup, Prawns Clear Soup, ', '', 440, 460, 1, 'Accepted', '', '2017-08-16 09:23:55', 'unpaid'),
(290, 7, 'Veg Clear Soup, NonVeg Clear Soup, Prawns Clear Soup, ', '', 440, 460, 1, 'Accepted', '', '2017-08-16 09:31:02', 'unpaid'),
(294, 7, 'Veg Clear Soup, NonVeg Clear Soup, Prawns Clear Soup, NonVeg Clear Soup, NonVeg Clear Soup, Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, Prawns Clea', '', 5720, 5740, 1, 'Accepted', 'abcdefghijklmnopqrstuvwxyz,,Bandra-West', '2017-08-16 09:48:24', 'unpaid'),
(295, 7, '      Non Non   Veg Clear Soup, Veg Clear Soup,          Veg Sweet Corn , NonVeg Sweet Corn , Prawns Sweet Corn , ', '', 440, 460, 1, 'Rejected', '', '2017-08-16 09:55:15', 'unpaid'),
(296, 7, 'Veg Lung Fung, NonVeg Lung Fung, Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, ', '', 1760, 1780, 1, 'Accepted', '', '2017-08-16 10:06:21', 'unpaid'),
(297, 7, 'Veg Spring Rolls, Veg Manchurian, Veg Wontons Steamed, Veg Chow Chu Potato, Veg Stir Fried Chinese Greens, Veg Mushroom Chilly Dry,  Veg Crispy Vegetable Shanghai, Veg Crispy Vegetable Shanghai, Veg Crispy Vegetable Shanghai (Exotic), Veg Chilly Paneer Dr', '', 4120, 4140, 1, 'Accepted', '', '2017-08-16 10:19:34', 'unpaid'),
(298, 7, '                                                    Prawns Honey Smoked, KingPrawns Honey Smoked, Fish Honey Smoked, Chicken Honey Smoked, Chicken Butter Garlic, Fish Butter Garlic, Prawns Butter Garlic, Prawns Butter Garlic, Prawns Butter Garlic, KingPra', '', 5450, 5470, 1, 'Accepted', '', '2017-08-16 10:54:30', 'unpaid'),
(300, 7, '      Veg Red Thai Curry, NonVeg Red Thai Curry, Prawns Red Thai Curry, ', '', 930, 950, 1, 'Accepted', '', '2017-08-16 11:06:23', 'unpaid'),
(301, 7, 'WokItems are 1.Veg, 2.Aromatic Rice, 3.Schezwan, 4.Extra Paneer,WokItems are 1.Veg, 2.Aromatic Rice, 3.Schezwan, 4.Extra Paneer,', '', 1880, 1900, 1, 'Accepted', '', '2017-08-16 11:11:43', 'unpaid'),
(302, 7, 'Veg Clear Soup, NonVeg Clear Soup, ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:23:02', 'unpaid'),
(303, 7, 'Prawns Clear Soup,  ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:24:13', 'unpaid'),
(304, 7, 'Veg Manchow, NonVeg Manchow, ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:26:13', 'unpaid'),
(305, 7, 'Prawns Lung Fung, ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:28:12', 'unpaid'),
(306, 7, 'NonVeg Sweet Corn , Veg Sweet Corn , ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:29:57', 'unpaid'),
(307, 7, 'Prawns Sweet Corn , ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:31:46', 'unpaid'),
(308, 7, 'Veg Hot & Sour,  NonVeg Hot & Sour, ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:32:42', 'unpaid'),
(309, 7, 'Prawns Hot & Sour, ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:34:42', 'unpaid'),
(310, 7, 'Veg Talu Mein, NonVeg Talu Mein, ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:36:13', 'unpaid'),
(311, 7, 'Veg Wontons , NonVeg Wontons , ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:37:20', 'unpaid'),
(312, 7, 'Veg Spring Onion Mint , NonVeg Spring Onion Mint , ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:38:40', 'unpaid'),
(313, 7, 'Prawns Spring Onion Mint , ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:41:42', 'unpaid'),
(314, 7, 'Veg Lemon Chilly Corainder, NonVeg Lemon Chilly Corainder, ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:42:59', 'unpaid'),
(315, 7, 'Prawns Lemon Chilly Corainder, ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:44:07', 'unpaid'),
(316, 7, 'Prawns Sea Wars, ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:45:18', 'unpaid'),
(317, 7, 'Veg Tom Yum , NonVeg Tom Yum , ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 11:48:03', 'unpaid'),
(318, 7, 'Prawns Tom Yum , ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:51:26', 'unpaid'),
(319, 7, 'Veg Green Chili Chefs, ', '', 150, 170, 1, 'Accepted', '', '2017-08-16 11:52:45', 'unpaid'),
(320, 7, 'NonVeg Green Chili Chefs, ', '', 170, 190, 1, 'Accepted', '', '2017-08-16 11:53:46', 'unpaid'),
(321, 7, 'Prawns Green Chili Chefs, ', '', 180, 200, 1, 'Accepted', '', '2017-08-16 11:54:46', 'unpaid'),
(322, 7, 'Veg Spring Rolls, ', '', 190, 210, 1, 'Accepted', '', '2017-08-16 11:55:51', 'unpaid'),
(323, 7, 'Veg Manchurian, ', '', 190, 210, 1, 'Accepted', '', '2017-08-16 11:57:02', 'unpaid'),
(324, 7, ' Veg Manchurian, ', '', 190, 210, 1, 'Accepted', '', '2017-08-16 11:58:22', 'unpaid'),
(325, 7, 'Veg Wontons Steamed, ', '', 190, 210, 1, 'Accepted', '', '2017-08-16 11:59:28', 'unpaid'),
(326, 7, 'Veg Chow Chu Potato, ', '', 190, 210, 1, 'Accepted', '', '2017-08-16 12:01:27', 'unpaid'),
(327, 7, 'Veg Stir Fried Chinese Greens, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 12:02:34', 'unpaid'),
(328, 7, 'Veg Mushroom Chilly Dry, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 12:04:06', 'unpaid'),
(329, 7, 'Veg Veg. Crispy, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 12:06:14', 'unpaid'),
(330, 7, 'Veg Crispy Vegetable Shanghai, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 12:07:26', 'unpaid'),
(331, 7, 'Veg Crispy Vegetable Shanghai (Exotic), ', '', 220, 240, 1, 'Accepted', '', '2017-08-16 12:11:09', 'unpaid'),
(332, 7, 'Veg Chilly Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:12:29', 'unpaid'),
(333, 7, 'Veg Hot Garlic Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:13:48', 'unpaid'),
(334, 7, 'Veg Schezuan Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:14:47', 'unpaid'),
(335, 7, 'Veg Hunan Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:15:43', 'unpaid'),
(336, 7, 'Veg Hakka Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:17:02', 'unpaid'),
(337, 7, 'Veg Crispy Thread Paneer, ', '', 220, 240, 1, 'Accepted', '', '2017-08-16 12:18:17', 'unpaid'),
(338, 7, 'Veg Crispy Vegetable Shanghai, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 12:19:46', 'unpaid'),
(339, 7, 'Veg Crispy Vegetable Shanghai (Exotic), ', '', 220, 240, 1, 'Accepted', '', '2017-08-16 12:21:20', 'unpaid'),
(340, 7, 'Veg Chilly Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:24:43', 'unpaid'),
(341, 7, 'Veg Hot Garlic Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:25:50', 'unpaid'),
(342, 7, 'Veg Schezuan Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:26:51', 'unpaid'),
(343, 7, 'Veg Hunan Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:28:08', 'unpaid'),
(348, 7, 'Veg Hakka Paneer Dry, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:31:34', 'unpaid'),
(349, 7, 'Veg Crispy Spinach Paneer, ', '', 220, 240, 1, 'Accepted', '', '2017-08-16 12:33:14', 'unpaid'),
(350, 7, 'Veg Paneer Shanghai Dry, ', '', 220, 240, 1, 'Accepted', '', '2017-08-16 12:34:21', 'unpaid'),
(351, 7, 'Veg Paneer Shanghai Dry, ', '', 220, 240, 1, 'Accepted', '', '2017-08-16 12:35:59', 'unpaid'),
(352, 7, 'Veg Paneer & Mushroom In Sambal Sauce Dry, ', '', 240, 260, 1, 'Accepted', '', '2017-08-16 12:37:13', 'unpaid'),
(353, 7, 'Veg Kung Pao Paneer, ', '', 240, 260, 1, 'Accepted', '', '2017-08-16 12:38:25', 'unpaid'),
(354, 7, 'Veg Kimchee Salad, ', '', 150, 170, 1, 'Accepted', '', '2017-08-16 12:39:30', 'unpaid'),
(355, 7, 'Chicken  Steamed Wontons, Prawns  Steamed Wontons, ', '', 450, 470, 1, 'Accepted', '', '2017-08-16 12:43:25', 'unpaid'),
(356, 7, 'Chicken Fried Wontons, Prawns Fried Wontons, ', '', 450, 470, 1, 'Accepted', '', '2017-08-16 12:44:59', 'unpaid'),
(357, 7, 'Chicken Spring Rolls, Fish Spring Rolls, Prawns Spring Rolls, ', '', 730, 750, 1, 'Accepted', '', '2017-08-16 12:46:24', 'unpaid'),
(358, 7, 'Chicken Chicken Lollipop, ', '', 210, 230, 1, 'Accepted', '', '2017-08-16 12:47:32', 'unpaid'),
(359, 7, 'Chicken Drums of Heaven, ', '', 220, 240, 1, 'Accepted', '', '2017-08-16 12:48:43', 'unpaid'),
(360, 7, 'Chicken Chili Dry , Fish Chili Dry , Prawns Chili Dry , KingPrawns Chili Dry , ', '', 1080, 1100, 1, 'Accepted', '', '2017-08-16 12:50:21', 'unpaid'),
(361, 7, 'Chicken Manchurian Dry , Fish Manchurian Dry , Prawns Manchurian Dry , KingPrawns Manchurian Dry , ', '', 1080, 1100, 1, 'Accepted', '', '2017-08-16 13:13:41', 'unpaid'),
(362, 7, 'Chicken  Schezuan Dry , Fish  Schezuan Dry , Prawns  Schezuan Dry , KingPrawns  Schezuan Dry , ', '', 1080, 1100, 1, 'Accepted', '', '2017-08-16 13:15:21', 'unpaid'),
(363, 7, 'Chicken Salt & Pepper Special, Fish Salt & Pepper Special, Prawns Salt & Pepper Special, KingPrawns Salt & Pepper Special, ', '', 1110, 1130, 1, 'Accepted', '', '2017-08-16 13:17:15', 'unpaid'),
(364, 7, 'Chicken Crispy Chicken, ', '', 220, 240, 1, 'Accepted', '', '2017-08-16 13:18:48', 'unpaid'),
(365, 7, 'Chicken Grilled Thai (Chicken/Fish), Fish Grilled Thai (Chicken/Fish), ', '', 500, 520, 1, 'Accepted', '', '2017-08-16 13:20:47', 'unpaid'),
(366, 7, 'Chicken Black Pepper/Black Bean, Fish Black Pepper/Black Bean, Prawns Black Pepper/Black Bean, KingPrawns Black Pepper/Black Bean, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:22:30', 'unpaid'),
(367, 7, 'Chicken Barbeque, Fish Barbeque, Prawns Barbeque, KingPrawns Barbeque, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:23:53', 'unpaid'),
(368, 7, 'Chicken Hakka, Fish Hakka, Fish Hakka, Prawns Hakka, KingPrawns Hakka, ', '', 1420, 1440, 1, 'Accepted', '', '2017-08-16 13:25:28', 'unpaid'),
(369, 7, 'Chicken Teriyaki, Fish Teriyaki, Prawns Teriyaki, KingPrawns Teriyaki, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:27:11', 'unpaid'),
(370, 7, 'Chicken Hoisin, Fish Hoisin, Prawns Hoisin, KingPrawns Hoisin, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:31:28', 'unpaid'),
(371, 7, 'Chicken Hoisin, Fish Hoisin, Prawns Hoisin, KingPrawns Hoisin, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:32:39', 'unpaid'),
(372, 7, 'Chicken Crispy Spinach, Fish Crispy Spinach, Prawns Crispy Spinach, KingPrawns Crispy Spinach, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:36:24', 'unpaid'),
(373, 7, 'Chicken Honey Smoked, Fish Honey Smoked, Prawns Honey Smoked, KingPrawns Honey Smoked, King Prawns Butter Garlic, Prawns Butter Garlic, Fish Butter Garlic, Chicken Butter Garlic, ', '', 2270, 2290, 1, 'Accepted', '', '2017-08-16 13:38:36', 'unpaid'),
(374, 7, '  Chicken Hot Garlic, Fish Hot Garlic, Prawns Hot Garlic, KingPrawns Hot Garlic, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:40:26', 'unpaid'),
(375, 7, 'Chicken Shanghai, Fish Shanghai, Prawns Shanghai, KingPrawns Shanghai, King Prawns Kung Pao, Prawns Kung Pao, Chicken Kung Pao, ', '', 2060, 2080, 1, 'Accepted', '', '2017-08-16 13:41:58', 'unpaid'),
(376, 7, 'Chicken Poppers,  Fish Poppers, Prawns Poppers, KingPrawns Poppers, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:43:20', 'unpaid'),
(377, 7, 'Chicken Green Chilli Special, Fish Green Chilli Special, Prawns Green Chilli Special, KingPrawns Green Chilli Special, KingPrawns Wasabi Prawns, ', '', 1550, 1570, 1, 'Accepted', '', '2017-08-16 13:44:57', 'unpaid'),
(378, 7, 'Chicken Garlic Pepper Dry, Fish Garlic Pepper Dry, Prawns Garlic Pepper Dry, KingPrawns Garlic Pepper Dry, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:47:34', 'unpaid'),
(379, 7, 'KingPrawns Wasabi Prawns, ', '', 370, 390, 1, 'Accepted', '', '2017-08-16 13:48:59', 'unpaid'),
(380, 7, 'Chicken Grilled Chicken Black Bean, Fish Grilled Chicken Black Bean, Prawns Grilled Chicken Black Bean, KingPrawns Grilled Chicken Black Bean, ', '', 1150, 1170, 1, 'Accepted', '', '2017-08-16 13:57:06', 'unpaid'),
(381, 7, 'Veg Manchurian Sauce Vegetable, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 13:59:52', 'unpaid'),
(382, 7, 'Veg  Sweet and sour sauce vegetables, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 14:00:54', 'unpaid'),
(383, 7, 'Veg  Hot Garlic sauce vegetables, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 14:01:50', 'unpaid'),
(384, 7, 'Veg  Burnt Garlic sauce vegetables, ', '', 200, 220, 1, 'Accepted', '', '2017-08-16 14:02:54', 'unpaid'),
(385, 7, 'Veg  Hakka Paneer, ', '', 230, 250, 1, 'Accepted', '', '2017-08-16 14:04:10', 'unpaid'),
(386, 7, 'Veg Regular Choices of Paneer, ', '', 230, 250, 1, 'Accepted', '', '2017-08-16 14:05:35', 'unpaid'),
(387, 7, 'Veg  Chili Paneer, ', '', 230, 250, 1, 'Accepted', '', '2017-08-16 14:06:33', 'unpaid'),
(388, 7, 'Veg  Hot Garlic Paneer, Veg  Schezuan Paneer, Veg  Hunan Sauce Paneer, Veg  Hakka Paneer,  Veg Brocolli Exotic Veg, Veg Zuccini Exotic Veg, Veg Mushroom Exotic Veg, Veg Bokchoy Exotic Veg, Veg Paneer American Corn, Veg Paneer Chilly Garlic Sauce, Veg Gree', '', 2560, 2580, 1, 'Accepted', '', '2017-08-16 14:08:28', 'unpaid'),
(389, 7, 'Chicken Chilly Chicken , ', '', 230, 250, 1, 'Accepted', '', '2017-08-16 14:14:07', 'unpaid'),
(390, 7, 'Chicken  Hunan Chicken, ', '', 230, 250, 1, 'Accepted', '', '2017-08-16 14:15:29', 'unpaid'),
(391, 7, 'Chicken  Korean Chicken, ', '', 230, 250, 1, 'Accepted', '', '2017-08-16 14:16:52', 'unpaid'),
(392, 7, 'NonVeg Clear Soup, Veg Clear Soup, ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 14:29:47', 'unpaid'),
(393, 7, 'Veg Clear Soup, NonVeg Clear Soup, ', '', 270, 290, 1, 'Accepted', '', '2017-08-16 14:44:54', 'unpaid'),
(423, 8, 'Prawns Manchow, Prawns Manchow, ', '', 340, 460, 1, 'Accepted', 'wertyuio,Bandra-West', '2017-08-17 14:09:33', 'unpaid'),
(424, 8, '  Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, ', '', 680, 460, 1, 'Accepted', 'sdfghjk,Bandra-West', '2017-08-17 14:19:30', 'paid'),
(429, 11, 'Prawns Clear Soup, Prawns Clear Soup, ', '', 340, 360, 1, 'Accepted', 'jhhvgh ,Bandra-West', '2017-08-21 11:45:03', 'unpaid'),
(430, 11, '  Fish Spring Rolls, Chicken Chicken Lollipop, Veg Singapore Noodles, NonVeg Manchow,', '', 790, 810, 1, 'Accepted', 'hhsdjhgasjdajas,,Bandra-West', '2017-08-22 12:32:16', 'unpaid'),
(432, 15, 'Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, Veg Lung Fung, ', '', 1300, 1320, 1, 'Accepted', 'abcdefghijklmnopqrstuvwxyz,Bandra-West', '2017-08-23 09:02:06', 'unpaid'),
(433, 15, 'Prawns Talu Mein, Prawns Talu Mein, Prawns Talu Mein, NonVeg Hot & Sour, NonVeg Hot & Sour, ', '', 790, 810, 1, 'Accepted', '', '2017-08-23 09:20:23', 'unpaid'),
(434, 16, 'Veg Burnt Garlic Fried Rice, Veg Burnt Garlic Fried Rice, Veg Burnt Garlic Fried Rice, Veg Burnt Garlic Fried Rice, Veg Burnt Garlic Fried Rice, Veg Burnt Garlic Fried Rice, Veg Burnt Garlic Fried Rice, Veg Burnt Garlic Fried Rice, Veg Burnt Garlic Fried ', '', 3200, 3220, 1, 'Accepted', '', '2017-08-23 10:16:13', 'unpaid'),
(435, 16, 'WokItems are 1.Veg, 2.Aromatic Rice, 3.Chilli Basil, 4.Extra Paneer,WokItems are 1.Veg, 2.Aromatic Rice, 3.Chilli Basil, 4.Extra Paneer,', '', 1880, 1900, 1, 'Accepted', 'abcdefghklmnopqrstuvwxyz,Bandra-West', '2017-08-23 10:28:20', 'unpaid'),
(436, 16, 'Veg Clear Soup, Veg Clear Soup, ', '', 260, 280, 1, 'Accepted', 'acaxccaca,,Bandra-West', '2017-08-23 10:39:08', 'unpaid'),
(437, 16, 'Prawns Manchow, Prawns Manchow, ', '', 340, 360, 1, 'Accepted', 'aasasas,Bandra-West', '2017-08-23 10:42:24', 'unpaid'),
(438, 16, 'Veg Manchow, Veg Manchow, Veg Manchow, ', '', 390, 410, 1, 'Accepted', 'abcbabc,Bandra-West', '2017-08-23 10:50:31', 'unpaid'),
(439, 16, 'Prawns Lung Fung, ', '', 170, 190, 1, 'Accepted', 'lksd;kmsd;kms,,Bandra-West', '2017-08-23 11:23:22', ''),
(440, 6, 'NonVeg Clear Soup, NonVeg Clear Soup, NonVeg Clear Soup, ', '', 420, 440, 1, 'Accepted', 'sfvsv,Bandra-West', '2017-08-23 11:43:44', 'unpaid'),
(441, 6, 'Prawns Manchow, Prawns Manchow, Prawns Manchow, Prawns Manchow, Prawns Manchow, ', '', 850, 870, 1, 'Accepted', 'kcdhb,Bandra-West', '2017-08-23 11:57:29', 'unpaid'),
(442, 6, 'Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, ', '', 680, 700, 1, 'Accepted', 'hgfcgc,Bandra-West', '2017-08-23 12:01:41', 'unpaid'),
(443, 16, 'Prawns Clear Soup, ', '', 170, 190, 1, 'Accepted', '', '2017-08-23 12:07:48', 'unpaid'),
(444, 18, 'Prawns Green Chili Chefs, NonVeg Green Chili Chefs, Veg Green Chili Chefs, Non Veg Lemon Chilly Corainder, Veg Wontons , Prawns Talu Mein, Prawns Green Chili Chefs,Prawns Green Chili Chefs,Prawns Green Chili Chefs,Prawns Green Chili Chefs,Prawns Green Chi', '', 25320, 25340, 1, 'abc', 'Yoo! Do it!,Bandra-West', '2017-08-23 12:34:25', 'unpaid'),
(446, 6, 'Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, ', '', 510, 530, 1, 'Accepted', 'khbj,Bandra-West', '2017-08-24 07:04:07', 'unpaid'),
(447, 6, 'Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, ', '', 680, 700, 1, 'Accepted', 'jb hj,Bandra-West', '2017-08-24 10:12:33', 'unpaid'),
(448, 6, 'NonVeg Lung Fung, Prawns Sweet Corn , NonVeg Clear Soup, ', '', 450, 470, 1, 'Accepted', 'fffr,Bandra-West', '2017-08-24 10:13:09', 'unpaid'),
(449, 6, 'Prawns Lung Fung, NonVeg Manchow, Prawns Hot & Sour, Veg Sweet Corn , ', '', 610, 630, 1, 'Accepted', 'cvdgb,Bandra-West', '2017-08-24 10:19:07', 'unpaid'),
(450, 6, 'Veg Manchow, NonVeg Lung Fung, Prawns Sweet Corn , Prawns Clear Soup, Prawns Clear Soup, Prawns Clear Soup, ', '', 950, 970, 1, 'Accepted', 'ffvvvf,Bandra-West', '2017-08-24 10:49:52', 'unpaid'),
(452, 19, 'Veg Clear Soup, NonVeg Manchow, Veg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, WokItems are 1.Chicken, 2.Fried Rice, 3.Kung P', '', 1960, 1980, 1, 'Accepted', 'ffigguuyctddjggkguyt,Bandra-West', '2017-08-24 11:26:14', 'unpaid'),
(453, 19, 'Veg Clear Soup, NonVeg Lung Fung, NonVeg Sweet Corn , Prawns Lung Fung, Prawns Lung Fung,Prawns Lung Fung,Prawns Lung Fung,Prawns Lung Fung,NonVeg Lung Fung,NonVeg Lung Fung,Veg Burnt Garlic Fried Rice, Prawns Regular Fried Rice, ', '', 1990, 2010, 1, 'Accepted', '', '2017-08-24 11:44:32', 'unpaid'),
(456, 8, 'Prawns Lung Fung, Prawns Lung Fung, Prawns Sweet Corn , ', '', 510, 530, 1, 'abc', 'zxcvnjm,Bandra-West', '2017-08-24 14:15:14', 'unpaid'),
(457, 11, 'Veg Manchow, NonVeg Lung Fung, Prawns Sweet Corn , Veg Hot & Sour, ', '', 570, 590, 1, 'abc', 'bandra west,Bandra-West', '2017-08-24 14:19:04', 'unpaid'),
(458, 11, 'Prawns Clear Soup, ', '', 170, 190, 1, 'abc', 'Meena Apartments, Hill Road, ,Bandra-West', '2017-08-24 14:24:06', 'unpaid'),
(459, 11, 'Prawns Lung Fung, ', '', 170, 190, 0, 'abc', 'Meena Apartments, Hill Road, ,Bandra-West', '2017-08-24 14:33:21', ''),
(460, 6, 'Prawns Lung Fung, Prawns Sweet Corn , Prawns Sweet Corn , ', '', 510, 530, 1, 'Accepted', 'efrw,Bandra-West', '2017-08-28 11:14:39', 'unpaid'),
(461, 6, 'Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , ', '', 510, 530, 1, 'Accepted', 'lkjhgfdfghjkl,Bandra-West', '2017-08-28 11:15:50', 'unpaid'),
(462, 20, 'Veg Clear Soup, Prawns Lung Fung, Veg Hot & Sour, NonVeg Hot & Sour, KingPrawns Barbeque, KingPrawns Hoisin, Chicken  Burnt Chili Egg, ', '', 1500, 1520, 1, 'Accepted', 'Meena Apartments, Hill Road, ,Bandra-West', '2017-08-31 06:09:33', 'unpaid'),
(463, 1, 'Prawns Clear Soup, NonVeg Manchow, Veg Lung Fung, NonVeg Sweet Corn , Prawns Hot & Sour, ', '', 750, 770, 1, 'Accepted', 'dihn,Bandra-West', '2017-08-31 13:15:53', 'unpaid'),
(464, 1, 'Prawns Manchow, NonVeg Lung Fung, ', '', 310, 330, 1, 'Accepted', 'xjbc,Bandra-West', '2017-08-31 13:35:13', 'unpaid'),
(466, 1, 'Prawns Lung Fung, Veg Manchow, NonVeg Manchow, ', '', 440, 460, 1, 'Accepted', 'ddsd,Bandra-West', '2017-09-01 06:28:25', 'unpaid'),
(467, 4, 'Prawns Lung Fung, Prawns Lung Fung, ', '', 340, 360, 1, 'Rejected', 'ssssss,Bandra-West', '2017-09-01 06:39:08', 'unpaid'),
(468, 4, 'NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, NonVeg Lung Fung, ', '', 560, 580, 1, 'Rejected', 'zz,Bandra-West', '2017-09-01 06:40:17', 'unpaid'),
(469, 4, 'Veg Sweet Corn , NonVeg Lung Fung, Prawns Manchow, ', '', 440, 460, 1, 'Rejected', 'zzz,Bandra-West', '2017-09-01 06:44:55', 'unpaid'),
(470, 4, 'Prawns Manchow, Prawns Manchow, ', '', 340, 360, 1, 'Rejected', 's,Bandra-West', '2017-09-01 06:51:38', 'unpaid'),
(471, 4, 'Prawns Lung Fung, Prawns Lung Fung, ', '', 340, 360, 1, 'Rejected', 'sssssssss,Bandra-West', '2017-09-01 06:52:35', 'unpaid'),
(472, 4, 'Prawns Lung Fung, Prawns Sweet Corn , ', '', 340, 360, 1, 'Accepted', 's,Bandra-West', '2017-09-01 06:54:29', 'unpaid'),
(473, 4, 'Veg Hot & Sour, NonVeg Hot & Sour, ', '', 270, 290, 1, 'Rejected', 'z,Bandra-West', '2017-09-01 06:55:51', 'unpaid'),
(474, 4, 'Prawns Manchow, Veg Clear Soup, Prawns Lung Fung, ', '', 470, 490, 1, 'Rejected', 'aaa,Bandra-West', '2017-09-01 07:00:26', 'unpaid'),
(475, 4, 'Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, ', '', 510, 530, 1, 'Accepted', 's,Bandra-West', '2017-09-01 07:02:54', 'unpaid'),
(476, 4, 'Prawns Talu Mein, Prawns Talu Mein, ', '', 340, 360, 1, 'Accepted', 'xxxxxxxxxx,Bandra-West', '2017-09-01 07:07:21', 'unpaid'),
(477, 4, 'Veg Chili Garlic  Noodles, NonVeg Chili Garlic  Noodles, ', '', 370, 390, 1, 'Accepted', 'xxxx,Bandra-West', '2017-09-01 07:08:07', 'unpaid'),
(478, 4, 'NonVeg Sweet Corn , NonVeg Sweet Corn , ', '', 280, 300, 1, 'Accepted', 'zzzzzzz,Bandra-West', '2017-09-01 07:22:15', 'unpaid'),
(480, 4, 'Chicken Chilly Sauce, Fish Chilly Sauce, ', '', 490, 510, 1, 'Rejected', 'bbbbbbbb,,Bandra-West', '2017-09-01 07:59:12', 'unpaid'),
(494, 4, 'Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , ', '', 680, 0, 1, 'Rejected', 'xxxxx,,,Bandra-West', '2017-09-01 10:07:16', 'paid'),
(495, 4, 'Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, ', '', 510, 0, 1, 'Rejected', 'm,Bandra-West', '2017-09-01 10:26:36', 'paid'),
(496, 4, 'Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, Prawns Lung Fung, ', '', 680, 0, 1, 'Rejected', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-01 10:27:41', 'paid'),
(497, 4, 'Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , ', '', 680, 0, 1, 'Rejected', 'xx,Bandra-West', '2017-09-01 10:29:56', 'paid'),
(498, 4, 'Prawns Sweet Corn , Prawns Sweet Corn , ', '', 340, 0, 1, 'Rejected', 'zzzzzz,Bandra-West', '2017-09-01 10:32:17', 'paid'),
(499, 4, 'Prawns Talu Mein, Prawns Talu Mein, Prawns Talu Mein, ', '', 510, 530, 1, 'Rejected', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-01 10:36:48', ''),
(500, 4, 'Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , ', '', 680, 700, 1, 'Accepted', 'xxxxx,Bandra-West', '2017-09-01 10:53:03', 'unpaid'),
(504, 4, 'Fish  Hunan Sauce, Fish  Hunan Sauce, Fish  Hunan Sauce, Fish  Hunan Sauce, ', '', 1040, 901, 1, 'Rejected', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-01 10:57:51', 'paid'),
(505, 4, 'Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , ', '', 680, 630, 1, 'Rejected', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-01 10:59:50', 'paid'),
(506, 4, 'Fish Chilly Sauce, KingPrawns  Hunan Sauce, ', '', 620, 576, 1, 'Accepted', 'xxxxxxxxxx,Bandra-West', '2017-09-01 16:34:25', 'paid'),
(507, 4, 'Prawns Sweet Corn , Prawns Sweet Corn , Prawns Sweet Corn , ', '', 510, 477, 1, 'Accepted', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-01 16:38:16', 'paid'),
(508, 4, 'Prawns Hot & Sour, Prawns Hot & Sour, Prawns Hot & Sour, ', '', 510, 0, 1, 'Rejected', 'bandra,Bandra-West', '2017-09-01 16:39:03', 'paid'),
(510, 1, 'Veg Green Thai Curry, NonVeg Green Thai Curry, ', '', 590, 610, 1, 'Accepted', 'ghatkopar,Bandra-West', '2017-09-02 07:00:20', 'unpaid'),
(511, 2, 'Veg Clear Soup, Prawns Lung Fung, Veg Lung Fung, Prawns Lung Fung, Prawns Lung Fung, Chicken  Korean Chicken, ', '', 1000, 867, 1, 'Accepted', 'Meena Apartments, Hill Road, ,Bandra-West', '2017-09-02 09:44:05', 'paid'),
(512, 2, 'Veg Manchow, Prawns Lung Fung, Prawns Lung Fung, Veg Sweet Corn , Veg Schezaun Noodles, NonVeg Singapore Noodles, ', '', 990, 909, 1, 'Accepted', 'Meena Apartments, Hill Road, ,Bandra-West', '2017-09-02 09:48:07', 'paid'),
(513, 5, 'Chicken  Korean Chicken, Veg Regular Fried Rice, Veg Regular Fried Rice, Veg Chili Garlic  Noodles, ', '', 790, 810, 0, 'abc', '', '2017-09-03 08:12:54', ''),
(514, 2, 'Veg Manchow, Chicken  Korean Chicken, Chicken  Hunan Sauce, Prawns  Hunan Sauce, Chicken  Hunan Sauce,Chicken  Hunan Sauce,Veg Schezaun Noodles, ', '', 1530, 1318, 1, 'Accepted', 'Meena Apartments, Hill Road, ,Bandra-West', '2017-09-03 13:11:00', 'paid'),
(515, 1, 'Prawns Manchow, Prawns Manchow, Prawns Manchow, Prawns Sweet Corn , Prawns Sweet Corn , ', '', 850, 783, 1, 'Accepted', 'hbj,Bandra-West', '2017-09-03 13:12:51', 'paid'),
(516, 1, 'Prawns Sweet Corn , Prawns Hot & Sour, KingPrawns  Hunan Sauce, ', '', 700, 648, 1, 'Accepted', 'lkhnkj,Bandra-West', '2017-09-03 13:21:26', 'paid'),
(521, 1, 'Prawns Lung Fung, NonVeg Manchow, Veg Clear Soup, ', '', 440, 460, 1, 'Accepted', 'jhvgh,Bandra-West', '2017-09-03 13:44:04', 'paid'),
(522, 1, 'Prawns Manchow, Prawns Lung Fung, NonVeg Sweet Corn , ', '', 480, 450, 1, 'Rejected', 'mbh,Bandra-West', '2017-09-03 13:44:54', ''),
(526, 4, 'Veg Malaysian Noodles, Prawns Singapore Noodles, Prawns Singapore Noodles, Prawns Singapore Noodles, Prawns Singapore Noodles, ', '', 1240, 1071, 1, 'Rejected', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-03 18:59:50', 'paid'),
(527, 4, 'Veg Red Thai Curry, Veg Red Thai Curry, Veg Red Thai Curry, Veg Red Thai Curry, Veg Red Thai Curry, ', '', 1450, 1250, 1, 'Rejected', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-03 19:32:42', ''),
(529, 2, 'Prawns Clear Soup, ', '', 170, 190, 1, 'Accepted', 'Meena Apartments, Hill Road, ,Bandra-West', '2017-09-05 13:53:01', 'unpaid'),
(531, 4, 'Prawns Hot & Sour, Prawns Hot & Sour, Prawns Hot & Sour, Prawns Hot & Sour, ', '', 680, 700, 1, 'Accepted', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-06 18:04:06', 'unpaid'),
(532, 4, 'Veg Red Thai Curry, Veg Red Thai Curry, Veg Red Thai Curry, Veg Red Thai Curry, ', '', 1160, 1180, 1, 'abc', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-06 18:17:31', 'unpaid'),
(533, 4, 'Veg  Sweet and sour sauce vegetables, Veg  Sweet and sour sauce vegetables, Veg  Sweet and sour sauce vegetables, Veg  Sweet and sour sauce vegetables, ', '', 800, 820, 1, 'abc', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-06 18:25:26', 'unpaid'),
(534, 4, 'Prawns Hot & Sour, Prawns Hot & Sour, Prawns Hot & Sour, Prawns Hot & Sour, Prawns Hot & Sour, Prawns Hot & Sour, Prawns Hot & Sour, ', '', 1190, 1210, 1, 'abc', '13/2,NOBLE HOUSE,DR.BATLIWALA ROAD,PAREL,Bandra-West', '2017-09-07 18:41:43', 'unpaid'),
(535, 1, 'Prawns Manchow, Prawns Manchow, Prawns Manchow, ', '', 510, 530, 1, 'abc', 'wdw,Bandra-West', '2017-09-08 10:00:25', 'unpaid'),
(536, 1, 'NonVeg Clear Soup, Prawns Manchow, Prawns Lung Fung, ', '', 480, 500, 1, 'abc', 'dfads,Bandra-West', '2017-09-09 08:57:02', 'unpaid');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
