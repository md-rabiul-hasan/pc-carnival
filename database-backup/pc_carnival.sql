-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 05:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_carnival`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Intel', 'intel', NULL, NULL, '2023-06-13 09:33:31', '2023-06-13 09:33:31'),
(2, 'AMD', 'amd', NULL, NULL, '2023-06-13 09:33:38', '2023-06-13 09:33:38'),
(3, 'COLORPUL', 'colorpul', NULL, NULL, '2023-06-14 08:15:02', '2023-06-14 08:15:02'),
(4, 'Lenevo', 'lenevo', NULL, NULL, '2023-06-14 11:59:47', '2023-06-14 11:59:47'),
(5, 'DeepCool', 'deepcool', NULL, NULL, '2023-06-19 20:38:36', '2023-06-19 20:38:36'),
(6, 'PNY', 'pny', NULL, NULL, '2023-06-19 20:41:47', '2023-06-19 20:41:47'),
(7, 'HP', 'hp', NULL, NULL, '2023-06-19 20:45:30', '2023-06-19 20:45:30'),
(8, 'Corsair', 'corsair', NULL, NULL, '2023-06-19 20:49:52', '2023-06-19 20:49:52'),
(9, 'Gamdias', 'gamdias', NULL, NULL, '2023-06-19 20:55:05', '2023-06-19 20:55:05'),
(10, 'Walton', 'walton', NULL, NULL, '2023-06-19 21:29:08', '2023-06-19 21:29:08'),
(11, 'kaspersky', 'kaspersky', NULL, NULL, '2023-06-19 21:32:17', '2023-06-19 21:32:17'),
(12, 'A4Tech', 'a4tech', NULL, NULL, '2023-06-19 21:36:30', '2023-06-19 21:36:30'),
(13, 'Micropack', 'micropack', NULL, NULL, '2023-06-19 21:42:34', '2023-06-19 21:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PC-Component', 'pc-component', NULL, '2023-06-13 09:34:23', '2023-06-13 09:34:23'),
(2, 'Laptop', 'laptop', NULL, '2023-06-14 11:59:35', '2023-06-14 11:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `home_page_adds`
--

CREATE TABLE `home_page_adds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_adds`
--

INSERT INTO `home_page_adds` (`id`, `key`, `title`, `banner`, `link`, `created_at`, `updated_at`) VALUES
(5, '1', 'Head Phone 2015', 'storage/home-page/adds/1687158980649000c48058f1.jpg', 'https://www.example.com', '2023-06-19 01:16:20', '2023-06-19 01:16:20'),
(6, '2', 'NQKIA Lumia 888 MANY COLORS', 'storage/home-page/adds/1687158980649000c48123d2.jpg', 'https://www.dummylink.com', '2023-06-19 01:16:20', '2023-06-19 01:16:20'),
(7, '3', 'HTC Many Colors', 'storage/home-page/adds/1687158980649000c481d763.jpg', 'https://www.testwebsite.com', '2023-06-19 01:16:20', '2023-06-19 01:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_products`
--

CREATE TABLE `home_page_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('LATEST','POPULAR','BEST') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_products`
--

INSERT INTO `home_page_products` (`id`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'LATEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(2, 1, 'LATEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(3, 7, 'LATEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(4, 5, 'LATEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(5, 2, 'LATEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(6, 2, 'POPULAR', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(7, 6, 'POPULAR', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(8, 7, 'POPULAR', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(9, 5, 'POPULAR', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(10, 1, 'POPULAR', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(11, 2, 'BEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(12, 6, 'BEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(13, 5, 'BEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(14, 7, 'BEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02'),
(15, 1, 'BEST', '2023-06-19 00:00:02', '2023-06-19 00:00:02');

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_01_15_055732_create_brands_table', 1),
(20, '2023_01_15_055739_create_categories_table', 1),
(21, '2023_01_15_055747_create_sub_categories_table', 1),
(22, '2023_01_15_055844_create_products_table', 1),
(23, '2023_01_15_055932_create_orders_table', 1),
(24, '2023_01_15_060002_create_order_items_table', 1),
(25, '2023_01_15_060013_create_questions_table', 1),
(26, '2023_01_15_060022_create_reviews_table', 1),
(27, '2023_05_31_171032_create_product_images_table', 1),
(28, '2023_06_11_174706_create_customers_table', 1),
(29, '2023_06_13_163705_create_related_products_table', 2),
(30, '2023_06_14_171058_create_home_page_products_table', 3),
(31, '2023_06_19_065124_create_home_page_adds_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_order` double(20,2) NOT NULL DEFAULT 0.00,
  `delivery_charge` double(10,2) NOT NULL DEFAULT 0.00,
  `total_bill` double(20,2) NOT NULL DEFAULT 0.00,
  `payment_mode` enum('cash_on_delivery') NOT NULL,
  `shipment_address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0: order pending, 1: order shipped, 2: order delivered, 3: order canceled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `total_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_code` varchar(255) NOT NULL,
  `buying_price` double(10,2) NOT NULL,
  `selling_price` double(10,2) NOT NULL,
  `current_price` double(10,2) NOT NULL,
  `discount_percentage` double(8,2) NOT NULL,
  `key_features` text NOT NULL,
  `specifications` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `questions` text DEFAULT NULL,
  `is_pc_build` tinyint(1) NOT NULL DEFAULT 0,
  `availability` enum('pre_order','in_stock','out_of_stock') NOT NULL DEFAULT 'in_stock',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `sub_category_id`, `title`, `slug`, `image`, `product_code`, `buying_price`, `selling_price`, `current_price`, `discount_percentage`, `key_features`, `specifications`, `description`, `questions`, `is_pc_build`, `availability`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'AMD Ryzen 3 4100 Processor', 'amd-ryzen-3-4100-processor', 'storage/product/168667392864889a089d2db1.jpg', '64889a089d5c2', 15000.00, 18000.00, 18000.00, 0.00, '<ul><li>Model: Ryzen 3 4100</li><li>Clock Speed: 3.8GHz; Up to 4.0GHz</li><li>L1 Cache: 256KB; L2 Cache: 2MB; L3 Cache: 4MB</li><li>4 Cores &amp; 8 Threads</li><li>CPU Socket: AM4</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Memory Specifications</strong></th></tr></thead><tbody><tr><td>Base Frequency</td><td>3.8GHz</td></tr><tr><td>Maximum Turbo Frequency</td><td>4.0GHz</td></tr><tr><td>Cache</td><td>L1 Cache: 256KB<br>L2 Cache: 2MB<br>L3 Cache: 4MB</td></tr><tr><td>Cores</td><td>4</td></tr><tr><td>Threads</td><td>8</td></tr><tr><td>Default TDP</td><td>65W</td></tr><tr><td>cTDP</td><td>46-65W</td></tr><tr><td>Supported Technologies</td><td>AMD SenseMI Technology<br>AMD Ryzen Master Utility<br>Enmotus FuzeDrive for AMD Ryzen<br>Radeon Software<br>Radeon FreeSync Technology<br>AMD StoreMI Technology<br>AMD \"Zen 2\" Core Architecture<br>AMD Ryzen VR-Ready Premium</td></tr><tr><td>Maximum Speed</td><td>3200MHz</td></tr><tr><td>Type</td><td>DDR4</td></tr><tr><td>Max Number of Channels</td><td>2</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Manufacturing Warranty</td><td>03 years (No Warranty for Fan or Cooler)</td></tr></tbody></table></figure>', '<h2><strong>AMD Ryzen 3 4100 Processor</strong></h2><p>AMD Ryzen 3 4100 Processor has 4 processor cores, 8 threads, and an astonishingly efficient 45-65W TDP. This processor stands with a Base Clock of 3.8GHz and a Maximum Boost Clock of 4.0GHz. It has 256KB L1 Cache. 2MB L2 Cache, 4MB L3 Cache with AM4 Package, and TSMC 7nm FinFET CMOS. This AMD processor is built with PCIe 3.0 x8 and Wraith Spire Thermal Solution. This Processor provides DDR4 Up to 3200MHz memory with 2 memory channels. It has AMD StoreMI Technology, AMD \"Zen 2\" Core Architecture, and AMD Ryzen VR-Ready Premium. The built-in AMD StoreMI Technology is a fast and easy way to expand and accelerate the storage in a desktop PC with an AMD Ryzen processor. AMD StoreMI technology is a powerful tool for PC enthusiasts that want to improve load times, boot times, file management, or system responsiveness. Whatever your storage acceleration needs, AMD StoreMI technology automatically pairs your most-used files with an SSD cache for peak performance. AMD StoreMI technology can get files running at SSD-like speeds. Simply add an SSD to your system and let StoreMI do the rest. It also features the AMD Ryzen VR-Ready Premium for the best possible VR experiences. It comes with Wraith Stealth Cooling Solution. These AMD Ryzen processors are designed to bring you the ultimate, high-performance computing experience. The latest revolutionary AMD multi-threaded processing technology gives you blazing fast performance when you work or play. This AMD Processor. Support AMD Socket AM4 Socket With AMD SenseMI technology and Powerful Overclocking Utility for AMD Ryzen processor. AMD Ryzen 3 4100 Processor offers a 3-years warranty(No Warranty for Fan or Cooler)</p><h2><strong>What is the price of AMD Ryzen 3 4100 Processor in Bangladesh?</strong></h2><p>The latest price of AMD Ryzen 3 4100 Processor in Bangladesh is 10,300৳. You can buy the AMD Ryzen 3 4100 Processor at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'in_stock', NULL, '2023-06-13 10:32:08', '2023-06-13 10:32:08'),
(2, 1, 1, 3, 'ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard', 'asrock-h81m-vg4-r40-4th-gen-micro-atx-motherboard', 'storage/product/16866819556488b96396a2d2.jpg', '6488b96396e30', 10000.00, 12000.00, 11400.00, 5.00, '<ul><li>Model: H81M-VG4 R4.0</li><li>Supports 4th Generation Intel Core Processors (Socket 1150)</li><li>Supports Dual Channel DDR3 1600</li><li>1 PCIe 2.0 x16, 1 PCIe 2.0 x1</li><li>Graphic Output: D-Sub</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Basic Information</strong></th></tr></thead><tbody><tr><td>Supported CPU</td><td>Supports New 4th and 4th Generation Intel Core i7/i5/i3/Xeon/Pentium/Celeron Processors (Socket 1150)<br>Supports Intel Turbo Boost 2.0 Technology</td></tr><tr><td>Chipset</td><td>Intel H81</td></tr><tr><td>BIOS</td><td>32Mb AMI UEFI Legal BIOS with multilingual GUI support<br>ACPI 1.1 Compliant wake up events<br>SMBIOS 2.3.1 support<br>CPU, DRAM Voltage multi-adjustment</td></tr><tr><td>Form Factor</td><td>Micro ATX Form Factor: 7.5-in x 6.7-in, 19.1 cm x 17.0 cm<br>Solid Capacitor design</td></tr><tr><td>Audio</td><td>7.1 CH HD Audio (Realtek ALC887/897 Audio Codec)<br>Supports Surge Protection</td></tr><tr><td colspan=\"2\"><strong>Expansion Slots</strong></td></tr><tr><td>PCI</td><td>1 x PCI Express 2.0 x16 Slot (PCIE2: x16 mode)<br>1 x PCI Express 2.0 x1 Slot</td></tr><tr><td colspan=\"2\"><strong>Memory</strong></td></tr><tr><td>Type</td><td>Dual Channel DDR3/DDR3L Memory Technology</td></tr><tr><td>Slots</td><td>2 x DDR3/DDR3L DIMM Slots</td></tr><tr><td>Supported Memory</td><td>Supports DDR3/DDR3L 1600 / 1333/1066 non-ECC, un-buffered memory</td></tr><tr><td>Maximum Memory</td><td>16GB</td></tr><tr><td colspan=\"2\"><strong>Graphics</strong></td></tr><tr><td>Graphics</td><td>Supports Intel HD Graphics Built-in Visuals : Intel Quick Sync Video with AVC, MVC (S3D) and MPEG-2 Full HW Encode1, Intel InTru 3D, Intel Clear Video HD Technology, Intel Insider, Intel HD Graphics 4400/4600<br>Pixel Shader 5.0, DirectX 11.1<br>Supports D-Sub with max. resolution up to 1920x1200 @ 60Hz</td></tr><tr><td>Max Shared Memory</td><td>1024MB</td></tr><tr><td colspan=\"2\"><strong>Connector &amp; Ports</strong></td></tr><tr><td>D-Sub (s)</td><td>1 x D-Sub Port</td></tr><tr><td>USB (s)</td><td>2 x USB 2.0 Ports (Supports ESD Protection)<br>2 x USB 3.2 Gen1 Ports (Supports ESD Protection)</td></tr><tr><td>LAN Port (s)</td><td>PCIE x1 Gigabit LAN 10/100/1000 Mb/s<br>Realtek RTL8111H<br>Supports Wake-On-LAN<br>Supports Lightning/ESD Protection<br>Supports Energy Efficient Ethernet 802.3az<br>Supports PXE</td></tr><tr><td>Supported Storage</td><td>2 x SATA3 6.0 Gb/s Connectors, support NCQ, AHCI and Hot Plug<br>2 x SATA2 3.0 Gb/s Connectors, support NCQ, AHCI and Hot Plug</td></tr><tr><td>Audio</td><td>HD Audio Jack: Line in / Front Speaker / Microphone</td></tr><tr><td>Internal I/O Ports</td><td>1 x Chassis Intrusion and Speaker Header<br>1 x CPU Fan Connector (4-pin)<br>1 x Chassis Fan Connector (4-pin)<br>1 x 24 pin ATX Power Connector<br>1 x 4 pin 12V Power Connector<br>1 x Front Panel Audio Connector<br>2 x USB 2.0 Headers (Support 4 USB 2.0 ports) (Supports ESD Protection)</td></tr><tr><td>TPM (Trusted Platform Module )</td><td>1 x TPM Header<br>1 x SPI TPM Header</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Manufacturing Warranty</td><td>3 years</td></tr></tbody></table></figure>', '<h2><strong>Description</strong></h2><h3><strong>ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard</strong></h3><p>The ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard supports Intel 4th Generation Intel Core Processors (Socket 1150) and Dual Channel DDR3 1600. The Motherboard comes with 1 PCIe 2.0 x16, 1 PCIe 2.0 x1. It features a D-Sub port for graphic output. It is built with a High-Density Glass Fabric PCB design that reduces the gaps between the PCB layers to protect the motherboard against electrical shorts caused by humidity. This ASRock motherboard uses a Realtek gigabit LAN chip to support extremely fast internet connections. The ASRock H81M-VG4 R4.0 features a solid capacitor design. The motherboard offers full spike protection. It includes various technologies to prevent your motherboard’s components from being damaged by these unexpected voltage spikes. It also comes with ASRock Live Update &amp; APP Shop. The ASRock H81M-VG4 R4.0 comes with 3 years of warranty.<br>&nbsp;</p><h2><strong>What is the price of ASRock H81M-VG4 R4.0 4th Gen Motherboard in Bangladesh?</strong></h2><p>The latest price of ASRock H81M-VG4 R4.0 4th Gen Motherboard in Bangladesh is 8,000৳. You can buy the ASRock H81M-VG4 R4.0 4th Gen Motherboard at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'pre_order', NULL, '2023-06-13 12:45:55', '2023-06-13 12:45:55'),
(5, 3, 1, 4, 'Colorful GeForce GT1030 4G-V 4GB Graphics Card', 'colorful-geforce-gt1030-4g-v-4gb-graphics-card', 'storage/product/16867526526489cd8c645a911.jpg', '6489cd8c6499e', 50000.00, 55000.00, 55000.00, 0.00, '<ul><li>MPN: 212327101809</li><li>Model: GT1030 4G-V</li><li>Powered by GeForce GT1030</li><li>Integrated with 4GB DDR4 64-bit</li><li>CUDA Cores: 384</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Video Memory Specifications</strong></th></tr></thead><tbody><tr><td>Type</td><td>GDDR4</td></tr><tr><td>Size</td><td>4GB</td></tr><tr><td>Resolution</td><td>3840 x 2160</td></tr><tr><td>Core Clock</td><td>1152Mhz</td></tr><tr><td>Memory Clock</td><td>6000Mhz</td></tr><tr><td>BUS Type</td><td>64bit</td></tr><tr><td>CUDA Cores</td><td>384</td></tr><tr><td colspan=\"2\"><strong>Interface</strong></td></tr><tr><td>HDMI</td><td>HDMI x 1</td></tr><tr><td colspan=\"2\"><strong>Power Specifications</strong></td></tr><tr><td>Recommended PSU</td><td>300 W</td></tr><tr><td>Consumption</td><td>30 W</td></tr><tr><td colspan=\"2\"><strong>Application Programming Interfaces</strong></td></tr><tr><td>DirectX</td><td>12</td></tr><tr><td>OpenGL</td><td>4.5</td></tr><tr><td colspan=\"2\"><strong>Physical Specifications</strong></td></tr><tr><td>Dimensions</td><td>167*120*26mm</td></tr><tr><td colspan=\"2\"><strong>Warranty</strong></td></tr><tr><td>Manufacturing Warranty</td><td>2 Years</td></tr></tbody></table></figure>', '<h2><strong>Description</strong></h2><h2><strong>Colorful GeForce GT1030 4G-V 4GB Graphics Card</strong></h2><p>The Colorful GeForce GT1030 4G-V 4GB Graphics Card is based on the recently announced GeForce GT 1030, which has 384 CUDA cores, a 64-bit memory bus, and a 30W power draw that requires no external power connectors. Colorful set the core clock of its GT 1030 at 1,277MHz and the boost clock at 1,468MHz. The card is equipped with 4GB of DDR4 memory clocked at 6,008MHz.The company boasts an all-solid-state capacitor power delivery design that Colorful stated delivers higher stability and reliability. The custom cooling solution features a black and red plastic shroud mated to an aluminum heatsink and a 90mm cooling fan. The additional cooling enables higher boost clock speeds and overclocking headroom.</p><h2><strong>Buy Colorful GeForce GT1030 4G-V 4GB Graphics Card from the best Graphics Card Shop in Bangladesh: Star Tech</strong></h2><p>In Bangladesh, you can get original <a href=\"https://www.startech.com.bd/colorful-geforce-gt1030-4g-v-graphics-card\">Colorful GeForce GT1030 4G-V 4GB Graphics Card</a> From Star Tech. We have a large collection of the latest <a href=\"https://www.startech.com.bd/colorful-graphics-card\">Colorful Graphics Card</a> to purchase for your <a href=\"https://www.startech.com.bd/desktops\">Desktop PC</a>. Order Online Or Visit your Nearest <a href=\"https://www.startech.com.bd/\">Star Tech</a> Shop to get yours at lowest price. The Colorful GeForce GT1030 4G-V 4GB Graphics Card comes with 2 years warranty.</p><h2><strong>What is the price of Colorful GeForce GT1030 4G-V Graphics Card in Bangladesh?</strong></h2><p>The latest price of Colorful GeForce GT1030 4G-V Graphics Card in Bangladesh is 10,000৳. You can buy the Colorful GeForce GT1030 4G-V Graphics Card at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'out_of_stock', NULL, '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(6, 4, 2, 5, 'Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 500GB SSD 14\" FHD Laptop with DDR5 RAM', 'lenovo-ideapad-1-14amn7-amd-ryzen-5-500gb-ssd-14-fhd-laptop-with-ddr5-ram', 'storage/product/1686765751648a00b7663c71.webp', '648a00b76693e', 55000.00, 62000.00, 62000.00, 0.00, '<ul><li>Model: IdeaPad 1 14AMN7</li><li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li><li>RAM: 8GB DDR5 5500MHz, Storage: 500GB M.2 NVMe SSD</li><li>Display: 14\" FHD (1920X1080)</li><li>Features: Type-C, Privacy Shutter</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Processor</strong></th></tr></thead><tbody><tr><td>Processor Brand</td><td>AMD</td></tr><tr><td>Processor Model</td><td>Ryzen 5 7520U</td></tr><tr><td>Processor Frequency</td><td>2.8 GHz – 4.3 GHz</td></tr><tr><td>Processor Core</td><td>4</td></tr><tr><td>Processor Thread</td><td>8</td></tr><tr><td>CPU Cache</td><td>L1 Cache: 256KB<br>L2 Cache: 2MB<br>L3 Cache: 4MB</td></tr><tr><td colspan=\"2\"><strong>Display</strong></td></tr><tr><td>Display Size</td><td>14\"</td></tr><tr><td>Display Type</td><td>TN</td></tr><tr><td>Display Resolution</td><td>FHD (1920 x 1080)</td></tr><tr><td>Touch Screen</td><td>N/A</td></tr><tr><td>Display Features</td><td>220nits Anti-glare; 170° Viewing Angle</td></tr><tr><td colspan=\"2\"><strong>Memory</strong></td></tr><tr><td>RAM</td><td>8GB (On Board)</td></tr><tr><td>RAM Type</td><td>DDR5</td></tr><tr><td>Removable</td><td>No</td></tr><tr><td>Bus Speed</td><td>5500MHz</td></tr><tr><td>Total RAM Slot</td><td>1</td></tr><tr><td colspan=\"2\"><strong>Storage</strong></td></tr><tr><td>Storage Type</td><td>NVMe PCIe SSD</td></tr><tr><td>Storage Capacity</td><td>500GB</td></tr><tr><td>Extra M.2 Slot</td><td>N/A</td></tr><tr><td>Supported SSD Type</td><td>PCIe NVMe M.2</td></tr><tr><td>Storage Upgrade</td><td>Installed SSD can be upgradeable</td></tr><tr><td colspan=\"2\"><strong>Graphics</strong></td></tr><tr><td>Graphics Model</td><td>AMD Radeon 610M</td></tr><tr><td>Graphics Memory</td><td>Shared</td></tr><tr><td colspan=\"2\"><strong>Keyboard &amp; TouchPad</strong></td></tr><tr><td>Keyboard Type</td><td>Standard</td></tr><tr><td>TouchPad</td><td>Yes</td></tr><tr><td colspan=\"2\"><strong>Camera &amp; Audio</strong></td></tr><tr><td>WebCam</td><td>Yes</td></tr><tr><td>Speaker</td><td>Yes</td></tr><tr><td>Microphone</td><td>Yes</td></tr><tr><td colspan=\"2\"><strong>Ports &amp; Slots</strong></td></tr><tr><td>Optical Drive</td><td>N/A</td></tr><tr><td>Card Reader</td><td>SD Media Card Reader</td></tr><tr><td>HDMI Port</td><td>1x HDMI 1.4b</td></tr><tr><td>USB 2 Port</td><td>1x USB 2.0 Type-A</td></tr><tr><td>USB 3 Port</td><td>1x USB 3.2 Gen 1 Type-A</td></tr><tr><td>USB Type-C / Thunderbolt Port</td><td>1x USB-C 3.2 Gen 1 (support data transfer only)</td></tr><tr><td>Headphone &amp; Microphone Port</td><td>1 x Headphone/ Microphone Port Combo</td></tr><tr><td colspan=\"2\"><strong>Network &amp; Connectivity</strong></td></tr><tr><td>WiFi</td><td>11ax, 2x2</td></tr><tr><td>Bluetooth</td><td>Bluetooth 5.0</td></tr><tr><td colspan=\"2\"><strong>Security</strong></td></tr><tr><td>Fingerprint Sensor</td><td>No</td></tr><tr><td colspan=\"2\"><strong>Software</strong></td></tr><tr><td>Operating System</td><td>Free Dos</td></tr><tr><td colspan=\"2\"><strong>Power</strong></td></tr><tr><td>Battery Type</td><td>3 Cell Li-ion</td></tr><tr><td>Battery Capacity</td><td>42Whr</td></tr><tr><td>Adapter Type</td><td>65W Round Tip (3-pin)</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Color</td><td>Cloud Grey</td></tr><tr><td>Dimensions</td><td>325.3 x 216.5 x 17.9 mm</td></tr><tr><td>Weight</td><td>1.38 kg</td></tr><tr><td colspan=\"2\"><strong>Warranty</strong></td></tr><tr><td>Warranty Details</td><td>2 years warranty ( Battery adapter 1 year)</td></tr></tbody></table></figure>', '<h2><strong>Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 500GB SSD 14\" FHD Laptop with DDR5 RAM</strong></h2><p>The Lenovo IdeaPad 1 14AMN7 is a stylish and powerful laptop that offers high-performance computing for a variety of jobs. This laptop can perform complex programs with ease thanks to an AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz). The processor has four cores and eight threads, allowing you to multitask effectively and effortlessly. This laptop has 8GB DDR5-5500 Memory, which offers smooth performance even while running many apps at the same time. The 500GB SSD PCIe offers plenty of storage capacity for your data, documents, and multimedia files. SSD technology enables rapid boot-up and load times, allowing you to complete your tasks quickly. The AMD Radeon 610M graphics provides exceptional graphics performance, making this laptop suitable for gaming and video editing. The 14-inch FHD (1920x1080) display provides clear and sharp graphics, letting you view high-quality entertainment without pixelation or blurring. This Lenovo IdeaPad 1 14AMN7 is a powerful and flexible laptop that can meet a variety of computing demands. Whether you\'re a student, professional, or gamer, this laptop is a dependable option that can manage your workload with ease.</p><h2><strong>Buy Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 500GB SSD 14\" FHD Laptop with DDR5 RAM&nbsp;from the best Computer Shop in BD</strong></h2><p>In Bangladesh, you can get the original&nbsp;<a href=\"https://www.startech.com.bd/lenovo-ideapad-1-14amn7-amd-ryzen-5-laptop\">Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 500GB SSD 14\" FHD Laptop with DDR5 RAM</a>&nbsp;from Star Tech. We have a large collection of the latest&nbsp;Lenovo&nbsp;<a href=\"https://www.startech.com.bd/laptop-notebook/laptop\">Laptops&nbsp;</a>to purchase. Order Online Or Visit your Nearest&nbsp;<a href=\"https://www.startech.com.bd/\">Star Tech Shop</a>&nbsp;to get yours at the lowest price. The Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 14\" FHD Laptop&nbsp;comes with &nbsp;2 years warranty ( Battery adapter 1 year).</p>', NULL, 0, 'in_stock', NULL, '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(7, 4, 2, 5, 'Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop', 'lenovo-ideapad-3-14aba7-ryzen-5-5625u-14-fhd-laptop', 'storage/product/1686765929648a0169adf1e1.webp', '648a0169ae239', 100000.00, 105000.00, 105000.00, 0.00, '<ul><li>MPN: 82RM006EIN</li><li>Model: IdeaPad 3 14ABA7</li><li>Processor: AMD Ryzen 5 5625U (16MB L3 Cache, 2.3GHz, up to 4.3GHz)</li><li>RAM: 8GB 3200MHZ RAM, SSD: 256GB NVMe PCIe</li><li>Display: 14\" FHD (1920x1080)</li><li>Features: Type-C, Privacy Shutter</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Processor</strong></th></tr></thead><tbody><tr><td>Processor Brand</td><td>AMD</td></tr><tr><td>Processor Model</td><td>Ryzen 5 5625U</td></tr><tr><td>Processor Frequency</td><td>2.3GHz, up to 4.3GHz</td></tr><tr><td>Processor Core</td><td>6</td></tr><tr><td>Processor Thread</td><td>12</td></tr><tr><td>CPU Cache</td><td>16MB</td></tr><tr><td colspan=\"2\"><strong>Display</strong></td></tr><tr><td>Display Type</td><td>14\"</td></tr><tr><td>Display Resolution</td><td>FHD (1920x1080)</td></tr><tr><td>Display Features</td><td>TN 250nits Anti-glare</td></tr><tr><td colspan=\"2\"><strong>Memory</strong></td></tr><tr><td>RAM</td><td>8GB</td></tr><tr><td>RAM Type</td><td>LPDDR4x</td></tr><tr><td>Bus Speed</td><td>3200MHZ</td></tr><tr><td>Total RAM Slot</td><td>2</td></tr><tr><td>Max RAM Capacity</td><td>Up to 16GB (8GB soldered + 8GB SO-DIMM) DDR4-3200</td></tr><tr><td colspan=\"2\"><strong>Storage</strong></td></tr><tr><td>Storage Type</td><td>PCIe NVMe 3.0 x2 M.2 SSD</td></tr><tr><td>Storage Capacity</td><td>256GB</td></tr><tr><td>Extra M.2 Slot</td><td>Yes</td></tr><tr><td>Storage Upgrade</td><td>M.2 2242 SSD up to 1TB<br>M.2 2280 SSD up to 1TB</td></tr><tr><td colspan=\"2\"><strong>Graphics</strong></td></tr><tr><td>Graphics Model</td><td>AMD Radeon</td></tr><tr><td>Graphics Memory</td><td>Shared</td></tr><tr><td>Graphics Type</td><td>Integrated</td></tr><tr><td colspan=\"2\"><strong>Keyboard &amp; TouchPad</strong></td></tr><tr><td>Keyboard Type</td><td>Non-backlit, English (EU)</td></tr><tr><td colspan=\"2\"><strong>Camera &amp; Audio</strong></td></tr><tr><td>WebCam</td><td>HD 720p</td></tr><tr><td>Speaker</td><td>Yes</td></tr><tr><td>Microphone</td><td>2x, Array</td></tr><tr><td>Audio Features</td><td>High Definition (HD) Audio, Stereo speakers, 1.5W x2, Dolby Audio<br>&nbsp;</td></tr><tr><td colspan=\"2\"><strong>Ports &amp; Slots</strong></td></tr><tr><td>Card Reader</td><td>4-in-1 Card Reader</td></tr><tr><td>HDMI Port</td><td>1x HDMI 1.4b</td></tr><tr><td>USB 2 Port</td><td>1x USB 2.0</td></tr><tr><td>USB 3 Port</td><td>1x USB 3.2 Gen 1<br>&nbsp;</td></tr><tr><td>USB Type-C / Thunderbolt Port</td><td>1x USB-C 3.2 Gen 1 (support data transfer, Power Delivery 3.0, and DisplayPort 1.2)</td></tr><tr><td>Headphone &amp; Microphone Port</td><td>1x Headphone/microphone combo jack (3.5mm)</td></tr><tr><td colspan=\"2\"><strong>Network &amp; Connectivity</strong></td></tr><tr><td>WiFi</td><td>Wi-Fi® 6, 11ax 2x2</td></tr><tr><td>Bluetooth</td><td>BT5.1</td></tr><tr><td colspan=\"2\"><strong>Security</strong></td></tr><tr><td>Fingerprint Sensor</td><td>N/A</td></tr><tr><td>Camera Privacy Shutter</td><td>Camera privacy shutter</td></tr><tr><td>Security Chip</td><td>Firmware TPM 2.0</td></tr><tr><td colspan=\"2\"><strong>Software</strong></td></tr><tr><td>Operating System</td><td>Free Dos</td></tr><tr><td colspan=\"2\"><strong>Power</strong></td></tr><tr><td>Battery Type</td><td>Integrated</td></tr><tr><td>Battery Capacity</td><td>45Wh</td></tr><tr><td>Adapter Type</td><td>65W Round Tip (3-pin)</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Color</td><td>Arctic Grey</td></tr><tr><td>Dimensions</td><td>324.2 x 215.7 x 19.9 mm (12.76 x 8.49 x 0.78 inches)</td></tr><tr><td>Weight</td><td>1.43 kg (3.15 lbs)</td></tr><tr><td>Body Material</td><td>PC-ABS (Top), PC-ABS (Bottom)</td></tr><tr><td colspan=\"2\"><strong>Warranty</strong></td></tr><tr><td>Warranty Details</td><td>02 years Limited Warranty (Terms &amp; Conditions Apply As Per Lenovo)</td></tr></tbody></table></figure>', '<h2><strong>Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop</strong></h2><p>The Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U is a high-performance <a href=\"https://www.startech.com.bd/laptop-notebook/laptop\">laptop</a> with an AMD Ryzen 5 5625U processor, which has a 16MB L3 cache and runs at 2.3GHz, with a maximum clock speed of 4.3GHz. It comes with 8GB of RAM that runs at 3200MHz and a 256GB NVMe PCIe SSD, which offers fast read and write speeds. The laptop features a 14\" FHD (1920x1080) TN display with 250nits brightness and an anti-glare coating that reduces glare and reflections. It has integrated AMD Radeon Graphics, which offers smooth graphics performance for video editing, gaming, and other intensive tasks. The Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U comes with various connectivity options, including a Type-C port, a privacy shutter, 1x USB 2.0, 1x USB 3.2 Gen 1, 1x USB-C 3.2 Gen 1, 1x HDMI 1.4b, 1x card reader, and a headphone/microphone combo jack (3.5mm). The USB-C port supports data transfer, Power Delivery 3.0, and DisplayPort 1.2, making it easy to connect to external displays or charge the laptop. The Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U is a powerful laptop that offers fast performance, smooth graphics, and a range of connectivity options, making it ideal for both personal and professional use.</p><h2><strong>Buy Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop from the best Computer Shop in BD</strong></h2><p>In Bangladesh, you can get the original&nbsp;<a href=\"https://www.startech.com.bd/lenovo-ideapad-3-14aba7-ryzen-5-5625u-fhd-laptop\">Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop</a>&nbsp;from Star Tech. We have a large collection of the latest&nbsp;<a href=\"https://www.startech.com.bd/laptop-notebook/laptop/lenovo-laptop\">Lenovo&nbsp;Laptops</a>&nbsp;to purchase. Order Online Or Visit your Nearest&nbsp;<a href=\"https://www.startech.com.bd/\">Star Tech Shop</a>&nbsp;to get yours at the lowest price. The Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop&nbsp;comes with&nbsp; 02 years Limited Warranty (Terms &amp; Conditions Apply As Per Lenovo).</p>', NULL, 0, 'in_stock', NULL, '2023-06-14 12:05:29', '2023-06-14 12:05:29'),
(8, 1, 1, 1, 'Intel 12th Gen Core i5-12500 Alder Lake Processor', 'intel-12th-gen-core-i5-12500-alder-lake-processor', 'storage/product/16872284296491100d17f661.jpg', '6491100d18284', 20000.00, 25000.00, 25000.00, 0.00, '<ul><li>Model: Core i5-12500</li><li>Clock Speed: 3.00 GHz Up to 4.60 GHz</li><li>Cache: 18 MB, Socket: LGA 1700</li><li>CPU Cores: 6, CPU Threads: 12</li><li>Graphics: Intel UHD Graphics 770</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Basic Information</strong></th></tr></thead><tbody><tr><td>Base Frequency</td><td>3.00 GHz</td></tr><tr><td>Maximum Turbo Frequency</td><td>4.60 GHz</td></tr><tr><td>Cache</td><td>18 MB Intel Smart Cache</td></tr><tr><td>Cores</td><td>6</td></tr><tr><td>Threads</td><td>12</td></tr><tr><td>Default TDP</td><td>65W</td></tr><tr><td colspan=\"2\"><strong>Memory Specifications</strong></td></tr><tr><td>Maximum Size</td><td>128 GB</td></tr><tr><td>Maximum Speed</td><td>76.8 GB/s</td></tr><tr><td>Type</td><td>Up to DDR5 4800 MT/s<br>Up to DDR4 3200 MT/s</td></tr><tr><td>Max Number of Channels</td><td>2</td></tr><tr><td colspan=\"2\"><strong>Graphics Specifications</strong></td></tr><tr><td>Processor Graphics</td><td>Intel UHD Graphics 770</td></tr><tr><td>Base Frequency</td><td>300 MHz</td></tr><tr><td>Max Dynamic Frequency</td><td>1.45 GHz</td></tr><tr><td>Max Resolution</td><td>HDMI: 4096 x 2160 @ 60Hz<br>DP: 7680 x 4320 @ 60Hz<br>eDP - Integrated Flat Panel: 5120 x 3200 @ 120Hz</td></tr><tr><td>Core Count</td><td>32</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Manufacturing Warranty</td><td>03 years warranty (No Warranty for Fan or Cooler)</td></tr></tbody></table></figure>', '<h2><strong>Intel 12th Gen Core i5-12500 Alder Lake Processor</strong></h2><p>The latest Intel Core i5-12500 processor comes with 6 cores and 12 threads. It has a base frequency of 3.00 GHz and a maximum boost frequency of up to 4.60 GHz. The i5-12500 Alder Lake Processor comes with an 18 MB Intel Smart Cache and 7.5 MB of total L2 Cache. TDP values are maintained at 65 W. The Intel Core i5-12500 is supported with LGA1700 Sockets and the size of the CPU is 45.0 mm x 37.5 mm.</p><h3><strong>Core Benefits of the Processor</strong></h3><p>The Intel Core i5-12500 Alder Lake CPU supports both DDR5 and DDR4 memory controllers. High-end motherboards will retain DDR5 while the more mainstream offerings will open up DDR4 support too. It supports up to DDR5 4800 MT/s and up to DDR4 3200 MT/s. The max number of memory channels is 2 and they support 128 GB of maximum memory size in total. It features maximum bandwidth of 76.8 GB/s. The Processor also comes with Intel UHD Graphics 770 graphics that has a base frequency of 300 MHz and 1.45 GHz of maximum dynamic frequency. It supports eDP 1.4b, DP 1.4a, HDMI 2.1 graphics output options.</p><p>The latest Intel 12th Gen Core i5-12500 comes with 03 years warranty (No Warranty for Fan or Cooler).</p><h2><strong>What is the price of Intel 12th Gen Core i5-12500 Processor in Bangladesh?</strong></h2><p>The latest price of Intel 12th Gen Core i5-12500 Processor in Bangladesh is 25,500৳. You can buy the Intel 12th Gen Core i5-12500 Processor at best price from our website or visit any of our showrooms.</p>', '<h3><br><strong>Q:Will I get a fan/cooler if I buy this CPU ?</strong></h3><p><strong>A:</strong>Yes sir Intel 12th Gen Core i5-12500 Alder Lake Processor has a Stock Cooler included in the box</p>', 1, 'in_stock', NULL, '2023-06-19 20:33:49', '2023-06-19 20:33:49'),
(9, 5, 1, 6, 'DeepCool GAMMAXX 300R Red LED Air CPU Cooler', 'deepcool-gammaxx-300r-red-led-air-cpu-cooler', 'storage/product/1687228857649111b97c8ec1.webp', '649111b97f03b', 1300.00, 1500.00, 1500.00, 0.00, '<ul><li>MPN: DP-MCH3-GMX300RD</li><li>Model: GAMMAXX 300R</li><li>Fan Dimensions: Φ120X25mm</li><li>Fan Speed: 900~1600 RPM±10%</li><li>Connector: 4-pin PWM</li><li>Bearing Type: Hydro Bearing</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Key Features</strong></th></tr></thead><tbody><tr><td>Type</td><td>Hydro Bearing CPU Air Cooler</td></tr><tr><td>Fan Speed</td><td>900~1600 RPM±10%</td></tr><tr><td>Fan Airflow</td><td>55.5 CFM</td></tr><tr><td>Noise</td><td>≤21 dB(A)<br>&nbsp;</td></tr><tr><td>Air Pressure</td><td>2.03 mmAq</td></tr><tr><td>Connector</td><td>Fan Connector 4-pin PWM<br>&nbsp;</td></tr><tr><td>LED Number</td><td>Red LED</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Dimension</td><td>Fan Dimensions: Φ120X25mm<br>Product Dimensions: 121X75.5X135.7mm<br>Heatsink Dimensions: 110X57.2X130.56mm</td></tr><tr><td>Weight</td><td>433g</td></tr><tr><td colspan=\"2\"><strong>Supported Sockets</strong></td></tr><tr><td>Intel</td><td>LGA1200/1151/1150/1155/775</td></tr><tr><td>AMD</td><td>AM5/AM4</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Warranty</td><td>1 year warranty</td></tr></tbody></table></figure>', '<h2><strong>DeepCool GAMMAXX 300R Red LED Air CPU Cooler</strong></h2><p>The DeepCool GAMMAXX 300R has a second fan that may be connected to its turbine-shaped fan. It is one of the CPU coolers that are most frequently suggested for all common thermal CPU systems. The rapid heat dissipation performance of the Gammaxx 300 R is made possible by its CTT \"Core Touch Technology,\" making it a great choice for both gaming and personal use. Red LED fan with a semi-transparent blade that seems modded. Excellent Cooling Performance Three sintered powder heat pipes are in direct contact with the CPU surface and swiftly transfer heat from the processor to prevent overheating. This CPU cooler\'s 120x25mm fan with PWM feature provides the ideal mix of noise and airflow. Red LED fan with a semi-transparent blade that seems modded. It has a variety of clips to support AMD AM4/FM2/FM1/AM3+/AM3/AM2+/AM2/K8 and Intel LGA1366/115X/775. The DeepCool GAMMAXX 300R Red LED Air CPU Cooler comes with a 01-year warranty.</p><h2><strong>What is the price of DeepCool GAMMAXX 300R Red LED Air CPU Cooler in Bangladesh?</strong></h2><p>The latest price of DeepCool GAMMAXX 300R Red LED Air CPU Cooler in Bangladesh is 1,300৳. You can buy the DeepCool GAMMAXX 300R Red LED Air CPU Cooler at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'in_stock', NULL, '2023-06-19 20:40:57', '2023-06-19 20:40:57'),
(10, 6, 1, 2, 'PNY XLR8 8GB DDR4 3200MHz Desktop Gaming RAM', 'pny-xlr8-8gb-ddr4-3200mhz-desktop-gaming-ram', 'storage/product/16872290666491128a189f51.jpg', '6491128a18b7c', 2000.00, 2600.00, 2600.00, 0.00, '<ul><li>Model: PNY XLR8</li><li>Frequency Speed: 3200MHz (PC4-25600)</li><li>CAS Latency: CL16</li><li>Extreme Overclocking Capabilities</li><li>XMP 2.0 support</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Key Features</strong></th></tr></thead><tbody><tr><td>Type</td><td>Desktop DDR4 Gaming RAM<br>&nbsp;</td></tr><tr><td>Capacity</td><td>8GB</td></tr><tr><td>Frequency</td><td>3200MHz (PC4-25600)</td></tr><tr><td>Operating voltage</td><td>1.35V</td></tr><tr><td>Latency</td><td>CL16</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Warranty</td><td>Life time warranty</td></tr></tbody></table></figure>', '<h2><strong>PNY XLR8 8GB DDR4 3200MHz Desktop Gaming RAM</strong></h2><p>PNY XLR8 Desktop Gaming RAM comes with 6GB DDR4 3200MHz CL16 (PC4-25600) Frequency Speed. It\'s extreme performance pushes the limit with aggressive speed, low latency, and extreme overclocking capabilities. This New Gaming RAM is also support XMP 2.0 which is Super easy for overlocking and runs at top speed. In this RAM, It is engineered with heat spreaders to keep your device running cool for an ultra-real gaming experience. The PNY\'s premium XLR8 modules combine top-tier components and select ICs for aggressive speed, low latency, bullet-proof reliability, and the extreme overclocking capabilities that serious gamers demand. Overclocking is made easier with Intel XMP compatibility. And PNY\'s radically stylish XLR8 heat spreaders dispense with the heat of battle and look fierce doing it. This exclusive new PNY\'s premium XLR8 memory features our most aggressive speeds, highest bandwidth, lowest latency and power consumption, and most advanced thermal performance for maximum PC stability and responsiveness during memory-intensive gaming and application use and also It\'s modules are rigorously engineered and tested to ensure peak performance in even the most challenging gaming environments. This new PNY XLR8 Desktop Gaming RAM has Lifetime warranty.</p><h2><strong>What is the price of PNY XLR8 8GB DDR4 Desktop Gaming RAM in Bangladesh?</strong></h2><p>The latest price of PNY XLR8 8GB DDR4 Desktop Gaming RAM in Bangladesh is 2,600৳. You can buy the PNY XLR8 8GB DDR4 Desktop Gaming RAM at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'in_stock', NULL, '2023-06-19 20:44:26', '2023-06-19 20:44:26'),
(11, 7, 1, 7, 'HP EX900 M.2 120GB PCIe NVMe Internal SSD', 'hp-ex900-m2-120gb-pcie-nvme-internal-ssd', 'storage/product/168722933564911397eb5b71.jpg', '64911397eb722', 1500.00, 1800.00, 1800.00, 0.00, '<ul><li>Model: HP EX900</li><li>Capacity 120GB</li><li>PCIe 3.1 x4</li><li>3D TLC NAND</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Key Features</strong></th></tr></thead><tbody><tr><td>Capacity</td><td>120GB</td></tr><tr><td>Form Factor</td><td>M.2 2280</td></tr><tr><td>Flash Type</td><td>3D NAND</td></tr><tr><td>Interface</td><td>PCI-Express 3(8Gb/s) x4, NVMe 1.3</td></tr><tr><td>Sequential R/W</td><td>Max Sequential Read: Up to 1900 MBps<br>Max Sequential Write: Up to 650 MBps</td></tr><tr><td>MTBF</td><td>2,000,000 hours</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Dimension</td><td>22x80x2.4mm</td></tr><tr><td>Weight</td><td>1.92 ounces</td></tr><tr><td colspan=\"2\"><strong>Warranty</strong></td></tr><tr><td>Manufacturing Warranty</td><td>03 years</td></tr></tbody></table></figure>', '<p>Revolutionize large file handling and response times with HP PCIe NVME TLC 120GB SSD M.2 Drive, a remarkably affordable and innovative PCIe-based NVMe memory SSD storage solution.</p><p><strong>Streamline your workflows&nbsp;</strong>Tackle large files and reduce your work time from hours to minutes with a solid state drive powered by M.2 PCIe NVMe technology.</p><p><strong>Budget-conscious innovation</strong> Access affordable high performance with a triple layer (TLC) architecture that stacks three cell layers on top of one another.</p>', '<p><strong>Joyanta Banik</strong> on 26 Jun 2022</p><h3><strong>Q:This is how can i use my Gigabyte H110m motherbord and core i3 proccesor??</strong></h3><p><strong>A:</strong>Yes, dear sir, you can use this SSD with your designated Combo.</p><p><strong>Aahraf Uddin</strong> on 24 Apr 2022</p><h3><strong>Q:Will it be supported in HP 240 g7 notebook, processor i3-8130u?</strong></h3><p><strong>A:</strong>Yes Sir. HP EX900 M.2 120GB PCIe NVMe Internal SSD will support into HP 240 g7 notebook.</p><p><strong>Masud Rana</strong> on 15 Mar 2022</p><h3><strong>Q:Can I use it with Lenovo IdeaPad S145AMD Ryzen 5 3500U?</strong></h3><p><strong>A:</strong>Yes sir, you can use HP EX900 M.2 120GB PCIe NVMe Internal SSD with Lenovo IdeaPad S145AMD Ryzen 5 3500U.</p><p><strong>Sajol karmakar</strong> on 22 Feb 2022</p><h3><strong>Q:Can I use it with HP 15s-du3786TU Core i3 11th Gen 15.6\" FHD Laptop?</strong><br>&nbsp;</h3><p><strong>A:</strong>Yes sir, you can use HP EX900 M.2 120GB PCIe NVMe Internal SSD with HP 15s-du3786TU Core i3 11th Gen 15.6\" FHD Laptop</p><p><strong>Shawon Sagor</strong> on 18 Feb 2022</p><h3><strong>Q:Can I use this with Dell Inspiron 15 3583 4205U Laptop?</strong></h3><p><strong>A:</strong>Yes sir, you can use HP EX900 M.2 120GB PCIe NVMe Internal SSD with Dell Inspiron 15 3583 4205U Laptop.</p>', 1, 'in_stock', NULL, '2023-06-19 20:48:55', '2023-06-19 20:48:55'),
(12, 8, 1, 8, 'Corsair CV650 650Watt 80 Plus Bronze Certified Power Supply', 'corsair-cv650-650watt-80-plus-bronze-certified-power-supply', 'storage/product/16872295656491147d69a211.jpg', '6491147d69b97', 5000.00, 5600.00, 5600.00, 0.00, '<ul><li>Model: CV650 80 Plus Bronze Certified</li><li>80 PLUS Bronze certified</li><li>up to 88% efficiency, Compact design</li><li>Continuous, Reliable Output</li><li>Low-noise Operation, Stealth Mode</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Key Features</strong></th></tr></thead><tbody><tr><td>Continuous Power</td><td>650 Watts</td></tr><tr><td>Efficiency (Approx.)</td><td>80 PLUS Efficiency Bronze<br>&nbsp;</td></tr><tr><td>Certification</td><td>80 PLUS Bronze Certification<br>&nbsp;</td></tr><tr><td>Fan Size</td><td>120mm</td></tr><tr><td colspan=\"2\"><strong>Input</strong></td></tr><tr><td>Frequency Range</td><td>47~63Hz<br>&nbsp;</td></tr><tr><td>Current</td><td>Input Current: 10A-5A</td></tr><tr><td colspan=\"2\"><strong>Output</strong></td></tr><tr><td>Modular Type</td><td>Non-Moduler</td></tr><tr><td>Total Power</td><td>650 Watts</td></tr><tr><td>AC Input</td><td>100-240V<br>&nbsp;</td></tr><tr><td colspan=\"2\"><strong>Connector</strong></td></tr><tr><td>Main Power</td><td>ATX Connector x 1</td></tr><tr><td>PCI-E</td><td>2 x PCIe</td></tr><tr><td>SATA</td><td>7 x SATA</td></tr><tr><td>Floppy</td><td>Floppy Connector x 1<br>&nbsp;</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Manufacturing Warranty</td><td>05 Years Warranty</td></tr></tbody></table></figure>', '<h2><strong>Corsair CV650 650Watt 80 Plus Bronze Certified Power Supply</strong></h2><p>Corsair CV650 650Watt 80 Plus Bronze Certified PSU is efficiency guaranteed to continuously deliver full wattage to your system. This CV series PSU is 80 PLUS Bronze certified, providing up to 88% efficiency for less heat and lower energy costs and also it deliver continuous power at full capacity, no matter which wattage. This CV series is also featured with 1 ATX Connector, ATX12V Version v2.31, 30Â°C Continuous output rated temperature C, Sleeve Fan bearing technology, 120mm Fan size, 100,000 hours MTBF hours, ATX PSU Form Factor, v2.92 EPS12V Version, 1 Floppy Connector, 2 PCIe Connector and 7 SATA Connector. A 120mm thermally controlled low-noise cooling fan only spins at high speed. This Series PSU enclosures are only 125mm long, ensuring an easy fit in almost all modern PC cases. Here, the Black sleeved cables and a black powder-coated casing seamlessly. This latest Corsair CV650 comes with 05 years of warranty.</p><h2><strong>What is the price of Corsair CV650 80 Plus Bronze Certified Power Supply in Bangladesh?</strong></h2><p>The latest price of Corsair CV650 80 Plus Bronze Certified Power Supply in Bangladesh is 5,599৳. You can buy the Corsair CV650 80 Plus Bronze Certified Power Supply at best price from our website or visit any of our showrooms.</p>', '<p><strong>Md Sohrab</strong> on 23 May 2022</p><h3><strong>Q:Will it fit in Deepcool macube 110 ?</strong></h3><p><strong>A:</strong>Yes, Dear Sir, Corsair CV650 650Watt 80 Plus Bronze Certified Power Supply will fit your display just fine. Thank You</p>', 1, 'in_stock', NULL, '2023-06-19 20:52:45', '2023-06-19 20:52:45'),
(13, 9, 1, 9, 'Gamdias TALOS E3 Mid Tower ARGB Case', 'gamdias-talos-e3-mid-tower-argb-case', 'storage/product/16872298376491158d607d61.png', '6491158d60942', 3500.00, 3900.00, 3900.00, 0.00, '<ul><li>Model: TALOS E3</li><li>Case Type: MID Tower</li><li>Motherboard Support: ATX, Micro-ATX, Mini-ITX</li><li>Synchronization: 5V 3-Pin Addressable Header</li><li>Pre-installed Fans: Front: 2 / Rear: 1 ARGB Fan</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Case Type</strong></th></tr></thead><tbody><tr><td>Type</td><td>MID Tower<br>&nbsp;</td></tr><tr><td>Front Panel</td><td>Tempered Glass Panel<br>&nbsp;</td></tr><tr><td>Tempered Glass Panel</td><td>SPCC, ABS &amp; Tempered glass<br>&nbsp;</td></tr><tr><td>Motherboard Support</td><td>ATX, Micro-ATX, Mini-ITX</td></tr><tr><td colspan=\"2\"><strong>External Features</strong></td></tr><tr><td>Color(s)</td><td>Black</td></tr><tr><td>Material</td><td>SPCC &amp; ABS &amp; Tempered glass</td></tr><tr><td>Dimensions</td><td>363 x 210 x 447 mm<br>&nbsp;</td></tr><tr><td>Front Ports</td><td>USB 3.0 x1, USB 2.0 x2, HD Audio x1, Fan LED Control x1</td></tr><tr><td>Expansion Slots</td><td>7</td></tr><tr><td>Radiator Support</td><td>Top: 240mm / Front: 360mm (The removement of HDD cage is suggested)、280mm / Rear: 120mm</td></tr><tr><td>Fan Support</td><td>Top: 2 x 120mm / Front: 3 x 120mm、 2 x 140mm / Rear: 1 x 120mm / Bottom: 2 x 120mm</td></tr><tr><td>Pre- Installed Fans</td><td>Front: 2 x 120mm ARGB Fans<br>Rear: 1 x 120mm ARGB Fan</td></tr><tr><td>Drive Bays</td><td>2 x 3.5\" or 1 x 2.5\" + 1 x 3.5\" (HDD Cage) / 2 x 2.5\"</td></tr><tr><td>I/O Port</td><td>USB 3.0 x1<br>USB 2.0 x2<br>HD Audio x1<br>Fan LED Control x1<br>&nbsp;</td></tr><tr><td colspan=\"2\"><strong>Additional Feature</strong></td></tr><tr><td>PSU</td><td>PSU length limitation: 150mm<br>&nbsp;</td></tr><tr><td>Side Panel</td><td>Side Swing Magnetic Closing Tempered Glass Window<br>&nbsp;</td></tr><tr><td colspan=\"2\"><strong>Clearance Space</strong></td></tr><tr><td>Maximum CPU Cooler Height</td><td>160mm</td></tr><tr><td>Maximum Graphics Card Length</td><td>300mm</td></tr><tr><td>Maximum PSU Length</td><td>150mm</td></tr><tr><td colspan=\"2\"><strong>Warranty</strong></td></tr><tr><td>Warranty</td><td>no warranty</td></tr></tbody></table></figure>', '<h2><strong>Gamdias TALOS E3 Mid Tower ARGB Case</strong></h2><p>The TALOS E3 is a premium compact mid-tower case with a modern matte black outlook. Featuring 3 built-in 120mm ARGB fans, tempered glasses on both the front and side panel and a PSU cover design for a minimalist design. This case Sync with 5V ARGB Motherboard. The TALOS E3 case has Tempered Glass Panel and 3 Built-in 120mm ARGB Fans. Its Tool-Free Installation Tempered Glass Window and One Touch to Easily Switch RGB Streaming Lighting Style. This Supports Motherboards up to ATX. It has Power Cover Design and a Magnetic Dust Filter.</p><h3><strong>A Clean Outlook and PSU Shroud Design</strong></h3><p>The TALOS E3 case is equipped with 3 built-in 120mm ARGB fans displayed by tempered glass front and side panels. Building upon the inner beauty of the case, a vented power supply shroud at the bottom of the case surrounds the PSU and perfectly hides the cables.</p><h3><strong>One-Click. Sync All</strong></h3><p>The TALOS E3 supports ARGB connection to compatible motherboards to achieve system-wide lighting synchronization, making it easier to unite the case from chaos to calm. The Gamdias TALOS E3 Mid Tower ARGB Case has no warranty.</p><h2><strong>What is the price of Gamdias TALOS E3 Mid Tower ARGB Case in Bangladesh?</strong></h2><p>The latest price of Gamdias TALOS E3 Mid Tower ARGB Case in Bangladesh is 3,975৳. You can buy the Gamdias TALOS E3 Mid Tower ARGB Case at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'in_stock', NULL, '2023-06-19 20:57:17', '2023-06-19 20:57:17'),
(14, 7, 1, 10, 'HP M22f 22\" FHD IPS Monitor', 'hp-m22f-22-fhd-ips-monitor', 'storage/product/168723147964911bf7e2c371.jpg', '64911bf7e4f9f', 15000.00, 16000.00, 16000.00, 0.00, '<ul><li>MPN: 2D9J9AA</li><li>Model: M22f</li><li>Resolution: FHD (1920 x 1080)</li><li>Display: IPS, 75Hz, 5ms</li><li>Ports: HDMI, VGA</li><li>Features: Free Sync, Low Blue Light, Anti-glare</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Display Features</strong></th></tr></thead><tbody><tr><td>Display Size</td><td>21.5 Inch</td></tr><tr><td>Display Type</td><td>FHD LED</td></tr><tr><td>Panel Type</td><td>IPS</td></tr><tr><td>Resolution</td><td>FHD (1920 x 1080)</td></tr><tr><td>Pixel pitch(MM)</td><td>0.248 mm</td></tr><tr><td>Display Surface</td><td>Anti-glare</td></tr><tr><td>Aspect Ratio</td><td>16:9<br>&nbsp;</td></tr><tr><td>Viewing Angle</td><td>178 degrees ultra-wide viewing angles</td></tr><tr><td>Brightness</td><td>300 nits<br>&nbsp;</td></tr><tr><td>Contrast Ratio</td><td>1000:1</td></tr><tr><td>Refresh Rate</td><td>75 Hz</td></tr><tr><td>Color Gamut</td><td>sRGB 99%</td></tr><tr><td>Response Time</td><td>5ms GtG (with overdrive)</td></tr><tr><td>Others Features</td><td>Resolutions Supported: 640 x 480; 720 x 400; 800 x 600; 1024 x 768; 1280 x 720; 1280 x 800; 1280 x 1024; 1440 x 900; 1600 x 900; 1680 x 1050; 1920 x 1080</td></tr><tr><td colspan=\"2\"><strong>Video Features</strong></td></tr><tr><td>Color Temperature Selection</td><td>5 to 35°C</td></tr><tr><td>Low Blue Light</td><td>Yes</td></tr><tr><td>Free Sync Support</td><td>Yes</td></tr><tr><td>HDCP</td><td>Yes</td></tr><tr><td colspan=\"2\"><strong>Audio Features</strong></td></tr><tr><td>Speaker Details</td><td>No</td></tr><tr><td colspan=\"2\"><strong>Connectivity</strong></td></tr><tr><td>VGA</td><td>1x VGA</td></tr><tr><td>HDMI</td><td>1x HDMI 1.4 (with HDCP support)</td></tr><tr><td colspan=\"2\"><strong>Mechanical Design</strong></td></tr><tr><td>Tilt</td><td>-5 to +25°<br>&nbsp;</td></tr><tr><td>Height Adjustment</td><td>No</td></tr><tr><td>Vesa Wall Mount</td><td>No</td></tr><tr><td>Security Locker</td><td>Yes</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Color</td><td>White</td></tr><tr><td>Dimension</td><td>Minimum dimensions (W x D x H): 48.55 x 3.18 x 28.72 cm<br>Dimensions With Stand (W x D x H): 48.55 x 17.72 x 31.8 cm</td></tr><tr><td>Weight</td><td>2.2 kg<br><br>&nbsp;</td></tr><tr><td colspan=\"2\"><strong>Power</strong></td></tr><tr><td>Type</td><td>External</td></tr><tr><td>Power Consumption</td><td>19 W (maximum), 13 W (typical), 0.5 W (standby)</td></tr><tr><td>Voltage</td><td>100 - 240 VAC 50/60 Hz<br>&nbsp;</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Warranty</td><td>3 years</td></tr></tbody></table></figure>', '<h2><strong>HP M22f 22\" FHD IPS Monitor</strong></h2><p>The HP M22f 22\" FHD IPS Monitor is based on IPS technology for 178 degrees ultra-wide viewing angles with 99% sRGB color gamut for color accuracy, and Freesync to keep your eyes up to speed with your imagination. You can increase viewing comfort with Eyesafe technology that doesn\'t sacrifice color quality. The HP M22f monitor has been designed with sustainability in mind with 85% recycled materials and packaged in recycled materials. You can streamline your setup with its slim profile, innovative cable containment, and seamless design for side-by-side screens. It comes with On-screen controls (Brightness; Exit; Information; Management; Power control; Input control; Menu control; Image; Color) for better user experience. You can customize your display with easy, intuitive HP Display Center software that lets you tailor your settings, partition screens, and even dim the screen. The HP M22f monitor comes with 1 x VGA, 1 x HDMI 1.4 (with HDCP support). It features cable management, cord and wire pass-through located on the display stand reduces cord-clutter, and helps keep your workspace clean and organized. The HP M22f 22\" FHD IPS Monitor has 3 years of warranty.</p><h2><strong>What is the price of HP M22f 22\" FHD IPS Monitor in Bangladesh?</strong></h2><p>The latest price of HP M22f 22\" FHD IPS Monitor in Bangladesh is 14,500৳. You can buy the HP M22f 22\" FHD IPS Monitor at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'in_stock', NULL, '2023-06-19 21:24:39', '2023-06-19 21:24:39');
INSERT INTO `products` (`id`, `brand_id`, `category_id`, `sub_category_id`, `title`, `slug`, `image`, `product_code`, `buying_price`, `selling_price`, `current_price`, `discount_percentage`, `key_features`, `specifications`, `description`, `questions`, `is_pc_build`, `availability`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15, 8, 1, 11, 'Corsair AF120 ELITE High-Performance 120mm PWM Casing Fan', 'corsair-af120-elite-high-performance-120mm-pwm-casing-fan', 'storage/product/168723166764911cb3b31951.webp', '64911cb3b34f6', 500.00, 1000.00, 1000.00, 0.00, '<ul><li>MPN: CO-9050140-WW</li><li>Model: AF120 ELITE</li><li>Air Flow Type: STATIC PRESSURE</li><li>Fluid Dynamic Bearing Fan</li><li>Low-Noise Design</li><li>Fan Size: 120mm x 25mm</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Key Features</strong></th></tr></thead><tbody><tr><td>Fan Speed</td><td>400 – 1850 RPM ±10%</td></tr><tr><td>Air Flow</td><td>10.9 - 59.1 CFM</td></tr><tr><td>Air Pressure</td><td>0.09 - 1.93 mm-H2O</td></tr><tr><td>Noise (dBA)</td><td>Low-Noise Design<br>Sound Level: 5 - 28.9 dBA</td></tr><tr><td>Bearing Type</td><td>Fluid Dynamic Bearing</td></tr><tr><td>LED Type</td><td>N/A</td></tr><tr><td>Input Current</td><td>0.38A</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Color</td><td>Black</td></tr><tr><td>Size</td><td>120mm x 25mm</td></tr><tr><td>Weight</td><td>0.19g</td></tr><tr><td>Connector</td><td>PWM</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Manufacturing Warranty</td><td>5&nbsp;Year&nbsp;Warranty</td></tr><tr><td colspan=\"2\"><strong>Others</strong></td></tr><tr><td>Others</td><td>Flow Type: STATIC PRESSURE</td></tr></tbody></table></figure>', '<h2><strong>orsair AF120 ELITE High-Performance 120mm PWM Casing Fan</strong></h2><p>The Corsair AF120 ELITE high-performance 120mm PWM casing fan is ideal for your PC, providing optimal airflow to keep components cool at low to medium speeds. It comes with an airflow of up to 59.1 CFM at a maximum of 1,850 RPM, AF ELITE series fans provide the ideal balance of low noise, high static pressure, and high airflow without sacrificing performance. The AF ELITE series fan rotates as quietly as 31.5 dBa thanks to its low-noise design. AF ELITE fans are designed to support Zero RPM Mode, which uses CORSAIR\'s iCUE software and a CORSAIR COMMANDER fan controller (sold separately) to eliminate fan noise when temperatures reach a threshold you set. The Corsair AF120 ELITE high-performance 120mm PWM casing reduces friction with the fluid dynamic bearing shaft and lubricant between the fan\'s bearings, ensuring exceptional durability and lifespan with minimal noise.</p><h2><strong>Buy Corsair AF120 ELITE High-Performance 120mm PWM Casing Fan from Star Tech</strong></h2><p>In Bangladesh, you can get original <a href=\"https://www.startech.com.bd/corsair-af120-elite-120mm-casing-fan\">Corsair AF120 ELITE High-Performance 120mm PWM Casing Fan</a> From Star Tech. We have a large collection of latest <a href=\"https://www.startech.com.bd/component/casing-cooler\">Corsair Casing Fan</a>&nbsp;to purchase for your <a href=\"https://www.startech.com.bd/desktops\">Desktop PC</a>. Order Online Or Visit your Nearest<a href=\"https://www.startech.com.bd/\"> Star Tech</a> Shop to get yours at lowest price. The Corsair AF120 ELITE 120mm Casing Fan comes with 5 years warranty.</p><h2><strong>What is the price of Corsair AF120 ELITE High-Performance 120mm PWM Casing Fan in Bangladesh?</strong></h2><p>The latest price of Corsair AF120 ELITE High-Performance 120mm PWM Casing Fan in Bangladesh is 2,500৳. You can buy the Corsair AF120 ELITE High-Performance 120mm PWM Casing Fan at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'in_stock', NULL, '2023-06-19 21:27:47', '2023-06-19 21:27:47'),
(16, 10, 1, 12, 'Walton ARC UX01 800VA Offline UPS', 'walton-arc-ux01-800va-offline-ups', 'storage/product/168723186064911d74631cf1.webp', '64911d746334d', 5000.00, 6000.00, 6000.00, 0.00, '<ul><li>Model: ARC UX01</li><li>Display: LCD Display</li><li>Capacity: 800VA/480W</li><li>Voltage Range: 140-300VAC</li><li>Frequency: 50Hz or 60Hz (Auto-Sensing)</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Main Feature</strong></th></tr></thead><tbody><tr><td>Capacity</td><td>800VA/480W</td></tr><tr><td>Display Type</td><td>LCD Display</td></tr><tr><td>Input Voltage</td><td>140-300Vac</td></tr><tr><td>Output Voltage</td><td>AC Mode / Battery Normal : 220/230/240Vac +/- 10%</td></tr><tr><td>Frequency (Battery Mode)</td><td>50Hz or 60Hz +/- 1Hz</td></tr><tr><td>Battery</td><td>Voltage: 12VDC<br>Type: 12V/9AH*1pc<br>Recharge Time: 5 Hours to 90% After Complete Discharge<br>Safety Protection: Over Charge &amp; Over Discharge Protection<br>Advanced Battery Management: Yes</td></tr><tr><td colspan=\"2\"><strong>Input Features</strong></td></tr><tr><td>Frequency</td><td>50Hz or 60Hz (Auto-sensing)<br>&nbsp;</td></tr><tr><td>Voltage Range</td><td>140-300Vac</td></tr><tr><td colspan=\"2\"><strong>Output Features</strong></td></tr><tr><td>Voltage Range</td><td>AC Mode / Battery Normal : 220/230/240Vac +/- 10%</td></tr><tr><td>Type of Wave</td><td>Simulated Sinewave</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Dimension</td><td>315.5*100*141mm</td></tr><tr><td colspan=\"2\"><strong>Manufacture Warranty</strong></td></tr><tr><td>Warranty</td><td>1 Year Service Warranty With Spare Parts -6 Months Battery Warranty</td></tr></tbody></table></figure>', '<h2><strong>Walton ARC UX01 800VA Offline UPS</strong></h2><p>The Walton ARC UX01 800VA Offline UPS comes with internal maintenance-free lead-acid battery. This UPS offers dependable performance. It takes approximately 4-6 hours to recharge to 90% capacity, ensuring your devices stay powered up when you need them. The offline UPS has a line interactive design and an output voltage range of 800VA/480W. It has an input voltage range of 140-300VAC and an Automatic Voltage Regulation (AVR) function. The Walton ARC UX01 UPS has a No-Load Shut Down feature that ensures a constant output voltage range. It also has useful features like Off-Mode Charging, Auto Battery Mode when the AC Mode is turned off, Auto-restart, and Cold Start. These features contribute to the UPS\'s overall convenience and dependability. You can rely on the Walton ARC UX01 800VA <a href=\"https://www.startech.com.bd/ups-ips/offline-ups\">Offline UPS</a> to protect your valuable electronic equipment with built-in protection against overvoltage, undervoltage, lightning, and surges. Its cutting-edge microprocessor technology ensures precise control and efficiency.</p><h2><strong>Buy Walton ARC UX01 800VA Offline UPS. from the best UPS Shop in Bangladesh: Star Tech</strong></h2><p>In Bangladesh, you can get original <a href=\"https://www.startech.com.bd/walton-arc-ux01-800va-offline-ups\">Walton ARC UX01 800VA Offline UPS</a> From Star Tech. We have a large collection of latest <a href=\"https://www.startech.com.bd/walton-offline-ups\">Walton offline UPS</a> to purchase. Order Online Or Visit your Nearest <a href=\"https://www.startech.com.bd/\">Star Tech</a> Shop to get yours at lowest price. The Walton ARC UX01 800VA Offline UPS. comes with 1 Year Service Warranty With Spare Parts -6 Months Battery Warranty.</p><h2><strong>What is the price of Walton ARC UX01 800VA Offline UPS in Bangladesh?</strong></h2><p>The latest price of Walton ARC UX01 800VA Offline UPS in Bangladesh is 5,250৳. You can buy the Walton ARC UX01 800VA Offline UPS at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'in_stock', NULL, '2023-06-19 21:31:00', '2023-06-19 21:31:00'),
(17, 11, 1, 13, 'ESET NOD32 Antivirus (2021 Edition)', 'eset-nod32-antivirus-2021-edition', 'storage/product/168723212264911e7a8c4231.jpg', '64911e7a8c588', 500.00, 700.00, 700.00, 0.00, '<ul><li>Model: ESET NOD32</li><li>Reliable protection without slowdowns</li><li>Minimal power usage</li><li>Light on computer resources</li><li>Uninterrupted gaming and videos</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Subscription</strong></th></tr></thead><tbody><tr><td>Number of User</td><td>1 User</td></tr><tr><td>Duration</td><td>1 Year</td></tr></tbody></table></figure>', '<h2><strong>ESET NOD32 Antivirus&nbsp;(2021&nbsp;Edition)</strong></h2><p><strong>Legendary NOD32 Antivirus</strong></p><p>Protects you against all types of malware, including viruses, ransomware, worms, and spyware.</p><p><strong>Light on computer resources</strong></p><p>Enjoy the full power of your computer. Play, work and browse the internet without slowdowns.</p><p><strong>Uninterrupted gaming and videos</strong></p><p>No system updates or annoying pop-ups while you play games or run a program in full-screen mode.</p><p><strong>Legendary antivirus technology</strong></p><p>Protect yourself from ransomware and other types of malware with ESET\'s time-proven multilayered protection, trusted by over 110 million users worldwide.</p><p><strong>Minimal power usage</strong></p><p>Play, work and browse the internet without slowdowns. Stay unplugged and online longer with battery-saving mode, and enjoy gaming without distracting pop-ups.</p><p><strong>Install and forget</strong></p><p>Easy to install, renew and upgrade, our security is also designed for simple set up of all routine tasks. If you want, fine-tune your profile with 150 detailed settings.</p><p><strong>Transfer your license</strong></p><p>ESET NOD32 Antivirus license can be transferred to macOS or Linux operating systems.</p><p><strong>Scan while downloading files</strong></p><p>Decreases scanning time by scanning specific file types âˆ’ such as archives âˆ’ during the download process.</p><p><strong>Device Control</strong></p><p>Allows you to prevent unauthorized copying of your private data to an external device. Allows you to block storage media â€“ CDs, DVDs, USB sticks, and disk storage devices. Lets you block devices connecting via Bluetooth, FireWire and serial/parallel ports.</p><p><strong>Script-Based Attack Protection</strong></p><p>Detects attacks by malicious scripts that try to exploit Windows PowerShell. Also detects malicious JavaScripts that can attack via your browser. Mozilla Firefox, Google Chrome, Microsoft Internet Explorer and Microsoft Edge browsers are all supported.</p><p><strong>Privacy protection</strong></p><p>Stop hackers from misusing your passwords. Bank and purchase online safely. Prevent your kids from being exposed to offensive online content.</p><p><strong>Anti-Theft</strong></p><p>Stay safer by tracking and locating your missing computer in case it gets lost or stolen, and identify thieves via your laptopâ€™s built-in camera.</p><p><strong>Minimal power usage</strong></p><p>Whether you\'re working or playing, browse the internet without slowdowns.. Stay unplugged and online longer with battery-saving mode and enjoy gaming without distracting pop-ups.</p><p><strong>Install and forget</strong></p><p>Easy to install, renew and upgrade, our security is also designed for the simple setup of all routine tasks. Or, fine-tune your profile with 150 detailed settings. New computer? Transfer your license anytime with ease.</p><h2><strong>What is the price of ESET NOD32 Antivirus (2021 Edition) in Bangladesh?</strong></h2><p>The latest price of ESET NOD32 Antivirus (2021 Edition) in Bangladesh is 649৳. You can buy the ESET NOD32 Antivirus (2021 Edition) at best price from our website or visit any of our showrooms.</p>', '<h3><br><strong>Q:koto year er jonno r koita pc te use kora jabe??</strong></h3><p><strong>A:</strong>1 Year for 1 PC.</p>', 1, 'in_stock', NULL, '2023-06-19 21:35:22', '2023-06-19 21:35:22'),
(18, 12, 1, 14, 'A4TECH OP-720 Optical USB Wired Mouse', 'a4tech-op-720-optical-usb-wired-mouse', 'storage/product/168723231164911f37e963d1.jpg', '64911f37e97a7', 300.00, 450.00, 450.00, 0.00, '<ul><li>Model: OP-720</li><li>Smart horizontal &amp; vertical scrolling</li><li>Sensor: Optical</li><li>Resolution: 1200 DPI</li><li>No. of Buttons.: 3</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Main Features</strong></th></tr></thead><tbody><tr><td>Keys</td><td>3</td></tr><tr><td>Connection Type</td><td>USB Wired</td></tr><tr><td>Optical Sensor Resolution</td><td>1200 DPI</td></tr><tr><td>Cable Length</td><td>150 cm</td></tr><tr><td>Others</td><td>System Requirements: Windows XP / Vista / 7 / 8 / 8.1 / 10</td></tr><tr><td colspan=\"2\"><strong>Gaming Features</strong></td></tr><tr><td>Switch Lifecycle</td><td>5 million clicks</td></tr><tr><td colspan=\"2\"><strong>Physical Specifications</strong></td></tr><tr><td>Color</td><td>Black</td></tr><tr><td>Dimension(LxWxH)</td><td>119 x 62 x 37 mm</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Warranty</td><td>1 Year</td></tr></tbody></table></figure>', '<h2><strong>A4TECH OP-720 Optical USB Wired Mouse</strong></h2><p>The A4tech OP-720 is an optical mouse with hyper-fast scrolling for increased productivity. It has a nearly frictionless scroll wheel that lets you fly through long documents and Web pages with a single flick. You can experience smoother cursor control on virtually any surface thanks to the 1200 DPI. It has a contoured design that gives you more support and control. It offers extreme quality, over 5 million clicks guaranteed. The dust-resistant design prolongs the wheel lifespan. The OP-720 offers 8 gestures to perform selectable hotkey commands. The 4-way Wheel enables you to perform smart horizontal &amp; vertical scrolling. The A4TECH OP-720 comes with a 1-year warranty.</p><h2><strong>What is the price of A4TECH OP-720 Optical Mouse in Bangladesh?</strong></h2><p>The latest price of A4TECH OP-720 Optical Mouse in Bangladesh is 350৳. You can buy the A4TECH OP-720 Optical Mouse at best price from our website or visit any of our showrooms.</p>', '<p><strong>Nasrul Hasan </strong>on 14 May 2022</p><h3><strong>Q:Does A4TECH OP-720 Optical USB Wired Mouse has a double click button?</strong></h3><p><strong>A:</strong>No Sir, A4TECH OP-720 Optical USB Wired Mouse does not have a Double click button.</p>', 1, 'in_stock', NULL, '2023-06-19 21:38:31', '2023-06-19 21:38:31'),
(19, 12, 1, 15, 'A4TECH KRS-85 Laser Engraving USB Keyboard With Bangla', 'a4tech-krs-85-laser-engraving-usb-keyboard-with-bangla', 'storage/product/168723247964911fdf8b0cd1.jpg', '64911fdf8b23c', 600.00, 800.00, 800.00, 0.00, '<ul><li>Model: KRS-85</li><li>Patented Natural A Shape Key Structure</li><li>Laser Inscribed Keys</li><li>Adjustable Keyboard Height</li><li>Comfort Roundedge Keycaps</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Main Features</strong></th></tr></thead><tbody><tr><td>Wired/Wireless</td><td>Wired (USB)</td></tr><tr><td>Keys</td><td>Keycaps: A-Shape, Round Edge<br>Adjustable Keyboard Legs: Yes<br>Buttons No.: 4<br>Hotkeys: 12 Fn Hotkeys<br><br><br><br><br>&nbsp;</td></tr><tr><td>Cable Length</td><td>150 cm</td></tr><tr><td colspan=\"2\"><strong>Physical Attribute</strong></td></tr><tr><td>System Requirements</td><td>Windows XP / Vista / 7 / 8 / 8.1 / 10</td></tr><tr><td>Color</td><td>Black</td></tr><tr><td>Dimensions</td><td>454 × 153 × 32 mm</td></tr><tr><td>Weight</td><td>585 g</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Warranty</td><td>01 year warranty</td></tr></tbody></table></figure>', '<h2><strong>A4TECH KRS-85 Laser Engraving USB Keyboard With Bangla</strong></h2><p>A4Tech KRS-85 Laser Engraving USB Keyboard comes with Bangla front. This Keyboard is features with Patented Natural A Shape Key Structure Laser Inscribed Keys, Adjustable Keyboard Height and Comfort Roundedge Keycaps. This Keyboard Ease keystrokes on your fingertips. Providing hours of typing comfort and Adjustable tilt enable a truly personalized experience. This Keyboard is also designed with 12 Fn Hotkeys, A-Shape, Round Edge Keycaps, Laser Engraving, Adjustable Keyboard Legs, 5 V / 30 mA Rating, 150 cm Cable Length with USB Hardware Connectivity. It is also compatiable with Windows XP / Vista / 7 / 8 / 8.1 / 10 System Requirements. The A4Tech KRS-85 Laser Engraving keyboard has 01 year warranty.</p><h2><strong>What is the price of A4TECH KRS-85 Laser Engraving USB Keyboard in Bangladesh?</strong></h2><p>The latest price of A4TECH KRS-85 Laser Engraving USB Keyboard in Bangladesh is 815৳. You can buy the A4TECH KRS-85 Laser Engraving USB Keyboard at best price from our website or visit any of our showrooms.</p>', '<p><strong>Sharif</strong> on 19 Feb 2020</p><h3><strong>Q:Is it a multimedia keyboard?</strong></h3><p><strong>A:</strong>Yes Sir, the A4TECH KRS-85 Laser Engraving USB Keyboard With Bangla is a multi-media keyboard.</p>', 1, 'in_stock', NULL, '2023-06-19 21:41:19', '2023-06-19 21:41:19'),
(20, 13, 1, 16, 'Micropack MHP-800 3.5mm Headphone (Single/Dual Port)', 'micropack-mhp-800-35mm-headphone-singledual-port', 'storage/product/1687232633649120798b5b61.jpg', '649120798b87b', 700.00, 900.00, 900.00, 0.00, '<ul><li>MPN: MHP-800-BKYW</li><li>Model: MHP-800</li><li>Detachable 3.5mm Audio Jack Cable</li><li>Built-in Microphone, Speaker: 40mm</li><li>Impedance: 32Ω±15%</li><li>Sensitivity: 108±3dB</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Technical Specification</strong></th></tr></thead><tbody><tr><td>Frequency Range</td><td>20Hz-20KHz</td></tr><tr><td>Impedance</td><td>32Ω±15%<br>&nbsp;</td></tr><tr><td>Sensitivity</td><td>Speaker Sensitivity: 108±3dB<br>Mic Sensitivity: 45±3dB<br>&nbsp;</td></tr><tr><td>Input Jack</td><td>3.5mm</td></tr><tr><td>Driver Diameter</td><td>40mm</td></tr><tr><td>Connectivity</td><td>Wired</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Color</td><td>Black and Yellow</td></tr><tr><td>Cable Length</td><td>1.5mm</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Manufacturing Warranty</td><td>01 year warranty</td></tr></tbody></table></figure>', '<h2><strong>Micropack MHP-800 3.5mm Headphone (Single/Dual Port)</strong></h2><p>Micropack MHP-800 3.5mm Headphone designed with soft leather and foam, which is comfortable for wearing even for a long time. The headphone is featured with Detachable 3.5mm Audio Jack Cable, Built-in Microphone, Speaker: 40mm, Impedance: 32Î±15% and Sensitivity: 108±3dB. This Headphone is stylish portable design, light and convenient wear headphones into the bag. This headphone has easily pick up calls or switch music by pressing the switch button and also it has 01 year warranty.</p><h2><strong>What is the price of Micropack MHP-800 3.5mm Headphone in Bangladesh?</strong></h2><p>The latest price of Micropack MHP-800 3.5mm Headphone in Bangladesh is 850৳. You can buy the Micropack MHP-800 3.5mm Headphone at best price from our website or visit any of our showrooms.</p>', NULL, 1, 'in_stock', NULL, '2023-06-19 21:43:53', '2023-06-19 21:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 2, 'storage/product/16866819556488b9639860e3.jpg', '2023-06-13 12:45:55', '2023-06-13 12:45:55'),
(2, 2, 'storage/product/16866819556488b9639a83f4.jpg', '2023-06-13 12:45:55', '2023-06-13 12:45:55'),
(3, 2, 'storage/product/16866819556488b9639b63d5.jpg', '2023-06-13 12:45:55', '2023-06-13 12:45:55'),
(4, 2, 'storage/product/16866819556488b9639d5316.jpg', '2023-06-13 12:45:55', '2023-06-13 12:45:55'),
(10, 5, 'storage/product/16867526526489cd8c71059123.webp', '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(11, 5, 'storage/product/16867526526489cd8c72001333.webp', '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(12, 5, 'storage/product/16867526526489cd8c72fcf444.webp', '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(13, 5, 'storage/product/16867526526489cd8c749f1555.webp', '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(14, 5, 'storage/product/16867526526489cd8c7567e666.webp', '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(15, 6, 'storage/product/1686765751648a00b76a22c2.webp', '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(16, 6, 'storage/product/1686765751648a00b76af4f3.webp', '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(17, 6, 'storage/product/1686765751648a00b76bbee4.webp', '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(18, 6, 'storage/product/1686765751648a00b76c5865.webp', '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(19, 6, 'storage/product/1686765751648a00b76d8fa6.webp', '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(20, 6, 'storage/product/1686765751648a00b76e3957.webp', '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(21, 7, 'storage/product/1686765929648a0169af3552.webp', '2023-06-14 12:05:29', '2023-06-14 12:05:29'),
(22, 7, 'storage/product/1686765929648a0169b14fe3.webp', '2023-06-14 12:05:29', '2023-06-14 12:05:29'),
(23, 7, 'storage/product/1686765929648a0169b2a6c4.webp', '2023-06-14 12:05:29', '2023-06-14 12:05:29'),
(24, 7, 'storage/product/1686765929648a0169b45835.webp', '2023-06-14 12:05:29', '2023-06-14 12:05:29'),
(25, 9, 'storage/product/1687228857649111b981d582.webp', '2023-06-19 20:40:57', '2023-06-19 20:40:57'),
(26, 9, 'storage/product/1687228857649111b9829063.webp', '2023-06-19 20:40:57', '2023-06-19 20:40:57'),
(27, 10, 'storage/product/16872290666491128a195b52.jpg', '2023-06-19 20:44:26', '2023-06-19 20:44:26'),
(28, 12, 'storage/product/16872295656491147d6a5bb2.jpg', '2023-06-19 20:52:45', '2023-06-19 20:52:45'),
(29, 12, 'storage/product/16872295656491147d6aced3.jpg', '2023-06-19 20:52:45', '2023-06-19 20:52:45'),
(30, 12, 'storage/product/16872295656491147d6bbaf4.jpg', '2023-06-19 20:52:45', '2023-06-19 20:52:45'),
(31, 12, 'storage/product/16872295656491147d6c5ad5.jpg', '2023-06-19 20:52:45', '2023-06-19 20:52:45'),
(32, 13, 'storage/product/16872298376491158d613342.jpg', '2023-06-19 20:57:17', '2023-06-19 20:57:17'),
(33, 13, 'storage/product/16872298376491158d61c1e3.jpg', '2023-06-19 20:57:17', '2023-06-19 20:57:17'),
(34, 14, 'storage/product/168723147964911bf7e792f2.jpg', '2023-06-19 21:24:39', '2023-06-19 21:24:39'),
(35, 14, 'storage/product/168723147964911bf7e83223.jpg', '2023-06-19 21:24:39', '2023-06-19 21:24:39'),
(36, 14, 'storage/product/168723147964911bf7e8bc64.jpg', '2023-06-19 21:24:39', '2023-06-19 21:24:39'),
(37, 14, 'storage/product/168723147964911bf7e945d5.jpg', '2023-06-19 21:24:39', '2023-06-19 21:24:39'),
(38, 14, 'storage/product/168723147964911bf7e9bc66.jpg', '2023-06-19 21:24:39', '2023-06-19 21:24:39'),
(39, 15, 'storage/product/168723166764911cb3b6de12.webp', '2023-06-19 21:27:47', '2023-06-19 21:27:47'),
(40, 15, 'storage/product/168723166764911cb3b784f3.webp', '2023-06-19 21:27:47', '2023-06-19 21:27:47'),
(41, 16, 'storage/product/168723186064911d7463cd62.webp', '2023-06-19 21:31:00', '2023-06-19 21:31:00'),
(42, 17, 'storage/product/168723212264911e7a8f0bf2.jpg', '2023-06-19 21:35:22', '2023-06-19 21:35:22'),
(43, 17, 'storage/product/168723212264911e7a8f9863.jpg', '2023-06-19 21:35:22', '2023-06-19 21:35:22'),
(44, 17, 'storage/product/168723212264911e7a902924.jpg', '2023-06-19 21:35:22', '2023-06-19 21:35:22'),
(45, 17, 'storage/product/168723212264911e7a90a815.jpg', '2023-06-19 21:35:22', '2023-06-19 21:35:22'),
(46, 17, 'storage/product/168723212264911e7a911576.jpg', '2023-06-19 21:35:22', '2023-06-19 21:35:22'),
(47, 17, 'storage/product/168723212264911e7a91b207.jpg', '2023-06-19 21:35:22', '2023-06-19 21:35:22'),
(48, 18, 'storage/product/168723231164911f37ea2462.jpg', '2023-06-19 21:38:31', '2023-06-19 21:38:31'),
(49, 18, 'storage/product/168723231164911f37ea8a83.jpg', '2023-06-19 21:38:31', '2023-06-19 21:38:31'),
(50, 18, 'storage/product/168723231164911f37eb05c4.jpg', '2023-06-19 21:38:31', '2023-06-19 21:38:31'),
(51, 19, 'storage/product/168723247964911fdf8e0d02.jpg', '2023-06-19 21:41:19', '2023-06-19 21:41:19'),
(52, 20, 'storage/product/1687232633649120798e67e2.jpg', '2023-06-19 21:43:53', '2023-06-19 21:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `related_products`
--

CREATE TABLE `related_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `related_product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `related_products`
--

INSERT INTO `related_products` (`id`, `product_id`, `related_product_id`, `created_at`, `updated_at`) VALUES
(3, 6, 1, '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(6, 5, 6, '2023-06-18 23:42:25', '2023-06-18 23:42:25'),
(7, 5, 7, '2023-06-18 23:42:25', '2023-06-18 23:42:25'),
(8, 1, 6, '2023-06-19 00:01:18', '2023-06-19 00:01:18'),
(9, 1, 5, '2023-06-19 00:01:18', '2023-06-19 00:01:18'),
(10, 8, 1, '2023-06-19 20:33:49', '2023-06-19 20:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `title`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Processor', 'processor', NULL, '2023-06-13 09:34:43', '2023-06-13 09:37:05'),
(2, 1, 'RAM', 'ram', NULL, '2023-06-13 09:34:49', '2023-06-13 09:34:49'),
(3, 1, 'Mother-Board', 'mother-board', NULL, '2023-06-13 09:35:04', '2023-06-13 09:35:04'),
(4, 1, 'Graphics Card', 'graphics-card', NULL, '2023-06-14 08:15:26', '2023-06-14 08:15:26'),
(5, 2, 'Gaming Laptop', 'gaming-laptop', NULL, '2023-06-14 12:00:00', '2023-06-14 12:00:00'),
(6, 1, 'CPU Cooler', 'cpu-cooler', NULL, '2023-06-19 20:38:54', '2023-06-19 20:38:54'),
(7, 1, 'Storage', 'storage', NULL, '2023-06-19 20:46:52', '2023-06-19 20:46:52'),
(8, 1, 'Power Supply', 'power-supply', NULL, '2023-06-19 20:50:08', '2023-06-19 20:50:08'),
(9, 1, 'Casing', 'casing', NULL, '2023-06-19 20:55:25', '2023-06-19 20:55:25'),
(10, 1, 'Monitor', 'monitor', NULL, '2023-06-19 21:23:30', '2023-06-19 21:23:30'),
(11, 1, 'Case-Fan', 'case-fan', NULL, '2023-06-19 21:26:35', '2023-06-19 21:26:35'),
(12, 1, 'UPS', 'ups', NULL, '2023-06-19 21:29:21', '2023-06-19 21:29:21'),
(13, 1, 'Anti-Virus', 'anti-virus', NULL, '2023-06-19 21:32:33', '2023-06-19 21:32:33'),
(14, 1, 'Mouse', 'mouse', NULL, '2023-06-19 21:36:44', '2023-06-19 21:36:44'),
(15, 1, 'Keyboard', 'keyboard', NULL, '2023-06-19 21:39:32', '2023-06-19 21:39:32'),
(16, 1, 'Headphone', 'headphone', NULL, '2023-06-19 21:42:48', '2023-06-19 21:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rabiul Hasan', '01518303955', 'mdrabiulhasan.me@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2023-06-13 09:30:44', '2023-06-13 09:30:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_order_id_foreign` (`order_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_page_adds`
--
ALTER TABLE `home_page_adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_products`
--
ALTER TABLE `home_page_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_page_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_product_id_foreign` (`product_id`);

--
-- Indexes for table `related_products`
--
ALTER TABLE `related_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `related_products_product_id_foreign` (`product_id`),
  ADD KEY `related_products_related_product_id_foreign` (`related_product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_slug_unique` (`slug`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_page_adds`
--
ALTER TABLE `home_page_adds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_page_products`
--
ALTER TABLE `home_page_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `related_products`
--
ALTER TABLE `related_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `home_page_products`
--
ALTER TABLE `home_page_products`
  ADD CONSTRAINT `home_page_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `related_products`
--
ALTER TABLE `related_products`
  ADD CONSTRAINT `related_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `related_products_related_product_id_foreign` FOREIGN KEY (`related_product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
