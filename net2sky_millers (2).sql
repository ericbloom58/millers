-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 03:03 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `net2sky_millers`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `blog` longtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `description`, `blog`, `created`, `modified`) VALUES
(3, 'Test Post', '', '<p>Test Post of the great deals you will have at Millers Food Market!</p>', '2017-11-30 16:17:55', '2017-11-30 16:17:55'),
(4, 'Test Post 2', '', '<p>A second Test Post for all the deals you\'ll bet getting at Miller\'s Food Market!</p>', '2017-11-30 16:22:52', '2017-11-30 16:22:52'),
(5, 'Test Post 3', 'description', '<p>Third Test Post</p>', '2017-11-30 16:23:41', '2018-01-03 20:37:03'),
(6, 'test post 4', 'description', '<p>blaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAHblaH BLAH BLAH</p>', '2018-01-03 20:37:20', '2018-01-03 20:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `page_type` varchar(255) NOT NULL DEFAULT 'content',
  `linked_gallery` varchar(255) DEFAULT NULL,
  `available` varchar(50) NOT NULL DEFAULT 'content'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `content`, `created`, `modified`, `page_type`, `linked_gallery`, `available`) VALUES
(7, 'Home', '<p>Miller\'s Food Market in Manchester, MD offers the freshest custom-cut meats, produce, deli luncheon meat, subs and sandwiches, party platters, dairy, frozen and grocery items available.</p>', '2017-07-13 16:25:02', '2017-11-30 17:13:23', 'content', '', 'no'),
(16, 'About Us', '<p>&nbsp;1921-Present</p>\r\n<p>The Miller Family and associates have been serving the Manchester community since 1921. Charles L. H. Miller purchased a butcher shop on Westminster Street in Manchester. The business consisted of Custom cutting hogs and steers and selling meat off of horse drawn wagons with routes in Carroll County, Baltimore County, and Pennsylvania. In 1949 the building on the corner of Main Street and Rt. 27 was purchased so we could sell groceries and produce. Eugene Miller, son of Charles and Mary Miller, grew up helping his parents operate the family business.</p>\r\n<p>In 1983 Eugene and Margaret Miller saw a need for the Manchester community to have a supermarket. On July 11, 1984, Miller&rsquo;s Food Market was opened. "What we want to give to our customers is better service, shorter checkout times, higher quality meats, a clean store, and a friendly place to shop. By treating our customers the way we want to be treated, we have been able to serve more customers every year."</p>\r\n<p>The Miller\'s have been fortunate to have hired and work with good people. We try to provide a good place to work, so our associates can concentrate on serving our customers.</p>\r\n<p>&nbsp;</p>', '2017-11-30 16:25:22', '2017-11-30 16:48:03', 'content', '', 'no'),
(17, 'Notification', '<p>Sorry we are closed for Christmas.</p>', '2018-01-03 20:34:57', '2018-01-03 20:34:57', 'content', NULL, 'content'),
(18, 'Meats', '<p>The Miller family has been providing fresh, quality meats to our customers since 1921. Dan O\'Brien, the manager of Miller\'s meat department, started working in his father\'s butcher shop as a child doing a variety of jobs. Dan has since enjoyed working in every area of the meat business. He comes to Miller\'s with a lifetime of experience and is dedicated to serving quality meats to our customers.</p>\r\n<p>Miller\'s has meat cutters that will custom cut any steak or roast you request. You have the option of getting the size and amount of meat you desire. You can have one pork chop or ten, because our meat is not prepackaged. For your convenience, we will freezer wrap all meat products.</p>\r\n<p><strong><a href="/files/meatpackages.htm">Meat Packages</a></strong><br />Miller\'s offers assorted sizes and varieties of meat packages. Just click to view our money-saving specials. For any special request, or to place an order, call 410-374-4545 and speak to any of our helpful meat associates.</p>', '2018-01-04 01:12:07', '2018-01-04 01:17:47', 'content', NULL, 'content'),
(19, 'Hot Foods', '<p style="text-align: center;"><strong>Miller\'s Whole Barbeque Rotisserie Chickens</strong></p>\r\n<p style="text-align: center;"><strong>$6.99&nbsp;Each</strong></p>\r\n<p style="text-align: center;"><strong>Miller\'s Whole Herb Rotisserie Chickens</strong></p>\r\n<p style="text-align: center;"><strong>$6.99&nbsp;<strong>Each</strong></strong></p>\r\n<p style="text-align: center;"><strong>Rotisserie Chicken Leg Quarters $2.19&nbsp;Each</strong></p>\r\n<p style="text-align: center;"><strong>Rotisserie Chicken Breast Quarters $2.49&nbsp;Each</strong></p>\r\n<p style="text-align: center;"><strong>Barbequed Rotisserie Chicken Wings $8.99&nbsp;lb.</strong></p>\r\n<p style="text-align: center;"><strong>Miller\'s Old Bay Wings $8.99&nbsp;lb.</strong></p>\r\n<p style="text-align: center;"><strong>Salt &amp; Vinegar, Spicy Or Teriyaki Chicken Wings</strong></p>\r\n<p style="text-align: center;"><strong>$8.99&nbsp;lb.</strong></p>\r\n<p style="text-align: center;"><strong>Miller\'s Macaroni &amp; Cheese $5.39&nbsp;lb.</strong></p>\r\n<p style="text-align: center;"><strong>Mashed Potatoes $3.19&nbsp;lb. &nbsp;&nbsp;</strong><strong>Green Beans $2.29&nbsp;lb.</strong></p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;"><em><strong>Miller\'s Fried Chicken</strong></em></p>\r\n<p style="text-align: center;"><strong>Whole Chicken 8 Piece &nbsp;$11.99</strong></p>\r\n<p style="text-align: center;"><strong>&nbsp;2 Brest, 2 Wings, 2 Drumsticks, 2 Thighs</strong></p>\r\n<p style="text-align: center;"><strong>Half Chicken 4 Piece $5.99</strong></p>\r\n<p style="text-align: center;"><strong>1 Breast, 1 Wing, 1 Thigh, 1 Drumstick</strong></p>\r\n<p style="text-align: center;"><strong>2 Piece Dark Meat $2.99&nbsp;1 Thigh &amp; 1 Drumstick</strong></p>\r\n<p style="text-align: center;"><strong>2 Piece White Meat $3.89&nbsp;1 Breast &amp; 1 Wing</strong></p>\r\n<p style="text-align: center;"><strong>20 Piece Mix &nbsp;$24.99</strong></p>\r\n<p style="text-align: center;"><strong>50 Piece Mix &nbsp;$61.99</strong></p>\r\n<p style="text-align: center;"><strong><strong><strong>100 Piece Mix</strong></strong>&nbsp;&nbsp;$119.99</strong></p>\r\n<p style="text-align: center;"><strong>3 Piece Chicken Strips&nbsp;&nbsp;</strong><strong>$3.99</strong></p>\r\n<p style="text-align: center;"><strong>6 Piece Chicken Strips&nbsp;&nbsp;</strong><strong>$6.99</strong></p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;"><em><strong>Miller\'s Daily Specials</strong></em></p>\r\n<h2 style="text-align: center;">Monday after 3 pm</h2>\r\n<p style="text-align: center;"><strong>Hot Roast Beef Meal</strong></p>\r\n<p style="text-align: center;"><strong>Includes Beef, Miller&rsquo;s Stuffing, Beef Gravy, Mashed Potatoes or Miller&rsquo;s Macaroni &amp; Cheese, Green Beans.&nbsp;</strong></p>\r\n<h3 style="text-align: center;">Individual Size&nbsp; $7.29&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>\r\n<p style="text-align: center;"><strong>Hot Roast Beef can be purchased separately&nbsp; $11.99&nbsp;</strong><strong>lb.</strong></p>\r\n<p style="text-align: center;"><strong>&nbsp;</strong></p>\r\n<h2 style="text-align: center;">Tuesday after 3 pm</h2>\r\n<p style="text-align: center;"><strong>Hot Turkey Meal</strong></p>\r\n<p style="text-align: center;"><strong>Includes Turkey, Miller&rsquo;s Chicken Stuffing, Gravy, Mashed Potatoes or Miller&rsquo;s Macaroni &amp; Cheese, Green Beans.</strong></p>\r\n<h3 style="text-align: center;">Individual Size&nbsp; $7.29&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>\r\n<p style="text-align: center;"><strong>Hot Turkey can be purchased separately&nbsp; $11.99&nbsp;</strong><strong>lb.</strong></p>\r\n<p style="text-align: center;"><strong>&nbsp;</strong></p>\r\n<h2 style="text-align: center;">Wednesday Italian Night! After 3 pm</h2>\r\n<p style="text-align: center;"><strong>Spaghetti &amp; Meatballs Meal</strong></p>\r\n<p style="text-align: center;"><strong>includes Garlic Bread and Apple Crisp $5.99</strong></p>\r\n<p style="text-align: center;"><strong>&nbsp;</strong></p>\r\n<p style="text-align: center;"><strong>Miller&rsquo;s Lasagna&nbsp; $6.99&nbsp;</strong><strong>lb.</strong><strong>&nbsp;</strong></p>\r\n<p style="text-align: center;"><strong>&nbsp;</strong></p>\r\n<h2 style="text-align: center;">Thursday Night after 3 pm</h2>\r\n<p style="text-align: center;"><strong>Miller\'s Hot Meatloaf &nbsp;$7.99&nbsp;lb.</strong></p>\r\n<p style="text-align: center;"><strong>Chicken Tortilla Casserole $6.99&nbsp;</strong><strong>lb.</strong><strong>&nbsp;</strong></p>\r\n<h2 style="text-align: center;">Friday Night after 3 pm</h2>\r\n<p style="text-align: center;"><strong>Barbequed Baby Back Ribs&nbsp; $9.99&nbsp;1/2&nbsp;</strong><strong>Rack</strong><strong>&nbsp;</strong></p>\r\n<p style="text-align: center;"><strong>Fresh Baked Salmon Fillets&nbsp; $15.99&nbsp;</strong><strong>lb.</strong><strong>&nbsp;</strong></p>\r\n<p style="text-align: center;"><strong>&nbsp;</strong></p>\r\n<h2 style="text-align: center;">Saturday after 1 pm</h2>\r\n<p style="text-align: center;"><strong>Barbequed Baby Back Ribs&nbsp;&nbsp; $9.99&nbsp;Half Rack</strong></p>\r\n<p style="text-align: center;"><strong>&nbsp;</strong></p>\r\n<p style="text-align: center;">&nbsp;</p>', '2018-01-04 01:20:59', '2018-01-04 01:23:03', 'content', NULL, 'content');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created`) VALUES
(1, 'test', '<p>tester</p>', '100.00', '2018-01-04 01:46:01'),
(2, 'test2', '<p>test2</p>', '200.00', '2018-01-04 01:48:07'),
(3, 'test3', '<p>test3</p>', '300.00', '2018-01-04 01:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created` datetime NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `created`, `category`) VALUES
(3, 'Hearty Beef Stew', '1 Â½ -2 lb. Miller\'s Choice Beef Cubes       \r\n\r\n1 28 oz. can tomatoes\r\n\r\n4-5 carrots, sliced            Â¼ cup quick-cooking tapioca\r\n\r\n1 small onion, diced        1 whole clove (optional)\r\n\r\n2-3 stalks celery, sliced    2 bay leaves\r\n\r\nsalt & Pepper to taste\r\n\r\n Put all ingredients in Crock-Pot and mix.  Cover and cook on low 8-10 hours, high 4-5 hours.', '2018-01-03 23:17:22', 'beef');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `name`, `image_url`, `created`) VALUES
(1, 'This Week\'s Specials 1/3', '/files/uploads/December 6-12, 2017.pdf', '2018-01-03 21:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(2, 'ericbloom', '$2a$10$D3MaYxUR0izpQXcGMmeaUOiROs38Foii.mCTBMlS9RwZRH.G1F57S', 'admin', '2017-06-30 12:06:27', '2017-06-30 12:06:27'),
(3, 'KenMiller', '$2a$10$9dH2jyHTdRJpJb5mtr4LHOjt5Y5jRwh1R5kXsU0tcgLD0PzIWbQ6e', 'admin', '2017-11-30 17:15:23', '2017-12-08 15:08:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8064;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
