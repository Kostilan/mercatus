

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 40, NULL, NULL),
(2, 42, NULL, NULL),
(3, 44, NULL, NULL),
(4, 46, NULL, NULL),
(5, 48, NULL, NULL),
(6, 50, NULL, NULL),
(7, 52, NULL, NULL),
(8, 54, NULL, NULL),
(9, 56, NULL, NULL),
(10, 58, NULL, NULL),
(11, 60, NULL, NULL),
(12, 62, NULL, NULL),
(13, 64, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
