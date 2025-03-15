-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2025 at 06:56 PM
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
-- Database: `blrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `sub_title`, `description`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'Aut neque non placeat sunt in sed eum.', 'Ea minus vero enim laudantium non enim id.', 'Facere in facilis quae itaque nobis ipsum tempora beatae. Est non aut cumque est. Sunt sint officiis sunt deleniti ipsam harum inventore.', 'Laborum vitae ipsum aut praesentium omnis non aut.', '2025-01-09 10:48:11', '2025-01-09 10:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `apni_janen_kis`
--

CREATE TABLE `apni_janen_kis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `protibedon` text NOT NULL,
  `media_path` varchar(255) NOT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apni_janen_kis`
--

INSERT INTO `apni_janen_kis` (`id`, `title`, `slug`, `protibedon`, `media_path`, `is_feature`, `created_at`, `updated_at`) VALUES
(1, 'technological advancements have played a significant role in shaping our daily lives.', 'technological-advancements-have-played-a-significant-role-in-shaping-our-daily-lives', 'The world is constantly evolving, and technological advancements have played a significant role in shaping our daily lives. From smartphones to artificial intelligence, innovation continues to transform industries and societies. These developments provide new opportunities for growth and creativity but also present challenges that need to be addressed, such as privacy concerns and the digital divide. As we move forward, it\'s crucial to strike a balance between progress and responsibility, ensuring that technology serves as a tool for the betterment of humanity, fostering collaboration, and creating solutions to pressing global issues like climate change, healthcare, and education.', 'uploads/media/zoYKH1yM6YnkhcKSq9RThXujkSTWoW99R3FdZWNJ.mp4', 0, '2025-01-10 20:15:37', '2025-01-12 17:56:25'),
(3, 'MY', 'my', 'fbvdbdf', 'uploads/media/EWNb6BS7SvZmtPPr3ThWhmcEMCo0tu3mVDsNvYWK.jpg', 0, '2025-01-11 03:36:33', '2025-01-11 18:08:20'),
(4, 'বরিশালের মতবিনিময় সভা', 'brisaler-mtbinimy-sva', 'নির্বাচন কমিশনার ব্রিগেডিয়ার জেনারেল (অব.) আবুল ফজল মো. সানাউল্লাহ বলেছেন, ভোটার তালিকা বিতর্কিত হওয়ার পেছনে তিনটি কারণ চিহ্নিত করেছে কমিশন। এজন্য তারা বাড়ি বাড়ি হালনাগাদ করার উদ্যোগ নিয়েছে। বৃহস্পতিবার নির্বাচন ভবনে আয়োজিত এক ব্রিফিংয়ে তিনি সাংবাদিকদের এ তথ্য জানান। বিভিন্ন টকশোতে বলা হচ্ছে ভোটার তালিকা সঠিক নয়। আজ (বৃহস্পতিবার) যে খসড়া ভোটার তালিকা প্রকাশ করলেন তা সঠিক কি না— জানতে চাইলে ইসি আবুল ফজল বলেন, বিতর্কিত ভোটার তালিকা আমরা বিভিন্ন গণমাধ্যমে বিভিন্ন সময় দেখেছি। আপনারা আলোচনা করেছেন এবং আমাদের সাধারণ মানুষের মাঝেও এ ধরনের একটা পারসেপশন আছে। আমাদের বাড়ি বাড়ি যাচাই করতে যাওয়ার অন্যতম প্রধান উদ্দেশ্য হলো এটি। তিনি বলেন, এ কমিশন দায়িত্ব নেওয়ার পর শুদ্ধ ভোটার তালিকা ছাড়া কনফিডেন্ট মনে করছি না। এজন্য বাড়ি বাড়ি গিয়ে যাচাই করা। আমাদের কাছে প্রতীয়মান হয়েছে, ভোটার তালিকাকে যে বিতর্কিত বলছি, আমরা শুদ্ধতার অভাব বলছি, এটি মূলত তিনটি কারণে হচ্ছে। তিনি বলেন, প্রথম কারণ— মৃত ভোটারদের তালিকা থেকে বাদ না পড়া।', 'uploads/media/KPxHoIjkolffvVWbLQ7571EnBeQznoAaNffGLJvL.jpg', 0, '2025-01-11 18:25:36', '2025-01-11 18:25:36'),
(5, 'dfvbddg', 'dfvbddg', 'dgdgfgdgdgdg', 'uploads/media/GTLzNnmlWHiXRVjJT7s9VkLVV6M7whUEKYgxnyJf.jpg', 0, '2025-01-11 18:25:54', '2025-01-11 18:44:49'),
(6, 'dgtjhkkmhbjmkjmj  xss fdfvxfgf  xv svsdf gfh', 'dgtjhkkmhbjmkjmj-xss-fdfvxfgf-xv-svsdf-gfh', 'sfsf ggfg gfggg gf', 'uploads/media/xvyujneWadt7QbcZJyzxTKXaimjdG7emYSGK8cdf.jpg', 0, '2025-01-11 18:26:21', '2025-01-11 18:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comissions`
--

CREATE TABLE `comissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext DEFAULT NULL,
  `button_text_1` varchar(255) DEFAULT NULL,
  `gadget_file_1` varchar(255) DEFAULT NULL,
  `button_text_2` varchar(255) DEFAULT NULL,
  `gadget_file_2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comissions`
--

INSERT INTO `comissions` (`id`, `description`, `button_text_1`, `gadget_file_1`, `button_text_2`, `gadget_file_2`, `created_at`, `updated_at`) VALUES
(1, 'Sample and sample 2 test descriptions', 'Sample 1', 'comission/gadget_files/MBNkOFwtDcudokw4IJWYCWPwwWUUbEztgiQhU2hF.pdf', 'Sample 2', 'comission/gadget_files/hJyWEEC74PLiRR31TYjhIUqQ7z8jMaQ1C0BsO5Ff.pdf', NULL, '2025-01-13 17:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `comission_members`
--

CREATE TABLE `comission_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `member_image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comission_members`
--

INSERT INTO `comission_members` (`id`, `name`, `slug`, `designation`, `title`, `description`, `member_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amit Roy', 'amit-roy', 'vssvsv', 'svsvvsvs', '<p>svsvsvsdad</p>', 'comission/member/ZWb1LhwQBvwwvdrzmXMZZ7orthqk6d5PcXl2ka9p.jpg', 1, '2025-01-13 16:46:30', '2025-01-13 17:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `map` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `address`, `phone`, `email`, `map`, `created_at`, `updated_at`) VALUES
(1, 'শ্রম সংস্কার কমিশনে যোগাযোগের ঠিকানা', 'শ্রম ভবন, ১৯৬, শহীদ সৈয়দ নজরুল ইসলাম সরণি, বিজয়নগর, ঢাকা-১০০০।', '+৮৮-০২- ২২৬৬৬৪২০১', 'ig@dife.gov.bd', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7304.701865637648!2d90.410047!3d23.734862!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b96511a6d3b1%3A0x5b77bae284a1d16c!2z4Ka24KeN4Kaw4KauIOCmreCmrOCmqA!5e0!3m2!1sen!2sbd!4v1735640500981!5m2!1sen!2sbd\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2025-01-12 05:02:03', '2025-01-12 05:49:09');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_category_id`, `title`, `image`, `video`, `video_url`, `status`, `created_at`, `updated_at`) VALUES
(7, 3, 'ছবি/কার্যক্রমের নাম', 'uploads/gallery/images/1736788780.jpg', NULL, NULL, 1, '2025-01-10 16:19:24', '2025-01-13 17:19:40'),
(8, 3, 'ছবি/কার্যক্রমের নাম', 'uploads/gallery/images/1736788789.jpg', NULL, NULL, 1, '2025-01-10 16:19:35', '2025-01-13 17:19:49'),
(9, 3, 'ছবি/কার্যক্রমের নাম', 'uploads/gallery/images/1736788809.jpg', NULL, NULL, 1, '2025-01-10 16:19:47', '2025-01-13 17:20:09'),
(10, 3, 'ছবি/কার্যক্রমের নাম', 'uploads/gallery/images/1736788826.jpg', NULL, NULL, 1, '2025-01-10 16:20:15', '2025-01-13 17:20:26'),
(11, 4, 'ছবি/কার্যক্রমের নাম', 'uploads/gallery/images/1736788817.png', NULL, NULL, 1, '2025-01-10 16:20:34', '2025-01-13 17:20:17'),
(12, 5, 'ছবি/কার্যক্রমের নাম', 'uploads/gallery/images/1736788799.jpg', NULL, NULL, 1, '2025-01-10 16:20:47', '2025-01-13 17:19:59'),
(14, 5, 'Video', NULL, 'uploads/gallery/videos/1736788892.mp4', NULL, 1, '2025-01-13 17:21:32', '2025-01-13 17:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'সকল ছবি', 1, '2025-01-10 15:51:37', '2025-01-10 15:51:37'),
(3, 'ক্যাটাগরি-২', 1, '2025-01-10 16:00:50', '2025-01-10 16:00:50'),
(4, 'ক্যাটাগরি-৩', 1, '2025-01-10 16:00:58', '2025-01-10 16:00:58'),
(5, 'ক্যাটাগরি-৪', 1, '2025-01-10 16:01:06', '2025-01-10 16:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `komishoner_karjokroms`
--

CREATE TABLE `komishoner_karjokroms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `protibedon` text NOT NULL,
  `media_path` varchar(255) NOT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komishoner_karjokroms`
--

INSERT INTO `komishoner_karjokroms` (`id`, `category`, `title`, `slug`, `protibedon`, `media_path`, `button_text`, `document`, `is_feature`, `created_at`, `updated_at`) VALUES
(1, '1', 'বরিশালের মতবিনিময় সভা', 'brisaler-mtbinimy-sva', 'নির্বাচন কমিশনার ব্রিগেডিয়ার জেনারেল (অব.) আবুল ফজল মো. সানাউল্লাহ বলেছেন, ভোটার তালিকা বিতর্কিত হওয়ার পেছনে তিনটি কারণ চিহ্নিত করেছে কমিশন। এজন্য তারা বাড়ি বাড়ি হালনাগাদ করার উদ্যোগ নিয়েছে। বৃহস্পতিবার নির্বাচন ভবনে আয়োজিত এক ব্রিফিংয়ে তিনি সাংবাদিকদের এ তথ্য জানান। বিভিন্ন টকশোতে বলা হচ্ছে ভোটার তালিকা সঠিক নয়। আজ (বৃহস্পতিবার) যে খসড়া ভোটার তালিকা প্রকাশ করলেন তা সঠিক কি না— জানতে চাইলে ইসি আবুল ফজল বলেন, বিতর্কিত ভোটার তালিকা আমরা বিভিন্ন গণমাধ্যমে বিভিন্ন সময় দেখেছি। আপনারা আলোচনা করেছেন এবং আমাদের সাধারণ মানুষের মাঝেও এ ধরনের একটা পারসেপশন আছে। আমাদের বাড়ি বাড়ি যাচাই করতে যাওয়ার অন্যতম প্রধান উদ্দেশ্য হলো এটি। তিনি বলেন, এ কমিশন দায়িত্ব নেওয়ার পর শুদ্ধ ভোটার তালিকা ছাড়া কনফিডেন্ট মনে করছি না। এজন্য বাড়ি বাড়ি গিয়ে যাচাই করা। আমাদের কাছে প্রতীয়মান হয়েছে, ভোটার তালিকাকে যে বিতর্কিত বলছি, আমরা শুদ্ধতার অভাব বলছি, এটি মূলত তিনটি কারণে হচ্ছে। তিনি বলেন, প্রথম কারণ— মৃত ভোটারদের তালিকা থেকে বাদ না পড়া। দ্বিতীয়ত- দ্বৈত ভোটার তালিকাভুক্ত হওয়ার সম্ভাবনা আর তৃতীয়ত- বিদেশি নাগরিক প্রতারণার মাধ্যমে তালিকা ভুক্ত হয়েছেন কি না। সম্প্রতি আমরা একাধিক এমন ইনসিডেন্ট পেয়েছি। এই নির্বাচন কমিশনার বলেন, চট্টগ্রাম এলাকায় রোহিঙ্গারা যাতে ভোটার হতে না পারেন, সেজন্য একটা বিশাল ব্যবস্থাপনা আছে এবং ওই এলাকাকে বিশেষ এলাকা ঘোষণা করে সেখানে আলাদাভাবে ভোটার তালিকাভুক্ত করা হয়। এ কড়াকড়ি থেকে বাঁচতে ৩০ জন রোহিঙ্গা নীলফামারী সদরে গিয়ে ভোটার হয়েছেন। এগুলোর প্রমাণ আমাদের সামনে আছে। এভাবে আমাদের ভোটার তালিকা বিতর্কিত হয়েছে। তিনি বলেন, আমাদের তথ্য সংগ্রহকারীরা বাড়ি বাড়ি তথ্য সংগ্রহ করতে যান, সেখানে স্থানীয় কোনও ব্যক্তি আমাদের সহায়তা করেন, সেখানে দেখা যায় নিজের ভোটার যারা আছে তাদের বয়স বাড়িয়ে ভোটার তালিকায় অন্তর্ভুক্ত করে ফেলেন। আবার দেখা যায় অন্য কারও ১৮-১৯ বছর হলেও ভোটার তালিকাভুক্ত হতে দেন না। তিনি আরও বলেন, এর বাইরেও আরও অনেক ধরনের কারণ আছে। তবে এগুলো মূল। আমরা এবার সেভাবে সেনসিটাইজ (সংবেদনশীল) করছি। ইতোমধ্যে আমাদের কর্মকর্তাদের সঙ্গে কথা বলেছি। ইতোমধ্যে আমাদের প্রধান নির্বাচন কমিশনার দুটি বিভাগ পরিদর্শন করেছেন। আমরা কমিশনাররাও পরিদর্শনে বের হব। আমাদের ডিজি এনআইডিসহ আমাদের সচিবালয়ে সংশ্লিষ্ট দায়িত্বপ্রাপ্ত কর্মকর্তারাও মাঠ পর্যায়ে যাচ্ছেন। পাশাপাশি কমিশন প্রশিক্ষণের ব্যবস্থা করেছে। আশা করছি আমরা একটা সন্তুষ্টির জায়গায় পৌঁছাতে পারব ভোটার তালিকার বিষয়টি নিয়ে। নির্বাচন ব্যবস্থা সংস্কার কমিশন সংস্কার প্রতিবেদন জমা দেওয়ার আগে বাড়ি বাড়ি গিয়ে ভোটার তালিকা হালনাগাদ কার্যক্রম- সংস্কার কমিশনের প্রস্তাবের সঙ্গে ওভারল্যাপিং হবে কি না— এ ব্যাপারে জানতে চাইলে তিনি বলেন, আমরা তা মনে করছি না। কারণ সংস্কার কমিশন যে সংস্কার প্রস্তাব দিক না কেন ভোটার তালিকা তো একটা লাগবে। ভোটার তালিকা ছাড়া তো আর ভোট হবে না। আমরা মনে করি না যে ভোটার তালিকা রিলেটেড আমরা কোনও সমস্যা ফেস করব। নির্বাচন কমিশনের মাঠ কার্যালয়গুলোতে প্রচুর ভোগান্তি হয়। এ পর্যন্ত এ ভোগান্তি নিরসনে কোনও পদক্ষেপ নিয়েছেন কি না— জানতে চাইলে তিনি বলেন, মাঠপর্যায়ে এনআইডি সেবায় যথেষ্ট ভোগান্তি হচ্ছে আমরা দেখছি। আমরা চিহ্নিত করেছি প্রায় চার লাখের কাছাকাছি, তিন লাখ ৭৮ হাজার আবেদন পেন্ডিং ছিল। আমরা কঠোর নির্দেশনা দিয়েছি এবং আমাদের সচিবালয় থেকে আমাদের সচিব, ডিজি এনআইডিসহ সবাই ক্রাশ প্রোগ্রাম হাতে নিয়েছেন। যাতে দ্রুত সময়ের মধ্যে নাগরিকরা তাদের বৈধ সেবা পান। তবে এ কথাও সত্য এসব আবেদনের মধ্যে উল্লেখযোগ্য আবেদন রয়েছে, যারা প্রতারণার আশ্রয় নিতে চাচ্ছেন বলে আমাদের কাছে প্রতীয়মান। তাদের জন্য যাতে নাগরিকেরা ভোগান্তিতে না পড়েন সেজন্য আমরা আরও ভালো পদ্ধতি নিতে যাচ্ছি। ২০ জানুয়ারি থেকে বাড়ি বাড়ি গিয়ে ভোটার হালনাগাদ করার এ কার্যক্রম কতদিন চলবে— এমন প্রশ্নের জবাবে তিনি বলেন, আমরা যদি ভালোভাবে কাজ করতে পারি তাহলে ৩০ জুনের মধ্যে আমরা এটি সম্পন্ন করতে পারব। ডিসেম্বরের শেষে যদি সংসদ নির্বাচন হয় তাহলে আপনারা যাদের বাড়ি বাড়ি গিয়ে ভোটার করছেন তারা কি নির্বাচন ভোট দিতে পারবেন কি না এবং আইন সংশোধন করে তাদের বিষয়ে কোনও সিদ্ধান্ত নেবেন কি না— এমন প্রশ্নের জবাবে ইসি আবুল ফজল বলেন, আমাদের প্রধান উপদেষ্টা নির্বাচন নিয়ে বলেছেন- ২০২৫ সালের ডিসেম্বর থেকে ২০২৬ সালের জুনের মধ্যে নির্বাচন তিনি আশা করছেন। আমাদের নির্বাচন করার জন্য প্রস্তুতি নিতে হবে। আমরা সবসময় প্রস্তুত। তিনি বলেন, ভোটার তালিকা প্রণয়ন করাও এক ধরনের প্রস্তুতি। আমাদের এ ভোটার তালিকা সন্নিবেশ করতে আইনি কোনও জটিলতা নেই। তফসিল ঘোষণার আগে একটি তালিকা প্রকাশ হবে। সেই তালিকায় আমরা তাদের অন্তর্ভুক্ত করব। দ্বিতীয়ত এ বছরে যারা ভোটার হবেন অর্থাৎ ২০২৫ সালের ২ জানুয়ারি থেকে ২০২৬ সালের ১ জানুয়ারি যাদের বয়স ১৮ হবে। তিনি বলেন, বর্তমান আইন অনুযায়ী ভোটার নিবন্ধন আইনের ধারা ৩(জ) অনুযায়ী যোগ্যতার তারিখ হলো প্রতি বছরের ০১ জানুয়ারি। একটি নীতিগত সিদ্ধান্ত নিয়ে আলোচনা করেছি যে উল্লেখযোগ্য সংখ্যক তরুণ ভোটার হওয়ার যোগ্য হয়ে গিয়েছেন ভোটের আগে, তাহলে প্রয়োজনে অর্ডিন্যান্স জারি করে ভোটার তালিকায় অন্তর্ভুক্ত করা যায় কি না। এই সম্ভাবনাটা আমরা যাচাই করে দেখব। এটা এখনও পর্যন্ত নিশ্চিত নয়। ভোটারের সর্বনিম্ন বয়স ১৭ করার বিষয়ে কমিশন কী ভাবছে— জানতে চাইলে এই নির্বাচন কমিশনার বলেন, ১৭ বছর বয়সে ভোটার নিয়ে আমাদের প্রধান উপদেষ্টা তার ব্যক্তিগত মতামত দিয়েছেন। আমরা শুনেছি। এ নিয়ে আলোচনা চলছে। যদি ভবিষ্যতে রাজনৈতিক কোনও মতৈক্য হয়, কোনও সিদ্ধান্ত আসে, যদি সংবিধানে পরিবর্তন আসে, আমরা সেই অনুযায়ী ব্যবস্থা নেব।', 'uploads/media/hzVCdnLZ6g5doBPc2QyWOiFxUQ89rGhjlt1LfjVI.jpg', 'Report', 'uploads/documents/ZRHcvSmJWx2kxHzXaSDwrN81yOhuj9iVlThrGhjd.pdf', 0, '2025-01-12 17:38:33', '2025-01-12 18:54:01'),
(2, '2', 'বাংলাদেশ: শ্রম অপব্যবহার থেকে শিপিং ফার্ম লাভ', 'banglades-srm-opbzbhar-theke-siping-farm-lav', 'নির্বাচন ব্যবস্থা সংস্কার কমিশন সংস্কার প্রতিবেদন জমা দেওয়ার আগে বাড়ি বাড়ি গিয়ে ভোটার তালিকা হালনাগাদ কার্যক্রম- সংস্কার কমিশনের প্রস্তাবের সঙ্গে ওভারল্যাপিং হবে কি না— এ ব্যাপারে জানতে চাইলে তিনি বলেন, আমরা তা মনে করছি না। কারণ সংস্কার কমিশন যে সংস্কার প্রস্তাব দিক না কেন ভোটার তালিকা তো একটা লাগবে। ভোটার তালিকা ছাড়া তো আর ভোট হবে না। আমরা মনে করি না যে ভোটার তালিকা রিলেটেড আমরা কোনও সমস্যা ফেস করব। নির্বাচন কমিশনের মাঠ কার্যালয়গুলোতে প্রচুর ভোগান্তি হয়। এ পর্যন্ত এ ভোগান্তি নিরসনে কোনও পদক্ষেপ নিয়েছেন কি না— জানতে চাইলে তিনি বলেন, মাঠপর্যায়ে এনআইডি সেবায় যথেষ্ট ভোগান্তি হচ্ছে আমরা দেখছি। আমরা চিহ্নিত করেছি প্রায় চার লাখের কাছাকাছি, তিন লাখ ৭৮ হাজার আবেদন পেন্ডিং ছিল। আমরা কঠোর নির্দেশনা দিয়েছি এবং আমাদের সচিবালয় থেকে আমাদের সচিব, ডিজি এনআইডিসহ সবাই ক্রাশ প্রোগ্রাম হাতে নিয়েছেন। যাতে দ্রুত সময়ের মধ্যে নাগরিকরা তাদের বৈধ সেবা পান। তবে এ কথাও সত্য এসব আবেদনের মধ্যে উল্লেখযোগ্য আবেদন রয়েছে, যারা প্রতারণার আশ্রয় নিতে চাচ্ছেন বলে আমাদের কাছে প্রতীয়মান। তাদের জন্য যাতে নাগরিকেরা ভোগান্তিতে না পড়েন সেজন্য আমরা আরও ভালো পদ্ধতি নিতে যাচ্ছি। ২০ জানুয়ারি থেকে বাড়ি বাড়ি গিয়ে ভোটার হালনাগাদ করার এ কার্যক্রম কতদিন চলবে— এমন প্রশ্নের জবাবে তিনি বলেন, আমরা যদি ভালোভাবে কাজ করতে পারি তাহলে ৩০ জুনের মধ্যে আমরা এটি সম্পন্ন করতে পারব। ডিসেম্বরের শেষে যদি সংসদ নির্বাচন হয় তাহলে আপনারা যাদের বাড়ি বাড়ি গিয়ে ভোটার করছেন তারা কি নির্বাচন ভোট দিতে পারবেন কি না এবং আইন সংশোধন করে তাদের বিষয়ে কোনও সিদ্ধান্ত নেবেন কি না— এমন প্রশ্নের জবাবে ইসি আবুল ফজল বলেন, আমাদের প্রধান উপদেষ্টা নির্বাচন নিয়ে বলেছেন- ২০২৫ সালের ডিসেম্বর থেকে ২০২৬ সালের জুনের মধ্যে নির্বাচন তিনি আশা করছেন। আমাদের নির্বাচন করার জন্য প্রস্তুতি নিতে হবে। আমরা সবসময় প্রস্তুত। তিনি বলেন, ভোটার তালিকা প্রণয়ন করাও এক ধরনের প্রস্তুতি। আমাদের এ ভোটার তালিকা সন্নিবেশ করতে আইনি কোনও জটিলতা নেই। তফসিল ঘোষণার আগে একটি তালিকা প্রকাশ হবে। সেই তালিকায় আমরা তাদের অন্তর্ভুক্ত করব। দ্বিতীয়ত এ বছরে যারা ভোটার হবেন অর্থাৎ ২০২৫ সালের ২ জানুয়ারি থেকে ২০২৬ সালের ১ জানুয়ারি যাদের বয়স ১৮ হবে। তিনি বলেন, বর্তমান আইন অনুযায়ী ভোটার নিবন্ধন আইনের ধারা ৩(জ) অনুযায়ী যোগ্যতার তারিখ হলো প্রতি বছরের ০১ জানুয়ারি। একটি নীতিগত সিদ্ধান্ত নিয়ে আলোচনা করেছি যে উল্লেখযোগ্য সংখ্যক তরুণ ভোটার হওয়ার যোগ্য হয়ে গিয়েছেন ভোটের আগে, তাহলে প্রয়োজনে অর্ডিন্যান্স জারি করে ভোটার তালিকায় অন্তর্ভুক্ত করা যায় কি না। এই সম্ভাবনাটা আমরা যাচাই করে দেখব। এটা এখনও পর্যন্ত নিশ্চিত নয়। ভোটারের সর্বনিম্ন বয়স ১৭ করার বিষয়ে কমিশন কী ভাবছে— জানতে চাইলে এই নির্বাচন কমিশনার বলেন, ১৭ বছর বয়সে ভোটার নিয়ে আমাদের প্রধান উপদেষ্টা তার ব্যক্তিগত মতামত দিয়েছেন। আমরা শুনেছি। এ নিয়ে আলোচনা চলছে। যদি ভবিষ্যতে রাজনৈতিক কোনও মতৈক্য হয়, কোনও সিদ্ধান্ত আসে, যদি সংবিধানে পরিবর্তন আসে, আমরা সেই অনুযায়ী ব্যবস্থা নেব।', 'uploads/media/vRZwzBtkTmyG9x7G8KoSDolgiTrTYISAbqDAYovK.jpg', 'Invoice', 'uploads/documents/35RXxNfwx3a5yFv1daVvJBgb4GkIwKcji9FtOBDU.pdf', 0, '2025-01-12 17:40:42', '2025-01-12 17:40:42'),
(3, '1', 'বাংলাদেশ ফার্ম লাভ', 'banglades-farm-lav', 'fvdgdgd', 'uploads/media/TWGZqMgwHXNncBecvli9dXjwY56epE2yXbrJiFQv.jpg', NULL, NULL, 0, '2025-01-12 18:18:17', '2025-01-12 18:18:17'),
(4, '1', 'sdsfsf', 'sdsfsf', 'sfsfsf', 'uploads/media/MWL83MMyKu3V0lv2TZgr6e1h8THp179wppRsZnYm.jpg', NULL, NULL, 0, '2025-01-12 18:18:33', '2025-01-12 18:18:33'),
(5, '1', 'efd', 'efd', 'fef', 'uploads/media/eMze0AWNRI6MIsiTHrLCHXt0m8yNErWqTWWGdljW.jpg', NULL, NULL, 0, '2025-01-12 18:49:49', '2025-01-12 18:49:49'),
(6, '1', 'sfsdf rt r r rtyhty', 'sfsdf-rt-r-r-rtyhty', 'wetfkuuiklul', 'uploads/media/SPLudgpmhX5zoFDFttkFWcFPuo6GBF9WeSmf6aK7.jpg', NULL, NULL, 0, '2025-01-12 18:50:08', '2025-01-12 18:50:08'),
(7, '1', 'dgoi gy t wr jkklhf  f', 'dgoi-gy-t-wr-jkklhf-f', 'fgh hhjgh', 'uploads/media/3bsGjoGm9JdZAoyby1cWWXMQmPQ3KSUMu0C73ZXa.png', NULL, NULL, 0, '2025-01-12 18:50:45', '2025-01-12 18:50:45'),
(8, '2', 'rtgr hb', 'rtgr-hb', 'rbhrhbh', 'uploads/media/ZvEMaA2cECTGG9aapq703bSo0yF1SeGi700OnfEP.png', NULL, NULL, 0, '2025-01-12 18:51:15', '2025-01-12 18:51:15'),
(9, '2', 'bghfhfh d trrf', 'bghfhfh-d-trrf', 'gfdhf h', 'uploads/media/eepBCYV7c8mZ0ZSRDcYogCBTFJjSk2KMoPVxU4Zf.png', NULL, NULL, 0, '2025-01-12 18:52:15', '2025-01-12 18:52:15'),
(10, '3', 'gg dgd gd', 'gg-dgd-gd', 'gdd gd', 'uploads/media/xwlXxOV4YaL19Px3gTFKXjF6f5UB83LrvIa5pqmw.png', NULL, NULL, 0, '2025-01-12 18:53:09', '2025-01-12 18:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `komishoner_karjokrom_categories`
--

CREATE TABLE `komishoner_karjokrom_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komishoner_karjokrom_categories`
--

INSERT INTO `komishoner_karjokrom_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'মত বিনিময় সভা', '2025-01-12 17:36:36', '2025-01-12 17:36:36'),
(2, 'প্রতিনিধি সাক্ষাৎ', '2025-01-12 17:36:47', '2025-01-12 17:36:47'),
(3, 'মত  সভা', '2025-01-12 18:52:53', '2025-01-12 18:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `kormo_poridhis`
--

CREATE TABLE `kormo_poridhis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kormo_poridhis`
--

INSERT INTO `kormo_poridhis` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'শ্রম সংস্কার কমিশনের উদ্দেশ্য ও কার্যপরিধি', 'বাংলাদেশের সকল (প্রাতিষ্ঠানিক ও অপ্রাতিষ্ঠানিক) শ্রমিকের অধিকার ও মর্যাদাপূর্ণ জীবনযাপন নিশ্চিত করার লক্ষ্যে সবার জন্য শোভন কাজÑ কাজের নিরাপত্তা, ন্যায্য মজুরি, নিরাপদ কর্মপরিবেশ, সর্বজনীন সামাজিক নিরাপত্তা, সংগঠন ও দরকষাকষির অধিকার এবং ন্যায়বিচার পাওয়ার অধিকারÑ সুরক্ষা ও উন্নয়নে সুপারিশ প্রণয়ন করা যা সুষ্ঠু শিল্পসম্পর্ক চর্চার পরিবেশ তৈরি এবং টেকসই ও অন্তর্ভুক্তিমূলক উন্নয়ন, বৈষম্যহীন ও ন্যায়ভিত্তিক সমাজ প্রতিষ্ঠা এবং মর্যাদাকর বাংলাদেশ গড়ে তোলার অভিযাত্রায় অবদান রাখবে। উপরোক্ত উদ্দেশ্য বিবেচনায় রেখে কমিশন নি¤েœাক্ত বিষয়াদি পর্যালোচনাপূর্বক সুপারিশ প্রণয়ণ করবে', '2025-01-09 17:00:26', '2025-01-13 17:16:44');

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
(5, '2024_12_03_171931_create_sliders_table', 1),
(6, '2024_12_04_053804_create_about_us_table', 1),
(7, '2024_12_05_055018_create_settings_table', 1),
(8, '2024_12_05_081657_create_user_logs_table', 1),
(9, '2024_12_11_145423_create_contacts_table', 1),
(11, '2024_12_20_212450_create_blogs_table', 1),
(12, '2024_12_21_100352_create_galleries_table', 1),
(16, '2025_01_11_015408_create_apni_janen_kis_table', 2),
(17, '2025_01_10_232554_create_motamotdins_table', 3),
(18, '2025_01_12_131441_create_komishoner_karjokrom_categories_table', 3),
(19, '2025_01_12_145939_create_komishoner_karjokroms_table', 3),
(20, '2024_12_20_160700_create_comission_members_table', 4),
(21, '2025_01_06_102049_create_comissions_table', 5),
(22, '2025_01_12_121442_create_prostabona_somuhos_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `motamotdins`
--

CREATE TABLE `motamotdins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `poridhis`
--

CREATE TABLE `poridhis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poridhis`
--

INSERT INTO `poridhis` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '১. শ্রম সংক্রান্ত আইন ও নীতিসমূহ পর্যালোচনা:', 'বাংলাদেশে বিদ্যমান শ্রম সংক্রান্ত সকল নীতি, আইন, বিধি ও সংশ্লিষ্ট দলিলাদি যার মধ্যে উল্লেখযোগ্য হচ্ছে বাংলাদেশ শ্রম আইন ২০০৬, ইপিজেড শ্রম আইন ২০১৯, শ্রমনীতি ২০১২, জাতীয় পেশাগত স্বাস্থ্য সেইফটি নীতিমালা ২০১৩, গৃহকর্মী সুরক্ষা ও কল্যাণ নীতি ২০১৫, শিশুশ্রম নিরসন নীতিমালা ২০১০ এবং শ্রমিক কল্যাণ ফাউন্ডেশন আইন ২০০৬ পর্যালোচনা ও সুপারিশ তৈরি করা', '2025-01-10 07:09:00', '2025-01-13 17:16:22'),
(2, '২. বাস্তবায়ন প্রক্রিয়া সংস্কার:', 'শ্রমিক অধিকার নিশ্চিতকল্পে আইন ও নীতির কার্যকর বাস্তবায়ন প্রক্রিয়া এবং দায়িত্বপ্রাপ্ত প্রতিষ্ঠানসমূহ যেমন- শ্রম অধিদপ্তর, কলকারখানা ও প্রতিষ্ঠান পরিদর্শন অধিদপ্তরের প্রয়োজনীয় সংস্কার ও উন্নয়নে সুপারিশ করা;', '2025-01-10 07:17:47', '2025-01-10 08:45:08'),
(3, '৩. ট্রেড ইউনিয়ন, শিল্পসম্পর্ক ও ত্রিপক্ষীয় ব্যবস্থার উন্নয়ন :', 'সকল শ্রমিকের সংগঠিত হওয়া, দরকষাকষি ও প্রতিনিধিত্বশীলতা নিশ্চিত করা, প্রতিষ্ঠান পর্যায় থেকে জাতীয় পর্যায় পর্যন্ত কার্যকর সামাজিক সংলাপ ও দরকষাকষি এবং গণতান্ত্রিক ও দায়িত্বশীল ট্রেড ইউনিয়ন কর্মকাÐ চর্চার পরিবেশ উন্নয়ন, কার্যকর ও সুসমন্বিত ত্রিপক্ষীয় ব্যবস্থা নিশ্চিতকল্পে জাতীয়, সেক্টরাল ও প্রতিষ্ঠান পর্যায়ের বিদ্যমান ব্যবস্থা যেমন- ত্রিপক্ষীয় পরামর্শ পরিষদ-টিসিসি’র কাঠামো ও কার্যপরিধি পর্যালোচনা ও সুপারিশ তৈরি করা; এ লক্ষ্যে বিগত সময়ের উল্লেখযোগ্য শিল্প অসন্তোষসমূহ থেকে শিক্ষণীয় বিষয় চিহ্নিত করা।', '2025-01-10 08:21:12', '2025-01-10 08:21:12'),
(4, '৪. শ্রমিকের ন্যায়বিচার প্রাপ্তি ও বিরোধ নিষ্পত্তি:', 'সকল শ্রমিকের ন্যায়বিচারের নিশ্চয়তা, অসন্তোষ নিরসন, শিল্পবিরোধ নিষ্পত্তির বিদ্যমান প্রক্রিয়া যেমন- প্রতিষ্ঠানভিত্তিক নিষ্পত্তি প্রক্রিয়া, বিকল্প বিরোধ নিষ্পত্তি, সালিশ ও মধ্যস্থতা, এবং শ্রম আদালত ও অন্যান্য প্রতিষ্ঠানের কার্যপরিধি ও কার্যপ্রক্রিয়া পর্যালোচনা ও সুপারিশ তৈরি করা;', '2025-01-10 08:21:35', '2025-01-10 08:21:35'),
(5, '৫. কর্মসংস্থান, কাজের নিরাপত্তা ও দক্ষতা উন্নয়ন:', 'বিশ^ব্যাপী প্রযুক্তিগত উন্নয়ন, উৎপাদন প্রক্রিয়া, কাজের ও নিয়োগের ধরন পরিবর্তন যেমন- চতুর্থ শিল্পবিপ্লব, অটোমেশন, কৃত্রিম বুদ্ধিমত্তা, জলবায়ু পরিবর্তন, প্লাটফরম/গিগ ইকোনমি, জনমিতির বিন্যাস এবং কর্মসংস্থানের চ্যালেঞ্জ বিবেচনায় রেখে বিদ্যমান কাজের নিরাপত্তা, নতুন কর্মসংস্থান সৃষ্টিতে দক্ষতা উন্নয়ন প্রশিক্ষণ, শ্রমঘন শিল্প প্রতিষ্ঠা, এবং শ্রমিকের বিশেষ করে শিক্ষাধীন, (এপ্রেন্টিস), আউটসোর্সিং, মাস্টাররোলভিত্তিক শ্রমিক, সেবা খাতের শিক্ষানবীশ ও যুবা কর্মীর সুরক্ষা নিশ্চিত করতে প্রয়োজনীয় সুপারিশ তৈরি;', '2025-01-10 08:21:49', '2025-01-10 08:21:49'),
(6, '৬. শ্রমিকের জীবনমান উন্নয়ন, মজুরি ও ন্যায্য হিস্যা:', 'শ্রমিক ও তার পরিবারের মানবিক মর্যাদাপূর্ণ জীবনযাপন নিশ্চিত করা, মৌলিক চাহিদা পূরণ, টেকসই উন্নয়ন লক্ষ্যমাত্রা- এসডিজি ও জাতীয় দারিদ্র বিমোচন লক্ষ্যমাত্রা, শিক্ষা, স্বাস্থ্য, শিশু ও নারীর জীবনমান উন্নয়নে ঘোষিত নীতিমালা এবং ক্রমবর্ধমান আয়বৈষম্য বিবেচনায় নিয়ে সামাজিক ন্যায়বিচার প্রতিষ্ঠার লক্ষ্যে বিদ্যমান মজুরি নির্ধারণ প্রক্রিয়া, মানদÐ ও নি¤œতম মজুরি বোর্ডের গঠন ও কার্যপরিধি পর্যালোচনা ও সুপারিশ তৈরি;', '2025-01-10 08:22:03', '2025-01-10 08:22:03'),
(7, '৭. পেশাগত স্বাস্থ্য ও নিরাপত্তা:', 'সবার জন্য নিরাপদ ও স্বাস্থ্যকর কর্মপরিবেশ নিশ্চিত করার লক্ষ্যে শ্রমিকদের পেশাগত স্বাস্থ্য ও নিরাপত্তা উন্নয়নে বিদ্যমান আইন, নীতি, পরিদর্শন ব্যবস্থা, ক্ষতিপূরণের মানদÐ ও পরিশোধ প্রক্রিয়া এবং সংশ্লিষ্ট কাঠামোসমূহ যেমন- জাতীয় শিল্প স্বাস্থ্য নিরাপত্তা কাউন্সিল, প্রতিষ্ঠানভিত্তিক সেইফটি কমিটি, এমপ্লয়মেন্ট ইনজুরি স্কিমসহ অন্যান্য ব্যবস্থা পর্যালোচনা ও সুপারিশ তৈরি। এ লক্ষ্যে বিগত সময়ের উল্লেখযোগ্য শিল্প-দুর্ঘটনাসমূহ থেকে শিক্ষণীয় বিষয় চিহ্নিত করা;', '2025-01-10 08:22:15', '2025-01-10 08:22:15'),
(8, '৮. সর্বজনীন সামাজিক নিরাপত্তা ও কল্যাণমূলক কার্যক্রম:', 'সকল শ্রমিকের সামাজিক নিরাপত্তা নিশ্চিত করার লক্ষ্যে এর আওতা, প্রক্রিয়া ও বিদ্যমান স্কিমসমূহ, শিল্পাঞ্চলের পরিবেশ উন্নয়ন, শ্রমিক ও তার পরিবারের বাসস্থান, শিক্ষা, স্বাস্থ্য ব্যবস্থা উন্নয়নে সুপারিশ করা; এ লক্ষ্যে বিভিন্ন দেশের অভিজ্ঞতা, উদাহরণসমূহ থেকে শিক্ষণীয় বিষয় চিহ্নিত করা;', '2025-01-10 08:22:44', '2025-01-10 08:22:44'),
(9, '৯. অভিবাসী শ্রমিক সুরক্ষা:', 'অভিবাসনপ্রত্যাশী শ্রমিকের দক্ষতা উন্নয়ন, মর্যাদাপূর্ণ, হয়রানিমুক্ত ও নিরাপদ অভিবাসন, প্রবাসে সুরক্ষা, প্রবাসী শ্রমিকদের শ্রমিক হিসেবে স্বীকৃতি, আইনী সুরক্ষা ও সংগঠিত হওয়া, দরকষাকষি ও প্রতিনিধিত্ব করার অধিকার, প্রবাসকালীন শ্রমিকের পরিবারের সুরক্ষা ও কল্যাণ, এবং প্রত্যাবর্তনকৃত শ্রমিকদের সামাজিক ও অর্থনৈতিক পুনর্বাসন নিশ্চিতকল্পে বিদ্যমান আইন, নীতি ও কাঠামো পর্যালোচনা ও সুপারিশ তৈরি;', '2025-01-10 08:22:57', '2025-01-10 08:22:57'),
(11, '১০. নারী শ্রমিকদের অধিকার সুরক্ষা:', 'নারী শ্রমিকদের জন্য মর্যাদাকর, বৈষম্যহীন ও হয়রানিমুক্ত কর্মপরিবেশ, নারী শ্রমিকের মাতৃত্বকালীন সুরক্ষাসহ সকল প্রকার সুবিধা নিশ্চিত এবং নারী- বিশেষ করে গ্রামীণ নারীর উপযুক্ত কর্মসংস্থান সৃষ্টির লক্ষ্যে দক্ষতা উন্নয়নকল্পে সুপারিশ তৈরি;', '2025-01-10 08:37:20', '2025-01-10 08:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `prostabona_somuhos`
--

CREATE TABLE `prostabona_somuhos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prostabona_somuhos`
--

INSERT INTO `prostabona_somuhos` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, 'MY Totle', 'uploads/prostabona_file/6785531195b80_sample-1.pdf', '2025-01-13 17:53:22', '2025-01-13 17:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `system_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `system_logo` varchar(255) DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `system_name`, `address`, `phone`, `email`, `logo`, `favicon`, `system_logo`, `footer_text`, `created_at`, `updated_at`) VALUES
(1, 'Admin Panel', '522/B, North Shahjahanpur Dhaka-1217', '01500000000', 'info@mail.com', 'uploads/setting/images/678547115b7a5.png', 'uploads/setting/images/678547115c052.png', 'uploads/setting/images/678547115c6e4.png', '© 2024 Admin Dashboard. All rights reserved.', '2025-01-09 10:48:11', '2025-01-13 17:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `button_text1` varchar(255) DEFAULT NULL,
  `button_url1` varchar(255) DEFAULT NULL,
  `button_text2` varchar(255) DEFAULT NULL,
  `button_url2` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `button_text1`, `button_url1`, `button_text2`, `button_url2`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'শ্রম সংস্কার কমিশন', 'শ্রমিকের ন্যায্যতার জন্য আপনার পরামর্শ দিন। আপনার মতামত <br/>জানিয়ে শ্রমিকের অধিকার নিশ্চিত করুন।', 'মতামত', NULL, 'জরীপ', NULL, 'uploads/slider/images/1736527965.jpg', 1, '2025-01-10 16:52:46', '2025-01-10 16:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin1', '1superadmin@mail.com', 'superadmin', NULL, '$2y$10$QHCENsqdvZTXKgNhT1NedurK5oRnj1urQmAxYLya09fwlqK6Jjwku', NULL, '2025-01-09 10:48:11', '2025-01-09 10:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `last_login_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `ip_address`, `last_login_time`, `created_at`, `updated_at`) VALUES
(1, 1, '127.0.0.1', '2025-01-09 10:52:45', '2025-01-09 10:52:45', '2025-01-09 10:52:45'),
(2, 1, '127.0.0.1', '2025-01-10 16:47:54', '2025-01-10 16:47:54', '2025-01-10 16:47:54'),
(3, 1, '127.0.0.1', '2025-01-11 03:15:56', '2025-01-11 03:15:56', '2025-01-11 03:15:56'),
(4, 1, '127.0.0.1', '2025-01-11 16:48:19', '2025-01-11 16:48:19', '2025-01-11 16:48:19'),
(5, 1, '127.0.0.1', '2025-01-12 17:35:16', '2025-01-12 17:35:16', '2025-01-12 17:35:16'),
(6, 1, '127.0.0.1', '2025-01-13 16:37:12', '2025-01-13 16:37:12', '2025-01-13 16:37:12'),
(7, 1, '127.0.0.1', '2025-01-13 17:01:48', '2025-01-13 17:01:48', '2025-01-13 17:01:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apni_janen_kis`
--
ALTER TABLE `apni_janen_kis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comissions`
--
ALTER TABLE `comissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comission_members`
--
ALTER TABLE `comission_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comission_members_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_gallery_category_id_foreign` (`gallery_category_id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gallery_categories_name_unique` (`name`);

--
-- Indexes for table `komishoner_karjokroms`
--
ALTER TABLE `komishoner_karjokroms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komishoner_karjokrom_categories`
--
ALTER TABLE `komishoner_karjokrom_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kormo_poridhis`
--
ALTER TABLE `kormo_poridhis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motamotdins`
--
ALTER TABLE `motamotdins`
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
-- Indexes for table `poridhis`
--
ALTER TABLE `poridhis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prostabona_somuhos`
--
ALTER TABLE `prostabona_somuhos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_id_unique` (`user_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_logs_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apni_janen_kis`
--
ALTER TABLE `apni_janen_kis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comissions`
--
ALTER TABLE `comissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comission_members`
--
ALTER TABLE `comission_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komishoner_karjokroms`
--
ALTER TABLE `komishoner_karjokroms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komishoner_karjokrom_categories`
--
ALTER TABLE `komishoner_karjokrom_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kormo_poridhis`
--
ALTER TABLE `kormo_poridhis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `motamotdins`
--
ALTER TABLE `motamotdins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poridhis`
--
ALTER TABLE `poridhis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prostabona_somuhos`
--
ALTER TABLE `prostabona_somuhos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_gallery_category_id_foreign` FOREIGN KEY (`gallery_category_id`) REFERENCES `gallery_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD CONSTRAINT `user_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
