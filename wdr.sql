-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 05:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(14, 'Cheeseburger.jpg', 'Mini Cheeseburger ................ BDT:70.00\r\n\r\nLarge Cheeseburger ............... BDT:100.00\r\n\r\nLarge Cheeseburger ............... BDT:100.00\r\n\r\nLocation: 100 Miles ecb chottor,Dhaka Cant-1206'),
(15, 'Hamburger.jpeg', 'Hamburger ................ BDT:165.00\r\n\r\n\r\nLocation: 100 Miles ecb chottor,Dhaka Cant-1206'),
(16, 'Sandwich.jpg', 'Sandwich 2 pcs ................ BDT:80.00\r\n		Club Sandwich with Chicken & Vegetable ............... BDT:200.00\r\n\r\nLocation: Spicy,Rupnagar Abashik,Mirpur'),
(17, 'Fried chicken.jpg', 'Fried chicken ................ BDT:422.00\r\n		Location: Best Fried Chicken (BFC), # 92 House # 40/8 Road | Gulshan North Avenue, Dhaka City 1212, Bangladesh.'),
(18, 'pizzaburg.jpg', 'Cheess Fountain Small/Medium/Large ................ BDT:235.00/335.00/465.00\r\n		Meaty Onion Small/Medium/Large ................ BDT:235.00/335.00/465.00\r\n		Cheader Cream Small/Medium/Large ................ BDT:255.00/355.00/515.00\r\n		Tender Beef Small/Medium/Large ................ BDT:235.00/335.00/465.00\r\n		Fire Ball Small/Medium/Large ................ BDT:255.00/355.00/515.00\r\n		Cheddarolla Medium/Large ................ BDT:385.00/555.00\r\n		Sausage Carnival Small/Medium/Large ................ BDT:285.00/385.00/585.00\r\n		Large Cheeseburger Small/Medium/Large ............... BDT:285.00/385.00/585.00\r\n\r\n		\r\n\r\n#Location: Pizzaburg,Mirpur-2</p>'),
(19, 'noodles.jpg', 'Noodles ................ BDT:70.00\r\n		\r\n\r\n\r\n\r\n\r\n#Location: Spicy,Rupnagar Abashik,Mirpur'),
(20, 'ovenbakepasta.jpg', 'Hot Cream Pasta ................ BDT:215.00\r\n		Cheesy Panic ............... BDT:215.00\r\n		Peri Pasta ............... BDT:215.00\r\n		Bomb-Busting Pasta ............... BDT:235.00\r\n		Cream & Spice Pasta ............... BDT:235.00\r\n		\r\n\r\n\r\n\r\n#Location: \r\nBlock-A, Ave-1, H- 14/12-1, Section -2, Mirpur. Â· Dhaka, Bangladesh\r\nDhaka, Bangladesh 1216</p>'),
(21, 'french-fries.jpg', 'French Fries ................ BDT:70.00\r\n		#Location: 100 Miles ecb chottor,Dhaka Cant-1206'),
(22, 'cold cofee.jpg', '100 Miles Cold Coffee R/L ................ BDT:50.00/70.00\r\n		Dark Chocolate Cold Coffee R/L ............... BDT:55.00/80.00\r\n		Chocolate Martini Cold Coffee R/L ............... BDT:65.00/85.00\r\n		#Location: 100 Miles ecb chottor,Dhaka Cant-1206');

-- --------------------------------------------------------

--
-- Table structure for table `images1`
--

CREATE TABLE `images1` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images1`
--

INSERT INTO `images1` (`id`, `image`, `image_text`) VALUES
(5, 'Tandoori Chicken with Fried Rice & Salad.jpg', 'Tandoori Chicken with Fried Rice & Salad ................ BDT:210.00\r\n		\r\n		#Location: foodpanda'),
(6, 'Fried Rice with Vegetable & Chicken Fry.jpg', 'Fried Rice with Vegetable & Chicken Fry ................ BDT:119.00\r\n		#Location: foodpanda'),
(7, 'Fried Rice with Fried Chicken & Vegetable.jpg', 'Fried Rice with Fried Chicken & Vegetables ................ BDT:80.00\r\n		#Location: foodpanda'),
(8, 'Fried Rice with Chicken Fry & Vegetable.jpg', 'Fried Rice with Chicken Fry & Vegetable ................ BDT:154.00\r\n		#Location: foodpanda'),
(9, 'BBQ Chicken with Green Salad.jpg', 'BBQ Chicken with Green Salad ................ BDT:196.00\r\n\r\n		#Location: foodpanda');

-- --------------------------------------------------------

--
-- Table structure for table `images2`
--

CREATE TABLE `images2` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images2`
--

INSERT INTO `images2` (`id`, `image`, `image_text`) VALUES
(3, '7 up.jpg', '7up 250ml ................ BDT:70.00\r\n		7up 500ml ............... BDT:100.00\r\n		7up 1 ltr ............... BDT:100.00\r\n7up 2 ltr ............... BDT:100.00'),
(4, 'pepsi.jpg', 'Pepsi 250ml ................ BDT:70.00</p>\r\n		Pepsi 500ml ............... BDT:100.00\r\n		Pepsi 1 ltr ............... BDT:100.00\r\n		Pepsi 2 ltr ............... BDT:100.00'),
(5, 'Coca-Cola.jpg', 'Coca-Cola 250ml ................ BDT:70.00\r\n		Coca-Cola 500ml ............... BDT:100.00\r\n		Coca-Cola 1 ltr ............... BDT:100.00\r\n		Coca-Cola 2 ltr ............... BDT:100.00'),
(6, 'Sprite.jpg', 'Sprite 250ml ................ BDT:70.00\r\n		Sprite 500ml ............... BDT:100.00\r\n		Spritea 1 ltr ............... BDT:100.00\r\n		Sprite 2 ltr ............... BDT:100.00'),
(7, 'Mirinda.jpg', 'Mirinda 250ml ................ BDT:70.00\r\n		Mirinda 500ml ............... BDT:100.00\r\n		Mirinda 1 ltr ............... BDT:100.00\r\n		Mirinda 2 ltr ............... BDT:100.00');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `food_name`, `price`) VALUES
(0, 'Small Pizza', 'BDT:235');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `user_list_id` int(11) NOT NULL,
  `user_review` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`user_list_id`, `user_review`) VALUES
(5, 'Cold coffee is one most popular drinks.Including \"Chocolate martini\" cold coffee is most lovely one.price :Regular BDT :65.00 and Large BDT: 85.00 .'),
(6, 'Cold coffee is one most popular drinks.Including \"Dark Chocolate \" cold coffee is most lovely one.price :Regular BDT :65.00 and Large BDT: 85.00 .'),
(7, 'cheesfountain pizza with white at pizzaburg is so delicious.'),
(8, 'Burger is a delicious food.'),
(12, 'tewweyehahdh'),
(14, 'agasgsagsagasgaga'),
(16, 'fafSFgsgasgGSGA'),
(17, 'fafsfdsfsfasfasfasfsafaf'),
(18, 'fFfsfsfasfsfasfasf'),
(19, 'adADAdDadadadDad'),
(20, 'ADdDdDAD'),
(21, 'ASFSAFASFASFAFAFA'),
(22, 'WWQRQWRQWRQWRQRQRQR'),
(23, 'Ashraful'),
(24, 'Khali Khaite iccha kre : |'),
(25, 'Amma ki ranna krcen ajk :!'),
(26, 'Dorji love fried chicken'),
(27, 'pasta is a testy food'),
(28, 'amma ekhn varsity jasci '),
(29, 'Mam likes Belpuri'),
(30, 'abcde'),
(31, 'Chocolate Cone Ice cream of Igloo just supper......'),
(32, 'biriyani khete khubi mja'),
(33, 'Pasta chips is tasty .....');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('Ashraful', 'ashraful4109@gmail.com', 'bubtcse013'),
('Ashraful Islam', 'ashrafulislam.bubt.cse@gmail.com', 'outswing'),
('Umar Al Khttab', 'umaral@gmail.com', '55555'),
('Amir', 'amir@gmail.com', '4444'),
('Sarowar', 'sarowar@gmail.com', '666666'),
('Shanto', 'asgjkhjhg@gmail.com', '1234'),
('soma', 'soma@gmail.com', '0000'),
('din', 'din@gmail.com', '9999'),
('Anusha', 'Anusha@gmail.com', '2555'),
('ssss', 'ssss@gmail.com', 'ssss'),
('Zaman', 'Zaman@gmial.com', 'zaman'),
('rafiq', 'rafiq@gmail.com', '895623');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images1`
--
ALTER TABLE `images1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images2`
--
ALTER TABLE `images2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`user_list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `images1`
--
ALTER TABLE `images1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images2`
--
ALTER TABLE `images2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `user_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
