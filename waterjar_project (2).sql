-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2022 at 11:39 AM
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
-- Database: `waterjar_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `baimg`
--

CREATE TABLE `baimg` (
  `baimg_id` int(11) NOT NULL,
  `baimg_title` text NOT NULL,
  `baimg_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baimg`
--

INSERT INTO `baimg` (`baimg_id`, `baimg_title`, `baimg_img`) VALUES
(2, 'Here we are provide information about the items we have. That is, how many jars we have and other information.', '3761baimg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bgimg`
--

CREATE TABLE `bgimg` (
  `bgimg_id` int(11) NOT NULL,
  `bgimg_title` text NOT NULL,
  `bgimg_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bgimg`
--

INSERT INTO `bgimg` (`bgimg_id`, `bgimg_title`, `bgimg_img`) VALUES
(1, 'How It Works', '9216bgimg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bpro`
--

CREATE TABLE `bpro` (
  `bpro_id` int(11) NOT NULL,
  `bpro_title` text NOT NULL,
  `bpro_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpro`
--

INSERT INTO `bpro` (`bpro_id`, `bpro_title`, `bpro_img`) VALUES
(2, 'Best Services', '3786bpro.png'),
(3, 'Secure Payments', '6194bpro.png'),
(4, 'Free Delivery', '678bpro.png'),
(5, 'Best Quality', '2907bpro.png');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `c_id` int(11) NOT NULL,
  `c_title` text NOT NULL,
  `c_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`c_id`, `c_title`, `c_desc`) VALUES
(3, 'Company Details', 'We Provide Best of an industrial solution in various segment like mineral water.We have made a difference in the industry by developing quality product at nominal price brand.Our company based is fully eqipped with high speed machinery that is headed by technologically adept professionals. Water jar management system is a web based software solution which helps in the automation of the operational side or drinking water manafactures and distributers.  We have designed the most flexible intuitive water jar management and water jar distribution software helping water jar companies to improve their shops.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `c_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`c_id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'pratiksha', 'pra@gmail.com', '7620876042', 'no'),
(3, 'Akansha Nangre', 'aku@gmail.com', '97726677', 'yes'),
(4, 'ram', 'ram@gmail.com', '977266778', 'Hello'),
(5, 'om', 'om@gmail.com', '422345566687', 'Hlo'),
(6, 'pratiksha', 'pra@gmail.com', '7620876042', 'no'),
(7, 'Somesh', 'Somesh@gmail.com', '8776456765', 'good'),
(8, 'sanika', 'sanika@gmail.com', '977266778', 'goodmorning');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `c_id` int(11) NOT NULL,
  `c_address` text NOT NULL,
  `c_mobile` varchar(10) NOT NULL,
  `c_email` text NOT NULL,
  `f_Link` text NOT NULL,
  `i_Link` text NOT NULL,
  `t_Link` text NOT NULL,
  `y_Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`c_id`, `c_address`, `c_mobile`, `c_email`, `f_Link`, `i_Link`, `t_Link`, `y_Link`) VALUES
(1, 'A108 Adam Street  MJ Road 535022, Pune,India', '7620876042', 'aquatrack@gmail.com', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `cust_mng`
--

CREATE TABLE `cust_mng` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `route` text NOT NULL,
  `amount` text NOT NULL,
  `d_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_mng`
--

INSERT INTO `cust_mng` (`id`, `name`, `route`, `amount`, `d_date`) VALUES
(1, 'rode pratiksha ', '', '90', '2022-10-19'),
(3, ' pratiksha ', '', '1000', '2022-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `dist_mng`
--

CREATE TABLE `dist_mng` (
  `id` int(11) NOT NULL,
  `n_name` text NOT NULL,
  `a_area` text NOT NULL,
  `t_amount` text NOT NULL,
  `d_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dist_mng`
--

INSERT INTO `dist_mng` (`id`, `n_name`, `a_area`, `t_amount`, `d_date`) VALUES
(2, 'Bhagyashree Dahatonde', 'Sonai', '200', '2022-10-10'),
(3, 'Sai', 'Mumbai', '50000', '2022-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `mobile`, `password`, `name`) VALUES
(1, 'admin@gmail.com', '7620876042', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `c_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `c_map`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.04360433725!2d73.7929268525699!3d18.524603553429806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1667831328325!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `o_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_phone` text NOT NULL,
  `c_email` text NOT NULL,
  `c_pin` text NOT NULL,
  `c_address` text NOT NULL,
  `c_quantity` text NOT NULL,
  `c_capacity` text NOT NULL,
  `c_date` text NOT NULL,
  `c_category` text NOT NULL,
  `c_cname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_form`
--

INSERT INTO `order_form` (`o_id`, `c_name`, `c_phone`, `c_email`, `c_pin`, `c_address`, `c_quantity`, `c_capacity`, `c_date`, `c_category`, `c_cname`) VALUES
(3, 'Sai', '7620876042', 'Sai@gmail.com', '414103', 'pune', '500', '20l', '2022-11-06', 'cold', ''),
(4, 'ankita', '9899765', 'aqua@gmail.com', '3030', 'mumbai', '100', '67L', '2022-11-06', 'Medium', 'aqua');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `pricing_id` int(11) NOT NULL,
  `pricing_title` text NOT NULL,
  `pricing_color` text NOT NULL,
  `pricing_material` text NOT NULL,
  `pricing_app` text NOT NULL,
  `pricing_capacity` text NOT NULL,
  `pricing_pattern` text NOT NULL,
  `pricing_packaging` text NOT NULL,
  `pricing_price` text NOT NULL,
  `pricing_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`pricing_id`, `pricing_title`, `pricing_color`, `pricing_material`, `pricing_app`, `pricing_capacity`, `pricing_pattern`, `pricing_packaging`, `pricing_price`, `pricing_img`) VALUES
(1, 'Plastic Transparent 20Ltr Bubble Top 1 Mineral Water Jar, For Home', 'Color: Transparent', 'Material: Plastic', 'Usage/Application: Home', 'Capacity: 20L', 'Pattern: Plain', 'Packaging type: standard', '₹ 700/Jar', '170pricing.png'),
(2, 'Sitaram Blue, Transparent Plastic Water Jar, Capacity: 18-20 L', 'Color: Blue, Transparent', 'Brand: Sitaram', 'Deals in: new only', 'Capacity:18-20 L', 'Pattern: Plain', 'Packaging type: standard', '₹ 340/Jar', '8862pricing.jpg'),
(3, 'Round Transparent Plastic Water Dispenser Jar, Capacity: 50 Liter', 'Color: Transparent', 'Material: Plastic', 'Deals in: new only', 'Capacity: 50 Liter', 'Pattern: Plain', 'Packaging type: standard', '₹ 900/Jar', '6496pricing.png'),
(4, 'Plastic Mineral Water Jar', 'Color: Transparent', 'Material: Plastic', 'Features: GOOD', 'Capacity: 20L', 'Size: FGD, 18', 'Packaging type: standard', '₹ 350/Jar', '5769pricing.jpg'),
(5, 'Pink 20 Liter Dolphin Water Jar', 'Color: Transparent', 'Material: Plastic', 'Usage/Application: Home', 'Capacity: 20L', 'Deals in: new only', 'Packaging type: standard', '₹ 480/Jar', '8244pricing.jpg'),
(6, 'Natural Mineral Water Jar 20 Liter', 'Color: Blue, Non-Transparent', 'Brand: Sitaram', 'Deals in: new only', 'Capacity:18-20 L', 'Pattern: Plain', 'Packaging type: standard', '₹ 690/Jar', '8414pricing.jpg'),
(7, 'Plastic Water Dispenser Jar, Capacity: 50 Liter', 'Color: Green-Transparent', 'Material: Plastic', 'Usage/Application: Home', 'Capacity: 50 Liter', 'Pattern: Plain', 'Packaging type: standard', '₹ 990/Jar', '6242pricing.png'),
(8, 'Plastic Mineral Water Jar', 'Color: Transparent', 'Material: Plastic', 'Features: GOOD', 'Capacity: 20L', 'Size: FGD, 18', 'Packaging type: standard', '₹ 250/Jar', '5900pricing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_img` text NOT NULL,
  `slider_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_img`, `slider_title`) VALUES
(1, '2593slider.jpg', 'We Provide Best of an industrial solution in various segment like mineral water.'),
(2, '5445slider.webp', 'We Provide Best of an industrial solution in various segment like mineral water.'),
(3, '5059slider.jpg', 'We Provide Best of an industrial solution in various segment like mineral water.'),
(4, '2598slider.jpg', 'We Provide Best of an industrial solution in various segment like mineral water.');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_title` text NOT NULL,
  `status_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_title`, `status_desc`) VALUES
(2, 'Total Empty Jar', '1000'),
(3, 'Total Filled Jar', '6000'),
(4, 'Total Jar Deposit', '1000'),
(5, 'Total Jar Stock', '10,000'),
(6, 'Total Available Jar', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_img` text NOT NULL,
  `team_name` text NOT NULL,
  `team_position` text NOT NULL,
  `team_desc` text NOT NULL,
  `t_link` text NOT NULL,
  `f_link` text NOT NULL,
  `i_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_img`, `team_name`, `team_position`, `team_desc`, `t_link`, `f_link`, `i_link`) VALUES
(3, '9367team.jpg', 'Sarah Jhonson', 'Product Manager', 'A product manager is the person who creates internal and external product vision and leads product development from scratch. This individual defines customer needs, works with stakeholders and teams on creating the required product, and carries responsibility for overall product success.', '#', '#', '#'),
(4, '1969team.jpg', 'William Anderson', 'CTO', 'A Chief Technology Officer (sometimes called Chief Technical Officer) is the most skilled technology person in the company. If it’s a tech startup, a CTO is usually a cofounder, the main thinker behind the product. In an older organization, this is a C-level executive who investigates the technology trends and implements them within the product in accordance with the product vision, strategy, and roadmap.', '#', '#', '#'),
(5, '3288team.jpg', 'Amanda Jepson', 'Accountant', 'A Staff Accountant handles a company’s accounting procedures and maintains a healthy financial profile ensuring compliance with state, federal, and local principles. When hiring accounting staff for your company, make sure they’re familiar with all financial laws and regulations that apply in your region and are specific to your industry.', '#', '#', '#'),
(6, '3723team.jpg', 'Brian Doe', 'Marketing', 'A content manager is typically in charge of every phase of content, from inception through to promotion. Depending on the makeup of the marketing department, they may also be in charge of the full content strategy and measuring and reporting results.', '#', '#', '#'),
(7, '8680team.jpg', 'Josepha Palas', 'Operation', '“Content operations” encompasses the set of processes, people and technologies for strategically planning, distributing and analyzing content. Content operations should align with business priorities, help improve collaboration and are increasingly becoming a core requirement for content teams.', '#', '#', '#'),
(8, '1434team.jpg', 'Sarah Jhonson', 'Product Manager', 'A product manager is the person who creates internal and external product vision and leads product development from scratch. This individual defines customer needs, works with stakeholders and teams on creating the required product, and carries responsibility for overall product success.', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonials_id` int(11) NOT NULL,
  `testimonials_img` text NOT NULL,
  `testimonials_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonials_id`, `testimonials_img`, `testimonials_name`) VALUES
(2, '359testimonials.jpg', 'Sara Wilsson'),
(3, '19testimonials.jpg', 'Saul Goodman'),
(4, '9725testimonials.jpg', 'Jena Karlis'),
(5, '254testimonials.jpg', 'Matt Brandon'),
(6, '45testimonials.jpg', 'John Larson');

-- --------------------------------------------------------

--
-- Table structure for table `working`
--

CREATE TABLE `working` (
  `working_id` int(11) NOT NULL,
  `working_title` text NOT NULL,
  `working_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `working`
--

INSERT INTO `working` (`working_id`, `working_title`, `working_img`) VALUES
(1, ' Select the Quantity and Preffered Time', '7495working.png'),
(2, 'Get Your Delivery On Time ', '2449working.png'),
(3, 'Confirm Order', '1640working.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baimg`
--
ALTER TABLE `baimg`
  ADD PRIMARY KEY (`baimg_id`);

--
-- Indexes for table `bgimg`
--
ALTER TABLE `bgimg`
  ADD PRIMARY KEY (`bgimg_id`);

--
-- Indexes for table `bpro`
--
ALTER TABLE `bpro`
  ADD PRIMARY KEY (`bpro_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `cust_mng`
--
ALTER TABLE `cust_mng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dist_mng`
--
ALTER TABLE `dist_mng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricing_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonials_id`);

--
-- Indexes for table `working`
--
ALTER TABLE `working`
  ADD PRIMARY KEY (`working_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baimg`
--
ALTER TABLE `baimg`
  MODIFY `baimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bgimg`
--
ALTER TABLE `bgimg`
  MODIFY `bgimg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bpro`
--
ALTER TABLE `bpro`
  MODIFY `bpro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cust_mng`
--
ALTER TABLE `cust_mng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dist_mng`
--
ALTER TABLE `dist_mng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `pricing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `working`
--
ALTER TABLE `working`
  MODIFY `working_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
