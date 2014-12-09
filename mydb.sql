-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2014 at 12:16 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area_latitude` float(18,16) NOT NULL,
  `area_longitude` float(18,16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `area_latitude`, `area_longitude`, `created_at`, `updated_at`) VALUES
(1, 'Badda', 23.7805137634277340, 90.4267044067382800, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(2, 'Banani', 23.7943992614746100, 90.4009475708007800, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(3, 'Biman Bandar', 23.8504219055175780, 90.4084548950195300, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(4, 'Cantonment', 23.8282032012939450, 90.3889770507812500, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(5, 'Demra', 23.7207908630371100, 90.4833450317382800, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(6, 'Dhanmondi', 23.7465229034423830, 90.3759689331054700, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(7, 'Gulshan', 23.7910213470459000, 90.4160537719726600, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(8, 'Hazaribagh', 23.7374477386474600, 90.3665695190429700, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(9, 'Jatra Bari', 23.7105751037597660, 90.4350204467773400, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(10, 'Kafrul', 23.7896080017089840, 90.3913345336914000, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(11, 'Khilgaon', 23.7565402984619140, 90.4644622802734400, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(12, 'Kotwali', 23.7106533050537100, 90.4090118408203100, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(13, 'Lalbagh', 23.7189826965332030, 90.3880310058593800, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(14, 'Mirpur', 23.8222751617431640, 90.3654098510742200, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(15, 'Mohammadpur', 23.7657299041748050, 90.3583755493164000, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(16, 'Motijheel', 23.7328910827636720, 90.4172515869140600, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(17, 'Mugda', 23.7313976287841800, 90.4348526000976600, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(18, 'Pallabi', 23.8459854125976560, 90.3655014038086000, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(19, 'Ramna', 23.7415332794189450, 90.4083251953125000, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(20, 'Rampura', 23.7608604431152340, 90.4200897216796900, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(21, 'Sabujbagh', 23.7416133880615230, 90.4574203491211000, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(22, 'Sadarghat', 23.7046813964843750, 90.4160537719726600, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(23, 'Shyampur', 23.6854248046875000, 90.4454956054687500, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(24, 'Sutrapur', 23.7120685577392580, 90.4196166992187500, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(25, 'Tejgaon', 23.7594451904296880, 90.3913345336914000, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(26, 'Tongi', 23.8899402618408200, 90.4058380126953100, '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(27, 'Uttara', 23.8756561279296880, 90.3796615600586000, '2014-12-01 17:31:16', '2014-12-01 17:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_details`, `created_at`, `updated_at`) VALUES
(1, 'Acupuncturist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(2, 'Allergist (Immunologist)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(3, 'Audiologist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(4, 'Cardiologist (Heart Doctor)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(5, 'Cardiothoracic Surgeon', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(6, 'Chiropractor', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(7, 'Dentist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(8, 'Dermatologist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(9, 'Dietitian / Nutritionist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(10, 'Ear, Nose and Throat Doctor (ENT)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(11, 'Endocrinologist (incl Diabetes Specialists)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(12, 'Eye Doctor', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(13, 'Gastroenterologist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(14, 'Hearing Specialist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(15, 'Hematologist (Blood Specialist)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(16, 'Infectious Disease Specialist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(17, 'Infertility Specialist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(18, 'Midwife', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(19, 'Medicine', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(20, 'Naturopathic Doctor', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(21, 'Nephrologist (incl Headache Specialist)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(22, 'Neurosurgeon', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(23, 'OB-GYN (Obstetrician-Gynecologist)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(24, 'Oncologist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(25, 'Ophthalmologist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(26, 'Optometrist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(27, 'Orthodontist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(28, 'Orthopedic Surgeon (Orthopedist)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(29, 'Pain Management Specialist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(30, 'Pediatric Dentist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(31, 'Pediatrician', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(32, 'Physiatrist (Physical Medicine)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(33, 'Physical Therapist', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(34, 'Plastic Surgeon', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(35, 'Podiatrist (Foot and Ankle Specialist)', '', '2014-12-01 17:31:15', '2014-12-01 17:31:15'),
(36, 'Primary Care Doctor', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(37, 'Prosthodontics', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(38, 'Psychiatrist', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(39, 'Psychologist', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(40, 'Pulmonologist (Lung Doctor)', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(41, 'Radiologist', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(42, 'Rheumatologist', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(43, 'Sleep Medicine Specialist', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(44, 'Sports Medicine Specialist', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(45, 'Surgeon', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(46, 'Therapist / Counselor', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(47, 'Urgent Care Doctor', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(48, 'Urological Surgeon', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(49, 'Urologist', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16'),
(50, 'Vascular Surgeon', '', '2014-12-01 17:31:16', '2014-12-01 17:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `chambers`
--

CREATE TABLE IF NOT EXISTS `chambers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `chamber_address` text COLLATE utf8_unicode_ci NOT NULL,
  `chamber_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chamber_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chamber_latitude` float(18,16) NOT NULL DEFAULT '23.7000007629394530',
  `chamber_longitude` float(18,16) NOT NULL DEFAULT '90.3750000000000000',
  `visiting_time_start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visiting_time_end` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chambers`
--

INSERT INTO `chambers` (`id`, `doctor_id`, `chamber_address`, `chamber_phone`, `chamber_email`, `chamber_latitude`, `chamber_longitude`, `visiting_time_start`, `visiting_time_end`, `created_at`, `updated_at`) VALUES
(1, 1, 'basundhara', '+8801xxxxxxxxx', '1@gmail.com', 0.0000000000000000, 0.0000000000000000, '5:0 PM', '9:0 PM', '2014-12-01 17:35:25', '2014-12-01 17:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `disease_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disease_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `disease_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `disease_drugs`
--

CREATE TABLE IF NOT EXISTS `disease_drugs` (
  `id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptoms`
--

CREATE TABLE IF NOT EXISTS `disease_symptoms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `disease_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hospital_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `area_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_age` int(11) NOT NULL,
  `doctor_sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_address` text COLLATE utf8_unicode_ci NOT NULL,
  `doctor_experience` int(11) NOT NULL,
  `doctor_degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_passed_uni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_fee` int(11) NOT NULL,
  `doctor_avg_rating` float(3,2) NOT NULL,
  `doctor_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `doctor_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `hospital_id`, `category_id`, `area_id`, `doctor_email`, `doctor_password`, `doctor_full_name`, `doctor_age`, `doctor_sex`, `doctor_address`, `doctor_experience`, `doctor_degree`, `doctor_passed_uni`, `doctor_fee`, `doctor_avg_rating`, `doctor_pic`, `doctor_details`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', 'tonoy@gmail.com', 'c70b5dd9ebfb6f51d09d4132b7170c9d20750a7852f00680f65658f0310e810056e6763c34c9a00b0e940076f54495c169fc2302cceb312039271c43469507dc', 'Tonoy', 25, 'male', '15/19, Cantonment', 2, 'aPost Graduate, z', 'DMC', 200, 4.00, 'grid-img1-547cfb3d79182.png', '', '2014-12-01 17:35:25', '2014-12-01 17:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reviews`
--

CREATE TABLE IF NOT EXISTS `doctor_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_rating` float(3,2) NOT NULL,
  `doctor_review` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctor_reviews`
--

INSERT INTO `doctor_reviews` (`id`, `user_id`, `doctor_id`, `doctor_rating`, `doctor_review`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4.00, ':D', '2014-12-01 17:46:06', '2014-12-01 17:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE IF NOT EXISTS `drugs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drug_manufacturer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drug_price` int(11) NOT NULL,
  `drug_elements` text COLLATE utf8_unicode_ci NOT NULL,
  `drug_avg_rating` float(3,2) NOT NULL,
  `drug_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `drug_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `drug_reviews`
--

CREATE TABLE IF NOT EXISTS `drug_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `drug_rating` float(3,2) NOT NULL,
  `drug_review` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_address` text COLLATE utf8_unicode_ci NOT NULL,
  `hospital_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `hospital_latitude` float(18,16) NOT NULL,
  `hospital_longitude` float(18,16) NOT NULL,
  `hospital_avg_rating` float(3,2) NOT NULL,
  `hospital_avg_cost` int(11) NOT NULL,
  `hospital_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `hospital_address`, `hospital_phone`, `hospital_email`, `hospital_pic`, `hospital_latitude`, `hospital_longitude`, `hospital_avg_rating`, `hospital_avg_cost`, `hospital_details`, `created_at`, `updated_at`) VALUES
(1, 'Apollo', 'Basundhara, Dhaka', '+8801xxxxxxxxx', 'apollo@gmail.com', 'grid-img2-547cfacb81abd.png', 23.7867584228515620, 90.3997955322265600, 0.00, 10000, 'Ludacrist', '2014-12-01 17:33:31', '2014-12-01 17:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_reviews`
--

CREATE TABLE IF NOT EXISTS `hospital_reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `hospital_rating` float(3,2) NOT NULL,
  `hospital_review` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_12_01_231334_mydb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_titel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_author`, `news_titel`, `news_body`, `created_at`, `updated_at`) VALUES
(1, 'b f', 'hbjv', 'kjbjb vclhgvchg lugvuv/', '2014-12-01 18:14:22', '2014-12-01 18:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE IF NOT EXISTS `symptoms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `symtom_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symtom_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `symtom_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE IF NOT EXISTS `tips` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tip_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tip_titel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tip_body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `tip_author`, `tip_titel`, `tip_body`, `created_at`, `updated_at`) VALUES
(1, 'y trd ', 't4tty4yg', '5h55y4y5h', '2014-12-01 18:14:45', '2014-12-01 18:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` text COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `user_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_email`, `user_password`, `user_full_name`, `user_age`, `user_sex`, `user_address`, `user_phone`, `user_pic`, `user_details`, `created_at`, `updated_at`) VALUES
(1, 'shetu@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'shetu', 29, 'male', 'nikunja-2, dhaka', '008801xxxxxxxxx', 'default.png', '', '2014-12-01 17:41:56', '2014-12-01 17:41:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
