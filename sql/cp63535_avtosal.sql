-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 07 2020 г., 22:03
-- Версия сервера: 5.5.48
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cp63535_avtosal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Avto`
--

CREATE TABLE IF NOT EXISTS `Avto` (
  `id_avto` int(11) NOT NULL,
  `naimen_avto` varchar(30) NOT NULL,
  `god_vipusk` date NOT NULL,
  `power` int(11) NOT NULL,
  `cena` double NOT NULL,
  `description` text,
  `id_model` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `avto_img` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Avto`
--

INSERT INTO `Avto` (`id_avto`, `naimen_avto`, `god_vipusk`, `power`, `cena`, `description`, `id_model`, `id_material`, `id_class`, `avto_img`) VALUES
(1, 'S140', '1996-01-01', 180, 189000.99, 'Новая модель S140 принесла много новшеств серии: помимо более аэродинамичного корпуса, автомобиль имел уникальное двойное остекление, автоматически закрывающиеся двери и багажник, систему контроля климата, которая продолжала работать после отключения двигателя, а также хвостовые антенны, поднимавшиеся при включении заднего хода.', 1, 1, 2, NULL),
(3, 'Vectra A', '1996-01-01', 98, 110000, NULL, 2, 2, 1, NULL),
(4, 'E190', '1996-09-01', 222, 110000, NULL, 1, 1, 1, '/1/1.img');

-- --------------------------------------------------------

--
-- Структура таблицы `Avtosalon`
--

CREATE TABLE IF NOT EXISTS `Avtosalon` (
  `id_salona` int(11) NOT NULL,
  `name_salona` varchar(30) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `num_tel_spravok` varchar(11) NOT NULL,
  `num_tel_menedjer` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Avtosalon`
--

INSERT INTO `Avtosalon` (`id_salona`, `name_salona`, `adres`, `num_tel_spravok`, `num_tel_menedjer`) VALUES
(1, 'Mercedes_Benz', 'ул. Пушкина 55', '81234567891', '63548916348'),
(2, 'Opel', 'ул. Пушкина 60', '81232367891', '25378592734');

-- --------------------------------------------------------

--
-- Структура таблицы `Class`
--

CREATE TABLE IF NOT EXISTS `Class` (
  `id_class` int(11) NOT NULL,
  `tip_class` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Class`
--

INSERT INTO `Class` (`id_class`, `tip_class`) VALUES
(1, 'Норма'),
(2, 'Люкс');

-- --------------------------------------------------------

--
-- Структура таблицы `Color`
--

CREATE TABLE IF NOT EXISTS `Color` (
  `id_color` int(11) NOT NULL,
  `naimen_color` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Klient`
--

CREATE TABLE IF NOT EXISTS `Klient` (
  `id_klient` int(11) NOT NULL,
  `fam_klient` varchar(30) NOT NULL,
  `name_klient` varchar(30) NOT NULL,
  `otch_klient` varchar(30) NOT NULL,
  `num_tel_klient` varchar(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Klient`
--

INSERT INTO `Klient` (`id_klient`, `fam_klient`, `name_klient`, `otch_klient`, `num_tel_klient`, `id_user`) VALUES
(3, 'Шапарыкин', 'Рамиз', 'Тахирович', '89097231937', 1),
(4, 'Купилова', 'Анджелина', 'Викторовна', '84326401953', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Menedjer`
--

CREATE TABLE IF NOT EXISTS `Menedjer` (
  `id_menedjer` int(11) NOT NULL,
  `fam_menedjer` varchar(30) NOT NULL,
  `name_menedjer` varchar(30) NOT NULL,
  `otch_menedjer` varchar(30) NOT NULL,
  `num_tel_menedjer` varchar(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Menedjer`
--

INSERT INTO `Menedjer` (`id_menedjer`, `fam_menedjer`, `name_menedjer`, `otch_menedjer`, `num_tel_menedjer`, `id_user`) VALUES
(1, 'Анатольев', 'Анатолий', 'Анатольевич', '89034716498', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `Model_avto`
--

CREATE TABLE IF NOT EXISTS `Model_avto` (
  `id_model` int(11) NOT NULL,
  `model_name` varchar(30) NOT NULL,
  `proizvod` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Model_avto`
--

INSERT INTO `Model_avto` (`id_model`, `model_name`, `proizvod`) VALUES
(1, 'Mercedes-Benz', 'Германия'),
(2, 'Opel', 'Германия'),
(5, 'Audi', 'Германия'),
(6, 'BMW', 'Германия'),
(9, 'Chevrolet', 'США'),
(12, 'Dodge', 'США'),
(13, 'Porsche', 'Германия'),
(14, 'Volkswagen', 'Германия'),
(15, 'Maybach', 'Германия'),
(16, 'MAN', 'Германия');

-- --------------------------------------------------------

--
-- Структура таблицы `Nakl_prihod`
--

CREATE TABLE IF NOT EXISTS `Nakl_prihod` (
  `id_nakl_prihod` int(11) NOT NULL,
  `id_salona` int(11) NOT NULL,
  `id_menedjer` int(11) NOT NULL,
  `id_avto` int(11) NOT NULL,
  `nom_nakl_prihod` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `kolvo_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Nomer_nakl_prihod`
--

CREATE TABLE IF NOT EXISTS `Nomer_nakl_prihod` (
  `nom_nakl_prihod` int(11) NOT NULL,
  `date_prihod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Nomer_realiz`
--

CREATE TABLE IF NOT EXISTS `Nomer_realiz` (
  `nom_realiz` int(11) NOT NULL,
  `date_realiz` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `nomer_zakaz`
--

CREATE TABLE IF NOT EXISTS `nomer_zakaz` (
  `nom_zakaz` int(11) NOT NULL,
  `date_zakaz` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Realiz`
--

CREATE TABLE IF NOT EXISTS `Realiz` (
  `id_dogovor` int(11) NOT NULL,
  `nom_realiz` int(11) NOT NULL,
  `id_menedjer` int(11) NOT NULL,
  `id_avto` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `cena` double NOT NULL,
  `kolvo` int(11) NOT NULL,
  `id_klient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Salon`
--

CREATE TABLE IF NOT EXISTS `Salon` (
  `id_material` int(11) NOT NULL,
  `material_salona` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Salon`
--

INSERT INTO `Salon` (`id_material`, `material_salona`) VALUES
(1, 'Кожанка'),
(2, 'Велюр');

-- --------------------------------------------------------

--
-- Структура таблицы `test_car`
--

CREATE TABLE IF NOT EXISTS `test_car` (
  `id_test_car` int(11) NOT NULL,
  `id_avto` int(11) NOT NULL,
  `id_salona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `test_car`
--

INSERT INTO `test_car` (`id_test_car`, `id_avto`, `id_salona`) VALUES
(1, 3, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `test_drive_zap`
--

CREATE TABLE IF NOT EXISTS `test_drive_zap` (
  `id_test_zap` int(11) NOT NULL,
  `id_klient` int(11) NOT NULL,
  `id_test_car` int(11) NOT NULL,
  `date_zap` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `test_drive_zap`
--

INSERT INTO `test_drive_zap` (`id_test_zap`, `id_klient`, `id_test_car`, `date_zap`) VALUES
(3, 3, 2, '2020-10-15'),
(4, 4, 1, '2020-10-28');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `lvl_pass` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id_user`, `login`, `password`, `lvl_pass`) VALUES
(1, 'Ramizka', 'qwe', 0),
(2, 'Andjella', '123', 0),
(3, 'Menedjer_1', 'qwer', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Zakaz`
--

CREATE TABLE IF NOT EXISTS `Zakaz` (
  `id_zakaz` int(11) NOT NULL,
  `nom_zakaz` int(11) NOT NULL,
  `id_avto` int(11) NOT NULL,
  `id_klient` int(11) NOT NULL,
  `id_menedjer` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `kolvo_car` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Avto`
--
ALTER TABLE `Avto`
  ADD PRIMARY KEY (`id_avto`),
  ADD KEY `FK_Avto_id_class` (`id_class`),
  ADD KEY `FK_Avto_id_material` (`id_material`),
  ADD KEY `FK_Avto_id_model` (`id_model`);

--
-- Индексы таблицы `Avtosalon`
--
ALTER TABLE `Avtosalon`
  ADD PRIMARY KEY (`id_salona`);

--
-- Индексы таблицы `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`id_class`);

--
-- Индексы таблицы `Color`
--
ALTER TABLE `Color`
  ADD PRIMARY KEY (`id_color`);

--
-- Индексы таблицы `Klient`
--
ALTER TABLE `Klient`
  ADD PRIMARY KEY (`id_klient`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `Menedjer`
--
ALTER TABLE `Menedjer`
  ADD PRIMARY KEY (`id_menedjer`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `Model_avto`
--
ALTER TABLE `Model_avto`
  ADD PRIMARY KEY (`id_model`);

--
-- Индексы таблицы `Nakl_prihod`
--
ALTER TABLE `Nakl_prihod`
  ADD PRIMARY KEY (`id_nakl_prihod`),
  ADD KEY `FK_Nakl_prihod_nom_nakl_prihod` (`nom_nakl_prihod`),
  ADD KEY `FK_Nakl_prihod_id_avto` (`id_avto`),
  ADD KEY `FK_Nakl_prihod_id_color` (`id_color`),
  ADD KEY `FK_Nakl_prihod_id_menedjer` (`id_menedjer`),
  ADD KEY `FK_Nakl_prihod_id_salona` (`id_salona`);

--
-- Индексы таблицы `Nomer_nakl_prihod`
--
ALTER TABLE `Nomer_nakl_prihod`
  ADD PRIMARY KEY (`nom_nakl_prihod`);

--
-- Индексы таблицы `Nomer_realiz`
--
ALTER TABLE `Nomer_realiz`
  ADD PRIMARY KEY (`nom_realiz`);

--
-- Индексы таблицы `nomer_zakaz`
--
ALTER TABLE `nomer_zakaz`
  ADD PRIMARY KEY (`nom_zakaz`);

--
-- Индексы таблицы `Realiz`
--
ALTER TABLE `Realiz`
  ADD PRIMARY KEY (`id_dogovor`),
  ADD KEY `FK_Realiz_id_avto` (`id_avto`),
  ADD KEY `FK_Realiz_id_color` (`id_color`),
  ADD KEY `FK_Realiz_id_klient` (`id_klient`),
  ADD KEY `FK_Realiz_id_menedjer` (`id_menedjer`),
  ADD KEY `FK_Realiz_nom_realiz` (`nom_realiz`);

--
-- Индексы таблицы `Salon`
--
ALTER TABLE `Salon`
  ADD PRIMARY KEY (`id_material`);

--
-- Индексы таблицы `test_car`
--
ALTER TABLE `test_car`
  ADD PRIMARY KEY (`id_test_car`),
  ADD KEY `id_avto` (`id_avto`),
  ADD KEY `id_salona` (`id_salona`);

--
-- Индексы таблицы `test_drive_zap`
--
ALTER TABLE `test_drive_zap`
  ADD PRIMARY KEY (`id_test_zap`),
  ADD KEY `id_test_car` (`id_test_car`),
  ADD KEY `id_klient` (`id_klient`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `Zakaz`
--
ALTER TABLE `Zakaz`
  ADD PRIMARY KEY (`id_zakaz`),
  ADD KEY `FK_Zakaz_id_avto` (`id_avto`),
  ADD KEY `FK_Zakaz_id_color` (`id_color`),
  ADD KEY `FK_Zakaz_id_klient` (`id_klient`),
  ADD KEY `FK_Zakaz_id_menedjer` (`id_menedjer`),
  ADD KEY `FK_Zakaz_nom_zakaz` (`nom_zakaz`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Avto`
--
ALTER TABLE `Avto`
  MODIFY `id_avto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Avtosalon`
--
ALTER TABLE `Avtosalon`
  MODIFY `id_salona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `Class`
--
ALTER TABLE `Class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `Color`
--
ALTER TABLE `Color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Klient`
--
ALTER TABLE `Klient`
  MODIFY `id_klient` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Menedjer`
--
ALTER TABLE `Menedjer`
  MODIFY `id_menedjer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Model_avto`
--
ALTER TABLE `Model_avto`
  MODIFY `id_model` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `Nakl_prihod`
--
ALTER TABLE `Nakl_prihod`
  MODIFY `id_nakl_prihod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Nomer_nakl_prihod`
--
ALTER TABLE `Nomer_nakl_prihod`
  MODIFY `nom_nakl_prihod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Nomer_realiz`
--
ALTER TABLE `Nomer_realiz`
  MODIFY `nom_realiz` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `nomer_zakaz`
--
ALTER TABLE `nomer_zakaz`
  MODIFY `nom_zakaz` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Realiz`
--
ALTER TABLE `Realiz`
  MODIFY `id_dogovor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Salon`
--
ALTER TABLE `Salon`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `test_car`
--
ALTER TABLE `test_car`
  MODIFY `id_test_car` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `test_drive_zap`
--
ALTER TABLE `test_drive_zap`
  MODIFY `id_test_zap` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `Zakaz`
--
ALTER TABLE `Zakaz`
  MODIFY `id_zakaz` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Avto`
--
ALTER TABLE `Avto`
  ADD CONSTRAINT `FK_Avto_id_class` FOREIGN KEY (`id_class`) REFERENCES `Class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Avto_id_material` FOREIGN KEY (`id_material`) REFERENCES `Salon` (`id_material`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Avto_id_model` FOREIGN KEY (`id_model`) REFERENCES `Model_avto` (`id_model`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Klient`
--
ALTER TABLE `Klient`
  ADD CONSTRAINT `klient_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `Menedjer`
--
ALTER TABLE `Menedjer`
  ADD CONSTRAINT `menedjer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `Nakl_prihod`
--
ALTER TABLE `Nakl_prihod`
  ADD CONSTRAINT `FK_Nakl_prihod_id_avto` FOREIGN KEY (`id_avto`) REFERENCES `Avto` (`id_avto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Nakl_prihod_id_color` FOREIGN KEY (`id_color`) REFERENCES `Color` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Nakl_prihod_id_menedjer` FOREIGN KEY (`id_menedjer`) REFERENCES `Menedjer` (`id_menedjer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Nakl_prihod_id_salona` FOREIGN KEY (`id_salona`) REFERENCES `Avtosalon` (`id_salona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Nakl_prihod_nom_nakl_prihod` FOREIGN KEY (`nom_nakl_prihod`) REFERENCES `Nomer_nakl_prihod` (`nom_nakl_prihod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Realiz`
--
ALTER TABLE `Realiz`
  ADD CONSTRAINT `FK_Realiz_id_avto` FOREIGN KEY (`id_avto`) REFERENCES `Avto` (`id_avto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Realiz_id_color` FOREIGN KEY (`id_color`) REFERENCES `Color` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Realiz_id_klient` FOREIGN KEY (`id_klient`) REFERENCES `Klient` (`id_klient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Realiz_id_menedjer` FOREIGN KEY (`id_menedjer`) REFERENCES `Menedjer` (`id_menedjer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Realiz_nom_realiz` FOREIGN KEY (`nom_realiz`) REFERENCES `Nomer_realiz` (`nom_realiz`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `test_car`
--
ALTER TABLE `test_car`
  ADD CONSTRAINT `test_car_ibfk_1` FOREIGN KEY (`id_avto`) REFERENCES `Avto` (`id_avto`),
  ADD CONSTRAINT `test_car_ibfk_2` FOREIGN KEY (`id_salona`) REFERENCES `Avtosalon` (`id_salona`);

--
-- Ограничения внешнего ключа таблицы `test_drive_zap`
--
ALTER TABLE `test_drive_zap`
  ADD CONSTRAINT `test_drive_zap_ibfk_1` FOREIGN KEY (`id_test_car`) REFERENCES `test_car` (`id_test_car`),
  ADD CONSTRAINT `test_drive_zap_ibfk_2` FOREIGN KEY (`id_klient`) REFERENCES `Klient` (`id_klient`);

--
-- Ограничения внешнего ключа таблицы `Zakaz`
--
ALTER TABLE `Zakaz`
  ADD CONSTRAINT `FK_Zakaz_id_avto` FOREIGN KEY (`id_avto`) REFERENCES `Avto` (`id_avto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Zakaz_id_color` FOREIGN KEY (`id_color`) REFERENCES `Color` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Zakaz_id_klient` FOREIGN KEY (`id_klient`) REFERENCES `Klient` (`id_klient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Zakaz_id_menedjer` FOREIGN KEY (`id_menedjer`) REFERENCES `Menedjer` (`id_menedjer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Zakaz_nom_zakaz` FOREIGN KEY (`nom_zakaz`) REFERENCES `nomer_zakaz` (`nom_zakaz`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
