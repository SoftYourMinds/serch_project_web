-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3305
-- Время создания: Июн 12 2021 г., 12:20
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `projects`
--

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `per` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `hoursec` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `progress` int(11) NOT NULL,
  `ind` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prior` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `name`, `descr`, `per`, `hour`, `hoursec`, `start`, `end`, `progress`, `ind`, `prior`) VALUES
(1, 'Simple project', 'Це мій перший проєкт! <br><br>\r\nРозробити стартап та включити до нього фінансування<br><br>\r\nТакож, головне завдання цього проєкту - віднайти користувачів, що бажають користуватися цим<br><br>\r\nТа не забути про звичайні мови програмування html, js, css та інші!', 50, 780, 422, '2021-04-07', '2021-05-31', 76, 'yellow', 'Високий'),
(2, 'Простий проєкт', 'Це мій другий проєкт!\r\n<br><br>\r\nТакож підтримується код html!', 65, 100, 83, '2021-05-20', '2021-05-26', 57, 'green', 'Низький'),
(3, 'Дивний проєкт', 'Знання - це сила!\r\n<br><br>\r\nТакож підтримується код html!', 85, 100, 83, '2021-05-20', '2021-05-26', 80, 'red', 'Високий'),
(4, 'Звичний проєкт', 'Знання - це сила!\r\n<br><br>\r\nТакож підтримується код html!', 85, 100, 83, '2021-05-20', '2021-05-26', 80, 'yellow', 'Середній');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
