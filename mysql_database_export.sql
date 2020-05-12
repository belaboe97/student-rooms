-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               5.6.34 - MySQL Community Server (GPL)
-- Server Betriebssystem:        Win32
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Exportiere Datenbank Struktur für studentroom
DROP DATABASE IF EXISTS `studentroom`;
CREATE DATABASE IF NOT EXISTS `studentroom` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `studentroom`;

-- Exportiere Struktur von Tabelle studentroom.bookings
DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idroom` bigint(20) DEFAULT NULL,
  `idpayment` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `booking_start` date DEFAULT NULL,
  `booking_end` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fki_roomid` (`idroom`),
  KEY `fki_userid` (`iduser`),
  KEY `fki_paymentid` (`idpayment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.bookings: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `active` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.categories: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.data_rows
DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE IF NOT EXISTS `data_rows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_type_id` int(11) NOT NULL,
  `field` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `type` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `display_name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `required` bit(1) NOT NULL DEFAULT b'0',
  `browse` bit(1) NOT NULL DEFAULT b'1',
  `read` bit(1) NOT NULL DEFAULT b'1',
  `edit` bit(1) NOT NULL DEFAULT b'1',
  `add` bit(1) NOT NULL DEFAULT b'1',
  `delete` bit(1) NOT NULL DEFAULT b'1',
  `details` longtext CHARACTER SET utf8,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.data_rows: ~50 rows (ungefähr)
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
	(1, 1, 'id', 'number', 'ID', b'1', b'0', b'0', b'0', b'0', b'0', NULL, 1),
	(2, 1, 'name', 'text', 'Name', b'1', b'1', b'1', b'1', b'1', b'1', NULL, 2),
	(3, 1, 'email', 'text', 'Email', b'1', b'1', b'1', b'1', b'1', b'1', NULL, 3),
	(4, 1, 'password', 'password', 'Password', b'1', b'0', b'0', b'1', b'1', b'0', NULL, 4),
	(5, 1, 'remember_token', 'text', 'Remember Token', b'0', b'0', b'0', b'0', b'0', b'0', NULL, 5),
	(6, 1, 'created_at', 'timestamp', 'Created At', b'0', b'1', b'1', b'0', b'0', b'0', NULL, 6),
	(7, 1, 'updated_at', 'timestamp', 'Updated At', b'0', b'0', b'0', b'0', b'0', b'0', NULL, 7),
	(8, 1, 'avatar', 'image', 'Avatar', b'0', b'1', b'1', b'1', b'1', b'1', NULL, 8),
	(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', b'0', b'1', b'1', b'1', b'1', b'0', '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}', 10),
	(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', b'0', b'1', b'1', b'1', b'1', b'0', '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}', 11),
	(11, 1, 'settings', 'hidden', 'Settings', b'0', b'0', b'0', b'0', b'0', b'0', NULL, 12),
	(12, 2, 'id', 'number', 'ID', b'1', b'0', b'0', b'0', b'0', b'0', NULL, 1),
	(13, 2, 'name', 'text', 'Name', b'1', b'1', b'1', b'1', b'1', b'1', NULL, 2),
	(14, 2, 'created_at', 'timestamp', 'Created At', b'0', b'0', b'0', b'0', b'0', b'0', NULL, 3),
	(15, 2, 'updated_at', 'timestamp', 'Updated At', b'0', b'0', b'0', b'0', b'0', b'0', NULL, 4),
	(16, 3, 'id', 'number', 'ID', b'1', b'0', b'0', b'0', b'0', b'0', NULL, 1),
	(17, 3, 'name', 'text', 'Name', b'1', b'1', b'1', b'1', b'1', b'1', NULL, 2),
	(18, 3, 'created_at', 'timestamp', 'Created At', b'0', b'0', b'0', b'0', b'0', b'0', NULL, 3),
	(19, 3, 'updated_at', 'timestamp', 'Updated At', b'0', b'0', b'0', b'0', b'0', b'0', NULL, 4),
	(20, 3, 'display_name', 'text', 'Display Name', b'1', b'1', b'1', b'1', b'1', b'1', NULL, 5),
	(21, 1, 'role_id', 'text', 'Role', b'1', b'1', b'1', b'1', b'1', b'1', NULL, 9),
	(30, 6, 'id', 'text', 'Id', b'1', b'0', b'0', b'0', b'0', b'0', '{}', 1),
	(31, 6, 'adress', 'text', 'Adress', b'1', b'1', b'1', b'1', b'1', b'1', '{}', 2),
	(32, 6, 'price', 'text', 'Price', b'1', b'1', b'1', b'1', b'1', b'1', '{}', 3),
	(34, 6, 'created_at', 'timestamp', 'Created At', b'0', b'1', b'1', b'1', b'0', b'1', '{}', 5),
	(35, 6, 'updated_at', 'timestamp', 'Updated At', b'0', b'0', b'0', b'0', b'0', b'0', '{}', 6),
	(36, 6, 'deleted_at', 'timestamp', 'Deleted At', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 7),
	(37, 6, 'ownerid', 'text', 'Ownerid', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 2),
	(38, 6, 'image', 'image', 'Image', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 8),
	(48, 8, 'id', 'text', 'Id', b'1', b'0', b'0', b'0', b'0', b'0', '{}', 1),
	(49, 8, 'bic', 'text', 'Bic', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 2),
	(50, 8, 'country', 'text', 'Country', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 3),
	(51, 8, 'iban', 'text', 'Iban', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 4),
	(52, 8, 'paypal', 'text', 'Paypal', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 5),
	(53, 8, 'created_at', 'timestamp', 'Created At', b'0', b'1', b'1', b'1', b'0', b'1', '{}', 6),
	(54, 8, 'updated_at', 'timestamp', 'Updated At', b'0', b'0', b'0', b'0', b'0', b'0', '{}', 7),
	(55, 8, 'deleted_at', 'timestamp', 'Deleted At', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 8),
	(56, 8, 'userid', 'number', 'Userid', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 9),
	(57, 9, 'id', 'text', 'Id', b'1', b'0', b'0', b'0', b'0', b'0', '{}', 1),
	(58, 9, 'bic', 'text', 'Bic', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 2),
	(59, 9, 'country', 'text', 'Country', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 3),
	(60, 9, 'iban', 'text', 'Iban', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 4),
	(61, 9, 'paypal', 'text', 'Paypal', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 5),
	(62, 9, 'created_at', 'timestamp', 'Created At', b'0', b'1', b'1', b'1', b'0', b'1', '{}', 6),
	(63, 9, 'updated_at', 'timestamp', 'Updated At', b'0', b'0', b'0', b'0', b'0', b'0', '{}', 7),
	(64, 9, 'deleted_at', 'timestamp', 'Deleted At', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 8),
	(65, 9, 'userid', 'number', 'Userid', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 9),
	(66, 11, 'id', 'text', 'Id', b'1', b'0', b'0', b'0', b'0', b'0', '{}', 1),
	(67, 11, 'idroom', 'number', 'Idroom', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 2),
	(68, 11, 'idpayment', 'number', 'Idpayment', b'0', b'1', b'1', b'1', b'1', b'1', '{}', 3);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.data_types
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE IF NOT EXISTS `data_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `display_name_singular` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `display_name_plural` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `icon` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `model_name` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `description` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `generate_permissions` bit(1) NOT NULL DEFAULT b'0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `server_side` smallint(6) NOT NULL DEFAULT '0',
  `controller` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `policy_name` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `details` longtext CHARACTER SET utf8,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.data_types: ~9 rows (ungefähr)
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `description`, `generate_permissions`, `created_at`, `updated_at`, `server_side`, `controller`, `policy_name`, `details`) VALUES
	(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', '', b'1', '2020-04-13 12:27:17', '2020-04-13 12:27:17', 0, 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', 'TCG\\Voyager\\Policies\\UserPolicy', NULL),
	(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', '', b'1', '2020-04-13 12:27:17', '2020-04-13 12:27:17', 0, '', NULL, NULL),
	(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', '', b'1', '2020-04-13 12:27:17', '2020-04-13 12:27:17', 0, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', NULL, NULL),
	(4, 'owner', 'owner', 'Owner', 'Owners', 'voyager-person', 'App\\Owner', NULL, b'1', '2020-04-13 12:33:31', '2020-04-13 12:33:31', 0, NULL, NULL, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}'),
	(6, 'rooms', 'rooms', 'Room', 'Rooms', 'voyager-home', 'App\\room', NULL, b'1', '2020-04-13 13:43:56', '2020-04-13 14:20:46', 0, NULL, NULL, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}'),
	(8, 'paymentdetail', 'paymentdetail', 'Paymentdetail', 'Paymentdetails', NULL, 'App\\Paymentdetail', NULL, b'1', '2020-04-13 14:51:35', '2020-04-13 14:51:35', 0, NULL, NULL, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}'),
	(9, 'paymentdetails', 'paymentdetails', 'Paymentdetail', 'Paymentdetails', NULL, 'App\\Paymentdetail', NULL, b'1', '2020-04-13 14:52:18', '2020-04-13 14:52:18', 0, NULL, NULL, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}'),
	(11, 'bookings', 'bookings', 'Booking', 'Bookings', NULL, 'App\\Booking', NULL, b'1', '2020-04-13 22:33:05', '2020-04-13 22:33:05', 0, NULL, NULL, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}'),
	(12, 'owners', 'owners', 'Owner', 'Owners', NULL, 'App\\Owner', NULL, b'1', '2020-04-14 09:52:16', '2020-04-14 09:52:16', 0, NULL, NULL, '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `connection` longtext CHARACTER SET utf8 NOT NULL,
  `queue` longtext CHARACTER SET utf8 NOT NULL,
  `payload` longtext CHARACTER SET utf8 NOT NULL,
  `exception` longtext CHARACTER SET utf8 NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.failed_jobs: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.menus
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.menus: ~1 rows (ungefähr)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2020-04-13 12:27:17', '2020-04-13 12:27:17');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.menu_items
DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `url` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `target` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `color` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `parameters` longtext CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.menu_items: ~17 rows (ungefähr)
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
	(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.dashboard', NULL),
	(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.media.index', NULL),
	(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.users.index', NULL),
	(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.roles.index', NULL),
	(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-04-13 12:27:17', '2020-04-13 12:27:17', NULL, NULL),
	(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.menus.index', NULL),
	(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.database.index', NULL),
	(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.compass.index', NULL),
	(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.bread.index', NULL),
	(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.settings.index', NULL),
	(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2020-04-13 12:27:17', '2020-04-13 12:27:17', 'voyager.hooks', NULL),
	(12, 1, 'Owners', '', '_self', 'voyager-person', NULL, NULL, 15, '2020-04-13 12:33:31', '2020-04-13 12:33:31', 'voyager.owner.index', NULL),
	(14, 1, 'Rooms', '', '_self', 'voyager-home', NULL, NULL, 17, '2020-04-13 13:43:56', '2020-04-13 13:43:56', 'voyager.rooms.index', NULL),
	(16, 1, 'Paymentdetails', '', '_self', NULL, NULL, NULL, 19, '2020-04-13 14:51:35', '2020-04-13 14:51:35', 'voyager.paymentdetail.index', NULL),
	(17, 1, 'Paymentdetails', '', '_self', NULL, NULL, NULL, 20, '2020-04-13 14:52:19', '2020-04-13 14:52:19', 'voyager.paymentdetails.index', NULL),
	(18, 1, 'Bookings', '', '_self', NULL, NULL, NULL, 21, '2020-04-13 22:33:05', '2020-04-13 22:33:05', 'voyager.bookings.index', NULL),
	(19, 1, 'Owners', '', '_self', NULL, NULL, NULL, 22, '2020-04-14 09:52:16', '2020-04-14 09:52:16', 'voyager.owners.index', NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.migrations: ~25 rows (ungefähr)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(24, '2014_10_12_000000_create_users_table', 1),
	(25, '2014_10_12_100000_create_password_resets_table', 1),
	(26, '2016_01_01_000000_add_voyager_user_fields', 1),
	(27, '2016_01_01_000000_create_data_types_table', 1),
	(28, '2016_05_19_173453_create_menu_table', 1),
	(29, '2016_10_21_190000_create_roles_table', 1),
	(30, '2016_10_21_190000_create_settings_table', 1),
	(31, '2016_11_30_135954_create_permission_table', 1),
	(32, '2016_11_30_141208_create_permission_role_table', 1),
	(33, '2016_12_26_201236_data_types__add__server_side', 1),
	(34, '2017_01_13_000000_add_route_to_menu_items_table', 1),
	(35, '2017_01_14_005015_create_translations_table', 1),
	(36, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
	(37, '2017_03_06_000000_add_controller_to_data_types_table', 1),
	(38, '2017_04_21_000000_add_order_to_data_rows_table', 1),
	(39, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
	(40, '2017_08_05_000000_add_group_to_settings_table', 1),
	(41, '2017_11_26_013050_add_user_role_relationship', 1),
	(42, '2017_11_26_015000_create_user_roles_table', 1),
	(43, '2018_03_11_000000_add_user_settings', 1),
	(44, '2018_03_14_000000_add_details_to_data_types_table', 1),
	(45, '2018_03_16_000000_make_settings_value_nullable', 1),
	(46, '2019_08_19_000000_create_failed_jobs_table', 1),
	(47, '2020_04_15_143343_create_tasks_table', 2),
	(48, '2020_04_16_151502_create_categories', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.owners
DROP TABLE IF EXISTS `owners`;
CREATE TABLE IF NOT EXISTS `owners` (
  `owners_adress` longtext CHARACTER SET utf8,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` longtext CHARACTER SET utf8,
  `phone` longtext CHARACTER SET utf8,
  `email` longtext CHARACTER SET utf8,
  `id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.owners: ~8 rows (ungefähr)
/*!40000 ALTER TABLE `owners` DISABLE KEYS */;
INSERT INTO `owners` (`owners_adress`, `created_at`, `updated_at`, `deleted_at`, `name`, `phone`, `email`, `id`) VALUES
	('Jacobsway 4', '2020-05-02 14:30:07', '2020-05-02 14:30:07', '2020-05-11 19:56:06', 'admin', '+ 030 653312 1', 'admin@admin', 1),
	('My lovely Place 13', '2020-05-03 18:45:05', '2020-05-03 18:45:05', '2020-05-11 19:56:06', 'Johnny Fresh', '+ 17421 1221', 'fresh@frest.com', 5),
	('Driveway 1', '2020-05-02 14:28:00', '2020-05-02 14:28:00', '2020-05-11 19:56:06', 'Example Test', '+353 2113 2211', 'test@test1.com', 8),
	('Robotdrive 32', '2020-05-02 21:12:21', '2020-05-02 21:12:21', '2020-05-11 19:56:06', 'robot test', '+ 030 12122 111', 'robot@robot', 9),
	('Ownersadress 2', '2020-05-03 17:01:25', '2020-05-03 17:01:25', '2020-05-11 19:56:06', 'Jack Jonso', '+ 12311 11 1', 'jacky@jack.com', 10),
	('Ebert 34', '2020-05-03 18:29:47', '2020-05-03 18:29:47', '2020-05-11 19:56:06', 'petra test', '030 12311 1', 'petra@test.com', 11),
	('Dannyowstreet 33a', '2020-05-05 10:00:03', '2020-05-05 10:00:03', '2020-05-11 19:56:06', 'Danny Testing Edited', '+49 174 2322 121', 'danny@test.com', 12),
	('teststreet 4', '2020-05-05 13:37:24', '2020-05-05 13:37:24', '2020-05-11 19:56:06', 'dubby test', '+491747234536', 'tester@test.com', 14);
/*!40000 ALTER TABLE `owners` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `token` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.password_resets: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.paymentdetails
DROP TABLE IF EXISTS `paymentdetails`;
CREATE TABLE IF NOT EXISTS `paymentdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bic` longtext CHARACTER SET utf8,
  `country` longtext CHARACTER SET utf8,
  `iban` int(11) DEFAULT NULL,
  `paypal` longtext CHARACTER SET utf8,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fki_paymentdetailsfk` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.paymentdetails: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `paymentdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `paymentdetails` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `table_name` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.permissions: ~50 rows (ungefähr)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
	(1, 'browse_admin', NULL, '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(2, 'browse_bread', NULL, '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(3, 'browse_database', NULL, '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(4, 'browse_media', NULL, '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(5, 'browse_compass', NULL, '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(6, 'browse_menus', 'menus', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(7, 'read_menus', 'menus', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(8, 'edit_menus', 'menus', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(9, 'add_menus', 'menus', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(10, 'delete_menus', 'menus', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(11, 'browse_roles', 'roles', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(12, 'read_roles', 'roles', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(13, 'edit_roles', 'roles', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(14, 'add_roles', 'roles', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(15, 'delete_roles', 'roles', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(16, 'browse_users', 'users', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(17, 'read_users', 'users', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(18, 'edit_users', 'users', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(19, 'add_users', 'users', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(20, 'delete_users', 'users', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(21, 'browse_settings', 'settings', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(22, 'read_settings', 'settings', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(23, 'edit_settings', 'settings', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(24, 'add_settings', 'settings', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(25, 'delete_settings', 'settings', '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(26, 'browse_hooks', NULL, '2020-04-13 12:27:17', '2020-04-13 12:27:17'),
	(27, 'browse_owner', 'owner', '2020-04-13 12:33:31', '2020-04-13 12:33:31'),
	(28, 'read_owner', 'owner', '2020-04-13 12:33:31', '2020-04-13 12:33:31'),
	(29, 'edit_owner', 'owner', '2020-04-13 12:33:31', '2020-04-13 12:33:31'),
	(30, 'add_owner', 'owner', '2020-04-13 12:33:31', '2020-04-13 12:33:31'),
	(31, 'delete_owner', 'owner', '2020-04-13 12:33:31', '2020-04-13 12:33:31'),
	(37, 'browse_rooms', 'rooms', '2020-04-13 13:43:56', '2020-04-13 13:43:56'),
	(38, 'read_rooms', 'rooms', '2020-04-13 13:43:56', '2020-04-13 13:43:56'),
	(39, 'edit_rooms', 'rooms', '2020-04-13 13:43:56', '2020-04-13 13:43:56'),
	(40, 'add_rooms', 'rooms', '2020-04-13 13:43:56', '2020-04-13 13:43:56'),
	(41, 'delete_rooms', 'rooms', '2020-04-13 13:43:56', '2020-04-13 13:43:56'),
	(47, 'browse_paymentdetail', 'paymentdetail', '2020-04-13 14:51:35', '2020-04-13 14:51:35'),
	(48, 'read_paymentdetail', 'paymentdetail', '2020-04-13 14:51:35', '2020-04-13 14:51:35'),
	(49, 'edit_paymentdetail', 'paymentdetail', '2020-04-13 14:51:35', '2020-04-13 14:51:35'),
	(50, 'add_paymentdetail', 'paymentdetail', '2020-04-13 14:51:35', '2020-04-13 14:51:35'),
	(51, 'delete_paymentdetail', 'paymentdetail', '2020-04-13 14:51:35', '2020-04-13 14:51:35'),
	(52, 'browse_paymentdetails', 'paymentdetails', '2020-04-13 14:52:19', '2020-04-13 14:52:19'),
	(53, 'read_paymentdetails', 'paymentdetails', '2020-04-13 14:52:19', '2020-04-13 14:52:19'),
	(54, 'edit_paymentdetails', 'paymentdetails', '2020-04-13 14:52:19', '2020-04-13 14:52:19'),
	(55, 'add_paymentdetails', 'paymentdetails', '2020-04-13 14:52:19', '2020-04-13 14:52:19'),
	(56, 'delete_paymentdetails', 'paymentdetails', '2020-04-13 14:52:19', '2020-04-13 14:52:19'),
	(57, 'browse_bookings', 'bookings', '2020-04-13 22:33:05', '2020-04-13 22:33:05'),
	(58, 'read_bookings', 'bookings', '2020-04-13 22:33:05', '2020-04-13 22:33:05'),
	(59, 'edit_bookings', 'bookings', '2020-04-13 22:33:05', '2020-04-13 22:33:05'),
	(60, 'add_bookings', 'bookings', '2020-04-13 22:33:05', '2020-04-13 22:33:05');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.permission_role
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.permission_role: ~50 rows (ungefähr)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
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
	(37, 1),
	(38, 1),
	(39, 1),
	(40, 1),
	(41, 1),
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
	(60, 1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `display_name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.roles: ~2 rows (ungefähr)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Administrator', '2020-04-13 12:26:38', '2020-04-13 12:26:38'),
	(2, 'user', 'Normal User', '2020-04-13 12:27:17', '2020-04-13 12:27:17');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.roomrating
DROP TABLE IF EXISTS `roomrating`;
CREATE TABLE IF NOT EXISTS `roomrating` (
  `rating` bigint(20) NOT NULL AUTO_INCREMENT,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `roomid` bigint(20) DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.roomrating: ~12 rows (ungefähr)
/*!40000 ALTER TABLE `roomrating` DISABLE KEYS */;
INSERT INTO `roomrating` (`rating`, `created_at`, `updated_at`, `deleted_at`, `roomid`, `id`) VALUES
	(5, '2020-05-02', '2020-05-02', NULL, 25, 6),
	(5, '2020-05-02', '2020-05-02', NULL, 26, 7),
	(4, '2020-05-02', '2020-05-02', NULL, 25, 8),
	(3, '2020-05-02', '2020-05-02', NULL, 25, 9),
	(5, '2020-05-03', '2020-05-03', NULL, 27, 10),
	(5, '2020-05-03', '2020-05-03', NULL, 25, 11),
	(2, '2020-05-03', '2020-05-03', NULL, 25, 12),
	(5, '2020-05-03', '2020-05-03', NULL, 29, 13),
	(2, '2020-05-04', '2020-05-04', NULL, 34, 14),
	(5, '2020-05-05', '2020-05-05', NULL, 35, 15),
	(5, '2020-05-05', '2020-05-05', NULL, 37, 16),
	(4, '2020-05-05', '2020-05-05', NULL, 30, 17);
/*!40000 ALTER TABLE `roomrating` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.rooms
DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adress` longtext CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ownerid` bigint(20) DEFAULT NULL,
  `image` longtext CHARACTER SET utf8,
  `description` longtext CHARACTER SET utf8,
  `roomtype` longtext CHARACTER SET utf8,
  `title` longtext CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.rooms: ~11 rows (ungefähr)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `adress`, `price`, `created_at`, `updated_at`, `deleted_at`, `ownerid`, `image`, `description`, `roomtype`, `title`) VALUES
	(25, 'Birkbuschstraße 25', 800, '2020-05-02 16:36:24', '2020-05-02 20:32:10', '2020-05-11 19:56:14', 9, '1588437384.jpg', 'This is steglitz. Berlin South. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quibusdam harum quos repudiandae commodi excepturi quo suscipit cupiditate eum, nihil libero, voluptatibus adipisci. Ab ad perferendis blanditiis, quis maxime nam.', 'Double Room', 'Steglitzer Damm'),
	(26, 'Bethunienstraße 3', 1200, '2020-05-02 16:38:30', '2020-05-02 20:29:19', '2020-05-11 19:56:14', 9, '1588437510.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quibusdam harum quos repudiandae commodi excepturi quo suscipit cupiditate eum, nihil libero, voluptatibus adipisci. Ab ad perferendis blanditiis, quis maxime nam.', 'Single Room', 'Bethunien Village'),
	(27, 'Hemminway 3', 1299, '2020-05-02 16:41:04', '2020-05-02 20:27:02', '2020-05-11 19:56:14', 9, '1588437664.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quibusdam harum quos repudiandae commodi excepturi quo suscipit cupiditate eum, nihil libero, voluptatibus adipisci. Ab ad perferendis blanditiis, quis maxime nam.', 'Double Room', 'Nice Living'),
	(29, 'Rentlane 3', 1000, '2020-05-03 17:12:46', '2020-05-03 17:13:47', '2020-05-11 19:56:14', 10, '1588525966.jpg', 'This is a new really nice apartment in berlin. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ipsa natus eum explicabo dolorum! Aliquam vel accusantium officia minima a. Ipsam suscipit, quae aliquam minima doloremque dignissimos earum sit aut?', 'Single Room', 'Happy Housing'),
	(30, 'Samariterstraße 65', 950, '2020-05-03 17:18:15', '2020-05-03 17:18:15', '2020-05-11 19:56:15', 10, '1588526295.jpg', 'Lorem', 'Single Room', 'Bang Palace'),
	(31, 'Studentsway 35a', 648, '2020-05-03 17:37:24', '2020-05-03 17:37:24', '2020-05-11 19:56:15', 10, '1588527444.jpg', 'This is a nice Student House', 'Single Room', 'Students House'),
	(32, 'Castleway 12', 777, '2020-05-03 18:43:31', '2020-05-03 18:43:31', '2020-05-11 19:56:15', 5, '1588531411.jpg', 'Lorem ipsum', 'Single Room', 'Home is Castle'),
	(33, 'Kaiserdamm 4', 499, '2020-05-04 01:31:52', '2020-05-04 01:31:52', '2020-05-11 19:56:15', 1, '1588555912.jpg', 'Lorem mal 10 dasd', 'Single Room', 'Palace Garden'),
	(34, 'Streetway 2', 600, '2020-05-04 01:42:49', '2020-05-04 01:42:49', '2020-05-11 19:56:15', 1, '1588556569.jpg', 'Its near to the university. Everbody likes it !', 'Double Room', 'Students Palce'),
	(35, 'Hermannstraße 24', 699, '2020-05-05 10:03:11', '2020-05-05 10:03:11', '2020-05-11 19:56:15', 12, '1588672991.jpg', 'Its a nice Room ! Alot of People Like it. It  has 25 sqm^2. \r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, aut libero autem deleniti asperiores culpa molestias reprehenderit magni quo. Voluptatibus nostrum voluptatem quasi dicta placeat omnis ad earum reprehenderit necessitatibus.Voluptatem ex quaerat maiores tempora nam error, distinctio dolore id iusto itaque at architecto ipsum nostrum, delectus velit, eius perspiciatis omnis! Accusantium magni totam animi voluptate facere eveniet, iusto ipsam!', 'Single Room', 'Dannys Students Room'),
	(37, 'Hermannstraße 5', 7000, '2020-05-05 13:38:11', '2020-05-05 13:38:11', '2020-05-11 19:56:15', 14, '1588685891.jpg', 'This is awesome ! I like it !', 'Single Room', 'Students heaven');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `display_name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `value` longtext CHARACTER SET utf8,
  `details` longtext CHARACTER SET utf8,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) CHARACTER SET utf8 DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.settings: ~10 rows (ungefähr)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
	(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
	(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
	(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
	(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
	(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
	(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
	(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
	(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
	(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
	(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.translations
DROP TABLE IF EXISTS `translations`;
CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `column_name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `foreign_key` int(11) NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `value` longtext CHARACTER SET utf8 NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.translations: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `remember_token` varchar(100) CHARACTER SET utf8 DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT 'users/default.png',
  `role_id` bigint(20) DEFAULT NULL,
  `settings` longtext CHARACTER SET utf8,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.users: ~11 rows (ungefähr)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `role_id`, `settings`) VALUES
	(1, 'admin', 'admin@admin', NULL, '$2y$10$h5qJaZBNGsncV1MH.dIlEOtsDrcXIbLVEccj0T2qOpx8RQx1MLnaq', NULL, '2020-04-13 12:26:38', '2020-04-13 12:26:38', 'users/default.png', 1, NULL),
	(4, 'Stanley Jones', 'Jones@jones', NULL, '$2y$10$DYOtLaU8UYPELmqNpZTGB.46vstUpJu8wwyjIqqipk1s35/1kD2nK', NULL, '2020-04-13 15:38:59', '2020-04-13 15:38:59', 'users/default.png', 2, NULL),
	(5, 'Johnny Fresh', 'fresh@frest.com', NULL, '$2y$10$pV32qT5YeZtNemVT1V5Plu3/Z2OF.4tQNUZa/50I.XLWxwt46sGzO', NULL, '2020-04-30 12:20:35', '2020-04-30 12:20:35', 'users/default.png', 2, NULL),
	(7, 'Johnny Slow', 'jo@jo.com', NULL, '$2y$10$/W4couBsm0ARdjLts0tQEOnrDZ0jFEoSrW9XVOZrsFacRin2cK4A.', NULL, '2020-04-30 18:00:56', '2020-04-30 18:00:56', 'users/default.png', 2, NULL),
	(8, 'Example Test', 'test@test1.com', NULL, '$2y$10$.J94.BRwHeGpezW3RG288eeTFgEbIoZFRC3wskKUj4WI6BUUzmVF6', NULL, '2020-05-02 13:42:29', '2020-05-02 13:42:29', 'users/default.png', 2, NULL),
	(9, 'robot test', 'robot@robot', NULL, '$2y$10$O2YC2hagCDvyenH5FXq8ueoDirERvQetuy66JEfi1a/WhvH8.AmVm', NULL, '2020-05-02 19:26:34', '2020-05-02 19:26:35', 'users/default.png', 2, NULL),
	(10, 'Jack Jonso', 'jacky@jack.com', NULL, '12345678', NULL, '2020-05-03 15:58:38', '2020-05-03 16:18:25', 'users/default.png', 2, NULL),
	(11, 'petra test', 'petra@test.com', NULL, '$2y$10$DTAxep1J.vP9o7e6MHdQuu3hO1gEGJ7YrIC0h2nPh5hUtFaXkRcUu', NULL, '2020-05-03 18:27:26', '2020-05-03 18:27:27', 'users/default.png', 2, NULL),
	(12, 'Danny Testing Edited', 'danny@test.com', NULL, '12345678', NULL, '2020-05-05 09:57:41', '2020-05-05 09:59:17', 'users/default.png', 2, NULL),
	(13, 'Dublin Test', 'test@testout.com', NULL, '$2y$10$JR3ggk5HAPgkpC0GSosQyedfyHLYUFpVEZsraYjGxVaJlYraGw8Pe', NULL, '2020-05-05 13:05:46', '2020-05-05 13:05:46', 'users/default.png', 2, NULL),
	(14, 'dubby test', 'tester@test.com', NULL, '$2y$10$Zk2qJSVvfmTLAgo9CyDiUe2ATjjck3otize.5gv.mcMLswsF7D1CW', NULL, '2020-05-05 13:36:32', '2020-05-05 13:36:33', 'users/default.png', 2, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle studentroom.user_roles
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  KEY `user_roles_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle studentroom.user_roles: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
