-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2021 lúc 04:57 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `achievement`
--

CREATE TABLE `achievement` (
  `ID` int(11) NOT NULL,
  `NAME_ ACHIEVEMENT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `DESCRIPTION` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `achievement`
--

INSERT INTO `achievement` (`ID`, `NAME_ ACHIEVEMENT`, `DATE`, `DESCRIPTION`) VALUES
(1, '\r\nscholarship of Le Van Kiem and his family', '2020-12-10', '\r\nThis is a scholarship for students with difficult circumstances and with great effort in studying, having satisfactory grades and training points.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` int(11) NOT NULL,
  `COMMENT` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`NAME`, `EMAIL`, `PHONE`, `COMMENT`, `ID`) VALUES
('aaaa', 'hung321chiengden@gmail.com', 0, 'sdasdasdasd', 1),
('Hưng', 'hung321chiengden@gmail.com', 0, 'test', 2),
('', '', 0, '', 3),
('đạt', 'hung321chiengden@gmail.com', 852820403, 'aaaaaaaaaaaaaaaaaaaaaaa', 4),
('long', 'hung321chiengden@gmail.com', 852820403, 'awww', 5),
('Paracetamol', 'hung321chiengden@gmail.com', 0, 'êrerer', 6),
('đạt', 'hung321chiengden@gmail.com', 852820403, '2222', 7),
('Hưng', 'hung321chiengden@gmail.com', 852820403, 'lancuoi', 8),
('long', 'dotiendat3101@gmail.com', 852820403, 'aloooooo', 9),
('hung888', 'hung321chiengden@gmail.com', 852820403, 'hello', 10),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 11),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 12),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 13),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 14),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 15),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 16),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 17),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 18),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 19),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 20),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 21),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 22),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 23),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 24),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 25),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 26),
('Hưng9999', 'hung321chiengden@gmail.com', 852820403, 'adasdasd', 27),
('đạt', 'hung321chiengden@gmail.com', 852820403, 'aaaaaaaaaaaaaa3333333333333', 28),
('Paracetamol', 'hung321chiengden@gmail.com', 852820403, 'dasd', 29),
('Paracetamol', 'hung321chiengden@gmail.com', 852820403, 'dasd', 30),
('Quàng Quàng Duy', 'hung321chiengden@gmail.com', 852820403, 'er543', 31),
('datlol', 'hung321chiengden@gmail.com', 852820403, '56546', 32),
('datlol', 'hung321chiengden@gmail.com', 852820403, '56546', 33),
('datlol', 'hung321chiengden@gmail.com', 852820403, '56546', 34),
('Paracetamol', 'hung321chiengden@gmail.com', 852820403, '765', 35),
('hung', 'hung321chiengden@gmail.com', 852820403, '657567567567', 36),
('nam', 'hung321chiengden@gmail.com', 852820403, 'hihihi', 37),
('ádasd', 'hung321chiengden@gmail.com', 852820403, '4545', 38),
('ádasd', 'hung321chiengden@gmail.com', 852820403, '4545', 39),
('Paracetamol', 'hung321chiengden@gmail.com', 852820403, '9', 40),
('', '', 0, '', 41),
('Hưng', 'hung321chiengden@gmail.com', 852820403, 'r3', 42),
('đạt', 'hung321chiengden@gmail.com', 564, 'etry', 43),
('hung', 'hung321chiengden@gmail.com', 852820403, 'dsa', 44),
('ádasd', 'hung321chiengden@gmail.com', 852820403, 'dsf', 45),
('Hưng', 'hung321chiengden@gmail.com', 852820403, '567', 46),
('Hưng', 'hung321chiengden@gmail.com', 852820403, '567', 47),
('Paracetamol', 'hung321chiengden@gmail.com', 852820403, '354', 48),
('Paracetamol', 'hung321chiengden@gmail.com', 852820403, '354', 49),
('đạt', 'hung321chiengden@gmail.com', 852820403, 'hihihi', 50),
('đạt', 'hung321chiengden@gmail.com', 852820403, '8', 51),
('Hưng', 'hung321chiengden@gmail.com', 852820403, 'dasd', 52),
('Quàng Quàng Duy', 'hung321chiengden@gmail.com', 852820403, 'ewr', 53),
('hung0200', 'hung321chiengden@gmail.com', 852820403, '456', 54);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `educaton`
--

CREATE TABLE `educaton` (
  `ID` int(11) NOT NULL,
  `SCHOOL'S_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CERTIFICATE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  `DESCRIPTION` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `educaton`
--

INSERT INTO `educaton` (`ID`, `SCHOOL'S_NAME`, `CERTIFICATE`, `DATE`, `DESCRIPTION`) VALUES
(1, 'chieng den primary school', '\r\nexcellent student', '2010-05-07', ''),
(1, '\r\nchiềng đen junior high school', 'excellent student', '2015-06-06', ''),
(1, 'nguyễn du high school', 'excellent student', '2018-06-12', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `experience`
--

CREATE TABLE `experience` (
  `ID` int(11) NOT NULL,
  `NAME_COMPANY` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPTION` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `TIME` date NOT NULL,
  `POSITION` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ACHIEVEMENTS` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `experience`
--

INSERT INTO `experience` (`ID`, `NAME_COMPANY`, `DESCRIPTION`, `TIME`, `POSITION`, `ACHIEVEMENTS`) VALUES
(1, 'hưng thị phát company', '\r\nproficient in using Microsoft Excel 2010', '2020-11-05', '\r\nofficer', '\r\nemployee of the month');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hobbit`
--

CREATE TABLE `hobbit` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPTION` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hobbit`
--

INSERT INTO `hobbit` (`ID`, `NAME`, `DESCRIPTION`) VALUES
(1, 'play video game', '\r\n\r\nOutside of school, I often play games for fun, it helps me increase my reflexes and concentration.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(100) NOT NULL,
  `sub` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `name`, `password`, `sub`) VALUES
(2, 'hung0200', 123456, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` int(11) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `DESCRIPTION` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`ID`, `NAME`, `ADDRESS`, `EMAIL`, `PHONE`, `DATE_OF_BIRTH`, `DESCRIPTION`) VALUES
(1, 'Quàng Quàng Duy9', '175 tây sơnfgdfy', 'hung321chiengden@gmail.com', 2147483647, '2000-10-12', 'hihihihihh'),
(3, 'Đỗ Tiến Đạt', 'Quảng Ninh city', 'tiendat@gmail.com', 123456789, '2000-01-31', 'heloo my name í dat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `programming_skills`
--

CREATE TABLE `programming_skills` (
  `ID` int(11) NOT NULL,
  `NAME_skill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPTION` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `programming_skills`
--

INSERT INTO `programming_skills` (`ID`, `NAME_skill`, `DESCRIPTION`) VALUES
(1, 'Application Development', ''),
(1, 'Service-Oriented Architecture', ''),
(1, 'Enterprise Implementations', ''),
(1, 'Software Development Lifecycle', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `NAME_PROJECTS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FIELD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPTION` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`ID`, `NAME_PROJECTS`, `FIELD`, `DESCRIPTION`) VALUES
(1, '\r\nDormitory management software', '\r\ndesign software', '\r\nThis is a project to complete my advanced programming course');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skill`
--

CREATE TABLE `skill` (
  `ID` int(11) NOT NULL,
  `SKILL` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `PROFICIENCY` int(100) NOT NULL,
  `DESCRIPTION` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skill`
--

INSERT INTO `skill` (`ID`, `SKILL`, `PROFICIENCY`, `DESCRIPTION`) VALUES
(1, 'HTML', 50, ''),
(1, 'CSS', 40, ''),
(1, 'JS', 30, ''),
(1, 'SQL', 70, ''),
(1, 'TEAM WORK', 60, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testimonials`
--

CREATE TABLE `testimonials` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `COMMENT` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPTION` varchar(3000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `testimonials`
--

INSERT INTO `testimonials` (`ID`, `NAME`, `COMMENT`, `DESCRIPTION`) VALUES
(1, 'Ths.Kieu Tuan Dung', 'hihihih', '\r\nHe is my favorite teacher, the reason is because his style is so young');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `achievement`
--
ALTER TABLE `achievement`
  ADD KEY `id_member4` (`ID`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `educaton`
--
ALTER TABLE `educaton`
  ADD KEY `id_member2` (`ID`);

--
-- Chỉ mục cho bảng `experience`
--
ALTER TABLE `experience`
  ADD KEY `id_member5` (`ID`);

--
-- Chỉ mục cho bảng `hobbit`
--
ALTER TABLE `hobbit`
  ADD KEY `id_member7` (`ID`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `programming_skills`
--
ALTER TABLE `programming_skills`
  ADD KEY `id_member9` (`ID`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD KEY `id_member3` (`ID`);

--
-- Chỉ mục cho bảng `skill`
--
ALTER TABLE `skill`
  ADD KEY `id_member` (`ID`);

--
-- Chỉ mục cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD KEY `id_member1` (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `id_member4` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Các ràng buộc cho bảng `educaton`
--
ALTER TABLE `educaton`
  ADD CONSTRAINT `id_member2` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Các ràng buộc cho bảng `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `id_member5` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Các ràng buộc cho bảng `hobbit`
--
ALTER TABLE `hobbit`
  ADD CONSTRAINT `id_member7` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Các ràng buộc cho bảng `programming_skills`
--
ALTER TABLE `programming_skills`
  ADD CONSTRAINT `id_member9` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Các ràng buộc cho bảng `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `id_member3` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Các ràng buộc cho bảng `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `id_member` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Các ràng buộc cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `id_member1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
