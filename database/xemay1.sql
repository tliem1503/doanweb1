-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th12 09, 2020 lúc 11:34 AM
-- Phiên bản máy phục vụ: 5.7.28
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xemay1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `phanquyen` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`, `phanquyen`) VALUES
(1, 'tliem', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(2, 'cubeo', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'khang', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `mabanner` varchar(10) NOT NULL,
  `manv` varchar(10) NOT NULL,
  `ngaydang` datetime(6) NOT NULL,
  `noidung` varchar(250) NOT NULL,
  `hinh` varchar(20) NOT NULL,
  PRIMARY KEY (`mabanner`),
  UNIQUE KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`mabanner`, `manv`, `ngaydang`, `noidung`, `hinh`) VALUES
('banner01', 'nv01', '2020-11-10 00:00:00.000000', 'noi dung banner 1 la', 'bn1.jpg'),
('banner02', 'nv02', '2020-11-10 00:00:00.000000', 'noi dung banner 2 la', 'bn2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` varchar(10) NOT NULL,
  `manv` varchar(10) NOT NULL,
  `makh` varchar(10) NOT NULL,
  `tennv` varchar(250) NOT NULL,
  `tenkh` varchar(250) NOT NULL,
  PRIMARY KEY (`madh`),
  KEY `manv` (`manv`) USING BTREE,
  KEY `makh` (`makh`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madh`, `manv`, `makh`, `tennv`, `tenkh`) VALUES
('dh01', 'nv01', 'kh01', 'Truong Tan Duy', 'Nguyen Kim Long');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

DROP TABLE IF EXISTS `hang`;
CREATE TABLE IF NOT EXISTS `hang` (
  `mahang` varchar(10) NOT NULL,
  `tenhang` varchar(250) NOT NULL,
  PRIMARY KEY (`mahang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`mahang`, `tenhang`) VALUES
('hd', 'Honda'),
('kw', 'Kawasaki'),
('vp', 'Vespa'),
('ymh', 'Yamaha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `makh` varchar(10) NOT NULL,
  `hotenkh` varchar(250) NOT NULL,
  `matkhau` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `ngaysinh` datetime(6) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `sdt` int(15) NOT NULL,
  PRIMARY KEY (`makh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `hotenkh`, `matkhau`, `diachi`, `ngaysinh`, `gioitinh`, `sdt`) VALUES
('kh01', 'nguyen kim long', '123456', 'tphcm', '2020-11-10 00:00:00.000000', 'nam', 147896325),
('kh02', 'long kim nguyen', '123345', 'TPHCM', '2020-11-25 08:28:00.000000', 'nu', 123698745);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

DROP TABLE IF EXISTS `khuyenmai`;
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `makm` varchar(10) NOT NULL,
  `manv` varchar(10) NOT NULL,
  `noidung-km` varchar(250) NOT NULL,
  `ngaybd` datetime NOT NULL,
  `ngaykt` datetime NOT NULL,
  PRIMARY KEY (`makm`),
  UNIQUE KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `maloai` varchar(10) NOT NULL,
  `tenloai` varchar(250) NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('contay', 'xe con tay'),
('ga', 'xe tay ga'),
('so', 'xe so');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manv` varchar(10) NOT NULL,
  `tennv` varchar(250) NOT NULL,
  `matkhau` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL,
  `ngaysinh` datetime(6) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `sdt` int(15) NOT NULL,
  `luongcb` int(20) NOT NULL,
  PRIMARY KEY (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `matkhau`, `diachi`, `ngaysinh`, `gioitinh`, `sdt`, `luongcb`) VALUES
('nv01', 'Truong Tan Duy', '123456', 'TPHCM', '2019-11-29 00:00:00.000000', 'nam', 123456789, 500000),
('nv02', 'Nguyen Thanh Liem', '123456', 'TPHCM', '2019-04-16 00:00:00.000000', 'nam', 987654321, 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

DROP TABLE IF EXISTS `phieunhap`;
CREATE TABLE IF NOT EXISTS `phieunhap` (
  `mapn` varchar(10) NOT NULL,
  `manv` varchar(10) NOT NULL,
  `ngaynhap` datetime(6) NOT NULL,
  `tenhang` varchar(250) NOT NULL,
  PRIMARY KEY (`mapn`),
  UNIQUE KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `matt` varchar(10) NOT NULL,
  `manv` varchar(10) NOT NULL,
  `ngaydang-tt` datetime NOT NULL,
  `noidung-tt` varchar(250) NOT NULL,
  PRIMARY KEY (`matt`),
  UNIQUE KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

DROP TABLE IF EXISTS `xe`;
CREATE TABLE IF NOT EXISTS `xe` (
  `maxe` varchar(10) NOT NULL,
  `tenxe` varchar(250) NOT NULL,
  `mota` text NOT NULL,
  `gia` int(15) NOT NULL,
  `hinh` varchar(20) NOT NULL,
  `mahang` varchar(10) NOT NULL,
  `maloai` varchar(10) NOT NULL,
  PRIMARY KEY (`maxe`),
  KEY `maloai` (`maloai`),
  KEY `mahang` (`mahang`,`maloai`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`maxe`, `tenxe`, `mota`, `gia`, `hinh`, `mahang`, `maloai`) VALUES
('', 'vario', 'xe nhập khẩu indonesia', 5900000, 'vario.jpg', 'hd', 'ga'),
('01', 'Wave Alpha 110cc', 'Wave Alpha 110cc phiên bản 2020 trẻ trung và cá tính với thiết kế bộ tem mới, tạo những điểm nhấn ấn tượng, thu hút ánh nhìn, cho bạn tự tin ghi lại dấu ấn cùng bạn bè của mình trên mọi hành trình.', 17000000, 'hd1.jpg', 'hd', 'so'),
('02', 'Honda Winner X', 'Xứng tầm một mẫu xe côn tay thể thao cao cấp, Honda WINNER X tiếp tục khẳng định vị thế với phối màu và tem mới làm nổi bật khí chất đỉnh cao của người lái', 43000000, 'h2.jpg', 'hd', 'contay'),
('03', 'SH Mode 125', 'Thuộc phân khúc xe ga cao cấp và thừa hưởng thiết kế sang trọng nổi tiếng của dòng xe SH, Sh mode luôn được đánh giá cao nhờ kiểu dáng thanh lịch, tinh tế tới từng đường nét. Lần đầu tiên sau 7 năm kể từ khi ra mắt, toàn bộ thiết kế được thay đổi toàn diện cùng với sự nâng cấp công nghệ hiện đại, Sh mode phiên bản 2020 hứa hẹn sẽ vượt xa mọi kỳ vọng về một chiếc xe thế hệ mới dành cho khách hàng.', 54000000, 'h3.jpg', 'hd', 'ga'),
('04', 'Yamaha Exciter', 'Yamaha Exciter là mẫu xe côn tay được ưa chuộng nhất tại thị trường Việt Nam với thiết kế mang đậm dấu ấn đặc trưng DNA của Yamaha. Bên cạnh phiên bản Exciter 135 được yêu thích từ trước đó, phiên bản mới nhất hiện nay là Exciter 150 có giá bán lẻ đề xuất từ 46,99 - 48,99 triệu VNĐ.', 44000000, 'h4.jpg', 'ymh', 'contay'),
('05', 'Yamaha Sirius', 'Yamaha Sirius là mẫu xe số bền bỉ đã có mặt tại thị trường Việt Nam hơn 20 năm trước. Cho đến nay, dòng xe này đã được cải tiến đáng kể về thiết kế và động cơ Trong năm 2020, giá bán lẻ đề xuất xe Sirius từ 18,8 - 21,8 triệu VNĐ cho các phiên bản phanh cơ, phanh đĩa và vành đúc.', 20000000, 'h5.jpg', 'ymh', 'so'),
('06', 'Yamaha NVX', 'Yamaha NVX là mẫu xe tay ga có thiết kế khỏe khoắn, mang đậm nét thể thao với hiệu suất vận hành mạnh mẽ. Ở phiên bản mới nhất NVX 155 VVA thế hệ II được trang bị hàng loạt các tính năng hiện đại như: ứng dụng Y-Connect- ứng dụng công nghệ tích hợp trên điện thoại lần đầu tiên được trang bị trên xe tay ga Yamaha tại Việt Nam, động cơ BlueCore 155cc VVA, phanh ABS, khóa thông minh SmartKey, hệ thống ngắt động cơ tạm thời Stop & Start System (SSS), cốp xe rộng lên tới 25 lít,..', 54000000, 'h6.jpg', 'ymh', 'ga'),
('07', 'Vespa Primavera', 'Vespa Primavera xuất hiện lần đầu tiên vào năm 1968 và đã tạo ra một cuộc cách mạng với sức mạnh của động cơ được cải tiến, đồng thời dễ dàng điều khiển. Trẻ trung, sáng tạo, công nghệ tiên tiến, năng động và thân thiện với môi trường, Vespa Primavera chính là ngôi sao sáng trong chính thời đại của mình. Ngày nay, cuộc cách mạng vẫn luôn được tiếp tục, dòng xe Vespa Primavera ngày càng trở nên an toàn hơn, thoải mái và phong cách hơn, với thiết kế tinh tế tỉ mỉ tới từng chi tiết và những điểm nhấn độc đáo trong những phiên bản đặc biệt. ', 73000000, 'h7.jpg', 'vp', 'ga'),
('08', 'Vespa Sprint', 'Vespa Sprint thừa hưởng di sản của truyền thống về sức mạnh và tuổi trẻ. Câu chuyện về Vespa Sprint bắt đầu từ giữa những năm 60 với sự ra đời của Vespa 50, một thế hệ Vespa thể thao đã thống trị những con đường ở Châu Âu. Chiếc xe tay ga có kích thước gọn, nhẹ, đặc biệt là rất nhanh và hiện đại, như chính sự nhiệt huyết của những người trẻ tuổi sở hữu chúng. Những con người trẻ tuổi ấy luôn khao khát tự do, theo đuổi những ý tưởng làm thay đổi cả thể giới, và chính Vespa Sprint đã giúp họ tìm thấy đôi cánh tự do của chính mình.', 73000000, 'h8.jpg', 'vp', 'ga'),
('09', 'Vespa GTS', 'Chiếc scooter thể thao hàng đầu Vespa GTS Super là một trong những mẫu xe đỉnh cao của Vespa, thấm đẫm triết lý và tinh thần của thương hiệu Vespa – biểu tượng của một phong cách sống đầy ắp cảm hứng tự do, phá vỡ những nguyên tắc rập khuôn và sự bảo thủ, luôn mang đến cho người cầm lái những cảm giác của sự đam mê, khao khát và tự do. \r\n\r\n', 94000000, 'h9.jpg', 'vp', 'ga'),
('10', 'Kawasaki Ninja H2R', 'Siêu phẩm Kawasaki Ninja H2 mang trên mình khối động cơ cực mạnh với trang bị hệ thống Turbo Super Charge cho công suất xe lên ngưỡng 200HP cùng thiết kế cực kì hầm hố và góc cạnh. Kawasaki H2 mang dáng dấp 1 quái thú đường đua với dàn áo bóng loáng cùng hàng loạt công nghệ đỉnh cao khiến nó nổi bật hoàn toàn so với mọi chiếc Motor xuất hiện trên đường phố. Giá xe Kawasaki H2 bán với giá 990.000.000 đồng khi được nhập khẩu chính hãng về Việt Nam.', 990000000, 'h10.jpg', 'kw', 'contay'),
('11', 'Kawasaki Z1000', 'Kawasaki Z1000 là chiếc xe phân khối lớn thuộc dòng naked bike được hãng cho ra mắt gần đây và được dân mê tốc độ săn đón nồng nhiệt. Với mức giá gần 400 triệu, lại sở hữu thiết kế đẳng cấp cùng công nghệ ABS tiên tiến, chắc chắn đây là một chiếc xe xứng đáng để được sở hữu.', 450000000, 'h11.jpg', 'kw', 'contay');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `xe_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `xe_ibfk_2` FOREIGN KEY (`mahang`) REFERENCES `hang` (`mahang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
