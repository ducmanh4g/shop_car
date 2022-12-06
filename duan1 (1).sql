-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2022 lúc 04:54 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbl` int(11) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `idtk` int(11) NOT NULL,
  `idxe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbl`, `noidung`, `idtk`, `idxe`) VALUES
(83, 'đẹp', 20, 12),
(84, 'đẹp quá', 20, 10),
(88, 'ok', 20, 13),
(92, 'đẹp quá', 22, 7),
(93, 'đẹp', 22, 9),
(94, 'đẹp quá', 26, 11),
(95, 'đẹp quá', 26, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_imgxe`
--

CREATE TABLE `chitiet_imgxe` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `idxe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiet_imgxe`
--

INSERT INTO `chitiet_imgxe` (`id`, `img`, `idxe`) VALUES
(58, 'noi-that-honda-city-g.webp', 8),
(59, 'Honda_city_2021_rs_honda_tay_ho_-31.jpg', 8),
(60, 'Honda-City-1.jpg', 8),
(61, '1_1615891767.jpg', 9),
(62, 'Chi-tiet-mau-xe-Honda-Civic-Type-R-tien-ty-tai-Viet-Nam-c--19--1640758639-351-width660height440.jpg', 9),
(63, '2022-Honda-Civic.jpg', 9),
(64, 'library_6.png', 10),
(65, 'HondaCRVjpg-1631980227.jpg', 10),
(66, 'MKTRE18071-scaled.jpg', 10),
(67, 'images.jpg', 11),
(68, 'kia-cerato-2019-02.jpg', 11),
(69, 'danhgiaxe.com-9-193222-004615.jpg', 11),
(70, 'cerato6.jpg', 11),
(71, 'new-morning-2022.jpg', 12),
(72, 'kia-morning-ex-at-6-1296032j26227.webp', 12),
(73, 'kia-morning-at-premium-2022-2023-muaxegiatot-vn-9.jpg', 12),
(74, 'Soluto-Deluxe-1.jpg', 13),
(75, 'kia-soluto-co-gia-ban-rat-canh-tranh.jpg', 13),
(76, 'gia-xe-kia-soluto.jpg', 13),
(77, 'mazda-3-ban-dac-biet-ra-mat-voi-so-luong-co-han-ot-5b74.jpg', 15),
(78, '155410138_3830175110401509_3289955403501832579_n_czzq.jpg', 15),
(79, 'new-mazda-3-can-tho-auto-avatar.jpg', 15),
(80, 'thong-so-ky-thuat-mazda-6-2020-oto-com-vn-3-6e39.jpg', 16),
(81, 'mazda-3-ban-dac-biet-ra-mat-voi-so-luong-co-han-ot-5b74.jpg', 16),
(82, '155410138_3830175110401509_3289955403501832579_n_czzq.jpg', 16),
(83, 'mazda-cx5-2.jpg', 17),
(84, '640-noi-that-xe-Mazda-cx-5.jpg', 17),
(85, 'TopCX53jpg-1631963523.jpg', 17),
(86, 'Hyundai-accent-8.jpg', 18),
(87, 'gia-xe-hyundai-accent-oto-com-vn-9-4546.jpg', 18),
(88, 'gia-xe-hyundai-accent.jpg', 18),
(89, '081506_yeni-hyundai-kona-electric-3.jpg', 19),
(90, '2021-hyundai-kona-electric-14_okmq.jpg', 19),
(91, 'Hyundai-Kona-4791-1623645848-4-4719-7732-1656473331.jpg', 19),
(92, 'Hyundai-i10-5.jpg', 20),
(93, 'download.jpg', 20),
(94, 'Copy-of-Hyundai-i10-hatchback-9865-5381-1668669431.jpg', 20),
(95, 'mercedes-c200-1541249034-18-width640height480.jpg', 21),
(96, 'Mercedes C 200 (12).JPG', 21),
(97, 'vo-lang-mercedes-c200-2022-moi-don-gian-gay-gon.jpg', 21),
(185, 'noi-that-xe-honda-brio-rs-2-mau-2021-xetot-com-blog.jpg', 7),
(186, 'honda-brio-2018-nhap-khau-06.jpg', 7),
(187, 'Honda-Brio-2022-2.jpg', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(8, 'honda'),
(10, 'kia'),
(11, 'subaru'),
(12, 'mazda'),
(13, 'hyundai'),
(14, 'merceder'),
(15, 'ford'),
(17, 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datlichxem`
--

CREATE TABLE `datlichxem` (
  `iddl` int(11) NOT NULL,
  `ngaydatlich` datetime NOT NULL,
  `idtk` int(11) NOT NULL,
  `idxe` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `datlichxem`
--

INSERT INTO `datlichxem` (`iddl`, `ngaydatlich`, `idtk`, `idxe`, `trangthai`) VALUES
(69, '2022-12-03 17:59:00', 20, 10, 1),
(70, '2022-12-02 18:19:00', 20, 8, 2),
(71, '2022-12-02 18:20:00', 20, 10, 0),
(72, '2022-12-03 22:29:00', 22, 9, 0),
(73, '2022-12-10 22:29:00', 22, 11, 0),
(74, '2022-12-04 12:32:00', 26, 17, 0),
(75, '2022-12-04 12:32:00', 26, 35, 0),
(76, '2022-12-07 12:46:00', 26, 11, 1),
(77, '2022-12-08 15:39:00', 22, 14, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `idquyen` int(11) NOT NULL,
  `tenquyen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`idquyen`, `tenquyen`) VALUES
(1, 'admin'),
(2, 'khachhang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtk` int(11) NOT NULL,
  `gmail` varchar(225) NOT NULL,
  `taikhoan` varchar(225) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `idquyen` int(11) NOT NULL,
  `sdt` varchar(225) NOT NULL,
  `trangthai` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idtk`, `gmail`, `taikhoan`, `matkhau`, `hoten`, `idquyen`, `sdt`, `trangthai`) VALUES
(1, 'manh@gmail.com', 'admin', '12345678', 'đức mạnh', 1, '0394775832', 1),
(20, 'admin@fgfhfg', 'manh', '12345678', 'manh', 2, '3333333333', 1),
(22, 'manh', 'hai', '12345678', 'văn hải', 2, '0397554543', 0),
(23, 'manh@gmail.com', 'manhnguyen', '12345678', 'văn mạnh', 2, '0367885678', 0),
(24, 'manh', 'hai1', '12345678', 'văn hải', 2, '3333333333', 0),
(25, 'manh@gmail.com', '12345678', '12345678', 'admin2', 1, '0963126589', 1),
(26, 'nam@gmail.com', 'nam', '12345678', 'nam nguyen', 2, '0963126589', 1),
(27, 'nam@gmail.com', 'd', '12345678', 'd', 2, '3333333333', 1),
(28, 'nam@gmail.com', 'c', '12345678', 'c', 2, 'Xin Nhập Lại SĐT', 1),
(29, 'nam@gmail.com', 'm', '12345678', 'm', 2, '03333333333', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL,
  `noidung` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `img`, `noidung`) VALUES
(29, 'Cập nhật giá niêm yết và lăn bánh xe Toyota Veloz Cross đầy đủ các phiên bản.', 'toyota.jpg', 'Ngày 22/3/2022, Toyota Veloz Cross chính thức ra mắt khách hàng Việt với thiết kế hiện đại, nội thất rộng rãi và nhiều trang bị tiện nghi. Mẫu xe này sẽ bước vào cuộc đua thị phần MPV, cạnh tranh với Mitsubishi Xpander, Toyota Innova, Suzuki XL7, Suzuki Ertiga,...'),
(30, 'Toyota Fortuner 2022 thêm trang bị, giá tăng cao nhất 42 triệu đồng tại Việt Nam', 'Fortuner3jpg-1631953185.jpg', 'Ngày 1/11, Toyota Việt Nam công bố thông tin phiên bản Fortuner 2.7AT 4x2 và Fortuner 2.7AT 4x4 được nâng cấp một số tính năng an toàn, bao gồm: camera 360 độ, cảnh báo điểm mù và cảnh báo phương tiện cắt ngang phía sau. Đây là hai phiên bản máy xăng, nhập khẩu Indonesia.\r\nNgoài những nâng cấp kể trên, Toyota Fortuner 2.7AT 4x2 và Fortuner 2.7AT 4x4 giữ nguyên so với phiên bản cũ. Một số trang bị nổi bật trên 2 phiên bản này có thể kể đến màn hình giải trí 8 inch, kết nối điện thoại thông minh, bản đồ tích hợp định vị, cốp mở điện và ổ cắm điện 220V ở hàng ghế sau.'),
(31, 'Kia Seltos 2023 chuẩn bị \"xuất ngoại\" với trang bị an toàn ngập tràn', 'kia-seltos-2023-1-ed65.jpg', 'Kia Seltos phiên bản nâng cấp giữa vòng đời đã lần đầu tiên ra mắt thị trường nội địa Hàn Quốc vào hồi tháng 7 năm nay. Sau 4 tháng, mẫu SUV hạng B này chuẩn bị ra mắt các thị trường ngoài Hàn Quốc. Một trong những thị trường quốc tế đầu tiên đón nhận Kia Seltos 2023 chính là Úc.\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xe`
--

CREATE TABLE `xe` (
  `idxe` int(11) NOT NULL,
  `tenxe` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL,
  `thongtinxe` varchar(500) NOT NULL,
  `gia` double NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `xe`
--

INSERT INTO `xe` (`idxe`, `tenxe`, `img`, `thongtinxe`, `gia`, `iddm`) VALUES
(7, 'xe honda brio', 'brio1_honda.jpg', 'xe mới 90%', 500000000, 8),
(8, 'xe honda city 2020', 'city-honda.jpg', 'xe mới 99%', 700000000, 8),
(9, 'xe honda civic 2020', 'honda_civic.jpg', 'mới 99%', 800000000, 8),
(10, 'xe honda crv 2021', 'honda_crv.jpg', 'mới 99%', 900000000, 8),
(11, 'xe kia cerato', 'kiacerato.jpg', 'xe mới', 800000000, 10),
(12, 'xe kia Morning', 'morning-2021.jpg', 'mới 99%', 400000000, 10),
(13, 'soluto', 'kia.jpg', 'đẹp', 700000000, 10),
(14, 'xe subaru', 'subaru-9435-1589735657.jpg', 'mới', 800000000, 11),
(15, 'xe mazda 3', 'mazda_3.jpg', 'xe mới 99%', 800000000, 12),
(16, 'xe mazda 6', 'mazda6-ngoai-that.jpg', 'mới', 1000000000, 12),
(17, 'xe mazda cx5', 'cx5.jpg', 'mới', 1000000000, 12),
(18, 'xe hyundai accent', 'hyundaiaccent.png', 'mới 99%', 600000000, 13),
(19, 'xe hyundai kona', 'hyundai-kona.jpg', 'đẹp 99%', 700000000, 13),
(20, 'xe hyundai i10', 'oto-hyundai-1.jpg', 'mới 98%', 500000000, 13),
(21, 'xe merceder c200', 'gia-xe-mercedes-c200.jpg', 'đẹp 100%', 1300000000, 14),
(35, 'accord', 'Honda-Accord.jpg', 'mới', 800000000, 8),
(36, 'Tucson 2022', 'tucson-65b1.jpg', 'mới', 1000000000, 13),
(39, 'abcd', '', '', 3, 8);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idbl`),
  ADD KEY `taikhoan` (`idtk`),
  ADD KEY `idxe` (`idxe`);

--
-- Chỉ mục cho bảng `chitiet_imgxe`
--
ALTER TABLE `chitiet_imgxe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`idxe`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `datlichxem`
--
ALTER TABLE `datlichxem`
  ADD PRIMARY KEY (`iddl`),
  ADD KEY `tk` (`idtk`),
  ADD KEY `xe` (`idxe`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`idquyen`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtk`),
  ADD KEY `quyen` (`idquyen`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`idxe`),
  ADD KEY `danhmuc` (`iddm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `chitiet_imgxe`
--
ALTER TABLE `chitiet_imgxe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `datlichxem`
--
ALTER TABLE `datlichxem`
  MODIFY `iddl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `idquyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `xe`
--
ALTER TABLE `xe`
  MODIFY `idxe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `idxe` FOREIGN KEY (`idxe`) REFERENCES `xe` (`idxe`),
  ADD CONSTRAINT `taikhoan` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`idtk`);

--
-- Các ràng buộc cho bảng `chitiet_imgxe`
--
ALTER TABLE `chitiet_imgxe`
  ADD CONSTRAINT `id` FOREIGN KEY (`idxe`) REFERENCES `xe` (`idxe`);

--
-- Các ràng buộc cho bảng `datlichxem`
--
ALTER TABLE `datlichxem`
  ADD CONSTRAINT `tk` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`idtk`),
  ADD CONSTRAINT `xe` FOREIGN KEY (`idxe`) REFERENCES `xe` (`idxe`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `quyen` FOREIGN KEY (`idquyen`) REFERENCES `quyen` (`idquyen`);

--
-- Các ràng buộc cho bảng `xe`
--
ALTER TABLE `xe`
  ADD CONSTRAINT `danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
