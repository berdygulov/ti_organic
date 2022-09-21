-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 21 2022 г., 11:49
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ti_organic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attachmentable`
--

CREATE TABLE `attachmentable` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachmentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachmentable_id` int(10) UNSIGNED NOT NULL,
  `attachment_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hash` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `attachments`
--

INSERT INTO `attachments` (`id`, `name`, `original_name`, `mime`, `extension`, `size`, `sort`, `path`, `description`, `alt`, `hash`, `disk`, `user_id`, `group`, `created_at`, `updated_at`) VALUES
(1, '1666887ff761c701874129722ed01a9d27b3a796', 'body-sugar-scrub.png', 'image/png', 'png', 137374, 0, '2022/09/21/', NULL, NULL, '22e6e23636873c34d778a87e6b7c6633a48898cc', 'public', 1, NULL, '2022-09-21 03:18:58', '2022-09-21 03:18:58'),
(2, '1666887ff761c701874129722ed01a9d27b3a796', 'body-sugar-scrub.png', 'image/png', 'png', 137374, 0, '2022/09/21/', NULL, NULL, '22e6e23636873c34d778a87e6b7c6633a48898cc', 'public', 1, NULL, '2022-09-21 03:24:45', '2022-09-21 03:24:45'),
(3, '1666887ff761c701874129722ed01a9d27b3a796', 'body-sugar-scrub.png', 'image/png', 'png', 137374, 0, '2022/09/21/', NULL, NULL, '22e6e23636873c34d778a87e6b7c6633a48898cc', 'public', 1, NULL, '2022-09-21 03:26:40', '2022-09-21 03:26:40'),
(4, '7efe34a4a4f5b10863f626e02e276148e7ca68d9', 'shampoo-bar.png', 'image/png', 'png', 186913, 0, '2022/09/21/', NULL, NULL, '735ff37d0ee30ea6aef2361ca671fc61fc79f4c6', 'public', 1, NULL, '2022-09-21 03:30:34', '2022-09-21 03:30:34'),
(5, '7641f416d26f0289c1bdf40e5dca089f4f7c9ae2', 'conditioner-bar.png', 'image/png', 'png', 88284, 0, '2022/09/21/', NULL, NULL, 'e9bb20383af0aec235de99a78bab544edb23d7b9', 'public', 1, NULL, '2022-09-21 03:35:22', '2022-09-21 03:35:22'),
(6, '892370bab37916ab0e9c16569d7fb6e3150cdaf4', 'chocolate-cherry.png', 'image/png', 'png', 278507, 0, '2022/09/21/', NULL, NULL, 'c205400701747a87ca9346bcf8b3d18f5dfaa897', 'public', 1, NULL, '2022-09-21 03:37:46', '2022-09-21 03:37:46'),
(7, '7d4d0daa1d2c697f515e0945a22469ddf468af12', 'strawberry-girl.png', 'image/png', 'png', 295034, 0, '2022/09/21/', NULL, NULL, '58dd4287ee128a81d019e40775ace8ad21e2f414', 'public', 1, NULL, '2022-09-21 03:39:26', '2022-09-21 03:39:26');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `excerpt` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_04_12_000000_create_orchid_users_table', 1),
(4, '2015_10_19_214424_create_orchid_roles_table', 1),
(5, '2015_10_19_214425_create_orchid_role_users_table', 1),
(6, '2016_08_07_125128_create_orchid_attachmentstable_table', 1),
(7, '2017_09_17_125801_create_notifications_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_08_31_132059_create_products_table', 1),
(11, '2022_08_31_220937_create_categories_table', 1),
(12, '2022_08_31_221037_create_category_product_table', 1),
(13, '2022_08_31_225816_add_status_col_to_products_table', 1),
(14, '2022_09_01_153540_add_description_col_to_products_table', 1),
(15, '2022_09_01_153607_add_description_col_to_products_table', 1),
(16, '2022_09_02_003109_add_novelty_col_to_products_table', 1),
(17, '2022_09_02_004216_add_excerpt_col_to_categories_table', 1),
(18, '2022_09_11_124638_create_orders_table', 1),
(19, '2022_09_20_081418_add_short_description_col_to_products_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `old_price` int(11) DEFAULT NULL,
  `thumbnail_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `novelty` tinyint(1) NOT NULL DEFAULT 0,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `old_price`, `thumbnail_id`, `created_at`, `updated_at`, `status`, `description`, `novelty`, `short_description`) VALUES
(1, 'Гидрофильный скраб с ароматом «Табак-ваниль»', 3700, NULL, 1, '2022-09-21 03:19:20', '2022-09-21 03:45:23', 1, '<p class=\"ql-align-justify\">Гидрофильный скраб деликатно удаляет омертвевшие клетки кожи, стимулирует ее обновление, оказывает эффект питательной маски. Приятные ощущения и бережное очищение достигается благодаря гидрофильной основе скраба, которая при контакте с водой превращается в ухаживающее молочко. Это молочко активно питает кожу и обеспечивает глубокое очищение пор. Не оставляет жирной пленки на коже. После этого скраба нет необходимости дополнительно применять крем, кожа после него увлажненная, очень свежая и гладкая.</p><p class=\"ql-align-justify\">При изготовлении используются только натуральные полезные для кожи растительные масла, как сафлоровое масло и масло ши. В составе сафлорового масла доминирует линолевая кислота, составляющая около 80% всей массы, при этом представлена она в достаточно редкой конъюгированной форме. Влияние сафлорового масла на кожу определяется также высоким содержанием витамина К, отвечающего за восстановление сосудов.</p><p class=\"ql-align-justify\">Кроме линолевой, жирнокислотный состав масла включает олеиновую и пальмитиновую кислоты с примесями арахиновой, стеариновой, миристиновой и линоленовой кислот, отвечающих за активное усвоение витамина Е и активность производных серотонина. Основной характеристикой сафлорового масла являются его высокие смягчающие способности, но только ими ограничивать влияние масла на состояние эпидермиса было бы большой ошибкой. </p><p class=\"ql-align-justify\">Сафлоровое масло демонстрирует мощные антиоксидантные характеристики и восстанавливающие свойства, позволяющие добиться видимого улучшения самочувствия и эстетики уже с первого применения. Демонстрирует данное масло и заживляющие способности. Благодаря доминированию линолевой кислоты данное масло является одним из основных для работы с очень сухой и чувствительной сухой кожей. Воздействие сафлорового масла направлено на смягчение кожи и нормализацию липидных функций.</p><p class=\"ql-align-justify\"><strong>Состав:</strong> Морская соль, сахар, сафлоровое масло, масло Ши, глина Рассул, спирулина, парфюмерная композиция</p>', 1, '<p>Это нестандартное уходовое средство – гидрофильный скраб с сафлоровым маслом и маслом ши, с сахарными частицами и морской солью.</p>'),
(2, 'Гидрофильный скраб с ароматом  «Удовое дерево»', 3700, NULL, 2, '2022-09-21 03:24:47', '2022-09-21 03:24:47', 1, '<p class=\"ql-align-justify\">Гидрофильный скраб деликатно удаляет омертвевшие клетки кожи, стимулирует ее обновление, оказывает эффект питательной маски. Приятные ощущения и бережное очищение достигается благодаря гидрофильной основе скраба, которая при контакте с водой превращается в ухаживающее молочко. Это молочко активно питает кожу и обеспечивает глубокое очищение пор. Не оставляет жирной пленки на коже. После этого скраба нет необходимости дополнительно применять крем, кожа после него увлажненная, очень свежая и гладкая.</p><p class=\"ql-align-justify\">При изготовлении используются только натуральные полезные для кожи растительные масла, как сафлоровое масло и масло ши. В составе сафлорового масла доминирует линолевая кислота, составляющая около 80% всей массы, при этом представлена она в достаточно редкой конъюгированной форме. Влияние сафлорового масла на кожу определяется также высоким содержанием витамина К, отвечающего за восстановление сосудов.</p><p class=\"ql-align-justify\">Кроме линолевой, жирнокислотный состав масла включает олеиновую и пальмитиновую кислоты с примесями арахиновой, стеариновой, миристиновой и линоленовой кислот, отвечающих за активное усвоение витамина Е и активность производных серотонина. Основной характеристикой сафлорового масла являются его высокие смягчающие способности, но только ими ограничивать влияние масла на состояние эпидермиса было бы большой ошибкой.</p><p class=\"ql-align-justify\">Сафлоровое масло демонстрирует мощные антиоксидантные характеристики и восстанавливающие свойства, позволяющие добиться видимого улучшения самочувствия и эстетики уже с первого применения. Демонстрирует данное масло и заживляющие способности. Благодаря доминированию линолевой кислоты данное масло является одним из основных для работы с очень сухой и чувствительной сухой кожей. Воздействие сафлорового масла направлено на смягчение кожи и нормализацию липидных функций.</p><p class=\"ql-align-justify\"><strong>Состав:</strong> Морская соль, сахар, сафлоровое масло, масло Ши, глина Рассул, спирулина, парфюмерная композиция</p><p><br></p>', 1, '<p>Это нестандартное уходовое средство – гидрофильный скраб с сафлоровым маслом и маслом ши с сахарными частицами и морской солью.</p>'),
(3, 'Гидрофильный скраб с ароматом «Жасмин»', 3700, NULL, 3, '2022-09-21 03:26:42', '2022-09-21 03:26:42', 1, '<p class=\"ql-align-justify\">Гидрофильный скраб деликатно удаляет омертвевшие клетки кожи, стимулирует ее обновление, оказывает эффект питательной маски. Приятные ощущения и бережное очищение достигается благодаря гидрофильной основе скраба, которая при контакте с водой превращается в ухаживающее молочко. Это молочко активно питает кожу и обеспечивает глубокое очищение пор. Не оставляет жирной пленки на коже. После этого скраба нет необходимости дополнительно применять крем, кожа после него увлажненная, очень свежая и гладкая.</p><p class=\"ql-align-justify\">При изготовлении используются только натуральные полезные для кожи растительные масла, как сафлоровое масло и масло ши. В составе сафлорового масла доминирует линолевая кислота, составляющая около 80% всей массы, при этом представлена она в достаточно редкой конъюгированной форме. Влияние сафлорового масла на кожу определяется также высоким содержанием витамина К, отвечающего за восстановление сосудов.</p><p class=\"ql-align-justify\">Кроме линолевой, жирнокислотный состав масла включает олеиновую и пальмитиновую кислоты с примесями арахиновой, стеариновой, миристиновой и линоленовой кислот, отвечающих за активное усвоение витамина Е и активность производных серотонина. Основной характеристикой сафлорового масла являются его высокие смягчающие способности, но только ими ограничивать влияние масла на состояние эпидермиса было бы большой ошибкой.</p><p class=\"ql-align-justify\">Сафлоровое масло демонстрирует мощные антиоксидантные характеристики и восстанавливающие свойства, позволяющие добиться видимого улучшения самочувствия и эстетики уже с первого применения. Демонстрирует данное масло и заживляющие способности. Благодаря доминированию линолевой кислоты данное масло является одним из основных для работы с очень сухой и чувствительной сухой кожей. Воздействие сафлорового масла направлено на смягчение кожи и нормализацию липидных функций.</p><p class=\"ql-align-justify\"><strong>Состав:</strong> Морская соль, сахар, сафлоровое масло, масло Ши, глина Рассул, спирулина, парфюмерная композиция</p><p><br></p>', 1, '<p>Это нестандартное уходовое средство – гидрофильный скраб с сафлоровым маслом и маслом ши с сахарными частицами и морской солью.</p>'),
(4, 'Твердый шампунь (shampoo bar)', 3500, NULL, 4, '2022-09-21 03:30:37', '2022-09-21 03:30:55', 1, '<p class=\"ql-align-justify\">В производстве нашего продукта мы не используем консерванты, парабены, красителей, токсичных сульфатов как &nbsp;ALS, SLS, SLES. Отметим преимущества твердого шампуня:</p><ul><li class=\"ql-align-justify\">Универсальный (подходит для всех типов кожи и одинаково обогащает структуры волос придавая шелковистость и легкость волосам);</li><li class=\"ql-align-justify\">Экологичный (В составе нет опасных химических веществ, а твердое состояние позволяет лучше сохранить все полезные составляющие, упаковка не пластиковая а бумажная);</li><li class=\"ql-align-justify\">Экономный (одного бруска хватит на 2-3 месяца для волос средней длины);</li><li class=\"ql-align-justify\">Удобный (несмотря на то что шампуня хватит на долго он очень легкий и удобный для путешествий и фитнеса, в легкую поместится в дамскую сумку);</li></ul><p class=\"ql-align-justify\">Состав<strong>: </strong>Кокосульфат, эльфан, масло Ши, сафлоровое масло, эфирное масло лемонграса, эфирное масло лимона, эфирное масло лаванды, д-пантенол, ароматная композиция.</p><p class=\"ql-align-justify\">Хранение<strong>.</strong> Лучше всего хранить твердый шампунь в открытой мыльнице со стоком воды или повесить на собственной веревке из джута. Это позволит шампуню быстро и полностью высохнуть перед следующим применением, что в свою очередь продлит срок службы и экономичность расходования продукта.</p><p><br></p>', 1, '<p>Твердый шампунь косметический продукт растительного происхождения для мытья волос в твердой форме.&nbsp;Твердый шампунь визуально похож на обычное мыло – такой же брусок. Если обычный шампунь примерно на 70-80% состоит из воды, а остальные 20-30% – это моющие и ухаживающие за волосами вещества. Для того чтобы долго сохранять их в жидком виде, в состав шампуня приходится добавлять консерванты. А наш абсолютно безвредный и натуральный твердый шампунь изготавливается из анионных ПАВов на основе кокосового масла. Несмотря на натуральность состава шампунь пенится очень хорошо и промывает кожу головы до легкого скрипа.&nbsp;</p>'),
(5, 'Твердый бальзам – кондиционер', 3500, NULL, 5, '2022-09-21 03:35:27', '2022-09-21 03:35:27', 1, '<p class=\"ql-align-justify\">Твердый бальзам очень экономичен и удобен. Он не занимает много места, удобно хранится. Поскольку в нём содержится большое количество активных компонентов, то его можно использовать также как маску для волос. Самое главное правильно наносить его на волосы. Так как данный кондиционер твердый, его необходимо намочить и на влажные волосы наносить массирующими движениями по всей длине волос. Легко провести куском кондиционера прямо по вымытым волосам. Не нужно намазывать его на волосы слишком сильно. Твердый бальзам-кондиционер это концентрированный продукт, так что небольшого количества, нанесенного на волосы, будет вполне достаточно. Помассировать волосы в течение 1-3 минут. Потом смыть водой. &nbsp;Для этого его нужно будет развести горячей водой. Отметим преимущества твердого бальзама-кондиционера:</p><ul><li class=\"ql-align-justify\">100% натуральный состав;</li><li class=\"ql-align-justify\">Три в одном: можно использовать как бальзам, кондиционер, маску;</li><li class=\"ql-align-justify\">Экономичность (плитки весом 55г - хватает на 35-45 раз в зависимости от длины волос);</li><li class=\"ql-align-justify\">Волосы после него не путаются и хорошо расчесываются;</li><li class=\"ql-align-justify\">Придает блеск, гладкость и эластичность (как после маски);</li><li class=\"ql-align-justify\">Удобность (очень удобно в поездках, не надо думать пропустят вас с ручной кладью или нет);</li></ul><p class=\"ql-align-justify\">Состав<strong>: </strong>BTMS, масло ши, цетеариловый спирт, сафлоровое масло, витамин Е, д-пантенол, кератин, ароматная композиция.</p><p class=\"ql-align-justify\">Хранение<strong>.</strong> Лучше всего хранить твердый кондиционер в открытой мыльнице со стоком воды или повесить на собственной веревке из джута. Это позволит кондиционеру быстро и полностью высохнуть перед следующим применением, что в свою очередь продлит срок службы и экономичность расходования продукта.</p>', 1, '<p>Что такое твердый бальзам-кондиционер для волос? Это абсолютно натуральный продукт для бережного ухода за волосами без единого грамма консервантов и вредных химикатов. Традиционные бальзамы-кондиционеры, купленные в магазине содержат смесь силиконов, искусственных лубрикантов, консерванты, воду и другие синтетические добавки. Твердый кондиционер содержит натуральные увлажняющие компоненты, натуральные экстракты и масла. Твердый кондиционер изготовлен без добавления воды, поэтому в нем нет консервантов. </p>'),
(6, 'Милкшейк - Chocolate-cherry', 2300, NULL, 6, '2022-09-21 03:38:00', '2022-09-21 03:39:35', 1, '<p class=\"ql-align-justify\">Удобно в использований в душе и во время принятий ванны, так как густую текстуру удобно мазать на тело или на мочалку, выглядит очень реалистично и напоминает съедобный милкшейк или же ягодное мороженое, а запах настоящего горького шоколада и нотки&nbsp;манящего вишневого сиропа не оставит вас равнодушным. Вы можете выбрать милкшейк в качестве ухаживающего средства для себя любимой или же в качестве подарка, интересное оформление милкшейка дарит человеку дополнительное настроение. Этот продукт сам по себе уникальный и незаменимый, так как&nbsp;сливочная текстура распределяется по телу равномерно и очищает до легкого блеска, после процедуры кожа мгновенно становится матовым и питает в себе манящий аромат, а шоколадную вставку можно использовать в качестве мыла.</p><p class=\"ql-align-justify\">Состав<strong>:</strong> мыльная основа, какао порошок пищевой, кокамидопропилбетаин 45% (анионный ПАВ), дистиллированная вода, пищевой краситель, ароматная композиция.</p>', 1, '<p>Милкшейк это абсолютно новый инновационный продукт в виде взбитого крема используется в качестве геля для душа, пенки для бритья, безе для тела. Является ультра роскошным дополнением к любой линейке продуктов или личной коллекции.</p>'),
(7, 'Милкшейк - Strawberry girl', 2300, NULL, 7, '2022-09-21 03:39:27', '2022-09-21 03:39:27', 1, '<p class=\"ql-align-justify\">Удобно в использований в душе и во время принятий ванны, так как густую текстуру удобно мазать на тело или на мочалку, выглядит очень реалистично и напоминает съедобный милкшейк или же ягодное мороженое, а запах садовой клубники не оставит вас равнодушным. Вы можете выбрать милкшейк в качестве ухаживающего средства для себя любимой или же в качестве подарка, интересное оформление милкшейка дарит человеку дополнительное настроение. Этот продукт сам по себе уникальный и незаменимый, так как&nbsp;сливочная текстура распределяется по телу равномерно и очищает до легкого блеска, после процедуры кожа мгновенно становится матовым и питает в себе манящий аромат, а клубничную вставку можно использовать в качестве мыла.</p><p class=\"ql-align-justify\">Состав<strong>:</strong> мыльная основа, какао порошок пищевой, кокамидопропилбетаин 45% (анионный ПАВ), дистиллированная вода, пищевой краситель, ароматная композиция.</p><p><br></p>', 1, '<p>Милкшейк это абсолютно новый инновационный продукт в виде взбитого крема используется в качестве геля для душа, пенки для бритья, безе для тела. Является ультра роскошным дополнением к любой линейке продуктов или личной коллекции.</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Администратор', '{\"platform.index\":true,\"platform.systems.roles\":true,\"platform.systems.users\":true,\"platform.systems.attachment\":true,\"products.index\":true,\"products.create\":true,\"products.edit\":true,\"products.delete\":true,\"products.import\":true,\"products.export\":true,\"products.categories.index\":true,\"products.categories.create\":true,\"products.categories.edit\":true,\"products.categories.delete\":true,\"products.categories.import\":true,\"products.categories.export\":true}', '2022-09-21 03:11:43', '2022-09-21 03:11:43'),
(2, 'employee', 'Сотрудник', '{\"platform.index\":true,\"platform.systems.attachment\":true,\"products.index\":true,\"products.create\":true,\"products.edit\":true,\"products.delete\":true,\"products.categories.index\":true,\"products.categories.create\":true,\"products.categories.edit\":true,\"products.categories.delete\":true}', '2022-09-21 03:11:43', '2022-09-21 03:11:43');

-- --------------------------------------------------------

--
-- Структура таблицы `role_users`
--

CREATE TABLE `role_users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$58I8TSwPpZQMTqNTWGsIb.cNOkB7lvZHIt.eqfod1SdGh5x9QLdZ.', NULL, '2022-09-21 03:11:43', '2022-09-21 03:11:43', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  ADD KEY `attachmentable_attachment_id_foreign` (`attachment_id`);

--
-- Индексы таблицы `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Индексы таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ограничения внешнего ключа таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
