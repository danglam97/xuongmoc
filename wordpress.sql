-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 07, 2021 lúc 10:10 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wordpress`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `slug`, `image`, `content`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'THÀNH LẬP & PHÁT TRIỂN', 'thanh-lap-phat-trien', 'uploads/article/1600844794_thanh-lap.png', '<p>Nội Thất Hoàng Hoan được xây dựng dựa trên tình yêu, đam mê của tôi đối với nghề mộc và khao khát mang những sản phẩm nội thất đẹp của mình đến với khách hàng thân yêu.&nbsp; </p><p>Cả 1 quá trình từ 1 người thợ phụ rồi được làm thợ mộc chính, tự tạo ra cho mình 1 phân xưởng nhỏ dần phát triển và hiện tại Hoàng Hoan đã là 1 trong những công ty có dịch vụ thiết kế và thi công nội thất uy tín chất lượng với giá tốt nhất tại Hà Nội với sứ mệnh “đem đến cho khách hàng không gian nội thất hoàn hảo”.</p><p>Hoàng Hoan luôn nỗ lực để tạo ra không gian đẹp cho khách hàng theo nhiều gam màu sắc khác nhau và phong cách đa dạng, theo đúng ở thích, lứa tuổi và phong thủy của khách hàng.</p><p><br></p><p><br></p>', 1, 1, '2020-09-23 00:06:34', '2020-09-23 00:25:48'),
(2, 'TẦM NHÌN', 'tam-nhin', 'uploads/article/1600844836_gioi-thieu-tam-nhin.png', '<p>Chúng tôi luôn hướng đến việc tạo ra các sản phẩm nội thất trên triết lý tôn trọng và giữ gìn những gì tự nhiên đã ban tặng cho con người. Chúng tôi luôn tìm tòi và ứng dụng các giải pháp sản phẩm và công nghệ tiên tiến nhất, hợp tác với các đối tác công nghệ hàng đầu thế giới, tìm kiếm và phát triển các vùng nguyên liệu tự nhiên được thiên nhiên chọn lọc, ưu đãi trong nước lẫn nước ngoài, tất cả nhằm tạo ra các sản phẩm nội thất tự nhiên gần gữi cho người khách hàng Việt Nam.<br></p>', 2, 1, '2020-09-23 00:07:16', '2020-09-23 00:25:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(20) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(20) UNSIGNED DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_hot` int(30) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `image`, `title`, `slug`, `description`, `url`, `position`, `is_active`, `created_at`, `updated_at`, `is_hot`, `content`, `categories_id`) VALUES
(1, 'uploads/article/1610803048_tintuc-3.png', '10 SAI LẦM TRONG CÁCH SẮP XẾP PHÒNG KHÁCH NÊN TRÁNH', '10-sai-lam-trong-cach-sap-xep-phong-khach-nen-tranh', '<p style=\"text-align:justify\">Kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch l&agrave; nơi sinh hoạt chung, đ&oacute;n tiếp bạn b&egrave;, đối t&aacute;c n&oacute; cần phải gọn g&agrave;ng, sạch sẽ v&agrave; c&oacute; thẩm mĩ một ch&uacute;t, tr&aacute;nh được 10 sai lầm n&agrave;y căn ph&ograve;ng sẽ ho&agrave;n hảo hơn.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Ph&ograve;ng kh&aacute;ch kh&ocirc;ng n&ecirc;n chỉ lắp đặt 1 đ&egrave;n chiếu s&aacute;ng</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"1\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227.jpg\" style=\"height:750px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">&Aacute;nh s&aacute;ng sẽ tạo cho kh&ocirc;ng gian s&aacute;ng sủa v&agrave; ph&ograve;ng rộng r&atilde;i t&acirc;m trạng se dễ chịu hơn, n&ecirc;n thay v&igrave; đặt một chiếc đ&egrave;n ch&ugrave;m trong ph&ograve;ng kh&aacute;ch, bạn n&ecirc;n gắn th&ecirc;m đ&egrave;n tr&ecirc;n tường, đ&egrave;n b&agrave;n s&aacute;ch đ&egrave;n s&agrave;n hoặc đ&egrave;n trần nh&agrave; để kh&ocirc;ng gian c&oacute; đủ &aacute;nh s&aacute;ng.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Đặt thảm s&agrave;n sai vị tr&iacute;</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"2\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-1.jpg\" style=\"height:691px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Thảm s&agrave;n nhỏ mang lại sự c&acirc;n bằng cho căn ph&ograve;ng, do đ&oacute; h&atilde;y chắc chắn rằng bạn đặt đ&uacute;ng k&iacute;ch cỡ thảm trong ph&ograve;ng kh&aacute;ch, ph&ograve;ng nhỏ n&ecirc;n chọn thảm c&oacute; k&iacute;ch thước nhỏ c&ograve;n ph&ograve;ng lớn n&ecirc;n chọn lớn hơn, v&agrave; tất nhi&ecirc;n chất liệu phải ph&ugrave; hợp với bộ ghế sofa.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Đặt TV sai vị tr&iacute;</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"3\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-2.jpg\" style=\"height:785px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng n&ecirc;n đặt tivi ph&iacute;a trước hoặc gần cửa sổ v&igrave; ch&uacute;ng c&oacute; thể g&acirc;y hại cho thị lực, bạn nh&igrave;n cũng kh&ocirc;ng r&otilde;. Khoảng c&aacute;ch giữa tivi v&agrave; ghế sofa phụ thuộc v&agrave; k&iacute;ch thước m&agrave;n h&igrave;nh, với căn họ n&ecirc;n d&ugrave;ng tivi treo tường sẽ tiết kiệm được kh&ocirc;ng gian sống</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Chọn gối cho ghế sofa kh&ocirc;ng ph&ugrave; hợp&nbsp;</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"4\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-3.jpg\" style=\"height:846px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Đệm tr&ecirc;n ghế sofa sẽ mang lại cho bạn cảm gi&aacute;c thoải m&aacute;i, dễ chịu khi ngồi. Nhưng khi lựa chọn phải c&acirc;n nhắc về chất liệu v&agrave; kết cấu của ch&uacute;ng c&oacute; ph&ugrave; hợp với vải m&agrave; ghế sofa v&agrave; ghế b&agrave;nh của bạn được che ph&ugrave;. Nếu ghế nh&agrave; bạn chất liệu nhung hoặc velour th&igrave; kh&ocirc;ng mua nệm bằng vải b&ocirc;ng hoặc lanh. Ghế nhỏ n&ecirc;n chọn nệm k&iacute;ch thước nhỏ, ngược lại ghế lớn cũng phải chọn gối nệm k&iacute;ch thước tương xứng.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Kh&ocirc;ng đặt ghế sofa cạnh tường</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"5\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-4.jpg\" style=\"height:736px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng k&ecirc; ghế s&aacute;t tường v&igrave; như vậy vừa đi t&iacute;nh thẩm mĩ vừa chiếm qu&aacute; nhiều kh&ocirc;ng gian Với những căn ph&ograve;ng c&oacute; kh&ocirc;ng gian nhỏ hẹp bạn tr&aacute;nh k&ecirc; ghế s&aacute;t tường, tốt nhất n&ecirc;n để trung t&acirc;m, tạo khoảng hở sẽ thấy kh&ocirc;ng gian rộng v&agrave; tho&aacute;ng hơn nhiều.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Kh&ocirc;ng chọn đồ nội thất tối m&agrave;u trong căn ph&ograve;ng trần thấp</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"6\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-5.jpg\" style=\"height:738px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Đặt những bộ ghế tối m&agrave;u trong ph&ograve;ng c&oacute; trần thấp sẽ tạo cho căn ph&ograve;ng cảm gi&aacute;c chật chội v&agrave; u tối hơn. V&igrave; thế với những căn ph&ograve;ng nhỏ, trần thấp bạn n&ecirc;n chọn đồ nội thật s&aacute;ng m&agrave;u để cải thiện kh&ocirc;ng gian, tạo sự thoải m&aacute;i bạn nh&eacute;.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Chọn đồ nội thất theo thiết kế chứ kh&ocirc;ng n&ecirc;n chọn theo sở th&iacute;ch c&aacute; nh&acirc;n&nbsp;</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"7\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-6.jpg\" style=\"height:762px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Đồ nội thất kh&ocirc;ng đẹp kh&ocirc;ng nghĩa l&agrave; sẽ hợp với kh&ocirc;ng gian nh&agrave; bạn, tốt nhất khi đ&atilde; nhờ chuy&ecirc;n gia th&igrave; n&ecirc;n nghe theo lời khuy&ecirc;n của họ để căn ph&ograve;ng h&agrave;i h&ograve;a hơn.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>M&agrave;u sắc kh&ocirc;ng ph&ugrave; hợp với kh&ocirc;ng gian</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"8\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-7.jpg\" style=\"height:763px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Nội thất trong ph&ograve;ng kh&aacute;ch m&agrave;u phải tương đồng hoặc &iacute;t nhất kh&ocirc;ng qu&aacute; đối chọi với m&agrave;u sắc căn ph&ograve;ng. Chọn m&agrave;u đối chọi sẽ khiến cho mất đi sự h&agrave;i h&ograve;a tinh tế, bộ sofa sẽ trở n&ecirc;n lạc l&otilde;ng trong căn ph&ograve;ng kh&aacute;c t&ocirc;ng m&agrave;u.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Treo khung ảnh sai vị tr&iacute;</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"9\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-8.jpg\" style=\"height:846px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Khoảng c&aacute;ch ho&agrave;n hảo để treo ảnh t&iacute;nh từ trần nh&agrave; xuống mặt s&agrave;n l&agrave; 153cm, nếu bạn c&oacute; nhiều khung ảnh n&ecirc;n tạo th&agrave;nh một thư viện ảnh thay v&igrave; treo mỗi bức một nơi.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Đồ nội thất lớn</strong></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"10\" src=\"http://www.xuongmoc.com/wp-content/uploads/2017/07/10-sai-lam-trong-cach-sap-xep-noi-that-phong-khach-nen-tranh-227-9.jpg\" style=\"height:781px; width:600px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng n&ecirc;n chọn một bộ ghế sofa to hơn diện t&iacute;ch căn ph&ograve;ng, như thế tr&ocirc;ng ph&ograve;ng sẽ nhỏ v&agrave; chật chối hơn. N&ecirc;n chọn những k&iacute;ch thước ph&ugrave; hợp cho từng căn ph&ograve;ng sẽ h&agrave;i h&ograve;a hơn trong c&aacute;ch sắp xếp.</p>\r\n\r\n<p>&nbsp;</p>', NULL, 10, 1, '2020-09-22 00:21:08', '2021-01-25 07:29:28', 0, 'Không gian phòng khách là nơi sinh hoạt chung, đón tiếp bạn bè, đối tác nó cần phải gọn gàng, sạch sẽ và có thẩm mĩ một chút, tránh được 10 sai lầm này căn phòng sẽ hoàn hảo hơn.', 16),
(2, 'uploads/article/1610632679_tintuc-8.png', '25+ MẪU GIƯỜNG NGỦ HỘC KÉO THÔNG MINH CHO CĂN PHÒNG BẠN', '25-mau-giuong-ngu-hoc-keo-thong-minh-cho-can-phong-ban', '<p>Sự thật l&agrave; ch&uacute;ng ta d&agrave;nh hết 1/3 cuộc đời chỉ để ngủ, v&igrave; thế việc tạo được một giấc ngủ ngon l&agrave; một điều đặc biệt quan trọng.</p>', NULL, 2, 1, '2020-09-22 00:31:18', '2021-01-21 07:00:39', 1, 'Sự thật là chúng ta dành hết 1/3 cuộc đời chỉ để ngủ, vì thế việc tạo được một giấc ngủ ngon là một điều đặc biệt quan trọng.', 4),
(3, 'uploads/article/1610788147_giuong-ngu.png', 'NGẤT NGÂY VỚI TOP 10 MẪU NỘI THẤT CHUNG CƯ 1 PHÒNG NGỦ ĐẸP 1', 'ngat-ngay-voi-top-10-mau-noi-that-chung-cu-1-phong-ngu-dep-1', '<p>Sự thật l&agrave; ch&uacute;ng ta d&agrave;nh hết 1/3 cuộc đời chỉ để ngủ, v&igrave; thế việc tạo được một giấc ngủ ngon l&agrave; một ...</p>', NULL, 3, 1, '2020-09-22 00:32:48', '2021-02-09 00:03:59', 0, 'Sự thật là chúng ta dành hết 1/3 cuộc đời chỉ để ngủ, vì thế việc tạo được một giấc ngủ ngon là một ...', 4),
(4, 'uploads/article/1610632714_tintuc-1.png', 'TRANG TRÍ PHÒNG KHÁCH CHO THÊM NĂNG ĐỘNG', 'trang-tri-phong-khach-cho-them-nang-dong', '<p>Sự thật l&agrave; ch&uacute;ng ta d&agrave;nh hết 1/3 cuộc đời chỉ để ngủ, v&igrave; thế việc tạo được một giấc ngủ ngon l&agrave; một ...</p>', NULL, 4, 1, '2020-09-22 00:34:59', '2021-02-08 23:39:01', 0, 'qưertyuio', 16),
(5, 'uploads/article/1610632769_ban.png', 'NGẤT NGÂY VỚI TOP 10 MẪU NỘI THẤT CHUNG CƯ 1 PHÒNG NGỦ ĐẸP', 'ngat-ngay-voi-top-10-mau-noi-that-chung-cu-1-phong-ngu-dep', '<p>Sự thật l&agrave; ch&uacute;ng ta d&agrave;nh hết 1/3 cuộc đời chỉ để ngủ, v&igrave; thế việc tạo được một giấc ngủ ngon l&agrave; một ...</p>', NULL, 6, 1, '2020-09-22 02:20:22', '2021-02-09 00:02:13', 0, 'Sự thật là chúng ta dành hết 1/3 cuộc đời chỉ để ngủ, vì thế việc tạo được một giấc ngủ ngon là một ...', 4),
(6, 'uploads/article/1610796602_tin-tuc1.png', 'TUYỆT CHIÊU THIẾT KẾ CHUNG CƯ MINI 2 PHÒNG NGỦ SIÊU ĐẸP', 'tuyet-chieu-thiet-ke-chung-cu-mini-2-phong-ngu-sieu-dep', '<p>Độ tuổi khởi nghiệp v&agrave; tự lập ng&agrave;y c&agrave;ng trẻ h&oacute;a trong x&atilde; hội hiện đại thời nay, thế n&ecirc;n việc &ldquo;thiết</p>', NULL, 1, 1, '2020-09-22 02:21:41', '2021-02-09 00:02:29', 1, 'Độ tuổi khởi nghiệp và tự lập ngày càng trẻ hóa trong xã hội hiện đại thời nay, thế nên việc “thiết', 4),
(7, 'uploads/article/1610632789_tintuc-1.png', 'NGẤT NGÂY VỚI TOP 10 MẪU NỘI THẤT CHUNG CƯ 1 PHÒNG NGỦ ĐẸP..', 'ngat-ngay-voi-top-10-mau-noi-that-chung-cu-1-phong-ngu-dep', '<p>Sự thật l&agrave; ch&uacute;ng ta d&agrave;nh hết 1/3 cuộc đời chỉ để ngủ, v&igrave; thế việc tạo được một giấc ngủ ngon l&agrave; một ...</p>', NULL, 7, 1, '2020-09-22 02:34:24', '2021-02-08 23:47:27', 1, 'Sự thật là chúng ta dành hết 1/3 cuộc đời chỉ để ngủ, vì thế việc tạo được một giấc ngủ ngon là một ...', 4),
(14, 'uploads/article/1610798400_gioi-thieu.png', 'TUYỆT CHIÊU THIẾT KẾ CHUNG CƯ MINI 2 PHÒNG NGỦ SIÊU ĐẸP 1', 'tuyet-chieu-thiet-ke-chung-cu-mini-2-phong-ngu-sieu-dep-1', '<p>Độ tuổi khởi nghiệp v&agrave; tự lập ng&agrave;y c&agrave;ng trẻ h&oacute;a trong x&atilde; hội hiện đại thời nay, thế n&ecirc;n việc &ldquo;thiết kế căn hộ chung cư mini 2 ph&ograve;ng ngủ&rdquo;</p>', NULL, 1, 1, '2021-01-16 04:11:36', '2021-02-09 00:05:06', 1, 'fgfhg', 4),
(15, 'uploads/article/1610799409_ve-ct.png', 'CÁCH CHỌN SOFA CHO PHÒNG KHÁCH NHÀ BẠN THÊM SANG TRỌNG', 'cach-chon-sofa-cho-phong-khach-nha-ban-them-sang-trong', '<p>Việc lựa chọn một bộ ghế sofa thật ph&ugrave; hợp cho ph&ograve;ng kh&aacute;ch l&agrave; điều kh&ocirc;ng hề đơn giản bởi n&oacute; đ&ograve;i hỏi sự &ldquo;ăn khớp&rdquo; giữa kiểu d&aacute;ng,...</p>', NULL, 1, 1, '2021-01-16 05:16:49', '2021-02-08 23:37:58', 1, 'chưa có', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(20) NOT NULL DEFAULT 0,
  `is_active` int(20) NOT NULL DEFAULT 1,
  `is_page` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(1) NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `description`, `image`, `position`, `is_active`, `is_page`, `created_at`, `updated_at`, `type`, `target`, `url`) VALUES
(1, 'THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM Hoàng Hoan.', 'the-gioi-noi-that-so-1-viet-nam-hoang-hoan', '<p>Xưởng Mộc Ho&agrave;n Hoan với sứ mệnh&nbsp;l&agrave; kết hợp h&agrave;i h&ograve;a giữa &yacute; tưởng v&agrave; mong muốn của kh&aacute;ch h&agrave;ng, đem lại những sản phẩm tinh tế, h&agrave;i h&ograve;a v&agrave; tiết kiệm nhất d&agrave;nh cho kh&aacute;ch h&agrave;ng.</p>', 'uploads/banner/1610717379_banner.png', 1, 1, 0, '2020-09-17 00:56:35', '2021-01-25 07:38:04', 1, '_blank', NULL),
(6, 'Banner Sản Phẩm', 'banner-san-pham', NULL, 'uploads/banner/1610417506_banner-san-pham.png', 4, 1, 1, '2020-09-22 19:44:47', '2021-01-11 19:11:46', 1, '_blank', NULL),
(10, 'Banner liên hệ', 'banner-lien-he', NULL, 'uploads/banner/1610417837_gioi-thieu-tam-nhin.png', 0, 0, 0, '2021-01-11 19:17:17', '2021-01-11 19:17:17', 1, '_blank', NULL),
(11, 'Banner đối tác', 'banner-doi-tac', NULL, 'uploads/banner/1610418011_banner-doi-tac.png', 0, 0, 0, '2021-01-11 19:20:11', '2021-01-11 19:20:11', 1, '_blank', NULL),
(12, 'Banner giới thiệu', 'banner-gioi-thieu', NULL, 'uploads/banner/1610418048_banner-gioi-thieu.png', 0, 0, 0, '2021-01-11 19:20:48', '2021-01-11 19:20:48', 1, '_blank', NULL),
(13, 'THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM Hoàng Hoan', 'the-gioi-noi-that-so-1-viet-nam-hoang-hoan', NULL, 'uploads/banner/1610790780_banner.png', 2, 1, 0, '2021-01-16 02:53:00', '2021-01-16 02:53:00', 1, '_blank', NULL),
(14, 'THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM Hoàng Hoan', 'the-gioi-noi-that-so-1-viet-nam-hoang-hoan', NULL, 'uploads/banner/1610790822_banner.png', 3, 1, 0, '2021-01-16 02:53:42', '2021-01-16 02:53:42', 1, '_blank', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'PHÒNG NGỦ', 'phong-ngu', 'uploads/category/1610417452_icon-phong-ngu.png', 2, 1, '2020-09-16 19:31:13', '2021-01-25 06:33:10'),
(5, 'PHÒNG BẾP', 'phong-bep', 'uploads/category/1610417344_icon-phong-bep.png', 3, 1, '2020-09-16 19:31:35', '2021-01-11 19:09:04'),
(6, 'PHÒNG TẮM', 'phong-tam', 'uploads/category/1610200171_icon-phong-tam.png', 4, 1, '2020-09-16 19:31:46', '2021-01-09 06:49:31'),
(7, 'CẦU THANG', 'cau-thang', 'uploads/category/1610417356_icon-cau-thang.png', 7, 1, '2020-09-16 20:31:50', '2021-01-11 19:09:16'),
(8, 'TRẺ EM', 'tre-em', 'uploads/category/1610417425_icon-tre-em.png', 5, 1, '2020-09-19 22:30:57', '2021-01-11 19:10:25'),
(9, 'VĂN PHÒNG', 'van-phong', 'uploads/category/1610417436_icon-van-phong.png', 6, 1, '2020-09-20 19:10:07', '2021-01-11 19:10:36'),
(10, 'TRANG TRÍ', 'trang-tri', 'uploads/category/1610416513_icon-do-trang-tri.png', 8, 1, '2020-09-21 02:15:03', '2021-01-11 18:55:13'),
(16, 'PHÒNG KHÁCH', 'phong-khach', 'uploads/category/1610907525_icon-phong-khach.png', 1, 1, '2021-01-17 11:18:46', '2021-01-17 11:19:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `content`, `created_at`, `updated_at`, `address`, `products_id`, `status`) VALUES
(48, 'vinaseco', 'danglam932@gmail.com', '0967 707 621', 'tôi muốn đi liên hệ với ban thiết kế cảu công ty', '2021-03-06 20:44:21', '2021-03-06 20:46:46', '41A Phú diễn', NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `materials`
--

INSERT INTO `materials` (`id`, `name`, `slug`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Gỗ Mít', 'go-mit', 1, 1, '2021-01-23 03:59:08', '2021-01-26 06:13:09'),
(2, 'Gỗ Sồi', 'go-soi', 2, 1, '2021-01-23 04:00:17', '2021-01-23 04:00:17'),
(3, 'Gỗ Lim', 'go-lim', 3, 1, '2021-01-23 04:01:46', '2021-01-23 04:01:46'),
(4, 'Gỗ Xoan Đào', 'go-xoan-dao', 4, 1, '2021-01-23 04:02:20', '2021-01-23 04:02:20'),
(5, 'Gỗ Tần Bì', 'go-tan-bi', 5, 1, '2021-01-23 04:03:07', '2021-01-23 04:03:07'),
(6, 'Gỗ Trắc', 'go-trac', 6, 1, '2021-01-23 04:03:34', '2021-01-23 04:03:34'),
(7, 'Gỗ MDF', 'go-mdf', 7, 1, '2021-01-23 04:04:08', '2021-01-23 04:04:08'),
(8, 'Gỗ MFC', 'go-mfc', 8, 1, '2021-01-23 04:04:20', '2021-01-23 04:04:20'),
(10, 'Gỗ HDF', 'go-hdf', 9, 1, '2021-01-24 22:49:07', '2021-01-24 22:49:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_09_10_030616_create_banners_table', 1),
(3, '2020_09_10_031213_create_categories_table', 1),
(4, '2020_09_10_033136_create_product-images_table', 2),
(5, '2020_09_10_033254_create_materials_table', 2),
(6, '2020_09_10_033344_create_settings_table', 2),
(7, '2020_09_10_033425_create_vendors_table', 2),
(8, '2020_09_10_033526_create_contacts_table', 2),
(9, '2020_09_10_033647_create_news_table', 2),
(10, '2020_09_10_033713_create_product_table', 2),
(11, '2014_10_12_100000_create_password_resets_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(100) DEFAULT NULL,
  `cost` int(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `sale` int(100) DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  `description` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specifications` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preservation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guarantee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commitment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_hot` int(30) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materials_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `stock`, `cost`, `price`, `sale`, `categories_id`, `description`, `featured`, `specifications`, `preservation`, `guarantee`, `commitment`, `position`, `is_active`, `is_hot`, `created_at`, `updated_at`, `url`, `sku`, `materials_id`) VALUES
(1, 'Bàn Làm Việc', 'ban-lam-viec', 'uploads/product/1610028004_ban-lam-viec.png', 5, 3000000, NULL, NULL, 9, '<p>(Size vừa, trắng n&acirc;u)</p>', '<p>B&agrave;n l&agrave;m việc</p>', '<p>B&agrave;n l&agrave;m việc</p>', '<p>B&agrave;n l&agrave;m việc</p>', '<p>Bàn làm việc</p>', '<p>Bàn làm việc</p>', 2, 1, 1, '2020-09-16 21:18:36', '2021-01-25 07:17:04', NULL, NULL, 4),
(3, 'Kệ đầu giường', 'ke-dau-giuong', 'uploads/product/1610028022_ke-dau-giuong.png', 22, 22000000, NULL, NULL, 4, '<p>(2 ngăn, Gỗ lim)</p>', '<p>Kệ đầu giường</p>', '<p>Kệ đầu giường</p>', '<p>Kệ đầu giường</p>', '<p>Kệ đầu giường</p>', '<p>Kệ đầu giường</p>', 7, 1, 1, '2020-09-16 22:18:23', '2021-01-24 10:20:13', NULL, NULL, 3),
(6, 'Kệ để đồ', 'ke-de-do', 'uploads/product/1610028054_phong-khach-ke-de-do-1.png', 12, 2400000, NULL, NULL, 9, '<p>(4 ngăn, trắng gỗ)</p>', '<p>Kệ để đồ</p>', '<p>Kệ để đồ</p>', '<p>Kệ để đồ</p>', '<p>Kệ để đồ</p>', '<p>Kệ để đồ</p>', 4, 1, 1, '2020-09-20 20:02:29', '2021-01-24 11:44:21', NULL, NULL, 7),
(9, 'Giường Châu Âu', 'giuong-chau-au', 'uploads/product/1610028067_giuong-chau-au.png', 20, 8000000, NULL, NULL, 4, '<p>(Size lớn, trắng sữa)</p>', '<h1>GIƯỜNG NGỦ TÂN CỔ ĐIỂN</h1>\r\n<p>Đối với không gian phòng ngủ thì nội thất quan trọng và được quan tâm nhiều nhất chính là chiếc giường ngủ. Giờ đây chiếc giường ngủ không đơn giản là nơi để con người nghỉ ngơi mà còn góp phần làm nên vẻ đẹp cho không gian sống riêng tư này. Nếu bạn đang sở hữu phòng ngủ kiển trúc tân cổ điển thì chiếc giường ngủ đồng hành phù hợp nhất</p>', '<h1>GIƯỜNG NGỦ TÂN CỔ ĐIỂN</h1>\r\n<p>Đối với không gian phòng ngủ thì nội thất quan trọng và được quan tâm nhiều nhất chính là chiếc giường ngủ. Giờ đây chiếc giường ngủ không đơn giản là nơi để con người nghỉ ngơi mà còn góp phần làm nên vẻ đẹp cho không gian sống riêng tư này. Nếu bạn đang sở hữu phòng ngủ kiển trúc tân cổ điển thì chiếc giường ngủ đồng hành phù hợp nhất</p>', '<h1>GIƯỜNG NGỦ TÂN CỔ ĐIỂN</h1>\r\n<p>Đối với không gian phòng ngủ thì nội thất quan trọng và được quan tâm nhiều nhất chính là chiếc giường ngủ. Giờ đây chiếc giường ngủ không đơn giản là nơi để con người nghỉ ngơi mà còn góp phần làm nên vẻ đẹp cho không gian sống riêng tư này. Nếu bạn đang sở hữu phòng ngủ kiển trúc tân cổ điển thì chiếc giường ngủ đồng hành phù hợp nhất</p>', '<p>Bảo hành sản phẩm lên đến 12 tháng</p>', '<p>Bảo hành sản phẩm lên đến 12 tháng</p>', 1, 1, 1, '2020-09-21 19:57:34', '2021-01-24 11:46:16', NULL, NULL, 6),
(10, 'Kệ TV', 'ke-tv', 'uploads/product/1610028085_phong-khach-ke-ti-vi.png', 30, 1200000, NULL, NULL, 16, '<p>(4 ngăn, trắng gỗ)</p>', '<p>Kệ TV</p>', '<p>Kệ TV</p>', '<p>Kệ TV</p>', '<p>Kệ TV</p>', '<p>Kệ TV</p>', 5, 1, 1, '2020-09-21 21:20:02', '2021-01-24 11:46:27', NULL, NULL, 3),
(11, 'Bàn uống nước', 'ban-uong-nuoc', 'uploads/product/1610028103_phong-khach-ban-uong-nuoc-2.png', 5, 3000000, NULL, NULL, 16, '<p>(4 ngăn ,Gỗ sồi,Gỗ lim,Gỗ m&iacute;t)</p>', '<h1>BÀN UỐNG NƯỚC - BÀN TRÀ CAO CẤP CHO CHUNG CƯ</h1>\r\n<p>Bàn uống nước hay bàn trà là một trong những sản phẩm không thể thiếu trong mọi ngôi nhà hay trong các căn hộ chung cư, việc lựa chọn bàn uống nước, bàn trà sao cho phù hợp với không gian , màu sắc phòng khách mà không ảnh hưởng tới bố cục của căn phòng vô cùng quan trọng. Trong bài viết này, xưởng mộc Hoàng Hoan sẽ cùng các bạn tham khảo một số lưu ý khi lựa chọn bàn uống nước cho căn phòng của mình.</p>\r\n<p><strong>1/ Lựa chọn phù hợp với không gian</strong></p>\r\n<p>Một chiếc bàn uống nước được coi là phù hợp và hoàn hảo, điều đầu tiên cần phải phù hợp với không gian của căn phòng nơi nó được trưng bày, nghĩa là chiếc bàn không được quá to hoặc không quá nhỏ mà cần hài hòa với các vật dụng xung quanh chiếc bàn đó. Điều đó có nghĩa gia chủ cần tính toán, cân nhắc rất nhiều trong trường hợp sử dụng các sản phẩm bàn uống nước được sản xuất có sẵn trên thị trường, để khi mua về chiếc bàn có thể hài hòa với căn phòng.</p>\r\n<p><strong>2/ Lựa chọn bàn uống nước phù hợp với màu sắc căn phòng.</strong></p>\r\n<p>Ngoài yếu tố phù hợp với không gian căn phòng, màu sắc của chiếc bàn trà cũng cần được quan tâm để không quá nổi trội và gây chói mắt cho gia chủ cũng như bạn bè khi đến chơi nhà. Những chiếc bàn trà nên có màu sắc ấm áp, nhẹ nhàng để tạo cho không gian khi thưởng thức trà được thoải mái nhất.</p>\r\n<p><strong>3/ Lựa chọn thiết kế bàn trà phù hợp.</strong></p>\r\n<p>Với một căn phòng mang phong cách hiện đại, việc sử dụng một chiếc bàn uống nước cổ điển, truyền thống sẽ làm hỏng không gian và gây nhức mắt. Chính vì vậy cần quan tâm rất lớn cho thiết kế bàn trà khi lựa chọn cho căn phòng của gia đình để mọi vật hài hòa trong không gian đó nhất.&nbsp;</p>\r\n<p>Những lưu ý tưởng trừng như cơ bản ai cũng biết như trên thực ra đã có rất nhiều người đã và đang gặp phải và đã phải thay thế những chiếc bàn uống nước khác cho căn phòng để chữa cháy những lựa chọn trước đó của chính mình. Một lựa chọn an toàn cho mọi gia đình khi lựa chọn các vật dụng nội thất như bàn uống nước, cầu thang, cánh cửa, giường gỗ và tủ gỗ,... là lựa chọn các xưởng sản xuất uy tín, nơi có thể cùng cấp những lời tư vấn phù hợp nhất.</p>', '<p>- Bàn uống nước gỗ nhập khẩu</p>\r\n<p>- Phong cách hình học tối giản</p>\r\n<p>- Kệ bên trong có kích thước hoàn hảo cho tạp chí, đế lót ly và các phụ kiện phòng khách khác - Có thể được sử dụng như một bàn TV thấp - Kệ mỏng hoàn hảo để chứa một hộp hàng đầu hoặc đầu phát blu-ray - Làm bằng gỗ Sheesham cao cấp - Không cần lắp ráp.</p>', '<p>- Việc sử dụng các chất liệu gỗ nhập khẩu cao cấp sẽ giúp việc sử dụng lâu dài và có giá trị hơn, việc bảo quản các sản phẩm đồ gỗ từ xưởng mộc Hoàng Hoan vô cùng đơn giản, tùy thuộc vào mục đích sử dụng của gia đình mà chúng tôi có những tư vấn cụ thể nhất.</p>', '<p>Bảo hành sản phẩm lên đến 12 tháng</p>', '<p>Hoàng Hoan cam kết đổi trả</p>\r\n<p>Lắp ráp miễn phí</p>\r\n<p>Tư vấn nhiệt tình</p>', 8, 1, 1, '2020-09-21 21:27:07', '2021-01-24 11:46:35', NULL, NULL, 2),
(12, 'Bàn uống nước II', 'ban-uong-nuoc-ii', 'uploads/product/1610028117_phong-khach-ban-uong-nuoc.png', 10, 4000000, NULL, NULL, 16, '<p>B&agrave;n uống nước 2</p>', 'Bàn uống nước 2', 'Bàn uống nước 2', 'Bàn uống nước 2', 'Bàn uống nước 2', 'Bàn uống nước 2', 9, 1, 1, '2020-09-22 20:36:40', '2021-01-24 11:46:45', NULL, NULL, 1),
(13, 'Bàn ăn nhà bếp sang trọng', 'ban-an-nha-bep-sang-trong', 'uploads/product/1610198329_ban-an2.png', 3, 9000000, NULL, NULL, 5, '<p>B&agrave;n ăn nh&agrave; bếp sang trọng</p>', 'Bàn ăn nhà bếp sang trọng', 'Bàn ăn nhà bếp sang trọng', 'Bàn ăn nhà bếp sang trọng', 'Bàn ăn nhà bếp sang trọng', 'Bàn ăn nhà bếp sang trọng', 6, 1, 1, '2020-09-22 20:39:35', '2021-01-24 11:46:56', NULL, NULL, 4),
(20, 'Cầu thang I', 'cau-thang-i', 'uploads/product/1610806055_cau-thang.png', 1, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-16 07:07:35', '2021-01-24 11:47:06', NULL, NULL, 5),
(21, 'Cầu thang II', 'cau-thang-ii', 'uploads/product/1610806156_cau-thang2.png', 1, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-16 07:09:16', '2021-01-24 11:47:19', NULL, NULL, 3),
(22, 'Cầu thang III', 'cau-thang-iii', 'uploads/product/1610806182_cau-thang3.png', 1, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-16 07:09:42', '2021-01-24 11:47:38', NULL, NULL, 4),
(23, 'Cầu thang IV', 'cau-thang-iv', 'uploads/product/1610806207_cau-thang4.png', 1, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 1, '2021-01-16 07:10:07', '2021-01-24 11:47:51', NULL, NULL, 6),
(24, 'Bàn ăn nhà bếp', 'ban-an-nha-bep', 'uploads/product/1610806272_ban-an.png', 1, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-16 07:11:12', '2021-01-24 11:48:02', NULL, NULL, 4),
(26, 'Bàn trà', 'ban-tra', 'uploads/product/1610806335_ban-tra.png', 1, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-16 07:12:15', '2021-01-24 11:49:31', NULL, NULL, 3),
(29, 'Giường gỗ', 'giuong-go', 'uploads/product/1610908174_giuong-ngu.png', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-16 07:54:11', '2021-01-24 11:49:53', NULL, NULL, 8),
(30, 'Tủ quần áo', 'tu-quan-ao', 'uploads/product/1610808875_tu-quan-ao.png', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-16 07:54:35', '2021-01-25 08:33:51', NULL, NULL, 7),
(31, 'Bồn rửa mặt', 'bon-rua-mat', 'uploads/product/1610808935_bon-rua-mat.png', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-16 07:55:35', '2021-01-24 11:51:03', NULL, NULL, 3),
(32, 'Bồn rửa tay', 'bon-rua-tay', 'uploads/product/1610808957_bon-rua-tay.png', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-16 07:55:57', '2021-01-24 11:51:16', NULL, NULL, 1),
(33, 'Bồn rửa tay I', 'bon-rua-tay-i', 'uploads/product/1610808983_bon-rua-tay2.png', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-16 07:56:23', '2021-01-24 11:51:33', NULL, NULL, 6),
(34, 'Tủ âm tường', 'tu-am-tuong', 'uploads/product/1610809012_tu-am-tuong.png', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 1, '2021-01-16 07:56:52', '2021-01-24 11:51:43', NULL, NULL, 4),
(35, 'Đèn', 'den', 'uploads/product/1610809047_den.png', 1, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-16 07:57:27', '2021-01-24 11:51:55', NULL, NULL, 3),
(36, 'Ghế đôn', 'ghe-don', 'uploads/product/1610809068_ghe-don.png', 1, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-16 07:57:48', '2021-01-24 11:52:05', NULL, NULL, 4),
(37, 'Gương I', 'guong-i', 'uploads/product/1610809088_guong.png', 1, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-16 07:58:08', '2021-01-24 11:52:23', NULL, NULL, 2),
(39, 'Bàn học', 'ban-hoc', 'uploads/product/1610809141_ban-hoc.png', 1, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-16 07:59:01', '2021-01-24 11:52:34', NULL, NULL, 3),
(40, 'Cũi trẻ em', 'cui-tre-em', 'uploads/product/1610809168_cui-tre-em.png', 1, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-16 07:59:28', '2021-01-24 11:52:47', NULL, NULL, 1),
(41, 'Giường tầng', 'giuong-tang', 'uploads/product/1610809192_giuong-tang.png', 1, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-16 07:59:52', '2021-01-24 11:52:58', NULL, NULL, 4),
(42, 'Giường tầng I', 'giuong-tang-i', 'uploads/product/1610809216_giuong-tang2png.png', 1, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 1, '2021-01-16 08:00:16', '2021-01-24 11:53:07', NULL, NULL, 6),
(43, 'Bàn làm việc I', 'ban-lam-viec-i', 'uploads/product/1610809338_ban-lam-viec2.png', 1, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-16 08:02:18', '2021-01-24 11:53:20', NULL, NULL, 7),
(44, 'Bàn làm việc II', 'ban-lam-viec-ii', 'uploads/product/1610809365_ban-lam-viec-3.png', 1, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-16 08:02:45', '2021-01-24 11:53:29', NULL, NULL, 2),
(46, 'Giá sách', 'gia-sach', 'uploads/product/1610809443_gia-sach.png', 1, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 1, '2021-01-16 08:04:03', '2021-01-24 11:53:39', NULL, NULL, 5),
(47, 'Gương II', 'guong-ii', 'uploads/product/1610910654_guong2.png', 1, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-17 12:10:54', '2021-01-24 11:55:50', NULL, NULL, 5),
(48, 'Sofa I', 'sofa-i', 'uploads/product/1610911018_sofa-1.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-17 12:16:58', '2021-01-26 06:00:23', NULL, NULL, 7),
(49, 'Bàn ăn nhà bếp lớn', 'ban-an-nha-bep-lon', 'uploads/product/1610911301_ban-an3.png', 1, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-17 12:21:41', '2021-01-24 11:55:29', NULL, NULL, 3),
(50, 'Ghế Cao Cấp', 'ghe-cao-cap', 'uploads/product/1611138335_ghe-van-phong.png', 1, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-20 03:25:35', '2021-01-24 11:55:17', NULL, NULL, 2),
(51, 'Bàn uống nước cao cấp I', 'ban-uong-nuoc-cao-cap-i', 'uploads/product/1611138782_phong-khach-ban-uong-nuoc-3.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 1, '2021-01-20 03:33:02', '2021-01-26 04:30:27', NULL, NULL, 1),
(52, 'Bàn uống nước cao cấp II', 'ban-uong-nuoc-cao-cap-ii', 'uploads/product/1611142616_phong-khach-ban-uong-nuoc-4.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 0, '2021-01-20 04:36:56', '2021-01-26 04:30:40', NULL, NULL, 3),
(53, 'Bàn uống nước cao cấp III', 'ban-uong-nuoc-cao-cap-iii', 'uploads/product/1611142823_phong-khach-ban-uong-nuoc-5.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, 0, '2021-01-20 04:40:23', '2021-01-26 04:31:03', NULL, NULL, 1),
(54, 'Sofa', 'sofa', 'uploads/product/1611143207_sofa-2.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 9, 1, 0, '2021-01-20 04:46:47', '2021-01-24 11:54:09', NULL, NULL, 8),
(55, 'Kệ để đồ I', 'ke-de-do-i', 'uploads/product/1611143260_phong-khach-ke-de-do-2.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 0, '2021-01-20 04:47:40', '2021-01-26 06:00:50', NULL, NULL, 2),
(56, 'Kệ để đồ II', 'ke-de-do-ii', 'uploads/product/1611143303_phong-khach-ke-de-do-1.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2021-01-20 04:48:23', '2021-01-26 06:01:23', NULL, NULL, 6),
(57, 'Giá sách II', 'gia-sach-ii', 'uploads/product/1611143340_phong-khach-ke-do.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 0, '2021-01-20 04:49:00', '2021-01-25 08:35:25', NULL, NULL, 3),
(58, 'Kệ để đồ', 'ke-de-do', 'uploads/product/1611143514_phong-khach-ke-de-do.png', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 1, '2021-01-20 04:51:54', '2021-01-24 11:57:58', NULL, NULL, 7),
(59, 'Tủ bếp cao cấp', 'tu-bep-cao-cap', 'uploads/product/1611144340_tu-bep.PNG', 1, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-20 05:04:06', '2021-01-24 11:57:48', NULL, NULL, 6),
(60, 'Tủ bếp cao cấp I', 'tu-bep-cao-cap-i', 'uploads/product/1611144274_tu-bep2.PNG', 1, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-20 05:04:34', '2021-01-26 05:59:06', NULL, NULL, 1),
(61, 'Tủ bếp cao cấp II', 'tu-bep-cao-cap-ii', 'uploads/product/1611144294_tu-bep3.PNG', 1, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 0, '2021-01-20 05:04:54', '2021-01-26 05:59:17', NULL, NULL, 3),
(62, 'Tủ bếp cao cấp III', 'tu-bep-cao-cap-iii', 'uploads/product/1611144370_tu-bep4.PNG', 1, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-20 05:06:10', '2021-01-26 05:59:29', NULL, NULL, 4),
(63, 'Tủ trang trí I', 'tu-trang-tri-i', 'uploads/product/1611212790_tu-trang-tri.PNG', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-21 00:06:30', '2021-01-25 08:34:49', NULL, NULL, 10),
(64, 'Tủ trang trí', 'tu-trang-tri', 'uploads/product/1611212817_tu-trang-tri1.PNG', 1, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, '2021-01-21 00:06:57', '2021-01-24 11:56:18', NULL, NULL, 6),
(65, 'Bàn trang điểm I', 'ban-trang-diem-i', 'uploads/product/1611212867_ban-trang-diem.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, '2021-01-21 00:07:47', '2021-01-26 04:31:16', NULL, NULL, 8),
(66, 'Bàn trang điểm II', 'ban-trang-diem-ii', 'uploads/product/1611212893_ban-trang-diem1.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, '2021-01-21 00:08:13', '2021-01-26 04:31:29', NULL, NULL, 8),
(67, 'Bàn trang điểm III', 'ban-trang-diem-iii', 'uploads/product/1611212919_ban-trang-diem2.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 0, '2021-01-21 00:08:39', '2021-01-26 04:31:45', NULL, NULL, 8),
(68, 'Giường ngủ có hộc kéo', 'giuong-ngu-co-hoc-keo', 'uploads/product/1611212962_giuong-co-hoc-keo.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 1, '2021-01-21 00:09:22', '2021-01-24 11:58:19', NULL, NULL, 4),
(69, 'Tủ quần áo 3 cánh I', 'tu-quan-ao-3-canh-i', 'uploads/product/1611213018_tu-quan-ao1.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 0, '2021-01-21 00:10:18', '2021-01-26 04:28:40', NULL, NULL, 2),
(70, 'Tủ quần áo 3 cánh II', 'tu-quan-ao-3-canh-ii', 'uploads/product/1611213042_tu-quan-ao3.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, 0, '2021-01-21 00:10:42', '2021-01-26 04:29:10', NULL, NULL, 8),
(71, 'Tủ quần áo 4 cánh', 'tu-quan-ao-4-canh', 'uploads/product/1611213077_tu-quan-ao-4-canh.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 0, '2021-01-21 00:11:17', '2021-01-24 11:59:41', NULL, NULL, 1),
(72, 'Tủ quần áo 6 cánh I', 'tu-quan-ao-6-canh-i', 'uploads/product/1611213107_tu-quan-ao-5-canh.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 8, 1, 0, '2021-01-21 00:11:47', '2021-01-26 04:29:31', NULL, NULL, 6),
(73, 'Tủ quần áo 6 cánh II', 'tu-quan-ao-6-canh-ii', 'uploads/product/1611213135_tu-quan-ao-6-canh.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 8, 1, 0, '2021-01-21 00:12:15', '2021-01-26 04:29:52', NULL, NULL, 4),
(74, 'Tủ quần áo 6 cánh', 'tu-quan-ao-6-canh', 'uploads/product/1611213158_tu-quan-ao-6-canh2.PNG', 1, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 10, 1, 0, '2021-01-21 00:12:38', '2021-01-24 11:58:57', NULL, NULL, 6),
(75, 'Đồ trang trí', 'do-trang-tri', 'uploads/product/1611213259_ngua-go.PNG', 1, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 0, '2021-01-21 00:14:19', '2021-01-24 11:58:47', NULL, NULL, 5),
(76, 'Đồ trang trí I', 'do-trang-tri-i', 'uploads/product/1611213294_trang-tri1.PNG', 1, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, 0, '2021-01-21 00:14:54', '2021-01-24 11:58:39', NULL, NULL, 3),
(77, 'Tượng gỗ', 'tuong-go', 'uploads/product/1611213320_tuong-go.PNG', 1, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 0, '2021-01-21 00:15:20', '2021-01-24 12:02:11', NULL, NULL, 6),
(78, 'Tủ quần áo nhỏ', 'tu-quan-ao-nho', 'uploads/product/1611213395_tu-quan-ao.PNG', 1, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 1, '2021-01-21 00:16:35', '2021-01-24 12:02:01', NULL, NULL, 7),
(79, 'Giường tầng II', 'giuong-tang-ii', 'uploads/product/1611213426_giuong-tangg.PNG', 1, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 0, '2021-01-21 00:17:06', '2021-01-24 12:01:51', NULL, NULL, 1),
(80, 'Cầu thang V', 'cau-thang-v', 'uploads/product/1611214101_cau-thang5.PNG', 1, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 0, '2021-01-21 00:28:21', '2021-01-24 12:01:37', NULL, NULL, 6),
(81, 'Cầu thang VI', 'cau-thang-vi', 'uploads/product/1611214129_cau-thangg.PNG', 1, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, 0, '2021-01-21 00:28:49', '2021-01-24 12:01:23', NULL, NULL, 3),
(82, 'Tủ kết hợp bồn rửa tay', 'tu-ket-hop-bon-rua-tay', 'uploads/product/1611215405_tu-bon-rua.PNG', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 1, '2021-01-21 00:50:05', '2021-01-24 12:01:13', NULL, NULL, 7),
(83, 'Tủ đứng hình khối', 'tu-dung-hinh-khoi', 'uploads/product/1611215478_tu-dung.PNG', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, 0, '2021-01-21 00:51:18', '2021-01-24 12:01:04', NULL, NULL, 2),
(84, 'Tủ kết hợp bồn rửa cao cấp.', 'tu-ket-hop-bon-rua-cao-cap', 'uploads/product/1611215523_tu-nhieu-ngan.PNG', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, 1, '2021-01-21 00:52:03', '2021-01-25 08:35:47', NULL, NULL, 8),
(85, 'Tủ treo tường', 'tu-treo-tuong', 'uploads/product/1611215576_tu-treo-tuong.PNG', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 8, 1, 0, '2021-01-21 00:52:56', '2021-01-24 12:00:10', NULL, NULL, 8),
(86, 'Tủ treo tường I', 'tu-treo-tuong-i', 'uploads/product/1611215600_tu-treo-tuong1.PNG', 1, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 8, 1, 0, '2021-01-21 00:53:20', '2021-01-24 11:59:56', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `position` int(20) NOT NULL,
  `is_active` int(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `products_id`, `image`, `url`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 11, 'uploads/product_image/1610876731_ban1.png', NULL, 2, 1, '2021-01-17 02:45:31', '2021-01-17 02:55:45'),
(6, 11, 'uploads/product_image/1610877302_ban2.png', NULL, 1, 1, '2021-01-17 02:55:02', '2021-01-17 02:55:02'),
(7, 11, 'uploads/product_image/1610877334_ban3.png', NULL, 3, 1, '2021-01-17 02:55:34', '2021-01-17 02:55:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'MANAGER'),
(2, 'ADMIN'),
(3, 'GUEST');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`, `email`, `facebook`, `youtube`, `introduce`, `image`) VALUES
(1, 'CÔNG TY TNHH HOÀNG HOAN', '02422696999', 'Số 1 Nguyễn Trãi, Thanh Xuân, Hà Nội', NULL, '2021-03-06 20:53:41', 'danglam932@gmail.com', NULL, NULL, NULL, 'uploads/setting/1610878075_logo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `avatar`, `is_active`) VALUES
(6, 'Đăng Lâm', 'danglam932@gmail.com', '$2y$10$CSnvJbi6kvDcos0sk9Jw4O/d.4hohbM6aRITbHVB8lvsBk3h.e6Qm', 'o0bboFTlH0B9iPV5FniuxmwyabkURTBTcbHo3WP2NcCUlhYilKEwQujbRdRL', '2021-01-06 10:29:04', '2021-03-06 20:34:59', 2, 'uploads/user/1615088099_HUNRE_Logo.png', 1),
(10, 'Lường Thúy Nga', 'thuynga947@gmail.com', '$2y$10$K74JoLeeTk7Wwm2p8p51f.b6fIRDLlTIXlF9UjaOjqr99/W8scFsS', NULL, '2021-01-24 09:53:59', '2021-03-06 20:41:39', 2, 'uploads/user/1611507239_fitavnua.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(20) DEFAULT 0,
  `is_active` int(20) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `slug`, `image`, `content_title`, `content_description`, `position`, `is_active`, `created_at`, `updated_at`, `phone`, `email`, `address`, `url`) VALUES
(2, 'MƯỜNG THANH', 'muong-thanh', 'uploads/vendor/1610417554_dt-muongthanh.jpg', 'TẬP ĐOÀN KHÁCH SẠN MƯỜNG THANH', '<p>Tại Mường Thanh, ch&uacute;ng t&ocirc;i mời bạn c&ugrave;ng khởi h&agrave;nh chuyến đi t&igrave;m về kh&ocirc;ng gian thanh thản chứa đựng những n&eacute;t văn h&oacute;a mang đậm tinh thần bản sắc Việt, nơi con người gắn kết v&agrave; th&acirc;n &aacute;i gửi trao nhau t&igrave;nh cảm ch&acirc;n th&agrave;nh. Mường Thanh đồng h&agrave;nh c&ugrave;ng bạn ở khắp nơi, cho mọi h&agrave;nh tr&igrave;nh, ở mọi giai đoạn của cuộc sống.</p>', 2, 1, '2020-09-22 01:42:26', '2021-01-17 11:59:10', 0, NULL, NULL, NULL),
(3, 'Sheraton', 'sheraton', 'uploads/vendor/1610417564_dt-sharaton.jpg', 'Sheraton HanoI HOTEL', '<p>Nằm tr&ecirc;n bờ Hồ T&acirc;y của H&agrave; Nội v&agrave; được bao quanh bởi nhiều điểm tham quan địa phương, Sheraton Hanoi Hotel chỉ c&aacute;ch trung t&acirc;m nhộn nhịp của Th&agrave;nh phố H&agrave; Nội một đoạn l&aacute;i xe nhanh ch&oacute;ng. Kh&aacute;m ph&aacute; Khu Phố Cổ gần đ&oacute;, nơi c&oacute; Hồ Ho&agrave;n Kiếm, Nh&agrave; h&aacute;t Lớn H&agrave; Nội v&agrave; c&aacute;c cửa h&agrave;ng thời trang đặc biệt.</p>', 3, 1, '2020-09-22 01:43:04', '2021-01-17 11:57:18', 0, NULL, NULL, NULL),
(4, 'THE COFFEE HOUSE', 'the-coffee-house', 'uploads/vendor/1610417575_dt-coffee-house.jpg', 'THE COFFEE HOUSE', 'Tại The Coffee House, chúng tôi luôn trân trọng những câu chuyện và đề cao giá trị Kết nối con người. Chúng tôi mong muốn The Coffee House sẽ trở thành “Nhà Cà Phê\", nơi mọi người xích lại gần nhau và tìm thấy niềm vui, sự sẻ chia thân tình bên những tách cà phê đượm hương, chất lượng.', 4, 1, '2020-09-22 01:44:27', '2021-01-14 03:39:38', 0, NULL, NULL, NULL),
(5, 'Marvella', 'marvella', 'uploads/vendor/1610417593_dt-mellisa.jpg', 'Marvella Hotel Nha Trang', '<p>Marvella - một kh&aacute;ch sạn 4 sao mới x&acirc;y dựng theo phong c&aacute;ch t&acirc;n cổ điển, sang trọng cần x&acirc;y dựng nhận diện thương hiệu l&agrave;m nổi bật t&iacute;nh kh&aacute;c biệt gi&uacute;p thu h&uacute;t kh&aacute;ch h&agrave;ng.</p>', 5, 1, '2020-09-22 01:45:12', '2021-01-17 11:58:18', 0, NULL, NULL, NULL),
(6, 'VINPEARL', 'vinpearl', 'uploads/vendor/1610417604_vinpearl.jpg', 'Công ty cổ phần VInpearl', 'Vinpearl là thương hiệu dịch vụ du lịch nghỉ dưỡng – giải trí lớn nhất Việt Nam. Vinpearl sở hữu chuỗi khách sạn, resort và trung tâm hội nghị đẳng cấp 5 sao, các khu vui chơi giải trí quốc tế tọa lạc tại những danh thắng du lịch nổi tiếng nhất của Việt Nam.', 1, 1, '2020-09-22 02:07:26', '2021-01-14 03:39:51', 0, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `categories_id` (`categories_id`) USING BTREE;

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `products_id` (`products_id`) USING BTREE;

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Chỉ mục cho bảng `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
