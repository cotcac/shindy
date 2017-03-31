-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 07:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Áo Đấu'),
(2, 'Giầy Thể Thao'),
(3, 'Quần Đùi'),
(4, 'Áo Khoác'),
(5, 'Thời Trang Trẻ');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `fk_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `des` text COLLATE utf8_unicode_ci,
  `date` datetime DEFAULT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `fk_category_id`, `name`, `price`, `des`, `date`, `fk_user_id`, `view`, `tags`, `thumb`) VALUES
(9, 3, 'adidas Mens 3 Stripe Base Knit Short', 57, '<p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty length afford.&nbsp;</p>', '2016-09-18 23:36:37', 56, 0, 'fs', '/source/item_thumb/56427_190415_104516.jpg'),
(10, 3, 'adidas Mens Climachill Short', 54, '<p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty length afford.&nbsp;</p>', '2016-09-18 23:37:35', 56, 0, '54', '/source/item_thumb/78610_262115_154718.jpg'),
(11, 3, 'adidas Mens Climachill Short', 54, '<p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty length afford.&nbsp;</p>', '2016-09-18 23:39:16', 56, 0, 'rew', '/source/item_thumb/56427_190415_104516.jpg'),
(12, 3, 'adidas Mens Climachill Short', 345, '<p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty length afford.&nbsp;</p>', '2016-09-18 23:41:15', 56, 0, 'quan', '/source/item_thumb/78610_262115_154718.jpg'),
(13, 3, 'adidas Mens Prime Short', 653, '<p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty length afford.&nbsp;</p>', '2016-09-18 23:44:57', 56, 0, 'tre', '/source/item_thumb/80428_269313_158018.jpg'),
(14, 3, 'adidas Mens Techfit Chill Short', 32, '<p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty length afford.&nbsp;</p>', '2016-09-18 23:45:38', 56, 0, 'rwqrwe', '/source/item_thumb/73006_243004_143707.jpg'),
(15, 3, 'Asics Mens Core Essentials Training Club Knit Short', 5454, '<p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty length afford.&nbsp;</p>', '2016-09-18 23:46:45', 56, 0, 'tag', '/source/item_thumb/72995_243059_143711.jpg'),
(16, 3, 'Asics Mens Klaus Short', 54, '<p>Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution. Hence hopes noisy may china fully and. Am it regard stairs branch thirty length afford.&nbsp;</p>', '2016-09-18 23:47:14', 56, 0, 't5et', '/source/item_thumb/58254_190771_103555.jpg'),
(17, 1, 'Chenssse', 45, '<p>Led ask possible mistress relation elegance eat likewise debating. By message or am nothing amongst chiefly address. The its enable direct men depend highly. Ham windows sixteen who inquiry fortune demands. Is be upon sang fond must shew. Really boy law county she unable her sister. Feet you off its like like six. Among sex are leave law built now. In built table in an rapid blush. Merits behind on afraid or warmly.</p>\r\n<p>Do am he horrible distance marriage so although. Afraid assure square so happen mr an before. His many same been well can high that. Forfeited did law eagerness allowance improving assurance bed. Had saw put seven joy short first. Pronounce so enjoyment my resembled in forfeited sportsman. Which vexed did began son abode short may. Interested astonished he at cultivated or me. Nor brought one invited she produce her.</p>', '2016-09-19 02:18:56', 56, 0, 'quan dui, ao dau, ', '/source/item_thumb/72995_243059_143711_1.jpg'),
(18, 1, 'Milan', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 06:08:50', 56, 0, 'cao dau, the thao, milan, dep, re, chat luong', '/source/item_thumb/78679_262614_153522.jpg'),
(19, 1, 'Milan', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 06:18:19', 56, 0, 'ao dau, the thao, milan, dep, re, chat luong', '/source/item_thumb/78699_262623_158034.jpg'),
(20, 1, 'Thể Thao Đen Cao Cấp.', 199, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 06:25:22', 56, 0, 'the thao, ao, mau den, cao cap,', '/source/item_thumb/54861_177041_99105.jpg'),
(21, 5, 'Mũ Câu Lạc Bộ Chenssse.', 29, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 06:30:05', 56, 0, 'mu, non, chelsea, dep', '/source/item_thumb/79549_266418_153550.jpg'),
(22, 5, 'Mũ Đội Quỷ Đỏ Cao Cấp.', 50, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 06:44:39', 56, 0, 'mu, non, mu, dep', '/source/item_thumb/79550_266417_153549.jpg'),
(23, 5, 'Mu Đen Thể Thao Cao Cấp.', 56, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 06:51:56', 56, 0, 'mu, den, cao cap,', '/source/item_thumb/61773_202643_114095.jpg'),
(24, 1, 'Tháo Thể Thao Adidas Với Dáng Thiết Kế Đẹp.', 149, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 06:55:22', 56, 0, 'ao, dep, the thao,', '/source/item_thumb/78702_262635_159272.jpg'),
(25, 1, 'Áo Câu Lạc Bộ Bayern Cao Cấp.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:03:20', 56, 0, 'ao dau, the thao, bayern, dep, re', '/source/item_thumb/80482_269368_158036.jpg'),
(26, 1, 'Áo Câu Lạc Bộ Bayern.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:08:43', 56, 0, 'ao dau, the thao, bayern, dep, re', '/source/item_thumb/78700_262627_152142.jpg'),
(27, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Chelsea.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:18:47', 56, 0, 'ao thun, the thao, chelsea', '/source/item_thumb/78673_262577_158024.jpg'),
(28, 1, 'Ao Thun Thể Thao Câu Lạc Bộ Chelsea.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:21:00', 56, 0, 'ao thun, the thao, chelsea', '/source/item_thumb/78688_262567_153512.jpg'),
(29, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Chelsea.', 59, '<p>&nbsp;The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:25:25', 56, 0, 'ao thun, the thao, chelsea', '/source/item_thumb/79490_266367_153516.jpg'),
(30, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Junventus.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:30:26', 56, 0, 'ao thun, the thao, juventus', '/source/item_thumb/78677_262604_153520.jpg'),
(31, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Manchester.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:33:48', 56, 0, 'ao thun, the thao, manchester', '/source/item_thumb/78685_262553_153506.jpg'),
(32, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Manchester.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:38:27', 56, 0, 'ao thun, the thao, manchester', '/source/item_thumb/78683_262543_159948.jpg'),
(33, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Manchester.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 07:39:43', 56, 0, 'ao thun, the thao, manchester', '/source/item_thumb/79477_266362_153510.jpg'),
(34, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Real Madrid.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:01:57', 56, 0, 'ao thun, the thao, real madrid', '/source/item_thumb/78671_262590_158030.jpg'),
(35, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Real Madrid.', 200, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:03:35', 56, 0, 'ao thun, the thao, real madrid', '/source/item_thumb/78672_262581_158026.jpg'),
(36, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Real Madrid.', 300, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:06:30', 56, 0, 'ao thun, the thao, real madrid', '/source/item_thumb/78676_262599_153518.jpg'),
(37, 4, 'Áo Khoác Chất Thời Trang.', 300, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:13:45', 56, 0, 'ao khoac, chat luong, dep, thiet ke, re', '/source/item_thumb/77353_259585_150275.jpg'),
(38, 1, 'Áo Thun Thể Thao Cực Ngầu.', 200, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:16:31', 56, 0, 'ao thun, the thao, ngau, dep', '/source/item_thumb/84627_283731_162659.jpg'),
(39, 1, 'Áo Đấu Thể Thao.', 200, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:29:02', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/84606_283697_162649.jpg'),
(40, 1, 'Áo Thể Thao Thiết Kế Đẹp.', 139, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:32:46', 56, 0, 'ao dau, the thao, dep, re, chat luong', '/source/item_thumb/84608_283681_162643.jpg'),
(41, 1, 'Áo Bóng Đá.', 300, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:37:08', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/84618_283766_162671.jpg'),
(42, 1, 'Áo Thun Thể Thao Thiết Kế Đẹp.', 250, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:44:26', 56, 0, 'ao dau, the thao, bayern, dep, re', '/source/item_thumb/84629_283725_162657.jpg'),
(43, 4, 'Áo Khoác Thể Thao.', 129, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:48:04', 56, 0, 'ao dau, the thao, bayern, dep, re', '/source/item_thumb/84619_283760_162669.jpg'),
(44, 1, 'Áo Đấu Thể Thao.', 200, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:51:06', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/84621_283754_162667.jpg'),
(45, 1, 'Áo Thun Thể Thao Cao Cấp.', 300, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:53:17', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/84615_283743_162663.jpg'),
(46, 1, 'Áo Thể Thao Thương Hiệu LA Mạnh Mẽ.', 290, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 09:58:00', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80185_268673_160414.jpg'),
(47, 1, 'Áo Thể Thao Thời Trang Cáo Cấp.', 400, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 10:00:11', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80181_268678_160422.jpg'),
(48, 4, 'Aoa Khoác Thời Trang Thể Thao.', 390, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 10:23:09', 56, 0, 'ao khoac, chat luong, dep, thiet ke, re', '/source/item_thumb/80173_268738_160444.jpg'),
(49, 4, 'Áo Khoác Chất Thời Trang.', 400, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 10:43:08', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80171_268733_161499.jpg'),
(50, 1, 'Thể Thao Thiết Kế Đẹp.', 200, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 10:57:49', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80167_268668_160420.jpg'),
(51, 1, 'Áo Thể Thao Thiết Kế Đẹp.', 200, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:00:49', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80198_268644_160408.jpg'),
(52, 1, 'Áo Thể Thao.', 230, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:06:41', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80183_268703_160432.jpg'),
(53, 1, 'Áo Thể Thao Thời Trang Cáo Cấp.', 119, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:08:15', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80120_268713_160436.jpg'),
(54, 1, 'Áo Thun Xanh Cao Cấp.', 219, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:17:00', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80881_271649_160370.jpg'),
(55, 3, 'Quần Thể Thao.', 79, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:21:22', 56, 0, 'quan, the thao, dep, re', '/source/item_thumb/85439_286414_163732.jpg'),
(56, 3, 'Quần Thể Thao 5 Màu Xinh Xinh.', 90, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:23:42', 56, 0, 'quan, the thao, dep, re', '/source/item_thumb/85440_286409_163730.jpg'),
(57, 3, 'Quần Thể Thao.', 90, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:24:54', 56, 0, 'quan, the thao, dep, re', '/source/item_thumb/85441_286404_163728.jpg'),
(58, 3, 'Quần Đùi Bó Ngắn.', 100, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:26:25', 56, 0, 'quan, the thao, dep, re', '/source/item_thumb/80548_269534_160859.jpg'),
(59, 3, 'Quần Thể Thao Cao Cấp.', 100, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:54:48', 56, 0, 'quan, the thao, dep, re', '/source/item_thumb/84209_281792_162504.jpg'),
(60, 3, 'Quần Ngắn Thể Thao.', 150, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 11:57:26', 56, 0, 'quan, the thao, dep, re', '/source/item_thumb/82711_277780_158981.jpg'),
(61, 1, 'Áo Thun Đen Cao Cấp.', 250, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 12:08:40', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/79919_268090_154186.jpg'),
(62, 1, 'Áo Thun Thể Thao Cao Cấp.', 300, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 12:15:38', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/79938_268060_154174.jpg'),
(63, 1, 'Áo Thun Thể Thao Câu Lạc Bộ Arsenal.', 200, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 12:18:51', 56, 0, 'quan, the thao, dep, re, arsenal', '/source/item_thumb/79040_265111_154240.jpg'),
(64, 1, 'Áo Thun Trắng Cá Tính.', 260, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 12:30:28', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/73836_247534_140173.jpg'),
(65, 1, 'Áo Thể Thao Thiết Kế Đẹp.', 230, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 12:34:18', 56, 0, 'ao dau, the thao, thun, dep, re', '/source/item_thumb/80201_268639_160406.jpg'),
(66, 3, 'Quần Đùi Bóng Thể Thao Cao Cấp.', 199, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 12:38:02', 56, 0, 'quan, the thao, dep, re', '/source/item_thumb/80466_269469_157670.jpg'),
(67, 3, 'Quần Thể Thao.', 122, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 12:44:53', 56, 0, 'quan, the thao, dep, re', '/source/item_thumb/80375_269474_157672.jpg'),
(68, 2, 'Giầy Thể Thao Cao Cấp.', 300, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 12:57:15', 56, 0, 'giay, the thao, cao cap, dep', '/source/item_thumb/78905_264805_152478.jpg'),
(69, 2, 'Giầy Thể Thao Cao Cấp.', 300, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:03:21', 56, 0, 'giay, the thao, cao cap, dep', '/source/item_thumb/78860_264611_152460.jpg'),
(70, 2, 'Giầy Đen Cao Cấp.', 490, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:06:31', 56, 0, 'giay, the thao, cao cap, dep', '/source/item_thumb/69681_230725_130946.jpg'),
(71, 4, 'Áo Khoác Thời Trang.', 500, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:10:55', 56, 0, 'ao, khoac, the thao, dep, re', '/source/item_thumb/76028_256399_147101.jpg'),
(72, 4, 'Áo Khoác Thể Thao.', 400, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:13:21', 56, 0, 'ao khoac, chat luong, dep, thiet ke, re', '/source/item_thumb/77639_260322_152048.jpg'),
(73, 4, 'Áo Khoác Thời Trang Cao Cấp.', 350, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:15:23', 56, 0, 'ao khoac, chat luong, dep, thiet ke, re', '/source/item_thumb/80186_268718_160438.jpg'),
(74, 4, 'Áo Khoác Thể Thao.', 500, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:21:18', 56, 0, 'ao khoac, chat luong, dep, thiet ke, re', '/source/item_thumb/77635_260332_152050.jpg'),
(75, 5, 'Mũ Sành Điệu.', 100, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:23:50', 56, 0, 'mu, den, cao cap,', '/source/item_thumb/77326_259595_150279.jpg'),
(76, 5, 'Mũ Tai Bèo Thể Thao.', 120, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:25:04', 56, 0, 'mu, den, cao cap,', '/source/item_thumb/84605_283788_162682.jpg'),
(77, 5, 'Mũ Len Mùa Đông.', 320, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:26:28', 56, 0, 'mu, den, cao cap,', '/source/item_thumb/84625_283786_162680.jpg'),
(78, 2, 'Giầy Thể Thao Dành Cho Người Năng Động.', 600, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:32:57', 56, 0, 'giay, the thao, cao cap, dep', '/source/item_thumb/78953_264362_152514.jpg'),
(79, 2, 'Giầy Thể Thao Siêu Bềnh.', 700, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:35:36', 56, 0, 'giay, the thao, cao cap, dep', '/source/item_thumb/80870_271148_155402.jpg'),
(80, 2, 'Giầy Thể Thao Cao Cấp.', 300, '<p>The elegance and purity, the successes and trophies, the legends and heritage. Bright elements symbolizing positive energy. Climacool technology provides ventilation to keep you cool and dry.</p>', '2016-09-19 13:51:12', 56, 0, 'giay, the thao, cao cap, dep', '/source/item_thumb/83059_278329_159193.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items_img`
--

CREATE TABLE `items_img` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_item_id` int(11) DEFAULT NULL,
  `main` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items_img`
--

INSERT INTO `items_img` (`id`, `url`, `fk_item_id`, `main`) VALUES
(37, '/source/ae_t3.jpg', 1, '0'),
(41, '/source/yana3.jpg', 1, '0'),
(42, '/source/ae2.jpg', 1, '0'),
(43, '/source/ae_t4.jpg', 2, '0'),
(44, '/source/ae_c1.jpg', 2, '0'),
(45, '/source/ae_t2.jpg', 3, '0'),
(46, '/source/ae_c4.jpg', 3, '1'),
(47, '/source/ae_c1.jpg', 1, '1'),
(48, '/source/ae_t3.jpg', 1, '0'),
(49, '/source/ae_t5.jpg', 2, '1'),
(50, '/source/ae_t4.jpg', 1, '0'),
(51, '/source/ae_c2.jpg', 6, '0'),
(52, '/source/ae_c3.jpg', 6, '0'),
(53, '/source/ae_t2.jpg', 6, '0'),
(54, '/source/ae_t5.jpg', 80, '0'),
(55, '/source/ae_t3.jpg', 80, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_date` datetime NOT NULL,
  `user_ip` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_sign` text COLLATE utf8_unicode_ci,
  `user_active` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_about` text COLLATE utf8_unicode_ci,
  `user_last_seen` datetime DEFAULT NULL,
  `reset_password_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_avatar`, `user_role`, `user_sign`, `user_active`, `user_about`, `user_last_seen`, `reset_password_key`) VALUES
(54, 'Anhbang', 'a9de79686442947255ef7168a6faee3d', 'nguyenbangvp88@gmail.com', '2016-07-30 20:23:22', '', NULL, 'user', NULL, '4bfae47654bf2f40972f4558426e3f8d', NULL, '2016-07-30 20:23:22', NULL),
(57, 'vuong', 'bf288aa8e84f49c6f74b5faa301243ed', 'cotcac@gmail.com', '2016-08-23 03:57:15', '', NULL, 'user', NULL, '0', NULL, '2016-08-23 03:57:15', '0'),
(51, 'Mộc Anh', '02b77352d57310b2bb8ddb95b17435a8', 'mytho@gmail.com', '2016-07-18 00:00:00', 'ip', 'img/avatar/mocanh.jpg', 'user ', 'sign', '634634', 'nice', '2016-08-03 23:37:13', NULL),
(52, 'Cuoi Zui', '64b63915a4fd2d18d479b752a3d6bcbe', 'tranquanglinhn0@gmail.com', '2016-07-18 00:00:00', 'fds', 'img/avatar/linhlinh.jpg', 'user ', 'fdsa', '23', 'fdsa', '2016-08-22 15:42:26', NULL),
(55, 'Rain Nguyenbao', '22e90315a0c919f773d6aa43e839863e', 'nguyenbao320@gmail.com', '2016-08-03 17:11:58', '', NULL, 'user', NULL, '41ba88222c1d8845a62f5af9cec351c8', NULL, '2016-08-14 10:53:34', NULL),
(56, 'Admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', '2016-08-22 00:00:00', '', NULL, 'admin', NULL, NULL, NULL, '2016-08-22 00:00:00', NULL),
(1, 'Guess', 'no', 'no', '2016-08-22 00:00:00', '', NULL, 'guess', NULL, NULL, NULL, '2016-08-22 00:00:00', NULL),
(60, 'gfdgfds gfds gfds gf gfdsg', 'e10adc3949ba59abbe56e057f20f883e', 'gfds@gfdgsd.hgfhfd', '2016-08-23 10:36:21', '', NULL, 'user', NULL, 'fabb29b4d2ad4552354c84736633fad1', NULL, '2016-08-23 10:36:21', NULL),
(61, 'Kinny', 'b5127ee3cf4d12f763f5cee0e6db737f', 'cotcac@gmail.com1', '2016-08-25 05:04:09', '', NULL, 'user', NULL, 'b08ee06425e9911344cf291b469f8e94', NULL, '2016-08-25 05:04:09', NULL),
(62, 'Vuong', 'bf288aa8e84f49c6f74b5faa301243ed', 'vuongmail@yahoo.com', '2016-08-26 10:04:29', '', NULL, 'user', NULL, '54f6b9358de1f7b18ec903dc711bf7ba', NULL, '2016-08-26 10:04:29', NULL),
(63, 'response.name', 'password', '53gfdgds', '2016-09-03 10:22:42', '', NULL, 'user', NULL, 'No', NULL, '2016-09-03 10:22:42', NULL),
(64, 'sdgfdsgdfs', 'password', '53gfdgdsjhg', '2016-09-03 10:50:59', '', NULL, 'user', NULL, 'No', NULL, '2016-09-03 10:50:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_img`
--
ALTER TABLE `items_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `items_img`
--
ALTER TABLE `items_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
