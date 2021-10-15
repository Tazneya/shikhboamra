-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 04:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shikhboamra2`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_scripts`
--

CREATE TABLE `answer_scripts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `given_ans` int(11) NOT NULL,
  `verdict` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `que_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `que_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `que_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `teacher_id`, `course_name`, `course_description`, `course_image`, `subject`, `class`, `topic`, `course_type`, `course_fee`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Flynn Stark', 'Amet est eligendi a', 'image/course_image/1630943539.jpg', 'Aliquid fugit adipisci praesentium libero voluptates adipis', 'Reiciendis pariatur Tempore omnis minus excepteur aute ali', 'a', NULL, NULL, 1, 0, '2021-09-06 09:52:19', '2021-09-06 09:52:19'),
(2, 1, 'Portia Sharp', 'Sit pariatur Qui u', 'image/course_image/1630945951.jpg', 'Amet nihil consequat Quis possimus', 'Qui modi aliquam mollitia rerum id duis cum omnis fugiat ip', 'b', NULL, NULL, 1, 0, '2021-09-06 10:32:31', '2021-09-06 10:32:31'),
(3, 1, 'Portia Sharp', 'Sit pariatur Qui u', 'image/course_image/1630946053.jpg', 'Amet nihil consequat Quis possimus', 'Qui modi aliquam mollitia rerum id duis cum omnis fugiat ip', 'c', NULL, NULL, 1, 0, '2021-09-06 10:34:14', '2021-09-06 10:34:14'),
(4, 1, 'Nell Gallagher', 'Veniam culpa sapien', 'image/course_image/1630946091.jpg', 'Provident soluta impedit modi in sapiente laboris in molli', 'Sed aliquam anim qui eiusmod vitae dicta', 'd', NULL, NULL, 1, 0, '2021-09-06 10:34:51', '2021-09-06 10:34:51'),
(5, 1, 'Ainsley Dunn', 'Quasi aute aute ut d', 'image/course_image/1630946593.jpg', 'Sit molestias aperiam error sed fugiat ut qui dolore suscipi', 'Explicabo Tempore error fugiat sed expedita ut adipisci m', 'e', NULL, NULL, 1, 0, '2021-09-06 10:43:13', '2021-09-06 10:43:13'),
(6, 1, 'Chava Walls', 'Ipsa nihil laboris', 'image/course_image/1632459908.jpg', 'Harum deserunt qui ut quibusdam in in perferendis', 'Aut qui repudiandae ad ducimus sed natus laborum sit blandi', 'Illo unde ea ipsum dolore excepteur', NULL, NULL, 1, 0, '2021-09-23 23:05:08', '2021-09-23 23:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `course_contents`
--

CREATE TABLE `course_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_contents`
--

INSERT INTO `course_contents` (`id`, `course_id`, `content_type`, `content_name`, `content_url`, `duration`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'video', 'Brody Ross', 'video/content_video/1631095541.mp4', NULL, 1, 0, '2021-09-08 03:54:51', '2021-09-08 03:54:51'),
(2, 1, 'video', 'Maris Tucker', 'video/content_video/1631095541.mp4', NULL, 1, 0, '2021-09-08 03:56:59', '2021-09-08 03:56:59'),
(3, 1, 'video', 'Riley Barron', 'video/content_video/1631095541.mp4', '100', 1, 0, '2021-09-08 04:01:33', '2021-09-08 04:01:33'),
(4, 1, 'video', 'test', 'video/content_video/1631095541.mp4', '100', 1, 0, '2021-09-08 04:05:41', '2021-09-08 04:05:41'),
(5, 1, 'note', 'test', 'note/content_note/1631098275.jpg', NULL, 1, 0, '2021-09-08 04:51:15', '2021-09-08 04:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `course_exams`
--

CREATE TABLE `course_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prerquisition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_exams`
--

INSERT INTO `course_exams` (`id`, `course_id`, `exam_name`, `duration`, `total_marks`, `prerquisition`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laravel Certificate', '9045', '100', NULL, 1, 0, '2021-09-26 03:23:13', '2021-09-26 03:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_08_21_155329_create_users_table', 1),
(4, '2021_08_21_160044_create_student_infos_table', 1),
(5, '2021_08_21_160920_create_teacher_infos_table', 1),
(6, '2021_08_21_161135_create_courses_table', 1),
(7, '2021_08_21_161843_create_course_contents_table', 1),
(8, '2021_08_21_162316_create_course_exams_table', 2),
(9, '2021_08_21_162654_create_questions_table', 2),
(10, '2021_08_21_163900_create_reviews_table', 2),
(11, '2021_08_21_164308_create_communities_table', 2),
(12, '2021_08_21_164549_create_st_courses_table', 2),
(13, '2021_08_21_165105_create_st_contents_table', 2),
(14, '2021_08_21_165404_create_st_exams_table', 2),
(15, '2021_08_21_172158_create_answer_scripts_table', 3),
(16, '2021_08_21_172824_create_tag_analytics_table', 3),
(17, '2021_09_15_162924_create_user_otps_table', 4),
(18, '2015_05_06_194030_create_youtube_access_tokens_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_ans` int(191) NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `exam_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_ans`, `tag`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is laravel', 'framework', 'library', 'garbage collection', 'none of the above', 3, 'laravel', 1, 0, '2021-09-26 05:17:36', '2021-09-26 05:17:36'),
(2, 1, 'Do you need javascript with laravel?', 'Yes', 'No', 'Absolutely No', 'Somewhat Yes', 4, 'laravel', 1, 0, '2021-09-26 05:18:06', '2021-09-26 05:18:06'),
(3, 1, 'What programming language does laravel uses', 'PHP', 'Python', 'JavaScript', 'ECMA Script', 2, 'laravel', 1, 0, '2021-09-26 05:18:40', '2021-09-26 05:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_infos`
--

CREATE TABLE `student_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `st_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_infos`
--

INSERT INTO `student_infos` (`id`, `user_id`, `st_name`, `st_school`, `st_class`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 73, 'Gavin Hopkins', 'Excepturi minus eum', 'Qui fuga Nemo et de', 1, 0, '2021-09-20 00:41:33', '2021-09-20 00:41:33'),
(2, 74, 'abtahi tajwar', 'Chittagong Govt. High School', '2', 1, 0, '2021-09-26 03:16:02', '2021-09-26 03:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `st_answers`
--

CREATE TABLE `st_answers` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `response` int(2) NOT NULL,
  `correct` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st_answers`
--

INSERT INTO `st_answers` (`id`, `exam_id`, `user_id`, `question_id`, `response`, `correct`, `created_at`, `updated_at`) VALUES
(43, 1, 74, 1, 3, 1, '2021-10-02 03:59:43', '2021-10-02 03:59:43'),
(44, 1, 74, 2, 1, 0, '2021-10-02 03:59:44', '2021-10-02 03:59:44'),
(45, 1, 74, 3, 3, 0, '2021-10-02 03:59:44', '2021-10-02 03:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `st_contents`
--

CREATE TABLE `st_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `content_id` bigint(20) UNSIGNED NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `st_courses`
--

CREATE TABLE `st_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `st_courses`
--

INSERT INTO `st_courses` (`id`, `st_id`, `course_id`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(4, 73, 1, 1, 0, '2021-09-20 00:48:09', '2021-09-20 00:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `st_exams`
--

CREATE TABLE `st_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `obtaining_marks` float NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `st_exams`
--

INSERT INTO `st_exams` (`id`, `st_id`, `exam_id`, `obtaining_marks`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(13, 74, 1, 33.3333, 1, 0, '2021-10-01 21:59:44', '2021-10-01 21:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `tag_analytics`
--

CREATE TABLE `tag_analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL,
  `try` int(11) NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_infos`
--

CREATE TABLE `teacher_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_infos`
--

INSERT INTO `teacher_infos` (`id`, `user_id`, `teacher_name`, `teacher_organization`, `teacher_qualification`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test Teacher', 'IIUC', 'CSE', 1, 0, NULL, NULL),
(2, 75, 'Abtahi Tajwar', NULL, 'Illiterate', 1, 0, '2021-09-26 03:21:58', '2021-09-26 03:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 0,
  `delete_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mobile_number`, `password`, `role`, `active_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, '0181', '$2y$10$z6lrydx4h6sRlkBrHNve/uqGcVS4PZ76wXR9Fzua9WcWAOJhr/.rW', 'Teacher', 1, 0, '2021-09-06 09:24:48', '2021-09-06 09:24:48'),
(73, '01845318609', '$2y$10$z6lrydx4h6sRlkBrHNve/uqGcVS4PZ76wXR9Fzua9WcWAOJhr/.rW', 'Student', 1, 0, '2021-09-20 00:41:33', '2021-09-20 00:46:13'),
(74, '01779791648', '$2y$10$GuBlc31i0LWi2qWl6FAtruscmzhEVqLNhXfHeR7zlUSeFlZvWTALq', 'Student', 0, 0, '2021-09-26 03:16:02', '2021-09-26 03:16:02'),
(75, '01796391053', '$2y$10$.Psr7Msss1GuKkJzH0tVIezS8QUL6D6LXZLWR4fdJGQFfmkwdMkl.', 'Teacher', 0, 0, '2021-09-26 03:21:57', '2021-09-26 03:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_otps`
--

CREATE TABLE `user_otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `otp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_otps`
--

INSERT INTO `user_otps` (`id`, `user_id`, `otp`, `created_at`, `updated_at`) VALUES
(16, 73, '2437', '2021-09-20 00:41:33', '2021-09-20 00:41:33'),
(17, 74, '9385', '2021-09-26 03:16:02', '2021-09-26 03:16:02'),
(18, 75, '4983', '2021-09-26 03:21:58', '2021-09-26 03:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `youtube_access_tokens`
--

CREATE TABLE `youtube_access_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `access_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `youtube_access_tokens`
--

INSERT INTO `youtube_access_tokens` (`id`, `access_token`, `created_at`) VALUES
(4, '{\"access_token\":\"ya29.a0ARrdaM_zlo883TvGriiUrBvlTiDm9CkdJIRvv-OfMrkQeyHmWgzwdvdF9a2MnxTKDOu1WEcRKDAdG_s8RsT1bsoLQvZijPDmxyHEOxB3MXezJASl7103HZKSOylHJjrG6vHZwN3LrEVB6C8hpi5LGJBMIWdO\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0gnOh5lyaBuDCCgYIARAAGBASNwF-L9Irp6PrutWRVapACkbJgkhlMHKjV7QD28pOEi4Bs_1-y46_lmFILz2St8AOUV0VvyJeACw\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube\",\"token_type\":\"Bearer\",\"created\":1632408277}', '2021-09-23 08:44:37'),
(5, '{\"access_token\":\"ya29.a0ARrdaM9d6U1qoEPKiSG_2HmJNzhvrIXgYKrx6u6Q2NoM2T3-3P8QnpyfYbMH6YP21K9aui7SQIRtShhFSUUmMc7Oj1VbDpBvWx-T3LrtLczmblwtxnqT_ia1351XzEkE-QupI9qbiZ8x_sW1o8X4xOv_bSje\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0gHNLM3tfnchwCgYIARAAGBASNwF-L9IrQJA52nJ7oaOUmz1EV4WEYPiA7ZgwxZt5rRHXvkussGe3_TQC9-ufygQkJ85qiM-t8uY\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly\",\"token_type\":\"Bearer\",\"created\":1632408346}', '2021-09-23 08:45:46'),
(6, '{\"access_token\":\"ya29.a0ARrdaM-qlJkFgGmxJ6Wjy4y305LU7h61LBk6g5Z92e5av4OryFwbXA6DFhUt2LpxiOcpfr0ZZCsCjhSTbvoPZl403hAQE4eA90YZ9dxhT2NZOH0WwO19j9L70bVbnpog6tTXeh4peqHT7fyPDSrwOB2aUTkg\",\"expires_in\":3599,\"refresh_token\":\"1\\/\\/0g6GKXfljhc6_CgYIARAAGBASNwF-L9Ir3Fm6A60X3yhn2RaTER9xNhhLiBYOm8wtfYx62RMkR2Qst2qzDqjh2-zPQGeWAtYhzGk\",\"scope\":\"https:\\/\\/www.googleapis.com\\/auth\\/youtube https:\\/\\/www.googleapis.com\\/auth\\/youtube.readonly https:\\/\\/www.googleapis.com\\/auth\\/youtube.upload\",\"token_type\":\"Bearer\",\"created\":1632408714}', '2021-09-23 08:51:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_scripts`
--
ALTER TABLE `answer_scripts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_scripts_st_id_foreign` (`st_id`),
  ADD KEY `answer_scripts_question_id_foreign` (`question_id`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communities_st_id_foreign` (`st_id`),
  ADD KEY `communities_course_id_foreign` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `course_contents`
--
ALTER TABLE `course_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_contents_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_exams`
--
ALTER TABLE `course_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_exams_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_st_id_foreign` (`st_id`),
  ADD KEY `reviews_course_id_foreign` (`course_id`);

--
-- Indexes for table `student_infos`
--
ALTER TABLE `student_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `st_answers`
--
ALTER TABLE `st_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_contents`
--
ALTER TABLE `st_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `st_contents_st_id_foreign` (`st_id`),
  ADD KEY `st_contents_course_id_foreign` (`course_id`),
  ADD KEY `st_contents_content_id_foreign` (`content_id`);

--
-- Indexes for table `st_courses`
--
ALTER TABLE `st_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `st_courses_st_id_foreign` (`st_id`),
  ADD KEY `st_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `st_exams`
--
ALTER TABLE `st_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `st_exams_st_id_foreign` (`st_id`),
  ADD KEY `st_exams_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `tag_analytics`
--
ALTER TABLE `tag_analytics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_analytics_st_id_foreign` (`st_id`);

--
-- Indexes for table `teacher_infos`
--
ALTER TABLE `teacher_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_otps`
--
ALTER TABLE `user_otps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_otps_user_id_foreign` (`user_id`);

--
-- Indexes for table `youtube_access_tokens`
--
ALTER TABLE `youtube_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_scripts`
--
ALTER TABLE `answer_scripts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_contents`
--
ALTER TABLE `course_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_exams`
--
ALTER TABLE `course_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_infos`
--
ALTER TABLE `student_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `st_answers`
--
ALTER TABLE `st_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `st_contents`
--
ALTER TABLE `st_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_courses`
--
ALTER TABLE `st_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `st_exams`
--
ALTER TABLE `st_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tag_analytics`
--
ALTER TABLE `tag_analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_infos`
--
ALTER TABLE `teacher_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user_otps`
--
ALTER TABLE `user_otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `youtube_access_tokens`
--
ALTER TABLE `youtube_access_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer_scripts`
--
ALTER TABLE `answer_scripts`
  ADD CONSTRAINT `answer_scripts_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answer_scripts_st_id_foreign` FOREIGN KEY (`st_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `communities`
--
ALTER TABLE `communities`
  ADD CONSTRAINT `communities_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `communities_st_id_foreign` FOREIGN KEY (`st_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_contents`
--
ALTER TABLE `course_contents`
  ADD CONSTRAINT `course_contents_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_exams`
--
ALTER TABLE `course_exams`
  ADD CONSTRAINT `course_exams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `course_exams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_st_id_foreign` FOREIGN KEY (`st_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_infos`
--
ALTER TABLE `student_infos`
  ADD CONSTRAINT `student_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `st_contents`
--
ALTER TABLE `st_contents`
  ADD CONSTRAINT `st_contents_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `course_contents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `st_contents_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `st_contents_st_id_foreign` FOREIGN KEY (`st_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `st_courses`
--
ALTER TABLE `st_courses`
  ADD CONSTRAINT `st_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `st_courses_st_id_foreign` FOREIGN KEY (`st_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `st_exams`
--
ALTER TABLE `st_exams`
  ADD CONSTRAINT `st_exams_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `course_exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `st_exams_st_id_foreign` FOREIGN KEY (`st_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag_analytics`
--
ALTER TABLE `tag_analytics`
  ADD CONSTRAINT `tag_analytics_st_id_foreign` FOREIGN KEY (`st_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_infos`
--
ALTER TABLE `teacher_infos`
  ADD CONSTRAINT `teacher_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_otps`
--
ALTER TABLE `user_otps`
  ADD CONSTRAINT `user_otps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
