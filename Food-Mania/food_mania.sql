-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 31, 2021 at 01:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_mania`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `phone_no`) VALUES
(1, 'admin', 'admin@foodmania.com', 'foodmania', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Fast Food', 'https://img.icons8.com/emoji/200/000000/hamburger-emoji.png'),
(2, 'Cold Drinks', 'https://img.icons8.com/cotton/200/000000/street-food.png\"'),
(5, 'Chinese', 'https://img.icons8.com/fluent/200/000000/chinese-fried-rice.png'),
(6, 'Italian', 'https://img.icons8.com/fluent/200/000000/salami-pizza.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `image`, `category`) VALUES
(1, 'Hamburger', 150, 'https://img.icons8.com/emoji/200/000000/hamburger-emoji.png', 1),
(3, 'Pasta', 210, 'https://c.ndtvimg.com/2019-08/tfddu9ao_pasta_625x300_13_August_19.jpg', 6),
(4, 'hotdog', 100, 'http://www.pngmart.com/files/8/Hot-Dog-PNG-Image-Free-Download.png', 1),
(5, 'pizza', 200, 'https://media.istockphoto.com/photos/traditional-italian-pepperoni-pizza-isolated-fast-food-top-view-picture-id1201784798', 1),
(6, 'frenky', 200, 'https://www.vegrecipesofindia.com/wp-content/uploads/2014/11/frankie-recipe-4.jpg', 1),
(7, 'samosa', 100, 'https://toppng.com/uploads/preview/b-samosa-11562905789sr2qcwl0g1.png', 1),
(8, 'paneer tika', 300, 'https://blog.sterlingholidays.com/wp-content/uploads/2015/09/Paneer-tikka-Recipe-Sunday-Special-Recipe.jpg', 1),
(9, 'aloo paratha', 150, 'https://p7.hiclipart.com/preview/909/308/928/paratha-roti-naan-dal-indian-cuisine-onion.jpg', 1),
(10, 'chinese manchurian', 170, 'https://images.herzindagi.info/image/2018/Jan/Chinese-food-veg-manchurian-artcile.jpg', 5),
(11, 'veg fried rice', 180, 'https://www.ticklingpalates.com/wp-content/uploads/2020/05/fried-rice-using-veggies-500x500.jpg', 5),
(12, 'triple schezwan rice', 145, 'https://www.tarladalal.com/members/9306/procstepimgs/triple-schwzuan-rice_dsc2255-(42)-2-185802.jpg', 5),
(13, 'schezwan noodels', 200, 'https://i0.wp.com/www.yummytummyaarthi.com/wp-content/uploads/2014/10/1-38.jpg?ssl=1', 5),
(14, 'momo', 250, 'https://upload.wikimedia.org/wikipedia/commons/a/a1/Momo_nepal.jpg', 5),
(15, 'pepsi', 50, 'https://media.istockphoto.com/photos/soft-drink-being-poured-into-glass-picture-id533575209?k=6&m=533575209&s=612x612&w=0&h=vAvy92xChNP5vl-zNFU1_cqrR_PnYaQAChsX8Fuz1GY=', 2),
(16, 'mango cool', 100, 'https://static.toiimg.com/thumb/msid-59219157,width-1070,height-580,resizemode-75/59219157,pt-32,y_pad-40/59219157.jpg', 2),
(17, 'lamon cold drink', 150, 'https://www.crushpixel.com/big-static14/preview4/cold-drink-made-from-pieces-1718279.jpg', 2),
(18, 'strawberry cold drink', 200, 'https://motherwouldknow.com/wp-content/uploads/2019/05/bellini-closeup-sq-IMG_0541-w.jpg', 2),
(19, 'cocoa drinks', 300, 'https://5.imimg.com/data5/IV/JB/MY-14565615/cold-coco-500x500.jpg', 2),
(25, 'chorizo pasta', 200, 'https://img.taste.com.au/MlpQkCEX/taste/2016/11/penne-with-chorizo-and-creamy-tomato-sauce-78958-1.jpeg', 6),
(26, 'italian pizza', 300, 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-homemade-pizza-horizontal-1542312378.png?crop=1.00xw:1.00xh;0,0&resize=480:*', 6),
(27, 'Osso Buco', 150, 'https://www.simplyrecipes.com/thmb/YOvR_V7EJTilPOUnlG9nk9fiJC4=/2000x1334/filters:fill(auto,1)/__opt__aboutcom__coeus__resources__content_migration__simply_recipes__uploads__2006__12__Osso-Buco-LEAD-5-a816159cbe9740a5b21f3c1e515f9da2.jpg', 6),
(28, 'italian coffee', 200, 'https://i1.wp.com/www.therecipespk.com/wp-content/uploads/2014/07/Espresso-Coffee.jpg?fit=600%2C375&ssl=1', 6),
(29, 'pasta veg', 300, 'https://images.unsplash.com/photo-1498579150354-977475b7ea0b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8aXRhbGlhbiUyMGZvb2R8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&w=1000&q=80', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL,
  `total` int(20) NOT NULL,
  `ordered` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item_id`, `user_id`, `quantity`, `date`, `status`, `total`, `ordered`) VALUES
(11, 3, 2, 6, '0000-00-00 00:00:00', 1, 1260, 1),
(12, 1, 2, 3, '0000-00-00 00:00:00', -1, 450, 1),
(21, 15, 2, 1, '2021-03-31 09:55:50', 0, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone_no`, `password`, `address`, `pincode`) VALUES
(2, 'Firstname Lastname', 'email@gmail.com', 123456789, 'password', '165, apple heights, varachha, surat.', 123456),
(3, 'Shreya', 'spgoti09@gmail.com', 2147483647, 'shreyagoti09', '208,Rachna lakeview Recidency,Kalvibid Bhavnagar', 364002),
(4, 'Fashion', 'fashioner@email.com', 2147483647, 'fashioner09', '208,Fashioner street', 364002),
(5, 'sweta', 'sweta@gmail.com', 2673899222, 'swetakyada', 'surat', 357482);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
