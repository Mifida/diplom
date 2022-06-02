-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 02 2022 г., 17:27
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mybd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `data`, `status`) VALUES
(20, '1_Классификация_КС.pdf', '../files/1_Классификация_КС.pdf', '2022-05-30 12:59:24', 'Опубликовано'),
(21, '2_Сетевое оборудование.pdf', '../files/2_Сетевое оборудование.pdf', '2022-05-30 12:59:33', 'Опубликовано'),
(22, '3_OSI.pdf', '../files/3_OSI.pdf', '2022-05-30 12:59:41', 'Опубликовано'),
(23, '4_Топология.pdf', '../files/4_Топология.pdf', '2022-05-30 12:59:52', 'Опубликовано'),
(24, '5_IP.pdf', '../files/5_IP.pdf', '2022-05-30 13:00:00', 'Опубликовано');

-- --------------------------------------------------------

--
-- Структура таблицы `teorya`
--

CREATE TABLE `teorya` (
  `id_teory` int(11) NOT NULL,
  `teory_name` varchar(255) DEFAULT NULL,
  `path` text NOT NULL,
  `path2` text NOT NULL,
  `path3` varchar(255) NOT NULL,
  `path4` varchar(255) NOT NULL,
  `views` int(12) NOT NULL,
  `views2` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `teorya`
--

INSERT INTO `teorya` (`id_teory`, `teory_name`, `path`, `path2`, `path3`, `path4`, `views`, `views2`) VALUES
(1, '1. Классификация КС', 'http://localhost/diplom/html/teory_2.php', 'http://localhost/diplom/html/test_2.php', 'http://localhost/diplom/html_b/teory_2_.php', 'http://localhost/diplom/html_b/test_2_.php', 20, 19),
(2, '2. Сетевое оборудование', 'http://localhost/diplom/html/teory_3.php', 'http://localhost/diplom/html/test_3.php', 'http://localhost/diplom/html_b/teory_3_.php', 'http://localhost/diplom/html_b/test_3_.php', 3, 2),
(3, '3. Модель OSI', 'http://localhost/diplom/html/teory_4.php', 'http://localhost/diplom/html/test_4.php', 'http://localhost/diplom/html_b/teory_4_.php', 'http://localhost/diplom/html_b/test_4_.php', 5, 3),
(4, '4. Топология КС', 'http://localhost/diplom/html/teory_5.php', 'http://localhost/diplom/html/test_5.php', 'http://localhost/diplom/html_b/teory_5_.php', 'http://localhost/diplom/html_b/test_5_.php', 3, 3),
(5, '5. IP адрес', 'http://localhost/diplom/html/teory_6.php', 'http://localhost/diplom/html/test_6.php', 'http://localhost/diplom/html_b/teory_6_.php', 'http://localhost/diplom/html_b/test_6.php', 3, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(36) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `role`) VALUES
(0, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0'),
(1, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '1'),
(2, 'Teki', 'Pune', '974eccf282cd2b1351f22cfd8b346234', '1'),
(23, 'ff', 'ff', '633de4b0c14ca52ea2432a3c8a5c4c31', ''),
(24, 'ff', 'ff', '633de4b0c14ca52ea2432a3c8a5c4c31', ''),
(25, 'ff', 'ff', '633de4b0c14ca52ea2432a3c8a5c4c31', ''),
(26, 'ff', 'ff', '633de4b0c14ca52ea2432a3c8a5c4c31', ''),
(27, '5', '5', 'e4da3b7fbbce2345d7772b0674a318d5', ''),
(28, '', '', '', ''),
(29, 'teki', 'varda', '471bc1265ac8801a9510cfa4af99f904', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teorya`
--
ALTER TABLE `teorya`
  ADD PRIMARY KEY (`id_teory`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
