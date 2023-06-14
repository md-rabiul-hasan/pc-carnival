-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 08:51 PM
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
(4, 'Lenevo', 'lenevo', NULL, NULL, '2023-06-14 11:59:47', '2023-06-14 11:59:47');

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
(1, 6, 'LATEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(2, 1, 'LATEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(3, 2, 'LATEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(4, 7, 'LATEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(5, 5, 'LATEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(6, 5, 'POPULAR', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(7, 1, 'POPULAR', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(8, 2, 'POPULAR', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(9, 6, 'POPULAR', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(10, 7, 'POPULAR', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(11, 1, 'BEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(12, 2, 'BEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(13, 6, 'BEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(14, 5, 'BEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50'),
(15, 7, 'BEST', '2023-06-14 12:35:50', '2023-06-14 12:35:50');

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
(30, '2023_06_14_171058_create_home_page_products_table', 3);

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
  `is_pc_build` tinyint(1) NOT NULL DEFAULT 0,
  `availability` enum('pre_order','in_stock','out_of_stock') NOT NULL DEFAULT 'in_stock',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `sub_category_id`, `title`, `slug`, `image`, `product_code`, `buying_price`, `selling_price`, `current_price`, `discount_percentage`, `key_features`, `specifications`, `description`, `is_pc_build`, `availability`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'AMD Ryzen 3 4100 Processor', 'amd-ryzen-3-4100-processor', 'storage/product/168667392864889a089d2db1.jpg', '64889a089d5c2', 15000.00, 18000.00, 18000.00, 0.00, '<ul><li>Model: Ryzen 3 4100</li><li>Clock Speed: 3.8GHz; Up to 4.0GHz</li><li>L1 Cache: 256KB; L2 Cache: 2MB; L3 Cache: 4MB</li><li>4 Cores &amp; 8 Threads</li><li>CPU Socket: AM4</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Memory Specifications</strong></th></tr></thead><tbody><tr><td>Base Frequency</td><td>3.8GHz</td></tr><tr><td>Maximum Turbo Frequency</td><td>4.0GHz</td></tr><tr><td>Cache</td><td>L1 Cache: 256KB<br>L2 Cache: 2MB<br>L3 Cache: 4MB</td></tr><tr><td>Cores</td><td>4</td></tr><tr><td>Threads</td><td>8</td></tr><tr><td>Default TDP</td><td>65W</td></tr><tr><td>cTDP</td><td>46-65W</td></tr><tr><td>Supported Technologies</td><td>AMD SenseMI Technology<br>AMD Ryzen Master Utility<br>Enmotus FuzeDrive for AMD Ryzen<br>Radeon Software<br>Radeon FreeSync Technology<br>AMD StoreMI Technology<br>AMD \"Zen 2\" Core Architecture<br>AMD Ryzen VR-Ready Premium</td></tr><tr><td>Maximum Speed</td><td>3200MHz</td></tr><tr><td>Type</td><td>DDR4</td></tr><tr><td>Max Number of Channels</td><td>2</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Manufacturing Warranty</td><td>03 years (No Warranty for Fan or Cooler)</td></tr></tbody></table></figure>', '<h2><strong>AMD Ryzen 3 4100 Processor</strong></h2><p>AMD Ryzen 3 4100 Processor has 4 processor cores, 8 threads, and an astonishingly efficient 45-65W TDP. This processor stands with a Base Clock of 3.8GHz and a Maximum Boost Clock of 4.0GHz. It has 256KB L1 Cache. 2MB L2 Cache, 4MB L3 Cache with AM4 Package, and TSMC 7nm FinFET CMOS. This AMD processor is built with PCIe 3.0 x8 and Wraith Spire Thermal Solution. This Processor provides DDR4 Up to 3200MHz memory with 2 memory channels. It has AMD StoreMI Technology, AMD \"Zen 2\" Core Architecture, and AMD Ryzen VR-Ready Premium. The built-in AMD StoreMI Technology is a fast and easy way to expand and accelerate the storage in a desktop PC with an AMD Ryzen processor. AMD StoreMI technology is a powerful tool for PC enthusiasts that want to improve load times, boot times, file management, or system responsiveness. Whatever your storage acceleration needs, AMD StoreMI technology automatically pairs your most-used files with an SSD cache for peak performance. AMD StoreMI technology can get files running at SSD-like speeds. Simply add an SSD to your system and let StoreMI do the rest. It also features the AMD Ryzen VR-Ready Premium for the best possible VR experiences. It comes with Wraith Stealth Cooling Solution. These AMD Ryzen processors are designed to bring you the ultimate, high-performance computing experience. The latest revolutionary AMD multi-threaded processing technology gives you blazing fast performance when you work or play. This AMD Processor. Support AMD Socket AM4 Socket With AMD SenseMI technology and Powerful Overclocking Utility for AMD Ryzen processor. AMD Ryzen 3 4100 Processor offers a 3-years warranty(No Warranty for Fan or Cooler)</p><h2><strong>What is the price of AMD Ryzen 3 4100 Processor in Bangladesh?</strong></h2><p>The latest price of AMD Ryzen 3 4100 Processor in Bangladesh is 10,300৳. You can buy the AMD Ryzen 3 4100 Processor at best price from our website or visit any of our showrooms.</p>', 1, 'in_stock', NULL, '2023-06-13 10:32:08', '2023-06-13 10:32:08'),
(2, 1, 1, 3, 'ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard', 'asrock-h81m-vg4-r40-4th-gen-micro-atx-motherboard', 'storage/product/16866819556488b96396a2d2.jpg', '6488b96396e30', 10000.00, 12000.00, 11400.00, 5.00, '<ul><li>Model: H81M-VG4 R4.0</li><li>Supports 4th Generation Intel Core Processors (Socket 1150)</li><li>Supports Dual Channel DDR3 1600</li><li>1 PCIe 2.0 x16, 1 PCIe 2.0 x1</li><li>Graphic Output: D-Sub</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Basic Information</strong></th></tr></thead><tbody><tr><td>Supported CPU</td><td>Supports New 4th and 4th Generation Intel Core i7/i5/i3/Xeon/Pentium/Celeron Processors (Socket 1150)<br>Supports Intel Turbo Boost 2.0 Technology</td></tr><tr><td>Chipset</td><td>Intel H81</td></tr><tr><td>BIOS</td><td>32Mb AMI UEFI Legal BIOS with multilingual GUI support<br>ACPI 1.1 Compliant wake up events<br>SMBIOS 2.3.1 support<br>CPU, DRAM Voltage multi-adjustment</td></tr><tr><td>Form Factor</td><td>Micro ATX Form Factor: 7.5-in x 6.7-in, 19.1 cm x 17.0 cm<br>Solid Capacitor design</td></tr><tr><td>Audio</td><td>7.1 CH HD Audio (Realtek ALC887/897 Audio Codec)<br>Supports Surge Protection</td></tr><tr><td colspan=\"2\"><strong>Expansion Slots</strong></td></tr><tr><td>PCI</td><td>1 x PCI Express 2.0 x16 Slot (PCIE2: x16 mode)<br>1 x PCI Express 2.0 x1 Slot</td></tr><tr><td colspan=\"2\"><strong>Memory</strong></td></tr><tr><td>Type</td><td>Dual Channel DDR3/DDR3L Memory Technology</td></tr><tr><td>Slots</td><td>2 x DDR3/DDR3L DIMM Slots</td></tr><tr><td>Supported Memory</td><td>Supports DDR3/DDR3L 1600 / 1333/1066 non-ECC, un-buffered memory</td></tr><tr><td>Maximum Memory</td><td>16GB</td></tr><tr><td colspan=\"2\"><strong>Graphics</strong></td></tr><tr><td>Graphics</td><td>Supports Intel HD Graphics Built-in Visuals : Intel Quick Sync Video with AVC, MVC (S3D) and MPEG-2 Full HW Encode1, Intel InTru 3D, Intel Clear Video HD Technology, Intel Insider, Intel HD Graphics 4400/4600<br>Pixel Shader 5.0, DirectX 11.1<br>Supports D-Sub with max. resolution up to 1920x1200 @ 60Hz</td></tr><tr><td>Max Shared Memory</td><td>1024MB</td></tr><tr><td colspan=\"2\"><strong>Connector &amp; Ports</strong></td></tr><tr><td>D-Sub (s)</td><td>1 x D-Sub Port</td></tr><tr><td>USB (s)</td><td>2 x USB 2.0 Ports (Supports ESD Protection)<br>2 x USB 3.2 Gen1 Ports (Supports ESD Protection)</td></tr><tr><td>LAN Port (s)</td><td>PCIE x1 Gigabit LAN 10/100/1000 Mb/s<br>Realtek RTL8111H<br>Supports Wake-On-LAN<br>Supports Lightning/ESD Protection<br>Supports Energy Efficient Ethernet 802.3az<br>Supports PXE</td></tr><tr><td>Supported Storage</td><td>2 x SATA3 6.0 Gb/s Connectors, support NCQ, AHCI and Hot Plug<br>2 x SATA2 3.0 Gb/s Connectors, support NCQ, AHCI and Hot Plug</td></tr><tr><td>Audio</td><td>HD Audio Jack: Line in / Front Speaker / Microphone</td></tr><tr><td>Internal I/O Ports</td><td>1 x Chassis Intrusion and Speaker Header<br>1 x CPU Fan Connector (4-pin)<br>1 x Chassis Fan Connector (4-pin)<br>1 x 24 pin ATX Power Connector<br>1 x 4 pin 12V Power Connector<br>1 x Front Panel Audio Connector<br>2 x USB 2.0 Headers (Support 4 USB 2.0 ports) (Supports ESD Protection)</td></tr><tr><td>TPM (Trusted Platform Module )</td><td>1 x TPM Header<br>1 x SPI TPM Header</td></tr><tr><td colspan=\"2\"><strong>Warranty Information</strong></td></tr><tr><td>Manufacturing Warranty</td><td>3 years</td></tr></tbody></table></figure>', '<h2><strong>Description</strong></h2><h3><strong>ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard</strong></h3><p>The ASRock H81M-VG4 R4.0 4th Gen Micro ATX Motherboard supports Intel 4th Generation Intel Core Processors (Socket 1150) and Dual Channel DDR3 1600. The Motherboard comes with 1 PCIe 2.0 x16, 1 PCIe 2.0 x1. It features a D-Sub port for graphic output. It is built with a High-Density Glass Fabric PCB design that reduces the gaps between the PCB layers to protect the motherboard against electrical shorts caused by humidity. This ASRock motherboard uses a Realtek gigabit LAN chip to support extremely fast internet connections. The ASRock H81M-VG4 R4.0 features a solid capacitor design. The motherboard offers full spike protection. It includes various technologies to prevent your motherboard’s components from being damaged by these unexpected voltage spikes. It also comes with ASRock Live Update &amp; APP Shop. The ASRock H81M-VG4 R4.0 comes with 3 years of warranty.<br>&nbsp;</p><h2><strong>What is the price of ASRock H81M-VG4 R4.0 4th Gen Motherboard in Bangladesh?</strong></h2><p>The latest price of ASRock H81M-VG4 R4.0 4th Gen Motherboard in Bangladesh is 8,000৳. You can buy the ASRock H81M-VG4 R4.0 4th Gen Motherboard at best price from our website or visit any of our showrooms.</p>', 1, 'in_stock', NULL, '2023-06-13 12:45:55', '2023-06-13 12:45:55'),
(5, 3, 1, 4, 'Colorful GeForce GT1030 4G-V 4GB Graphics Card', 'colorful-geforce-gt1030-4g-v-4gb-graphics-card', 'storage/product/16867526526489cd8c645a911.jpg', '6489cd8c6499e', 50000.00, 55000.00, 55000.00, 0.00, '<ul><li>MPN: 212327101809</li><li>Model: GT1030 4G-V</li><li>Powered by GeForce GT1030</li><li>Integrated with 4GB DDR4 64-bit</li><li>CUDA Cores: 384</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Video Memory Specifications</strong></th></tr></thead><tbody><tr><td>Type</td><td>GDDR4</td></tr><tr><td>Size</td><td>4GB</td></tr><tr><td>Resolution</td><td>3840 x 2160</td></tr><tr><td>Core Clock</td><td>1152Mhz</td></tr><tr><td>Memory Clock</td><td>6000Mhz</td></tr><tr><td>BUS Type</td><td>64bit</td></tr><tr><td>CUDA Cores</td><td>384</td></tr><tr><td colspan=\"2\"><strong>Interface</strong></td></tr><tr><td>HDMI</td><td>HDMI x 1</td></tr><tr><td colspan=\"2\"><strong>Power Specifications</strong></td></tr><tr><td>Recommended PSU</td><td>300 W</td></tr><tr><td>Consumption</td><td>30 W</td></tr><tr><td colspan=\"2\"><strong>Application Programming Interfaces</strong></td></tr><tr><td>DirectX</td><td>12</td></tr><tr><td>OpenGL</td><td>4.5</td></tr><tr><td colspan=\"2\"><strong>Physical Specifications</strong></td></tr><tr><td>Dimensions</td><td>167*120*26mm</td></tr><tr><td colspan=\"2\"><strong>Warranty</strong></td></tr><tr><td>Manufacturing Warranty</td><td>2 Years</td></tr></tbody></table></figure>', '<h2><strong>Description</strong></h2><h2><strong>Colorful GeForce GT1030 4G-V 4GB Graphics Card</strong></h2><p>The Colorful GeForce GT1030 4G-V 4GB Graphics Card is based on the recently announced GeForce GT 1030, which has 384 CUDA cores, a 64-bit memory bus, and a 30W power draw that requires no external power connectors. Colorful set the core clock of its GT 1030 at 1,277MHz and the boost clock at 1,468MHz. The card is equipped with 4GB of DDR4 memory clocked at 6,008MHz.The company boasts an all-solid-state capacitor power delivery design that Colorful stated delivers higher stability and reliability. The custom cooling solution features a black and red plastic shroud mated to an aluminum heatsink and a 90mm cooling fan. The additional cooling enables higher boost clock speeds and overclocking headroom.</p><h2><strong>Buy Colorful GeForce GT1030 4G-V 4GB Graphics Card from the best Graphics Card Shop in Bangladesh: Star Tech</strong></h2><p>In Bangladesh, you can get original <a href=\"https://www.startech.com.bd/colorful-geforce-gt1030-4g-v-graphics-card\">Colorful GeForce GT1030 4G-V 4GB Graphics Card</a> From Star Tech. We have a large collection of the latest <a href=\"https://www.startech.com.bd/colorful-graphics-card\">Colorful Graphics Card</a> to purchase for your <a href=\"https://www.startech.com.bd/desktops\">Desktop PC</a>. Order Online Or Visit your Nearest <a href=\"https://www.startech.com.bd/\">Star Tech</a> Shop to get yours at lowest price. The Colorful GeForce GT1030 4G-V 4GB Graphics Card comes with 2 years warranty.</p><h2><strong>What is the price of Colorful GeForce GT1030 4G-V Graphics Card in Bangladesh?</strong></h2><p>The latest price of Colorful GeForce GT1030 4G-V Graphics Card in Bangladesh is 10,000৳. You can buy the Colorful GeForce GT1030 4G-V Graphics Card at best price from our website or visit any of our showrooms.</p>', 1, 'in_stock', NULL, '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(6, 4, 2, 5, 'Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 500GB SSD 14\" FHD Laptop with DDR5 RAM', 'lenovo-ideapad-1-14amn7-amd-ryzen-5-500gb-ssd-14-fhd-laptop-with-ddr5-ram', 'storage/product/1686765751648a00b7663c71.webp', '648a00b76693e', 55000.00, 62000.00, 62000.00, 0.00, '<ul><li>Model: IdeaPad 1 14AMN7</li><li>Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</li><li>RAM: 8GB DDR5 5500MHz, Storage: 500GB M.2 NVMe SSD</li><li>Display: 14\" FHD (1920X1080)</li><li>Features: Type-C, Privacy Shutter</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Processor</strong></th></tr></thead><tbody><tr><td>Processor Brand</td><td>AMD</td></tr><tr><td>Processor Model</td><td>Ryzen 5 7520U</td></tr><tr><td>Processor Frequency</td><td>2.8 GHz – 4.3 GHz</td></tr><tr><td>Processor Core</td><td>4</td></tr><tr><td>Processor Thread</td><td>8</td></tr><tr><td>CPU Cache</td><td>L1 Cache: 256KB<br>L2 Cache: 2MB<br>L3 Cache: 4MB</td></tr><tr><td colspan=\"2\"><strong>Display</strong></td></tr><tr><td>Display Size</td><td>14\"</td></tr><tr><td>Display Type</td><td>TN</td></tr><tr><td>Display Resolution</td><td>FHD (1920 x 1080)</td></tr><tr><td>Touch Screen</td><td>N/A</td></tr><tr><td>Display Features</td><td>220nits Anti-glare; 170° Viewing Angle</td></tr><tr><td colspan=\"2\"><strong>Memory</strong></td></tr><tr><td>RAM</td><td>8GB (On Board)</td></tr><tr><td>RAM Type</td><td>DDR5</td></tr><tr><td>Removable</td><td>No</td></tr><tr><td>Bus Speed</td><td>5500MHz</td></tr><tr><td>Total RAM Slot</td><td>1</td></tr><tr><td colspan=\"2\"><strong>Storage</strong></td></tr><tr><td>Storage Type</td><td>NVMe PCIe SSD</td></tr><tr><td>Storage Capacity</td><td>500GB</td></tr><tr><td>Extra M.2 Slot</td><td>N/A</td></tr><tr><td>Supported SSD Type</td><td>PCIe NVMe M.2</td></tr><tr><td>Storage Upgrade</td><td>Installed SSD can be upgradeable</td></tr><tr><td colspan=\"2\"><strong>Graphics</strong></td></tr><tr><td>Graphics Model</td><td>AMD Radeon 610M</td></tr><tr><td>Graphics Memory</td><td>Shared</td></tr><tr><td colspan=\"2\"><strong>Keyboard &amp; TouchPad</strong></td></tr><tr><td>Keyboard Type</td><td>Standard</td></tr><tr><td>TouchPad</td><td>Yes</td></tr><tr><td colspan=\"2\"><strong>Camera &amp; Audio</strong></td></tr><tr><td>WebCam</td><td>Yes</td></tr><tr><td>Speaker</td><td>Yes</td></tr><tr><td>Microphone</td><td>Yes</td></tr><tr><td colspan=\"2\"><strong>Ports &amp; Slots</strong></td></tr><tr><td>Optical Drive</td><td>N/A</td></tr><tr><td>Card Reader</td><td>SD Media Card Reader</td></tr><tr><td>HDMI Port</td><td>1x HDMI 1.4b</td></tr><tr><td>USB 2 Port</td><td>1x USB 2.0 Type-A</td></tr><tr><td>USB 3 Port</td><td>1x USB 3.2 Gen 1 Type-A</td></tr><tr><td>USB Type-C / Thunderbolt Port</td><td>1x USB-C 3.2 Gen 1 (support data transfer only)</td></tr><tr><td>Headphone &amp; Microphone Port</td><td>1 x Headphone/ Microphone Port Combo</td></tr><tr><td colspan=\"2\"><strong>Network &amp; Connectivity</strong></td></tr><tr><td>WiFi</td><td>11ax, 2x2</td></tr><tr><td>Bluetooth</td><td>Bluetooth 5.0</td></tr><tr><td colspan=\"2\"><strong>Security</strong></td></tr><tr><td>Fingerprint Sensor</td><td>No</td></tr><tr><td colspan=\"2\"><strong>Software</strong></td></tr><tr><td>Operating System</td><td>Free Dos</td></tr><tr><td colspan=\"2\"><strong>Power</strong></td></tr><tr><td>Battery Type</td><td>3 Cell Li-ion</td></tr><tr><td>Battery Capacity</td><td>42Whr</td></tr><tr><td>Adapter Type</td><td>65W Round Tip (3-pin)</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Color</td><td>Cloud Grey</td></tr><tr><td>Dimensions</td><td>325.3 x 216.5 x 17.9 mm</td></tr><tr><td>Weight</td><td>1.38 kg</td></tr><tr><td colspan=\"2\"><strong>Warranty</strong></td></tr><tr><td>Warranty Details</td><td>2 years warranty ( Battery adapter 1 year)</td></tr></tbody></table></figure>', '<h2><strong>Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 500GB SSD 14\" FHD Laptop with DDR5 RAM</strong></h2><p>The Lenovo IdeaPad 1 14AMN7 is a stylish and powerful laptop that offers high-performance computing for a variety of jobs. This laptop can perform complex programs with ease thanks to an AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz). The processor has four cores and eight threads, allowing you to multitask effectively and effortlessly. This laptop has 8GB DDR5-5500 Memory, which offers smooth performance even while running many apps at the same time. The 500GB SSD PCIe offers plenty of storage capacity for your data, documents, and multimedia files. SSD technology enables rapid boot-up and load times, allowing you to complete your tasks quickly. The AMD Radeon 610M graphics provides exceptional graphics performance, making this laptop suitable for gaming and video editing. The 14-inch FHD (1920x1080) display provides clear and sharp graphics, letting you view high-quality entertainment without pixelation or blurring. This Lenovo IdeaPad 1 14AMN7 is a powerful and flexible laptop that can meet a variety of computing demands. Whether you\'re a student, professional, or gamer, this laptop is a dependable option that can manage your workload with ease.</p><h2><strong>Buy Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 500GB SSD 14\" FHD Laptop with DDR5 RAM&nbsp;from the best Computer Shop in BD</strong></h2><p>In Bangladesh, you can get the original&nbsp;<a href=\"https://www.startech.com.bd/lenovo-ideapad-1-14amn7-amd-ryzen-5-laptop\">Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 500GB SSD 14\" FHD Laptop with DDR5 RAM</a>&nbsp;from Star Tech. We have a large collection of the latest&nbsp;Lenovo&nbsp;<a href=\"https://www.startech.com.bd/laptop-notebook/laptop\">Laptops&nbsp;</a>to purchase. Order Online Or Visit your Nearest&nbsp;<a href=\"https://www.startech.com.bd/\">Star Tech Shop</a>&nbsp;to get yours at the lowest price. The Lenovo IdeaPad 1 14AMN7 AMD Ryzen 5 14\" FHD Laptop&nbsp;comes with &nbsp;2 years warranty ( Battery adapter 1 year).</p>', 0, 'in_stock', NULL, '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(7, 4, 2, 5, 'Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop', 'lenovo-ideapad-3-14aba7-ryzen-5-5625u-14-fhd-laptop', 'storage/product/1686765929648a0169adf1e1.webp', '648a0169ae239', 100000.00, 105000.00, 105000.00, 0.00, '<ul><li>MPN: 82RM006EIN</li><li>Model: IdeaPad 3 14ABA7</li><li>Processor: AMD Ryzen 5 5625U (16MB L3 Cache, 2.3GHz, up to 4.3GHz)</li><li>RAM: 8GB 3200MHZ RAM, SSD: 256GB NVMe PCIe</li><li>Display: 14\" FHD (1920x1080)</li><li>Features: Type-C, Privacy Shutter</li></ul>', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\"><strong>Processor</strong></th></tr></thead><tbody><tr><td>Processor Brand</td><td>AMD</td></tr><tr><td>Processor Model</td><td>Ryzen 5 5625U</td></tr><tr><td>Processor Frequency</td><td>2.3GHz, up to 4.3GHz</td></tr><tr><td>Processor Core</td><td>6</td></tr><tr><td>Processor Thread</td><td>12</td></tr><tr><td>CPU Cache</td><td>16MB</td></tr><tr><td colspan=\"2\"><strong>Display</strong></td></tr><tr><td>Display Type</td><td>14\"</td></tr><tr><td>Display Resolution</td><td>FHD (1920x1080)</td></tr><tr><td>Display Features</td><td>TN 250nits Anti-glare</td></tr><tr><td colspan=\"2\"><strong>Memory</strong></td></tr><tr><td>RAM</td><td>8GB</td></tr><tr><td>RAM Type</td><td>LPDDR4x</td></tr><tr><td>Bus Speed</td><td>3200MHZ</td></tr><tr><td>Total RAM Slot</td><td>2</td></tr><tr><td>Max RAM Capacity</td><td>Up to 16GB (8GB soldered + 8GB SO-DIMM) DDR4-3200</td></tr><tr><td colspan=\"2\"><strong>Storage</strong></td></tr><tr><td>Storage Type</td><td>PCIe NVMe 3.0 x2 M.2 SSD</td></tr><tr><td>Storage Capacity</td><td>256GB</td></tr><tr><td>Extra M.2 Slot</td><td>Yes</td></tr><tr><td>Storage Upgrade</td><td>M.2 2242 SSD up to 1TB<br>M.2 2280 SSD up to 1TB</td></tr><tr><td colspan=\"2\"><strong>Graphics</strong></td></tr><tr><td>Graphics Model</td><td>AMD Radeon</td></tr><tr><td>Graphics Memory</td><td>Shared</td></tr><tr><td>Graphics Type</td><td>Integrated</td></tr><tr><td colspan=\"2\"><strong>Keyboard &amp; TouchPad</strong></td></tr><tr><td>Keyboard Type</td><td>Non-backlit, English (EU)</td></tr><tr><td colspan=\"2\"><strong>Camera &amp; Audio</strong></td></tr><tr><td>WebCam</td><td>HD 720p</td></tr><tr><td>Speaker</td><td>Yes</td></tr><tr><td>Microphone</td><td>2x, Array</td></tr><tr><td>Audio Features</td><td>High Definition (HD) Audio, Stereo speakers, 1.5W x2, Dolby Audio<br>&nbsp;</td></tr><tr><td colspan=\"2\"><strong>Ports &amp; Slots</strong></td></tr><tr><td>Card Reader</td><td>4-in-1 Card Reader</td></tr><tr><td>HDMI Port</td><td>1x HDMI 1.4b</td></tr><tr><td>USB 2 Port</td><td>1x USB 2.0</td></tr><tr><td>USB 3 Port</td><td>1x USB 3.2 Gen 1<br>&nbsp;</td></tr><tr><td>USB Type-C / Thunderbolt Port</td><td>1x USB-C 3.2 Gen 1 (support data transfer, Power Delivery 3.0, and DisplayPort 1.2)</td></tr><tr><td>Headphone &amp; Microphone Port</td><td>1x Headphone/microphone combo jack (3.5mm)</td></tr><tr><td colspan=\"2\"><strong>Network &amp; Connectivity</strong></td></tr><tr><td>WiFi</td><td>Wi-Fi® 6, 11ax 2x2</td></tr><tr><td>Bluetooth</td><td>BT5.1</td></tr><tr><td colspan=\"2\"><strong>Security</strong></td></tr><tr><td>Fingerprint Sensor</td><td>N/A</td></tr><tr><td>Camera Privacy Shutter</td><td>Camera privacy shutter</td></tr><tr><td>Security Chip</td><td>Firmware TPM 2.0</td></tr><tr><td colspan=\"2\"><strong>Software</strong></td></tr><tr><td>Operating System</td><td>Free Dos</td></tr><tr><td colspan=\"2\"><strong>Power</strong></td></tr><tr><td>Battery Type</td><td>Integrated</td></tr><tr><td>Battery Capacity</td><td>45Wh</td></tr><tr><td>Adapter Type</td><td>65W Round Tip (3-pin)</td></tr><tr><td colspan=\"2\"><strong>Physical Specification</strong></td></tr><tr><td>Color</td><td>Arctic Grey</td></tr><tr><td>Dimensions</td><td>324.2 x 215.7 x 19.9 mm (12.76 x 8.49 x 0.78 inches)</td></tr><tr><td>Weight</td><td>1.43 kg (3.15 lbs)</td></tr><tr><td>Body Material</td><td>PC-ABS (Top), PC-ABS (Bottom)</td></tr><tr><td colspan=\"2\"><strong>Warranty</strong></td></tr><tr><td>Warranty Details</td><td>02 years Limited Warranty (Terms &amp; Conditions Apply As Per Lenovo)</td></tr></tbody></table></figure>', '<h2><strong>Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop</strong></h2><p>The Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U is a high-performance <a href=\"https://www.startech.com.bd/laptop-notebook/laptop\">laptop</a> with an AMD Ryzen 5 5625U processor, which has a 16MB L3 cache and runs at 2.3GHz, with a maximum clock speed of 4.3GHz. It comes with 8GB of RAM that runs at 3200MHz and a 256GB NVMe PCIe SSD, which offers fast read and write speeds. The laptop features a 14\" FHD (1920x1080) TN display with 250nits brightness and an anti-glare coating that reduces glare and reflections. It has integrated AMD Radeon Graphics, which offers smooth graphics performance for video editing, gaming, and other intensive tasks. The Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U comes with various connectivity options, including a Type-C port, a privacy shutter, 1x USB 2.0, 1x USB 3.2 Gen 1, 1x USB-C 3.2 Gen 1, 1x HDMI 1.4b, 1x card reader, and a headphone/microphone combo jack (3.5mm). The USB-C port supports data transfer, Power Delivery 3.0, and DisplayPort 1.2, making it easy to connect to external displays or charge the laptop. The Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U is a powerful laptop that offers fast performance, smooth graphics, and a range of connectivity options, making it ideal for both personal and professional use.</p><h2><strong>Buy Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop from the best Computer Shop in BD</strong></h2><p>In Bangladesh, you can get the original&nbsp;<a href=\"https://www.startech.com.bd/lenovo-ideapad-3-14aba7-ryzen-5-5625u-fhd-laptop\">Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop</a>&nbsp;from Star Tech. We have a large collection of the latest&nbsp;<a href=\"https://www.startech.com.bd/laptop-notebook/laptop/lenovo-laptop\">Lenovo&nbsp;Laptops</a>&nbsp;to purchase. Order Online Or Visit your Nearest&nbsp;<a href=\"https://www.startech.com.bd/\">Star Tech Shop</a>&nbsp;to get yours at the lowest price. The Lenovo IdeaPad 3 14ABA7 Ryzen 5 5625U 14\" FHD Laptop&nbsp;comes with&nbsp; 02 years Limited Warranty (Terms &amp; Conditions Apply As Per Lenovo).</p>', 0, 'in_stock', NULL, '2023-06-14 12:05:29', '2023-06-14 12:05:29');

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
(24, 7, 'storage/product/1686765929648a0169b45835.webp', '2023-06-14 12:05:29', '2023-06-14 12:05:29');

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
(1, 5, 1, '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(2, 5, 2, '2023-06-14 08:24:12', '2023-06-14 08:24:12'),
(3, 6, 1, '2023-06-14 12:02:31', '2023-06-14 12:02:31');

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
(5, 2, 'Gaming Laptop', 'gaming-laptop', NULL, '2023-06-14 12:00:00', '2023-06-14 12:00:00');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `home_page_products`
--
ALTER TABLE `home_page_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `related_products`
--
ALTER TABLE `related_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
