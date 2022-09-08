-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 04:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_15_052722_create_post_categories_table', 1),
(6, '2022_07_15_094538_create_posts_table', 1),
(7, '2022_07_27_055921_create_videos_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auther` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `post_time` time DEFAULT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `is_popular` tinyint(1) NOT NULL DEFAULT 0,
  `flash_post` tinyint(1) NOT NULL DEFAULT 0,
  `post_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `heading`, `sub_heading`, `slug`, `auther`, `description`, `post_date`, `post_time`, `feature_image`, `is_featured`, `is_popular`, `flash_post`, `post_category_id`, `created_at`, `updated_at`) VALUES
(1, 'We are looking for Fresher Internship', 'Notice for Internship', 'we-are-looking-for-fresher-internship', 'Sunil shrestha', 'This is a post where we can see all things', '2022-08-22', '16:17:00', 'uploads/post/featureimage/6303abfc64caf.png', 1, 1, 1, 10, '2022-08-22 10:32:00', '2022-08-22 10:32:00'),
(2, 'The Times International Colleges', 'TTIC News', 'the-times-international-colleges', 'Sunil shrestha', '<p><span style=\"font-family: &quot;Times New Roman&quot;;\"><br></span></p><table class=\"table table-bordered\"><tbody><tr><td>Student id:</td><td>student Name:</td><td>Student P.No:</td><td>Signature</td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span>                                \r\n                            </p>', '2022-08-31', '04:38:35', 'uploads/post/featureimage/630ee5cb1b3c4.png', 0, 0, 0, 5, '2022-08-30 22:53:35', '2022-08-30 22:53:35'),
(3, 'City gives Kathmandu Funpark 24 hours to clear unpaid taxes', 'Hot Politics News 2022', 'city-gives-kathmandu-funpark-24-hours-to-clear-unpaid-taxes', 'Sunil shrestha', '<p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">While it gives continuity to the demolition of&nbsp;<a href=\"https://kathmandupost.com/kathmandu/2022/08/27/on-third-day-of-its-demolition-drive-kmc-clears-passport-office-basement\" style=\"background-color: rgb(255, 255, 255); color: rgb(50, 52, 55); cursor: pointer; transition: all 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s;\">illegal structures</a>&nbsp;in public places and clearing the basements of business complexes for vehicle parking, the Kathmandu Metropolitan City has turned its focus on recovering municipal taxes from businesses.<br></p><div class=\"bg-lightgray text-center \" style=\"background-color: rgb(245, 245, 245); color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><div class=\"hidden-xs pt-0\"><a target=\"_blank\" href=\"https://tiurl.link/PxaHd\" style=\"color: rgb(50, 52, 55); cursor: pointer; transition: all 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s;\"><img src=\"https://assets-cdn.kathmandupost.com/uploads/source/ads/ITPFL970x120-1631779951.gif\" class=\"img-responsive\" style=\"border: 0px; display: inline-block; max-width: 100%; height: auto;\"></a></div></div><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">On Wednesday, the City issued a 24-hour ultimatum to the Bhrikutimandap-based amusement park, the Kathmandu Funpark, to clear unpaid taxes.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">In a letter to the amusement park, the City’s Revenue Department said the park has not paid municipal taxes for several years despite multiple requests in writing and that officials would be forced to seal off the park if the dues are not cleared within the next 24 hours.</p><div class=\"google-auto-placed ap_container\" style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; width: 1356px; clear: both; text-align: center; height: auto !important;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-5855301837617098\" data-adsbygoogle-status=\"done\" data-ad-status=\"filled\" style=\"display: block; margin: auto; background-color: transparent; height: 280px;\"><div id=\"aswift_4_host\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"border: none; height: 280px; width: 782px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;\"><iframe id=\"aswift_4\" name=\"aswift_4\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"782\" height=\"280\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5855301837617098&amp;output=html&amp;h=280&amp;adk=1890447727&amp;adf=1439349776&amp;pi=t.aa~a.3136456297~i.3~rp.4&amp;w=782&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1662022507&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=9653808446&amp;psa=1&amp;ad_type=text_image&amp;format=782x280&amp;url=https%3A%2F%2Fkathmandupost.com%2Fkathmandu%2F2022%2F08%2F31%2Fcity-gives-kathmandu-funpark-24-hours-to-clear-unpaid-taxes&amp;fwr=0&amp;pra=3&amp;rh=196&amp;rw=782&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTA1LjAuNTE5NS41MiIsW10sZmFsc2UsbnVsbCwiNjQiLFtbIkdvb2dsZSBDaHJvbWUiLCIxMDUuMC41MTk1LjUyIl0sWyJOb3QpQTtCcmFuZCIsIjguMC4wLjAiXSxbIkNocm9taXVtIiwiMTA1LjAuNTE5NS41MiJdXSxmYWxzZV0.&amp;dt=1662022507193&amp;bpp=23&amp;bdt=2277&amp;idt=-M&amp;shv=r20220829&amp;mjsv=m202208250101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D7e07251f5ae78b86-2228e463bdd50051%3AT%3D1661236558%3ART%3D1661236558%3AS%3DALNI_MbIizpPAfRROqDXFNfaxZdEe4IDbw&amp;gpic=UID%3D000008ec6d92f321%3AT%3D1661236558%3ART%3D1662022506%3AS%3DALNI_MbGQ_4bwOo37j_BhST5aSGQTEM2Uw&amp;prev_fmts=1200x280%2C782x280%2C0x0&amp;nras=2&amp;correlator=379997279197&amp;frm=20&amp;pv=1&amp;ga_vid=504248638.1661236548&amp;ga_sid=1662022506&amp;ga_hid=1176103939&amp;ga_fc=1&amp;u_tz=345&amp;u_his=4&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=79&amp;ady=2249&amp;biw=1356&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44771041%2C31069206%2C31069217%2C44772915&amp;oid=2&amp;pvsid=1708226281970005&amp;tmod=1957620093&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fkathmandupost.com%2Fpolitics&amp;eae=0&amp;fc=384&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;ifi=5&amp;uci=a!5&amp;btvi=2&amp;fsb=1&amp;xpc=agGCFEGxnG&amp;p=https%3A//kathmandupost.com&amp;dtd=101\" data-google-container-id=\"a!5\" data-google-query-id=\"CJ2-rqmc8_kCFTWC6QUdTCEBEg\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 782px; height: 280px;\"></iframe></div></ins></div><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">“We request Funpark to pay the business and rental taxes at the ward office, and advertisement and entertainment taxes and fines at the Revenue Department of the City within 24-hours,” reads the letter.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">The Funpark, which is located at the heart of the Capital and spreads over 60 ropani (around 3 hectares), is being run by the Kathmandu Funpark Pvt Limited, a company owned by Tek Bahadur Gurung. Gurung is affiliated to the Nepali Congress party and is also a former federal minister for labour and employment.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">The amusement park is the oldest and the most popular in Kathmandu. The land of the park is owned by the Social Welfare Council, a government authority.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">Shiva Raj Adhikari, chief of the City’s Revenue Department, said the amusement park has not paid entertainment tax since 2018 and the City is yet to calculate the unpaid rent tax, business tax and advertisement tax. “We had written to the park to clear the taxes also before the start of the Covid pandemic, but it ignored our request,” said Adhikari.</p><div class=\"google-auto-placed ap_container\" style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; width: 1356px; clear: both; text-align: center; height: auto !important;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-5855301837617098\" data-adsbygoogle-status=\"done\" data-ad-status=\"filled\" style=\"display: block; margin: auto; background-color: transparent; height: 280px;\"><div id=\"aswift_5_host\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"border: none; height: 280px; width: 782px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;\"><iframe id=\"aswift_5\" name=\"aswift_5\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"782\" height=\"280\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5855301837617098&amp;output=html&amp;h=280&amp;adk=1890447727&amp;adf=1239601352&amp;pi=t.aa~a.3136456297~i.7~rp.4&amp;w=782&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1662022508&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=9653808446&amp;psa=1&amp;ad_type=text_image&amp;format=782x280&amp;url=https%3A%2F%2Fkathmandupost.com%2Fkathmandu%2F2022%2F08%2F31%2Fcity-gives-kathmandu-funpark-24-hours-to-clear-unpaid-taxes&amp;fwr=0&amp;pra=3&amp;rh=196&amp;rw=782&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTA1LjAuNTE5NS41MiIsW10sZmFsc2UsbnVsbCwiNjQiLFtbIkdvb2dsZSBDaHJvbWUiLCIxMDUuMC41MTk1LjUyIl0sWyJOb3QpQTtCcmFuZCIsIjguMC4wLjAiXSxbIkNocm9taXVtIiwiMTA1LjAuNTE5NS41MiJdXSxmYWxzZV0.&amp;dt=1662022507175&amp;bpp=3&amp;bdt=2259&amp;idt=3&amp;shv=r20220829&amp;mjsv=m202208250101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D7e07251f5ae78b86-2228e463bdd50051%3AT%3D1661236558%3ART%3D1661236558%3AS%3DALNI_MbIizpPAfRROqDXFNfaxZdEe4IDbw&amp;gpic=UID%3D000008ec6d92f321%3AT%3D1661236558%3ART%3D1662022506%3AS%3DALNI_MbGQ_4bwOo37j_BhST5aSGQTEM2Uw&amp;prev_fmts=1200x280%2C782x280%2C0x0%2C782x280%2C782x90%2C1356x657&amp;nras=5&amp;correlator=379997279197&amp;frm=20&amp;pv=1&amp;ga_vid=504248638.1661236548&amp;ga_sid=1662022506&amp;ga_hid=1176103939&amp;ga_fc=1&amp;u_tz=345&amp;u_his=4&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=79&amp;ady=3007&amp;biw=1356&amp;bih=657&amp;scr_x=0&amp;scr_y=389&amp;eid=44771041%2C31069206%2C31069217%2C44772915&amp;oid=2&amp;psts=AEC3cPIhcPYuIjsuYJfc3Bll3pepk0znnhw6DmKRjkGgH49h4aqrqt2KLGEaI-f2-OdRIbNiDAZ8KS-RE90c6ylj%2CAEC3cPKPTkudyIV3tvUd6XSIrj_UMcP5c-wNL2GpshbUCS75aYZ-X0I7_Jm4ATQ3KIvdMtFZuq8cmbhOmANt_I53%2CAEC3cPKFU9RNKBh1053Xi8uxwrWqNKs_0nRbGOIcmQ5c0THmgnVXqZP7pLQlUJz0KN66kMSGTEWN2uejFf0LGsO3&amp;pvsid=1708226281970005&amp;tmod=1957620093&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fkathmandupost.com%2Fpolitics&amp;eae=0&amp;fc=384&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;ifi=6&amp;uci=a!6&amp;btvi=4&amp;fsb=1&amp;xpc=r52j3u8saz&amp;p=https%3A//kathmandupost.com&amp;dtd=1317\" data-google-container-id=\"a!6\" data-google-query-id=\"CNXo86mc8_kCFbaC6QUd9MIHNA\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 782px; height: 280px;\"></iframe></div></ins></div><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">Earlier, the then mayor of Kathmandu, Bidya Sundar Shakya, had also threatened to close down the park over unpaid taxes.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">In July last year, the City had&nbsp;<a href=\"https://kathmandupost.com/valley/2021/07/30/kathmandu-metropolitan-city-announces-to-padlock-offices-of-23-tax-evaders\" style=\"color: rgb(50, 52, 55); cursor: pointer; transition: all 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s;\">announced</a>&nbsp;that it would seal off 23 businesses over unpaid taxes, but failed to both recover the taxes or implement the decision.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">The City even hired musical troupes who would visit the offices of the tax-evading businesses and play loud music for hours in what it called a novel approach to pressure them to pay the taxes. This approach also proved ineffective.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">“But this time we won\'t back down from our decision,” said Adhikari. “You can see how aggressively Mayor Balendra Shah has cleared the illegal structures in Kathmandu. Now we will be more stringent in collecting taxes.”</p><br style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><br style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><a href=\"https://tkpo.st/3Rqyl9o\" style=\"background-color: rgb(255, 255, 255); color: rgb(50, 52, 55); cursor: pointer; transition: all 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s; font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">https://tkpo.st/3Rqyl9o</a>', '2022-09-01', '08:56:49', 'uploads/post/featureimage/631073d11d019.jfif', 0, 1, 1, 1, '2022-09-01 03:11:49', '2022-09-01 03:11:49'),
(4, 'शुक्रबारको कारोबार के गर्ने भन्ने विषयमा नेप्से आफैँ अलमलमा, अर्को साता निर्णय होला ?', 'business', 'shakarabraka-karabra-ka-garana-bhanana-vashhayama-napasa-aafa-almalma-araka-sata-naranaeya-hal', 'Sunil shrestha', '<p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">काठमाण्डौ । सेयर बजारमा अहिले शुक्रबारको कारोबारलाई लिएर</span></span>&nbsp;<span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">निकै बहस चलिरहेको छ। विश्व बजारमा सेयर कारोबार हप्तामा ५ दिनमात्रै हुने भएकोले नेपालमा ५ दिनमात्रै कारोबार खुलाउनुपर्ने लगानीकर्ताहरुले माग गरिरहेका छन्।&nbsp;</span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">बजार सञ्चालक नेपाल स्टक एक्सचेन्ज (नेप्से)ले भने शुक्रबारको कारोबारका विषयमा स्पष्ट निर्णय लिन सकेको छैन। लगानीकर्ताका संघसंगठनले नेप्सेमै पुगेर शुक्रबारको कारोबार रोक्न ज्ञापनपत्र बुझाइसक्दा पनि नेप्से भने अलमल गरेर बसिरहेको छ।&nbsp;</span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">गत जेठमा सरकारले परीक्षणका रुपमा हप्तामा २ दिन शनिबार र आइतबार सार्वजनिक बिदा दिने निर्णय लागू गरेको थियो। तर, चौतर्फी आलोचना भएपछि सरकारले पुनः उक्त निर्णय खारेज गर्दै साउनबाट आइतबार सार्वजनिक बिदा नदिने निर्णय गरेको थियो।&nbsp;</span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">सरकारले जेठमा २ दिन बिदा दिने निर्णय गरेपछि नेप्सेले पनि आइतबारको सट्टा शुक्रबार सेयर कारोबार खुलाउने निर्णय गरेको थियो। त्यसअघि शुक्रबार सेयर कारोबार हुँदैन थियो।&nbsp;</span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">हाल सरकारले आइतबारको बिदा रद्द गरे पनि नेप्से भने आइतबार खुलाउनुका साथै शुक्रबारको कारोबारलाई २ घन्टामा छोट्याउँदै निरन्तरता दिइरहेको छ। नेप्सेको शुक्रबार पनि कारोबार खुलाउने निर्णयको अहिले चौतर्फी रुपमा आलोचना र विरोध भइरहेको छ। तर, नेप्से निर्णयमा पुग्न सकेको छैन।&nbsp;</span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">केही साताअघि बसेको नेप्से सञ्चालक समितिमा शुक्रबारको कारोबारका विषयमा छलफल भएको थियो। तर, नेपाल धितोपत्र बोर्ड (सेबोन)को मौखिक निर्देशन कहिलेसम्म पालना गर्ने भन्दै सञ्चालकहरुले विरोध गरेपछि शुक्रबारको कारोबारका विषयमा निर्णय हुन सकेन।&nbsp;</span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">केही दिनअघि नेप्सेका सीईओ कृष्णबहादुर कार्कीले बिजशालासँगको कुराकानीमा शुक्रबारको कारोबार बन्द गर्न यदि लगानीकर्ताका आधिकारिक संघसंगठनले लिखित रुपमा माग गरे नेप्सेले विचार गर्ने बताएका थिए। त्यतिबेला उनले सञ्चालक समितिको बैठकमा यो अजेन्डा पेस गरेर निर्णय गर्ने जानकारी गराएका थिए। तर, लगानीकर्ताका संघसंगठनले लिखित रुपमा शुक्रबारको कारोबार रोक्न माग गरे पनि हालसम्म नेप्सेले निर्णय लिन सकेको छैन।</span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">नेप्सेका प्रवक्ता मुराहरि पराजुलीले आगामी साता यो विषयमा निर्णय हुन सक्ने बताए। ‘आगामी साता नेप्से सञ्चालक समितिको बैठक बसेर यो विषयमा निर्णय गर्ला कि’, उनले भने, ‘तर, अहिले नै नेप्सेले यस विषयमा निर्णय लिइसकेको अवस्था छैन।’</span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\"></span></span></p><p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"line-height: 2; color: rgb(0, 0, 0);\"><span style=\"font-size: 28px; line-height: 2;\">सेबोन प्रवक्ता रुपेश केसीले भने यसअघि नै बिजशालासँगको कुराकानीमा शुक्रबारको सेयर कारोबार निरन्तरता दिने वा नदिने भन्ने विषयमा निर्णय लिने अधिकार नेप्सेकै रहेको बताएका थिए। तर, सेबोनको अधिकारिक धारणा भने अन्तर्राष्ट्रिय अभ्यासअनुसार हप्तामा ५ दिनमात्रै कारोबार खुला गर्नु उचित हुने भएकोले शुक्रबारको कारोबार बन्द गर्नुपर्छ भन्ने नै रहेको केसीले स्पष्ट पारेका थिए। ‘सरकारले पनि आइतबारबाट बिदा खारेज गरिसकेको अवस्थामा शुक्रबार सेयर कारोबार खुला गर्नु उपयुक्त नहुने सेबोनको धारणा छ’, उनले भनेका थिए।&nbsp;</span></span></p>', '2022-09-01', '09:00:49', 'uploads/post/featureimage/631074c1aa6e6.jpg', 1, 1, 0, 2, '2022-09-01 03:15:49', '2022-09-01 03:15:49'),
(5, 'Nepal win decisive match to lift Kenya Series', 'Cricket Match won by Nepal With the Kenya', 'nepal-win-decisive-match-to-lift-kenya-series', 'Sunil shrestha', '<p><span style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">A half century from<u> Gyanendra Malla</u> and decent batting from Rohit Paudel inspired Nepal to a 31-run win over hosts Kenya in the series decider as the visitors wrapped up the five-match Twenty20 International Series 3-2 in Nairobi on Tuesday.</span></p><div class=\"bg-lightgray text-center \" style=\"background-color: rgb(245, 245, 245); color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><div class=\"hidden-xs pt-0\"><a target=\"_blank\" href=\"https://tiurl.link/PxaHd\" style=\"color: rgb(50, 52, 55); cursor: pointer; transition: all 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s;\"><img src=\"https://assets-cdn.kathmandupost.com/uploads/source/ads/ITPFL970x120-1631779951.gif\" class=\"img-responsive\" style=\"border: 0px; display: inline-block; max-width: 100%; height: auto;\"></a></div></div><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">Former captain Malla, who came to open the innings with Arjun Saud, scored 59 runs and Paudel cracked 47 as Nepal posted a challenging total of 175-6 after they elected to bat first and restricted the home team at 144-7.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">Unlike in the last four matches, Nepal made a strong start to their innings and played a 65-run stand for the opening wicket before Saud was dismissed on 29 runs stumped by wicketkeeper Irfan Karim. He hit four fences and a maximum in his 21-ball innings.</p><div class=\"google-auto-placed ap_container\" style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; width: 1356px; clear: both; text-align: center; height: auto !important;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-5855301837617098\" data-adsbygoogle-status=\"done\" data-ad-status=\"filled\" style=\"display: block; margin: auto; background-color: transparent; height: 280px;\"><div id=\"aswift_4_host\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"border: none; height: 280px; width: 782px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;\"></div></ins></div><p><br style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><br style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><span style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><br></span><br style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><br style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><br></p>', '2022-09-01', '09:49:29', 'uploads/post/featureimage/631080297417d.jfif', 1, 1, 1, 7, '2022-09-01 04:04:29', '2022-09-01 04:04:29'),
(6, 'Taekwondo championships get G2 recognition', 'Taekwondo Champain', 'taekwondo-championships-get-g2-recognition', 'Sunil shrestha', '<p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">The third edition of the Mount Everest International Open Taekwondo Championships scheduled from September 22 to 25 in Pokhara has been officially recognised as G2 by World Taekwondo, the international governing body of the game.<br></p><div class=\"bg-lightgray text-center \" style=\"background-color: rgb(245, 245, 245); color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><div class=\"hidden-xs pt-0\"><a target=\"_blank\" href=\"https://tiurl.link/PxaHd\" style=\"color: rgb(50, 52, 55); cursor: pointer; transition: all 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s;\"><img src=\"https://assets-cdn.kathmandupost.com/uploads/source/ads/ITPFL970x120-1631779951.gif\" class=\"img-responsive\" style=\"border: 0px; display: inline-block; max-width: 100%; height: auto;\"></a></div></div><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">Nepal Taekwondo Association (NTA) President Prakash Rana claimed at a press conference on Tuesday that it was the first event in a South Asian country recognised as G2, the event authorised to evaluate international rankings of the players.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">The event to be organised jointly by NTA and Gandaki Province Taekwondo Association (GPTA) is co-sponsored by International Nepalese Taekwondo Association of USA.</p><div class=\"google-auto-placed ap_container\" style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif; width: 1356px; clear: both; text-align: center; height: auto !important;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-5855301837617098\" data-adsbygoogle-status=\"done\" data-ad-status=\"filled\" style=\"display: block; margin: auto; background-color: transparent; height: 280px;\"><div id=\"aswift_4_host\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"border: none; height: 280px; width: 782px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: visible;\"><iframe id=\"aswift_4\" name=\"aswift_4\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"782\" height=\"280\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5855301837617098&amp;output=html&amp;h=280&amp;adk=1890447727&amp;adf=1439349776&amp;pi=t.aa~a.3136456297~i.3~rp.4&amp;w=782&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1662025821&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=9653808446&amp;psa=1&amp;ad_type=text_image&amp;format=782x280&amp;url=https%3A%2F%2Fkathmandupost.com%2Fsports%2F2022%2F08%2F24%2Ftaekwondo-championships-get-g2-recognition&amp;fwr=0&amp;pra=3&amp;rh=196&amp;rw=782&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTA1LjAuNTE5NS41MiIsW10sZmFsc2UsbnVsbCwiNjQiLFtbIkdvb2dsZSBDaHJvbWUiLCIxMDUuMC41MTk1LjUyIl0sWyJOb3QpQTtCcmFuZCIsIjguMC4wLjAiXSxbIkNocm9taXVtIiwiMTA1LjAuNTE5NS41MiJdXSxmYWxzZV0.&amp;dt=1662025821519&amp;bpp=8&amp;bdt=1620&amp;idt=-M&amp;shv=r20220829&amp;mjsv=m202208250101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D7e07251f5ae78b86-2228e463bdd50051%3AT%3D1661236558%3ART%3D1661236558%3AS%3DALNI_MbIizpPAfRROqDXFNfaxZdEe4IDbw&amp;gpic=UID%3D000008ec6d92f321%3AT%3D1661236558%3ART%3D1662022506%3AS%3DALNI_MbGQ_4bwOo37j_BhST5aSGQTEM2Uw&amp;prev_fmts=1200x280%2C782x280%2C0x0&amp;nras=2&amp;correlator=6933333329393&amp;frm=20&amp;pv=1&amp;ga_vid=504248638.1661236548&amp;ga_sid=1662025820&amp;ga_hid=822170979&amp;ga_fc=1&amp;u_tz=345&amp;u_his=5&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=79&amp;ady=2469&amp;biw=1356&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=44771041%2C31069217%2C44772921&amp;oid=2&amp;psts=AEC3cPIZqAjq8XI0ZLzKlTXYjOhxdUrJc8G6B4E9swrCk0Y5H3d8g__dGT_I0pYS7gZx5bSxIOQ92KPrI9rM1pbS&amp;pvsid=3963835813551754&amp;tmod=1957620093&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fkathmandupost.com%2Fsports&amp;eae=0&amp;fc=384&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C657&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;ifi=5&amp;uci=a!5&amp;btvi=2&amp;fsb=1&amp;xpc=VLZDtuEmAi&amp;p=https%3A//kathmandupost.com&amp;dtd=55\" data-google-container-id=\"a!5\" data-google-query-id=\"CNO229Wo8_kCFRKpvQodGrMIHQ\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 782px; height: 280px;\"></iframe></div></ins></div><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">Jagan Bahadur Gurung, the president of GPTA, said they were expecting more than 1100 players in the event and 811 players have already registered for participation.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">“The registration is open for G2 rankings from all across the globe on an individual basis. Nepali players also need to register individually to compete in the G2 rankings,” said Gurung.</p><p style=\"margin-right: 0px; margin-left: 0px; color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">In the senior ranking category, the male’s gyeorugi (fight) would vie in eight weight categories—the U-54kg, U-58kg, U-63kg, U-68kg, U-74kg, U-80kg, U-87 kg, and above 87kg. The women’s player would compete in the U-46kg, U-49kg, U-53kg, U-57kg, U-62kg, U-67kg, U-73kg and above 72kg weight division.</p><br style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><br style=\"color: rgb(51, 51, 51); font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\"><a href=\"https://tkpo.st/3RaAZAl\" style=\"background-color: rgb(255, 255, 255); color: rgb(50, 52, 55); cursor: pointer; transition: all 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 0s; font-family: Georgia, &quot;Times New Roman&quot;, Times, serif;\">https://tkpo.st/3RaAZAl</a>', '2022-09-01', '09:51:36', 'uploads/post/featureimage/631080a80057e.jfif', 1, 1, 1, 7, '2022-09-01 04:06:36', '2022-09-01 04:06:36'),
(7, 'Jhigu basuri khala', 'chhori program', 'jhigu-basuri-khala', 'Shritika shrestha', '<p style=\"font-size: 20px; font-family: &quot;ek mukta&quot;, Verdana; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.5; padding: 15px 0px; color: rgb(51, 51, 51); text-align: justify;\"><span style=\"color: rgb(38, 48, 56); font-family: &quot;IBM Plex Sans&quot;; font-size: 16px; text-align: start;\"><b>Nepal was declared a secular country by the Parliament on 18th May 2006. Religions practised in Nepal are Hinduism, Buddhism, Islam, Christianity, Jainism, Sikhism, Bon, ancestor worship and animism. The majority of Nepalis are either Hindus or Buddhists and these two religions have co-existed in harmony through centuries.</b></span><br></p>', '2022-09-08', '10:20:21', 'uploads/post/featureimage/6319c1e5753f2.png', 1, 1, 1, 8, '2022-09-01 04:09:09', '2022-09-08 04:35:21'),
(8, 'TECHNOLOGY', 'Internet Connectivity', 'technology', 'Sunita Shrestha', '<div class=\"art_title\" style=\"font-family: Roboto, sans-serif; color: rgb(0, 0, 0); margin-bottom: 0px; background: rgb(246, 246, 246); width: 375px; display: inline-block; padding: 15px 15px 10px;\"><a href=\"https://www.nepalisansar.com/technology/internet-connectivity-set-to-become-costly-in-nepal/\" style=\"color: rgb(51, 51, 51);\">Internet Connectivity Set to Become Costly in Nepal</a></div><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 15px;\">&nbsp;</span><div class=\"art_desc\" style=\"font-size: 14px; line-height: 24px; color: rgb(34, 34, 34); letter-spacing: 0.4px; background: rgb(246, 246, 246); width: 375px; display: inline-block; padding: 0px 15px 15px; font-family: Roboto, sans-serif;\">Internet connectivity is likely to become pricier in Nepal as prices are widely perceived to...</div>', '2022-09-02', '23:55:09', 'uploads/post/featureimage/631297dd8027d.jpg', 1, 1, 1, 3, '2022-09-01 05:19:31', '2022-09-02 18:10:09'),
(10, 'Today Latest News Here!', 'Today', 'today-latest-news-here', 'as', 'This&nbsp; Presentation Slide', '2022-09-02', '23:49:39', 'uploads/post/featureimage/6310f17392458.jpg', 1, 1, 1, 14, '2022-09-01 12:07:51', '2022-09-02 18:04:39'),
(11, 'Today News', 'news', 'today-news', 'Sunil shrestha', 'xyz', '2022-09-03', '04:40:59', 'uploads/post/featureimage/6312dadbf06fd.jfif', 1, 1, 1, 3, '2022-09-02 22:56:00', '2022-09-02 22:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Politics', '2022-08-22 10:23:36', '2022-08-22 10:23:36'),
(2, 'Business', '2022-08-22 10:23:36', '2022-08-22 10:23:36'),
(3, 'Techs', '2022-08-22 10:23:36', '2022-08-22 10:23:36'),
(5, 'Education', '2022-08-22 10:23:36', '2022-08-22 10:23:36'),
(7, 'Sports', '2022-08-22 10:23:36', '2022-08-22 10:23:36'),
(8, 'Culture', '2022-08-22 10:23:36', '2022-08-22 10:23:36'),
(10, 'Internship', '2022-08-22 10:29:27', '2022-08-22 10:29:27'),
(12, 'Video', '2022-08-30 22:51:17', '2022-08-30 22:51:17'),
(14, 'news', '2022-09-01 12:05:46', '2022-09-01 12:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$sC9XAiepBxszWqFiy3SnVOkfKxy1kTfP3fTabMBZC0DkT0SCcWZ5O', NULL, '2022-08-22 10:23:36', '2022-08-22 10:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` date NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `heading`, `post_date`, `url`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'React.js Teacher Need', '2022-08-29', 'https://youtu.be/XKuXXnN1Eyc', 'uploads/video/banner/630c8a83cf0e8.jpg', '2022-08-29 03:59:35', '2022-08-29 03:59:35'),
(3, 'Nepali news l Today news nepali l news of nepal today August 31 2022 भदौ १५ दिनभरको खबर अपडेट', '2022-09-01', 'https://youtu.be/b-ylB1ysoVw', 'uploads/video/banner/6310827019e74.JPG', '2022-09-01 04:14:12', '2022-09-01 04:14:12'),
(4, 'Manoj Gajurel || आमा || Aama || Official || Sisnupani Nepal || छोरी', '2022-09-01', 'https://youtu.be/5F9iBtvZ4w4', 'uploads/video/banner/6310832dcf4f6.JPG', '2022-09-01 04:17:21', '2022-09-01 04:17:21'),
(5, 'Nepali news l Today news nepali l news of nepal today August 31 2022 भदौ १५ दिनभरको खबर अपडेट', '2022-09-02', 'https://youtu.be/b-ylB1ysoVw', 'uploads/video/banner/6310f8c3b5eed.jpg', '2022-09-01 12:39:03', '2022-09-01 12:39:03'),
(6, 'Chat App using React and Firebase | Realtime Private Chat Application', '2022-09-07', 'https://youtu.be/k4mjF4sPITE', 'uploads/video/banner/63187a4a6f89a.jpg', '2022-09-07 05:17:34', '2022-09-07 05:17:34');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_post_category_id_foreign` (`post_category_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_post_category_id_foreign` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
