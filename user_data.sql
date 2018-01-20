-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 20 2018 г., 12:08
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `User_data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `hobbies` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `birth_date` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `card` int(11) NOT NULL,
  `personal_info` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `age` varchar(11) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `user_data`
--

INSERT INTO `user_data` (`id`, `login`, `password`, `name`, `lastname`, `sex`, `hobbies`, `birth_date`, `card`, `personal_info`, `category`, `age`) VALUES
(1, '$login', '$password1', '$firstname', '$lastname', '$male', '$hobbies', '0000-00-00', 0, '$about', '', '0'),
(2, '34', 'e369853df766fa44e1ed0ff613f563bd', 'triuretiue', '234234', 'on', '', '0000-00-00', 34, '34', '', '0'),
(3, 'login', '2222', '', '', '', NULL, '', 0, NULL, '', ''),
(5, 'Voland', 'dd26ea8b2bc48d1b4038b99e4fdf612a', 'Sergey', 'Kulik', 'on', 'Books', '0000-00-00', 1111, '1234', '', '0'),
(6, 'Killer', 'a699a3ea1fce47dd9988f5702a287609', 'Voland', 'Larsen', 'man', 'Footbal', '0000-00-00', 1234567890, 'Enemy of the state.', '', '0'),
(11, 'KozaDereza', '37f525e2b6fc3cb4abd882f708ab80eb', 'Dmitro', 'Koza', 'man', 'Box', '14/13/1654', 2147483647, 'I`am KozoMan', '', 'Programming'),
(12, 'ManBat', 'a763a66f984948ca463b081bf0f0e6d0', 'Bruce', 'Wayne', 'man', '', '20/09/1930', 112263, 'I am the...', 'Shaltay-boltay', '30'),
(15, 'login', '2222', '', '', '', NULL, '', 0, NULL, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
