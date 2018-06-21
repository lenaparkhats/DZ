-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2018 г., 17:20
-- Версия сервера: 5.6.38
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `LF`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_user` varchar(250) NOT NULL,
  `street` varchar(250) NOT NULL,
  `home` varchar(250) NOT NULL,
  `part` varchar(250) DEFAULT NULL,
  `appt` varchar(250) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `name_user`, `street`, `home`, `part`, `appt`, `floor`, `comment`) VALUES
(54, 31, 'Лена', 'zsd;ih', '2', '4', '6', 1, ''),
(55, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(56, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(57, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(58, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(59, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(60, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(61, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(62, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(63, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(64, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(65, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(66, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(67, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(68, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(69, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(70, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(71, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(72, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(73, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(74, 31, 'Лена', 'ghb', '4', '', '', 0, ''),
(75, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(76, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(77, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(78, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(79, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(80, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(81, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(82, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(83, 32, 'Паша', 'ghb', '4', '', '', 0, ''),
(84, 32, 'Паша', 'ghb', '4', '', '', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` int(11) NOT NULL,
  `street` varchar(250) NOT NULL,
  `home` varchar(250) NOT NULL,
  `part` varchar(250) DEFAULT NULL,
  `appt` varchar(250) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `comment` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `Name`, `email`, `tel`, `street`, `home`, `part`, `appt`, `floor`, `comment`) VALUES
(31, 'Лена', 'El@mail.ru', 22, 'zsd;ih', '2', '4', '6', 1, ''),
(32, 'Паша', 'Pv@mail.ru', 2250, 'ghb', '4', '', '', 0, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
