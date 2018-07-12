-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 12, 2018 lúc 10:07 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybds`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat`
--

CREATE TABLE `dat` (
  `id` int(11) NOT NULL,
  `KyHieuLoDat` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Rong` int(11) NOT NULL,
  `Dai` int(11) NOT NULL,
  `NoHau` int(11) NOT NULL,
  `DienTich` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `Gia` double NOT NULL,
  `SoHuu` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `Huong` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Quan` int(11) NOT NULL,
  `HinhAnh` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GhiChu` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `LuotXem` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dat`
--

INSERT INTO `dat` (`id`, `KyHieuLoDat`, `Rong`, `Dai`, `NoHau`, `DienTich`, `DonGia`, `Gia`, `SoHuu`, `TrangThai`, `Huong`, `DiaChi`, `Quan`, `HinhAnh`, `GhiChu`, `LuotXem`, `created_at`, `updated_at`) VALUES
(1, 'LK05', 5, 18, 0, 90, 6230250, 560722500, 3, 2, 'Nam', '256 Trần Văn Đang, P11', 3, 'LK05_1.jpg;LK05_2.jpg;LK05_3.jpg;', 'Nhà, công trình xây dựng trên đất phải phù hợp quy hoạch cảnh quan đô thị được cơ quan nhà nước có thẩm quyền phê duyệt.', 61, '2018-05-24 07:42:00', '2018-07-02 06:48:24'),
(2, 'LK06', 5, 8, 0, 40, 6230250, 249210000, 3, 1, 'Nam', '256 Trần Văn Đang, P.11', 3, 'LK06_1.jpg;LK06_2.jpg;', 'Nhà, công trình xây dựng trên đất phải phù hợp quy hoạch cảnh quan đô thị được cơ quan nhà nước có thẩm quyền phê duyệt.', 15, '2018-05-27 09:21:48', '2018-07-02 06:48:48'),
(3, 'LK07', 5, 18, 0, 90, 20000000, 1800000000, 1, 2, 'Bắc', '169/24/92B Tô Hiến Thành, P13', 10, 'LK05_1.jpg;LK05_2.jpg;LK05_3.jpg;', 'Lô đất năm sau Trung tâm thương mại, khu dân cư quanh đông đúc, gần trường đại học, mặt tiền đường rộng 8m, cơ sở hạ tầng hoàn thiện. Rất thuận tiện việc mua bán , kinh doanh. \r\nDiện tích: 60m2( 5x12) \r\nThương lượng chính chủ, không tiếp cò', 22, '0000-00-00 00:00:00', '2018-06-28 09:49:38'),
(4, 'LK08', 4, 20, 0, 80, 15000000, 1200000000, 1, 2, 'Đông', '169/24/92B Tô Hiến Thành, P13', 10, 'LK06_1.jpg;LK06_2.jpg;', 'Lô đất năm sau Trung tâm thương mại, khu dân cư quanh đông đúc, gần trường đại học, mặt tiền đường rộng 8m, cơ sở hạ tầng hoàn thiện. Rất thuận tiện việc mua bán , kinh doanh. \r\nDiện tích: 60m2( 5x12) \r\nThương lượng chính chủ, không tiếp cò', 14, '0000-00-00 00:00:00', '2018-06-18 06:58:03'),
(5, 'LK09', 5, 18, 0, 90, 22000000, 1980000000, 1, 0, 'Bắc', '169/24/92B Tô Hiến Thành, P13', 10, 'LK05_1.jpg;LK05_2.jpg;LK05_3.jpg;', 'Lô đất năm sau Trung tâm thương mại, khu dân cư quanh đông đúc, gần trường đại học, mặt tiền đường rộng 8m, cơ sở hạ tầng hoàn thiện. Rất thuận tiện việc mua bán , kinh doanh. \r\nDiện tích: 60m2( 5x12) \r\nThương lượng chính chủ, không tiếp cò', 15, '0000-00-00 00:00:00', '2018-06-05 11:00:03'),
(6, 'LK10', 4, 20, 0, 80, 15000000, 1200000000, 1, 0, 'Đông', '169/24/92B Tô Hiến Thành, P13', 10, 'LK06_1.jpg;LK06_2.jpg;', 'Lô đất năm sau Trung tâm thương mại, khu dân cư quanh đông đúc, gần trường đại học, mặt tiền đường rộng 8m, cơ sở hạ tầng hoàn thiện. Rất thuận tiện việc mua bán , kinh doanh. \r\nDiện tích: 60m2( 5x12) \r\nThương lượng chính chủ, không tiếp cò', 45, '0000-00-00 00:00:00', '2018-06-30 09:15:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

CREATE TABLE `hopdong` (
  `id` int(11) NOT NULL,
  `MaHopDong` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ID_Dat` int(11) NOT NULL,
  `ID_KhachHang_Mua` int(11) NOT NULL,
  `PhiMoiGioi` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hopdong`
--

INSERT INTO `hopdong` (`id`, `MaHopDong`, `ID_Dat`, `ID_KhachHang_Mua`, `PhiMoiGioi`, `created_at`, `updated_at`) VALUES
(1, 'HD01', 1, 1, 0, '2015-05-27 11:00:48', '2018-06-01 07:53:15'),
(3, 'HD02', 2, 1, 0, '2018-05-27 11:00:48', '2018-05-27 11:03:12'),
(6, 'HD04', 4, 3, 10000000, '2018-06-01 06:38:51', '2018-06-01 06:38:51'),
(7, 'HD07', 1, 1, 10000000, '2018-06-01 10:28:48', '2018-06-01 10:28:48'),
(8, 'HD08', 3, 3, 15000000, '2018-06-01 11:57:49', '2018-06-01 11:57:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `MaKhachHang` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `XungHo` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HoVaTenDem` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DTDD` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DTCD` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `CMND` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `MaKhachHang`, `XungHo`, `HoVaTenDem`, `Ten`, `DTDD`, `DTCD`, `CMND`, `DiaChi`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'KH001', 'Ông', 'Nguyễn Công', 'Minh', '01869885811', '02583812656', '225582114', '163/24/92B Tô Hiến Thành, P13, Q10', 'minh.1406@gmail.com', '2018-05-21 04:50:13', '2018-05-21 08:28:16'),
(3, 'KH002', 'Ông', 'Nguyễn Quang', 'Huy', '0905456781', '02583812654', '22552119', '163/24/92B Tô Hiến Thành, P13, Q10', 'darkkiller1406@yahoo.com', '2018-05-21 09:04:31', '2018-05-21 09:04:31'),
(4, 'KH004', 'Bà', 'Trà', 'Giang', '0905456789', '02583812657', '22552118', '163/24/92B Tô Hiến Thành, P13, Q10', 'darkkiller1407@yahoo.com', '2018-05-21 09:47:00', '2018-05-21 09:47:00'),
(5, 'KH005', 'ông', 'Nguyễn Công', 'Minh', '0905456733', '02583812122', '225522118', '163/24/92B Tô Hiến Thành, P13, Q10', 'darkkiller1423@yahoo.com', '2018-06-28 06:31:04', '2018-06-28 06:31:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsugiaodich`
--

CREATE TABLE `lichsugiaodich` (
  `id` int(11) NOT NULL,
  `TienGiaoDich` double NOT NULL,
  `GiaoDich` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `LoaiGiaoDich` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `NguoiThucHien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lichsugiaodich`
--

INSERT INTO `lichsugiaodich` (`id`, `TienGiaoDich`, `GiaoDich`, `LoaiGiaoDich`, `created_at`, `updated_at`, `NguoiThucHien`) VALUES
(1, 80000, 'Thực hiện gia hạn ngày đăng', 1, '2018-07-08 13:51:51', '2018-07-12 05:05:52', 2),
(2, 20000, 'Thực hiện thay đổi loại tin', 1, '2018-07-08 15:20:22', '2018-07-12 05:05:52', 2),
(3, 250000, 'Thực hiện gia hạn ngày đăng', 1, '2018-07-08 15:26:19', '2018-07-12 05:05:52', 2),
(4, 120000, 'Thực hiện gia hạn ngày đăng', 1, '2018-07-08 15:43:27', '2018-07-12 05:05:52', 2),
(5, 30000, 'Thực hiện gia hạn ngày đăng', 1, '2018-07-09 12:00:52', '2018-07-12 05:05:52', 2),
(6, 20000, 'Nạp thêm tiền', 2, '2018-07-12 12:06:56', '2018-07-12 05:06:56', 2),
(7, 50000, 'Nạp thêm tiền', 2, '2018-07-12 12:07:05', '2018-07-12 05:07:05', 2),
(8, 100000, 'Nạp thêm tiền', 2, '2018-07-12 12:07:14', '2018-07-12 05:07:14', 2),
(9, 500000, 'Nạp thêm tiền', 2, '2018-07-12 12:07:23', '2018-07-12 05:07:23', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaichothue`
--

CREATE TABLE `loaichothue` (
  `id` int(11) NOT NULL,
  `LoaiChoThue` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaichothue`
--

INSERT INTO `loaichothue` (`id`, `LoaiChoThue`) VALUES
(1, 'Phòng trọ, nhà trọ'),
(2, 'Nhà cho thuê nguyên căn'),
(3, 'Cho thuê căn hộ'),
(4, 'Tìm bạn ở ghép'),
(5, 'Cho thuê mặt bằng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `LoaiTin` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Gia` double NOT NULL,
  `ThongTin` varchar(2000) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`id`, `LoaiTin`, `Gia`, `ThongTin`) VALUES
(1, 'VIP 1', 50000, 'Là loại tin được đăng tiêu đề bằng chữ IN HOA MÀU ĐỎ, khung màu đỏ, nằm ở trên các tin vip 2'),
(2, 'VIP 2', 40000, 'Là loại tin đăng bằng chữ IN HOA MÀU CAM, khung màu cam, nằm bên dưới tin VIP 1 và ở trên các tin VIP 3'),
(3, 'VIP 3', 30000, 'Là loại tin đăng bằng chữ thường màu cam, khung màu cam và luôn nằm dưới tin Vip 2 nhưng luôn luôn hiển thị trên tin thường.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongthue`
--

CREATE TABLE `phongthue` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Phuong` int(11) NOT NULL,
  `DiaChi` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Map` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DienTich` int(11) NOT NULL,
  `Gia` double NOT NULL,
  `MoTa` varchar(2000) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `HinhAnh` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `LoaiTin` int(11) NOT NULL,
  `LoaiChoThue` int(11) NOT NULL,
  `NguoiDang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TrangThai` int(11) NOT NULL,
  `TienCu` double NOT NULL,
  `TongTien` double NOT NULL,
  `NgayBatDau` datetime NOT NULL,
  `NgayKetThuc` datetime NOT NULL,
  `TenLienHe` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DiaChiLienLac` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DienThoaiLienLac` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phongthue`
--

INSERT INTO `phongthue` (`id`, `TieuDe`, `Phuong`, `DiaChi`, `Map`, `DienTich`, `Gia`, `MoTa`, `HinhAnh`, `LoaiTin`, `LoaiChoThue`, `NguoiDang`, `created_at`, `updated_at`, `TrangThai`, `TienCu`, `TongTien`, `NgayBatDau`, `NgayKetThuc`, `TenLienHe`, `DiaChiLienLac`, `DienThoaiLienLac`, `Email`) VALUES
(1, 'Cho người nước ngoài thuê phòng đầy đủ trang bị và tiện ích, trung tâm quận 1', 11, '19 Nguyễn Thị Nghĩa', '10.77048963737413;106.69396025396736', 20, 5, 'Room for rent , full equipments and comforts . In the centre of distric 1 . Place is security and quiet , to much foreigner rent the room .\r\nThe area 18 , 25 m2 . Payment more electric fee only ( 3000 VNĐ/ Kw) . Wifi , water free . Add more two drinking water cans free . During of rental at least 3 months .', 'IMG_1_1.jpg;IMG_1_2.jpg;IMG_1_3.jpg;IMG_1_4.jpg;', 1, 1, 2, '2018-06-28 06:16:00', '2018-07-12 07:39:39', 1, 0, 250000, '2018-07-09 00:00:00', '2018-07-20 00:00:00', 'Minh', '163 Tô Hiến Thành,Phường 13, Quận 10, Hồ Chí Minh', '018698858112', 'darkkiller1406@yahoo.com'),
(3, 'Cho thuê phòng trọ mới, giờ giấc tự do.134 Đinh Tiên Hoàng, Q.1. Liên hệ a.Tâm 0934898020', 1, '134 Đường Đinh Tiên Hoàng', '10.791498;106.696803', 18, 3, 'Nhà còn 10 phòng cho thuê\r\n* Diện tích 18m2 - 24m2.\r\n* Giá: 3,2tr - 4,2tr/tháng.\r\n* Phòng có máy lạnh,máy nước nóng, ban công, cửa sổ, bếp, wifi, cáp.\r\n* Không chung chủ, giờ giấc tự do thoải mái.\r\n* Chổ đậu xe free và an toàn, lối đi riêng, chỗ phơi đồ.\r\n* Thuận tiện đi lại quận 1,2,3,4 Tân Bình,Gò Vấp,Bình Thạnh...\r\n* Thích hợp cho nhân viên văn phòng, dân trí thức, sinh viên it người ở.\r\n- Điện: 3,5 nghìn/kw.\r\n- Nước: 90 nghìn/người.', 'IMG_2_4.jpeg;IMG_2_3.jpeg;IMG_2_2.jpeg;IMG_2_1.jpeg;', 3, 1, 2, '2018-07-01 09:01:10', '2018-07-12 08:06:06', 2, 220000, 250000, '2018-07-01 00:00:00', '2018-07-10 00:00:00', 'A.Tâm', '134 Đinh Tiên Hoàng-Phường Đa Kao, Q.1', '0934898020', 'minh.1406@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuong`
--

CREATE TABLE `phuong` (
  `id` int(11) NOT NULL,
  `TenPhuong` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ThuocQuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phuong`
--

INSERT INTO `phuong` (`id`, `TenPhuong`, `ThuocQuan`) VALUES
(1, 'Phường 1', 1),
(2, 'Phường 2', 1),
(3, 'Phường 3', 1),
(4, 'Phường 4', 1),
(5, 'Phường 1', 2),
(6, 'Phường 2', 2),
(7, 'Phường 3', 2),
(8, 'Phường 4', 2),
(9, 'Phường 5', 2),
(10, 'Phường 6', 2),
(11, 'Phường Đa Kao', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan`
--

CREATE TABLE `quan` (
  `id` int(11) NOT NULL,
  `TenQuan` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ThuocThanhPho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quan`
--

INSERT INTO `quan` (`id`, `TenQuan`, `ThuocThanhPho`) VALUES
(1, 'Quận 1', 1),
(2, 'Quận 2', 1),
(3, 'Quận 3', 1),
(4, 'Quận 4', 1),
(5, 'Quận 5', 1),
(6, 'Quận 6', 1),
(7, 'Quận 7', 1),
(8, 'Quận 8', 1),
(9, 'Quận 9', 1),
(10, 'Quận 10', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhpho`
--

CREATE TABLE `thanhpho` (
  `id` int(11) NOT NULL,
  `TenThanhPho` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhpho`
--

INSERT INTO `thanhpho` (`id`, `TenThanhPho`) VALUES
(1, 'Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Quyen` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `Quyen`, `Ten`, `Tien`) VALUES
(1, 'admin', 'minh.1406.nt@gmail.com', '$2y$10$licDAaU1z3WI.akCBnytmeo59Uw4wj6puHqdW9UFM7tp5bAIPQzm6', 'OHcW2zvULUKh21SZRxBPSiZyfioj341zTcQlFQ73GxbfeFfmwk518WQ7eVn3', '2018-05-21 09:03:26', '2018-07-12 05:02:57', 1, 'Admin', 0),
(2, 'congminh', 'darkkiller1406@yahoo.com', '$2y$10$IuHVECWVhbUpFbMGYMm/UOoLKEVWphneTMvmB6sDGhJj/Q41XIoPS', 'Rh5Oie5hJ4qzjYsln82kVIkM0PXCT0xHiioiNfOmFTsd2e5DamfAayWdVdyF', '2018-05-21 09:20:52', '2018-07-12 05:07:23', 2, 'Công Minh', 670000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeucau`
--

CREATE TABLE `yeucau` (
  `id` int(11) NOT NULL,
  `MaYeuCau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenKhach` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DienThoai` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `LoaiYeuCau` int(11) NOT NULL,
  `NoiDung` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `id_dat` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `yeucau`
--

INSERT INTO `yeucau` (`id`, `MaYeuCau`, `TenKhach`, `Email`, `DienThoai`, `LoaiYeuCau`, `NoiDung`, `id_dat`, `created_at`, `updated_at`) VALUES
(3, 'YC001', 'Nguyễn Công Minh', 'darkkiller1406@yahoo.com', '01869885811', 1, 'abc', 4, '2018-06-01 06:25:25', '2018-06-01 06:25:25'),
(5, 'YC004', 'Nguyễn Công Minh', 'darkkiller1406@yahoo.com', '01869885811', 2, 'liên lạc ngay', NULL, '2018-06-01 09:27:48', '2018-06-01 09:27:48'),
(9, 'YC006', 'Nguyễn Công Minh', 'darkkiller1406@yahoo.com', '01869885811', 1, 'cần mua', 1, '2018-06-01 10:28:12', '2018-06-01 10:28:12'),
(10, 'YC0010', 'Nguyễn Công Minh', 'kisivodanh1406@gmail.com', '01869885811', 1, NULL, 2, '2018-06-01 10:29:31', '2018-06-01 10:29:31'),
(11, 'YC0011', 'Nguyễn Công Minh', 'darkkiller1406@yahoo.com', '01869885811', 1, 'abc', 3, '2018-06-02 11:56:44', '2018-06-02 11:56:44');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dat`
--
ALTER TABLE `dat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SoHuu` (`SoHuu`),
  ADD KEY `Quan` (`Quan`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Dat` (`ID_Dat`),
  ADD KEY `ID_KhachHang` (`ID_KhachHang_Mua`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichsugiaodich`
--
ALTER TABLE `lichsugiaodich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NguoiThucHien` (`NguoiThucHien`);

--
-- Chỉ mục cho bảng `loaichothue`
--
ALTER TABLE `loaichothue`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phongthue`
--
ALTER TABLE `phongthue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LienHe` (`LoaiTin`),
  ADD KEY `Phuong` (`Phuong`),
  ADD KEY `NguoiDang` (`NguoiDang`),
  ADD KEY `LoaiTin` (`LoaiTin`),
  ADD KEY `LoaiChoThue` (`LoaiChoThue`);

--
-- Chỉ mục cho bảng `phuong`
--
ALTER TABLE `phuong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ThuocQuan` (`ThuocQuan`);

--
-- Chỉ mục cho bảng `quan`
--
ALTER TABLE `quan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ThuocThanhPho` (`ThuocThanhPho`);

--
-- Chỉ mục cho bảng `thanhpho`
--
ALTER TABLE `thanhpho`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dat` (`id_dat`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dat`
--
ALTER TABLE `dat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `lichsugiaodich`
--
ALTER TABLE `lichsugiaodich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loaichothue`
--
ALTER TABLE `loaichothue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phongthue`
--
ALTER TABLE `phongthue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phuong`
--
ALTER TABLE `phuong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `quan`
--
ALTER TABLE `quan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `thanhpho`
--
ALTER TABLE `thanhpho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dat`
--
ALTER TABLE `dat`
  ADD CONSTRAINT `dat_ibfk_3` FOREIGN KEY (`Quan`) REFERENCES `quan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dat_ibfk_4` FOREIGN KEY (`SoHuu`) REFERENCES `khachhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_3` FOREIGN KEY (`ID_Dat`) REFERENCES `dat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hopdong_ibfk_4` FOREIGN KEY (`ID_KhachHang_Mua`) REFERENCES `khachhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lichsugiaodich`
--
ALTER TABLE `lichsugiaodich`
  ADD CONSTRAINT `lichsugiaodich_ibfk_1` FOREIGN KEY (`NguoiThucHien`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phongthue`
--
ALTER TABLE `phongthue`
  ADD CONSTRAINT `phongthue_ibfk_2` FOREIGN KEY (`LoaiTin`) REFERENCES `loaitin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phongthue_ibfk_3` FOREIGN KEY (`Phuong`) REFERENCES `phuong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phongthue_ibfk_4` FOREIGN KEY (`NguoiDang`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phongthue_ibfk_5` FOREIGN KEY (`LoaiChoThue`) REFERENCES `loaichothue` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phuong`
--
ALTER TABLE `phuong`
  ADD CONSTRAINT `phuong_ibfk_1` FOREIGN KEY (`ThuocQuan`) REFERENCES `quan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quan`
--
ALTER TABLE `quan`
  ADD CONSTRAINT `quan_ibfk_1` FOREIGN KEY (`ThuocThanhPho`) REFERENCES `thanhpho` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `yeucau`
--
ALTER TABLE `yeucau`
  ADD CONSTRAINT `yeucau_ibfk_1` FOREIGN KEY (`id_dat`) REFERENCES `dat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
