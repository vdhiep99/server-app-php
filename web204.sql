-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2021 lúc 02:07 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web204`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(10) NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ma_hh` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `ngay_bl` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `id`, `ngay_bl`) VALUES
(5, 'dđ', 16, 3, '06:57:01pm 21/10/2021'),
(6, 'dđ', 18, 3, '06:57:20pm 21/10/2021'),
(7, 'dđ', 18, 3, '06:57:55pm 21/10/2021'),
(8, 'dđ', 18, 3, '06:57:59pm 21/10/2021'),
(11, 'dđ', 18, 3, '07:00:49pm 21/10/2021'),
(12, 'ddđaaaafgege', 18, 3, '07:00:59pm 21/10/2021'),
(15, 'acdfw', 18, 3, '07:26:50pm 21/10/2021'),
(16, 'dđ', 18, 3, '07:27:15pm 21/10/2021'),
(17, 'ddđaaaafgege', 18, 3, '07:36:00pm 21/10/2021'),
(18, 'dđ', 18, 3, '07:36:55pm 21/10/2021'),
(19, 'acdfw', 18, 3, '07:37:03pm 21/10/2021'),
(20, 'abczyx', 18, 1, '11:37:46am 22/10/2021'),
(21, 'sản phẩm tốt', 18, 1, '05:52:39pm 22/10/2021'),
(23, 'ddđaaaafgege', 18, 1, '06:37:08pm 22/10/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(10) NOT NULL,
  `ten_hh` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `don_gia` int(10) NOT NULL,
  `giam_gia` int(10) DEFAULT 0,
  `hinh` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngay_nhap` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dac_biet` tinyint(1) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(11, 'Xiaomi 11T', 10500000, 0, 'bk-11t-white.png', '22/10/2021', 'Đánh giá Xiaomi Mi 11T – Smartphone cao cấp, hiệu năng vượt trội\r\nMột biến thể khác của siêu phẩm Xiaomi 11T vừa được Xiaomi ra mắt và người dùng sẽ trông chờ hơn vào sản phẩm này. Được biết đây là phiên bản giảm cấp về hiệu năng nhằm dễ tiếp cận hơn đến các phân khúc khách hàng thấp hơn, song về trải nghiệm bạn sẽ bất ngờ vì không có quá nhiều sự khác biệt.\r\nThiết kế quen thuộc, tái hiện một không gian sống hoàn hảo. Người dùng hẳn không còn quá lạ lẫm với bất kỳ thiết kế điện thoại nào của Xiaomi nữa, tuy lần này không dùng thiết kế kính nhưng việc phủ kim loại nguyên khối lên toàn bộ máy cũng giúp cho Xiaomi Mi 11T trở nên sang trọng và bền bỉ hơn rất nhiều. Điểm khác biệt đáng chú ý chỉ nằm ở việc sắp xếp cụm camera sao cho hợp lý và bắt mắt hơn......', 1, 31, 16),
(12, 'Samsung Galaxy Note 20 Ultra 5G', 20500000, 0, 'black_final_1.jpg', '22/10/2021', 'Điện thoại Samsung Note 20 Ultra 5G - Sang trọng, hiệu năng vượt trội\r\nBên cạnh biên bản Galaxy Note 20 thường, Samsung còn cho ra mắt Note 20 Ultra 5G cho khả năng kết nối dữ liệu cao cùng thiết kế nguyên khối sang trọng, bắt mắt. Đây sẽ là sự lựa chọn hoàn hảo dành cho bạn để sử dụng mà không bị lỗi thời sau thời gian dài ra mắt.\r\n\r\nNgoài ra, bạn có thể tham khảo Galaxy Z Fold 3 5G nếu bạn cần sự khác biệt và khẳng định đẳng cấp.\r\n\r\nThiết kế khung nhôm nguyên khối, mặt sau kính cường lực sang trọng\r\nLà một sản phẩm có kích thước màn hình lớn vì vậy Samsung đã trang bị cho Galaxy Note 20 Ultra 5G  với công nghệ kết nối dữ liệu mạnh mẽ cùng thiết kế nguyên khối. Giúp các linh kiện bên trong điện thoại được cố định chắc chắn đảm bảo mọi thứ bên trong luôn được an toàn. Không những vậy khung nhôm tạo trên những đường viền cực kỳ sang trọng và bắt mắt khi nhìn vào.\r\nMặt sau của SS Galaxy Note này được hãng trang bị mặt kính tạo nên vẻ sang trọng và cuốn hút khi nhìn vào chiếc điện thoại từ bên ngoài. Loại kính cho cả mặt trước và mặt sau đều là kính cường lực Gorilla Glass 6 không những sang trọng mà còn mang đến sự chắc chắn hạn chế rơi vỡ vực tốt......', 1, 51, 16),
(13, 'Apple MacBook Air M1 256GB 2020', 26990000, 0, 'macbook-air-gold-select-201810_4.jpg', '22/10/2021', 'Macbook Air M1 2020 - Sang trọng, tinh tế, hiệu năng khủng\r\nLà dòng sản phẩm có thiết kế mỏng nhẹ, sang trọng và tinh tế cùng với đó là giá thành phải chăng nên MacBook Air đã thu hút được đông đảo người dùng yêu thích và lựa chọn. Một trong những phiên bản mới nhất mà khách hàng không thể bỏ qua khi đến với CellphoneS đó là MacBook Air M1. Dưới đây là chi tiết về thiết kế, cấu hình của máy.\r\nThiết kế tinh tế, chất liệu nhôm bền bỉ.\r\nMacBook Air 2020 M1 mới vẫn luôn tuân thủ triết lý thiết kế với những đường nét đơn nhưng vô cùng sang trọng. Máy có độ mỏng nhẹ chỉ 1,29kg và các cạnh tràn viền khiến thiết bị trở nên đẹp hơn và cao cấp hơn.\r\nVỏ nhôm bên ngoài mang đến sự bền bỉ vượt trội theo thời gian. Các cổng vẫn được thiết kế tương tự như phiên bản trước đó được ra mắt hồi tháng 3 năm 2020.\r\nMàn hình Retina 13.3 inch tráng gương. MacBook Air M1 256GB 2020 được trang bị màn hình Retina IPS 13.3 inch mang đến nhiều màu sắc hơn lên đến 48% so với những thế hệ trước đó. Bên cạnh đó, màn hình tráng gương tràn viền khiến viền giúp mỏng hơn 50% so với trước đây.\r\n\r\nMàn hình Retina 13.3 inch tráng gương.\r\n\r\nVới độ phân giải 2560 x 1600 và tỉ lệ khung hình 16:10 với 227 ppi giúp hình ảnh trở nên rõ nét và sống động hơn bao giờ hết. Ngoài ra, công nghệ True Tone trên máy tự động điều chỉnh cân bằng trắng giúp phù hợp với nhiệt độ màu của ánh sáng xung quanh và mang đến không gian màu rộng hơn 25% so với sRGB.\r\nĐiểm nhấn của MacBook Air M1 256GB 2020 chính là con chip M1. CPU của chip M1 sẽ có 8 nhân, bao gồm 4 nhân hiệu suất cao và 4 nhân hiệu suất thấp mang đến sức mạnh vượt trội cho thiết bị rất. Sức mạnh trên M1 256GB hơn 98% so với các laptop Windows và hiệu năng vượt trội hơn so với các phiên bản Air sử dụng chip Intel.', 1, 0, 18),
(14, 'Đồng hồ thông minh Samsung Galaxy Watch 3', 5350000, 0, 'galaxy-watch3-41mm.jpg', '22/10/2021', 'Đồng hồ Samsung Galaxy Watch 3 41mm - Sang trọng và tinh tế\r\nMột trong những món phụ kiện được phái nữ ưa chuộng chính là đồng hồ Samsung Galaxy Watch 3 41mm - sản phẩm smartwatch sở hữu ngoại hình sang trọng lẫn trang bị đầy đủ tính năng theo dõi sức khỏe nhằm mang đến cuộc sống năng động cho các chị em.\r\n\r\nMàn hình 41mm, mặt kính Gorilla Glass Dx+ cao cấp\r\nSamsung Galaxy Watch 3 41mm được thiết kế theo phong cách thanh lịch và sang trọng, với màn hình phủ kính Gorilla Glass Dx+ cường lực cao cấp giúp gia tăng độ bền. Đặc biệt, với phiên bản màu Hồng quyến rũ, Galaxy Watch 3 41mm sẽ là chiếc đồng hồ thông minh hoàn hảo cho phái nữ.......', 1, 10, 17),
(15, 'Samsung Galaxy A72', 10000000, 0, 'samsung-galaxy-a72-30.jpg', '22/10/2021', 'Điện thoại Samsung Galaxy A72 - Thiết kế ấn tượng, hiệu năng mạnh mẽ\r\nVừa mới đây Samsung vừa cho ra mắt chiếc smartphone Samsung Galaxy A72 thuộc dòng A của hãng. Có thể nói đây là con át chủ bài của thương hiệu này trong năm 2020 bởi những nâng cấp vượt trội từ thiết kế cho đến camera lẫn hiệu năng. Nếu bạn đang tìm kiếm cho mình một chiếc điện thoại Samsung mới thì có thể đây là sự lựa chọn phù hợp dành cho bạn.....', 0, 130, 16),
(16, 'iPhone 12 I Chính hãng VN/A', 19190000, 0, 'iphone-12_4__3.jpg', '22/10/2021', 'Đánh giá iPhone 12 - \"Siêu phẩm\" khẳng định đẳng cấp\r\nTrong khi sức hút đến từ bộ ba iPhone 11 vẫn chưa nguội đi, hãng Apple vừa qua đã cho ra mắt \"siêu phẩm\" mới nhất 2020 mang tên iPhone 12. Với những nâng cấp đáng kể cho màn hình và hiệu năng, đây sẽ là smartphone thuộc phân khúc cao cấp đáng chú ý trong năm nay.\r\n\r\nSắp tới đây, Apple dự kiến sẽ ra mắt dòng điện thoại iPhone 13 series mới với nhiều nâng cấp về cấu hình, camera cũng như thiết kế.\r\n\r\nMàn hình Super Retina OLED rộng 6.1 inch\r\nApple đã quyết định giữ nguyên thiết kế notch \"tai thỏ\" quen thuộc cho màn hình iPhone 12, nhưng phần notch đã được tinh giản nhỏ gọn lại nhằm tạo thêm tỷ lệ hiển thị hình ảnh trên màn hình. Về kích thước, màn hình của máy độ phân giải 2532x 1170pixels và có kích thước 6.1 inch, nhỏ hơn so với iPhone 12 Pro Max (6.7 inch).\r\n\r\nĐặc biệt, Apple đã thay thế công nghệ LCD bằng công nghệ Super Retina OLED. Cùng với tính năng Dolby Vision và True-tone giúp điều chỉnh ánh sáng phù hợp theo môi trường xung quanh. Màn hình này với độ sáng tối đa lên đến 1200 nits nhờ đó iPhone 12 sẽ hiển thị hình ảnh sắc nét, mượt mà & có màu rực rỡ hơn các đời iPhone trước. Đặc biệt với độ sáng màn hình cao cùng độ tương phản lớn lên đến 2.000.000:1, người dùng có thể thoải mái sử dụng máy ở ngoài trời.....', 1, 20, 16),
(17, 'Samsung Galaxy A52s 5G', 9900000, 0, '04_2_4.webp', '22/10/2021', 'Đánh giá Samsung Galaxy A52s - 5G tốc độ cao, hiệu năng vượt trội\r\nSamsung A52s 5G là phiên bản nâng cấp của Galaxy A52. Máy không chỉ được thừa hưởng thiết kế tinh tế và ấn tượng của phiên bản đi trước mà chúng còn được nâng cấp khá nhiều về trang bị và tính năng. Chắc chắn đây sẽ là chiếc smartphone mang đến cho người dùng những trải nghiệm thú vị khó quên......', 1, 0, 16),
(18, 'Xiaomi Redmi Note 10', 5100000, 0, 'xiaomi-redmi-note-10_1.jpg', '22/10/2021', 'Điện thoại Xiaomi Redmi Note 10 – Hài hòa giữa công nghệ hiển thị và hiệu năng\r\nĐến hẹn lại lên, trong năm nay Xiaomi tiếp tục làm mới bộ sưu tập thiết bị tầm trung của mình với chiếc smartphone mới trong dòng Redmi Note, thiết bị mang tên Redmi Note 10. Những chiếc điện thoại Xiaomi Redmi Note đã quá hot, liệu chiếc smartphone mới này có đủ sức làm lu mờ đi những sản phẩm tiền nhiệm không. \r\n\r\nNgoài ra, bạn cũng có thể tham khảo thêm Xiaomi Redmi Note 11 với nhiều nâng cấp về camera, cấu hình lẫn thời lượng pin.\r\n\r\nMàn hình Amoled 6.43 inches, độ phân giải FullHD+\r\nĐiện thoại Redmi Note thế hệ 10 tiếp tục được sở hữu thiết kế kim loại nguyên khối với mặt lưng cong 3D đặc trưng của dòng sản phẩm này. Qua đó, đem lại một ngoại hình sang trọng và bắt mắt với các đường nét mềm mại, giúp bạn tự tin hơn khi cầm máy.\r\n\r\nMàn hình của Xiaomi Redmi Note 10 có kích thước 6.43 inch, độ phân giải Full HD+, mật độ điểm ảnh cao đến tận 409 ppi, đem đến khả năng hiển thị vô cùng sắc nét, chưa từng thấy trên những chiếc Redmi Note trước. Nhờ vào việc sử dụng tấm nền Amoled, cho độ sáng cao, màu sắc trung thực, thích hợp để chụp ảnh và hoạt động chỉnh sửa ảnh......', 1, 204, 16),
(19, 'iPhone 12 Pro Max I Chính hãng VN/A', 28990000, 0, 'iphone-12-pro-max_3__7.jpg', '22/10/2021', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng\r\nCứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là iPhone 12 Pro Max, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.....', 1, 1, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `ma_kh` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `kich_hoat` int(10) NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `vai_tro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
(1, 'datnt', '123456', 'Nguyễn Thành Đạt 2755', 1, '169531953_1332939607063476_4317763238066108292_n.jpg', 'nguyenthanhdat27042002@gmail.com', 1),
(2, 'dantttt', '123456', 'datthanh2666', 1, '197023053_2940352232873002_6036397425273043624_n.jpg', 'toilaai27042002@gmail.com', 0),
(3, 'thanhdat', '1234567', 'Nguyễn Thành Đạt', 1, '169230025_471933870894753_3736247155282462688_n.jpg', 'nguyenthanhdat27042002@gmail.com', 0),
(5, 'thanh', '12345678', 'đạt thành', 1, '194354261_1551322971925977_3516128495453521163_n.jpg', 'nguyenthanhdat27042002@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(16, 'Điện thoại'),
(17, 'Đồng hồ'),
(18, 'Laptop'),
(19, 'Phụ kiện'),
(20, 'Ba Lô'),
(21, 'Máy ảnh'),
(22, 'Loa'),
(23, 'Tai nghe'),
(25, 'Pin sạc dự phòng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `lk_hang_hoa_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `lk_hang_hoa_loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
