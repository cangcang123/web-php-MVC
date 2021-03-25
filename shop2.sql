-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 25, 2021 lúc 02:01 PM
-- Phiên bản máy phục vụ: 8.0.21
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `idc` int NOT NULL AUTO_INCREMENT,
  `idcd` int NOT NULL,
  `iduser` int DEFAULT NULL,
  `idct` int DEFAULT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`idc`),
  KEY `FK_spc` (`idcd`),
  KEY `FK_userc` (`iduser`),
  KEY `FK_contact` (`idct`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`idc`, `idcd`, `iduser`, `idct`, `status`) VALUES
(10, 11, 9, NULL, 1),
(13, 14, 9, NULL, 0),
(15, 11, NULL, 18, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

DROP TABLE IF EXISTS `cart_detail`;
CREATE TABLE IF NOT EXISTS `cart_detail` (
  `idcd` int NOT NULL AUTO_INCREMENT,
  `idsp` int NOT NULL,
  `quantity` int NOT NULL,
  `size` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`idcd`),
  KEY `FK_sp` (`idsp`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`idcd`, `idsp`, `quantity`, `size`) VALUES
(11, 58, 3, NULL),
(12, 54, 1, NULL),
(13, 58, 3, NULL),
(14, 54, 1, NULL),
(15, 52, 1, NULL),
(16, 54, 2, NULL),
(17, 52, 1, NULL),
(18, 54, 2, NULL),
(19, 52, 1, NULL),
(20, 54, 2, NULL),
(21, 52, 1, NULL),
(22, 54, 2, NULL),
(23, 52, 1, NULL),
(24, 54, 2, NULL),
(25, 52, 1, NULL),
(26, 54, 2, NULL),
(27, 52, 1, NULL),
(28, 54, 2, NULL),
(29, 52, 1, NULL),
(30, 54, 2, NULL),
(31, 52, 1, NULL),
(32, 54, 2, NULL),
(33, 52, 1, NULL),
(34, 54, 2, NULL),
(35, 52, 1, NULL),
(36, 54, 2, NULL),
(37, 52, 1, NULL),
(38, 54, 2, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `idclass` int NOT NULL AUTO_INCREMENT,
  `name` varchar(111) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  PRIMARY KEY (`idclass`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`idclass`, `name`) VALUES
(1, 'Người Lớn'),
(2, 'Trẻ Em'),
(3, 'Tổng Hợp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf32 COLLATE utf32_general_ci DEFAULT NULL,
  `adress` varchar(100) CHARACTER SET utf32 COLLATE utf32_general_ci DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `notes` varchar(255) CHARACTER SET utf32 COLLATE utf32_german2_ci DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `adress`, `phone`, `notes`) VALUES
(1, 'Ngô Thành Cang', '4dzz', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(2, 'Ngô Thành Cang', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(3, 'Ngô Thành Cang', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(4, 'Ngô Thành Cang', 'ưq23', 213, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(5, 'Ngô Thành Cang', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(6, 'Ngô Thành Cang', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(7, 'aaaaaaaaaa', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(8, 'Ngô Thành Cang', '4dzz', 213, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(9, 'Ngô Thành Cang', '4dzz', 213, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(10, 'Ngô Thành Cang', '4dzz', 213, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(11, 'Ngô Thành Cang', '4dzz', 213, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(12, 'Áo Khoát Nam', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(13, 'Áo Khoát Nam', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(14, 'Đồ Trẻ Nam', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(15, 'Ngô Thành Cang', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(16, 'Ngô Thành Cang', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(17, 'Ngô Thành Cang', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(18, 'Ngô Thành Cang', 'ưq23', 12312312, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `idimage` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `idproduc` int NOT NULL,
  PRIMARY KEY (`idimage`),
  KEY `FK_impo` (`idproduc`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`idimage`, `name`, `idproduc`) VALUES
(17, '16000480857744640d70dc4bf52a45bbfb7de36420_thumbnail_600x1615252392.png', 52),
(18, '1600048087f7be0afd1433575e8703266ad1fefe091615252472.jpg', 52),
(20, '16103542185939a2bf65fea90eeb6ab95b01e070d7_thumbnail_600x1615252784.jpg', 54),
(21, '16103542214a4b3e8f1c96d5986bbc588ae1b21a8c_thumbnail_600x1615252784.jpg', 54),
(22, '16103542244ee3928568dbc1e1acc49e89d63a38ad_thumbnail_600x1615252784.jpg', 54),
(23, '16104264896d17b34bd3488f4d78232f88f63700391615258531.jpg', 55),
(24, '1610426492728084a693ef811a812b17e754e168e91615258531.jpg', 55),
(25, '1615258531.', 55),
(26, '159237514625b13465462dce918aab4cd5c826b39f1615259920.jpg', 56),
(27, '1592375150cb84c10e3d7ac5fc5973a3cff6ba52621615259920.jpg', 56),
(28, '1592375153872d762882e73588482dbca7e98caa781615259920.jpg', 56),
(29, '1606980649eb342634bc17fc1cc7e37ce6bfa9be211615260108.jpg', 57),
(30, '1606980656f53cd29d2606f6778256cf254ca6a9eb1615260108.jpg', 57),
(31, '1615260108.', 57),
(32, '16065407237386cbff761cca3e64222ad485f6513e1615260465.jpg', 58),
(33, '16065407266b6d90f75b5eddf1b21ed7e866c38a581615260465.jpg', 58),
(34, '1615260465.', 58),
(35, '157533061_2903869979871218_473467621833317815_o1615262064.jpg', 59),
(36, '158228786_2903869803204569_7272337335783153392_o1615262064.jpg', 59),
(37, '158710260_2903869759871240_3622053858379488294_o1615262064.jpg', 59),
(38, '157535682_2903866203204929_3260409397298673797_o1615262213.jpg', 60),
(39, '1615262213.', 60),
(40, '1615262213.', 60),
(41, '157679502_2903861043205445_4742147766852885008_o1615262322.jpg', 61),
(44, '158130841_2903858696539013_9115972052385749180_o1615262382.jpg', 62),
(47, '158365655_2903857109872505_3146144724098326372_o1615262492.jpg', 63),
(54, 'Thắt-lưng-da-DLTK002-1-scaled1615548629.jpg', 65),
(55, 'Thắt-lưng-da-DLTK002-4-scaled1615548629.jpg', 65),
(56, 'Thắt-lưng-da-DLTK002-5-scaled1615548629.jpg', 65),
(57, '2_d146f573e77b4fc3a0e1704b79b09b0c_master1616647858.jpg', 67),
(58, 'hma00473_5731b084bad6407ea26bf420b3be1f87_master1616647858.jpg', 67),
(59, '10_a8afa57a27d9449fab6695e5c2f62038_master1616647858.jpg', 67),
(60, 'so-mi-nam-taydai-2_9a974453eb1d4f768c40be98c09933ce_master1616647962.jpg', 68),
(61, 'so-mi-nam-taydai-3_ebb7552731b946e48731f169fd8f15d3_master1616647962.jpg', 68),
(62, 'so-mi-caro-nam-10_0dad72b36b7c4ba8bb5d09d9ee1f76e0_master1616647962.jpg', 68);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_product`
--

DROP TABLE IF EXISTS `list_product`;
CREATE TABLE IF NOT EXISTS `list_product` (
  `idlist` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `idnamepro` int NOT NULL,
  PRIMARY KEY (`idlist`),
  KEY `FK_lnam` (`idnamepro`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `list_product`
--

INSERT INTO `list_product` (`idlist`, `name`, `idnamepro`) VALUES
(1, 'Áo Sơ Mi', 1),
(2, 'Áo Nam Lông', 3),
(8, 'Áo Trẻ Nam', 16),
(9, 'Đồ Bé Gái', 17),
(10, 'Áo Sơ Mi Tay Ngắn', 2),
(11, 'Áo Sơ Mi Tay Dài', 2),
(12, 'Áo Thun Nam Cổ Tròn', 1),
(13, 'Set Áo Dây Quần Sọt ', 25),
(14, 'set Áo và Quần Dài', 25),
(15, 'Đầm Cúp Ngực', 26),
(16, 'Đầm Xòe Nữ', 26),
(17, 'Thắt Lưng Nam', 24),
(18, 'Máy Massa Mặt', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nameproduct`
--

DROP TABLE IF EXISTS `nameproduct`;
CREATE TABLE IF NOT EXISTS `nameproduct` (
  `idname` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `idsex` int NOT NULL,
  `idclas` int NOT NULL,
  PRIMARY KEY (`idname`),
  KEY `FK_sel` (`idsex`),
  KEY `FK_cln` (`idclas`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nameproduct`
--

INSERT INTO `nameproduct` (`idname`, `name`, `idsex`, `idclas`) VALUES
(1, 'Áo Thun Nam', 1, 1),
(2, 'Áo Sơ Mi Nam', 1, 1),
(3, 'Áo Khoát Nam', 1, 1),
(4, 'Quần Jean Nam', 1, 1),
(16, 'Đồ Trẻ Nam', 1, 2),
(17, 'Đồ Bé gái', 2, 2),
(23, 'Mỹ Phẩm', 3, 1),
(24, 'Phụ Kiện', 3, 1),
(25, 'Set Quần Áo Nữ', 2, 1),
(26, 'Đầm Nữ', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int NOT NULL,
  `size` varchar(13) CHARACTER SET utf32 COLLATE utf32_general_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `sale` int DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci DEFAULT NULL,
  `style` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `active` int NOT NULL,
  `idprolist` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_prolist` (`idprolist`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `size`, `color`, `sale`, `content`, `style`, `active`, `idprolist`) VALUES
(52, 'Áo sơ mi Nam Nút phía trước Lễ Các Thánh Đường phố', '16000480834b2b8f2e67acefab0d549b7702f7c0bb1615252392.jpg', 440000, 'M', 'Nhiều màu', 0, '', '10', 1, 10),
(54, 'Áo sơ mi Nam Nút phía trước Sọc Sẵn sàng', '1610354216de0603a3fd2892711c12afffd4a63804_thumbnail_600x1615252784.jpg', 345000, 'M', 'Màu Xám nhạt', 0, '', '10', 1, 10),
(55, 'Áo sơ mi Nam Nút phía trước Thiên hà ', '16104264876c4705bbc94eb1f74b81de680b82496f1615258531.jpg', 322000, 'M', 'đen', 0, '', '10', 1, 10),
(56, 'Áo sơ mi Nam Nút phía trước Tất cả trên in Màu xanh hải quân', '159237514396faef203498949a608c4808a0cc99301615259920.jpg', 277000, 'M', 'Màu xanh hải quân', 0, '', '10', 1, 10),
(57, 'Áo sơ mi Nam Nút phía trước màu trơn ', '1606980646ef00a5265c57b1f6e009e994074ad3f41615260108.jpg', 460000, 'M', 'Xám', 0, '', '10', 1, 11),
(58, 'Áo thun nam thêu chữ hai tông màu ', '1606540720e87c7d30b75a850f85ec3a8975dae69f1615260465.jpg', 299000, 'M', 'Đen và Trắng', 0, '', '10', 1, 12),
(59, 'set áo dây  và quần sọt ', '158281061_2903869746537908_8019098020730534329_o1615262064.jpg', 220000, 'M', 'Đen và Trắng', 0, '', '10', 1, 13),
(60, 'Set áo cổ yếm thổ cẩm và quần suông trắng', '158125409_2903866179871598_7133061688226940529_n1615262213.jpg', 225000, 'M', '', 0, '', '10', 1, 14),
(61, 'đầm trắng cúp ngực tay phồng', '157506562_2903861036538779_1856460457335111468_o1615262322.jpg', 200000, 'M', 'Trắng', 0, '', '10', 1, 15),
(62, 'đầm hoa nhíu ngực cổ u', '157697369_2903858729872343_1598970121488081567_o1615262382.jpg', 190000, 'M', 'Nhiều màu', 0, '', '10', 1, 15),
(63, 'Đầm trắng cổ u tùng bí', '157787260_2903857096539173_997593977954103996_o1615262492.jpg', 215000, 'M', 'Trắng', 0, '', '10', 1, 16),
(65, 'Thắt lưng da nam 5S', 'Thắt-lưng-da-DLTK0021615548629.jpg', 399000, '125cm x 3,5cm', 'Đen Nâu', 0, 'Thiết Kế: Khóa Trượt, Mặt Hợp Kim Chống Xước Sang Trọng , 100% Da Bò Cao Cấp', '10', 1, 17),
(66, 'Máy Rửa Mặt Làm Sạch Sâu, Kết Hợp Chức Năng Massage WellDerma Cleansing Fish', 'wellderma_cleansing_fish__khong_tich_diem__005ad7254d8f4182ab78c2878266124a_master1615548871.jpg', 289000, 'XL', 'Hồng Xanh', 280000, '', '10', 1, 18),
(67, 'Sơ Mi Nam Tay Ngắn Xanh SMN0048', '1_0ac1e058d27b4b6f992aff00c4a56bda_master1616647858.jpg', 220000, 'xxl', 'Nhiều màu', 0, '', '10', 1, 10),
(68, 'Sơ Mi Nam Tay Dài SMD0052', 'so-mi-nam-taydai-1_32957a67d53d498da325b3fe87e90799_master1616647962.jpg', 280000, 'M', 'Nhiều màu', 0, '', '10', 1, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sex`
--

DROP TABLE IF EXISTS `sex`;
CREATE TABLE IF NOT EXISTS `sex` (
  `ids` int NOT NULL AUTO_INCREMENT,
  `name` varchar(111) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sex`
--

INSERT INTO `sex` (`ids`, `name`) VALUES
(1, 'nam'),
(2, 'nữ'),
(3, 'Tổng Hợp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf32 COLLATE utf32_german2_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `adress` varchar(255) CHARACTER SET utf32 COLLATE utf32_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `adgroup` int DEFAULT NULL,
  `active` int DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`iduser`, `name`, `username`, `email`, `phone`, `adress`, `password`, `adgroup`, `active`) VALUES
(9, 't1', 't1', 'test@gmail.com', '213', '123', '202cb962ac59075b964b07152d234b70', 0, 1);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_contact` FOREIGN KEY (`idct`) REFERENCES `contact` (`id_contact`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_spc` FOREIGN KEY (`idcd`) REFERENCES `cart_detail` (`idcd`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_userc` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `FK_sp` FOREIGN KEY (`idsp`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_impo` FOREIGN KEY (`idproduc`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `list_product`
--
ALTER TABLE `list_product`
  ADD CONSTRAINT `FK_lnam` FOREIGN KEY (`idnamepro`) REFERENCES `nameproduct` (`idname`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `nameproduct`
--
ALTER TABLE `nameproduct`
  ADD CONSTRAINT `FK_cln` FOREIGN KEY (`idclas`) REFERENCES `class` (`idclass`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_sel` FOREIGN KEY (`idsex`) REFERENCES `sex` (`ids`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_prolist` FOREIGN KEY (`idprolist`) REFERENCES `list_product` (`idlist`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
