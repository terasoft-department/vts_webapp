-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 06:18 AM
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
  `customer_id` int(11) DEFAULT NULL,
  `plate_number` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `report_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignment_id`, `customer_id`, `plate_number`, `customer_phone`, `location`, `user_id`, `report_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'T123ATR', '0682131140', 'MBEZI MWISHO', 1, 2, NULL, NULL, NULL),
(2, 2, 'T444TAJ', '0785235609', 'UBUNGO', 1, NULL, 'accepted', NULL, '2024-09-18 04:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `check_lists`
--

CREATE TABLE `check_lists` (
  `check_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `customername` varchar(255) DEFAULT NULL,
  `plate_number` varchar(255) DEFAULT NULL,
  `rbt_status` varchar(255) DEFAULT NULL,
  `batt_status` varchar(255) DEFAULT NULL,
  `check_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `check_lists`
--

INSERT INTO `check_lists` (`check_id`, `user_id`, `vehicle_name`, `category`, `customername`, `plate_number`, `rbt_status`, `batt_status`, `check_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'ABUDI', 'YUTONG BUS', 'ABUDI', 'T123ATD', 'ver_good', 'moderate', '2024-09-18', '2024-09-18 02:03:51', '2024-09-18 02:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `tin_number` varchar(255) DEFAULT NULL,
  `start_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `address`, `customer_phone`, `tin_number`, `start_date`, `created_at`, `updated_at`) VALUES
(1, 'ABUDI', 'Mbezi mwisho, magufuli stand', '0786235769', '123456987', '2023-04-10', '2024-09-21 20:23:49', '2024-09-21 20:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `customer_debts`
--

CREATE TABLE `customer_debts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `imei_number` varchar(255) NOT NULL,
  `category` enum('master','slave','accessories') NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`device_id`, `imei_number`, `category`, `total`, `created_at`, `updated_at`) VALUES
(1, '124567', 'master', 12, '2024-09-21 20:25:31', '2024-09-21 20:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `device_requisitions`
--

CREATE TABLE `device_requisitions` (
  `requisition_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `descriptions` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `dateofProvision` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device_requisitions`
--

INSERT INTO `device_requisitions` (`requisition_id`, `user_id`, `category`, `quantity`, `descriptions`, `status`, `dateofProvision`, `created_at`, `updated_at`) VALUES
(1, 1, 'accessories,masters', 5, '2 accessories and 3 masters', NULL, NULL, '2024-09-18 01:49:10', '2024-09-18 01:49:10');

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
-- Table structure for table `incident_reports`
--

CREATE TABLE `incident_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `installations`
--

CREATE TABLE `installations` (
  `installation_id` bigint(20) UNSIGNED NOT NULL,
  `plate_number` varchar(255) DEFAULT NULL,
  `imei_number` varchar(255) DEFAULT NULL,
  `customername` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount_paid` decimal(10,2) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installations`
--

INSERT INTO `installations` (`installation_id`, `plate_number`, `imei_number`, `customername`, `user_id`, `amount_paid`, `status`, `created_at`, `updated_at`) VALUES
(1, 'T123ATD', '123457', 'ABUDI', 1, 3800000.00, 'paid', '2024-09-18 01:50:44', '2024-09-23 00:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_payments`
--

CREATE TABLE `invoice_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `prepared_by` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `tin_number` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `num_cars` int(11) NOT NULL,
  `periods` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `gross_value` decimal(15,2) NOT NULL,
  `vat_value` decimal(15,2) NOT NULL,
  `total_value` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_payments`
--

INSERT INTO `invoice_payments` (`id`, `customer_name`, `invoice_id`, `due_date`, `prepared_by`, `plate_number`, `tin_number`, `descriptions`, `num_cars`, `periods`, `unit_price`, `gross_value`, `vat_value`, `total_value`, `created_at`, `updated_at`) VALUES
(1, 'LATRA', 'TTEL/2023/312', '2023-05-23', 'Pascal', 'T-333-ABC', '123-456-789', 'INSTALLATION OF OBC FROM JAN 2023 TO NOW', 2, 12, 45000.00, 1080000.00, 194400.00, 1274400.00, '2024-09-22 23:32:24', '2024-09-22 23:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `jobcards`
--

CREATE TABLE `jobcards` (
  `jobcard_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `physical_location` varchar(255) NOT NULL,
  `device_id` int(11) DEFAULT NULL,
  `problem_reported` varchar(255) NOT NULL,
  `date_attended` date NOT NULL,
  `natureOf_ProblemAt_site` enum('sim card problem','wiring problem','loose connection','tampering by using ignition system','tampering by using switch','tampering by using ground','tampering by using earth wire','device location','device is worn out','Car electrical system','Swollen Battery','Eaten wires','others') NOT NULL,
  `service_type` enum('new installation','skipping','noTransmission','others') NOT NULL,
  `work_done` text NOT NULL,
  `vehicle_regno` varchar(255) NOT NULL,
  `client_comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobcards`
--

INSERT INTO `jobcards` (`jobcard_id`, `user_id`, `customername`, `contact_person`, `title`, `mobile_number`, `physical_location`, `device_id`, `problem_reported`, `date_attended`, `natureOf_ProblemAt_site`, `service_type`, `work_done`, `vehicle_regno`, `client_comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'ABUDI', 'Juma said hassan', 'Installation Job', '0682133140', 'Mbezi mwisho', 123456, 'case reported', '2024-09-18', 'Car electrical system', 'new installation', 'work done', 'T123ATD', 'Client comment, good installation too', '2024-09-18 04:54:07', '2024-09-18 04:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `jobcard_attachments`
--

CREATE TABLE `jobcard_attachments` (
  `attach_id` bigint(20) UNSIGNED NOT NULL,
  `preattachment_picture` varchar(255) DEFAULT NULL,
  `postattachment_picture` varchar(255) DEFAULT NULL,
  `car_plateEvidence_picture` varchar(255) DEFAULT NULL,
  `tempering_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobcard_attachments`
--

INSERT INTO `jobcard_attachments` (`attach_id`, `preattachment_picture`, `postattachment_picture`, `car_plateEvidence_picture`, `tempering_picture`, `created_at`, `updated_at`) VALUES
(1, 'pre_workdone_picture_66eab17ea36f9.png', 'post_workdone_picture_66eab17ea5789.png', 'carPlateNumber_picture_66eab17ea6257.png', 'tampering_evidence_picture_66eab17ea6b02.png', '2024-09-18 04:54:54', '2024-09-18 04:54:54');

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
(5, '2024_09_21_112639_create_vehicles_table', 1),
(6, '2024_09_21_112808_create_return_devices_table', 1),
(7, '2024_09_21_112823_create_payments_table', 1),
(8, '2024_09_21_113017_create_invoice_payments_table', 1),
(9, '2024_09_21_113524_create_installations_table', 1),
(10, '2024_09_21_113702_create_device_requisitions_table', 1),
(11, '2024_09_21_113713_create_devices_table', 1),
(12, '2024_09_21_113733_create_customer_debts_table', 1),
(13, '2024_09_21_113744_create_customers_table', 1),
(14, '2024_09_21_113758_create_incident_reports_table', 1),
(15, '2024_09_21_113809_create_tampering_reports_table', 1),
(16, '2024_09_21_113833_create_check_lists_table', 1),
(17, '2024_09_21_113852_create_report_tables_table', 1),
(18, '2024_09_21_133802_create_assignments_table', 1),
(19, '2024_09_21_212943_create_payment_reports_table', 1),
(20, '2024_09_21_220818_create_jobcard_attachments_table', 1),
(21, '2024_09_21_220829_create_jobcards_table', 1),
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(45, '2019_08_19_000000_create_failed_jobs_table', 1),
(46, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(47, '2024_09_21_112639_create_vehicles_table', 1),
(48, '2024_09_21_112808_create_return_devices_table', 1),
(49, '2024_09_21_112823_create_payments_table', 1),
(50, '2024_09_21_113017_create_invoice_payments_table', 1),
(51, '2024_09_21_113524_create_installations_table', 1),
(52, '2024_09_21_113702_create_device_requisitions_table', 1),
(53, '2024_09_21_113713_create_devices_table', 1),
(54, '2024_09_21_113733_create_customer_debts_table', 1),
(55, '2024_09_21_113744_create_customers_table', 1),
(56, '2024_09_21_113758_create_incident_reports_table', 1),
(57, '2024_09_21_113809_create_tampering_reports_table', 1),
(58, '2024_09_21_113833_create_check_lists_table', 1),
(59, '2024_09_21_113852_create_report_tables_table', 1),
(60, '2024_09_21_133802_create_assignments_table', 1),
(61, '2024_09_21_212943_create_payment_reports_table', 1),
(62, '2024_09_21_220818_create_jobcard_attachments_table', 1),
(63, '2024_09_21_220829_create_jobcards_table', 1);

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

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `customer_id`, `device_id`, `payment_type`, `initial_payment`, `monthly_payment`, `next_due_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'lease', 45000.00, 45000.00, '0000-00-00', 'pending', '2024-09-21 01:56:48', '2024-09-21 01:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `payment_reports`
--

CREATE TABLE `payment_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `report_tables`
--

CREATE TABLE `report_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 1, 'ABC', 'Master', '123456', 'TJ123ATZ', 'Failure to count in a normal range', 'approved', '2024-09-18 05:11:49', '2024-09-22 17:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `tampering_reports`
--

CREATE TABLE `tampering_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@teratech.co.tz', NULL, 'admin', '$2y$12$61OrecmuR0Qm6hoD/BuA5uQj97z9T0F2a.uKIIjWAp/g.beDw34qG', NULL, '2024-08-18 20:54:33', '2024-09-12 11:42:49'),
(2, 'Project manager', 'projectmanager@teratech.co.tz', NULL, 'project_manager', '$2y$12$.zH6cIWvbkWhp3JmvgEa5e2poOO9p1HQ4CsV1yNXpyIiQSRAiZoym', NULL, '2024-08-18 20:55:46', '2024-09-12 11:38:10'),
(3, 'Monitoring officer', 'monitoringofficer@teratech.co.tz', NULL, 'monitoring_officer', '$2y$12$7Nsa10wI1c5KCPSN4fq7kOKTHTcKkyg/tER6lo6atx3oRImL5beYm', NULL, '2024-08-18 20:57:25', '2024-09-12 11:38:23'),
(5, 'Accounting officer', 'accountingofficer@teratech.co.tz', NULL, 'accounting_officer', '$2y$12$R0iCbFt0/OoDWU937BC7l.T5Mzzn0FCOq6g9tHBqcELDIYVGZV93W', NULL, '2024-08-18 20:58:43', '2024-09-12 11:39:46'),
(6, 'Technician', 'domtechnician@teratech.co.tz', NULL, 'technician', '$2y$12$Qo6.7UUteeGRUSawli/o2.ueLZB3xdOwuakHUmGYRJwmLOIR2zhgC', NULL, '2024-08-18 20:59:09', '2024-09-13 13:36:11'),
(7, 'Technician v1', 'dartechnician@teratech.co.tz', NULL, 'technician', '$2y$12$2.oonIJM/XhW2yZSCFqxNOVMuiYlHMKmaywYsNsimjhhumNHER2ee', NULL, '2024-08-21 02:51:33', '2024-09-13 13:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicles_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicles_id`, `vehicle_name`, `customer_id`, `category`, `plate_number`, `created_at`, `updated_at`) VALUES
(1, 'ABUDI', '1', 'YUTONG BUS', 'T123ATD', '2024-09-02 16:57:15', '2024-09-21 15:45:26'),
(2, 'SHABIBY', '2', 'YATONG', 'T-333-ABC', '2024-09-22 13:14:10', '2024-09-22 13:14:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `check_lists`
--
ALTER TABLE `check_lists`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_debts`
--
ALTER TABLE `customer_debts`
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
-- Indexes for table `incident_reports`
--
ALTER TABLE `incident_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installations`
--
ALTER TABLE `installations`
  ADD PRIMARY KEY (`installation_id`);

--
-- Indexes for table `invoice_payments`
--
ALTER TABLE `invoice_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcards`
--
ALTER TABLE `jobcards`
  ADD PRIMARY KEY (`jobcard_id`);

--
-- Indexes for table `jobcard_attachments`
--
ALTER TABLE `jobcard_attachments`
  ADD PRIMARY KEY (`attach_id`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_reports`
--
ALTER TABLE `payment_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `report_tables`
--
ALTER TABLE `report_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_devices`
--
ALTER TABLE `return_devices`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `tampering_reports`
--
ALTER TABLE `tampering_reports`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `assignment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `check_lists`
--
ALTER TABLE `check_lists`
  MODIFY `check_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_debts`
--
ALTER TABLE `customer_debts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `device_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `device_requisitions`
--
ALTER TABLE `device_requisitions`
  MODIFY `requisition_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incident_reports`
--
ALTER TABLE `incident_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installations`
--
ALTER TABLE `installations`
  MODIFY `installation_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_payments`
--
ALTER TABLE `invoice_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobcards`
--
ALTER TABLE `jobcards`
  MODIFY `jobcard_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobcard_attachments`
--
ALTER TABLE `jobcard_attachments`
  MODIFY `attach_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_reports`
--
ALTER TABLE `payment_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_tables`
--
ALTER TABLE `report_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_devices`
--
ALTER TABLE `return_devices`
  MODIFY `return_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tampering_reports`
--
ALTER TABLE `tampering_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicles_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
