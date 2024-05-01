-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 01 2024 г., 09:51
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nj`
--

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `age` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `time` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title`, `price`, `img`, `desc`, `age`, `date`, `addres`, `time`, `type`) VALUES
(13, 'UFC24: Новы сезон', 20000, 'мимваиваи_Монтажная_область_1.png', 'Lorem rebum amet tempor accumsan molestie. Et sea dolor te commodo nibh. Consetetur nonumy ea amet eos diam ullamcorper sea et vero autem diam eros consetetur et. Erat facilisi tempor lorem eu no molestie labore ut sadipscing elitr euismod magna. Sit rebum invidunt no luptatum. Vero dolores invidunt ipsum lorem diam sadipscing invidunt diam. Amet doming et erat lobortis tempor veniam eos exerci invidunt et.\r\n\r\nDiam enim ut sed kasd elitr wisi lorem duo iriure nonummy amet stet odio labore lorem elitr amet dolore. Molestie dolor eum mazim sit ea autem dolores sit vel ea sit kasd takimata nulla accusam justo clita. Consetetur nonumy qui voluptua lorem vero erat doming sit. Ut ipsum invidunt at iusto doming elitr tempor dolore diam duo sed. Lorem lorem magna nibh nonumy sanctus sanctus rebum aliquyam magna esse eirmod aliquam rebum accusam sit. Nisl esse ea tempor sit ad erat in takimata dolore sanctus labore facilisis ut diam dolore lorem magna. Ex dolor vero hendrerit tincidunt et hendrerit eos dolores lorem. Nonummy accusam sed eum.', '21', '2024-07-27', 'Алтынсарина 115/9', '22:43', 'sport'),
(14, 'FIFA24: Киберспорт по футболу', 10000, 'укп_Монтажная_область_1.png', 'Lorem rebum amet tempor accumsan molestie. Et sea dolor te commodo nibh. Consetetur nonumy ea amet eos diam ullamcorper sea et vero autem diam eros consetetur et. Erat facilisi tempor lorem eu no molestie labore ut sadipscing elitr euismod magna. Sit rebum invidunt no luptatum. Vero dolores invidunt ipsum lorem diam sadipscing invidunt diam. Amet doming et erat lobortis tempor veniam eos exerci invidunt et.\r\n\r\nDiam enim ut sed kasd elitr wisi lorem duo iriure nonummy amet stet odio labore lorem elitr amet dolore. Molestie dolor eum mazim sit ea autem dolores sit vel ea sit kasd takimata nulla accusam justo clita. Consetetur nonumy qui voluptua lorem vero erat doming sit. Ut ipsum invidunt at iusto doming elitr tempor dolore diam duo sed. Lorem lorem magna nibh nonumy sanctus sanctus rebum aliquyam magna esse eirmod aliquam rebum accusam sit. Nisl esse ea tempor sit ad erat in takimata dolore sanctus labore facilisis ut diam dolore lorem magna. Ex dolor vero hendrerit tincidunt et hendrerit eos dolores lorem. Nonummy accusam sed eum.', '7', '2024-07-05', 'ул. Абая 113/2а', '19:49', 'sport'),
(15, 'MARVEL: Финал', 4000, 'фыв_Монтажная_область_1.png', 'Lorem rebum amet tempor accumsan molestie. Et sea dolor te commodo nibh. Consetetur nonumy ea amet eos diam ullamcorper sea et vero autem diam eros consetetur et. Erat facilisi tempor lorem eu no molestie labore ut sadipscing elitr euismod magna. Sit rebum invidunt no luptatum. Vero dolores invidunt ipsum lorem diam sadipscing invidunt diam. Amet doming et erat lobortis tempor veniam eos exerci invidunt et.\r\n\r\nDiam enim ut sed kasd elitr wisi lorem duo iriure nonummy amet stet odio labore lorem elitr amet dolore. Molestie dolor eum mazim sit ea autem dolores sit vel ea sit kasd takimata nulla accusam justo clita. Consetetur nonumy qui voluptua lorem vero erat doming sit. Ut ipsum invidunt at iusto doming elitr tempor dolore diam duo sed. Lorem lorem magna nibh nonumy sanctus sanctus rebum aliquyam magna esse eirmod aliquam rebum accusam sit. Nisl esse ea tempor sit ad erat in takimata dolore sanctus labore facilisis ut diam dolore lorem magna. Ex dolor vero hendrerit tincidunt et hendrerit eos dolores lorem. Nonummy accusam sed eum.', '12', '2024-05-18', 'Назарбаева 68/4', '12:00', 'film'),
(16, 'Новый эпизод: Анчартед', 5000, 'тьнек_Монтажная_область_1.png', 'Lorem rebum amet tempor accumsan molestie. Et sea dolor te commodo nibh. Consetetur nonumy ea amet eos diam ullamcorper sea et vero autem diam eros consetetur et. Erat facilisi tempor lorem eu no molestie labore ut sadipscing elitr euismod magna. Sit rebum invidunt no luptatum. Vero dolores invidunt ipsum lorem diam sadipscing invidunt diam. Amet doming et erat lobortis tempor veniam eos exerci invidunt et.\r\n\r\nDiam enim ut sed kasd elitr wisi lorem duo iriure nonummy amet stet odio labore lorem elitr amet dolore. Molestie dolor eum mazim sit ea autem dolores sit vel ea sit kasd takimata nulla accusam justo clita. Consetetur nonumy qui voluptua lorem vero erat doming sit. Ut ipsum invidunt at iusto doming elitr tempor dolore diam duo sed. Lorem lorem magna nibh nonumy sanctus sanctus rebum aliquyam magna esse eirmod aliquam rebum accusam sit. Nisl esse ea tempor sit ad erat in takimata dolore sanctus labore facilisis ut diam dolore lorem magna. Ex dolor vero hendrerit tincidunt et hendrerit eos dolores lorem. Nonummy accusam sed eum.', '16', '2024-06-22', 'Lumera Абылай-хана 114 ', '23:40', 'film'),
(17, 'Мы тут! Скриптонит', 14000, 'Безымянный-2_Монтажная_область_1.png', 'Lorem rebum amet tempor accumsan molestie. Et sea dolor te commodo nibh. Consetetur nonumy ea amet eos diam ullamcorper sea et vero autem diam eros consetetur et. Erat facilisi tempor lorem eu no molestie labore ut sadipscing elitr euismod magna. Sit rebum invidunt no luptatum. Vero dolores invidunt ipsum lorem diam sadipscing invidunt diam. Amet doming et erat lobortis tempor veniam eos exerci invidunt et.\r\n\r\nDiam enim ut sed kasd elitr wisi lorem duo iriure nonummy amet stet odio labore lorem elitr amet dolore. Molestie dolor eum mazim sit ea autem dolores sit vel ea sit kasd takimata nulla accusam justo clita. Consetetur nonumy qui voluptua lorem vero erat doming sit. Ut ipsum invidunt at iusto doming elitr tempor dolore diam duo sed. Lorem lorem magna nibh nonumy sanctus sanctus rebum aliquyam magna esse eirmod aliquam rebum accusam sit. Nisl esse ea tempor sit ad erat in takimata dolore sanctus labore facilisis ut diam dolore lorem magna. Ex dolor vero hendrerit tincidunt et hendrerit eos dolores lorem. Nonummy accusam sed eum.', '18', '2024-06-23', 'Дворец республики, Достык 154', '20:00', 'concert'),
(18, 'Меломан: HALLYWOOD', 20000, 'вароьнбгшнгпншлнб_Монтажная_область_1.png', 'Lorem rebum amet tempor accumsan molestie. Et sea dolor te commodo nibh. Consetetur nonumy ea amet eos diam ullamcorper sea et vero autem diam eros consetetur et. Erat facilisi tempor lorem eu no molestie labore ut sadipscing elitr euismod magna. Sit rebum invidunt no luptatum. Vero dolores invidunt ipsum lorem diam sadipscing invidunt diam. Amet doming et erat lobortis tempor veniam eos exerci invidunt et.\r\n\r\nDiam enim ut sed kasd elitr wisi lorem duo iriure nonummy amet stet odio labore lorem elitr amet dolore. Molestie dolor eum mazim sit ea autem dolores sit vel ea sit kasd takimata nulla accusam justo clita. Consetetur nonumy qui voluptua lorem vero erat doming sit. Ut ipsum invidunt at iusto doming elitr tempor dolore diam duo sed. Lorem lorem magna nibh nonumy sanctus sanctus rebum aliquyam magna esse eirmod aliquam rebum accusam sit. Nisl esse ea tempor sit ad erat in takimata dolore sanctus labore facilisis ut diam dolore lorem magna. Ex dolor vero hendrerit tincidunt et hendrerit eos dolores lorem. Nonummy accusam sed eum.', '21', '2024-06-14', 'Толе би 158', '20:50', 'concert');

-- --------------------------------------------------------

--
-- Структура таблицы `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `followers`
--

INSERT INTO `followers` (`id`, `email`) VALUES
(1, 'adil19032004@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
