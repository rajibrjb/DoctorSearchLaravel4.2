-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2014 at 10:59 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `area_latitude`, `area_longitude`, `created_at`, `updated_at`) VALUES
(1, 'Uttara', 23.8666992187500000, 90.4041976928711000, '2014-10-10 11:00:00', '2014-10-10 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Acupuncturist', '2014-11-17 04:55:43', '2014-11-17 04:55:43'),
(2, 'Allergist (Immunologist)', '2014-11-17 04:55:43', '2014-11-17 04:55:43'),
(3, 'Audiologist', '2014-11-17 04:55:43', '2014-11-17 04:55:43'),
(4, 'Cardiologist (Heart Doctor)', '2014-11-17 04:55:43', '2014-11-17 04:55:43'),
(5, 'Cardiothoracic Surgeon', '2014-11-17 04:55:43', '2014-11-17 04:55:43'),
(6, 'Chiropractor', '2014-11-17 04:55:43', '2014-11-17 04:55:43'),
(7, 'Dentist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(8, 'Dermatologist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(9, 'Dietitian / Nutritionist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(10, 'Ear, Nose and Throat Doctor (ENT)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(11, 'Endocrinologist (incl Diabetes Specialists)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(12, 'Eye Doctor', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(13, 'Gastroenterologist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(14, 'Hearing Specialist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(15, 'Hematologist (Blood Specialist)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(16, 'Infectious Disease Specialist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(17, 'Infertility Specialist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(18, 'Midwife', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(19, 'Medicine', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(20, 'Naturopathic Doctor', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(21, 'Nephrologist (incl Headache Specialist)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(22, 'Neurosurgeon', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(23, 'OB-GYN (Obstetrician-Gynecologist)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(24, 'Oncologist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(25, 'Ophthalmologist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(26, 'Optometrist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(27, 'Orthodontist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(28, 'Orthopedic Surgeon (Orthopedist)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(29, 'Pain Management Specialist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(30, 'Pediatric Dentist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(31, 'Pediatrician', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(32, 'Physiatrist (Physical Medicine)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(33, 'Physical Therapist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(34, 'Plastic Surgeon', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(35, 'Podiatrist (Foot and Ankle Specialist)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(36, 'Primary Care Doctor', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(37, 'Prosthodontics', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(38, 'Psychiatrist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(39, 'Psychologist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(40, 'Pulmonologist (Lung Doctor)', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(41, 'Radiologist', '2014-11-17 04:55:44', '2014-11-17 04:55:44'),
(42, 'Rheumatologist', '2014-11-17 04:55:45', '2014-11-17 04:55:45'),
(43, 'Sleep Medicine Specialist', '2014-11-17 04:55:45', '2014-11-17 04:55:45'),
(44, 'Sports Medicine Specialist', '2014-11-17 04:55:45', '2014-11-17 04:55:45'),
(45, 'Surgeon', '2014-11-17 04:55:45', '2014-11-17 04:55:45'),
(46, 'Therapist / Counselor', '2014-11-17 04:55:45', '2014-11-17 04:55:45'),
(47, 'Urgent Care Doctor', '2014-11-17 04:55:45', '2014-11-17 04:55:45'),
(48, 'Urological Surgeon', '2014-11-17 04:55:45', '2014-11-17 04:55:45'),
(49, 'Urologist', '2014-11-17 04:55:45', '2014-11-17 04:55:45'),
(50, 'Vascular Surgeon', '2014-11-17 04:55:45', '2014-11-17 04:55:45');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `disease_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disease_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
  `doctor_user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_age` int(11) NOT NULL,
  `doctor_sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_address` text COLLATE utf8_unicode_ci NOT NULL,
  `doctor_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_experience` int(11) NOT NULL,
  `doctor_degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_passed_uni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_fee` int(11) NOT NULL,
  `doctor_avg_rating` float(3,2) NOT NULL,
  `doctor_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  `drug_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
  `hospital_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_latitude` float(18,16) NOT NULL,
  `hospital_longitude` float(18,16) NOT NULL,
  `hospital_avg_rating` float(3,2) NOT NULL,
  `hospital_avg_cost` int(11) NOT NULL,
  `hospital_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('2014_10_20_081504_mydbMigration', 1);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE IF NOT EXISTS `symptoms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `symtom_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symtom_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symtom_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` text COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
