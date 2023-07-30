-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 30, 2023 lúc 05:09 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang_gias`
--

CREATE TABLE `bang_gias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doi_tuong` varchar(200) DEFAULT NULL,
  `gia_giam` decimal(20,0) DEFAULT NULL,
  `loai_sp` text DEFAULT NULL,
  `anh_cover` varchar(500) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bang_gias`
--

INSERT INTO `bang_gias` (`id`, `doi_tuong`, `gia_giam`, `loai_sp`, `anh_cover`, `mo_ta`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(1, 'Trẻ em dưới 12 tuổi', '20', 'VIP &amp;amp; Thường', '/files/VcFiSMQybSrp32NVwKoWCfMLaHCJwc1EhNw384pv.png', 'comy', NULL, '2023-07-22 14:14:07', '2023-07-22 15:00:04'),
(2, 'Người lớn', '10', 'chăm sóc da', '/files/dmIlSi0xWnYbd75LnpuOLLmu6E3sYF3BuBolps9j.png', 'dddddddddddd', NULL, '2023-07-23 14:05:23', '2023-07-23 14:05:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hinhs`
--

CREATE TABLE `cau_hinhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_cong_ty` varchar(200) DEFAULT NULL,
  `so_dt_tu_van` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` text DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_hinhs`
--

INSERT INTO `cau_hinhs` (`id`, `ten_cong_ty`, `so_dt_tu_van`, `email`, `dia_chi`, `logo`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(10, 'HNH', '0823550297', 'khanhhung89890@gmail.com', 'tiền giang', '/files/1PLD2V8T2DWqpCTGLWt6RIt98knYioj1IiBIeMBW.png', NULL, '2023-07-27 08:05:51', '2023-07-30 15:06:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_mucs`
--

CREATE TABLE `danh_mucs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_danh_muc` varchar(200) DEFAULT NULL,
  `anh_cover` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_mucs`
--

INSERT INTO `danh_mucs` (`id`, `ten_danh_muc`, `anh_cover`, `created_at`, `updated_at`) VALUES
(1, 'Kinh dị', '/files/UH7O4TDDg1Uu0qEsVKG47Ji35rJgSvbDlVgounVl.jpg', '2023-07-18 06:51:54', '2023-07-18 06:51:54'),
(2, 'Hành động', '/files/rxfioPbyWZjlntM6xn07YgNsuJJzhI6BiSG4Ph48.jpg', '2023-07-18 13:29:59', '2023-07-18 13:29:59'),
(3, 'Hoạt hình', '/files/rARIfjZkyovTqbtAOEfXd0BTGeEaWURLbSH6PONZ.jpg', '2023-07-18 13:31:23', '2023-07-18 13:31:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dong_gops`
--

CREATE TABLE `dong_gops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) DEFAULT NULL,
  `id_san_phams` bigint(20) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `anh_comments` varchar(500) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dong_gops`
--

INSERT INTO `dong_gops` (`id`, `id_users`, `id_san_phams`, `mo_ta`, `anh_comments`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(22, 5, 9, 'comy', NULL, NULL, '2023-07-19 05:52:52', '2023-07-19 05:52:52'),
(25, 5, 8, 'dddddddddđ', NULL, NULL, '2023-07-19 06:05:23', '2023-07-19 06:05:23'),
(27, 5, 1, 'comy', NULL, NULL, '2023-07-19 06:54:28', '2023-07-19 06:54:28'),
(29, 6, 9, 'Tuyệt vời', NULL, NULL, '2023-07-20 13:29:49', '2023-07-20 13:29:49'),
(31, 8, 6, 'comy', NULL, NULL, '2023-07-22 06:27:55', '2023-07-22 06:27:55'),
(32, 8, 6, 'dddddddddđ', NULL, NULL, '2023-07-22 06:34:53', '2023-07-22 06:34:53'),
(33, 5, 6, 'dddddddddđ', NULL, NULL, '2023-07-22 06:41:33', '2023-07-22 06:41:33'),
(34, 8, 12, 'dddddddddđ', NULL, NULL, '2023-07-22 06:58:17', '2023-07-22 06:58:17'),
(35, 8, 12, 'comy', NULL, NULL, '2023-07-22 06:59:30', '2023-07-22 06:59:30'),
(36, 8, 12, 'ffffffffffffffffffffff', NULL, NULL, '2023-07-22 07:01:08', '2023-07-22 07:01:08'),
(37, 5, 6, 'ffffffffffffffffffffff', NULL, NULL, '2023-07-22 07:01:59', '2023-07-22 07:01:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `helps`
--

CREATE TABLE `helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cau_hoi` text DEFAULT NULL,
  `tra_loi` text DEFAULT NULL,
  `anh_help` varchar(500) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `helps`
--

INSERT INTO `helps` (`id`, `cau_hoi`, `tra_loi`, `anh_help`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(1, 'em ăn cơm chưa', 'dạ rồi', '/files/LM2GbNhRzgNGsZQKeZrdK9f0qjFMnbTM6avcNgy7.jpg', NULL, '2023-07-23 14:36:39', '2023-07-23 14:36:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2023_07_12_220448_create_bills_table', 2),
(10, '2023_07_12_220726_create_bills_details_table', 2),
(38, '2023_07_16_213508_create_comments_table', 3),
(121, '2014_10_12_000000_create_users_table', 4),
(122, '2014_10_12_100000_create_password_resets_table', 4),
(123, '2019_08_19_000000_create_failed_jobs_table', 4),
(124, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(125, '2023_06_29_143023_create_danh_mucs_table', 4),
(126, '2023_06_29_145113_create_san_phams_table', 4),
(127, '2023_07_09_151916_create_tin_tucs_table', 4),
(128, '2023_07_10_144413_create_mua_san_phams_table', 4),
(129, '2023_07_17_153238_create_dong_gops_table', 4),
(130, '2023_07_20_211830_create_cau_hinhs_table', 5),
(131, '2023_07_22_204504_create_bang_gias_table', 6),
(132, '2023_07_23_211639_create_helps_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mua_san_phams`
--

CREATE TABLE `mua_san_phams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` text DEFAULT NULL,
  `dia_chi` text DEFAULT NULL,
  `so_dt` decimal(10,0) DEFAULT NULL,
  `id_san_pham` bigint(20) DEFAULT NULL,
  `id_users` bigint(20) DEFAULT NULL,
  `gia` decimal(20,0) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `so_luong` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mua_san_phams`
--

INSERT INTO `mua_san_phams` (`id`, `ten`, `dia_chi`, `so_dt`, `id_san_pham`, `id_users`, `gia`, `mo_ta`, `so_luong`, `created_at`, `updated_at`) VALUES
(25, 'vvvv', 'tiền giang', '555555555', 11, 5, '100', NULL, '2', '2023-07-27 08:32:04', '2023-07-27 08:32:04'),
(26, 'hhh', 'tiền giang', '2136549879', 7, 5, '100', NULL, '5', '2023-07-27 13:58:58', '2023-07-27 13:58:58'),
(27, 'Hưng', 'tiền giang', '856124852', 2, 5, '100', NULL, '3', '2023-07-27 14:07:29', '2023-07-27 14:07:29'),
(32, 'bé na', 'tiền giang', '589190342', 14, 5, '100000', NULL, '1', '2023-07-30 14:43:47', '2023-07-30 14:43:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_phams`
--

CREATE TABLE `san_phams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_san_pham` varchar(200) DEFAULT NULL,
  `gia` decimal(20,0) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `anh_cover` varchar(500) DEFAULT NULL,
  `so_luong_ton` text DEFAULT NULL,
  `id_nguoi_tao` bigint(20) DEFAULT NULL,
  `id_danh_muc` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_phams`
--

INSERT INTO `san_phams` (`id`, `ten_san_pham`, `gia`, `mo_ta`, `anh_cover`, `so_luong_ton`, `id_nguoi_tao`, `id_danh_muc`, `created_at`, `updated_at`) VALUES
(1, 'Series Annabelle - Seri Búp Bê Quỷ Ám', '100', 'Series Annabelle gồm 3 phần lần lượt được phát hành vào năm 2014, 2017 và 2019. Thể loại: Phim ma, phim kinh dị, hiện tượng siêu nhiên, chiếu rạp Quốc gia: Mỹ Đạo diễn: John R. Leonetti (phần 1), David F. Sandberg (phần 2), Gary Dauberman (phần 3) Diễn viên: Annabelle Wallis, Alfre Woodard, Stephanie Sigman, Mckenna Grace,... Điểm IMDb lần lượt: 5.4/10 - 6.5/10 - 5.9/10', '/files/V4lrMGiOEp5MCKu2wCVczhTkfxCq84XQQa1qCErj.jpg', '100', NULL, 1, '2023-07-18 06:52:16', '2023-07-18 13:04:53'),
(2, 'The Nun - Ác Quỷ Ma Sơ', '100', 'Thể loại: Phim ma, phim kinh dị, chiếu rạp Thời gian phát hành: 2018 Quốc gia: Mỹ Thời lượng: 96 phút Đạo diễn: Corin Hardy Diễn viên: Taissa Farmiga, Demián Bichir, Jonas Bloquet,... Điểm IMDb: 5.3/10', '/files/57EJpWwck0fBdhNdY4Scne4zEEXLi9IGNYxBnXL6.jpg', '100', NULL, 1, '2023-07-18 13:06:06', '2023-07-18 13:06:06'),
(3, 'Series The Ring - Seri Vòng Tròn Oan Nghiệt', '100', 'Series The Ring gồm phần 1 công chiếu năm 2002 và phần 2 công chiếu năm 2005. Thể loại: Phim ma, phim kinh dị, tâm linh, chiếu rạp Quốc gia: Mỹ Đạo diễn: Gore Verbinski (phần 1) và Hideo Nakata (phần 2) Diễn viên: Naomi Watts, David Dorfman,... Điểm IMDb lần lượt: 7.1/10 và 5.4/10', '/files/YYFssE4RBVr9XN8VnJbTgHiofmcggqHgUzR8fpc8.png', '100', NULL, 1, '2023-07-18 13:07:33', '2023-07-18 13:07:33'),
(4, 'Mission Impossible 7', '100', 'Thể loại: Phim hành động, phiêu lưu  Đạo diễn: Christopher McQuarrie  Năm công chiếu: 30/9/2022  Diễn viên chính: Tom Cruise, Henry Czerny, Simon Pegg,...  Quốc gia: Mỹ  Mission Impossible - một trong những series phim đắt khách nhất trong lịch sử điện ảnh quay lại với khán giả trong năm tới. Bộ phim kể về những tội ác và các kẻ thù của tổ chức IMF do điệp viên Ethan Hunt dẫn đầu.', '/files/4lohdQZkbhxwLuQ8ScB4C0OXUlD6TV7OabDlAH0z.png', '100', NULL, 2, '2023-07-18 13:32:30', '2023-07-18 13:32:30'),
(5, 'Thor: Love & Thunder (Thor: Tình yêu và sấm sét)', '100', 'Thể loại: Phim hành động, Hài, Siêu Anh Hùng  Đạo diễn: Taika Waititi  Năm công chiếu:08/07/2022  Diễn viên chính: Chris Hemsworth, Natalie Portman, Chris Pratt  Quốc gia: Mỹ  Thor: Love and Thunder lấy bối cảnh sau sự kiện Avengers: Endgame. Khi Thanos bị tiêu diệt hoàn toàn, Thor \"Bụng bự\" đã đuổi theo Vệ binh dải ngân hà để du hành xuyên không gian.', '/files/vTcXjBiyQvGVTyWRZO4jraM584aMNw8okyCHm93o.jpg', '100', NULL, 2, '2023-07-18 13:33:28', '2023-07-18 13:33:28'),
(6, 'BLACK ADAM', '100', 'Thể loại: Phim Hành Động, Tội Phạm  Đạo diễn: Jaume Collet-Serra  Năm công chiếu: 21/10/2022  Diễn viên chính: Dwayne Johnson, Noah Centineo, Aldis Hodge, Sarah Shahi  Quốc gia: Mỹ  Black Adam là bộ phim siêu anh hùng DC duy nhất được xác nhận sẽ ra mắt vào ngày 21 tháng 10 năm nay. Đây là siêu anh hùng mạnh nhất trong thế giới siêu anh hùng DC.  Từng là chư hầu của vùng Kahndaq, Black Adam được ban tặng sức mạnh phi thường từ Wizard Shasm. Nhưng thay vì trở thành một người hữu ích làm công việc đúng đắn để bảo vệ thế giới, Black Adam lại chọn con đường trả thù tất cả những người trước đây đã khiến anh bất hạnh.', '/files/QOR3pNAcBkDnKfJbtl9fx9jLwEW5EIB3HsgLMdgB.jpg', '100', NULL, 2, '2023-07-18 13:34:35', '2023-07-18 13:34:35'),
(7, 'Seri Nữ hoàng băng giá - Series Frozen', '100', 'Series Frozen bao gồm Frozen (công chiếu 2013) và Frozen II (công chiếu 2019) Độ dài: hơn 100 phút/ phần Đạo diễn: Chris Buck, Jennifer Lee Diễn viên: Idina Menzel, Kristen Bell,... Điểm IMDb: 7.4/10 và 6.8/10 Giải thưởng: Giải Oscar cho “Phim hoạt hình hay nhất” và “Ca khúc trong phim hay nhất”; Giải Quả cầu vàng cho “Phim hoạt hình hay nhất”...', '/files/d6HWUoIFDoUFIWVHuxWExiGuCNy11BvqWgMoNMaD.jpg', '100', NULL, 3, '2023-07-18 13:36:56', '2023-07-18 13:36:56'),
(8, 'Seri Câu chuyện đồ chơi - Series Toy Story', '100', 'Seri phim hoạt hình hay Toy Story gồm Toy Story (1995), Toy Story 2 (1999), Toy Story 3 (2010) và Toy Story 4 (2019). Độ dài: hơn 80 phút/ phần Đạo diễn: John Lasseter (phần 1-2), Lee Unkrich (phần 3) và Josh Cooley (phần 4) Diễn viên: Tom Hanks,Tim Allen,... Điểm IMDb: 8.3/10, 7.9/10, 8.2/10 và 7.7/10 Giải thưởng: Giải Oscar cho “Thành tựu đặc biệt” và “Phim hoạt hình hay nhất”, Giải Quả Cầu Vàng cho “Phim hoạt hình hay nhất”;...', '/files/Yoy91kuBZqd7ADKnGpGTs4v40rUQ24GaJlygH9gs.jpg', '100', NULL, 3, '2023-07-18 13:38:02', '2023-07-19 06:19:50'),
(9, 'Raya và Rồng thần cuối cùng - Raya and the Last Dragon', '100', 'Thời gian phát hành: 05/03/2021 (Việt Nam) Độ dài: 1 giờ 57 phút Đạo diễn: Carlos López Estrada, Don Hall Diễn viên: Kelly Marie Trần, Awkwafina,... Điểm IMDb: 7.4/10', '/files/sX7EtjMZn3xJf19eh21qYCyCCHjp2A4Q8CKsKZpV.jpg', '100', NULL, 3, '2023-07-18 13:39:24', '2023-07-18 13:39:24'),
(10, 'Mama - Mẹ Ma', '100', 'Thể loại: Phim ma, phim kinh dị, chiếu rạp Quốc gia: Canada Năm phát hành: 2013 Thời lượng phim: 1 giờ 40 phút Đạo diễn: Andrés Muschietti Diễn viên: Megan Charpentier, Jessica Chastain, Nikolaj Coster-Waldau,... Điểm IMDb: 6.2/10', '/files/eSGonIPY0h9qLcUvdS8uclwhNufaUDobpZz0lJeq.jpg', '100', NULL, 1, '2023-07-20 13:34:40', '2023-07-20 13:34:40'),
(11, 'The Exorcist - Quỷ Ám', '100', 'Thể loại: Phim ma, phim kinh dị, hiện tượng siêu nhiên Quốc gia: Mỹ Năm phát hành: 1973 Thời lượng phim: 2 giờ 12 phút Đạo diễn: William Friedkin Diễn viên: Linda Blair, Ellen Burstyn, Jason Miller,... Điểm IMDb: 8.0/10', '/files/cHoBjQbfwdHyyevy0f3i7RabbikMwGRGkY2dcQg8.jpg', '100', NULL, 1, '2023-07-20 13:35:53', '2023-07-20 13:35:53'),
(12, 'Get Out - Trốn Thoát', '100', 'Thể loại: Phim kinh dị, giật gân, chiếu rạp Quốc gia: Mỹ Năm phát hành: 2017 Thời lượng phim: 1 giờ 44 phút Đạo diễn: Jordan Peele Diễn viên: Daniel Kaluuya, Allison Williams, Lakeith Stanfield,... Điểm IMDb: 7.7/10', '/files/La8kbJMRc77ngXHgsYPy8s7tlNjChbJo3zzRLkfe.jpg', '100', NULL, 1, '2023-07-20 13:37:11', '2023-07-20 13:37:11'),
(13, 'vitaminco', '100', 'comy', '/files/xUsARwQBlDaxHjLbP0VgkUfqgouoFQNrqS6a5vq6.jpg', '100', NULL, 3, '2023-07-28 08:47:07', '2023-07-28 08:48:28'),
(14, 'Hột gà', '100000', 'hột gà lộn', '/files/mtwjxjjlsk2yTtMMiE9lliQsMLi2czVrU2ZnQU1N.jpg', '100', NULL, 3, '2023-07-28 08:50:25', '2023-07-30 14:33:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tucs`
--

CREATE TABLE `tin_tucs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_tin_tuc` varchar(200) DEFAULT NULL,
  `giam_gia` decimal(20,0) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `anh_cover` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tucs`
--

INSERT INTO `tin_tucs` (`id`, `ten_tin_tuc`, `giam_gia`, `mo_ta`, `anh_cover`, `created_at`, `updated_at`) VALUES
(1, 'Sự trở lại của Chuột đầu bếp - Ratatouille', '10', 'Thời gian phát hành: 09/06/2007 (Việt Nam) Độ dài: 1 giờ 58 phút Đạo diễn: Brad Bird Diễn viên: Patton Oswalt, Ian Holm,... Điểm IMDb: 8.0/10 Giải thưởng: “Phim hoạt hình hay nhất” tại lễ trao giải Oscar lần thứ 80', '/files/sarnOwxIgKkObhzndcBLCgGV6egWJQEqmM3sbhrY.jpg', '2023-07-18 13:41:27', '2023-07-18 13:41:27'),
(2, 'Ra mắt The Witch 2 (Sát thủ nhân tạo 2) nối tiếp phần 1', '10', 'Thể loại: Phim Hành Động, Hình Sự, Ly Kì, Kinh Dị  Đạo diễn: Park Hoon-jung  Năm công chiếu: 01/07/2022  Diễn viên chính: Shin Shi A, Lee Jong Suk, Park Eun Bin, Jin Goo, Kim Da-mi  Quốc gia: Hàn Quốc  Sát thủ nhân tạo 2 là câu chuyện kể về những sát thủ được ra đời từ một thí nghiệm biến đổi gen do hai giáo sư Baek tạo ra. Những thí nghiệm vô nhân đạo này tiếp tục cho đến ngày một nhóm đàn ông đeo mặt nạ tấn công cơ sở thử nghiệm. Họ đã tháo dỡ phòng thí nghiệm, nhưng vẫn lấy mẫu ARK-ADP1.', '/files/DxLYYpbAuVaxX7HcNK1MmM76Koc4gyYmhD7JyzUw.jpg', '2023-07-18 13:43:54', '2023-07-18 13:43:54'),
(3, 'Dead silence - Sự Im Lặng Chết Chóc', '10', 'Thể loại: Phim ma, phim kinh dị, chiếu rạp Quốc gia: Mỹ Năm phát hành: 2007 Thời lượng phim: 1 giờ 31 phút Đạo diễn: James Wan Diễn viên: Ryan Kwanten, Judith Anna Roberts, Amber Valletta,... Điểm IMDb: 6.2/10', '/files/8FrD7pW6QVbn9Ep53Ohg3YTfRdV5bBHvOZWIqKkN.jpg', '2023-07-20 13:38:14', '2023-07-20 13:38:14'),
(4, 'The Evil Dead - Ma Cây (1981)', '10', 'Thể loại: Phim ma, phim kinh dị, chiếu rạp Quốc gia: Mỹ Năm phát hành: 1981 Thời lượng phim: 1 giờ 25 phút Đạo diễn: Sam Raimi Diễn viên: Bruce Campbell, Ted Raimi, Ivan Raimi,... Điểm IMDb: 7.5/10', '/files/NnOgShJc0swg9dO3gtL6Vt9rk5bW25ErK4r1JOyc.jpg', '2023-07-20 13:39:22', '2023-07-20 13:39:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Huỳnh khánh hưng', 'khanhhung89890@gmail.com', NULL, '$2y$10$Cp9avxdTaUETcLHiIokPG.othqw4G.sEDk3tIe/VEzpB4Ld0iXYxG', '/files/PeYKOEiWDO370LlpUuia7DrAUz15Ers5MFlwQgkB.jpg', NULL, '2023-07-18 14:50:22', '2023-07-18 14:51:53'),
(8, 'Huỳnh khánh hùng', 'khanhhung8@gmail.com', NULL, '$2y$10$qsrigTWYr5oE23..oo/flex2X7F/K0uVxftMaKbuR89iJDvh0naEO', '/files/d9QqjRBy8A2zU7Ozp7jxLN5gjYoXBYOjk3ALztum.jpg', NULL, '2023-07-22 06:23:18', '2023-07-22 06:50:14'),
(9, 'Huỳnh khánh hùng', 'khanhhung09102003@gmail.com', NULL, '$2y$10$nFQGOkvwkR1JN9hyld1YdORbWsIPgCa040P9P/E4Sjp1vEQE72TI2', NULL, NULL, '2023-07-27 07:21:47', '2023-07-27 07:21:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bang_gias`
--
ALTER TABLE `bang_gias`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cau_hinhs`
--
ALTER TABLE `cau_hinhs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cau_hinhs_email_unique` (`email`);

--
-- Chỉ mục cho bảng `danh_mucs`
--
ALTER TABLE `danh_mucs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dong_gops`
--
ALTER TABLE `dong_gops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dong_gops_id_users` (`id_users`),
  ADD KEY `id_dong_gops_id_san_phams` (`id_san_phams`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mua_san_phams`
--
ALTER TABLE `mua_san_phams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mua_san_pham_id_san_pham` (`id_san_pham`),
  ADD KEY `id_mua_san_pham_id_users` (`id_users`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_san_phams_id_nguoi_tao` (`id_nguoi_tao`),
  ADD KEY `idx_san_phams_id_danh_muc` (`id_danh_muc`);

--
-- Chỉ mục cho bảng `tin_tucs`
--
ALTER TABLE `tin_tucs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bang_gias`
--
ALTER TABLE `bang_gias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cau_hinhs`
--
ALTER TABLE `cau_hinhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `danh_mucs`
--
ALTER TABLE `danh_mucs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dong_gops`
--
ALTER TABLE `dong_gops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `helps`
--
ALTER TABLE `helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT cho bảng `mua_san_phams`
--
ALTER TABLE `mua_san_phams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tin_tucs`
--
ALTER TABLE `tin_tucs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
