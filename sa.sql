-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 05 月 29 日 03:17
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sa`
--

-- --------------------------------------------------------

--
-- 資料表結構 `error`
--

CREATE TABLE `error` (
  `error_num` varchar(4) NOT NULL,
  `account` varchar(40) CHARACTER SET utf8 NOT NULL,
  `ven_num` int(4) NOT NULL,
  `error_words` varchar(10) NOT NULL,
  `error_pic` varchar(4) DEFAULT NULL,
  `error_date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `favorite`
--

CREATE TABLE `favorite` (
  `account` varchar(40) CHARACTER SET utf8 NOT NULL,
  `ven_num` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `favorite`
--

INSERT INTO `favorite` (`account`, `ven_num`) VALUES
('0430shinyu@gmail.com', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `information`
--

CREATE TABLE `information` (
  `ven_num` int(4) NOT NULL,
  `pro_name` varchar(20) NOT NULL,
  `price` int(4) NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `information`
--

INSERT INTO `information` (`ven_num`, `pro_name`, `price`, `amount`) VALUES
(1, '可口可樂zero', 20, 20),
(1, '可樂果原味', 30, 30),
(1, '悅氏礦泉水', 20, 20),
(1, '愛之味健康油切分解茶', 20, 20),
(1, '樂事原味', 30, 30),
(1, '每朝健康雙纖綠茶', 20, 20),
(1, '茶裏王日式綠茶無糖', 20, 20),
(1, '雪碧', 20, 20),
(2, '可口可樂zero', 20, 20),
(2, '可樂果原味', 30, 30),
(2, '悅氏礦泉水', 20, 20),
(2, '愛之味健康油切分解茶', 20, 20),
(2, '樂事原味', 30, 30),
(2, '每朝健康雙纖綠茶', 20, 20),
(2, '茶裏王日式綠茶無糖', 20, 20),
(2, '雪碧', 20, 20),
(3, '可口可樂zero', 20, 20),
(3, '可樂果原味', 30, 30),
(3, '悅氏礦泉水', 20, 20),
(3, '愛之味健康油切分解茶', 20, 20),
(3, '樂事原味', 30, 30),
(3, '每朝健康雙纖綠茶', 20, 20),
(3, '茶裏王日式綠茶無糖', 20, 20),
(3, '雪碧', 20, 20),
(4, '可口可樂zero', 20, 20),
(4, '可樂果原味', 30, 30),
(4, '悅氏礦泉水', 20, 20),
(4, '愛之味健康油切分解茶', 20, 20),
(4, '樂事原味', 30, 30),
(4, '每朝健康雙纖綠茶', 20, 20),
(4, '茶裏王日式綠茶無糖', 20, 20),
(4, '雪碧', 20, 20),
(5, '卡迪那德州薯條茄汁', 30, 30),
(5, '可口可樂zero', 20, 20),
(5, '悅氏礦泉水', 20, 20),
(5, '愛之味健康油切分解茶', 20, 20),
(5, '每朝健康雙纖綠茶', 20, 20),
(5, '波的多蚵仔煎洋芋片', 30, 30),
(5, '茶裏王日式綠茶無糖', 20, 20),
(5, '雪碧', 20, 20),
(6, '卡迪那德州薯條茄汁', 30, 30),
(6, '可口可樂zero', 20, 20),
(6, '悅氏礦泉水', 20, 20),
(6, '愛之味健康油切分解茶', 20, 20),
(6, '每朝健康雙纖綠茶', 20, 20),
(6, '波的多蚵仔煎洋芋片', 30, 30),
(6, '茶裏王日式綠茶無糖', 20, 20),
(6, '雪碧', 20, 20),
(7, '卡迪那德州薯條茄汁', 30, 30),
(7, '可口可樂zero', 20, 20),
(7, '悅氏礦泉水', 20, 20),
(7, '愛之味健康油切分解茶', 20, 20),
(7, '每朝健康雙纖綠茶', 20, 20),
(7, '波的多蚵仔煎洋芋片', 30, 30),
(7, '茶裏王日式綠茶無糖', 20, 20),
(7, '雪碧', 20, 20),
(8, '卡迪那德州薯條茄汁', 30, 30),
(8, '可口可樂zero', 20, 20),
(8, '悅氏礦泉水', 20, 20),
(8, '愛之味健康油切分解茶', 20, 20),
(8, '每朝健康雙纖綠茶', 20, 20),
(8, '波的多蚵仔煎洋芋片', 30, 30),
(8, '茶裏王日式綠茶無糖', 20, 20),
(8, '雪碧', 20, 20),
(9, '卡迪那德州薯條茄汁', 30, 30),
(9, '可口可樂zero', 20, 20),
(9, '悅氏礦泉水', 20, 20),
(9, '愛之味健康油切分解茶', 20, 20),
(9, '每朝健康雙纖綠茶', 20, 20),
(9, '波的多蚵仔煎洋芋片', 30, 30),
(9, '茶裏王日式綠茶無糖', 20, 20),
(9, '雪碧', 20, 20),
(10, '卡迪那德州薯條茄汁', 30, 30),
(10, '可口可樂zero', 20, 20),
(10, '悅氏礦泉水', 20, 20),
(10, '愛之味健康油切分解茶', 20, 20),
(10, '每朝健康雙纖綠茶', 20, 20),
(10, '波的多蚵仔煎洋芋片', 30, 30),
(10, '茶裏王日式綠茶無糖', 20, 20),
(10, '雪碧', 20, 20);

-- --------------------------------------------------------

--
-- 資料表結構 `machine`
--

CREATE TABLE `machine` (
  `ven_num` int(4) NOT NULL,
  `ven_note` varchar(50) DEFAULT NULL,
  `location_Latitude` float(10,6) NOT NULL,
  `location_Longitude` float(10,6) NOT NULL,
  `error` char(1) NOT NULL DEFAULT '0',
  `error_num` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `machine`
--

INSERT INTO `machine` (`ven_num`, `ven_note`, `location_Latitude`, `location_Longitude`, `error`, `error_num`) VALUES
(1, '輔大中美堂東側門口旁', 25.038000, 121.431931, '0', 0),
(2, '輔大利瑪竇大樓左側樓梯轉角', 25.037342, 121.430893, '0', 0),
(3, '輔大潛水艇天空前', 25.036646, 121.430534, '0', 0),
(4, '輔大淨心堂門口左側', 25.036646, 121.430534, '0', 0),
(5, '輔大國璽樓三樓301教室旁', 25.038759, 121.431427, '0', 0),
(6, '輔大法園籃球場公共廁所旁', 25.036060, 121.429153, '0', 0),
(7, '輔大濟時樓一樓門口右側', 25.035938, 121.430466, '0', 0),
(8, '輔大創設中心一樓櫃檯旁', 25.034948, 121.433884, '0', 0),
(9, '輔大診所', 25.038935, 121.431145, '0', 0),
(10, '輔大食科冰', 25.035078, 121.434372, '0', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `picture`
--

CREATE TABLE `picture` (
  `pro_name` varchar(20) NOT NULL,
  `pro_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `picture`
--

INSERT INTO `picture` (`pro_name`, `pro_pic`) VALUES
('卡迪那德州薯條茄汁', 'img/product-img/卡迪那德州薯條茄汁.jpeg'),
('可口可樂zero', 'img/product-img/可口可樂zero.jpeg'),
('可樂果原味', 'img/product-img/可樂果原味.jpeg'),
('味丹竹炭礦泉水', 'img/product-img/味丹竹炭礦泉水.jpeg'),
('悅氏礦泉水', 'img/product-img/悅氏礦泉水.jpeg'),
('愛之味健康油切分解茶', 'img/product-img/愛之味健康油切分解茶.jpeg'),
('樂事原味', 'img/product-img/樂事原味.jpeg'),
('每朝健康雙纖綠茶', 'img/product-img/每朝健康雙纖綠茶.jpeg'),
('波的多蚵仔煎洋芋片', 'img/product-img/波的多蚵仔煎洋芋片.jpeg'),
('茶裏王日式綠茶無糖', 'img/product-img/茶裏王日式綠茶無糖.jpeg'),
('雪碧', 'img/product-img/雪碧.jpeg');

-- --------------------------------------------------------

--
-- 資料表結構 `sort`
--

CREATE TABLE `sort` (
  `pro_name` varchar(40) NOT NULL,
  `sort_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `sort`
--

INSERT INTO `sort` (`pro_name`, `sort_name`) VALUES
('卡迪那德州薯條茄汁', '餅乾'),
('可口可樂zero', '汽水'),
('可口可樂zero', '無糖'),
('可口可樂zero', '碳酸飲料'),
('可口可樂zero', '飲料'),
('可樂果原味', '餅乾'),
('味丹竹炭礦泉水', '無糖'),
('味丹竹炭礦泉水', '礦泉水'),
('味丹竹炭礦泉水', '飲料'),
('悅氏礦泉水', '無糖'),
('悅氏礦泉水', '礦泉水'),
('悅氏礦泉水', '飲料'),
('愛之味健康油切分解茶', '無糖'),
('愛之味健康油切分解茶', '茶'),
('愛之味健康油切分解茶', '飲料'),
('樂事原味', '餅乾'),
('每朝健康雙纖綠茶', '無糖'),
('每朝健康雙纖綠茶', '綠茶'),
('每朝健康雙纖綠茶', '茶'),
('每朝健康雙纖綠茶', '飲料'),
('波的多蚵仔煎洋芋片', '餅乾'),
('茶裏王日式綠茶無糖', '無糖'),
('茶裏王日式綠茶無糖', '綠茶'),
('茶裏王日式綠茶無糖', '茶'),
('茶裏王日式綠茶無糖', '飲料'),
('雪碧', '汽水'),
('雪碧', '無糖'),
('雪碧', '碳酸飲料'),
('雪碧', '飲料');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `account` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `gender` char(2) NOT NULL,
  `job` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`account`, `password`, `name`, `gender`, `job`) VALUES
('0430shinyu@gmail.com', '123', '蔡蔡', '女', '學生'),
('jan0123211@gmail.com', '123', 'yeh', '男', '學生'),
('m22104416@gmail.com', '123', '小可愛', '女', '學生'),
('stitch980827@gmail.com', '123', '鈺青', '女', '學生'),
('tty09183@gmail.com', '123', 'Andy', '男', '學生');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `error`
--
ALTER TABLE `error`
  ADD PRIMARY KEY (`error_num`),
  ADD KEY `account` (`account`),
  ADD KEY `ven_num` (`ven_num`);

--
-- 資料表索引 `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`account`,`ven_num`),
  ADD KEY `ven_num` (`ven_num`);

--
-- 資料表索引 `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ven_num`,`pro_name`);

--
-- 資料表索引 `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`ven_num`);

--
-- 資料表索引 `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pro_name`);

--
-- 資料表索引 `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`pro_name`,`sort_name`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`account`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `machine`
--
ALTER TABLE `machine`
  MODIFY `ven_num` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `error`
--
ALTER TABLE `error`
  ADD CONSTRAINT `error_ibfk_1` FOREIGN KEY (`account`) REFERENCES `user` (`account`),
  ADD CONSTRAINT `error_ibfk_2` FOREIGN KEY (`ven_num`) REFERENCES `machine` (`ven_num`);

--
-- 資料表的限制式 `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`account`) REFERENCES `user` (`account`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`ven_num`) REFERENCES `machine` (`ven_num`);

--
-- 資料表的限制式 `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_ibfk_1` FOREIGN KEY (`ven_num`) REFERENCES `machine` (`ven_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
