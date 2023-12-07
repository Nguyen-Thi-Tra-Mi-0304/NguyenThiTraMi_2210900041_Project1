-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2023 lúc 04:13 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nguyenthitrami-2210900041-project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `DANHMUC_ID` int(11) NOT NULL,
  `DANHMUC_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`DANHMUC_ID`, `DANHMUC_NAME`) VALUES
(1, 'Sách trong nước'),
(6, 'Sách nước ngoài'),
(7, 'Đồ chơi'),
(8, 'Popmart'),
(9, 'Quà lưu niệm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `LSP_ID` int(11) NOT NULL,
  `DANHMUC_ID` int(11) NOT NULL,
  `LSP_NAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`LSP_ID`, `DANHMUC_ID`, `LSP_NAME`) VALUES
(1, 1, 'Văn học'),
(3, 9, 'Hoa sáp'),
(4, 0, 'Văn học'),
(5, 6, 'Văn học'),
(6, 7, 'búp bê'),
(7, 6, 'Tiểu thuyết ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `SP_ID` int(11) NOT NULL,
  `SP_NAME` varchar(255) NOT NULL,
  `DANHMUC_ID` int(11) NOT NULL,
  `LSP_ID` int(11) NOT NULL,
  `SP_PRICE` varchar(255) NOT NULL,
  `SP_PRICE_NEW` varchar(255) NOT NULL,
  `SP_DESC` varchar(5000) NOT NULL,
  `SP_IMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`SP_ID`, `SP_NAME`, `DANHMUC_ID`, `LSP_ID`, `SP_PRICE`, `SP_PRICE_NEW`, `SP_DESC`, `SP_IMG`) VALUES
(8, 'Cây cam nhỏ của tôi ', 6, 5, '223', '2312', 'ưksahdskolaq', 'a1.jpg'),
(9, 'Cây cam nhỏ của tôi ', 1, 7, '108.000', '86.400', '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng sống... một tác phẩm kinh điển của Brazil.” - Booklist\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.” - The National\r\nHãy làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu bậc nhất, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng yêu” kia đâu nhé. Bởi vì, ở cái xóm ngoại ô nghèo ấy, nỗi khắc khổ bủa vây đã che mờ mắt người ta trước trái tim thiện lương cùng trí tưởng tượng tuyệt vời của cậu bé con năm tuổi.\r\nCó hề gì đâu bao nhiêu là hắt hủi, đánh mắng, vì Zezé đã có một người bạn đặc biệt để trút nỗi lòng: cây cam ngọt nơi vườn sau. Và cả một người bạn nữa, bằng xương bằng thịt, một ngày kia xuất hiện, cho cậu bé nhạy cảm khôn sớm biết thế nào là trìu mến, thế nào là nỗi đau, và mãi mãi thay đổi cuộc đời cậu.\r\nMở đầu bằng những thanh âm trong sáng và kết thúc lắng lại trong những nốt trầm hoài niệm, Cây cam ngọt của tôi khiến ta nhận ra vẻ đẹp thực sự của cuộc sống đến từ những điều giản dị như bông hoa trắng của cái cây sau nhà, và rằng cuộc đời thật khốn khổ nếu thiếu đi lòng yêu thương và niềm trắc ẩn. Cuốn sách kinh điển này bởi thế không ngừng khiến trái tim người đọc khắp thế giới thổn thức, kể từ khi ra mắt lần đầu năm 1968 tại Brazil.', 'p1.jpg'),
(10, 'Cây cam nhỏ của tôi ', 8, 5, '24', '2411', 'zdfqcsdf', '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(11, 'A', 9, 3, '1743615', '24342', 'rcdAC', '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(12, 'A', 9, 3, '1743615', '24342', 'rcdAC', '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(13, 'Cây cam nhỏ của tôi ', 6, 3, '1324', '5322111', 'VVFWFAVCS', '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(14, 'Cây cam nhỏ của tôi ', 6, 3, '1324', '5322111', 'VVFWFAVCS', '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(15, '01', 7, 6, '123000', '88000', 'q', 'Anh-nen-One-Piece-chat-luong-cao.jpg'),
(16, '01', 7, 6, '123000', '88000', 'q', 'Anh-nen-One-Piece-chat-luong-cao.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham_img_desc`
--

CREATE TABLE `tbl_sanpham_img_desc` (
  `SP_ID` int(11) NOT NULL,
  `SP_IMG_DESC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham_img_desc`
--

INSERT INTO `tbl_sanpham_img_desc` (`SP_ID`, `SP_IMG_DESC`) VALUES
(10, '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(11, '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(12, '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(12, '32dc4c67c5bd363c26d999290a53b0b1.jpg'),
(12, '91WpFxfUK+L._SL1500_.jpg'),
(12, '281360813_1157833854783894_5570229917023504844_n.jpg'),
(13, '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(13, '32dc4c67c5bd363c26d999290a53b0b1.jpg'),
(13, '91WpFxfUK+L._SL1500_.jpg'),
(14, '0fe9cf52bd66559641f7a6ebadd0f4f4.jpg'),
(14, '32dc4c67c5bd363c26d999290a53b0b1.jpg'),
(14, '91WpFxfUK+L._SL1500_.jpg'),
(15, 'hinh-nen-chihiro-lac-vao-vung-dat-linh-hon-6.jpg'),
(15, 'hinh-nen-may-tinh.jpg'),
(15, 'Hinh-One-Piece-chat-luong-cao.jpg'),
(15, 'Hinh-One-Piece-chibi-cuc-dep-va-dang-yeu.jpg'),
(16, 'hinh-nen-chihiro-lac-vao-vung-dat-linh-hon-6.jpg'),
(16, 'hinh-nen-may-tinh.jpg'),
(16, 'Hinh-One-Piece-chat-luong-cao.jpg'),
(16, 'Hinh-One-Piece-chibi-cuc-dep-va-dang-yeu.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`DANHMUC_ID`);

--
-- Chỉ mục cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`LSP_ID`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`SP_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `DANHMUC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `LSP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `SP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
