-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 11:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgson`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id_admin` int(1) NOT NULL,
  `adminusername` varchar(50) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `newpassword` varchar(50) NOT NULL,
  `admin_position` varchar(300) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `create_datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id_admin`, `adminusername`, `employee_id`, `admin_name`, `admin_email`, `admin_password`, `newpassword`, `admin_position`, `contact_number`, `create_datetime`) VALUES
(3, 'Admin', 'Main', 'Main Admin', 'admin@mgsonwhiteningandbeatyshop.com', 'cjM8WOqV', '', 'Main Admin', '09366663174', '2021-12-04'),
(5, '', '19250004', 'Renante Fiel G. Balorio', 'balorio.r@yahoo.com', '', '', 'production_staff', '0951-3835-404', '0000-00-00'),
(6, '', '19250003', 'Ronulfo B. Baclas', 'rbaclas_f19@pwc.edu.ph', '', '', 'management_staff', '0966-3995-427', '0000-00-00'),
(7, 'kenneth', '1122', 'kenneth', 'kennjamespalabao@gmail.com', 'kennjames', '', 'management_staff', '09354821256', '2022-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id_conts` int(50) NOT NULL,
  `id_users` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id_conts`, `id_users`, `name`, `email`, `department`, `subject`, `phone`, `comments`, `created_date`) VALUES
(4, '', 'mars', 'marsicon@gmail.com', '', '', '24354646', 'sample message', '2021-12-06'),
(5, '', 'kenn', 'kennjamespalabao@gmail.com', 'management_staff', 'test', '09354821256', 'test ', '2022-03-23'),
(6, '', 'kenn', 'kennjamespalabao@gmail.com', 'production_staff', 'test', '09354821256', 'test', '2022-03-23'),
(7, '', 'kenneth', 'kennjamespalabao@gmail.com', 'Others', 'test', '09354821256', 'test', '2022-03-25'),
(8, '', 'kenneth', 'kennjamespalabao@gmail.com', 'Others', 'test', '09354821256', 'test', '2022-03-25'),
(9, '', 'kenneth', 'kennjamespalabao@gmail.com', 'Others', 'test', '09354821256', 'test', '2022-03-25'),
(10, '', 'kenn', 'kennjamespalabao@gmail.com', 'Others', 'test', '09354821256', 'test', '2022-03-25'),
(11, '', 'kennjames', 'kennjamespalabao@gmail.com', 'Others', 'test', '09508245570', 'test', '2022-03-25'),
(12, '', 'kennjames', 'kennjamespalabao@gmail.com', 'Others', 'test', '09508245570', 'test', '2022-03-25'),
(13, '0', 'test', 'test@gmail.com', 'Others', 'test', '09508245570', 'test', '2022-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `depotusers`
--

CREATE TABLE `depotusers` (
  `id_users` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `depot_name` varchar(50) NOT NULL,
  `depot_email` varchar(50) NOT NULL,
  `depot_contractnumber` varchar(50) NOT NULL,
  `password_dept` varchar(50) NOT NULL,
  `create_datetimedep` date NOT NULL,
  `renewaldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depotusers`
--

INSERT INTO `depotusers` (`id_users`, `username`, `depot_name`, `depot_email`, `depot_contractnumber`, `password_dept`, `create_datetimedep`, `renewaldate`) VALUES
(1, 'Cecellie', 'Cecellie', 'Cecellie@gmail.com', '123253465', 'hSsgretdgKzf8', '2021-11-28', '0000-00-00'),
(2, 'Mars', 'maricon', 'maricon@gmail.com', '123253465', 'hSsMKzf8', '2021-11-28', '0000-00-00'),
(3, 'Neptune', 'Neptune', 'Neptune@gmail.com', '242553465', '1324sMKzf8', '2021-11-28', '0000-00-00'),
(4, 'June', 'June', 'June@gmail.com', '53453463456', '164536sM', '2021-11-28', '0000-00-00'),
(5, 'Arros', 'Arros', 'Arros@gmail.com', '43534', 'Kzwerewf8', '2021-11-28', '0000-00-00'),
(6, 'Maery', 'Maery', 'Maery@gmail.com', '43534', '5Kzerewf', '2021-11-28', '0000-00-00'),
(7, 'Rose', 'Rose', 'Rose@gmail.com', '43534', '1645ewf8', '2021-11-28', '0000-00-00'),
(8, 'Elley', 'Elley', 'Elley@gmail.com', '43534', '1645wre8', '2021-11-28', '0000-00-00'),
(9, 'Noah', 'Noah', 'Noah@gmail.com', '43534', '1645rzf8', '2021-11-28', '0000-00-00'),
(10, 'Caden', 'Caden', 'Caden@gmail.com', '43534', '164eKzf8', '2021-11-28', '0000-00-00'),
(11, 'Depot', 'MAIN', 'main_depot@gmail.com', 'NONE', 'skrJny0W', '2021-12-04', '0000-00-00'),
(0, 'kenn', 'kennjames', 'kennjamespalabao@gmail.com', '09354821256', 'kennjames', '2022-03-15', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `distributor_id` int(50) NOT NULL,
  `id_users` varchar(200) NOT NULL,
  `id_admin` varchar(200) NOT NULL,
  `id_product` varchar(200) NOT NULL,
  `applicantname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `brgy` varchar(200) NOT NULL,
  `streetone` varchar(200) NOT NULL,
  `streettwo` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `statprovince` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `confirmemail` varchar(200) NOT NULL,
  `targetarea` varchar(200) NOT NULL,
  `selectpackage` varchar(200) NOT NULL,
  `proofindentification` varchar(300) NOT NULL,
  `size` int(200) NOT NULL,
  `downloads` varchar(300) NOT NULL,
  `termscondition` varchar(200) NOT NULL,
  `datecreated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`distributor_id`, `id_users`, `id_admin`, `id_product`, `applicantname`, `middlename`, `lastname`, `brgy`, `streetone`, `streettwo`, `city`, `statprovince`, `country`, `zipcode`, `phonenumber`, `email`, `confirmemail`, `targetarea`, `selectpackage`, `proofindentification`, `size`, `downloads`, `termscondition`, `datecreated`) VALUES
(6, '', '', '', 'Mars', 'Distributor', 'Distributor', 'Davao City', '', '', '', '', 'Philippines', '8000', '453467', 'mars@gmail.com', 'mars@gmail.com', 'Davao City', 'sample package', 'screen-shot1-1638795504.png', 0, '', '', '2021-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `placeorder`
--

CREATE TABLE `placeorder` (
  `placeorder_id` int(1) NOT NULL,
  `id_users` varchar(50) NOT NULL,
  `id_product` varchar(100) NOT NULL,
  `id_admin` varchar(200) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_cat` varchar(50) NOT NULL,
  `ordered_pcs` int(50) NOT NULL,
  `quantity_remaining` int(30) NOT NULL,
  `product_status` varchar(50) NOT NULL,
  `date_ordered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placeorder`
--

INSERT INTO `placeorder` (`placeorder_id`, `id_users`, `id_product`, `id_admin`, `product_name`, `product_cat`, `ordered_pcs`, `quantity_remaining`, `product_status`, `date_ordered`) VALUES
(7, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 1, 0, 'On Progress', '2021-12-05'),
(8, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 20, 0, 'On Progress', '2021-12-05'),
(9, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 100, 0, 'On Progress', '2022-03-16'),
(10, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 100, 0, 'On Progress', '2022-03-17'),
(11, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 100, 0, 'On Progress', '2022-03-17'),
(12, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 10, 0, 'On Progress', '2022-03-17'),
(13, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 20, 0, 'On Progress', '2022-03-17'),
(14, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 10, 0, 'On Progress', '2022-03-17'),
(15, '', '', '', '', 'facial_care', 100, 0, 'On Progress', '2022-03-18'),
(16, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 123, 0, 'On Progress', '2022-03-18'),
(17, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 123, 0, 'On Progress', '2022-03-18'),
(18, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 123, 0, 'On Progress', '2022-03-18'),
(19, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 123, 0, 'On Progress', '2022-03-18'),
(20, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 12, 0, 'On Progress', '2022-03-18'),
(21, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 12, 0, 'On Progress', '2022-03-18'),
(22, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 12, 0, 'On Progress', '2022-03-18'),
(23, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 123, 0, 'On Progress', '2022-03-18'),
(24, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 123, 0, 'On Progress', '2022-03-18'),
(25, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 500, 500, 'On Progress', '2022-03-18'),
(26, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 500, 500, 'On Progress', '2022-03-18'),
(27, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 1, 999, 'On Progress', '2022-03-18'),
(28, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 20, 980, 'On Progress', '2022-03-18'),
(29, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 20, 980, 'On Progress', '2022-03-18'),
(30, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 20, 980, 'On Progress', '2022-03-18'),
(31, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 10, 970, 'On Progress', '2022-03-18'),
(32, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 10, 990, 'On Progress', '2022-03-22'),
(33, '', '', '', 'Baby Cream SPF 45++', 'body_care', 123, -130, 'On Progress', '2022-03-22'),
(34, '', '', '', 'Bleaching Soap', 'body_care', 300, 700, 'Complete', '2022-03-22'),
(35, '', '', '', 'Ageless Beauty Maintenance Set', 'facial_care', 47, 800, 'Complete', '2022-03-22'),
(36, '', '', '', 'Bleaching Soap', 'body_care', 100, 600, 'Complete', '2022-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(1) NOT NULL,
  `id_users` varchar(50) NOT NULL,
  `id_admin` varchar(200) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_description` varchar(50) NOT NULL,
  `product_cat` varchar(50) NOT NULL,
  `barcode_sku` varchar(50) NOT NULL,
  `product_quantity` int(50) NOT NULL,
  `manufactured_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `ordered_pcs` int(50) NOT NULL,
  `remainingpcs` int(50) NOT NULL,
  `product_status` varchar(50) NOT NULL,
  `date_delivered` date NOT NULL,
  `date_ordered` date NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `id_users`, `id_admin`, `product_name`, `product_description`, `product_cat`, `barcode_sku`, `product_quantity`, `manufactured_date`, `expiration_date`, `ordered_pcs`, `remainingpcs`, `product_status`, `date_delivered`, `date_ordered`, `keywords`) VALUES
(1, '', '', 'Ageless Beauty Maintenance Set', 'Ageless Beauty Maintenace Set effectively treats', 'facial_care', 'NONE', 800, '2021-12-02', '2024-12-02', 30, 0, 'Complete', '2021-11-16', '2021-12-05', 'Ageless Beauty'),
(2, '', '', 'Ageless Beauty Rejuvenating Set', 'Extract Aloe Vera & Extract Papaya', 'facial_care', '', 1000, '2021-12-02', '2024-12-02', 5, 0, 'On Progress', '2021-12-01', '2021-12-02', 'Ageless Beauty'),
(3, '', '', 'Age Defying Serum', 'It Protects Skin To Help Skin-aging Brightens Firm', 'facial_care', 'NONE', 1000, '2021-07-02', '2023-07-02', 5, 0, 'Compelete', '0000-00-00', '0000-00-00', 'Age Defying'),
(4, '', '', 'Baby Cream SPF 45++', 'Younger looking, radiant complexion protects skin ', 'body_care', 'NONE', -130, '2021-05-02', '2023-05-02', 10, 0, 'On Progress', '2021-12-30', '2021-11-24', 'Baby Cream'),
(5, '', '', 'Bleaching Soap', 'Micro Peeling Effect Brings Back Youthful Glow Ren', 'body_care', 'NONE', 600, '2021-12-02', '2024-12-02', 300, 0, 'Complete', '2021-12-29', '2021-12-07', 'Bleaching Soap'),
(6, '', '', 'Rejuvenating Kojic Soap TRIO', 'Soap TRIO', 'body_care', 'NONE', 1000, '2021-07-02', '2024-07-02', 60, 0, 'Complete', '2021-12-31', '2021-12-12', 'Rejuvenating Kojic'),
(7, '', '', 'Footspray', 'Antifungal, It Protects Against Odor, Cool & Comfo', 'body_care', 'NONE', 1000, '2021-06-02', '2023-06-02', 60, 0, 'Complete', '2021-12-01', '2021-11-23', 'Rejuvenating Kojic'),
(8, '', '', 'Kojicmansi Soap', 'Soap Kojic + Kalamansi + Baking Soda', 'body_care', 'NONE', 1000, '2021-06-02', '2023-06-02', 200, 0, 'Refund', '0000-00-00', '0000-00-00', 'Rejuvenating Kojic'),
(9, '', '', 'Glutamansi Soap', 'Glutamansi Soap	Glutathione + Kalamansi + Baking S', 'body_care', 'NONE', 3000, '2021-05-02', '2023-05-02', 500, 0, 'Return', '2021-12-26', '2021-12-01', 'Rejuvenating Kojic'),
(10, '', '', 'Hand & Body Sunscreen Lotion', 'Aloe Vera Extract, H2O, Perfume Scent and Zinc Oxi', 'body_care', 'NONE', 3000, '2021-03-02', '2023-12-02', 300, 0, 'Complete', '2021-12-01', '2021-11-24', 'Sunscreen Lotion'),
(11, '', '', 'Ethyl Alcohol', 'Hypoallergenic , Antiseptic , Disinfectant & 70% S', 'body_care', 'NONE', 3000, '2021-06-02', '2023-06-02', 500, 0, 'On Progress', '2021-12-12', '2021-12-22', 'Alcohol'),
(12, '', '', 'Hair Mask Conditioner', 'Extra Smooth, soft and moisturize perfectly made b', 'hair_care', 'NONE', 4000, '2021-07-07', '2023-07-02', 0, 0, '', '0000-00-00', '0000-00-00', 'Hair Mask'),
(13, '', '', 'Let Hair Grow ', 'Enriched with Aloe Vera, Vitamin E and Lavaner 100', 'hair_care', 'NONE', 1000, '2021-07-02', '2023-07-02', 0, 0, '', '0000-00-00', '0000-00-00', 'Hair Grow '),
(14, '', '', 'Shampoo', 'Hair Grower , Zero Hairfall , No Frizzy Hair & Ant', 'hair_care', 'NONE', 7700, '2021-05-02', '2023-05-02', 0, 0, '', '0000-00-00', '0000-00-00', 'Shampoo'),
(16, '', '', 'Sliming Coffee', 'An instant coffee beverage that will speed your we', 'sliming_coffee', 'NONE', 1000, '2020-10-10', '2023-10-10', 0, 0, '', '0000-00-00', '0000-00-00', 'Sliming Coffee'),
(17, '', '', 'Ageless Beauty Maintenance Set', '', '', '', 0, '0000-00-00', '0000-00-00', 30, 0, 'On Progress', '0000-00-00', '2021-12-05', ''),
(18, '', '', 'Ageless Beauty Maintenance Set', '', '', '', 0, '0000-00-00', '0000-00-00', 50, 0, 'On Progress', '0000-00-00', '2021-12-05', ''),
(19, '', '', 'Kojiemansi Soap', 'Soap Kojic + Kalamansi + Baking Soda', 'body_care', 'NONE', 20, '2022-03-15', '2025-03-15', 0, 0, '', '0000-00-00', '0000-00-00', 'Kojic');

-- --------------------------------------------------------

--
-- Table structure for table `sellerform`
--

CREATE TABLE `sellerform` (
  `sellerform_id` int(50) NOT NULL,
  `id_users` varchar(200) NOT NULL,
  `id_admin` varchar(200) NOT NULL,
  `id_product` varchar(200) NOT NULL,
  `applicantname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `brgy` varchar(200) NOT NULL,
  `streetone` varchar(200) NOT NULL,
  `streettwo` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `statprovince` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `confirmemail` varchar(200) NOT NULL,
  `targetarea` varchar(200) NOT NULL,
  `selectpackage` varchar(200) NOT NULL,
  `proofindentification` varchar(300) NOT NULL,
  `size` int(200) NOT NULL,
  `downloads` varchar(300) NOT NULL,
  `termscondition` varchar(200) NOT NULL,
  `datecreated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerform`
--

INSERT INTO `sellerform` (`sellerform_id`, `id_users`, `id_admin`, `id_product`, `applicantname`, `middlename`, `lastname`, `brgy`, `streetone`, `streettwo`, `city`, `statprovince`, `country`, `zipcode`, `phonenumber`, `email`, `confirmemail`, `targetarea`, `selectpackage`, `proofindentification`, `size`, `downloads`, `termscondition`, `datecreated`) VALUES
(2, '', '', '', 'Seller Test', 'Seller Test', 'Seller Test', 'Seller Test Street', '', '', '', '', 'Philippines', '8000', '56876879', 'SellerTest@gmail.com', 'SellerTest@gmail.com', 'Davao City', 'Premium Package', 'bargraph-1638796312.png', 0, '', '', '2021-12-06'),
(3, '', '', '', 'Seller Email Notif Test', 'Seller Email Notif Test', 'Seller Email Notif Test', 'Seller Email Notif Test Street', '', '', '', '', 'Philippines', '8000', '0798685764', 'mars@gmail.com', 'mars@gmail.com', 'Davao City', 'Premium Package', 'logo-1638836680.png', 0, '', '', '2021-12-06'),
(4, '', '', '', 'Seller Notif Test', 'Seller Notif Test', 'Seller Notif Test', 'Seller Notif Test Street', '', '', '', '', 'Philippines', '8000', '09897', 'mars@gmail.com', 'mars@gmail.com', 'Davao City', 'Premium Package', 'logo-1638836934.png', 0, '', '', '2021-12-06'),
(5, '', '', '', 'Seller Test Notif', 'Seller Test Notif', 'Seller Test Notif', 'Davao City ', '', '', '', '', 'Philippines', '8000', '0989876', 'mars@gmail.com', 'mars@gmail.com', 'Davao City', 'premium', 'seller-1638842489.png', 0, '', '', '2021-12-06'),
(6, '', '', '', 'Seller Test Notif', 'Seller Test Notif', 'Seller Test Notif', 'Seller Test Notif Street', '', '', '', '', 'Philippines', '8000', '0979787656', 'mars@gmail.com', 'mars@gmail.com', 'Davao City', 'Premium Package', 'distributor-1638843150.png', 0, '', '', '2021-12-06'),
(7, '', '', '', 'Seller Notif', 'Seller Notif', 'Seller Notif', 'Seller Notif Street', '', '', '', '', 'Philippines', '8000', '97986876', 'mars@gmail.com', 'mars@gmail.com', 'Davao City', 'Premium Package', 'logo-1638843826.png', 0, '', '', '2021-12-06'),
(8, '', '', '', 'Seller Notif', 'Seller Notif', 'Seller Notif', 'Seller Notif Street ', '', '', '', '', 'Philippines', '8000', '34546546', 'mars@gmail.com', 'mars@gmail.com', 'Davao City', 'Premium Package', 'logo-1638859109.png', 0, '', '', '2021-12-06'),
(9, '', '', '', 'sub test 1', 'sub test 1', 'sub test 1', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `subform`
--

CREATE TABLE `subform` (
  `subform_id` int(50) NOT NULL,
  `id_users` varchar(200) NOT NULL,
  `id_admin` varchar(200) NOT NULL,
  `id_product` varchar(200) NOT NULL,
  `applicantname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `brgy` varchar(200) NOT NULL,
  `streetone` varchar(200) NOT NULL,
  `streettwo` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `statprovince` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `confirmemail` varchar(200) NOT NULL,
  `targetarea` varchar(200) NOT NULL,
  `selectpackage` varchar(200) NOT NULL,
  `proofindentification` varchar(300) NOT NULL,
  `size` int(200) NOT NULL,
  `downloads` varchar(300) NOT NULL,
  `termscondition` varchar(200) NOT NULL,
  `datecreated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subform`
--

INSERT INTO `subform` (`subform_id`, `id_users`, `id_admin`, `id_product`, `applicantname`, `middlename`, `lastname`, `brgy`, `streetone`, `streettwo`, `city`, `statprovince`, `country`, `zipcode`, `phonenumber`, `email`, `confirmemail`, `targetarea`, `selectpackage`, `proofindentification`, `size`, `downloads`, `termscondition`, `datecreated`) VALUES
(1, '', '', '', 'Sub-distributor test', 'Sub-distributor test', 'Sub-distributor test', 'Sub-distributor test Street', '', '', '', '', '8000', '8000', '3254365', 'Sub-distributorgmail.com', 'Sub-distributorgmail.com', 'Davao City', 'Premium Package', 'adminlogin-1638796145.png', 0, '', '', '2021-12-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id_conts`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`distributor_id`);

--
-- Indexes for table `placeorder`
--
ALTER TABLE `placeorder`
  ADD PRIMARY KEY (`placeorder_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `sellerform`
--
ALTER TABLE `sellerform`
  ADD PRIMARY KEY (`sellerform_id`);

--
-- Indexes for table `subform`
--
ALTER TABLE `subform`
  ADD PRIMARY KEY (`subform_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id_conts` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `distributor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `placeorder`
--
ALTER TABLE `placeorder`
  MODIFY `placeorder_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sellerform`
--
ALTER TABLE `sellerform`
  MODIFY `sellerform_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subform`
--
ALTER TABLE `subform`
  MODIFY `subform_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
