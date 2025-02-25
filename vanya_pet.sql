-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2025 at 04:21 AM
-- Server version: 8.0.41-0ubuntu0.20.04.1
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanya_pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(2, NULL, 1, 'Category 2', 'category-2', '2025-02-24 03:52:37', '2025-02-24 03:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int UNSIGNED NOT NULL,
  `data_type_id` int UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'banner_title', 'text', 'Banner Title', 0, 1, 1, 1, 1, 1, '{}', 3),
(58, 7, 'banner_description', 'text', 'Banner Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(59, 7, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 5),
(60, 7, 'short_description', 'text', 'Short Description', 0, 1, 1, 1, 1, 1, '{}', 6),
(61, 7, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 7),
(62, 7, 'home_page_desc', 'text', 'Home Page Desc', 0, 1, 1, 1, 1, 1, '{}', 8),
(63, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(64, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(65, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 11),
(66, 7, 'home_page_image', 'image', 'Home Page Image', 0, 1, 1, 1, 1, 1, '{}', 12),
(67, 7, 'service_name', 'text', 'Service Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(68, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(69, 8, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(70, 8, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(71, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(72, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(73, 8, 'image', 'text', 'Image', 0, 1, 1, 1, 1, 1, '{}', 6),
(74, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(75, 9, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(76, 9, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(77, 9, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 4),
(78, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(79, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(80, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(81, 10, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(82, 10, 'review', 'text', 'Review', 0, 1, 1, 1, 1, 1, '{}', 3),
(83, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(84, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(85, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(86, 11, 'question', 'text', 'Question', 0, 1, 1, 1, 1, 1, '{}', 2),
(87, 11, 'answer', 'text', 'Answer', 0, 1, 1, 1, 1, 1, '{}', 3),
(88, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(89, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(90, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(91, 12, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(92, 12, 'short_description', 'text', 'Short Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(93, 12, 'coverage_include', 'select_multiple', 'Coverage Include', 0, 1, 1, 1, 1, 1, '{\"default\":\"life_insurance\",\"options\":{\"Life Insurance\":\"Life Insurance\",\"Life Insurance2\":\"Life Insurance\",\"Life Insurance3\":\"Life Insurance\"}}', 4),
(94, 12, 'key_feature', 'select_multiple', 'Key Feature', 0, 1, 1, 1, 1, 1, '{\"default\":\"life_insurance\",\"options\":{\"Life Insurance\":\"Life Insurance\",\"Life Insurance2\":\"Life Insurance\",\"Life Insurance3\":\"Life Insurance\"}}', 5),
(95, 12, 'price', 'text', 'Price', 0, 1, 1, 1, 1, 1, '{}', 6),
(96, 12, 'long_description', 'rich_text_box', 'Long Description', 0, 1, 1, 1, 1, 1, '{}', 7),
(97, 12, 'include_1_title', 'text', 'Include 1 Title', 0, 1, 1, 1, 1, 1, '{}', 8),
(98, 12, 'include_1_desc', 'text', 'Include 1 Desc', 0, 1, 1, 1, 1, 1, '{}', 9),
(99, 12, 'include_1_image', 'image', 'Include 1 Image', 0, 1, 1, 1, 1, 1, '{}', 10),
(100, 12, 'include_2_title', 'text', 'Include 2 Title', 0, 1, 1, 1, 1, 1, '{}', 11),
(101, 12, 'include_2_desc', 'text', 'Include 2 Desc', 0, 1, 1, 1, 1, 1, '{}', 12),
(102, 12, 'include_2_image', 'image', 'Include 2 Image', 0, 1, 1, 1, 1, 1, '{}', 13),
(103, 12, 'include_3_title', 'text', 'Include 3 Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(104, 12, 'include_3_desc', 'text', 'Include 3 Desc', 0, 1, 1, 1, 1, 1, '{}', 15),
(105, 12, 'include_3_image', 'image', 'Include 3 Image', 0, 1, 1, 1, 1, 1, '{}', 16),
(106, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 17),
(107, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 18);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(7, 'services', 'services', 'Service', 'Services', NULL, 'App\\Models\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2025-02-24 04:30:43', '2025-02-24 04:31:42'),
(8, 'insurance_covers', 'insurance-covers', 'Insurance Cover', 'Insurance Covers', NULL, 'App\\Models\\InsuranceCover', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2025-02-24 04:38:22', '2025-02-24 04:56:02'),
(9, 'features', 'features', 'Feature', 'Features', NULL, 'App\\Models\\Feature', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2025-02-24 05:33:34', '2025-02-24 05:33:34'),
(10, 'reviews', 'reviews', 'Review', 'Reviews', NULL, 'App\\Models\\Review', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2025-02-24 05:41:16', '2025-02-24 05:41:16'),
(11, 'faqs', 'faqs', 'Faq', 'Faqs', NULL, 'App\\Models\\Faq', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2025-02-24 05:46:47', '2025-02-24 05:46:47'),
(12, 'plans', 'plans', 'Plan', 'Plans', NULL, 'App\\Models\\Plan', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2025-02-24 07:22:58', '2025-02-24 07:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'What types of pet insuranceare available?', 'Pet insurance comes in various types, including accident-only, accident and illness, and wellness plans. Each offers different coverage levels for vet bills, treatments, and routine care.', '2025-02-24 05:47:09', '2025-02-24 05:47:09'),
(2, 'How does the claim process work?', 'Pet insurance comes in various types, including accident-only, accident and illness, and wellness plans. Each offers different coverage levels for vet bills, treatments, and routine care.', '2025-02-24 05:47:27', '2025-02-24 05:47:27'),
(3, 'What are the beneifts?', 'Pet insurance comes in various types, including accident-only, accident and illness, and wellness plans. Each offers different coverage levels for vet bills, treatments, and routine care.', '2025-02-24 05:47:47', '2025-02-24 05:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Major MedicalSM with Wellness', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.', 'features/February2025/wfe6OhsuVqph6ukW1eBu.png', '2025-02-24 05:34:43', '2025-02-24 05:34:43'),
(2, 'Major MedicalSM with Wellness', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.', 'features/February2025/SzmHVtXsTpRpgtL72ZDz.png', '2025-02-24 05:35:06', '2025-02-24 05:35:06'),
(3, 'Major MedicalSM with Wellness', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.', 'features/February2025/VfShQ3I1yTpgIauL95C9.png', '2025-02-24 05:35:22', '2025-02-24 05:35:22'),
(4, 'Major MedicalSM with Wellness', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.', 'features/February2025/xZjvjaWaMxV6AAoefjSo.png', '2025-02-24 05:35:39', '2025-02-24 05:35:39'),
(5, 'Major MedicalSM with Wellness', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.', 'features/February2025/g1NkcDb9grLyiG5sYGBB.png', '2025-02-24 05:36:00', '2025-02-24 05:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_covers`
--

CREATE TABLE `insurance_covers` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurance_covers`
--

INSERT INTO `insurance_covers` (`id`, `title`, `description`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Accident', '<p class=\"group-hover:text-white text-sm text-[#808380]\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>', '2025-02-24 04:39:00', '2025-02-24 22:41:30', NULL),
(2, 'Illness', '<p class=\"group-hover:text-white text-sm text-[#808380]\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>', '2025-02-24 04:40:00', '2025-02-24 22:41:43', NULL),
(3, 'Wellness', '<p class=\"group-hover:text-white text-sm text-[#808380]\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>', '2025-02-24 04:40:00', '2025-02-24 22:41:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2025-02-24 03:52:36', '2025-02-24 03:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int UNSIGNED NOT NULL,
  `menu_id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2025-02-24 03:52:36', '2025-02-24 03:52:36', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2025-02-24 03:52:36', '2025-02-24 03:52:36', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2025-02-24 03:52:37', '2025-02-24 03:52:37', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2025-02-24 03:52:37', '2025-02-24 03:52:37', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2025-02-24 03:52:37', '2025-02-24 03:52:37', 'voyager.pages.index', NULL),
(14, 1, 'Services', '', '_self', NULL, NULL, NULL, 15, '2025-02-24 04:30:43', '2025-02-24 04:30:43', 'voyager.services.index', NULL),
(15, 1, 'Insurance Covers', '', '_self', NULL, NULL, NULL, 16, '2025-02-24 04:38:22', '2025-02-24 04:38:22', 'voyager.insurance-covers.index', NULL),
(16, 1, 'Features', '', '_self', NULL, NULL, NULL, 17, '2025-02-24 05:33:34', '2025-02-24 05:33:34', 'voyager.features.index', NULL),
(17, 1, 'Reviews', '', '_self', NULL, NULL, NULL, 18, '2025-02-24 05:41:16', '2025-02-24 05:41:16', 'voyager.reviews.index', NULL),
(18, 1, 'Faqs', '', '_self', NULL, NULL, NULL, 19, '2025-02-24 05:46:47', '2025-02-24 05:46:47', 'voyager.faqs.index', NULL),
(19, 1, 'Plans', '', '_self', NULL, NULL, NULL, 20, '2025-02-24 07:22:58', '2025-02-24 07:22:58', 'voyager.plans.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2016_01_01_000000_create_pages_table', 2),
(26, '2016_01_01_000000_create_posts_table', 2),
(27, '2016_02_15_204651_create_categories_table', 2),
(28, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2025-02-24 03:52:37', '2025-02-24 03:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(2, 'browse_bread', NULL, '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(3, 'browse_database', NULL, '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(4, 'browse_media', NULL, '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(5, 'browse_compass', NULL, '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(6, 'browse_menus', 'menus', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(7, 'read_menus', 'menus', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(8, 'edit_menus', 'menus', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(9, 'add_menus', 'menus', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(10, 'delete_menus', 'menus', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(11, 'browse_roles', 'roles', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(12, 'read_roles', 'roles', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(13, 'edit_roles', 'roles', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(14, 'add_roles', 'roles', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(15, 'delete_roles', 'roles', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(16, 'browse_users', 'users', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(17, 'read_users', 'users', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(18, 'edit_users', 'users', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(19, 'add_users', 'users', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(20, 'delete_users', 'users', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(21, 'browse_settings', 'settings', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(22, 'read_settings', 'settings', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(23, 'edit_settings', 'settings', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(24, 'add_settings', 'settings', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(25, 'delete_settings', 'settings', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(26, 'browse_categories', 'categories', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(27, 'read_categories', 'categories', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(28, 'edit_categories', 'categories', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(29, 'add_categories', 'categories', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(30, 'delete_categories', 'categories', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(31, 'browse_posts', 'posts', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(32, 'read_posts', 'posts', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(33, 'edit_posts', 'posts', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(34, 'add_posts', 'posts', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(35, 'delete_posts', 'posts', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(36, 'browse_pages', 'pages', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(37, 'read_pages', 'pages', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(38, 'edit_pages', 'pages', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(39, 'add_pages', 'pages', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(40, 'delete_pages', 'pages', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(41, 'browse_services', 'services', '2025-02-24 04:30:43', '2025-02-24 04:30:43'),
(42, 'read_services', 'services', '2025-02-24 04:30:43', '2025-02-24 04:30:43'),
(43, 'edit_services', 'services', '2025-02-24 04:30:43', '2025-02-24 04:30:43'),
(44, 'add_services', 'services', '2025-02-24 04:30:43', '2025-02-24 04:30:43'),
(45, 'delete_services', 'services', '2025-02-24 04:30:43', '2025-02-24 04:30:43'),
(46, 'browse_insurance_covers', 'insurance_covers', '2025-02-24 04:38:22', '2025-02-24 04:38:22'),
(47, 'read_insurance_covers', 'insurance_covers', '2025-02-24 04:38:22', '2025-02-24 04:38:22'),
(48, 'edit_insurance_covers', 'insurance_covers', '2025-02-24 04:38:22', '2025-02-24 04:38:22'),
(49, 'add_insurance_covers', 'insurance_covers', '2025-02-24 04:38:22', '2025-02-24 04:38:22'),
(50, 'delete_insurance_covers', 'insurance_covers', '2025-02-24 04:38:22', '2025-02-24 04:38:22'),
(51, 'browse_features', 'features', '2025-02-24 05:33:34', '2025-02-24 05:33:34'),
(52, 'read_features', 'features', '2025-02-24 05:33:34', '2025-02-24 05:33:34'),
(53, 'edit_features', 'features', '2025-02-24 05:33:34', '2025-02-24 05:33:34'),
(54, 'add_features', 'features', '2025-02-24 05:33:34', '2025-02-24 05:33:34'),
(55, 'delete_features', 'features', '2025-02-24 05:33:34', '2025-02-24 05:33:34'),
(56, 'browse_reviews', 'reviews', '2025-02-24 05:41:16', '2025-02-24 05:41:16'),
(57, 'read_reviews', 'reviews', '2025-02-24 05:41:16', '2025-02-24 05:41:16'),
(58, 'edit_reviews', 'reviews', '2025-02-24 05:41:16', '2025-02-24 05:41:16'),
(59, 'add_reviews', 'reviews', '2025-02-24 05:41:16', '2025-02-24 05:41:16'),
(60, 'delete_reviews', 'reviews', '2025-02-24 05:41:16', '2025-02-24 05:41:16'),
(61, 'browse_faqs', 'faqs', '2025-02-24 05:46:47', '2025-02-24 05:46:47'),
(62, 'read_faqs', 'faqs', '2025-02-24 05:46:47', '2025-02-24 05:46:47'),
(63, 'edit_faqs', 'faqs', '2025-02-24 05:46:47', '2025-02-24 05:46:47'),
(64, 'add_faqs', 'faqs', '2025-02-24 05:46:47', '2025-02-24 05:46:47'),
(65, 'delete_faqs', 'faqs', '2025-02-24 05:46:47', '2025-02-24 05:46:47'),
(66, 'browse_plans', 'plans', '2025-02-24 07:22:58', '2025-02-24 07:22:58'),
(67, 'read_plans', 'plans', '2025-02-24 07:22:58', '2025-02-24 07:22:58'),
(68, 'edit_plans', 'plans', '2025-02-24 07:22:58', '2025-02-24 07:22:58'),
(69, 'add_plans', 'plans', '2025-02-24 07:22:58', '2025-02-24 07:22:58'),
(70, 'delete_plans', 'plans', '2025-02-24 07:22:58', '2025-02-24 07:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverage_include` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_feature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `include_1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_1_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_1_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_2_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_2_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_3_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_3_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_3_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `short_description`, `coverage_include`, `key_feature`, `price`, `long_description`, `include_1_title`, `include_1_desc`, `include_1_image`, `include_2_title`, `include_2_desc`, `include_2_image`, `include_3_title`, `include_3_desc`, `include_3_image`, `created_at`, `updated_at`) VALUES
(1, 'Pet Protection', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce.', '[\"Life Insurance\",\"Life Insurance2\",\"Life Insurance3\"]', '[\"Life Insurance\",\"Life Insurance2\",\"Life Insurance3\"]', '3500', '<p class=\"text-theme2 text-2xl mb-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p class=\"text-theme2 text-2xl mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Illness', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, 'Wellness', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, 'Accident', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, '2025-02-24 07:29:00', '2025-02-24 07:41:49'),
(2, 'Pet Protection', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce.', '[\"Life Insurance\",\"Life Insurance2\",\"Life Insurance3\"]', '[\"Life Insurance\",\"Life Insurance2\",\"Life Insurance3\"]', '3700', '<p class=\"text-theme2 text-2xl mb-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p class=\"text-theme2 text-2xl mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, 'Wellness', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, 'Accident', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, '2025-02-24 07:30:00', '2025-02-24 07:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2025-02-24 03:52:37', '2025-02-24 03:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`, `created_at`, `updated_at`) VALUES
(1, 'Melba King, Consultant', 'Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.', '2025-02-24 05:41:58', '2025-02-24 05:41:58'),
(2, 'Melba King, Consultant', 'Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.', '2025-02-24 05:42:09', '2025-02-24 05:42:09'),
(3, 'Melba King, Consultant', 'Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.', '2025-02-24 05:42:18', '2025-02-24 05:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2025-02-24 03:52:36', '2025-02-24 03:52:36'),
(2, 'user', 'Normal User', '2025-02-24 03:52:36', '2025-02-24 03:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int UNSIGNED NOT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `home_page_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `banner_title`, `banner_description`, `title`, `short_description`, `description`, `home_page_desc`, `created_at`, `updated_at`, `image`, `home_page_image`, `service_name`) VALUES
(1, 'Protect Your Pet with the Right Insurance Plan', 'Consequat lacus eget congue hac aliquam facilisis purus massa vestibulum. Quam egestas et urna magna a phasellus et.', 'Comprehensive Dog Insurance for Your Furry Friend', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen.', '<p class=\"text-lg lg:text-2xl text-theme2 pb-10\">Your dog is more than just a pet&mdash;they&rsquo;re family. Our dog insurance plans provide peace of mind by covering unexpected veterinary costs, so you can focus on what truly matters: keeping your pup happy and healthy.</p>', 'Health care plans for dogs & puppies', '2025-02-24 04:33:00', '2025-02-24 22:38:33', 'services/February2025/hZSjjEWBVVNxjALrIAZ9.png', 'services/February2025/83qFaZsUf88YJQsSUDlP.png', 'DOG INSURANCE'),
(2, NULL, NULL, NULL, NULL, NULL, 'Health care plans for cats & kittens', '2025-02-24 04:34:42', '2025-02-24 04:34:42', NULL, 'services/February2025/MZ6WuotGWZZjA16mH1dU.png', 'CAT INSURANCE'),
(3, NULL, NULL, NULL, NULL, NULL, 'Health care plans for dogs & puppies', '2025-02-24 04:35:45', '2025-02-24 04:35:45', NULL, 'services/February2025/FfZsZLlirZqIDMpOzbjN.png', 'COMPANION PET INSURANCE');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Vanya', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Tellus tristique duis elementum nisl. Dui maecenas blandit cum a consectetur metus enim.', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'home-page.banner_title', 'Banner Title', 'Best Pet Insurance across the country', NULL, 'text', 6, 'Home Page'),
(12, 'home-page.banner_description', 'Banner Description', 'Consequat lacus eget congue hac aliquam facilisis purus massa vestibulum. Quam egestas et urna magna a phasellus et.', NULL, 'text', 7, 'Home Page'),
(13, 'home-page.banner_slogan', 'Banner Slogan', '\"Unleash Worry-Free Pet Care.\"', NULL, 'text', 8, 'Home Page'),
(14, 'home-page.service_desc_1', 'Services Description 1', 'Most calendars are designed for teams.', NULL, 'text', 9, 'Home Page'),
(15, 'home-page.service_desc_2', 'Services Description 2', 'Slate is designed for freelancers.', NULL, 'text', 10, 'Home Page'),
(16, 'home-page.guide_1_titel', 'Guide 1 Title', 'Visit your vet', NULL, 'text', 11, 'Home Page'),
(18, 'home-page.guide_2_title', 'Guide 2 Title', 'Visit your vet', NULL, 'text', 13, 'Home Page'),
(19, 'home-page.guide_3_title', 'Guide 3 Title', 'Visit your vet', NULL, 'text', 14, 'Home Page'),
(20, 'home-page.guide_1_desc', 'Guide 1 Descrption', '<p>Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.</p>', NULL, 'rich_text_box', 15, 'Home Page'),
(21, 'home-page.guide_2_desc', 'Guide 2 Description', '<p>Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.</p>', NULL, 'rich_text_box', 16, 'Home Page'),
(22, 'home-page.guide_3_desc', 'Guide 3 Description', '<p>Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.</p>', NULL, 'rich_text_box', 17, 'Home Page'),
(23, 'home-page.choose_us_title', 'Choose Us Title', 'Why VANYA Risk Management Consultant Stands Out in the Pet Insurance Industry', NULL, 'text', 18, 'Home Page'),
(25, 'home-page.choose_us_subtitle_1', 'Choose Us Subtitle 1', 'Experience and Expertise', NULL, 'text', 19, 'Home Page'),
(26, 'home-page.choose_us_subtitle_2', 'Choose Us Subtitle 2', 'Experience and Expertise', NULL, 'text', 20, 'Home Page'),
(27, 'home-page.choose_us_subtitle_3', 'Choose Us Subtitle 3', 'Experience and Expertise', NULL, 'text', 21, 'Home Page'),
(28, 'home-page.choose_us_desc_1', 'Choose Us Decription 1', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.', NULL, 'text', 22, 'Home Page'),
(29, 'home-page.choose_us_desc_2', 'Choose Us Description 2', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.', NULL, 'text', 23, 'Home Page'),
(30, 'home-page.choose_us_desc_3', 'Choose Us Description 3', 'Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.', NULL, 'text', 24, 'Home Page'),
(31, 'contact.mobile_number', 'Mobile Number', '98324 75964', NULL, 'text', 25, 'Contact'),
(32, 'contact.email', 'Email', 'support@vanya.com', NULL, 'text', 26, 'Contact'),
(33, 'contact.address', 'Address', '123 Main St. Anytown, USA', NULL, 'text', 27, 'Contact'),
(34, 'contact.banner_title', 'Banner Title', 'We’re here to help—because your pet’s health is our priority!', NULL, 'text', 28, 'Contact'),
(35, 'contact.banner_description', 'Banner Description', 'Consequat lacus eget congue hac aliquam facilisis purus massa vestibulum. Quam egestas et urna magna a phasellus et.', NULL, 'text', 29, 'Contact'),
(36, 'contact.facebook_link', 'Facebook Link', 'www.facebook.com', NULL, 'text', 30, 'Contact'),
(37, 'contact.instagram_link', 'Instagram Link', 'www.instagram.com', NULL, 'text', 31, 'Contact'),
(38, 'contact.twitter_link', 'Twitter Link', 'www.x.com', NULL, 'text', 32, 'Contact'),
(39, 'contact.youtube_link', 'YouTube Link', 'www.youtube.com', NULL, 'text', 33, 'Contact'),
(40, 'site.footer_logo', 'Footer Logo', '', NULL, 'image', 34, 'Site'),
(41, 'submit-claim.banner_title', 'Banner Title', 'Submit a claim', NULL, 'text', 35, 'Submit Claim'),
(42, 'submit-claim.banner_description', 'Banner Description', 'Consequat lacus eget congue hac aliquam facilisis purus massa vestibulum. Quam egestas et urna magna a phasellus et.', NULL, 'text', 36, 'Submit Claim'),
(43, 'submit-claim.steps_title_1', 'Steps Title 1', 'Visit Your Vet', NULL, 'text', 37, 'Submit Claim'),
(44, 'submit-claim.steps_title_2', 'Steps Title 2', 'Gather Your Documents', NULL, 'text', 38, 'Submit Claim'),
(45, 'submit-claim.steps_title_3', 'Steps Title 3', 'Visit Your Vet', NULL, 'text', 39, 'Submit Claim'),
(46, 'submit-claim.steps_title_4', 'Steps Title 4', 'Gather Your Documents', NULL, 'text', 40, 'Submit Claim'),
(47, 'submit-claim.steps_desc_1', 'Steps Description 1', 'Take your pet to any licensed veterinarian for treatment', NULL, 'text', 41, 'Submit Claim'),
(48, 'submit-claim.steps_desc_2', 'Steps Description 2', 'Collect your itemized invoice and medical records related to the visit.', NULL, 'text', 42, 'Submit Claim'),
(49, 'submit-claim.steps_desc_3', 'Steps Description 3', 'Take your pet to any licensed veterinarian for treatment', NULL, 'text', 43, 'Submit Claim'),
(50, 'submit-claim.steps_desc_4', 'Steps Description 4', 'Collect your itemized invoice and medical records related to the visit.', NULL, 'text', 44, 'Submit Claim'),
(51, 'about.banner_title', 'Banner Title', 'About us', NULL, 'text', 45, 'About'),
(54, 'about.banner_description', 'Banner Description', 'Consequat lacus eget congue hac aliquam facilisis purus massa vestibulum. Quam egestas et urna magna a phasellus et.', NULL, 'text', 46, 'About'),
(55, 'about.logo', 'Logo', '', NULL, 'image', 47, 'About'),
(56, 'about.logo_description', 'Logo Description', '<p class=\"text-white text-lg lg:text-2xl\">At VANYA risk management consultant, we know that pets are more than just animals&mdash;they&rsquo;re family. That&rsquo;s why we&rsquo;re dedicated to providing pet owners with reliable, affordable, and comprehensive pet insurance. Our mission is to help you give your furry friends the best care possible without the stress of unexpected veterinary costs.</p>', NULL, 'rich_text_box', 48, 'About'),
(57, 'about.description', 'Description', '<p class=\"text-theme2 text-lg lg:text-2xl pb-10\">That&rsquo;s where we come in. Our mission is simple: to provide pet owners with affordable, reliable, and comprehensive pet insurance so that financial worries never stand in the way of quality veterinary care. Whether it&rsquo;s a routine checkup, an unexpected emergency, or long-term treatment, we ensure your pet gets the medical attention they need&mdash;without the stress of costly bills.</p>', NULL, 'rich_text_box', 49, 'About'),
(58, 'about.question', 'Question', 'Why Choose us ?', NULL, 'text', 50, 'About'),
(59, 'about.answer', 'Answer', '<p class=\"text-theme2 text-lg lg:text-2xl\">That&rsquo;s where we come in. Our mission is simple: to provide pet owners with affordable, reliable, and comprehensive pet insurance so that financial worries never stand in the way of quality veterinary care. Whether it&rsquo;s a routine checkup, an unexpected emergency, or long-term treatment, we ensure your pet gets the medical attention they need&mdash;without the stress of costly bills.</p>', NULL, 'rich_text_box', 51, 'About'),
(60, 'about.feature_1_image', 'Feature 1 Image', '', NULL, 'image', 52, 'About'),
(61, 'about.feature_2_image', 'Feature 2 Image', '', NULL, 'image', 53, 'About'),
(62, 'about.feature_3_image', 'Feature 3 Image', '', NULL, 'image', 54, 'About'),
(63, 'about.feature_4_image', 'Feature 4 Image', '', NULL, 'image', 55, 'About'),
(64, 'about.feature_5_image', 'Feature 5 Image', '', NULL, 'image', 56, 'About'),
(65, 'about.feature_1_title', 'Feature 1 Title', 'Comprehensive Coverage', NULL, 'text', 57, 'About'),
(66, 'about.feature_2_title', 'Feature 2 Title', 'Flexible Plans', NULL, 'text', 58, 'About'),
(67, 'about.feature_3_title', 'Feature 3 Title', 'Fast & Hassle-Free Claims', NULL, 'text', 59, 'About'),
(68, 'about.feature_4_title', 'Feature 4 Title', 'Dedicated Support Team', NULL, 'text', 60, 'About'),
(69, 'about.feature_5_title', 'Feature 5 Title', 'Trusted by Pet Owners Nationwide', NULL, 'text', 61, 'About'),
(70, 'about.feature_1_desc', 'Feature 1 Description', '<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">From accidents and illnesses to preventive care and alternative treatments, our plans are designed to fit your pet&rsquo;s unique needs.</p>', NULL, 'rich_text_box', 62, 'About'),
(71, 'about.feature_2_desc', 'Feature 2 Description', '<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">We offer customizable coverage options, so you only pay for what you need.</p>', NULL, 'rich_text_box', 63, 'About'),
(72, 'about.feature_3_desc', 'Feature 3 Description', '<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">We make the claims process quick and easy, so you can focus on what matters most&mdash;your pet.</p>', NULL, 'rich_text_box', 64, 'About'),
(73, 'about.feature_4_desc', 'Feature 4 Description', '<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">Our compassionate pet-loving team is always here to help you navigate your policy and answer any questions.</p>', NULL, 'rich_text_box', 65, 'About'),
(74, 'about.feature_5_desc', 'Feature 5 Description', '<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">Thousands of pet parents trust us to protect their furry companions.</p>', NULL, 'rich_text_box', 66, 'About'),
(75, 'plan.banner_title', 'Banner Title', 'Protect Your Pet with the Right Insurance Plan', NULL, 'text', 67, 'Plan'),
(76, 'plan.banner_description', 'Banner Description', 'Consequat lacus eget congue hac aliquam facilisis purus massa vestibulum. Quam egestas et urna magna a phasellus et.', NULL, 'text', 68, 'Plan'),
(77, 'terms-and-condition.banner_title', 'Banner Title', 'Terms & Conditions', NULL, 'text', 69, 'Terms And Condition'),
(78, 'terms-and-condition.banner_description', 'Banner Description', 'Consequat lacus eget congue hac aliquam facilisis purus massa vestibulum. Quam egestas et urna magna a phasellus et.', NULL, 'text', 70, 'Terms And Condition'),
(79, 'terms-and-condition.description', 'Description', '<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>', NULL, 'rich_text_box', 71, 'Terms And Condition'),
(80, 'terms-and-condition.term_1', 'Term 1', 'Disclaimer of warranties', NULL, 'text', 72, 'Terms And Condition'),
(81, 'terms-and-condition.term_1_detail', 'Term 1 Detail', '<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>', NULL, 'rich_text_box', 73, 'Terms And Condition'),
(82, 'terms-and-condition.term_2', 'Term 2', 'Limitation of liabilities', NULL, 'text', 74, 'Terms And Condition'),
(83, 'terms-and-condition.term_2_detail', 'Term 2 Detail', '<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>', NULL, 'rich_text_box', 75, 'Terms And Condition'),
(84, 'terms-and-condition.term_3', 'Term 3', 'Your privacy and security on the site', NULL, 'text', 76, 'Terms And Condition'),
(85, 'terms-and-condition.term_3_detail', 'Term 3 Detail', '<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, 'rich_text_box', 77, 'Terms And Condition'),
(86, 'terms-and-condition.term_4', 'Term 4', 'Conducting business electronically', NULL, 'text', 78, 'Terms And Condition'),
(87, 'terms-and-condition.term_4_detail', 'Term 4 Detail', '<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>', NULL, 'rich_text_box', 79, 'Terms And Condition'),
(88, 'terms-and-condition.term_5', 'Term 5', 'Claims Self-service', NULL, 'text', 80, 'Terms And Condition'),
(89, 'terms-and-condition.term_5_detail', 'Term 5 Detail', '<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>', NULL, 'rich_text_box', 81, 'Terms And Condition'),
(90, 'service.question', 'Question', 'What\'s Choose us?', NULL, 'text', 82, 'Service'),
(91, 'service.answer', 'Answer', '<p class=\"text-theme2 text-lg lg:text-2xl mb-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, 'rich_text_box', 83, 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2025-02-24 03:52:37', '2025-02-24 03:52:37'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2025-02-24 03:52:37', '2025-02-24 03:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$jv7IV1/MeLwnH8ov5PiFwO8I7dPGS2nZ6V76JEbDqJveRReaMvtSq', 'Ro83tjVh8dtBih81LWFZixwl502ApqGsBwbXyf7Od29O20pxgu5xrzCr8tQI', NULL, '2025-02-24 03:52:37', '2025-02-24 03:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_covers`
--
ALTER TABLE `insurance_covers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `insurance_covers`
--
ALTER TABLE `insurance_covers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
