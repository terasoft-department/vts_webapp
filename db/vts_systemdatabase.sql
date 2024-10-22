-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 12:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vts_systemdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignment_id` bigint(20) UNSIGNED NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_debt` decimal(10,2) NOT NULL,
  `location` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `case_reported` text NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignment_id`, `plate_number`, `customer_id`, `customer_phone`, `customer_debt`, `location`, `user_id`, `case_reported`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 'T-333-ABC', 2, '0653404163', 545345.00, 'dar', '6', 'rgrgherrefr', '1728223893-TAX INVOICE-TO RAHABU LOGISTICS-2023 UP DEC.pdf', '2024-10-06 11:11:33', '2024-10-06 12:39:28'),
(2, 'T123ATD', 1, '0654303030', 500000.00, 'dodoma', '6', 'gsrgrw', NULL, '2024-10-06 12:40:28', '2024-10-06 12:40:28'),
(9, 'T-454-350', 3, '0654303030', 0.00, 'dodoma', '7', 'PELEKA DEVICE HARAKA NDANI YA SIKU MBILI KAZI IISHE', '1728233448-TAX INVOICE-TO RAHABU LOGISTICS-2023 UP DEC.pdf', '2024-10-06 13:50:48', '2024-10-06 13:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `check_lists`
--

CREATE TABLE `check_lists` (
  `check_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `plate_number` varchar(255) DEFAULT NULL,
  `rbt_status` varchar(255) DEFAULT NULL,
  `batt_status` varchar(255) DEFAULT NULL,
  `check_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `check_lists`
--

INSERT INTO `check_lists` (`check_id`, `user_id`, `vehicle_id`, `customer_id`, `plate_number`, `rbt_status`, `batt_status`, `check_date`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 'T123ATD', 'OK', 'Good', '2024-09-27', '2024-09-27 00:09:50', '2024-09-27 00:09:50'),
(3, 1, 1, 1, 'T123ATD', 'OK', 'Good', '2024-09-27', '2024-09-27 00:11:00', '2024-09-27 00:11:00'),
(4, 1, 1, 1, 'T123ATD', 'OK', 'Good', '2024-09-27', '2024-09-27 00:16:06', '2024-09-27 00:16:06'),
(5, 1, 1, 1, 'T123ATD', 'OK', 'Good', '2024-09-27', '2024-09-27 00:17:25', '2024-09-27 00:17:25'),
(6, 1, 1, 1, 'T123ATD', 'OK', 'Good', '2024-09-27', '2024-09-27 01:58:12', '2024-09-27 01:58:12'),
(7, 1, 1, 1, 'T123ATD', 'OK', 'Good', '2024-09-27', '2024-09-27 02:08:53', '2024-09-27 02:08:53'),
(8, 1, 1, 1, 'T123ATD', 'ver_good', 'good', '2024-09-27', '2024-09-27 04:48:57', '2024-09-27 04:48:57'),
(9, 1, 1, 1, 'T123ATD', 'good', 'moderate', '2024-09-27', '2024-09-27 06:05:33', '2024-09-27 06:05:33'),
(10, 1, 1, 1, 'T123ATD', 'good', 'moderate', '2024-09-28', '2024-09-28 06:05:41', '2024-09-28 05:59:59'),
(11, 1, 1, 1, 'T123ATD', 'good', 'good', '2024-09-28', '2024-09-28 03:25:23', '2024-09-28 03:25:23'),
(12, 1, 1, 1, 'T123ATD', 'good', 'good', '2024-09-28', '2024-09-28 04:11:40', '2024-09-28 04:11:40'),
(13, 1, 1, 1, 'T123ATD', 'good', 'good', '2024-09-28', '2024-09-28 04:11:42', '2024-09-28 04:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customername` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `tin_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customername`, `address`, `customer_phone`, `tin_number`, `email`, `start_date`, `created_at`, `updated_at`) VALUES
(1, 'ABUDI', 'Mbezi mwisho, magufuli stand', '0786235769', '123456987', 'abud@gmail.com', '2023-04-10', NULL, NULL),
(2, 'TASHRIF', 'tanga mjini', '0628456318', '456736284', 'tashrimvehicle@gmail.com', '2024-06-11', NULL, NULL),
(3, 'KIMBINYIKO', 'dar es salaam', '0655101010', '987-654-111', 'kimbinyiko@gmail.com', '2024-09-27', '2024-10-06 13:13:45', '2024-10-06 13:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `daily_weekly_reports`
--

CREATE TABLE `daily_weekly_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reported_date` date NOT NULL,
  `customername` varchar(255) NOT NULL,
  `bus_plate_number` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `reported_by` varchar(255) NOT NULL,
  `reported_case` varchar(255) NOT NULL,
  `assigned_technician` varchar(255) NOT NULL,
  `findings` text NOT NULL,
  `response_status` varchar(255) NOT NULL,
  `response_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_weekly_reports`
--

INSERT INTO `daily_weekly_reports` (`id`, `reported_date`, `customername`, `bus_plate_number`, `contact`, `reported_by`, `reported_case`, `assigned_technician`, `findings`, `response_status`, `response_date`, `created_at`, `updated_at`) VALUES
(1, '2024-09-05', 'TASHRIF', '456736284', '0628456318', 'Anna', 'car battery damage', 'twaha', 'battery need for change', 'needed changing device', '2024-10-17', '2024-10-17 07:48:42', '2024-10-17 07:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `imei_number` varchar(255) NOT NULL,
  `category` enum('master','I_button','buzzer','panick_button') NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`device_id`, `imei_number`, `category`, `total`, `created_at`, `updated_at`) VALUES
(1, 'T440EEE', 'master', 80, '2024-09-21 14:25:31', '2024-10-01 01:59:51'),
(2, 'T540DRM', 'master', 10, '2024-10-01 01:59:18', '2024-10-01 01:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `device_requisitions`
--

CREATE TABLE `device_requisitions` (
  `requisition_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `descriptions` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `dateofProvision` date DEFAULT NULL,
  `master` int(11) NOT NULL DEFAULT 0,
  `I_button` int(11) NOT NULL DEFAULT 0,
  `buzzer` int(11) NOT NULL DEFAULT 0,
  `panick_button` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_requisitions`
--

INSERT INTO `device_requisitions` (`requisition_id`, `user_id`, `descriptions`, `status`, `dateofProvision`, `master`, `I_button`, `buzzer`, `panick_button`, `created_at`, `updated_at`) VALUES
(1, 1, '2 accessories and 3 masters', 'approved', NULL, 0, 5, 0, 0, '2024-09-18 01:49:10', '2024-09-30 20:08:24'),
(2, 1, 'test description', NULL, NULL, 3, 4, 5, 6, '2024-09-26 06:17:36', '2024-09-26 06:17:36'),
(3, 1, 'hello description', NULL, NULL, 34, 0, 33, 0, '2024-09-26 06:17:56', '2024-09-26 06:17:56'),
(4, 1, 'description test', NULL, NULL, 0, 0, 44, 44, '2024-09-26 06:18:11', '2024-09-26 06:18:11'),
(5, 1, 'two, high btn,b and master,all needed', NULL, NULL, 333, 44, 33, 54, '2024-09-26 06:24:25', '2024-09-26 06:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `grand_total` int(11) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `status` enum('Paid','Not Paid') NOT NULL DEFAULT 'Not Paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_number`, `invoice_date`, `grand_total`, `customername`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TTEL/2024/001', '2024-10-16', 6470000, 'TASHRIF', 'Not Paid', '2024-10-15 20:04:32', '2024-10-15 20:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_payments`
--

CREATE TABLE `invoice_payments` (
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `due_date` date NOT NULL,
  `prepared_by` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `tin_number` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `num_cars` int(11) NOT NULL,
  `periods` int(11) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `debt` decimal(10,2) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `gross_value` decimal(10,2) NOT NULL,
  `vat_value` decimal(10,2) NOT NULL,
  `vat_Inclusive` decimal(10,2) NOT NULL,
  `total_value` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_payments`
--

INSERT INTO `invoice_payments` (`invoice_id`, `invoice_number`, `status`, `customer_id`, `due_date`, `prepared_by`, `plate_number`, `tin_number`, `descriptions`, `num_cars`, `periods`, `from`, `to`, `payment_type`, `debt`, `unit_price`, `gross_value`, `vat_value`, `vat_Inclusive`, `total_value`, `created_at`, `updated_at`) VALUES
(3, 'TTEL/2024/001', 'unpaid', 2, '2024-09-29', 'Pascal', 'T-333-HIF', '987-654-321', 'fgrger', 4, 12, '2024-10-16', '2024-10-01', 'Purchase', 4310000.00, 38135.60, 1830508.80, 329491.58, 2160000.38, 6470000.38, '2024-10-15 20:01:59', '2024-10-15 20:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobcards`
--

CREATE TABLE `jobcards` (
  `jobcard_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assignment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `physical_location` varchar(255) DEFAULT NULL,
  `problem_reported` text DEFAULT NULL,
  `natureOf_ProblemAt_site` text DEFAULT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `date_attended` date DEFAULT NULL,
  `plate_number` varchar(255) DEFAULT NULL,
  `imei_number` varchar(255) DEFAULT NULL,
  `work_done` text DEFAULT NULL,
  `client_comment` text DEFAULT NULL,
  `pre_workdone_picture` varchar(255) DEFAULT NULL,
  `post_workdone_picture` varchar(255) DEFAULT NULL,
  `carPlateNumber_picture` varchar(255) DEFAULT NULL,
  `tampering_evidence_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobcards`
--

INSERT INTO `jobcards` (`jobcard_id`, `customer_id`, `user_id`, `assignment_id`, `contact_person`, `title`, `mobile_number`, `physical_location`, `problem_reported`, `natureOf_ProblemAt_site`, `service_type`, `date_attended`, `plate_number`, `imei_number`, `work_done`, `client_comment`, `pre_workdone_picture`, `post_workdone_picture`, `carPlateNumber_picture`, `tampering_evidence_picture`, `created_at`, `updated_at`) VALUES
(14, 1, 1, 3, 'Juma saidi chitanda', 'Installation Job', '0682131140', 'Bunju', 'Device inajizima na kujiwasha', 'device is worn out', 'skipping', '2024-09-30', 'T123ATD', '1234', 'Nimebadilisha device VTD 43727722383', 'Fundi kabadilisha etc', 'https://res.cloudinary.com/depvc7n0v/image/upload/v1727682640/job_cards/ebrssbwlf9uxzq4rsmvm.jpg', 'https://res.cloudinary.com/depvc7n0v/image/upload/v1727682646/job_cards/sh47oi9ensyarbdzmf5t.jpg', 'https://res.cloudinary.com/depvc7n0v/image/upload/v1727682651/job_cards/jbdvhdnf6dg3hoal7lmq.jpg', NULL, '2024-09-29 22:50:52', '2024-09-29 22:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `lease_payment_debts`
--

CREATE TABLE `lease_payment_debts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customername` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `up_todate` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `debt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_21_112808_create_return_devices_table', 1),
(6, '2024_09_21_113702_create_device_requisitions_table', 1),
(7, '2024_09_21_113713_create_devices_table', 1),
(8, '2024_09_21_113833_create_check_lists_table', 1),
(9, '2024_09_21_220829_create_jobcards_table', 1),
(10, '2024_09_23_164246_create_cache_table', 1),
(11, '2024_09_24_044235_create_daily_weekly_reports_table', 1),
(12, '2024_09_27_104649_create_assignments_table', 1),
(13, '2024_09_29_154042_create_lease_payment_debts_table', 1),
(14, '2024_09_30_081253_create_customers_table', 1),
(15, '2024_10_03_152913_create_vehicles_table', 1),
(16, '2024_10_05_173531_create_invoice_payments_table', 1),
(17, '2024_10_11_214554_create_invoices_table', 1),
(18, '2024_10_14_034456_create_tdebts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `payment_type` enum('lease','purchase') NOT NULL,
  `initial_payment` decimal(10,2) NOT NULL DEFAULT 0.00,
  `monthly_payment` decimal(10,2) NOT NULL DEFAULT 0.00,
  `next_due_date` date NOT NULL,
  `status` enum('pending','paid','overdue') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `return_devices`
--

CREATE TABLE `return_devices` (
  `return_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customername` varchar(255) NOT NULL,
  `device_category` varchar(255) NOT NULL,
  `devicenumber` varchar(255) NOT NULL,
  `vehiclenumber` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `status` enum('approved','not approved') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `return_devices`
--

INSERT INTO `return_devices` (`return_id`, `user_id`, `customername`, `device_category`, `devicenumber`, `vehiclenumber`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ABC', 'Master', '123456', 'TJ123ATZ', 'Failure to count in a normal range', 'approved', '2024-09-17 23:11:49', '2024-09-22 11:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `tdebts`
--

CREATE TABLE `tdebts` (
  `tdebt_id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `grand_total` int(11) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `status` enum('Paid','Not Paid') NOT NULL DEFAULT 'Not Paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `role`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@teratech.co.tz', NULL, 'admin', '$2y$12$61OrecmuR0Qm6hoD/BuA5uQj97z9T0F2a.uKIIjWAp/g.beDw34qG', 1, NULL, '2024-08-18 14:54:33', '2024-10-22 08:06:16'),
(2, 'Project manager', 'projectmanager@teratech.co.tz', NULL, 'project_manager', '$2y$12$.zH6cIWvbkWhp3JmvgEa5e2poOO9p1HQ4CsV1yNXpyIiQSRAiZoym', 1, NULL, '2024-08-18 14:55:46', '2024-10-22 08:12:29'),
(3, 'Monitoring officer', 'monitoringofficer@teratech.co.tz', NULL, 'monitoring_officer', '$2y$12$7Nsa10wI1c5KCPSN4fq7kOKTHTcKkyg/tER6lo6atx3oRImL5beYm', 1, NULL, '2024-08-18 14:57:25', '2024-10-22 08:06:19'),
(5, 'Accounting officer', 'accountingofficer@teratech.co.tz', NULL, 'accounting_officer', '$2y$12$R0iCbFt0/OoDWU937BC7l.T5Mzzn0FCOq6g9tHBqcELDIYVGZV93W', 1, NULL, '2024-08-18 14:58:43', '2024-10-22 08:06:20'),
(6, 'Technician', 'domtechnician@teratech.co.tz', NULL, 'technician', '$2y$12$Qo6.7UUteeGRUSawli/o2.ueLZB3xdOwuakHUmGYRJwmLOIR2zhgC', 1, NULL, '2024-08-18 14:59:09', '2024-10-22 08:16:43'),
(7, 'Technician v1', 'dartechnician@teratech.co.tz', NULL, 'technician', '$2y$12$2.oonIJM/XhW2yZSCFqxNOVMuiYlHMKmaywYsNsimjhhumNHER2ee', 1, NULL, '2024-08-20 20:51:33', '2024-10-22 08:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicles_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `plate_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicles_id`, `vehicle_name`, `category`, `customer_id`, `plate_number`, `created_at`, `updated_at`) VALUES
(1, 'ABUDI', 'YUTONG BUS', 1, 'T-123-ATD', '2024-09-02 10:57:15', '2024-10-17 05:04:15'),
(2, 'SHABIBY', 'YATONG', 2, 'T-333-ABC', '2024-09-22 07:14:10', '2024-09-22 07:14:10'),
(3, 'KIMBINYIKO express', 'YATONG', 3, 'T-454-350', '2024-10-06 13:49:05', '2024-10-06 13:49:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignment_id`),
  ADD UNIQUE KEY `assignments_customer_id_unique` (`customer_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `check_lists`
--
ALTER TABLE `check_lists`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `daily_weekly_reports`
--
ALTER TABLE `daily_weekly_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexes for table `device_requisitions`
--
ALTER TABLE `device_requisitions`
  ADD PRIMARY KEY (`requisition_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_payments`
--
ALTER TABLE `invoice_payments`
  ADD PRIMARY KEY (`invoice_id`),
  ADD UNIQUE KEY `invoice_payments_invoice_id_unique` (`invoice_id`),
  ADD KEY `invoice_payments_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `jobcards`
--
ALTER TABLE `jobcards`
  ADD PRIMARY KEY (`jobcard_id`);

--
-- Indexes for table `lease_payment_debts`
--
ALTER TABLE `lease_payment_debts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `return_devices`
--
ALTER TABLE `return_devices`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `tdebts`
--
ALTER TABLE `tdebts`
  ADD PRIMARY KEY (`tdebt_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `check_lists`
--
ALTER TABLE `check_lists`
  MODIFY `check_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daily_weekly_reports`
--
ALTER TABLE `daily_weekly_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `device_requisitions`
--
ALTER TABLE `device_requisitions`
  MODIFY `requisition_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_payments`
--
ALTER TABLE `invoice_payments`
  MODIFY `invoice_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobcards`
--
ALTER TABLE `jobcards`
  MODIFY `jobcard_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lease_payment_debts`
--
ALTER TABLE `lease_payment_debts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_devices`
--
ALTER TABLE `return_devices`
  MODIFY `return_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tdebts`
--
ALTER TABLE `tdebts`
  MODIFY `tdebt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicles_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice_payments`
--
ALTER TABLE `invoice_payments`
  ADD CONSTRAINT `invoice_payments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
